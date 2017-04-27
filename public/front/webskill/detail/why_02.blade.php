@extends('front.common.layout')

@section('title', 'ブログ・SNSを接客に活用しよう | SHOP STAFF LEARNING')
@section('description', 'お客さまは来店する前に情報収集しています。')
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
      <div class="title-icon pl15"><img src="/front/images/common/img-beginner.png" width="100%" alt="ブログ・SNSを接客に活用しよう"></div>
      <div class="title-text">ブログ・SNSを接客に<br>活用しよう</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt02">
      <p><a href="" class="fwB">なぜブログ・SNSを書くのか？</a>で解説したように<span class="red fwB">お客さまは来店する前に情報収集しています。</span>お客さまが来店された時には、どうして来店したのか？なぜその商品に興味があるのか？を観察し、考え、接客しましょう。</p>
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-why01">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="txt01">通常のお客さまが来店するとき</div>
        </div>
        <div class="string-bottom">
            <p class="txt01"><span class="yellow">●</span><span class="fwB">事前に下調べせず、気になったショップへ来店。</span><br><span class="red fwB">▶ 商品の事前情報がないので、店内を見て回る<br>▶ 疑問点や気になった商品ついてはスタッフに　 尋ねる</span><br>
            <span class="db taC p20"><img src="/front/images/common/arrow01.png" width="30" alt="矢印"></span>
            <spam class="fwB">そのため、丁寧な接客をして欲しい。<br>サイズや素材、シルエットの説明やコーディネートの提案などをする。</spam>
            </p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="txt01">WEBで検索・検討し、事前に情報収集済みのお客さまが来店するとき</div>
        </div>
        <div class="string-bottom">
            <p class="txt01"><span class="yellow">●</span><span class="fwB">WEBで調べてきたので、特定の商品をすぐチェックしたい。</span><br><span class="red fwB">▶ 商品の事前情報があるので、目当ての商品を探す。</span></p>
            <p class="txt01"><span class="yellow">●</span><span class="fwB">基本的な情報はある程度把握している。</span><br><span class="red fwB">▶ スタッフに質問するときは、購入検討している段階</span></p>
            <p class="txt01">
            <span class="db taC p20"><img src="/front/images/common/arrow01.png" width="30" alt="矢印"></span>
            <span class="fwB">・ブログ掲載商品を店頭で探しやすい位置にディスプレイする。<br>・ブログ掲載コーディネートと店頭のボディコーディネートを統一する。<br>・スタッフ全員がブログの掲載情報を把握する。<br>・商品に詳しいため、店頭ではWEBよりも深い情報を提供する。</span>
            </p>
        </div>
      </li>
    </ul>
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
          <p class="taC pb20"><img src="/front/images/common/img-flow02.png" width="392" alt="お客さまの購入フロー例" style="max-width: 100%;"></p>
        </div>
      </li>
    </ul>

    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

<div>
  <div class="p15 mb15">
    <p class="fwB fz15 pb10">検索サイトは優良なコンテンツかどうかを判断している</p>
    <p class="fwB pb15">GoogleやYahoo!などの検索サイトは、“その記事がユーザーに満足してもらえるかどうか”を判断して、検索結果に表示する文章を決めています。</p>
    <p class="fwB pb15"><span class="yellow">●</span>満足してもらえるかどうかの判断のポイント例</p>
    <p class="pb20">
      ・定期的に更新しているか<br>
      ・文章が極端に短かったり、読みずらくないか<br>
      ・記事数などが蓄積されているか<br><br>
      上記を意識したうえで、サイクルを回しましょう。
    </p>
    <p class="taC"><img src="/front/images/common/img-cycle.png" width="392" style="max-width: 100%;" alt="サイクル"></p>
  </div>
  <div class="point-box fwB">
    <span class="yellow">●</span>ポイント<br>
    <span class="red">
    ・検索サイトに表示されるための判断ポイントがある<br>
    ・ブログは検索でヒットされやすいメディア<br>
    ・サイクルを意識し、回すことが重要</span>
  </div>
</div>

  <!-- /.block-contents --></div>
</section>

<div class="page-next-list02">
  <ul>
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
    <li><a href="/webskill/detail/why_01">
      <p class="icon"><img src="/front/images/common/img-beginner.png" width="100%" alt="WEBの基礎知識"></p>
      <p class="text">WEBの基礎知識<br>ブログを接客にいかそう</p>
    </a></li>
    </a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
