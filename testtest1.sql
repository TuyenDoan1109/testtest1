-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2024 at 01:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testtest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_21_093157_create_vendors_table', 1),
(6, '2024_08_21_093212_create_products_table', 1),
(7, '2024_08_21_093230_create_vendor_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Product_1', NULL, NULL),
(2, 'Product_2', NULL, NULL),
(3, 'Product_3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0936 827 526',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'phú xuyên, hà nội',
  `parent_id` int NOT NULL,
  `level` int NOT NULL,
  `interest_rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `phone`, `address`, `parent_id`, `level`, `interest_rate`, `created_at`, `updated_at`) VALUES
(1, 'VendorLevel_1_1', '0936 827 526', 'phú xuyên, hà nội', 0, 1, 0.50, NULL, NULL),
(2, 'VendorLevel_1_2', '0936 827 526', 'phú xuyên, hà nội', 0, 1, 0.50, NULL, NULL),
(3, 'VendorLevel_2_1', '0936 827 526', 'phú xuyên, hà nội', 1, 2, 0.40, NULL, NULL),
(4, 'VendorLevel_2_2', '0936 827 526', 'phú xuyên, hà nội', 1, 2, 0.40, NULL, NULL),
(5, 'VendorLevel_2_3', '0936 827 526', 'phú xuyên, hà nội', 2, 2, 0.40, NULL, NULL),
(6, 'VendorLevel_2_4', '0936 827 526', 'phú xuyên, hà nội', 2, 2, 0.40, NULL, NULL),
(7, 'VendorLevel_3_1', '0936 827 526', 'phú xuyên, hà nội', 3, 3, 0.30, NULL, NULL),
(8, 'VendorLevel_3_2', '0936 827 526', 'phú xuyên, hà nội', 3, 3, 0.30, NULL, NULL),
(9, 'VendorLevel_3_3', '0936 827 526', 'phú xuyên, hà nội', 4, 3, 0.30, NULL, NULL),
(10, 'VendorLevel_3_4', '0936 827 526', 'phú xuyên, hà nội', 4, 3, 0.30, NULL, NULL),
(11, 'VendorLevel_3_5', '0936 827 526', 'phú xuyên, hà nội', 5, 3, 0.30, NULL, NULL),
(12, 'VendorLevel_3_6', '0936 827 526', 'phú xuyên, hà nội', 5, 3, 0.30, NULL, NULL),
(13, 'VendorLevel_3_7', '0936 827 526', 'phú xuyên, hà nội', 6, 3, 0.30, NULL, NULL),
(14, 'VendorLevel_3_8', '0936 827 526', 'phú xuyên, hà nội', 6, 3, 0.30, NULL, NULL),
(15, 'VendorLevel_4_1', '0936 827 526', 'phú xuyên, hà nội', 7, 4, 0.20, NULL, NULL),
(16, 'VendorLevel_4_2', '0936 827 526', 'phú xuyên, hà nội', 7, 4, 0.20, NULL, NULL),
(17, 'VendorLevel_4_3', '0936 827 526', 'phú xuyên, hà nội', 8, 4, 0.20, NULL, NULL),
(18, 'VendorLevel_4_4', '0936 827 526', 'phú xuyên, hà nội', 8, 4, 0.20, NULL, NULL),
(19, 'VendorLevel_4_5', '0936 827 526', 'phú xuyên, hà nội', 9, 4, 0.20, NULL, NULL),
(20, 'VendorLevel_4_6', '0936 827 526', 'phú xuyên, hà nội', 9, 4, 0.20, NULL, NULL),
(21, 'VendorLevel_4_7', '0936 827 526', 'phú xuyên, hà nội', 10, 4, 0.20, NULL, NULL),
(22, 'VendorLevel_4_8', '0936 827 526', 'phú xuyên, hà nội', 10, 4, 0.20, NULL, NULL),
(23, 'VendorLevel_4_9', '0936 827 526', 'phú xuyên, hà nội', 11, 4, 0.20, NULL, NULL),
(24, 'VendorLevel_4_10', '0936 827 526', 'phú xuyên, hà nội', 11, 4, 0.20, NULL, NULL),
(25, 'VendorLevel_4_11', '0936 827 526', 'phú xuyên, hà nội', 12, 4, 0.20, NULL, NULL),
(26, 'VendorLevel_4_12', '0936 827 526', 'phú xuyên, hà nội', 12, 4, 0.20, NULL, NULL),
(27, 'VendorLevel_4_13', '0936 827 526', 'phú xuyên, hà nội', 13, 4, 0.20, NULL, NULL),
(28, 'VendorLevel_4_14', '0936 827 526', 'phú xuyên, hà nội', 13, 4, 0.20, NULL, NULL),
(29, 'VendorLevel_4_15', '0936 827 526', 'phú xuyên, hà nội', 14, 4, 0.20, NULL, NULL),
(30, 'VendorLevel_4_16', '0936 827 526', 'phú xuyên, hà nội', 14, 4, 0.20, NULL, NULL),
(31, 'VendorLevel_5_1', '0936 827 526', 'phú xuyên, hà nội', 15, 5, 0.10, NULL, NULL),
(32, 'VendorLevel_5_2', '0936 827 526', 'phú xuyên, hà nội', 15, 5, 0.10, NULL, NULL),
(33, 'VendorLevel_5_3', '0936 827 526', 'phú xuyên, hà nội 3', 16, 5, 0.10, NULL, NULL),
(34, 'VendorLevel_5_4', '0936 827 526', 'phú xuyên, hà nội 2', 16, 5, 0.10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_product`
--

CREATE TABLE `vendor_product` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `vendor_id` int NOT NULL,
  `price` int NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_product`
--

INSERT INTO `vendor_product` (`id`, `product_id`, `vendor_id`, `price`, `color`, `created_at`, `updated_at`) VALUES
(1, 1, 14, 1000000, 'red', NULL, NULL),
(2, 1, 31, 1000000, 'red', NULL, NULL),
(3, 1, 10, 1000000, 'red', NULL, NULL),
(4, 1, 23, 1000000, 'red', NULL, NULL),
(5, 1, 12, 1000000, 'red', NULL, NULL),
(6, 1, 25, 1000000, 'red', NULL, NULL),
(7, 1, 10, 1000000, 'red', NULL, NULL),
(8, 1, 5, 1000000, 'red', NULL, NULL),
(9, 1, 16, 1000000, 'red', NULL, NULL),
(10, 1, 15, 1000000, 'red', NULL, NULL),
(11, 1, 11, 1000000, 'red', NULL, NULL),
(12, 1, 28, 1000000, 'red', NULL, NULL),
(13, 1, 10, 1000000, 'red', NULL, NULL),
(14, 1, 20, 1000000, 'red', NULL, NULL),
(15, 1, 23, 1000000, 'red', NULL, NULL),
(16, 1, 18, 1000000, 'red', NULL, NULL),
(17, 1, 11, 1000000, 'red', NULL, NULL),
(18, 1, 31, 1000000, 'red', NULL, NULL),
(19, 1, 24, 1000000, 'red', NULL, NULL),
(20, 1, 23, 1000000, 'red', NULL, NULL),
(21, 1, 14, 1000000, 'red', NULL, NULL),
(22, 1, 22, 1000000, 'red', NULL, NULL),
(23, 1, 13, 1000000, 'red', NULL, NULL),
(24, 1, 1, 1000000, 'red', NULL, NULL),
(25, 1, 14, 1000000, 'red', NULL, NULL),
(26, 1, 32, 1000000, 'red', NULL, NULL),
(27, 1, 14, 1000000, 'red', NULL, NULL),
(28, 1, 5, 1000000, 'red', NULL, NULL),
(29, 1, 3, 1000000, 'red', NULL, NULL),
(30, 1, 32, 1000000, 'red', NULL, NULL),
(31, 2, 12, 2000000, 'green', NULL, NULL),
(32, 2, 10, 2000000, 'green', NULL, NULL),
(33, 2, 13, 2000000, 'green', NULL, NULL),
(34, 2, 6, 2000000, 'green', NULL, NULL),
(35, 2, 14, 2000000, 'green', NULL, NULL),
(36, 2, 12, 2000000, 'green', NULL, NULL),
(37, 2, 1, 2000000, 'green', NULL, NULL),
(38, 2, 16, 2000000, 'green', NULL, NULL),
(39, 2, 7, 2000000, 'green', NULL, NULL),
(40, 2, 3, 2000000, 'green', NULL, NULL),
(41, 2, 16, 2000000, 'green', NULL, NULL),
(42, 2, 30, 2000000, 'green', NULL, NULL),
(43, 2, 4, 2000000, 'green', NULL, NULL),
(44, 2, 29, 2000000, 'green', NULL, NULL),
(45, 2, 11, 2000000, 'green', NULL, NULL),
(46, 2, 26, 2000000, 'green', NULL, NULL),
(47, 2, 8, 2000000, 'green', NULL, NULL),
(48, 2, 16, 2000000, 'green', NULL, NULL),
(49, 2, 18, 2000000, 'green', NULL, NULL),
(50, 2, 9, 2000000, 'green', NULL, NULL),
(51, 2, 2, 2000000, 'green', NULL, NULL),
(52, 2, 33, 2000000, 'green', NULL, NULL),
(53, 2, 31, 2000000, 'green', NULL, NULL),
(54, 2, 19, 2000000, 'green', NULL, NULL),
(55, 2, 22, 2000000, 'green', NULL, NULL),
(56, 2, 13, 2000000, 'green', NULL, NULL),
(57, 2, 18, 2000000, 'green', NULL, NULL),
(58, 2, 5, 2000000, 'green', NULL, NULL),
(59, 2, 32, 2000000, 'green', NULL, NULL),
(60, 2, 33, 2000000, 'green', NULL, NULL),
(61, 3, 3, 3000000, 'yellow', NULL, NULL),
(62, 3, 11, 3000000, 'yellow', NULL, NULL),
(63, 3, 1, 3000000, 'yellow', NULL, NULL),
(64, 3, 3, 3000000, 'yellow', NULL, NULL),
(65, 3, 30, 3000000, 'yellow', NULL, NULL),
(66, 3, 6, 3000000, 'yellow', NULL, NULL),
(67, 3, 13, 3000000, 'yellow', NULL, NULL),
(68, 3, 13, 3000000, 'yellow', NULL, NULL),
(69, 3, 24, 3000000, 'yellow', NULL, NULL),
(70, 3, 15, 3000000, 'yellow', NULL, NULL),
(71, 3, 8, 3000000, 'yellow', NULL, NULL),
(72, 3, 3, 3000000, 'yellow', NULL, NULL),
(73, 3, 7, 3000000, 'yellow', NULL, NULL),
(74, 3, 12, 3000000, 'yellow', NULL, NULL),
(75, 3, 33, 3000000, 'yellow', NULL, NULL),
(76, 3, 21, 3000000, 'yellow', NULL, NULL),
(77, 3, 20, 3000000, 'yellow', NULL, NULL),
(78, 3, 12, 3000000, 'yellow', NULL, NULL),
(79, 3, 15, 3000000, 'yellow', NULL, NULL),
(80, 3, 11, 3000000, 'yellow', NULL, NULL),
(81, 3, 5, 3000000, 'yellow', NULL, NULL),
(82, 3, 11, 3000000, 'yellow', NULL, NULL),
(83, 3, 11, 3000000, 'yellow', NULL, NULL),
(84, 3, 16, 3000000, 'yellow', NULL, NULL),
(85, 3, 34, 3000000, 'yellow', NULL, NULL),
(86, 3, 30, 3000000, 'yellow', NULL, NULL),
(87, 3, 14, 3000000, 'yellow', NULL, NULL),
(88, 3, 13, 3000000, 'yellow', NULL, NULL),
(89, 3, 6, 3000000, 'yellow', NULL, NULL),
(90, 3, 19, 3000000, 'yellow', NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_product`
--
ALTER TABLE `vendor_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `vendor_product`
--
ALTER TABLE `vendor_product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
