-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2017 at 07:01 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6
--
-- Railway reservation
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railways`
--

-- --------------------------------------------------------

--
-- Table structure for table `pnr`
--

CREATE TABLE `pnr` (
  `User_email` varchar(30) NOT NULL,
  `Train_no` int(30) NOT NULL,
  `pnr_no` int(30) NOT NULL,
  `seats_booked` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnr`
--

INSERT INTO `pnr` (`User_email`, `Train_no`, `pnr_no`, `seats_booked`) VALUES
('arjitachaurasia@gmail.com', 12487, 1168525978, 2),
('arjitachaurasia@gmail.com', 12561, 658031197, 1),
('prasoon@gmail.com', 14511, 2147483647, 1),
('sntu@gmail.com', 12815, 931817319, 2),
('arjita@gmail.com', 12312, 2147483647, 1),
('arjitachaurasia@gmail.com', 12561, 244963625, 0),
('arjitachaurasia@gmail.com', 12561, 137423919, 1),
('arjitachaurasia@gmail.com', 12561, 346632763, 0),
('arjitachaurasia@gmail.com', 12561, 1814025573, 0),
('arjitachaurasia@gmail.com', 12561, 102644721, 0),
('arjitachaurasia@gmail.com', 12561, 308068407, 0),
('arjitachaurasia@gmail.com', 12561, 2147483647, 0),
('arjitachaurasia@gmail.com', 12561, 1171625773, 0),
('arjitachaurasia@gmail.com', 12561, 1240410653, 0),
('arjitachaurasia@gmail.com', 12561, 2147483647, 0),
('arjitachaurasia@gmail.com', 12561, 1737829555, 0),
('arjitachaurasia@gmail.com', 12561, 195906471, 0),
('arjitachaurasia@gmail.com', 12561, 251367849, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Userid` int(255) NOT NULL auto_increment,
  `DateTime` datetime NOT NULL,
  PRIMARY KEY  (`Userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Password`, `Email`, `Userid`, `DateTime`) VALUES
('Arjita Chaurasia', 'arjita', 'arjitachaurasia@gmail.com', 1, '0000-00-00 00:00:00'),
('Shivani Gupta', 'ea7fd144f2edb73362f531981ed1d6', 'shivani@gmail.com', 3, '2016-12-11 02:11:58'),
('Vaishali Agarwal', 'c83ffd5f4c0e41a79f9c1c9809296d', 'vaishali@gmail.com', 4, '2016-12-11 02:14:01'),
('anamika', '552e6a97297c53e592208cf97fbb3b', 'arjita@gmail.com', 5, '0000-00-00 00:00:00'),
('Saumya', 'edda1e024265ea0bc81dd0301301ef', 'saumya@gmail.com', 6, '0000-00-00 00:00:00'),
('Vartika', '10496355d5392f21b3a44328d0df86', 'vartika@gmail.com', 7, '0000-00-00 00:00:00'),
('Shivani', 'd54eb6798656cb9723cdfa2a5f8829', 'shivani875@gmail.com', 8, '0000-00-00 00:00:00'),
('Prasoon', '6829b31fdc3883bdaa19d67c887e0f', 'prasoon@gmail.com', 9, '2016-12-15 12:12:09'),
('santu', 'b36abc6f7087c09c9f22decc5dc80b', 'sntu@gmail.com', 10, '2016-12-15 12:21:28'),
('manu', '545739f872db62588ca94d82e3baf9', 'arjita@gmail.com', 11, '2016-12-26 00:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `Train_no` smallint(30) NOT NULL,
  `Train_name` varchar(30) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Arrival` time NOT NULL,
  `Depature` time NOT NULL,
  `Seats_Availability` smallint(30) NOT NULL,
  PRIMARY KEY  (`Train_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Train_no`, `Train_name`, `Source`, `Destination`, `Arrival`, `Depature`, `Seats_Availability`) VALUES
(12306, 'Kolkata Rajdhani', 'Allahabad', 'Kanpur', '23:46:00', '09:55:00', 1),
(12312, 'Kalka Mail', 'Allahabad', 'Kolkata', '17:20:00', '07:55:00', 2),
(12487, 'Seemanchal Express', 'Allahabad', 'Delhi', '11:55:00', '21:00:00', 1),
(12505, 'North East Express', 'Allahabad', 'Delhi', '09:45:00', '19:20:00', 56),
(12561, 'Swantrata S', 'Allahabad', 'kanpur', '03:50:00', '06:10:00', 3),
(12815, 'Nandan Kanan Express', 'Allahabad', 'Kanpur', '07:55:00', '10:25:00', 1),
(12987, 'Sdah Ajmer Express', 'Allahabad', 'Jaipur', '17:40:00', '22:50:00', 7),
(14371, 'Tribeni Express', 'Allahabad', 'Lucknow', '03:50:00', '08:15:00', 1),
(14511, 'Nauchandi Express', 'Allahabad', 'Lucknow', '17:40:00', '22:56:00', 2),
(15483, 'Mahananda Express', 'Bihar', 'Magadh', '15:15:00', '09:30:00', 3);
