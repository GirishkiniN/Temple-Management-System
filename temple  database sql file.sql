-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2020 at 06:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temple`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `display`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `display` ()  BEGIN
select * from festival WHERE fname='$pfname' and templename='$pftname';
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `devoteename` varchar(50) NOT NULL,
  `sevaname` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `templename` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`devoteename`, `sevaname`, `rate`, `qty`, `templename`, `amount`) VALUES
('girish', 'mahapooja', 550, 2, 'kalikamba temple', 1100),
('girish', 'mahapooja', 550, 1, 'laxmi janardhana temple', 550),
('ajay', 'kumkumarchane', 20, 50, 'laxmi janardhana temple', 1000),
('raghu', 'laddu seva', 60, 1, 'kalikamba temple', 60),
('raghu', 'laddu seva', 60, 1, 'kalikamba temple', 60),
('ramesh', 'kumkumarchane', 20, 2, 'kalikamba temple', 40),
('eashwar', 'mahapooja', 550, 1, 'venkatramana temple', 550),
('eashwar', 'mahapooja', 550, 1, 'venkatramana temple', 550),
('suma', 'kumkumarchane', 20, 2, 'laxmi janardhana temple', 40),
('ganesh kini', 'kumkumarchane', 20, 2, 'venkatramana temple', 40),
('aneesh', 'mahapooja', 550, 1, 'kalikamba temple', 550),
('mahesh', 'mahapooja', 550, 5, 'laxmi janardhana temple', 2750),
('mahesh', 'mahapooja', 550, 5, 'laxmi janardhana temple', 2750),
('mahesh', 'mahapooja', 550, 5, 'laxmi janardhana temple', 2750),
('mahesh', 'mahapooja', 550, 5, 'laxmi janardhana temple', 2750),
('mahesh', 'mahapooja', 550, 5, 'laxmi janardhana temple', 2750),
('mahesh', 'kumkumarchane', 20, 2, 'venkatramana temple', 40),
('adithya', 'kumkumarchane', 20, 2, 'laxmi janardhana temple', 40),
('girish kini', '', 0, 2, 'kalikamba temple', 0),
('girish kini', '', 0, 2, 'kalikamba temple', 0),
('girish kini', '', 0, 2, 'kalikamba temple', 0),
('girish kini', '', 0, 2, 'kalikamba temple', 0),
('girish', '', 0, 1, 'venkatramana temple', 0),
('girish', '', 0, 1, 'venkatramana temple', 0),
('girish', '', 0, 1, 'venkatramana temple', 0),
('girish kini', '', 0, 2, 'kalikamba temple', 0),
('girish kini', '', 0, 2, 'kalikamba temple', 0),
('girish', 'laddu seva', 60, 2, 'kalikamba temple', 120),
('girish', 'laddu seva', 60, 2, 'venkatramana temple', 120),
('ajay', 'mahapooja', 550, 5, 'kalikamba temple', 2750),
('girish', 'laddu seva', 60, 2, 'laxmi janardhana temple', 120),
('girish', 'karpoorararthi', 30, 2, 'venkatramana temple', 60),
('raghu', 'mahapooja', 550, 2, 'laxmi janardhana temple', 1100),
('ajay', 'mahapooja', 550, 1, 'kalikamba temple', 550),
('girish kini', 'laddu seva', 60, 5, 'laxmi janardhana temple', 300),
('girish', 'laddu seva', 60, 5, 'laxmi janardhana temple', 300),
('girish', 'laddu seva', 60, 2, 'venkatramana temple', 120),
('girish', 'laddu seva', 60, 2, 'kalikamba temple', 120);

--
-- Triggers `bill`
--
DROP TRIGGER IF EXISTS `tm`;
DELIMITER $$
CREATE TRIGGER `tm` AFTER INSERT ON `bill` FOR EACH ROW UPDATE billcount SET bcount=bcount+1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `billcount`
--

DROP TABLE IF EXISTS `billcount`;
CREATE TABLE IF NOT EXISTS `billcount` (
  `bcount` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billcount`
--

INSERT INTO `billcount` (`bcount`) VALUES
(33);

