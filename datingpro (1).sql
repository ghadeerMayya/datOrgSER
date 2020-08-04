-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 12:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datingpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookable_availabilities`
--

CREATE TABLE `bookable_availabilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `bookable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookable_id` bigint(20) UNSIGNED NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_bookable` tinyint(1) NOT NULL DEFAULT 0,
  `priority` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookable_availabilities`
--

INSERT INTO `bookable_availabilities` (`id`, `bookable_type`, `bookable_id`, `range`, `from`, `to`, `is_bookable`, `priority`, `created_at`, `updated_at`, `deleted_at`) VALUES
(51, 'App\\MyModels\\Serviceprovider', 2, 'monday', '08:00 am', '12:30 pm', 1, NULL, '2020-07-25 12:03:09', '2020-07-25 12:03:09', NULL),
(52, 'App\\MyModels\\Serviceprovider', 2, 'monday', '08:00 am', '12:30 pm', 1, NULL, '2020-07-25 12:05:48', '2020-07-25 12:05:48', NULL),
(53, 'App\\MyModels\\Serviceprovider', 2, 'dates', '08:00 am', '12:30 pm', 1, NULL, '2020-07-25 12:11:41', '2020-07-25 12:11:41', NULL),
(54, 'App\\MyModels\\Serviceprovider', 2, 'dates', '08:00 am', '12:30 pm', 1, NULL, '2020-07-25 12:12:05', '2020-07-25 12:12:05', NULL),
(55, 'App\\MyModels\\Serviceprovider', 2, 'dates', '08:00 am', '12:30 pm', 1, NULL, '2020-07-25 12:13:35', '2020-07-25 12:13:35', NULL),
(56, 'App\\MyModels\\Serviceprovider', 2, 'dates', '08:00 am', '12:30 pm', 1, NULL, '2020-07-25 12:14:37', '2020-07-25 12:14:37', NULL),
(57, 'App\\MyModels\\Serviceprovider', 2, 'dates', '08:00 am', '12:30 pm', 1, NULL, '2020-07-28 06:10:31', '2020-07-28 06:10:31', NULL),
(58, 'App\\MyModels\\Serviceprovider', 2, 'dates', '08:00 am', '12:30 pm', 1, NULL, '2020-07-28 16:49:12', '2020-07-28 16:49:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookable_bookings`
--

CREATE TABLE `bookable_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `bookable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookable_id` bigint(20) UNSIGNED NOT NULL,
  `customer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `starts_at` datetime DEFAULT NULL,
  `ends_at` datetime DEFAULT NULL,
  `canceled_at` datetime DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `quantity` int(10) UNSIGNED NOT NULL,
  `total_paid` decimal(8,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formula` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`options`)),
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookable_bookings`
--

INSERT INTO `bookable_bookings` (`id`, `bookable_type`, `bookable_id`, `customer_type`, `customer_id`, `starts_at`, `ends_at`, `canceled_at`, `timezone`, `price`, `quantity`, `total_paid`, `currency`, `formula`, `options`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'App\\MyModels\\Serviceprovider', 2, 'type', 11, '2020-07-25 13:58:57', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, NULL, '2020-07-25 11:58:57', '2020-07-25 11:58:57', NULL),
(2, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-25 14:00:35', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, NULL, '2020-07-25 12:00:35', '2020-07-25 12:00:35', NULL),
(3, 'App\\MyModels\\Serviceprovider', 2, 'type', 83, '2020-07-25 14:03:09', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, NULL, '2020-07-25 12:03:09', '2020-07-25 12:03:09', NULL),
(4, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-25 14:05:48', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-25 12:05:48', '2020-07-25 12:05:48', NULL),
(5, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-25 14:11:41', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-25 12:11:41', '2020-07-25 12:11:41', NULL),
(6, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-25 14:12:05', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-25 12:12:05', '2020-07-25 12:12:05', NULL),
(7, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-25 14:13:35', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-25 12:13:35', '2020-07-25 12:13:35', NULL),
(8, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-25 14:14:37', '2020-07-26 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-25 12:14:37', '2020-07-25 12:14:37', NULL),
(9, 'App\\MyModels\\Serviceprovider', 2, 'type', 97, '2020-07-28 08:10:31', '2020-07-29 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-28 06:10:31', '2020-07-28 06:10:31', NULL),
(10, 'App\\MyModels\\Serviceprovider', 2, 'type', 82, '2020-07-28 18:49:12', '2020-07-29 00:00:00', NULL, NULL, '1.00', 1, '1.00', 'EUR', NULL, NULL, 'no notes', '2020-07-28 16:49:12', '2020-07-28 16:49:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookable_rates`
--

CREATE TABLE `bookable_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `bookable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookable_id` bigint(20) UNSIGNED NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logofpenifits`
--

CREATE TABLE `logofpenifits` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `entering_time` timestamp NULL DEFAULT NULL,
  `exit_time` timestamp NULL DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `penifit_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logofpenifits`
--

INSERT INTO `logofpenifits` (`id`, `created_at`, `updated_at`, `entering_time`, `exit_time`, `notes`, `penifit_id`) VALUES
(7, '2020-07-19 18:45:44', '2020-07-19 18:45:44', '2020-07-19 18:45:44', NULL, NULL, 82),
(8, '2020-07-19 18:54:52', '2020-07-19 18:54:52', '2020-07-19 18:54:52', NULL, NULL, 82),
(9, '2020-07-19 18:57:27', '2020-07-19 18:57:27', '2020-07-19 18:57:27', NULL, NULL, 82),
(10, '2020-07-19 18:58:36', '2020-07-19 18:58:36', '2020-07-19 18:58:36', NULL, NULL, 82),
(11, '2020-07-19 19:02:12', '2020-07-19 19:02:12', '2020-07-19 19:02:12', NULL, NULL, 82),
(12, '2020-07-19 19:04:47', '2020-07-19 19:04:47', '2020-07-19 19:04:47', NULL, NULL, 82),
(13, '2020-07-19 19:06:19', '2020-07-19 19:06:19', '2020-07-19 19:06:19', NULL, NULL, 82),
(14, '2020-07-19 19:06:48', '2020-07-19 19:06:48', '2020-07-19 19:06:48', NULL, NULL, 82),
(15, '2020-07-19 19:08:24', '2020-07-19 19:08:24', '2020-07-19 19:08:24', NULL, NULL, 82),
(16, '2020-07-19 19:10:44', '2020-07-19 19:10:44', '2020-07-19 19:10:44', NULL, NULL, 82),
(17, '2020-07-20 11:23:14', '2020-07-20 11:23:14', '2020-07-20 11:23:14', NULL, NULL, 83),
(18, '2020-07-20 11:23:43', '2020-07-20 11:23:43', '2020-07-20 11:23:43', NULL, NULL, 84),
(19, '2020-07-20 12:12:10', '2020-07-20 12:12:10', '2020-07-20 12:12:10', NULL, NULL, 85),
(20, '2020-07-20 12:25:15', '2020-07-20 12:25:15', '2020-07-20 12:25:15', NULL, NULL, 86),
(21, '2020-07-20 12:26:34', '2020-07-20 12:26:34', '2020-07-20 12:26:34', NULL, NULL, 87),
(22, '2020-07-20 12:27:30', '2020-07-20 12:27:30', '2020-07-20 12:27:30', NULL, NULL, 88),
(23, '2020-07-20 12:28:12', '2020-07-20 12:28:12', '2020-07-20 12:28:12', NULL, NULL, 89),
(24, '2020-07-20 12:39:08', '2020-07-20 12:39:08', '2020-07-20 12:39:08', NULL, NULL, 90),
(25, '2020-07-20 12:39:44', '2020-07-20 12:39:44', '2020-07-20 12:39:44', NULL, NULL, 91),
(26, '2020-07-20 12:40:34', '2020-07-20 12:40:34', '2020-07-20 12:40:34', NULL, NULL, 92),
(27, '2020-07-20 12:40:41', '2020-07-20 12:40:41', '2020-07-20 12:40:41', NULL, NULL, 93),
(28, '2020-07-20 12:42:14', '2020-07-20 12:42:14', '2020-07-20 12:42:14', NULL, NULL, 94),
(29, '2020-07-20 12:53:15', '2020-07-20 12:53:15', '2020-07-20 12:53:15', NULL, NULL, 95),
(30, '2020-07-20 12:53:27', '2020-07-20 12:53:27', '2020-07-20 12:53:27', NULL, NULL, 96),
(31, '2020-07-25 07:01:36', '2020-07-25 07:01:36', '2020-07-25 07:01:36', NULL, NULL, 82),
(32, '2020-07-25 07:13:59', '2020-07-25 07:13:59', '2020-07-25 07:13:59', NULL, NULL, 82),
(33, '2020-07-25 07:15:40', '2020-07-25 07:15:40', '2020-07-25 07:15:40', NULL, NULL, 82),
(34, '2020-07-25 07:34:55', '2020-07-25 07:34:55', '2020-07-25 07:34:55', NULL, NULL, 82),
(35, '2020-07-25 07:45:19', '2020-07-25 07:45:19', '2020-07-25 07:45:19', NULL, NULL, 82),
(36, '2020-07-25 07:46:01', '2020-07-25 07:46:01', '2020-07-25 07:46:01', NULL, NULL, 82),
(37, '2020-07-25 08:04:46', '2020-07-25 08:04:46', '2020-07-25 08:04:46', NULL, NULL, 82),
(38, '2020-07-25 08:14:41', '2020-07-25 08:14:41', '2020-07-25 08:14:41', NULL, NULL, 82),
(39, '2020-07-25 08:32:22', '2020-07-25 08:32:22', '2020-07-25 08:32:22', NULL, NULL, 82),
(40, '2020-07-25 08:35:17', '2020-07-25 08:35:17', '2020-07-25 08:35:17', NULL, NULL, 82),
(41, '2020-07-25 09:29:29', '2020-07-25 09:29:29', '2020-07-25 09:29:29', NULL, NULL, 82),
(42, '2020-07-25 09:34:37', '2020-07-25 09:34:37', '2020-07-25 09:34:37', NULL, NULL, 82),
(43, '2020-07-25 09:36:15', '2020-07-25 09:36:15', '2020-07-25 09:36:15', NULL, NULL, 82),
(44, '2020-07-25 09:38:33', '2020-07-25 09:38:33', '2020-07-25 09:38:33', NULL, NULL, 82),
(45, '2020-07-25 09:39:15', '2020-07-25 09:39:15', '2020-07-25 09:39:15', NULL, NULL, 82),
(46, '2020-07-25 09:39:44', '2020-07-25 09:39:44', '2020-07-25 09:39:44', NULL, NULL, 82),
(47, '2020-07-25 09:40:39', '2020-07-25 09:40:39', '2020-07-25 09:40:39', NULL, NULL, 82),
(48, '2020-07-25 09:41:14', '2020-07-25 09:41:14', '2020-07-25 09:41:14', NULL, NULL, 82),
(49, '2020-07-25 09:42:02', '2020-07-25 09:42:02', '2020-07-25 09:42:02', NULL, NULL, 82),
(50, '2020-07-25 09:43:51', '2020-07-25 09:43:51', '2020-07-25 09:43:51', NULL, NULL, 82),
(51, '2020-07-25 09:46:14', '2020-07-25 09:46:14', '2020-07-25 09:46:14', NULL, NULL, 82),
(52, '2020-07-25 09:47:48', '2020-07-25 09:47:48', '2020-07-25 09:47:48', NULL, NULL, 82),
(53, '2020-07-25 10:20:36', '2020-07-25 10:20:36', '2020-07-25 10:20:36', NULL, NULL, 82),
(54, '2020-07-25 10:22:23', '2020-07-25 10:22:23', '2020-07-25 10:22:23', NULL, NULL, 82),
(55, '2020-07-25 10:23:14', '2020-07-25 10:23:14', '2020-07-25 10:23:14', NULL, NULL, 82),
(56, '2020-07-25 10:31:14', '2020-07-25 10:31:14', '2020-07-25 10:31:14', NULL, NULL, 82),
(57, '2020-07-25 10:31:35', '2020-07-25 10:31:35', '2020-07-25 10:31:35', NULL, NULL, 82),
(58, '2020-07-25 10:33:02', '2020-07-25 10:33:02', '2020-07-25 10:33:02', NULL, NULL, 82),
(59, '2020-07-25 10:33:22', '2020-07-25 10:33:22', '2020-07-25 10:33:22', NULL, NULL, 82),
(60, '2020-07-25 10:33:50', '2020-07-25 10:33:50', '2020-07-25 10:33:50', NULL, NULL, 82),
(61, '2020-07-25 10:34:23', '2020-07-25 10:34:23', '2020-07-25 10:34:23', NULL, NULL, 82),
(62, '2020-07-25 10:47:15', '2020-07-25 10:47:15', '2020-07-25 10:47:15', NULL, NULL, 82),
(63, '2020-07-25 10:47:43', '2020-07-25 10:47:43', '2020-07-25 10:47:43', NULL, NULL, 82),
(64, '2020-07-25 10:48:50', '2020-07-25 10:48:50', '2020-07-25 10:48:50', NULL, NULL, 82),
(65, '2020-07-25 10:50:09', '2020-07-25 10:50:09', '2020-07-25 10:50:09', NULL, NULL, 82),
(66, '2020-07-25 10:50:36', '2020-07-25 10:50:36', '2020-07-25 10:50:36', NULL, NULL, 82),
(67, '2020-07-25 10:50:55', '2020-07-25 10:50:55', '2020-07-25 10:50:55', NULL, NULL, 82),
(68, '2020-07-25 10:52:03', '2020-07-25 10:52:03', '2020-07-25 10:52:03', NULL, NULL, 82),
(69, '2020-07-25 10:55:34', '2020-07-25 10:55:34', '2020-07-25 10:55:34', NULL, NULL, 82),
(70, '2020-07-25 11:04:54', '2020-07-25 11:04:54', '2020-07-25 11:04:54', NULL, NULL, 82),
(71, '2020-07-25 11:09:06', '2020-07-25 11:09:06', '2020-07-25 11:09:06', NULL, NULL, 82),
(72, '2020-07-25 11:09:33', '2020-07-25 11:09:33', '2020-07-25 11:09:33', NULL, NULL, 82),
(73, '2020-07-25 11:13:14', '2020-07-25 11:13:14', '2020-07-25 11:13:14', NULL, NULL, 82),
(74, '2020-07-25 11:14:30', '2020-07-25 11:14:30', '2020-07-25 11:14:30', NULL, NULL, 82),
(75, '2020-07-25 11:14:53', '2020-07-25 11:14:53', '2020-07-25 11:14:53', NULL, NULL, 82),
(76, '2020-07-25 11:16:58', '2020-07-25 11:16:58', '2020-07-25 11:16:58', NULL, NULL, 82),
(77, '2020-07-25 11:17:24', '2020-07-25 11:17:24', '2020-07-25 11:17:24', NULL, NULL, 82),
(78, '2020-07-25 11:17:51', '2020-07-25 11:17:51', '2020-07-25 11:17:51', NULL, NULL, 82),
(79, '2020-07-25 11:19:06', '2020-07-25 11:19:06', '2020-07-25 11:19:06', NULL, NULL, 82),
(80, '2020-07-25 11:22:34', '2020-07-25 11:22:34', '2020-07-25 11:22:34', NULL, NULL, 82),
(81, '2020-07-25 11:24:31', '2020-07-25 11:24:31', '2020-07-25 11:24:31', NULL, NULL, 82),
(82, '2020-07-25 11:25:34', '2020-07-25 11:25:34', '2020-07-25 11:25:34', NULL, NULL, 82),
(83, '2020-07-25 11:26:36', '2020-07-25 11:26:36', '2020-07-25 11:26:36', NULL, NULL, 82),
(84, '2020-07-25 11:30:03', '2020-07-25 11:30:03', '2020-07-25 11:30:03', NULL, NULL, 82),
(85, '2020-07-25 11:30:17', '2020-07-25 11:30:17', '2020-07-25 11:30:17', NULL, NULL, 82),
(86, '2020-07-25 11:32:00', '2020-07-25 11:32:00', '2020-07-25 11:32:00', NULL, NULL, 82),
(87, '2020-07-25 11:33:51', '2020-07-25 11:33:51', '2020-07-25 11:33:51', NULL, NULL, 82),
(88, '2020-07-25 11:34:28', '2020-07-25 11:34:28', '2020-07-25 11:34:28', NULL, NULL, 82),
(89, '2020-07-25 11:35:11', '2020-07-25 11:35:11', '2020-07-25 11:35:11', NULL, NULL, 82),
(90, '2020-07-25 11:35:31', '2020-07-25 11:35:31', '2020-07-25 11:35:31', NULL, NULL, 82),
(91, '2020-07-25 11:36:09', '2020-07-25 11:36:09', '2020-07-25 11:36:09', NULL, NULL, 82),
(92, '2020-07-25 11:38:10', '2020-07-25 11:38:10', '2020-07-25 11:38:10', NULL, NULL, 82),
(93, '2020-07-25 11:39:24', '2020-07-25 11:39:24', '2020-07-25 11:39:24', NULL, NULL, 82),
(94, '2020-07-25 11:39:42', '2020-07-25 11:39:42', '2020-07-25 11:39:42', NULL, NULL, 82),
(95, '2020-07-25 11:40:32', '2020-07-25 11:40:32', '2020-07-25 11:40:32', NULL, NULL, 82),
(96, '2020-07-25 11:41:57', '2020-07-25 11:41:57', '2020-07-25 11:41:57', NULL, NULL, 82),
(97, '2020-07-25 11:43:11', '2020-07-25 11:43:11', '2020-07-25 11:43:11', NULL, NULL, 82),
(98, '2020-07-25 11:43:55', '2020-07-25 11:43:55', '2020-07-25 11:43:55', NULL, NULL, 82),
(99, '2020-07-25 11:44:41', '2020-07-25 11:44:41', '2020-07-25 11:44:41', NULL, NULL, 82),
(100, '2020-07-25 11:45:08', '2020-07-25 11:45:08', '2020-07-25 11:45:08', NULL, NULL, 82),
(101, '2020-07-25 11:45:25', '2020-07-25 11:45:25', '2020-07-25 11:45:25', NULL, NULL, 82),
(102, '2020-07-25 11:46:11', '2020-07-25 11:46:11', '2020-07-25 11:46:11', NULL, NULL, 82),
(103, '2020-07-25 11:47:17', '2020-07-25 11:47:17', '2020-07-25 11:47:17', NULL, NULL, 82),
(104, '2020-07-25 11:47:40', '2020-07-25 11:47:40', '2020-07-25 11:47:40', NULL, NULL, 82),
(105, '2020-07-25 11:50:33', '2020-07-25 11:50:33', '2020-07-25 11:50:33', NULL, NULL, 82),
(106, '2020-07-25 11:51:22', '2020-07-25 11:51:22', '2020-07-25 11:51:22', NULL, NULL, 82),
(107, '2020-07-25 11:53:13', '2020-07-25 11:53:13', '2020-07-25 11:53:13', NULL, NULL, 82),
(108, '2020-07-25 11:53:29', '2020-07-25 11:53:29', '2020-07-25 11:53:29', NULL, NULL, 82),
(109, '2020-07-25 11:53:46', '2020-07-25 11:53:46', '2020-07-25 11:53:46', NULL, NULL, 82),
(110, '2020-07-25 11:54:42', '2020-07-25 11:54:42', '2020-07-25 11:54:42', NULL, NULL, 82),
(111, '2020-07-25 11:55:07', '2020-07-25 11:55:07', '2020-07-25 11:55:07', NULL, NULL, 82),
(112, '2020-07-25 11:57:18', '2020-07-25 11:57:18', '2020-07-25 11:57:18', NULL, NULL, 82),
(113, '2020-07-25 11:58:18', '2020-07-25 11:58:18', '2020-07-25 11:58:18', NULL, NULL, 82),
(114, '2020-07-25 11:58:40', '2020-07-25 11:58:40', '2020-07-25 11:58:40', NULL, NULL, 82),
(115, '2020-07-25 11:58:57', '2020-07-25 11:58:57', '2020-07-25 11:58:57', NULL, NULL, 82),
(116, '2020-07-25 12:00:35', '2020-07-25 12:00:35', '2020-07-25 12:00:35', NULL, NULL, 82),
(117, '2020-07-25 12:02:01', '2020-07-25 12:02:01', '2020-07-25 12:02:01', NULL, NULL, 82),
(118, '2020-07-25 12:03:09', '2020-07-25 12:03:09', '2020-07-25 12:03:09', NULL, NULL, 83),
(119, '2020-07-25 12:05:48', '2020-07-25 12:05:48', '2020-07-25 12:05:48', NULL, NULL, 82),
(120, '2020-07-25 12:08:34', '2020-07-25 12:08:34', '2020-07-25 12:08:34', NULL, NULL, 82),
(121, '2020-07-25 12:10:21', '2020-07-25 12:10:21', '2020-07-25 12:10:21', NULL, NULL, 82),
(122, '2020-07-25 12:10:47', '2020-07-25 12:10:47', '2020-07-25 12:10:47', NULL, NULL, 82),
(123, '2020-07-25 12:11:41', '2020-07-25 12:11:41', '2020-07-25 12:11:41', NULL, NULL, 82),
(124, '2020-07-25 12:12:05', '2020-07-25 12:12:05', '2020-07-25 12:12:05', NULL, NULL, 82),
(125, '2020-07-25 12:12:30', '2020-07-25 12:12:30', '2020-07-25 12:12:30', NULL, NULL, 82),
(126, '2020-07-25 12:13:04', '2020-07-25 12:13:04', '2020-07-25 12:13:04', NULL, NULL, 82),
(127, '2020-07-25 12:13:35', '2020-07-25 12:13:35', '2020-07-25 12:13:35', NULL, NULL, 82),
(128, '2020-07-25 12:14:37', '2020-07-25 12:14:37', '2020-07-25 12:14:37', NULL, NULL, 82),
(129, '2020-07-27 17:39:24', '2020-07-27 17:39:24', '2020-07-27 17:39:24', NULL, NULL, 97),
(130, '2020-07-28 06:10:30', '2020-07-28 06:10:30', '2020-07-28 06:10:30', NULL, NULL, 97),
(131, '2020-07-28 07:01:04', '2020-07-28 07:01:04', '2020-07-28 07:01:04', NULL, NULL, 98),
(132, '2020-07-28 16:49:11', '2020-07-28 16:49:11', '2020-07-28 16:49:11', NULL, NULL, 82),
(133, '2020-08-01 19:31:15', '2020-08-01 19:31:15', '2020-08-01 19:31:15', NULL, NULL, 99),
(134, '2020-08-02 08:11:33', '2020-08-02 08:11:33', '2020-08-02 08:11:33', NULL, NULL, 100);

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_27_093641_create_penifits_table', 2),
(4, '2014_10_12_100000_create_password_resets_table', 3),
(5, '2020_01_01_000001_create_bookable_bookings_table', 4),
(6, '2020_01_01_000002_create_bookable_rates_table', 5),
(7, '2020_01_01_000003_create_bookable_availabilities_table', 6),
(8, '2020_01_01_000004_create_ticketable_tickets_table', 7),
(9, '2020_01_01_000005_create_ticketable_bookings_table', 8),
(10, '2020_07_25_115318_create_events_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ghadeer.mayya@hotmail.com', '$2y$10$eHvntnmiNZEKxp8r4WfWTe1jHZppxVHCUYlNGTMGcQhmG7pMFMr6G', '2020-05-28 08:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `penifits`
--

CREATE TABLE `penifits` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(33) DEFAULT NULL,
  `father_name` varchar(33) NOT NULL,
  `last_name` varchar(33) NOT NULL,
  `city_name` varchar(33) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `sex` varchar(3) NOT NULL DEFAULT 'o',
  `card_id` varchar(33) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `wait` int(1) NOT NULL DEFAULT 0 COMMENT '1 is yes waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penifits`
--

INSERT INTO `penifits` (`id`, `created_at`, `updated_at`, `first_name`, `father_name`, `last_name`, `city_name`, `birth_date`, `sex`, `card_id`, `added_by`, `wait`) VALUES
(82, '2020-07-19 18:45:44', '2020-07-19 18:45:44', 'غدير', 'يونس', 'ميا', 'جبلة', '0000-00-00', '', '06110016062', '', 1),
(83, '2020-07-20 11:23:14', '2020-07-20 11:23:14', 'as', 'as', 'as', 'as', '0000-00-00', '', '123', 'reception@mail.com', 1),
(84, '2020-07-20 11:23:43', '2020-07-20 11:23:43', 'as', 'as', 'as', 'as', '0000-00-00', '', '123666', 'case.study@mail.com', 1),
(85, '2020-07-20 12:12:10', '2020-07-20 12:12:10', 'Гадир', 'as', 'as', 'as', '1990-12-03', '', '12345', 'case.study@mail.com', 1),
(86, '2020-07-20 12:25:15', '2020-07-20 12:25:15', 'Гадир', 'as', 'as', 'as', '2020-07-08', 'o', '1234556', 'case.study@mail.com', 1),
(87, '2020-07-20 12:26:34', '2020-07-20 12:26:34', 'as', 'as', 'as', 'as', '2020-07-01', 'o', '123777', 'case.study@mail.com', 1),
(88, '2020-07-20 12:27:30', '2020-07-20 12:27:30', 'as', 'as', 'as', 'as', '2020-07-14', 'o', '123111', 'case.study@mail.com', 1),
(89, '2020-07-20 12:28:12', '2020-07-20 12:28:12', 'as', 'as', 'as', 'as', '2020-07-15', 'o', '061100160621', 'case.study@mail.com', 1),
(90, '2020-07-20 12:39:08', '2020-07-20 12:39:08', 'as', 'as', 'as', 'as', NULL, 'o', '123321', 'case.study@mail.com', 1),
(91, '2020-07-20 12:39:44', '2020-07-20 12:39:44', 'as', 'as', 'as', 'as', NULL, 'o', '1233213', 'case.study@mail.com', 1),
(92, '2020-07-20 12:40:34', '2020-07-20 12:40:34', 'as', 'as', 'as', 'as', NULL, 'o', '123213443', 'case.study@mail.com', 1),
(93, '2020-07-20 12:40:41', '2020-07-20 12:40:41', 'as', 'as', 'as', 'as', NULL, 'o', '1232134435', 'case.study@mail.com', 1),
(94, '2020-07-20 12:42:14', '2020-07-20 12:42:14', 'Гадир', 'sdfs', 'as', 'as', '2020-07-08', 'm', '98989898', 'case.study@mail.com', 1),
(95, '2020-07-20 12:53:14', '2020-07-20 12:53:14', 'rt', 'rt', 'rt', 'rt', '2020-07-16', 'm', '123654321', 'reception@mail.com', 1),
(96, '2020-07-20 12:53:27', '2020-07-20 12:53:27', 'rt', 'rt', 'rt', 'rt', '2020-07-16', 'f', '1236543213', 'reception@mail.com', 1),
(97, '2020-07-27 17:39:24', '2020-07-27 17:39:24', 'aladdin', 'BILAL', 'zreqa', 'JABLAH', '1993-07-08', 'o', '43214321', 'reception@mail.com', 1),
(98, '2020-07-28 07:01:04', '2020-07-28 07:01:04', 'kfjvkl', 'kdjvlk', 'kjvclkv', 'kcjvlk', '1990-12-12', 'm', '090909', 'reception@mail.com', 1),
(99, '2020-08-01 19:31:15', '2020-08-01 19:31:15', 'Ghadeer', 'qwe', 'qwe', 'qwe', '2020-08-26', 'm', '0909090976', 'case.study@mail.com', 1),
(100, '2020-08-02 08:11:33', '2020-08-02 08:11:33', 'basheer', 'adeeb', 'abbas', 'lattakia', '2020-08-26', 'o', '888444', 'case.study@mail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `serviceproviders`
--

CREATE TABLE `serviceproviders` (
  `id` bigint(3) NOT NULL,
  `name` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `mobile` varchar(33) NOT NULL,
  `specialist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serviceproviders`
--

INSERT INTO `serviceproviders` (`id`, `name`, `email`, `mobile`, `specialist`) VALUES
(1, 'dr.mayya', 'gh.mayya@mail.com', '0988037423', 'any specialist'),
(2, 'dr.ahmad', 'sdasd@mail.com', '0902384789', 'ewwe');

-- --------------------------------------------------------

--
-- Table structure for table `ticketable_bookings`
--

CREATE TABLE `ticketable_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `paid` decimal(8,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `is_attended` tinyint(1) NOT NULL DEFAULT 0,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticketable_tickets`
--

CREATE TABLE `ticketable_tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticketable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticketable_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT -1,
  `sort_order` mediumint(8) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `priv` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `priv`) VALUES
(1, 'ghadeerMayya', 'ghadeer.mayya@hotmail.com', NULL, '$2y$10$o5qIpCJ/cjN8uRzWfch6y.s1s4wRXuLy.ln0W/4pR.FkCuyg69NWS', NULL, '2020-05-27 19:04:48', '2020-05-27 19:04:48', 0, 'admin'),
(6, 'ghGuest', 'fghfghf@test.net', NULL, '$2y$10$FJTHWle3kdlg7iS3Gd.h0.kB.z/z.C/.5A/O2NmzzWR0RahJ9/zgy', NULL, '2020-07-15 17:38:14', '2020-07-15 17:38:14', NULL, 'reception'),
(7, 'Ghadeer', 'bzbzbzbz@hhhh.com', NULL, '$2y$10$kbhIN9ucNNg6LaU7UTwNxeefsdPUgDN6LMp6/RdHyBHxVMkLZlINK', NULL, '2020-07-15 17:58:51', '2020-07-15 17:58:51', NULL, 'guest'),
(8, 'Case Study', 'case.study@mail.com', NULL, '$2y$10$JsS47/z2uI0EcgWka.6wDOqQJJnVnKCpoXZO9z73rri/4qVYzqHHq', NULL, '2020-07-16 06:29:33', '2020-07-16 06:29:33', NULL, 'casestudy'),
(9, 'Reception', 'reception@mail.com', NULL, '$2y$10$0Js7bdDbwWSXINTBBlssKuPfd0QeRrKHmSbN6x8/DwAUvfrZ1dWGC', NULL, '2020-07-16 06:29:57', '2020-07-16 06:29:57', NULL, 'reception'),
(10, 'Administrator', 'admin@mail.com', NULL, '$2y$10$76o6pcq73IEyeZlHYxyr9eNH8Sa/5TP76JOUgdmub.zPo29V6YjoC', NULL, '2020-07-16 06:30:23', '2020-07-16 06:30:23', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookable_availabilities`
--
ALTER TABLE `bookable_availabilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookable_availabilities_bookable_type_bookable_id_index` (`bookable_type`,`bookable_id`);

--
-- Indexes for table `bookable_bookings`
--
ALTER TABLE `bookable_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookable_bookings_bookable_type_bookable_id_index` (`bookable_type`,`bookable_id`),
  ADD KEY `bookable_bookings_customer_type_customer_id_index` (`customer_type`,`customer_id`);

--
-- Indexes for table `bookable_rates`
--
ALTER TABLE `bookable_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookable_rates_bookable_type_bookable_id_index` (`bookable_type`,`bookable_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logofpenifits`
--
ALTER TABLE `logofpenifits`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `penifits`
--
ALTER TABLE `penifits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketable_bookings`
--
ALTER TABLE `ticketable_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketable_tickets`
--
ALTER TABLE `ticketable_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketable_tickets_ticketable_type_ticketable_id_index` (`ticketable_type`,`ticketable_id`);

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
-- AUTO_INCREMENT for table `bookable_availabilities`
--
ALTER TABLE `bookable_availabilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `bookable_bookings`
--
ALTER TABLE `bookable_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookable_rates`
--
ALTER TABLE `bookable_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logofpenifits`
--
ALTER TABLE `logofpenifits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penifits`
--
ALTER TABLE `penifits`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  MODIFY `id` bigint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticketable_bookings`
--
ALTER TABLE `ticketable_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticketable_tickets`
--
ALTER TABLE `ticketable_tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
