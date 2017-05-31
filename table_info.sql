-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 01 2017 г., 00:13
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ajax_table`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table_info`
--

CREATE TABLE IF NOT EXISTS `table_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articul` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id_category` int(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Дамп данных таблицы `table_info`
--

INSERT INTO `table_info` (`id`, `articul`, `name`, `id_category`, `price`) VALUES
(3, 33, 'Samsung Galaxy35', 1, ' 200'),
(23, 456, 'Meuzu 3', 1, '200'),
(55, 333, 'Xiaomi', 2, ' 500'),
(56, 22, 'паша', 2, '      333'),
(66, 21, '321', 1, '321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
