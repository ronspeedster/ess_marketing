-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 09:24 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spcf_svs`
--

-- --------------------------------------------------------

--
-- Table structure for table `violation`
--

CREATE TABLE `violation` (
  `id` int(11) NOT NULL,
  `student_id` varchar(32) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `course_grade_section` varchar(128) NOT NULL,
  `adviser` varchar(128) NOT NULL,
  `contact_no` int(16) NOT NULL,
  `violations` text NOT NULL,
  `reasons` tinytext NOT NULL,
  `violation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violation`
--

INSERT INTO `violation` (`id`, `student_id`, `surname`, `firstname`, `course_grade_section`, `adviser`, `contact_no`, `violations`, `reasons`, `violation_date`) VALUES
(16, '', 'asd', 'asd', 'asd', 'adviser', 234342, 'qasdas', 'asdasd', '2020-02-10 03:07:38'),
(17, '3482934820', 'aksdaskd', 'kjh', 'kjkjh', 'adviser', 9890809, 'khk', 'jhkjhjkh', '2020-02-10 03:24:41'),
(18, '98798798', 'Reyes', 'Marvin', '12312', 'adviser', 232, 'Violator', 'Reasons', '2020-02-10 03:32:14'),
(19, '98798798', 'Reyes', 'Marvin', '12312', 'adviser', 232, 'Violator', 'Reasons', '2020-02-10 03:32:19'),
(20, '98798798', 'Reyes', 'Marvin', '12312', 'adviser', 232, 'Violator', 'Reasons', '2020-02-10 03:32:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `violation`
--
ALTER TABLE `violation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
