-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2024 г., 10:07
-- Версия сервера: 8.0.30
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
  `id_type_material` int NOT NULL,
  `type_material` varchar(15) DEFAULT NULL,
  `percent_brake_material` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `material_type_import`
--

INSERT INTO `material_type_import` (`id_type_material`, `type_material`, `percent_brake_material`) VALUES
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
  `id_partners` int NOT NULL,
  `type_partner` varchar(3) DEFAULT NULL,
  `name_partner` varchar(16) DEFAULT NULL,
  `director_partners` varchar(30) DEFAULT NULL,
  `email_partners` varchar(24) DEFAULT NULL,
  `telephone_partners` varchar(13) DEFAULT NULL,
  `adress_partners` varchar(69) DEFAULT NULL,
  `INN_partners` bigint DEFAULT NULL,
  `rate_partners` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `partners_import`
--

INSERT INTO `partners_import` (`id_partners`, `type_partner`, `name_partner`, `director_partners`, `email_partners`, `telephone_partners`, `adress_partners`, `INN_partners`, `rate_partners`) VALUES
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
  `id_partner_product` int NOT NULL,
  `product_partner-product` int DEFAULT NULL,
  `name_partner` int DEFAULT NULL,
  `quantity_products` int DEFAULT NULL,
  `date_sales` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `partner_products_import`
--

INSERT INTO `partner_products_import` (`id_partner_product`, `product_partner-product`, `name_partner`, `quantity_products`, `date_sales`) VALUES
(1, 1, 1, 15500, '23.03.2023'),
(2, 3, 1, 12350, '18.12.2023'),
(3, 3, 1, 37400, '07.06.2024'),
(4, 2, 2, 35000, '02.12.2022'),
(5, 4, 2, 1250, '17.05.2023'),
(6, 3, 2, 1000, '07.06.2024'),
(7, 1, 2, 7550, '01.07.2024'),
(8, 1, 3, 7250, '22.01.2023'),
(9, 2, 3, 2500, '05.07.2024'),
(10, 3, 4, 59050, '20.03.2023'),
(11, 3, 4, 37200, '12.03.2024'),
(12, 4, 4, 4500, '14.05.2024'),
(13, 3, 5, 50000, '19.09.2023'),
(14, 3, 5, 670000, '10.11.2023'),
(15, 1, 5, 35000, '15.04.2024'),
(16, 2, 5, 25000, '12.06.2024'),
(17, 1, 1, 5, '06.12.2024'),
(18, 1, 3, 300, '06.12.2024');

-- --------------------------------------------------------

--
-- Структура таблицы `products_import`
--

CREATE TABLE `products_import` (
  `id_product_import` int NOT NULL,
  `type_product` int DEFAULT NULL,
  `name_product` varchar(56) DEFAULT NULL,
  `arcticle` int DEFAULT NULL,
  `min_price_for_partner` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products_import`
--

INSERT INTO `products_import` (`id_product_import`, `type_product`, `name_product`, `arcticle`, `min_price_for_partner`) VALUES
(1, 3, 'Паркетная доска Ясень темный однополосная 14 мм', 8758385, '4456,9'),
(2, 3, 'Инженерная доска Дуб Французская елка однополосная 12 мм', 8858958, '7330,99'),
(3, 1, 'Ламинат Дуб дымчато-белый 33 класс 12 мм', 7750282, '1799,33'),
(4, 1, 'Ламинат Дуб серый 32 класс 8 мм с фаской', 7028748, '3890,41'),
(5, 4, 'Пробковое напольное клеевое покрытие 32 класс 4 мм', 5012543, '5450,59');

-- --------------------------------------------------------

--
-- Структура таблицы `product_type_import`
--

CREATE TABLE `product_type_import` (
  `id_product_type` int NOT NULL,
  `type_product` varchar(18) DEFAULT NULL,
  `coefficient_type_product` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `product_type_import`
--

INSERT INTO `product_type_import` (`id_product_type`, `type_product`, `coefficient_type_product`) VALUES
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
  ADD PRIMARY KEY (`id_type_material`);

--
-- Индексы таблицы `partners_import`
--
ALTER TABLE `partners_import`
  ADD PRIMARY KEY (`id_partners`);

--
-- Индексы таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  ADD PRIMARY KEY (`id_partner_product`),
  ADD KEY `name_partner` (`name_partner`),
  ADD KEY `product_partner-product` (`product_partner-product`);

--
-- Индексы таблицы `products_import`
--
ALTER TABLE `products_import`
  ADD PRIMARY KEY (`id_product_import`),
  ADD KEY `type_product` (`type_product`);

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
  MODIFY `id_type_material` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `partners_import`
--
ALTER TABLE `partners_import`
  MODIFY `id_partners` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  MODIFY `id_partner_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `products_import`
--
ALTER TABLE `products_import`
  MODIFY `id_product_import` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `partner_products_import`
--
ALTER TABLE `partner_products_import`
  ADD CONSTRAINT `partner_products_import_ibfk_1` FOREIGN KEY (`name_partner`) REFERENCES `partners_import` (`id_partners`),
  ADD CONSTRAINT `partner_products_import_ibfk_2` FOREIGN KEY (`product_partner-product`) REFERENCES `products_import` (`id_product_import`);

--
-- Ограничения внешнего ключа таблицы `products_import`
--
ALTER TABLE `products_import`
  ADD CONSTRAINT `products_import_ibfk_1` FOREIGN KEY (`type_product`) REFERENCES `product_type_import` (`id_product_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
