@extends('front.common.layout')
@section('css')
<link rel="stylesheet" href="/front/css/webskill.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<section class="cmn-block cmn-block-webskill">
  <div class="page-title-wrapper">
    <div class="page-title">
      <div class="title-icon pl15 pr15"><img src="/front/images/common/img-camera.png" width="100%" alt="ブログやSNSを接客に活用しよう"></div>
      <div class="title-text">撮影の基本テクニック</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt03">
      スマホで写真を撮る時に知っておくと便利な基本テクニックです。撮影の際に気をつけてみましょう。
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-photo02">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="txt01">撮りたいもの（被写体）の大きさを考える</div>
        </div>
        <div class="string-bottom">
          <p class="photo"><img src="/front/images/common/photo-image06.jpg" alt="引きの写真で、サイズ感を訴求します。"></p>
          <p class="taC mb20">引きの写真で、サイズ感を訴求します。</p>
          <p class="photo"><img src="/front/images/common/photo-image07.jpg" alt="寄りの写真で、細部を訴求します。"></p>
          <p class="taC mb20">寄りの写真で、細部を訴求します。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="txt01">アングルを考える</div>
        </div>
        <div class="string-bottom">
          <p class="photo"><img src="/front/images/common/photo-image08.jpg" alt="正面の写真で、商品の全体イメージを伝えます。"></p>
          <p class="taC mb20">正面の写真で、商品の全体イメージを伝えます。</p>
          <p class="photo"><img src="/front/images/common/photo-image09.jpg" alt="斜めからの写真で、商品の立体感を伝えます。"></p>
          <p class="taC mb20">斜めからの写真で、商品の立体感を伝えます。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="txt01">明るさ・光の向きを考える</div>
        </div>
        <div class="string-bottom">
          <p class="mb30">明るさや光の指す方向によって、印象が大きく変わります。明るい印象を与えるように気をつけましょう。</p>
          <p class="photo"><img src="/front/images/common/photo-image10.jpg" alt="屋外での撮影"></p>
          <p class="taC mb20">屋外での撮影</p>
        </div>
      </li>
    </ul>

    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

  <!-- /.block-contents --></div>
</section>

<div class="page-next page-next-photo">
  <div class="text">ジャンル別の撮り方ポイントも知りたい！というアナタにおすすめの記事
</div>
<!-- /.page-next --></div>
<div class="page-next-list page-next-list-photo">
  <ul>
    <li><a href="javascript:void(0)">ジャンル別撮影ポイント(COMING SOON)</a></li>
    <li><a href="">商品のみを撮影する場合</a></li>
    <li><a href="">人物</a></li>
    <li><a href="">コーディネートを撮影する場合</a></li>
    <li><a href="">飲食店の場合</a></li>
    <li><a href="">サービス系の場合</a></li>
  </ul>
<!-- /.page-next-list --></div>

<div class="page-next-list02">
  <ul>
    <li><a href="/webskill/detail/writting_01">
      <p class="icon"><img src="/front/images/common/img-pen.png" width="100%" alt="紹介文章の書き方"></p>
      <p class="text">紹介文章の書き方<br><span class="fz10">お客さまを引きつけるブログ・SNS<br>の書き方はこちら</span></p>
    </a></li>
    <li><a href="/webskill/detail/why_01">
      <p class="icon"><img src="/front/images/common/img-beginner.png" width="100%" alt="WEBの基礎知識"></p>
      <p class="text">WEBの基礎知識</p>
    </a></li>
    <li><a href="/webskill/detail/blogSNS_01">
      <p class="icon"><img src="/front/images/common/ico-pc02.png" width="100%" alt="ブログ・SNSの投稿4ステップ基本は簡単"></p>
      <p class="text">ブログ・SNSを接客に活かす</p>
    </a></li>
    <li><a href="/webskill/detail/photo_01">
      <p class="icon"><img src="/front/images/common/img-camera.png" width="100%" alt="写真の印象が重要です"></p>
      <p class="text">撮影基本テクニック</p>
    </a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
