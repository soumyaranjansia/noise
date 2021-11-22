-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 09:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noiseapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `district_name` varchar(40) NOT NULL,
  `block_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `district_name`, `block_name`) VALUES
(1, 'Ganjam', 'Purushottampur'),
(2, 'Kendrapara', 'Rajnagar');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` bigint(20) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`) VALUES
(1, 'Ganjam'),
(2, 'Puri'),
(3, 'Cuttack'),
(4, 'Khordha'),
(5, 'Kendrapara'),
(6, 'Balasore'),
(7, 'Sambalpur'),
(8, 'Malkangiri'),
(9, 'Koraput'),
(10, 'Gajapati'),
(11, 'Mayurbhanja');

-- --------------------------------------------------------

--
-- Table structure for table `loginiot`
--

CREATE TABLE `loginiot` (
  `id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginiot`
--

INSERT INTO `loginiot` (`id`, `dist_id`, `username`, `passwd`) VALUES
(1, 1, 'ganjam', 'ganjam'),
(2, 2, 'puri', 'puri'),
(3, 3, 'cuttack', 'cuttack'),
(4, 4, 'khordha', 'khordha'),
(5, 5, 'kendrapara', 'kendrapara');

-- --------------------------------------------------------

--
-- Table structure for table `noise_value`
--

CREATE TABLE `noise_value` (
  `id` int(11) NOT NULL,
  `district_name` varchar(40) NOT NULL,
  `block_name` varchar(40) NOT NULL,
  `day_value` float NOT NULL,
  `night_value` float NOT NULL,
  `date` date NOT NULL,
  `average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `loginiot`
--
ALTER TABLE `loginiot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noise_value`
--
ALTER TABLE `noise_value`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loginiot`
--
ALTER TABLE `loginiot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `noise_value`
--
ALTER TABLE `noise_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
