-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2014 at 12:33 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parcel_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_ic` varchar(14) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_password` varchar(20) NOT NULL,
  `cust_name` varchar(35) NOT NULL,
  `cust_phone` int(12) NOT NULL,
  `cust_gender` varchar(6) NOT NULL,
  `cust_address1` varchar(100) NOT NULL,
  `cust_address2` varchar(100) NOT NULL,
  `cust_address_poscode` int(5) NOT NULL,
  `cust_address_city` varchar(20) NOT NULL,
  `cust_address_state` varchar(50) NOT NULL,
  `cust_last_login` datetime NOT NULL,
  `cust_status` varchar(10) NOT NULL,
  PRIMARY KEY (`cust_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_ic`, `cust_email`, `cust_password`, `cust_name`, `cust_phone`, `cust_gender`, `cust_address1`, `cust_address2`, `cust_address_poscode`, `cust_address_city`, `cust_address_state`, `cust_last_login`, `cust_status`) VALUES
('cust_ic', 'danish_93@gmail.com', 'danish', 'danish', 139855555, 'male', 'lotA,jln keyboard', 'pintu geng', 0, 'kota bharu', '', '0000-00-00 00:00:00', 'ACTIVE'),
('cust_ic', 'Futureweapons_93@yahoo.com', 'saya', 'alif', 1121312462, 'male', 'pt745,taman kangkung', 'jln batu dua', 0, 'bangi', '', '0000-00-00 00:00:00', 'INACTIVE'),
('930424036009', 'nautox1x@yahoo.com', 'qwerty', 'Hanif', 139667155, 'male', 'Lot 410', 'Kampung Pauh Panji', 16150, 'Kota Bharu', 'KELANTAN', '0000-00-00 00:00:00', 'ACTIVE'),
('931026-06-5327', 'user123@yahoo.com', 'user123   ', 'user1   ', 1299999993, 'male', 'address1', 'address2', 15200, 'johor baharu', 'KELANTAN', '0000-00-00 00:00:00', 'ACTIVE'),
('cust_ic', 'user456@yahoo.com', 'user456', 'Azizi', 14, 'male', 'pt878', 'Jalan Masjid Lundang', 0, 'kota bharu', '', '2014-03-10 00:00:00', 'INACTIVE'),
('931026065327', 'Uwezu88@gmail.com', 'kingevil001', 'Uwais', 1119989644, 'male', 'pt 856', 'jln guchil bayam', 15200, 'kota bharu ', 'KELANTAN', '0000-00-00 00:00:00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_email` varchar(50) NOT NULL,
  `emp_password` varchar(10) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_ic` varchar(100) NOT NULL,
  `emp_gender` varchar(10) NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `emp_address1` varchar(100) NOT NULL,
  `emp_address2` varchar(100) NOT NULL,
  `emp_address_poscode` int(5) NOT NULL,
  `emp_address_city` varchar(20) NOT NULL,
  `emp_address_state` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_email`),
  UNIQUE KEY `emp_email` (`emp_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_email`, `emp_password`, `emp_name`, `emp_ic`, `emp_gender`, `emp_phone`, `emp_address1`, `emp_address2`, `emp_address_poscode`, `emp_address_city`, `emp_address_state`) VALUES
('admin93@gmail.com', 'admin12', 'Rasyid', '931026-06-5328', 'male', '012-3456789', 'add111', 'add21', 15150, 'kuantan', 'TERENGGANU'),
('rasyid@gmail.com', 'a', 'Abdul', '123', 'Male', '97231', 'sadsd', 'asdas', 12332, 'adasd', 'sdcsv'),
('user2@yahoo.com', 'user2', 'syafiq', '931026065511', 'male', '99999999999', '9999', '99999', 999999, '9999', '99999999');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE IF NOT EXISTS `parcel` (
  `parcel_id` varchar(10) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `parcel_name` varchar(20) NOT NULL,
  `parcel_weight` float NOT NULL,
  `parcel_price` float NOT NULL,
  `parcel_status` varchar(10) NOT NULL,
  `parcel_address1` varchar(100) NOT NULL,
  `parcel_address2` varchar(50) NOT NULL,
  `parcel_address_poscode` int(5) NOT NULL,
  `parcel_address_city` varchar(20) NOT NULL,
  `parcel_address_state` varchar(20) NOT NULL,
  `shiping_id` varchar(10) NOT NULL,
  `parcel_form_start` varchar(40) NOT NULL,
  `parcel_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`parcel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`parcel_id`, `cust_email`, `parcel_name`, `parcel_weight`, `parcel_price`, `parcel_status`, `parcel_address1`, `parcel_address2`, `parcel_address_poscode`, `parcel_address_city`, `parcel_address_state`, `shiping_id`, `parcel_form_start`, `parcel_phone`) VALUES
('my0001e', 'danish_93@gmail.com', 'uwais', 3, 4, 'VALID', 'ptasd', 'dsad', 123, 'asd', 'dsd', '', '', '012010203'),
('my0002e', 'Futureweapons_93@yahoo.com', 'hatem', 0, 0, 'INVALID', 'PT123', '5555', 13200, 'Kota Bharu', 'KELANTAN', '', '', '00000000001');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `parcel_id` varchar(10) NOT NULL,
  `ship_delivered_date` datetime NOT NULL,
  `shipping_status` varchar(50) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `shipping_id` varchar(10) NOT NULL,
  PRIMARY KEY (`parcel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`parcel_id`, `ship_delivered_date`, `shipping_status`, `emp_id`, `shipping_id`) VALUES
('my0001e', '0000-00-00 00:00:00', 'PROCESSING...', '', ''),
('my0002e', '0000-00-00 00:00:00', 'COURIER IS TEMPTING TO DELIVERY...', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
