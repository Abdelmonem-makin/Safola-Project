-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 11:05 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstor`
--

-- --------------------------------------------------------

--
-- Table structure for table `acccunts`
--

CREATE TABLE `acccunts` (
  `accunts_id` int(11) NOT NULL,
  `agent_name` text NOT NULL,
  `bill_num` int(11) NOT NULL,
  `mon_pay` int(11) NOT NULL,
  `mon_have` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acccunts`
--

INSERT INTO `acccunts` (`accunts_id`, `agent_name`, `bill_num`, `mon_pay`, `mon_have`, `date`) VALUES
(1, 'adamhassn', 20, 20, 20, '2022-06-01'),
(2, 'adamhassn', 20, 20, 20, '2022-06-01'),
(3, 'adamhassn', 20, 20, 20, '2022-06-01'),
(4, 'مولد', 33, 120, 3232, '2028-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `uname` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `uname`, `password`) VALUES
(1, 'admin1@gmail.com', '1111'),
(2, 'ب', 'رر'),
(3, 'ب', 'رر'),
(4, 'ب', 'رر'),
(5, 'شريفي', '1122'),
(6, 'admin', '1122'),
(7, 'admin', 'fsfs'),
(8, 'admin', 'vdvsd'),
(9, 'abdo', '1111'),
(10, 'ali', '222'),
(11, 'محمد', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `addres` text NOT NULL,
  `phone` int(11) NOT NULL,
  `job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `name`, `addres`, `phone`, `job`) VALUES
(1, 'adam', 'الابيض', 125420, 'kld'),
(2, 'adamhassn', 'الابيض', 741220, ''),
(3, 'الميناء', 'الثانيه', 45222, 'محاسب');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `date` date NOT NULL,
  `pay` int(11) NOT NULL,
  `opt` text NOT NULL,
  `opt_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `emp_name`, `date`, `pay`, `opt`, `opt_name`) VALUES
(1, 'علي', '2022-06-02', 3000, 'محاسب', 'ali'),
(2, 'علي', '2022-06-02', 3000, 'محاسب', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` text NOT NULL,
  `class_type` text NOT NULL,
  `pro_date` text NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `class_type`, `pro_date`, `exp_date`) VALUES
(1, 'مولد', 'كهراباء', '1', '2022-06-21'),
(2, 'مولد', 'كهراباء', '1', '2022-06-21'),
(3, 'adam', 'الابيض', '1', '0000-00-00'),
(4, 'adam', 'الابيض', '2', '0000-00-00'),
(5, 'adam', 'الثانيه', '1', '0000-00-00'),
(6, 'adamhassn', 'كهراباء', '2', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `emplname` text NOT NULL,
  `empladdrs` text NOT NULL,
  `emplphone` int(15) NOT NULL,
  `empljob` text NOT NULL,
  `emplemail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `emplname`, `empladdrs`, `emplphone`, `empljob`, `emplemail`) VALUES
(1, 'علي', 'sudan', 123654789, 'محاسب', 'hassan@gmail.com'),
(2, 'علي', 'sudan', 123456789, 'محاسب', 'hassan@gmail.com'),
(3, 'علي', 'usa', 1235456987, 'محاسب', 'nasr@gmail.com'),
(4, 'hassn', 'usa', 12345, 'محاسب', 'admin2@gmail.com'),
(5, 'hassn', 'usa', 12345, 'محاسب', 'admin2@gmail.com'),
(6, 'osman', 'dhfhsfsjf', 112233, 'محاسب', 'hassan@gmail.com'),
(7, 'osman', 'dhfhsfsjf', 112233, 'محاسب', 'hassan@gmail.com'),
(8, 'وائل', 'sudan الابيض', 212554210, 'محاسب', 'admin2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `hol_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `hol_s` date NOT NULL,
  `hol_e` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`hol_id`, `emp_name`, `hol_s`, `hol_e`) VALUES
(1, 'adam', '2022-06-14', '2022-06-30'),
(2, 'adamhassn', '2022-06-01', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `job_degry` text NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `emp_name`, `job_degry`, `salary`) VALUES
(1, 'adamhassn', 'الثانيه', 200),
(2, 'adamhassn', 'الثانيه', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `sapp`
--

CREATE TABLE `sapp` (
  `sapp_id` int(11) NOT NULL,
  `sapp_name` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `sapp_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sapp`
--

INSERT INTO `sapp` (`sapp_id`, `sapp_name`, `address`, `phone`, `sapp_email`) VALUES
(1, 'adamhassn', 'الثانيه', 75201, 'a@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `agen_id` int(11) NOT NULL,
  `pay_type` text NOT NULL,
  `paid` text NOT NULL,
  `bill_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `emp_id`, `agen_id`, `pay_type`, `paid`, `bill_num`) VALUES
(1, 152, 20, '0', '3010', 110),
(2, 12, 22, 'كاش', '12301', 122);

-- --------------------------------------------------------

--
-- Table structure for table `storge`
--

CREATE TABLE `storge` (
  `storge_ID` int(11) NOT NULL,
  `storge_name` text NOT NULL,
  `emp_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storge`
--

INSERT INTO `storge` (`storge_ID`, `storge_name`, `emp_num`) VALUES
(1, 'الميناء', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acccunts`
--
ALTER TABLE `acccunts`
  ADD PRIMARY KEY (`accunts_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`hol_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `sapp`
--
ALTER TABLE `sapp`
  ADD PRIMARY KEY (`sapp_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `storge`
--
ALTER TABLE `storge`
  ADD PRIMARY KEY (`storge_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acccunts`
--
ALTER TABLE `acccunts`
  MODIFY `accunts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `hol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sapp`
--
ALTER TABLE `sapp`
  MODIFY `sapp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `storge`
--
ALTER TABLE `storge`
  MODIFY `storge_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
