-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2022 г., 23:00
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `my_talons`
--

CREATE TABLE `my_talons` (
  `id` int(11) NOT NULL,
  `talon_id` int(11) DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `my_talons`
--

INSERT INTO `my_talons` (`id`, `talon_id`, `body`) VALUES
(3, 3, 'фио пользователя 1'),
(4, 7, 'ФИО пользователя'),
(5, 5, 'НАШ ПОЛЬЗОВАТЕЛЬ'),
(6, 3, 'соколова'),
(7, 9, 'НАШ ПОЛЬЗОВАТЕЛЬ');

-- --------------------------------------------------------

--
-- Структура таблицы `talon`
--

CREATE TABLE `talon` (
  `id` int(11) NOT NULL,
  `date` datetime(6) DEFAULT NULL,
  `fio_vrach` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cab` int(3) DEFAULT NULL,
  `fio_polz` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `talon`
--

INSERT INTO `talon` (`id`, `date`, `fio_vrach`, `cab`, `fio_polz`) VALUES
(3, '2022-11-19 12:16:00.000000', 'ФИО окулиста', 2, NULL),
(5, '2022-11-25 13:17:00.000000', 'ФИО терапевта', 1, NULL),
(6, '2022-11-22 13:18:00.000000', 'ФИО лора', 3, NULL),
(7, '2022-11-24 13:18:00.000000', 'ФИО эндокринолога', 5, NULL),
(9, '2022-11-25 13:35:00.000000', 'ФИО кардиолога', 9, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `number_tel` int(12) DEFAULT NULL,
  `login` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `full_name` varchar(355) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `number_tel`, `login`, `password`, `full_name`) VALUES
(24, 'blabla@gmail.com', 445131375, 'kakoyto_login', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Руденкооооо А Д'),
(25, 'blabla@gmail.com', 1234567, 'hjll', 'd553d148479a268914cecb77b2b88e6a', 'sfkdflkld'),
(12, 'asfasfasf@mail.ru', 334, 'Raf', '81dc9bdb52d04dc20036dbd8313ed055', 'Moe Fio'),
(11, 'blabla@gmail.com', 123567, 'adminn', '827ccb0eea8a706c4c34a16891f84e7b', 'aaaaa'),
(13, 'shurka.2004ru@gmail.com', 432, 'qwerty', 'e35cf7b66449df565f93c607d5a81d09', 'Руденко А Д'),
(22, 'h9@gmail.com', 1234567, 'adminn', '3bad6af0fa4b8b330d162e19938ee981', 'sfkdflkld'),
(26, 'shuka.2004ru@gmail.com', 445131375, 'sashok', '5e8667a439c68f5145dd2fcbecf02209', 'necto to tam'),
(27, 'shurka.2004ru@gmail.com', 445132454, 'sashokk', 'd553d148479a268914cecb77b2b88e6a', 'necto to tam2'),
(31, 'shurka.2004ru@gmail.com', 445131375, 'Shurka', '827ccb0eea8a706c4c34a16891f84e7b', 'Руденко Александра Дмитриевна');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `my_talons`
--
ALTER TABLE `my_talons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `talon_id` (`talon_id`);

--
-- Индексы таблицы `talon`
--
ALTER TABLE `talon`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `my_talons`
--
ALTER TABLE `my_talons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `talon`
--
ALTER TABLE `talon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `my_talons`
--
ALTER TABLE `my_talons`
  ADD CONSTRAINT `my_talons_ibfk_1` FOREIGN KEY (`talon_id`) REFERENCES `talon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
