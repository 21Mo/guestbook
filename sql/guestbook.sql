-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2018 at 02:35 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--
CREATE DATABASE IF NOT EXISTS `guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `guestbook`;

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `guestbookId` int(3) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `Insertion` varchar(100) NOT NULL,
  PRIMARY KEY (`guestbookId`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`guestbookId`, `firstname`, `lastname`, `message`, `email`, `Insertion`) VALUES
(43, 'lo', 'lo', 'lo', 'lo', 'lo'),
(44, 'mo', 'mo', 'mo', 'momattie2000@outlook.com', 'mo'),
(45, 'mo', 'mo', 'mo', 'momattie2000@outlook.com', 'mo'),
(46, 'mo', 'mo', 'mo', 'momattie2000@outlook.com', 'mo'),
(47, 'mohamed', 'Yahia', 'ko', 'yahia.m10@live.nl', '-'),
(48, 'mohamed', 'Yahia', 'ko', 'yahia.m10@live.nl', '-'),
(49, 'mo', 'as', 'AS', 'yahia.m10@live.nl', '+'),
(50, 'mo', 'as', 'AS', 'yahia.m10@live.nl', '+'),
(51, 'mo', 'as', 'AS', 'yahia.m10@live.nl', '+'),
(52, 'mo', 'as', 'AS', 'yahia.m10@live.nl', '+'),
(53, '', '', '', '', ''),
(54, '', '', '', '', ''),
(55, '', '', '', '', ''),
(56, '', '', '', '', ''),
(57, '', '', '', '', ''),
(58, '', '', '', '', ''),
(59, '', '', '', '', ''),
(60, '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
