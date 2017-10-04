CREATE TABLE `tbl_inbois_rn` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `InboisNo` varchar(20) DEFAULT NULL,
  `RN` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
SELECT * FROM hibahcom_hibahtracker.tbl_peserta;