@extends('front.common.layout')

@section('title', 'f-JOY CARDってどんなカード? | SHOP STAFF LEARNING')
@section('description', 'お客様との大切なコミュニケーションツールでもあります。')
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
      <div class="title-icon"><img src="/front/images/common/card-icon02.png" width="100%" alt="f-JOY CARDってどんなカード?"></div>
      <div class="title-text">f-JOY CARDって<br>どんなカード?</div>
    <!-- /.page-title --></div>
  <!-- /.page-title-wrapper --></div>

  <div class="block-contents">
    <div class="description-txt02">
      <p>「ｆ-JOYカード」は、お客様の福岡でのお買い物をもっと楽しく、もっとお得にするカードです。<br>
      私たちスタッフにとっても、お客さまにご入会いただければ自分のショップのリピーターになっていただける可能性が上がります。</p>
      <p class="txt01">お客様との大切なコミュニケーションツールでもあります。</p>
    <!-- /.description-txt01 --></div>

<!-- =========== f-JOY CARDについて =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">f-JOY CARDについて</div>
      <p class="box-catch">
        「ｆ-JOYカード」は、館内でのお買い物・ご飲食<span class="txt-l">100円（税抜）につき1ポイント</span>が貯まるお得なポイントカードです。<br>※木の葉モール橋本では<span>200円（税抜）につき1ポイント</span>
      </p>
      <div class="box-bnr mb20"><img src="/front/images/common/bnr-goldcard.png" alt="ゴールド・ プラチナ会員はいつもポイント3倍"></div>
      <p class="box-catch">
        貯まったポイントは<span class="txt-l">500ポイントで500円分のポイントお買物券</span>に交換できます。<br>※ポイント発券機は、各施設インフォメーション（キャナルシティ博多のみ地下1階カードカウンター）横にあります。</span>
      </p>
    <!-- /.cont-box --></div>
<!-- =========== f-JOY CARDについて =========== -->

