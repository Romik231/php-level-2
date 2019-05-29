-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2019 г., 17:08
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `click` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `size`, `path`, `click`) VALUES
(3, 'bear.jpg', 21741, 'img/small/', 36),
(4, 'charmander.jpg', 11393, 'img/small/', NULL),
(5, 'clock.jpg', 16094, 'img/small/', NULL),
(6, 'dead-island-20110215060817299.jpg', 1994547, 'img/small/', 32),
(7, 'deadpool.jpg', 22309, 'img/small/', 32),
(8, 'dubstep_muzyka_cherep_2560x1600.jpg', 244913, 'img/small/', NULL),
(9, 'head.jpg', 17511, 'img/small/', NULL),
(10, 'images.jpg', 10723, 'img/small/', NULL),
(11, 'jacket.jpg', 13751, 'img/small/', NULL),
(12, 'letter.jpg', 15547, 'img/small/', NULL),
(13, 'monster.jpg', 8943, 'img/small/', NULL),
(14, 'tree.jpg', 11888, 'img/small/', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
