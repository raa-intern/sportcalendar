-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2021 г., 13:35
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sportcalendar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `build_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geo_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_date` datetime NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime NOT NULL,
  `event_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_intro` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_full` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_full` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_sourse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_type`, `category_id`, `event_description`, `city`, `street`, `build_number`, `geo_point`, `registration_date`, `start_date`, `finish_date`, `event_link`, `event_status`, `image_intro`, `image_full`, `alt_intro`, `alt_full`, `meta_title`, `meta_desc`, `rating`, `url`, `event_sourse`, `created_at`, `updated_at`) VALUES
(1, 'Рейтинговий турнір 0-20 з настільного тенісу', 'Турнір', 2, 'Кожного вівторка тенісний клуб Оріон запрошує на Рейтинговий турнір гравців з рейтингом 0-20.\r\nНагородження грошовими призами($) (призовий фонд 40% від суми внесків).', 'Київ', 'Оноре де Бальзака', '66', 'https://mixsport.pro/ua/places/orion-sport', '2021-11-25 18:30:00', '2021-11-24 12:22:01', '2021-11-25 19:22:01', 'https://mixsport.pro/ua/events/rejtingovij-turnir-0-20-z-nastilnogo-tenisu', 'Нове', 'image1', 'imageF1', NULL, NULL, 'спорт', 'спорт', 70, 'https://mixsport.pro/ua/events/rejtingovij-turnir-0-20-z-nastilnogo-tenisu', NULL, '2021-11-23 10:22:01', '2021-11-23 10:22:01'),
(2, 'Курс Інструктор Скелелазіння ІІ категорії (Одномотузкове лазіння)', 'курс', 3, 'Федерація Альпінізму та Скелелазіння оголошує другий набір на курс Інструктор Скелелазіння ІІ категорії (Одномотузкове лазіння).\r\n\r\nДати проведення курсу - 23-28 листопада, 6 повних днів по 8 годин щодня\r\nМісце проведення: один зі скеледромів Києва та скелі Коростишева-Денишів\r\nВартість навчання - орієнтовно 4000 гривень, точна вартість буде відома за тиждень бо залежить від кількості курсантів. Вся інформацію про кошторис буде у звіті й доступна курсантам.', 'Київ', 'Печерська', NULL, NULL, '2021-11-24 09:15:01', '2021-11-25 16:10:01', '2021-11-26 09:30:01', 'https://mixsport.pro/ua/events/kurs-instruktor-skelelazinna-ii-kategorii-odnomotuzkove-lazinna', 'новий', 'image2', 'imageF2', NULL, NULL, 'опис курсу', 'опис курсу', 45, 'https://mixsport.pro/ua/events/kurs-instruktor-skelelazinna-ii-kategorii-odnomotuzkove-lazinna', 'https://mixsport.pro/ua/events/kurs-instruktor-skelelazinna-ii-kategorii-odnomotuzkove-lazinna', '2021-11-23 08:18:01', '2021-11-23 10:25:01');

-- --------------------------------------------------------

--
-- Структура таблицы `events_categories`
--

CREATE TABLE `events_categories` (
  `id` int NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `events_tags`
--

CREATE TABLE `events_tags` (
  `id` int UNSIGNED NOT NULL,
  `tags_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_11_22_192552_create_events_table', 1),
(5, '2021_11_22_192906_create_events_categories_table', 1),
(6, '2021_11_22_192938_create_events_tags_table', 1),
(7, '2021_11_22_193137_create_users_table', 1),
(8, '2021_11_22_193223_create_users_groups_table', 1),
(9, '2021_11_22_193324_create_parsed_data_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `parsed_data`
--

CREATE TABLE `parsed_data` (
  `id` int UNSIGNED NOT NULL,
  `parse_event_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_event_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_event_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_event_description` text COLLATE utf8mb4_unicode_ci,
  `parse_event_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_geo_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_build_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_event_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_sourse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parse_registration_date` datetime NOT NULL,
  `parse_start_date` datetime NOT NULL,
  `parse_finish_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` timestamp NOT NULL,
  `last_visit` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_groups`
--

CREATE TABLE `users_groups` (
  `group_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_subscribe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int NOT NULL,
  `date_mode` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events_tags`
--
ALTER TABLE `events_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parsed_data`
--
ALTER TABLE `parsed_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_login_unique` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `events_tags`
--
ALTER TABLE `events_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `parsed_data`
--
ALTER TABLE `parsed_data`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
