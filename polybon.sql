
CREATE TABLE `customer`(
   cus_id  INT NOT NULL ,
   cus_name VARCHAR(255) NOT NULL ,
   cus_sur  VARCHAR(255) NOT NULL ,
   address  VARCHAR(255) NOT NULL,
   tel      VARCHAR(255) NOT NULL ,
   zone_id  INT(11) NOT NULL ,
   com_id  INT(11) NOT NULL
)ENGINE =InnoDB DEFAULT CHARSET =utf8;
INSERT INTO `customer` (cus_id, cus_name, cus_sur, address, tel, zone_id, com_id) VALUES
  (1,  'aa',  'bb' ,  'Ta' ,  086998776 , 1, 1);
CREATE TABLE `company`(
   com_id  INT(11),
   com_name  VARCHAR(255),
   address VARCHAR(255),
   tel  VARCHAR(255)

)ENGINE =InnoDB DEFAULT CHARSET =utf8;
INSERT INTO `company`(`com_id`,`com_name`,`address`,tel)VALUES
  (1, 'slqve', 'bangkok' , '081234567' );

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_number` VARCHAR(255) NOT NULL,
  `pro_name` int(11) NOT NULL,
  `pro_quan` INT(11) NOT NULL ,
  `pro_price` INT(11) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `product`(pro_id, pro_number, pro_name, pro_quan, pro_price, description) VALUES
  (1, 'ha2201' , 'hardware' , 20 , 200 , 'test product' );

CREATE TABLE `order`(
   order_id  INT (30) NOT NULL ,
   order_num  VARCHAR (255) NOT NULL ,
   cus_id    INT (11) NOT NULL ,
   com_id    INT (11) NOT NULL ,
   pro_id    INT (11) NOT NULL ,
   user_id   INT (11) NOT NULL ,
   price     INT(11) NOT NULL ,
   rental    INT(11) NOT NULL ,
   sum       INT(11) NOT NULL ,
   date_time  DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `order`(order_id, order_num, cus_id, com_id, pro_id, user_id, price, rental,sum, date_time) VALUES
  (1, 'db2200' ,1,1,1,1,100,60,40, '2018-06-11 16:00:00' );
CREATE TABLE `report`(
   report_id  INT(11) NOT NULL ,
   detail  TEXT NOT NULL ,
   address  TEXT NOT NULL ,
   user_id  INT(11) NOT NULL ,
   cus_id  INT(11) NOT NULL ,
   com_id  INT(11) NOT NULL,
   pro_id  INT(11) NOT NULL ,
   date   DATETIME NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `report`(report_id, detail, address, user_id, cus_id, com_id, pro_id, date) VALUES
  (1, 'great' ,'address',1,1,1,1, '2018-06-11 16:00:00' );
CREATE TABLE `user`(
   user_id INT(11) NOT NULL ,
   user_name VARCHAR(255) NOT NULL ,
   user_pass VARCHAR(255) NOT NULL ,
   auth VARCHAR(255) NOT NULL
)ENGINE =InnoDB DEFAULT CHAR SET =utf8;
INSERT INTO `user`(user_id, user_name, user_pass, auth) VALUES
  (1, 'admin', 1234 , 'admin' );
CREATE TABLE `zone`(
   zone_id  INT(11)NOT NULL ,
   province_id  INT(11) NOT NULL ,
   user_id  INT(11) NOT NULL
)ENGINE =InnoDB DEFAULT CHAR SET =utf8;

INSERT INTO `zone`(zone_id, province_id, user_id) VALUES
  (1,1,1);
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
ALTER TABLE `zone`
ADD PRIMARY KEY (`zone_id`),
  MODIFY `zone_id` INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;



















COMMIT;





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;