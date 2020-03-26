-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2020 at 01:49 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(250) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `picture`, `category`) VALUES
(1, 'Layse', 'chips very good', 2.99, 'https://s.yimg.com/aah/mex-grocer/lay-s-limon-flavored-potato-chips-10.png', 'Food'),
(2, 'Kinder Bueno', 'Diabetis times 9000', 3.5, 'https://www.monoprix.fr/assets/images/grocery/3331126/580x580.jpg', 'Food'),
(3, 'Gamer Mouse x50PO Carbon', 'The best gamermouse ever with RGB!', 200, 'https://media.ldlc.com/r1600/ld/products/00/04/03/92/LD0004039202_2.jpg', 'Gaming'),
(4, 'Nvidia RTX 3080 Mega', 'The  best card on the market AMD sucks', 1200, 'https://cdn.wccftech.com/wp-content/uploads/2018/07/nvidia-titan-xp-ce-star-wars-jedi-order-gallery-02-1.jpg', 'Gaming');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
