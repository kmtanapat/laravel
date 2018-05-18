-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2018 at 09:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candidateSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidateId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` char(2) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `statusId` int(11) NOT NULL,
  `remark` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidateId`, `name`, `surname`, `dateOfBirth`, `gender`, `tel`, `statusId`, `remark`) VALUES
(1, 'John', 'Cena', '1988-05-02', 'M', '083-3333333', 1, 'Accepted. Good potential to be a programmer.'),
(2, 'Jack', 'Sparrow', '1872-05-14', 'M', '0992221144', 1, 'Wait for second interview.'),
(3, 'Marie', 'Curie', '1988-06-11', 'F', '098-9999999', 2, 'Chemistry master'),
(4, 'Ash', 'Ketchum', '2010-04-10', 'M', '0899999999', 1, 'Pokemon master'),
(5, 'Cherprang', 'Areekul', '1996-05-28', 'F', '09988888767', 1, NULL),
(6, 'Minerva', 'McGonagal', '1966-05-13', 'F', '0992222222', 2, NULL),
(7, 'Bella', 'Goth', '1989-05-08', 'F', '0997775555', 2, NULL),
(8, 'Albus', 'Percival Vulfric Bryan Dumbledore', '1919-05-07', 'M', '0888888888', 2, NULL),
(9, 'Septimus ', 'Heap', '1999-05-14', 'F', '098888', 1, NULL),
(10, 'Alan', 'Rickman', '1978-01-08', 'M', '0988888888', 2, NULL),
(11, 'Norimaki', 'Arale', '2017-06-18', 'F', '0987776666', 1, NULL),
(12, 'Lily', 'Evans', '1977-08-17', 'F', '0988888888', 1, NULL),
(13, 'James', 'Potter', '1976-05-30', 'M', '0999999999', 1, NULL),
(14, 'Prayuth', 'Chanocha', '1965-10-23', 'M', '0922122221', 1, NULL),
(15, 'Prawit', 'Wongsuwan', '1967-11-10', 'M', '0933333333', 1, 'Have too much watch'),
(16, 'Jack ', 'Ma', '1992-02-06', 'M', '0998886666', 1, 'Pu\'s big bro'),
(17, 'Donald', 'Trump', '1917-01-28', 'M', '0988888888', 2, NULL),
(18, 'Jong Un', 'Kim', '1966-03-25', 'M', '0922222111', 2, 'NUKE!'),
(19, 'Traxex', 'Drow Ranger', '1982-01-22', 'F', '0999999999', 1, 'Dota2 u know?'),
(20, 'Lady', 'Gaga', '1956-08-23', 'F', '0888888888', 1, NULL),
(21, 'Sashihara', 'Rino', '1998-03-07', 'F', '0999999999', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `positionId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `currentSalary` int(11) NOT NULL,
  `expectedSalary` int(11) NOT NULL,
  `positionName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `scoreId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `testId` int(11) NOT NULL,
  `score` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusId` int(11) NOT NULL,
  `statusName` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusId`, `statusName`, `description`) VALUES
(1, 'Regular Employee', NULL),
(2, 'Internship student', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `testId` int(11) NOT NULL,
  `testName` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentId`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidateId`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`scoreId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`testId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointmentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `scoreId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `testId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
