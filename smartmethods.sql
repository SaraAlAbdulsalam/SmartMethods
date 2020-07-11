-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 06:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmethods`
--

-- --------------------------------------------------------

--
-- Table structure for table `autocontrol`
--

CREATE TABLE `autocontrol` (
  `id` int(11) NOT NULL,
  `leftD` int(255) NOT NULL,
  `rightD` int(255) NOT NULL,
  `front` int(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autocontrol`
--

INSERT INTO `autocontrol` (`id`, `leftD`, `rightD`, `front`, `location`) VALUES
(4, 20, 76, 50, 'Coffey shop');

-- --------------------------------------------------------

--
-- Table structure for table `remotecontrol`
--

CREATE TABLE `remotecontrol` (
  `id` int(11) NOT NULL,
  `stop` varchar(255) DEFAULT NULL,
  `back` varchar(255) DEFAULT NULL,
  `front` varchar(255) DEFAULT NULL,
  `leftd` varchar(255) DEFAULT NULL,
  `rightd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remotecontrol`
--

INSERT INTO `remotecontrol` (`id`, `stop`, `back`, `front`, `leftd`, `rightd`) VALUES
(5, NULL, NULL, 'F', NULL, NULL),
(6, NULL, NULL, 'F', NULL, NULL),
(7, 'S', NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, 'L', NULL),
(9, NULL, NULL, NULL, NULL, 'R'),
(10, NULL, 'B', NULL, NULL, NULL),
(11, 'S', NULL, NULL, NULL, NULL),
(12, 'S', NULL, NULL, NULL, NULL),
(13, 'S', NULL, NULL, NULL, NULL),
(14, NULL, NULL, 'F', NULL, NULL),
(15, NULL, 'B', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autocontrol`
--
ALTER TABLE `autocontrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remotecontrol`
--
ALTER TABLE `remotecontrol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autocontrol`
--
ALTER TABLE `autocontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `remotecontrol`
--
ALTER TABLE `remotecontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
