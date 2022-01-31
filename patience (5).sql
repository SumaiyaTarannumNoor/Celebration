-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 12:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patience`
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$sGfeqIKe//zP2lSyt4vsUOWmnK4NzlW.bEW6pwKeJnVazqcya7Zaq', NULL, NULL, '2021-08-29 09:32:22', '/uploads/images/_1630251142.jpg'),
(2, 'hello', 'hello@gmail.com', 'helloworld', NULL, NULL, NULL, NULL);

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
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `customer_id`, `fullname`, `emailaddress`, `phonenumber`, `shippingaddress`, `amount`, `created_at`, `updated_at`) VALUES
(1, 6, 'Furrria Furrria', 'furrria@codes.com', '11111111111', 'h-1,r-1', 22000, '2021-09-11 13:42:27', '2021-09-11 13:42:27'),
(2, 6, 'Furrria', 'email@address.com', '222222222', 'House-1, Road-1, Sector-1,Area-1,Town-1,Country-1, Postal Code-1111', 1111, '2021-09-11 13:45:05', '2021-09-11 13:45:05'),
(3, 6, 'Furrria', 'furrria@codes.com', '22222', 'h-1,r-1', 7000, '2021-09-11 13:48:24', '2021-09-11 13:48:24'),
(4, 6, 'Furrria', 'furrria@codes.com', '2222', 'Address', 2222, '2021-09-11 16:37:21', '2021-09-11 16:37:21'),
(5, 6, 'ddd', 'farhana@hotmail.com', '222', 'H-2,S-3,Uttara', 2222, '2021-09-12 10:15:25', '2021-09-12 10:15:25'),
(6, 6, 'ddd', 'farhana@hotmail.com', '222', 'H-2,S-3,Uttara', 0, '2021-09-12 10:15:26', '2021-09-12 10:15:26'),
(7, 6, 'Furrria', 'furrria@codes.com', '22222', 'address', 1111, '2021-09-17 18:23:58', '2021-09-17 18:23:58');

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
-- Table structure for table `cartorders`
--

CREATE TABLE `cartorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cartorders`
--

INSERT INTO `cartorders` (`id`, `customer_id`, `provider_id`, `product_id`, `price`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '222', '222', '2021-08-20 14:53:47', '2021-08-20 14:53:47'),
(2, 1, 2, 7, '500', '722', '2021-08-20 14:53:53', '2021-08-20 14:53:53'),
(3, 1, 2, 7, '500', '1222', '2021-08-20 14:54:28', '2021-08-20 14:54:28'),
(4, 1, 2, 8, '1000', '2222', '2021-08-20 14:54:38', '2021-08-20 14:54:38'),
(5, 1, 2, 8, '1000', '1000', '2021-08-28 06:01:11', '2021-08-28 06:01:11'),
(6, 1, 2, 8, '1000', '1000', '2021-08-28 06:18:06', '2021-08-28 06:18:06'),
(7, 1, 2, 7, '500', '1500', '2021-08-28 06:20:37', '2021-08-28 06:20:37'),
(8, 1, 2, 8, '1000', '1000', '2021-08-28 06:27:52', '2021-08-28 06:27:52'),
(9, 1, 2, 7, '500', '1500', '2021-08-28 06:29:28', '2021-08-28 06:29:28'),
(10, 1, 2, 8, '1000', '2500', '2021-08-28 06:30:17', '2021-08-28 06:30:17'),
(11, 1, 2, 6, '5000', '7500', '2021-08-28 06:31:44', '2021-08-28 06:31:44'),
(12, 1, 2, 7, '500', '500', '2021-08-28 06:32:16', '2021-08-28 06:32:16'),
(13, 1, 2, 8, '1000', '1000', '2021-08-28 06:36:26', '2021-08-28 06:36:26'),
(14, 1, 2, 7, '500', '500', '2021-08-28 06:36:58', '2021-08-28 06:36:58'),
(15, 1, 2, 8, '1000', '1000', '2021-08-28 06:41:05', '2021-08-28 06:41:05'),
(16, 1, 2, 7, '500', '500', '2021-08-28 06:53:22', '2021-08-28 06:53:22'),
(17, 6, 2, 8, '1000', '1000', '2021-08-28 14:59:28', '2021-08-28 14:59:28'),
(18, 6, 2, 11, '222', '222', '2021-08-29 09:36:36', '2021-08-29 09:36:36'),
(22, 6, 2, 11, '222', '244', '2021-08-29 09:45:36', '2021-08-29 09:45:36'),
(23, 6, 2, 11, '222', '222', '2021-08-29 09:51:14', '2021-08-29 09:51:14'),
(24, 6, 2, 3, '2000', '2000', '2021-08-30 02:32:54', '2021-08-30 02:32:54'),
(25, 6, 2, 11, '222', '222', '2021-08-30 02:33:55', '2021-08-30 02:33:55'),
(26, 6, 2, 1, '1111', '1333', '2021-08-30 02:34:18', '2021-08-30 02:34:18'),
(27, 6, 2, 1, '1111', '1111', '2021-08-30 02:38:13', '2021-08-30 02:38:13'),
(28, 6, 2, 11, '222', '222', '2021-08-30 02:44:29', '2021-08-30 02:44:29'),
(29, 6, 2, 11, '222', '222', '2021-08-30 02:44:34', '2021-08-30 02:44:34'),
(30, 6, 2, 7, '500', '722', '2021-08-30 02:44:54', '2021-08-30 02:44:54'),
(31, 6, 2, 11, '222', '222', '2021-08-30 02:45:06', '2021-08-30 02:45:06'),
(32, 6, 2, 8, '1000', '1000', '2021-08-30 02:45:12', '2021-08-30 02:45:12'),
(33, 6, 2, 11, '222', '222', '2021-08-30 02:45:36', '2021-08-30 02:45:36'),
(34, 6, 2, 11, '222', '222', '2021-08-30 02:56:46', '2021-08-30 02:56:46'),
(35, 6, 2, 8, '1000', '1000', '2021-08-30 02:58:04', '2021-08-30 02:58:04'),
(36, 6, 2, 11, '222', '222', '2021-08-30 02:58:11', '2021-08-30 02:58:11'),
(37, 6, 2, 11, '222', '222', '2021-08-30 03:06:52', '2021-08-30 03:06:52'),
(38, 6, 2, 11, '222', '222', '2021-08-30 03:31:17', '2021-08-30 03:31:17'),
(39, 6, 2, 11, '222', '222', '2021-08-30 03:39:01', '2021-08-30 03:39:01'),
(40, 6, 2, 11, '222', '222', '2021-08-30 03:43:00', '2021-08-30 03:43:00'),
(41, 6, 2, 11, '222', '222', '2021-08-30 03:47:42', '2021-08-30 03:47:42'),
(42, 6, 2, 11, '222', '222', '2021-08-30 04:05:22', '2021-08-30 04:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_products`
--

