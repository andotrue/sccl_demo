-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 4 月 27 日 16:31
-- サーバのバージョン： 5.6.33
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sccl-demo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `accesslogs`
--

CREATE TABLE `accesslogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `logdate` date NOT NULL,
  `userId` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagePath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `accesslogs`
--

INSERT INTO `accesslogs` (`id`, `logdate`, `userId`, `type`, `pagePath`, `pageTitle`, `count`, `created_at`, `updated_at`) VALUES
(1, '2017-01-12', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(2, '2017-01-12', 2, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 10, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(3, '2017-01-12', 2, 'pageviews', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(4, '2017-01-12', 2, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 3, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(5, '2017-01-12', 2, 'pageviews', '/information/detail/41', 'おしらせ詳細 | デモタイトル6～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(6, '2017-01-12', 2, 'pageviews', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 5, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(7, '2017-01-12', 2, 'pageviews', '/skill/detail/8', '木の葉モール橋本 カルディコーヒーファーム（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(8, '2017-01-12', 1, 'pageviews', '/skill/detail/9', 'キャナルシティ博多 ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 1, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(9, '2017-01-12', 2, 'pageviews', '/skill/detail/9', 'キャナルシティ博多 ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(10, '2017-01-12', 2, 'pageviews', '/webskill/detail/blogSNS_01', 'ブログやSNSを接客に活用しよう PART1 | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(11, '2017-01-12', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(12, '2017-01-12', 2, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(13, '2017-01-12', 2, 'uniqueDimensionCombinations', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(14, '2017-01-12', 2, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(15, '2017-01-12', 2, 'uniqueDimensionCombinations', '/information/detail/41', 'おしらせ詳細 | デモタイトル6～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(16, '2017-01-12', 2, 'uniqueDimensionCombinations', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(17, '2017-01-12', 2, 'uniqueDimensionCombinations', '/skill/detail/8', '木の葉モール橋本 カルディコーヒーファーム（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(18, '2017-01-12', 1, 'uniqueDimensionCombinations', '/skill/detail/9', 'キャナルシティ博多 ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 1, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(19, '2017-01-12', 2, 'uniqueDimensionCombinations', '/skill/detail/9', 'キャナルシティ博多 ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(20, '2017-01-12', 2, 'uniqueDimensionCombinations', '/webskill/detail/blogSNS_01', 'ブログやSNSを接客に活用しよう PART1 | SHOP STAFF LEARNING', 2, '2017-01-12 10:24:06', '2017-01-12 10:24:06'),
(21, '2017-01-06', 1, 'pageviews', '/', 'ほげほげ', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(22, '2017-01-06', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 9, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(23, '2017-01-06', 1, 'pageviews', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 4, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(24, '2017-01-06', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 |', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(25, '2017-01-06', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(26, '2017-01-06', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | | | SHOP STAFF LEARNING', 2, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(27, '2017-01-06', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | SHOP STAFF LEARNING', 12, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(28, '2017-01-06', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 7, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(29, '2017-01-06', 1, 'pageviews', '/information/detail/41', 'おしらせ詳細 | デモタイトル6～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(30, '2017-01-06', 1, 'pageviews', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 7, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(31, '2017-01-06', 1, 'pageviews', '/skill', '福岡地所 | SHOP STAFF LEARNING', 11, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(32, '2017-01-06', 1, 'uniqueDimensionCombinations', '/', 'ほげほげ', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(33, '2017-01-06', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(34, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(35, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 |', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(36, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:09', '2017-01-17 10:00:09'),
(37, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | | | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:10', '2017-01-17 10:00:10'),
(38, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:10', '2017-01-17 10:00:10'),
(39, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:10', '2017-01-17 10:00:10'),
(40, '2017-01-06', 1, 'uniqueDimensionCombinations', '/information/detail/41', 'おしらせ詳細 | デモタイトル6～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:10', '2017-01-17 10:00:10'),
(41, '2017-01-06', 1, 'uniqueDimensionCombinations', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:10', '2017-01-17 10:00:10'),
(42, '2017-01-06', 1, 'uniqueDimensionCombinations', '/skill', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-17 10:00:10', '2017-01-17 10:00:10'),
(43, '2017-01-19', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(44, '2017-01-19', 5, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 3, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(45, '2017-01-19', 5, 'pageviews', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(46, '2017-01-19', 5, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(47, '2017-01-19', 5, 'pageviews', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(48, '2017-01-19', 5, 'pageviews', '/skill/detail/9', 'キャナルシティ博多 ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(49, '2017-01-19', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(50, '2017-01-19', 5, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(51, '2017-01-19', 5, 'uniqueDimensionCombinations', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(52, '2017-01-19', 5, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(53, '2017-01-19', 5, 'uniqueDimensionCombinations', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(54, '2017-01-19', 5, 'uniqueDimensionCombinations', '/skill/detail/9', 'キャナルシティ博多 ロックポート ストア（SC接客ロールプレイングコンテスト九州・沖縄大会）| SHOP STAFF LEARNING', 1, '2017-01-19 03:19:50', '2017-01-19 03:19:50'),
(55, '2016-12-01', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:53:17', '2017-01-23 07:53:17'),
(56, '2016-12-01', 1, 'pageviews', '/information', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:53:17', '2017-01-23 07:53:17'),
(57, '2016-12-01', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:53:17', '2017-01-23 07:53:17'),
(58, '2016-12-01', 1, 'uniqueDimensionCombinations', '/information', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:53:17', '2017-01-23 07:53:17'),
(59, '2016-12-02', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:53:50', '2017-01-23 07:53:50'),
(60, '2016-12-02', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:53:51', '2017-01-23 07:53:51'),
(61, '2016-12-06', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:54:05', '2017-01-23 07:54:05'),
(62, '2016-12-06', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:54:06', '2017-01-23 07:54:06'),
(63, '2016-11-18', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 5, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(64, '2016-11-18', 0, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(65, '2016-11-18', 1, 'pageviews', '/information', '福岡地所 | SHOP STAFF LEARNING', 3, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(66, '2016-11-18', 0, 'pageviews', '/information', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(67, '2016-11-18', 1, 'pageviews', '/information/detail/23', '福岡地所 | SHOP STAFF LEARNING', 6, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(68, '2016-11-18', 0, 'pageviews', '/information/detail/23', '福岡地所 | SHOP STAFF LEARNING', 3, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(69, '2016-11-18', 1, 'pageviews', '/information/detail/24', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(70, '2016-11-18', 0, 'pageviews', '/information/detail/24', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(71, '2016-11-18', 1, 'pageviews', '/skill', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:28', '2017-01-23 07:56:28'),
(72, '2016-11-18', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(73, '2016-11-18', 0, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(74, '2016-11-18', 1, 'uniqueDimensionCombinations', '/information', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(75, '2016-11-18', 0, 'uniqueDimensionCombinations', '/information', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(76, '2016-11-18', 1, 'uniqueDimensionCombinations', '/information/detail/23', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(77, '2016-11-18', 0, 'uniqueDimensionCombinations', '/information/detail/23', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(78, '2016-11-18', 1, 'uniqueDimensionCombinations', '/information/detail/24', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(79, '2016-11-18', 0, 'uniqueDimensionCombinations', '/information/detail/24', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(80, '2016-11-18', 1, 'uniqueDimensionCombinations', '/skill', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:56:29', '2017-01-23 07:56:29'),
(81, '2016-11-21', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:57:11', '2017-01-23 07:57:11'),
(82, '2016-11-21', 1, 'pageviews', '/information', '福岡地所 | SHOP STAFF LEARNING', 6, '2017-01-23 07:57:11', '2017-01-23 07:57:11'),
(83, '2016-11-21', 1, 'pageviews', '/information/detail/23', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:11', '2017-01-23 07:57:11'),
(84, '2016-11-21', 1, 'pageviews', '/information/detail/23?preview=1&param1=1479709151', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:11', '2017-01-23 07:57:11'),
(85, '2016-11-21', 1, 'pageviews', '/information/detail/24?preview=1&param1=1479709941', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:11', '2017-01-23 07:57:11'),
(86, '2016-11-21', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:12', '2017-01-23 07:57:12'),
(87, '2016-11-21', 1, 'uniqueDimensionCombinations', '/information', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-23 07:57:12', '2017-01-23 07:57:12'),
(88, '2016-11-21', 1, 'uniqueDimensionCombinations', '/information/detail/23', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:12', '2017-01-23 07:57:12'),
(89, '2016-11-21', 1, 'uniqueDimensionCombinations', '/information/detail/23?preview=1&param1=1479709151', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:12', '2017-01-23 07:57:12'),
(90, '2016-11-21', 1, 'uniqueDimensionCombinations', '/information/detail/24?preview=1&param1=1479709941', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-23 07:57:12', '2017-01-23 07:57:12'),
(91, '2017-01-10', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 7, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(92, '2017-01-10', 1, 'pageviews', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(93, '2017-01-10', 1, 'pageviews', '/information/detail/24', 'おしらせ詳細 | デモタイトル30 | マリノアシティ福岡 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(94, '2017-01-10', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(95, '2017-01-10', 1, 'pageviews', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(96, '2017-01-10', 1, 'pageviews', '/skill/detail/8', '(not set)', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(97, '2017-01-10', 1, 'pageviews', '/skill/detail/8', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(98, '2017-01-10', 1, 'pageviews', '/skill/detail/9', '(not set)', 3, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(99, '2017-01-10', 1, 'pageviews', '/skill/detail/9', 'abc', 1, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(100, '2017-01-10', 1, 'pageviews', '/skill/detail/9', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-27 03:22:38', '2017-01-27 03:22:38'),
(101, '2017-01-10', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(102, '2017-01-10', 1, 'uniqueDimensionCombinations', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(103, '2017-01-10', 1, 'uniqueDimensionCombinations', '/information/detail/24', 'おしらせ詳細 | デモタイトル30 | マリノアシティ福岡 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(104, '2017-01-10', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(105, '2017-01-10', 1, 'uniqueDimensionCombinations', '/skill', '接客スキルを磨く | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(106, '2017-01-10', 1, 'uniqueDimensionCombinations', '/skill/detail/8', '(not set)', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(107, '2017-01-10', 1, 'uniqueDimensionCombinations', '/skill/detail/8', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(108, '2017-01-10', 1, 'uniqueDimensionCombinations', '/skill/detail/9', '(not set)', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(109, '2017-01-10', 1, 'uniqueDimensionCombinations', '/skill/detail/9', 'abc', 1, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(110, '2017-01-10', 1, 'uniqueDimensionCombinations', '/skill/detail/9', '福岡地所 | SHOP STAFF LEARNING', 2, '2017-01-27 03:22:39', '2017-01-27 03:22:39'),
(111, '2017-01-11', 1, 'pageviews', '/skill/detail/9', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:43', '2017-01-27 03:22:43'),
(112, '2017-01-11', 1, 'uniqueDimensionCombinations', '/skill/detail/9', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:43', '2017-01-27 03:22:43'),
(113, '2017-01-16', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:55', '2017-01-27 03:22:55'),
(114, '2017-01-16', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:22:55', '2017-01-27 03:22:55'),
(115, '2017-01-23', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:10', '2017-01-27 03:23:10'),
(116, '2017-01-23', 1, 'pageviews', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:10', '2017-01-27 03:23:10'),
(117, '2017-01-23', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 2, '2017-01-27 03:23:10', '2017-01-27 03:23:10'),
(118, '2017-01-23', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:11', '2017-01-27 03:23:11'),
(119, '2017-01-23', 1, 'uniqueDimensionCombinations', '/information', 'おしらせ一覧 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:11', '2017-01-27 03:23:11'),
(120, '2017-01-23', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:11', '2017-01-27 03:23:11'),
(121, '2017-01-24', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:12', '2017-01-27 03:23:12'),
(122, '2017-01-24', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:13', '2017-01-27 03:23:13'),
(123, '2017-01-25', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:15', '2017-01-27 03:23:15'),
(124, '2017-01-25', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:15', '2017-01-27 03:23:15'),
(125, '2017-01-26', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 2, '2017-01-27 03:23:17', '2017-01-27 03:23:17'),
(126, '2017-01-26', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-01-27 03:23:18', '2017-01-27 03:23:18'),
(127, '2017-02-13', 1, 'pageviews', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-02-13 18:00:10', '2017-02-13 18:00:10'),
(128, '2017-02-13', 1, 'pageviews', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-02-13 18:00:10', '2017-02-13 18:00:10'),
(129, '2017-02-13', 1, 'uniqueDimensionCombinations', '/', '福岡地所 | SHOP STAFF LEARNING', 1, '2017-02-13 18:00:10', '2017-02-13 18:00:10'),
(130, '2017-02-13', 1, 'uniqueDimensionCombinations', '/information/detail/33', 'おしらせ詳細 | デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー | キャナルシティ博多 | SHOP STAFF LEARNING', 1, '2017-02-13 18:00:10', '2017-02-13 18:00:10');

-- --------------------------------------------------------

--
-- テーブルの構造 `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `image_msts`
--

