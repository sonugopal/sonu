-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 02:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishakerala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'dhisha', 'human');

-- --------------------------------------------------------

--
-- Table structure for table `b_group`
--

CREATE TABLE `b_group` (
  `group_id` int(10) NOT NULL,
  `group_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_group`
--

INSERT INTO `b_group` (`group_id`, `group_name`) VALUES
(1, 'A+ve'),
(2, 'A-ve'),
(3, 'B+ve'),
(4, 'B-ve'),
(5, 'O+ve'),
(6, 'O-ve'),
(7, 'AB+ve'),
(8, 'AB-ve'),
(9, 'Bombay');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dist_id` int(20) NOT NULL,
  `dist_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dist_id`, `dist_name`) VALUES
(1, 'Thiruvananthapuram'),
(2, 'Kollam'),
(3, 'Alappuzha'),
(4, 'Pathanamthitta'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkad'),
(10, 'Malappuram'),
(11, 'Kozhikode'),
(12, 'Wayanad'),
(13, 'Kannur'),
(14, 'Kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp_id` int(40) NOT NULL,
  `otp_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otp_id`, `otp_code`) VALUES
(30, 6362);

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE `town` (
  `town_id` int(10) NOT NULL,
  `town_name` varchar(30) NOT NULL,
  `dist_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`town_id`, `town_name`, `dist_id`) VALUES
(1, 'Vengara', 10),
(2, 'Ramanattukara', 11),
(3, 'Pattambi', 9),
(4, 'Varkkala', 1),
(12, 'Mannarkkad', 9),
(19, 'Perinthalmanna', 10),
(20, 'Tirur', 10),
(21, 'Kondotty', 10),
(22, 'Parappanangadi', 10),
(23, 'Kunnumpuram', 10),
(24, 'Valanchery', 10),
(26, 'Nilambur', 10),
(27, 'Vallikkunnu', 10),
(28, 'Makkarapparambu', 10),
(29, 'Kadambuzha', 10),
(32, 'Kuttalur', 10),
(33, 'Vytilla', 7),
(35, 'Ponnani', 10),
(36, 'Vettichira', 10),
(37, 'Tirurkad', 10),
(38, 'Puthanathani', 10),
(39, 'Cherppulassery', 9),
(40, 'Pandikkad', 10),
(42, 'Aluva', 7),
(43, 'Cochi', 7),
(44, 'Guruvayoor', 8),
(45, 'Munnar', 6),
(46, 'Melattur', 10),
(48, 'Manjeri', 10),
(49, 'Kayakkulam', 3),
(50, 'Koottilangadi', 10),
(51, 'Pattikkad', 10),
(52, 'Vailathur', 10),
(54, 'Shoranur', 9),
(55, 'Malambuzha', 9),
(56, 'Thanur', 10),
(57, 'Chittur', 9),
(60, 'Irinjalakkuda', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ph_no` bigint(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `town_id` int(30) NOT NULL,
  `dist_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `b_group`
--
ALTER TABLE `b_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`town_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `b_group`
--
ALTER TABLE `b_group`
  MODIFY `group_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dist_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `otp_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `town_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
