-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2014 at 12:09 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `NYWCC`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE IF NOT EXISTS `assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `client_id` int(8) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `user_id`, `client_id`, `assign_date`) VALUES
(1, 2, 3, '2014-02-17 07:01:10'),
(2, 2, 3, '2014-02-17 07:04:16'),
(3, 1, 3, '2014-02-17 09:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE IF NOT EXISTS `followup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `servicepro` varchar(50) NOT NULL,
  `servreq` varchar(50) NOT NULL,
  `assist` varchar(50) NOT NULL,
  `type_assist` varchar(50) NOT NULL,
  `bplan` varchar(50) NOT NULL,
  `mplan` varchar(50) NOT NULL,
  `fplan` varchar(50) NOT NULL,
  `bothers` varchar(50) NOT NULL,
  `commercial` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `equip` varchar(50) NOT NULL,
  `social` varchar(50) NOT NULL,
  `market_sell` varchar(50) NOT NULL,
  `exp_imp` varchar(50) NOT NULL,
  `otherbd` varchar(50) NOT NULL,
  `breg` varchar(50) NOT NULL,
  `mwbe` varchar(50) NOT NULL,
  `finfo` varchar(50) NOT NULL,
  `amt_req` varchar(50) NOT NULL,
  `decline` varchar(50) NOT NULL,
  `bondentity` varchar(50) NOT NULL,
  `bondamt` varchar(50) NOT NULL,
  `bidentity` varchar(50) NOT NULL,
  `bidamt` varchar(50) NOT NULL,
  `bidaward` varchar(50) NOT NULL,
  `pentity` varchar(50) NOT NULL,
  `pamt` varchar(50) NOT NULL,
  `paward` varchar(50) NOT NULL,
  `techass` varchar(50) NOT NULL,
  `counselor` varchar(50) NOT NULL,
  `eimpact` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`id`, `date`, `servicepro`, `servreq`, `assist`, `type_assist`, `bplan`, `mplan`, `fplan`, `bothers`, `commercial`, `contract`, `equip`, `social`, `market_sell`, `exp_imp`, `otherbd`, `breg`, `mwbe`, `finfo`, `amt_req`, `decline`, `bondentity`, `bondamt`, `bidentity`, `bidamt`, `bidaward`, `pentity`, `pamt`, `paward`, `techass`, `counselor`, `eimpact`) VALUES
(1, '0000-00-00 00:00:00', 'infosys', 'wipro', 'assistance', 'typeassist', 'businessplan', 'marketplan', 'fplan', 'otherbplan', 'commercial leasing', 'contract', 'purchasing', 'twitter', 'marketing', 'exporting', 'otherbdevelop', 'Array', 'Array', 'finance institute', '6000', 'Array', 'bond entity', '9000', 'contract entity', '7000', '', 'pentity', 'jdghdgj', '', 'technical', 'counselor\r\nnotes', 'existing business saved'),
(2, '2010-06-30 18:30:00', 'reliance', 'capsone', '9876543210', 'type assistance', 'bplan', 'mplan', 'fplan', 'bpother', 'com lease', 'agreement', 'purchasing', 'linkedin', 'selling', 'importing', 'otherbdevelop', 'Array', 'Array', 'fin institute', '100000', 'Array', 'bond enity', '90000', 'bid entity', '6000', '', 'pentity', '5690', '', 'tech assist', 'counselor \r\nnotes', '--Select--'),
(3, '2014-09-03 18:30:00', 'Google', 'Yahoo', 'www.google.co.in', 'suggestion', 'bplan', 'mplan', 'fplan', 'bpother', 'leasing', 'contract', 'merchandise', 'pinterest', 'marketselling', 'export', 'bdevelop', 'ein,license', 'city,state', 'finance', '90000', 'approved', 'bond enity', '90786', 'bid entity', '45678', '', 'pentity', '7890', '', 'tech assist', 'counselor\r\nnotes', 'new business created');

-- --------------------------------------------------------

--
-- Table structure for table `intake`
--

CREATE TABLE IF NOT EXISTS `intake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `client_loc` varchar(20) NOT NULL,
  `b_profile` varchar(50) NOT NULL,
  `member` varchar(50) NOT NULL,
  `member_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_area` varchar(50) NOT NULL,
  `b_course` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `whereandwhen` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(50) NOT NULL,
  `trainers` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `intake`
--

INSERT INTO `intake` (`id`, `client_name`, `business_name`, `addr`, `contact`, `client_loc`, `b_profile`, `member`, `member_date`, `service_area`, `b_course`, `title`, `description`, `whereandwhen`, `time`, `duration`, `trainers`) VALUES
(1, 'nathiya', 'msquare systems', 'new jersey', '9876543221', 'USA', 'business\r\nprofile', 'nywcc', '1990-02-04 18:30:00', 'technical', 'marketing', 'itech', 'intake form', 'newyork', '09:00:00', '02', 'Saran'),
(2, 'naveen', 'fdhgkjdsfhgdjfk', 'iueryhtuihyeui', '9874678480', 'jhsfdasfhgbjhk', 'kjhddskfjgjk', 'nywcc', '1998-03-31 18:30:00', 'technical', 'legal', 'rtewtyr', 'gcfnhfgjmgk', 'gfhkui', '00:00:10', '5', 'ghfdtjtuki'),
(3, 'punitha', 'accenture', 'adyar', '9089078900', 'UK', 'business\r\nprofile', 'labpi', '2010-09-01 18:30:00', 'technical', 'selltoprivate', 'service', 'description', 'canada', '00:00:12', '08', 'saravanan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `username` varchar(150) NOT NULL,
  `phwork` varchar(25) NOT NULL,
  `cell` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reppassword` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `active` varchar(30) NOT NULL DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usertype` varchar(20) NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `firstname` (`firstname`),
  UNIQUE KEY `firstname_2` (`firstname`),
  UNIQUE KEY `lastname` (`lastname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `phwork`, `cell`, `email`, `password`, `reppassword`, `dob`, `address`, `active`, `reg_date`, `usertype`, `status`) VALUES
(1, 'Punitha', '', 'punitha', '', '', 'punithalakshmi@capsone.com', '158ecf6a2510552f89fbd36a9625cdfe', '158ecf6a2510552f89fbd36a9625cdfe', '', '', '1', '2013-02-14 09:08:06', 'admin', 'activated'),
(2, 'navaneetha', 'Krishnan', 'naveen', '438438311', '9715385053', 'navaneethakrishnan@capsone.com', 'e691cb702f5d25642aa87009ef1948f8', 'e691cb702f5d25642aa87009ef1948f8', '15/02/1987', 'villivakkammmm', '1', '2014-02-14 13:36:56', 'user', 'terminated');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE IF NOT EXISTS `userlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout_time` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
