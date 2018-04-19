-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 11:33 PM
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
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `username`, `email`, `item`, `location`, `color`, `date`) VALUES
(1, 'simran123', 'simran123@gmail.com', 'Wallet', 'TechPark', 'brown', '03/20/2018'),
(2, 'testuser123', 'testuser123@gmail.com', 'Laptop', 'Java', 'Blue', '03/23/2018'),
(5, 'laptop123', 'laptop123@gmail.com', 'Earphone', 'Java', 'Green', '03/23/2018');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `item`, `location`, `color`, `date`) VALUES
(1, 'Phone', 'UB', 'White', '03/21/2018'),
(2, 'Earphone', 'Java', 'Red', '03/23/2018'),
(3, 'Laptop', 'TechPark', 'Blue', '03/24/2018'),
(5, 'Wallet', 'Hostel', 'Green', '03/07/2018'),
(6, 'Earphone', 'Hostel', 'Green', '03/23/2018'),
(11, 'asd', 'asd', 'asd', '01/11/2018'),
(12, 'Laptop', 'UB', 'black', '03/22/2018');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `username`, `email`, `password`) VALUES
(9, 'Akarsh Mehotra', 'akarsh1022', 'akarsh1022@gmail.com', '1234'),
(10, 'simran', 'simran123', 'simran123@gmail.com', '123'),
(11, 'akshat', 'akshat123', 'akshat123@gmail.com', '123'),
(12, 'testuser', 'testuser123', 'testuser123@gmail.com', '123'),
(13, 'laptop', 'laptop123', 'laptop123@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
