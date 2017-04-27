@extends('tool.common.layout')

@section('css')
	<link type="text/css" rel="stylesheet" href="/css/jquery.filthypillow/jquery.filthypillow.css" />
	<!--
	<link type="text/css"  rel="stylesheet"href="//cdn.quilljs.com/1.0.6/quill.snow.css" />
	<link type="text/css"  rel="stylesheet"href="//cdn.quilljs.com/1.0.6/quill.bubble.css" />
	<link type="text/css"  rel="stylesheet"href="//cdn.quilljs.com/1.0.6/quill.core.css" />
	 -->

	<!--<link href="/jQuery.filer-1.3.0/css/jquery.filer.css" rel="stylesheet"> -->
	<link type="text/css" rel="stylesheet" href="/css/jquery.filer/jquery.filer.css" />
	<link type="text/css" rel="stylesheet" href="/css/jquery.filer/jquery.filer-dragdropbox-theme.css" />
@endsection

@section('header')
    <div class="page-header">
        <h1><span class="glyphicon glyphicon-align-justify"></span>{{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }}</h1>
 		<div>
		    <a class="btn" href="{{ route('information.index') }}"><span class="glyphicon glyphicon-backward"></span> 戻る</a>
		</div>
    </div>
@endsection

@section('content')
    @include('error')

    <!-- Create the editor container -->
    <div class="row">
		<form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-md-8">
			<div class="form-group @if($errors->has('title')) has-error @endif">
			    <label for="title-field">タイトル <span class="btn-xs btn-danger">必須</span></label>
			    <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}" required />
			       @if($errors->has("title"))
			        <span class="help-block">{{ $errors->first("title") }}</span>
			       @endif
			</div>

			<div class="form-group @if($errors->has('sub_title')) has-error @endif">
			    <label for="title-field">サブタイトル</label>
			    <input type="text" id="sub_title-field" name="sub_title" class="form-control" value="{{ old("sub_title") }}"/>
			       @if($errors->has("sub_title"))
			        <span class="help-block">{{ $errors->first("sub_title") }}</span>
			       @endif
			</div>

			<div class="form-group @if($errors->has('store_id')) has-error @endif">
			   <label for="store_id-field">施設 <span class="btn-xs btn-danger">必須</span></label>
				{{Form::select('store_id', $stores, old("store_id"), array('class'=>'form-control'))}}
			</div>

			<!--------------------------------記事 (tinymce editor)-->
			<div class="form-group @if($errors->has('article')) has-error @endif">
			   <label for="article-field">記事</label>
			    <textarea class="form-control" id="article-field" rows="12" name="article">{{ old("article") }}</textarea>
			       @if($errors->has("article"))
			        <span class="help-block">{{ $errors->first("article") }}</span>
			       @endif
			</div>
			<!--
			//-------------------------------記事 (Quill editor)
			<div id="editor-container"></div>
			 -->

			<?php
			$cnt = 3;
			for($i=1; $i<=$cnt; $i++){
			?>
			<div class="row">
			<div class="col-md-7 col-xs-12">
				<div class="form-group @if($errors->has("pdf".$i)) has-error @endif">
				   <label for="pdf1-field">PDFファイル<?php echo $i; ?></label>
				      <input type="file" name="pdf<?php echo $i; ?>" id="filer_input<?php echo $i; ?>" multiple="multiple" >
				       @if($errors->has("pdf".$i))
				        <span class="help-block">{{ $errors->first("pdf<?php echo $i; ?>") }}</span>
				       @endif
				</div>
			</div>
			<div class="col-md-5">
				<label for="pdf1-field">PDFファイルタイトル<?php echo $i; ?></label>
					<input type="text" name="pdf_title<?php echo $i; ?>" id="pdf_title<?php echo $i; ?>" class="form-control">
					@if($errors->has("pdf_title".$i))
					 <span class="help-block">{{ $errors->first("pdf_title<?php echo $i; ?>") }}</span>
					@endif
			</div>
			</div>
			<?php
			}
			?>

		</div>

		<div class="col-md-4">
			<div class="form-group @if($errors->has('open_flg')) has-error @endif">
			   <label for="open_flg-field">公開状態 <span class="btn-xs btn-danger">必須</span></label>
			   {{Form::select('open_flg', config('const.openFlg'), old("open_flg"), array('class'=>'form-control'))}}
			   <!--
				<input type="text" id="open_flg-field" name="open_flg" class="form-control" value="{{ old("open_flg") }}"/>
			       	@if($errors->has("open_flg"))
			        	<span class="help-block">{{ $errors->first("open_flg") }}</span>
			       	@endif
			    -->
			</div>

			<div class="form-group @if($errors->has('open_date')) has-error @endif">
			   <label for="open_date-field">掲載開始日 <span class="btn-xs btn-danger">必須</span></label>
			    <input type="text" id="open_date-field" name="open_date" class="form-control filthypillow-1" value="{{ old("open_date") }}" required />
			       @if($errors->has("open_date"))
			        <span class="help-block">{{ $errors->first("open_date") }}</span>
			       @endif
			</div>
			<div class="form-group @if($errors->has('close_date')) has-error @endif">
			   <label for="open_date-field">掲載終了日 </label>
			    <input type="text" id="close_date-field" name="close_date" class="form-control filthypillow-2" value="{{ old("close_date") }}" />
			       @if($errors->has("close_date"))
			        <span class="help-block">{{ $errors->first("close_date") }}</span>
			       @endif
			</div>

			<!--
			<div class="form-group @if($errors->has('created_tool_user_id')) has-error @endif">
			   <label for="created_tool_user_id-field">Created_tool_user_id</label>
			    <input type="text" id="created_tool_user_id-field" name="created_tool_user_id" class="form-control" value="{{ old("created_tool_user_id") }}"/>
			       @if($errors->has("created_tool_user_id"))
			        <span class="help-block">{{ $errors->first("created_tool_user_id") }}</span>
			       @endif
			</div>

			<div class="form-group @if($errors->has('updated_tool_user_id')) has-error @endif">
			   <label for="updated_tool_user_id-field">Updated_tool_user_id</label>
			    <input type="text" id="updated_tool_user_id-field" name="updated_tool_user_id" class="form-control" value="{{ old("updated_tool_user_id") }}"/>
			       @if($errors->has("updated_tool_user_id"))
			        <span class="help-block">{{ $errors->first("updated_tool_user_id") }}</span>
			       @endif
			</div>
			 -->
         </div>

		<div class='col-md-12'>
			<div class="well well-sm">
			    <button type="submit" class="btn btn-primary">作成</button>
			    <a class="btn btn-link pull-right" href="{{ route('information.index') }}"><span class="glyphicon glyphicon-backward"></span> 戻る</a>
			</div>
		</div>
		</form>
	</div>
