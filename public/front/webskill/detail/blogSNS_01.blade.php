@extends('front.common.layout')

@section('title', 'ブログやSNSを接客に活用しよう PART1 | SHOP STAFF LEARNING')
@section('description', 'ブログ・SNSで情報発信することは、商品・サービスへの理解を深め、実際の接客スキル向上にも貢献します。')
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
      <div class="title-icon"><img src="/front/images/common/ico-pc02.png" width="100%" alt="ブログやSNSを接客に活用しよう"></div>
      <div class="title-text">ブログやSNSを接客に<br>活用しよう</div>
      <div class="title-part">PART1</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt03">
      ブログ・SNSで情報発信することは、商品・サービスへの理解を深め、実際の接客スキル向上にも貢献します。ぜひ、通常の接客時にもブログ・SNSを活用し、さらにブログの購読やSNSのフォローをおすすめしましょう。
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-blog01">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-point01.png" alt="POINT1"></p>
            <p><img src="/front/images/common/img-diamond.png" alt="POINT1"></p>
          </div>
          <div class="txt01">接客スキルアップに</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span>ブログを書くために撮影したり、文章を書くことで、商品知識や表現力が訓練されるので、接客トークが滑らかに、魅力的になります。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-point02.png" alt="POINT2"></p>
            <p><img src="/front/images/common/img-house.png" alt="POINT2"></p>
          </div>
          <div class="txt01">店頭での接客時</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span>ブログやSNSで掲載したことをトークに織り込み、記事情報をもとに商品を説明。<br><span class="fwB green">（例）ブログでも紹介して、大変人気のある商品です。こちらの商品は新作で～</span></p>
          <p class="txt01"><span class="yellow">●</span>自社のメールマガジンや会員サービスをご案内する時に、加えてご案内する。<br><span class="fwB green">（例）instagramではメルマガよりも早く最新情報や入荷情報をお届けしています。</span></p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-point03.png" alt="POINT3"></p>
            <p><img src="/front/images/common/img-cart.png" alt="POINT3"></p>
          </div>
          <div class="txt01">お会計時・お客さまが<br>帰られるとき</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span>ブログの定期的購読やSNSのフォローを促す。<br><span class="fwB green">（例）来週から新作が沢山入荷する予定です。ブログで随時更新する予定なので、ぜひブログをチェックしてください。<br>（例）instagramでもコーディネートを紹介しているのでぜひフォローしてください</span></p>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

<!-- =========== ブログやSNSから情報発信するときのポイント =========== -->
    <div class="cont-box cont-box-blog02">
    <div class="cont-box-ttl">ブログやSNSから<br>情報発信するときのポイント</div>

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-point01.png" alt="POINT1"></p>
            <p><img src="/front/images/common/img-camera.png" alt="POINT1"></p>
          </div>
          <div class="txt01">とにもかくにも最初に<br>表示される写真が重要！</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="green">●</span>最初にユーザーが見た時に「読みたい！」と思わせる写真・タイトルが重要です。<br>ブログやホームページでも、1枚目の写真が最初に表示されます。<br>1枚目の写真の印象で、読まれる記事か、スルーされる記事かが決まります。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-point02.png" alt="POINT2"></p>
            <p><img src="/front/images/common/img-pen.png" alt="POINT2"></p>
          </div>
          <div class="txt01">たくさんの人に読まれる<br>ことを意識しよう。</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="green">●</span>ブログやSNSはインターネットに繋がっていれば、だれでも読むことができます。幅広い地域のユーザーに読まれることを意識して書きましょう。<br>全然自店を知らなかったお客様が、来店されるチャンスにつながります。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-point03.png" alt="POINT3"></p>
            <p><img src="/front/images/common/img-search.png" alt="POINT3"></p>
          </div>
          <div class="txt01">検索されることを<br>意識しよう。</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="green">●</span>GoogleやYahoo!などの検索サイトからの訪問も多く、検索結果ページに表示されるかどうかがたくさんの人に読まれるブログになるためのポイントです。商品名やブランド名を明記することがカギとなります。</p>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- =========== ブログやSNSから情報発信するときのポイント =========== -->

<!-- =========== まとめ =========== -->
<div class="sammary">
  <p class="title"><span>まとめ</span></p>
  <div class="txt">
    <p class="txt01"><span class="green">●</span>ブログやSNSでの情報発信を接客スキルアップに活用しよう</p>
    <p class="txt01"><span class="green">●</span>お客様と話す時や、会計時など店頭での接客に、ブログ・SNSを紹介しよう</p>
    <p class="txt01"><span class="green">●</span>「最初の写真が重要・たくさんの人に読まれる・検索を意識」を心がけよう</p>
  </div>
</div>
<!-- =========== まとめ =========== -->

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
    </a></li>
    <li><a href="/webskill/detail/why_01">
      <p class="icon"><img src="/front/images/common/img-beginner.png" width="100%" alt="WEBの基礎知識"></p>
      <p class="text">WEBの基礎知識</p>
    </a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
