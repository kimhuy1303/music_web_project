-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2022 lúc 10:04 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `musicweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Họ` varchar(100) NOT NULL,
  `Tên` varchar(100) NOT NULL,
  `Ngày sinh` date NOT NULL,
  `Giới tính` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `Họ`, `Tên`, `Ngày sinh`, `Giới tính`, `email`) VALUES
(1, 'kimhuy', 'e10adc3949ba59abbe56e057f20f883e', '', '', '0000-00-00', '', ''),
(2, 'kimhuy', '202cb962ac59075b964b07152d234b70', '', '', '0000-00-00', '', ''),
(3, 'minhchi', '202cb962ac59075b964b07152d234b70', '', '', '0000-00-00', '', ''),
(4, 'minhchi', '202cb962ac59075b964b07152d234b70', '', '', '0000-00-00', '', ''),
(5, 'minhchi', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(6, 's', '03c7c0ace395d80182db07ae2c30f034', '', '', '0000-00-00', '', ''),
(7, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(8, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(9, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(10, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(11, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(12, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', ''),
(13, 'a', '0cc175b9c0f1b6a831c399e269772661', '', '', '0000-00-00', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
