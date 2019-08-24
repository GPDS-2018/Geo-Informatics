-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 02:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_map`
--

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `gen_id` int(11) NOT NULL COMMENT 'รหัสข้อมูลทั่วไป',
  `fullname` varchar(100) NOT NULL COMMENT 'ชื่อ-นามสกุลผู้แจ้ง',
  `gen_tel` varchar(11) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `lat_curr` varchar(20) NOT NULL COMMENT 'ตำแหน่งปัจจุบัน(lat)',
  `log_curr` varchar(20) NOT NULL COMMENT 'ตำแหน่งปัจจุบัน(log)',
  `name_place` varchar(100) NOT NULL COMMENT 'ชื่อสถานที่,นามแฝง',
  `level_wt` varchar(7) NOT NULL COMMENT 'ระดับน้ำ',
  `latitude` varchar(15) NOT NULL COMMENT 'latitude',
  `longitude` varchar(15) NOT NULL COMMENT 'longitude'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_img`
--

CREATE TABLE `tb_img` (
  `img_id` int(11) NOT NULL COMMENT 'รหัสรูปภาพ',
  `locator_img` varchar(200) NOT NULL COMMENT 'ตำแหน่งรูปภาพ',
  `gen_id` int(11) NOT NULL COMMENT 'รหัสข้อมูลทั่วไป'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indexes for table `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อมูลทั่วไป', AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_img`
--
ALTER TABLE `tb_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
