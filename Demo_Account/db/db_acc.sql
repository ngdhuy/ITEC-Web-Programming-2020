-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2020 at 04:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_acc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `comment`) VALUES
(1, 1, 1, 'First comment'),
(2, 2, 1, 'Second comment'),
(3, 3, 1, 'abc'),
(4, 3, 1, 'hello'),
(5, 3, 4, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `content`) VALUES
(1, 1, 'Today is Friday!'),
(2, 2, 'Tommorrow is Saturday!'),
(3, 2, 'Hello Mr Buoi'),
(4, 1, 'Hello cả lớp 18BIT - ITEC'),
(5, 3, 'Welcome to ITEC - 18BIT'),
(6, 3, 'Chương trình liên kết quốc tế của Trường ĐH Khoa học Tự nhiên, ĐHQG-HCM phối hợp với Đại học Công nghệ Auckland - AUT (New Zealand) thông báo xét tuyển khóa 13 cho chương trình Cử nhân Quốc tế, ngành: Công nghệ Thông tin – chuyên ngành Khoa học Dịch vụ, Kỹ thuật phần mềm và Trí tuệ Nhân tạo.  \r\n\r\nĐối tượng dự tuyển: Tất cả các thí sinh đã có bằng tốt nghiệp THPT.\r\n\r\nHình thức xét tuyển: 3 hình thức\r\n\r\n- Xét dựa vào điểm học bạ THPT (ưu tiên theo kết quả các môn Toán và Ngoại ngữ); Hoặc \r\n\r\n- Xét dựa vào kết quả Kỳ Thi Năng Lực do ĐHQG-HCM tổ chức vào tháng 3 và tháng 7 (từ 600 điểm).\r\n\r\n- Xét dựa vào kết quả Kỳ Thi THPT Quốc Gia (từ 16 điểm).\r\n\r\n*Tuyển thẳng các thí sinh tốt nghiệp THPT ở nước ngoài (sử dụng tiếng Anh) hoặc các Trường THPT quốc tế dạy hoàn toàn bằng tiếng Anh tại Việt Nam.\r\n\r\nĐối với các thí sinh chưa có bằng tiếng Anh (IELTS 6.0 hoặc tương đương) sẽ tham gia kỳ kiểm tra tiếng Anh đầu vào do ITEC, trường ĐH KHTN tổ chức hàng tháng.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(1, 'user01', '123', 'user01@gmail.com'),
(2, 'admin', 'admin', 'admin@trumcuoi.com'),
(3, 'itect', '2020', 'abc@itect.hcmus.edu.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
