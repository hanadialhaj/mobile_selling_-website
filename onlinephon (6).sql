-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2022 at 10:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinphon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT 0,
  `date_insert` date NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `group_id`, `date_insert`, `block`) VALUES
(14, 'hanadi', '123', 1, '2021-10-01', 0),
(16, '4san', '123', 0, '2021-10-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `des` varchar(500) NOT NULL,
  `Ordering` int(11) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `date_insert` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `des` varchar(500) NOT NULL,
  `date_insert` date NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `des`, `date_insert`, `block`, `id_user`) VALUES
(13, 'ASUS', 'hh', '2021-11-08', 0, 2),
(5, 'lenveo', 'labtop', '2021-10-03', 0, 2),
(12, 'Hp', 'hh', '2021-11-08', 0, 2),
(11, 'Acer', 'sam', '2021-11-08', 0, 2),
(10, 'dell', 'dell', '2021-11-06', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `company_phon`
--

DROP TABLE IF EXISTS `company_phon`;
CREATE TABLE IF NOT EXISTS `company_phon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `des` varchar(500) NOT NULL,
  `date_insert` date NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_phon`
--

INSERT INTO `company_phon` (`id`, `name`, `des`, `date_insert`, `block`, `id_user`) VALUES
(7, 'lg', 'll', '2021-11-08', 0, 2),
(6, 'samsung', 'sam', '2021-11-08', 0, 2),
(8, 'nokia', 'hg', '2021-11-08', 0, 2),
(9, 'redmy', 'sa', '2021-11-08', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

DROP TABLE IF EXISTS `computer`;
CREATE TABLE IF NOT EXISTS `computer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `model` varchar(500) NOT NULL,
  `CPU` varchar(500) NOT NULL,
  `CPUG` varchar(500) NOT NULL,
  `RAM_SIZE` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `price_after_discount` int(11) NOT NULL,
  `HARD_TYPE` varchar(500) NOT NULL,
  `HARD_SIZE` varchar(500) NOT NULL,
  `video_card` tinyint(1) NOT NULL DEFAULT 0,
  `video_card_size` varchar(500) NOT NULL,
  `screen_size` varchar(500) NOT NULL,
  `support_touch` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(500) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_insert` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `name`, `model`, `CPU`, `CPUG`, `RAM_SIZE`, `price`, `price_after_discount`, `HARD_TYPE`, `HARD_SIZE`, `video_card`, `video_card_size`, `screen_size`, `support_touch`, `image`, `block`, `id_company`, `id_user`, `date_insert`) VALUES
(79, 'lenveo', 'l15', 'كوالكم', 'gh', '600', 9999, 200000, 'ssd', '1000', 0, '500', '500', 0, '../images/703511.jpg,../images/23960product033.png,../images/23025cc10.jpg,../images/27094cc14.jpg', 0, 5, 2, '2011-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `count` int(11) DEFAULT NULL,
  `made_in` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `type_system` varchar(500) NOT NULL,
  `version` varchar(200) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `type_network` varchar(500) NOT NULL,
  `support_3g` varchar(100) NOT NULL,
  `num_port` varchar(200) NOT NULL,
  `ex_memory` varchar(100) NOT NULL,
  `finger_print` varchar(100) NOT NULL,
  `size_screen` varchar(500) NOT NULL,
  `state_phon` varchar(500) NOT NULL,
  `size_RAM` varchar(500) NOT NULL,
  `size_en_memory` varchar(500) NOT NULL,
  `petary` varchar(500) NOT NULL,
  `add_on` varchar(500) NOT NULL,
  `type_process` varchar(500) NOT NULL,
  `num_kernal_process` varchar(500) DEFAULT NULL,
  `num_camera` varchar(500) NOT NULL,
  `acurcy_front_camera` varchar(500) NOT NULL,
  `acurcy_back_camera` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `price_after_discount` varchar(500) NOT NULL,
  `time_experiments` varchar(200) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_insert` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `type`, `block`, `count`, `made_in`, `image`, `type_system`, `version`, `description`, `type_network`, `support_3g`, `num_port`, `ex_memory`, `finger_print`, `size_screen`, `state_phon`, `size_RAM`, `size_en_memory`, `petary`, `add_on`, `type_process`, `num_kernal_process`, `num_camera`, `acurcy_front_camera`, `acurcy_back_camera`, `price`, `price_after_discount`, `time_experiments`, `id_company`, `id_user`, `date_insert`) VALUES
(47, 'الجي', 'صيني', 0, NULL, 'الصين', '../images/19030IMG-20210702-WA0048.jpg,../images/2775IMG-20210702-WA0046.jpg,../images/20420IMG-20210702-WA0044.jpg,../images/24237IMG-20210702-WA0078.jpg', 'فرايزون', '9', NULL, 'يمن موبايل', 'يدعم', '1', 'يدعم', 'يدعم', '32', 'جديد', '32', '32', 'جيدة', 'سماعة', 'كوالكم', NULL, '2', '32', '32', '50000', '40000', 'يوم', 7, 1, '2021-10-16'),
(48, 's5', 'لونين اسود ولحمي', 0, NULL, 'امريكا', '../images/21894IMG-20210702-WA0036.jpg,../images/28231IMG-20210702-WA0073.jpg,../images/18036IMG-20210702-WA0067.jpg,../images/1949IMG-20210702-WA0054.jpg', 'فرايزون', '9', NULL, 'gsm', 'يدعم', '2', 'يدعم', 'لا يدعم', '500', 'جديد', '36', '200', 'good', 'سماعة', 'كوالكم', NULL, '3', '500', '600', '45000', '40000', 'يوم', 6, 5, '2021-11-18'),
(49, 's9', 'جديد', 0, NULL, 'امريكا', '../images/8782IMG-20210330-WA0163.jpg,../images/3951IMG-20210330-WA0169.jpg,../images/5244IMG-20210330-WA0166.jpg,../images/12549IMG-20210330-WA0165.jpg', 'التال', 'تلتن', NULL, 'النت', 'تلت', '2', 'نتلن', 'تلت', 'ينتلا', 'جديد', 'نلاتن', '54', 'نتلنت', 'تلنت', 'تلت', NULL, '565', 'تالبت', 'اتلتن', '6565', '545', 'نتان', 7, 5, '2021-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `address` varchar(200) NOT NULL,
  `des` varchar(500) NOT NULL,
  `name_shop` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `date_insert` date NOT NULL,
  `tag` varchar(500) NOT NULL,
  `group_id` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `block`, `address`, `des`, `name_shop`, `img`, `id_admin`, `phone`, `mobile`, `url`, `date_insert`, `tag`, `group_id`) VALUES
(1, 'زينون', '123', 0, 'شارع العدين', 'انستجرام', 'زينون', '../images/16034cc7.jpg', 14, '7190186478', '411113', 'yfhjgjh', '2021-10-03', 'نحن الافضل', 0),
(2, '4san', '123', 0, 'اب شارع تعز', '/https://www.instagram.com/codershiyar', 'proSkills', '../images/1413111.jpg', 1, '770263836', '770263836', 'https://m.facebook.com/ProSKillscenterye/', '2021-10-03', 'نحن الأفضل', 1),
(5, 'barka', '123', 0, 'اب شارع العدين جوار فون سيتي', 'AA', 'البركة تيليكوم', '../images/3199511.jpg', 14, '774044441', '711598176', 'https://www.facebook.com/abdoalmoez', '2021-11-18', 'مع البركة انت الرابح دوما', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
