@extends('tool.common.layout')

@section('css')
	<link type="text/css" rel="stylesheet" href="/css/jquery.filthypillow/jquery.filthypillow.css" />

	<link type="text/css" rel="stylesheet" href="/css/jquery.filer/jquery.filer.css" />
	<link type="text/css" rel="stylesheet" href="/css/jquery.filer/jquery.filer-dragdropbox-theme.css" />
@endsection

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> {{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }} #{{$information->id}}</h1>
 		<div>
		    <a class="btn" href="{{ route('information.index') }}"><span class="glyphicon glyphicon-backward"></span> 戻る</a>
		</div>
    </div>
@endsection

@section('content')
    @include('error')
    <div class="row">
		<form action="{{ route('information.update', $information->id) }}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="col-md-8">
			<div class="form-group @if($errors->has('title')) has-error @endif">
				<label for="title-field">タイトル <span class="btn-xs btn-danger">必須</span></label>
				<input type="text" id="title-field" name="title" class="form-control" value="{{ is_null(old("title")) ? $information->title : old("title") }}"/>
			   @if($errors->has("title"))
			    <span class="help-block">{{ $errors->first("title") }}</span>
			   @endif
			</div>

			<div class="form-group @if($errors->has('sub_title')) has-error @endif">
				<label for="sub_title-field">サブタイトル <span class="btn-xs btn-danger">必須</label>
				<input type="text" id="sub_title-field" name="sub_title" class="form-control" value="{{ is_null(old("sub_title")) ? $information->sub_title : old("sub_title") }}"/>
			   @if($errors->has("sub_title"))
			    <span class="help-block">{{ $errors->first("sub_title") }}</span>
			   @endif
			</div>

			<div class="form-group @if($errors->has('store_id')) has-error @endif">
			   <label for="store_id-field">施設 <span class="btn-xs btn-danger">必須</span></label>
				{{Form::select('store_id', $stores, is_null(old("store_id")) ? $information->store_id : old("store_id"), array('class'=>'form-control'))}}
			   @if($errors->has("store_id"))
			    <span class="help-block">{{ $errors->first("store_id") }}</span>
			   @endif
			</div>

			<div class="form-group @if($errors->has('article')) has-error @endif">
			   <label for="article-field">記事</label>
				<textarea class="form-control" id="article-field" rows="12" name="article">{{ is_null(old("article")) ? $information->article : old("article") }}</textarea>
			   @if($errors->has("article"))
			    <span class="help-block">{{ $errors->first("article") }}</span>
			   @endif
			</div>

			<?php
			$pdffile_datas = @json_decode($information->pdffile_names, true);
			$cnt = 3;
			for($i=1; $i<=$cnt; $i++){
				$hd_pdf = "";
				$pdf_title = "";
				if(isset($pdffile_datas[$i-1])){
					$hd_pdf = json_encode($pdffile_datas[$i-1]);
					$pdf_title = @$pdffile_datas[$i-1]['pdftitle'];
				}
			?>
			<div class="row">
				<div class="col-md-7 col-xs-12">
					<div class="form-group @if($errors->has("pdf".$i)) has-error @endif">
					   <label for="pdf_<?php echo $i; ?>-field">PDFファイル<?php echo $i; ?></label>
					      <input type="file" name="pdf<?php echo $i; ?>" id="filer_input<?php echo $i; ?>" multiple="multiple" >
					       @if($errors->has("pdf".$i))
					        <span class="help-block">{{ $errors->first("pdf<?php echo $i; ?>") }}</span>
					       @endif
					      <input type="hidden" id="hd_pdf<?php echo $i; ?>-field" name="hd_pdf<?php echo $i; ?>"
					      			value="{{ is_null(old("hd_pdf".$i)) ? $hd_pdf : old("hd_pdf".$i) }}"/>
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group @if($errors->has("pdf_title".$i)) has-error @endif">
						<label for="pdf_title<?php echo $i; ?>-field">PDFファイルタイトル<?php echo $i; ?></label>
							<input type="text" id="pdf_title<?php echo $i; ?>-field" name="pdf_title<?php echo $i; ?>"
 					      			value="{{ is_null(old("pdf_title".$i)) ? $pdf_title : old("pdf_title".$i) }}"/>
							@if($errors->has("pdf_title".$i))
 					        <span class="help-block">{{ $errors->first("pdf_title<?php echo $i; ?>") }}</span>
				       		@endif
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>

		<div class='col-md-4'>
			<div class="form-group @if($errors->has('open_flg')) has-error @endif">
			    <label for="open_flg-field">公開状態 <span class="btn-xs btn-danger">必須</span></label>
			    {{Form::select('open_flg', config('const.openFlg'), is_null(old("open_flg")) ? $information->open_flg : old("open_flg"), array('class'=>'form-control'))}}
			   @if($errors->has("open_flg"))
			    <span class="help-block">{{ $errors->first("open_flg") }}</span>
			   @endif
			</div>

			<div class="form-group @if($errors->has('open_date')) has-error @endif">
			   <label for="open_date-field">掲載開始日 <span class="btn-xs btn-danger">必須</span></label>
				<input type="text" id="open_date-field" name="open_date" class="form-control filthypillow-1" value="{{ is_null(old("open_date")) ? $information->open_date : old("open_date") }}"/>
			   @if($errors->has("open_date"))
			    <span class="help-block">{{ $errors->first("open_date") }}</span>
			   @endif
			   <label for="open_date-field">掲載終了日 </label>
				<input type="text" id="close_date-field" name="close_date" class="form-control filthypillow-2" value="{{ is_null(old("close_date")) ? $information->close_date : old("close_date") }}"/>
			   @if($errors->has("close_date"))
			    <span class="help-block">{{ $errors->first("close_date") }}</span>
			   @endif
			</div>
		</div>

        <div class='col-md-12'>
			<div class="well well-sm">
			    <button type="submit" class="btn btn-primary">Save</button>
			    <a class="btn btn-link pull-right" href="{{ route('information.index') }}"><i class="glyphicon glyphicon-backward"></i>  戻る</a>
			</div>
		</div>
		</form>
	</div>
@endsection

@section('scripts')
	<script charset="UTF-8" type="text/javascript" src="/js/moment.js"></script>
	<script charset="UTF-8" type="text/javascript" src="/js/jquery.filthypillow/jquery.filthypillow_custom.js"></script>

	<script charset="UTF-8" type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>

	<script src="/js/jqueryfiler/jquery.filer.min.js" type="text/javascript"></script>

	<!-- -------------------------------開始日付 -->
	<script type="text/javascript">
		var $fp = $( ".filthypillow-1" ),
		now = moment( ).subtract( "seconds", 1 );

		$fp.filthypillow( {
			minDateTime: function( ) {
				return moment( ).subtract( "days", 3650 );
			},
			startStep: "month",
			steps: [ "year", "month", "day", "hour", "minute", "second" ],
			initialDateTime: function( m ) {
				$today = moment().format('YYYY/MM/DD 00:00:00');
				//return "2015-01-01 00:00:00";
				//return moment().format('YYYY/MM/DD 00:00:00');
				//return '{{ is_null(old("open_date")) ? $information->open_date : "moment().format('YYYY/MM/DD 00:00:00')" }}';
				//return '{{ is_null(old("open_date")) ? $information->open_date : old("open_date") }}';
				return <?php echo is_null(old("open_date")) ? "'".$information->open_date."'" : (old("open_date")? "'".old("open_date")."'" : "'".$information->open_date."'") ?>;
			},
		    calendar: {
				isPinned: false,
				saveOnDateSelect: true
			},
		} );

		$fp.on( "focus", function( ) {
			$fp.filthypillow( "show" );
		} );

		$fp.on( "fp:save", function( e, dateObj ) {
			$fp.val( dateObj.format( "YYYY/MM/DD HH:mm:ss" ) );
			$fp.filthypillow( "hide" );
		    //$fp.val( dateObj.format( "MMM DD YYYY hh:mm A" ) );
		    //$fp.filthypillow( "hide" );
			//console.info( dateObj );

		} );
	</script>

	<!-- -------------------------------終了日付 -->
	<script type="text/javascript">
		var $fp2 = $( ".filthypillow-2" ),
			now = moment( ).subtract( "seconds", 1 );

		$fp2.filthypillow( {
			minDateTime: function( ) {
				return moment( ).subtract( "days", 3650 );
			},
			startStep: "month",
			steps: [ "year", "month", "day", "hour", "minute", "second" ],
			initialDateTime: function( m ) {
				$today = moment().format('YYYY/MM/DD 00:00:00');
				//return moment().add(1,'years').format('YYYY-MM-DD 00:00:00');
				//return moment().format('YYYY/MM/DD 00:00:00');
				//return '{{ is_null(old("close_date")) ? ($information->close_date)? "$information->close_date" : '$today' : "old('close_date')" }}';
				return <?php echo is_null(old("close_date")) ? (($information->close_date)? "'".$information->close_date."'" : '$today') : (old("close_date")? "'".old("close_date")."'" : "'".$information->close_date."'") ?>;
			},
		} );

		$fp2.on( "focus", function( ) {
			$fp2.filthypillow( "show" );
		} );

		$fp2.on( "fp:save", function( e, dateObj ) {
			$fp2.val( dateObj.format( "YYYY/MM/DD HH:mm:ss" ) );
			$fp2.filthypillow( "hide" );
		} );
	</script>

	<!-- -------------------------------記事 (tinymce editor) -->
	<script type="text/javascript">
		tinymce.init({
			menubar: false,
			language : "ja",
			selector: "textarea",
		    theme: "modern",
			plugins: [
				"pagebreak layer directionality noneditable visualchars nonbreaking",
				//"template",
				"textcolor colorpicker textpattern",
				"advlist autolink lists link image charmap preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime table contextmenu paste image jbimages",
			],

			toolbar1:
				"undo redo | styleselect | forecolor backcolor emoticons | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link jbimages | preview media",
			toolbar2:
				"",

			relative_urls: false,
		});
	</script>

	<!-- -------------------------------PDF -->
	<script type="text/javascript">
	$(document).ready(function() {
	<?php
		$pdffile_datas = @json_decode($information->pdffile_names, true);
			$cnt = 3;
			for($i=1; $i<=$cnt; $i++){
				$hd_pdf = "";
				if(isset($pdffile_datas[$i-1])){
					$hd_pdf = json_encode($pdffile_datas[$i-1]);
				}

	?>
		$("#hd_pdf<?php echo $i;?>-field").val('<?php echo $hd_pdf; ?>');
	    $('#filer_input<?php echo $i; ?>').filer({
		    //limit: 3,
		    maxSize: 3,
		    //addMore: true,
		    extensions: ['pdf'],
		    //changeInput: true,
		    showThumbs: true,
			captions: {
				removeConfirmation: "削除します。よろしいですか？",
				errors: {
					filesType: "ファイル形式は、pdfファイルのみです。",
				}
			},
			onRemove: false,
			<?php
			if(isset($pdffile_datas[$i-1])){
			?>
			files: [
				{
					name: '<?php echo $pdffile_datas[$i-1]["filename"]; ?>',
					size: <?php echo $pdffile_datas[$i-1]["filesize"]; ?>,
					type: '<?php echo $pdffile_datas[$i-1]["mimetype"]; ?>',
					file: '/pdf/<?php echo $information->id;?>/<?php echo $pdffile_datas[$i-1]["filename"];?>',
				}
            ],
            onRemove: function (itemEl, file, id, listEl, boxEl, newInputEl, inputEl) {
                //var filerKit = inputEl.prop("jFiler"),
                //       file_name = filerKit.files_list[id].name;

                //$.post('./php/remove_file.php', {file: file_name});
 				$("#hd_pdf<?php echo $i;?>-field").val("");
                //alert($("#hd_pdf<?php echo $i;?>-field").val());
            },
            <?php
            }
            ?>


		});
		<?php
		}
		?>
	});
	</script>



@endsection
