@extends('front.common.layout')

@section('css')
@endsection

@include('front.common.header')

@section('content')
{{-- 以下がコンテンツエリア --}}
<?php
/**
 * Contents
 */
?>
<div class="page-top-visual">
  <p>接客スキルを磨く</p>
<!-- /.page-top-visual --></div>

<section class="cmn-block">
  <header class="cmn-block-title">
    <h1 class="ttl-type01">優秀スタッフの接客スタイルを公開！</h1>
  </header>
  <div class="block-contents">
<?php
  //お知らせ一覧
  //10件でページ送り
?>
    <ul class="cmn-item-list item-list-type02">
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.12</p>
            <p class="shop">◯◯福岡店</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo01.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item04.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo02.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <div class="icon-new">NEW</div>
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo03.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo01.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item04.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo02.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo03.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo01.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item04.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo02.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo03.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
      <li>
        <a href="detail.php">
          <div class="item-photo"><p><img src="/front/images/cms/img-item03.jpg" alt="タイトル"></p></div>
          <div class="item-text">
            <p class="date">2016.12.12</p>
            <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
            <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
          </div>
          <div class="item-logo">
            <p><img src="/front/images/cms/shoplogo01.png" alt="ショップ名"></p>
          </div>
        </a>
      </li>
    </ul>

    <div class="cmn-pager">
      <ul>
        <li class="back"><a href="">BACK</a></li>
        <li class="next"><a href="">NEXT</a></li>
      </ul>
    </div>
  <!-- /.block-contents --></div>
</section>



@endsection


@section('scripts')
@endsection


@include('front.common.footer')
