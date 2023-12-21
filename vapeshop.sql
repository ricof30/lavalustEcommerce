-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2023 at 09:57 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vapeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `token`) VALUES
(1, 'admin', 'admin123', '54b90697feb91ba20310ef52cee38d32');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `product_id` int NOT NULL,
  `payment_id` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int NOT NULL,
  `total_amount` float NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `region` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `notes` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_id` (`product_id`),
  KEY `fk_payment_id` (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `email`, `product_id`, `payment_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `total_amount`, `status`, `date`, `region`, `province`, `municipality`, `barangay`, `postal_code`, `street_name`, `payment_method`, `notes`) VALUES
(103, 'ricofontecilla30@gmail.com', 77, 0, 'Vape1', 'vape.png', 500, 2, 1050, '3', '2023-12-21 08:14:41.200005', '4b', 'oriental mindoro', 'naujan', 'masaging', 'sitio ibab', '5200', '', 'sa kanto ng yamaha'),
(104, 'ricofontecilla30@gmail.com', 76, 0, 'Vape2', 'vape2.png', 699, 1, 749, '2', '2023-12-21 08:32:55.289228', '4b', 'oriental mindoro', 'naujan', 'masaging', 'sitio ibab', '5200', '', 'kahit saan'),
(105, 'ricofontecilla30@gmail.com', 84, 0, 'NebulaVape', 'vape6.png', 650, 3, 2000, '2', '2023-12-21 08:32:55.292383', '4b', 'oriental mindoro', 'naujan', 'masaging', 'sitio ibab', '5200', '', 'kahit saan'),
(106, 'adrian@gmail.com', 76, 0, 'Vape2', 'vape2.png', 699, 2, 1448, '1', '2023-12-21 08:35:43.594912', '4b', 'oriental mindoro', 'naujan', 'masaging', 's', '5200', '', 'kay berna'),
(107, 'adrian@gmail.com', 84, 0, 'NebulaVape', 'vape6.png', 650, 5, 3300, '1', '2023-12-21 08:35:43.595646', '4b', 'oriental mindoro', 'naujan', 'masaging', 's', '5200', '', 'kay berna');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paypal_order_id` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `payer_id` varchar(100) NOT NULL,
  `payer_email` varchar(100) NOT NULL,
  `payer_given_name` varchar(50) DEFAULT NULL,
  `payer_surname` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `update_time` datetime NOT NULL,
  `address_country_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `paypal_order_id` (`paypal_order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `paypal_order_id`, `create_time`, `payer_id`, `payer_email`, `payer_given_name`, `payer_surname`, `status`, `update_time`, `address_country_code`) VALUES
(32, '7HK16381UF7575031', '2023-12-06 06:10:30', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-06 06:11:34', 'US'),
(31, '7F7973651Y375345H', '2023-12-05 13:17:39', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-05 13:18:10', 'US'),
(30, '5LU57435UW252811J', '2023-12-05 13:08:04', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-05 13:08:24', 'US'),
(29, '30769080XA6070431', '2023-12-05 02:06:57', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-05 02:07:51', 'US'),
(33, '7CM79568058786208', '2023-12-11 03:35:10', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-11 03:35:38', 'US'),
(34, '6XX29681U9122311K', '2023-12-11 12:07:39', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-11 12:08:19', 'US'),
(35, '8S426402PD9399236', '2023-12-12 01:03:00', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-12 01:03:37', 'US'),
(36, '6WN5820750092093A', '2023-12-12 01:32:17', 'TRR3M339Z8ABW', 'sb-aruzo28513818@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-12 01:32:32', 'US'),
(37, '2M9511079T314700Y', '2023-12-21 08:13:30', 'C2RU356A4ZSTE', 'sb-lpvk828527848@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-21 08:14:39', 'US'),
(38, '6AF46520B02014251', '2023-12-21 08:32:24', 'C2RU356A4ZSTE', 'sb-lpvk828527848@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-21 08:32:54', 'US'),
(39, '5B018462W2933360D', '2023-12-21 08:35:25', 'C2RU356A4ZSTE', 'sb-lpvk828527848@personal.example.com', 'John', 'Doe', 'COMPLETED', '2023-12-21 08:35:42', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(150) NOT NULL,
  `stocks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `stocks`) VALUES