@endsection

@section('scripts')
	<script charset="UTF-8" type="text/javascript" src="/js/moment.js"></script>
	<script charset="UTF-8" type="text/javascript" src="/js/jquery.filthypillow/jquery.filthypillow_custom.js"></script>

	<script charset="UTF-8" type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
	<!--
	<script src="//cdn.quilljs.com/1.0.6/quill.js" type="text/javascript"></script>
	<script src="//cdn.quilljs.com/1.0.6/quill.min.js" type="text/javascript"></script>
	 -->
	<!-- <script src="//cdn.quilljs.com/1.0.6/quill.core.js" type="text/javascript"></script> -->

	<script src="/js/jqueryfiler/jquery.filer.min.js" type="text/javascript"></script>

	<!-- -------------------------------開始日付-->
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
				//return "2015-01-01 00:00:00";
				return moment().format('YYYY/MM/DD 00:00:00');
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

	<!-- -------------------------------終了日付-->
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
				//return moment().add(1,'years').format('YYYY-MM-DD 00:00:00');
				return moment().format('YYYY/MM/DD 00:00:00');
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

	<!-- -------------------------------記事 (tinymce editor)-->
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


	<!-- -------------------------------PDF-->
	<script type="text/javascript">
	$(document).ready(function() {
		<?php
			$cnt = 3;
			for($i=1; $i<=$cnt; $i++){
		?>
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
			});
			<?php
			}
			?>
		});
	</script>

<!--
	<script type="text/javascript">
	//-------------------------------記事 (Quill editor)
	var toolbarOptions = [
		[{ 'header': [1, 2, 3, 4, 5, 6, false] }],
		//[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown

	    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
		['blockquote'],
		//['code-block'],

		//[{ 'header': 1 }, { 'header': 2 }],               // custom button values 文字サイズ<h*>ボタン
		[{ 'list': 'ordered'}, { 'list': 'bullet' }],
		//[{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript <sup>タグ,<sup>タグ
		//[{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
		//[{ 'direction': 'rtl' }],                         // text direction


		[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
		//[{ 'font': [] }],
		//[{ 'align': [] }],

		['link','image'],

		['clean'],                                         // remove formatting button
	];
	var quill = new Quill('#editor-container', {
		  modules: {
			    toolbar: toolbarOptions
			  },
		placeholder: '記事を入力',
		//readOnly: true,
		theme: 'snow', // or 'bubble'
	});
	</script>
 -->
@endsection
