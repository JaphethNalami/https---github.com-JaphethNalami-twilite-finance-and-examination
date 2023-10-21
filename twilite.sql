-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 11:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twilite`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `reg_no` varchar(10) NOT NULL,
  `fees_paid` int(10) NOT NULL,
  `date_paid` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(10) NOT NULL,
  `staff_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `staff_no`, `name`, `phone`, `email`, `password`) VALUES
(4004, 'st-001', 'john', 7444, 'john@gam', '1234q');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `student_reg` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_finance`
--

CREATE TABLE `student_finance` (
  `reg_no` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(8) NOT NULL,
  `fees` int(10) NOT NULL,
  `fee_paid` int(10) NOT NULL,
  `balance` int(11) GENERATED ALWAYS AS (`fees` - `fee_paid`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_finance`
--

INSERT INTO `student_finance` (`reg_no`, `name`, `class`, `fees`, `fee_paid`) VALUES
('S001', 'Alvin', 'Grade 3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `reg_no` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(8) NOT NULL,
  `exam` varchar(7) NOT NULL,
  `maths` int(3) NOT NULL,
  `eng` int(3) NOT NULL,
  `kisw` int(3) NOT NULL,
  `scie` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `re` int(3) NOT NULL,
  `total` int(11) GENERATED ALWAYS AS (`maths` + `eng` + `kisw` + `scie` + `sst` + `re`) VIRTUAL,
  `avg` float GENERATED ALWAYS AS (`total` / 6) VIRTUAL,
  `grade` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`reg_no`, `name`, `class`, `exam`, `maths`, `eng`, `kisw`, `scie`, `sst`, `re`, `grade`) VALUES
('S001', 'Alvin', 'Grade', 'Terrm ', 60, 60, 60, 60, 60, 60, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `staff_no` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_reg` (`student_reg`);

--
-- Indexes for table `student_finance`
--
ALTER TABLE `student_finance`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD KEY `reg_no` (`reg_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`student_reg`) REFERENCES `student_finance` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_result`
--
ALTER TABLE `student_result`
  ADD CONSTRAINT `student_result_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student_finance` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
