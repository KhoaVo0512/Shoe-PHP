-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2021 lúc 12:17 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes`
CREATE DATABASE IF NOT EXISTS `shoes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `shoes`;
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID',
  `user_id` bigint(20) NOT NULL,
  `full_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `user_id`, `full_name`, `phone`, `location`, `avatar`, `avatar_status`, `created_at`, `updated_at`) VALUES
(8, 5, 'vo dang khoa', '0788321312', 'Ap 2, xa Hoa An, PH, HG', 'assets/images/download\\nen_gmail.jpg', 1, '2021-12-18 08:05:10', '2021-12-18 08:05:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên nhãn hiệu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name_brand`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vans', NULL, NULL, NULL),
(2, 'Converse', NULL, NULL, NULL),
(3, 'Adidas', NULL, NULL, NULL),
(4, 'Nike', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên sản phẩm',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` bigint(100) DEFAULT 0,
  `image_1` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand_id`, `user_id`, `name`, `price`, `discount`, `image_1`, `image_2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 'Vans UA SK8-Hi Racer Edge', '120', 0, 'assets/images/product-4\\product-1.jpg', 'assets/images/product-4\\product-2.jpg', NULL, NULL, NULL),
(2, 1, 3, 'Vans Old Skool Multi Animal', '102', 0, 'assets/images/product-4\\product-3.jpg', 'assets/images/product-4\\product-4.jpg', NULL, NULL, NULL),
(3, 1, 3, 'Vans UA Old Skool Los Vans', '100', 20, 'assets/images/product-4\\product-5.jpg', 'assets/images/product-4\\product-6.jpg', NULL, NULL, NULL),
(4, 1, 3, 'Vans UA Old Skool Packing Tape', '120', 20, 'assets/images/product-4\\product-7.jpg', 'assets/images/product-4\\product-8.jpg', NULL, NULL, NULL),
(5, 1, 3, 'Vans UA SK8-Hi Alien Ghosts', '90', 0, 'assets/images/product-4\\product-9.jpg', 'assets/images/product-4\\product-10.jpg', NULL, NULL, NULL),
(6, 1, 3, 'Vans UA Old Skool Mix & Match', '82', 0, 'assets/images/product-4\\product-11.jpg', 'assets/images/product-4\\product-12.jpg', NULL, NULL, NULL),
(7, 2, 3, 'Converse 1970s Archive Paint Splatter', '100', 0, 'assets/images/product-1\\product-1.jpg', 'assets/images/product-1\\product-2.jpg', NULL, NULL, NULL),
(8, 2, 3, 'Converse 1970s Valentine Day', '110', 0, 'assets/images/product-1\\product-3.jpg', 'assets/images/product-1\\product-4.jpg', NULL, NULL, NULL),
(9, 2, 3, 'Converse Chuck Taylor All Star Logo Play', '120', 30, 'assets/images/product-1\\product-5.jpg', 'assets/images/product-1\\product-6.jpg', NULL, NULL, NULL),
(10, 2, 3, 'Chuck Taylor All Star Re-new', '90', 20, 'assets/images/product-1\\product-7.jpg', 'assets/images/product-1\\product-8.jpg', NULL, NULL, NULL),
(11, 2, 3, 'Converse Chuck Double Upper Logo Play', '60', 0, 'assets/images/product-1\\product-9.jpg', 'assets/images/product-1\\product-10.jpg', NULL, NULL, NULL),
(12, 2, 3, 'Converse Chuck Taylor All Star 1970s', '120', 0, 'assets/images/product-1\\product-11.jpg', 'assets/images/product-1\\product-12.jpg', NULL, NULL, NULL),
(13, 3, 3, 'Forum Low Trae Young Shoes', '100', 0, 'assets/images/product-2\\product-1.jpg', 'assets/images/product-2\\product-2.jpg', NULL, NULL, NULL),
(14, 3, 3, 'T-MAC 3 Restomod Shoes', '130', 0, 'assets/images/product-2\\product-3.jpg', 'assets/images/product-2\\product-4.jpg', NULL, NULL, NULL),
(15, 3, 3, 'Dame 7 Extply Shoes', '130', 20, 'assets/images/product-2\\product-5.jpg', 'assets/images/product-2\\product-6.jpg', NULL, NULL, NULL),
(16, 3, 3, 'Trae Young 1 Shoes', '140', 20, 'assets/images/product-2\\product-7.jpg', 'assets/images/product-2\\product-8.jpg', NULL, NULL, NULL),
(17, 3, 3, 'Exhibit A Shoes', '110', 0, 'assets/images/product-2\\product-9.jpg', 'assets/images/product-2\\product-10.jpg', NULL, NULL, NULL),
(18, 3, 3, 'Forum Mid Shoes', '110', 0, 'assets/images/product-2\\product-11.jpg', 'assets/images/product-2\\product-12.jpg', NULL, NULL, NULL),
(19, 4, 3, 'Air Jordan 11 Cool Grey', '290', 0, 'assets/images/product-3\\product-1.jpg', 'assets/images/product-3\\product-2.jpg', NULL, NULL, NULL),
(20, 4, 3, 'Air Jordan 3 Retro SE', '259', 0, 'assets/images/product-3\\product-3.png', 'assets/images/product-3\\product-4.png', NULL, NULL, NULL),
(21, 4, 3, 'Jordan Delta 2', '190', 20, 'assets/images/product-3\\product-5.png', 'assets/images/product-3\\product-6.png', NULL, NULL, NULL),
(22, 4, 3, 'Air Jordan 1 Mid SE', '200', 10, 'assets/images/product-3\\product-7.png', 'assets/images/product-3\\product-8.png', NULL, NULL, NULL),
(23, 4, 3, 'Nike Air Max Dawn', '110', 0, 'assets/images/product-3\\product-9.png', 'assets/images/product-3\\product-10.png', NULL, NULL, NULL),
(24, 4, 3, 'Jordan ADG 3', '200', 0, 'assets/images/product-3\\product-11.png', 'assets/images/product-3\\product-12.png', NULL, NULL, NULL),
(39, 3, 3, 'Adidas Low', '195', 20, 'assets/images/product-2\\adidas9.jpg', 'assets/images/product-2\\adidas8.jpg', '2021-12-18 08:16:09', '2021-12-18 08:16:09', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID',
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email đăng ký',
  `role` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'khoa4123', '$2y$12$oBYzYvyUD8YRDlqlhi3BhuMHLp9thXOQCghVZP9AHHCrkp4.tcJdi', 'khoa@gmail.com', 1, '2021-12-07 09:06:07', '2021-12-08 00:00:14', NULL),
(4, 'khoa1234', '$2y$12$1xekYlELwyjEXgCYTYb6QeG9UUamzP6M9Gx4QAWIdy7x6ns79yvoK', 'vokhoa01@gmail.com', 1, '2021-12-08 03:08:32', '2021-12-08 03:08:32', NULL),
(5, 'khoa12345', '$2y$12$zpvOkQ18a8kTfsPd4w.ro.W1WF8XSSl7bDsC1j7ssOgC7ltlJS0Ra', 'khoa@gmail.com', 0, '2021-12-16 06:32:29', '2021-12-18 07:45:57', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_brands_1` (`brand_id`),
  ADD KEY `fk_products_user_1` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
