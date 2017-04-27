{{-- @{{extends('layouts.app')}} --}}
@extends('tool.common.layout')

@section('css')
	<link href="/css/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<style>
	tbody:hover {
	    cursor: move;
	}
	</style>
@endsection

@section('scripts')
    <script src="/js/chart.js/Chart.bundle.js"></script>
    <script src="/js/chart.js/utils.js"></script>
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
					echo (isset($accesslogs['pageviews'][$k]))? $accesslogs['pageviews'][$k] : "0";
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
					echo (isset($accesslogs['uniqueDimensionCombinations'][$k]))? $accesslogs['uniqueDimensionCombinations'][$k] : "0";
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
	<li class="active"><a href="/tool/accesslog/forcontents/1">日次サマリー</a></li>
	<li class=""><a href="/tool/accesslog/forcontents/2">ページ毎</a></li>
</ul>
	
</div>

<div class="col-md-10">
		<!-- 検索部分 -->
		<form action="/tool/accesslog/forcontents/1" method="POST">
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

	</div>
</div>
@endsection


@section('scripts')
	<script src="/js/jquery-ui/jquery-ui.min.js"></script>

	<script>
	</script>
	

@endsection


