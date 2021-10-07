-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 10:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `department`, `email`, `password`, `website`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Sj', 'Admin', 's2@gmail.com', '12345678', 'www.tms.com', '81629974165.png', '2021-08-26 05:36:05', '2021-08-26 05:36:05'),
(4, 'admin', 'SQA', 'admin@admin.com', '12345678', 'www.tsm.com', '151629974228.png', '2021-08-26 05:37:08', '2021-08-26 05:37:08'),
(5, 'Asad', 'Developer', 'asad@gmail.com', '12345678', 'www.tms.com', 'apple1630066095.png', '2021-08-27 07:08:15', '2021-08-27 07:09:02');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_24_070443_create_sessions_table', 1),
(7, '2021_08_26_093901_create_clients_table', 2),
(8, '2021_08_26_115355_create_roles_table', 3),
(11, '2021_08_30_080951_update_users_table_add_phone_field', 4),
(12, '2021_08_30_095540_create_projects_table', 5),
(13, '2021_09_01_071927_create_tasks_table', 6),
(14, '2021_09_02_115118_update_roles_table', 7),
(15, '2021_09_06_055816_update_users_table_add_department_field', 8),
(16, '2021_09_07_110835_update_tasks_table_add_status', 9),
(17, '2021_09_09_065210_update_tasks_table_add_image', 10);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clients_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `clients_name`, `users_name`, `created_at`, `updated_at`) VALUES
(1, 'F&H', '11', '6', '2021-08-30 05:49:57', '2021-09-06 01:51:35'),
(3, 'Asad', '11', '8', '2021-08-30 06:21:52', '2021-09-08 05:18:47'),
(5, 'admin', '3', '15', '2021-08-30 06:44:30', '2021-09-13 03:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permission`, `total_permission`, `description`, `created_at`, `updated_at`) VALUES
(15, 'Admin', 'Manage Calendar View,Manage Clients,Manage User,Manage Roles,Manage Tasks,Manage Projects', '6', 'These are for admin', '2021-09-03 01:41:05', '2021-09-03 01:41:05'),
(16, 'User', 'Manage Calendar View,Manage Clients,Manage User,Manage Tasks', '4', 'These are for User', '2021-09-03 01:42:06', '2021-09-03 01:47:16'),
(17, 'Client', 'Manage Calendar View,Manage Clients,Manage Tasks', '3', 'These are for client', '2021-09-03 01:43:20', '2021-09-03 01:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ASlObzNFBLfzco3s0WAEx58rz2gA8ybVLSXm8osm', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiakszdFhIODE3TkM3eUFmU3VsbWZCVzlSTXBoQXhRTmtMR2d2NmliaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi90YXNrIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NztzOjU6InV0eXBlIjtzOjM6IkFETSI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRFc0hocGcub28xQVd6bEs2UWVNU3YuQXd2cUlKVUNoWDk3TnltYjlkL2J0ZmtHVEJSUzdlZSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkRXNIaHBnLm9vMUFXemxLNlFlTVN2LkF3dnFJSlVDaFg5N055bWI5ZC9idGZrR1RCUlM3ZWUiO30=', 1631520784);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `projects`, `priority`, `due_date`, `assignee`, `tags`, `Description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(18, 'web development', '1', 4, '2021-09-30T17:50', '6', 'Good', '123', '1', NULL, '2021-09-06 07:51:00', '2021-09-09 02:19:50'),
(19, 'cloud computing research paper', '3', 3, '2021-09-25T17:52', '6', 'Important', '123456', '1', NULL, '2021-09-06 07:52:44', '2021-09-08 06:27:33'),
(21, 'asd', '1', 3, '2021-09-24T15:00', '6', 'Good', '12345', '0', NULL, '2021-09-08 05:00:21', '2021-09-08 06:20:54'),
(22, 'web development', '5', 2, '2021-09-24T15:02', '6', 'Bad', 'roject National logistics\r\n\r\nBrief About company:\r\nThe National Transport deals in transportation of goods from country to country. They need an ERP web application, a website and mobile app to have centralize system for all the process.\r\n\r\nDrivers will be assigned by national transport co person from the website it self\r\n\r\nnotifications should be sent via email or whatsapp from national transport to drivers. \r\n\r\nThe project is divided into three portions\r\n\r\nNumber 1:\r\nWEBSITE: The website should be developed in laravel platform with functionality where customer can visit and register themselves to place an order if they tend to deliver bulk package from Kuwait to other middle east countries. On the other hand, driver get register with National transport and get benefi', '1', NULL, '2021-09-08 05:04:50', '2021-09-13 03:01:03'),
(25, 'edisontaxgroup', '1', 4, '2021-09-25T15:48', '6', 'Good', 'roject National logistics\r\n\r\nBrief About company:\r\nThe National Transport deals in transportation of goods from country to country. They need an ERP web application, a website and mobile app to have centralize system for all the process.\r\n\r\nDrivers will be assigned by national transport co person from the website it self\r\n\r\nnotifications should be sent via email or whatsapp from national transport to drivers. \r\n\r\nThe project is divided into three portions\r\n\r\nNumber 1:\r\nWEBSITE: The website should be developed in laravel platform with functionality where customer can visit and register themselves to place an order if they tend to deliver bulk package from Kuwait to other middle east countries. On the other hand, driver get register with National transport and get benefi', '0', NULL, '2021-09-08 05:48:32', '2021-09-08 07:24:16'),
(26, 'aadsisf', '3', 2, '2021-09-30T11:17', '8', 'important', 'priority', '0', NULL, '2021-09-09 01:18:21', '2021-09-09 01:38:33'),
(33, 'web development', '1', 4, '2021-09-25T16:23', '6', 'Important', '123456789', '0', '[\"31631188287.png\",\"131631188287.png\",\"141631188287.png\"]', '2021-09-09 06:23:50', '2021-09-09 07:00:44'),
(35, 'saklda', '1', 3, '2021-09-30T11:44', '15', 'Select Tags', 'adlkasdl', '0', '[\"111631515789.png\",\"121631515789.png\"]', '2021-09-13 01:45:18', '2021-09-13 01:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projects` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM For Admin and USR for user &CLI for client',
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `projects`, `roles`, `department`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `website`, `image`, `created_at`, `updated_at`) VALUES
(3, 'client', 12345678, 'client@gmail.com', NULL, '$2y$10$Pw/vLSJNuiNBS8YEEbXCfekE8r5XL3Eq2na3J/vmex9MPd.8b4kFy', '5', '17', 'SQA', NULL, NULL, NULL, NULL, NULL, 'CLI', 'www.tms.com', '51630567901.png', '2021-08-24 02:19:54', '2021-09-06 01:35:53'),
(6, 'abbas', 321459876, 'abbas@gmail.com', NULL, '$2y$10$DNNEsIEuL02I.HjTNSyytO53GJzvsyv0Odks9Bq/dv8kJz.OMPeHO', '3', '16', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', NULL, 'apple1630562793.png', '2021-09-02 01:06:33', '2021-09-03 02:18:24'),
(7, 'admin', 300357555, 'admin@admin.com', NULL, '$2y$10$EsHhpg.oo1AWzlK6QeMSv.AwvqIJUChX97Nymb9d/btfkGTBRS7ee', '1', '15', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', NULL, 'apple1630567345.png', '2021-09-02 02:22:25', '2021-09-03 02:19:12'),
(8, 'Asad', 300357555, 'asad@gmail.com', NULL, '$2y$10$7sSr7b7RM0AecfUdYEpFiu769wdeDa2X5TeCjiTnV63Aqyv49OlyO', '3', '16', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', NULL, '141630567601.png', '2021-09-02 02:26:41', '2021-09-03 02:20:19'),
(11, 'nabeel', NULL, 'nabeel@gmail.com', NULL, '$2y$10$pYqM91G05okSIc2uPNo6hufdbGzRr.OIzlBHb9o/fw.jEGC122Ww6', NULL, NULL, 'Developer', NULL, NULL, NULL, NULL, NULL, 'CLI', 'www.tms.com', 'apple1630909106.png', '2021-09-06 01:18:26', '2021-09-06 01:18:26'),
(15, 'Ali', 3885185489, 'ali@gmail.com', NULL, '$2y$10$C9yGgk0VuA9ii7oPq3dCoukZEKGv6sorHqTkEJ77p5Xkc7nRVzOTi', '5', '16', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', NULL, '141631514512.png', '2021-09-13 01:28:32', '2021-09-13 01:28:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
