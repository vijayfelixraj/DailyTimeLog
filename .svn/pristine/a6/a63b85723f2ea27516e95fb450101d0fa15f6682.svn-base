-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2017 at 10:33 AM
-- Server version: 5.6.12
-- PHP Version: 5.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_iam`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailytimelog`
--

CREATE TABLE IF NOT EXISTS `dailytimelog` (
  `id` int(10) unsigned NOT NULL,
  `schedule_on` date NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `project_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task` mediumtext COLLATE utf8mb4_unicode_ci,
  `billable_hrs` time NOT NULL DEFAULT '00:00:00',
  `scheduled_hrs` time DEFAULT NULL,
  `hrs_spent` time NOT NULL DEFAULT '00:00:00',
  `remarks` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` enum('Completed','In Progress','Pending','Not Completed','Postponed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dailytimelog`
--

INSERT INTO `dailytimelog` (`id`, `schedule_on`, `user_id`, `project_name`, `task`, `billable_hrs`, `scheduled_hrs`, `hrs_spent`, `remarks`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-09-03', 1, 'DBAlumni', 'Testing Task.123', '16:45:00', '05:25:00', '01:05:00', 'Testing Remarks.', 'Completed', '2017-09-03 05:50:10', '2017-09-03 07:15:21', '2017-09-03 07:15:21'),
(2, '2017-09-15', 1, 'DBAlumni', 'Testing Task.', '16:45:00', '05:25:00', '01:05:00', 'Testing Remarks.ad', 'Completed', '2017-09-03 06:54:53', '2017-09-03 07:15:19', '2017-09-03 07:15:19'),
(3, '2017-09-07', 1, 'DBAlumni', 'Testing Task.', '16:45:00', '05:25:00', '01:05:00', 'Testing Remarks.', 'Completed', '2017-09-03 06:56:25', '2017-09-03 07:15:15', '2017-09-03 07:15:15'),
(4, '2017-09-05', 1, 'DBAlumni', 'Testing Task.', '16:45:00', '05:25:00', '01:05:00', 'Testing Remarks.', 'Completed', '2017-09-03 06:56:37', '2017-09-03 07:15:12', '2017-09-03 07:15:12'),
(5, '2017-09-01', 1, 'DBT', 'test', '18:20:00', '01:05:00', '01:05:00', 'tesfsadf', 'In Progress', '2017-09-03 07:22:38', '2017-09-04 00:09:54', '2017-09-04 00:09:54'),
(6, '2017-09-09', 1, 'DBT', 'asdfdas', '02:10:00', '02:10:00', '01:05:00', 'dasfasdf', 'Completed', '2017-09-03 07:38:35', '2017-09-04 00:09:56', '2017-09-04 00:09:56'),
(7, '2017-09-03', 2, 'KRQ', 'Testing KRQ webservices.', '20:00:00', '01:00:00', '01:00:00', 'Remarks.`123sdfds', 'Completed', '2017-09-03 09:38:49', '2017-09-11 06:11:13', NULL),
(8, '2017-09-04', 2, 'DTL, DBA', 'Fix, Support for DTL project, Support for DBA as well', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-04 00:00:37', '2017-09-05 22:37:46', NULL),
(9, '2017-09-05', 2, 'KRQ', 'Implement Web Services', '00:00:00', '05:00:00', '05:00:00', NULL, 'Completed', '2017-09-04 00:01:50', '2017-09-11 06:11:27', NULL),
(10, '2017-09-04', 7, 'WSM', 'Convert Salem Diocese as Responsive website', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 04:08:50', '2017-09-04 06:25:07', NULL),
(11, '2017-09-04', 2, 'DTL', 'Implementing Mange Team Timelog.', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-04 04:25:20', '2017-09-05 22:37:34', NULL),
(12, '2017-09-04', 2, 'DTL', 'Implementing Mange Team Timelog.', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-04 04:25:32', '2017-09-05 22:37:23', NULL),
(13, '2017-09-04', 6, 'DBAlumni', 'Online Testing.', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 04:45:15', '2017-09-04 07:46:31', '2017-09-04 07:46:31'),
(14, '2017-09-05', 7, 'WSM', 'Convert Salem Diocese as Responsive website', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 05:09:51', '2017-09-04 06:28:23', NULL),
(15, '2017-09-04', 5, 'MAG', 'Implement Reviews, Fixes', '00:00:00', '06:00:00', '00:00:00', NULL, 'Completed', '2017-09-04 06:22:46', '2017-09-11 22:28:41', NULL),
(16, '2017-09-04', 5, 'TNBC', 'Update content', '00:00:00', '00:30:00', '00:00:00', NULL, 'Completed', '2017-09-04 06:23:25', '2017-09-11 22:28:53', NULL),
(17, '2017-09-05', 3, 'RedKuiper', 'GST -  Verification and Testing', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 06:26:52', '2017-09-04 06:26:52', NULL),
(18, '2017-09-05', 7, 'WSM', 'Convert Salem Diocese as Responsive website', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 06:29:06', '2017-09-04 06:29:06', NULL),
(19, '2017-09-04', 7, 'RedKuiper, Magazine, Aitorma', 'sadfsdf', '00:00:00', '00:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 06:46:30', '2017-09-04 06:48:25', '2017-09-04 06:48:25'),
(20, '2017-09-04', 11, 'WSM', 'Update Salem diocese content', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-04 06:59:52', '2017-09-06 20:15:43', NULL),
(21, '2017-09-04', 11, 'XAB', 'Fix responsive issues', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-04 07:00:27', '2017-09-06 20:16:00', NULL),
(22, '2017-09-04', 11, 'DBCD', 'Convert the site into Responsive - Hide show menu', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-04 07:01:19', '2017-09-06 20:16:24', NULL),
(23, '2017-09-05', 11, 'ANI Testing', 'ANI lang testing', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 07:03:47', '2017-09-04 07:03:56', NULL),
(24, '2017-09-05', 11, 'WSM', 'Design 2 Layouts for Jammu Diocese', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-04 07:04:27', '2017-09-06 20:15:23', NULL),
(25, '2017-09-05', 3, 'KRQ', 'KRQ - Deploy source + update logo for SMS', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 07:29:16', '2017-09-04 23:58:06', NULL),
(26, '2017-09-04', 11, 'WSM', 'dsgf', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 07:32:45', '2017-09-04 07:32:58', '2017-09-04 07:32:58'),
(27, '2017-09-05', 5, 'DBA', 'Implement , Fix Batch related issues', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-04 07:39:16', '2017-09-05 22:42:20', NULL),
(28, '2017-09-06', 5, 'MAG', 'MAG - Email notification', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-04 07:40:13', '2017-09-06 07:57:56', NULL),
(29, '2017-09-07', 5, 'Training', 'Laravel CRUD', '00:00:00', '03:00:00', '03:00:00', NULL, 'In Progress', '2017-09-04 07:41:23', '2017-09-07 07:40:25', NULL),
(30, '2017-09-08', 5, 'IGM', 'IGM Source Setup', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-04 07:43:37', '2017-09-11 22:27:47', NULL),
(31, '2017-09-05', 6, 'DBA', 'Implement , Fix Batch related issues', '00:00:00', '02:00:00', '00:00:00', NULL, 'Not Completed', '2017-09-04 07:39:16', '2017-09-05 11:28:17', '2017-09-05 11:28:17'),
(32, '2017-09-05', 6, 'MAG', 'MAG - Test the Admin , Front end functions', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 07:40:13', '2017-09-04 07:43:13', NULL),
(33, '2017-09-07', 6, 'Training', 'Laravel CRUD', '00:00:00', '03:00:00', '03:00:00', NULL, 'In Progress', '2017-09-04 07:41:23', '2017-09-07 07:50:27', NULL),
(34, '2017-09-08', 6, 'IGM', 'IGM Source Setup', '00:00:00', '03:00:00', '03:00:00', NULL, 'In Progress', '2017-09-04 07:43:37', '2017-09-08 06:52:52', NULL),
(35, '2017-09-05', 2, 'KRQ', 'Apply S3 functionallity to all the file upload module and Testing it in the online.', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-04 22:41:56', '2017-09-04 22:41:56', NULL),
(36, '2017-09-05', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-04 22:49:03', '2017-09-05 22:32:25', NULL),
(37, '2017-09-05', 10, 'Red Kuiper', 'Study How To Apply Zaakpay Payment', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-04 22:53:07', '2017-09-10 22:23:29', NULL),
(38, '2017-09-05', 12, 'YOG', 'Fix header menu issue and Reviews', '00:00:00', '02:00:00', '03:00:00', NULL, 'Completed', '2017-09-04 23:45:07', '2017-09-05 22:18:42', NULL),
(39, '2017-09-11', 12, 'DBA', 'Implement landing page', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-04 23:45:40', '2017-09-11 22:30:52', NULL),
(40, '2017-09-06', 12, 'MAG', 'Implement Responsive issues in home page and other pages', '00:00:00', '04:30:00', '04:00:00', NULL, 'In Progress', '2017-09-04 23:46:06', '2017-09-06 22:28:28', NULL),
(41, '2017-09-05', 3, 'KRQ', 'Webservice Development of mobile verification, feedback, pre-requisites', '00:00:00', '04:00:00', '04:00:00', NULL, 'In Progress', '2017-09-05 00:00:15', '2017-09-05 22:42:08', NULL),
(42, '2017-09-05', 8, 'MAG', 'Site speed up and image optimise, slider issue fixing, winners list', '00:00:00', '06:00:06', '04:00:00', NULL, 'Completed', '2017-09-05 00:42:04', '2017-09-05 22:24:02', NULL),
(43, '2017-09-05', 8, 'AUX', 'Issue fixing in menu', '00:00:00', '01:00:01', '01:00:00', NULL, 'Completed', '2017-09-05 00:43:01', '2017-09-05 22:21:22', NULL),
(44, '2017-09-05', 8, 'MAG', 'SEO, Security integration', '00:00:00', '01:00:01', '01:00:00', NULL, 'Completed', '2017-09-05 00:43:29', '2017-09-13 22:43:45', NULL),
(45, '2017-09-05', 10, 'Meeting', 'Resume Preparation', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-05 00:49:13', '2017-09-05 22:38:27', NULL),
(46, '2017-09-05', 14, 'CHD', 'Newsletter implementation', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-05 01:39:37', '2017-09-05 01:59:12', NULL),
(47, '2017-09-05', 14, 'FAG', 'forum art gallery gothrow.', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-05 03:57:21', '2017-09-06 01:31:58', NULL),
(48, '2017-09-05', 14, 'XAB', 'XAB Review Changes Working', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-05 03:58:16', '2017-09-05 03:58:16', NULL),
(49, '2017-09-06', 6, 'FAG', 'Implement review changes in artist,exhibition and artlink', '00:00:00', '02:30:00', '02:30:00', NULL, 'Completed', '2017-09-05 11:18:20', '2017-09-06 08:16:06', NULL),
(50, '2017-09-05', 6, 'MAG', 'Change Email notifications for all the forms', '00:00:00', '01:00:00', '01:00:00', NULL, 'Not Completed', '2017-09-05 11:24:48', '2017-09-05 11:24:48', NULL),
(51, '2017-09-05', 6, 'FAG', 'Review changes in fag', '00:00:00', '02:00:00', '02:00:00', NULL, 'Not Completed', '2017-09-05 11:25:39', '2017-09-05 11:25:39', NULL),
(52, '2017-09-05', 6, 'Meeting', 'Meeting with PL about the resume preparation', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-05 11:26:58', '2017-09-05 11:26:58', NULL),
(53, '2017-09-06', 6, 'MAG', 'Set the dimension for images to be upload in the photography contest and validate it', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-05 11:29:10', '2017-09-06 08:17:12', NULL),
(54, '2017-09-06', 6, 'MAG', 'MAG - Email notification', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-05 11:29:36', '2017-09-06 08:16:43', NULL),
(55, '2017-09-05', 12, 'TMA (Twirl Mania)', 'Responsive Design issue fixing', '00:00:00', '05:00:00', '05:00:00', NULL, 'Completed', '2017-09-05 22:18:33', '2017-09-05 23:05:23', NULL),
(56, '2017-09-06', 12, 'PE (Professional Education)', 'Class for College Students', '00:00:00', '01:30:00', '01:15:00', NULL, 'Completed', '2017-09-05 22:20:13', '2017-09-06 22:28:52', NULL),
(57, '2017-09-05', 8, 'MEL', 'Sub page Design issue fixing', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-05 22:22:54', '2017-09-05 22:22:54', NULL),
(58, '2017-09-06', 8, 'DJS', 'Home page setup', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-05 22:24:59', '2017-09-06 22:32:55', NULL),
(59, '2017-09-06', 8, 'MEL , Lourdu church', 'Issues fixing', '00:00:00', '06:00:00', '06:00:00', NULL, 'Completed', '2017-09-05 22:26:02', '2017-09-06 22:33:10', NULL),
(60, '2017-09-04', 12, 'YOG', 'Design issues and reviews fixing', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-05 22:27:53', '2017-09-05 22:27:53', NULL),
(61, '2017-09-04', 12, 'ANI', 'Testing issue fixing', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-05 22:28:47', '2017-09-05 22:28:47', NULL),
(62, '2017-09-04', 12, 'TMA (Twirl Mania)', 'Twril Mania browser issues and design issue fixing', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-05 22:29:36', '2017-09-05 22:29:36', NULL),
(63, '2017-09-04', 12, 'PE (Professional Education)', 'Class for College Students', '00:00:00', '01:30:00', '01:15:00', NULL, 'Completed', '2017-09-05 22:30:30', '2017-09-05 22:30:30', NULL),
(64, '2017-09-06', 4, 'SMI', 'Deployment and Testing and confirmation from the Client', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-05 22:30:51', '2017-09-05 22:30:51', NULL),
(65, '2017-09-06', 4, 'KRQ', 'Web services for the mobile app', '00:00:00', '00:00:06', '00:00:00', NULL, 'In Progress', '2017-09-05 22:31:41', '2017-09-05 22:31:41', NULL),
(66, '2017-09-05', 5, 'MAG', 'Created the email notifications for all the forms and changes in photography contest report', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-05 22:33:18', '2017-09-11 22:28:26', NULL),
(67, '2017-09-06', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-05 22:32:07', '2017-09-06 07:25:06', NULL),
(68, '2017-09-05', 14, 'RSM', 'Resume Implementation and Meeting', '00:00:00', '02:00:00', '03:00:00', NULL, 'Completed', '2017-09-05 22:34:05', '2017-09-05 22:34:41', NULL),
(69, '2017-09-06', 10, 'WLM', 'Check SKU img path whether correct or not for 10', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-05 22:34:07', '2017-09-06 22:20:35', NULL),
(70, '2017-09-06', 2, 'KRQ', 'Apply S3 functionallity to all the file upload module and Testing it in the online.', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-05 22:35:45', '2017-09-05 22:35:45', NULL),
(71, '2017-09-05', 9, 'MAG', 'MAG - Fast load site and testing', '00:00:00', '02:30:00', '03:00:00', NULL, 'Completed', '2017-09-05 22:32:47', '2017-09-06 22:27:17', NULL),
(72, '2017-09-06', 2, 'KRQ', 'Implement Web Services', '00:00:00', '05:00:00', '00:00:00', NULL, 'Completed', '2017-09-05 22:36:27', '2017-09-11 06:10:08', NULL),
(73, '2017-09-06', 10, 'WLM EMU', 'Monthly Analysis Graph', '00:00:00', '00:30:00', '20:00:00', NULL, 'Completed', '2017-09-05 22:35:28', '2017-09-06 22:20:18', NULL),
(74, '2017-09-05', 5, 'Meeting', 'Meeting with techtalk student for process maker', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-05 22:38:14', '2017-09-05 22:40:12', NULL),
(75, '2017-09-05', 9, 'MAG', 'Issue fixing in ratings winner list and adding pagination', '00:00:00', '02:30:00', '02:30:00', NULL, 'Completed', '2017-09-05 22:34:49', '2017-09-05 22:36:02', NULL),
(76, '2017-09-06', 10, 'Red Kuiper', 'Go through the ZaakPay payment', '00:00:00', '01:30:00', '01:30:00', NULL, 'Not Completed', '2017-09-05 22:37:00', '2017-09-10 22:23:45', NULL),
(77, '2017-09-05', 5, 'Meeeting', 'Meeting with PL regarding resume preparation and prepared resume', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-05 22:40:00', '2017-09-05 22:40:00', NULL),
(78, '2017-09-06', 3, 'General', 'Verification and Help in Resume preparation', '00:00:00', '02:00:00', '02:30:00', NULL, 'Completed', '2017-09-05 22:38:46', '2017-09-06 22:24:42', NULL),
(79, '2017-09-06', 3, 'KRQ', 'SMS API Integration', '00:00:00', '02:00:00', '01:30:00', NULL, 'Not Completed', '2017-09-05 22:39:18', '2017-09-06 22:25:23', NULL),
(80, '2017-09-05', 9, 'Meeting and Resume preparation', 'Attend Meeting and resume preparation', '00:00:00', '02:30:00', '03:00:00', NULL, 'Completed', '2017-09-05 22:37:07', '2017-09-05 22:37:07', NULL),
(81, '2017-09-05', 5, 'Techtalk', 'Process maker class', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-05 22:41:18', '2017-09-05 22:41:18', NULL),
(82, '2017-09-06', 3, 'Review', 'Review of works in KRQ, SMI and resumes of mebers', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-05 22:40:00', '2017-09-06 22:25:10', NULL),
(83, '2017-09-06', 3, 'KRQ', 'Webservice Development for the service provider and user', '00:00:00', '05:00:00', '04:00:00', NULL, 'Not Completed', '2017-09-05 22:40:27', '2017-09-06 22:25:41', NULL),
(84, '2017-09-06', 9, 'MAG-Correction', 'Issue fixing and home slider photo changes', '00:00:00', '02:00:00', '02:30:00', NULL, 'Completed', '2017-09-05 22:39:00', '2017-09-07 22:32:34', NULL),
(85, '2017-09-06', 14, 'FAG', '1.Available works to come first in the order in FAG', '00:00:00', '03:00:00', '06:00:00', NULL, 'Completed', '2017-09-05 22:57:15', '2017-09-08 06:13:01', NULL),
(86, '2017-09-06', 5, 'FAG', 'Implement review changes in artist,exhibition and artlink', '00:00:00', '02:30:00', '02:30:00', NULL, 'Completed', '2017-09-05 23:07:13', '2017-09-06 07:57:05', NULL),
(87, '2017-09-06', 5, 'Techtalk', 'Process maker class', '00:00:00', '01:00:00', '00:00:00', NULL, 'Completed', '2017-09-05 23:08:07', '2017-09-06 08:00:08', NULL),
(88, '2017-09-06', 14, 'FAG', '2.enable to upload Images in the ArtINK page', '00:00:00', '01:50:00', '02:00:00', NULL, 'Completed', '2017-09-06 01:30:30', '2017-09-06 22:17:33', NULL),
(89, '2017-09-06', 5, 'MAG', 'Set the dimension for images to be upload in the photography contest and validate it', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-06 07:59:13', '2017-09-11 22:28:16', NULL),
(90, '2017-09-06', 5, 'Meeting', 'Resume preparation', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-06 07:59:42', '2017-09-06 07:59:42', NULL),
(91, '2017-09-06', 6, 'Meeting', 'Resume preparation', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-06 08:17:47', '2017-09-06 08:17:47', NULL),
(92, '2017-09-07', 14, 'FAG', 'Onclick Image Should be Show - FAG', '00:00:00', '04:00:00', '07:30:00', NULL, 'Completed', '2017-09-06 22:20:23', '2017-09-08 06:10:45', NULL),
(93, '2017-09-07', 3, 'KRQ', 'Meeting and Review', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-06 22:21:10', '2017-09-06 22:21:10', NULL),
(94, '2017-09-07', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-06 22:21:06', '2017-09-07 22:25:46', NULL),
(95, '2017-09-07', 5, 'MAG', 'Check mail notification and test all the forms in online', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-06 22:23:10', '2017-09-11 22:28:00', NULL),
(96, '2017-09-07', 9, 'DJSES', 'Home slider implementation', '00:00:00', '02:00:00', '02:30:00', NULL, 'Completed', '2017-09-06 22:19:44', '2017-09-13 23:31:40', NULL),
(97, '2017-09-07', 3, 'KRQ', 'SMS Implementation using MSG91', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-06 22:22:29', '2017-09-06 22:22:29', NULL),
(98, '2017-09-07', 10, 'WLM EMU', 'Check SKU FBA and  stock', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-06 22:22:09', '2017-09-07 22:25:36', NULL),
(99, '2017-09-07', 3, 'IGM', 'Verification on the completed works and pending works', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-06 22:23:06', '2017-09-06 22:23:06', NULL),
(100, '2017-09-07', 9, 'DJSES', 'Footer section implementation with testing', '00:00:00', '01:30:00', '02:00:00', NULL, 'Completed', '2017-09-06 22:20:43', '2017-09-07 22:31:39', NULL),
(101, '2017-09-07', 3, 'KRQ', 'Webservice Development for the users', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-06 22:23:30', '2017-09-06 22:23:30', NULL),
(102, '2017-09-06', 9, 'DJSES', 'Menu creation and pages creation', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-06 22:21:44', '2017-09-06 22:21:44', NULL),
(103, '2017-09-07', 2, 'KRQ', 'Worked on RRC', '00:00:00', '04:00:00', '00:00:00', NULL, 'Completed', '2017-09-06 22:25:32', '2017-09-10 22:32:51', NULL),
(104, '2017-09-06', 9, 'DJSES', 'Logo and fav and menu pages title listing', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-06 22:22:51', '2017-09-06 22:22:51', NULL),
(105, '2017-09-06', 9, 'MAG', 'Working on home slider', '00:00:00', '01:30:00', '01:30:00', NULL, 'Completed', '2017-09-06 22:23:51', '2017-09-07 22:32:57', NULL),
(106, '2017-09-06', 9, 'DJSES', 'Welcome message and history and parishes page implementation', '00:00:00', '02:30:00', '02:30:00', NULL, 'Completed', '2017-09-06 22:24:56', '2017-09-06 22:26:16', NULL),
(107, '2017-09-07', 9, 'DJSES', 'Content update in menu pages', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-06 22:26:03', '2017-09-13 07:14:00', NULL),
(108, '2017-09-07', 2, 'PHP Session', 'Going to take Class for PPT''s.', '00:00:00', '01:00:00', '00:00:00', NULL, 'Completed', '2017-09-06 22:30:19', '2017-09-10 22:34:05', NULL),
(109, '2017-09-07', 5, 'MAG', 'Set the dimension for images to be upload in the photography contest and validate it', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-06 22:31:03', '2017-09-07 07:38:31', NULL),
(110, '2017-09-06', 12, 'YOG', 'Design issues and reviews fixing', '00:00:00', '03:00:00', '03:30:00', NULL, 'In Progress', '2017-09-06 22:29:45', '2017-09-06 22:30:21', NULL),
(111, '2017-09-07', 12, 'YOG', 'Design issues and Reviews fixing', '00:00:00', '05:00:00', '05:00:00', NULL, 'Completed', '2017-09-06 22:31:08', '2017-09-07 22:33:53', NULL),
(112, '2017-09-07', 4, 'KRQ', 'Web service on Service Provider', '00:00:00', '00:00:06', '00:00:00', NULL, 'In Progress', '2017-09-06 22:31:21', '2017-09-06 22:31:21', NULL),
(113, '2017-09-07', 12, 'MAG', 'Responsive Design issue fixing', '00:00:00', '03:00:00', '02:00:00', NULL, 'In Progress', '2017-09-06 22:31:58', '2017-09-07 22:34:11', NULL),
(114, '2017-09-07', 6, 'MAG', 'Set the dimension for images to be upload in the photography contest and validate it', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-06 22:34:44', '2017-09-07 07:50:07', NULL),
(115, '2017-09-07', 6, 'MAG', 'Check mail notification and test all the forms in online', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-06 22:35:09', '2017-09-07 07:49:48', NULL),
(116, '2017-09-07', 8, 'TSW (Trade Show)', 'SEO, Site backup, Google Analytics,  Site Speedup', '00:00:00', '06:00:00', '06:00:00', NULL, 'In Progress', '2017-09-06 22:35:24', '2017-09-07 23:06:55', NULL),
(117, '2017-09-07', 8, 'TSW (Trade Show)', 'Woocommerce product issue fixing', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-06 22:36:04', '2017-09-13 22:43:39', NULL),
(118, '2017-09-07', 14, 'XAB', 'Footer Issue Fixing', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-07 03:45:36', '2017-09-07 03:45:36', NULL),
(119, '2017-09-08', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-07 22:26:06', '2017-09-10 22:21:31', NULL),
(120, '2017-09-08', 5, 'MAG', 'Test all the forms and mail notification in online', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-07 22:29:02', '2017-09-10 22:26:47', NULL),
(121, '2017-09-08', 10, 'Red Kuiper', 'Zaak Pay Payment Implementation', '00:00:00', '04:00:00', '04:00:00', NULL, 'Not Completed', '2017-09-07 22:30:08', '2017-09-10 22:21:57', NULL),
(122, '2017-09-08', 6, 'MAG', 'Test all the forms and mail notification in online', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-07 22:32:09', '2017-09-10 22:28:54', NULL),
(123, '2017-09-08', 3, 'IGM', 'Source installation and verification of completed features and reviews', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-07 22:33:01', '2017-09-07 22:33:01', NULL),
(124, '2017-09-07', 9, 'MEL', 'Review Changes', '00:00:00', '01:30:00', '01:30:00', NULL, 'In Progress', '2017-09-07 22:30:45', '2017-09-07 22:30:45', NULL),
(125, '2017-09-08', 3, 'KRQ', 'SMS implementation using MSG91', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-07 22:34:16', '2017-09-07 22:34:16', NULL),
(126, '2017-09-08', 3, 'KRQ', 'Webservice Development for Users', '00:00:00', '05:00:00', '00:00:00', NULL, 'In Progress', '2017-09-07 22:34:54', '2017-09-07 22:34:54', NULL),
(127, '2017-09-07', 12, 'MEL', 'PDF page design', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-07 22:35:38', '2017-09-07 22:35:38', NULL),
(128, '2017-09-07', 3, 'FAG', 'Fixing the issue in the artist gallery page and view page slider', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-07 22:36:05', '2017-09-07 22:36:05', NULL),
(129, '2017-09-08', 9, 'MEL', 'Working on client review', '00:00:00', '01:00:00', '01:30:00', NULL, 'In Progress', '2017-09-07 22:33:55', '2017-09-07 22:33:55', NULL),
(130, '2017-09-07', 12, 'News Letter', 'Go throw requirements', '00:00:00', '01:00:00', '00:45:00', NULL, 'Completed', '2017-09-07 22:36:48', '2017-09-07 22:36:48', NULL),
(131, '2017-09-08', 2, 'KRQ', 'RRC Review changes.', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-07 22:38:27', '2017-09-11 06:12:01', NULL),
(132, '2017-09-08', 9, 'DJSES', 'Home page changes', '00:00:00', '02:30:00', '03:00:00', NULL, 'Completed', '2017-09-07 22:34:54', '2017-09-13 00:56:14', NULL),
(133, '2017-09-08', 9, 'DJSES', 'Photo Galley and priest page update', '00:00:00', '02:00:00', '02:30:00', NULL, 'Completed', '2017-09-07 22:35:32', '2017-09-13 23:31:18', NULL),
(134, '2017-09-08', 12, 'MAG', 'Responsive Design', '00:00:00', '06:00:00', '08:00:00', NULL, 'In Progress', '2017-09-07 22:39:25', '2017-09-10 22:29:44', NULL),
(135, '2017-09-08', 8, 'TSW (Trade Show)', 'SEO, Site backup, Google Analytics, Site Speedup', '00:00:00', '06:00:00', '06:00:00', NULL, 'Completed', '2017-09-07 23:07:31', '2017-09-12 22:33:05', NULL),
(136, '2017-09-08', 8, 'TSW (Trade Show)', 'Woocommerce product issue fixing', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-07 23:08:06', '2017-09-12 22:32:53', NULL),
(137, '2017-09-08', 14, 'Red Kuiper', 'Payment Gateway Integration', '00:00:00', '04:00:00', '05:00:00', NULL, 'Postponed', '2017-09-07 23:12:52', '2017-09-08 06:02:52', NULL),
(138, '2017-09-08', 14, 'Red Kuiper', 'Zaakpay Payment gatway implementation and Resolving Version Issues.', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-08 06:29:27', '2017-09-08 06:29:27', NULL),
(139, '2017-09-08', 5, 'MAG', 'Changes in the dimension for images to be upload in the photography contest and validate it', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-08 06:50:25', '2017-09-08 06:50:25', NULL),
(140, '2017-09-08', 6, 'MAG', 'Changes in the dimension for images to be upload in the photography contest and validate it', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-08 06:53:52', '2017-09-08 06:53:52', NULL),
(141, '2017-09-11', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-10 22:24:41', '2017-09-11 22:24:19', NULL),
(142, '2017-09-11', 2, 'KRQ', 'Review changes in RRC', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-10 22:29:01', '2017-09-11 06:09:56', NULL),
(143, '2017-09-11', 5, 'IGM', 'IGM Source Study', '00:00:00', '05:00:00', '05:00:00', NULL, 'Completed', '2017-09-10 22:29:54', '2017-09-12 08:13:18', NULL),
(144, '2017-09-11', 10, 'Learning', 'Learning Drupal', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:28:47', '2017-09-10 22:32:20', NULL),
(145, '2017-09-11', 12, 'MAG', 'Responsive Design', '00:00:00', '05:00:00', '01:00:00', NULL, 'In Progress', '2017-09-10 22:30:44', '2017-09-11 22:31:04', NULL),
(146, '2017-09-11', 2, 'KRQ', 'Need to work on Webservices.', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-10 22:32:07', '2017-09-11 06:11:48', NULL),
(147, '2017-09-11', 12, 'PE (Professional Education)', 'Class for College students', '00:00:00', '01:30:00', '00:45:00', NULL, 'Completed', '2017-09-10 22:31:10', '2017-09-11 22:31:20', NULL),
(148, '2017-09-11', 6, 'IGM', 'IGM Source Study', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-10 22:33:11', '2017-09-11 22:29:11', NULL),
(149, '2017-09-11', 10, 'IGM', 'IGM Source setup and work', '00:00:00', '04:00:00', '06:00:00', NULL, 'Completed', '2017-09-10 22:31:45', '2017-09-11 22:24:44', NULL),
(150, '2017-09-11', 3, 'KRQ', 'SMS Integration', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:33:25', '2017-09-10 22:33:25', NULL),
(151, '2017-09-11', 3, 'KRQ', 'Webservice for SMS Integration', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:33:49', '2017-09-10 22:33:49', NULL),
(152, '2017-09-11', 3, 'KRQ', 'Webservice for user', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:34:14', '2017-09-10 22:34:14', NULL),
(153, '2017-09-11', 2, 'KRQ', 'Apply S3 functionallity to all the file upload module and Testing it in the online.', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:35:34', '2017-09-10 22:35:34', NULL),
(154, '2017-09-11', 3, 'KRQ', 'Review and Meeting on Webservices', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:34:37', '2017-09-10 22:34:37', NULL),
(155, '2017-09-11', 3, 'LRN', 'Drupal, Batch Script and VB Script Learning', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-10 22:35:04', '2017-09-10 22:35:04', NULL),
(156, '2017-09-11', 9, 'DJSES', 'Priest and home page content update and issue fixing', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-10 22:37:34', '2017-09-13 23:34:10', NULL),
(157, '2017-09-11', 4, 'SMI', 'Check out the new changes and complete them', '00:00:00', '00:00:02', '00:00:00', NULL, 'In Progress', '2017-09-10 22:36:34', '2017-09-10 22:36:34', NULL),
(158, '2017-09-11', 4, 'KRQ', 'complete the pending web services on Service Provider', '00:00:00', '00:00:06', '00:00:00', NULL, 'In Progress', '2017-09-10 22:38:21', '2017-09-10 22:38:21', NULL),
(159, '2017-09-11', 5, 'MAG', 'Apply changes in the about content and tournament details in football contest', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-10 22:56:05', '2017-09-11 08:21:26', NULL),
(160, '2017-09-11', 5, 'MAG', 'Done changes in the mail notification in inter school football contest', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-10 22:56:23', '2017-09-11 08:20:52', NULL),
(161, '2017-09-11', 6, 'WLM', 'William work', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-10 22:57:03', '2017-09-11 22:30:13', NULL),
(162, '2017-09-11', 6, 'MAG', 'Send email to the user and changes in the backend', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-10 22:57:20', '2017-09-11 22:29:45', NULL),
(163, '2017-09-11', 9, 'tradeshowturnaround', 'Working on Backup plugin', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-11 03:12:13', '2017-09-13 00:55:58', NULL),
(164, '2017-09-11', 9, 'Tradeshowturnaround', 'Working on Google analytical plugin', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-11 03:13:43', '2017-09-11 03:13:43', NULL),
(165, '2017-09-11', 9, 'AUX', 'Review Changes', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-11 03:14:14', '2017-09-11 03:14:14', NULL),
(166, '2017-09-11', 9, 'MAG', 'MAG-Review changes and photo contest update', '00:00:00', '01:30:00', '01:30:00', NULL, 'Completed', '2017-09-11 06:09:19', '2017-09-11 06:09:19', NULL),
(167, '2017-09-11', 9, 'lourdeschurchyelagiri', 'Error Fixing', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-11 06:10:20', '2017-09-11 06:10:20', NULL),
(168, '2017-09-12', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:25:10', '2017-09-12 22:17:58', NULL),
(169, '2017-09-12', 10, 'IGM', 'Check the Register Modules and message , Upgrade', '00:00:00', '04:00:00', '03:00:00', NULL, 'Completed', '2017-09-11 22:26:41', '2017-09-12 22:20:17', NULL),
(170, '2017-09-12', 2, 'KRQ', 'Webservices.', '00:00:00', '06:00:00', '00:00:00', NULL, 'In Progress', '2017-09-11 22:28:56', '2017-09-11 22:28:56', NULL),
(171, '2017-09-12', 10, 'Tech Talk -Class', 'Tech Talk Class', '00:00:00', '02:00:00', '01:00:00', NULL, 'Completed', '2017-09-11 22:28:09', '2017-09-12 22:18:58', NULL),
(172, '2017-09-12', 2, 'KRQ', 'Implement amazon S3 .', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-11 22:30:01', '2017-09-11 22:30:01', NULL),
(173, '2017-09-12', 5, 'IGM', 'Fix the issues in link,filter membership in index page and view page in profile holders in backoffice dashboard', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-11 22:31:30', '2017-09-12 08:10:12', NULL),
(174, '2017-09-11', 6, 'Tech Talk', 'Tech Talk Session', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:30:58', '2017-09-11 22:30:58', NULL),
(175, '2017-09-12', 9, 'DJSES', 'Priest and home page content update and issue fixing', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:29:51', '2017-09-13 00:56:07', NULL),
(176, '2017-09-11', 12, 'MEL', 'Design issues and Reviews fixing', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-11 22:32:27', '2017-09-11 22:32:27', NULL),
(177, '2017-09-12', 9, 'MEL', 'Amazon Review Listing', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-11 22:30:16', '2017-09-11 22:30:16', NULL),
(178, '2017-09-11', 12, 'YOG', 'Design issues fixing', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-11 22:32:56', '2017-09-11 22:32:56', NULL),
(179, '2017-09-12', 5, 'Class', 'Web service Class', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-11 22:34:59', '2017-09-12 08:12:23', NULL),
(180, '2017-09-12', 9, 'MAG', 'Order Display Winners List', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-11 22:30:59', '2017-09-11 23:01:53', NULL),
(181, '2017-09-14', 12, 'MAG', 'Responsive issues fixing', '00:00:00', '00:00:00', '00:00:00', NULL, 'In Progress', '2017-09-11 22:33:26', '2017-09-13 22:40:33', NULL),
(182, '2017-09-12', 6, 'WLM', 'Include the sub-categories in the model', '00:00:00', '02:00:00', '02:00:00', NULL, 'Not Completed', '2017-09-11 22:34:27', '2017-09-12 22:22:05', NULL),
(183, '2017-09-12', 9, 'DJSES', 'Photo Gallery update', '00:00:00', '01:30:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:31:43', '2017-09-12 07:47:21', NULL),
(184, '2017-09-12', 6, 'WLM', 'William work', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:35:04', '2017-09-12 22:21:09', NULL),
(185, '2017-09-12', 12, 'DBA', 'Reviews fixing', '00:00:00', '02:00:00', '01:30:00', NULL, 'Completed', '2017-09-11 22:34:23', '2017-09-12 22:27:25', NULL),
(186, '2017-09-12', 5, 'IGM', 'Fix the issues in link and view page in ad-owners in backoffice dashboard', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:36:17', '2017-09-12 08:11:19', NULL),
(187, '2017-09-12', 6, 'WLM', 'Apply scroll bar for table in the daily tracking module', '00:00:00', '02:00:00', '02:00:00', NULL, 'Not Completed', '2017-09-11 22:35:30', '2017-09-12 22:21:52', NULL),
(188, '2017-09-12', 5, 'IGM', 'Fix the issues in link and view page in success stories and feedbacks in backoffice dashboard', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:37:12', '2017-09-12 08:10:48', NULL),
(189, '2017-09-12', 4, 'KRQ', 'Web service support for the mobile team', '00:00:00', '07:00:00', '00:00:00', NULL, 'In Progress', '2017-09-11 22:35:35', '2017-09-11 22:35:35', NULL),
(190, '2017-09-12', 6, 'IGM', 'IGM Source go through and functionalty', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:36:54', '2017-09-12 22:21:23', NULL),
(191, '2017-09-12', 9, 'speed optimization', 'Increase site load speed', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-11 22:45:48', '2017-09-12 07:47:25', NULL),
(192, '2017-09-13', 2, 'KRQ', 'Worked on Webservices customer list.', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-11 22:50:58', '2017-09-13 08:04:24', NULL),
(193, '2017-09-13', 2, 'KRQ', 'Review changes in service provider and address, worked on webservices.', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-11 22:52:40', '2017-09-13 08:04:14', NULL),
(194, '2017-09-13', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-12 22:20:53', '2017-09-13 22:24:25', NULL),
(195, '2017-09-13', 6, 'WLM', 'William work', '00:00:00', '02:00:00', '02:30:00', NULL, 'Completed', '2017-09-12 22:22:43', '2017-09-13 06:03:15', NULL),
(196, '2017-09-13', 10, 'IGM', 'Issue Fixing in Edit Profile', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-12 22:22:34', '2017-09-13 22:26:07', NULL),
(197, '2017-09-13', 6, 'IGM', 'IGM Source go through in Interest module in frontend and backend', '00:00:00', '02:30:00', '02:30:00', NULL, 'Completed', '2017-09-12 22:23:43', '2017-09-13 06:07:05', NULL),
(198, '2017-09-13', 6, 'IGM', 'IGM Source go through in Tell Us Your Story module in frontend and backend', '00:00:00', '02:30:00', '02:30:00', NULL, 'Not Completed', '2017-09-12 22:24:11', '2017-09-13 07:46:11', NULL),
(199, '2017-09-13', 6, 'WLM', 'Include the sub-categories in the model', '00:00:00', '01:30:00', '01:30:00', NULL, 'In Progress', '2017-09-12 22:24:51', '2017-09-13 06:08:21', '2017-09-13 06:08:21'),
(200, '2017-09-13', 6, 'IAM', 'Web service Document preparation', '00:00:00', '00:30:00', '00:30:00', NULL, 'Completed', '2017-09-12 22:26:42', '2017-09-13 06:01:47', NULL),
(201, '2017-09-12', 12, 'ANI', 'Client Reviews fixing', '00:00:00', '04:00:00', '04:30:00', NULL, 'In Progress', '2017-09-12 22:28:12', '2017-09-12 22:28:12', NULL),
(202, '2017-09-12', 12, 'MEL', 'Design issues fixing', '00:00:00', '02:00:00', '02:30:00', NULL, 'Completed', '2017-09-12 22:29:03', '2017-09-12 22:29:03', NULL),
(203, '2017-09-14', 5, 'IGM', 'Defaults in both frontend and backoffice', '00:00:00', '01:00:00', '01:00:00', NULL, 'In Progress', '2017-09-12 22:31:02', '2017-09-14 07:22:31', NULL),
(204, '2017-09-13', 5, 'IGM', 'Worked on user requests in both frontend and backoffice', '00:00:00', '03:00:00', '03:00:00', NULL, 'In Progress', '2017-09-12 22:32:05', '2017-09-13 07:42:09', NULL),
(205, '2017-09-13', 12, 'ANI', 'Client Reviews fixing', '00:00:00', '04:00:00', '06:00:00', NULL, 'Completed', '2017-09-12 22:30:24', '2017-09-13 22:39:53', NULL),
(206, '2017-09-13', 12, 'PE (Professional Education)', 'Class for College students', '00:00:00', '01:30:00', '01:10:00', NULL, 'Completed', '2017-09-12 22:31:10', '2017-09-13 22:39:19', NULL),
(207, '2017-09-13', 12, 'CMA', 'Form Design', '00:00:00', '03:00:00', '00:00:00', NULL, 'Pending', '2017-09-12 22:31:39', '2017-09-13 22:40:14', NULL),
(208, '2017-09-13', 5, 'IGM', 'Worked on user messages in both frontend and backoffice', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-12 22:33:47', '2017-09-13 22:35:59', NULL),
(209, '2017-09-13', 4, 'KRQ', 'Web service on customer and service provider details', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-12 22:32:46', '2017-09-12 22:33:20', NULL),
(210, '2017-09-13', 5, 'IGM', 'Worked on Portal admin and manage featured profile in backoffice', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-12 22:35:04', '2017-09-13 22:36:12', NULL),
(211, '2017-09-13', 4, 'KRQ', 'Web service on review details', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-12 22:33:38', '2017-09-12 22:33:38', NULL),
(212, '2017-09-13', 8, 'OPU, DJS', 'Review changes', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-12 22:34:03', '2017-09-13 22:43:27', NULL),
(213, '2017-09-13', 4, 'SMI', 'support SMI changes if  any', '00:00:00', '01:00:00', '00:00:00', NULL, 'Completed', '2017-09-12 22:34:35', '2017-09-13 22:35:33', NULL),
(214, '2017-09-13', 8, 'AUX, DKM', 'Sites speed up, Security', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-12 22:34:53', '2017-09-13 22:43:14', NULL),
(215, '2017-09-13', 15, 'IGM', 'Setup, Go through my modules, list (User rights, Ad)', '00:00:00', '05:00:00', '00:00:00', NULL, 'In Progress', '2017-09-12 22:58:20', '2017-09-12 22:58:57', NULL),
(216, '2017-09-13', 15, 'CMA', 'Implement Reviews/Fixes', '00:00:00', '03:00:00', '00:00:00', NULL, 'Completed', '2017-09-12 22:58:36', '2017-09-13 23:43:47', NULL),
(217, '2017-09-11', 9, 'ACG', 'Fix footer email update', '00:00:00', '01:00:00', '00:00:00', NULL, 'Completed', '2017-09-12 23:03:29', '2017-09-13 23:31:29', NULL),
(218, '2017-09-13', 12, 'ANI', 'Setup English Site in hosting, Register captcha & Use it - 1\r\nConfigure & Move all lang sites to Live - 1', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-12 23:15:47', '2017-09-13 22:39:34', NULL),
(219, '2017-09-15', 12, 'ANI', '1. Check all forms emails going or not\r\n2. SEO related stuff either hard code or use simple plugin', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-13 00:28:04', '2017-09-14 22:29:18', NULL),
(220, '2017-09-13', 9, 'MEL-Review page changes', 'Amazon Review issue fixing', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-13 01:00:50', '2017-09-13 01:02:38', NULL),
(221, '2017-09-13', 9, 'IVDP', 'Content update', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 01:04:38', '2017-09-13 23:31:47', NULL),
(222, '2017-09-13', 9, 'DJSES', 'Pages update', '00:00:00', '02:00:00', '02:30:00', NULL, 'Pending', '2017-09-13 01:05:19', '2017-09-13 07:13:52', NULL),
(223, '2017-09-14', 8, 'XAB', 'Optimize the speed for this site, http://xavierboard.org/\r\nInstall security plugins', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 03:15:20', '2017-09-14 22:36:03', NULL),
(224, '2017-09-14', 15, 'IGM', 'Study how to upgrade yii2 latest source to IGM current source\r\nUpgrade the source as well', '00:00:00', '05:00:00', '00:00:00', NULL, 'In Progress', '2017-09-13 03:19:22', '2017-09-13 23:44:08', NULL),
(225, '2017-09-13', 9, 'MEL', 'Testing and issue fixing read sample', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-13 04:52:37', '2017-09-13 07:13:40', NULL),
(226, '2017-09-13', 9, 'AUX,DKM', 'Site Load Faster', '00:00:00', '01:30:00', '01:30:00', NULL, 'Completed', '2017-09-13 05:11:38', '2017-09-13 05:11:38', NULL),
(227, '2017-09-14', 2, 'KRQ', 'Code Organizing, Comment, Unwanted files clean up', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 08:07:15', '2017-09-14 22:32:24', NULL),
(228, '2017-09-14', 2, 'KRQ', 'Update SRS as per the functions done', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 08:07:45', '2017-09-14 22:32:31', NULL),
(229, '2017-09-13', 10, 'Tech Talk Class', 'Tech Talk Class , Codeigniter view, delete', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:25:46', '2017-09-13 22:25:46', NULL),
(230, '2017-09-14', 6, 'WLM', 'William work', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:27:24', '2017-09-14 23:19:31', NULL),
(231, '2017-09-14', 6, 'MER', 'Fix the issues in my profile page', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:27:54', '2017-09-14 22:26:22', NULL),
(232, '2017-09-13', 10, 'KRQ', 'Go through the webservice (mobileVerification and Login)', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:27:49', '2017-09-13 22:28:47', NULL),
(233, '2017-09-14', 5, 'IGM', 'User requests module in both frontend and backoffice', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-13 22:30:24', '2017-09-14 07:22:50', NULL),
(234, '2017-09-14', 6, 'Tech Talk', 'Tech talk class', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:30:11', '2017-09-14 22:24:32', NULL),
(235, '2017-09-14', 6, 'DBA', 'Document preparation', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:30:32', '2017-09-14 22:25:31', NULL),
(236, '2017-09-14', 5, 'DBA', 'Prepared use case description for both fronend and backend', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-13 22:33:09', '2017-09-14 07:22:06', NULL),
(237, '2017-09-14', 10, 'KRQ', 'Go through the weservice for  Register ,  GetPrerequisites , ResendOTP ,mobileOTPVerification', '00:00:00', '06:00:00', '06:00:00', NULL, 'Completed', '2017-09-13 22:32:40', '2017-09-14 22:28:01', NULL),
(238, '2017-09-14', 4, 'SMI', 'Knowledge Transfer to Vijay Felix', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-13 22:33:36', '2017-09-13 22:33:36', NULL),
(239, '2017-09-14', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:33:28', '2017-09-14 07:45:46', NULL),
(240, '2017-09-14', 4, 'KRQ', 'Fix the issues of the Web services given  by Mobile Team', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-13 22:34:20', '2017-09-13 22:35:27', NULL),
(241, '2017-09-14', 4, 'KRQ', 'Web services changes on User, Service Provider and Reviews', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-13 22:34:55', '2017-09-13 22:35:16', NULL),
(242, '2017-09-14', 9, 'DJSES', 'Design home page and customize the section', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-13 22:33:40', '2017-09-13 22:33:40', NULL),
(243, '2017-09-14', 9, 'AUX,XAB,MAD', 'Working on Site load faster', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:34:13', '2017-09-14 00:35:38', NULL),
(244, '2017-09-14', 2, 'KRQ', 'Amazon s3 Integration in all the modules with file upload.', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-13 22:37:02', '2017-09-13 22:37:22', NULL),
(245, '2017-09-14', 12, 'ANI', 'All language site config', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-13 22:41:21', '2017-09-14 22:28:50', NULL),
(246, '2017-09-14', 12, 'ANI', 'Client Reviews and Issue fixing', '00:00:00', '03:00:00', '02:00:00', NULL, 'In Progress', '2017-09-13 22:41:56', '2017-09-14 22:28:37', NULL),
(247, '2017-09-14', 8, 'OFP', 'Caching issue fixing', '00:00:00', '04:00:00', '04:00:00', NULL, 'Completed', '2017-09-13 22:44:24', '2017-09-14 22:35:51', NULL),
(248, '2017-09-14', 8, 'DJS', 'Site implementation', '00:00:00', '02:00:00', '02:00:00', NULL, 'Completed', '2017-09-13 22:45:03', '2017-09-14 22:35:39', NULL),
(249, '2017-09-14', 9, 'AUX', 'Issue fixing', '00:00:00', '01:00:00', '01:00:00', NULL, 'Completed', '2017-09-13 23:31:03', '2017-09-14 00:35:25', NULL),
(250, '2017-09-14', 15, 'CMA', 'Client call support', '00:00:00', '03:00:00', '03:00:00', NULL, 'In Progress', '2017-09-13 23:40:49', '2017-09-13 23:40:49', NULL),
(251, '2017-09-15', 5, 'IGM', 'Defaults in both frontend and backoffice', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:27:45', '2017-09-14 22:27:45', NULL),
(252, '2017-09-15', 5, 'IGM', 'Users Feedback module in both frontend and backend', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:28:37', '2017-09-14 22:28:37', NULL),
(253, '2017-09-15', 6, 'WLM', 'William work', '00:00:00', '02:00:00', '02:00:00', NULL, 'In Progress', '2017-09-14 22:26:54', '2017-09-14 22:26:54', NULL),
(254, '2017-09-15', 6, 'IGM', 'IGM Source go through in Tell Us Your Story module in frontend and backend', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:27:59', '2017-09-14 22:27:59', NULL),
(255, '2017-09-15', 6, 'DBA', 'Test alumni for all pages', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:29:08', '2017-09-14 22:30:11', NULL),
(256, '2017-09-15', 4, 'KRQ', 'Complete the pending web services', '00:00:00', '06:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:29:32', '2017-09-14 22:29:32', NULL),
(257, '2017-09-15', 10, 'WLM EMU', 'W3-SP,OP Tracking and checking', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:29:41', '2017-09-14 22:29:41', NULL),
(258, '2017-09-15', 4, 'SMI', 'Support SMI client on changes if any', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:30:04', '2017-09-14 22:30:04', NULL),
(259, '2017-09-14', 12, 'SJS', 'Go throw site, Estimate, and installation', '00:00:00', '03:00:00', '03:00:00', NULL, 'Completed', '2017-09-14 22:30:26', '2017-09-14 22:30:26', NULL),
(260, '2017-09-15', 6, 'WLM', 'Apply scroll bar for table in the daily tracking module', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:30:56', '2017-09-14 22:30:56', NULL),
(261, '2017-09-15', 4, 'SMI', 'Knowledge transfer of SMI', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:30:41', '2017-09-14 22:30:41', NULL),
(262, '2017-09-15', 12, 'PE (Professional Education)', 'Class for college students', '00:00:00', '01:20:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:31:32', '2017-09-14 22:31:32', NULL),
(263, '2017-09-15', 2, 'KRQ', 'Webservice Review changes.', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:33:02', '2017-09-14 22:33:02', NULL),
(264, '2017-09-15', 2, 'KRQ', 'Review changes in RRC.', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:33:23', '2017-09-14 22:33:23', NULL),
(265, '2017-09-15', 12, 'ANI', 'Client Reviews fixing', '00:00:00', '05:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:32:07', '2017-09-14 22:32:07', NULL),
(266, '2017-09-15', 2, 'KRQ', 'Amazon S3 Integration.', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:33:52', '2017-09-14 22:33:52', NULL),
(267, '2017-09-15', 5, 'IGM', 'Homepage Strip and Slideshow module in both frontend and backend', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:34:52', '2017-09-14 22:34:52', NULL),
(268, '2017-09-15', 10, 'KRQ', 'Go through the we-service for get Categories, getCategoryServices, getServiceProviders,getSPCategoryServices ,getCms,send-feedback ,getServiceImages,spLogin,spRegister', '00:00:00', '05:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:34:19', '2017-09-14 22:36:20', NULL),
(269, '2017-09-15', 3, 'KRQ', 'Changes in the webservice', '00:00:00', '03:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:35:04', '2017-09-14 22:35:04', NULL),
(270, '2017-09-15', 15, 'WSM', 'Install Job Board and give demo', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:35:07', '2017-09-14 22:35:07', NULL),
(271, '2017-09-15', 3, 'KRQ', 'Source Deployment in the Heroku server', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:35:37', '2017-09-14 22:35:37', NULL),
(272, '2017-09-15', 3, 'IGM', 'Give demo & discussion IGM modules, source', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:35:44', '2017-09-14 22:35:44', NULL),
(273, '2017-09-15', 15, 'IGM', 'Give demo & discussion IGM modules, source', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:35:55', '2017-09-14 22:35:55', NULL),
(274, '2017-09-15', 3, 'KRQ', 'Webservice functionality and code review', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:36:15', '2017-09-14 22:36:15', NULL),
(275, '2017-09-15', 10, 'WLM EMU', 'Graph for OP', '00:00:00', '01:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:36:01', '2017-09-14 22:36:01', NULL);
INSERT INTO `dailytimelog` (`id`, `schedule_on`, `user_id`, `project_name`, `task`, `billable_hrs`, `scheduled_hrs`, `hrs_spent`, `remarks`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(276, '2017-09-15', 8, 'DJS', 'Client Reviews', '00:00:00', '04:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:36:36', '2017-09-14 22:36:36', NULL),
(277, '2017-09-15', 3, 'LRN', 'Drupal, Batch Script and VB Script learning', '00:00:00', '02:00:00', '00:00:00', NULL, 'In Progress', '2017-09-14 22:37:24', '2017-09-14 22:37:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_09_03_064806_alter_users_table_insert_values', 2),
(8, '2017_09_03_065531_create_dailytimelog_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role` enum('Administrator','User') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `user_role`, `deleted_at`) VALUES
(1, 'Loganathan N', 'logudotcom@gmail.com', '$2y$10$L4S/sBH/bGDibgN8GuKcguSMZH1p1j3SdEt0p3REHB1dUAJ6QOVe6', 'E1aD5s8fJtTzGfbL80nGhWawnR4zAvYy2xdU6kEgF99D3MN7ymfzkSVVtqav', '2017-09-03 01:34:39', '2017-09-12 23:02:09', 'Administrator', NULL),
(2, 'Vijay Felix', 'vijayfelixraj@gmail.com', '$2y$10$6nder.evHfSFEI5H9.bpLOSgxxRabFFXMSwUVi8bAVHurQmyx/8XK', 'ylQTmy4pR1CkpfpP8YgdQWX1aDxf4Ga206OmOy3MLh9MQtfm3SavMlfg5AQ3', '2017-09-03 08:38:33', '2017-09-06 03:10:03', 'User', NULL),
(3, 'Joseph', 'joseph@boscosofttech.com', '$2y$10$zisCkrx5zGB9fPiv5WYBXezF/7M5KOYlvaFci4m69Q0Ko/wf5FYXG', 'S8ZDyswvMEpqjehJlTvEFtjPk26PZ814VMm40hiiHVFTf8xl7UFk82p8iZNl', '2017-09-03 23:53:11', '2017-09-03 23:53:11', 'User', NULL),
(4, 'Joan Britto', 'joan@gmail.com', '$2y$10$Xz/TgrGwf4QvXlr9NwuA7Owf08s1T.1di45TsmzleAE9cX5gurrhW', NULL, '2017-09-03 23:53:43', '2017-09-03 23:53:43', 'User', NULL),
(5, 'Vinodha', 'vinodha@gmail.com', '$2y$10$KF.GNJYIpM9ZBLoW1n/EEOTUi1LiUoL457vZjJrPtPxJY2B7TSWIq', 'q2YMeObAgnVvfh8rckm5maeEweEtViXirvXy7oH8LrwKWxWVUKap1fdReqs5', '2017-09-03 23:54:10', '2017-09-04 22:50:19', 'User', NULL),
(6, 'Cyril', 'cyril@gmail.com', '$2y$10$F7XoeD9dwmvZ08BFLQQWFuHdHo.kvR7XmrnEE/1doKgGaL.j.Stl2', '6jpg0i6fVVpwXJGS7lUkmJzlJaII6SMctGhSbt5ngr1IkiHgQy9ji21qlT8C', '2017-09-03 23:54:24', '2017-09-06 23:25:28', 'User', NULL),
(7, 'Anto Merlin', 'anto@gmail.com', '$2y$10$3SNHC/aM9p66xhZN36NLQuzq2Nksx35VZAqwgJBDfHBIxRdf2bW4G', 'JrL7jcnIQAlcjLHsgHIQ6DSIBVGUjjE6iOVyep05eAo2WiBaGwNFyQtIJtMp', '2017-09-03 23:54:36', '2017-09-04 06:50:04', 'User', NULL),
(8, 'Kishore R', 'kishorer@gmail.com', '$2y$10$C1UMep6Pdf62ib44qej3MOQo/I7RQR7j81I2wWrbUqTTIVchtMyOy', 'vEd5rpaCkucyAy94z17AW8qVqOMpYcyZLxDakM3n7esvDxvlNNUlXQXQ4CDb', '2017-09-03 23:54:55', '2017-09-03 23:54:55', 'User', NULL),
(9, 'Kulandai Yesu', 'kyesu@gmail.com', '$2y$10$yVoXhRBs3zixkK0ATLsbxeL6r9kReqm79.IXdTTXjX1JXrJP3BLrS', 'jtaCPcW7Arq4v1BfXzPhUp8ccJJgS3cqNurCz7XAxWGXVKhpNbmS7kvioHWE', '2017-09-03 23:55:15', '2017-09-03 23:55:15', 'User', NULL),
(10, 'Honest Raj', 'honest@gmail.com', '$2y$10$m00eyLnJBJrq0rQCH8lmn.LFHmlswJaNMOdAvUJwLM6Vq2iIrX0wa', 'bWF2gysp0SqDl9Qq7C9YULJt6Ax06b2NflCj7tnOmRs7bVfJsNnrHwa5y0lr', '2017-09-03 23:55:28', '2017-09-03 23:55:28', 'User', NULL),
(11, 'Infant Jerome', 'infant@gmail.com', '$2y$10$eIkOblIXotqTq95zsAsCmepEONUQnwmECx/0H5ny/2RvUktxLRhYG', 'hU9WYmF1PqP2sLBAzyzk577vDfkF8GUbVfrRQWFwTLDbFg4HxIabWEuRMUFX', '2017-09-03 23:56:09', '2017-09-08 18:40:37', 'User', NULL),
(12, 'Vijay Aaron', 'vijay@gmail.com', '$2y$10$n5.Ns28I0GdLGggEmeZjUeuhp2S7Pm1p0alvJlapMl9nWL1ucacDS', 'cH5giHfWVwnKdfgMyVTK86pKF68NAcQ838mk7BTAZaVD2675ReuB7bVcCghj', '2017-09-04 23:43:22', '2017-09-05 00:00:48', 'User', NULL),
(14, 'Arul Dass', 'aruldass.shc@gmail.com', '$2y$10$kpf.1T8IZw0J6ntbSxkKduNeVWRekVQhCYxm4FeUa6wcgzMPD.pAK', NULL, '2017-09-05 01:16:31', '2017-09-05 01:16:31', 'User', NULL),
(15, 'Pradeep', 'pradbics@gmail.com', '$2y$10$DAbcN/MJ7ccUOUo4fyxxqOJkUPGKIMCrRfnETVq9z5GB4EGu1lVXy', 'OrQAKT4rTmWeQ1U1x6XnXPngilkflS4NxrDh89EXyOFFu62ku1mrWSehfOod', '2017-09-10 23:45:47', '2017-09-13 00:54:06', 'User', NULL),
(16, 'Infant Kishore', 'infantkishore@gmail.com', '$2y$10$HQLj3OO6jdMu.XWz0Eb0jOABbZgW2KDOPabANyveDhQGSn3FmXonG', 'jGJN5hbBcw5dHWubXKk1fEIT5IlchOgc8GA809v4xRWNZwykIYM5mJNmh9vt', '2017-09-10 23:46:12', '2017-09-10 23:46:12', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailytimelog`
--
ALTER TABLE `dailytimelog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dailytimelog_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailytimelog`
--
ALTER TABLE `dailytimelog`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=278;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dailytimelog`
--
ALTER TABLE `dailytimelog`
  ADD CONSTRAINT `dailytimelog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
