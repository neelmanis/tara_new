-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2016 at 10:56 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tara_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contact_name` varchar(255) NOT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `post_date`, `contact_name`, `email_id`, `password`, `role`, `mobile_no`, `status`) VALUES
(1, '2016-04-20 12:11:07', 'taraadmin', 'neelmani@kwebmaker.com', 'taraadmin@2016', 'Admin', '9619662253', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `post_date`, `modified_date`, `title`, `image`, `status`) VALUES
(1, '2016-04-21 13:12:52', '2016-04-25 11:03:51', 'Banner1', '17016slide_2.jpg', '1'),
(2, '2016-04-21 13:13:00', '2016-04-25 11:03:48', 'Banner2', '12000slide_1.jpg', '1'),
(3, '2016-04-21 13:13:07', '2016-04-25 11:03:45', 'Banner3', '93755slide_3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `video` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `post_date`, `modified_date`, `name`, `video`, `status`) VALUES
(1, '2016-04-27 15:37:21', '0000-00-00 00:00:00', 'JEWELLERY', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(255) NOT NULL AUTO_INCREMENT,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `cid` int(255) NOT NULL,
  `product_code` varchar(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `post_date`, `modified_date`, `cid`, `product_code`, `title`, `body`, `image`, `url`, `status`) VALUES
(1, '2016-04-25 11:20:10', '2016-04-26 15:30:25', 4, 'GO121', 'GOLD CHAIN', '<p>Gold Plated Chain</p>', '1461563410TDP-2416.jpg', '', '1'),
(2, '2016-04-25 11:20:57', '2016-04-26 15:30:46', 1, 'RING34', 'DIAMOND RINGS', '<p>Diamond Rings Very Affordable Rates</p>', '14616628941.jpg*14616628943.jpg', '', '1'),
(3, '2016-04-25 11:21:53', '2016-04-27 11:29:30', 2, 'RING45', 'WOMENS RINGS', '<p>Womens Golden Rings</p>', '14617367703.jpg', '', '1'),
(4, '2016-04-25 11:22:43', '2016-04-26 15:31:26', 4, 'CHAIN34', 'MANGALSUTRA', '<p>Gold 24 Carret Platinum Mangalsutra</p>', '1461563563R-14990-001HL.jpg*1461563563SRIN-22.jpg', '', '1'),
(5, '2016-04-26 14:09:24', '2016-04-26 15:22:52', 2, 'ROS52', 'THE ROSALIC RING', '<p>The Rosalic Ring</p>\r\n\r\n<p><span style="color:rgb(99, 99, 99); font-family:crimson text,serif; font-size:16px">Diamond And Ruby Ring In 18KT Yellow Gold (2.42 gms) with Diamonds (0.2320 Ct)</span></p>', '14616628492.jpg*14616628494.jpg', '', '1'),
(6, '2016-04-26 15:19:02', '2016-04-27 12:00:40', 2, 'RING89', 'ENGAGEMENT RINGS', '<p>Engagement Rings&nbsp;Engagement Rings</p>', '14617386401.jpg*14617386402.jpg*14617386403.jpg*14617386404.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `cat_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `post_date`, `modified_date`, `cat_id`, `name`, `status`) VALUES
(1, '2016-04-27 16:00:27', '2016-04-27 16:25:25', 1, 'RINGS', '1'),
(2, '2016-04-27 16:01:03', '2016-04-27 16:14:42', 1, 'PENDANTS SETS', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategory`
--

CREATE TABLE IF NOT EXISTS `sub_subcategory` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `cat_id` int(255) NOT NULL,
  `sub_cat_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sub_subcategory`
--

