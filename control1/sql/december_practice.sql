-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2024 г., 19:30
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `december_practice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `material_type_import`
--

CREATE TABLE `material_type_import` (
  `id_material_type` int(1) NOT NULL,
  `material_type` varchar(15) DEFAULT NULL,
  `procent_braka_material_type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `material_type_import`
--

INSERT INTO `material_type_import` (`id_material_type`, `material_type`, `procent_braka_material_type`) VALUES
(1, 'Тип материала 1', '0,10%'),
(2, 'Тип материала 2', '0,95%'),
(3, 'Тип материала 3', '0,28%'),
(4, 'Тип материала 4', '0,55%'),
(5, 'Тип материала 5', '0,34%');

-- --------------------------------------------------------

--
-- Структура таблицы `partners_import`
--

CREATE TABLE `partners_import` (
  `id_partners` int(1) NOT NULL,
  `type_partner` varchar(3) DEFAULT NULL,
  `name_partners` varchar(255) DEFAULT NULL,
  `director_partners` varchar(30) DEFAULT NULL,
  `email_partners` varchar(24) DEFAULT NULL,
  `tel_partners` varchar(13) DEFAULT NULL,
  `address_partners` varchar(69) DEFAULT NULL,
  `INN_partners` bigint(10) DEFAULT NULL,
  `rating_partners` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners_import`
--

INSERT INTO `partners_import` (`id_partners`, `type_partner`, `name_partners`, `director_partners`, `email_partners`, `tel_partners`, `address_partners`, `INN_partners`, `rating_partners`) VALUES
(1, 'ЗАО', 'База Строитель', 'Иванова Александра Ивановна', 'aleksandraivanova@ml.ru', '493 123 45 67', '652050, Кемеровская область, город Юрга, ул. Лесная, 15', 2222455179, 7),
(2, 'ООО', 'Паркет 29', 'Петров Василий Петрович', 'vppetrov@vl.ru', '987 123 56 78', '164500, Архангельская область, город Северодвинск, ул. Строителей, 18', 3333888520, 7),
(3, 'ПАО', 'Стройсервис', 'Соловьев Андрей Николаевич', 'ansolovev@st.ru', '812 223 32 00', '188910, Ленинградская область, город Приморск, ул. Парковая, 21', 4440391035, 7),
(4, 'ОАО', 'Ремонт и отделка', 'Воробьева Екатерина Валерьевна', 'ekaterina.vorobeva@ml.ru', '444 222 33 11', '143960, Московская область, город Реутов, ул. Свободы, 51', 1111520857, 5),
(5, 'ЗАО', 'МонтажПро', 'Степанов Степан Сергеевич', 'stepanov@stepan.ru', '912 888 33 33', '309500, Белгородская область, город Старый Оскол, ул. Рабочая, 122', 5552431140, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `partner_products_import`
--

CREATE TABLE `partner_products_import` (
  `id_partner_products` int(2) NOT NULL,
  `products_partner_products` int(255) DEFAULT NULL,
  `partner_name_partner_products` int(255) DEFAULT NULL,
  `product_count_partner_products` int(6) DEFAULT NULL,
  `date_of_sell_partner_products` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partner_products_import`
--

INSERT INTO `partner_products_import` (`id_partner_products`, `products_partner_products`, `partner_name_partner_products`, `product_count_partner_products`, `date_of_sell_partner_products`) VALUES
(1, 1, 1, 15500, '23.03.2023'),
(2, 3, 1, 12350, '18.12.2023'),
(3, 4, 1, 37400, '07.06.2024'),
(4, 2, 2, 35000, '02.12.2022'),
(5, 5, 2, 1250, '17.05.2023'),
(6, 3, 2, 1000, '07.06.2024'),
(7, 1, 2, 7550, '01.07.2024'),
(8, 1, 3, 7250, '22.01.2023'),
(9, 2, 3, 2500, '05.07.2024'),
(10, 4, 4, 59050, '20.03.2023'),
(11, 3, 4, 37200, '12.03.2024'),
(12, 5, 4, 4500, '14.05.2024'),
(13, 3, 5, 50000, '19.09.2023'),
(14, 4, 5, 670000, '10.11.2023'),
(15, 1, 5, 35000, '15.04.2024'),
(16, 2, 5, 25000, '12.06.2024');

-- --------------------------------------------------------

--
-- Структура таблицы `products_import_1`
--

CREATE TABLE `products_import_1` (
  `id_products` int(1) NOT NULL,
  `type_products` int(255) DEFAULT NULL,
  `name_products` varchar(56) DEFAULT NULL,
  `article_products` int(7) DEFAULT NULL,
  `minimal_cost_products` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_import_1`
--

INSERT INTO `products_import_1` (`id_products`, `type_products`, `name_products`, `article_products`, `minimal_cost_products`) VALUES
(1, 3, 'Паркетная доска Ясень темный однополосная 14 мм', 8758385, '4456,90'),
(2, 3, 'Инженерная доска Дуб Французская елка однополосная 12 мм', 8858958, '7330,99'),
(3, 1, 'Ламинат Дуб дымчато-белый 33 класс 12 мм', 7750282, '1799,33'),
(4, 1, 'Ламинат Дуб серый 32 класс 8 мм с фаской', 7028748, '3890,41'),
(5, 4, 'Пробковое напольное клеевое покрытие 32 класс 4 мм', 5012543, '5450,59');

-- --------------------------------------------------------

--
-- Структура таблицы `product_type_import`
--

CREATE TABLE `product_type_import` (
  `id_product_type` int(1) NOT NULL,
  `type_product_type` varchar(18) DEFAULT NULL,
  `coefficient_product_type` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_type_import`
--

INSERT INTO `product_type_import` (`id_product_type`, `type_product_type`, `coefficient_product_type`) VALUES
(1, 'Ламинат', '2,35'),
(2, 'Массивная доска', '5,15'),
(3, 'Паркетная доска', '4,34'),
(4, 'Пробковое покрытие', '1,5');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `material_type_import`
--
ALTER TABLE `material_type_import`
  ADD PRIMARY KEY (`id_material_type`);

--
-- Индексы таблицы `partners_import`
--
ALTER TABLE `partners_import`
  ADD PRIMARY KEY (`id_partners`);

--
-- Индексы таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  ADD PRIMARY KEY (`id_partner_products`),
  ADD KEY `partner_name_partner_products` (`partner_name_partner_products`),
  ADD KEY `products_partner_products` (`products_partner_products`);

--
-- Индексы таблицы `products_import_1`
--
ALTER TABLE `products_import_1`
  ADD PRIMARY KEY (`id_products`),
  ADD KEY `type_products` (`type_products`);

--
-- Индексы таблицы `product_type_import`
--
ALTER TABLE `product_type_import`
  ADD PRIMARY KEY (`id_product_type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `material_type_import`
--
ALTER TABLE `material_type_import`
  MODIFY `id_material_type` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `partners_import`
--
ALTER TABLE `partners_import`
  MODIFY `id_partners` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  MODIFY `id_partner_products` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `products_import_1`
--
ALTER TABLE `products_import_1`
  MODIFY `id_products` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product_type_import`
--
ALTER TABLE `product_type_import`
  MODIFY `id_product_type` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  ADD CONSTRAINT `partner_products_import_ibfk_1` FOREIGN KEY (`partner_name_partner_products`) REFERENCES `partners_import` (`id_partners`),
  ADD CONSTRAINT `partner_products_import_ibfk_2` FOREIGN KEY (`products_partner_products`) REFERENCES `products_import_1` (`id_products`);

--
-- Ограничения внешнего ключа таблицы `products_import_1`
--
ALTER TABLE `products_import_1`
  ADD CONSTRAINT `products_import_1_ibfk_1` FOREIGN KEY (`type_products`) REFERENCES `product_type_import` (`id_product_type`);

--
-- Ограничения внешнего ключа таблицы `product_type_import`
--
ALTER TABLE `product_type_import`
  ADD CONSTRAINT `product_type_import_ibfk_1` FOREIGN KEY (`id_product_type`) REFERENCES `products_import_1` (`id_products`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
