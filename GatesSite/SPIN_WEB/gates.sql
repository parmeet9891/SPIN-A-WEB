-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 02:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gates`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `r1` tinyint(4) NOT NULL,
  `r2` tinyint(4) NOT NULL,
  `r3` tinyint(4) NOT NULL,
  `r4` tinyint(4) NOT NULL,
  `r5` tinyint(4) NOT NULL,
  `r6` tinyint(4) NOT NULL,
  `r7` tinyint(4) NOT NULL,
  `r8` tinyint(4) NOT NULL,
  `r9` tinyint(4) NOT NULL,
  `r10` tinyint(4) NOT NULL,
  `r11` tinyint(4) NOT NULL,
  `r12` tinyint(4) NOT NULL,
  `r13` tinyint(4) NOT NULL,
  `r14` tinyint(4) NOT NULL,
  `r15` tinyint(4) NOT NULL,
  `r16` tinyint(4) NOT NULL,
  `r17` tinyint(4) NOT NULL,
  `r18` tinyint(4) NOT NULL,
  `r19` tinyint(4) NOT NULL,
  `r20` tinyint(4) NOT NULL,
  `totalmarks` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `userid`, `password`, `mail`, `mobile_number`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`, `r16`, `r17`, `r18`, `r19`, `r20`, `totalmarks`) VALUES
('Parmeet', 8, '123456', 'parmeet_singh250@yah', 8826573241, 2, 2, 2, 4, 1, 3, 1, 4, 3, 2, 3, 1, 3, 1, 1, 1, 1, 1, 3, 1, 0),
('Karan', 9, '1996', 'karan96@yahoo.com', 9999999999, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Jatin', 10, 'hello', 'jatinkrk@yahoo.com', 8888888888, 2, 2, 2, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
('taranjeets123', 11, 'qwertyuiop', 'taranjeets91@gmail.c', 9910352528, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
