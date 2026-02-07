-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2026 at 10:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_phone` varchar(20) NOT NULL,
  `admin_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_phone`, `admin_role`) VALUES
(1, 'ซุป', 'soup.hhh', 'd41d8cd98f00b204e980', '0987897654', 1),
(3, 'อัลฟาร์ต', 'alfart.kkk', '81dc9bdb52d04dc20036', '0987897654', 2);

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `repair_id` int(11) NOT NULL,
  `repair_date` varchar(100) NOT NULL,
  `repair_form` varchar(255) NOT NULL,
  `repair_user` varchar(255) NOT NULL,
  `repair_list` varchar(255) NOT NULL,
  `repair_responsible` varchar(255) NOT NULL,
  `repair_status` varchar(255) NOT NULL,
  `repair_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repair_id`, `repair_date`, `repair_form`, `repair_user`, `repair_list`, `repair_responsible`, `repair_status`, `repair_details`) VALUES
(5, '12/08/2568', '258', 'อัลฟาต', '2165', 'subree', 'กําลังซ่อม', '25/5874'),
(6, '11/08/2569', '4578', 'สิรวิทย์', '5648', 'subree', 'กำลังซ่อม', '5412'),
(7, '10/04/2569', '1214', 'วาลิด', '2448', 'subree', 'เสร้จสิ้น', '854569'),
(8, '09/05/2569', '2123', 'นัทพล', '21987', 'subree', 'เสร้จสิ้น', '321258/'),
(9, '08/04/2569', '147', 'อามีนี', '587', 'subree', 'กำลังซ่อม', '458/88'),
(11, '07/06/2569', '3265', 'ยัสตานา', '689689', 'subree', 'เสร้จสิ้น', '369963'),
(12, '06/07/2569', '546', 'วาฮีดะห์', '27257', 'subree', 'รอซ่อม', '78758'),
(13, '05/04/2569', '1214', 'ซีมียา', '4713', 'subree', 'รอซ่อม', '9856'),
(14, '04/05/2569', '4784', 'ฮับสาะห์', '741', 'subree', 'รอซ่อม', '2581456'),
(15, '03/08/2569', '939863', 'รุสนา', '87578', 'subree', 'กำลังซ่อม', '25614'),
(16, '02/12/2658', '158', 'กูอัยมี่', '5478', 'subree', 'กำลังซ่อม', '11/22'),
(17, '01/11/2569', '1211', 'แวเลาะห์', '1445', 'subree', 'รอซ่อม', '9899'),
(18, '24/11/2568', '2233', 'ซุบรี', '123321', 'subree', 'กำลังซ่อม', '258852');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_address` text NOT NULL,
  `user_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repair_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
