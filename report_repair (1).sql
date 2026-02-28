-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2026 at 08:34 AM
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
(3, 'อัลฟาร์ต', 'alfart.', 'd41d8cd98f00b204e980', '0987897654', 2),
(4, 'เกมส์', 'game.', 'd41d8cd98f00b204e980', '0587897654', 0),
(5, 'แวเลาะห์', 'Lah.', 'd41d8cd98f00b204e980', '0747897654', 0),
(6, 'ฮับเสาะห์', 'HubSao.', 'd41d8cd98f00b204e980', '0877897654', 0),
(7, 'อามีนี', ' Amini.', 'd41d8cd98f00b204e980', '0689897568', 0),
(8, 'วาฮีดะห์', 'Wahidah.', 'd41d8cd98f00b204e980', '0452825727', 0),
(9, 'วาลิด', 'Walid.', 'd41d8cd98f00b204e980', '0658897654', 0),
(10, 'รุสนา', 'Rusna.', 'd41d8cd98f00b204e980', '0369897654', 0),
(11, 'ยัสตานา', ' Yastana.', 'd41d8cd98f00b204e980', '0687897568', 0),
(12, 'ณัฐพล', ' Nattaphon.', 'd41d8cd98f00b204e980', '0254825727', 0),
(13, 'ซีมียา', ' Simiya.', 'd41d8cd98f00b204e980', '0685497654', 0),
(14, 'กูอัยมี่', ' Guaymi.', 'd41d8cd98f00b204e980', '0478597654', 0);

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
  `repair_details` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repair_id`, `repair_date`, `repair_form`, `repair_user`, `repair_list`, `repair_responsible`, `repair_status`, `repair_details`, `user_id`) VALUES
(21, '07/02/2569', '252', 'DDDDD', 'dsfsf', 'subree', 'รอรับเรื่อง', 'sfsff', 3),
(22, '07/02/2569', '252', 'asd', 'asddda', 'subree', 'รอรับเรื่อง', 'ddd', 5),
(23, '07/02/2569', '2533', 'addsdsd', 'adadd', 'adda', 'กำลังดำเนินการ', 'adad', 5),
(24, '07/02/2569', '252', '', 'rhrhrt', 'subree', 'รอรับเรื่อง', 'ilkiu', 6),
(25, '08/02/2569', '86378', '', 'yiuy', 'subree', 'กำลังดำเนินการ', 'yhty', 6),
(26, '09/02/2569', '678', '222', '72578', 'subree', 'รอรับเรื่อง', 'ยรน', 3),
(27, '10/02/2569', '275', '5', 'รีสี', 'subree', 'รอรับเรื่อง', 'rthrt', 3),
(28, '11/02/2569', '37532', '', 'uykiyu', 'subree', 'รอรับเรื่อง', 'rtht', 3);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
