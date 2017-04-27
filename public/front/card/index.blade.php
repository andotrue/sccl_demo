@extends('front.common.layout')

@section('title', 'f-JOY CARDのススメ方 | SHOP STAFF LEARNING')
@section('description', 'f-JOY CARDのススメ方のご紹介')
@section('keyword', '福岡地所,ショップスタッフラーニング, SHOP STAFF LEARNING,接客,f-JOY CARD,ポイントカード')

@section('css')
<link rel="stylesheet" href="/front/css/card.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<div class="page-top-visual">
  <p>f-JOY CARD</p>
<!-- /.page-top-visual --></div>

<section class="cmn-block cmn-block-top">
  <header class="cmn-block-title">
    <h1 class="ttl-type02">
      <span class="ttltxt-en">f-JOY CARD</span>
      <span class="ttltxt-ja">f-JOY CARDのススメ方</span>
    </h1>
  </header>
  <div class="block-contents">

    <ul class="cmn-item-list item-list-type02 cmn-item-nav">
      <li>
        <a href="/card/detail/1/">
          <div class="nav-icon">
            <img src="/front/images/common/card-icon01.png" width="100%" alt="f-JOY CARDをお客様に薦めよう！">
          </div>
          <div class="nav-text">
            f-JOY CARDを<br>お客様に薦めよう！
          </div>
        </a>
      </li>
      <li>
        <a href="/card/detail/2/">
          <div class="nav-icon">
            <img src="/front/images/common/card-icon02.png" width="100%" alt="f-JOY CARDってどんなカード?">
          </div>
          <div class="nav-text">
            f-JOY CARDって<br>どんなカード?
          </div>
        </a>
      </li>
      <li>
        <a href="/card/detail/3/">
          <div class="nav-icon">
            <img src="/front/images/common/card-icon03.png" width="100%" alt="f-JOY CARDの紹介手順">
          </div>
          <div class="nav-text">
            f-JOY CARDの<br>紹介手順
          </div>
        </a>
      </li>
      <li>
        <a href="/card/detail/4/">
          <div class="nav-icon">
            <img src="/front/images/common/card-icon04.png" width="100%" alt="f-JOY CARDのQ&amp;A">
          </div>
          <div class="nav-text">
            f-JOY CARDの<br>Q&amp;A
          </div>
        </a>
      </li>
      <li>
        <a href="/card/detail/5/">
          <div class="nav-icon">
            <img src="/front/images/common/card-icon05.png" width="100%" alt="f-JOY CARDの">
          </div>
          <div class="nav-text">
            f-JOY CARDの<br>ポイント付与対応について
          </div>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <div class="nav-icon">
            <img src="/front/images/common/card-icon06.png" width="100%" alt="f-JOY CARDの接客トーク集">
          </div>
          <div class="nav-text">
            f-JOY CARDの<br>接客トーク集<br><span class="comingsoon-txt02">Coming Soon</span>
          </div>
        </a>
      </li>
    </ul>
  <!-- /.block-contents --></div>
</section>

<section class="cmn-bottom-bnr">
  <ul><!--
    --><li><a href="/skill/"><img src="/front/images/common/bnr-roleplaying02.png" width="100%" alt="優秀スタッフの接客スタイルを公開"></a></li><!--
    --><li><a href="/webskill/detail/blogSNS_01"><img src="/front/images/common/bnr-service.png" width="100%" alt="接客は来店前から始まっている"></a></li><!--
    --><li><a href="/information/"><img src="/front/images/common/bnr-information.png" width="100%" alt="お知らせ"></a></li><!--
  --></ul>
</section>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
