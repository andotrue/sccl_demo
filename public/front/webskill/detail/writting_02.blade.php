@extends('front.common.layout')

@section('title', 'お客さまを引きつけるブログ・SNSの書き方ー 文章の流れ ー | SHOP STAFF LEARNING')
@section('description', 'ターゲットやターゲットが知りたいことをテンプレートに当てはめてみましょう。')
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
      <div class="title-icon pl15 pr15"><img src="/front/images/common/img-pen.png" width="100%" alt="お客さまを引きつけるブログの書き方"></div>
      <div class="title-text">お客さまを引きつける<br>ブログの書き方<br><span class="fz10 fwN">ー 文章の流れ ー</span></div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt02">
      <a href="" class="fwB">ブログを書く目的を明確にしよう</a>で設定した2.ターゲットや3.ターゲットが知りたいことをテンプレートに当てはめてみましょう。
    <!-- /.description-txt01 --></div>

<!-- ===========  =========== -->
    <div class="cont-box cont-box-write02">

    <ul class="cmn-item-list item-list-type02 cmn-item-string">
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-blog.png" alt="タイトル"></p>
          </div>
          <div class="txt01">タイトル</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span><span class="fwB">ポイント</span><br>必ずブログにタイトルと内容を合わせましょう。タイトルから逸れないように注意。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-hands.png" alt="挨拶"></p>
          </div>
          <div class="txt01">挨拶<span class="fz10 db">挨拶や自己紹介、季節の事柄などを入れ、親近感を演出する</span></div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span><span class="fwB">ポイント</span><br>長文すぎると飽きて読まれなくなってしまうので、2～3行程度に抑えましょう。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-clothes.png" alt="商品名"></p>
          </div>
          <div class="txt01">商品名</div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span><span class="fwB">ポイント</span><br>検索されることを意識して、公式の商品名を記載しましょう。</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="icon">
            <p><img src="/front/images/common/img-book.png" alt="商品を詳しく説明"></p>
          </div>
          <div class="txt01">商品を詳しく説明<span class="fz10 db">ターゲットが知りたいことを記載</span></div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span><span class="fwB">ポイント</span></p>
          <p class="txt01"><span class="yellow fz07">●</span>価格やカラーやサイズのバリエーション情報、品番は忘れずに！着用の場合はスタッフの着用サイズや身長を明記。</p>
          <p class="txt01"><span class="yellow fz07">●</span>内容を盛り込むと読みにくくなるので注意。長文になる場合は、箇条書きで書いたり、段落ごとに改行を入れたりして、読みやすさ・見た目を工夫しましょう。</p>
          <p class="txt01"><span class="yellow fz07">●</span>1記事でたくさんの商品を紹介すると分かりにくくなります。複数商品を紹介したい場合は、新たに別の記事で紹介しましょう。</p>
          <p class="txt01"><span class="yellow fz07">●</span>専門用語は使用しない。</p>
        </div>
      </li>
      <li>
        <div class="string-top taC">
          <div class="txt01 pt20 pb20">コーディネートの紹介</div>
        </div>
        <div class="string-bottom">
          <p class="pb20">（例）薄手で軽く、通気性の良い麻をベースにストレッチの効いた素材で仕立てたジャケットです!</p>
          <p class="pb20">こんな暑い時期にジャケット?<br>と思われるかも知れませんが、見た目からは想像出来ないほど楽な着心地でとても涼しいんです(*^^)v</p>
          <p class="pb20">梅雨寒とも言いますし、半袖1枚のスタイリングを楽しむにはまだ早い今だからこそｵｽｽﾒしたい逸品です!!!</p>
          <p>デザインはシンプルなのでハーフパンツ、スキニー、デニムなどなど様々なｱｲﾃﾑと相性が良く、使いまわせるのもﾎﾟｲﾝﾄですね(^^)/</p>
        </div>
      </li>
      <li>
        <div class="string-top">
          <div class="txt01 pt20 pb20">次の行動を促す<span class="fz10 db">アクションを記載する</span></div>
        </div>
        <div class="string-bottom">
          <p class="txt01"><span class="yellow">●</span><span class="fwB">ポイント</span></p>
          <p class="txt01 pb20"><span class="yellow fz07">●</span>来店・購買を促進するようにアクションを必ず記載しましょう。<br><br>
          （記載例）<br>
          ・f-JOYカードポイントアップ企画の告知<br>
          ・フェア情報の告知<br>・新作入荷→来店促進</p>
          <p>ジャンル別での撮影ポイントを紹介！自店のショップにあった写真の撮り方を見つけましょう。</p>
          <div class="mt20">
            <p class="fwB fz14">応用編（COMING SOON）</p>
            <p><a href="">・商品のみを撮影する場合</a></p>
            <p><a href="">・人物・コーディネートを撮影する場合</a></p>
            <p><a href="">・飲食店の場合</a></p>
            <p><a href="">・サービス系の場合</a></p>
          </div>
        </div>
      </li>
    </ul>
    <!-- /.cont-box --></div>
<!-- ===========  =========== -->

  <!-- /.block-contents --></div>
</section>

<div class="page-next-list02">
  <ul>
    <li><a href="/webskill/detail/writting_01">
      <p class="icon"><img src="/front/images/common/img-pen.png" width="100%" alt="紹介文章の書き方"></p>
      <p class="text">紹介文章の書き方</p>
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