(79, 'Vape4', 499, 'vape4.jpg', 'It is a battery-operated device that delivers a vaporized liquid solution, typically containing nicotine, flavorings, and other chemicals.', 9),
(77, 'Vape1', 500, 'vape.png', 'It is a battery-operated device that delivers a vaporized liquid solution, typically containing nicotine, flavorings, and other chemicals.', 20),
(76, 'Vape2', 699, 'vape2.png', 'It is a battery-operated device that delivers a vaporized liquid solution, typically containing nicotine, flavorings, and other chemicals.', 10),
(78, 'Vape3', 500, 'vape3.jpg', 'It is a battery-operated device that delivers a vaporized liquid solution, typically containing nicotine, flavorings, and other chemicals.', 30),
(84, 'NebulaVape', 650, 'vape6.png', ' Embark on a cosmic journey with NebulaVape, a cutting-edge vaping experience .', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `browser` varchar(100) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `session_data` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_session` (`user_id`,`browser`,`ip`,`session_data`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `browser`, `ip`, `session_data`, `created_at`, `updated_at`) VALUES
(1, 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', '7c95296835a1dea25fc5785bef2690f90954ceb445e10aad3b1abaadc857516b', '2023-12-06 04:32:50', '2023-12-06 04:32:50'),
(2, 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'ce2df44f26de2ea4d7a2c766689c551727129f7238a259b00e83e82efe17313f', '2023-12-06 05:00:33', '2023-12-06 05:00:33'),
(3, 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'eebb79461b244cab75371ce15069c24c747d4168c9ec414daa938df3d38f6e4c', '2023-12-06 05:14:24', '2023-12-06 05:14:24'),
(4, 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', '534afe3aa9cc053c11072d4c2d018d59faebbe13ec1119ab3ccdfac30ddd01aa', '2023-12-06 05:14:54', '2023-12-06 05:14:54'),
(5, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'eb26bda627717a087d32ca46e3d68549bd1725acb8698f99819d26a32331d68b', '2023-12-06 05:58:42', '2023-12-06 05:58:42'),
(6, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'a3e752474ad4fd2b06467d4003bdfe2113a8b67d7e31135569158ff389a8082a', '2023-12-06 06:00:05', '2023-12-06 06:00:05'),
(7, 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'f91b73c97b302b2c0208a01dffd2e8bf7a82c9d56f32096fde75be55b128da49', '2023-12-06 06:09:58', '2023-12-06 06:09:58'),
(8, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', '3dc52c04df627e1a6d2f2f590db6e62b7e5bb6841799d60e1ab6d27d6411caf7', '2023-12-08 12:23:00', '2023-12-08 12:23:00'),
(9, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'e956908a80fc916106cfdc69c4a9c469b98fc79a79d5d5a7b78f693012fcdfa6', '2023-12-11 03:34:35', '2023-12-11 03:34:35'),
(10, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', '32fb63c8db798935af764729aca2bc63f408c138e136de3173196b1c992e67a4', '2023-12-11 12:07:07', '2023-12-11 12:07:07'),
(11, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'f864742edebb51985dafbbe3dc28b1ec3b4329f16b239916ccc28dd7949f8a58', '2023-12-12 00:37:02', '2023-12-12 00:37:02'),
(12, 10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', '214fa996fc895717a6c8105eea30dd23179189cef3e1d83905ba4d397ea3969a', '2023-12-12 01:31:24', '2023-12-12 01:31:24'),
(13, 10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', '2573361e0a2189141bb8baf297b729f2b64efb9b6ba7ed1959189cce07366e2d', '2023-12-12 01:35:25', '2023-12-12 01:35:25'),
(14, 10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Sa', '::1', 'fc3a710708240dfbc9fcf49ca557c42d6201f1260958dd3cd5483d661ee4aaac', '2023-12-12 03:25:39', '2023-12-12 03:25:39'),
(15, 11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Sa', '::1', '98cbd1b774734e11f04fbbe28d167e6852fd79719a09be02c987027ca4f63678', '2023-12-18 10:29:41', '2023-12-18 10:29:41'),
(16, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Sa', '::1', '0bd5f7e9abfae861aef8ee07abddd3da753502a9160b331bbdfacd96b5bbcdd8', '2023-12-20 13:15:19', '2023-12-20 13:15:19'),
(17, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Sa', '::1', '1eafe91f594625836ee313da796db76bd1eff2006929a192a693ec5fe5f140ca', '2023-12-21 08:03:15', '2023-12-21 08:03:15'),
(18, 12, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Sa', '::1', '662728e91450d68b4d17328514251055c8c3f9fa6959667da573603c6bb69599', '2023-12-21 08:34:34', '2023-12-21 08:34:34'),
(19, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Sa', '::1', '5dddd4d311d856128e17fa91169051bc1fa1d9fabdb50750bcd9e8800d535ab6', '2023-12-21 08:37:47', '2023-12-21 08:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_token` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `verification_code` varchar(50) NOT NULL,
  `is_verify` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone_number`, `email`, `email_token`, `password`, `verification_code`, `is_verify`) VALUES
(3, 'Apolinar Fontecilla', '09480806247', 'apolinar57@gmail.com', '', 'apolinar57', '', ''),
(4, 'rico', '09480806247', 'poly@gmail.com', '', '12345678', '', ''),
(8, 'brianna', '09480806247', 'brianna@gmail.com', '54b90697feb91ba20310ef52cee38d32', '12345678', '', ''),
(10, 'cheene', '09125842512', 'cheene@gmail.com', '19f7af76f1f0002d8cdefe9c65e5ed20', '12345678', '', ''),
(11, 'Jansen', '09125842512', 'jansen@gmail.com', '6b85a1dacbd8923dfbbb6732c83e5a9f', '3eeafe00', '', ''),
(12, 'adrian', '09123641731', 'adrian@gmail.com', '1d7517cf66bc8360f35fe08874a634bb', 'adrian30', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
