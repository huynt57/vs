-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2015 at 08:41 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_service`
--

CREATE TABLE IF NOT EXISTS `tbl_book_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `airport` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `flight_time` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `add1` varchar(255) DEFAULT NULL,
  `add2` varchar(255) DEFAULT NULL,
  `add3` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_num` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `contact_num_2` varchar(255) DEFAULT NULL,
  `flight_number` varchar(255) DEFAULT NULL,
  `size` int(255) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_book_service`
--

INSERT INTO `tbl_book_service` (`id`, `airport`, `date`, `flight_time`, `name`, `add1`, `add2`, `add3`, `city`, `province`, `country`, `post_code`, `email`, `contact_num`, `type`, `contact_num_2`, `flight_number`, `size`, `status`) VALUES
(5, 'NB', '', '02:26 PM', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'arrival', '', '', NULL, 2),
(6, 'NB', '', '02:29 PM', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'arrival', '', '', NULL, 2),
(7, 'NB', '', '02:32 PM', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'arrival', '', '', NULL, NULL),
(8, 'NB', '', '08:47 AM', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'arrival', '', '', NULL, 5),
(9, 'NB', '', '08:47 AM', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'arrival', '', '', NULL, 2),
(10, 'DN', '', '08:58 AM', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'arrival', '', '', NULL, 2),
(12, 'NB', '2015/30/05', '', '', '', NULL, NULL, NULL, NULL, NULL, '1000', 'huynt57@gmail.com', '', 'departure', '', '', NULL, 1),
(13, 'NB', '2015/30/05', '', '', '', NULL, NULL, NULL, NULL, NULL, '1000', 'huynt57@gmail.com', '', 'departure', '', '', NULL, 2),
(14, 'NB', '2015/30/05', '', '', '', NULL, NULL, NULL, NULL, NULL, '1000', 'huynt57@gmail.com', '', 'departure', '', '', NULL, 2),
(15, 'NB', '2015/30/05', '', '', '', NULL, NULL, NULL, NULL, NULL, '1000', 'huynt57@gmail.com', '', 'departure', '', '', NULL, 1),
(17, 'NB', '06/03/2015', '12:45', 'huy', 'fff', NULL, NULL, NULL, NULL, NULL, '12222', 'huynt57@gmail.com', '123333', 'arrival', '12324234', '123', 1, 2),
(18, 'DN', '06/16/2015', '02:05 PM', 'Huy', 'Phuc Dien', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'departure', '0123456', 'MB222', 2, NULL),
(19, 'NB', '06/10/2015', '05:09 PM', 'huy123', 'Phuc Dien dien dien', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '111', 1, NULL),
(20, 'NB', '08/17/2015', '05:20 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'departure', '01679263615', 'MB456', 1, 5),
(21, 'DN', '06/08/2015', '02:45 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1233', 12, NULL),
(22, 'NB', '06/07/2015', '02:48 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 1, 5),
(23, 'NB', '06/08/2015', '02:51 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 2, 5),
(24, 'NB', '06/08/2015', '02:53 PM', 'Huy Nguyen', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '123', 1, NULL),
(25, 'NB', '06/09/2015', '02:56 PM', 'Huy Nguyen', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 1, 2),
(26, 'NB', '06/02/2015', '03:09 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1234', 12, 5),
(27, 'NB', '06/02/2015', '03:16 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 12, NULL),
(28, 'NB', '2015/30/05', '01:52 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'departure', '01679263615', 'MB123', 2, 1),
(29, 'TSN', '2015/30/05', '02:01 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 1, 1),
(30, 'NB', '06/10/2015', '02:17 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '566', 6, 1),
(31, 'NB', '06/09/2015', '02:43 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '123456', 12, 1),
(32, 'DN', '06/08/2015', '02:48 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '123', 1, 1),
(33, 'DN', '06/02/2015', '02:55 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 2, 1),
(34, 'NB', '06/11/2015', '03:17 PM', 'Nguyen The Huy', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '1111', 1, 1),
(35, 'NB', '06/10/2015', '05:09 PM', 'Huy Nguyen', 'Phuc Dien, Tu Liem', NULL, NULL, NULL, NULL, NULL, '8000', 'huynt57@gmail.com', '01679263615', 'arrival', '01679263615', '123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `order_time` varchar(255) DEFAULT NULL,
  `receipt_time` varchar(255) DEFAULT NULL,
  `request_ip` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `merchant_ref` int(11) DEFAULT NULL,
  `error_code` int(11) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_date` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `created_date`, `password`, `is_active`, `permission`) VALUES
(1, 'huynt', 'huynt57@gmail.com', NULL, '370b68d2df138a99ee28adb26a4c61f7', 1, 1),
(2, 'tungnt', 'tungnt@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
