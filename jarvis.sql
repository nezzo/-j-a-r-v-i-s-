-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 10 2016 г., 04:48
-- Версия сервера: 5.7.13-0ubuntu0.16.04.2
-- Версия PHP: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jarvis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `security`
--

CREATE TABLE `security` (
  `id` int(10) NOT NULL,
  `login` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `security`
--

INSERT INTO `security` (`id`, `login`, `pass`) VALUES
(1, 'admin', 'MjBSKuiFUb8uQ');

-- --------------------------------------------------------

--
-- Структура таблицы `security-log`
--

CREATE TABLE `security-log` (
  `id` int(255) NOT NULL,
  `time` datetime(6) NOT NULL,
  `ip-adress` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `security-log`
--
ALTER TABLE `security-log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `security`
--
ALTER TABLE `security`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `security-log`
--
ALTER TABLE `security-log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
