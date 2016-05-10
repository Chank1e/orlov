-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 05 2016 г., 16:32
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sanorlov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `shortText` varchar(128) NOT NULL,
  `mainText` varchar(2056) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `shortText`, `mainText`) VALUES
(1, 'Процедуры', 'Тут будет короткое описание статьи до 128 символов!!', 'Тут будет основной текст...Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde deserunt mollitia, inventore vero voluptatem ut, quidem in blanditiis. Perspiciatis excepturi cumque recusandae accusantium officiis fuga praesentium placeat alias, quam minima.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde deserunt mollitia, inventore vero voluptatem ut, quidem in blanditiis. Perspiciatis excepturi cumque recusandae accusantium officiis fuga praesentium placeat alias, quam minima.');

-- --------------------------------------------------------

--
-- Структура таблицы `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `href` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `mainmenu`
--

INSERT INTO `mainmenu` (`name`, `href`) VALUES
('Главная', 'index'),
('О нас', 'aboutus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
