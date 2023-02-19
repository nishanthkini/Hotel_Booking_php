-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2017 at 05:07 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--
CREATE DATABASE IF NOT EXISTS `hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE IF NOT EXISTS `admin_dir` (
  `a_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `r_id` int(222) NOT NULL AUTO_INCREMENT,
  `rimage` varchar(222) NOT NULL,
  `rtype` varchar(222) NOT NULL,
  `rprice` int(222) NOT NULL,
  `rtext` text NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`r_id`, `rimage`, `rtype`, `rprice`, `rtext`) VALUES
(21, '59ccf62887933.jpg', 'Double Room ', 3435, 'lorem guyes duin dfiui lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(22, '59ccf6668755a.jpg', 'Double Room ', 5453, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(24, '59ccf6cb468b6.jpg', 'Double Room ', 7655, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(25, '59ccf6f67339e.jpg', 'Double Room ', 3532, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(27, '59ccf7a2ac7f3.jpg', 'Single Room ', 2321, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(28, '59ccf7c8c79d4.jpg', 'Single Room ', 2122, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(29, '59ccf7de94b13.jpg', 'Single Room ', 3321, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(30, '59ccf84ccda87.jpg', 'First Room ', 7656, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(31, '59ccf8703ad11.jpg', 'First Room ', 7890, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(32, '59ccf895acf8f.jpg', 'First Room ', 7879, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui'),
(33, '59ccf8ade0a79.jpg', 'First Room ', 8099, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', '', '', 'ghg'),
(2, '', '', '', 'gfdgfdg'),
(3, '', '', '', 'gfdgfdg'),
(4, 'fsgf', 'fgf', 'fggfd', 'gfdgfg');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `user_id` int(222) NOT NULL AUTO_INCREMENT,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `brand` varchar(222) NOT NULL,
  `cardno` varchar(222) NOT NULL,
  `emonth` varchar(222) NOT NULL,
  `eyear` varchar(222) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`user_id`, `fname`, `lname`, `address`, `city`, `email`, `phone`, `brand`, `cardno`, `emonth`, `eyear`) VALUES
(10, 'rahul', 'singh', 'ardesh nagar', 'jalandhar', 'as@gmail.com', '55454543', 'visa', '3423423454', '12', '2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
