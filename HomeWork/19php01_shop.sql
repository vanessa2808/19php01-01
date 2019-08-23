-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 05:23 AM
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
  `id` int(255) NOT NULL,
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
(51, 16, 9, 'yen binh', '2019-08-16 04:35:50', 1),
(52, 16, 14, 'dep', '2019-08-16 05:44:08', 1),
(53, 16, 18, 'tot', '2019-08-16 09:21:06', 0),
(54, 16, 18, 'gia ca vua phai', '2019-08-16 09:22:04', 0),
(55, 16, 15, 'depppp', '2019-08-16 09:22:17', 0),
(56, 16, 19, 'xinhhhhh', '2019-08-16 09:22:32', 0),
(57, 16, 16, 'gia qua re', '2019-08-16 09:22:47', 0),
(58, 16, 16, 'uu dai tot', '2019-08-16 10:14:54', 0),
(70, 22, 16, 'sp tot', '2019-08-19 02:25:07', 0),
(71, 22, 16, 'san pham chat luong', '2019-08-19 02:27:50', 0),
(72, 22, 16, 're, gia ca phai chang', '2019-08-19 02:28:02', 0),
(73, 22, 16, 'luon tot', '2019-08-19 02:28:09', 0),
(74, 22, 15, 'sp chat luong', '2019-08-20 03:10:03', 0),
(75, 22, 15, 'Gia ca vua phai', '2019-08-20 03:10:17', 0),
(76, 22, 15, 're', '2019-08-20 03:10:21', 0),
(77, 22, 15, 'tot', '2019-08-20 03:10:25', 0),
(78, 22, 15, 'deppp', '2019-08-20 03:15:23', 0),
(79, 22, 15, 'xinh, sp chat luong', '2019-08-20 03:15:37', 0),
(80, 22, 15, 'ben, giong trong hinh', '2019-08-20 03:15:48', 0),
(81, 22, 15, 're', '2019-08-20 03:16:05', 0),
(82, 22, 16, 'ben, re dep', '2019-08-20 03:16:28', 0),
(83, 22, 16, 'xinh', '2019-08-20 03:16:33', 0),
(84, 22, 21, 'sp giong hinh', '2019-08-20 03:16:47', 0),
(85, 22, 21, 'sp ben dep', '2019-08-20 03:16:53', 0),
(86, 22, 21, 'sp gia ca phai chang', '2019-08-20 03:17:00', 0);

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
(19, 5, '6s', 'ss', 'default.png', 200000000, '2019-08-16 09:18:42', '0000-00-00 00:00:00'),
(20, 8, '3s', 'rat tien loi', 'sunflower-002-1470471840262.jpg', 200000000, '2019-08-19 03:56:27', '0000-00-00 00:00:00'),
(21, 4, '9d', 'sp ben cao', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', 30000000, '2019-08-19 03:56:56', '0000-00-00 00:00:00');

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
(4, 'realme'),
(5, 'xiaomi'),
(6, 'xiaomi ddd'),
(7, 'Apple'),
(8, 'Iphone'),
(9, 'Legion');

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
(13, 'customer', 'AppleKsjaflk', '0cca5c20bd216cc8646cf06d58d47194', 'saf', 'af', '56568', '2019-08-28', 'yenww.png', '2019-08-15 09:43:47', '0000-00-00 00:00:00'),
(17, 'customer', 'Apple', '0cca5c20bd216cc8646cf06d58d47194', 'xsd', 'ntnam1993@gmail.com', '44', '2019-08-28', '67769358_3294844273859371_4545871790714388480_n.jpg', '2019-08-17 04:29:32', '0000-00-00 00:00:00'),
(18, 'admin', 'Apple2', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', 'hh', '65656565655555', '2019-08-27', 'sunflower-002-1470471840262.jpg', '2019-08-19 10:03:21', '0000-00-00 00:00:00'),
(19, 'admin', 'Apple', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', 'yenrion9941@gmail.com', '0376381262', '2019-08-02', 'sunflower-002-1470471840262.jpg', '2019-08-19 10:51:56', '0000-00-00 00:00:00'),
(20, 'customer', 'Qua tao', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', '0388079982', '0376381262', '2019-08-03', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', '2019-08-19 10:54:44', '0000-00-00 00:00:00'),
(22, 'admin', 'quatao2808sdsadaD', '0cca5c20bd216cc8646cf06d58d47194', 'AsdA', 'AsA', '0376381262', '2019-08-14', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', '2019-08-19 02:21:12', '0000-00-00 00:00:00'),
(23, 'admin', 'AppleNguyen', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', 'cha123@gmail.com', '56568', '2019-08-23', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', '2019-08-20 03:53:50', '0000-00-00 00:00:00'),
(26, 'customer', 'ad', 'd4b871a18415a62ad2943b5cd1c34c25', 'Nguyễn Thị Hồng Yến', 'ss@gmail.com', '0376381262', '2019-08-29', 'hinh-nen-hoa-huong-duong-dep-1.jpg', '2019-08-20 04:09:10', '0000-00-00 00:00:00');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
