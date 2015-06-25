-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mer 17 Juin 2015 à 11:23
-- Version du serveur: 5.5.34
-- Version de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `vs`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_book_service`
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_book_service`
--

INSERT INTO `tbl_book_service` (`id`, `airport`, `date`, `flight_time`, `name`, `add1`, `add2`, `add3`, `city`, `province`, `country`, `post_code`, `email`, `contact_num`, `type`, `contact_num_2`) VALUES
(1, 'NB', '2015/30/05', '18:45', 'Adam', 'AMA', NULL, NULL, NULL, NULL, NULL, '1000', 'huynt57@gmail.com', '0123456', 'departure', '0123456');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_payment`
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
-- Structure de la table `tbl_user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
