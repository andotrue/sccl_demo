{{-- @{{extends('layouts.app')}} --}}
@extends('tool.common.layout')

@section('css')
	<link href="/css/jquery.dataTables/jquery.dataTables.min.css" rel="stylesheet">
	<link href="/css/jquery.dataTables/dataTables.bootstrap.css" rel="stylesheet">
	<link href="/css/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<style>
	tbody:hover {
	    cursor: move;
	}
	</style>
@endsection


@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i>{{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }}
        </h1>
		<p>ショップスタッフラーニングの各店舗の閲覧実績となります。</p>
    </div>
@endsection

@section('content')
	
<div class="row">
	<div class="col-md-12">
		<!-- 検索部分 -->
		<form action="/tool/accesslog/forstore" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			<div class="form-inline">
			    {{Form::select('target_month', $target_months, is_null(old("target_month")) ? $target_month : old("target_month"), array('class'=>'form-control'))}}
				{{Form::select('store_id', $stores, is_null(old("store_id"))? $store_id : old("store_id"), array('class'=>'form-control'))}}
				<button type="submit" class="btn btn-primary" class="form-group">検索</button>
			</div>
		</form>

		<!-- テーブル部分 -->
		@if($accesslogs['pageviews']->count())
			<!-- Paganation -->
			{{ $accesslogs['pageviews']->appends(['target_month'=>$target_month, 'store_id'=>$store_id])->links() }}
			
			<table id="table_id" class="table table-striped table-bordered table-hover">
				<thead>
				    <tr>
				        <th width="8%">店舗ID</th>
				        @if($store_id == "all")<th>施設名</th>@endif
				        <th>店舗名</th>
				    	<th width="15%">ｾｯｼｮﾝ数</th>
				    	<th width="15%">PV数</th>
				    </tr>
				</thead>
				<tbody class="jquery-ui-sortable-table">
				    @foreach($accesslogs['pageviews'] as $accesslog)
				        <tr>
							<td>{{$accesslog->userId}}</a></td>
							@if($store_id == "all")<td>{{$stores_view[$accesslog->store_id]}}</td>@endif
							<td>{{$accesslog->shop_name}}</td>
							<td>{{$accesslogs_sesssion[$accesslog->userId][0] or 0}}</td>
							<td>{{$accesslog->count}}</td>
				        </tr>
				    @endforeach
				</tbody>
			</table>
			<!-- Paganation -->
			{{ $accesslogs['pageviews']->appends(['target_month'=>$target_month, 'store_id'=>$store_id])->links() }}
		@else
	         <h3 class="text-center alert alert-info">Empty!</h3>
		@endif
	
	</div>
</div>
@endsection


@section('scripts')
	<script src="/js/jquery.dataTables/jquery.dataTables.min.js"></script>
	<script src="/js/jquery.dataTables/dataTables.bootstrap.js"></script>
	<script src="/js/jquery-ui/jquery-ui.min.js"></script>

	

	<script type="text/javascript">
		$("#table_id").dataTable({
			@if($store_id == "all")
				"order": [[ 4, "desc" ]],
			@else
				"order": [[ 3, "desc" ]],
			@endif
			"stateSave": true,
		    "oLanguage": {
		    	"sLengthMenu": "表示行数 _MENU_ 件",
		        "oPaginate": {
		            "sNext": "次のページ",
		            "sPrevious": "前のページ"
		        },
		        "sInfo": "全_TOTAL_件中 _START_件から_END_件を表示",
		        "sSearch": "検索："
		    },
			lengthChange: false,
			paging: false,
		});
		var table = $("#table_id").DataTable();
		if( !table.search() ){
			table.search('').draw();
		}
		table.state.clear();//ステートのクリア
	</script>

	<script type="text/javascript">
	    jQuery( '.jquery-ui-sortable-table' ).sortable();
	    $('.jquery-ui-sortable-table').disableSelection();
	    jQuery( '#submitSortable' ) . click( function() {
			var itemNames = '';
			var itemIDs = '';
			var inputValue = '';
			var form = document.createElement( "form" );
			document.body.appendChild( form );

			jQuery( '.jquery-ui-sortable-table tr' ) . map( function() {
				var id = '';
				var title = ''

				id = jQuery( this.childNodes[1] ).text().replace(/\s+/g, "");
				title = jQuery( this.childNodes[5].childNodes[1] ).text();
				itemNames += id + ' ' + title + '\n';

				inputValue += id + ',';

			} );
			if( confirm( itemNames + '【この順番でよろしいですか？】' ) ){
				//get送信の場合
				//location . href = '?itemIDs=' + itemIDs;

				//post送信の場合
				var input = document.createElement( "input" );
				input.setAttribute( "type" , "hidden" );
				input.setAttribute( "name" , "ids" );
				input.setAttribute( "value", inputValue );
				form.appendChild( input );

				var input = document.createElement( "input" );
				input.setAttribute( "type" , "hidden" );
				input.setAttribute( "name" , "category_id" );
				input.setAttribute( "value", 1 );
				form.appendChild( input );

				var input = document.createElement( "input" );
				input.setAttribute( "type" , "hidden" );
				input.setAttribute( "name" , "sort" );
				input.setAttribute( "value", 1 );
				form.appendChild( input );

				form.setAttribute( "method" , "post" );
				form.submit();
	        }
	    } );
	</script>
	

@endsection


