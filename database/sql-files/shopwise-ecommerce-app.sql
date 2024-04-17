-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 08:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopwise-ecommerce-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `offer_price` double(8,2) NOT NULL DEFAULT 0.00,
  `discount` int(11) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `product_id`, `title`, `sub_title`, `position`, `offer_price`, `discount`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 'Get upto 59% discount', '50% atleast', '2', 5550.00, 50, 'upload/advertisement-images/443377.jpg', 1, '2024-03-16 00:51:33', '2024-03-16 00:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Grameen UNIQLO', 'Grameen UNIQLO', 'upload/brand-images/181004_L3_sustainability_cover_grameen_01.jpg', 1, '2024-03-08 13:14:31', '2024-03-08 13:14:31'),
(15, 'Yellow', 'Yellow', 'upload/brand-images/download.png', 1, '2024-03-08 13:15:54', '2024-03-08 13:15:54'),
(16, 'Aarong', 'Aarong', 'upload/brand-images/aarong-logo.webp', 1, '2024-03-08 13:17:54', '2024-03-08 13:17:54'),
(17, 'Ecstasy', 'Ecstasy', 'upload/brand-images/logo.png', 1, '2024-03-08 13:19:48', '2024-03-08 13:19:48'),
(18, 'Funskool', 'Funskool', 'upload/brand-images/beAVOQQYBnqB2e0nDoEQEqBvqWokwQhhy9JX5DSq.jpeg', 1, '2024-03-08 13:21:53', '2024-03-08 13:21:53'),
(19, 'LEGO', 'LEGO', 'upload/brand-images/brand.gif', 1, '2024-03-08 13:22:41', '2024-03-08 13:22:41'),
(20, 'Miniso', 'Miniso', 'upload/brand-images/miniso-logo.webp', 1, '2024-03-08 13:23:46', '2024-03-08 13:23:46'),
(21, 'Apple', 'Apple', 'upload/brand-images/8ed3d547-94ff-48e1-9f20-8c14a7030a02_2000x2000.jpg', 1, '2024-03-08 13:25:57', '2024-03-08 13:25:57'),
(22, 'Samsung', 'Samsung', 'upload/brand-images/download (1).png', 1, '2024-03-08 13:26:33', '2024-03-08 13:26:33'),
(23, 'Sony', 'Sony', 'upload/brand-images/sony-logo-sony-icon-transparent-free-png.webp', 1, '2024-03-08 13:27:35', '2024-03-08 13:27:35'),
(24, 'Acer', 'Acer', 'upload/brand-images/png-transparent-acer-flat-brand-logo-icon.png', 1, '2024-03-08 13:28:16', '2024-03-08 13:28:16'),
(25, 'Asus', 'Asus', 'upload/brand-images/png-transparent-asus-flat-brand-logo-icon.png', 1, '2024-03-08 13:28:55', '2024-03-08 13:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Women\'s', 'Here all you find women\'s eye catching products', 'upload/category-images/product_img3.jpg', 1, '2024-03-08 12:56:23', '2024-03-08 12:56:23'),
(17, 'Men\'s', 'Here you will find all Men\'s eye catching products', 'upload/category-images/product_img10.jpg', 1, '2024-03-08 12:57:05', '2024-03-08 12:57:05'),
(18, 'Kid\'s', 'This is the kid\'s corner', 'upload/category-images/product_img4.jpg', 1, '2024-03-08 12:57:50', '2024-03-08 12:57:50'),
(19, 'Accessories', 'This is accessories section', 'upload/category-images/cat_img2.png', 1, '2024-03-08 12:59:00', '2024-03-08 12:59:00'),
(20, 'Clothing', NULL, 'upload/category-images/sidebar_banner_img.jpg', 1, '2024-03-08 12:59:36', '2024-03-08 12:59:36'),
(21, 'Shoes', 'Shoes', 'upload/category-images/product_small_img4.jpg', 1, '2024-03-08 13:00:39', '2024-03-08 13:00:39'),
(22, 'Watches', 'Watches', 'upload/category-images/el_img2.jpg', 1, '2024-03-08 13:01:01', '2024-03-08 13:01:01'),
(23, 'Jewelry', 'Jewelry', 'upload/category-images/insta_img7.jpg', 1, '2024-03-08 13:02:01', '2024-03-08 13:02:01'),
(24, 'Health & Beauty', 'Health & Beauty', 'upload/category-images/blog_small_img7.jpg', 1, '2024-03-08 13:02:27', '2024-03-08 13:02:27'),
(25, 'Sports', 'Sports', 'upload/category-images/menu_banner9.jpg', 1, '2024-03-08 13:03:19', '2024-03-08 13:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Black', '#000000', 'Black', 1, '2024-03-08 13:31:14', '2024-03-08 13:31:14'),
(6, 'Red', '#ff0000', '255, 0, 0', 1, '2024-03-08 13:31:55', '2024-03-08 13:31:55'),
(7, 'Green', '#00ff00', NULL, 1, '2024-03-08 13:32:24', '2024-03-08 13:32:24'),
(8, 'Blue', '#0000ff', 'Blue', 1, '2024-03-08 13:32:43', '2024-03-08 13:32:43'),
(9, 'White', '#ffffff', 'White', 1, '2024-03-08 13:33:09', '2024-03-08 13:33:09'),
(10, 'Yellow', '#ffff00', 'Yellow', 1, '2024-03-08 13:33:34', '2024-03-08 13:33:34'),
(11, 'Cyan', '#00ffff', 'Cyan', 1, '2024-03-08 13:33:56', '2024-03-08 13:33:56'),
(12, 'Magenta', '#ff00ff', 'Magenta', 1, '2024-03-08 13:34:11', '2024-03-08 13:34:11'),
(13, 'Orange', '#ffa500', 'RGB: (255, 165, 0)', 1, '2024-03-08 13:34:37', '2024-03-08 13:34:37'),
(14, 'Purple', '#800080', 'RGB: (128, 0, 128)', 1, '2024-03-08 13:35:15', '2024-03-08 13:35:15'),
(15, 'Pink', '#ffc0cb', 'RGB: (255, 192, 203)', 1, '2024-03-08 13:36:09', '2024-03-08 13:36:09'),
(16, 'Brown', '#a52a2a', 'RGB: (165, 42, 42)', 1, '2024-03-08 13:36:37', '2024-03-08 13:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` text DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `address`, `date_of_birth`, `blood_group`, `district`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Junayed Kabir Fahim', 'admin@admin.com', '123456', '$2y$12$I/.hw3FP3BqOEsYgDNDic.nwLUgEZZNhYGmQr5/t6ajwzIuopoYY.', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-10 05:10:15', '2024-03-10 05:10:15'),
(4, 'Fahim', 'fahim@admin.com', '01701057048', '$2y$12$TFzDXpgoSTrM05sAOsnBC.m/XHSpjf2Z3g1pc9PTk2k4Ei3ZD1rHi', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-10 08:25:02', '2024-03-10 08:25:02'),
(5, 'Sumaiya Akter', 'smak@admin.com', '010101010101', '$2y$12$YWMrywlhPjheZS9M3hsBHuchiZvUlja28YuTsP6aCLFnNmQddG4oO', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-10 14:16:05', '2024-03-10 14:16:05'),
(6, 'Fuad Ur Rahman', 'fuadneelpani@admin.com', '01840190054', '$2y$12$8HXhoZuT2nCC.69IRtnWfuEI6NXVsX6kTej2i/BXhq5D79c5AVx/a', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-11 14:42:56', '2024-03-11 14:42:56'),
(7, 'Harun Ar Rashid', 'dbharun@gmail.com', '01702134904', '$2y$12$mP52uzlukgxd9CDO9hkd4e/HvcNr1heAbmLa53j20VrkNBeWXtqVy', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 13:02:38', '2024-03-14 13:02:38'),
(8, 'Monju', 'monju@admin.com', '01938473847', '$2y$12$R5IDR59PbVT3Wv.6RCsfGuRbPuBHJwF7M1yfFqbAzTTCZK2x7et3a', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 13:50:43', '2024-03-14 13:50:43'),
(9, 'baby', 'baby@baby.com', '06435545436', '$2y$12$nW5YBGfxronMC5DIlKpM1e/uZ2ZUTV0jpGEvfvN8qnEWqfCIQeOQC', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 13:56:43', '2024-03-14 13:56:43'),
(10, 'tonmoy', 'tonmoy@gmaer.com', '01892348214', '$2y$12$RMJIvP6R02wA30wWDiJHnu/0UV17N0E7jpP8dHlDEOqhpQqKbRFOG', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 14:01:41', '2024-03-14 14:01:41'),
(11, 'Riaz Ahmed', 'riaz@riaz.com', '017981289398', '$2y$12$OZHSZA9NZ7ZRFrxuY3qRoeU4BvyI1wAd1NTxMQLUJjt.j9jsZobg.', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 14:45:08', '2024-03-14 14:45:08'),
(12, 'Sumaiya', 'sma@sad.com', '01885464554', '$2y$12$r8TlAukoQQFkHC2YmzNQrewcwR4CJOL/7aZYgiQJMzIMCZCIyRdIW', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 14:52:00', '2024-03-14 14:52:00'),
(13, 'Sajib', 'sajib@sajib.com', '02903432958', '$2y$12$ZFuQ4IA9ugRurwyvmIYMoOnlchz0hoj7t6L8WIen5nwDnVhzrl/bq', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-14 15:01:24', '2024-03-14 15:01:24'),
(14, 'Mohammad Alamgir Kabir', 'alamgirkabir@admin.com', '01717484616', '$2y$12$qmrfyGaDRfwYiZreom1sZuYzugnEYcNRn9/qmWe2ST4syDkiGkUnq', NULL, NULL, NULL, NULL, NULL, 1, '2024-03-15 02:26:53', '2024-03-15 02:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_29_152659_create_sessions_table', 1),
(7, '2024_03_03_032336_create_categories_table', 2),
(9, '2024_03_03_080716_create_sub_categories_table', 3),
(10, '2024_03_05_071424_create_brands_table', 4),
(11, '2024_03_05_071445_create_units_table', 4),
(12, '2024_03_05_071452_create_colors_table', 4),
(13, '2024_03_05_071506_create_sizes_table', 4),
(18, '2024_03_06_053804_create_products_table', 5),
(19, '2024_03_06_054655_create_product_colors_table', 5),
(20, '2024_03_06_054702_create_product_sizes_table', 5),
(21, '2024_03_06_055955_create_product_sub_images_table', 5),
(25, '2024_03_10_062919_create_customers_table', 6),
(26, '2024_03_10_062942_create_orders_table', 6),
(27, '2024_03_10_062958_create_order_details_table', 6),
(31, '2024_03_11_034448_add_courier_id_column_to_orders_table', 7),
(32, '2024_03_14_074807_create_product_offers_table', 7),
(33, '2024_03_14_110852_add_mobile_column_to_users_table', 8),
(34, '2024_03_14_111831_add_role_column_to_users_table', 9),
(35, '2024_03_14_194623_create_orders_table', 10),
(36, '2024_03_15_084204_create_advertisements_table', 11),
(39, '2024_03_16_074238_create_settings_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `tax_total` int(11) NOT NULL,
  `shipping_total` int(11) NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_method` text NOT NULL,
  `payment_amount` int(11) NOT NULL DEFAULT 0,
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `currency` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_total`, `tax_total`, `shipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `payment_method`, `payment_amount`, `payment_date`, `payment_timestamp`, `payment_status`, `currency`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 4, 130329, 16986, 100, '2024-03-14', '1710374400', 'Pending', 'Jamuna Future Park', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f354870419b', NULL, NULL),
(2, 8, 2860, 360, 100, '2024-03-14', '1710374400', 'Pending', 'Khilkhet', 'Pending', 'Cash', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-03-14 13:50:43', '2024-03-14 13:50:43'),
(3, 8, 1480, 180, 100, '2024-03-14', '1710374400', 'Pending', 'Khilkhet', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f35555c9456', NULL, NULL),
(4, 9, 100, 0, 100, '2024-03-14', '1710374400', 'Pending', 'hfjgfgfghfhg', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f3567b613fe', NULL, NULL),
(5, 10, 7000, 900, 100, '2024-03-14', '1710374400', 'Pending', 'qwjdhwdf whfwcbj', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f357a51184d', NULL, NULL),
(6, 10, 1250, 150, 100, '2024-03-14', '1710374400', 'Pending', 'Mirpur', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f35ffd40834', NULL, NULL),
(7, 10, 100, 0, 100, '2024-03-14', '1710374400', 'Pending', 'nm m', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f3604363bee', NULL, NULL),
(8, 10, 100, 0, 100, '2024-03-14', '1710374400', 'Pending', 'jhbbhbjhbjhbjh', 'Pending', 'Cash', 0, NULL, NULL, 'Pending', NULL, NULL, '2024-03-14 14:39:42', '2024-03-14 14:39:42'),
(9, 10, 2029, 252, 100, '2024-03-14', '1710374400', 'Pending', 'jhhhh jhhhh', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f360b1b92d6', NULL, NULL),
(10, 10, 100, 0, 100, '2024-03-14', '1710374400', 'Pending', 'awdfwdff dfvsv', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f360d8a276e', NULL, NULL),
(11, 10, 1250, 150, 100, '2024-03-14', '1710374400', 'Pending', 'Mirpur', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f3612aeaa46', NULL, NULL),
(12, 11, 1480, 180, 100, '2024-03-14', '1710374400', 'Pending', 'Khilkhat', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f361d499d9a', NULL, NULL),
(13, 11, 3026, 382, 100, '2024-03-14', '1710374400', 'Processing', 'Khilkhat', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f362726eae0', NULL, NULL),
(14, 12, 7713, 993, 100, '2024-03-14', '1710374400', 'Completed', 'Mirpur', 'Completed', 'Online', 7713, '2024-03-14', '1710374400', 'Completed', 'BDT', '65f3637071ad2', NULL, '2024-03-14 14:57:20'),
(15, 14, 130329, 16986, 100, '2024-03-15', '1710460800', 'Completed', '11/Kha, Kashor, Mymensingh', 'Completed', 'Online', 130329, '2024-03-15', '1710460800', 'Completed', 'BDT', '65f406a5421dc', NULL, '2024-03-15 02:30:34'),
(16, 14, 100, 0, 100, '2024-03-15', '1710460800', 'Processing', 'jhbjbh', 'Pending', 'Online', 0, NULL, NULL, 'Pending', 'BDT', '65f407edc4b54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_color`, `product_size`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 'Men\'s Formal Suite', 'Black', 'S', 4542, 1, '2024-03-10 05:10:15', '2024-03-10 05:10:15'),
(2, 2, 23, 'Apple Smart Watch', 'Black', 'N/A', 84752, 2, '2024-03-10 05:11:56', '2024-03-10 05:11:56'),
(3, 4, 14, 'Fashionable 3 Pic', 'Black', 'S', 2200, 1, '2024-03-10 08:28:23', '2024-03-10 08:28:23'),
(8, 7, 17, 'Men\'s Formal Suite', 'Green', 'XS', 4542, 2, '2024-03-10 14:21:56', '2024-03-10 14:21:56'),
(9, 8, 22, 'Samsung Smart Watch w23', 'Green', 'N/A', 113243, 2, '2024-03-11 14:44:51', '2024-03-11 14:44:51'),
(10, 9, 17, 'Men\'s Formal Suite', 'Green', 'XS', 4542, 2, '2024-03-14 13:25:33', '2024-03-14 13:25:33'),
(11, 10, 15, 'Arong Kammess', 'White', 'S', 1677, 1, '2024-03-14 13:29:08', '2024-03-14 13:29:08'),
(12, 11, 18, 'Men\'s Denim Shirt', 'Black', 'S', 1000, 1, '2024-03-14 13:33:15', '2024-03-14 13:33:15'),
(13, 1, 22, 'Samsung Smart Watch w23', 'Black', 'N/A', 113243, 1, '2024-03-14 13:48:23', '2024-03-14 13:48:23'),
(14, 2, 19, 'Kid\'s Shirt', 'Black', 'L', 1200, 2, '2024-03-14 13:50:43', '2024-03-14 13:50:43'),
(15, 3, 19, 'Kid\'s Shirt', 'Black', 'M', 1200, 1, '2024-03-14 13:51:49', '2024-03-14 13:51:49'),
(16, 5, 19, 'Kid\'s Shirt', 'Black', 'L', 1200, 5, '2024-03-14 14:01:41', '2024-03-14 14:01:41'),
(17, 6, 18, 'Men\'s Denim Shirt', 'Black', 'XL', 1000, 1, '2024-03-14 14:37:17', '2024-03-14 14:37:17'),
(18, 9, 15, 'Arong Kammess', 'Black', 'S', 1677, 1, '2024-03-14 14:40:17', '2024-03-14 14:40:17'),
(19, 11, 18, 'Men\'s Denim Shirt', 'Black', 'S', 1000, 1, '2024-03-14 14:42:18', '2024-03-14 14:42:18'),
(20, 12, 19, 'Kid\'s Shirt', 'Black', 'M', 1200, 1, '2024-03-14 14:45:08', '2024-03-14 14:45:08'),
(21, 13, 20, 'Kid\'s Casuals Pant', 'Magenta', 'S', 2544, 1, '2024-03-14 14:47:46', '2024-03-14 14:47:46'),
(22, 14, 21, 'Kid\'s Fidget Spinner', 'Black', 'N/A', 1324, 5, '2024-03-14 14:52:00', '2024-03-14 14:52:00'),
(23, 15, 22, 'Samsung Smart Watch w23', 'Blue', 'N/A', 113243, 1, '2024-03-15 02:28:21', '2024-03-15 02:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `image` text NOT NULL,
  `regular_price` double(11,2) NOT NULL,
  `selling_price` double(11,2) NOT NULL,
  `stock_amount` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `featured_status` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `short_description`, `long_description`, `image`, `regular_price`, `selling_price`, `stock_amount`, `hit_count`, `sales_count`, `featured_status`, `status`, `created_at`, `updated_at`) VALUES
(14, 16, 9, 14, 6, 'Fashionable 3 Pic', 'fs2picuniqlo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"text-align: left; color: rgb(8, 8, 8); font-size: 11.3pt; white-space: pre;\"><font face=\"Arial\"><b></b></font></div><span style=\"font-size:18px;\"><b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit.<br>\r\n Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia<br>\r\n nisi quasi quidem quos reiciendis sed tempora, totam veniam?</span><div style=\"text-align: left; color: rgb(8, 8, 8); font-size: 11.3pt; white-space: pre;\"><font face=\"Arial\"></font></div></div>', 'upload/product-images/1709927381.jpeg', 2564.00, 2200.00, 42, 0, 0, 1, 1, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(15, 16, 10, 16, 6, 'Arong Kammess', 'aaa233kammes2023', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-size: 11.3pt; white-space: pre;\"><font face=\"Arial\"><b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere </font></div><div style=\"color: rgb(8, 8, 8); font-size: 11.3pt; white-space: pre;\"><font face=\"Arial\">iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</font></div></div>', 'upload/product-images/1709927500.jpeg', 2243.00, 1677.00, 223, 0, 0, 1, 1, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(16, 17, 11, 15, 6, 'Men\'s Casual Shirt', 'm22en\'shirt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709927722.jpg', 5645.00, 4444.00, 111, 0, 0, 1, 1, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(17, 17, 12, 16, 6, 'Men\'s Formal Suite', 'huehude23', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709927802.jpeg', 7899.00, 4542.00, 202, 0, 0, 1, 1, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(18, 17, 13, 17, 6, 'Men\'s Denim Shirt', 'mern238478inc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709927885.jpg', 1236.00, 1000.00, 44, 0, 0, 1, 1, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(19, 18, 14, 15, 6, 'Kid\'s Shirt', 'kkssydh3240cdxc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709928054.jpg', 1233.00, 1200.00, 442, 0, 0, 1, 1, '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(20, 18, 14, 17, 6, 'Kid\'s Casuals Pant', 'aidsfhasi232e4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709928140.jpeg', 7892.00, 2544.00, 78, 0, 0, 1, 1, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(21, 18, 15, 18, 6, 'Kid\'s Fidget Spinner', '1234dsdsa3214gre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709928238.jpeg', 6742.00, 1324.00, 652, 0, 0, 1, 1, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(22, 22, 20, 22, 6, 'Samsung Smart Watch w23', 'w23', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709928384.png', 123213.00, 113243.00, 22, 0, 0, 1, 1, '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(23, 19, 19, 21, 6, 'Apple Smart Watch', 'qfadf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?', '<div><div style=\"color: rgb(8, 8, 8); font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 11.3pt; white-space: pre;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum deleniti distinctio dolorum ea earum est facere iure labore libero mollitia nisi quasi quidem quos reiciendis sed tempora, totam veniam?</div></div>', 'upload/product-images/1709928457.jpg', 94631.00, 84752.00, 3, 0, 0, 1, 1, '2024-03-08 14:07:37', '2024-03-08 14:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(30, 14, 5, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(31, 14, 6, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(32, 14, 7, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(33, 14, 8, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(34, 15, 5, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(35, 15, 6, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(36, 15, 9, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(37, 15, 14, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(38, 16, 5, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(39, 16, 7, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(40, 16, 8, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(41, 16, 9, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(42, 16, 13, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(43, 17, 5, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(44, 17, 6, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(45, 17, 7, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(46, 17, 8, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(47, 18, 5, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(48, 18, 7, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(49, 18, 8, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(50, 18, 10, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(51, 18, 12, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(52, 19, 5, '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(53, 19, 7, '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(54, 19, 10, '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(55, 20, 6, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(56, 20, 9, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(57, 20, 12, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(58, 20, 14, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(59, 20, 16, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(60, 21, 5, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(61, 21, 6, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(62, 21, 7, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(63, 21, 9, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(64, 21, 10, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(65, 22, 5, '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(66, 22, 7, '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(67, 22, 8, '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(68, 23, 5, '2024-03-08 14:07:37', '2024-03-08 14:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_offers`
--

CREATE TABLE `product_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title_one` varchar(255) NOT NULL,
  `title_two` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_offers`
--

INSERT INTO `product_offers` (`id`, `product_id`, `title_one`, `title_two`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 19, 'Best Quality Shirt', 'Get up to 50% discount on first purchase.', '<div><br></div>', 'upload/product-banner-images/banner1.jpg', 1, '2024-03-14 03:05:28', '2024-03-14 03:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(31, 14, 5, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(32, 14, 7, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(33, 14, 8, '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(34, 15, 5, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(35, 15, 7, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(36, 15, 8, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(37, 15, 9, '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(38, 16, 5, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(39, 16, 7, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(40, 16, 8, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(41, 16, 9, '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(42, 17, 5, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(43, 17, 6, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(44, 17, 7, '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(45, 18, 5, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(46, 18, 7, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(47, 18, 8, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(48, 18, 9, '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(49, 19, 7, '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(50, 19, 8, '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(51, 20, 5, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(52, 20, 6, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(53, 20, 7, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(54, 20, 8, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(55, 20, 9, '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(56, 21, 10, '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(57, 22, 10, '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(58, 23, 10, '2024-03-08 14:07:37', '2024-03-08 14:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_images`
--

CREATE TABLE `product_sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_images`
--

INSERT INTO `product_sub_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(19, 14, 'upload/product-sub-images/49684065.jpeg', '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(20, 14, 'upload/product-sub-images/47301030.jpeg', '2024-03-08 13:49:41', '2024-03-08 13:49:41'),
(21, 15, 'upload/product-sub-images/36134026.jpeg', '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(22, 15, 'upload/product-sub-images/17557761.jpeg', '2024-03-08 13:51:40', '2024-03-08 13:51:40'),
(23, 16, 'upload/product-sub-images/24740619.jpg', '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(24, 16, 'upload/product-sub-images/1475807.jpg', '2024-03-08 13:55:22', '2024-03-08 13:55:22'),
(25, 17, 'upload/product-sub-images/39617172.jpg', '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(26, 17, 'upload/product-sub-images/38178150.jpg', '2024-03-08 13:56:42', '2024-03-08 13:56:42'),
(27, 18, 'upload/product-sub-images/47977785.jpeg', '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(28, 18, 'upload/product-sub-images/13611331.jpg', '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(29, 18, 'upload/product-sub-images/39713325.jpg', '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(30, 18, 'upload/product-sub-images/31022913.jpg', '2024-03-08 13:58:05', '2024-03-08 13:58:05'),
(31, 19, 'upload/product-sub-images/7794080.jpeg', '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(32, 19, 'upload/product-sub-images/28595513.jpg', '2024-03-08 14:00:54', '2024-03-08 14:00:54'),
(33, 20, 'upload/product-sub-images/16672770.jpg', '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(34, 20, 'upload/product-sub-images/35423445.jpeg', '2024-03-08 14:02:20', '2024-03-08 14:02:20'),
(35, 21, 'upload/product-sub-images/18098837.jpeg', '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(36, 21, 'upload/product-sub-images/49241955.jpg', '2024-03-08 14:03:58', '2024-03-08 14:03:58'),
(37, 22, 'upload/product-sub-images/14000622.png', '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(38, 22, 'upload/product-sub-images/29847969.jpg', '2024-03-08 14:06:24', '2024-03-08 14:06:24'),
(39, 23, 'upload/product-sub-images/1673181.png', '2024-03-08 14:07:37', '2024-03-08 14:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ooy6FZDAPacr6mMaharU5wLrMYFRVVY26wR0CyUW', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnJlVmNmTUZTMDlDN1hoSHljTjQ0cThKNzlyT1BmV3ZQdXJ4djRoVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3Qvc2hvcHdpc2UtZWNvbW1lcmNlLWFwcC9wdWJsaWMvYWJvdXQtdXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1711436420),
('ZDRjakoRckyEyar1mTNja0Z5W5bbBr8AVWpGuPgv', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibG10V0VXZXR3SWtDWkpvRnliazBwSUZDZkZPc3dzM2ZkNlpWdGVOaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3Qvc2hvcHdpc2UtZWNvbW1lcmNlLWFwcC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJGhDMkpBR0tVaGxGU2ZiRlBtU3lSNi5NVjJYdU1JdnQ5NEVzeFV0TzR0bHc0VmJLSk8xUDZxIjt9', 1711367613);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text NOT NULL,
  `slogan` text NOT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `support_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `support_email` varchar(255) DEFAULT NULL,
  `office_hour` varchar(255) DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `x_link` text DEFAULT NULL,
  `linkedin_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `google_map_api_link` text DEFAULT NULL,
  `android_app_image` text DEFAULT NULL,
  `android_app_url` text DEFAULT NULL,
  `ios_app_image` text DEFAULT NULL,
  `ios_app_url` text DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `logo_jpg` text DEFAULT NULL,
  `logo_png` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `payment_method_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `slogan`, `contact_phone`, `support_phone`, `contact_email`, `support_email`, `office_hour`, `facebook_link`, `x_link`, `linkedin_link`, `youtube_link`, `instagram_link`, `google_map_api_link`, `android_app_image`, `android_app_url`, `ios_app_image`, `ios_app_url`, `company_address`, `logo_jpg`, `logo_png`, `favicon`, `title`, `payment_method_image`, `created_at`, `updated_at`) VALUES
(1, 'JKF Ecommerce LTD.', 'Where you find shopping market in your phone', '01701057048', '01840190054', 'shopwise.ecommerce@gmail.com', 'support.shopwise@gmail.com', '08:00AM to 10:00PM, Sun-Thu', 'https://www.facebook.com/shopwise', 'https://www.x.com/shopwise', 'https://www.linkedin.com/shopwise', 'https://www.youtube.com/shopwise', 'https://www.instagram.com/shopwise', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.352698619199!2d90.4217451!3d23.734799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8435afbf2bf%3A0x9b0f1511edf88e73!2sAGB%20Colony%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1711354637096!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'upload/settings-images/185984.png', 'https://play.google.com/store/shopwise', 'upload/settings-images/34678.png', 'https://www.apple.com/app-store/shopwise', '119/A, 64F, AGB Colony, Motijheel, Dhaka', 'upload/settings-images/162758.png', 'upload/settings-images/109949.png', 'upload/settings-images/362297.png', 'Number 1 ecommerce website in Bangladesh', 'upload/settings-images/437634.png', '2024-03-25 02:28:19', '2024-03-25 03:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'S', 'S', 'Small Size', 1, '2024-03-08 13:39:22', '2024-03-08 13:40:58'),
(6, 'XS', 'XS', 'Extra Small', 1, '2024-03-08 13:40:05', '2024-03-08 13:41:12'),
(7, 'M', 'M', 'Medium', 1, '2024-03-08 13:41:34', '2024-03-08 13:41:34'),
(8, 'L', 'L', 'Large', 1, '2024-03-08 13:41:47', '2024-03-08 13:41:47'),
(9, 'XL', 'XL', 'Extra Large', 1, '2024-03-08 13:42:09', '2024-03-08 13:42:09'),
(10, 'N/A', 'N/A', 'Not applicable for all', 1, '2024-03-08 13:42:54', '2024-03-08 13:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 16, 'Fashion', 'Fashion', 'upload/sub-category-images/blog_small_img6-1.jpg', 1, '2024-03-08 13:05:04', '2024-03-08 13:05:04'),
(10, 16, 'Formal Wear', 'Formal Wear', 'upload/sub-category-images/blog_small_img7.jpg', 1, '2024-03-08 13:05:31', '2024-03-08 13:05:31'),
(11, 17, 'Casual Wear', 'Casual Wear', 'upload/sub-category-images/blog_small_img2.jpg', 1, '2024-03-08 13:06:13', '2024-03-08 13:06:13'),
(12, 17, 'Formal Wear', 'Formal Wear', 'upload/sub-category-images/product_img2.jpg', 1, '2024-03-08 13:06:46', '2024-03-08 13:06:46'),
(13, 17, 'Denim', 'Denim', 'upload/sub-category-images/product_img8.jpg', 1, '2024-03-08 13:07:22', '2024-03-08 13:07:22'),
(14, 18, 'Clothing', 'Clothing', 'upload/sub-category-images/product_img4.jpg', 1, '2024-03-08 13:07:58', '2024-03-08 13:07:58'),
(15, 18, 'Toys', 'Toys', 'upload/sub-category-images/cat_img5.png', 1, '2024-03-08 13:08:21', '2024-03-08 13:08:21'),
(16, 18, 'Sports Gear', 'Sports Gear', 'upload/sub-category-images/el_img12.jpg', 1, '2024-03-08 13:09:02', '2024-03-08 13:09:02'),
(17, 19, 'Bags and Purses', 'Bags and Purses', 'upload/sub-category-images/product_img5.jpg', 1, '2024-03-08 13:10:34', '2024-03-08 13:10:34'),
(18, 19, 'Sunglasses', 'Sunglasses', 'upload/sub-category-images/blog_small_img8.jpg', 1, '2024-03-08 13:11:36', '2024-03-08 13:11:36'),
(19, 19, 'Electronics', 'Electronics', 'upload/sub-category-images/el_hover_img6.jpg', 1, '2024-03-08 13:12:43', '2024-03-08 13:12:43'),
(20, 22, 'Smart Watch', 'Smart Watch', 'upload/sub-category-images/banner14.jpg', 1, '2024-03-08 13:13:09', '2024-03-08 13:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Kilogram', 'KG', 'Kilogram', 1, '2024-03-08 13:29:28', '2024-03-08 13:29:28'),
(5, 'Litre', 'L', 'Litre', 1, '2024-03-08 13:29:47', '2024-03-08 13:29:47'),
(6, 'Piece', 'PCs', 'Piece', 1, '2024-03-08 13:30:18', '2024-03-08 13:30:18'),
(7, 'Feet', 'FT', 'Feet', 1, '2024-03-08 13:30:47', '2024-03-08 13:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `mobile`, `role`) VALUES
(1, 'Super Admin', 'superadmin@admin.com', NULL, '$2y$12$hC2JAGKUhlFSfbFPmSyR6.MV2XuMIvt94EsxUtO4tlw4VbKJO1P6q', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 09:21:16', '2024-03-02 09:21:16', NULL, 0),
(6, 'Nova', 'nova@nova.com', NULL, '$2y$12$XRFnYZR0TL0G2vfu6XNPzuU7IFMki/HPb7HJ0.GWNashnx2viebAe', NULL, NULL, NULL, NULL, NULL, 'upload/admin-user-images/1710435009.jpg', '2024-03-14 10:50:10', '2024-03-14 10:51:36', '01757582255', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_offers`
--
ALTER TABLE `product_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `product_offers`
--
ALTER TABLE `product_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
