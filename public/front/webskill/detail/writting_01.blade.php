@extends('front.common.layout')

@section('title', 'お客さまを引きつけるブログ・SNSの書き方 | SHOP STAFF LEARNING')
@section('description', 'ブログを書く目的を明確にしよう。')
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
      <div class="title-icon pl15 pr15"><img src="/front/images/common/img-pen.png" width="100%" alt="お客さまを引きつけるブログ・SNSの書き方"></div>
      <div class="title-text">お客さまを引きつける<br>ブログ・SNSの書き方</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt03">
      <p class="fz15 pb10">ブログを書く目的を明確にしよう</p>
      <p>思いつくままにブログを書いたとしても、たくさんのお客さまに読まれるブログにはなれません。何を書きたいのか？伝えたいのか？を明確にしましょう。</p>
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-write01">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/ico-num01.png" alt="1"></p>
          </div>
          <div class="txt01">タイトル</div>
        </div>
        <div class="string-bottom">
          <p><span class="yellow">●</span>新商品やサービスを紹介する？</p>
          <p><span class="yellow">●</span>商品・サービスを深堀りする？</p>
          <p><span class="yellow">●</span>コーディネートについて紹介する？</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/ico-num02.png" alt="2"></p>
          </div>
          <div class="txt01">ターゲットを決める</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span>どんな人が読む？読んでもらいたい？</p>
          <p class="txt01"><span class="yellow">●</span>来店されるお客さまや自社のターゲットを思い浮かべてみましょう。</p>
          <p class="txt01"><span class="yellow">●</span>年齢／性別／居住地／職業／趣味／好きな芸能人など…</p>
        </div>
      </li>
      <li>
        <div class="string-top m00">
          <div class="icon">
            <p><img src="/front/images/common/ico-num03.png" alt="3"></p>
          </div>
          <div class="txt01">お客さまはどんなことが知りたいのだろうか？を想像する</div>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

    <div class="description-txt02 pl20 pr20">
      書きたいこと整理したら、早速ブログを書いてみましょう！<br>
      <span class="fwB">文章の流れ</span>を参考にして書いてみてください。
    <!-- /.description-txt01 --></div>

  <!-- /.block-contents --></div>
</section>

<div class="page-next-list02">
  <ul>
    <li><a href="/webskill/detail/writting_02">
      <p class="icon"><img src="/front/images/common/img-pen.png" width="100%" alt="紹介文章の書き方"></p>
      <p class="text">紹介文章の書き方<br>文章の流れはこちら</p>
    </a></li>
    <li><a href="/webskill/detail/why_01">
      <p class="icon"><img src="/front/images/common/img-beginner.png" width="100%" alt="WEBの基礎知識"></p>
      <p class="text">WEBの基礎知識</p>
    </a></li>
    <li><a href="/webskill/detail/blogSNS_02">
      <p class="icon"><img src="/front/images/common/ico-pc02.png" width="100%" alt="ブログ・SNSの投稿4ステップ基本は簡単"></p>
      <p class="text">ブログ・SNSの投稿4ステップ<br>基本は簡単</p>
    </a></li>
    <li><a href="/webskill/detail/photo_01">
      <p class="icon"><img src="/front/images/common/img-camera.png" width="100%" alt="写真の印象が重要です"></p>
      <p class="text">写真の印象が重要です</p>
    </a></li>

  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
