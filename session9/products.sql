-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 04:51 PM
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
(1, 'NoteBook dfkjhsjakf jksfhkjadhf', '23,000', 'Good pen', 'default.png', '1999-07-21'),
(5, 'Gloves', '10, 000 dong', 'Goodbeautiful  ', 'default.png', '1924-05-28'),
(6, 'Draw', '20,000 dong', 'beautiful xinh', '5d0892c55ff58_US.jpg', '2019-06-14'),
(10, 'Tissue 44444444444', '30000', 'gooodjhdjksd         333333', '5d0cdc4039ce8_yen.jpg', '2019-06-21'),
(11, 'box', '100,000 đồng', 'beautiful', '5d0cc732b8124_60572618_133899564450043_2918685896905588736_o.jpg', '2019-06-08'),
(12, 'bottle', '3,000 Đồng', 'good qualityjsd sdjhsjad', 'default.png', '2019-06-14'),
(13, 'beautiful clothes 666', '90,000 đồng', 'tot dep', 'default.png', '2019-06-17'),
(14, 'Thing  11111', '100,000 đồng', 'xinhhhhh', 'default.png', '2019-06-26'),
(15, 'NoteBook 12344444555555555555555', '100,000 đồng', 'dgsdgfg  akjdhkshf', 'default.png', '2019-06-24'),
(16, 'Clothees 33444', '23,000', 'zsaf', 'default.png', '1999-07-21'),
(17, 'Clothees 23333333333333333333333333333333', '100,000 đồng', 'ddd', 'default.png', '2019-06-25'),
(18, 'NoteBook 3333333333333', '23,000', 'ssdgds', '5d0cc4f2c7d01_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-24'),
(20, 'NoteBook', '23,000', 'sdaf', '5d0cd9216a4b7_23518962_182001132359467_5902950381075776327_n.jpg', '2019-06-27'),
(21, 'NoteBook', '30000', 'kshfkl', 'default.png', '1901-02-24'),
(22, 'But', '23,000', 'But dep', '5d0ceaf7e8f76_rose-blue-flower-rose-blooms-67636.jpeg', '2019-06-17'),
(23, 'NoteBook', '100,000 đồng', 'gdsg', '5d0ceb66462d6_13.jpg', '2019-06-04'),
(24, 'NoteBook', '100,000 đồng', 'sklflkdjg', '5d0ceba023661_13.jpg', '2019-06-11'),
(25, 'NoteBook', '30000', 'kdasklfsfhlkf lksfhlkf', '5d0cebbdddd2f_rose-blue-flower-rose-blooms-67636.jpeg', '2019-06-18'),
(26, 'NoteBook', '100,000 đồng slkf', 'stdg kshd', 'default.png', '2019-06-16'),
(27, 'NoteBook', '100,000 đồng', 'kjhk', '5d0cecd399e0b_13.jpg', '2019-06-26'),
(28, 'NoteBook', '100,000 đồng', 'kahflks', '5d0cedf62f47b_13.jpg', '1999-07-21'),
(29, 'NoteBook lkshflashfld', '23,000', 'cvc', '5d0ceefbb7174_sunset-2817332_960_720.jpg', '1901-02-24'),
(30, 'NoteBook', '100,000 đồng edf', 'klhkhskfhksf slkflsf', 'default.png', '2019-06-18'),
(31, 'NoteBook', '100,000 đồng', '8888888', '5d0d764138046_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-16'),
(32, 'NoteBook', '100,000 đồng', 'qwfe', 'default.png', '2019-06-24'),
(33, 'NoteBook 12344444', '23,000', 'sadsaf\r\n\r\n', 'default.png', '2019-06-28');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
