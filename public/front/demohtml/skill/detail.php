<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="description" content="">
<meta name="keyword" content="">
<title>記事タイトル | 福岡地所 | SHOP STAFF LEARNING</title>
<?php include_once '../include/favicon.php';?>
<?php include_once '../include/touch-icon.php';?>
<?php include_once '../include/ogp.php';?>
<?php /* stylesheet */ ?>
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/skill.css">
<?php /* scripts */ ?>
<script src="../js/lib/modernizr.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/lib/jquery.js"><\/script>')</script>
<script src="../js/lib/jquery.tile.js"></script>
<script src="../js/common.js"></script>
<?php include_once '../include/load-head.php';?>
</head>
<body id="Top" class="page-skill page-skill-detail">
<?php include_once '../include/load-script.php';?>

<div class="wrapper">
<?php
/**
 * Header
 */
?>
<?php include_once '../include/header.php';?>

<?php
/**
 * Contents
 */
?>
<section class="cmn-block">
  <header class="cmn-block-title">
    <h1 class="ttl-type01">優秀スタッフの接客スタイルを公開！</h1>
  </header>
  <div class="block-contents">
<?php
  //記事詳細
  //ロゴは160×160
  //本文中の画像は最大横700縦なり
  //入力がない項目は「div.detail-box」ごと非表示でお願いします。
?>
  <article class="skill-detail">
    <header class="skill-detail-title">
      <div class="photo"><p><img src="../images/cms/img-item03.jpg" alt="タイトル"></p></div>
      <div class="text">
        <div class="date"><p class="icon-new">NEW</p><span>2016.12.12</span></div>
        <p class="shop">◯◯福岡店</p>
        <h1>ショップスタッフ応援ポータルサイトスタート</h1>
      </div>
      <div class="logo">
        <p><img src="../images/cms/shoplogo01.png" alt="ショップ名"></p>
      </div>
    </header>
    <div class="detail-entry">
      <div class="entry-point">
        <p class="title"><span>GOOD POINT!</span></p>
        <div class="txt">
          お客様の気持ちをほぐす楽しい会話の延長で、お客様の普段のスタイルやテイストなど大切なポイントを確認できている接客
        </div>
      <!-- /.entry-point --></div>
      <div class="entry-text">
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      <!-- /.entry-text --></div>
      <div class="entry-movie">
        <p class="title"><span>▼</span>接客スタイルをチェック</p>
        <div class="movie">
          動画入ります
        </div>
      <!-- /.entry-movie --></div>
    <!-- /.detail-entry --></div>
  <!-- /.detail --></article>

  <!-- /.block-contents --></div>
</section>

<div class="page-next">
  <div class="cmn-btn btn-type02"><a href="/card/02/">NEXT</a></div>
<!-- /.page-next --></div>
<ul class="cmn-item-list item-list-type02 next-item">
  <li>
    <a href="/skill/detail.php">
      <div class="item-photo"><p><img src="../images/cms/img-item03.jpg" alt="タイトル"></p></div>
      <div class="item-text">
        <div class="icon-new">NEW</div>
        <p class="date">2016.12.12</p>
        <p class="shop">◯◯福岡店</p>
        <p class="title">ショップスタッフ応援ポータルサイトスタート</p>
        <p class="txt">サブタイトルサブタイトルサブタイトルサブタイトルサブタイトル</p>
      </div>
      <div class="item-logo">
        <p><img src="../images/cms/shoplogo01.png" alt="ショップ名"></p>
      </div>
    </a>
  </li>
</ul>

<?php include_once '../include/cmn-bottom-bnr.php';?>

<?php
/**
 * Footer
 */
?>
<?php include_once '../include/footer.php';?>
<!-- /.wrapper --></div>
<?php include_once '../include/load-foot.php';?>
</body>
</html>