CREATE TABLE `image_msts` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `open_flg` tinyint(4) NOT NULL,
  `open_date` datetime NOT NULL,
  `close_date` datetime DEFAULT NULL,
  `filedetail` text COLLATE utf8_unicode_ci,
  `created_tool_user_id` int(11) NOT NULL,
  `updated_tool_user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `image_msts`
--

INSERT INTO `image_msts` (`id`, `imagename`, `category`, `open_flg`, `open_date`, `close_date`, `filedetail`, `created_tool_user_id`, `updated_tool_user_id`, `created_at`, `updated_at`) VALUES
(5, 'メインバナーダミー3', 1, 1, '2016-11-02 00:00:00', NULL, '[{"filename":"img-slider01.jpg","mimetype":"image\\/jpeg","filesize":157251,"linkurl":"http:\\/\\/google.co.jp","link_new_window":"1"}]', 1, 1, '2016-11-02 11:41:34', '2016-11-16 09:31:42'),
(6, 'メインバナーダミー4', 1, 1, '2016-11-07 00:00:00', '2016-11-30 00:00:00', '[{"filename":"bnr-fjoycard.png","mimetype":"image\\/png","filesize":38738,"linkurl":"","link_new_window":"1"}]', 1, 1, '2016-11-07 02:16:43', '2016-11-07 08:29:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_flg` tinyint(4) NOT NULL,
  `open_date` datetime NOT NULL,
  `close_date` datetime DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  `article` text COLLATE utf8_unicode_ci,
  `pdffile_names` text COLLATE utf8_unicode_ci,
  `created_tool_user_id` int(11) NOT NULL,
  `updated_tool_user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `information`
--

INSERT INTO `information` (`id`, `title`, `sub_title`, `open_flg`, `open_date`, `close_date`, `store_id`, `article`, `pdffile_names`, `created_tool_user_id`, `updated_tool_user_id`, `created_at`, `updated_at`) VALUES
(1, 'テストタイトル1', NULL, 1, '2016-09-14 01:00:00', '2026-09-14 01:00:00', 1, 'test1', NULL, 2, 2, '2016-09-26 03:18:22', '2016-09-26 03:31:11'),
(2, 'デモタイトル', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-10-11 09:44:44', '2016-10-11 09:44:44'),
(3, 'デモタイトル5', NULL, 0, '2016-10-01 00:00:00', '2016-10-31 00:00:00', 1, '<p><img src="/img/information/index.gif" alt="" />&nbsp;</p>\r\n<h1><em><strong>hogehoge</strong></em></h1>', NULL, 1, 1, '2016-10-13 04:30:50', '2016-10-13 09:55:25'),
(4, 'デモタイトル4', NULL, 1, '2016-10-01 00:00:00', '2016-10-26 00:00:00', 3, '<p><a href="/yahoo.co.jp" target="_blank">yahoo</a></p>\n<p><img src="/img/information/stones_exileonmainstreet.jpg" alt="" width="293" height="293" />&nbsp;</p>', NULL, 1, 1, '2016-10-13 10:33:45', '2016-10-13 10:35:01'),
(5, 'デモタイトル6', 'デモサブタイトル', 1, '2016-10-06 00:00:00', '2016-10-31 00:00:00', 3, '<p>fafadfadfa</p>\r\n<p>afadava</p>\r\n<p>afmapjmva</p>\r\n<p>mavoladad</p>\r\n<p><img src="/img/tmp/love-you-live.jpg" alt="" /></p>', NULL, 1, 1, '2016-10-13 10:37:29', '2016-11-21 07:05:41'),
(6, 'デモタイトル10', '', 0, '2016-10-24 00:00:00', '2016-11-03 00:00:00', 1, '<p>テスト１０</p>', '', 1, 1, '2016-10-24 04:43:11', '2016-10-24 04:43:11'),
(8, 'デモタイトル12', 'デモサブタイトル12', 0, '2016-10-07 00:00:00', '2016-11-03 00:00:00', 1, '', '', 1, 1, '2016-10-24 06:01:24', '2016-10-24 06:01:24'),
(9, 'デモタイトル13', 'デモサブタイトル13', 0, '2016-10-06 00:00:00', '2016-11-25 00:00:00', 1, '<p>test</p>', '', 1, 1, '2016-10-24 06:36:54', '2016-10-24 06:36:54'),
(10, 'デモタイトル14', 'デモサブタイトル14', 1, '2016-10-24 00:00:00', '2016-10-27 00:00:00', 3, '<p>test2</p>', NULL, 1, 1, '2016-10-24 06:40:04', '2016-10-24 08:25:19'),
(13, 'デモタイトル15', 'デモサブタイトル15', 0, '2016-10-05 00:00:00', '2016-10-26 00:00:00', 3, '<p>test15</p>', NULL, 1, 1, '2016-10-24 06:45:31', '2016-10-24 06:56:19'),
(17, 'デモタイトル17', '2', 0, '2016-10-25 00:00:00', '2016-11-02 00:00:00', 4, '<p>3</p>', '[{"filename":"The-Beatles-Eight-Days-A-Week.pdf","mimetype":"application\\/pdf","filesize":242059},{"filename":"beatles_complete.pdf","mimetype":"application\\/pdf","filesize":1904133}]', 1, 1, '2016-10-25 06:25:09', '2016-11-04 05:16:11'),
(20, 'デモタイトル20', 'デモサブタイトル20', 1, '2016-10-27 00:00:00', '2016-11-05 00:00:00', 3, '<p><img src="/img/information/TOP_photo271.jpg" alt="" />favava</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206}]', 1, 1, '2016-10-27 03:12:03', '2016-11-04 09:27:32'),
(22, 'デモタイトル22', 'デモサブタイトル22', 1, '2016-09-27 00:00:00', NULL, 3, '<p><img src="/img/tmp/51PLYreKV5L._SL500__.jpg" alt="" /></p>', NULL, 1, 1, '2016-10-27 04:07:47', '2016-11-07 05:53:22'),
(23, 'デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23', 'デモサブタイトル23', 1, '2016-11-07 00:00:00', NULL, 3, '<p><img src="/img/tmp/index.jpg" alt="アビーロード" width="224" height="224" /></p>\r\n<p>&nbsp;</p>\r\n<p>fafafa</p>\r\n<p><a title="GOOGLE" href="http://google.co.jp/" target="_blank">GOOGLE</a></p>\r\n<p><img src="/img/tmp/stones_exileonmainstreet1.jpg" alt="" /></p>\r\n<p>&nbsp;<img src="/img/tmp/RoverSoul.jpeg" alt="" width="765" height="692" /></p>\r\n<p>&nbsp;</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"\\u30d6\\u30e9\\u30c3\\u30af\\u30d0\\u30fc\\u30c9"}]', 1, 1, '2016-10-27 07:21:18', '2016-11-18 07:38:51'),
(24, 'デモタイトル30', 'デモサブタイトル30', 1, '2016-11-07 00:00:00', NULL, 4, '<p>afafa</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"123"}]', 1, 1, '2016-11-07 10:27:53', '2016-11-07 10:41:18'),
(29, 'デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー', 'デモサブタイトル23', 1, '2016-11-07 00:00:00', NULL, 3, '<p><img src="/img/tmp/index.jpg" alt="アビーロード" width="224" height="224" /></p>\r\n<p>&nbsp;</p>\r\n<p>fafafa</p>\r\n<p><a title="GOOGLE" href="http://google.co.jp/" target="_blank">GOOGLE</a></p>\r\n<p><img src="/img/tmp/stones_exileonmainstreet1.jpg" alt="" /></p>\r\n<p>&nbsp;<img src="/img/tmp/RoverSoul.jpeg" alt="" width="765" height="692" /></p>\r\n<p>&nbsp;</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"\\u30d6\\u30e9\\u30c3\\u30af\\u30d0\\u30fc\\u30c9"}]', 1, 1, '2016-11-21 06:55:44', '2016-11-21 06:55:44'),
(30, 'デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー', 'デモサブタイトル23', 1, '2016-11-07 00:00:00', NULL, 3, '<p><img src="/img/tmp/index.jpg" alt="アビーロード" width="224" height="224" /></p>\r\n<p>&nbsp;</p>\r\n<p>fafafa</p>\r\n<p><a title="GOOGLE" href="http://google.co.jp/" target="_blank">GOOGLE</a></p>\r\n<p><img src="/img/tmp/stones_exileonmainstreet1.jpg" alt="" /></p>\r\n<p>&nbsp;<img src="/img/tmp/RoverSoul.jpeg" alt="" width="765" height="692" /></p>\r\n<p>&nbsp;</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"\\u30d6\\u30e9\\u30c3\\u30af\\u30d0\\u30fc\\u30c9"}]', 1, 1, '2016-11-21 07:02:58', '2016-11-21 07:02:58'),
(31, 'デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー', 'デモサブタイトル23', 1, '2016-11-07 00:00:00', NULL, 3, '<p><img src="/img/tmp/index.jpg" alt="アビーロード" width="224" height="224" /></p>\r\n<p>&nbsp;</p>\r\n<p>fafafa</p>\r\n<p><a title="GOOGLE" href="http://google.co.jp/" target="_blank">GOOGLE</a></p>\r\n<p><img src="/img/tmp/stones_exileonmainstreet1.jpg" alt="" /></p>\r\n<p>&nbsp;<img src="/img/tmp/RoverSoul.jpeg" alt="" width="765" height="692" /></p>\r\n<p>&nbsp;</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"\\u30d6\\u30e9\\u30c3\\u30af\\u30d0\\u30fc\\u30c9"}]', 1, 1, '2016-11-21 07:03:04', '2016-11-21 07:03:04'),
(32, 'デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー', 'デモサブタイトル23', 1, '2016-11-07 00:00:00', NULL, 3, '<p><img src="/img/tmp/index.jpg" alt="アビーロード" width="224" height="224" /></p>\r\n<p>&nbsp;</p>\r\n<p>fafafa</p>\r\n<p><a title="GOOGLE" href="http://google.co.jp/" target="_blank">GOOGLE</a></p>\r\n<p><img src="/img/tmp/stones_exileonmainstreet1.jpg" alt="" /></p>\r\n<p>&nbsp;<img src="/img/tmp/RoverSoul.jpeg" alt="" width="765" height="692" /></p>\r\n<p>&nbsp;</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"\\u30d6\\u30e9\\u30c3\\u30af\\u30d0\\u30fc\\u30c9"}]', 1, 1, '2016-11-21 07:03:09', '2016-11-21 07:03:09'),
(33, 'デモタイトル23デモタイトル23デモタイトル23デモタイトル23デモタイトル23～コピー～コピー～コピー～コピー～コピー', 'デモサブタイトル23', 1, '2016-11-07 00:00:00', NULL, 3, '<p><img src="/img/tmp/index.jpg" alt="アビーロード" width="224" height="224" /></p>\r\n<p>&nbsp;</p>\r\n<p>fafafa</p>\r\n<p><a title="GOOGLE" href="http://google.co.jp/" target="_blank">GOOGLE</a></p>\r\n<p><img src="/img/tmp/stones_exileonmainstreet1.jpg" alt="" /></p>\r\n<p>&nbsp;<img src="/img/tmp/RoverSoul.jpeg" alt="" width="765" height="692" /></p>\r\n<p>&nbsp;</p>', '[{"filename":"The-Beatles-Blackbird.pdf","mimetype":"application\\/pdf","filesize":395206,"pdftitle":"\\u30d6\\u30e9\\u30c3\\u30af\\u30d0\\u30fc\\u30c9"}]', 1, 1, '2016-11-21 07:03:14', '2016-11-21 07:03:14'),
(34, 'デモタイトル～コピー', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-11-21 07:03:58', '2016-11-21 07:03:58'),
(35, 'デモタイトル～コピー～コピー', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-11-21 07:04:05', '2016-11-21 07:04:05'),
(36, 'デモタイトル～コピー～コピー～コピー', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-11-21 07:04:10', '2016-11-21 07:04:10'),
(37, 'デモタイトル～コピー～コピー～コピー～コピー', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-11-21 07:04:14', '2016-11-21 07:04:14'),
(38, 'デモタイトル～コピー～コピー～コピー～コピー～コピー', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-11-21 07:04:18', '2016-11-21 07:04:18'),
(39, 'デモタイトル～コピー～コピー～コピー～コピー～コピー～コピー', NULL, 0, '2016-10-11 00:00:00', '2016-10-21 00:00:00', 1, '', NULL, 1, 1, '2016-11-21 07:04:46', '2016-11-21 07:04:46'),
(40, 'デモタイトル6～コピー', 'デモサブタイトル', 1, '2016-10-06 00:00:00', NULL, 3, '<p>fafadfadfa</p>\r\n<p>afadava</p>\r\n<p>afmapjmva</p>\r\n<p>mavoladad</p>\r\n<p><img src="/img/tmp/love-you-live.jpg" alt="" /></p>', NULL, 1, 1, '2016-11-21 07:05:52', '2016-11-21 07:06:19'),
(41, 'デモタイトル6～コピー～コピー', 'デモサブタイトル', 1, '2016-10-06 00:00:00', NULL, 3, '<p>fafadfadfa</p>\r\n<p>afadava</p>\r\n<p>afmapjmva</p>\r\n<p>mavoladad</p>\r\n<p><img src="/img/tmp/love-you-live.jpg" alt="" /></p>', NULL, 1, 1, '2016-11-21 07:06:43', '2016-11-21 07:06:43');

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_23_163339_create_information_table', 2),
('2016_09_26_113455_create_cache_table', 3),
('2016_09_26_130243_create_stores_table', 3),
('2016_09_26_171401_create_users_tables', 4),
('2016_10_28_000000_create_images_table', 5),
('2017_01_06_172301_create_accesslog_table', 6),
('2017_02_17_000000_create_testmailaddress_table', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `storename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `imagedetail` text COLLATE utf8_unicode_ci,
  `created_tool_user_id` int(11) NOT NULL,
  `updated_tool_user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `stores`
--

INSERT INTO `stores` (`id`, `storename`, `comment`, `imagedetail`, `created_tool_user_id`, `updated_tool_user_id`, `created_at`, `updated_at`) VALUES
(1, '全施設', 'あああ\r\nいいい', '[{"filename":"logo.png","mimetype":"image\\/png","filesize":3606}]', 1, 1, '2016-10-04 05:56:00', '2016-11-16 09:51:13'),
(3, 'キャナルシティ博多', 'hogehoge', '[{"filename":"shoplogo01.png","mimetype":"image\\/png","filesize":4014}]', 1, 1, '2016-10-07 10:50:57', '2016-11-02 11:42:54'),
(4, 'マリノアシティ福岡', '', '[{"filename":"shoplogo02.png","mimetype":"image\\/png","filesize":3651}]', 1, 1, '2016-10-13 11:23:05', '2016-11-04 05:15:13');

-- --------------------------------------------------------

--
-- テーブルの構造 `testmailaddresses`
--

CREATE TABLE `testmailaddresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `testmailaddresses`
--

