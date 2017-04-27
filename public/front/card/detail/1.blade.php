@extends('front.common.layout')

@section('title', 'f-JOY CARDをお客様に薦めよう！ | SHOP STAFF LEARNING')
@section('description', 'f-JOY CARDは、福岡でのお買い物をもっと楽しく、もっとお得にするカードです。')
@section('keyword', '福岡地所,ショップスタッフラーニング, SHOP STAFF LEARNING,接客,f-JOY CARD,ポイントカード')

@section('css')
<link rel="stylesheet" href="/front/css/card.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<section class="cmn-block cmn-block-detail">
  <header class="cmn-block-title">
    <h1 class="ttl-type02">
      <span class="ttltxt-en">f-JOY CARD</span>
      <span class="ttltxt-ja">f-JOY CARDのススメ方</span>
    </h1>
  </header>
  <div class="page-title-wrapper">
    <div class="page-title">
      <div class="title-icon"><img src="/front/images/common/card-icon01.png" width="100%" alt="f-JOY CARDをお客様に薦めよう！"></div>
      <div class="title-text">f-JOY CARDを<br>お客様に薦めよう！</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt01">
      <p class="txt01 mb10">ご精算時には、『ポイントカードはお持ちですか』と声かけの徹底をお願いします。</p>
      <p class="txt02">※精算後のポイント後付はできません。</p>
    <!-- /.description-txt01 --></div>

<!-- =========== どうしてf-JOY CARDを薦めるの？ =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">どうしてf-JOY CARDを薦めるの？</div>
      <p class="box-catch">f-JOY CARDは、福岡でのお買い物をもっと楽しく、もっとお得にするカードです。</p>

    <ul class="cmn-item-list item-list-type02 cmn-item-point">
      <li>
        <div class="list--in">
          <div class="point-icon">
            <img src="/front/images/common/ico-point01.png" width="100%" alt="POINT 1">
          </div>
          <div class="point-text">
            <p>ポイントを貯めて、お買い物券と交換</p>
            <p class="img"><img src="/front/images/common/img-point.png" alt="ポイントを貯めて、お買い物券と交換"></p>
          </div>
        </div>
      </li>
      <li>
        <div class="list--in">
          <div class="point-icon">
            <img src="/front/images/common/ico-point02.png" width="100%" alt="POINT 2">
          </div>
          <div class="point-text">
            <p>うれしい割引やプレゼント特典！</p>
            <p class="img"><img src="/front/images/common/img-present.png" alt="うれしい割引やプレゼント特典！"></p>
          </div>
        </div>
      </li>
      <li>
        <div class="list--in">
          <div class="point-icon">
            <img src="/front/images/common/ico-point03.png" width="100%" alt="POINT 3">
          </div>
          <div class="point-text">
            <p>福岡地所4施設でポイントが貯まる</p>
            <p class="img"><img src="/front/images/common/img-facility.png" alt="福岡地所4施設でポイントが貯まる"></p>
          </div>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- =========== どうしてf-JOY CARDを薦めるの？ =========== -->

  <!-- /.block-contents --></div>
</section>

<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="/card/detail/2/">NEXT</a></div>
  <div class="text">f-JOY CARDってどんなカード?</div>
<!-- /.page-next --></div>
<div class="page-next-list">
  <ul>
    <li><a href="/card/detail/3/">f-JOY CARDの紹介手順</a></li>
    <li><a href="/card/detail/4/">f-JOY CARDのQ&amp;A</a></li>
    <li><a href="/card/detail/5/">f-JOY CARDのポイント付与対応について</a></li>
    <li><a href="/card/detail/6/">f-JOY CARDの接客トーク集</a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
