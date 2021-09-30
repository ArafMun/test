-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 03:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `salary_per_annum` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `dob`, `city`, `salary_per_annum`) VALUES
(1, 'Arafat', '1994-01-01', 'Dhaka', 60000),
(2, 'John Doe', '2021-09-29', 'Dhaka', 45000),
(3, 'Muaz', '2021-06-30', 'Chittagong', 45000),
(4, 'John', '2021-09-29', 'New york', 25000),
(5, 'Doe', '2021-09-29', 'Dubai', 30000),
(6, 'test', '2021-09-29', 'Doha', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `person_address`
--

CREATE TABLE `person_address` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `address_line` text NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_address`
--

INSERT INTO `person_address` (`id`, `person_id`, `address_line`, `city`) VALUES
(1, 2, '23/8,44 street', 'Manhattan'),
(2, 3, '88/a, 1D street', 'Manhattan'),
(3, 1, '23/8,road #2 , banani ', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` enum('Admin','Customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login_id`, `password`, `category`) VALUES
(1, 'John Doe', 'john_doe', 'e10adc3949ba59abbe56e057f20f883e', 'Admin'),
(2, 'Doe Doe', 'doe_007', '81dc9bdb52d04dc20036dbd8313ed055', 'Customer'),
(3, 'test', 'test_007', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_address`
--
ALTER TABLE `person_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `person_address`
--
ALTER TABLE `person_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
