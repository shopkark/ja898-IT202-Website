-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 25, 2025 at 02:21 AM
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
-- Table structure for table `IcecreamTypes`
--

CREATE TABLE IF NOT EXISTS `IcecreamTypes` (
  `icecreamTypeID` int(11) NOT NULL,
  `icecreamTypeCode` varchar(255) NOT NULL,
  `icecreamTypeName` varchar(255) NOT NULL,
  `icecreamTypeMachine` varchar(225) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `IcecreamTypes`
--

INSERT INTO `IcecreamTypes` (`icecreamTypeID`, `icecreamTypeCode`, `icecreamTypeName`, `icecreamTypeMachine`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, '1GEL', 'Gelato', 'Batch freezer', '2025-10-22 18:39:38', '2025-10-22 18:39:38'),
(2, '2SOR', 'Sorbet', 'Sorbet maker', '2025-10-22 18:39:38', '2025-10-22 18:39:38'),
(3, '3SSE', 'Soft-serve', 'Softy machine', '2025-10-22 18:39:38', '2025-10-22 18:39:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `IcecreamTypes`
--
ALTER TABLE `IcecreamTypes`
 ADD PRIMARY KEY (`icecreamTypeID`), ADD UNIQUE KEY `icecreamTypeCode` (`icecreamTypeCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
