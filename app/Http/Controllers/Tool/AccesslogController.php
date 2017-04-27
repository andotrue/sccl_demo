<?php
namespace App\Http\Controllers\Tool;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Accesslog;
use App\Store;
use Illuminate\Http\Request;

class AccesslogController extends Controller {

	public $functionName = "効果測定";
	public $functionSubName = "";

	public function __construct()
	{
		//認証をさせる場合
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
		$accesslogs = Accesslog::orderBy('id', 'asc')->paginate(25);
		$stores = Store::orderBy('id')->pluck('storename','id');

		$this->data = compact('accesslogs','stores');

		$this->setFunctionName();

		return view('tool.accesslog.index', $this->data);
	}

	/*
	* コンテンツデータ
	*/
	public function forContents(Request $request, $no)
	{
		$this->functionSubName = "コンテンツデータ";
		
		\DB::connection()->enableQueryLog();
		
		//インプットパラメータ取得
		$target_month = !is_null($request->input("target_month"))? $request->input("target_month") : date("Ym");
		$store_id = !is_null($request->input("store_id"))? $request->input("store_id") : \Auth::user()->store_id;
		//echo $target_month ."/";
		//echo $store_id."/";
		
    	//施設マスタ取得（プルダウン用）
		//$stores = Store::orderBy('id')->pluck('storename','id');
		$stores = Store::where('id','!=','1')->orderBy('id')->pluck('storename','id');
		$stores->prepend("全て", "all");
		
		//年月データの取得（プルダウン用、アクセスデータ保持してる年月のみ）
		$target_months = \DB::table('accesslogs')
						->select(
							\DB::raw("DATE_FORMAT(logdate,'%Y%m') as month"),
							\DB::raw("DATE_FORMAT(logdate,'%Y年%m月') as month2")
						)
						->groupBy(\DB::raw("DATE_FORMAT(logdate,'%Y%m')"))
						->orderBy(\DB::raw("DATE_FORMAT(logdate,'%Y%m')"))
						->pluck('month2','month');
		//echo "<pre>";var_dump($target_months);echo "</pre>";
		
		//対象ユーザーIDの取得
		$userIds = \DB::table('users')
						->select('id')
						->where('store_id', '=', $store_id)
						->pluck('id');
		//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";

		//タイプ属性設定
    	$types = array("pageviews", "uniqueDimensionCombinations");

		$gr_days = array();
		$accesslogs_sesssion = array();
		$accesslogs_pagetitle = array();
    	if($no == "1"){
    		//グラフ用日付配列作成
			$st_base = strtotime($target_month . "01");
			$st = $st_base;
			$d = 1;
			while($target_month == date('Ym',$st)){
				$gr_days[date('Y-m-d',$st)] = date('d',$st);
				$st = $st_base + (60 * 60 * 24 * $d);
				$d++;
			}
			//echo "<pre>";var_dump($gr_days);echo "</pre>";
    		
			//アクセスログの取得
			foreach($types as $type)
	    	{
	    		if($store_id=="all"){
		    		$accesslogs[$type] = Accesslog::
									select(\DB::raw('logdate, sum(count) as count'))
									->where([
										[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
										['type', '=', $type],
									])
									->groupBy("logdate")
									->orderBy('logdate', 'asc')
									//->get();
									->pluck('count', 'logdate');
	    		}
	    		else{
	    			$accesslogs[$type] = Accesslog::
					    			select(\DB::raw('logdate, sum(count) as count'))
					    			->whereIn('userId', $userIds)
					    			->where([
					    					[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
					    					['type', '=', $type],
					    			])
					    			->groupBy("logdate")
					    			->orderBy('logdate', 'asc')
					    			//->get();
					    			->pluck('count', 'logdate');
	    		}
				//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";
	    	}
    	}
    	elseif($no == "2"){
			//アクセスログの取得
    		foreach($types as $type)
    		{
    			//基本情報　＆　ページビューデータ取得
	    		if($type == "pageviews"){
					//$accesslogs[$type] = Accesslog::
	    			if($store_id=="all"){
		    			$accesslogs = Accesslog::
										select(\DB::raw('id, pageTitle, pagePath, sum(count) as count'))
										->where([
											[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
											['type', '=', $type],
										])
										->groupBy("pagePath")
										->orderBy('count', 'desc')
										->paginate(50);
										//->get();
	    			}
	    			else{
		    			$accesslogs = Accesslog::
										select(\DB::raw('id, pageTitle, pagePath, sum(count) as count'))
										->whereIn('userId', $userIds)
										->where([
											[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
											['type', '=', $type],
										])
										->groupBy("pagePath")
										->orderBy('count', 'desc')
										->paginate(50);
										//->get();
	    			}
	    		}
    			if($type == "uniqueDimensionCombinations"){
    				foreach($accesslogs as $v){
						//echo $v->pagePath . "<br>";
    					//セッション数取得
    					if($store_id=="all"){
	    					$accesslogs_sesssion[$v->pagePath] = Accesslog::
										select(\DB::raw('pageTitle, pagePath, sum(count) as count'))
										->where([
												[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
												['type', '=', $type],
												['pagePath', '=', $v->pagePath],
										])
										->groupBy("pagePath")
										->pluck('count');
    					}
    				    else{
	    					$accesslogs_sesssion[$v->pagePath] = Accesslog::
										select(\DB::raw('pageTitle, pagePath, sum(count) as count'))
										->whereIn('userId', $userIds)
										->where([
												[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
												['type', '=', $type],
												['pagePath', '=', $v->pagePath],
										])
										->groupBy("pagePath")
										->pluck('count');
    					}
    					//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";

						//最新のページタイトル
    					$accesslogs_pagetitle[$v->pagePath] = Accesslog::
									select(\DB::raw('logdate, pageTitle'))
									->where([
											['pagePath', '=', $v->pagePath],
									])
									->groupBy("logdate")
									->OrderBy("logdate","desc")
									->first();
									//->pluck('pageTitle');
				    	//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";
				    	//echo "<pre>";var_dump(count($accesslogs_pagetitle[$v->pagePath]));echo "</pre>";
						//echo "<pre>";var_dump($accesslogs_pagetitle[$v->pagePath]->pageTitle);echo "</pre>";
    				}
				}
    		}
    	}
    	//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";
    	//echo "<pre>";var_dump($accesslogs_pagetitle["/"][0]);echo "</pre>";
    	//exit;
    	
    	$this->data = compact('accesslogs','accesslogs_sesssion','accesslogs_pagetitle','stores','target_months');

    	$this->data["store_id"] = $store_id;
		$this->data["target_month"] = $target_month;
		$this->data["gr_days"] = $gr_days;
		$this->data["no"] = $no;
		
		$this->setFunctionName();
		
		return view("tool.accesslog.forcontents".$no, $this->data);
	}
	
	
	/*
	 * 店舗閲覧データ
	 */
	public function forStore(Request $request)
	{
		$this->functionSubName = "店舗閲覧データ";
		
		\DB::connection()->enableQueryLog();
		
		//インプットパラメータ取得
		$target_month = !is_null($request->input("target_month"))? $request->input("target_month") : date("Ym");
		$store_id = !is_null($request->input("store_id"))? $request->input("store_id") : \Auth::user()->store_id;
		//echo $target_month ."/";
		//echo $store_id."/";
		
    	//施設マスタ取得（プルダウン用）
		//$stores = Store::orderBy('id')->pluck('storename','id');
		$stores = Store::where('id','!=','1')->orderBy('id')->pluck('storename','id');
		$stores->prepend("全て", "all");
		$stores_view = Store::orderBy('id')->pluck('storename','id');
		
		
		//年月データの取得（プルダウン用、アクセスデータ保持してる年月のみ）
		$target_months = \DB::table('accesslogs')
						->select(
							\DB::raw("DATE_FORMAT(logdate,'%Y%m') as month"),
							\DB::raw("DATE_FORMAT(logdate,'%Y年%m月') as month2")
						)
						->groupBy(\DB::raw("DATE_FORMAT(logdate,'%Y%m')"))
						->orderBy(\DB::raw("DATE_FORMAT(logdate,'%Y%m')"))
						->pluck('month2','month');
		//echo "<pre>";var_dump($target_months);echo "</pre>";
		
		//対象ユーザーIDの取得
		$userIds = \DB::table('users')
						->select('id')
						->where('store_id', '=', $store_id)
						->pluck('id');
		//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";

		//タイプ属性設定
    	$types = array("pageviews", "uniqueDimensionCombinations");

		$gr_days = array();
		$accesslogs_sesssion = array();
		$accesslogs_pagetitle = array();

		//アクセスログの取得
		foreach($types as $type)
		{
		    if($type == "pageviews"){
		    	if($store_id=="all"){
		    		$accesslogs[$type] = Accesslog::
									select(\DB::raw('userId, store_id, shop_name, sum(count) as count'))
									->join('users', 'userId', '=', 'users.id')
									->where([
										[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
										['type', '=', $type],
									])
									->groupBy("userId")
									->orderBy('count', 'desc')
									//->get();
									//->pluck('count', 'userId');
									->paginate(30);
		    	}
		    	else{
					$accesslogs[$type] = Accesslog::
									select(\DB::raw('userId, store_id, shop_name, sum(count) as count'))
									->join('users', 'userId', '=', 'users.id')
									->whereIn('userId', $userIds)
									->where([
										[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
										['type', '=', $type],
									])
									->groupBy("userId")
									->orderBy('count', 'desc')
									//->get();
									//->pluck('count', 'userId');
									->paginate(30);
		    	}
		    	//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";
		    }
  			if($type == "uniqueDimensionCombinations"){
				foreach($accesslogs["pageviews"] as $v){
					//セッション数取得
					$accesslogs_sesssion[$v->userId] = Accesslog::
								select(\DB::raw('sum(count) as count'))
								->where([
										[\DB::raw("DATE_FORMAT(logdate,'%Y%m')"), '=', $target_month],
										['type', '=', $type],
										['userId', '=', $v->userId],
								])
								->groupBy("userId")
								->pluck('count');
			    	//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";
				}
			}
		}

    	//echo "<pre>";var_dump(\DB::getQueryLog());echo "</pre>";
    	//echo "<pre>";var_dump($accesslogs_pagetitle);echo "</pre>";
    	//echo "<pre>";var_dump($accesslogs_pagetitle["/"][0]);echo "</pre>";
    	//exit;
    	
    	$this->data = compact('accesslogs','accesslogs_sesssion','stores','target_months','stores_view');

    	$this->data["store_id"] = $store_id;
		$this->data["target_month"] = $target_month;
		$this->data["gr_days"] = $gr_days;
		
		$this->setFunctionName();
		
		return view("tool.accesslog.forstore", $this->data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$accesslog = Accesslog::findOrFail($id);

		$this->data = compact('accesslog');
		$this->functionSubName = "View";
		$this->setFunctionName();

		return view('tool.accesslog.show', $this->data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$accesslog = Accesslog::findOrFail($id);
		$stores = Store::orderBy('id')->pluck('storename','id');

		$this->data = compact('accesslog','stores');
		$this->functionSubName = "編集";
		$this->setFunctionName();

		return view('tool.accesslog.edit', $this->data);

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
		$accesslog = Accesslog::findOrFail($id);

		$rules = [
			'pageTitle' => 'max:255',
		];
		$this->validate($request, $rules);

		$accesslog->pageTitle = $request->input("pageTitle");

		$accesslog->save();

		return redirect()->route('accesslog.index')->with('message', 'Item updated successfully.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$accesslog = Accesslog::findOrFail($id);
		$accesslog->delete();

		return redirect()->route('accesslog.index')->with('message', 'Item deleted successfully.');
	}

}
