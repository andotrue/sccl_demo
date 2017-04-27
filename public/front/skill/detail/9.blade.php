@extends('front.common.layout')

@section('title', 'キャナルシティ博多　ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING')
@section('description', 'キャナルシティ博多　ロックポート ストアの接客スタイルを公開！')
@section('keyword', '福岡地所,ショップスタッフラーニング, SHOP STAFF LEARNING,接客,ロールプレイングコンテスト')

@section('css')
<link rel="stylesheet" href="/front/css/skill.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<section class="cmn-block cmn-block-detail">
  <header class="cmn-block-title">
    <h1 class="ttl-type01">優秀スタッフの接客スタイルを公開！</h1>
  </header>
  <div class="block-contents">
<?php
  //記事詳細
  //ロゴは160×160
  //本文中の画像は最大横700縦なり
  //入力がない項目は「div.detail-box」ごと非表示でお願いします。
?>

  <article class="skill-detail">
    <header class="skill-detail-title">
      <div class="photo"><p><img src="/front/images/skill/img09.jpg" alt="SC接客ロールプレイングコンテスト九州・沖縄大会"></p></div>
      <div class="text">
        <div class="date"><p class="icon-new">NEW</p><span>2017.1.5</span></div>
        <p class="shop">キャナルシティ博多　ロックポート ストア（シューズ・バッグ）</p>
        <h1>SC接客ロールプレイングコンテスト九州・沖縄大会</h1>
      </div>
      <div class="logo">
        <p><img src="/front/images/skill/logo-canalsity.png" alt="キャナルシティ"></p>
      </div>
    </header>
    <div class="detail-entry">
      <div class="entry-point">
        <p class="title"><span>GOOD POINT!</span></p>
        <div class="txt">
          ［ニーズチェック］<br>
          お客様の商品（ブーティー）に関する情報や、履いているときのお客様の課題（通勤時）について、共感を交え、よくニーズをヒアリングできています。<br><br>
          ［商品情報・専門情報］<br>商品の機能や、素材・ヒールの高さ・メンテナンスなど専門知識に基づいた説明ができています。<br>「走りたくなる靴」というキーフレーズが言えることも、より説得力が増すのではないでしょうか。
        </div>
      <!-- /.entry-point --></div>
      <div class="entry-movie">
        <p class="title"><span>▼</span>接客スタイルをチェック</p>
        <div class="movie">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/8EAkS1C2L4A" frameborder="0" allowfullscreen></iframe>
        </div>
      <!-- /.entry-movie --></div>
    <!-- /.detail-entry --></div>
  <!-- /.detail --></article>

  <!-- /.block-contents --></div>
</section>

<!--
<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="/card/02/">NEXT</a></div>
</div>
<ul class="cmn-item-list item-list-type02 next-item">
  <li>
    <a href="/skill/detail.php">
      <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
      <div class="item-text">
        <div class="icon-new">NEW</div>
        <p class="date">2016.12.12</p>
        <p class="shop">◯◯福岡店</p>
        <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
        <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
      </div>
      <div class="item-logo">
        <p><img src="/front/images/cms/shoplogo01.png" alt="ショップ名"></p>
      </div>
    </a>
  </li>
</ul>
-->

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
