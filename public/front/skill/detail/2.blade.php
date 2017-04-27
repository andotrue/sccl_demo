@extends('front.common.layout')

@section('title', 'マリノアシティ福岡 ゾフ（SC接客ロールプレイングコンテスト特訓会）| SHOP STAFF LEARNING')
@section('description', 'マリノアシティ福岡 ゾフの接客スタイルを公開！')
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
      <div class="photo"><p><img src="/front/images/skill/img02.jpg" alt="SC接客ロールプレイングコンテス2016特訓会"></p></div>
      <div class="text">
        <div class="date"><p class="icon-new">NEW</p><span>2016.12.1</span></div>
        <p class="shop">マリノアシティ福岡 ゾフ（アイウェア）</p>
        <h1>SC接客ロールプレイングコンテス2016特訓会</h1>
      </div>
      <div class="logo">
        <p><img src="/front/images/skill/logo-marinoa.png" alt="マリノアシティ"></p>
      </div>
    </header>
    <div class="detail-entry">
      <div class="entry-point">
        <p class="title"><span>GOOD POINT!</span></p>
        <div class="txt">
          [身だしなみ・動作]<br>
          姿勢・身振り手振り、聞き取りやすい声などに好感をもたれる接客対応ができています。<br>
          [提案力]<br>
          専門知識で、商品の見た目の印象・効果から素材、機能まで丁寧な提案ができています。情報を広げてから・絞りこんでいく会話の流れができています。結果として、お客様に商品を選んでもらうところまで接客ができています。
        </div>
      <!-- /.entry-point --></div>
      <div class="entry-text">
        【さらなるスキルアップ】<br>
        最終、お客様の購入意志決定段階では、お客様が自分で選ぶ流れをつくることができれば、よりお客様が納得して購入いただく機会を作ることができます。
      <!-- /.entry-text --></div>
      <div class="entry-movie">
        <p class="title"><span>▼</span>接客スタイルをチェック</p>
        <div class="movie">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/a8_52urO_4I" frameborder="0" allowfullscreen></iframe>
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