<!-- =========== f-JOY CARDのタイプは２種類 =========== -->
    <div class="cont-box">
      <div class="cont-box-ttl">f-JOY CARDのタイプは２種類</div>
      <div class="card-accordion accordion">
        <div class="mb30 pt20">
          <p class="acc_trigger">ｆ-JOYポイントカードのご紹介</p>
            <div class="acc_hide">
              <div class="card-type-txt">
                <div class="img"><img src="/front/images/common/img-card01.png" alt="ｆ-JOYポイントカードのご紹介"></div>
                <div class="text">
                  <p class="txt01">【クレジット機能なし】</p>
                  <p class="txt02"><span>●</span>入会金・年会費無料</p>
                  <p class="txt02"><span>●</span>Webでカンタン登録</p>
                  <p class="txt02"><span>●</span>16歳以上ならどなたでも入会可能</p>
                  <p class="txt02"><span>●</span>他社クレジットカードのクレジット支払いでもポイントがつく</p>
                  <p class="txt02"><span>●</span>その場ですぐ発行入会当日からポイントが貯まる</p>
                </div>
              <!-- /.card-type-txt --></div>
              <div class="card-type-table">
                <table>
                  <tr>
                    <th>入会資格</th>
                    <td>16歳以上</td>
                  </tr>
                  <tr>
                    <th>入会費・年会費</th>
                    <td>無　料</td>
                  </tr>
                  <tr>
                    <th>現金でのお支払い時のポイント</th>
                    <td>100円（税抜）につき1ポイント<br><span>※木の葉モール橋本では200円（税抜）につき1ポイント</span></td>
                  </tr>
                  <tr>
                    <th>ｆ-JOYクレジットカードでお支払い時のポイント</th>
                    <td>な　し</td>
                  </tr>
                  <tr>
                    <th>上記以外のクレジットカードでお支払い時のポイント</th>
                    <td>100円（税抜）につき1ポイント<br><span>※木の葉モール橋本では200円（税抜）につき1ポイント</span></td>
                  </tr>
                  <tr>
                    <th>駐車サービス</th>
                    <td>な　し</td>
                  </tr>
                  <tr>
                    <th>カード会員特典</th>
                    <td>一部店舗からの特典あり</td>
                  </tr>
                  <tr>
                    <th>クーポンサービス</th>
                    <td>参加店舗で使える期間限定クーポンサービスあり<br><span>※クーポンの発券はインフォメーション横クーポン兼用発券機(白)にて対応</span></td>
                  </tr>
                  <tr>
                    <th>ゴールド会員<br>プラチナ会員</th>
                    <td>1/1～12/31までの利用額<br>20万円（税抜）以上→翌年［ゴールド会員］<br>50万円（税抜）以上→翌年［プラチナ会員］<br><br>
                    いつでもポイント3倍<br><span>※翌年1月1日～12月31日まで</span>
                    </td>
                  </tr>
                </table>
              <!-- /.card-type-table --></div>
            </div>
        </div>
        <div class="mb30">
          <p class="acc_trigger">ｆ-JOYクレジットカードのご紹介</p>
            <div class="acc_hide">
              <div class="card-type-txt">
                <div class="img"><img src="/front/images/common/img-card02.png" alt="ｆ-JOYクレジットカードのご紹介"></div>
                <div class="text">
                  <p class="txt01">【クレジット機能付】</p>
                  <p class="txt02"><span>●</span>入会金・年会費無料</p>
                  <p class="txt02"><span>●</span>ｆ-JOYクレジット決済でさらに1ポイントプラス</p>
                  <p class="txt02"><span>●</span>駐車料金サービスあり！</p>
                  <p class="txt02"><span>●</span>仮カード発行で入会当日からポイントが貯まる</p>
                </div>
              <!-- /.card-type-txt --></div>
              <div class="card-type-table">
                <table>
                  <tr>
                    <th>入会資格</th>
                    <td>18歳以上<span> ※学生は保護者の承諾が必要</span></td>
                  </tr>
                  <tr>
                    <th>入会費・年会費</th>
                    <td>無　料</td>
                  </tr>
                  <tr>
                    <th>現金でのお支払い時のポイント</th>
                    <td>100円（税抜）につき1ポイント<br><span>※木の葉モール橋本では200円（税抜）につき1ポイント</span></td>
                  </tr>
                  <tr>
                    <th>ｆ-JOYクレジットカードでお支払い時のポイント</th>
                    <td>クレジット決済サービス<br>さらに1ポイントプラス</td>
                  </tr>
                  <tr>
                    <th>上記以外のクレジットカードでお支払い時のポイント</th>
                    <td>ポイント対象外</td>
                  </tr>
                  <tr>
                    <th>駐車サービス</th>
                    <td>1時間無料<span> ※事前精算機にて対応</span></td>
                  </tr>
                  <tr>
                    <th>カード会員特典</th>
                    <td>一部店舗からの特典あり</td>
                  </tr>
                  <tr>
                    <th>クーポンサービス</th>
                    <td>参加店舗で使える期間限定クーポンサービスあり<br><span>※クーポンの発券はインフォメーション横クーポン兼用発券機(白)にて対応</span></td>
                  </tr>
                  <tr>
                    <th>ゴールド会員<br>プラチナ会員</th>
                    <td>1/1～12/31までの利用額<br>20万円（税抜）以上→翌年［ゴールド会員］<br>50万円（税抜）以上→翌年［プラチナ会員］<br><br>
                    いつでもポイント3倍<br><span>※翌年1月1日～12月31日まで</span>
                    </td>
                  </tr>
                </table>
              <!-- /.card-type-table --></div>
            </div>
        </div>
      </div>
    <!-- /.cont-box --></div>
<!-- =========== f-JOY CARDのタイプは２種類 =========== -->


  <!-- /.block-contents --></div>
</section>

<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="/card/detail/3/">NEXT</a></div>
  <div class="text">f-JOY CARDの紹介手順</div>
<!-- /.page-next --></div>
<div class="page-next-list">
  <ul>
    <li><a href="/card/detail/1/">f-JOY CARDをお客様に薦めよう！</a></li>
    <li><a href="/card/detail/4/">f-JOY CARDのQ&amp;A</a></li>
    <li><a href="/card/detail/5/">f-JOY CARDのポイント付与対応について</a></li>
    <li><a href="/card/detail/6/">f-JOY CARDの接客トーク集</a></li>
  </ul>
<!-- /.page-next-list --></div>

@endsection


@section('scripts')
@endsection


@include('front.common.footer')
