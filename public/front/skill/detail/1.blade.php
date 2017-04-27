@extends('front.common.layout')
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
      <div class="photo"><p><img src="/front/images/skill/img01.jpg" alt="SC接客ロールプレイングコンテス2016特訓会"></p></div>
      <div class="text">
        <div class="date"><p class="icon-new">NEW</p><span>2016.12.1</span></div>
        <p class="shop">キャナルシティ博多　ロックポート ストア</p>
        <h1>SC接客ロールプレイングコンテス2016特訓会</h1>
      </div>
      <div class="logo">
        <p><img src="/front/images/skill/logo-canalsity.png" alt="キャナルシティ博多"></p>
      </div>
    </header>
    <div class="detail-entry">
      <div class="entry-point">
        <p class="title"><span>GOOD POINT!</span></p>
        <div class="txt">
          ［笑顔］<br>
          継続して自然な笑顔ができています。<br>
          ［商品説明］<br>
          お客様の使用シーンをヒアリングした上でコーディネート提案ができています。<br>
          商品を身に着けることで期待される効果（例えば「足長効果」）を伝えられています。<br>
          吸収材などの機能説明からメンテナンス方法まで、専門知識に基づく商品説明ができています。
        </div>
      <!-- /.entry-point --></div>
      <div class="entry-text">
        【さらなるスキルアップ】<br>
        ［身振り］<br>
        身振りが少し大きいので、動くときと止まっているときの緩急をつけるとよいでしょう。<br>
        ［キャッチフレーズ］<br>
        一言で説明できる商品のキャッチフレーズを用意すると、よりお客様の印象に残る接客になるでしょう。<br>
        ［質問］<br>
        質問回数をもう少しおさえ、てできるだけお客様に長く話してもらうよう意識しましょう。
      <!-- /.entry-text --></div>
      <div class="entry-movie">
        <p class="title"><span>▼</span>接客スタイルをチェック</p>
        <div class="movie">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/6pLtC6SjjVQ" frameborder="0" allowfullscreen></iframe>
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
