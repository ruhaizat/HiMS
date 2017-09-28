CREATE TABLE `tbl_inbois` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `no_inbois` varchar(255) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `no_kelompok` varchar(255) DEFAULT NULL,
  `service_fee` decimal(10,0) DEFAULT NULL,
  `gst` decimal(10,0) DEFAULT NULL,
  `disbursement` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
