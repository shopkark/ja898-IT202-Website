<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->
-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 22, 2025 at 02:46 AM
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
-- Table structure for table `Icecreams`
--

CREATE TABLE IF NOT EXISTS `Icecreams` (
  `icecreamID` int(11) NOT NULL,
  `icecreamCode` varchar(10) NOT NULL,
  `icecreamName` varchar(255) NOT NULL,
  `icecreamDescription` text NOT NULL,
  `icecreamFlavor` varchar(255) NOT NULL,
  `icecreamServingSize` varchar(255) NOT NULL,
  `icecreamTypeID` int(11) NOT NULL,
  `icecreamWholesalePrice` decimal(10,2) NOT NULL,
  `icecreamListPrice` decimal(10,2) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Icecreams`
--

INSERT INTO `Icecreams` (`icecreamID`, `icecreamCode`, `icecreamName`, `icecreamDescription`, `icecreamFlavor`, `icecreamServingSize`, `icecreamTypeID`, `icecreamWholesalePrice`, `icecreamListPrice`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, '01STR', 'Strawberry Gelato', 'Ripe, sun-sweetened strawberry gelato. Bursts with fresh fruity flavor in every spoonful.', 'Strawberry', 'Small', 1, 2.00, 50.50, '2025-10-25 02:29:53', '2025-11-22 02:36:15'),
(2, '02STR', 'Strawberry Gelato', 'Ripe, sun-sweetened strawberry gelato. Bursts with fresh fruity flavor in every spoonful.', 'Strawberry', 'Medium', 1, 2.00, 5.25, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(3, '03HAZ', 'Hazelnut Gelato', 'Rich and velvety roasted hazelnut gelato. Melts beautifully on the tongue.', 'Hazelnut', 'Small', 1, 2.00, 4.75, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(4, '04HAZ', 'Hazelnut Gelato', 'Rich and velvety roasted hazelnut gelato. Melts beautifully on the tongue.', 'Hazelnut', 'Medium', 1, 2.00, 5.25, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(5, '05ALM', 'Almond Gelato', 'Delicately flavored toasted almond gelato. A subtly sweet and aromatic taste.', 'Almond', 'Small', 1, 2.00, 4.75, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(6, '06ALM', 'Almond Gelato', 'Delicately flavored toasted almond gelato. A subtly sweet and aromatic taste.', 'Almond', 'Medium', 1, 2.00, 5.25, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(7, '07RAS', 'Raspberry Sorbet', 'Bright, tangy, and refreshing raspberry sorbet. The pure essence of fresh berries.', 'Raspberry', 'Medium', 2, 1.00, 4.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(8, '08RAS', 'Raspberry Sorbet', 'Bright, tangy, and refreshing raspberry sorbet. The pure essence of fresh berries.', 'Raspberry', 'Large', 2, 1.00, 5.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(9, '09LEM', 'Lemon Sorbet', 'Zesty lemon sorbet. Both tart and sweet, the ultimate summer refresher.', 'Lemon', 'Medium', 2, 1.00, 4.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(10, '10LEM', 'Lemon Sorbet', 'Zesty lemon sorbet. Both tart and sweet, the ultimate summer refresher.', 'Lemon', 'Large', 2, 1.00, 5.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(11, '11WAT', 'Watermelon Sorbet', 'Refreshing watermelon sorbet. Juicy, light, and irresistible.', 'Watermelon', 'Medium', 2, 1.00, 4.50, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(12, '12WAT', 'Watermelon Sorbet', 'Refreshing watermelon sorbet. Juicy, light, and irresistible.', 'Watermelon', 'Large', 2, 1.00, 5.50, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(13, '13VAN', 'Vanilla Icecream', 'Smooth, creamy vanilla icecream. A timeless, rich, aromatic flavor.', 'Vanilla', 'Small', 3, 1.00, 3.50, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(14, '14VAN', 'Vanilla Icecream', 'Smooth, creamy vanilla icecream. A timeless, rich, aromatic flavor.', 'Vanilla', 'Medium', 3, 1.00, 4.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(15, '15CHO', 'Chocolate Icecream', 'Decadent and silky chocolate icecream. A luscious flavor that satisfies every craving.', 'Chocolate', 'Small', 3, 1.50, 4.50, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(16, '16CHO', 'Chocolate Icecream', 'Decadent and silky chocolate icecream. A luscious flavor that satisfies every craving.', 'Chocolate', 'Medium', 3, 1.50, 5.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(17, '17CDO', 'Cookie dough Icecream', 'Creamy vanilla icecream. Swirled with chunks of buttery cookie dough and rich chocolate chips.', 'Cookie dough', 'Small', 3, 1.50, 4.50, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(18, '18CDO', 'Cookie dough Icecream', 'Creamy vanilla icecream. Swirled with chunks of buttery cookie dough and rich chocolate chips.', 'Cookie dough', 'Medium', 3, 1.50, 5.00, '2025-10-25 02:29:53', '2025-10-25 02:29:53'),
(20, 'TEST', 'name', 'descdescdescdescdescdescdescdesc', 'flavor', 'size', 5, 2.50, 5.00, '2025-11-22 02:26:55', '2025-11-22 02:26:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Icecreams`
--
ALTER TABLE `Icecreams`
 ADD PRIMARY KEY (`icecreamID`), ADD UNIQUE KEY `icecreamCode` (`icecreamCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
