-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2018 г., 22:21
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `torts`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fillings`
--

CREATE TABLE IF NOT EXISTS `fillings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `fillings`
--

INSERT INTO `fillings` (`id`, `name`, `description`, `price`) VALUES
(1, 'Наполеон', 'представляет собой воздушный торт из многих листов тонкого и хрустящего теста, прослоенных кремом - белковым, масляным, заварным, из взбитых сливок, с добавлением какао, сгущенного молока, йогурта, варенья', 1000),
(2, 'Бисквит', 'Из двух видов шоколада!', 1100),
(3, 'Красный бархат', 'С крем-чиз начинкой', 1300),
(4, 'Панчо', 'Нет, это не пончо, это Панчо!', 1400),
(5, 'Чизкейк', 'Я не знаю причем тут сыр.', 1300),
(6, 'Птичье молоко', 'Кто доит птиц? А самое главное каких?', 1500),
(7, 'Три шоколада', 'На один больше чем два, так-то!', 1500),
(8, 'Морковный торт', 'Мне жаль детей которым дадут такой торт', 1000),
(9, 'Начинка для проверки', 'описание как скрипач', 5000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
