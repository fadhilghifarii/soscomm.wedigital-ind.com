-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_rekenings`
--

CREATE TABLE `admin_rekenings` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `norek` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_rekenings`
--

INSERT INTO `admin_rekenings` (`id`, `foto`, `bank`, `nama`, `norek`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'foto1_1620931244_mmd.png', 'BRI', 'nama 1', '1231231', '2021-05-13 18:40:44', '2021-05-13 18:40:44', NULL),
(2, 'foto2_1620931244_programming.png', 'MANDIRI', 'nama 2', '1231232', '2021-05-13 18:40:44', '2021-05-13 18:40:44', NULL),
(3, 'foto3_1620931244_skj.png', 'BNI', 'nama 3', '1231233', '2021-05-13 18:40:44', '2021-05-13 18:40:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Lorem Ipsum', '<p><span style=\"text-align: justify; text-indent: -18.9333px;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span></p><p><span style=\"text-align: justify; text-indent: -18.9333px;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span></p><p><span style=\"text-align: justify; text-indent: -18.9333px;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px;\"><br></span><span style=\"text-align: justify; text-indent: -18.9333px;\"><br></span><br></p>', 'foto_1620318979_skj.png', '2021-05-06 18:29:03', '2021-05-06 18:29:03', NULL),
(4, 'judul 2', '<p><span style=\"text-align: justify; text-indent: -18.9333px;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><br></p>', 'foto_1620320681_mmd.png', '2021-05-06 18:29:36', '2021-05-06 18:29:36', NULL),
(5, 'judul 3', '<p><span style=\"text-align: justify; text-indent: -18.9333px;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><span style=\"text-align: justify; text-indent: -18.9333px; font-size: 1rem;\">Islam mengajarkan agar umatanya menjadi yang terbaik, yaitu saling mengenal, memahami, menghargai, mengaisihi, dan bahkan saling tolong menolong dalam kebaikan. Coba beri penjelasan kiat apa saja yang harus dilakukan agar kerukunan antar umat beragama tetap terjaga???!</span><br></p>', 'foto_1620320706_programming.png', '2021-05-06 18:29:20', '2021-05-06 18:29:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2021_04_20_095115_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pantis`
--

CREATE TABLE `pantis` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `kebutuhan` text NOT NULL,
  `t_pria` int(7) NOT NULL,
  `t_wanita` int(7) NOT NULL,
  `akte` varchar(200) NOT NULL,
  `program` varchar(50) NOT NULL,
  `jml_pgrs` int(7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pantis`
--

INSERT INTO `pantis` (`id`, `nama`, `pemilik`, `tipe`, `jenis`, `foto`, `alamat`, `deskripsi`, `kebutuhan`, `t_pria`, `t_wanita`, `akte`, `program`, `jml_pgrs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Baru 1', 'tes2', 'tes3', 'tes4', 'foto_1619047089_1.PNG', 'tes5', '<p>tes6</p>', 'tes7', 1, 2, 'akte_1619047089_2.PNG', 'Pendidikan', 3, '2021-04-21 16:18:09', '2021-04-21 23:56:21', NULL),
(2, 'Baru 2', 'tes2', 'tes3', 'tes4', 'foto_1619049523_3.PNG', 'tess', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</span><br></p>', 'asd', 1, 2, 'akte_1619049523_4.PNG', 'Seni', 3, '2021-04-21 16:58:43', '2021-04-22 00:11:27', NULL),
(3, 'Baru 3', 'tes2', 'tes3', 'tes4', 'foto_1619049523_3.PNG', 'tess', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</span><br></p>', 'asd', 1, 2, 'akte_1619049523_4.PNG', 'Seni', 3, '2021-04-21 16:58:43', '2021-04-22 00:11:27', NULL),
(4, 'Baru 4', 'tes2', 'tes3', 'tes4', 'foto_1619049523_3.PNG', 'tess', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</span><br></p>', 'asd', 1, 2, 'akte_1619049523_4.PNG', 'Seni', 3, '2021-04-21 16:58:43', '2021-04-22 00:11:27', NULL),
(5, 'Baru 5', 'tes2', 'tes3', 'tes4', 'foto_1619049523_3.PNG', 'tess', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</span><br></p>', 'asd', 1, 2, 'akte_1619049523_4.PNG', 'Seni', 3, '2021-04-21 16:58:43', '2021-04-22 00:11:27', NULL),
(6, 'Baru 6', 'tes2', 'tes3', 'tes4', 'foto_1619049523_3.PNG', 'tess', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</span><br></p>', 'asd', 1, 2, 'akte_1619049523_4.PNG', 'Seni', 3, '2021-04-21 16:58:43', '2021-04-22 00:11:27', NULL),
(7, 'Baru 7', 'tes2', 'tes3', 'tes4', 'foto_1619049523_3.PNG', 'tess', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</span><br></p>', 'asd', 1, 2, 'akte_1619049523_4.PNG', 'Seni', 3, '2021-04-21 16:58:43', '2021-04-22 00:11:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `panti_id` int(11) NOT NULL,
  `ktg` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `progres` bigint(20) NOT NULL,
  `target` bigint(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `nama`, `panti_id`, `ktg`, `foto`, `progres`, `target`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Reseller Corona 1', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-05-02 11:59:07', '2021-04-25 14:14:24', NULL),
(2, 'Reseller Corona 2', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-04-25 14:14:24', '2021-04-25 14:14:24', NULL),
(3, 'Reseller Corona 3', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-04-25 14:14:24', '2021-04-25 14:14:24', NULL),
(4, 'Reseller Corona 4', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-04-25 14:14:24', '2021-04-25 14:14:24', NULL),
(5, 'Reseller Corona 5', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-04-25 14:14:24', '2021-04-25 14:14:24', NULL),
(6, 'Reseller Corona 6', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-04-25 14:14:24', '2021-04-25 14:14:24', NULL),
(7, 'Reseller Corona 7', 2, 'tes', 'programdonasi_1619358616_44682674e5a62026703846c4541bec1b.jpg', 200000, 1000000, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;</p>', '2021-04-25 14:14:24', '2021-04-25 14:14:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QmflH1y5bylkNiq8Kp3U9nzs2l3JBHuwZQjQtNB2', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36 Edg/90.0.818.56', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRzhzNm9DMzZHMW9jQmpmcm81Q3hqeTlSSFp1RW1WcDdJRkk0NkhobiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9hY2MtZG9uYXNpIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHV3aDFnY1VTTURJOS5nTXY3Z2pleC5qamxhZS5mdkQ3V3d0LlRGOTdJcFY0SDhnU29yRXIuIjt9', 1620938211);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider` varchar(255) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider`, `judul`, `deskripsi`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'foto_slider1_1620319703_foto_slider1_1619935592_background penyambutan.jpg', 'judul 1', 'desk 1', 'link 1', '2021-04-27 18:04:12', '2021-05-06 16:48:23', NULL),
(2, 'foto_slider2_1620319703_foto_slider2_1619935680_Background penyambutan mahasiswa PASCA.jpg', 'judul 2', 'desk 2', 'link 2', '2021-04-27 18:04:12', '2021-05-06 16:48:23', NULL),
(3, NULL, NULL, NULL, NULL, '2021-04-27 18:04:12', NULL, NULL),
(4, NULL, NULL, NULL, NULL, '2021-04-27 18:04:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('belum','acc') NOT NULL DEFAULT 'belum',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `user_id`, `program_id`, `jumlah`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 17, 7, 10000, 'belum', '2021-05-13 12:43:01', '2021-05-13 19:43:01', NULL),
(3, 17, 7, 12000, 'acc', '2021-05-13 20:31:10', '2021-05-13 20:31:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','donatur') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'donatur',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `google_id`, `password`, `hp`, `role`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alfikri alfikri', 'admin@gmail.com', NULL, NULL, '$2y$10$uwh1gcUSMDI9.gMv7gjex.jjlae.fvD7Wwt.TF97IpV4H8gSorEr.', NULL, 'admin', NULL, NULL, NULL, '2021-04-20 03:47:56', '2021-04-20 03:47:56'),
(2, 'alfikri', 'tes@gmail.com', NULL, NULL, '$2y$10$uwh1gcUSMDI9.gMv7gjex.jjlae.fvD7Wwt.TF97IpV4H8gSorEr.', '082391123123', 'donatur', NULL, NULL, NULL, '2021-04-20 03:47:56', '2021-05-02 15:38:55'),
(17, 'alfikri', 'belintex8@gmail.com', NULL, NULL, '$2y$10$uwh1gcUSMDI9.gMv7gjex.jjlae.fvD7Wwt.TF97IpV4H8gSorEr.', '082391123123', 'donatur', NULL, NULL, NULL, '2021-04-20 03:47:56', '2021-05-02 15:38:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_rekenings`
--
ALTER TABLE `admin_rekenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pantis`
--
ALTER TABLE `pantis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT for table `admin_rekenings`
--
ALTER TABLE `admin_rekenings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pantis`
--
ALTER TABLE `pantis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
