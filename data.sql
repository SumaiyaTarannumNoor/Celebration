-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 08:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$sGfeqIKe//zP2lSyt4vsUOWmnK4NzlW.bEW6pwKeJnVazqcya7Zaq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `scheduletime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `event_date` datetime NOT NULL,
  `billing_id` int(11) NOT NULL,
  `productorder_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Sen', 'sreya@gmail.com', '$2y$10$Wx2Hw0shaCo/zf/5WXAS4.gf35YRPU7.G3nVY4eWMgofvcz23x802', 'gKyi1rAfONEmysNREAxG3AfvfPsbcoZVs1mZpWol4UiYDxjsoWIS2XIuBtzX', '2021-04-20 12:38:34', '2021-04-20 12:38:34', NULL),
(2, 'Sreyasi', 'sen@gmail.com', '$2y$10$HHVT3oj/xEbt6BNa0RiqC.rSgtRpNK4iNUBKZgBwC80Pli9tbeHT2', NULL, '2021-04-22 03:26:39', '2021-04-22 03:26:39', NULL),
(3, 'Urmi', 'Urmi@gmail.com', '$2y$10$NzurAA1BuST5HcB4.ux9bOhYv.08zvQcQfS9fseOXNYWJwLtbU0D.', 'hEUuOkdQggBZUHVg6sWO2l9JYNIUwDXUbZZI3AG1bryIvAB5m88KdcfAClTY', '2021-04-22 11:49:23', '2021-04-22 11:49:23', NULL),
(4, 'UrmiSen', 'sen@hotmail.com', '$2y$10$I8gj/Ef2EBoa5XevCwjLgeKdLMXgsMJCb3bNwmCAPXiio6P7ru5Ti', NULL, '2021-05-08 10:55:18', '2021-05-08 10:55:18', NULL),
(5, 'Sumaiya', 'sumaiya@gmail.com', '$2y$10$e0AIRYPwOuM0oIt4AprQq.rV2YkvtM4yOdEYOldos6QcOrEVmjhWC', NULL, '2021-05-08 10:57:01', '2021-05-08 10:57:01', NULL),
(6, 'Reajul Islam', 'reajulbd786@gmail.com', 'eyJpdiI6IjlmU1JXcm95ZEhkVkx6OXdPay93dFE9PSIsInZhbHVlIjoiUjVVQlNXSDhPYlNXRkx5R0NXd0ZWZz09IiwibWFjIjoiYmE2MThlZjBjZGE3N2I3MWIxZTA3MzUwNGM2ZGQwNzAxMDVhYzVhZDI0YjFkYjRkMmFlZDBhMzc1ZGIxZWIyMCJ9', NULL, '2021-07-12 01:44:27', '2021-07-12 01:44:27', NULL),
(7, 'Sreyasi Sen 1610092642', 'sreyasi.sen@northsouth.edu', 'eyJpdiI6Im1zSjNDMkFWNGFFQlZEQ09OVUNhQnc9PSIsInZhbHVlIjoiZGZmTXdpNWxDSUlmWjZSRFgrZkg4QT09IiwibWFjIjoiZDdjZTIyYjkwNmFlN2UwZDIxZjBlNDk4NDI5NmU3YjI3YTFkOGQ5MTM0ZDE0MWQyYmQ2Mzk2OGYyZTEzYWM3YSJ9', NULL, '2021-07-12 01:50:23', '2021-07-12 01:50:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `event_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `amount`, `event_type`) VALUES
(1, 'Biya', 100, 'Wedding'),
(2, 'Shadi', 500, 'Wedding'),
(3, 'School Picnic', 200, 'Picnic'),
(4, 'Biyar Onushthan', 2000, 'Wedding');

-- --------------------------------------------------------

--
-- Table structure for table `event_services`
--

CREATE TABLE `event_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `event_id` bigint(20) DEFAULT NULL,
  `service_id` bigint(20) NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricerange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_services`
--

INSERT INTO `event_services` (`id`, `customer_id`, `event_id`, `service_id`, `service_name`, `capacity`, `pricerange`) VALUES
(4, 3, 3, 3, 'Catering', '500-1000', '30k-50k'),
(5, 3, 3, 2, 'Wedding Lights', '100-200', '5k'),
(6, 3, 3, 3, 'Catering', '500-1000', '30k-50k'),
(7, 3, 3, 2, 'Wedding Lights', '100-200', '5k'),
(8, 3, 4, 3, 'Catering', '500-1000', '30k-50k'),
(9, 3, 4, 1, 'Ball Room', '20-50', '10k-30k'),
(10, 3, NULL, 2, 'Wedding Lights', '100-200', '5k');

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
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `scheduleddate` date NOT NULL,
  `scheduledtime` time NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `customer_id`, `provider_id`, `scheduleddate`, `scheduledtime`, `description`, `status`) VALUES
