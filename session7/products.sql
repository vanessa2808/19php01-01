-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 01:19 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19php01_demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `nameProduct` varchar(255) NOT NULL,
  `priceProduct` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `imageDe` varchar(255) DEFAULT NULL,
  `datePro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nameProduct`, `priceProduct`, `description`, `imageDe`, `datePro`) VALUES
(1, 'NoteBook', '23,000', 'Good pen', '5d088be280847_coVn.png', '1999-07-21'),
(3, 'clothes', '100,000 đồng', 'good clothes', '5d0891693ecc7_truong1.jpg', '2019-06-16'),
(5, 'Gloves', '10, 000 dong', 'Goodbeautiful  ', 'default.png', '1924-05-28'),
(6, 'Draw', '20,000 dong', 'beautiful xinh', '5d0892c55ff58_US.jpg', '2019-06-14'),
(10, 'Tissue', '30000', 'goood\r\njhdjksd', '5d089885d859f_IMG_20190520_214515-01.jpeg', '2019-06-21'),
(11, 'box', '100,000 đồng', 'beautiful', '5d089a2720190_yen.jpg', '2019-06-08'),
(12, 'bottle', '3,000 Đồng', 'good quality', '5d099e11ab17f_yen.jpg', '2019-06-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
