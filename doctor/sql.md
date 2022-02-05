SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Docid` int(10) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `snumber` int(10) DEFAULT NULL,
  `sprogram` varchar(200) DEFAULT NULL,
  `scontact` bigint(10) DEFAULT NULL,
  `sgender` varchar(50) DEFAULT NULL,
  `sage` int(10) DEFAULT NULL,
  `saddress` mediumtext DEFAULT NULL,
  `smedback` mediumtext DEFAULT NULL,
  `spassword` varchar(20) DEFAULT NULL, 
  `next_of_kin` varchar(30) DEFAULT NULL, 
  `next_of_kin_number` varchar(30) DEFAULT NULL, 
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

CREATE TABLE `tblmedicalback` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `doctid` int(10) DEFAULT NULL,
  `studentid` int(10) DEFAULT NULL,
  `doctorname` varchar(40) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `tblmedicalback`
  ADD PRIMARY KEY (`ID`);

  CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
   `docid` bigint(20) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES (1, 'admin', 'mubshealth', '27-12-2021 11:42:05 AM');
  ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
