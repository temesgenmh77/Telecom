-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2018 at 08:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountno` int(11) NOT NULL,
  `total_amount` decimal(10,4) NOT NULL,
  `months` varchar(30) NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `inst_period` int(11) NOT NULL,
  `response_date` date NOT NULL,
  `issue_date` date NOT NULL,
  `reply_date` date NOT NULL,
  `last_date` date NOT NULL,
  `action_taken` varchar(30) NOT NULL,
  `response` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `center` varchar(30) NOT NULL,
  `Contact` int(13) NOT NULL,
  `Handler` varchar(50) NOT NULL,
  PRIMARY KEY (`accountno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountno`, `total_amount`, `months`, `amount_paid`, `inst_period`, `response_date`, `issue_date`, `reply_date`, `last_date`, `action_taken`, `response`, `category`, `status`, `center`, `Contact`, `Handler`) VALUES
(1, '1.0000', '', '1.00', 1, '2018-04-10', '2018-04-02', '2018-04-11', '2018-04-10', 'Bared', 'Agreed', 'Key', 'New', 'NWR & WR', 0, 'Hana Berhanu'),
(7, '7.0000', '', '7.00', 7, '2018-04-02', '2018-04-03', '2018-04-01', '2018-04-09', 'Bared', 'Disagreed', 'SOHO', 'In progress', 'SER & SWR', 3445678, 'Hana Berhanu'),
(21, '43.0000', '', '43.00', 3, '2018-04-11', '2018-04-10', '2018-04-10', '2018-04-11', '', 'Agreed', 'Key', 'In progress', 'NAAZ & TOP', 91111223, 'temesgen m'),
(45, '4.0000', '', '4.00', 4, '2018-03-17', '2018-03-17', '2018-03-17', '2018-03-17', 'Bared', 'Agreed', 'Key', 'New', 'NAAZ & TOP', 2147483647, 'Hana Berhanu'),
(78, '78.0000', '', '78.00', 6, '2018-04-28', '2018-04-27', '2018-04-01', '2018-04-25', 'Bared', 'Agreed', 'Key', 'In progress', 'EAAZ', 34356789, 'Hana Berhanu'),
(214, '242.0000', '', '23.00', 2, '2018-03-01', '2018-03-01', '2018-03-01', '2018-03-01', 'Bared', 'Agreed', 'Key', 'New', 'CAAZ', 0, 'temesgen m'),
(434, '3454.0000', '', '34.00', 3, '2018-03-14', '2018-03-15', '2018-03-15', '2018-03-14', '', 'Agreed', 'Key', 'New', 'NAAZ & TOP', 0, 'hana'),
(445, '7.0000', '', '5.00', 3, '2018-03-13', '2018-03-06', '2018-03-06', '2018-03-07', 'Select action taken', 'Select customer response', 'Select customer category', 'Closed', 'Select collection center', 0, 'Hana'),
(666, '6.0000', '', '6.00', 6, '2018-04-02', '2018-04-02', '2018-04-02', '2018-04-02', 'Bared', 'Agreed', 'Key', 'New', 'NAAZ & TOP', 0, 'temesgen m'),
(686, '66.7000', '7', '7.00', 7, '2018-04-17', '2018-04-18', '2018-04-02', '2018-04-11', 'Bared', 'Agreed', 'Key', 'New', 'CAAZ', 3223432, 'Hana Berhanu'),
(1234, '1234.0000', '', '1234.00', 4, '2018-04-25', '2018-04-23', '2018-04-25', '2018-04-26', '', 'Agreed', 'Key', 'New', 'EAAZ', 9123123, ''),
(7676, '67876.0000', '', '767.00', 6, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Bared', 'Agreed', 'Key', 'New', 'SER & SWR', 0, 'Hana Berhanu'),
(34234, '3234.3400', 'jun-feb', '234.20', 2, '2018-04-02', '2018-04-25', '2018-04-02', '2018-04-18', 'Select action taken', 'Agreed', 'Key', 'Closed', 'SER & SWR', 234, ''),
(2312321, '123.0000', '', '12.00', 3, '2018-03-01', '2018-03-01', '2018-03-01', '2018-03-01', 'Bared', 'Agreed', 'Key', 'New', 'SAAZ & NR', 989898, 'Temesgen');

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE IF NOT EXISTS `customer_detail` (
  `accountno` int(11) NOT NULL,
  `Full_name` varchar(45) NOT NULL,
  `organization_detail` varchar(100) NOT NULL,
  `Personal_address` varchar(80) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `office_phone` varchar(15) NOT NULL,
  `fax` varchar(20) NOT NULL,
  PRIMARY KEY (`accountno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daily_log`
--

CREATE TABLE IF NOT EXISTS `daily_log` (
  `Log_code` int(11) NOT NULL AUTO_INCREMENT,
  `Email_subject` varchar(100) NOT NULL,
  `Sender_name` varchar(40) NOT NULL,
  `Accountno` int(11) NOT NULL,
  `Recieved_date` date NOT NULL,
  `Case_status` varchar(30) NOT NULL,
  `Closed_date` date NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `Handler` varchar(40) NOT NULL,
  PRIMARY KEY (`Log_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `daily_log`
--

INSERT INTO `daily_log` (`Log_code`, `Email_subject`, `Sender_name`, `Accountno`, `Recieved_date`, `Case_status`, `Closed_date`, `Remark`, `Handler`) VALUES
(1, 'clear', 'what', 4, '2018-04-03', 'On progress', '2018-04-25', 'gdfgfd', ''),
(2, 'hahahaha', '4564', 4, '2018-04-03', 'Complete', '2018-04-25', 'gdfgfd', ''),
(4, '6', '6', 6, '2018-04-02', 'On progress', '2018-04-26', '6', 'Hana Berhanu'),
(6, '9', '9', 9, '2018-04-17', 'On progress', '2018-04-17', 'qw', 'Hana Berhanu');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `MessageID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `posted_date` date NOT NULL,
  `Posted_by` varchar(40) NOT NULL,
  PRIMARY KEY (`MessageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `Title`, `Content`, `posted_date`, `Posted_by`) VALUES
(1, '656', '656 what is you action', '2018-04-17', 'Hana Berhanu'),
(2, 'fgsdjghGHJG', 'hghjgjhgjhhg', '2018-04-18', 'Hana Berhanu');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `EmployeID` varchar(15) NOT NULL,
  `Full_name` varchar(60) NOT NULL,
  `Sex` varchar(15) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date_posted` date NOT NULL,
  PRIMARY KEY (`EmployeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`EmployeID`, `Full_name`, `Sex`, `Department`, `Position`, `Email`, `Phone`, `Username`, `password`, `role`, `status`, `date_posted`) VALUES
('9137', 'Hana Berhanu', 'Female', 'ETC', 'Cooridnator', 'hana.berhanu@ethiotelecom.et', '0911590011', 'hanab', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', 'Enable', '2018-04-21');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD CONSTRAINT `accountno` FOREIGN KEY (`accountno`) REFERENCES `account` (`accountno`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
