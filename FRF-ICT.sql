-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2024 at 01:27 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FRF-ICT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Auname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Apswd` varchar(255) NOT NULL,
  `ACheckno` int NOT NULL,
  `image` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`Auname`, `Apswd`, `ACheckno`, `image`) VALUES
('admin', '1234', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `ChiefIctOfficer`
--

CREATE TABLE `ChiefIctOfficer` (
  `CUname` varchar(20) DEFAULT NULL,
  `Cpswd` varchar(20) DEFAULT NULL,
  `CCheckno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ChiefIctOfficer`
--

INSERT INTO `ChiefIctOfficer` (`CUname`, `Cpswd`, `CCheckno`) VALUES
('jackson', '1442308182', '1'),
('mosey', '2615402659', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ICTStaff`
--

CREATE TABLE `ICTStaff` (
  `id` int NOT NULL,
  `Spwd` varchar(20) DEFAULT NULL,
  `SUname` varchar(20) DEFAULT NULL,
  `Scheckno` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `IRegion` varchar(20) NOT NULL,
  `IDepartment` varchar(20) NOT NULL,
  `IType` int NOT NULL,
  `Ibrand` varchar(25) NOT NULL,
  `Imodel` varchar(25) NOT NULL,
  `IserialNo` varchar(25) NOT NULL,
  `Imemory` varchar(25) NOT NULL,
  `ImsOffice` varchar(25) NOT NULL,
  `IAntivirus` varchar(25) NOT NULL,
  `IotherSoftware` varchar(25) NOT NULL,
  `IAquistionDate` varchar(25) NOT NULL,
  `IAquistionType` varchar(25) NOT NULL,
  `ICCondition` varchar(25) NOT NULL,
  `IRegisterDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`IRegion`, `IDepartment`, `IType`, `Ibrand`, `Imodel`, `IserialNo`, `Imemory`, `ImsOffice`, `IAntivirus`, `IotherSoftware`, `IAquistionDate`, `IAquistionType`, `ICCondition`, `IRegisterDate`) VALUES
('mwanza', 'IT', 98765, 'HP', 'elitebook', 'S23445', '567Gb', 'Informatics', 'smadav', 'adobe', '24/12/2001', 'computer', 'new', '3/01/2002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`ACheckno`);

--
-- Indexes for table `ChiefIctOfficer`
--
ALTER TABLE `ChiefIctOfficer`
  ADD PRIMARY KEY (`CCheckno`);

--
-- Indexes for table `ICTStaff`
--
ALTER TABLE `ICTStaff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `ACheckno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ICTStaff`
--
ALTER TABLE `ICTStaff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
