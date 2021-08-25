-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 06:39 AM
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
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `req_status` varchar(255) NOT NULL,
  `cleared_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `std_name`, `date`, `status`, `email`, `req_status`, `cleared_by`) VALUES
(1, 'sabin shrestha', '2021-08-20', '1', 'shrestha.sabin31@gmail.com', '1', 'sabin'),
(2, 'Ajay Bhatta', '2021-08-20', '0', 'ajay@gmail.com', '1', 'sabin'),
(3, 'Saisab Bhattarai', '2021-08-20', '0', 'saisab@gmail.com', '1', 'sabin'),
(4, 'Sikum Rai', '2021-08-20', '0', 'sikum@gmail.com', '1', 'sabin'),
(5, 'Bishal Karki', '2021-08-20', '0', 'bishal@gmail.com', '1', 'sabin');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `req_status` tinyint(4) NOT NULL,
  `cleared_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `std_name`, `date`, `status`, `email`, `req_status`, `cleared_by`) VALUES
(1, 'sabin shrestha', '2021-08-20', 1, 'sabin@gmail.com', 1, 'sikum'),
(2, 'Ajay Bhatta', '2021-08-20', 0, 'ajay@gmail.com', 0, 'saisab'),
(3, 'Saisab Bhattarai', '2021-08-20', 0, 'saisab@gmail.com', 0, '--'),
(4, 'Sikum Rai', '2021-08-20', 0, 'sikum@gmail.com', 1, '--'),
(5, 'Bishal Karki', '2021-08-20', 0, 'bishal@gmail.com', 0, '--');

-- --------------------------------------------------------

--
-- Table structure for table `computer_lab`
--

CREATE TABLE `computer_lab` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `req_status` tinyint(4) NOT NULL,
  `cleared_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_lab`
--

INSERT INTO `computer_lab` (`id`, `std_name`, `date`, `status`, `email`, `req_status`, `cleared_by`) VALUES
(1, 'sabin shrestha', '2021-08-20', '1', 'sabin@gmail.com\r\n', 1, 'sabin'),
(2, 'Ajay Bhatta', '2021-08-20', '1', 'ajay@gmail.com', 1, '--'),
(3, 'Saisab Bhattarai', '2021-08-20', '0', 'saisab@gmail.com', 0, '--'),
(4, 'Sikum Rai', '2021-08-20', '0', 'sikum@gmail.com', 0, '--'),
(5, 'Bishal Karki', '2021-08-20', '1', 'bishal@gmail.com', 1, '--');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `req_status` tinyint(4) NOT NULL,
  `cleared_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `std_name`, `date`, `status`, `email`, `req_status`, `cleared_by`) VALUES
(1, 'sabin shrestha', '2021-08-20', 1, 'shrestha.sabin31@gmail.com', 1, 'lib_depart'),
(2, 'Ajay Bhatta', '2021-08-20', 0, 'ajay@gmail.com', 0, '--'),
(3, 'Saisab Bhattarai', '2021-08-20', 1, 'saisab@gmail.com', 1, '--'),
(4, 'Sikum Rai', '2021-08-20', 0, 'sikum@gmail.com', 1, '--'),
(5, 'Bishal Karki', '2021-08-20', 1, 'bishal@gmail.com', 1, '--');

-- --------------------------------------------------------

--
-- Table structure for table `physics_lab`
--

CREATE TABLE `physics_lab` (
  `id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `req_status` varchar(255) NOT NULL,
  `cleared_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physics_lab`
--

INSERT INTO `physics_lab` (`id`, `std_name`, `date`, `status`, `email`, `req_status`, `cleared_by`) VALUES
(1, 'sabin shrestha', '2021-08-20', 1, 'shrestha.sabin31@gmail.com', '1', 'xyz'),
(2, 'Ajay Bhatta', '2021-08-20', 0, 'ajay@gmail.com', '1', '--'),
(3, 'Saisab Bhattarai', '2021-08-20', 1, 'saisab@gmail.com', '1', '--'),
(4, 'Sikum Rai', '2021-08-20', 0, 'sikum@gmail.com', '0', '--'),
(5, 'Bishal Karki', '2021-08-20', 0, 'bishal@gmail.com', '0', '--');

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE `staff_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_data`
--

INSERT INTO `staff_data` (`id`, `name`, `email`, `password`) VALUES
(1, 'staff1', 'staff@gmail.com', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `std_status`
--

CREATE TABLE `std_status` (
  `id` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `department` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `req_status` tinyint(4) NOT NULL,
  `cleared_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_status`
--

INSERT INTO `std_status` (`id`, `status`, `department`, `date`, `req_status`, `cleared_by`) VALUES
(1, 1, 'account', '2021-08-20', 0, 'sabin'),
(2, 1, 'bus', '2021-08-20', 1, 'sabin'),
(3, 1, 'computer', '2021-08-20', 1, 'sabin'),
(4, 1, 'library', '2021-08-20', 1, 'lib_depart'),
(5, 1, 'physics lab', '2021-08-20', 1, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `status` int(4) NOT NULL,
  `date` date NOT NULL,
  `depa_name` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `Department`, `batch`, `reg_no`, `mobile_number`, `status`, `date`, `depa_name`, `programme`) VALUES
(1, 'sabin shrestha', 'Mathematics', '2017', '022840-17', '123456789', 0, '2021-08-21', 'account', 'computational mathematics'),
(2, 'Ajay Bhatta', 'Mathematics', '2017', '022831-17', '123456789', 1, '2021-08-21', 'bus', 'computational mathematics'),
(3, 'Saisab Bhattarai', 'Mathematics', '2017', '022832-17', '111111111', 0, '2021-08-21', 'computer lab', 'computational mathematics'),
(4, 'Sikum Rai', 'Mathematics', '2017', '200812-17', '555555555', 0, '2021-08-21', 'library', 'computational mathematics'),
(5, 'Bishal Karki', 'Matheatics', '2017', '022814-17', '44444444', 0, '2021-08-21', 'physics lab', 'computational mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sabin Shrestha', 'sabin@gmail.com', 'sabin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_lab`
--
ALTER TABLE `computer_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physics_lab`
--
ALTER TABLE `physics_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_data`
--
ALTER TABLE `staff_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_status`
--
ALTER TABLE `std_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `computer_lab`
--
ALTER TABLE `computer_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `physics_lab`
--
ALTER TABLE `physics_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_data`
--
ALTER TABLE `staff_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `std_status`
--
ALTER TABLE `std_status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
