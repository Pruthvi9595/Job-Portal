-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 02:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `college` varchar(50) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `descrpt` varchar(50) NOT NULL,
  `yers` varchar(20) NOT NULL,
  `college1` varchar(50) NOT NULL,
  `addr1` varchar(100) NOT NULL,
  `dept1` varchar(50) NOT NULL,
  `descrpt1` varchar(100) NOT NULL,
  `yers1` varchar(30) NOT NULL,
  `project` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `project2` varchar(100) NOT NULL,
  `descr2` varchar(100) NOT NULL,
  `skill1` varchar(100) NOT NULL,
  `skill2` varchar(100) NOT NULL,
  `intr1` varchar(100) NOT NULL,
  `intr2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `user_id`, `college`, `addr`, `dept`, `descrpt`, `yers`, `college1`, `addr1`, `dept1`, `descrpt1`, `yers1`, `project`, `descr`, `project2`, `descr2`, `skill1`, `skill2`, `intr1`, `intr2`) VALUES
(1, 1, 'f1', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
