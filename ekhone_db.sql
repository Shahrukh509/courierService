-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 04:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekhone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment_infos`
--

CREATE TABLE `customer_payment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_payment_infos`
--

INSERT INTO `customer_payment_infos` (`id`, `type`, `description`, `business_name`, `mobile`, `amount`, `comments`, `created_at`, `updated_at`) VALUES
(3, 'Cash', 'brilliant', 'machine warehouse', 230003333, 23000333, 'okay bye', '2021-08-18 00:59:10', '2021-08-18 00:59:10'),
(5, 'cheque', 'none', 'none', 90076543, 9000, 'none', '2021-08-18 01:33:44', '2021-08-18 01:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_cash_controls`
--

CREATE TABLE `delivery_boy_cash_controls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_amount` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_boy_cash_controls`
--

INSERT INTO `delivery_boy_cash_controls` (`id`, `user_id`, `username`, `cash_amount`, `notes`, `time`, `created_at`, `updated_at`) VALUES
(5, 3, 'hamza zubair', 4, 'seffsdfsdfsdfsdfsfsfsd', '16:43:00', '2021-08-16 16:41:48', '2021-08-16 16:41:48'),
(6, 4, 'hamza zubair', 4000, 'hi im adding fake data', '17:47:00', '2021-08-16 16:44:14', '2021-08-16 16:44:14'),
(7, 4, 'hamza zubair', 3000, 'aohciohoiahf', '19:47:00', '2021-08-16 16:44:55', '2021-08-16 16:44:55'),
(8, 3, 'hamza zubair', 300, 'efwewe', '04:47:00', '2021-08-16 16:45:41', '2021-08-16 16:45:41'),
(9, 3, 'hamza zubair', 466, '44wtwfwefw', '15:50:00', '2021-08-16 16:48:04', '2021-08-16 16:48:04'),
(10, 3, 'hamza zubair', 400, 'ddddd', '17:57:00', '2021-08-16 16:54:49', '2021-08-16 16:54:49'),
(11, 3, 'hamza zubair', 4000, 'hi', '02:57:00', '2021-08-16 16:55:36', '2021-08-16 16:55:36'),
(12, 1, 'hamza zubair', 6000, 'hi from digitant', '20:17:00', '2021-08-16 17:12:53', '2021-08-16 17:12:53'),
(13, 2, 'hamza zubair', 4000, '123454', '17:51:00', '2021-08-16 17:49:55', '2021-08-16 17:49:55'),
(14, 2, 'hamza zubair', 400, 'sdfsdfsdfsd', '09:13:00', '2021-08-16 21:11:47', '2021-08-16 21:11:47'),
(15, 2, 'hamza zubair', 3000, '444fffff', '11:15:00', '2021-08-16 21:12:05', '2021-08-16 21:12:05'),
(16, 2, 'hamza zubair', 50000, 'sdfsfsdf', '09:15:00', '2021-08-16 21:13:49', '2021-08-16 21:13:49'),
(17, 3, 'hamza zubair', 200, 'ssssd', '09:16:00', '2021-08-16 21:15:52', '2021-08-16 21:15:52'),
(18, 2, 'hamza zubair', 20000, 'aohciohoiahf', '09:18:00', '2021-08-16 21:18:42', '2021-08-16 21:18:42'),
(19, 3, 'hamza zubair', 300, '44efsdfsd', '09:23:00', '2021-08-16 21:21:20', '2021-08-16 21:21:20'),
(20, 3, 'hamza zubair', 20000, '12eqdqwed', '21:25:00', '2021-08-16 21:23:23', '2021-08-16 21:23:23'),
(21, 2, 'hamza zubair', 2200, 'hshhddhdhd', '21:26:00', '2021-08-16 21:24:05', '2021-08-16 21:24:05'),
(22, 2, 'hamza zubair', 200, '23400', '09:26:00', '2021-08-16 21:25:00', '2021-08-16 21:25:00'),
(23, 2, 'hamza zubair', 200, 'sefsdfsdfsd', '21:32:00', '2021-08-16 21:30:25', '2021-08-16 21:30:25'),
(24, 3, NULL, 12333, 'casdas', '09:36:00', '2021-08-16 21:34:18', '2021-08-16 21:34:18'),
(25, 3, 'uzair khan', 2000, '1sggsg', '08:38:00', '2021-08-16 21:38:25', '2021-08-16 21:38:25'),
(26, 2, 'hadir khan', 4000, '11223344', '04:43:00', '2021-08-16 21:38:54', '2021-08-17 16:18:12'),
(27, 2, 'hadir khan', 5000, 'something needs to be done', '06:33:00', '2021-08-16 22:19:01', '2021-08-18 01:24:55'),
(29, 4, 'hamza zubair', 20000, 'this is has to be edit', '02:34:00', '2021-08-18 01:31:09', '2021-08-18 01:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2021_04_10_180752_parcels', 2),
(4, '2021_08_13_065844_add_address_to_parcels_table', 3),
(5, '2021_08_17_154812_create_customer_payment_infos_table', 4),
(7, '2021_08_20_091756_add_status_to_users_table', 5),
(8, '2021_09_01_140827_create_route_setups_table', 6),
(9, '2021_09_02_100650_add_status_to_parcels_table', 7),
(10, '2021_09_02_103512_add_deliveryboy_id_to_parcels_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tracking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivery_boy_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `tracking_id`, `name`, `phone`, `amount`, `email`, `district`, `region`, `address`, `note`, `user_id`, `delivery_boy_id`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Parcel-307071022', 'Mohid Saen1', '4398842823', 52000, 'mohidkumar@gmail.com', 'Dhaka Suburbs', 'Khilkhet', '4KDbyFptc3 khilet', 'place it with care', 2, 19, 1, '2021-09-02 15:29:07', '2021-09-02 23:39:18'),
(4, 'Parcel-601143337', 'mr.king', '03112321', 5000, 'bilal@gmail.com', 'Dhaka Suburbs', 'Gulshan', '', 'please palce it with care please', 2, 20, 2, '2021-04-10 17:46:35', '2021-09-04 15:49:38'),
(5, 'Parcel-289271821', 'phoneParcel', '0900786543', 2501, 'ali@gmail.com', 'Dhaka', 'Khilkhet', '', 'nothing is good untill you drop it', 4, NULL, 0, '2021-04-10 18:11:52', '2021-08-31 20:26:59'),
(9, 'Parcel-382421054', 'Mohid Saen', '09887654', 4450, 'mohidkumar@gmail.com', 'Dhaka', 'Khilgaon', 'r580/2 sector 15/a/3 khilgaon', 'place it with care', 2, NULL, 0, '2021-09-02 15:26:53', '2021-09-02 15:26:53'),
(8, 'Parcel-31650592', 'Mohid Kumar', '+923442464345', 400, 'mohidkumar@gmail.com', 'Dhaka', 'Gulshan', 'R-580/2 sector 15/a/3 gulshan karachi', 'please ship my parcel as soon as possible and handle it with much care please!', 3, NULL, 0, '2021-08-31 15:01:11', '2021-08-31 20:27:09'),
(11, 'Parcel-760449913', 'mushtaq', '3073839819', 65000, 'mushtaq@gmail.com', 'Dhaka Suburbs', 'Cantonment', '4KDbyFptc3 khilet', 'place it with care', 2, NULL, 0, '2021-09-03 01:18:47', '2021-09-03 01:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `route_setups`
--

CREATE TABLE `route_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pickup_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route_setups`
--

INSERT INTO `route_setups` (`id`, `user_id`, `pickup_district`, `pickup_region`, `drop_district`, `drop_region`, `route`, `created_at`, `updated_at`) VALUES
(23, 19, 'Dhaka Suburbs', 'Demra', 'Dhaka Suburbs', 'Khilkhet', '[\"district\",\"route1-\",\"hi\"]', '2021-09-02 16:59:46', '2021-09-02 16:59:46'),
(24, 15, 'Dhaka Suburbs', 'Khilgaon', 'Dhaka Suburbs', 'Gulshan', '[\"phase1\",\"phase2\",\"district\"]', '2021-09-02 17:00:28', '2021-09-02 17:00:28'),
(25, 6, 'Dhaka', 'Adabor', 'Dhaka', 'Gulshan', '[\"karachi1\",\"karachi2\",\"old karachi\",\"new karachi\"]', '2021-09-03 00:35:12', '2021-09-03 00:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bussiness_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_page_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_license_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehical_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehical_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `mobile`, `user_email`, `bussiness_name`, `fb_page_link`, `address`, `district`, `region`, `profile_image`, `nid_number`, `nid_picture`, `driving_license_picture`, `vehical_name`, `vehical_number`, `assigned_district`, `assigned_region`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Aa7sdUdrJrWoEJ1No8Cfqu/Ka5m7AvyZyNlZ7iviGwFGeOjzrboXi', 'shahrukh-admin', '03442464509', 'srkshah1998@gmail.com', 'none', 'none', 'r-580/2', 'Dhaka Suburbs', 'Turag', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 0, '2021-08-13 20:03:22', '2021-08-13 20:03:22'),
(2, 'Merchant', '$2y$10$tnZSEw6P1otE4FAHHlXdr.FhNrVhHBaApYU1In7g9Dg.VxvMS3y3y', 'hadir khan', '03442464508', 'hadirkhan@gmail.com', 'none', 'none', 'r-580/2', 'Dhaka Suburbs', 'Demra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'merchant', 0, '2021-08-13 20:05:00', '2021-08-13 20:05:00'),
(3, 'merchant', '$2y$10$tLVDiOLHAmElPX0IQQVRjukzHWy6gy7qV7dSWNnXn.ce4m8wyRisC', 'uzair khan', '03442464507', 'uzairkhan@gmail.com', 'waterplant', 'none', 'r-580/2', 'Dhaka Suburbs', 'Khilgaon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'merchant', 0, '2021-08-13 21:50:00', '2021-08-13 21:50:00'),
(4, 'hamza zu', '$2y$10$lXviiUz7H7L32C0.HKPnKO6XzYeUeDL7HcZIfD9wQutUVFyAA2XPa', 'hamza zubair', '03442464504', 'hamzazubair@gmail.com', 'waterplant', 'none', 'r-580/2', 'Dhaka', 'Adabor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'merchant', 0, '2021-08-13 21:57:06', '2021-08-13 21:57:06'),
(6, 'shahrukh', '112233', 'addi king', '03442464509', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QuvFQ7z7rK', NULL, 'Barguna District', 'Barguna region', 'boy', 0, '2021-08-17 18:57:04', '2021-08-17 22:29:43'),
(15, 'shahrukh', 'dummy123', 'dummy1', '090008765', 'xbc8h@qn1h.com', NULL, NULL, 'cd56m5rVWK', 'Barisal District', 'Chittagong Division', '1629715702.jpg', '0987654321', '1629715702.jpg', '1629715703.jpg', 'D64d4SNVeV', '063113', NULL, NULL, 'boy', 2, '2021-08-23 17:48:23', '2021-08-23 17:48:23'),
(16, 'shahrukh508', 'admin1122', 'dummy002', '0900087666', 'hqmyd@udxx.com', NULL, NULL, 'NWdbcpGQZ3', 'Barguna District', 'Dhaka Division', '1629716144.jpg', '0987654321', '1629716144.jpg', '1629716145.jpg', 'DYBDKMelcww', '308872', 'Barisal District', 'Barisal region', 'boy', 0, '2021-08-23 17:55:46', '2021-08-23 19:35:06'),
(19, 'hamzarider', '$2y$10$yfPt/5I4uNfTkm01w/r/q.oyvWGL./4LvnchMt..HBY36vIU6Pb.e', 'hamza Rider', '090008765', 'hamzarider@gmail.com', NULL, NULL, 'r-580/2', 'Barguna District', 'Chittagong Division', '1630569167.PNG', '0987654321', '1630569167.PNG', '1630569167.PNG', 'Z4EYEXknSt', 'acw-434', NULL, NULL, 'boy', 0, '2021-09-02 14:52:48', '2021-09-02 14:52:48'),
(20, 'ghulam001', '$2y$10$XIH3VK6XmZoiapFFR2sEDude6Z/P21IokLYDz3/Kk2JYacNsNejPy', 'ghualm Rassol', '090008765', 'ghulam@gmail.com', NULL, NULL, 'r-580/2', 'Barguna District', 'Dhaka Division', '1630606825.jpg', '0987654321', '1630606825.jpg', '1630606825.jpg', 'maPUqb9Ybf', 'acw-434', NULL, NULL, 'boy', 0, '2021-09-03 01:20:25', '2021-09-03 01:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_payment_infos`
--
ALTER TABLE `customer_payment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_boy_cash_controls`
--
ALTER TABLE `delivery_boy_cash_controls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_boy_cash_controls_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_setups`
--
ALTER TABLE `route_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_setups_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_payment_infos`
--
ALTER TABLE `customer_payment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `delivery_boy_cash_controls`
--
ALTER TABLE `delivery_boy_cash_controls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `route_setups`
--
ALTER TABLE `route_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery_boy_cash_controls`
--
ALTER TABLE `delivery_boy_cash_controls`
  ADD CONSTRAINT `delivery_boy_cash_controls_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `route_setups`
--
ALTER TABLE `route_setups`
  ADD CONSTRAINT `route_setups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
