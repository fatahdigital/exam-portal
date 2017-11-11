-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 12:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatahcareer`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `courses` varchar(1000) NOT NULL,
  `sem3` float NOT NULL,
  `sem4` float NOT NULL,
  `keyskills` varchar(1000) DEFAULT NULL,
  `furtherstudy` varchar(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `score` int(100) NOT NULL DEFAULT '0',
  `user_id` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL DEFAULT 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `dob`, `gender`, `courses`, `sem3`, `sem4`, `keyskills`, `furtherstudy`, `city`, `score`, `user_id`, `answer`) VALUES
(24, 'Yash', 'Dipak', 'Pandit', 'yashpandit1995@gmail.com', '9737625463', '21/12/1111', 'male', 'wern', 12, 12, 'Communication Skills,Leadership,', 'yes', 'porbandar', 5, 'GPP18YP9737625463', 'acdadccxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
(28, 'fa', 'fa', 'fa', 'fa@fa.com', '9999999999', '12/12/1111', 'male', 'ghvh', 1.11, 2.22, 'Communication Skills,Leadership,', 'yes', 'porbandar', 1, 'GPP18FF9999999999', 'abaxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
