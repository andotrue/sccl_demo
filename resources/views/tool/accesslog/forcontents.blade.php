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

@section('scripts')
    <script src="/js/Chart.js/Chart.bundle.js"></script>
    <script src="/js/Chart.js/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
    
	<script>
		var MONTHS = [<?php foreach($gr_days as $d){echo "'$d',";}?>];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: [<?php foreach($gr_days as $d){echo "'$d',";}?>],
			datasets: [{
			    label: 'ページビュー',
			    backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			    borderColor: window.chartColors.red,
			    borderWidth: 1,
			    data: [
				<?php foreach($gr_days as $k => $d){
					echo (isset($accesslogs1['pageviews'][$k]))? $accesslogs1['pageviews'][$k] : "0";
					echo ",";
				} ?>
			    ]
			}, {
			    label: 'セッション',
			    backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
			    borderColor: window.chartColors.blue,
			    borderWidth: 1,
			    data: [
				<?php foreach($gr_days as $k => $d){
					echo (isset($accesslogs1['uniqueDimensionCombinations'][$k]))? $accesslogs1['uniqueDimensionCombinations'][$k] : "0";
					echo ",";
				} ?>
			    ]
			}]
			
		};
		
		window.onload = function() {
			var ctx = document.getElementById("canvas").getContext("2d");
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
				    responsive: true,
				    legend: {
				        position: 'top',
				    },
				    title: {
				        display: true,
				        text: 'セッション＆ページビュー'
				    }
				}
			});
		};
	</script>
@endsection



@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i>{{ $functionName }} {{ $functionSubName ? "-".$functionSubName."-" : "" }}
        </h1>
		<p>ショップスタッフラーニングのアクセスデータになります。</p>
    </div>
@endsection

@section('content')
	
	
<div class="row">
	<div class="col-md-2">
	<?/****サイドメニュー****/ ?>
	<ul class="nav nav-pills nav-stacked">
	<li class="active"><a href="/tool/accesslog/forcontents/1">TOP</a></li>
	<li class=""><a href="http://dev-tool-www.puzzle-m.net/tool/banner/index/2">サイドバー</a></li>
</ul>
	
</div>

<div class="col-md-10">
		<!-- 検索部分 -->
		<form action="/tool/accesslog/forcontents" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			<div class="form-inline">
			    {{Form::select('target_month', $target_months, is_null(old("target_month")) ? $target_month : old("target_month"), array('class'=>'form-control'))}}
				{{Form::select('store_id', $stores, is_null(old("store_id"))? $store_id : old("store_id"), array('class'=>'form-control'))}}
				<button type="submit" class="btn btn-primary" class="form-group">検索</button>
			</div>
		</form>

		<!-- グラフ部分 -->
		<div id="container" style="width: 100%;">
			<canvas id="canvas"></canvas>
    	</div>

		<!-- テーブル部分 -->
		@if($accesslogs2['pageviews']->count())
			<!-- Paganation -->
			<!--!! //$accesslogs2['pageviews']->render() !!-->
			
			<table id="table_id" class="table table-striped table-bordered table-hover">
				<thead>
				    <tr>
				        <th>ページタイトル</th>
				    	<th width="20%">ページパス</th>
				    	<th>セッション数</th>
				    	<th>PV数</th>
				    </tr>
				</thead>
				<tbody class="jquery-ui-sortable-table">
				    @foreach($accesslogs2['pageviews'] as $accesslog)
				        <tr>
				            <td><a href="{{$accesslog->pagePath}}" target="_blank">{{$accesslog->pageTitle}}</a></td>
							<td>{{$accesslog->pagePath}}</a></td>
							<td>{{$accesslogs2['uniqueDimensionCombinations'][$accesslog->pagePath] or 0}}</td>
							<td>{{$accesslog->count}}</td>
				        </tr>
				    @endforeach
				</tbody>
			</table>
			<!-- Paganation -->
			<!--!! //$accesslogs2['pageviews']->render() !!-->
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
			"order": [[ 1, "asc" ]],
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


