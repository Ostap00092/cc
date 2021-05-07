-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2021 г., 09:16
-- Версия сервера: 8.0.15
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
-- База данных: `creati`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_lastname` varchar(100) NOT NULL,
  `author_avaname` varchar(2555) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Нет описания',
  `pub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `author_id`, `author_name`, `author_lastname`, `author_avaname`, `filename`, `article_title`, `categorie_id`, `description`) VALUES
(17, 22, 'Вася', 'Егоров', '1.png', 'astheylooked09.jpg', 'sdf', NULL, ''),
(18, 22, 'Вася', 'Егоров', '1.png', 'додекаэдр.jpeg', 'gfdg', NULL, ''),
(19, 22, 'Вася', 'Егоров', '1.png', 'a_322_321.jpg', 'dsfsdf', NULL, ''),
(20, 22, 'Вася', 'Егоров', '1.png', '0_xMaFF2hSXpf_kIfG.jpg', 'asdfsdf', NULL, '');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categorie_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_title`) VALUES
(1, 'Дизайн'),
(2, 'Живопись'),
(3, 'Домашний декор'),
(4, 'Путешествия'),
(5, 'Юмор'),
(6, 'Фотографии'),
(7, 'Архитектура'),
(8, 'Садоводство'),
(9, 'Спорт'),
(10, 'Здоровье'),
(11, 'Наука'),
(12, 'Техника'),
(13, 'Музыка');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avaname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'standart.png',
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `choose` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1,2,3,4,5,6,7,8,9,10,11,12,13,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `avaname`, `name`, `lastname`, `password`, `choose`) VALUES
(22, 'ostap@gmail.com', '1.png', 'Остап', 'Чичигинаров', '4297f44b13955235245b2497399d7a93', '1,2,3,4,5,6,7,8,9,10,11,12,13,');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
