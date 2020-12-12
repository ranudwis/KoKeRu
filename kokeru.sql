-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2020 at 08:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kokeru`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_laporan` bigint(20) UNSIGNED NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukti`
--

INSERT INTO `bukti` (`id`, `id_laporan`, `bukti`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/bukti/vH4VzgyySanECoKXL0SqZm3PMjCuMuFKIiKoDSGT.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_ruang` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `id_ruang`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2020-12-09 14:41:29', '2020-12-09 14:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_12_101913_buat_tabel_ruang', 1),
(5, '2020_11_12_102544_buat_tabel_laporan', 1),
(6, '2020_11_12_102854_buat_tabel_bukti', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `user_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ruang A1', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(2, 2, 'Ruang A2', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(3, 2, 'Ruang A3', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(4, 2, 'Ruang A4', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(5, 2, 'Ruang A5', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(6, 2, 'Ruang A6', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(7, 3, 'Ruang A7', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(8, 3, 'Ruang A8', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(9, 3, 'Ruang A9', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(10, 3, 'Ruang A10', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(11, 3, 'Ruang A11', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(12, 4, 'Ruang A12', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(13, 4, 'Ruang A13', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(14, 4, 'Ruang A14', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(15, 4, 'Ruang A15', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(16, 4, 'Ruang A16', '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(17, 5, 'Ruang A17', '2020-12-09 14:05:55', '2020-12-09 14:05:56'),
(18, 5, 'Ruang A18', '2020-12-09 14:05:55', '2020-12-09 14:05:56'),
(19, 5, 'Ruang A19', '2020-12-09 14:05:55', '2020-12-09 14:05:56'),
(20, 5, 'Ruang A20', '2020-12-09 14:05:55', '2020-12-09 14:05:56'),
(21, 5, 'Ruang B1', '2020-12-09 14:05:55', '2020-12-09 14:05:56'),
(22, 6, 'Ruang B2', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(23, 6, 'Ruang B3', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(24, 6, 'Ruang B4', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(25, 6, 'Ruang B5', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(26, 6, 'Ruang B6', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(27, 7, 'Ruang B7', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(28, 7, 'Ruang B8', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(29, 7, 'Ruang B9', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(30, 7, 'Ruang B10', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(31, 7, 'Ruang B11', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(32, 8, 'Ruang B12', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(33, 8, 'Ruang B13', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(34, 8, 'Ruang B14', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(35, 8, 'Ruang B15', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(36, 8, 'Ruang B16', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(37, 9, 'Ruang B17', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(38, 9, 'Ruang B18', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(39, 9, 'Ruang B19', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(40, 9, 'Ruang B20', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(41, 9, 'Ruang C1', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(42, 10, 'Ruang C2', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(43, 10, 'Ruang C3', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(44, 10, 'Ruang C4', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(45, 10, 'Ruang C5', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(46, 10, 'Ruang C6', '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(47, 11, 'Ruang C7', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(48, 11, 'Ruang C8', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(49, 11, 'Ruang C9', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(50, 11, 'Ruang C10', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(51, 11, 'Ruang C11', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(52, 12, 'Ruang C12', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(53, 12, 'Ruang C13', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(54, 12, 'Ruang C14', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(55, 12, 'Ruang C15', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(56, 12, 'Ruang C16', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(57, 13, 'Ruang C17', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(58, 13, 'Ruang C18', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(59, 13, 'Ruang C19', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(60, 13, 'Ruang C20', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(61, 13, 'Ruang D1', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(62, 14, 'Ruang D2', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(63, 14, 'Ruang D3', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(64, 14, 'Ruang D4', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(65, 14, 'Ruang D5', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(66, 14, 'Ruang D6', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(67, 15, 'Ruang D7', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(68, 15, 'Ruang D8', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(69, 15, 'Ruang D9', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(70, 15, 'Ruang D10', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(71, 15, 'Ruang D11', '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(72, 16, 'Ruang D12', '2020-12-09 14:05:57', '2020-12-09 14:05:58'),
(73, 16, 'Ruang D13', '2020-12-09 14:05:57', '2020-12-09 14:05:58'),
(74, 16, 'Ruang D14', '2020-12-09 14:05:57', '2020-12-09 14:05:58'),
(75, 16, 'Ruang D15', '2020-12-09 14:05:57', '2020-12-09 14:05:58'),
(76, 16, 'Ruang D16', '2020-12-09 14:05:57', '2020-12-09 14:05:58'),
(77, 17, 'Ruang D17', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(78, 17, 'Ruang D18', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(79, 17, 'Ruang D19', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(80, 17, 'Ruang D20', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(81, 17, 'Ruang E1', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(82, 18, 'Ruang E2', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(83, 18, 'Ruang E3', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(84, 18, 'Ruang E4', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(85, 18, 'Ruang E5', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(86, 18, 'Ruang E6', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(87, 19, 'Ruang E7', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(88, 19, 'Ruang E8', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(89, 19, 'Ruang E9', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(90, 19, 'Ruang E10', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(91, 19, 'Ruang E11', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(92, NULL, 'Ruang E12', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(93, NULL, 'Ruang E13', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(94, NULL, 'Ruang E14', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(95, NULL, 'Ruang E15', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(96, NULL, 'Ruang F1', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(97, NULL, 'Ruang F2', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(98, NULL, 'Ruang F3', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(99, NULL, 'Ruang F4', '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(100, NULL, 'Ruang F5', '2020-12-09 14:05:58', '2020-12-09 14:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_akun` enum('manager','cs') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cs',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `email_verified_at`, `password`, `tipe_akun`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahfud Laswi Iswahyudi', 'manager@kokeru.id', NULL, '$2y$10$8HFdkcP6u2Mq9jcuSsAeTu4C0ihbvwBodzDrnkI.SiJR4oCzFkt.W', 'manager', NULL, '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(2, 'Patricia Nuraini', 'ausada@yahoo.com', NULL, '$2y$10$FUsDPVOjLTlqIZZ8FK9w1..Im82DNb.6GnJN0vHjR1WzUyXh7ZNEa', 'cs', NULL, '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(3, 'Taufan Prayoga', 'sabri31@yolanda.tv', NULL, '$2y$10$0MFTdDdlmIdhuawooEGpYOa7674mQ1by5hPTX5oaF.yVmutCpAOLm', 'cs', NULL, '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(4, 'Cinta Lailasari', 'woktaviani@gmail.com', NULL, '$2y$10$9pvkXpDhiODLWgTPOafyX.Dd906tkDKzoiBzbY1cWkTUl4hVFC0.a', 'cs', NULL, '2020-12-09 14:05:55', '2020-12-09 14:05:55'),
(5, 'Cengkir Wijaya', 'qori64@yahoo.co.id', NULL, '$2y$10$UfzypwWhV09BuxPJu..EQ.85NTDRVU86D.drYL7sUv4bl1wTtl0..', 'cs', NULL, '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(6, 'Anastasia Kartika Winarsih', 'qnamaga@gmail.co.id', NULL, '$2y$10$K7ewXUpVKt3Dq7wxO.EPgOkpbq8cpREK7djX4db7e8yiV5ahNOzeq', 'cs', NULL, '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(7, 'Farah Umi Nasyiah', 'belinda.firmansyah@pradipta.biz', NULL, '$2y$10$pPa027gdd2QdJ25QyipMFOzOSSUT7sAdX7mP9w4CWJfUJYkx6R1tG', 'cs', NULL, '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(8, 'Aditya Mahendra', 'gawati.saptono@yahoo.com', NULL, '$2y$10$sHn2afaAT9YMUmvpXWC2l.MxhRTZaiqo5CFD9xs22keZylxOQ8ujG', 'cs', NULL, '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(9, 'Rahmat Waluyo', 'edward72@sudiati.tv', NULL, '$2y$10$VAyNNjtA8Wkhj/FRedGFS.6JPYW9fGembcfhIBByltqowxV0iQpom', 'cs', NULL, '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(10, 'Kenari Wasita', 'opadmasari@gmail.com', NULL, '$2y$10$vABaZhYIVdzgg.WOIPdsIeY2QNjPrB0Nv1uLs5QZKjSd.pWvEMtty', 'cs', NULL, '2020-12-09 14:05:56', '2020-12-09 14:05:56'),
(11, 'Ayu Suartini', 'raden38@nurdiyanti.my.id', NULL, '$2y$10$Z4KFlB6oN3KvI73mN2bIT.mCfDOdwwQddzDn6pIBhsSdXAzaGHR0.', 'cs', NULL, '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(12, 'Wahyu Hardiansyah', 'ade54@siregar.name', NULL, '$2y$10$onsDucge3Mwe7Qgnx9hSBOEIm/UjfF/D9RTgT8eMxanAZVqFcVLfK', 'cs', NULL, '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(13, 'Prasetyo Gambira Prabowo', 'cahyadi.kuswoyo@yahoo.com', NULL, '$2y$10$Ba.ELDuYkWQiBa31aQMyKeRdo5pw0QcM/jhOXHq7GFXV6UOygoMce', 'cs', NULL, '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(14, 'Eman Setiawan', 'gfirgantoro@yahoo.com', NULL, '$2y$10$djkFKPT2UuOXiw7Dp.BgIe8sz4CoJleW5ZAb.FWMOhMVkp/I2W/cK', 'cs', NULL, '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(15, 'Patricia Palastri', 'rachel.hidayat@astuti.go.id', NULL, '$2y$10$ymO/L3P/Tyh5jGNvkWuIru3R8k.iu2u7FRFR2JV6fQkWs4ZsfIAnm', 'cs', NULL, '2020-12-09 14:05:57', '2020-12-09 14:05:57'),
(16, 'Dinda Padma Aryani', 'vwacana@mustofa.sch.id', NULL, '$2y$10$Yoi/zSs7e6zSaZLI7/pwueeyUxqYsdhkRO/RERt.9WG1cPY0IAJVq', 'cs', NULL, '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(17, 'Dewi Restu Astuti', 'cecep47@wasita.sch.id', NULL, '$2y$10$GtC9njPmBDdmBV/S7YC9iOkUhLNNTCWaTFBqAIRHb9aJYNLIrkoR6', 'cs', NULL, '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(18, 'Salwa Dewi Permata', 'leo.saragih@rahayu.co', NULL, '$2y$10$0ICfLjsa4TTu3PTeSWRDH.uXKuRKFJvZ/7Omp/zujeRCi.kdEXWJi', 'cs', NULL, '2020-12-09 14:05:58', '2020-12-09 14:05:58'),
(19, 'Hilda Wahyuni', 'yosef.winarno@gmail.com', NULL, '$2y$10$tZXTBzyZbnJDYGUjpvwase1N4rE7gN3GP.Oh95jXtayYHUICJVZIW', 'cs', NULL, '2020-12-09 14:05:58', '2020-12-09 14:05:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukti_id_laporan_foreign` (`id_laporan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_id_ruang_foreign` (`id_ruang`),
  ADD KEY `laporan_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti`
--
ALTER TABLE `bukti`
  ADD CONSTRAINT `bukti_id_laporan_foreign` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_id_ruang_foreign` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
