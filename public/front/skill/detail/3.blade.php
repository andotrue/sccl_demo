@extends('front.common.layout')

@section('title', 'マリノアシティ福岡 レゴ クリックブリック（SC接客ロールプレイングコンテスト特訓会）| SHOP STAFF LEARNING')
@section('description', 'マリノアシティ福岡 レゴ クリックブリックの接客スタイルを公開！')
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
      <div class="photo"><p><img src="/front/images/skill/img03.jpg" alt="SC接客ロールプレイングコンテス2016特訓会"></p></div>
      <div class="text">
        <div class="date"><p class="icon-new">NEW</p><span>2016.12.1</span></div>
        <p class="shop">マリノアシティ福岡 レゴ クリックブリック（玩具・アパレル・グッズ）</p>
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
          [会話力（話し方）]<br>
          取扱商品の特性上、フランクな言葉で、お客様にアプローチをはじめられます。お客様の言葉に冗談で返せる明るい会話ができています。制作後の感想を求めるなど、購入後も繋がっていきたいという姿勢に好感を持つお客様は多いはずです。<br>
          [商品情報・専門情報]<br>
          お客様の年齢や性別・趣味趣向に合わせた商品情報を提供しています。実際にお客様にサンプルや商品を手にとってもらいながら、商品の魅力をイメージさせる説明ができています。<br>贈り物にも適していると伝えることは、別の機会でのご来店を促す、とても上手な接客です。
        </div>
      <!-- /.entry-point --></div>
      <div class="entry-text">
        【さらなるスキルアップ】<br>
        [会話力（聞き方）]<br>
        お客様の商品購入経験や来店経験をヒアリングするとよいでしょう。またお客様の回答の意図をもっと想像した上で、質問し、お客様の声を引き出すとよりよい接客になります。<br>お客様によっては、少し押しが強すぎる接客に感じる方もいるかもしれませんので、冒頭のアプローチでもう少しお客様の様子を見るのがよいかもしれません。
      <!-- /.entry-text --></div>
      <div class="entry-movie">
        <p class="title"><span>▼</span>接客スタイルをチェック</p>
        <div class="movie">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/HsPEPr_Oz50" frameborder="0" allowfullscreen></iframe>
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
