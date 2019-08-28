-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 02:56 AM
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
(51, 16, 9, 'yen binh', '2019-08-16 04:35:50', 0),
(52, 16, 14, 'dep', '2019-08-16 05:44:08', 0),
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
(86, 22, 21, 'sp gia ca phai chang', '2019-08-20 03:17:00', 0),
(87, 34, 16, 'sđ', '2019-08-22 10:45:08', 0),
(88, 35, 20, 'zdxa', '2019-08-22 10:52:49', 0),
(89, 37, 21, 'xinh', '2019-08-23 04:45:56', 0),
(90, 37, 22, 'xinhhh', '2019-08-23 05:00:45', 0),
(91, 39, 25, 'good product and services', '2019-08-23 09:27:36', 0),
(92, 39, 25, 'love the promotion', '2019-08-23 09:27:47', 0),
(93, 35, 22, 'hiiii', '2019-08-23 09:53:05', 0),
(94, 35, 20, 'hhhhh', '2019-08-23 01:32:31', 0),
(95, 35, 25, 'sp chat luong', '2019-08-27 10:17:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `writer`, `created`, `updated`) VALUES
(6, 'Chuyện chưa kể về nữ CĐV Nam Định gặp nạn đúng thời điểm sân Thiên Trường bị cúp điện', 'Mỗi khi kết thúc trận đấu, khi mọi người đều đã bỏ về hết, Ly vẫn chăm chỉ ở lại nhặt từng cái chai, túi nilon, bịch rác do người dân vứt lại khi xem trận bóng.\r\nSự kiện: Tin nóng\r\nCô gái hòa đồng, chăm chỉ\r\n\r\nLiên quan đến vụ việc nữ cổ động viên (CĐV) Nam Định Nguyễn Khánh Ly (SN 1996, trú xã Mỹ Thành, tỉnh Nam Định) tử vong vì tai nạn giao thông trên đường về quê xem cổ vũ CLB Nam Định gặp CLB Quảng Nam hôm 17/8, trao đổi với PV, ông Đào Văn Quảng, Chủ tịch UBND xã Mỹ Thành cho biết, Khánh Ly là cô gái ngoan hiền nhưng có gia cảnh rất khó khăn.\r\n\r\nChuyện chưa kể về nữ CĐV Nam Định gặp nạn đúng thời điểm sân Thiên Trường bị cúp điện - 1\r\n\r\nNguyễn Khánh Ly, nữ CĐV nhiệt thành của CLB bóng đá Nam Định.\r\n\r\n“Ly tử vong vì tai tạn giao thông khi từ nơi làm việc ở Hà Nam trở về sân vận động Thiên Trường (Nam Định) xem bóng đá. Kinh tế gia đình Ly không mấy khá giả. Bố mẹ Ly sinh được hai chị em. Cô mới tốt nghiệp trường Đại học Mỏ - Địa chất và đi làm được khoảng 2 tháng nay”, ông Quảng cho hay.\r\n\r\nNhận xét về nữ CĐV, ông Quảng chia sẻ Ly là một cô gái ngoan, dù kinh tế gia đình khó khăn nhưng vẫn chăm chỉ học hành, thi đỗ và tốt nghiệp trường Đại học Mỏ - Địa chất. Nữ CĐV được mọi người trong thôn, xã yêu quý vì bản tính hiền lành, lễ phép.\r\n\r\nĐể hiểu rõ hơn về Khánh Ly, tôi đã có cuộc trò chuyện với ông Nguyễn Văn Quân (SN 1960, thành viên Ban chấp hành Hội CĐV Bóng đá Nam Định), người được các CĐV chính thức trong hội thân thiết gọi bằng “bố”.\r\n\r\nÔng Quân cho hay Hội CĐV Bóng đá Nam Định hiện có khoảng 5.000 thành viên chính thức, ông và Nguyễn Khánh Ly là 2 trong số 5.000 thành viên chính thức này.\r\n\r\nChuyện chưa kể về nữ CĐV Nam Định gặp nạn đúng thời điểm sân Thiên Trường bị cúp điện - 2\r\n\r\nÔng Nguyễn Văn Quân (cầm mic), thành viên lão thành của Hội CĐV Bóng đá Nam Định, người được Khánh Ly thân thiết gọi bằng “bố”.\r\n\r\n“Giữa 5.000 người và hàng vạn CĐV thường xuyên có mặt tại sân Thiên Trường cổ vũ cho Bóng đá Nam Định, tôi có ấn tượng rất sâu về Khánh Ly. Mỗi khi kết thúc trận đấu, khi mọi người đều đã bỏ về hết, Ly vẫn chăm chỉ ở lại nhặt từng cái chai, túi nilon, bịch rác do người dân vứt lại khi xem trận bóng. Một số người chỉ làm một lúc rồi thôi, nhưng Khánh Ly luôn là người cuối cùng kết thúc công việc khi đã thấm mệt, con bé chăm chỉ lắm ”, ông Quân chia sẻ.\r\n\r\nHiện thực hóa nguyện ước của nữ CĐV\r\n\r\nNói về cái duyên giữa ông và Khánh Ly, ông Nguyễn Văn Quân cho rằng đó là cái duyên đến từ tình yêu bóng đá, giữa dòng đời hối hả ngược xuôi, ông đã có thêm một người “con gái” trong khi bản thân Khánh Ly cũng yêu quý, trân trọng một người “bố” như ông.\r\n\r\nChuyện chưa kể về nữ CĐV Nam Định gặp nạn đúng thời điểm sân Thiên Trường bị cúp điện - 3\r\n\r\nNguyễn Khánh Ly gặp tai nạn giao thông và tử vong đúng ngày lần đầu tiên trong lịch sử V-League có hàng ngàn ánh đèn flash chiếu sáng SVĐ.\r\n\r\n“Tôi nghĩ nó là duyên số. Con bé vẫn luôn là một người yêu bóng đá cuồng nhiệt, một CĐV trong đội “quẩy” (đội cổ động) hết mình. Mỗi khi đến sân Thiên Trường, tôi thường chỉ huy đội cổ vũ trong khi Khánh Ly là thành viên cổ vũ nhiệt tình nhất đội”, ông Quân nhớ lại.\r\n\r\nNhớ lại ngày nhận được tin “sét đánh”, đó là buổi tối 17/8, ông Quân cho hay lúc đó vừa cổ vũ xong một trận đấu của CLB Nam Định tại sân Thiên Trường thì nhận được cuộc điện thoại của người quen trong hội CĐV báo tin Ly đã mất trong một vụ tai nạn giao thông. Người đàn ông gần 60 tuổi đã “đứng hình”, rồi ngay lập tức chạy tới nhà xác nơi di hài của Ly vẫn chưa tan hơi ấm.\r\n\r\n“Khi nhìn thấy con gái tôi nằm đó, nước mắt tôi không thể ngừng rơi. Con bé còn trẻ quá, còn là lúc thanh xuân với cả một tương lai trước mắt mà nó nỡ lòng nào bỏ người thân, bỏ chúng tôi mà đi”, ông Quân rơi nước mắt.\r\n\r\nTheo ông Quân, tối ngày Ly mất, ông và hàng trăm thành viên Hội CĐV Bóng đá Nam Định đã ở cùng Ly tại nhà xác bệnh viện, để em không cô đơn, không lạnh lẽo trong chiếc xe cứu thương nơi em trút hơi thở cuối cùng vì chấn thương nặng vùng đầu. Đến khoảng gần 23h đêm cùng ngày, sau khi hoàn tất các thủ tục, ông cùng bố mẹ đẻ Ly đã đưa di hài về đến nhà.\r\n\r\n“Khi đặt di hài con bé vào chiếc giường trong ngôi nhà đã cũ, thương con bé quá, tôi mới bước lên giường muốn chỉnh chang lại di hài nó mà chiếc giường rung lên kẽo kẹt. Bố mẹ Ly mới nói với tôi cẩn thận không gãy giường cháu. Khi tôi cúi xuống nhìn, dưới gầm giường là những viên gạch xếp chồng lên nhau để chống đỡ những thang giường đã mục. Tôi lại không kìm được nước mắt”, người đàn ông gần 60 tuổi bật khóc nức nở.\r\n\r\nĐến bây giờ, dù Khánh Ly đã ra đi được 3 ngày nhưng ông Quân vẫn không thể quên được hình ảnh cô gái trẻ trung, năng động, lễ phép thường vui cười gọi “bố” mỗi khi gặp ông.\r\n\r\n“Đến bây giờ tôi vẫn ân hận khi vài ngày trước, trong chuyến về Quảng Ninh cổ vũ trận đấu giữa CLB Nam Định và Than Quảng Ninh, tôi được giao quản lý thành viên xe số 2 trong khi Ly ở xe số 4. Vì không quen ai, Ly có qua năn nỉ tôi: “Bố cho con lên xe số 2 đi với bố nhé”. Thế mà vì giữ nguyên tắc, tôi lại không cho con bé lên cùng. Đó cũng là lần cuối cùng tôi nói chuyện và được thấy con gái tôi còn cười nói, còn hoạt bát”, ông Quân thở dài.\r\n\r\nTheo ông Nguyễn Văn Quân, trước khi gặp nạn, Khánh Ly có nguyện ước sẽ sửa chữa căn nhà cho bố mẹ ở quê. Vì vậy, ngay sau khi Nguyễn Khánh Ly ra đi, Hội đã tổ chức quyên góp ủng hộ, hỗ trợ gia đình Khánh Ly sửa chữa căn nhà đúng theo nguyện vọng của nữ CĐV khi còn sống. Đến chiều 20/8, số tiền Hội CĐV Bóng đá Nam Định kêu gọi được đã lên tới hơn 60 triệu đồng và con số này vẫn đang tiếp tục tăng lên.\r\n\r\n“Chúng tôi, những CĐV Bóng đá Nam Định sẽ giúp Khánh Ly hoàn thành nốt công việc mà con bé còn dang dở để ở thế giới bên kia, con bé vẫn mãi nở nụ cười”, ông Quân chia sẻ.', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', 'Nguyễn Thị Hồng Yến', '2019-08-21 11:42:09', NULL),
(7, 'Trưởng công an xã ở Thanh Hóa hy sinh khi giúp dân chống lũ được công nhận liệt sĩ', 'Thủ tướng Nguyễn Xuân Phúc đã ký quyết định cấp bằng Tổ quốc ghi công cho liệt sĩ Thao Văn Súa, nguyên Trưởng Công an xã Nhi Sơn (huyện Mường Lát, Thanh Hoá), về hành động dũng cảm, hy sinh khi đang giúp dân chống lũ.\r\nSự kiện: Thanh Hóa\r\nTrưởng công an xã ở Thanh Hóa hy sinh khi giúp dân chống lũ được công nhận liệt sĩ - 1\r\n\r\nTrưởng Công an xã Nhi Sơn Thao Văn Súa - Ảnh: Người dân cung cấp\r\n\r\nSáng nay 21-8, ông Đào Ngọc Lợi, Cục trưởng Cục Người có công, Bộ Lao động - Thương binh và Xã hội (LĐ-TB-XH), cho biết trên cơ sở tờ trình của Bộ Lao động, Thương binh và xã hội (LĐ-TB-XH) và hồ sơ đề nghị công nhận liệt sĩ đối với ông Thao Văn Súa (33 tuổi, nguyên Trưởng Công an xã Nhi Sơn, huyện Mường Lát, Thanh Hóa), hy sinh khi đang làm nhiệm vụ giúp nhân dân chống bão số 3, Thủ tướng đã ký quyết định công nhận liệt sĩ về hành động dũng cảm của nguyên Trưởng công an xã Nhi Sơn.\r\n\r\nTheo Văn phòng Bộ LĐ-TB-XH, hôm nay 21-8, đoàn công tác của Bộ LĐ-TB-XH do Bộ trưởng Bộ LĐ-TB-XH Đào Ngọc Dung dẫn đầu đã lên đường vào tỉnh Thanh Hóa. Lễ trao Bằng Tổ quốc ghi công sẽ được tổ chức trọng thể vào sáng mai 22-8. \r\n\r\nNgoài trao bằng, Bộ LĐ-TB-XH sẽ trao quà các nhà hảo tâm, hỗ trợ gia đình liệt sĩ Súa và các hộ dân bị ảnh hưởng bởi lũ quét.\r\n\r\nTrước đó, như Báo Người Lao Động đã thông tin, trong lúc đi kiểm tra tình hình mưa lũ trong bão số 3, ông Thao Văn Súa (33 tuổi, Trưởng Công an xã Nhi Sơn ở huyện biên giới Mường Lát, Thanh Hóa) đã bị đất đá vùi lấp. Trong sáng 4-8, lực lượng chức năng đã tìm thấy, nhưng ông Súa đã tử vong.\r\n\r\nTheo đó, vào khoảng 19 giờ ngày 3-8, ông Thao Văn Súa được giao nhiệm vụ đi kiểm tra các hộ gia đình có nguy cơ sạt lở trên địa bàn. Do gặp trời mưa to, ông Súa không may bị đất đá vùi lấp ở gần trường Tiểu học xã Nhi Sơn.\r\n\r\nMặc dù lực lượng chức năng đã nỗ lực tìm kiếm, thế nhưng đến 6 giờ sáng 4-8, thi thể ông Súa mới được tìm thấy. Lực lực lượng công an phối hợp với các cấp, ngành và gia đình đã đưa thi thể ông Súa về nhà tổ chức án táng theo phong tục địa phương.\r\n\r\nĐược biết, ông Thào Văn Súa đã có thâm niên 10 năm công tác tại vị trí Trưởng Công an xã Nhi Sơn, huyện Mường Lát.', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', 'Nuu', '2019-08-21 11:43:14', NULL),
(8, 'Đợt mưa to đang diễn ra ở Bắc Bộ và Bắc Trung Bộ còn kéo dài đến khi nào?', 'Mưa to đến rất to diễn ra ở Bắc Bộ và Bắc Trung Bộ khiến ngập lụt xảy ra ở vùng trũng thấp; nguy cơ xảy ra sạt lở, lũ quét ở vùng núi.\r\nSự kiện: Tin ngắn\r\nĐợt mưa to đang diễn ra ở Bắc Bộ và Bắc Trung Bộ còn kéo dài đến khi nào? - 1\r\n\r\nMưa dông vẫn còn tiếp diễn trong khoảng 2 ngày tới ở Bắc Bộ và Bắc Trung Bộ. Ảnh minh họa Hoàn Như.\r\n\r\nTheo Trung tâm Dự báo khí tượng thủy văn Quốc gia, hôm qua (20/8), ở đồng bằng và trung du Bắc Bộ có mưa vừa, có nơi mưa to; ở các tỉnh Bắc Trung Bộ đã có mưa vừa, mưa to, có nơi mưa rất to và rải rác có dông.\r\n\r\nNguyên nhân của đợt mưa dông này là do ảnh hưởng của rãnh áp thấp kết hợp với hội tụ gió từ mực 1500m đến 5000m.\r\n\r\nDự báo, ngày và đêm nay (21/8), ở khu vực đồng bằng và trung du Bắc Bộ, các tỉnh Quảng Ninh, Hải Phòng, Hòa Bình, Sơn La, Thanh Hóa và Nghệ An có mưa vừa, mưa to, có nơi mưa rất to (lượng mưa 50-100mm/24h, có nơi trên 150mm/24h).\r\n\r\nKhu vực vùng núi Bắc Bộ và các tỉnh từ Hà Tĩnh đến Thừa Thiên Huế có mưa rào và dông rải rác, cục bộ có mưa vừa, mưa to. \r\n\r\nCơ quan khí tượng nhận định, đợt mưa này còn tiếp diễn ở Bắc Bộ và Bắc Trung Bộ ngày nay và ngày mai (22/8).  Trong mưa dông có khả năng xảy ra lốc, sét, mưa đá và gió giật mạnh. Sang đến ngày 23/8, mưa giảm xuống diện rải rác, trời có lúc hửng nắng trở lại.\r\n\r\nKhu vực Hà Nội ngày và đêm nay (21/8), có lúc có mưa vừa, mưa to, có nơi mưa rất to và dông. Trong mưa dông có khả năng xảy ra gió giật mạnh. \r\n\r\nDo mưa lớn nên từ nay đến ngày 24/8, trên các sông ở Bắc Bộ, Thanh Hóa, Nghệ An có khả năng xảy ra một đợt lũ với biên độ lũ lên từ 1-3m (trên các sông ở Bắc Bộ), từ 2-6m (trên các sông ở Thanh Hóa, Nghệ An).\r\n\r\nMực nước đỉnh lũ thương lưu các sông ở Thanh Hóa, Nghệ An có khả năng lên mức báo động BĐ1 và trên BĐ1; hạ lưu các sông chính khu vực Thanh Hóa, Nghệ An và các sông chính khu vực Bắc Bộ còn dưới mức BĐ1.\r\n\r\nNguy cơ cao xảy ra lũ quét và sạt lở đất, ngập lụt ở vùng trũng ở nhiều tỉnh miền núi khu vực Bắc Bộ, Thanh Hóa, Nghệ An. Người dân cần hết sức đề phòng và có phương án ứng phó.\r\n\r\nTrái ngược với thời tiết ở Bắc Trung Bộ, khu vực Trung và Nam Trung Bộ từ Đà Nẵng đến Ninh Thuận do ảnh hưởng của đới gió Tây Nam gây hiệu ứng Phơn nên có nắng nóng với nhiệt độ cao nhất phổ biến trong khoảng từ 35-37 độ C, có nơi trên 37 độ C; thời gian có nhiệt độ trên 35 độ C từ 11-16 giờ.\r\n\r\nĐợt nắng nóng này dự báo có khả năng còn kéo dài từ 3-4 ngày tới. Do nắng nóng kéo dài nên có nhiều nguy cơ xảy ra cháy nổ, hỏa hoạn ở khu vực dân cư; nguy cơ cao xảy ra cháy rừng ở các tỉnh Trung và nam Trung Bộ.  \r\n\r\nKhu vực Tây Nguyên và Nam Bộ trong vài ngày tới thời tiết phổ biến có mưa rào và dông vài nơi, riêng chiều tối có mưa rào và dông rải rác. Trong cơn dông có khả năng xảy ra lốc, sét và gió giật mạnh.\r\n\r\nMới đầu giờ chiều, Hà Nội tối đen như mực trong mưa giông chớp giật\r\nMới đầu giờ chiều, Hà Nội tối đen như mực trong mưa giông chớp giật\r\nĐầu giờ chiều nay, mây đen kéo đến rợp trời, Hà Nội nhanh chóng chìm vào bóng tối, sấm chớp liên hồi và mưa như trút.\r\n\r\n', 'sunflower-002-1470471840262.jpg', 'Rion', '2019-08-21 11:44:00', NULL),
(9, 'Vì sao cây gỗ khủng gây thiệt hại kinh hoàng ở Sa Ná?', 'Trong đợt mưa lũ do cơn bão số 3 gây ra, bản Sa Ná (xã Na Mèo, huyện Quan Sơn, Thanh Hóa) là nơi chịu thiệt hại nặng nề nhất với nhiều người mất tích, nhà cửa bị phá hủy.\r\nSự kiện: Tin ngắn\r\nVì sao cây gỗ khủng gây thiệt hại kinh hoàng ở Sa Ná? - 1\r\n\r\nĐoàn viên thanh niên hỗ trợ người dân Sa Ná xây dựng lại nhà sau lũ. Ảnh: Hoàng Lam\r\n\r\nKết quả điều tra của Tổng cục Khí tượng Thủy văn hé lộ bất ngờ, mưa lũ cùng những thân gỗ lớn từ biên giới Việt - Lào là nguyên nhân chính gây ra thiệt hại.\r\n\r\nSuối Son chảy qua bản Sa Ná là một nhánh của sông Luồng (một chi lưu của sông Mã), bắt nguồn từ Lào chảy vào Việt Nam trên địa phận xã Na Mèo, huyện Quan Sơn, tỉnh Thanh Hóa. Do ảnh hưởng của bão số 3 năm 2019, lượng mưa ở phần thượng lưu suối Son trên đất Lào rất lớn, khiến lưu lượng nước mạnh có thể mang được những cây gỗ có đường kính trên 1,5m, dài từ 15 đến 20m từ các cánh rừng của Lào về Việt Nam.\r\n\r\n“Dòng nước lũ kèm cây cối bị dồn vào đoạn suối hẹp hơn so với trước đó nên gia tăng tốc độ và chuyển hướng, hướng thẳng vào các ngôi nhà ở bản Sa Ná chứ không chảy theo dòng suối uốn lượn bên cạnh bản như lũ nhỏ. Đây là nguyên nhân chính gây thiệt hại về người, tài sản của bản Sa Ná”, báo cáo của Tổng cục Khí tượng Thủy văn lên Bộ trưởng Bộ Tài nguyên và Môi trường nhận định.\r\n\r\nTrên địa bàn Sa Ná, nơi lũ quét qua còn rất nhiều cây gỗ Pơ Mu, Sa Mộc lớn mắc lại. Những cây này đã khô, theo điều tra loại gỗ lớn, đặc hữu thế này chỉ còn ở các cánh rừng thuộc đất Lào và biên giới Việt Lào.\r\n\r\nTổng cục Khí tượng Thủy văn kiến nghị, Bộ Tài nguyên và Môi trường có ý kiến với địa phương sớm có biện pháp phá dỡ các khối đá khiến dòng chảy suối Son bị co hẹp tự nhiên; Không tái định cư cho người dân bản Sa Ná tại khu vực đã xảy ra lũ quét và trong các khu vực thường xuyên ngập nước, nơi có nguy cơ bị ảnh hưởng lũ quét.\r\n\r\nLũ rút ở Sa Ná, gỗ tràn lan khắp bản\r\nLũ rút ở Sa Ná, gỗ tràn lan khắp bản\r\nGỗ trôi về Sa Ná được người dân ví như từ một cánh rừng vừa bị lâm tặc đốn hạ ngổn ngang.\r\n\r\n \r\nTheo N.H (Tiền Phong)\r\n \r\nTIN LIÊN QUAN', 'sunflower-002-1470471840262.jpg', 'Vanessa ', '2019-08-21 11:46:05', NULL),
(18, 'Hướng dẫn ghép phụ đề vào video bằng Format Factory', 'Với những ai thường xuyên phải biên tập, chỉnh sửa video thì chắc hẳn sẽ nghe đến cái tên Formar Factory. Đây là công cụ đa năng khi có thể hỗ trợ đổi định dạng video, cắt ghép video, giảm dung lượng video mà vẫn giữ nguyên chất lượng, hay như khả năng ghép cứng phụ đề vào video phim hoặc ca nhạc.\r\n\r\nNếu như trước kia để có thể xem được phụ đề của video, chúng ta sẽ cần phải tải file phụ đề, sau đó chạy cùng với video trong cùng một thư mục. Khá mất thời gian. Nhưng với Format Factory, thì mọi việc lại rất đơn giản, khi bạn chỉ cần ghép file phụ đề trực tiếp vào video là có thể xem video có phụ đề. Vậy để có thể ghép sub trực tiếp vào video bằng Format Factory thì làm như thế nào? Nếu bạn vẫn đang loay hoay chưa biết cách thực hiện, hãy theo dõi bài viết dưới đây của Quản trị mạng.\r\n\r\nHướng dẫn ghép cứng phụ đề video bằng Format Factory\r\nTrước hết bạn hãy tải phần mềm Format Factory theo đường link bên dưới:\r\n\r\nTải phần mềm Format Factory\r\nBước 1:\r\nBạn cần phải có file phụ đề cho video muốn chèn sub. Tên video và phụ đề phải giống nhau và không có dấu\r\n\r\nBước 2:\r\nChúng ta khởi động chương trình Format Factory. Giao diện chương trình sẽ để ở Tiếng Anh, bạn có thể đổi sang tiếng Việt để dễ sử dụng.\r\n\r\nTại giao diện chính, nhấn chọn vào mục Language, rồi nhấn chọn Select more languages.\r\n\r\nFormat Factory\r\n\r\nBước 3:', 'sunflower-002-1470471840262.jpg', 'Nguyễn Thị Hồng Yến', '2019-08-23 03:56:02', NULL),
(19, 'ee', 'ee', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', 'ee', '2019-08-23 03:58:36', NULL),
(20, 'rr', 'rr', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', 'rr', '2019-08-23 03:58:49', NULL),
(21, 'tt', 'tt', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', 'tt', '2019-08-23 03:58:59', NULL),
(22, 'uu', 'uu', 'DSC_3420.jpg', 'uu', '2019-08-23 03:59:16', NULL),
(23, 'qq', 'qq', 'hinh-nen-hoa-huong-duong-dep-1.jpg', 'qq', '2019-08-23 03:59:35', NULL),
(24, 'ee', 'ee', 'sunflower-002-1470471840262.jpg', 'ee', '2019-08-23 10:42:21', NULL);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created`, `status`) VALUES
(1, 3, '2019-03-03 03:03:03', 0),
(2, 12, '2019-03-03 03:03:03', 1);

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
(16, 4, '3s', 'tot re', 'bg.jpg', 200000000, '2019-08-16 09:17:37', '0000-00-00 00:00:00'),
(18, 2, '7s', 'sang trong', '67769358_3294844273859371_4545871790714388480_n.jpg', 20000, '2019-08-16 09:18:20', '0000-00-00 00:00:00'),
(20, 8, '3s', 'rat tien loi', 'sunflower-002-1470471840262.jpg', 200000000, '2019-08-19 03:56:27', '0000-00-00 00:00:00'),
(21, 4, '9d', 'sp ben cao', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', 30000000, '2019-08-19 03:56:56', '0000-00-00 00:00:00'),
(22, 8, '7+', 'sầ', 'hinh-nen-hoa-huong-duong-dep-1.jpg', 300000000, '2019-08-21 09:17:57', '0000-00-00 00:00:00'),
(23, 5, 'h3', 'dep ben', 'DSC_3420.jpg', 20000, '2019-08-21 09:21:55', '0000-00-00 00:00:00'),
(24, 4, '3z', 'deppppp', 'sunflower-002-1470471840262.jpg', 200000000, '2019-08-21 09:27:04', '0000-00-00 00:00:00'),
(25, 1, 'A87', 'thiet ke dep', '69067234_473929703398076_2683232899225878528_n.png', 20000000, '2019-08-21 09:27:29', '0000-00-00 00:00:00'),
(26, 11, '3s', 'sss', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', 200000000, '2019-08-21 09:27:57', '0000-00-00 00:00:00'),
(27, 7, 'a1', 'sads', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', 200000, '2019-08-23 03:32:07', '0000-00-00 00:00:00');

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
(7, 'Apple'),
(8, 'Iphone'),
(9, 'Legion'),
(10, 'Asus'),
(11, 'nokia');

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
(17, 'customer', 'Apple', '0cca5c20bd216cc8646cf06d58d47194', 'xsd', 'ntnam1993@gmail.com', '44', '2019-08-28', '67769358_3294844273859371_4545871790714388480_n.jpg', '2019-08-17 04:29:32', '0000-00-00 00:00:00'),
(18, 'admin', 'Apple2', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', 'hh', '65656565655555', '2019-08-27', 'sunflower-002-1470471840262.jpg', '2019-08-19 10:03:21', '0000-00-00 00:00:00'),
(19, 'admin', 'Apple', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', 'yenrion9941@gmail.com', '0376381262', '2019-08-02', 'sunflower-002-1470471840262.jpg', '2019-08-19 10:51:56', '0000-00-00 00:00:00'),
(20, 'customer', 'Qua tao', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', '0388079982', '0376381262', '2019-08-03', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', '2019-08-19 10:54:44', '0000-00-00 00:00:00'),
(22, 'admin', 'quatao2808sdsadaD', '0cca5c20bd216cc8646cf06d58d47194', 'AsdA', 'AsA', '0376381262', '2019-08-14', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', '2019-08-19 02:21:12', '0000-00-00 00:00:00'),
(23, 'admin', 'AppleNguyen', '0cca5c20bd216cc8646cf06d58d47194', 'Nguyễn Thị Hồng Yến', 'cha123@gmail.com', '56568', '2019-08-23', 'nhung-loai-hoa-tuong-trung-cho-su-thanh-cong-2.jpg', '2019-08-20 03:53:50', '0000-00-00 00:00:00'),
(26, 'customer', 'ad', 'd4b871a18415a62ad2943b5cd1c34c25', 'Nguyễn Thị Hồng Yến', 'ss@gmail.com', '0376381262', '2019-08-29', 'hinh-nen-hoa-huong-duong-dep-1.jpg', '2019-08-20 04:09:10', '0000-00-00 00:00:00'),
(27, 'admin', 'QuataoNguyen', 'd41d8cd98f00b204e9800998ecf8427e', 'Ng', 'yenr@gmail.com', '', '2019-08-13', 'sunflower-002-1470471840262.jpg', '2019-08-22 09:28:32', '0000-00-00 00:00:00'),
(28, 'admin', 'quata', 'd41d8cd98f00b204e9800998ecf8427e', 'adad', 'qua@gmail.com', '03', '2019-08-13', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-22 09:32:46', '0000-00-00 00:00:00'),
(29, 'admin', 'qua', 'd41d8cd98f00b204e9800998ecf8427e', 'Nguyễn Thị Hồng Yến', 'yr@gmail.com', '33333333333333', '2019-08-24', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-22 09:49:39', '0000-00-00 00:00:00'),
(30, 'customer', 'quatao280822', 'd41d8cd98f00b204e9800998ecf8427e', '13sf', 'sd@gmail.com', '33333333333333', '2019-08-23', 'sunflower-002-1470471840262.jpg', '2019-08-22 10:25:08', '0000-00-00 00:00:00'),
(31, 'admin', 'quatao280822Ssad', 'd41d8cd98f00b204e9800998ecf8427e', 'xv', 'tw@gmail.com', '0376381262', '2019-08-08', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-22 10:27:49', '0000-00-00 00:00:00'),
(32, 'customer', 'ngueynAppp', 'd41d8cd98f00b204e9800998ecf8427e', 's', 'f@gmail.com', '0376381262', '2019-08-30', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-22 10:28:45', '0000-00-00 00:00:00'),
(33, 'customer', 'Appleás', 'd41d8cd98f00b204e9800998ecf8427e', 's', 'as@gmail.com', '0376381262', '2019-08-02', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-22 10:42:35', '0000-00-00 00:00:00'),
(35, 'admin', 'Appdsssadad', 'ed2b1f468c5f915f3f1cf75d7068baae', 'asad', 'sad@gmail.com', '65656565655555', '2019-08-17', 'sunflower-002-1470471840262.jpg', '2019-08-22 10:52:38', '0000-00-00 00:00:00'),
(36, 'admin', 'yyyy', 'ed2b1f468c5f915f3f1cf75d7068baae', 'dfasf', 'afsf@gmail.com', '33333333333333', '2019-08-16', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-22 10:56:15', '0000-00-00 00:00:00'),
(37, 'admin', 'sssss', '84a25124ddcd1f7f7d70640c9e67a40b', 'nguyn', 'ynn@gmail.com', '56568', '2019-08-22', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-23 04:03:41', '0000-00-00 00:00:00'),
(38, 'customer', 'NguyenYen', 'ed2b1f468c5f915f3f1cf75d7068baae', 'Nguyễn Thị Hồng Yến', 'yenrion2808@gmail.com', '33333333333333', '2019-08-22', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-23 09:11:10', '0000-00-00 00:00:00'),
(39, 'customer', 'appp', 'ed2b1f468c5f915f3f1cf75d7068baae', 'Nguyễn Thị Hồng Yến', 'aD@gmail.com', '65656565655555', '2019-08-15', 'sunflower-002-1470471840262.jpg', '2019-08-23 09:19:20', '0000-00-00 00:00:00'),
(40, 'admin', 'yenrion ', 'ed2b1f468c5f915f3f1cf75d7068baae', 'Nguyễn Thị Hồng Yến', 'hagiang12@gmail.com', '03', '2019-08-21', 'sunflower-002-1470471840262.jpg', '2019-08-23 01:56:18', '0000-00-00 00:00:00'),
(41, 'admin', 'yen', 'ed2b1f468c5f915f3f1cf75d7068baae', 'Nguyễn Thị Hồng Yến', 'yenrfff@gmail.com', '0376381262', '2019-08-07', 'Tranh-Gach-3d-Kinh-Cuong-Luc-12.jpg', '2019-08-23 01:59:16', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
