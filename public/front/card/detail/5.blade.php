@extends('front.common.layout')

@section('title', 'f-JOY CARDのポイント付与対応について | SHOP STAFF LEARNING')
@section('description', 'キャナルシティ博多・マリノアシティ福岡・リバーウォーク北九州・木の葉モール橋本の4施設でポイントがたまる共通ポイントカードです。')
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
      <div class="title-icon"><img src="/front/images/common/card-icon05.png" width="100%" alt="f-JOY CARDのポイント付与対応について"></div>
      <div class="title-text">f-JOY CARDの<br>ポイント付与対応について</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">

    <div class="cont-box">
      <div class="description-txt01">
        <div class="box-bnr mb15"><img src="/front/images/common/bnr-card-point.png" alt="f-JOY CARD"></div>
        <div class="box-bnr"><img src="/front/images/common/bnr-goldcard.png" alt="ゴールド・ プラチナ会員はいつもポイント3倍"></div>
      <!-- /.description-txt01 --></div>
    <!-- /.cont-box --></div>

<!-- =========== 下記のカードもf-JOYカードと同様にご対応ください。 =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">下記のカードもf-JOYカードと同様にご対応ください。</div>
      <div class="box-bnr p15 mb20">
        <img src="/front/images/common/img-cardlist.png" alt="カードリスト">
      </div>
    <!-- /.cont-box --></div>
<!-- =========== 下記のカードもf-JOYカードと同様にご対応ください。 =========== -->

<!-- =========== ポイントの付与について =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">ポイントの付与について<br>〜お客様がカードをご提示されたら〜</div>
      <div class="point-about">
        <div class="box">
          <p class="txt01"><span class="mark circle">◯</span><span>ポイント付与OK</span><span class="mark cross">✕</span><span>ポイント付与NG</span></p>
          <table>
            <tr>
              <th width="30%"></th>
              <th width="30%">【クレジット】<br>f-JOYクレジットカード<br><span>クレジット機能付き</span></th>
              <th width="30%">【現金カード】<br>f-JOYポイントカード<br><span>クレジット機能なし</span></th>
            </tr>
            <tr>
              <td>現金支払い</td>
              <td><img src="/front/images/common/img-point01-circle.png" alt="現金支払い◯"></td>
              <td><img src="/front/images/common/img-point01-circle.png" alt="現金支払い◯"></td>
            </tr>
            <tr>
              <td>f-JOYクレジットカードでクレジット決済</td>
              <td><img src="/front/images/common/img-point02-circle.png" alt="クレジット決済◯"></td>
              <td><img src="/front/images/common/img-point02-cross.png" alt="クレジット決済✕"></td>
            </tr>
            <tr>
              <td>f-JOYクレジットカード以外でクレジット決済</td>
              <td><img src="/front/images/common/img-point03-cross.png" alt="クレジット決済✕"></td>
              <td><img src="/front/images/common/img-point03-circle.png" alt="クレジット決済◯"></td>
            </tr>
            <tr>
              <td>500ポイント券</td>
              <td><img src="/front/images/common/img-point04-circle.png" alt="500ポイント券◯"></td>
              <td><img src="/front/images/common/img-point04-circle.png" alt="500ポイント券◯"></td>
            </tr>
            <tr>
              <td>指定金券（500円お買い物券含む）</td>
              <td><img src="/front/images/common/img-point05-circle.png" alt="指定金券◯"></td>
              <td><img src="/front/images/common/img-point05-circle.png" alt="指定金券◯"></td>
            </tr>
          </table>
        <!-- /.box --></div>
        <div class="box">
          <p class="ttl">ポイント付与時によくある組み合わせ例</p>
          <div class="box-bnr p10 mb20">
            <img src="/front/images/common/point-ex01.png" alt="1,500円ご購入の場合">
          </div>
          <div class="box-bnr p10">
            <img src="/front/images/common/point-ex02.png" alt="12,500円ご購入の場合">
          </div>
        <!-- /.box --></div>
      <!-- /.point-about --></div>
    <!-- /.cont-box --></div>
<!-- =========== ポイントの付与について =========== -->

<!-- =========== 5倍ポイント時の対応 =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">5倍ポイント時の対応<br><span>※2倍・3倍ポイントなど他のポイントアップ時も同様の計算方法です。</span></div>
      <div class="box-bnr p10">
        <img src="/front/images/common/point-ex03.png" alt="5倍ポイント時の対応">
      </div>
      <p class="mt15">※ポイントレシートに表示はされません。対象外店舗がございます。</p>
    <!-- /.cont-box --></div>
<!-- =========== 5倍ポイント時の対応 =========== -->
  <!-- /.block-contents --></div>
</section>

<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="javascript:void(0)">NEXT</a></div>
  <div class="text">f-JOY CARDの接客トーク集<br><span class="comingsoon-txt">Coming soon</span></div>
<!-- /.page-next --></div>
<div class="page-next-list">
  <ul>
    <li><a href="/card/detail/1/">f-JOY CARDをお客様に薦めよう！</a></li>
    <li><a href="/card/detail/2/">f-JOY CARDってどんなカード?</a></li>
    <li><a href="/card/detail/3/">f-JOY CARDの紹介手順</a></li>
    <li><a href="/card/detail/4/">f-JOY CARDのQ&amp;A</a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
