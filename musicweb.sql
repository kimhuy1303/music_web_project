create database musicweb
CREATE TABLE `users` (
  `user_id` int  NOT NULL,
  `username` varchar(100)  NOT NULL,
  `password` varchar(50)  NOT NULL,
  `Họ` varchar(100)   NOT NULL,
  `Tên` varchar(100)   NOT NULL,
  `Ngày sinh` date   NOT NULL,
  `Giới tính` varchar(10)   NOT NULL,
  `email` varchar(100)   NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
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
-- ALTER TABLE `users`
--   MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
