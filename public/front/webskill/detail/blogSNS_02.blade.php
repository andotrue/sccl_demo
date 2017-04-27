@extends('front.common.layout')

@section('title', 'ブログやSNSを接客に活用しよう PART2 | SHOP STAFF LEARNING')
@section('description', 'ブログ・SNS投稿の基本は簡単 4ステップ')
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
      <div class="title-part">PART2</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt01 taC">
      <p class="txt01">ブログ・SNS投稿　4ステップ</p>
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-blog03">
      <p class="box-catch">ブログを投稿したことがない、ブログが苦手・・・という人も、まずはブログを投稿してみましょう。</p>
      <p class="box-catch03"><span>基本は簡単　4ステップ</span></p>


    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-pop"><img src="/front/images/common/catch-step01.png" width="220" alt="この写真素敵！読んでみたい！"></div>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-step01.png" alt="STEP1"></p>
            <p><img src="/front/images/common/img-camera.png" alt="STEP1"></p>
          </div>
          <div class="txt01">キレイな写真を撮る</div>
        </div>
        <div class="string-bottom">
          <p class="txt02"><span class="red fwB">文章が苦手でもステキな写真があれば、言葉以上の世界観が伝わりやすい！</span></p>
          <p>
            写真の撮り方について知りたいという方は、<br>
            <a href="/webskill/detail/photo_01" class="green">・撮影の基本ステップ</a><br>
            もっと詳しく知りたい人は<br>
            <a href="javascript:void(0)" class="green">・商品カテゴリー別撮影テクニックcomingsoon</a><br>
            をチェック！
          </p>
        </div>
      </li>
      <li>
        <div class="string-pop"><img src="/front/images/common/catch-step02.png" width="220" alt="どんな内容なんだろう気になる"></div>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-step02.png" alt="STEP2"></p>
            <p><img src="/front/images/common/img-pen.png" alt="STEP2"></p>
          </div>
          <div class="txt01">魅力的なタイトルと文章を<br>入力する</div>
        </div>
        <div class="string-bottom">
          <p class="txt02"><span class="red fwB">パッと目に入って読みたくなるタイトルを心がけましょう。<br>文章には必ず、商品名・価格を書きましょう</span></p>
          <p><span class="green">■</span>OK例<br>ガウチョパンツ　着まわしコーディネート<br>夏のトレンド＊スポーティーなポロワンピースのご紹介。<br><br>
          <span class="green">■</span>NG例<br>新作入荷・おすすめアイテム</p>
        </div>
      </li>
      <li>
        <div class="string-pop"><img src="/front/images/common/catch-step03.png" width="220" alt="来店してみたい欲しい！"></div>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-step03.png" alt="STEP3"></p>
            <p><img src="/front/images/common/img-blog.png" alt="STEP3"></p>
          </div>
          <div class="txt01">投稿する</div>
        </div>
        <div class="string-bottom">
          <p class="txt02"><span class="red fwB">投稿したら、必ずWEBサイトやSNSでアップされたかどうかを確認しましょう。</span></p>
        </div>
      </li>
      <li>
        <div class="string-pop"><img src="/front/images/common/catch-step04.png" width="220" alt="新作入荷してるかな？また読んでみよう！"></div>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/txt-step04.png" alt="STEP4"></p>
            <p><img src="/front/images/common/img-calendar.png" alt="STEP4"></p>
          </div>
          <div class="txt01">定期的に更新！</div>
        </div>
        <div class="string-bottom">
          <p class="txt02 taC pl30 pr30"><img src="/front/images/common/img-blogstep.png" alt="定期的に更新！" style="max-width: 100%;"></p>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- ===========  =========== -->


  <!-- /.block-contents --></div>
</section>

<div class="page-next-list02">
  <ul>
    <li><a href="/webskill/detail/photo_02">
      <p class="icon"><img src="/front/images/common/img-camera.png" width="100%" alt="写真の印象が重要です"></p>
      <p class="text">写真の印象が重要です<br>撮影基本ステップはこちら</p>
    </a></li>
    <li><a href="/webskill/detail/writting_01">
      <p class="icon"><img src="/front/images/common/img-pen.png" width="100%" alt="紹介文章の書き方"></p>
      <p class="text">紹介文章の書き方</p>
    </a></li>
    <li><a href="/webskill/detail/why_01">
      <p class="icon"><img src="/front/images/common/img-beginner.png" width="100%" alt="WEBの基礎知識"></p>
      <p class="text">WEBの基礎知識</p>
    </a></li>
    <li><a href="/webskill/detail/blogSNS_01">
      <p class="icon"><img src="/front/images/common/ico-pc02.png" width="100%" alt="ブログ・SNSの投稿4ステップ基本は簡単"></p>
      <p class="text">ブログ・SNSを接客に活かす</p>
    </a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
