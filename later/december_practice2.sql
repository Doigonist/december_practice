-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2024 г., 11:03
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
-- База данных: `december_practice2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exam`
--

CREATE TABLE `exam` (
  `id-exam` int NOT NULL,
  `exam-certificate` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `exam`
--

INSERT INTO `exam` (`id-exam`, `exam-certificate`) VALUES
(1, 'Экзамен'),
(2, 'Зачет');

-- --------------------------------------------------------

--
-- Структура таблицы `kurator`
--

CREATE TABLE `kurator` (
  `id-kurator` int NOT NULL,
  `kurator-group` varchar(9) DEFAULT NULL,
  `code-spetiality-kurator` int DEFAULT NULL,
  `kurator-kurator` varchar(32) DEFAULT NULL,
  `kurator-login` varchar(8) DEFAULT NULL,
  `kurator-password` varchar(8) DEFAULT NULL,
  `kurator-email` varchar(30) DEFAULT NULL,
  `telephone-kurator` varchar(13) DEFAULT NULL,
  `adress-kurator` varchar(69) DEFAULT NULL,
  `INN-kurator` bigint DEFAULT NULL,
  `rate-kurator` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `kurator`
--

INSERT INTO `kurator` (`id-kurator`, `kurator-group`, `code-spetiality-kurator`, `kurator-kurator`, `kurator-login`, `kurator-password`, `kurator-email`, `telephone-kurator`, `adress-kurator`, `INN-kurator`, `rate-kurator`) VALUES
(1, 'СА 21-21', 1, 'Бычай Елена Васильевна', 'prepod1', 'prepod1', 'aleksandraivanova@ml.ru', '493 123 45 67', '652050, Кемеровская область, город Юрга, ул. Лесная, 15', 2222455179, 7),
(2, 'СА 21-22', 1, 'Мартиросян Татьяна Эдвардовна', 'prepod2', 'prepod2', 'vppetrov@vl.ru', '987 123 56 78', '164500, Архангельская область, город Северодвинск, ул. Строителей, 18', 3333888520, 7),
(3, 'СА 22-21', 1, 'Пономарчук Анастасия Анатольевна', 'prepod3', 'prepod3', 'ansolovev@st.ru', '812 223 32 00', '188910, Ленинградская область, город Приморск, ул. Парковая, 21', 4440391035, 7),
(4, 'СА 22-22', 1, 'Петровская Татьяна Николаевна', 'prepod4', 'prepod4', 'ekaterina.vorobeva@ml.ru', '444 222 33 11', '143960, Московская область, город Реутов, ул. Свободы, 51', 1111520857, 5),
(5, 'СА 23-21', 1, 'Сидорова Оксана Андреевна', 'prepod5', 'prepod5', 'stepanov@stepan.ru', '912 888 33 33', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 122', 5552431140, 10),
(6, 'ИСП 21-21', 2, 'Бобылёва Марина Анатольевна', 'prepod6', 'prepod6', 'o8540342@yandex.ru', '900 670 691', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 123', 5552431141, 7),
(7, 'ИСП 21-22', 2, 'Прокофьева Галина Алексеевна', 'prepod7', 'prepod7', 'faimsahapov@mail.ru', '952 673 10 31', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 124', 5552431142, 7),
(8, 'ИСП 22-21', 2, 'Кондакова Виктория Евгеньевна', 'prepod8', 'prepod8', 'tr_tanua2001@mail.ru', '911 794 963', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 125', 5552431143, 7),
(9, 'ОБС 20-2', 3, 'Бычай Алексей Петрович', 'prepod9', 'prepod9', 'patupikovdo@gmail.com', '964 237 20 77', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 126', 5552431144, 5),
(10, 'ОБС 21-2', 3, 'Кучиева Наталия Анатольевна', 'prepod10', 'prepod10', 'irina2003874@gmail.com', '911 954 03 42', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 127', 5552431145, 6),
(11, 'ОБС 22-2', 3, 'Бледных Ольга Витальевна', 'prepod11', 'prepod11', 'alenadyuzhikva@mail.ru', '952 707 250', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 128', 5552431146, 7),
(12, 'ОБС 23-2', 3, 'Кузякин Алексей Николаевич', 'prepod12', 'prepod12', 'zmvmax@yandex.ru', '901 393 25 30', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 129', 5552431147, 7),
(13, 'БАС 22-2', 4, 'Шимина Наталья Георгиевна', 'prepod13', 'prepod13', 'kia54@mail.ru', '962 170 97 01', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 130', 5552431148, 7),
(14, 'БАС 23-2', 4, 'Юркина Наталья Алексеевна', 'prepod14', 'prepod14', 'lunina.angelinka2002@gmail.com', '950 676 781', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 131', 5552431149, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `mark`
--

CREATE TABLE `mark` (
  `id-mark` int NOT NULL,
  `name-student` int DEFAULT NULL,
  `mark-descipline` varchar(12) DEFAULT NULL,
  `mark-mark` int DEFAULT NULL,
  `certificate-mark` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `mark`
--

INSERT INTO `mark` (`id-mark`, `name-student`, `mark-descipline`, `mark-mark`, `certificate-mark`) VALUES
(1, 1, 'Русский язык', 5, 1),
(2, 1, 'Математика', 4, 1),
(3, 1, 'История', 3, 2),
(4, 2, 'Русский язык', 5, 1),
(5, 2, 'Математика', 2, 1),
(6, 2, 'История', 3, 2),
(7, 3, 'Русский язык', 4, 1),
(8, 3, 'Математика', 5, 1),
(9, 3, 'История', 2, 2),
(10, 4, 'Русский язык', 5, 1),
(11, 4, 'Математика', 4, 1),
(12, 4, 'История', 2, 2),
(13, 5, 'Русский язык', 3, 1),
(14, 5, 'Математика', 4, 1),
(15, 5, 'История', 4, 2),
(16, 6, 'Русский язык', 4, 1),
(17, 6, 'Математика', 5, 1),
(18, 6, 'История', 3, 2),
(19, 7, 'Русский язык', 3, 1),
(20, 7, 'Математика', 5, 1),
(21, 7, 'История', 5, 2),
(22, 8, 'Русский язык', 3, 1),
(23, 8, 'Математика', 2, 1),
(24, 8, 'История', 5, 2),
(25, 9, 'Русский язык', 3, 1),
(26, 9, 'Математика', 3, 1),
(27, 9, 'История', 4, 2),
(28, 10, 'Русский язык', 4, 1),
(29, 10, 'Математика', 5, 1),
(30, 10, 'История', 3, 2),
(31, 11, 'Русский язык', 5, 1),
(32, 11, 'Математика', 2, 1),
(33, 11, 'История', 4, 2),
(34, 12, 'Русский язык', 3, 1),
(35, 12, 'Математика', 5, 1),
(36, 12, 'История', 5, 2),
(37, 13, 'Русский язык', 5, 1),
(38, 13, 'Математика', 3, 1),
(39, 13, 'История', 3, 2),
(40, 14, 'Русский язык', 3, 1),
(41, 14, 'Математика', 4, 1),
(42, 14, 'История', 3, 2),
(43, 15, 'Русский язык', 4, 1),
(44, 15, 'Математика', 3, 1),
(45, 15, 'История', 5, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `spetiality`
--

CREATE TABLE `spetiality` (
  `id-spetiality` int NOT NULL,
  `code-spetiality` varchar(8) DEFAULT NULL,
  `spetiality-spetiality` varchar(47) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `spetiality`
--

INSERT INTO `spetiality` (`id-spetiality`, `code-spetiality`, `spetiality-spetiality`) VALUES
(1, '09.02.06', 'Сетевое и системное администрирование'),
(2, '09.02.07', 'Информационные системы и программирование'),
(3, '10.02.05', 'Безопасность информационных систем'),
(4, '25.02.08', 'Управление беспилотными летательными аппаратами');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id-student` int NOT NULL,
  `student-group` int NOT NULL,
  `student-name` varchar(28) DEFAULT NULL,
  `login-student` varchar(9) DEFAULT NULL,
  `password-student` varchar(9) DEFAULT NULL,
  `book-student` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id-student`, `student-group`, `student-name`, `login-student`, `password-student`, `book-student`) VALUES
(1, 1, 'Башлаков Михаил Андреевич', 'student1', 'student1', '5360/22'),
(2, 1, 'Бобло Мелина Константиновна', 'student2', 'student2', '5361/22'),
(3, 2, 'Борская Виктория Игоревна', 'student3', 'student3', '5362/22'),
(4, 5, 'Глазунов Александр Павлович', 'student4', 'student4', '5363/22'),
(5, 6, 'Дёмин Максим Александрович', 'student5', 'student5', '5364/22'),
(6, 7, 'Евграфов Сергей Артурович', 'student6', 'student6', '5365/22'),
(7, 8, 'Качанов Александр Евгеньевич', 'student7', 'student7', '5366/22'),
(8, 9, 'Корнилов Глеб Олегович', 'student8', 'student8', '5368/22'),
(9, 10, 'Кульков Антон Дмитриевич', 'student9', 'student9', '5369/22'),
(10, 11, 'Мирошник Максим', 'student10', 'student10', '5371/22'),
(11, 12, 'Митенева Варвара Руслановна', 'student11', 'student11', '5372/22'),
(12, 13, 'Родин Иван Анатольевич', 'student12', 'student12', '5374/22'),
(13, 14, 'Сергеев Матвей Леонидович', 'student13', 'student13', '5376/22'),
(14, 14, 'Чиджавадзе Давид Османович', 'student14', 'student14', '5377/22'),
(15, 11, 'Эртель Данил Иванович', 'student15', 'student15', '5379/22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id-exam`);

--
-- Индексы таблицы `kurator`
--
ALTER TABLE `kurator`
  ADD PRIMARY KEY (`id-kurator`),
  ADD KEY `code-spetiality-kurator` (`code-spetiality-kurator`);

--
-- Индексы таблицы `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id-mark`),
  ADD KEY `name-student` (`name-student`),
  ADD KEY `certificate-mark` (`certificate-mark`);

--
-- Индексы таблицы `spetiality`
--
ALTER TABLE `spetiality`
  ADD PRIMARY KEY (`id-spetiality`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id-student`),
  ADD KEY `student-group` (`student-group`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `exam`
--
ALTER TABLE `exam`
  MODIFY `id-exam` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `kurator`
--
ALTER TABLE `kurator`
  MODIFY `id-kurator` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `mark`
--
ALTER TABLE `mark`
  MODIFY `id-mark` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `spetiality`
--
ALTER TABLE `spetiality`
  MODIFY `id-spetiality` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id-student` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `kurator`
--
ALTER TABLE `kurator`
  ADD CONSTRAINT `kurator_ibfk_1` FOREIGN KEY (`code-spetiality-kurator`) REFERENCES `spetiality` (`id-spetiality`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_1` FOREIGN KEY (`name-student`) REFERENCES `student` (`id-student`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `mark_ibfk_2` FOREIGN KEY (`certificate-mark`) REFERENCES `exam` (`id-exam`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student-group`) REFERENCES `kurator` (`id-kurator`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
