-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 11:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbangame`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactive`
--
CREATE DATABASE IF NOT EXISTS `webbangame` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webbangame`;

CREATE TABLE `tblactive` (
  `id_active` int(11) NOT NULL,
  `active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblactive`
--

INSERT INTO `tblactive` (`id_active`, `active`) VALUES
(1, 'Steam'),
(2, 'Epic Games Store'),
(3, 'Uplay'),
(4, 'Origin'),
(5, 'G2A'),
(6, 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `id_customer` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name_customer` varchar(150) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`id_customer`, `account`, `password`, `name_customer`, `tel`, `email`) VALUES
(6, 'huyhhuy4', 'e10adc3949ba59abbe56e057f20f883e', 'Vo Quang Huy', '0918467885', 'vpepkicpbmvhxceteq@mhzayt.com'),
(7, 'voquanghuy98', '49c16aa079abbc5efc695d7bf0164a44', 'Vo Quang Huy', '0123456789', 'voquanghuy@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblgame`
--

CREATE TABLE `tblgame` (
  `id_game` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `name_game` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(150) NOT NULL,
  `videos` varchar(150) DEFAULT NULL,
  `ver` varchar(100) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `active` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `des` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgame`
--

INSERT INTO `tblgame` (`id_game`, `id_subject`, `name_game`, `price`, `images`, `videos`, `ver`, `region`, `active`, `status`, `des`) VALUES
(13, 3, 'Dead By Daylight', 190000, 'dbd.jpg', 'Dead by Daylight - Launch Trailer.mp4', 'Standard Edition', 'Global', 'Uplay', 'Còn hàng', ''),
(14, 3, 'FIFA 2020', 280000, 'fifa.jpg', '', 'Standard Edition', 'Global', 'Steam', 'Còn hàng', ''),
(15, 7, 'Portal 2', 200000, 'portal2.png', '', 'Standard Edition', 'Global', 'Steam', 'Còn hàng', ''),
(16, 6, 'Horizon Zero Dawn', 549000, 'zero.jpg', '', 'Standard Edition', 'Global', 'Epic', 'Còn hàng', ''),
(17, 8, 'Minecraft Dungeons', 250000, 'mine.png', '', 'Standard Edition', 'Global', 'Steam', 'Còn hàng', ''),
(18, 9, 'Cuphead', 399000, 'cup.jfif', 'Cyberpunk 2077.mp4', 'Standard Edition', 'Global', 'G2A', 'Còn hàng', '<p>Đ&acirc;y l&agrave; game Cuphead .</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `id_subject` int(11) NOT NULL,
  `name_subject` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`id_subject`, `name_subject`) VALUES
(1, 'Hành Động'),
(2, 'Kinh Dị'),
(3, 'Thể Thao'),
(4, 'Thế Giới Mở'),
(6, 'Sinh Tồn'),
(7, 'Giải Đố'),
(8, 'Phiêu Lưu'),
(9, 'Casual'),
(13, 'Sandbox');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id_user`, `name_user`, `username`, `password`) VALUES
(1, '', 'huyhhuy1', '49c16aa079abbc5efc695d7bf0164a44'),
(8, 'Dinh Tan Hoang', 'dinhtanhoang', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Ta Vinh Quang', 'tavinhquang98', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'Vo QUang Huy', 'huyhhuy2', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactive`
--
ALTER TABLE `tblactive`
  ADD PRIMARY KEY (`id_active`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `account` (`account`);

--
-- Indexes for table `tblgame`
--
ALTER TABLE `tblgame`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactive`
--
ALTER TABLE `tblactive`
  MODIFY `id_active` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblgame`
--
ALTER TABLE `tblgame`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
