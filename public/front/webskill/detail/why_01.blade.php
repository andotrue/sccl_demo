@extends('front.common.layout')

@section('title', 'なぜブログ・SNSを書くのか | SHOP STAFF LEARNING')
@section('description', 'お客さまのお買い物行動は大きく変化しています。')
@section('keyword', '福岡地所,ショップスタッフラーニング, SHOP STAFF LEARNING,接客,WEB,撮影,文章の書き方')

@section('css')
<link rel="stylesheet" href="/front/css/webskill.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<section class="cmn-block cmn-block-webskill">
  <div class="page-title-wrapper">
    <div class="page-title">
      <div class="title-icon pl15"><img src="/front/images/common/img-beginner.png" width="100%" alt="なぜブログ・SNSを書くのか？ブログ・SNSを書く意義を理解しましょう"></div>
      <div class="title-text">なぜブログ・SNSを書くのか？<br>ブログ・SNSを書く意義を理解しましょう</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt03">
      <p class="fz15 pb10">お客さまのお買い物行動は大きく変化</p>
      <p>今、お客さまのお買い物行動は大きく変化しています。その理由の一つとして、スマートフォンの急激な普及が挙げられます。お客さまのお買い物行動が変化していることを理解し、店頭やWEB上での接客に活かしましょう。</p>
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-why01">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="txt01">お買い物行動の変化の理由</div>
        </div>
        <div class="string-bottom">
          <div class="left">
            <p class="txt01"><span class="yellow">●</span><span class="fwB">スマートフォンの普及</span><br>
            スマートフォン所持率は60％超、パソコンがなくても手軽にインターネットにアクセスできるように。
            </p>
          </div>
          <div class="right">
            <img src="/front/images/common/img-phone.png" width="100%" alt="スマートフォンの普及">
          </div>
        </div>
      </li>
      <li>
        <div class="string-bottom">
          <div class="left">
            <p class="txt01"><span class="yellow">●</span><span class="fwB">何をするにもまず検索</span><br>
            モノを買うとき、どこかへ出掛けるとき、何かを食べるとき・・・検索して行動を決めるように。
            </p>
          </div>
          <div class="right">
            <img src="/front/images/common/img-search.png" width="100%" alt="何をするにもまず検索">
          </div>
        </div>
      </li>
      <li>
        <div class="string-bottom">
          <div class="left">
            <p class="txt01"><span class="yellow">●</span><span class="fwB">SNSの浸透</span><br>
            FacebookやTwitterといったSNS（ソーシャル・ネットワーキング・サービス）が普及し、人々が情報を発信・シェアするように。
            </p>
          </div>
          <div class="right">
            <img src="/front/images/common/img-sns.png" width="100%" alt="SNSの浸透">
          </div>
        </div>
      </li>
    </ul>

    <div class="description-txt03">
      <p class="pb10">実際に最近よく見られる、お客さまのお買い物行動を考えてみましょう。<br>インターネットが普及し、情報が溢れ、お客さまはいつでもどこでも情報を入手できる時代になりました。<br>来店前にインターネットで気になる商品を見つけ、下調べをして購入することが当たり前になっています。</p>
      <p class="fz15">お客さまのお買い物行動を考えよう</p>
    <!-- /.description-txt01 --></div>

    <!-- /.cont-box --></div>
<!-- ===========  =========== -->
<!-- ===========  =========== -->
<div class="cont-box cont-box-blog03">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="txt01 pt10 pb10">お客さまの購入フロー例</div>
        </div>
        <div class="string-bottom">
          <p class="mb20"><span class="yellow">●</span>ポイント<br>
          <span class="red fwB">お客さまは来店する前に情報収集しています。<br>
          来店前にWEB上でどれだけお客さまにアプローチできるか？が重要です。</span></p>
          <p class="taC pb20"><img src="/front/images/common/img-flow.png" width="392" alt="お客さまの購入フロー例" style="max-width: 100%;"></p>
        </div>
      </li>
    </ul>

    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

  <!-- /.block-contents --></div>
</section>

<div class="page-next-list02">
  <ul>
    <li><a href="/webskill/detail/why_02">
      <p class="icon"><img src="/front/images/common/img-beginner.png" width="100%" alt="WEBの基礎知識"></p>
      <p class="text">WEBの基礎知識<br>ブログを接客にいかそう</p>
    </a></li>
    <li><a href="/webskill/detail/blogSNS_02">
      <p class="icon"><img src="/front/images/common/ico-pc02.png" width="100%" alt="ブログ・SNSの投稿4ステップ基本は簡単"></p>
      <p class="text">ブログ・SNSの投稿4ステップ<br>基本は簡単</p>
    </a></li>
    <li><a href="/webskill/detail/photo_01">
      <p class="icon"><img src="/front/images/common/img-camera.png" width="100%" alt="写真の印象が重要です"></p>
      <p class="text">写真の印象が重要です</p>
    </a></li>
    <li><a href="/webskill/detail/writting_01">
      <p class="icon"><img src="/front/images/common/img-pen.png" width="100%" alt="紹介文章の書き方"></p>
      <p class="text">紹介文章の書き方</p>
    </a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
