@extends('front.common.layout')
@section('css')
    <link href="/css/app.css" rel="stylesheet">
    <link href="./css/bootstrap-3.3.7/bootstrap.min.css" rel="stylesheet">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
	<h1>リアル接客</h1>
		<h2><a href="/static/real/move">接客ロールプレイング</a></h2>
		<h2><a href="/static/real/fjpointcard">f-joy point card</a></h2>

	<h1>WEB接客</h1>
		<h2><a href="/static/web/kihon">基本編</a></h2>
		<h2><a href="/static/web/ouyou">応用編</a></h2>

	<h1><a href="/static/real/move">お知らせ</a></h1>

@endsection


@section('scripts')
	<script src="/js/app.js"></script>
    <script src="./js/jquery-3.1.0.min.js"></script>
@endsection


@include('front.common.footer')
