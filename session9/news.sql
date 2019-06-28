-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 11:22 AM
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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `postDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `writer`, `postDate`) VALUES
(1, 'sdfdf', 'ff', '5d120d5189b73_56957729_439031690175080_523952221604282368_n.jpg', 'Nguyễn Thị Hồng Yến', '2019-06-25 02:02:25'),
(2, 'kaslfj', 'sklfh', '5d120f51543fe_23518962_182001132359467_5902950381075776327_n.jpg', 'Nguyễn Thị Hồng Yến', '2019-06-25 02:10:57'),
(3, 'Định luật Moore không còn quan trọng trong thời đại IoT', 'Còn với các nhà sản xuất chip, thì đây là một cuộc đua “công thức 1” để tạo ra bộ vy xử lý nhỏ hơn bao giờ hết, nhanh hơn và rẻ hơn. Gần 50 năm kể từ khi Moore xuất bản bài báo của mình, thế giới của vi mạch đã có nhiều thay đổi, xu hương cơ bản của máy tính đương đại dường như đã trở nên ổn định và cân băng. Một lưu ý trong bản nghiên cứu từ các nhà phân tích công nghệ tại Credit Suisse (trong Hội nghị lần thứ 51 năm Thiết kế tự động hóa- Annual Design Automation) kết luận rằng chip xử lý có thể thu nhỏ hơn nữa và tốc độ tăng cao, nhưng để đưa ra sản phẩm có mức giá phù hợp thì cần có thời gian.\r\n\r\nSố lượng Transistor\r\nCác công ty lớn như Intel và Semiconductor Taiwan đang đầu tư cho nghiên cứu và phát triển để tiếp tục gia tăng sức mạnh của bộ vi xử lý và tuân thủ định luật Moore. Trong hầu hết nhận định, người ta đã dự đoán cái kết của Định luật Moore nhiều thập kỷ nay. Nhưng những lý do mà các công ty sản xuất chip dựa vào để thay đổi mục tiêu của định luật được đặt ra 49 năm về trước để có thể tạo ra các bộ vi xử lý nhỏ hơn, nhanh hơn và rẻ hơn là một câu hỏi khá thú vị.', '5d121f48c1932_Screenshot (1).png', 'Nguyễn Thị Hồng Yến', '2019-06-25 03:19:04'),
(4, 'kbd', 'jsaf', '5d14be232f6d0_23518962_182001132359467_5902950381075776327_n.jpg', 'ksafj', '2019-06-27 03:01:23'),
(5, 'kahf', 'asfhd', '5d14be35a97d1_56957729_439031690175080_523952221604282368_n.jpg', 'wr', '2019-06-27 03:01:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
