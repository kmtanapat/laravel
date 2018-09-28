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
  'com_id' INT(11) NOT NULL
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
  `description` text
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
  'auth'VARCHAR(255) NOT NULL
)ENGINE =InnoDB DEFAULT CHAR SET =utf8;

CREATE TABLE `zone`(
  'zone_id' INT(11)NOT NULL ,
  'zone_name' VARCHAR(255) NOT NULL ,
  'district' VARCHAR(255) NOT NULL ,
  'user_id' INT(11) NOT NULL
)ENGINE =InnoDB DEFAULT CHAR SET =utf8;


ALTER TABLE `company`
    ADD PRIMARY KEY (`com_id`),
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `customer`
    ADD PRIMARY KEY (`cus_id`),
  MODIFY `cus_id` INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
ALTER TABLE `product`
    ADD PRIMARY KEY (`pro_id`),
  MODIFY `pro_id`INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
ALTER TABLE `order`
    ADD PRIMARY KEY (`order_id`),
  MODIFY `order_id` INT (11) NOT NULL AUTO_INCREMENt,AUTO_INCREMENT=1;
ALTER TABLE `report`
    ADD PRIMARY KEY (`report_id`),
  MODIFY `report_id` INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`),
  MODIFY `user_id` INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;




















COMMIT;





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;