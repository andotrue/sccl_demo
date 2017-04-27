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
<?php /* scripts */ ?>
<script src="../js/lib/modernizr.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/lib/jquery.js"><\/script>')</script>
<script src="../js/lib/jquery.tile.js"></script>
<script src="../js/common.js"></script>
<?php include_once '../include/load-head.php';?>
</head>
<body id="Top" class="page-information">
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
    <h1 class="ttl-type02">
      <span class="ttltxt-en">Information</span>
      <span class="ttltxt-ja">お知らせ</span>
    </h1>
  </header>
  <div class="block-contents">
<?php
  //記事詳細
  //ロゴは160×160
  //本文中の画像は最大横700縦なり
  //入力がない項目は「div.detail-box」ごと非表示でお願いします。
?>
  <article class="detail">
    <header class="detail-title">
      <div class="logo">
        <p><img src="../images/cms/shoplogo04.png" alt="ショップ名"></p>
      </div>
      <div class="text">
        <div class="date"><p class="icon-new">NEW</p><span>2016.12.12</span></div>
        <h1>ショップスタッフ応援ポータルサイトスタートルサイトスタートルサイトスタート</h1>
      </div>
    </header>
    <div class="detail-box box-sub-ttl">
      サブタイトルが入りますサブタイトルが入りますサブタイトルが入りますサブタイトルが入りますサブタイトルが入りますサブタイトルが入りますサブタイトルが入りますサブタイトルが入りますサブタイトルが入ります
    <!-- /.detail-box --></div>
    <?php // 本文 //?>
    <div class="detail-box box-entry">
      テキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいります<br><br>
      <img src="../images/cms/img-detail01.jpg"><br><br>
      テキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいりますテキストはいります
    <!-- /.detail-box --></div>
    <div class="detail-box box-link">
      <ul>
        <li><a href="">店長会資料1はコチラ</a></li>
        <li><a href="" target="_blank">店長会資料2はコチラ</a></li>
        <li><a href="">店長会資料3はコチラ</a></li>
      </ul>
    <!-- /.detail-box --></div>
  <!-- /.detail --></article>

    <div class="cmn-pager">
      <ul>
        <li class="back"><a href="">BACK</a></li>
        <li class="next"><a href="">NEXT</a></li>
      </ul>
    </div>
  <!-- /.block-contents --></div>
</section>

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
