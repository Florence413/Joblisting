-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 07:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblistings_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobs_id` int(10) NOT NULL,
  `jobtitle` text NOT NULL,
  `jobcategory` text NOT NULL,
  `jobdescription` longtext NOT NULL,
  `jobpages` varchar(5) NOT NULL,
  `jobduration` varchar(10) NOT NULL,
  `jobcost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobs_id`, `jobtitle`, `jobcategory`, `jobdescription`, `jobpages`, `jobduration`, `jobcost`) VALUES
(1, 'computer scientist', 'IT', 'Students and scholars will always come back because our main focus is in assignments/homework solutions for students. We handle more that 22 subjects, and a variety of professiona', '', 'Full-time', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `submited_cvs`
--

CREATE TABLE `submited_cvs` (
  `submited_cvs_id` int(10) NOT NULL,
  `user_id` int(100) NOT NULL,
  `jobs_id` int(10) NOT NULL,
  `userdescription` text NOT NULL,
  `cv` text NOT NULL,
  `hire` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submited_cvs`
--

INSERT INTO `submited_cvs` (`submited_cvs_id`, `user_id`, `jobs_id`, `userdescription`, `cv`, `hire`) VALUES
(1, 0, 0, 'this is a description', 'uploads/57dd1f095607943c8340de9ebe5a7d9e.jpeg', 0),
(2, 2, 1, 'dfdfhdf', 'uploads/16c9dec29f5dd707668bf990808b84cf.jpeg', 1),
(3, 2, 1, 'dfdfhdf', 'uploads/0c136cc09508b06c5cd5e6683a6cfbf9.jpeg', 1),
(4, 2, 1, 'ghjkl', 'uploads/3b00cc35867488a03b2b29ad403b0c86.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `type`) VALUES
(1, 'joshua', 'jay@g.com', '96e79218965eb72c92a549dd5a330112', 1),
(2, 'aaaaaa', 'j@e.ehhe', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobs_id`);

--
-- Indexes for table `submited_cvs`
--
ALTER TABLE `submited_cvs`
  ADD PRIMARY KEY (`submited_cvs_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `submited_cvs`
--
ALTER TABLE `submited_cvs`
  MODIFY `submited_cvs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
