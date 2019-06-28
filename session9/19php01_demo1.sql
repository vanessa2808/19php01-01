-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2019 at 08:23 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.2.18-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Iphone X4444', 'OK des888', 23488900000, '5d0cd605a8dde_messi.jpg', '2019-06-21 07:39:37'),
(2, 'Iphone X', 'Cua Apple', 1000, '5d0cd64cd2a49_h.jpg', '2019-06-21 07:42:49'),
(3, 'Oman', 'ok man', 9999, 'default.jpg', '2019-06-21 07:46:04'),
(4, 'Chad', 'ok', 4444, 'default.jpg', '2019-06-21 07:48:33'),
(6, 'Chad', 'uuu', 777, 'default.jpg', '2019-06-21 07:50:07'),
(8, '09', '999', 999, 'default.jpg', '2019-06-21 07:51:53'),
(9, 'Iphone X', '666', 324234, '5d0cd66700e75_clip.jpg', '2019-06-21 08:06:46'),
(10, 'Iphone X', '777', 7777, '5d0cd7324893c_banner3-2.jpg', '2019-06-21 08:10:10'),
(11, 'Iphone X7', '777', 777, 'default.jpg', '2019-06-21 08:11:05'),
(12, 'Chad8888', '6666', 666, 'default.jpg', '2019-06-21 08:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `birthday`, `phone`, `gender`, `city`, `avatar`) VALUES
(3, 'Hoài ', 'hoaicanhqt@gmail.com', NULL, NULL, NULL, NULL, 'default.png'),
(5, 'Cảnh', 'apple.luong1905@gmail.com', NULL, NULL, NULL, NULL, 'default.png'),
(7, 'Manchester', 'demo@bongrung.com', NULL, NULL, NULL, NULL, 'default.png'),
(8, 'Oman', 'admin@admin.com', NULL, NULL, NULL, NULL, 'default.png'),
(9, 'Manchester', 'apple.luong1905@gmail.com', '2019-06-05', NULL, NULL, NULL, 'default.png'),
(10, 'Chad', 'apple.luong1905@gmail.com', '2019-06-18', '9909099', 'on', 'California', 'default.png'),
(11, 'Manchester s25', 'admin@gmail.com', '2019-06-01', '9909099', 'on', 'California', 'default.png'),
(12, 'Chad 22', 'apple.luong1905@gmail.com', '2019-06-22', '9909099', 'female', 'California', 'default.png'),
(13, 'Chad', 'apple.luong1905@gmail.com', '1970-01-01', '', '', '', 'default.png'),
(14, 'Chad', 'apple.luong1905@gmail.com', '1970-01-01', '', '', '', 'default.png'),
(15, 'Chad', 'apple.luong1905@gmail.com', '2019-06-15', '9909099', 'female', 'Alaska', '5d04df6573e47_messi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
