-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 12:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtwine`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'HTML'),
(2, 'CSS/HTML'),
(3, 'dwsaf'),
(4, 'sfaf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_cat` int(255) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_image` text NOT NULL,
  `product_content` varchar(255) NOT NULL,
  `product_tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_cat`, `product_price`, `product_image`, `product_content`, `product_tags`) VALUES
(1, 'xsacdvxbv ', 1, 'wdas', 'banner 1.jpg', '                                sad                                ', 'SDA'),
(3, 'SunFlower', 4, '199.00', '', '                 beautiful flower                                        ', 'flower, sunflower'),
(4, 'eflkds', 2, '132.23', 'shutterstock_67367548.jpg', '                                                          wreqq                                                                                                        ', 'rose'),
(6, 'SunFlower', 1, '199', 'headset.jpg', '         dwassdsd        ', 'flower, sunflower'),
(7, '', 0, '', '', '        ', ''),
(8, '', 0, '', '', '        ', ''),
(9, 'aya', 2, 'ghjkl', 'th.jpg', '                                tyuiop        ', 'flower, sunflower'),
(10, '', 3, '199.0', '', '                             k/.                           ', 'flower, sunflower'),
(14, 'sg', 2, 'fdsf', '', '                        ', ''),
(15, 'afsdf', 4, 'dsf', '', '                                        ', ''),
(16, 'aas', 3, 'asdsad', '', '        ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
