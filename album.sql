-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 05:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

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
-- Table structure for table `main_album`
--

CREATE TABLE `main_album` (
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `m_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_album`
--

INSERT INTO `main_album` (`m_id`, `m_title`, `m_link`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Cricket', 'images/Main/1652070532-Men\'s Cricket.jpg', '2022-05-08 22:58:52', '2022-05-08 22:58:52'),
(2, 'Women\'s Cricket', 'images/Main/1652070597-Women\'s Cricket.jpg', '2022-05-08 22:59:57', '2022-05-08 22:59:57'),
(3, 'Men\'s Football', 'images/Main/1652070764-Men\'s Football.jpg', '2022-05-08 23:02:44', '2022-05-08 23:02:44'),
(4, 'Women\'s Football', 'images/Main/1652070786-Women\'s Football.jpg', '2022-05-08 23:03:06', '2022-05-08 23:03:06'),
(5, 'Men\'s Tennis', 'images/Main/1652071249-Men\'s Tennis.jpg', '2022-05-08 23:10:49', '2022-05-08 23:10:49'),
(6, 'Women\'s Tennis', 'images/Main/1652071919-Women\'s Tennis.jpg', '2022-05-08 23:21:59', '2022-05-08 23:21:59'),
(7, 'Men\'s Swimming', 'images/Main/1652072043-Men\'s Swimming.jpg', '2022-05-08 23:24:03', '2022-05-08 23:24:03'),
(8, 'Women\'s Swimming', 'images/Main/1652072064-Women\'s Swimming.jpg', '2022-05-08 23:24:24', '2022-05-08 23:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `main_video_album`
--

CREATE TABLE `main_video_album` (
  `mV_id` bigint(20) UNSIGNED NOT NULL,
  `mV_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mV_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_video_album`
--

INSERT INTO `main_video_album` (`mV_id`, `mV_title`, `mV_link`, `m_id`, `created_at`, `updated_at`) VALUES
(1, 'M S Dhoni', 'https://www.youtube.com/embed/w2AECS0tQ-U', 1, '2022-05-08 23:39:14', '2022-05-08 23:39:14'),
(2, 'Rohit Sharma', 'https://www.youtube.com/embed/P0swsSZnYDA', 1, '2022-05-08 23:41:34', '2022-05-08 23:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `main__img_album`
--

CREATE TABLE `main__img_album` (
  `mI_id` bigint(20) UNSIGNED NOT NULL,
  `mI_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mI_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main__img_album`
--

INSERT INTO `main__img_album` (`mI_id`, `mI_title`, `mI_link`, `m_id`, `created_at`, `updated_at`) VALUES
(1, 'Virat Kohli', '/images/Main/1652072802-Virat Kohli.jpg', 1, '2022-05-08 23:36:42', '2022-05-08 23:36:42'),
(2, 'M S Dhoni', '/images/Main/1652072858-M S Dhoni.jpg', 1, '2022-05-08 23:37:38', '2022-05-08 23:37:38');

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
(5, '2022_03_10_100945_create_main_album_table', 1),
(6, '2022_03_10_102754_create_sub_album_table', 1),
(7, '2022_03_14_042740_create_sub_img_album_table', 1),
(8, '2022_03_14_043512_create_sub_video_album_table', 1),
(9, '2022_03_18_064710_create_main_video_album_table', 1),
(10, '2022_03_18_065022_create_main__img_album_table', 1);

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
-- Table structure for table `sub_album`
--

CREATE TABLE `sub_album` (
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_album`
--

INSERT INTO `sub_album` (`s_id`, `s_title`, `s_link`, `m_id`, `created_at`, `updated_at`) VALUES
(1, 'Indian Cricket', '/images/Sub/1652072424-Indian Cricket.jpg', 1, '2022-05-08 23:30:24', '2022-05-08 23:30:24'),
(2, 'England Cricket Team', '/images/Sub/1652072509-England Cricket Team.jpg', 1, '2022-05-08 23:31:49', '2022-05-08 23:31:49'),
(3, 'Cricket Kasoti', '/images/Sub/1652072691-Cricket Kasoti.jpg', 1, '2022-05-08 23:34:51', '2022-05-08 23:34:51'),
(4, 'IPL Cricket', '/images/Sub/1652072747-IPL Cricket.jpg', 1, '2022-05-08 23:35:47', '2022-05-08 23:35:47'),
(5, 'Michael Phelps', '/images/Sub/1652243429-Michael Phelps.jpg', 7, '2022-05-10 23:00:29', '2022-05-10 23:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `sub_img_album`
--

CREATE TABLE `sub_img_album` (
  `sI_id` bigint(20) UNSIGNED NOT NULL,
  `sI_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sI_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_img_album`
--

INSERT INTO `sub_img_album` (`sI_id`, `sI_title`, `sI_link`, `s_id`, `created_at`, `updated_at`) VALUES
(1, 'Michael Phelps Butterfly Event', '/images/SubSub/1652243662-Michael Phelps Butterfly Event.jpg', 5, '2022-05-10 23:04:22', '2022-05-10 23:04:22'),
(2, 'RCB VS CSK Match', '/images/SubSub/1652244048-RCB VS CSK Match.jpg', 4, '2022-05-10 23:10:48', '2022-05-10 23:10:48'),
(3, 'Virat Kohli', '/images/SubSub/1652245626-Virat Kohli.jpg', 1, '2022-05-10 23:37:06', '2022-05-10 23:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_video_album`
--

CREATE TABLE `sub_video_album` (
  `sV_id` bigint(20) UNSIGNED NOT NULL,
  `sV_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sV_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_video_album`
--

INSERT INTO `sub_video_album` (`sV_id`, `sV_title`, `sV_link`, `s_id`, `created_at`, `updated_at`) VALUES
(1, 'Michael Phelps 100m Butterfly', 'https://www.youtube.com/embed/w4E5mqGnzIc', 5, '2022-05-10 23:05:52', '2022-05-10 23:07:33'),
(2, 'RCB Dressing Room Celebrations', 'https://www.youtube.com/embed/6ReKIBE4JA0', 4, '2022-05-10 23:12:27', '2022-05-10 23:12:27');

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
(1, 'Admin', 'admin@gmail.com', '2022-05-05 04:24:09', 'admin@1234', 'admin', '2022-05-03 04:24:09', '2022-05-04 04:24:09');

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
-- Indexes for table `main_album`
--
ALTER TABLE `main_album`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `main_video_album`
--
ALTER TABLE `main_video_album`
  ADD PRIMARY KEY (`mV_id`),
  ADD KEY `main_video_album_m_id_foreign` (`m_id`);

--
-- Indexes for table `main__img_album`
--
ALTER TABLE `main__img_album`
  ADD PRIMARY KEY (`mI_id`),
  ADD KEY `main__img_album_m_id_foreign` (`m_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_album`
--
ALTER TABLE `sub_album`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `sub_album_m_id_foreign` (`m_id`);

--
-- Indexes for table `sub_img_album`
--
ALTER TABLE `sub_img_album`
  ADD PRIMARY KEY (`sI_id`),
  ADD KEY `sub_img_album_s_id_foreign` (`s_id`);

--
-- Indexes for table `sub_video_album`
--
ALTER TABLE `sub_video_album`
  ADD PRIMARY KEY (`sV_id`),
  ADD KEY `sub_video_album_s_id_foreign` (`s_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_album`
--
ALTER TABLE `main_album`
  MODIFY `m_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main_video_album`
--
ALTER TABLE `main_video_album`
  MODIFY `mV_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main__img_album`
--
ALTER TABLE `main__img_album`
  MODIFY `mI_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_album`
--
ALTER TABLE `sub_album`
  MODIFY `s_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_img_album`
--
ALTER TABLE `sub_img_album`
  MODIFY `sI_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_video_album`
--
ALTER TABLE `sub_video_album`
  MODIFY `sV_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `main_video_album`
--
ALTER TABLE `main_video_album`
  ADD CONSTRAINT `main_video_album_m_id_foreign` FOREIGN KEY (`m_id`) REFERENCES `main_album` (`m_id`);

--
-- Constraints for table `main__img_album`
--
ALTER TABLE `main__img_album`
  ADD CONSTRAINT `main__img_album_m_id_foreign` FOREIGN KEY (`m_id`) REFERENCES `main_album` (`m_id`);

--
-- Constraints for table `sub_album`
--
ALTER TABLE `sub_album`
  ADD CONSTRAINT `sub_album_m_id_foreign` FOREIGN KEY (`m_id`) REFERENCES `main_album` (`m_id`);

--
-- Constraints for table `sub_img_album`
--
ALTER TABLE `sub_img_album`
  ADD CONSTRAINT `sub_img_album_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `sub_album` (`s_id`);

--
-- Constraints for table `sub_video_album`
--
ALTER TABLE `sub_video_album`
  ADD CONSTRAINT `sub_video_album_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `sub_album` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
