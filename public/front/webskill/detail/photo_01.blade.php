@extends('front.common.layout')

@section('title', '撮影基本ステップ | SHOP STAFF LEARNING')
@section('description', '何を撮るのか？誰に伝えたいのか？を整理して撮影すると、より魅力的で効果が期待できる写真が期待できます。')
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
      <div class="title-icon pl15 pr15"><img src="/front/images/common/img-camera.png" width="100%" alt="ブログやSNSを接客に活用しよう"></div>
      <div class="title-text">撮影基本ステップ</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt03">
      何を撮るのか？誰に伝えたいのか？を整理して撮影すると、より魅力的で効果が期待できる写真が期待できます。
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-photo01">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-clothes.png" alt="撮りたいもの（被写体）を決める"></p>
          </div>
          <div class="txt01"><span class="green">1.</span>撮りたいもの（被写体）<br>を決める</div>
        </div>
        <div class="string-bottom">
          <p>商品？コーディネート？</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-text01.png" alt="何を伝えたいのか？を整理する"></p>
          </div>
          <div class="txt01"><span class="green">2.</span>何を伝えたいのか？<br>を整理する</div>
        </div>
        <div class="string-bottom">
          <p>商品を紹介したい？コーディネートを提案したい？</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-phone01.png" alt="スマホのカメラを起動"></p>
          </div>
          <div class="txt01"><span class="green">3.</span>スマホのカメラを起動</div>
        </div>
        <div class="string-bottom">
          <p class="red fwB">■注意<br>写真は1,080px以上のスクエア（正方形）で撮影してください。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-pointmark.png" alt="撮影する場所・構図を決める"></p>
          </div>
          <div class="txt01"><span class="green">4.</span>撮影する場所・<br>構図を決める</div>
        </div>
        <div class="string-bottom">
          <p>商品撮影や人物撮影に合わせて最適な場所・構図を探しましょう。</p>
          <p class="red fwB">特に人物写真は背景が重要！バックヤード、他の商品が映りこみ、ごちゃごちゃした場所ではなく、きれいな背景の場所で撮影を！</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-phone02.png" alt="ピントを合わせ、シャッターボタンをタップ"></p>
          </div>
          <div class="txt01"><span class="green">5.</span>ピントを合わせ、<br>シャッターボタンをタップ</div>
        </div>
        <div class="string-bottom">
          <p>1パターンだけでなく、複数パターンで 何枚か撮影してみましょう。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-phone03.png" alt="写真を確認"></p>
          </div>
          <div class="txt01"><span class="green">6.</span>写真を確認</div>
        </div>
        <div class="string-bottom">
          <p>暗かったり、構図がいまいちだった場合は、アプリで調整。 何枚か撮影してみましょう。</p>
          <p class="red fwB">■注意<br>画像内のフレームやスタンプ、文字入力等のの装飾は控えてください。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-blog.png" alt="ブログ・SNSに投稿"></p>
          </div>
          <div class="txt01"><span class="green">7.</span>ブログ・SNSに投稿</div>
        </div>
      </li>
    </ul>

    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

    <div class="description-txt03 pl20 pr20">
      ステップを理解したら、<br>
      <a href="/webskill/detail/photo_02" class="fwB fz15 green">撮影の基本テクニック</a>を<br>
      読んでみましょう！
    <!-- /.description-txt01 --></div>

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