INSERT INTO `cart_products` (`id`, `customer_id`, `provider_id`, `product_id`, `price`, `user_ip`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 8, '1000', '127.0.0.1', '2021-09-02 15:03:36', '2021-09-02 15:03:36'),
(2, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:08:24', '2021-09-02 15:08:24'),
(3, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:33:34', '2021-09-02 15:33:34'),
(4, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:33:45', '2021-09-02 15:33:45'),
(5, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:42:59', '2021-09-02 15:42:59'),
(6, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:46:02', '2021-09-02 15:46:02'),
(7, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:46:10', '2021-09-02 15:46:10'),
(8, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:48:35', '2021-09-02 15:48:35'),
(9, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:48:57', '2021-09-02 15:48:57'),
(10, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:53:28', '2021-09-02 15:53:28'),
(11, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:54:35', '2021-09-02 15:54:35'),
(12, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:58:23', '2021-09-02 15:58:23'),
(13, 6, 2, 11, '222', '127.0.0.1', '2021-09-02 15:59:12', '2021-09-02 15:59:12'),
(14, 6, 2, 8, '1000', '127.0.0.1', '2021-09-02 16:04:27', '2021-09-02 16:04:27'),
(15, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 11:20:14', '2021-09-04 11:20:14'),
(16, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 11:20:25', '2021-09-04 11:20:25'),
(17, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 13:20:14', '2021-09-04 13:20:14'),
(18, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 13:41:54', '2021-09-04 13:41:54'),
(19, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 13:46:09', '2021-09-04 13:46:09'),
(20, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 13:51:23', '2021-09-04 13:51:23'),
(21, 6, 2, 8, '1000', '127.0.0.1', '2021-09-04 13:53:08', '2021-09-04 13:53:08'),
(22, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 13:53:33', '2021-09-04 13:53:33'),
(23, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 14:04:38', '2021-09-04 14:04:38'),
(24, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 14:05:15', '2021-09-04 14:05:15'),
(25, 6, 2, 11, '222', '127.0.0.1', '2021-09-04 14:10:42', '2021-09-04 14:10:42'),
(26, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 15:06:14', '2021-09-04 15:06:14'),
(27, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 15:58:33', '2021-09-04 15:58:33'),
(28, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 16:07:16', '2021-09-04 16:07:16'),
(29, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 16:15:21', '2021-09-04 16:15:21'),
(30, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 16:19:37', '2021-09-04 16:19:37'),
(31, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 16:46:26', '2021-09-04 16:46:26'),
(32, 6, 2, 1, '1111', '127.0.0.1', '2021-09-04 16:46:28', '2021-09-04 16:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `provider_name`, `subject`, `details`, `customer_id`) VALUES
(3, 'Good', 'Good', 'Good', 6);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_services`
--

CREATE TABLE `confirmed_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `CustomerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProviderName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EventType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confirmed_services`
--

INSERT INTO `confirmed_services` (`id`, `customer_id`, `provider_id`, `CustomerName`, `ProviderName`, `EventType`, `Venue`, `Capacity`, `EmailAddress`, `PhoneNumber`, `Address`, `Amount`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 'ee', 'ee', 'ee', 'ee', '22', 'email@address.com', '22', 'h-1,r-1', 22, '2021-08-30 14:34:08', '2021-08-30 14:34:08'),
(2, 6, 2, 'furrria', 'Ahmed', 'Wedding', 'Venue Hall', '100', 'furrria@codes.com', '1111', 'Address', 22222, '2021-08-30 16:44:08', '2021-08-30 16:44:08'),
(3, 6, 2, 'Khan', 'Ahmed', 'Wedding', 'Hall', '200', 'farhana@hotmail.com', '22222', 'H-2,S-3,Uttara', 10000, '2021-08-30 23:36:49', '2021-08-30 23:36:49');

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

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Subject', 'Subject', '2021-09-10 15:02:10', '2021-09-10 15:02:10');

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
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `profile_image`) VALUES
(6, 'furrria', 'furrria@codes.com', '$2y$10$CDicVTX3aXgTdZ8HgSlTSuXA4mJXASTrQWEsyEOIxFAk0LDH.p34C', NULL, '2021-08-28 07:00:43', '2021-09-17 22:30:24', NULL, '/uploads/images/_1631917823.jpg'),
(7, 'hello', 'hello@gmail.com', '$2y$10$d/mM6nIoBjeNV8aDyXG72uBgQRfyxzYp/Y6MpNegPm/w7Rduwj0j.', NULL, '2021-08-29 14:14:07', '2021-08-29 14:27:18', NULL, '/uploads/images/_1630268833.jpg');

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
(1, 'Wedding', 10000, 'Wedding'),
(2, 'EventA', 10, 'TypeA'),
(3, 'Wedding', 2000, 'Wedding'),
(4, 'Weekend', 1, 'Vacation'),
(5, 'Weekend', 200, 'Vacay'),
(6, 'HelloWorld', 111, 'TypeA'),
(7, 'Party', 100, 'Party');

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
(5, 1, 1, 2, 'Service2', '100', '2000'),
(6, 1, 1, 3, 'Service3', '200', '20000'),
(7, 1, NULL, 5, 'Service5', '2000', '200000'),
(8, 1, NULL, 6, 'Service6', '1000', '10000'),
(9, 1, NULL, 2, 'Service2', '100', '2000'),
(20, 6, 2, 1, 'Service1', '10', '1000'),
(21, 6, 3, 1, 'Service1', '10', '1000'),
(22, 6, 3, 1, 'Service1', '10', '1000'),
(23, 6, 3, 1, 'Service1', '10', '1000'),
(24, 6, 3, 1, 'Service1', '10', '1000'),
(27, 6, 4, 14, 'Finish', '100', '10k-20k'),
(28, 6, 4, 14, 'Finish', '100', '10k-20k'),
(29, 6, 5, 13, 'World2', '100', '100'),
(30, 6, 6, 14, 'Finish', '100', '10k-20k');

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
(3, 6, 2, '2021-08-30', '19:02:00', 'Event', 'Approved'),
(4, 6, 2, '2021-09-16', '18:02:00', 'Wedding', 'Approved');

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
(14, 6, 2, 3, 'Hello', 'provider'),
(15, 6, 2, 3, 'Hi', 'customer'),
(16, 6, 2, 3, 'How are you?', 'customer'),
(17, 6, 2, 3, 'Great!', 'customer'),
(18, 6, 2, 3, 'hello', 'provider'),
(19, 6, 2, 3, 'hello', 'provider'),
(20, 6, 2, 3, 'Hello', 'customer'),
(21, 6, 2, 3, 'Hey', 'customer'),
(22, 6, 2, 4, 'Hello', 'provider');

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
(5, '2021_03_27_110224_create_products_table', 1),
(6, '2021_04_09_113824_create_bookings_table', 1),
(7, '2021_04_09_113957_create_events_table', 1),
(8, '2021_04_09_114024_create_appointments_table', 1),
(9, '2021_04_09_114138_create_productorders_table', 1),
(10, '2021_04_09_114212_create_billings_table', 1),
(11, '2021_04_09_114239_create_services_table', 1),
(12, '2021_04_17_105503_create_providers_table', 1),
(13, '2021_04_17_105525_create_customers_table', 1),
(14, '2021_04_17_105545_create_admins_table', 1),
(15, '2021_04_23_170827_create_event_services_table', 1),
(16, '2021_04_24_165058_create_meetings_table', 1),
(17, '2021_04_24_191634_create_messages_table', 1),
(18, '2021_05_03_180343_create_product_images_table', 1),
(19, '2021_06_11_193448_create_productreviews_table', 1),
(20, '2021_07_05_183204_create_orders_table', 1),
(21, '2021_07_12_070327_add_google_id_column', 1),
(22, '2021_07_16_125952_create_servicereviews_table', 1),
(23, '2021_07_18_120032_create_bills_table', 1),
(24, '2021_07_26_164710_add_providerid_to_services_table', 1),
(25, '2021_07_26_170733_add_providerid_to_servicereviews_table', 1),
(26, '2021_07_26_181658_create_contacts_table', 1),
(27, '2021_07_26_213404_add_providerusername_to_services_table', 1),
(28, '2021_08_12_211435_create_cartorders_table', 1),
(29, '2021_07_12_184238_create_complains_table', 2),
(30, '2021_08_10_070902_add_profile_image_to_admins_table', 3),
(31, '2021_08_10_072214_add_profile_image_to_providers_table', 3),
(32, '2021_08_10_072600_add_profile_image_to_customers_table', 3),
(33, '2021_08_30_131338_create_confirmed_services_table', 4),
(34, '2021_08_30_143352_create_confirmed_services_table', 5),
(35, '2021_09_01_172457_create_cart_products_table', 6),
(36, '2021_09_02_210133_create_cart_products_table', 7),
(37, '2021_09_06_190825_create_ordered_items_table', 8),
(38, '2021_09_06_202633_create_ordered_items_table', 9),
(39, '2021_09_06_203925_create_ordered_items_table', 10),
(40, '2021_09_06_211930_add_username_products_table', 11),
(41, '2021_09_07_133220_add_product_id_to_ordered_items_table', 12),
(42, '2021_09_08_162815_add_customer_id_to_orders_table', 13),
(43, '2021_09_08_202117_create_ordered_products_table', 14),
(44, '2021_09_08_202802_add_product_id_to_ordered_products_table', 15),
(45, '2021_09_08_231435_create_orders_table', 16),
(46, '2021_09_11_191439_add_quantity_to_ordered_products_table', 17),
(47, '2021_09_11_191648_add_quantity_to_ordered_items_table', 17);

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
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordered_items`
--

INSERT INTO `ordered_items` (`id`, `order_id`, `customer_id`, `name`, `price`, `created_at`, `updated_at`, `product_id`, `quantity`) VALUES
(1, 1, 6, 'Product6', '5000', '2021-09-11 13:44:14', '2021-09-11 13:44:14', 6, 1),
(2, 1, 6, 'Product4', '5000', '2021-09-11 13:44:14', '2021-09-11 13:44:14', 5, 1),
(3, 2, 6, 'Productt', '500', '2021-09-11 13:47:31', '2021-09-11 13:47:31', 7, 1),
(4, 3, 6, 'Product2', '2000', '2021-09-11 15:01:44', '2021-09-11 15:01:44', 3, 1),
(5, 4, 6, 'Product6', '5000', '2021-09-11 15:02:46', '2021-09-11 15:02:46', 6, 1),
(6, 5, 6, 'Product2', '2000', '2021-09-11 15:04:05', '2021-09-11 15:04:05', 3, 1),
(7, 6, 6, 'Dinner set', '222', '2021-09-11 16:38:50', '2021-09-11 16:38:50', 11, 1),
(8, 7, 6, 'Product1', '222', '2021-09-17 18:25:23', '2021-09-17 18:25:23', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordered_products`
--

INSERT INTO `ordered_products` (`id`, `order_id`, `customer_id`, `name`, `price`, `created_at`, `updated_at`, `product_id`, `quantity`) VALUES
(1, 1, 6, 'Product2', '2000', '2021-09-11 13:42:27', '2021-09-11 13:42:27', 3, 1),
(2, 1, 6, 'Product6', '5000', '2021-09-11 13:42:27', '2021-09-11 13:42:27', 6, 2),
(3, 1, 6, 'Product4', '5000', '2021-09-11 13:42:27', '2021-09-11 13:42:27', 5, 2),
(4, 2, 6, 'Product', '1111', '2021-09-11 13:45:05', '2021-09-11 13:45:05', 1, 1),
(5, 3, 6, 'Product2', '2000', '2021-09-11 13:48:24', '2021-09-11 13:48:24', 3, 1),
(6, 3, 6, 'Product4', '5000', '2021-09-11 13:48:25', '2021-09-11 13:48:25', 5, 1),
(7, 4, 6, 'Product', '1111', '2021-09-11 16:37:22', '2021-09-11 16:37:22', 1, 2),
(8, 5, 6, 'Product', '1111', '2021-09-12 10:15:26', '2021-09-12 10:15:26', 1, 2),
(9, 7, 6, 'Product', '1111', '2021-09-17 18:23:58', '2021-09-17 18:23:58', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`, `created_at`) VALUES
(1, 'furrria', 'furrria@codes.com', '11111111', 10000, 'H-1,R-1', 'Processing', '613d06f3c2357', 'BDT', '2021-09-11 19:43:47'),
(2, 'furrria', 'furrria@codes.com', '11111111', 500, 'H-1,R-1,S-1,Town-1,City-1,Country-1', 'Processing', '613d078a19782', 'BDT', '2021-09-11 19:46:18'),
(3, 'furrria', 'furrria@codes.com', '2222', 2000, 'H-1,R-1', 'Processing', '613d1907a06bf', 'BDT', '2021-09-11 21:00:55'),
(4, 'furrria', 'furrria@codes.com', '333', 5000, 'H-1,R-1', 'Processing', '613d19684c6c9', 'BDT', '2021-09-11 21:02:32'),
(5, 'furrria', 'furrria@codes.com', '22222', 2000, 'H-1,R-1', 'Processing', '613d19a9a66f5', 'BDT', '2021-09-11 21:03:37');

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
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `customer_id`, `provider_id`, `product_id`, `comment`, `created_at`, `updated_at`) VALUES
(6, 6, 2, 1, 'Post1', '2021-09-10 12:23:10', '2021-09-10 12:23:10'),
(7, 6, 2, 1, 'Post2', '2021-09-10 12:23:18', '2021-09-10 12:23:18'),
(8, 6, 2, 1, 'POst 3', '2021-09-10 12:23:25', '2021-09-10 12:23:25'),
(9, 6, 2, 3, 'Average Product', '2021-09-10 14:03:16', '2021-09-10 14:03:16'),
(10, 6, 2, 3, 'Got my parcel on time!', '2021-09-10 14:03:31', '2021-09-10 14:03:31'),
(11, 6, 2, 3, 'Will recommend', '2021-09-10 14:03:39', '2021-09-10 14:03:39'),
(12, 6, 2, 3, 'Great', '2021-09-10 14:03:51', '2021-09-10 14:03:51'),
(13, 6, 2, 3, 'Good', '2021-09-10 14:03:55', '2021-09-10 14:03:55'),
(14, 6, 2, 3, 'Excellent', '2021-09-10 14:04:04', '2021-09-10 14:04:04'),
(15, 6, 2, 1, 'Great!', '2021-09-10 14:37:58', '2021-09-10 14:37:58'),
(16, 6, 2, 1, 'Post4', '2021-09-10 14:38:03', '2021-09-10 14:38:03'),
(17, 6, 2, 1, 'Post5', '2021-09-10 14:38:10', '2021-09-10 14:38:10'),
(18, 6, 2, 1, 'post6', '2021-09-10 14:38:15', '2021-09-10 14:38:15');

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
(1, 'Product', 1111, 'Product', 2),
(2, 'Product1', 222, 'fgr', 2),
(3, 'Product2', 2000, 'Product2', 2),
(5, 'Product4', 5000, 'Product', 2),
(6, 'Product6', 5000, 'Product6', 2),
(7, 'Productt', 500, 'Product', 2),
(8, 'ProductA', 1000, 'Product', 2),
(11, 'Dinner set', 222, 'ddd', 2);

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
(1, 1, '1629378006tea-set.jpg'),
(2, 2, '1629378025images.jpg'),
(3, 3, '162938894986fa21d6c244f13fd2175a21d3df280d.jpg'),
(5, 5, '1629388994tea-set.jpg'),
(6, 6, '162938901386fa21d6c244f13fd2175a21d3df280d.jpg'),
(7, 7, '1629389783tea-set.jpg'),
(8, 8, '1629475886tea-set.jpg'),
(10, 10, '1630239936tea-set.jpg'),
(11, 11, '1630250865tea-set.jpg'),
(13, 13, '163104180686fa21d6c244f13fd2175a21d3df280d.jpg'),
(15, 15, '1631141746tea-set.jpg'),
(16, 16, '1631141853tea-set.jpg'),
(17, 18, '1631141928tea-set.jpg'),
(18, 19, '1631916717images.jpg');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`) VALUES
(1, 'Khan', 'khan@gmail.com', '$2y$10$KiD6f.Fi1oLZQSFanLRyQeKBE4f81Hz7OiCOKk12jOTXy9Lxl7GKG', NULL, '2021-08-18 14:07:37', '2021-08-18 14:07:37', NULL),
(2, 'Ahmed', 'ahmed@gmail.com', '$2y$10$Oj5kJW5YeYd5RiU1kSq.se60SO5O4Xt917S.UXRkptAxGr.0VGPhK', 'AHsYZW83HS9ROxqqrsG0CAQYKyw72uM2Btf1KT6Gv8sHtxmOYraOIHiz6het', '2021-08-18 14:08:33', '2021-08-29 09:27:02', '/uploads/images/_1630250822.jpg');

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
-- Table structure for table `servicereviews`
--

CREATE TABLE `servicereviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicereviews`
--

INSERT INTO `servicereviews` (`id`, `customer_id`, `service_id`, `comment`, `created_at`, `updated_at`, `provider_id`) VALUES
(5, 6, 1, 'Post1', '2021-09-10 14:38:39', '2021-09-10 14:38:39', 2),
(6, 6, 1, 'Post2', '2021-09-10 14:38:44', '2021-09-10 14:38:44', 2),
(9, 6, 1, 'Post3', '2021-09-10 14:39:03', '2021-09-10 14:39:03', 2),
(10, 6, 1, 'Post4', '2021-09-10 14:39:10', '2021-09-10 14:39:10', 2),
(11, 6, 1, 'Post5', '2021-09-10 14:39:15', '2021-09-10 14:39:15', 2),
(12, 6, 1, 'Post6', '2021-09-10 14:39:19', '2021-09-10 14:39:19', 2),
(13, 6, 1, 'Post7', '2021-09-10 14:39:24', '2021-09-10 14:39:24', 2),
(14, 6, 1, 'Weekend', '2021-09-17 18:23:03', '2021-09-17 18:23:03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricerange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `provider_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `capacity`, `pricerange`, `provider_id`, `provider_username`) VALUES
(1, 'Service1', '10', '1000', 2, 'Ahmed'),
(2, 'Service2', '100', '2000', 2, 'Ahmed'),
(3, 'Service3', '200', '20000', 2, 'Ahmed'),
(4, 'Service4', '100', '3300', 2, 'Ahmed'),
(5, 'Service5', '2000', '200000', 2, 'Ahmed'),
(6, 'Service6', '1000', '10000', 2, 'Ahmed'),
(7, 'ServiceA', '100', '1000', 2, 'Ahmed'),
(8, 'Service', '2222', '222', 2, 'Ahmed'),
(11, 'HelloWorld', '299', '2299', 2, 'Ahmed'),
(12, 'World', '100', '100', 4, 'World@gmail.com'),
(13, 'World2', '100', '100', 4, 'World@gmail.com'),
(14, 'Finish', '100', '10k-20k', 2, 'Ahmed');

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
(1, 'FarhanaKhan', 'farhanakhan@gmail.com', NULL, '$2y$10$vbSy9iybMQfj6cXAxOjYauBgr3YBjwFx3NKeKZcjyrwZmsV.lDAX2', NULL, '2021-08-20 10:24:00', '2021-08-20 10:24:00');

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
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartorders`
--
ALTER TABLE `cartorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartorders_product_id_foreign` (`product_id`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmed_services`
--
ALTER TABLE `confirmed_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `confirmed_services_customer_id_foreign` (`customer_id`);

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
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productreviews_product_id_foreign` (`product_id`);

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
-- Indexes for table `servicereviews`
--
ALTER TABLE `servicereviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicereviews_service_id_foreign` (`service_id`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartorders`
--
ALTER TABLE `cartorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirmed_services`
--
ALTER TABLE `confirmed_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_services`
--
ALTER TABLE `event_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ordered_items`
--
ALTER TABLE `ordered_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicereviews`
--
ALTER TABLE `servicereviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cartorders`
--
ALTER TABLE `cartorders`
  ADD CONSTRAINT `cartorders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `cart_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `confirmed_services`
--
ALTER TABLE `confirmed_services`
  ADD CONSTRAINT `confirmed_services_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD CONSTRAINT `productreviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `servicereviews`
--
ALTER TABLE `servicereviews`
  ADD CONSTRAINT `servicereviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
