-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Дек 30 2025 г., 13:06
-- Версия сервера: 8.0.44
-- Версия PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `views` int DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `image`, `title`, `description`, `content`, `views`, `created_at`) VALUES
(1, 'image1.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 19, '2025-12-20 07:02:20'),
(2, 'image2.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 30, '2025-12-25 07:02:20'),
(3, 'image3.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 20, '2025-12-11 07:02:20'),
(4, 'image4.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 35, '2025-12-22 07:02:20'),
(5, 'image5.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 10, '2025-12-27 07:02:20'),
(6, 'image6.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 6, '2025-12-29 07:02:20'),
(7, 'image7.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 29, '2025-12-02 07:02:20'),
(8, 'image8.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 5, '2025-12-29 07:02:20'),
(9, 'image9.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 5, '2025-12-29 07:02:20'),
(10, 'image1.jpg', 'Lorem ipsum dolor sit amet proident excepteur', 'Lorem ipsum dolor sit amet ut ut amet in consequat ex velit veniam sed. Quis elit in exercitation amet sit nisi irure aliquip aliqua nulla ut aliquip. Esse veniam dolore incididunt ea mollit pariatur reprehenderit dolore ut eu. Voluptate ea ad dolore velit anim fugiat dolore esse consequat elit. Dolor aliquip ipsum in culpa eu dolor ut.', 'Eu voluptate occaecat esse nulla. Ad laboris dolor incididunt qui ad ut aute excepteur irure aute officia. In quis quis laborum ut officia mollit tempor proident incididunt est sit laboris culpa. Dolor reprehenderit eu irure culpa nisi anim ut ut adipiscing irure ea. Do irure officia ipsum cillum laboris.', 15, '2025-12-22 07:02:20'),
(11, 'image1.jpg', 'Elit Tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0, '2025-02-13 09:34:55'),
(12, 'image4.jpg', 'Amet Adipiscing Sed Consectetur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0, '2025-01-03 09:34:55'),
(13, 'image6.jpg', 'Sit Ipsum Labore', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0, '2025-04-05 09:34:55');

-- --------------------------------------------------------

--
-- Структура таблицы `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_category`
--

INSERT INTO `article_category` (`article_id`, `category_id`) VALUES
(1, 1),
(4, 1),
(7, 1),
(13, 1),
(2, 2),
(5, 2),
(8, 2),
(11, 2),
(12, 2),
(3, 3),
(6, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Category 1', 'Lorem ipsum dolor sit amet laborum et sit exercitation.'),
(2, 'Category 2', 'Lorem ipsum dolor sit amet laborum et sit exercitation.'),
(3, 'Category 3', 'Lorem ipsum dolor sit amet laborum et sit exercitation.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`article_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
