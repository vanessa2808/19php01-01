-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 09:24 AM
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
-- Database: `19php01_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `created`, `status`) VALUES
(46, 7, 7, 'SAN PHAM RAT XINH', '2019-08-16 04:01:21', 1),
(47, 16, 3, 'San PHam tot', '2019-08-16 04:03:50', 1),
(48, 16, 3, 'chat luong', '2019-08-16 04:08:04', 1),
(49, 16, 8, 'ssssssssssssssss', '2019-08-16 04:14:15', 1),
(50, 16, 8, 'xinhhhhhhhhhhhhhhhhhhhhhhhh', '2019-08-16 04:17:20', 1),
(51, 16, 9, 'yen binh', '2019-08-16 04:35:50', 1),
(52, 16, 14, 'dep', '2019-08-16 05:44:08', 1),
(53, 16, 18, 'tot', '2019-08-16 09:21:06', 1),
(54, 16, 18, 'gia ca vua phai', '2019-08-16 09:22:04', 1),
(55, 16, 15, 'depppp', '2019-08-16 09:22:17', 1),
(56, 16, 19, 'xinhhhhh', '2019-08-16 09:22:32', 1),
(57, 16, 16, 'gia qua re', '2019-08-16 09:22:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_category_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `description`, `image`, `price`, `created`, `updated`) VALUES
(15, 4, 'Json ', 'dep', 'DSC_3420.jpg', 200000000, '2019-08-16 09:17:06', '0000-00-00 00:00:00'),
(16, 4, '3s', 'tot re', 'bg.jpg', 200000000, '2019-08-16 09:17:37', '0000-00-00 00:00:00'),
(18, 2, '7s', 'sang trong', '67769358_3294844273859371_4545871790714388480_n.jpg', 20000, '2019-08-16 09:18:20', '0000-00-00 00:00:00'),
(19, 5, '6s', 'ss', 'default.png', 200000000, '2019-08-16 09:18:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`) VALUES
(1, 'Oppo'),
(2, 'Iphone'),
(3, 'Iphone'),
(4, 'realme'),
(5, 'xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`, `email`, `phone`, `birthday`, `avatar`, `created`, `updated`) VALUES
(11, 'admin', 'ADad DDD', '31d77118a7853a1cb94b12e2c04bc496', 'adad', 'ad', '65656565655555', '2019-08-28', 'default.jpg', '2019-08-15 09:37:32', '0000-00-00 00:00:00'),
(13, 'customer', 'AppleKsjaflk', '0cca5c20bd216cc8646cf06d58d47194', 'saf', 'af', '56568', '2019-08-28', 'yenww.png', '2019-08-15 09:43:47', '0000-00-00 00:00:00'),
(16, 'admin', 'quatao2808', '0cca5c20bd216cc8646cf06d58d47194', 'Yenrion', 'yen  ', '65656565655555', '2019-08-28', 'default.jpg', '2019-08-16 04:03:34', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
