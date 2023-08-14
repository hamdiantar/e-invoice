-- phpMyAdmin SQL Dump
-- version 5.1.4deb1+focal1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2023 at 04:22 PM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int NOT NULL,
  `number` int NOT NULL,
  `date` timestamp NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `customer_id` int NOT NULL,
  `store_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `number`, `date`, `subtotal`, `total`, `created_at`, `updated_at`, `customer_id`, `store_id`) VALUES
(2, 906503, '2023-08-16 21:36:00', '250', '288', '2023-08-13 19:36:25', '2023-08-13 19:36:25', 1, 11),
(4, 6259, '2018-06-12 09:03:00', '19425', '22339', '2023-08-13 20:00:27', '2023-08-13 20:00:27', 8, 11),
(5, 9929916, '2023-08-23 22:02:00', '36', '41', '2023-08-13 20:02:54', '2023-08-13 20:02:54', 2, 11),
(6, 7160912, '2023-08-17 22:06:00', '396', '455', '2023-08-13 20:07:01', '2023-08-13 20:07:01', 1, 11),
(7, 4625078, '2023-08-14 06:45:00', '20', '23', '2023-08-14 04:45:39', '2023-08-14 04:45:39', 1, 13),
(8, 2567611, '2023-08-13 23:32:00', '470', '541', '2023-08-14 05:33:12', '2023-08-14 05:33:12', 2, 14),
(9, 4145132, '2023-08-14 15:00:00', '740', '851', '2023-08-14 10:01:24', '2023-08-14 10:01:24', 15, 14);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `invoice_id` int NOT NULL,
  `qty` int NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `invoice_id`, `qty`, `price`, `name`, `total`) VALUES
(1, 2, 5, '5', '0', '25'),
(2, 2, 5, '45', '0', '225'),
(5, 4, 555, '35', '0', '19425'),
(6, 5, 6, '6', '0', '36'),
(7, 6, 66, '6', '0', '396'),
(8, 7, 4, '5', '0', '20'),
(9, 8, 3, '12', 'منتج 1', '36'),
(10, 8, 4, '24', 'منتج 2', '96'),
(11, 8, 6, '45', 'منتج 3', '270'),
(12, 8, 2, '34', 'منتج 4', '68'),
(13, 9, 2, '44', 'ff', '88'),
(14, 9, 3, '34', 'fssf', '102'),
(15, 9, 4, '55', 'sfsf', '220'),
(16, 9, 5, '66', 'sfsf', '330');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','customer','store') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin44', 'admin@admin.com', '$2y$10$wnTA/Ktv7xTEutXLkuxgrORvYXZhGyJNby5ufy5eSERLa4IhOrkp2', '+1 (483) 943-1235', 'admin', '2023-08-13 15:07:33', '2023-08-14 10:09:27', NULL),
(2, 'Madonna Norton', 'quraqis@mailinator.com', '$2y$10$Hh.F1aOygg6DEgrN0/0MtO9doa5xGT3Gd6m74YdCbaUKU1h7BzRz6', '+1 (173) 482-6844', 'customer', '2023-08-13 15:36:52', '2023-08-13 15:36:52', NULL),
(3, 'Keaton Espinoza', 'ripum@mailinator.com', '$2y$10$rcKdGFKbZH9QZ1bXeRtwduOVHpQM56CH9.mZAs0Avd4ZHkOfylilC', '+1 (903) 947-1983', 'store', '2023-08-13 15:42:09', '2023-08-13 15:42:09', NULL),
(4, 'Lawrence Bowen', 'fovaxe@mailinator.com', '$2y$10$kMvK87ZRFs5aDatOi4cYoengShdFk20YoymLqJBU444S0I4fgYZxW', '+1 (347) 679-1142', 'customer', '2023-08-13 17:14:28', '2023-08-13 17:14:28', NULL),
(5, 'Reece Mason', 'kate@mailinator.com', '$2y$10$YDQE.kX1tgyjGlcvgLl8kuXs8eAo9pcR4XZa1kDl3iF/5iE.ll4pi', '+1 (955) 795-8209', 'store', '2023-08-13 17:22:35', '2023-08-13 17:22:35', NULL),
(6, 'Rigel Rosa', 'muha@mailinator.com', '$2y$10$77f8Rj7Hdim11RKyEnPsxef1rqP4UVEHZT0AQCHuU5IYIJqD9F8Fe', '+1 (372) 193-8645', 'store', '2023-08-13 17:22:50', '2023-08-13 17:22:50', NULL),
(7, 'Zephr Delacruz', 'denuv@mailinator.com', '$2y$10$XIUG3omgoyRX5kklJcqGDuukvd.A01yJtc4DB/9m4bOmEuFf27nSO', '+1 (135) 555-2353', 'store', '2023-08-13 17:23:50', '2023-08-13 17:23:50', NULL),
(8, 'Ella Crosby', 'ranacykeb@mailinator.com', '$2y$10$Bo.74kTUIq3fLzoTLgYnC.iLLz06QL1p4vKitdSx5gu4iMGBG3k3K', '+1 (125) 872-4819', 'customer', '2023-08-13 17:27:11', '2023-08-13 17:27:11', NULL),
(9, 'Britanney Richards', 'wiwenisi@mailinator.com', '$2y$10$OuFy7TlD9mFg8aBEK3zrm.ugcpiK6G/J5x75nQ5G0MQ2qoSkFKcxe', '+1 (155) 938-2946', 'customer', '2023-08-13 17:29:15', '2023-08-13 17:29:15', NULL),
(10, 'Burton Garrett', 'zatov@mailinator.com', '$2y$10$8u5kzJSX4nwJrkrHZI7HaOzG7qEXTOPFcy2sviv7TvOG1syda0xEC', '+1 (675) 944-3921', 'store', '2023-08-13 17:30:49', '2023-08-13 17:30:49', NULL),
(11, 'Jada Marks', 'sexuba@mailinator.com', '$2y$10$CD06gZ8WQYFwBKs9X0C55uvaoR0iB516LgarDPm7keiACXXNevrWO', '+1 (286) 144-6469', 'store', '2023-08-13 17:32:22', '2023-08-13 17:32:22', NULL),
(12, 'Breanna Buckner', 'nipukelyb@mailinator.com', '$2y$10$w/PYxyytwv88vWTm8GnMVuMFKHECBK.PhvAUQdfw403iMZ2ryrTgq', '+1 (301) 566-1977', 'customer', '2023-08-14 04:40:27', '2023-08-14 04:40:27', NULL),
(13, 'online storrre', 'store@test.com', '$2y$10$xIezZqCaB/mSGm/9fMrcM.QuedujDYg.3U07Uh6CWmp3gaJex/Y56', '+966234234', 'store', '2023-08-14 04:42:21', '2023-08-14 05:10:36', NULL),
(14, 'حمدى', 'store@test1.com', '$2y$10$wnTA/Ktv7xTEutXLkuxgrORvYXZhGyJNby5ufy5eSERLa4IhOrkp2', '234234', 'store', '2023-08-14 05:18:18', '2023-08-14 05:18:37', NULL),
(15, 'customer 1', 'customer@test.com', '$2y$10$tJvplaLadZ9/0MP8jBg7aOPuwd.xx.ka3eIC8DP7DbZxUkVmbUnIy', '234234', 'customer', '2023-08-14 09:43:59', '2023-08-14 09:43:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
