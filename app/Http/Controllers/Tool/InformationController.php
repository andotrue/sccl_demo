<?php
namespace App\Http\Controllers\Tool;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Information;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class InformationController extends Controller {

	public $functionName = "お知らせ管理";
	public $functionSubName = "";

	public function __construct()
	{
		//認証をさせる場合
		//$this->middleware('auth');
		//$this->middleware('redauth.tool');
		//$this->middleware('auth.tool');
	}

	public function setFunctionName()
	{
		$this->data['functionName'] = $this->functionName;
		$this->data['functionSubName'] = $this->functionSubName;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$informations = Information::orderBy('id', 'desc')->paginate(100);
		$stores = Store::orderBy('id')->pluck('storename','id');

		$this->data = compact('informations','stores');

		$this->setFunctionName();

		return view('tool.information.index', $this->data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$stores = Store::orderBy('id')->pluck('storename','id');
		$this->data = compact('stores');

		$this->functionSubName = "作成";
		$this->setFunctionName();

		return view('tool.information.create', $this->data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$file_uploads = $this->file_upload($request, "pdf", 99);exit;
		//var_dump($request->file("pdf"));exit;

		$inputs = $request->all();

		/* resources/lang/jp/validation.phpを使うので不要
		$messages = [
			'required'=> ':attributeは必須入力です。',
			'same'    => ':attributeと:otherは一致している必要があります。',
			'size'    => ':attributeはぴったり:sizeである必要があります。',
			'between' => ':attributeはminから:maxの間である必要があります。',
			'in'      => ':attribute以降のタイプのどれかである必要があります。 :values',
		];
		*/
		$rules = [
			'title' => 'required|max:255',
			'open_flg' => 'required',
			'open_date' => 'required|date_format:Y/m/d H:i:s',
			'close_date' => 'date_format:Y/m/d H:i:s|after:open_date',
			'pdf' => 'mimes:pdf|max:3000',
			'pdf_title1' => 'max:50',
			'pdf_title2' => 'max:50',
			'pdf_title3' => 'max:50',
			//'attachment'    => 'required_if:requestType,sick|mimes:pdf,jpg,png,gif,jpeg|max:512',
			//'article' => 'required',
		];
		//$this->validate($request, $rules);


		//validation
		$validation = \Validator::make($inputs,$rules);

		//if fails
		if($validation->fails())
		{
			return redirect()->back()->withErrors($validation->errors())->withInput();
		}

		$information = new Information();
		$information->title = $request->input("title");
		$information->sub_title = $request->input("sub_title");
		$information->open_flg = $request->input("open_flg");
        $information->open_date = $request->input("open_date");
        $information->close_date = $request->input("close_date")? $request->input("close_date") : null;
        $information->store_id = $request->input("store_id");
        $information->article = $request->input("article");
        $information->created_tool_user_id = \Auth::user()->id;
        $information->updated_tool_user_id = \Auth::user()->id;

		$information->save();
		$insert_id = $information->id;
		//echo "insert id : " . $insert_id;

		//新規作成したレコードに対してPDF関連ファイルの更新を行う
		$file_uploads = $this->file_upload($request, "pdf", $insert_id);
		$information = Information::findOrFail($insert_id);
		$information->pdffile_names = $file_uploads[1];
		$information->save();

		return redirect()->route('information.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$information = Information::findOrFail($id);
		$stores = Store::orderBy('id')->pluck('storename','id');

		$this->data = compact('information');
		$this->functionSubName = "View";
		$this->setFunctionName();

		return view('tool.information.show', $this->data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$information = Information::findOrFail($id);
		$stores = Store::orderBy('id')->pluck('storename','id');

		$this->data = compact('information', 'stores');

		$this->functionSubName = "編集";
		$this->setFunctionName();

		return view('tool.information.edit', $this->data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//var_dump($request->file("pdf1"));
		//var_dump($request->input("hd_pdf1"));
		//exit;

		$information = Information::findOrFail($id);

		$rules = [
			'title' => 'required|max:255',
			'open_flg' => 'required',
			'open_date' => 'required|date_format:Y/m/d H:i:s',
			'close_date' => 'date_format:Y/m/d H:i:s|after:open_date',
			//'article' => 'required',
			'pdf' => 'mimes:pdf|max:3000',
		];
		$this->validate($request, $rules);

		$information->title = $request->input("title");
		$information->sub_title = $request->input("sub_title");
		$information->open_flg = $request->input("open_flg");
        $information->open_date = $request->input("open_date");
        $information->close_date = $request->input("close_date")? $request->input("close_date") : null;
        $information->store_id = $request->input("store_id");
        $information->article = $request->input("article");
        //$information->created_tool_user_id = \Auth::user()->id;
        $information->updated_tool_user_id = \Auth::user()->id;

		//PDF関連ファイルの更新を行う
        $file_uploads = $this->file_upload($request, "pdf", $id, "update");
		$information->pdffile_names = $file_uploads[1];

		\DB::connection()->enableQueryLog();

		//処理
		$information->save();
		//echo "<pre>";var_dump(\DB::getQueryLog());echo "<pre>";exit;

		return redirect()->route('information.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$information = Information::findOrFail($id);
		$information->delete();

		return redirect()->route('information.index')->with('message', 'Item deleted successfully.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function copy($id)
	{
		//echo $id;exit;

		$information = Information::find($id);
		$src_title = $information->title;
		$new_information = $information->replicate();
		$new_information->title = $src_title.'～コピー';
		$new_information->save();
		//$information = Information::findOrFail($id);
		//$information->delete();

		return redirect()->route('information.index')->with('message', 'Item Copy successfully.');
	}


	/*
	 * ファイルのアップロード
	 */
	public function file_upload($request, $formname = "", $insert_id = null, $func = "")
	{
		$max_filecount = 3;
		$ret = array();
		if($formname && $insert_id){

			$filedata = array();
			for($i=1; $i<=$max_filecount; $i++){
				$ufiles = $request->file($formname . $i);
				$hd_ufiles = $request->input("hd_".$formname . $i);
				$pdf_title = $request->input("pdf_title".$i);

				echo "$i / func:$func<br>";
				echo "hidden pdf / ";var_dump($hd_ufiles);echo "<br>";
				if($func == "update" && $ufiles == null){
					echo "file / ";var_dump($ufiles);echo "<br>";
					$hd_ufile = @json_decode($hd_ufiles, true);
					//変更なし
					if(isset($hd_ufile)){
						$filedata[] = array(
								"filename"=>$hd_ufile['filename'],
								"mimetype"=>$hd_ufile['mimetype'],
								"filesize"=>$hd_ufile['filesize'],
								"pdftitle"=>$pdf_title,
						);
					}
					//削除設定されたばあい
					else{

					}
					echo "<hr>";
					continue;
				}
				if($ufiles){
					foreach($ufiles as $ufile){
						if ($ufile->isValid()) {
							$filename = $ufile->getClientOriginalName();
							$mimetype = $ufile->getMimeType();
							$filesize = $ufile->getClientSize();
							echo "file / ";var_dump($ufile);echo "<br>";
							$destinationPath = base_path()."/public/pdf/".$insert_id;
							$ufile->move($destinationPath,$filename);
							$filedata[] = array(
											"filename"=>$filename,
											"mimetype"=>$mimetype,
											"filesize"=>$filesize,
											"pdftitle"=>$pdf_title,
										);
						}
						echo "<hr>";
					}
				}
			}
			if($filedata){
				//var_dump($filenames);echo "<br>";
				$ret[0] = $ufiles;
				$filenamesJ = json_encode($filedata);
				echo "filenamesJ:" . $filenamesJ;
				echo "<hr>";
				$ret[1] = $filenamesJ;
				return $ret;
			}
			else{
				return null;
			}
		}
		else{
			return null;
		}
	}

}
