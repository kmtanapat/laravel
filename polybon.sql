--
-- Database: `candy`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--
CREATE TABLE `customer`(
  'cus_id' INT(11) NOT NULL ,
  'cus_name'VARCHAR(255) NOT NULL ,
  'cus_sur' VARCHAR(255) NOT NULL ,
  'address' VARCHAR(255) NOT NULL,
  'tel'     VARCHAR(255) NOT NULL ,
  'zone_id' INT(11) NOT NULL ,
  'com_id' INT(11) NOT NULL ,
  PRIMARY KEY (cus_id)
)ENGINE =InnoDB DEFAULT CHARSET =utf8;

CREATE TABLE `company`(
  'com_id' INT(11),
  'com_name' VARCHAR(255),
  'address'VARCHAR(255),
  'tel' VARCHAR(255)

)ENGINE =InnoDB DEFAULT CHARSET =utf8;
CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_number` int(11) NOT NULL,
  `pro_name` int(11) NOT NULL,
  `pro_quan` INT(11) NOT NULL ,
  `pro_price` datetime NOT NULL,
  `description` text,
  PRIMARY KEY (pro_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `order`(
  'order_id' INT (30) NOT NULL ,
  'order_num' INT (30) NOT NULL ,
  'cus_id'   INT (11) NOT NULL ,
  'com_id'   INT (11) NOT NULL ,
  'pro_id'   INT (11) NOT NULL ,
  'user_id'  INT (11) NOT NULL ,
  'price'    INT(11) NOT NULL ,
  'rental'   INT(11) NOT NULL ,
  'date_time' DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `report`(
  'report_id' INT(11) NOT NULL ,
  'detail' TEXT NOT NULL ,
  'user_id' INT(11) NOT NULL ,
  'cus_id' INT(11) NOT NULL ,
  'com_id' INT(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user`(
  'user_id'INT(11) NOT NULL ,
  'user_name'VARCHAR(255) NOT NULL ,
  'user_pass'VARCHAR(255) NOT NULL ,
  'auth'VARCHAR(255) NOT NULL,
  PRIMARY KEY (user_id)
)ENGINE =InnoDB DEFAULT CHAR SET =utf8;

CREATE TABLE `zone`(
  'zone_id' INT(11)NOT NULL ,
  'zone_name' VARCHAR(255) NOT NULL ,
  'district' VARCHAR(255) NOT NULL ,
  PRIMARY KEY (zone_id)
)ENGINE =InnoDB DEFAULT CHAR SET =utf8;






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