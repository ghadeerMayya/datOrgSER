-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 06:36 PM
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
-- Table structure for table `bookusers`
--

CREATE TABLE `bookusers` (
  `id` int(11) NOT NULL,
  `bookable_id` varchar(33) NOT NULL,
  `customer_id` varchar(33) NOT NULL,
  `booking_date` date NOT NULL,
  `starts_at` time NOT NULL,
  `ends_at` time NOT NULL,
  `doctor_id` varchar(33) NOT NULL,
  `status` varchar(33) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookusers`
--

INSERT INTO `bookusers` (`id`, `bookable_id`, `customer_id`, `booking_date`, `starts_at`, `ends_at`, `doctor_id`, `status`, `created_at`, `updated_at`) VALUES
(40, '8', '114', '2020-07-28', '22:26:00', '12:26:00', '8', 'waiting', '2020-08-31 18:26:23', '2020-08-31 18:26:23'),
(41, '8', '116', '2020-09-09', '14:45:00', '15:45:00', '8', 'waiting', '2020-09-08 11:45:07', '2020-09-08 11:45:07'),
(43, '12', '114', '2020-09-09', '10:53:00', '00:52:00', '12', 'waiting', '2020-09-12 07:52:27', '2020-09-12 07:52:27'),
(44, '8', '119', '2020-09-17', '17:57:00', '20:57:00', '8', 'waiting', '2020-09-14 13:57:13', '2020-09-14 13:57:13'),
(45, '8', '114', '2020-09-29', '22:45:00', '22:45:00', '9', 'waiting', '2020-09-28 19:45:54', '2020-09-28 19:45:54'),
(46, '8', '114', '2020-09-16', '22:52:00', '23:52:00', '8', 'waiting', '2020-09-28 19:52:20', '2020-09-28 19:52:20'),
(47, '8', '114', '2020-10-02', '22:18:00', '23:18:00', '8', 'waiting', '2020-10-01 18:18:53', '2020-10-01 18:18:53'),
(48, '8', '114', '2020-10-01', '22:23:00', '13:23:00', '2', 'waiting', '2020-10-01 18:23:25', '2020-10-01 18:23:25'),
(49, '9', '114', '2020-10-06', '20:08:00', '19:10:00', '8', 'waiting', '2020-10-25 16:08:42', '2020-10-25 16:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `initialevaluationforms`
--

CREATE TABLE `initialevaluationforms` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL COMMENT 'user entered form',
  `customer_id` int(255) NOT NULL COMMENT 'penifit',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `num_family` int(11) DEFAULT NULL,
  `i_e_previous_job` varchar(255) DEFAULT NULL,
  `i_e_current_job` varchar(255) DEFAULT NULL,
  `i_e_address` varchar(200) DEFAULT NULL,
  `i_e_phone` varchar(33) DEFAULT NULL,
  `I_e_main` text DEFAULT NULL COMMENT 'الشكوى الرئيسية',
  `I_e_story` text DEFAULT NULL COMMENT 'القصة الحالية',
  `I_e_Illness` text DEFAULT NULL COMMENT '  القصة المرضية',
  `I_e_pre` text DEFAULT NULL COMMENT 'السوابق (الطبية، الدوائية، العائلية',
  `I_e_report_date` date DEFAULT NULL COMMENT 'تاريخ التقرير',
  `I_e_report_name` varchar(100) DEFAULT NULL COMMENT 'اسم المعالج أو الطبيب',
  `I_e_report_Therapy` text DEFAULT NULL COMMENT 'العلاج المقترح',
  `I_e_report_Diagnose` text DEFAULT NULL COMMENT 'التشخيص',
  `I_e_report_photo` varchar(200) DEFAULT NULL COMMENT 'صورة عن التقرير',
  `I_e_report_Satis` varchar(255) DEFAULT NULL COMMENT 'الرضا عن العلاج',
  `I_e_Psy_talk` varchar(255) DEFAULT NULL COMMENT 'الكلام',
  `I_e_Psy_display` varchar(255) DEFAULT NULL COMMENT 'المظهر',
  `I_e_Psy_mood` varchar(255) DEFAULT NULL COMMENT 'المزاج والوجدان',
  `I_e_Psy_think` varchar(255) DEFAULT NULL COMMENT 'التفكير',
  `I_e_Psy_Focus` varchar(255) DEFAULT NULL COMMENT 'الانتباه والتركيز',
  `I_e_Psy_Realization` varchar(255) DEFAULT NULL COMMENT 'الإدراك',
  `I_e_Psy_vision` varchar(255) DEFAULT NULL COMMENT 'المحاكمة والبصيرة',
  `I_e_I_d_schs` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'الطيف الفصامي\r\n1 is checked',
  `I_e_I_d_md` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات المزاج',
  `I_e_I_d_ad` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات القلق',
  `I_e_I_d_ob` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'الوسواس القهري',
  `I_e_I_d_ptd` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات الصدمة والشدات',
  `I_e_I_d_non` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'الاضطرابات الانشقاقية والنفس جسدية',
  `I_e_I_d_fed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات التغذية والطعام FED',
  `I_e_I_d_cd` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات التواصل (لغة- كلام)',
  `I_e_I_d_sex` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات الوظيفة الجنسية والنوع',
  `I_e_I_d_bad` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات سوء استخدام المواد',
  `I_e_I_d_nd` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'الاضطرابات العصبية المعرفية ND',
  `I_e_I_d_pd` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطرابات الشخصية',
  `I_e_I_d_ep` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'الصرع',
  `I_e_I_d_adhd` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'ADHD',
  `I_e_I_d_ed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطراب ضبط المصرات ED </',
  `I_e_I_d_learn` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'اضطراب تعلم',
  `I_e_I_d_auts` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'طيف توحدي AutS',
  `I_e_I_d_mr` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'تأخر فكريMR',
  `I_e_I_d_pro` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'مشكلة تكيفية',
  `I_e_Illness_summary` text DEFAULT NULL,
  `doctor_selectedin_I_E` varchar(255) DEFAULT NULL COMMENT 'doctor_id_transfered_to',
  `I_e_report_form_pro` text DEFAULT NULL COMMENT 'الشكاوي والمشاكل',
  `I_e_report_form_date` date DEFAULT NULL COMMENT 'تاريخ التقرير',
  `I_e_report_form_good` text DEFAULT NULL COMMENT 'الأشياء التي يقوم بها المسترشد بشكل جيد(الأداء الوظيفي الملائم',
  `I_e_report_form_background` text DEFAULT NULL COMMENT 'خلفية سياق المشاكل',
  `I_e_report_form_first` text DEFAULT NULL COMMENT 'التقييم الأولي',
  `I_e_report_sources` text DEFAULT NULL COMMENT 'المصادر أو الموارد المتاحة للمسترشد',
  `I_e_report_form_work` text DEFAULT NULL COMMENT 'خطة العمل'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `initialevaluationforms`
--

INSERT INTO `initialevaluationforms` (`id`, `user_id`, `customer_id`, `created_at`, `updated_at`, `num_family`, `i_e_previous_job`, `i_e_current_job`, `i_e_address`, `i_e_phone`, `I_e_main`, `I_e_story`, `I_e_Illness`, `I_e_pre`, `I_e_report_date`, `I_e_report_name`, `I_e_report_Therapy`, `I_e_report_Diagnose`, `I_e_report_photo`, `I_e_report_Satis`, `I_e_Psy_talk`, `I_e_Psy_display`, `I_e_Psy_mood`, `I_e_Psy_think`, `I_e_Psy_Focus`, `I_e_Psy_Realization`, `I_e_Psy_vision`, `I_e_I_d_schs`, `I_e_I_d_md`, `I_e_I_d_ad`, `I_e_I_d_ob`, `I_e_I_d_ptd`, `I_e_I_d_non`, `I_e_I_d_fed`, `I_e_I_d_cd`, `I_e_I_d_sex`, `I_e_I_d_bad`, `I_e_I_d_nd`, `I_e_I_d_pd`, `I_e_I_d_ep`, `I_e_I_d_adhd`, `I_e_I_d_ed`, `I_e_I_d_learn`, `I_e_I_d_auts`, `I_e_I_d_mr`, `I_e_I_d_pro`, `I_e_Illness_summary`, `doctor_selectedin_I_E`, `I_e_report_form_pro`, `I_e_report_form_date`, `I_e_report_form_good`, `I_e_report_form_background`, `I_e_report_form_first`, `I_e_report_sources`, `I_e_report_form_work`) VALUES
(18, 8, 116, '2020-09-09 18:43:05', '2020-09-09 18:43:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 8, 116, '2020-09-09 18:46:50', '2020-09-09 18:46:50', 13, 'asd', '12', 'sad', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 8, 116, '2020-09-09 19:10:17', '2020-09-09 19:10:17', 4, 'لا يعمل', 'مدرس', 'جبلة', '09888845421', 'يسبسيبسيبسيب', 'سيبسيبسيب', 'سيبسيييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييي', 'ييءؤريسبريبرسير\r\nسيبسي\r\nر\r\nسي\r\nر\r\nسير', NULL, NULL, NULL, NULL, NULL, NULL, 'جيد', 'جيد', 'يسب', 'سيب', 'سيب', 'سيب', 'سيبسيب', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'سيبسيبسيب', '10', 'سيبسيب', '2020-09-15', 'سيبسيب', 'سيبسي', 'سيبسيب', 'بسيبسيب', 'سيبسيب'),
(21, 8, 116, '2020-09-09 19:11:06', '2020-09-09 19:11:06', 4, 'لا يعمل', 'مدرس', 'جبلة', '09888845421', 'يسبسيبسيبسيب', 'سيبسيبسيب', 'سيبسيييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييي', 'ييءؤريسبريبرسير\r\nسيبسي\r\nر\r\nسي\r\nر\r\nسير', NULL, NULL, NULL, NULL, NULL, NULL, 'جيد', 'جيد', 'يسب', 'سيب', 'سيب', 'سيب', 'سيبسيب', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'سيبسيبسيب', '10', 'سيبسيب', '2020-09-15', 'سيبسيب', 'سيبسي', 'سيبسيب', 'بسيبسيب', 'سيبسيب'),
(22, 8, 116, '2020-09-09 19:12:44', '2020-09-09 19:12:44', 3, 'dsf', 'sdfsd', 'sdfsdf', 'fsdf', 'sdf', NULL, NULL, NULL, '2020-09-17', 'sdf', 'sdf', 'sdf', 'images/reportImages/1599678764.jpg', 'sdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 8, 116, '2020-09-09 19:14:00', '2020-09-09 19:14:00', 3, 'dsf', 'sdfsd', 'sdfsdf', 'fsdf', 'sdf', NULL, NULL, NULL, '2020-09-17', 'sdf', 'sdf', 'sdf', 'images/reportImages/1599678840.png', 'sdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 8, 116, '2020-09-09 19:23:13', '2020-09-09 19:23:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, 116, '2020-09-09 19:27:55', '2020-09-09 19:27:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 8, 116, '2020-09-10 18:07:16', '2020-09-10 18:07:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 8, 114, '2020-09-11 14:07:48', '2020-09-11 14:07:48', 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 12, 114, '2020-09-12 07:56:18', '2020-09-12 07:56:18', NULL, 'مدرس', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/reportImages/1599897378.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 12, 114, '2020-09-12 07:56:18', '2020-09-12 07:56:18', NULL, 'مدرس', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/reportImages/1599897378.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 8, 114, '2020-09-29 19:01:56', '2020-09-29 19:01:56', 12, 'uy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 'AP_A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 8, 114, '2020-10-01 18:20:00', '2020-10-01 18:20:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 'AP_A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 8, 114, '2020-10-23 10:39:20', '2020-10-23 10:39:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 8, 114, '2020-10-23 10:39:56', '2020-10-23 10:39:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 8, 114, '2020-10-24 07:49:02', '2020-10-24 07:49:02', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 8, 114, '2020-10-24 07:49:15', '2020-10-24 07:49:15', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 8, 114, '2020-10-24 07:49:54', '2020-10-24 07:49:54', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logofpenifits`
--

CREATE TABLE `logofpenifits` (
  `id` bigint(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(200) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `process_type` varchar(200) NOT NULL,
  `process_name` varchar(200) NOT NULL,
  `finance_amount` int(255) DEFAULT NULL,
  `process_notes` varchar(255) DEFAULT NULL,
  `process_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logofpenifits`
--

INSERT INTO `logofpenifits` (`id`, `created_at`, `updated_at`, `user_id`, `customer_id`, `process_type`, `process_name`, `finance_amount`, `process_notes`, `process_id`) VALUES
(164, '2020-10-25 20:21:43', '2020-10-25 20:21:43', 8, 116, 'finance', 'تحويل مالي', NULL, NULL, 13),
(165, '2020-10-27 05:40:28', '2020-10-27 05:40:28', 9, 116, 'finance', 'تحويل مالي', 500, NULL, 13),
(166, '2020-10-27 05:40:55', '2020-10-27 05:40:55', 9, 116, 'finance', 'تحويل مالي', 500, 'دفعة مؤجلة', 13),
(167, '2020-10-27 05:54:08', '2020-10-27 05:54:08', 9, 116, 'finance', 'تحويل مالي', 500, NULL, 13),
(168, '2020-10-27 05:54:24', '2020-10-27 05:54:24', 9, 116, 'finance', 'تحويل مالي', 500, NULL, 13),
(169, '2020-10-27 06:05:30', '2020-10-27 06:05:30', 9, 116, 'finance', 'تحويل مالي', 1200, NULL, 13),
(170, '2020-10-27 06:07:41', '2020-10-27 06:07:41', 9, 116, 'finance', 'تحويل مالي', 1000, 'باقي800', 13),
(171, '2020-10-27 06:08:43', '2020-10-27 06:08:43', 9, 116, 'finance', 'تحويل مالي', 8000, NULL, 13),
(173, '2020-10-27 06:26:58', '2020-10-27 06:26:58', 8, 114, 'finance', 'تحويل مالي', 8800, NULL, 14),
(174, '2020-10-27 06:27:39', '2020-10-27 06:27:39', 8, 114, 'finance', 'تحويل مالي', NULL, NULL, 15),
(175, '2020-10-27 06:27:50', '2020-10-27 06:27:50', 8, 114, 'finance', 'تحويل مالي', 6000, NULL, 15),
(176, '2020-10-27 06:32:09', '2020-10-27 06:32:09', 8, 114, 'finance', 'استلام دفعة', 1000, NULL, 15),
(177, '2020-10-27 06:34:16', '2020-10-27 06:34:16', 8, 114, 'finance', 'استلام دفعة', 500, NULL, 15),
(178, '2020-10-27 07:12:23', '2020-10-27 07:12:23', 8, 119, 'finance', 'تحويل مالي', NULL, NULL, 16),
(179, '2020-10-27 07:12:46', '2020-10-27 07:12:46', 8, 119, 'finance', 'استلام دفعة', 10000, NULL, 16),
(180, '2020-10-27 07:42:13', '2020-10-27 07:42:13', 8, 116, 'survey', 'التوحد عند الأطفال', NULL, NULL, 28),
(181, '2020-10-27 07:42:47', '2020-10-27 07:42:47', 8, 116, 'finance', 'تحويل مالي', NULL, NULL, 17),
(182, '2020-10-27 07:44:00', '2020-10-27 07:44:00', 9, 116, 'finance', 'استلام دفعة', 3000, NULL, 17),
(183, '2020-10-27 07:45:38', '2020-10-27 07:45:38', 8, 116, 'finance', 'استلام دفعة', 6000, NULL, 17),
(184, '2020-10-28 17:11:04', '2020-10-28 17:11:04', 8, 119, 'finance', 'استلام دفعة', 15000, NULL, 16);

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
  `gender` varchar(3) NOT NULL DEFAULT 'o',
  `social_status` varchar(11) DEFAULT NULL,
  `card_id` varchar(33) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `wait` int(1) NOT NULL DEFAULT 0 COMMENT '1 is yes waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penifits`
--

INSERT INTO `penifits` (`id`, `created_at`, `updated_at`, `first_name`, `father_name`, `last_name`, `city_name`, `birth_date`, `gender`, `social_status`, `card_id`, `added_by`, `wait`) VALUES
(114, '2020-08-09 14:52:23', '2020-08-09 14:52:23', 'غدير', 'يونس', 'ميا', 'جبلة', '1993-11-20', 'm', 'single', '06110016062', '9', 1),
(116, '2020-08-31 06:53:00', '2020-08-31 06:53:00', 'علا', 'أحمد', 'محمود', 'جبلة', '1990-12-12', 'f', 'married', '4444', '8', 1),
(117, '2020-08-31 06:54:18', '2020-08-31 06:54:18', 'تاتا', 'بببب', 'ببب', 'ببييب', '2020-07-29', 'o', 'single', '555', '8', 1),
(118, '2020-09-11 13:56:08', '2020-09-11 13:56:08', 'غدير', 'يونس', 'أحمد', 'جبلة', '1993-11-20', 'm', 'single', '06110016099', '8', 1),
(119, '2020-09-14 13:56:57', '2020-09-14 13:56:57', 'سمير', 'أحمد', 'محمد', 'دمشق', '1990-12-15', 'm', 'single', '789789', '8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tasklogs`
--

CREATE TABLE `tasklogs` (
  `id` int(11) NOT NULL,
  `user_did_task` varchar(33) NOT NULL,
  `penifit_id` varchar(33) NOT NULL COMMENT 'or card_id',
  `task` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasklogs`
--

INSERT INTO `tasklogs` (`id`, `user_did_task`, `penifit_id`, `task`, `created_at`, `updated_at`) VALUES
(60, '9', '06110016062', 'searching', '2020-08-09 21:29:04', '2020-08-09 21:29:04'),
(61, '9', '123', 'searching', '2020-08-09 21:59:36', '2020-08-09 21:59:36'),
(62, '9', '06110016062', 'searching', '2020-08-13 10:54:56', '2020-08-13 10:54:56'),
(63, '9', '114', 'Booking', '2020-08-13 10:56:29', '2020-08-13 10:56:29'),
(64, '9', '0611001606243', 'searching', '2020-08-13 11:04:51', '2020-08-13 11:04:51'),
(65, '9', '06110016062', 'searching', '2020-08-13 11:05:23', '2020-08-13 11:05:23'),
(66, '9', '06110016062', 'searching', '2020-08-13 11:07:20', '2020-08-13 11:07:20'),
(67, '9', '06110016062', 'searching', '2020-08-13 11:07:21', '2020-08-13 11:07:21'),
(68, '9', '06110016062', 'searching', '2020-08-13 11:07:23', '2020-08-13 11:07:23'),
(69, '9', '06110016062', 'searching', '2020-08-13 11:07:24', '2020-08-13 11:07:24'),
(70, '9', '06110016062', 'searching', '2020-08-13 20:03:52', '2020-08-13 20:03:52'),
(71, '9', '114', 'Booking', '2020-08-13 20:04:20', '2020-08-13 20:04:20'),
(72, '9', '06110016062', 'searching', '2020-08-19 14:03:07', '2020-08-19 14:03:07'),
(73, '9', '114', 'Booking', '2020-08-19 14:03:20', '2020-08-19 14:03:20'),
(74, '9', '06110016062', 'searching', '2020-08-27 13:23:52', '2020-08-27 13:23:52'),
(75, '9', '114', 'Booking', '2020-08-27 13:24:11', '2020-08-27 13:24:11'),
(76, '9', '06110016062', 'searching', '2020-08-28 11:57:28', '2020-08-28 11:57:28'),
(77, '8', '06110016062', 'searching', '2020-08-29 07:53:27', '2020-08-29 07:53:27'),
(78, '8', '06110016062', 'searching', '2020-08-29 17:47:25', '2020-08-29 17:47:25'),
(79, '8', '06110016062', 'searching', '2020-08-29 17:47:40', '2020-08-29 17:47:40'),
(80, '8', '06110016062', 'searching', '2020-08-29 17:49:54', '2020-08-29 17:49:54'),
(81, '8', '06110016062', 'searching', '2020-08-29 17:50:44', '2020-08-29 17:50:44'),
(82, '8', '06110016062', 'searching', '2020-08-29 17:51:53', '2020-08-29 17:51:53'),
(83, '8', '114', 'Booking', '2020-08-29 17:52:02', '2020-08-29 17:52:02'),
(84, '8', '114', 'Booking', '2020-08-29 18:02:06', '2020-08-29 18:02:06'),
(85, '8', '116', 'saving user data', '2020-08-31 06:53:00', '2020-08-31 06:53:00'),
(86, '8', '116', 'Booking', '2020-08-31 06:53:10', '2020-08-31 06:53:10'),
(87, '8', '117', 'saving user data', '2020-08-31 06:54:18', '2020-08-31 06:54:18'),
(88, '8', '117', 'Booking', '2020-08-31 06:54:27', '2020-08-31 06:54:27'),
(89, '8', '06110016062', 'searching', '2020-08-31 18:26:11', '2020-08-31 18:26:11'),
(90, '8', '114', 'Booking', '2020-08-31 18:26:23', '2020-08-31 18:26:23'),
(91, '8', '4444', 'searching', '2020-09-08 11:44:47', '2020-09-08 11:44:47'),
(92, '8', '116', 'Booking', '2020-09-08 11:45:07', '2020-09-08 11:45:07'),
(93, '8', '06110016062', 'searching', '2020-09-11 13:55:24', '2020-09-11 13:55:24'),
(94, '8', '118', 'saving user data', '2020-09-11 13:56:08', '2020-09-11 13:56:08'),
(95, '8', '06110016099', 'searching', '2020-09-11 13:56:11', '2020-09-11 13:56:11'),
(96, '8', '06110016099', 'searching', '2020-09-11 13:56:12', '2020-09-11 13:56:12'),
(97, '8', '06110016099', 'searching', '2020-09-11 13:56:16', '2020-09-11 13:56:16'),
(98, '8', '06110016062', 'searching', '2020-09-11 17:25:34', '2020-09-11 17:25:34'),
(99, '8', '114', 'Booking', '2020-09-11 17:26:09', '2020-09-11 17:26:09'),
(100, '9', '06110016062', 'searching', '2020-09-11 17:57:01', '2020-09-11 17:57:01'),
(101, '8', '06110016062', 'searching', '2020-09-11 17:57:17', '2020-09-11 17:57:17'),
(102, '8', '06110016062', 'searching', '2020-09-11 17:58:57', '2020-09-11 17:58:57'),
(103, '8', '06110016062', 'searching', '2020-09-12 06:33:48', '2020-09-12 06:33:48'),
(104, '8', '06110016062', 'searching', '2020-09-12 06:35:19', '2020-09-12 06:35:19'),
(105, '8', '06110016062', 'searching', '2020-09-12 06:43:26', '2020-09-12 06:43:26'),
(106, '8', '06110016062', 'searching', '2020-09-12 06:44:58', '2020-09-12 06:44:58'),
(107, '8', '06110016062', 'searching', '2020-09-12 06:49:49', '2020-09-12 06:49:49'),
(108, '8', '06110016062', 'searching', '2020-09-12 06:50:32', '2020-09-12 06:50:32'),
(109, '8', '06110016062', 'searching', '2020-09-12 06:52:31', '2020-09-12 06:52:31'),
(110, '8', '06110016062', 'searching', '2020-09-12 06:53:03', '2020-09-12 06:53:03'),
(111, '8', '06110016062', 'searching', '2020-09-12 07:13:41', '2020-09-12 07:13:41'),
(112, '8', '06110016062', 'searching', '2020-09-12 07:14:04', '2020-09-12 07:14:04'),
(113, '8', '06110016062', 'searching', '2020-09-12 07:34:28', '2020-09-12 07:34:28'),
(114, '8', '06110016062', 'searching', '2020-09-12 07:45:27', '2020-09-12 07:45:27'),
(115, '12', '06110016062', 'searching', '2020-09-12 07:52:13', '2020-09-12 07:52:13'),
(116, '12', '114', 'Booking', '2020-09-12 07:52:27', '2020-09-12 07:52:27'),
(117, '8', '06110016062', 'searching', '2020-09-12 12:42:21', '2020-09-12 12:42:21'),
(118, '8', '06110016062', 'searching', '2020-09-12 12:52:21', '2020-09-12 12:52:21'),
(119, '8', '06110016062', 'searching', '2020-09-12 12:58:00', '2020-09-12 12:58:00'),
(120, '8', '06110016062', 'searching', '2020-09-12 12:58:23', '2020-09-12 12:58:23'),
(121, '8', '06110016062', 'searching', '2020-09-12 12:58:53', '2020-09-12 12:58:53'),
(122, '8', '06110016062', 'searching', '2020-09-12 13:02:28', '2020-09-12 13:02:28'),
(123, '8', '06110016062', 'searching', '2020-09-12 13:03:01', '2020-09-12 13:03:01'),
(124, '8', '06110016062', 'searching', '2020-09-12 13:03:39', '2020-09-12 13:03:39'),
(125, '8', '06110016062', 'searching', '2020-09-12 13:03:57', '2020-09-12 13:03:57'),
(126, '8', '06110016062', 'searching', '2020-09-12 13:04:09', '2020-09-12 13:04:09'),
(127, '8', '06110016062', 'searching', '2020-09-12 13:05:12', '2020-09-12 13:05:12'),
(128, '8', '06110016062', 'searching', '2020-09-12 13:06:20', '2020-09-12 13:06:20'),
(129, '8', '06110016062', 'searching', '2020-09-12 13:07:13', '2020-09-12 13:07:13'),
(130, '8', '06110016062', 'searching', '2020-09-12 13:10:25', '2020-09-12 13:10:25'),
(131, '8', '06110016062', 'searching', '2020-09-12 13:15:53', '2020-09-12 13:15:53'),
(132, '8', '06110016062', 'searching', '2020-09-12 13:18:21', '2020-09-12 13:18:21'),
(133, '8', '06110016062', 'searching', '2020-09-12 13:22:19', '2020-09-12 13:22:19'),
(134, '8', '06110016062', 'searching', '2020-09-12 13:23:32', '2020-09-12 13:23:32'),
(135, '8', '06110016062', 'searching', '2020-09-12 13:24:19', '2020-09-12 13:24:19'),
(136, '8', '06110016062', 'searching', '2020-09-12 13:26:15', '2020-09-12 13:26:15'),
(137, '8', '06110016062', 'searching', '2020-09-12 13:29:25', '2020-09-12 13:29:25'),
(138, '8', '06110016062', 'searching', '2020-09-12 13:43:41', '2020-09-12 13:43:41'),
(139, '8', '06110016062', 'searching', '2020-09-12 13:52:24', '2020-09-12 13:52:24'),
(140, '8', '06110016062', 'searching', '2020-09-12 13:56:07', '2020-09-12 13:56:07'),
(141, '8', '06110016062', 'searching', '2020-09-12 13:59:01', '2020-09-12 13:59:01'),
(142, '8', '06110016062', 'searching', '2020-09-14 11:57:16', '2020-09-14 11:57:16'),
(143, '8', '4444', 'searching', '2020-09-14 11:57:48', '2020-09-14 11:57:48'),
(144, '8', '06110016062', 'searching', '2020-09-14 12:45:47', '2020-09-14 12:45:47'),
(145, '8', '06110016062', 'searching', '2020-09-14 12:51:06', '2020-09-14 12:51:06'),
(146, '8', '06110016062', 'searching', '2020-09-14 13:00:06', '2020-09-14 13:00:06'),
(147, '8', '06110016062', 'searching', '2020-09-14 13:18:31', '2020-09-14 13:18:31'),
(148, '8', '06110016062', 'searching', '2020-09-14 13:20:10', '2020-09-14 13:20:10'),
(149, '8', '06110016062', 'searching', '2020-09-14 13:21:10', '2020-09-14 13:21:10'),
(150, '8', '06110016062', 'searching', '2020-09-14 13:24:09', '2020-09-14 13:24:09'),
(151, '8', '06110016062', 'searching', '2020-09-14 13:25:38', '2020-09-14 13:25:38'),
(152, '8', '06110016062', 'searching', '2020-09-14 13:31:05', '2020-09-14 13:31:05'),
(153, '8', '4444', 'searching', '2020-09-14 13:39:21', '2020-09-14 13:39:21'),
(154, '8', '06110016062', 'searching', '2020-09-14 13:45:50', '2020-09-14 13:45:50'),
(155, '8', '06110016062', 'searching', '2020-09-14 13:46:55', '2020-09-14 13:46:55'),
(156, '8', '06110016062', 'searching', '2020-09-14 13:47:19', '2020-09-14 13:47:19'),
(157, '8', '06110016062', 'searching', '2020-09-14 13:50:28', '2020-09-14 13:50:28'),
(158, '8', '555', 'searching', '2020-09-14 13:55:40', '2020-09-14 13:55:40'),
(159, '8', '06110016099', 'searching', '2020-09-14 13:55:47', '2020-09-14 13:55:47'),
(160, '8', '119', 'saving user data', '2020-09-14 13:56:57', '2020-09-14 13:56:57'),
(161, '8', '789789', 'searching', '2020-09-14 13:57:01', '2020-09-14 13:57:01'),
(162, '8', '119', 'Booking', '2020-09-14 13:57:13', '2020-09-14 13:57:13'),
(163, '8', '789789', 'searching', '2020-09-14 13:57:46', '2020-09-14 13:57:46'),
(164, '8', '789789', 'searching', '2020-09-14 13:58:03', '2020-09-14 13:58:03'),
(165, '8', '06110016062', 'searching', '2020-09-14 17:18:13', '2020-09-14 17:18:13'),
(166, '8', '06110016062', 'searching', '2020-09-14 17:51:43', '2020-09-14 17:51:43'),
(167, '8', '06110016062', 'searching', '2020-09-15 06:40:27', '2020-09-15 06:40:27'),
(168, '8', '4444', 'searching', '2020-09-15 06:46:35', '2020-09-15 06:46:35'),
(169, '8', '06110016062', 'searching', '2020-09-15 06:58:12', '2020-09-15 06:58:12'),
(170, '8', '06110016062', 'searching', '2020-09-15 10:52:16', '2020-09-15 10:52:16'),
(171, '8', '06110016062', 'searching', '2020-09-26 08:11:25', '2020-09-26 08:11:25'),
(172, '8', '06110016062', 'searching', '2020-09-26 08:15:59', '2020-09-26 08:15:59'),
(173, '8', '06110016062', 'searching', '2020-09-26 08:36:26', '2020-09-26 08:36:26'),
(174, '8', '06110016062', 'searching', '2020-09-26 09:00:36', '2020-09-26 09:00:36'),
(175, '8', '114', 'Booking', '2020-09-26 09:04:53', '2020-09-26 09:04:53'),
(176, '8', '06110016062', 'searching', '2020-09-26 09:05:02', '2020-09-26 09:05:02'),
(177, '8', '114', 'Booking', '2020-09-26 09:05:04', '2020-09-26 09:05:04'),
(178, '8', '06110016062', 'searching', '2020-09-26 09:13:28', '2020-09-26 09:13:28'),
(179, '8', '06110016062', 'searching', '2020-09-26 18:25:47', '2020-09-26 18:25:47'),
(180, '8', '114', 'Booking', '2020-09-26 18:26:02', '2020-09-26 18:26:02'),
(181, '8', '114', 'Booking', '2020-09-26 18:26:11', '2020-09-26 18:26:11'),
(182, '8', '06110016062', 'searching', '2020-09-26 18:28:41', '2020-09-26 18:28:41'),
(183, '8', '114', 'Booking', '2020-09-26 18:28:57', '2020-09-26 18:28:57'),
(184, '8', '06110016062', 'searching', '2020-09-26 18:30:27', '2020-09-26 18:30:27'),
(185, '8', '114', 'Booking', '2020-09-26 18:30:33', '2020-09-26 18:30:33'),
(186, '8', '114', 'Booking', '2020-09-26 18:30:40', '2020-09-26 18:30:40'),
(187, '8', '06110016062', 'searching', '2020-09-26 18:37:32', '2020-09-26 18:37:32'),
(188, '8', '114', 'Booking', '2020-09-26 18:37:42', '2020-09-26 18:37:42'),
(189, '8', '06110016062', 'searching', '2020-09-26 18:39:29', '2020-09-26 18:39:29'),
(190, '8', '06110016062', 'searching', '2020-09-26 18:41:14', '2020-09-26 18:41:14'),
(191, '8', '06110016062', 'searching', '2020-09-26 18:41:28', '2020-09-26 18:41:28'),
(192, '8', '06110016062', 'searching', '2020-09-26 18:43:25', '2020-09-26 18:43:25'),
(193, '8', '06110016062', 'searching', '2020-09-28 19:42:45', '2020-09-28 19:42:45'),
(194, '8', '114', 'Booking', '2020-09-28 19:43:03', '2020-09-28 19:43:03'),
(195, '8', '06110016062', 'searching', '2020-09-28 19:45:14', '2020-09-28 19:45:14'),
(196, '8', '06110016062', 'searching', '2020-09-28 19:45:22', '2020-09-28 19:45:22'),
(197, '8', '06110016062', 'searching', '2020-09-28 19:45:41', '2020-09-28 19:45:41'),
(198, '8', '114', 'Booking', '2020-09-28 19:45:54', '2020-09-28 19:45:54'),
(199, '8', '06110016062', 'searching', '2020-09-28 19:51:56', '2020-09-28 19:51:56'),
(200, '8', '114', 'Booking', '2020-09-28 19:52:20', '2020-09-28 19:52:20'),
(201, '8', '06110016062', 'searching', '2020-09-29 06:14:45', '2020-09-29 06:14:45'),
(202, '8', '4444', 'searching', '2020-09-29 06:44:16', '2020-09-29 06:44:16'),
(203, '8', '06110016062', 'searching', '2020-09-29 11:53:03', '2020-09-29 11:53:03'),
(204, '8', '06110016062', 'searching', '2020-10-01 18:18:11', '2020-10-01 18:18:11'),
(205, '8', '114', 'Booking', '2020-10-01 18:18:53', '2020-10-01 18:18:53'),
(206, '8', '06110016062', 'searching', '2020-10-01 18:22:39', '2020-10-01 18:22:39'),
(207, '8', '114', 'Booking', '2020-10-01 18:23:25', '2020-10-01 18:23:25'),
(208, '8', '06110016062', 'searching', '2020-10-20 07:11:48', '2020-10-20 07:11:48'),
(209, '8', '06110016062', 'searching', '2020-10-20 07:44:29', '2020-10-20 07:44:29'),
(210, '8', '06110016062', 'searching', '2020-10-20 07:44:58', '2020-10-20 07:44:58'),
(211, '9', '06110016062', 'searching', '2020-10-25 16:08:26', '2020-10-25 16:08:26'),
(212, '9', '114', 'Booking', '2020-10-25 16:08:42', '2020-10-25 16:08:42'),
(213, '9', '06110016062', 'searching', '2020-10-27 06:33:46', '2020-10-27 06:33:46'),
(214, '8', '06110016062', 'searching', '2020-10-27 06:34:05', '2020-10-27 06:34:05');

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
(1, '---------------', 'systemuser@sys.com', NULL, '$2y$10$o5qIpCJ/cjN8uRzWfch6y.s1s4wRXuLy.ln0W/4pR.FkCuyg69NWS', NULL, NULL, NULL, NULL, 'guest'),
(2, 'ghadeerMayya', 'ghadeer.mayya@hotmail.com', NULL, '$2y$10$o5qIpCJ/cjN8uRzWfch6y.s1s4wRXuLy.ln0W/4pR.FkCuyg69NWS', NULL, '2020-05-27 19:04:48', '2020-05-27 19:04:48', 0, 'admin'),
(6, 'ghGuest', 'fghfghf@test.net', NULL, '$2y$10$FJTHWle3kdlg7iS3Gd.h0.kB.z/z.C/.5A/O2NmzzWR0RahJ9/zgy', NULL, '2020-07-15 17:38:14', '2020-07-15 17:38:14', NULL, 'reception'),
(7, 'Ghadeer', 'bzbzbzbz@hhhh.com', NULL, '$2y$10$kbhIN9ucNNg6LaU7UTwNxeefsdPUgDN6LMp6/RdHyBHxVMkLZlINK', NULL, '2020-07-15 17:58:51', '2020-07-15 17:58:51', NULL, 'guest'),
(8, 'Case Study', 'case.study@mail.com', NULL, '$2y$10$JsS47/z2uI0EcgWka.6wDOqQJJnVnKCpoXZO9z73rri/4qVYzqHHq', 'sc0AzZdGgAE9cx993dMQVXTbFvUMHyMRl2tGw5xF4ivADHN8ZkmFGEBzQmpW', '2020-07-16 06:29:33', '2020-07-16 06:29:33', NULL, 'casestudy'),
(9, 'Reception', 'reception@mail.com', NULL, '$2y$10$0Js7bdDbwWSXINTBBlssKuPfd0QeRrKHmSbN6x8/DwAUvfrZ1dWGC', NULL, '2020-07-16 06:29:57', '2020-07-16 06:29:57', NULL, 'reception'),
(10, 'Administrator', 'admin@mail.com', NULL, '$2y$10$76o6pcq73IEyeZlHYxyr9eNH8Sa/5TP76JOUgdmub.zPo29V6YjoC', NULL, '2020-07-16 06:30:23', '2020-07-16 06:30:23', NULL, 'admin'),
(11, 'admin', 'admin1@mail.com', NULL, '$2y$10$v.iL.UP/D03nv.NK5fnUY.IZDAYlFngAA/.Y7h0IDWcXl4/rPQ1km', NULL, '2020-09-08 11:34:48', '2020-09-08 11:34:48', NULL, 'guest'),
(12, 'bash', 'tyty@mail.com', NULL, '$2y$10$HLnAEY0HJP5Xo7qbDydOYeugaKNUy8vZGeyIFZzExZ6EVyRhn7xxe', NULL, '2020-09-12 07:50:57', '2020-09-12 07:50:57', NULL, 'casestudy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookusers`
--
ALTER TABLE `bookusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initialevaluationforms`
--
ALTER TABLE `initialevaluationforms`
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
-- Indexes for table `tasklogs`
--
ALTER TABLE `tasklogs`
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
-- AUTO_INCREMENT for table `bookusers`
--
ALTER TABLE `bookusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `initialevaluationforms`
--
ALTER TABLE `initialevaluationforms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `logofpenifits`
--
ALTER TABLE `logofpenifits`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penifits`
--
ALTER TABLE `penifits`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tasklogs`
--
ALTER TABLE `tasklogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
