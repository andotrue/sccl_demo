@extends('front.common.layout')

@section('title', 'f-JOY CARDのQ&amp;A | SHOP STAFF LEARNING')
@section('description', 'f-JOY CARDに関するQ&amp;Aのご紹介')
@section('keyword', '福岡地所,ショップスタッフラーニング, SHOP STAFF LEARNING,接客,f-JOY CARD,ポイントカード')

@section('css')
<link rel="stylesheet" href="/front/css/card.css">
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<section class="cmn-block cmn-block-detail">
  <header class="cmn-block-title">
    <h1 class="ttl-type02">
      <span class="ttltxt-en">f-JOY CARD</span>
      <span class="ttltxt-ja">f-JOY CARDのススメ方</span>
    </h1>
  </header>
  <div class="page-title-wrapper">
    <div class="page-title">
      <div class="title-icon"><img src="/front/images/common/card-icon04.png" width="100%" alt="f-JOY CARDのQ&amp;A"></div>
      <div class="title-text">f-JOY CARDの<br>Q&amp;A</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">

<!-- =========== ポイントカード紹介の手順 =========== -->
    <div class="cont-box">
    <ul class="cmn-item-list item-list-type02 cmn-item-faq">
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q01.png" alt="Q1"></p>
          <p class="txt">カードを忘れたけど、後日ポイントをつけることはできますか？</p>
        </div>
        <div class="answer">
          お買い物当日の精算時にポイントカードをお持ちでないと、ポイントは加算できません。<br>※必ず精算時に「ポイントカードはお持ちですか？」とお声がけをして下さい。
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q02.png" alt="Q2"></p>
          <p class="txt">その日のポイントはその日に使えますか？</p>
        </div>
        <div class="answer">
          ポイントは、ご利用の翌日以降に反映されますので、ご利用当日は使えません。<br>※ポイントの確認も翌日以降に可能
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q03.png" alt="Q3"></p>
          <p class="txt">ポイントの確認はどこでできますか？</p>
        </div>
        <div class="answer">
          インフォメーション横のポイント発券機で前日までのポイントが確認できます。<br>ポイントカードWEBサイトに登録するとパソコンや携帯からも確認できます。
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q04.png" alt="Q4"></p>
          <p class="txt">店舗で受け取った申込書はどうしたら良いですか？</p>
        </div>
        <div class="answer">
          発行コード入力があるので、こちらを見ながら入力してください。<br>※登録が完了しないとポイント券の払出が出来ません。
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q05.png" alt="Q5"></p>
          <p class="txt">２枚のカードのポイントを合算できますか？</p>
        </div>
        <div class="answer">
          合算はできません。
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q06.png" alt="Q6"></p>
          <p class="txt">カードをなくしたけどどうしたら良いですか？</p>
        </div>
        <div class="answer">
          必ずインフォメーションをご案内下さい。<br>※紛失・破損による再発行については、手数料100円がかかります
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q07.png" alt="Q7"></p>
          <p class="txt">お買物券を発券するときの暗証番号は？</p>
        </div>
        <div class="answer">
          暗証番号は登録電話番号の下4桁です。
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q08.png" alt="Q8"></p>
          <p class="txt">返品の場合、ポイントのマイナスは必要ですか？</p>
        </div>
        <div class="answer">
          はい、必要です。管理事務所に提出してください。<br>
          「ポイント付与申請書」に記入し、当日の日報袋で管理事務所へ提出してください。<br>
          <span>※INFOX端末でのマイナス処理は絶対にしないで下さい。</span>
        </div>
      </li>
      <li>
        <div class="question">
          <p class="icon"><img src="/front/images/common/ico-q09.png" alt="Q9"></p>
          <p class="txt">カードが磁器不良の場合、どうしたら良いですか？</p>
        </div>
        <div class="answer">
          お客様には、各施設インフォメーション（キャナルシティ博多のみ地下1階カードカウンター）へ行くようご案内ください。<br>
          ※カードを交換します。<br>
          ※「クレジット機能付きカード」の場合は、下記ご案内下さい。<br><br>
          VISA ⇒ 九州カード/紛失・盗難窓口<br>
          TEL：0120-742-494（24時間対応）<br><br>
          JCB・Master ⇒ ワイジェイカード/紛失・盗難窓口<br>
          TEL：0120-71-5971 (24時間対応）
        </div>
      </li>
    </ul>

    <div class="description-txt01 taC mt30">
      <p class="txt01">その他お問合せは各施設管理事務所スタッフにお尋ねください。</p>
    <!-- /.description-txt01 --></div>

    <!-- /.cont-box --></div>
<!-- =========== ポイントカード紹介の手順 =========== -->

  <!-- /.block-contents --></div>
</section>

<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="/card/detail/5/">NEXT</a></div>
  <div class="text">f-JOY CARDのポイント付与対応について</div>
<!-- /.page-next --></div>
<div class="page-next-list">
  <ul>
    <li><a href="/card/detail/1/">f-JOY CARDをお客様に薦めよう！</a></li>
    <li><a href="/card/detail/2/">f-JOY CARDってどんなカード?</a></li>
    <li><a href="/card/detail/3/">f-JOY CARDの紹介手順</a></li>
    <li><a href="/card/detail/6/">f-JOY CARDの接客トーク集</a></li>
  </ul>
<!-- /.page-next-list --></div>
@endsection


@section('scripts')
@endsection


@include('front.common.footer')
