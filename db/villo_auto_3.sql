-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2026 at 05:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villo_auto_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodies`
--

CREATE TABLE `bodies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bodies`
--

INSERT INTO `bodies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SUV', '2025-10-09 07:50:55', '2025-10-09 07:50:55'),
(2, 'Hatchback', '2025-10-09 07:51:02', '2025-10-09 07:51:02'),
(3, 'Sedan', '2025-10-09 07:51:07', '2025-10-09 07:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'White', '2025-10-09 07:51:13', '2025-10-09 07:51:13'),
(2, 'Red', '2025-10-09 07:51:17', '2025-10-09 07:51:17'),
(3, 'Black', '2025-10-09 07:51:23', '2025-10-09 07:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Brand New', '2025-10-09 07:49:55', '2025-11-22 10:00:25'),
(2, 'Used', '2025-10-09 07:50:00', '2025-10-09 07:50:00');

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
-- Table structure for table `import_inquiries`
--

CREATE TABLE `import_inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Honda', '2025-10-09 07:50:18', '2025-10-09 07:50:18'),
(2, 'Toyota', '2025-10-09 07:50:23', '2025-10-09 07:50:23'),
(3, 'Mitsubishi', '2025-10-09 07:50:33', '2025-10-09 07:50:33');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_07_09_135506_create_sessions_table', 1),
(7, '2025_07_26_161737_create_vehicles_table', 1),
(8, '2025_07_27_091505_create_makes_table', 1),
(9, '2025_07_27_091506_create_bodies_table', 1),
(10, '2025_07_27_091508_create_transmissions_table', 1),
(11, '2025_07_27_091509_create_conditions_table', 1),
(12, '2025_07_27_091510_create_colors_table', 1),
(13, '2025_07_27_091511_create_years_table', 1),
(14, '2025_10_09_052444_add_registered_year_to_vehicles_table', 2),
(15, '2025_10_09_054818_add_type_to_vehicles_table', 2),
(16, '2025_10_09_055427_add_trim_or_edition_to_vehicles_table', 2),
(17, '2025_10_09_055908_add_engine_capacity_to_vehicles_table', 2),
(18, '2025_10_09_060245_add_body_type_to_vehicles_table', 2),
(19, '2025_10_09_060807_add_fuel_type_to_vehicles_table', 2),
(20, '2025_10_09_061728_rename_year_to_manufactured_year_in_vehicles_table', 2),
(21, '2025_10_09_063736_rename_type_to_register_status_in_vehicles_table', 2),
(22, '2025_11_22_1231434_create_import_inquiries_table', 3),
(23, '2025_11_22_132118_create_notifications_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('01485e6f-4a4d-4dfc-9d20-ba73aec865bd', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":4,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:46:28', '2025-11-22 09:46:28'),
('0f35b3b5-21e9-44f1-82e6-482c0f05f975', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":5,\"email\":\"udaraneminda@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:46:38', '2025-11-22 09:46:38'),
('1123672b-f59c-4227-a66b-6c65beab2121', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":2,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:36:58', '2025-11-22 09:36:58'),
('172b1ad1-cd98-4c3e-b5c8-ed4213d245d3', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":1,\"email\":\"udaraneminda@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:22:06', '2025-11-22 09:22:06'),
('2971738c-c5f4-493e-b3d4-190235847183', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":1,\"email\":\"udaraneminda@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', '2025-11-22 09:22:36', '2025-11-22 09:22:06', '2025-11-22 09:22:36'),
('2aa38536-617f-4cd4-9da5-62e15116f3fc', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":8,\"email\":\"udara@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:54:09', '2025-11-22 09:54:09'),
('41cc010f-becb-42a2-9b87-ae93a4bad967', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":8,\"email\":\"udara@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:54:09', '2025-11-22 09:54:09'),
('4276ff16-17c8-4cda-988c-b273b0ed41f6', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from sample product\",\"inquiry_id\":6,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:53:48', '2025-11-22 09:53:48'),
('7a92236f-a321-466d-b6ea-458b2a173484', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":4,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:46:28', '2025-11-22 09:46:28'),
('945645d1-211e-4b43-8b68-fd2594f9e061', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":5,\"email\":\"udaraneminda@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:46:38', '2025-11-22 09:46:38'),
('9de3019d-da20-4372-b801-484960885ca7', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":2,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:36:58', '2025-11-22 09:36:58'),
('a949e062-6a08-4c92-9a94-e3a62495844f', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from sample product\",\"inquiry_id\":6,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:53:48', '2025-11-22 09:53:48'),
('ada34f52-b55f-41fd-b18e-e74176bcf4ff', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":7,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', '2025-11-22 10:06:10', '2025-11-22 09:53:59', '2025-11-22 10:06:10'),
('d7f356bb-f6eb-4d46-ac00-1909d694d836', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":7,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:53:59', '2025-11-22 09:53:59'),
('e4f57d7a-7f25-4290-876b-d7d132ca6c98', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 1, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":3,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:46:15', '2025-11-22 09:46:15'),
('f0f3912b-d007-493a-8868-6c1684239e27', 'App\\Notifications\\NewImportInquiry', 'App\\Models\\User', 2, '{\"message\":\"New import inquiry from Udara\",\"inquiry_id\":3,\"email\":\"admin@gmail.com\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/inquiries\"}', NULL, '2025-11-22 09:46:15', '2025-11-22 09:46:15');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VXKzCiGo5PYKLPogaU1wB1j3niSjuXp0Hv5oOV5T', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib2Foa05NZXVIaDZEV2k1bnJWWDA4QXhpd0pmaWgwMlc3YXBzWDJwaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkTmI5dDBOWjcvNjNROHZpZG1MSkkwT2xZazVsZkRnRzhBNGdtaUdGNk90eGphVW9NSDNON2EiO30=', 1771476320);

-- --------------------------------------------------------

--
-- Table structure for table `transmissions`
--

CREATE TABLE `transmissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmissions`
--

INSERT INTO `transmissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Automatic', '2025-10-09 07:50:42', '2025-11-21 23:09:59'),
(2, 'Manual', '2025-10-09 07:50:48', '2025-10-09 07:50:48');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Nb9t0NZ7/63Q8vidmLJI0OlYk5lfDgG8A4gmiGF6OtxjaUoMH3N7a', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 07:49:14', '2025-10-09 07:49:14'),
(2, 'Udara', 'udaraneminda@gmail.com', NULL, '$2y$10$hdA/luID6aQuoz1U56Mh0O0MHrlGdJo1mOBb8F29lvc5T3xC8K6AK', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-26 03:40:01', '2025-10-26 03:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufactured_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exterior_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` decimal(10,2) NOT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `main_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `registered_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trim_or_edition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_type` enum('diesel','petrol','hybrid') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `model`, `description`, `manufactured_year`, `make`, `body`, `exterior_color`, `interior_color`, `mileage`, `transmission`, `condition`, `price`, `main_image`, `image_2`, `image_3`, `image_4`, `image_5`, `created_at`, `updated_at`, `registered_year`, `register_status`, `trim_or_edition`, `engine_capacity`, `fuel_type`) VALUES
(1, 'VEZEL', 'test description', '2017', 'HONDA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'USED', '1200000.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '2017', 'REGISTERED', 'RS', '1500', 'petrol'),
(2, 'DION', 'test description', '2000', 'MITSUBISHI', 'VAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'USED', '550000.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '2004', 'REGISTERED', '2.0 GDI JEEP', '2000', 'petrol'),
(3, 'MONTERO', 'test description', '2005', 'MITSUBISHI', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'USED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '2007', 'REGISTERED', 'PAJERO', '2900', 'petrol'),
(4, 'DBA-ACA36W RAV4', 'test description', '2007', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'USED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '2010', 'REGISTERED', '', '2400', 'petrol'),
(5, 'LAND CRUISER PRADO', 'test description', '2002', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'USED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '2002', 'REGISTERED', 'VZJ120', '3370', 'petrol'),
(6, 'CITY', 'test description', '2025', 'HONDA', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '3000000.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'RS', '1000', 'petrol'),
(7, 'CITY', 'test description', '2025', 'HONDA', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'RS', '1000', 'petrol'),
(8, 'CITY', 'test description', '2025', 'HONDA', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'RS', '1000', 'petrol'),
(9, 'VEZEL', 'test description', '2025', 'HONDA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '1500', 'hybrid'),
(10, 'VEZEL', 'test description', '2025', 'Honda', 'SUV', 'White', 'Black', '0.00', 'Automatic', 'Brand New1', '152000.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-11-22 10:03:24', '', 'UNREGISTER', '6AA-RV5', '1500', 'petrol'),
(11, 'VEZEL', 'test description', '2025', 'HONDA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '6AA-RV5', '1500', 'hybrid'),
(12, 'VEZEL', 'test description', '2025', 'HONDA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '6AA-RV5', '1500', 'petrol'),
(13, 'VEZEL', 'test description', '2025', 'HONDA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'Z', '1500', 'hybrid'),
(14, 'ALMERA', 'test description', '2025', 'NISSAN', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '1000', 'petrol'),
(15, 'ALMERA', 'test description', '2025', 'NISSAN', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '1000', 'petrol'),
(16, 'ALMERA', 'test description', '2025', 'NISSAN', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'EL', '1000', 'petrol'),
(17, 'ALMERA', 'test description', '2025', 'NISSAN', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'VL', '1000', 'petrol'),
(18, 'ALMERA', 'test description', '2025', 'NISSAN', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'VL', '1000', 'petrol'),
(19, 'ALMERA', 'test description', '2025', 'NISSAN', 'SEDAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'VL', '1000', 'petrol'),
(20, 'SPACIA', 'test description', '2025', 'SUZUKI', 'HATCHBACK', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'CUSTOM', '650', 'hybrid'),
(21, 'HILUX', 'test description', '2025', 'TOYOTA', 'DOUBLE CAB', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'REVO', '2800', 'diesel'),
(22, 'HILUX', 'test description', '2025', 'TOYOTA', 'DOUBLE CAB', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'ROCCO', '2800', 'diesel'),
(23, 'LAND CRUISER PRADO', 'test description', '2024', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '2700', 'petrol'),
(24, 'RAIZE', 'test description', '2025', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '1190', 'hybrid'),
(25, 'YARIS', 'test description', '2025', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'CROSS', '1500', 'petrol'),
(26, 'HIJET', 'test description', '2023', 'DAIHATSU', 'LORRY', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BD-5700V', '660', 'petrol'),
(27, 'HIJET', 'test description', '2022', 'DAIHATSU', 'LORRY', 'White', 'Black', '0.00', 'MANUAL', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'TRUCK', '650', 'petrol'),
(28, 'HIJET', 'test description', '2023', 'DAIHATSU', 'TRUCK', 'White', 'Black', '0.00', 'MANUAL', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'TRUCK', '660', 'petrol'),
(29, 'MIRA', 'test description', '2023', 'DAIHATSU', 'HATCHBACK', 'White', 'Black', '20000.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5BA-W059214', '650', 'petrol'),
(30, 'ROCKY', 'test description', '2022', 'DAIHATSU', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '1190', 'hybrid'),
(31, 'TAFT', 'test description', '2023', 'DAIHATSU', 'HATCHBACK', 'White', 'Black', '19000.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5BA-LA900S', '650', 'petrol'),
(32, 'TAFT', 'test description', '2023', 'DAIHATSU', 'SEDAN', 'White', 'Black', '840.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5BA-LA900S', '660', 'petrol'),
(33, 'VEZEL', 'test description', '2022', 'HONDA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '6AA-RV5', '1500', 'petrol'),
(34, '3BA-VJA310W', 'test description', '2024', 'LEXUS', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'LX600', '3440', 'petrol'),
(35, 'SCRUM', 'test description', '2022', 'MAZDA', 'HATCHBACK', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-DG17W', '650', 'petrol'),
(36, 'SCRUM', 'test description', '2024', 'MAZDA', 'TRUCK', 'White', 'Black', '0.00', 'MANUAL', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'TRCK', '650', 'petrol'),
(37, 'CLIPPER', 'test description', '2022', 'NISSAN', 'VAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-DR17W', '650', 'petrol'),
(38, 'CLIPPER', 'test description', '2022', 'NISSAN', 'VAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5BD-DR17V', '650', 'petrol'),
(39, 'NV 100 CLIPPER', 'test description', '2021', 'NISSAN', 'TRUCK', 'White', 'Black', '0.00', 'MANUAL', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BD-DR16T', '650', 'petrol'),
(40, 'NV 100 CLIPPER', 'test description', '2022', 'NISSAN', 'VAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BD-DR17V', '650', 'petrol'),
(41, 'CARRY', 'test description', '2022', 'SUZUKI', 'TRUCK', 'White', 'Black', '0.00', 'MANUAL', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'TRUCK', '650', 'petrol'),
(42, 'EVERY', 'test description', '2023', 'SUZUKI', 'VAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-DA17W', '650', 'petrol'),
(43, 'EVERY', 'test description', '2023', 'SUZUKI', 'VAN', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-DA17W', '650', 'petrol'),
(44, 'WAGON R', 'test description', '2022', 'SUZUKI', 'HATCHBACK', 'White', 'Black', '8100.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'CUSTOM Z', '660', 'hybrid'),
(45, 'LAND CRUISER PRADO', 'test description', '2024', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3DA-FJA300W', '3340', 'diesel'),
(46, 'LAND CRUISER PRADO', 'test description', '2023', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '3340', 'diesel'),
(47, 'PIXIS', 'test description', '2023', 'TOYOTA', 'VAN', 'White', 'Black', '18000.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BD-5700M', '660', 'petrol'),
(48, 'PIXIS', 'test description', '2022', 'TOYOTA', 'HATCHBACK', 'White', 'Black', '11000.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5BA-LA350A', '650', 'petrol'),
(49, 'RAIZE', 'test description', '2022', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-A210A', '990', 'petrol'),
(50, 'RAIZE', 'test description', '2024', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-A210A', '990', 'petrol'),
(51, 'RAIZE', 'test description', '2025', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '1190', 'hybrid'),
(52, 'RAIZE', 'test description', '2022', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '1190', 'hybrid'),
(53, 'RAIZE', 'test description', '2022', 'TOYOTA', 'SUV', 'White', 'Black', '280.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '1200', 'hybrid'),
(54, 'RAIZE', 'test description', '2022', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '1190', 'petrol'),
(55, 'RAIZE', 'test description', '2022', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5AA-A202A', '1190', 'hybrid'),
(56, 'RAIZE', 'test description', '2023', 'TOYOTA', 'SUV', 'White', 'Black', '178.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '2023', 'UNREGISTER', '5AA-A202A', '1190', 'hybrid'),
(57, 'RAIZE', 'test description', '2023', 'TOYOTA', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', 'Z', '1190', 'petrol'),
(58, 'ROOMY', 'test description', '2022', 'TOYOTA', 'HATCHBACK', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '1000', 'petrol'),
(59, 'ROOMY', 'test description', '2023', 'TOYOTA', 'HATCHBACK', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '', '1000', 'petrol'),
(60, 'ROOMY', 'test description', '2023', 'TOYOTA', 'HATCHBACK', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '5BA-M900A', '1000', 'petrol'),
(61, 'T-CROSS', 'test description', '2023', 'VOLKSWAGEN', 'SUV', 'White', 'Black', '0.00', 'AUTOMATIC', 'RECONDITIONED', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', '', 'UNREGISTER', '3BA-C1DKR', '990', 'petrol'),
(174, 'SCRUM VAN', 'test description', '2022', 'MAZDA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(175, 'PIXIS VAN', 'test description', '2022', 'TOYOTA', 'SUV', 'SILVER', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(176, 'CLIPPER WAGON', 'test description', '2022', 'NISSAN', 'SUV', 'GREEN', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(177, 'EVERY', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(178, 'EVERY', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(179, 'EVERY', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(180, 'EVERY', 'test description', '2022', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(181, 'EVERY', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(182, 'PIXIS VAN', 'test description', '2022', 'TOYOTA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(183, 'CLIPPER WAGON', 'test description', '2022', 'NISSAN', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(184, 'EVERY', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(185, 'HIJET VAN', 'test description', '2023', 'DAIHATSU', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(186, 'NV 100 CLIPPER', 'test description', '2022', 'NISSAN', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(187, 'EVERY', 'test description', '2023', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(188, 'NV 100 CLIPPER', 'test description', '2023', 'NISSAN', 'SUV', 'SILVER', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(189, 'EVERY', 'test description', '2023', 'SUZUKI', 'SUV', 'GREY', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(190, 'EVERY WAGON', 'test description', '2022', 'SUZUKI', 'SUV', 'GREEN', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(191, 'CLIPPER', 'test description', '2022', 'NISSAN', 'SUV', 'SILVER', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(192, 'CLIPPER WAGON', 'test description', '2022', 'NISSAN', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(193, 'EVERY', 'test description', '2022', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(194, 'LAND CRUISER PRADO 300', 'test description', '2024', 'TOYOTA', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'VZJ120', '3000', 'petrol'),
(195, 'LAND CRUISER PRADO 300', 'test description', '2023', 'TOYOTA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'VZJ120', '3000', 'petrol'),
(196, 'LAND CRUISER 150', 'test description', '2023', 'TOYOTA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'VZJ120', '3000', 'petrol'),
(197, 'ALMERA VL', 'test description', '2025', 'NISSAN', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(198, 'ALMERA EL', 'test description', '2025', 'NISSAN', 'SUV', 'RED', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(199, 'HIJET TRUCK', 'test description', '2022', 'DAIHATSU', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(200, 'SCRUM TRUCK', 'test description', '2024', 'MAZDA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(201, 'HIJET TRUCK', 'test description', '2023', 'DAIHATSU', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(202, 'THOR', 'test description', '2023', 'DAIHATSU', 'SUV', 'RED', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(203, 'ROOMI', 'test description', '2023', 'TOYOTA', 'SUV', 'SILVER', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(204, 'VEZEL', 'test description', '2025', 'HONDA', 'SUV', 'RED', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'PAJERO', '2900', 'petrol'),
(205, 'N BOXES', 'test description', '2023', 'HONDA', 'SUV', 'SILVER', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(206, 'VEZEL', 'test description', '2025', 'HONDA', 'SUV', 'RED', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'PAJERO', '2900', 'petrol'),
(207, 'WAGEN T-CROOS', 'test description', '2023', 'VOLKSWAGEN', 'SUV', 'GREEN', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'PAJERO', '2900', 'petrol'),
(208, 'TANTO', 'test description', '2023', 'DAIHATSU', 'SUV', 'YELLOW', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(209, 'ROCKY G HEV', 'test description', '2022', 'DAIHATSU', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(210, 'RAIZE HYBRID', 'test description', '2022', 'TOYOTA', 'SUV', 'RED', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(211, 'RAIZE', 'test description', '2024', 'TOYOTA', 'SUV', 'WHITE/BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(212, 'RAIZE HYBRID BLACK BODY KIT', 'test description', '2022', 'TOYOTA', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(213, 'RAIZE', 'test description', '2022', 'TOYOTA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(214, 'RAIZE HYBRID', 'test description', '2022', 'TOYOTA', 'SUV', 'SILVER', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(215, 'RAIZE HYBRID LITE', 'test description', '2022', 'TOYOTA', 'SUV', 'BROWN', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(216, 'CITY RS', 'test description', '2025', 'HONDA', 'SUV', 'GREY', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(217, 'CITY RS', 'test description', '2023', 'HONDA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(218, 'N WAGON', 'test description', '2025', 'HONDA', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(219, 'CITY RS', 'test description', '2025', 'HONDA', 'SUV', 'GREY', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(220, 'HILUX REVO', 'test description', '2025', 'TOYOTA', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2900', 'petrol'),
(221, 'TAFT', 'test description', '2023', 'DAIHATSU', 'SUV', 'YELLOW', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(222, 'TAFT', 'test description', '2023', 'DAIHATSU', 'SUV', 'LIGHT BLUE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(223, 'CUSTOM SPACIA HYBRID', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(224, 'X BEE', 'test description', '2023', 'SUZUKI', 'SUV', 'BROWN', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(225, 'WAGON R', 'test description', '2022', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(226, 'SPACIA', 'test description', '2023', 'SUZUKI', 'SUV', 'BLUE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'petrol'),
(227, 'CUSTOM SPACIA HYBRID', 'test description', '2025', 'SUZUKI', 'SUV', 'WHITE', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '0.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'REVO', '2100', 'hybrid'),
(228, 'RANGER RAPTOR', 'test description', '2025', 'FORD', 'SUV', 'BLACK', 'black', '0.00', 'AUTOMATIC', 'BRAND NEW', '9999990.00', '1753549123_04.jpg', NULL, NULL, NULL, NULL, '2025-10-09 06:29:30', '2025-10-09 06:29:30', NULL, 'UNREGISTER', 'PAJERO', '3000', 'petrol');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2025', '2025-10-09 07:49:31', '2025-10-09 07:49:31'),
(2, '2024', '2025-10-09 07:49:38', '2025-10-09 07:49:38'),
(3, '2023', '2025-11-21 23:10:19', '2025-11-21 23:10:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bodies`
--
ALTER TABLE `bodies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bodies_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conditions_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `import_inquiries`
--
ALTER TABLE `import_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `makes_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transmissions`
--
ALTER TABLE `transmissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transmissions_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bodies`
--
ALTER TABLE `bodies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_inquiries`
--
ALTER TABLE `import_inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transmissions`
--
ALTER TABLE `transmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
