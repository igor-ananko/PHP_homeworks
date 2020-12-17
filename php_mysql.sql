-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2020 г., 17:01
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_mysql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `picture`, `description`, `price`, `name`) VALUES
(1, 'kolbasa_v_obolochke_biolon_shejp.jpg', 'Точный рецепт Докторской колбасы, которая использовалась как промышленный стандарт с 1936 по 1974 год по Конникову А.Г. Колбасы и мясокопенности 1938г:\r\n\r\nКоличество ингредиентов для приготовления 100 кг Докторской колбасы:\r\n<ul class=\"productList\">\r\n<li>15 кг мясо говяжье высшего сорта</li>\r\n<li>60 кг свинины не жирной</li>\r\n<li>25 кг свинины жирной</li>\r\n<li>2,5 кг соли</li>\r\n<li>30 гр селитры</li>\r\n<li>100 гр сахара</li>\r\n<li>30 грамм кардамона</li> \r\n</ul>', 1000, 'Докторская колбаса'),
(2, '800px-kolbasy_krakovskaya_suhaya_i_vetchinnaya.jpg', 'Традиционная свиная грубого помола колбаса, производящаяся с добавлением специй, соли и картофельного крахмала (в мясное содержание должно входить не менее 85 % ветчины). Выпускается как долгохранящаяся («сухая»), так и обычная разновидность, не предназначенная для длительного хранения. Известна как высококачественный мясной продукт в польской Галиции и Малой Польше по крайней мере с начала XIX столетия. Одним из наиболее искусных колбасников Кракова был мастер Винцент Саталецкий (умер в 1914), унаследовавший кулинарные секреты от своего предка, колбасника Яноша из Кошице (умер в 1829 году). В центре Кракова, на улице Флорианская, находился «дом Саталецких», где вплоть до 1918 года были расположены первая фабрика по производству и магазин по продаже «краковской».', 950, 'Краковская колбаса'),
(3, 'salami_aka.jpg', 'Смеси сырого мяса, как правило, оставляют на день для ферментации, затем смесь набивают либо в натуральную, либо в несъедобную целлюлозную оболочку и развешивают для высушивания. Термообработка примерно при 40 °C может ускорить дальнейшую ферментацию и начать процесс сушки. Повышенные температуры (около 60 °C) используют для остановки ферментации при достижении требуемой кислотности, но продукт не считается полностью приготовленным (75 °C и выше). Оболочки также часто покрываются съедобными культурами грибка пеницилла. Оболочка желательна, так как это придаёт аромат, помогает процессу сушки и предотвращает порчу мяса во время процесса отвердевания.', 1500, 'Салями'),
(4, 'boudin3.jpg', 'Кровяна́я колбаса́ (кровянка, чёрный пудинг) — вид колбасы, главным ингредиентом которой является бычья, телячья и/или свиная кровь, очищенная от фибрина (кусочков свернувшейся крови).\r\n\r\nДля очищения вытекающую из только что убитого животного кровь взбивают метёлкой; очищенная кровь может долго сохраняться, а перед употреблением её процеживают сквозь мелкое сито.\r\n\r\nСогласно древнегреческому комедиографу Менандру, лучшим поваром в Афинах слыл некий повар Афтеней, который и изобрёл кровяную колбасу[1].\r\n\r\nФарш для такой колбасы состоит из свиного мяса, шкурок, или обрезков от других колбас, приправы; в ряде случаев также добавляется бычий, телячий или свиной язык. Кровяная колбаса в приготовлении непроста. При убое свиньи отделяют два важных компонента: кишки и кровь. Чтобы начинка приобрела более твердую консистенцию, добавляют различные ингредиенты. Причем у каждого кулинара свой рецепт: кто-то обходится салом и специями, кто-то кладет варёную крупу, жареный лук, субпродукты, сложно найти два одинаковых рецепта.', 1200, 'Кровяная колбаса'),
(6, '800px-jamon_cortado-madrid-2009.jpg', 'Хамон засыпают большим количеством соли, чтобы ускорить процесс обезвоживания. Длительность соления зависит от массы ноги и климатических условий каждой области, но в среднем оно составляет один день на килограмм продукта.\r\n\r\nВ зависимости от массы окорока и климатических условий географической области, процесс сушки занимает от шести до 36 месяцев. Сушка обычно начинается зимой или ранней весной, чтобы воспользоваться преимуществом медленного и постепенного увеличения температуры вплоть до позднего лета.\r\n\r\nОсенью хамон перемещают на более низкие этажи помещения, где он находится в течение 9—12 месяцев при температуре 8—10 °C. Здесь начинается процесс вяления: под воздействием микрофлоры мясо приобретает характерные структуру, вкус и аромат.', 2500, 'Хамон');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pathPreview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path`, `size`, `pathPreview`, `hits`) VALUES
(18, '../images/kolbasa_v_obolochke_biolon_shejp.jpg', '', '../images/preview/kolbasa_v_obolochke_biolon_shejp.jpg', 21),
(19, '../images/800px-kolbasy_krakovskaya_suhaya_i_vetchinnaya.jpg', '', '../images/preview/800px-kolbasy_krakovskaya_suhaya_i_vetchinnaya.jpg', 5),
(20, '../images/salami_aka.jpg', '', '../images/preview/salami_aka.jpg', 37),
(21, '../images/boudin3.jpg', '', '../images/preview/boudin3.jpg', 0),
(23, '../images/800px-jamon_cortado-madrid-2009.jpg', '', '../images/preview/800px-jamon_cortado-madrid-2009.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `catalog_id`, `count`) VALUES
(7, 4, 1, 6),
(8, 4, 4, 5),
(9, 5, 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `otzyvy`
--

CREATE TABLE `otzyvy` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otzyv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `otzyvy`
--

INSERT INTO `otzyvy` (`id`, `username`, `otzyv`, `data`) VALUES
(1, 'Вася', '    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur cum eos eveniet hic ipsum labore, nam natus nemo nisi, nostrum odio odit quisquam repellat saepe sapiente soluta temporibus vero? Mollitia odit officiis perspiciatis. Accusamus animi aspernatur consectetur deserunt dolore ea esse, ex, expedita itaque libero nulla perferendis perspiciatis possimus quia quibusdam quis tempore ullam veniam voluptatem voluptatum! Adipisci blanditiis exercitationem facere ipsam neque officia possimus quas saepe! \r\n', '2020-12-12'),
(2, 'Вася', '    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur cum eos eveniet hic ipsum labore, nam natus nemo nisi, nostrum odio odit quisquam repellat saepe sapiente soluta temporibus vero? Mollitia odit officiis perspiciatis. Accusamus animi aspernatur consectetur deserunt dolore ea esse, ex, expedita itaque libero nulla perferendis perspiciatis possimus quia quibusdam quis tempore ullam veniam voluptatem voluptatum! Adipisci blanditiis exercitationem facere ipsam neque officia possimus quas saepe! \r\n', '2020-12-12'),
(36, 'Игорь', 'You do not need to unset the POST var as they are not maintained across requests. That is, if you use header(), you are essentially creating a new request so the previous POSTs would not be sent with it.', '2020-12-13'),
(37, '', '', '2020-12-17'),
(38, '', '', '2020-12-17'),
(39, '', '<script>Alert(222)</script>', '0000-00-00'),
(40, '', '<script>Alert(222)</script>', '0000-00-00'),
(41, '', '<script>Alert(222)</script>', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `role`) VALUES
(4, '21232f297a57a5a743894a0e4a801fc3', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, '098f6bcd4621d373cade4e832627b4f6', 'ad0234829205b9033196ba818f7a872b', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otzyvy`
--
ALTER TABLE `otzyvy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `otzyvy`
--
ALTER TABLE `otzyvy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
