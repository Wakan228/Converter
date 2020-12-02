-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2020 г., 19:26
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `valute_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `valute`
--

CREATE TABLE `valute` (
  `id` int(11) NOT NULL,
  `valute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base` int(11) NOT NULL,
  `convertt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `valute`
--

INSERT INTO `valute` (`id`, `valute`, `base`, `convertt`) VALUES
(1, 'AUD', 0, 1),
(2, 'CNY', 0, 1),
(3, 'CZK', 0, 1),
(4, 'HKD', 1, 1),
(5, 'INR', 1, 1),
(6, 'ILS', 0, 1),
(7, 'KZT', 0, 1),
(8, 'MXN', 0, 1),
(9, 'NZD', 0, 1),
(10, 'RUB', 0, 1),
(11, 'SGD', 0, 1),
(12, 'SEK', 0, 1),
(13, 'EGP', 0, 1),
(14, 'USD', 0, 1),
(15, 'AZN', 0, 1),
(16, 'TRY', 0, 1),
(17, 'BGN', 0, 1),
(18, 'PLN', 0, 1),
(19, 'BDT', 0, 1),
(20, 'IRR', 0, 1),
(21, 'KGS', 0, 1),
(22, 'LYD', 0, 1),
(23, 'MAD', 0, 1),
(24, 'THB', 0, 1),
(25, 'TND', 0, 1),
(26, 'TWD', 0, 1),
(27, 'GHS', 0, 1),
(28, 'TJS', 0, 1),
(29, 'BRL', 0, 1),
(30, 'XAG', 0, 1),
(31, 'XPD', 0, 1),
(32, 'UAH', 1, 1),
(34, 'EUR', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `valute`
--
ALTER TABLE `valute`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `valute`
--
ALTER TABLE `valute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
