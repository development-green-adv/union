-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 09:38 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `union`
--

-- --------------------------------------------------------

--
-- Table structure for table `baners`
--

CREATE TABLE `baners` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `subtitle` varchar(1500) DEFAULT NULL,
  `link` varchar(800) DEFAULT NULL,
  `link_name` varchar(255) DEFAULT NULL,
  `baner_image` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `position` int(255) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `category_keywords` varchar(255) DEFAULT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `parent_cat` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `alias`, `category_keywords`, `category_description`, `lang`, `parent_cat`, `position`, `status`, `created_at`, `updated_at`) VALUES
(18, 'OSNOVNE STUDIJE', 'osnovne-studije', NULL, NULL, 'sr', '0', '0', '1', '2019-12-18 09:34:29', '2019-12-18 09:34:29'),
(19, 'MASTER STUDIJE', 'master-studije', NULL, NULL, 'sr', '0', '1', '1', '2019-12-18 09:34:38', '2019-12-18 09:34:38'),
(20, 'DOKTORSKE STUDIJE', 'doktorske-studije', NULL, NULL, 'sr', '0', '2', '1', '2019-12-18 09:34:47', '2019-12-18 09:34:47'),
(21, 'Podkategorija osnovnih studija', 'podkategorija-osnovnih-studija', NULL, NULL, 'sr', '18', '0', '1', '2019-12-18 09:50:56', '2019-12-18 09:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nastavas`
--

CREATE TABLE `nastavas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `prof_text` varchar(2500) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pdf_link` varchar(500) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nastavas`
--

INSERT INTO `nastavas` (`id`, `name`, `prof_text`, `email`, `pdf_link`, `main_image`, `status`, `lang`, `position`, `created_at`, `updated_at`) VALUES
(4, 'Marko Taskovic', '<p>dasd sadas dsa</p>', 'marko.taskovic@green.rs', 'asdassadasdsadasdsada', NULL, '1', 'sr', '0', '2019-12-23 12:09:43', '2019-12-23 12:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(1500) DEFAULT NULL,
  `alias` varchar(1500) DEFAULT NULL,
  `page_lang` varchar(500) DEFAULT NULL,
  `page_text` varchar(3000) DEFAULT NULL,
  `page_category` varchar(500) DEFAULT NULL,
  `page_type` varchar(500) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `image_galley` varchar(2000) DEFAULT NULL,
  `video_gallery` varchar(2000) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `position` int(255) DEFAULT NULL,
  `na_pocetnoj` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `alias`, `page_lang`, `page_text`, `page_category`, `page_type`, `main_image`, `image_galley`, `video_gallery`, `status`, `position`, `na_pocetnoj`, `created_at`, `updated_at`) VALUES
(6, 'test stranica', 'test-stranica', 'sr', '<p>asd asd sadas</p>', '21', 'text', NULL, '', '', '1', NULL, NULL, '2019-12-25 09:22:29', '2019-12-25 09:22:29');

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
(1, 'Marko', 'markotaskovic93@gmail.com', NULL, '$2y$10$V.LuVCT61kX/Q1D1Eheli.kHDiEWsGCQQqNHzKrq1UFdwI4Iyvd4W', NULL, '2019-11-19 13:52:33', '2019-11-19 13:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baners`
--
ALTER TABLE `baners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nastavas`
--
ALTER TABLE `nastavas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- AUTO_INCREMENT for table `baners`
--
ALTER TABLE `baners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `nastavas`
--
ALTER TABLE `nastavas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
