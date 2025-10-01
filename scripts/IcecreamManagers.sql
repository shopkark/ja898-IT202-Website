-- Jazzlinne Arias 10/1 IT202-001 Phase 1 ja898@njit.edu

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 01, 2025 at 04:57 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ja898`
--

-- --------------------------------------------------------

--
-- Table structure for table `IcecreamManagers`
--

CREATE TABLE IF NOT EXISTS `IcecreamManagers` (
`icecreamManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `IcecreamManagers`
--

INSERT INTO `IcecreamManagers` (`icecreamManagerID`, `emailAddress`, `password`, `pronouns`, `firstName`, `lastName`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, 'jarias@icecreamshop.com', 'a21ccdcdc33bbfb6dadce232372c436ae2575537e7c569cf2fdeb3a4cf7301a5', 'She/Her', 'Jazzlinne', 'Arias', '2025-10-01 14:43:39', '2025-10-01 16:16:19'),
(2, 'bobman@icecreamshop.com', '65b6e5424bfa82b4627833b173d3a05befb3d547bd5da06113b4709e2c82b059', 'He/Him', 'Bob', 'Man', '2025-10-01 14:43:41', '2025-10-01 16:16:09'),
(4, 'bloobert@icecreamshop.com', '5066498c3b49f03dee495e55ed0fcfe225c051d2042a5da87739dfd275c9b973', 'It/Its', 'Bloob', 'Bert', '2025-10-01 15:13:53', '2025-10-01 16:16:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `IcecreamManagers`
--
ALTER TABLE `IcecreamManagers`
 ADD PRIMARY KEY (`icecreamManagerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `IcecreamManagers`
--
ALTER TABLE `IcecreamManagers`
MODIFY `icecreamManagerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
