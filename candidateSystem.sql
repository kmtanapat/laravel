--
-- Database: `candy`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentId` int(11) NOT NULL,
  `appointmentsTypeId` int(11) NOT NULL,
  `candidateId` int(11) NOT NULL,
  `dateStart` datetime NOT NULL,
  `dateEnd` datetime NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointmentId`, `appointmentsTypeId`, `candidateId`, `dateStart`, `dateEnd`, `description`) VALUES
  (1, 1, 2, '2018-06-11 06:00:00', '2018-06-11 16:00:00', NULL),
  (2, 3, 2, '2018-06-28 15:00:00', '2018-06-28 20:00:00', NULL),
  (3, 1, 24, '2018-06-24 17:00:00', '2018-06-24 20:00:00', NULL),
  (4, 2, 16, '2018-06-25 19:00:00', '2018-06-25 20:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointmentstype`
--

CREATE TABLE `appointmentstype` (
  `appointmentsTypeId` int(11) NOT NULL,
  `appointmentName` varchar(100) NOT NULL,
  `appointmentColor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointmentstype`
--

INSERT INTO `appointmentstype` (`appointmentsTypeId`, `appointmentName`, `appointmentColor`) VALUES
  (1, 'Phone', '#4286f4'),
  (2, 'Interview', '#cab0e8'),
  (3, 'Skype', '#b4f7c7'),
  (4, 'Hangout', '#f7f3b4');

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
  `identityid` int(11) NOT NULL,
  `remark` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidateId`, `name`, `surname`, `dateOfBirth`, `gender`, `tel`, `statusId`, `identityid`, `remark`) VALUES
  (2, 'Jack', 'Sparrow', '1872-05-14', 'M', '0992221144', 2, 1, 'Wait for second interview.'),
  (3, 'Marie', 'Curie', '1988-06-11', 'F', '098-9999999', 2, 2, 'Chemistry master'),
  (4, 'Ash', 'Ketchum', '2010-04-10', 'M', '0899999999', 2, 3, 'Pokemon master'),
  (5, 'Cherprang', 'Areekul', '1996-05-28', 'F', '09988888767', 13, 4, ''),
  (6, 'Minerva', 'McGonagal', '1966-05-13', 'F', '0992222222', 2, 1, NULL),
  (8, 'Albus', 'Percival Vulfric Bryan Dumbledore', '1919-05-07', 'M', '0888888888', 2, 2, NULL),
  (9, 'Septimus ', 'Heap', '1999-05-14', 'F', '098888', 1, 3, ''),
  (10, 'Alan', 'Rickman', '1978-01-08', 'M', '0988888888', 2, 4, NULL),
  (11, 'Norimaki', 'Arale', '2017-06-18', 'F', '0987776666', 2, 1, ''),
  (12, 'Lily', 'Evans', '1977-08-17', 'F', '0988888888', 2, 2, ''),
  (13, 'James', 'Potter', '1976-05-30', 'M', '0999999999', 1, 3, NULL),
  (14, 'Prayuth', 'Chanocha', '1965-10-23', 'M', '0922122221', 1, 4, NULL),
  (15, 'Prawit', 'Wongsuwan', '1967-11-10', 'M', '0933333333', 1, 2, 'Have too much watch'),
  (16, 'Jack ', 'Ma', '1992-02-06', 'M', '0998886666', 1, 3, 'Pu\'s big bro'),
  (17, 'Donald', 'Trump', '1917-01-28', 'M', '0988888888', 2, 2, NULL),
  (18, 'Jong Un', 'Kim', '1966-03-25', 'M', '0922222111', 2, 1, 'NUKE!'),
  (19, 'Traxex', 'Drow Ranger', '1982-01-22', 'F', '0999999999', 1, 2, 'Dota2 u know?'),
  (20, 'Lady', 'Gaga', '1956-08-23', 'F', '0888888888', 13, 3, 'Bad Romance'),
  (21, 'Sashihara', 'Rino', '1998-03-07', 'F', '0999999999', 1, 3, NULL),
  (22, 'Percy', 'Jackson', '1995-12-05', 'M', '0822222222', 2, 3, NULL),
  (23, 'Marry', 'Poppins', '1984-06-09', 'F', '0811111111', 1, 3, ''),
  (24, 'Conan', 'Edogawa', '2012-04-26', 'M', '0999999999', 13, 3, 'Last candidate died because of him?'),
  (25, 'Mitchai', 'Bancha', '1973-11-24', 'M', '0222222222', 1, 3, 'Revive from helicopter accident'),
  (26, 'Toms', 'Hidleston', '1977-05-07', 'M', '0888888888', 1, 3, ''),
  (27, 'Cornelius', 'Fudge', '1897-11-13', 'M', '0111111111', 1, 1, 'Live in London.'),
  (30, 'Harry', 'Potter', '1983-07-31', 'M', '0822222222', 1, 2, ''),
  (31, 'Chritopher', 'Columbus', '1975-04-26', 'M', '02222211', 1, 2, 'Yohohooo'),
  (32, 'Megan', 'Markles', '1956-09-14', 'F', '0811111224', 2, 1, 'Ohh Princess!');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `identityid` int(11) NOT NULL,
  `identityname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`identityid`, `identityname`) VALUES
  (1, '1st_Interview'),
  (2, '2nd_Interview'),
  (3, 'Reject'),
  (4, 'Approve');

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
-- Indexes for table `appointmentstype`
--
ALTER TABLE `appointmentstype`
  ADD PRIMARY KEY (`appointmentsTypeId`);

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
  MODIFY `appointmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointmentstype`
--
ALTER TABLE `appointmentstype`
  MODIFY `appointmentsTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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