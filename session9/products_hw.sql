-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 10:32 AM
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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created`) VALUES
(1, 'Json', 'kllfja', 200000000, '5d0e42ed9a527_5d0cd5a2182ee_hahaa2.jpg', '2019-06-22 05:02:05'),
(2, 'pen', 'tot', 2e17, '5d0e435389317_5d0d774c44824_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-22 05:03:15'),
(3, 'pen 23', 'kjhjkshf', 200000, '5d0eda824ac2c_5d0cd7324893c_banner3-2.jpg', '2019-06-23 03:48:50'),
(4, 'Json 3', 'sjdkjshf jkadhkjAF', 20000000, '5d11db2687c4c_23518962_182001132359467_5902950381075776327_n.jpg', '2019-06-25 10:28:22'),
(5, 'Json 6666', 'ad', 2, '5d120e98a35a6_23518962_182001132359467_5902950381075776327_n.jpg', '2019-06-25 02:07:40'),
(6, 'Nguyễn Thị Hồng Yến', 'm', 20000, '5d13503b2daf5_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-26 01:00:11'),
(7, 'mai', 'kgdks', 20000, '5d1353df47b0b_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-26 01:15:43'),
(8, 'Nguyễn Thị Hà Giang', 'xinh', 20000000, '5d1353f929611_23518962_182001132359467_5902950381075776327_n.jpg', '2019-06-26 01:16:09'),
(9, 'Hồ Văn Cường', 'hfj', 20000, '5d14aec60d931_EGr 57.jpg', '2019-06-27 01:55:49'),
(10, 'Nguyễn Thị Hà Giang  55', 'ads 55', 2000, '5d14b283ebc5a_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-27 02:11:47'),
(11, 'Json 33', 'sf', 2, '5d15719eb91b5_23518962_182001132359467_5902950381075776327_n.jpg', '2019-06-28 03:47:10'),
(12, 'pen 999', 'sf', 20000, '5d1578efea353_56957729_439031690175080_523952221604282368_n.jpg', '2019-06-28 04:18:23'),
(13, 'Nguyễn Thị Hồng Yếnwewrsr', 'sfsf', 20000, '5d15790642b8b_23518962_182001132359467_5902950381075776327_n.jpg', '2019-06-28 04:18:46');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
