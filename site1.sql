-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2020 г., 00:41
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guardian`
--

CREATE TABLE `guardian` (
  `nickname` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `class` text CHARACTER SET utf8 NOT NULL,
  `vetka` text CHARACTER SET utf8 NOT NULL,
  `podvetka` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `file` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `guardian`
--

INSERT INTO `guardian` (`nickname`, `email`, `class`, `vetka`, `podvetka`, `text`, `file`) VALUES
('Rental', 'den.elynin0903@gmail.com', 'Охотник', 'Пустотная', 'Средняя подветка', 'Тест текстбокса!', 'нет файла'),
('Ginger', 'gachy.men@gmail.com', 'Титан', 'Солнечная', 'Верхняя подветка', 'Тест текстбокса!', 'нет файла'),
('Xiverl', 'Tupoy.warlock@gmail.com', 'Варлок', 'Электрическая', 'Нижняя подветка', 'Тест текстбокса!', 'нет файла');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
