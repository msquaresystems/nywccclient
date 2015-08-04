-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2014 at 07:38 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.9

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
-- Table structure for table `followup`
--

CREATE TABLE IF NOT EXISTS `followup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `clientid` int(255) NOT NULL,
  `date` datetime NOT NULL,
  `servicepro` varchar(255) NOT NULL,
  `servreq` varchar(255) NOT NULL,
  `assist` varchar(255) NOT NULL,
  `type_assist` varchar(255) NOT NULL,
  `bplan` varchar(50) NOT NULL,
  `mplan` varchar(50) NOT NULL,
  `fplan` varchar(50) NOT NULL,
  `bothers` varchar(50) NOT NULL,
  `commercial` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `equip` varchar(50) NOT NULL,
  `social` varchar(50) NOT NULL,
  `time_spent` varchar(255) DEFAULT NULL,
  `market_sell` varchar(50) NOT NULL,
  `exp_imp` varchar(50) NOT NULL,
  `otherbd` varchar(50) NOT NULL,
  `breg` varchar(50) NOT NULL,
  `breg_other_in` varchar(255) DEFAULT NULL,
  `typeofmwbe` varchar(255) NOT NULL,
  `typeofmwbe_other_in` varchar(255) DEFAULT NULL,
  `finfo` varchar(50) NOT NULL,
  `amt_req` varchar(50) NOT NULL,
  `bondentity` varchar(50) NOT NULL,
  `bondamt` varchar(50) NOT NULL,
  `bidentity` varchar(50) NOT NULL,
  `bidamt` varchar(50) NOT NULL,
  `pentity` varchar(50) NOT NULL,
  `pamt` varchar(50) NOT NULL,
  `techass` varchar(50) NOT NULL,
  `prowriteaward` varchar(255) DEFAULT NULL,
  `counselor` varchar(350) NOT NULL,
  `bidcontaward` varchar(255) DEFAULT NULL,
  `eimpact` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'open',
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientid` (`clientid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `followupform2`
--

CREATE TABLE IF NOT EXISTS `followupform2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `clientid` int(10) NOT NULL,
  `visitdate` datetime NOT NULL,
  `f2_clientname` varchar(255) DEFAULT NULL,
  `f2_telephone` varchar(255) DEFAULT NULL,
  `f2_bname` varchar(255) DEFAULT NULL,
  `f2_breason` text,
  `f2_breason_other_in` varchar(255) DEFAULT NULL,
  `f2_counselnotes` varchar(300) DEFAULT NULL,
  `reply` varchar(750) NOT NULL,
  `f2_time_spent` varchar(255) DEFAULT NULL,
  `f2_client_signature` varchar(255) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'open',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `intake`
--

CREATE TABLE IF NOT EXISTS `intake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `assigned_user` int(255) DEFAULT NULL,
  `membership_want` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `annual_income` varchar(255) DEFAULT NULL,
  `primary_language` varchar(255) DEFAULT NULL,
  `primary_language_other_in` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `time_in_business` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `physical_address1` varchar(255) DEFAULT NULL,
  `physical_address2` varchar(255) DEFAULT NULL,
  `physical_city` varchar(255) DEFAULT NULL,
  `physical_state` varchar(255) DEFAULT NULL,
  `physical_zip` varchar(255) DEFAULT NULL,
  `physical_country` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `race_ethnicity` varchar(255) DEFAULT NULL,
  `race_ethnicity_other_in` varchar(255) DEFAULT NULL,
  `health_insurance` varchar(255) DEFAULT NULL,
  `business_address` varchar(255) DEFAULT NULL,
  `business_address1` varchar(255) DEFAULT NULL,
  `business_address2` varchar(255) DEFAULT NULL,
  `business_city` varchar(255) DEFAULT NULL,
  `business_state` varchar(255) DEFAULT NULL,
  `business_zip` varchar(255) DEFAULT NULL,
  `business_country` varchar(255) DEFAULT NULL,
  `typeofbusiness` varchar(255) DEFAULT NULL,
  `typeofbusiness_other_in` varchar(255) DEFAULT NULL,
  `typeofindustry` varchar(255) DEFAULT NULL,
  `typeofindustry_other_in` varchar(255) DEFAULT NULL,
  `typeofmwbe` varchar(255) DEFAULT NULL,
  `typeofmwbe_other_in` varchar(255) DEFAULT NULL,
  `services_needed` varchar(255) DEFAULT NULL,
  `services_need_other_in` varchar(255) DEFAULT NULL,
  `products_offered` varchar(255) DEFAULT NULL,
  `women_minority_owned` varchar(255) DEFAULT NULL,
  `counselor_notes` varchar(255) DEFAULT NULL,
  `time_spent` varchar(255) DEFAULT NULL,
  `numberofemployees` varchar(255) DEFAULT NULL,
  `business_structure` varchar(255) DEFAULT NULL,
  `counselor_name` varchar(255) DEFAULT NULL,
  `percentageofbusiness` varchar(255) DEFAULT NULL,
  `per_first_name` text,
  `per_last_name` text,
  `per_email` text,
  `per_phone_num` text,
  `child_percentageofbusiness` text,
  `services_provided` varchar(255) DEFAULT NULL,
  `services_provided_other_in` varchar(255) DEFAULT NULL,
  `client_signature` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `intake`
--

INSERT INTO `intake` (`id`, `user_id`, `assigned_user`, `membership_want`, `first_name`, `last_name`, `email`, `gender`, `age`, `telephone`, `website`, `annual_income`, `primary_language`, `primary_language_other_in`, `business_name`, `time_in_business`, `physical_address`, `physical_address1`, `physical_address2`, `physical_city`, `physical_state`, `physical_zip`, `physical_country`, `education`, `fax`, `race_ethnicity`, `race_ethnicity_other_in`, `health_insurance`, `business_address`, `business_address1`, `business_address2`, `business_city`, `business_state`, `business_zip`, `business_country`, `typeofbusiness`, `typeofbusiness_other_in`, `typeofindustry`, `typeofindustry_other_in`, `typeofmwbe`, `typeofmwbe_other_in`, `services_needed`, `services_need_other_in`, `products_offered`, `women_minority_owned`, `counselor_notes`, `time_spent`, `numberofemployees`, `business_structure`, `counselor_name`, `percentageofbusiness`, `per_first_name`, `per_last_name`, `per_email`, `per_phone_num`, `child_percentageofbusiness`, `services_provided`, `services_provided_other_in`, `client_signature`, `created_date`) VALUES
(1, 3, 3, 'yes', 'Larry', 'Miles', 'lmiles@nywcc.org', 'Male', '31-40', '(212) 941-6000', 'www.nywcc.org', '$21k to $50k per yr', 'yes', '', 'Miles Road Construction', 'Existing (More than 2 yrs)', '1524 Amsterdam Avenue, New York, NY  10031', '1524 Amsterdam av', '', 'new york', 'new york', '10031', 'united states ', 'Graduate School', '212 941 6000', 'Black/Africa American', '', 'yes', '1524 Amsterdam Avenue, New York, NY  10031', '1524 Amsterdam av', '', 'new york', 'new york', '10031', 'united states ', NULL, 'Construction ', NULL, 'Construction ', 'City,State', '', 'One-On-One Business Counseling', '', 'Construction ', 'minority_owned', 'Looking Partner', '15mins', '1-10', 'LLC', 'Quenia', '100', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:0:"";}', 'a:1:{i:0;s:2:"90";}', 'In Person', '', NULL, '2014-06-24 22:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postedquery` varchar(250) NOT NULL,
  `reply` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `clientid` int(11) NOT NULL,
  `clientname` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `phwork` varchar(25) NOT NULL,
  `cell` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reppassword` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `physical_address1` varchar(255) DEFAULT NULL,
  `physical_address2` varchar(255) NOT NULL,
  `physical_city` varchar(255) DEFAULT NULL,
  `physical_state` varchar(255) DEFAULT NULL,
  `physical_zip` varchar(255) DEFAULT NULL,
  `physical_country` varchar(255) DEFAULT NULL,
  `active` varchar(30) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `login_attemt` int(255) DEFAULT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `phwork`, `cell`, `email`, `password`, `reppassword`, `dob`, `physical_address`, `physical_address1`, `physical_address2`, `physical_city`, `physical_state`, `physical_zip`, `physical_country`, `active`, `reg_date`, `usertype`, `login_attemt`, `status`) VALUES
(1, 'nathiya', 'balramd', 'nathiya', '(435) 345-3454', '(546) 464-5654', 'nathiya@capsone.com', '77783748da3bb917fadb7d039dfd7c30', '77783748da3bb917fadb7d039dfd7c30', '04-Mar-14', 'No. 1, 3rd Cross Street, Kasturba Nagar 3rd Cross Street, Adyar, Chennai, Tamil Nadu, India', 'No. 1, 3rd Cross Street', 'Kasturba Nagar 3rd Cross St', 'Chennai', 'TN', '600020', 'India', '1', '2014-03-25 16:10:51', 'admin', 0, 'activated'),
(2, 'muthu', 'natrajan', 'muthu', '(435) 345-3454', '(435) 342-3424', 'muthu.n@msquaresystems.com', '5917b5e67ec38acbbfcead0a805432ba', '5917b5e67ec38acbbfcead0a805432ba', '04-Jun-14', 'No. 1, 3rd Cross Street, Kasturba Nagar 3rd Cross Street, Adyar, Chennai, Tamil Nadu, India', NULL, '', NULL, NULL, NULL, NULL, '1', '2014-03-25 16:36:02', 'admin', 0, 'activated'),
(3, 'Meena', 'Nate', 'meena.m@msquaresystems.com', '(703) 222-1500', '(703) 222-1500', 'meena.m@msquaresystems.com', 'a4ff2351fa28e0a118878c76600be939', 'a4ff2351fa28e0a118878c76600be939', '22-May-92', '35 Journal Square Plaza, Jersey City, NJ, United States', '35 Journal square plaza', '', 'jersey city', 'new jersey ', '07306', 'UNITED STATES', '1', '2014-06-24 21:58:57', 'user', 0, 'activated');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE IF NOT EXISTS `userlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(60) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`id`, `user_id`, `login_time`, `logout_time`, `last_login`) VALUES
(1, '3', '2014-06-24 22:01:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '3', '2014-06-24 22:01:55', '2014-06-24 22:21:59', '2014-06-24 22:01:55'),
(3, '1', '2014-06-24 22:47:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2', '2014-06-25 08:20:36', '2014-06-25 08:21:06', '2014-06-25 08:20:36'),
(5, '2', '2014-06-25 08:24:59', '2014-06-30 15:06:49', '2014-06-25 08:24:59'),
(6, '1', '2014-06-27 00:14:15', '2014-06-27 00:55:36', '2014-06-27 00:14:15'),
(7, '1', '2014-06-27 01:03:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '3', '2014-06-30 15:07:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userprojects`
--

CREATE TABLE IF NOT EXISTS `userprojects` (
  `uid` int(8) NOT NULL,
  `clientid` int(8) NOT NULL,
  `previous_userid` int(10) NOT NULL,
  `assign_date` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprojects`
--

INSERT INTO `userprojects` (`uid`, `clientid`, `previous_userid`, `assign_date`, `status`) VALUES
(3, 1, 0, '2014-06-24 22:13:28', 'open');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
