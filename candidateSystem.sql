-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 06:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candidatesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentId` int(11) NOT NULL,
  `apppointmentsTypeId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointmentId`, `apppointmentsTypeId`, `candidateId`, `date`, `description`) VALUES
(1, 1, 2, '2018-06-11', NULL),
(2, 3, 2, '2018-06-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apppointmentstype`
--

CREATE TABLE `apppointmentstype` (
  `apppointmentsTypeId` int(11) NOT NULL,
  `appointmentName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apppointmentstype`
--

INSERT INTO `apppointmentstype` (`apppointmentsTypeId`, `appointmentName`) VALUES
(1, 'Phone'),
(2, 'Interview'),
(3, 'Skype'),
(4, 'Hangout');

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
(2, 'Jack', 'Sparrow', '1872-05-14', 'M', '0992221144', 2, 'Wait for second interview.'),
(3, 'Marie', 'Curie', '1988-06-11', 'F', '098-9999999', 2, 'Chemistry master'),
(4, 'Ash', 'Ketchum', '2010-04-10', 'M', '0899999999', 2, 'Pokemon master'),
(5, 'Cherprang', 'Areekul', '1996-05-28', 'F', '09988888767', 13, ''),
(6, 'Minerva', 'McGonagal', '1966-05-13', 'F', '0992222222', 2, NULL),
(8, 'Albus', 'Percival Vulfric Bryan Dumbledore', '1919-05-07', 'M', '0888888888', 2, NULL),
(9, 'Septimus ', 'Heap', '1999-05-14', 'F', '098888', 1, ''),
(10, 'Alan', 'Rickman', '1978-01-08', 'M', '0988888888', 2, NULL),
(11, 'Norimaki', 'Arale', '2017-06-18', 'F', '0987776666', 2, ''),
(12, 'Lily', 'Evans', '1977-08-17', 'F', '0988888888', 2, ''),
(13, 'James', 'Potter', '1976-05-30', 'M', '0999999999', 1, NULL),
(14, 'Prayuth', 'Chanocha', '1965-10-23', 'M', '0922122221', 1, NULL),
(15, 'Prawit', 'Wongsuwan', '1967-11-10', 'M', '0933333333', 1, 'Have too much watch'),
(16, 'Jack ', 'Ma', '1992-02-06', 'M', '0998886666', 1, 'Pu\'s big bro'),
(17, 'Donald', 'Trump', '1917-01-28', 'M', '0988888888', 2, NULL),
(18, 'Jong Un', 'Kim', '1966-03-25', 'M', '0922222111', 2, 'NUKE!'),
(19, 'Traxex', 'Drow Ranger', '1982-01-22', 'F', '0999999999', 1, 'Dota2 u know?'),
(20, 'Lady', 'Gaga', '1956-08-23', 'F', '0888888888', 13, 'Bad Romance'),
(21, 'Sashihara', 'Rino', '1998-03-07', 'F', '0999999999', 1, NULL),
(22, 'Percy', 'Jackson', '1995-12-05', 'M', '0822222222', 2, NULL),
(23, 'Marry', 'Poppins', '1984-06-09', 'F', '0811111111', 1, ''),
(24, 'Conan', 'Edogawa', '2012-04-26', 'M', '0999999999', 13, 'Last candidate died because of him?'),
(25, 'Mitchai', 'Bancha', '1973-11-24', 'M', '0222222222', 1, 'Revive from helicopter accident'),
(26, 'Toms', 'Hidleston', '1977-05-07', 'M', '0888888888', 1, ''),
(27, 'Cornelius', 'Fudge', '1897-11-13', 'M', '0111111111', 1, 'Live in London.'),
(30, 'Harry', 'Potter', '1983-07-31', 'M', '0822222222', 1, ''),
(31, 'Chritopher', 'Columbus', '1975-04-26', 'M', '02222211', 1, 'Yohohooo'),
(32, 'Megan', 'Markles', '1956-09-14', 'F', '0811111224', 2, 'Ohh Princess!');

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

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`positionId`, `candidateId`, `currentSalary`, `expectedSalary`, `positionName`) VALUES
(1, 1, 200, 500, 'Pirate of the Caribean'),
(2, 6, 20000, 22000, 'Transfiguration Teacher'),
(3, 3, 0, 0, 'Banana Eater'),
(5, 8, 300, 100000, 'Head of Hogwarts'),
(6, 10, 45000, 12000, 'Potion Prof.'),
(7, 24, 700, 7000, 'Detective'),
(8, 25, 8000, 8001, 'Actor'),
(9, 27, 5000, 7000, 'Ministry of Wizard World'),
(10, 11, 46900, 70000, 'Detective'),
(11, 12, 500, 2000, 'Project Manager');

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
(1, 'Regular Employee', ''),
(2, 'Internship student', '3 months or 6 months only'),
(13, '3 Months Contract', '  urgently required');

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
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`testId`, `testName`, `description`) VALUES
(1, 'Toeic', 'English test.'),
(2, 'JLPT', 'Japanese test'),
(3, 'Toefl', 'English test'),
(4, 'HSK', 'Chinese test'),
(5, 'Topik', 'Korean test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentId`);

--
-- Indexes for table `apppointmentstype`
--
ALTER TABLE `apppointmentstype`
  ADD PRIMARY KEY (`apppointmentsTypeId`);

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
  MODIFY `appointmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apppointmentstype`
--
ALTER TABLE `apppointmentstype`
  MODIFY `apppointmentsTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `scoreId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `testId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
