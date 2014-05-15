-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2014 at 07:46 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_userweb`
--
CREATE DATABASE IF NOT EXISTS `data_userweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `data_userweb`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic`, `body`, `date`, `username`, `name`) VALUES
(13, '9', 'chuáº©n luÃ´n :v', '2014-05-16 00:41:48', 'ledotan', 'LÃª Äá»— TÃ¢n');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `date`, `username`, `cat_name`, `subject`, `body`) VALUES
(8, '2014-05-15 22:28:58', 'ledotan', 'giadinh', 'Háº­n tÃ¬nh vÃ¬ yÃªu pháº£i Sá»Ÿ Khanh', 'Em cÃ³ 1 tÃ¢m sá»± ráº¥t mong Ä‘Æ°á»£c chia sáº» cÃ¹ng chá»‹. Mong chá»‹ cho em 1 lá»i\r\nkhuyÃªn. Em Ä‘ang tháº¥t vá»ng vÃ  khÃ´ng biáº¿t mÃ¬nh nÃªn lÃ m gÃ¬ lÃºc nÃ y. &nbsp; &nbsp;\r\n&nbsp; &nbsp; &nbsp;Em nÄƒm nay cÃ²n khÃ¡ tráº», váº«n Ä‘ang lÃ  sinh viÃªn. TrÆ°á»›c Ä‘Ã¢y em\r\ncÃ³ quen 1 báº¡n trai, trong 1 thá»i gian cÅ©ng khÃ¡ dÃ i. Giá» tá»¥i em Ä‘Ã£ chia tay. Anh\r\nta trong máº¯t má»i ngÆ°á»i xung quanh lÃ  1 ngÆ°á»i tá»­ táº¿, Ä‘Ã ng hoÃ ng, nho nhÃ£ vÃ  Ä‘Ã¡ng\r\ntin cáº­y. VÃ¬ chia tay khi em váº«n cÃ²n thÆ°Æ¡ng anh ta, nÃªn em Ä‘Ã£ nÃ­u kÃ©o trong Ä‘au\r\nkhá»• vÃ  tuyá»‡t vá»ng. Em muá»‘n cÃ³ 1 cuá»™c gáº·p máº·t trá»±c tiáº¿p Ä‘á»ƒ nÃ³i chuyá»‡n cho rÃµ\r\nrÃ ng, nÃªn em dá»a anh ta sáº½ lÃ m Ä‘iá»u dáº¡i dá»™t, mong anh Ä‘áº¿n gáº·p em láº§n cuá»‘i Ä‘á»ƒ 2\r\nmáº·t 1 lá»i. Tá»« sau khi xáº£y ra mÃ¢u thuáº«n Ä‘á»‰nh Ä‘iá»ƒm anh ta luÃ´n trÃ¡nh em vÃ  khÃ´ng\r\ncÃ³ báº¥t cá»© lÃ­ do chÃ­nh Ä‘Ã¡ng nÃ o cho hÃ nh Ä‘á»™ng cá»§a mÃ¬nh. Anh ta nghe xong gá»i cho\r\nem vÃ i cuá»™c, em cá»‘ tÃ¬nh khÃ´ng nghe mÃ¡y, thÃ¬ anh ta máº·c&nbsp;'),
(9, '2014-05-15 22:38:24', 'ledotan', 'tinhyeu', 'YÃªu anh Ä‘áº¿n quÃªn cáº£ em Ä‘i', '<p class="MsoNormal">\r\n	ThÃ¹y LÃ¢m báº­t dáº­y nhÆ° má»™t cÃ¡i lÃ²\r\nxÃ² khi tiáº¿ng chuÃ´ng Ä‘á»“ng há»“ bÃ¡o thá»©c vang lÃªn. CÃ´ quÃ½nh quÃ¡ng khi nhÃ¬n tháº¥y Ä‘Ã£\r\nlÃ  8h kÃ©m 15:<span class="apple-converted-space">&nbsp;</span>â€œCháº¿t tiá»‡t tháº­t, cÃ²n 15 phÃºt cho má»i viá»‡c náº¿u khÃ´ng muá»‘n Ä‘i lÃ m muá»™n vÃ  pháº£i\r\nlÃ m báº£n kiá»ƒm Ä‘iá»ƒmâ€.<span class="apple-converted-space">&nbsp;Nhanh nhÆ° chá»›p, ThÃ¹y LÃ¢m Ä‘Ã¡nh rÄƒng, rá»­a máº·t vÃ \r\nthay Ä‘á»“ chá»‰ trong vÃ²ngâ€¦ 5 phÃºt.</span>\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `level` int(2) DEFAULT NULL,
  `account` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `account`, `password`, `name`, `email`, `phone`) VALUES
(26, 1, 'ledotan', 'de8e21490684d60d27e0627cdc4c83f0', 'LÃª Äá»— TÃ¢n', 'ledotan@gmail.com', '123456'),
(30, 2, 'anh', '5febda3d0ef90737a60de2fd7c6d7728', 'anh', 'anh@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
