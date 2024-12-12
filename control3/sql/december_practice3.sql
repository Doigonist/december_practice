-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2024 г., 11:45
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `december_practice3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adress`
--

CREATE TABLE `adress` (
  `id_adress` int NOT NULL,
  `adress` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `adress`
--

INSERT INTO `adress` (`id_adress`, `adress`) VALUES
(1, 'Калининград'),
(2, 'Черняховск'),
(3, 'Балтийск');

-- --------------------------------------------------------

--
-- Структура таблицы `civilian`
--

CREATE TABLE `civilian` (
  `id_people` int NOT NULL,
  `fio_people` varchar(32) DEFAULT NULL,
  `login_people` varchar(6) DEFAULT NULL,
  `password_people` varchar(6) DEFAULT NULL,
  `status_people` int DEFAULT NULL,
  `adress_people` int DEFAULT NULL,
  `post_people` int DEFAULT NULL,
  `img_path_people` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `civilian`
--

INSERT INTO `civilian` (`id_people`, `fio_people`, `login_people`, `password_people`, `status_people`, `adress_people`, `post_people`, `img_path_people`) VALUES
(1, 'Иванов Иван Иванович', 'User1', 'User1', 1, 1, 1, ''),
(2, 'Васькин Илья  Владимирович', 'User2', 'User2', 2, 1, 1, ''),
(3, 'Великий Виктор Михайлович', 'User3', 'User3', 3, 1, 2, 'img/4003niko-niko-oneshot.gif'),
(5, 'Дунилина Ангелина Александровна', 'User5', 'User5', 3, 1, 2, 'img/489niko-oneshot-niko-spin.gif'),
(6, 'Жарова Елизавета Андреевна', 'User6', 'User6', 3, 1, 2, 'img/7353arthur.jpg'),
(7, 'Железнов Михаил Владимирович', 'User7', 'User7', 3, 1, 2, ''),
(8, 'Каратеева Злата Васильевна', 'User8', 'User8', 3, 1, 2, ''),
(9, 'Колесниченко Алина Владимировна', 'User9', 'User9', 3, 1, 2, ''),
(10, 'Матвеева Анастасия  Дмитриевна', 'User10', 'User10', 3, 1, 2, ''),
(11, 'Мельников Федор Евгеньевич', 'User11', 'User11', 3, 1, 2, ''),
(12, 'Морозова Алина Васильевна', 'User12', 'User12', 3, 1, 2, ''),
(13, 'Портной Никита Александрович', 'User13', 'User13', 3, 1, 2, ''),
(14, 'Рагимов Амир Анар оглы', 'User14', 'User14', 3, 1, 3, ''),
(15, 'Родин Алексей Анатольевич', 'User15', 'User15', 3, 1, 3, ''),
(16, 'Рожков Олег Константинович', 'User16', 'User16', 2, 3, 1, ''),
(17, 'Соломка Егор Николаевич', 'User17', 'User17', 3, 3, 2, ''),
(18, 'Стойко Андрей Андреевич', 'User18', 'User18', 3, 3, 3, ''),
(19, 'Харитонов Андрей Анатольевич', 'User19', 'User19', 3, 3, 3, ''),
(20, 'Швалёв Дмитрий Михайлович', 'User20', 'User20', 3, 3, 2, ''),
(21, 'Швец Кристина Александровна', 'User21', 'User21', 3, 3, 2, ''),
(22, 'Белоусов  Виктор  Андреевич', 'User22', 'User22', 3, 3, 2, ''),
(23, 'Бунковский  Дмитрий  Павлович', 'User23', 'User23', 3, 3, 3, ''),
(24, 'Вульченко  Игорь  Геннадьевич', 'User24', 'User24', 3, 3, 3, ''),
(25, 'Громыко  Александр  Николаевич', 'User25', 'User25', 3, 3, 2, ''),
(26, 'Давыдов  Илья Витальевич', 'User26', 'User26', 3, 3, 3, ''),
(27, 'Зоричева  Виктория  Андреевна', 'User27', 'User27', 3, 3, 3, ''),
(28, 'Липанина  Екатерина  Евгеньевна', 'User28', 'User28', 3, 3, 3, ''),
(29, 'Медведев  Виктор  Игоревич', 'User29', 'User29', 3, 3, 3, ''),
(30, 'Нагибина  Екатерина  Павловна', 'User30', 'User30', 3, 3, 3, ''),
(31, 'Паклин  Владимир  Валерьевич', 'User31', 'User31', 2, 2, 1, ''),
(32, 'Пряхин  Даниил  Александрович', 'User32', 'User32', 3, 2, 4, ''),
(33, 'Рязанцева  Анастасия  Евгеньевна', 'User33', 'User33', 3, 2, 4, ''),
(34, 'Сигитов  Даниил  Николаевич', 'User34', 'User34', 3, 2, 4, ''),
(35, 'Сидельников  Арсений  Сергеевич', 'User35', 'User35', 3, 2, 4, ''),
(36, 'Соколов  Дмитрий  Алексеевич', 'User36', 'User36', 3, 2, 4, ''),
(37, 'Лебедев  Тимур  Игоревич', 'User37', 'User37', 3, 2, 3, ''),
(38, 'Шамардин  Евгений Романович', 'User38', 'User38', 3, 2, 3, ''),
(39, 'Шапарь  Данила  Алексеевич', 'User39', 'User39', 3, 2, 1, ''),
(40, 'Шустов  Виктор  Сергеевич', 'User40', 'User40', 3, 2, 3, ''),
(41, 'Башин Роман Антонович', 'User41', 'User41', 3, 2, 2, ''),
(42, 'Белова Софья Сергеевна', 'User42', 'User42', 3, 2, 3, ''),
(43, 'Гагаринова Яна Валерьевна', 'User43', 'User43', 3, 2, 2, ''),
(44, 'Добровольский Виталий Романович', 'User44', 'User44', 3, 2, 4, ''),
(45, 'Евсюков Руслан Муратович', 'User45', 'User45', 3, 2, 4, ''),
(46, 'Жданов Павел Николаевич', 'User46', 'User46', 3, 2, 4, ''),
(47, 'Кондратьева Марина Александровна', 'User47', 'User47', 3, 2, 4, ''),
(48, 'Крылов Дмитрий Александрович', 'User48', 'User48', 3, 2, 4, ''),
(49, 'Кутыркин Сергей Сергеевич', 'User49', 'User49', 3, 2, 4, ''),
(50, 'Левкин Антон Викторович', 'User50', 'User50', 3, 2, 4, ''),
(51, 'Лесных Игорь Игоревич', 'User51', 'User51', 3, 1, 3, ''),
(52, 'Марцинович Илья Андреевич', 'User52', 'User52', 3, 1, 4, ''),
(53, 'Науменко Андрей Сергеевич', 'User53', 'User53', 3, 1, 3, ''),
(54, 'Пилипчук Дарья Владимировна', 'User54', 'User54', 3, 1, 4, ''),
(55, 'Силушин Данила Александрович', 'User55', 'User55', 3, 1, 3, ''),
(56, 'Стратонов Владислав Сергеевич', 'User56', 'User56', 3, 2, 4, '');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id_post` int NOT NULL,
  `post` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id_post`, `post`) VALUES
(1, 'Чиновник'),
(2, 'Студент'),
(3, 'Рабочий'),
(4, 'Ученый');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Губернатор'),
(2, 'Мэр'),
(3, 'Житель');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id_adress`);

--
-- Индексы таблицы `civilian`
--
ALTER TABLE `civilian`
  ADD PRIMARY KEY (`id_people`),
  ADD KEY `post_people` (`post_people`),
  ADD KEY `adress_people` (`adress_people`),
  ADD KEY `status_people` (`status_people`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adress`
--
ALTER TABLE `adress`
  MODIFY `id_adress` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `civilian`
--
ALTER TABLE `civilian`
  MODIFY `id_people` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `civilian`
--
ALTER TABLE `civilian`
  ADD CONSTRAINT `civilian_ibfk_1` FOREIGN KEY (`post_people`) REFERENCES `post` (`id_post`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `civilian_ibfk_2` FOREIGN KEY (`adress_people`) REFERENCES `adress` (`id_adress`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `civilian_ibfk_3` FOREIGN KEY (`status_people`) REFERENCES `status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
