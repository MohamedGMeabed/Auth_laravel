-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 نوفمبر 2020 الساعة 12:56
-- إصدار الخادم: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_auth2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `category_gallery`
--

CREATE TABLE `category_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category_gallery`
--

INSERT INTO `category_gallery` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Students', '2020-11-02 11:30:02', '2020-11-02 11:43:40'),
(2, 'News', '2020-11-02 11:30:08', '2020-11-02 11:30:08'),
(3, 'Teachers', '2020-11-02 11:30:16', '2020-11-02 11:30:16');

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `image` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `courses`
--

INSERT INTO `courses` (`id`, `name`, `price`, `description`, `rate`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PHP', 1500.00, 'you will learn PHP', 0, 'images/courses/1603297828.png', '2020-10-21 14:30:28', '2020-10-21 14:30:28', NULL),
(2, 'full stack', 2000.00, 'you will learn every thing', 0, 'images/courses/1604078938.jpg', '2020-10-30 15:28:58', '2020-10-30 15:28:58', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `course_topics`
--

CREATE TABLE `course_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `topic_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `course_topics`
--

INSERT INTO `course_topics` (`id`, `course_id`, `topic_name`, `duration`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'basics in php', '5 hourse', NULL, '2020-11-03 10:16:37', '2020-11-03 10:16:37'),
(2, 1, 'object  oriented', '10 hours', NULL, '2020-11-03 10:17:05', '2020-11-03 10:17:05');

-- --------------------------------------------------------

--
-- بنية الجدول `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topics` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_title_writer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `events`
--

INSERT INTO `events` (`id`, `topics`, `description`, `source_title`, `source_title_writer`, `host`, `location`, `website`, `start_date`, `end_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Topic1', 'this a description for event 1', 'Event 1', 'mohamed Gaber', 'Host1', 'Cairo', 'http://html.kodesolution.live/events-details-style2.html', '2020-10-20 21:00:00', '2020-10-20 12:00:00', NULL, '2020-10-21 14:32:43', '2020-10-21 14:32:43'),
(2, 'Topic2', 'this a description for event 2', 'Event 2', 'ali', 'Host 2', 'Giza', 'http://html.kodesolution.live/events-details-style2.html', '2020-10-21 21:00:00', '2020-10-21 23:02:00', NULL, '2020-10-21 14:35:03', '2020-10-21 14:35:03'),
(3, 'Topic 3', 'this a description for event  3', 'Event 3', 'mahmoud', 'Host 3', 'Bani Suef', 'http://html.kodesolution.live/events-style2.html', '2020-10-28 21:40:00', '2020-10-28 12:40:00', NULL, '2020-10-21 14:36:44', '2020-10-21 17:13:49');

-- --------------------------------------------------------

--
-- بنية الجدول `event_photos`
--

CREATE TABLE `event_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('slider','photo_galary') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `event_photos`
--

INSERT INTO `event_photos` (`id`, `event_id`, `photo`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'images/event_photos/1603298389.jpg', 'slider', '2020-10-21 14:39:49', '2020-10-21 14:39:49', NULL),
(2, 1, 'images/event_photos/1603298407.jpg', 'slider', '2020-10-21 14:40:07', '2020-10-21 14:40:07', NULL),
(3, 1, 'images/event_photos/1603298412.jpg', 'slider', '2020-10-21 14:40:12', '2020-10-21 14:40:34', '2020-10-21 14:40:34'),
(4, 1, 'images/event_photos/1603298420.jpg', 'slider', '2020-10-21 14:40:20', '2020-10-21 14:40:30', '2020-10-21 14:40:30'),
(5, 1, 'images/event_photos/1603298441.jpg', 'photo_galary', '2020-10-21 14:40:41', '2020-10-21 14:40:41', NULL),
(6, 1, 'images/event_photos/1603298448.jpg', 'photo_galary', '2020-10-21 14:40:48', '2020-10-21 14:40:48', NULL),
(7, 1, 'images/event_photos/1603298454.jpg', 'photo_galary', '2020-10-21 14:40:54', '2020-10-30 13:44:25', '2020-10-30 13:44:25'),
(8, 2, 'images/event_photos/1603298469.jpg', 'slider', '2020-10-21 14:41:09', '2020-10-21 14:41:09', NULL),
(9, 2, 'images/event_photos/1603298474.jpg', 'slider', '2020-10-21 14:41:14', '2020-10-21 14:41:14', NULL),
(10, 2, 'images/event_photos/1603298480.jpg', 'photo_galary', '2020-10-21 14:41:20', '2020-10-21 14:41:20', NULL),
(11, 2, 'images/event_photos/1603298485.jpg', 'photo_galary', '2020-10-21 14:41:25', '2020-10-21 14:41:25', NULL),
(12, 2, 'images/event_photos/1603298491.jpg', 'photo_galary', '2020-10-21 14:41:31', '2020-10-21 14:41:31', NULL),
(13, 3, 'images/event_photos/1603298501.jpg', 'slider', '2020-10-21 14:41:41', '2020-10-21 14:41:41', NULL),
(14, 3, 'images/event_photos/1603298507.jpg', 'slider', '2020-10-21 14:41:47', '2020-10-21 14:42:24', '2020-10-21 14:42:24'),
(15, 3, 'images/event_photos/1603298512.jpg', 'photo_galary', '2020-10-21 14:41:52', '2020-10-21 14:41:52', NULL),
(16, 3, 'images/event_photos/1603298518.jpg', 'photo_galary', '2020-10-21 14:41:58', '2020-10-21 14:41:58', NULL),
(17, 3, 'images/event_photos/1603298538.jpg', 'slider', '2020-10-21 14:42:18', '2020-10-21 14:42:18', NULL),
(18, 3, 'images/event_photos/1603298554.jpg', 'photo_galary', '2020-10-21 14:42:34', '2020-10-21 14:42:34', NULL),
(19, 1, 'images/event_photos/1604072705.jpg', 'photo_galary', '2020-10-30 13:45:05', '2020-10-30 13:45:28', '2020-10-30 13:45:28'),
(20, 1, 'images/event_photos/1604072739.jpg', 'photo_galary', '2020-10-30 13:45:39', '2020-10-30 13:45:39', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `event_registrations`
--

CREATE TABLE `event_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_type` enum('One Person','Two Person','Family Pack','Premium') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `event_registrations`
--

INSERT INTO `event_registrations` (`id`, `event_id`, `name`, `email`, `phone`, `ticket_type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Mohamed Gaber', 'mgm@gmail.com', '1213456789', 'One Person', 'accepted', '2020-10-23 11:14:33', '2020-10-23 11:14:33', NULL),
(2, 1, 'ali mahmoud', 'mgm2020@yahoo.com', '5465132165', 'Premium', 'rejected', '2020-10-23 11:40:19', '2020-10-25 10:21:31', NULL),
(3, 1, 'nada ali', 'nada20@gmail.com', '546546565', 'One Person', 'accepted', '2020-10-23 14:29:59', '2020-10-25 11:56:28', NULL),
(4, 2, 'bassem', 'bassem20@gmail.com', '68161651561', 'Family Pack', 'accepted', '2020-10-23 16:00:27', '2020-10-25 11:51:08', NULL),
(5, 1, 'heba mohamed', 'heba20@gmail.com', '216546565', 'Two Person', 'pending', '2020-10-25 11:56:57', '2020-10-25 11:56:57', NULL),
(6, 1, 'Mohamed Gaber', '2onmnbn7j@tmpmail.org', '654651651651', 'One Person', 'accepted', '2020-10-26 09:33:18', '2020-10-26 09:33:33', NULL),
(7, 1, 'Mohamed Gaber', 'mgmeabed@gmail.com', '561321321321', 'Two Person', 'accepted', '2020-10-26 09:37:56', '2020-10-26 09:38:08', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `event_speakers`
--

CREATE TABLE `event_speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `speaker_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `event_speakers`
--

INSERT INTO `event_speakers` (`id`, `event_id`, `speaker_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2020-10-21 14:42:46', '2020-10-21 14:42:46'),
(2, 1, 2, NULL, '2020-10-21 14:42:49', '2020-10-21 14:42:49'),
(3, 2, 3, NULL, '2020-10-21 14:43:00', '2020-10-21 14:43:00'),
(4, 2, 4, NULL, '2020-10-21 14:43:05', '2020-10-21 14:43:05'),
(5, 2, 5, NULL, '2020-10-21 14:43:09', '2020-10-21 14:43:09'),
(6, 3, 1, NULL, '2020-10-21 14:43:16', '2020-10-21 14:43:16'),
(7, 3, 3, NULL, '2020-10-21 14:43:20', '2020-10-21 14:43:20'),
(8, 3, 4, NULL, '2020-10-21 14:43:23', '2020-10-21 14:43:23');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:50', '2020-11-02 19:21:07', NULL),
(2, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:52', '2020-11-02 19:05:35', '2020-11-02 19:05:35'),
(3, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:52', '2020-11-02 19:05:32', '2020-11-02 19:05:32'),
(4, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:53', '2020-11-02 19:05:31', '2020-11-02 19:05:31'),
(5, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:53', '2020-11-02 19:05:30', '2020-11-02 19:05:30'),
(6, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:54', '2020-11-02 19:05:30', '2020-11-02 19:05:30'),
(7, 'Easy Customiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'pen', '2020-11-02 19:04:55', '2020-11-02 19:05:29', '2020-11-02 19:05:29'),
(8, 'Less CSS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null', 'scissors', '2020-11-02 19:06:01', '2020-11-02 19:21:33', NULL),
(9, 'third feature', 'this it the description for third feature you can see us', 'leaf', '2020-11-02 19:06:57', '2020-11-02 19:20:33', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'images/gallerys/1604326195.jpg', 1, '2020-11-02 12:09:55', '2020-11-02 12:09:55'),
(2, 'images/gallerys/1604326222.jpg', 1, '2020-11-02 12:10:22', '2020-11-02 12:10:22'),
(3, 'images/gallerys/1604326235.jpg', 1, '2020-11-02 12:10:35', '2020-11-02 12:10:35'),
(4, 'images/gallerys/1604326249.jpg', 1, '2020-11-02 12:10:49', '2020-11-02 12:10:49'),
(6, 'images/gallerys/1604326698.JPG', 2, '2020-11-02 12:18:18', '2020-11-02 12:18:18');

-- --------------------------------------------------------

--
-- بنية الجدول `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sports', '2020-10-27 11:12:56', '2020-10-27 11:12:56'),
(2, 'Art', '2020-10-27 11:13:37', '2020-10-27 11:13:37'),
(4, 'Health', '2020-10-27 11:14:51', '2020-10-27 11:14:51');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_10_14_233034_create_sessions_table', 1),
(9, '2020_10_15_113302_create_courses_table', 1),
(11, '2020_10_15_113409_create_sliders_table', 1),
(12, '2020_10_18_140937_create_events_table', 1),
(13, '2020_10_18_142158_create_speakers_table', 1),
(14, '2020_10_18_142400_create_event_speakers_table', 1),
(15, '2020_10_18_142842_create_event_registrations_table', 1),
(16, '2020_10_18_143120_create_event_photos_table', 1),
(17, '2020_10_22_141419_add_status_to_event_registrations_table', 2),
(19, '2020_10_26_115236_create_testimonials_table', 3),
(20, '2020_10_26_142150_create_main_categories_table', 4),
(21, '2020_10_26_142607_create_sub_categories_table', 4),
(22, '2020_10_26_142650_create_news_table', 4),
(23, '2020_10_26_142719_create_photo_news_table', 4),
(24, '2020_10_26_142735_create_comments_table', 4),
(25, '2020_11_02_124646_create_category_gallery_table', 5),
(26, '2020_11_02_124954_create_galleries_table', 5),
(27, '2020_11_02_204408_create_features_table', 6),
(28, '2020_11_03_115432_create_course_topics_table', 7),
(29, '2020_11_04_122157_create_fqas_table', 8),
(30, '2020_11_05_111812_create_teachers_table', 9);

-- --------------------------------------------------------

--
-- بنية الجدول `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `news`
--

INSERT INTO `news` (`id`, `title`, `details`, `auther`, `tags`, `sub_cat_id`, `created_at`, `updated_at`) VALUES
(3, 'Cristiano health', 'Juventus are waiting on a Covid-19 test result to see if Cristiano Ronaldo will be available for their Champions League match against Barcelona on Wednesday.', 'mohamed Gaber', 'Juventus Barca', 2, '2020-10-28 10:59:10', '2020-10-28 11:29:38'),
(5, 'ElDa7e7 Museum', 'Ahmed Elgandor had talked about Nablin bona bart', 'mohamed Gaber', 'ElDa7e7', 4, '2020-10-28 13:09:55', '2020-10-28 13:09:55');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `photo_news`
--

CREATE TABLE `photo_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `photo_news`
--

INSERT INTO `photo_news` (`id`, `photo`, `news_id`, `created_at`, `updated_at`) VALUES
(1, 'images/news_photos/1604150391.JPG', 3, '2020-10-31 11:19:51', '2020-10-31 11:19:51'),
(2, 'images/news_photos/1604150408.JPG', 3, '2020-10-31 11:20:08', '2020-10-31 11:20:08');

-- --------------------------------------------------------

--
-- بنية الجدول `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('arCavIutD2SerC2KAz1fKWDtLhFmj6otXF4OI5vY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTjgyOU1PaUV1aW80dnB4bFVMSGNQVHdXV0FCTDJWbWx0WWJmWDYyNCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vdGVhY2hlcnMvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFo3RjY0R1JwRG1zS0lMcUQySjJreE8xS0c0RXQ5ZkdLSnVuRDBTbG1iU0tJUzRyUFhJLmFDIjt9', 1604576257),
('pJk4kqBcooHmR4kGlSWFIW3iSWE4F6vudLU5WbpV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNE94a09tdEt2YmNocEdXcXpBd0lRQVBLc1AwT3dObXVZTnBCMnkwTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hciI7fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1604576808),
('Redohni2iI0COkRcuHVN2HaJHq1QqhEgP50eN4SY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQVRiU1h0SE83QU5wUzFab05DUmREQXI1RE9SbmVNVDNHV1RpT3YydiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbiI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1604514299);

-- --------------------------------------------------------

--
-- بنية الجدول `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sliders`
--

INSERT INTO `sliders` (`id`, `title1`, `title2`, `link`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Title 1', 'Title 2', 'http://html.kodesolution.live/details-style2.html', 'This Is Slider Number', 'images/sliders/1603298851.jpg', '2020-10-21 14:47:31', '2020-10-21 14:47:31', NULL),
(2, 'Title 2', 'Title 2', 'http://html.kodesolution.live/details-style2.html', 'This Is Slider Number 2', 'images/sliders/1603298894.jpg', '2020-10-21 14:48:14', '2020-10-21 14:48:14', NULL),
(3, 'Title 3', 'Title 3', 'http://html.kodesolution.live/details-style2.html', 'This Is Slider Number 3', 'images/sliders/1603298919.jpg', '2020-10-21 14:48:39', '2020-10-21 14:48:39', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `speakers`
--

CREATE TABLE `speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mohamed Gaber', 'Developer', '2020-10-21 14:37:20', '2020-10-21 14:37:20', NULL),
(2, 'ali mahmoud', 'web Developer', '2020-10-21 14:37:26', '2020-10-21 14:37:26', NULL),
(3, 'eslam', 'laravel developer', '2020-10-21 14:37:41', '2020-10-21 14:37:41', NULL),
(4, 'heba', 'human resource', '2020-10-21 14:37:58', '2020-10-21 14:37:58', NULL),
(5, 'nada', 'manager', '2020-10-21 14:38:08', '2020-10-21 14:38:08', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `main_cat_id`, `created_at`, `updated_at`) VALUES
(2, 'foot Ball', 1, '2020-10-27 12:28:57', '2020-10-27 12:28:57'),
(3, 'Valley Ball', 1, '2020-10-27 12:31:47', '2020-10-27 12:31:47'),
(4, 'History', 2, '2020-10-28 12:43:33', '2020-10-28 12:43:33');

-- --------------------------------------------------------

--
-- بنية الجدول `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `position`, `address`, `image`, `facebook`, `twitter`, `linkedin`, `skype`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Gaber', 'web Developer', 'Bani Suef', 'images/teachers/1604576256.JPG', 'https://www.facebook.com/profile.php?id=100004182104364', 'https://www.facebook.com/profile.php?id=100004182104364', 'https://www.facebook.com/profile.php?id=100004182104364', 'https://www.facebook.com/profile.php?id=100004182104364', '2020-11-05 09:37:36', '2020-11-05 09:37:36');

-- --------------------------------------------------------

--
-- بنية الجدول `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mohamed\'s Team', 1, '2020-10-21 14:28:52', '2020-10-21 14:28:52');

-- --------------------------------------------------------

--
-- بنية الجدول `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `description`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Catherine Grace', 'CEO apple', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'C:\\xampp\\tmp\\php281F.tmp', '2020-10-26 10:41:21', '2020-10-27 11:06:44', '2020-10-27 11:06:44'),
(2, 'Mohamed Gaber', 'csdsdsd', 'hello Testimonial Testimonial Testimonial Testimonial Testimonial', 'images/testimonials/1603716714.jpg', '2020-10-26 10:51:54', '2020-10-26 10:51:59', '2020-10-26 10:51:59'),
(3, 'Catherine Grace', 'CEO apple', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/testimonials/1603902241.JPG', '2020-10-27 11:05:48', '2020-10-28 14:30:48', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Gaber', 'mgm@gmail.com', NULL, '$2y$10$Z7F64GRpDmsKILqD2J2kxO1KG4Et9fGKJunD0SlmbSKIS4rPXI.aC', NULL, NULL, NULL, 1, NULL, '2020-10-21 14:28:52', '2020-10-21 14:28:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_news_id_foreign` (`news_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_topics`
--
ALTER TABLE `course_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_topics_course_id_foreign` (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_photos`
--
ALTER TABLE `event_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_photos_event_id_foreign` (`event_id`);

--
-- Indexes for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_registrations_email_unique` (`email`),
  ADD KEY `event_registrations_event_id_foreign` (`event_id`);

--
-- Indexes for table `event_speakers`
--
ALTER TABLE `event_speakers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_speakers_event_id_foreign` (`event_id`),
  ADD KEY `event_speakers_speaker_id_foreign` (`speaker_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_sub_cat_id_foreign` (`sub_cat_id`);

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
-- Indexes for table `photo_news`
--
ALTER TABLE `photo_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_news_news_id_foreign` (`news_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_main_cat_id_foreign` (`main_cat_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_topics`
--
ALTER TABLE `course_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_photos`
--
ALTER TABLE `event_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_speakers`
--
ALTER TABLE `event_speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_news`
--
ALTER TABLE `photo_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

--
-- القيود للجدول `course_topics`
--
ALTER TABLE `course_topics`
  ADD CONSTRAINT `course_topics_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- القيود للجدول `event_photos`
--
ALTER TABLE `event_photos`
  ADD CONSTRAINT `event_photos_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- القيود للجدول `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD CONSTRAINT `event_registrations_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- القيود للجدول `event_speakers`
--
ALTER TABLE `event_speakers`
  ADD CONSTRAINT `event_speakers_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `event_speakers_speaker_id_foreign` FOREIGN KEY (`speaker_id`) REFERENCES `speakers` (`id`);

--
-- القيود للجدول `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category_gallery` (`id`);

--
-- القيود للجدول `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_sub_cat_id_foreign` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_categories` (`id`);

--
-- القيود للجدول `photo_news`
--
ALTER TABLE `photo_news`
  ADD CONSTRAINT `photo_news_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

--
-- القيود للجدول `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_main_cat_id_foreign` FOREIGN KEY (`main_cat_id`) REFERENCES `main_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
