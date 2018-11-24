-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 08:34 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lotus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `maiden_name` text NOT NULL,
  `Date_of_birth` datetime NOT NULL,
  `investment_val` int(100) NOT NULL,
  `receiving_bank` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `bank_acc_no` int(10) NOT NULL,
  `bvn` int(11) NOT NULL,
  `investor` varchar(100) NOT NULL,
  `cscs_no` int(100) NOT NULL,
  `chn` int(100) NOT NULL,
  `driver_licence_no` int(100) NOT NULL,
  `International Passport` int(100) NOT NULL,
  `Permanent_voter_card` int(100) NOT NULL,
  `nin_card` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
