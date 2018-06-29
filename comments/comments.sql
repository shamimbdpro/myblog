-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 04:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `par_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `user`, `text`, `date`, `par_code`) VALUES
(1, 'Admin', 'dfgdfg', '2018-03-27 18:54:10', '2l1TvQ'),
(2, 'Admin', 'dfgdfgdf', '2018-03-27 18:54:19', 'BvM55Y'),
(3, 'Admin', 'how are you tell me again', '2018-03-27 18:54:55', 'BvM55Y'),
(4, 'Admin', 'fsdfsdf', '2018-03-27 18:55:13', 'rOVhbD'),
(5, 'Admin', 'dfdsf', '2018-03-27 18:55:23', 'MozHhg');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `user`, `text`, `date`, `code`) VALUES
(1, 'Admin', 'Hello how are you', '2018-03-27 08:50:19', 'rOVhbD'),
(2, 'Admin', 'hi how are you', '2018-03-27 08:53:06', 'MozHhg'),
(3, 'Admin', 'sfdsdf', '2018-03-27 08:53:09', 'bBNcdo'),
(4, 'Admin', 'sdfsdf', '2018-03-27 08:53:11', 'vphohW'),
(5, 'Admin', 'sdfsdf', '2018-03-27 08:53:13', 'BvM55Y'),
(6, 'Admin', 'fdfgfd', '2018-03-27 18:53:48', '2l1TvQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
