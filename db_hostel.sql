-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 06:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fees`
--
-- Error reading structure for table db_hostel.tb_fees: #1932 - Table 'db_hostel.tb_fees' doesn't exist in engine
-- Error reading data for table db_hostel.tb_fees: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_hostel`.`tb_fees`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tb_hostel`
--

CREATE TABLE `tb_hostel` (
  `Hostel_id` int(100) NOT NULL,
  `No_of_Room` int(250) NOT NULL,
  `No_of_Students` int(250) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hostel`
--

INSERT INTO `tb_hostel` (`Hostel_id`, `No_of_Room`, `No_of_Students`, `Location`) VALUES
(1, 100, 400, '82, West Tejturi Bazar, Farmgate, Dhaka-1215'),
(3, 100, 400, '82, West Tejturi Bazar, Farmgate, Dhaka-1215'),
(2, 100, 400, '82, West Tejturi Bazar, Farmgate, Dhaka-1215');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `Room_id` int(100) NOT NULL,
  `Capacity` varchar(250) NOT NULL,
  `Name_of_Student` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`Room_id`, `Capacity`, `Name_of_Student`) VALUES
(34, '5', 'Subaita'),
(12, '6', 'Sumaiya'),
(11, '4', 'Medha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `Staff_Id` int(255) NOT NULL,
  `Staff_name` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Staff_Salary` int(255) NOT NULL,
  `Cell_No` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`Staff_Id`, `Staff_name`, `Address`, `Staff_Salary`, `Cell_No`) VALUES
(2, 'Karim', 'Indropuri, Dhaka (Bangladesh)', 20000, 1712349834),
(1, 'Rahim', '5 Indira Road, 1215 Dhaka, Bangladesh', 10000, 1912345634);

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `Student_id` int(100) NOT NULL,
  `Student_name` varchar(250) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Cell_No` int(100) NOT NULL,
  `Age` int(10) NOT NULL,
  `Date_of_Birth` varchar(50) NOT NULL,
  `Signature` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`Student_id`, `Student_name`, `Address`, `Department`, `Cell_No`, `Age`, `Date_of_Birth`, `Signature`) VALUES
(1, 'Asma Ahmed Shoshy', '14,Professor Para,Chandpur.', 'CSE', 1825449021, 20, '2018-08-10', ''),
(2, 'Arefa Binte Sumaiya', 'Indropuri, Dhaka (Bangladesh)', 'CSE', 1912345634, 19, '2018-12-09', 'Sumaiya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hostel`
--
ALTER TABLE `tb_hostel`
  ADD PRIMARY KEY (`Hostel_id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`Room_id`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`Student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
