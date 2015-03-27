-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2015 at 11:37 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.23-1+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `id_product`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Rolex', ''),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Hublot', ''),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Casio', ''),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Adamas Piguet', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_02_27_171122_create_products_table', 1),
('2015_02_27_171202_create_categories_table', 1),
('2015_03_06_184602_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `price`, `img`, `weight`, `property`, `marka`, `model`, `video`, `created_at`, `updated_at`, `name`) VALUES
(1, 'Adamas Piguet', '2150', '1427477393image.jpg', '97', 'Мужские водонепроницаемые часы', 'Adamas Piguet', 'WT-43', '1427477393video.mp4', '2015-03-27 14:29:53', '2015-03-27 14:29:53', NULL),
(2, 'Adamas Piguet', '3500', '1427477431image.jpg', '80', 'механизм кварцевый, корпус: сталь с покрытием, 51 мм, минеральное стекло, 100 м, светомасса на стрелках и индексах, браслет: кожаный', 'Adamas Piguet', 'S 45', '1427477431video.mp4', '2015-03-27 14:30:31', '2015-03-27 14:30:31', NULL),
(3, 'Adamas Piguet', '2690', '1427477486image.jpg', '75', 'нержавеющая сталь, 44.9 мм, минеральное стекло, 100 м, электронная подсветка, браслет: металлический ', 'Adamas Piguet', 'A8', '1427477486video.mp4', '2015-03-27 14:31:26', '2015-03-27 14:31:26', NULL),
(4, 'Casio', '3690', '1427477555image.jpg', '69', 'нержавеющая сталь, 22 мм, браслет: кожаный ', 'Casio', 'TT', '1427477555video.mp4', '2015-03-27 14:32:35', '2015-03-27 14:32:35', NULL),
(5, 'Casio', '1900', '1427477624image.jpg', '66', 'Коллекция DS Podium Lady Механизм кварц Корпус нержавеющая сталь Стекло сапфировое', 'Casio', 'T-3', '1427477624video.mp4', '2015-03-27 14:33:44', '2015-03-27 14:33:44', NULL),
(6, 'Casio', '2900', '1427477692image.jpg', '61', 'Индикация времени      	стрелки Цифры  	арабские Цвет корпуса 	серебристый Цвет циферблата 	белый', 'Casio', 'PP', '1427477692video.mp4', '2015-03-27 14:34:52', '2015-03-27 14:34:52', NULL),
(7, 'Hublot', '2583', '1427486908image.jpg', '99', 'Лимитированная серия G-Shock Sky Cockpit+SC bangers Водозащита: 20 Атм (200 метров) Корпус: Полимерный Браслет/ремень: Полимерный Пряжка на ремне ', 'Hublot', 'A 45', '1427486908video.mp4', '2015-03-27 17:08:28', '2015-03-27 17:08:28', NULL),
(8, 'Hublot', '2500', '1427486945image.jpg', '99', 'Сапфировое стекло Tough Solar — Часы на солнечных батарях Цвет: Черный Размеры: 48.4 х 53.8 х 17.3 ', 'Hublot', 'K7', '1427486945video.mp4', '2015-03-27 17:09:05', '2015-03-27 17:09:05', NULL),
(9, 'Hublot', '2100', '1427486986image.jpg', '100', 'Triple G Resist  Ударопрочная с сопротивлением центробежной силе и вибрации.     Сапфировое стекло  Высокопрочное долговечное стекло с антибликовым покрытием, устойчивое к микро-царапинам, трещинам, помутнению', 'Hublot', 'Q7', '1427486986video.mp4', '2015-03-27 17:09:46', '2015-03-27 17:09:46', NULL),
(10, 'Rolex', '9999', '1427487043image.jpg', '110', 'Необритовое покрытие  Специфическое покрытие, используемое для стрелок и/или делений, индикаторов часов, которое аккумулирует свет днем, фосфорицирует в темноте и улучшает визуальное восприятие данных.   ', 'Rolex', 'L45', '1427487043video.mp4', '2015-03-27 17:10:43', '2015-03-27 17:10:43', NULL),
(11, 'Rolex', '1110', '1427487082image.jpg', '105', 'Водонепроницаемость 200 метров  Динамическое давление воды при интенсивном плавании или прыжках в воду намного превышает статическое – это снижает герметичность часов. Модели с влагостойкостью 200 метров предназначены для самых активных видов спорта и дли', 'Rolex', 'll', '1427487082video.mp4', '2015-03-27 17:11:22', '2015-03-27 17:11:22', NULL),
(12, 'Rolex', '15000', '1427487118image.jpg', '107', 'Ремешок из полимерного материала  Полиамидная резина Fine Resin – инновационный материал уникальной прочности, сниженного веса, устойчивый к выгоранию и порче агрессивными средами.     Подзаряжаемая солнечная батарея  Состоит из трех компонентов – солнечн', 'Rolex', 'AA', '1427487118video.mp4', '2015-03-27 17:11:58', '2015-03-27 17:11:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'senior.te444@yandex.ru', '$2y$10$it2isp7pscoApY..0EU.IeO9oytoKqzEykqgUo1px5miCkybmLaMC', '1', NULL, '2015-03-27 11:16:56', '2015-03-27 11:16:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
