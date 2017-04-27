@extends('front.common.layout')

@section('title', 'f-JOY CARDの紹介手順 | SHOP STAFF LEARNING')
@section('description', 'ご精算時には、『ポイントカードはお持ちですか』と声かけの徹底をお願いします。')
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
      <div class="title-icon"><img src="/front/images/common/card-icon03.png" width="100%" alt="f-JOY CARDの紹介手順"></div>
      <div class="title-text">f-JOY CARDの<br>紹介手順</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">

    <div class="description-txt01">
      <p class="txt01 mb10">ご精算時には、『ポイントカードはお持ちですか』と声かけの徹底をお願いします。</p>
      <p class="txt02">※清算後のポイント後付はできません。</p>
    <!-- /.description-txt01 --></div>

    <div class="description-txt01">
      <p class="txt01 mb10">ポイントカードをお持ちでないお客様には、<span>「無料ですぐに発行できますのでお作りになりませんか？」</span>とご案内後、下記の手順でご紹介をお願いします。</p>
    <!-- /.description-txt01 --></div>

<!-- =========== ポイントカード紹介の手順 =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">ポイントカード紹介の手順</div>
      <div class="box-catch02">
        <p class="txt">1.ｆ-JOYポイントカード（クレジット機能なし）をご希望のお客様の場合</p>
        <p class="img"><img src="/front/images/common/img-card01.png" alt="ｆ-JOYポイントカード（クレジット機能なし）をご希望のお客様の場合"></p>
      </div>
    <ul class="cmn-item-list item-list-type02 cmn-item-point mb30">
      <li>
        <div class="list--in">
          <div class="num-icon">
            <img src="/front/images/common/ico-num01.png" width="100%" alt="1">
          </div>
          <div class="num-text">
            <p>『ポイントカード申込書』から『ポイントカード』をはずす。</p>
          </div>
        </div>
      </li>
      <li>
        <div class="list--in">
          <div class="num-icon">
            <img src="/front/images/common/ico-num02.png" width="100%" alt="2">
          </div>
          <div class="num-text">
            <p>カード裏面に必ずお客様の署名を頂く。</p>
          </div>
        </div>
      </li>
      <li>
        <div class="list--in">
          <div class="num-icon">
            <img src="/front/images/common/ico-num03.png" width="100%" alt="3">
          </div>
          <div class="num-text">
            <p>ご紹介の際のご利用分のポイントを加算する。</p>
          </div>
        </div>
      </li>
    </ul>

      <div class="box-catch02">
        <p class="txt">2.ｆ-JOYクレジットカードをご希望のお客様の場合</p>
        <p class="img"><img src="/front/images/common/img-card02.png" alt="ｆ-JOYクレジットカードをご希望のお客様の場合"></p>
      </div>
    <ul class="cmn-item-list item-list-type02 cmn-item-point mb30">
      <li>
        <div class="list--in">
          <div class="num-icon">
            <img src="/front/images/common/ico-num01.png" width="100%" alt="1">
          </div>
          <div class="num-text">
            <p>インフォメーションで受付をしていることをお客様に説明。</p>
          </div>
        </div>
      </li>
      <li>
        <div class="list--in">
          <div class="num-icon">
            <img src="/front/images/common/ico-num02.png" width="100%" alt="2">
          </div>
          <div class="num-text">
            <p>紹介時の『お買い上げのレシート』をお客様にお渡しし、インフォメーションを案内する。</p>
          </div>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- =========== ポイントカード紹介の手順 =========== -->

  <!-- /.block-contents --></div>
</section>

<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="/card/detail/4/">NEXT</a></div>
  <div class="text">f-JOY CARDのQ&amp;A</div>
<!-- /.page-next --></div>
<div class="page-next-list">
  <ul>
    <li><a href="/card/detail/1/">f-JOY CARDをお客様に薦めよう！</a></li>
    <li><a href="/card/detail/2/">f-JOY CARDってどんなカード?</a></li>
    <li><a href="/card/detail/5/">f-JOY CARDのポイント付与対応について</a></li>
    <li><a href="/card/detail/6/">f-JOY CARDの接客トーク集</a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
