-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 05:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(5) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Avilash', 'Saha', 'sahaavilash5055@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `double_ac`
--

CREATE TABLE `double_ac` (
  `s_no` int(5) NOT NULL,
  `room_no` int(15) DEFAULT NULL,
  `holder_name` text DEFAULT NULL,
  `holder_id` int(15) DEFAULT NULL,
  `holder_mobile` int(25) DEFAULT NULL,
  `holder_address` varchar(55) DEFAULT NULL,
  `child` int(5) DEFAULT NULL,
  `adult` int(5) DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_ac`
--

INSERT INTO `double_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 401, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0),
(2, 402, 'Shishir Bhowmik', 75, 1771246987, 'Dhaka,Bangladesh', 3, 2, '2021-10-25', '2021-10-27', 1),
(3, 403, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0),
(4, 404, 'Amit', 44, 1898765431, 'Bangladesh', 1, 2, '2021-10-28', '2021-10-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `double_non_ac`
--

CREATE TABLE `double_non_ac` (
  `s_no` int(5) NOT NULL,
  `room_no` int(15) DEFAULT NULL,
  `holder_name` text DEFAULT NULL,
  `holder_id` int(15) DEFAULT NULL,
  `holder_mobile` int(25) DEFAULT NULL,
  `holder_address` varchar(55) NOT NULL,
  `child` int(5) DEFAULT NULL,
  `adult` int(5) DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_non_ac`
--

INSERT INTO `double_non_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 301, NULL, 0, NULL, '', 0, 0, NULL, NULL, 0),
(2, 302, NULL, 0, NULL, '', 0, 0, NULL, NULL, 0),
(3, 303, 'Sajib Roy', 55, 1734096543, 'Faridpur,Bangladesh', 1, 4, '2021-10-20', '2021-10-22', 1),
(4, 304, 'Sourav', 87, 1712349876, 'Bangladesh', 1, 2, '2021-10-29', '2021-10-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(5) NOT NULL,
  `pay_mthd` text NOT NULL,
  `card_owner` text NOT NULL,
  `card_number` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `pay_mthd`, `card_owner`, `card_number`) VALUES
(1, 'CARD', 'Avilash', 2147483647),
(2, 'CARD', 'Avilash', 2147483647),
(3, 'CARD', 'Akash', 2147483647),
(4, 'CARD', 'Akash', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `single_ac`
--

CREATE TABLE `single_ac` (
  `s_no` int(5) NOT NULL,
  `room_no` int(15) NOT NULL,
  `holder_name` text DEFAULT NULL,
  `holder_id` int(15) NOT NULL,
  `holder_mobile` int(25) DEFAULT NULL,
  `holder_address` varchar(55) DEFAULT NULL,
  `child` int(5) NOT NULL,
  `adult` int(5) NOT NULL,
  `in_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_ac`
--

INSERT INTO `single_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 201, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0),
(2, 202, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0),
(3, 203, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0),
(4, 204, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `single_non_ac`
--

CREATE TABLE `single_non_ac` (
  `s_no` int(5) NOT NULL,
  `room_no` int(15) DEFAULT NULL,
  `holder_name` text DEFAULT NULL,
  `holder_id` int(15) DEFAULT NULL,
  `holder_mobile` int(25) DEFAULT NULL,
  `holder_addresss` varchar(55) DEFAULT NULL,
  `child` int(5) DEFAULT NULL,
  `adult` int(5) DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_non_ac`
--

INSERT INTO `single_non_ac` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_addresss`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 103, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, 0),
(4, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `double_ac`
--
ALTER TABLE `double_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `single_ac`
--
ALTER TABLE `single_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `double_ac`
--
ALTER TABLE `double_ac`
  MODIFY `s_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  MODIFY `s_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `single_ac`
--
ALTER TABLE `single_ac`
  MODIFY `s_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  MODIFY `s_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
