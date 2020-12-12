-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2020 г., 00:34
-- Версия сервера: 10.4.16-MariaDB
-- Версия PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab06`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actors`
--

CREATE TABLE `actors` (
  `idActors` int(11) NOT NULL,
  `NameActors` varchar(45) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Date_birth` date NOT NULL,
  `idAwards` int(11) NOT NULL,
  `idFilms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `actors`
--

INSERT INTO `actors` (`idActors`, `NameActors`, `Phone`, `Date_birth`, `idAwards`, `idFilms`) VALUES
(1, 'Vasia', 234, '2020-12-24', 1, 1),
(2, 'Lili', 435, '2020-12-30', 5, 4),
(3, 'Bobo', 11, '2020-12-10', 3, 3),
(4, 'lala', 324, '2020-12-10', 4, 1),
(6, 'Alex', 44444444, '2020-12-24', 2, 2),
(7, 'Tom', 44444444, '2020-12-24', 1, 4),
(10, 'Patrik', 4444, '2020-12-23', 3, 1),
(11, 'Lionardo', 234234232, '2020-02-11', 3, 3),
(12, 'Mike', 123, '2020-12-23', 1, 1),
(13, 'Konan', 234, '2020-12-23', 4, 4),
(14, 'Jony', 525355, '2020-12-03', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `awards`
--

CREATE TABLE `awards` (
  `idAwards` int(11) NOT NULL,
  `NameAwards` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `awards`
--

INSERT INTO `awards` (`idAwards`, `NameAwards`, `Type`) VALUES
(1, 'Оскар', 'Статуетка'),
(2, 'Золотий глобус', 'Статуетка'),
(3, 'Кінопремія Голлівуду', 'Грошова премія'),
(4, 'Еммі', 'Статуетка'),
(5, 'Сатурн', 'Грошова премія');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `idFilms` int(11) NOT NULL,
  `NameFilms` varchar(45) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`idFilms`, `NameFilms`, `Data`) VALUES
(1, 'Месники', '2020-12-09'),
(2, 'Бетмен', '2020-12-21'),
(3, 'Роккі', '2020-12-08'),
(4, 'Нестримні', '2020-12-16');

-- --------------------------------------------------------

--
-- Структура таблицы `president`
--

CREATE TABLE `president` (
  `idPresident` int(11) NOT NULL,
  `NamePresident` varchar(45) NOT NULL,
  `DataBirth` date NOT NULL,
  `Studio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `president`
--

INSERT INTO `president` (`idPresident`, `NamePresident`, `DataBirth`, `Studio`) VALUES
(1, 'Bo Bo', '2020-12-14', 'Warner Bros'),
(2, 'Jon Li', '2020-12-14', '20th Century Fox'),
(3, 'Tom Henry', '2020-12-23', 'Universal Pictures');

-- --------------------------------------------------------

--
-- Структура таблицы `studio`
--

CREATE TABLE `studio` (
  `idStudio` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `studio`
--

INSERT INTO `studio` (`idStudio`, `Name`, `City`) VALUES
(1, 'Warner Bros', 'Hollywood'),
(2, 'Universal Pictures', 'Hollywood'),
(3, '20th Century Fox', 'Hollywood');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`idActors`);

--
-- Индексы таблицы `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`idAwards`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`idFilms`);

--
-- Индексы таблицы `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`idPresident`);

--
-- Индексы таблицы `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`idStudio`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actors`
--
ALTER TABLE `actors`
  MODIFY `idActors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `awards`
--
ALTER TABLE `awards`
  MODIFY `idAwards` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `idFilms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `president`
--
ALTER TABLE `president`
  MODIFY `idPresident` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `studio`
--
ALTER TABLE `studio`
  MODIFY `idStudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
