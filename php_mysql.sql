-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2020 г., 17:56
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_mysql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pathPreview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path`, `size`, `pathPreview`, `hits`) VALUES
(14, '../images/ca86ee591876f010656823d2f729-1632691.jpg', '', '../images/preview/ca86ee591876f010656823d2f729-1632691.jpg', 12),
(15, '../images/cup_red_cookie_hoarfrost_wintry_out_in_the_free_coffee_cup-1165823.jpg', '', '../images/preview/cup_red_cookie_hoarfrost_wintry_out_in_the_free_coffee_cup-1165823.jpg', 35),
(16, '../images/pine-needles-2781921_1280.jpg', '', '../images/preview/pine-needles-2781921_1280.jpg', 103),
(17, '../images/pochemu-el-ne-sbrasyvaet-hvoyu.jpg', '', '../images/preview/pochemu-el-ne-sbrasyvaet-hvoyu.jpg', 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
