-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2024 at 10:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ngaydathang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongdonhang` double(10,2) NOT NULL DEFAULT '0.00',
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `name`, `email`, `address`, `tel`, `ngaydathang`, `tongdonhang`, `id_user`) VALUES
(1, 'ewew', 'wewe', 'weewwe', '88888', '2024-12-12 05:00:54', 999.00, 5),
(2, 'werwerew', 'fsfsdfd', 'sdfsdfsd', '6666', '2024-12-12 05:00:54', 1052003.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

  -- change collate -> utf8mb4_general_ci if not work

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` text NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(7, 'sadadas', 5, 6, '2024-12-12 01:48:26'),
(8, 'erwe', 5, 16, '2024-12-12 02:29:35'),
(9, 'wewq', 5, 16, '2024-12-12 02:33:28'),
(10, 'qweqwe', 5, 16, '2024-12-12 02:34:05'),
(11, 'ádasds', 5, 16, '2024-12-12 02:34:29'),
(12, 'wewew', 5, 16, '2024-12-12 03:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `kiemtra` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `kiemtra`) VALUES
(1, 'sdasda666', 1),
(2, '12355888ffff', 1),
(3, 'sách thiếu nhi 35', 1),
(4, '1236d', 1),
(5, '123443432488888', 1),
(6, 'sdasdadsasdgggg', 1),
(7, '6666', 1),
(8, 'Laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT '0.00',
  `discount` int NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `kiemtrasp` int NOT NULL DEFAULT '1',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `discount`, `img`, `mota`, `luotxem`, `kiemtrasp`, `iddm`) VALUES
(1, 'cdc', 213123.00, 0, '205913.jpg', 'cdscsd', 77, 0, 2),
(2, 'adasd', 99999.00, 0, '205913.jpg', 'adsada', 7655, 0, 3),
(3, 'iphone 9', 99999.00, 0, '205913.jpg', 'ewrewrwe', 99, 0, 4),
(4, 'âs', 99999.00, 0, '205913.jpg', 'đasdas', 20, 0, 1),
(5, 'cscs', 99999.00, 0, '205913.jpg', 'cscsc', 42, 0, 2),
(6, 'sdsda', 99999.00, 0, '205913.jpg', 'dsadsd', 545, 0, 3),
(7, '6666777', 777.00, 0, '108142.jpg', '  yyyyyyyyyyyyyyyyy  ', 23, 0, 3),
(8, 'iphone 9', 99999.00, 0, '528725.jpg', 'dwdw', 88, 0, 2),
(9, 'iphone 9', 99999.00, 0, '135653.jpg', 'dfsdfsd', 66, 0, 3),
(10, 'iphone 8', 99999888.00, 0, '135670.jpg', '   rweeeeeeeeeeeeeeeeeeeeee   ', 44, 0, 5),
(11, 'ewrwer888', 7778888.00, 0, '16729.jpg', ' yyyyyyyyyyyyyyyyy ', 46, 0, 3),
(12, 'iphone 9', 99999.00, 0, '183401.jpg', 'sdsdsd', 43, 0, 2),
(13, 'iphone 9', 777.00, 0, '183401.jpg', 'iiiiiiiiii', 0, 0, 2),
(14, '5555', 99999888.00, 0, '82029.jpg', '0000', 0, 0, 7),
(15, 'laptop22', 666.00, 0, '107899.jpg', 'laptop', 888, 0, 8),
(16, 'Laptop 02', 4444.00, 0, '508246.jpg', '88888', 999, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `kiemtratk` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`, `kiemtratk`) VALUES
(5, 'Trần Dũng', '111', 'dunglegend555@gmail.com', 'Trịnh Văn Bô1', '0357340947', 1, 0),
(6, 'eqweqw', 'ewqwe', 'dunglegend555@gmail.com', 'qeqwe', 'ewqeqw', 0, 0),
(7, 'qweqwe', 'wqeqweqw', 'dunglegend555@gmail.com', 'qweqwe', 'qweqwe', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
