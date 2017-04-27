@extends('front.common.layout')
@section('css')
    <link href="/css/app.css" rel="stylesheet">
    <link href="./css/bootstrap-3.3.7/bootstrap.min.css" rel="stylesheet">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
	<h1>リアル接客 -接客ロールプレイング-TOP</h1>
@endsection


@section('scripts')
	<script src="/js/app.js"></script>
    <script src="./js/jquery-3.1.0.min.js"></script>
@endsection


@include('front.common.footer')