INSERT INTO `testmailaddresses` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'ando@aaa.co.jp', '2017-02-17 05:28:57', '2017-02-17 05:28:57'),
(4, 'aaa@abc.co.jp', '2017-02-17 05:30:34', '2017-02-17 05:30:34');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `store_id` int(11) NOT NULL,
  `shop_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `store_id`, `shop_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ando0', '', '$2y$10$e6MkbeNloyd/brCHLLag/up7n.Mon//8dIoNxK9Nnc7TKC/7/.anq', 'admin', 1, 'あああ', 'fnWM5LmqJG2KfMmVZAeXtsFhW0LIbE9ZrZFiLK0Y8Wfby0gqbbl8VpBAHpxE', '2016-09-26 08:38:38', '2017-01-19 02:52:14'),
(2, 'ando2', '', '$2y$10$iL2XULZXuwdebJLzdiVehOHYkRWCk7K7662G29OPeZm6RsKn18tCe', 'admin', 1, NULL, 'kiFaIdqYRI5vJoVZqr9KTsF2H4u8yPICDnZxK6Ixa3zTWEeWuZGgJCtlUwiU', '2016-09-26 08:50:30', '2016-10-14 03:07:07'),
(3, 'ando3', '', '$2y$10$PYwDe.OHmMsu9yeZLaHR3OwBf2/lG7.aXP.dyqWw67qRtvJRWzJ9m', 'user', 1, NULL, NULL, '2016-10-07 10:02:03', '2016-10-07 10:02:03'),
(4, 'ando5', '', '$2y$10$9.2yS/rn7X./SIZD0DX3AuwUPDxurCNGzMTDnOUaDCDi0Vom4HT5u', 'admin', 1, NULL, 'EBLyeE0vd6agczYfbFHyBj4OmCt1u7AMbKXTSUX9eYhVy52ySz60BKApeZS6', '2016-10-13 11:37:41', '2016-10-14 02:49:16'),
(5, 'ando6', 'andou@parco-city.co.jp', '$2y$10$vewjQ0scOwPtLsiqanEPEuR672RZulGczdbfubRIendKl/tCYXjDq', 'store', 3, 'アルフレッド・バニスター', 'uvTh2vEwhqFhbh06mltcQ0G4C5rJDbkQBtTpNUXSCfQwUpN3nJh4f8nInOwn', '2016-10-14 02:33:54', '2017-01-17 09:41:20'),
(6, 'user1', '', '$2y$10$lvq38hwkWUaAQuISfTsI/emb10Kpz7QEAWUhu1femZu2FO.BioLGO', 'user', 3, NULL, 'vFNmmPvUZu1FP0lFHdixwsqzh6aLRgpFDnQT4sbWUcmzMDqDteQizDwzfThN', '2016-10-14 03:28:41', '2016-11-18 06:41:09'),
(7, 'user2', '', '$2y$10$4zOXQf5SIFrWPrzHaQGtNOfp5leW.UQ8KMIdjCg2GCUfKCZQCXORW', 'user', 3, 'ショップ１', NULL, '2016-10-14 03:42:20', '2016-10-14 03:56:58'),
(8, 'ando7', '', '$2y$10$xB60HNZzJSdygM5Cz8SYMukx2mmWGtyHSIAmAexqGjwvYAzhd2u92', 'admin', 1, '', NULL, '2016-10-14 11:23:17', '2016-10-14 11:23:17'),
(9, 'ando8', '', '$2y$10$D9MkH9ZzPFt3TNIfu5U8eOUspFcLmjToc4CjqS92z.75ltZQ8DDMO', 'user', 4, '', NULL, '2016-10-14 11:49:49', '2016-10-14 11:49:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslogs`
--
ALTER TABLE `accesslogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index1` (`logdate`) USING BTREE,
  ADD KEY `index2` (`logdate`,`userId`,`type`),
  ADD KEY `index3` (`pagePath`),
  ADD KEY `index4` (`logdate`,`userId`,`type`,`pagePath`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `image_msts`
--
ALTER TABLE `image_msts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testmailaddresses`
--
ALTER TABLE `testmailaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslogs`
--
ALTER TABLE `accesslogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `image_msts`
--
ALTER TABLE `image_msts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testmailaddresses`
--
ALTER TABLE `testmailaddresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