(1, 3, 1, '2021-05-01', '06:00:00', 'Birthday Party', 'Approved'),
(2, 3, 3, '2021-05-05', '17:00:00', 'Wedding', 'Approved'),
(3, 3, 4, '2021-05-02', '16:08:00', 'event for experiment', 'Approved'),
(4, 3, 3, '2021-08-12', '03:15:00', 'Biya', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recipent_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `meeting_id` bigint(20) UNSIGNED NOT NULL,
  `messagebody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `recipent_id`, `sender_id`, `meeting_id`, `messagebody`, `sender`) VALUES
(1, 3, 1, 1, 'Hi', 'customer'),
(2, 3, 1, 1, 'Hello', 'customer'),
(3, 3, 1, 1, 'I am provider', 'provider'),
(4, 3, 1, 1, 'I am Customer', 'customer'),
(5, 3, 1, 1, 'Tadaaa', 'customer'),
(6, 3, 3, 2, 'Hello', 'provider'),
(7, 3, 3, 2, 'hi', 'provider'),
(8, 3, 3, 2, 'hh', 'provider'),
(9, 3, 3, 2, 'hi', 'provider'),
(10, 3, 3, 2, 'h', 'provider'),
(11, 3, 3, 2, 'test', 'customer'),
(12, 3, 3, 2, 'hkj', 'customer'),
(13, 3, 3, 2, 'uuu', 'customer'),
(14, 3, 3, 2, 'Hello', 'provider'),
(15, 3, 3, 2, 'hi', 'provider'),
(16, 3, 3, 2, 'kk', 'provider'),
(17, 3, 3, 2, 'Koi', 'customer'),
(18, 3, 1, 1, 'helo', 'customer'),
(19, 3, 3, 4, 'First Message', 'provider'),
(20, 3, 3, 4, 'First Message', 'provider'),
(21, 3, 3, 4, 'First Message', 'provider'),
(22, 3, 3, 4, 'first', 'provider'),
(23, 3, 3, 4, 'first', 'provider'),
(24, 3, 3, 4, 'first', 'provider'),
(25, 3, 3, 4, 'first', 'provider'),
(26, 3, 3, 4, 'first', 'provider'),
(27, 3, 3, 4, 'first', 'provider'),
(28, 3, 3, 4, 'first', 'provider'),
(29, 3, 3, 4, 'first', 'provider'),
(30, 3, 3, 4, 'first', 'provider'),
(31, 3, 3, 4, 'first', 'provider'),
(32, 3, 3, 4, 'first', 'provider'),
(33, 3, 3, 4, 'first', 'provider'),
(34, 3, 3, 4, 'first', 'provider'),
(35, 3, 3, 4, 'first', 'provider'),
(36, 3, 3, 4, 'first', 'provider'),
(37, 3, 3, 4, 'first', 'provider'),
(38, 3, 3, 4, 'first', 'provider'),
(39, 3, 3, 4, 'first', 'provider'),
(40, 3, 3, 4, 'first', 'provider'),
(41, 3, 3, 4, 'first', 'provider'),
(42, 3, 3, 4, 'first', 'provider'),
(43, 3, 3, 4, 'first', 'provider'),
(44, 3, 3, 4, 'first', 'provider'),
(45, 3, 3, 4, 'first', 'provider'),
(46, 3, 3, 4, 'first', 'provider'),
(47, 3, 3, 4, 'first', 'provider'),
(48, 3, 3, 4, 'first', 'provider'),
(49, 3, 3, 4, 'first', 'provider'),
(50, 3, 3, 4, 'first', 'provider'),
(51, 3, 3, 4, 'first', 'provider'),
(52, 3, 3, 4, 'first', 'provider'),
(53, 3, 3, 4, 'first', 'provider'),
(54, 3, 3, 4, 'first', 'provider'),
(55, 3, 3, 4, 'first', 'provider'),
(56, 3, 3, 4, 'first', 'provider'),
(57, 3, 3, 4, 'first', 'provider'),
(58, 3, 3, 4, 'first', 'provider'),
(59, 3, 3, 4, 'first', 'provider'),
(60, 3, 3, 4, 'first', 'provider'),
(61, 3, 3, 4, 'first', 'provider'),
(62, 3, 3, 4, 'first', 'provider'),
(63, 3, 3, 4, 'first', 'provider'),
(64, 3, 3, 4, 'first', 'provider'),
(65, 3, 3, 4, 'first', 'provider'),
(66, 3, 3, 4, 'first', 'provider'),
(67, 3, 3, 4, 'first', 'provider'),
(68, 3, 3, 4, 'first', 'provider'),
(69, 3, 3, 4, 'first', 'provider'),
(70, 3, 3, 4, 'first', 'provider'),
(71, 3, 3, 4, 'first', 'provider'),
(72, 3, 3, 2, 'hii', 'provider'),
(73, 3, 3, 2, 'hii', 'provider'),
(74, 3, 3, 2, 'hii', 'provider'),
(75, 3, 3, 2, 'hii', 'provider'),
(76, 3, 3, 2, 'Helo', 'customer'),
(77, 3, 3, 2, 'ss', 'customer'),
(78, 3, 3, 2, 'Hello', 'provider'),
(79, 3, 3, 2, 'Hello', 'provider'),
(80, 3, 3, 2, 'Hello', 'provider'),
(81, 3, 3, 2, 'Hello', 'provider'),
(82, 3, 3, 2, 'Hello', 'provider'),
(83, 3, 3, 2, 'Hello', 'provider'),
(84, 3, 3, 2, 'Hello', 'provider'),
(85, 3, 3, 2, 'Hello', 'provider'),
(86, 3, 3, 2, 'Hello', 'provider'),
(87, 3, 3, 2, 'Hello', 'provider'),
(88, 3, 3, 2, 'Hello', 'provider'),
(89, 3, 3, 2, 'Hello', 'provider'),
(90, 3, 3, 2, 'Hello', 'provider'),
(91, 3, 3, 2, 'Hello', 'provider'),
(92, 3, 3, 2, 'Hello', 'provider'),
(93, 3, 3, 2, 'Hello', 'provider'),
(94, 3, 3, 2, 'Hello', 'provider'),
(95, 3, 3, 2, 'Hello', 'provider'),
(96, 3, 3, 2, 'Hello', 'provider'),
(97, 3, 3, 2, 'Hello', 'provider'),
(98, 3, 3, 2, 'Hello', 'provider'),
(99, 3, 3, 2, 'Hello', 'provider'),
(100, 3, 3, 2, 'Hello', 'provider'),
(101, 3, 3, 2, 'Hello', 'provider'),
(102, 3, 3, 2, 'Hello', 'provider'),
(103, 3, 3, 2, 'Hello', 'provider'),
(104, 3, 3, 2, 'Hello', 'provider'),
(105, 3, 3, 2, 'Hello', 'provider'),
(106, 3, 3, 2, 'Hello', 'provider'),
(107, 3, 3, 2, 'Hello', 'provider'),
(108, 3, 3, 2, 'Hello', 'provider'),
(109, 3, 3, 2, 'Hello', 'provider'),
(110, 3, 3, 2, 'Hello', 'provider'),
(111, 3, 3, 2, 'Hello', 'provider'),
(112, 3, 3, 2, 'Hello', 'provider'),
(113, 3, 3, 2, 'Hello', 'provider'),
(114, 3, 3, 2, 'Hello', 'provider'),
(115, 3, 3, 2, 'Hello', 'provider'),
(116, 3, 3, 2, 'Hello', 'provider'),
(117, 3, 3, 2, 'Hello', 'provider'),
(118, 3, 3, 2, 'Hello', 'provider'),
(119, 3, 3, 2, 'Hello', 'provider'),
(120, 3, 3, 2, 'Hello', 'provider'),
(121, 3, 3, 2, 'Hello', 'provider'),
(122, 3, 3, 2, 'Hello', 'provider'),
(123, 3, 3, 2, 'Hello', 'provider'),
(124, 3, 3, 2, 'Hello', 'provider'),
(125, 3, 3, 2, 'Hello', 'provider'),
(126, 3, 3, 2, 'Hello', 'provider'),
(127, 3, 3, 2, 'Hello', 'provider'),
(128, 3, 3, 2, 'Hello', 'provider'),
(129, 3, 3, 2, 'Hello', 'provider'),
(130, 3, 3, 2, 'Hello', 'provider'),
(131, 3, 3, 2, 'hi', 'provider'),
(132, 3, 3, 4, 'hi', 'provider'),
(133, 3, 3, 4, 'hi', 'provider'),
(134, 3, 3, 4, 'hi', 'provider'),
(135, 3, 3, 4, 'hi', 'provider'),
(136, 3, 3, 2, 'Test', 'provider'),
(137, 3, 3, 4, 'test', 'provider'),
(138, 3, 3, 4, 'helo', 'provider'),
(139, 3, 3, 4, 'heii', 'provider'),
(140, 3, 3, 4, 'type', 'provider'),
(141, 3, 3, 4, 'testing', 'provider'),
(142, 3, 3, 2, 'Hello', 'provider'),
(143, 3, 3, 2, 'hii', 'provider'),
(144, 3, 3, 4, 'message', 'provider'),
(145, 3, 3, 4, 'Helo', 'provider'),
(146, 3, 3, 4, 'Test', 'customer'),
(147, 3, 3, 2, 'Test', 'customer');

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
(4, '2021_03_27_110112_create_permission_tables', 1),
(6, '2021_04_09_113824_create_bookings_table', 1),
(8, '2021_04_09_114024_create_appointments_table', 1),
(9, '2021_04_09_114103_create_orders_table', 1),
(10, '2021_04_09_114138_create_productorders_table', 1),
(11, '2021_04_09_114212_create_billings_table', 1),
(13, '2021_04_17_105503_create_providers_table', 2),
(14, '2021_04_17_105525_create_customers_table', 2),
(15, '2021_04_17_105545_create_admins_table', 2),
(16, '2021_04_09_113957_create_events_table', 3),
(17, '2021_04_09_114239_create_services_table', 3),
(18, '2021_04_22_155712_create_reviews_table', 3),
(21, '2021_04_23_170827_create_event_services_table', 4),
(26, '2021_04_24_165058_create_meetings_table', 7),
(29, '2021_03_27_110224_create_products_table', 9),
(30, '2021_05_03_180343_create_product_images_table', 10),
(31, '2021_04_24_191634_create_messages_table', 11),
(32, '2021_07_12_070327_add_google_id_column', 12),
(35, '2021_07_26_181658_create_contacts_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productorders`
--

CREATE TABLE `productorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `provider_id`) VALUES
(16, 'Lighting', 1000, 'dbaf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`) VALUES
(3, 16, '1620296333PicsArt_07-22-06.17.47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kuddus', 'kuddus@gmail.com', '$2y$10$Hw7TfQpjJRIvtmub.YSl5uxnVTbGgzaNdXRsY1Ay8ixM1gYsYcOuu', NULL, NULL, NULL),
(2, 'Jobbar', 'jobbar@gmail.com', '$2y$10$W9BR0/YU4YJWuoH46VZSZOzqEpQ5TEY5yuf8fqIrp49DrcTVxkNsC', NULL, NULL, NULL),
(3, 'Mokhles', 'mokhles@gmail.com', '$2y$10$hAUWkv75YZAhEcdUhh2MMuQwa2.lSS4HoS77sTMCS41WmYjSM0mfm', 'xWIoBKDfjUAV9ciNrbEQkQTFGEBE7AWQhj8hnuWQv8Ar1s7rD1NPb1AP7hjw', NULL, NULL),
(4, 'Muskan', 'muskan@gmail.com', '$2y$10$xgPEIJCmPufMg7wJm1VcGesWk6L6LsXOD9Wzifqfn5EXcYxGHYV6G', NULL, '2021-04-22 12:03:49', '2021-04-22 12:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricerange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `capacity`, `pricerange`) VALUES
(1, 'Ball Room', '20-50', '10k-30k'),
(2, 'Wedding Lights', '100-200', '5k');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sreyasi', 'sen@gmail.com', NULL, '$2y$10$E5.3COfQ.FsE8HVGMAlfg.livYWYMWpT9CavEM2SviZxulqoPaaQe', NULL, '2021-04-20 12:01:20', '2021-04-20 12:01:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_username_unique` (`username`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_services`
--
ALTER TABLE `event_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `productorders`
--
ALTER TABLE `productorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `providers_username_unique` (`username`),
  ADD UNIQUE KEY `providers_email_unique` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_services`
--
ALTER TABLE `event_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productorders`
--
ALTER TABLE `productorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
