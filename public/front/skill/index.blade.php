@extends('front.common.layout')

@section('title', '接客スキルを磨く | SHOP STAFF LEARNING')
@section('description', '優秀スタッフの接客スタイルを公開！')
@section('keyword', '福岡地所,ショップスタッフラーニング, SHOP STAFF LEARNING,接客,ロールプレイングコンテスト')

@section('css')
<link rel="stylesheet" href="/front/css/skill.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<div class="page-top-visual">
  <p>接客スキルを磨く</p>
<!-- /.page-top-visual --></div>

<section class="cmn-block cmn-block-top">
  <header class="cmn-block-title">
    <h1 class="ttl-type01">優秀スタッフの接客スタイルを公開！</h1>
  </header>
  <div class="block-contents">
<?php
  //お知らせ一覧
  //10件でページ送り
?>
    <ul class="cmn-item-list item-list-type02">

      <li>
        <a href="/skill/detail/9">
          <div class="item-photo"><p><img src="/front/images/skill/img09.jpg" alt="SC接客ロールプレイングコンテスト九州・沖縄大会　キャナルシティ博多　ロックポート ストア"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2017.1.5</p>
            <p class="shop">キャナルシティ博多　ロックポート ストア</p>
            <p class="title">SC接客ロールプレイングコンテスト九州・沖縄大会</p>
            <p class="txt">●GOOD POINT　[ニーズチェック] [商品情報・専門情報]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-canalsity.png" alt="キャナルシティ"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/8">
          <div class="item-photo"><p><img src="/front/images/skill/img08.jpg" alt="SC接客ロールプレイングコンテスト九州・沖縄大会　木の葉モール橋本　カルディコーヒーファーム"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2017.1.5</p>
            <p class="shop">木の葉モール橋本　カルディコーヒーファーム</p>
            <p class="title">SC接客ロールプレイングコンテスト九州・沖縄大会</p>
            <p class="txt">●GOOD POINT　[会話力・提案力]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-konohamall.png" alt="木の葉モール"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/2">
          <div class="item-photo"><p><img src="/front/images/skill/img02.jpg" alt="SC接客ロールプレイングコンテス2016特訓会　マリノアシティ福岡 ゾフ（アイウェア）"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.1</p>
            <p class="shop">マリノアシティ福岡 ゾフ（アイウェア）</p>
            <p class="title">SC接客ロールプレイングコンテス2016特訓会</p>
            <p class="txt">●GOOD POINT　[身だしなみ・動作]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-marinoa.png" alt="マリノアシティ"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/3">
          <div class="item-photo"><p><img src="/front/images/skill/img03.jpg" alt="SC接客ロールプレイングコンテス2016特訓会　マリノアシティ福岡 レゴ クリックブリック（玩具・アパレル・グッズ）"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.1</p>
            <p class="shop">マリノアシティ福岡 レゴ クリックブリック（玩具・アパレル・グッズ）</p>
            <p class="title">SC接客ロールプレイングコンテス2016特訓会</p>
            <p class="txt">●GOOD POINT[会話力（話し方）] [商品情報・専門情報]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-marinoa.png" alt="マリノアシティ"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/6">
          <div class="item-photo"><p><img src="/front/images/skill/img06.jpg" alt="SC接客ロールプレイングコンテス2016特訓会　マリノアシティ福岡 フクスケ アウトレット（レッグウェア・インナーウェア）"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.1</p>
            <p class="shop">マリノアシティ福岡 フクスケ アウトレット（レッグウェア・インナーウェア）</p>
            <p class="title">SC接客ロールプレイングコンテス2016特訓会</p>
            <p class="txt">●GOOD POINT　[商品情報・専門情報]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-marinoa.png" alt="マリノアシティ"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/5">
          <div class="item-photo"><p><img src="/front/images/skill/img05.jpg" alt="SC接客ロールプレイングコンテス2016特訓会　木の葉モール橋本カルディコーヒーファーム(コーヒー豆・輸入食品)"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.1</p>
            <p class="shop">木の葉モール橋本カルディコーヒーファーム(コーヒー豆・輸入食品)</p>
            <p class="title">SC接客ロールプレイングコンテス2016特訓会</p>
            <p class="txt">●GOOD POINT　[会話力・提案力]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-konohamall.png" alt="木の葉モール"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/4">
          <div class="item-photo"><p><img src="/front/images/skill/img04.jpg" alt="SC接客ロールプレイングコンテス2016特訓会　木の葉モール橋本 パレットプラザ(DPE)"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.1</p>
            <p class="shop">木の葉モール橋本 パレットプラザ(DPE)</p>
            <p class="title">SC接客ロールプレイングコンテス2016特訓会</p>
            <p class="txt">●GOOD POINT　[表情・動作]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-konohamall.png" alt="木の葉モール"></p>
          </div>
        </a>
      </li>

      <li>
        <a href="/skill/detail/7">
          <div class="item-photo"><p><img src="/front/images/skill/img07.jpg" alt="SC接客ロールプレイングコンテス2016特訓会　リバーウォーク北九州 サリア（レディス）"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.1</p>
            <p class="shop">リバーウォーク北九州 サリア（レディス）</p>
            <p class="title">SC接客ロールプレイングコンテス2016特訓会</p>
            <p class="txt">●GOOD POINT　[商品情報・専門情報]</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/skill/logo-riverwalk.png" alt="リバーウォーク"></p>
          </div>
        </a>
      </li>

    </ul>

    <!--<div class="cmn-pager">
      <ul>
        <li class="back"><a href="">BACK</a></li>
        <li class="next"><a href="">NEXT</a></li>
      </ul>
    </div>-->
  <!-- /.block-contents --></div>
</section>

<section class="cmn-bottom-bnr">
  <ul><!--
    --><li><a href="/card/"><img src="/front/images/common/bnr-fjoycard.png" width="100%" alt="f-Joyカードのススメ"></a></li><!--
    --><li><a href="/webskill/detail/blogSNS_01"><img src="/front/images/common/bnr-service.png" width="100%" alt="接客は来店前から始まっている"></a></li><!--
    --><li><a href="/information/"><img src="/front/images/common/bnr-information.png" width="100%" alt="お知らせ"></a></li><!--
  --></ul>
</section>
@endsection


@section('scripts')
@endsection


@include('front.common.footer')