-- --------------------------------------------------------

--
-- Table structure for table `committeedetails`
--

DROP TABLE IF EXISTS `committeedetails`;
CREATE TABLE IF NOT EXISTS `committeedetails` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `designation` varchar(10) DEFAULT NULL,
  `templename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committeedetails`
--

INSERT INTO `committeedetails` (`cid`, `name`, `age`, `address`, `phoneno`, `designation`, `templename`) VALUES
(11, 'ram', 30, 'kaup', 9845763210, 'trustee', 'halemariyammatemple'),
(12, 'ganesh', 50, 'padubidri', 8310230587, 'senior', 'venkatramanatemple'),
(13, 'seetha', 29, 'kaup', 9844287426, 'member', 'laxmijanardhantemple');

-- --------------------------------------------------------

--
-- Table structure for table `devotte`
--

DROP TABLE IF EXISTS `devotte`;
CREATE TABLE IF NOT EXISTS `devotte` (
  `did` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `emailid` varchar(20) DEFAULT NULL,
  `templename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devotte`
--

INSERT INTO `devotte` (`did`, `name`, `phoneno`, `address`, `emailid`, `templename`) VALUES
(1001, 'ramesh', 9972160700, 'mangalore', 'ravi123@gmail.com', 'kudrolitemple'),
(1002, 'raghu', 8722151150, 'mumbai', '123rahul@gmail.com', 'krishnamatha'),
(1003, 'aarathi', 9650231147, 'pune', 'arathi90@gmail.com', 'laxmijanardhantemple'),
(1004, 'suma', 8726501311, 'udupi', 'suma5@gmail.com', 'kudrolitemple'),
(50, 'girish', 11111111111111, 'kaup', 'aaaa', 'kudrolitemple');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `did` int(11) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `dphone` bigint(20) DEFAULT NULL,
  `damount` float DEFAULT NULL,
  `paymentmode` varchar(15) DEFAULT NULL,
  `templename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`did`, `dname`, `address`, `dphone`, `damount`, `paymentmode`, `templename`) VALUES
(2001, 'chaitra', 'kaup', 9856201458, 10000, 'cash', 'laxmijanardhantemple'),
(2002, 'chandana', 'surathkal', 9945683259, 11000, 'cash', 'halemariyammatemple'),
(2003, 'sharanya', 'mulki', 9113242853, 2000, 'cash', 'halemariyammatemple'),
(2004, 'tanya', 'mangalore', 74411640523, 15000, 'card', 'krishnamatha'),
(2004, 'tanya', 'mangalore', 74411640523, 15000, 'card', 'krishnamatha'),
(5, 'ganesh kini', 'mangalore', 9449111337, 50000, 'cash', 'venktramana temple');

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

DROP TABLE IF EXISTS `festival`;
CREATE TABLE IF NOT EXISTS `festival` (
  `fid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `specialpooja` varchar(50) NOT NULL,
  `templename` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`fid`, `fname`, `fdate`, `specialpooja`, `templename`) VALUES
(4, 'lakshadeepa', '2020-02-11', 'mahapooja', 'halemariyammatemple'),
(2, 'lakshadeepa', '2020-02-11', 'mahapooja', 'kalikamba temple'),
(3, 'lakshadeepa', '2020-02-11', 'mahapooja', 'venkatramana temple'),
(5, 'lakshadeepa', '2020-02-11', 'mahapooja', 'laxmi janardhana temple'),
(6, 'carfestival', '2020-05-11', 'karpoorarthi', 'venkatramana temple'),
(7, 'carfestival', '2020-06-11', 'karpoorarthi', 'kalikamba temple'),
(8, 'carfestival', '2020-07-11', 'karpoorarthi', 'halemariyammatemple'),
(9, 'carfestival', '2020-06-11', 'karpoorarthi', 'laxmi janardhana temple'),
(10, 'navarathri', '2020-08-15', 'kumkumarchane', 'venkatramana temple'),
(11, 'navarathri', '2020-08-15', 'kumkumarchane', 'kalikamba temple'),
(12, 'navarathri', '2020-08-15', 'kumkumarchane', 'halemariyammatemple'),
(13, 'navarathri', '2020-08-16', 'kumkumarchane', 'laxmi janardhana temple'),
(14, 'aathimaripooja', '2020-07-11', 'sarva seva', 'halemariyammatemple'),
(15, 'aathimaripooja', '2020-08-16', 'balipooja', 'kalikamba temple'),
(16, 'ganesh chaturthi', '2020-7-11', 'ladduseva', 'venkatramana temple'),
(17, 'ganesh chaturthi', '2020-08-16', 'ladduseva', 'laxmi janardhana temple'),
(20, 'shrashti', '2019-12-02', 'nagapanchamratha abhisheka', 'kudupu'),
(25, 'shashti', '2020-12-02', 'panchambratha abhisheka', 'kudupu'),
(30, 'carsfestival', '2020-01-01', 'aarathi', 'kudupu');

