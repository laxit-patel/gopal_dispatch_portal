-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 02:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gopal`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `timeout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`for`, `timeout`) VALUES
('user', 'eyJpdiI6Im0rM0orMDBTampoWHNCL214Rmpxdnc9PSIsInZhbHVlIjoiZjR5UnVLYVlKQVpvZjJrTk4ydzIrUT09IiwibWFjIjoiYjhmYTI4NWE2NDA4ZmYxYzcwYzllNjhiZTcyN2JiOGYxNzViZGQyZWQ0NDg2ZjFmM2E4ZDJkMmI3YzM1MDQ5NCIsInRhZyI6IiJ9');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_15_130517_timeout', 1),
(6, '2021_12_16_100337_config_migration', 1),
(7, '2021_12_17_041134_create_products_table', 1),
(8, '2021_12_17_041311_create_orders_table', 1),
(9, '2021_12_17_045742_order_products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placement_date` datetime NOT NULL,
  `shipment_date` datetime NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `launch_date` datetime NOT NULL,
  `mfg_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `sales_rate` decimal(10,2) NOT NULL,
  `tax_rate` decimal(10,2) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `hp` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timeout`
--

CREATE TABLE `timeout` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'This Indicates Admin and is used for is_admin middleware',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `fname`, `mname`, `lname`, `address`, `phone`, `name`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
('01427ab4-3fb4-4251-be1c-0eb7a2b58913', 'user@mail.com', NULL, '$2y$10$Bg.TU.bY0yinWSK.ajnMM.KKvBpX4i.nNHqyzqzfrHgyKAS7yR4wS', NULL, NULL, NULL, NULL, NULL, 'user', 0, NULL, '2021-12-17 01:53:34', '2021-12-17 01:53:34'),
('08cf0f80-3060-447d-82a3-9f9722ea4b93', 'fosopa@mailinator.com', NULL, '$2y$10$J1eHf1.s1Hiqbnr4/37a2eeVFSPYTYWDJtHnVWFXz5KSpvZLH.efK', 'demo', 'Ivan Craig', 'Amaya Mccarty', 'Qui eaque quis aliqu', '+1 (483) 671-9806', 'Wynne Aguirre', 0, NULL, '2021-12-17 04:54:52', '2021-12-17 04:54:52'),
('218fb733-1f8c-4958-99eb-57953d5a1f66', 'xino@mailinator.com', NULL, '$2y$10$1PykKjoyjXVpyXbaJPqume/UO01Qj.u7Gp/Lkeby/35WAWwz8b0aS', 'Quail Hayden', 'Geoffrey Cobb', 'Derek Coleman', 'Commodi aut dignissi', '+1 (484) 235-6282', 'Cedric Talley', 0, NULL, '2021-12-17 03:41:09', '2021-12-17 03:41:09'),
('3b57d4c0-f72e-4696-b4b9-5c7e557d8a3d', 'hylicezel@mailinator.com', NULL, '$2y$10$cHBoFFvJGYF1shxCQrBL1eTOwoIs5kMjqDjs9gww4xgxKfDwhWApq', 'Drew Mayer', 'Sybill Bradshaw', 'Erica Thomas', 'Quia quidem sit dolo', '+1 (945) 999-4772', 'Griffin Terry', 0, NULL, '2021-12-17 03:41:24', '2021-12-17 03:41:24'),
('5c769f83-8c9a-4b20-8f5e-665f1c73069a', 'qacaryz@mailinator.com', NULL, '$2y$10$SC5XMeC.xgpFeASsMa873u7bgp5MD7Qde/UeBHt29BjEgBr2xG3yG', 'Gannon Oneil', 'Clare Lamb', 'Brendan Leonard', 'Fugiat totam ipsum', '+1 (913) 615-3306', 'Ivory Maxwell', 0, NULL, '2021-12-17 03:40:34', '2021-12-17 03:40:34'),
('5eaf902c-e0a5-4f1d-81e4-fe2c864ea612', 'hele@mailinator.com', NULL, '$2y$10$6TC4kKKeS94v/reRrXiFVOIwhR1W/2Q1aHON3bHHSlChxIGCqe8dm', 'Byron Bird', 'Herman Harrington', 'Diana Fox', 'Tenetur totam fugiat', '+1 (287) 387-1044', 'Ora Browning', 0, NULL, '2021-12-17 03:41:37', '2021-12-17 03:41:37'),
('6c91bc68-e388-4959-b3bf-56f5a660dde8', 'karah@mailinator.com', NULL, '$2y$10$Cznw7eJJPbpP4kJtlg7NketBYcHDJzq1I7sv4CEOK9DxTykYDAu56', 'Anjolie Pace', 'Alec Ray', 'Carol Odonnell', 'In nobis nesciunt h', '+1 (107) 741-6611', 'Abdul Humphrey', 0, NULL, '2021-12-17 03:42:04', '2021-12-17 03:42:04'),
('6d814703-43f9-4b88-9d85-34cd3a719b65', 'badebymiwi@mailinator.com', NULL, '$2y$10$gPShGuJ1GXDsDGG5SNMdq.EX1j3Hf2t4g291XBcV1W93MDNo1wSXG', 'Charity Medina', 'Olga Kinney', 'Marshall Miller', 'Aut velit rem est d', '+1 (905) 192-1479', 'Aurelia Mccormick', 0, NULL, '2021-12-17 03:40:59', '2021-12-17 03:40:59'),
('86d8725b-fae4-4c31-b8c6-d00ba1b07b3d', 'fosak@mailinator.com', NULL, '$2y$10$p6cFpMvXim6jz1Q.T7eGyut70Yl3y98KLC0TvP.4vIhXKXdGfoU/G', 'Anne Gallegos', 'Carissa Burke', 'Palmer Kidd', 'Veniam minim volupt', '+1 (627) 274-6122', 'Lunea Shelton', 0, NULL, '2021-12-17 03:40:46', '2021-12-17 03:40:46'),
('930e369b-e7fc-4fa0-8338-9d7334b3d0b7', 'admin@mail.com', NULL, '$2y$10$jfou8emI0NGb.HpnrKfACua2.Iffq7faIRCzJQvRtThSIl3/W701.', NULL, NULL, NULL, NULL, NULL, 'admin', 1, NULL, '2021-12-17 01:53:34', '2021-12-17 01:53:34'),
('c6699a4f-1935-4ff3-b393-18d5363882b4', 'fecesityb@mailinator.com', NULL, '$2y$10$MEFryu0.0CvDFbOMhX/gzOTn44eTFEj/CUpdfas7dOoevQj/gZjwa', 'Kirk Wall', 'Nita Hanson', 'Quinlan Holt', 'Et fuga In dolore t', '+1 (831) 736-9526', 'Byron Davidson', 0, NULL, '2021-12-17 03:40:05', '2021-12-17 03:40:05'),
('d08a3c48-797e-486e-b304-eb69600927e3', 'syxysuq@mailinator.com', NULL, '$2y$10$5WaJHDc4QOp3oh/Kp792Gee5hmhu8LoVpAIO6qlW2SsSra18FskL2', 'Mallory Randolph', 'Gay Lawrence', 'Alea Bender', 'Ipsam alias illum m', '+1 (598) 597-4636', 'Vance Byrd', 0, NULL, '2021-12-17 03:40:14', '2021-12-17 03:40:14'),
('e48ee264-f8d9-4523-a0b9-8ca4abe713c4', 'sotixyvo@mailinator.com', NULL, '$2y$10$jAf9bKWtBLQiGzvBshhOUudFx/1NNbohu2er/6KucLfW1RI7J6A7O', 'Lois Gregory', 'Maxwell Mcmahon', 'Merritt Abbott', 'Qui quae cum aliquid', '+1 (326) 947-2153', 'Vincent Hancock', 0, NULL, '2021-12-17 03:40:25', '2021-12-17 03:40:25');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_foreign` (`user`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_foreign` (`order`),
  ADD KEY `order_products_product_foreign` (`product`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeout`
--
ALTER TABLE `timeout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timeout_user_foreign` (`user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_foreign` FOREIGN KEY (`order`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_product_foreign` FOREIGN KEY (`product`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `timeout`
--
ALTER TABLE `timeout`
  ADD CONSTRAINT `timeout_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
