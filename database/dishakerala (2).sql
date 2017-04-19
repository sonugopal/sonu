-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 03:03 PM
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
-- Table structure for table `b_group`
--

CREATE TABLE `b_group` (
  `group_id` int(10) NOT NULL,
  `group_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Pattambi', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ph_no` int(20) NOT NULL,
  `group-id` int(20) NOT NULL,
  `town-id` int(30) NOT NULL,
  `dist_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `b_group`
--
ALTER TABLE `b_group`
  MODIFY `group_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dist_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `town_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