--
-- Triggers `festival`
--
DROP TRIGGER IF EXISTS `tg`;
DELIMITER $$
CREATE TRIGGER `tg` AFTER INSERT ON `festival` FOR EACH ROW UPDATE incr_festid SET festcount=festccount+1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `incr_festid`
--

DROP TABLE IF EXISTS `incr_festid`;
CREATE TABLE IF NOT EXISTS `incr_festid` (
  `festcount` int(11) NOT NULL,
  PRIMARY KEY (`festcount`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sevasavailable`
--

DROP TABLE IF EXISTS `sevasavailable`;
CREATE TABLE IF NOT EXISTS `sevasavailable` (
  `sevaname` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `templename` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sevasavailable`
--

INSERT INTO `sevasavailable` (`sevaname`, `rate`, `templename`) VALUES
('kumkumarchane', 20, 'venkatramana temple'),
('kumkumarchane', 10, 'kalikamba temple'),
('kumkumarchane', 10, 'laxmi janardhana temple'),
('kumkumarchane', 25, 'halemariyammatemple'),
('karthikapooja', 50, 'laxmi janardhana temple'),
('karthikapooja', 55, 'halemariyammatemple'),
('karthikapooja', 60, 'kalikamba temple'),
('karthikapooja', 50, 'venkatramana temple'),
('karpoorarathi', 5, 'laxmi janardhana temple'),
('karpoorarathi', 10, 'kalikamba temple'),
('karpoorarathi', 15, 'venkatramana temple'),
('karpoorarathi', 10, 'halemariyammatemple'),
('rudrabhisheka', 50, 'laxmi janardhana temple'),
('gaddigepooja', 20, 'halemariyammatemple'),
('mahapooja', 500, 'halemariyammatemple'),
('mahapooja', 500, 'kalikamba temple'),
('mahapooja', 550, 'laxmi janardhana temple'),
('mahapooja', 550, 'venkatramana temple'),
('laddu seva', 50, 'venkatramana temple'),
('laddu seva', 60, 'kalikamba temple');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetails`
--

DROP TABLE IF EXISTS `staffdetails`;
CREATE TABLE IF NOT EXISTS `staffdetails` (
  `staffid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `worksas` varchar(20) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `templename` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffdetails`
--

INSERT INTO `staffdetails` (`staffid`, `name`, `age`, `address`, `worksas`, `salary`, `templename`) VALUES
(101, 'chandrakanth', 50, 'kaup', 'manager', 10000, 'kalikamaba temple'),
(102, 'mahesh', 43, 'manglore', 'staff', 5000, 'halemariyammatemple'),
(103, 'kavya', 35, 'mulki', 'accountant', 6000, 'laxmijanardhantemple'),
(104, 'raj', 45, 'surathkal', 'staff', 5000, 'venkatramanatemple'),
(105, 'keshav', 50, 'manglore', 'watchman', 15000, 'kalikamaba temple');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `userid`, `password`) VALUES
(1, 'aditya', 1234567890, 'adityakamath', 'e7200cb8e36c428e60b9f60cb7071891'),
(2, 'girish kini', 9876543210, 'girishkini', 'e7200cb8e36c428e60b9f60cb7071891'),
(3, 'shinna', 7896543210, 'annapurna', '6141c805fa55a910521deca13030590d'),
(4, 'srinivas kamath', 7411650453, 'sri', '2ab4f27ab1ffdcdad8ed21a965ca62ad');

-- --------------------------------------------------------

--
-- Table structure for table `venkataramana temple`
--

DROP TABLE IF EXISTS `venkataramana temple`;
CREATE TABLE IF NOT EXISTS `venkataramana temple` (
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venkataramana temple`
--

INSERT INTO `venkataramana temple` (`name`) VALUES
('10'),
('50'),
('20');

-- --------------------------------------------------------

--
-- Table structure for table `vktemple`
--

DROP TABLE IF EXISTS `vktemple`;
CREATE TABLE IF NOT EXISTS `vktemple` (
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `rate` int(11) NOT NULL,
  `templename` varchar(20) NOT NULL,
  `sevaname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vktemple`
--

INSERT INTO `vktemple` (`name`, `address`, `phone`, `rate`, `templename`, `sevaname`) VALUES
('girish', 'kaup', 9113242853, 12, 'venkatramana temple', 'mahapooja'),
('girish kini', 'MANGLORE', 74411640523, 50, 'venkatramana temple', 'laddu seva'),
('girish kini', 'MANGLORE', 74411640523, 50, 'venkatramana temple', 'laddu seva'),
('girish', 'mangalore', 74411640523, 12, 'venkatramana temple', 'mahapooja'),
('girish', 'mangalore', 74411640523, 12, 'venkatramana temple', 'laddu seva'),
('aaa', 'mangalore', 123456789, 12, 'halemariyammatemple', 'mahapooja'),
('aarathi', 'mangalore', 123456789, 50, 'kalikamba temple', 'mahapooja'),
('girish', 'mangalore', 123456789, 50, 'venkatramana temple', 'laddu seva'),
('girish', 'mangalore', 123456789, 50, 'kalikamba temple', 'mahapooja'),
('srinivas', 'kaup', 987456123, 50, 'halemariyammatemple', 'kumkumarchane'),
('srinivas', 'kaup', 987456123, 50, 'halemariyammatemple', 'kumkumarchane'),
('aaa', 'bb', 321, 50, 'kalikamba temple', 'mahapooja'),
('aaa', 'bb', 321, 50, 'kalikamba temple', 'mahapooja'),
('aaa', 'bb', 321, 50, 'kalikamba temple', 'mahapooja'),
('adithya', 'konchady', 9584632171, 500, 'halemariyammatemple', 'mahapooja'),
('adithya', 'konchady', 9584632171, 500, 'halemariyammatemple', 'mahapooja'),
('grishma', 'mangalore', 6363082734, 50, 'venkatramana temple', 'mahapooja'),
('aaa', 'kaup', 32146, 60, 'venkatramana temple', 'mahapooja'),
('aaa', 'bbb', 45678913, 50, 'venkatramana temple', 'mahapooja'),
('ajay', 'manglore', 984575691, 300, 'venkatramana temple', 'kumkumarchane'),
('girish', 'mangaluru', 123456789, 500, 'kalikamba temple', 'laddu seva'),
('girish kini', 'mangaluru', 123456789, 20, 'kalikamba temple', 'laddu seva'),
('girish', 'mangaluru', 123456789, 500, 'venkatramana temple', 'laddu seva'),
('girish', 'mangaluru', 123456789, 500, 'venkatramana temple', 'laddu seva'),
('girish', 'mangaluru', 123456789, 500, 'venkatramana temple', 'laddu seva'),
('girish', 'mangaluru', 123456789, 500, 'venkatramana temple', 'laddu seva'),
('girish kini', 'mangaluru', 123456789, 500, 'venkatramana temple', 'laddu seva'),
('adithya', 'manglore', 123456789, 20, 'venkatramana temple', 'laddu seva'),
('girish', 'mangalore', 123456789, 500, 'venkatramana temple', 'mahapooja'),
('girish', 'mangalore', 123456789, 500, 'venkatramana temple', 'mahapooja'),
('adithya', 'kulur', 123456789, 50, 'venkatramana temple', 'laddu seva');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
