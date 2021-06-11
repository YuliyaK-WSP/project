-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 27 2019 г., 22:05
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project_2`
--
CREATE DATABASE IF NOT EXISTS `project_2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project_2`;

-- --------------------------------------------------------

--
-- Структура таблицы `communication_form`
--

CREATE TABLE IF NOT EXISTS `communication_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `communication_form`
--

INSERT INTO `communication_form` (`id`, `name`, `email`, `date_create`) VALUES
(3, 'Юлия Новикова', 'yvnovikova@mail.ru', '2020-08-21 17:59:56');

-- --------------------------------------------------------

--
-- Структура таблицы `order_form`
--

CREATE TABLE IF NOT EXISTS `order_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_form`
--

INSERT INTO `order_form` (`id`, `name`, `email`, `comment`, `date_create`) VALUES
(2, 'Юлия Новикова', 'yvnovikova@mail.ru', 'визитка', '2020-08-21 19:06:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
