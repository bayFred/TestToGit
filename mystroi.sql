-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 13 2018 г., 17:10
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stroi3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_name_eng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `job_name_eng`) VALUES
(1, 'Штукатурка стен', 'schtukaturka'),
(2, 'Штукатурка потолков', 'schtukaturka'),
(3, 'Штукатурка откосов', 'schtukaturka'),
(4, 'Шпаклевка стен(старт)', 'schtukaturka'),
(5, 'Шпаклевка стен(финиш)', 'schtukaturka'),
(6, 'Шпаклевка потолков(старт)', 'schpaklevka'),
(7, 'Шпаклевка потолков(финиш)', 'schpaklevka'),
(8, 'Шпаклевка откосов(старт)', 'schpaklevka'),
(9, 'Шпаклевка откосов(финиш)', 'schpaklevka'),
(10, 'Поклейка обоев(стены)', 'pokl oboev'),
(11, 'Поклейка обоев(потолок)', 'pokl oboev'),
(12, 'Грунтовка стен', 'gruntovka'),
(13, 'Грунтовка потолка', 'gruntovka'),
(14, 'Грунтовка откосов', 'gruntovka'),
(15, 'Подготовка поверхности', 'gruntovka sten'),
(16, 'Обработка бетонных поверхностей бетоноконтактом', 'gruntovka sten'),
(17, 'Установка маяков', 'test1'),
(18, 'Установка уголков малярных', 'test2'),
(19, 'Покраска стен', 'schtukaturka'),
(20, 'Покраска потолков', 'schtukaturka'),
(21, 'Покраска откосов', 'schtukaturka'),
(22, 'Поклейка малярной ленты на стыки Г/К', 'schpaklevka'),
(23, 'Поклейка армирующей сетки', 'schpaklevka'),
(24, 'Поклейка обоев', 'pokl oboev'),
(25, 'Покраска стен', 'gruntovka'),
(26, 'Покраска потолка', 'gruntovka'),
(27, 'Покраска откосов', 'gruntovka'),
(28, 'Подготовка стен', 'gruntovka sten');
-- ---------------------------------------------------


-- --------------------------------------------------------

--
-- Структура таблицы `svod`
--

CREATE TABLE `svod` (
  `job_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `svod`
--

INSERT INTO `svod` (`job_id`, `tool_id`) VALUES
(2, 5),
(2, 2),
(2, 1),
(2, 6),
(1, 10),
(1, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `tools`
--

CREATE TABLE `tools` (
  `tool_id` int(11) NOT NULL,
  `tool_name` varchar(255) NOT NULL,
  `name_eng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tools`
--

INSERT INTO `tools` (`tool_id`, `tool_name`, `name_eng`) VALUES
(1, 'Нож малярный', 'noj malyarnyy'),
(2, 'Шпатель 35см', 'schpatel 35sm'),
(3, 'Правило', 'pravilo'),
(4, 'Уровень', 'yroven'),
(5, 'Маклавица', 'maklavica'),
(6, 'Ведро', 'vedro'),
(10, 'штукатурный ковш', 'stukaturniy kowsh'),
(11, 'Штукатурный шпатель', 'stukaturniy schpatel');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Индексы таблицы `svod`
--
ALTER TABLE `svod`
  ADD KEY `job_id` (`job_id`),
  ADD KEY `tool_id` (`tool_id`);

--
-- Индексы таблицы `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `svod`
--
ALTER TABLE `svod`
  ADD CONSTRAINT `svod_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`),
  ADD CONSTRAINT `svod_ibfk_2` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`tool_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
