-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 05:25 AM
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
-- Database: `19php01_mvc_basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created`) VALUES
(6, 'Cô gái dân tộc Mông và nỗi khát khao học tập\r\n', 'Bị bắt ở nhà nhưng vẫn quyết tâm đi học, liên tục là học sinh giỏi, đạt giải cao trong nhiều kỳ thi cấp tỉnh… Đó là Mua Thị Chở, người dân tộc Mông ở xã biên giới Sủng Là (H.Đồng Văn, Hà Giang). Khát khao được học của cô gái để thoát nghèo, cống hiến, để thay đổi nhận thức của người dân tộc Mông... (trang 22) ', '5d2d4017c537b_23518962_182001132359467_5902950381075776327_n.jpg', '2019-07-16 04:52:41'),
(7, 'Khai thác kim cương dưới lớp băng vĩnh cửu', 'Yakutia (vùng Siberia, Nga) - nơi có mùa đông khắc nghiệt nhất nhì thế giới cũng chính là quê hương của những mỏ kim cương khổng lồ dưới lớp băng vĩnh cửu. (trang 23) ', '5d2d400ba3a90_yen.jpg', '2019-07-16 04:53:29'),
(8, 'Bất an bác sĩ cấp cứu bỏ mặc người bệnh', 'Vào bệnh viện, mọi niềm tin người bệnh đều đặt vào y bác sĩ. Nhưng, nếu y bác sĩ chủ quan, chậm trễ hay “non” kinh nghiệm trong xử trí cấp cứu sẽ ảnh hưởng đến tính mạng người bệnh. Trong đó, Sự việc bệnh nhân tử vong sau gần 4 giờ vào cấp cứu tại Bệnh viện Chợ Rẫy, TP.HCM, khiến dư luận bất an lẫn bất bình. (trang 5)  ', '5d2d40318d5b3_IMG_20190520_214515-01.jpeg', '2019-07-16 04:54:14'),
(9, 'Đề xuất bơm nước để đi thuyền trên sông Tô Lịch', 'Công ty Thoát Nước Hà Nội vừa trình thành phố phương án cải tạo sông Tô Lịch. Theo đó, một “siêu” trạm bơm ngầm được đặt trong lòng đất để bơm nước từ sông Hồng vào Hồ Tây, sau đó tạo dòng chảy xuôi cho sông Tô Lịch. Khi có dòng chảy, sông Tô Lịch không những được hồi sinh mà còn có thể đi thuyền tại đây.  ', '5d2d3fef913d9_60572618_133899564450043_2918685896905588736_o.jpg', '2019-07-16 04:55:10'),
(10, 'Xem thợ lặn dạo chơi với sứa khổng lồ, to như người', 'Các chuyên gia về biển cho biết, sự xuất hiện của lượng sứa khổng lồ này, được gọi là sứa thùng, trong tuần này nhiều hơn bất cứ thời điểm nào trong 15 năm qua, theo The Sun.Nhà nghiên cứu sinh vật học Lizzie Daly và nhà làm phim về đời sống hoang dã Dan Abbott đã ghi hình con sứa thùng khổng lồ này cho chương trình Tuần lễ Đại dương hoang dã. ', '5d2d40216133e_yen.jpg', '2019-07-16 05:04:37');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
