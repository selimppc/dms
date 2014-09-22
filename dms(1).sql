-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2014 at 08:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `z_audit_trail`
--

CREATE TABLE IF NOT EXISTS `z_audit_trail` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `z_recordid` bigint(20) DEFAULT NULL,
  `z_recdate` datetime DEFAULT NULL,
  `z_reftable` varchar(100) DEFAULT NULL,
  `z_optrec1` varchar(50) DEFAULT NULL,
  `z_optrec2` varchar(50) DEFAULT NULL,
  `z_optrec3` varchar(50) DEFAULT NULL,
  `z_optrec4` varchar(50) DEFAULT NULL,
  `z_action` varchar(50) DEFAULT NULL,
  `z_user` varchar(50) DEFAULT NULL,
  `z_ipadress` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `z_recordid` (`z_recordid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `z_business`
--

CREATE TABLE IF NOT EXISTS `z_business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) DEFAULT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `address` text,
  `city` varchar(50) DEFAULT NULL,
  `zip_code` varchar(15) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `cell_number` varchar(50) DEFAULT NULL,
  `fax_number` varchar(50) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `insertuser` varchar(20) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `updateuser` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `company_name` (`company_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `z_business`
--

INSERT INTO `z_business` (`id`, `company_name`, `contact_person`, `address`, `city`, `zip_code`, `country`, `phone`, `cell_number`, `fax_number`, `url`, `logo`, `inserttime`, `insertuser`, `updatetime`, `updateuser`) VALUES
(1, 'Livemdeicx', 'Selim', 'Dhaka', 'Dhaka', '1206', 'Bangladesh', '1234567890', '1234567890', '1234567890', 'livemedicx.com', NULL, '2014-09-18 10:51:01', NULL, NULL, NULL),
(2, 'iTabps', 'Amit ', 'Uttara', 'Dhaka', '1212', NULL, '123456789', '123456789', '123456789', 'http://www.eeeee.com', '', '2014-09-18 11:50:45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_logintime`
--

CREATE TABLE IF NOT EXISTS `z_logintime` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `c_logid` int(11) NOT NULL,
  `c_date` date DEFAULT NULL,
  `c_intime` time DEFAULT NULL,
  `c_ipaddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `z_menupanel`
--

CREATE TABLE IF NOT EXISTS `z_menupanel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `c_type` varchar(4) DEFAULT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `c_redirect` varchar(500) DEFAULT NULL,
  `c_parentid` int(11) DEFAULT NULL,
  `c_sortord` int(11) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `c_type` (`c_type`,`c_sortord`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `z_menupanel`
--

INSERT INTO `z_menupanel` (`id`, `c_id`, `c_type`, `c_name`, `c_redirect`, `c_parentid`, `c_sortord`, `inserttime`) VALUES
(1, 0, 'ROOT', 'ROOT', '#', 0, 0, '2014-06-12 10:26:53'),
(2, 1, 'MODU', 'Administrator', '#', 1, 0, '2014-06-12 10:23:57'),
(3, 1, 'MODU', 'Purchase', '#', 1, 2, '2014-06-12 10:23:58'),
(4, 1, 'MODU', 'Master Setup', '#', 1, 1, '2014-06-12 10:23:58'),
(5, 1, 'MODU', 'Sales', '#', 1, 3, '2014-06-12 10:23:59'),
(6, 1, 'MENU', 'User', '#', 2, 0, '2014-06-12 10:23:59'),
(7, 1, 'MENU', 'Role', '#', 2, 1, '2014-06-12 10:24:00'),
(8, 1, 'MENU', 'Requisition', '#', 3, 0, '2014-06-12 10:24:01'),
(9, 1, 'MENU', 'Order', '#', 3, 1, '2014-06-12 10:24:01'),
(10, 1, 'MENU', 'Reports', '#', 3, 2, '2014-06-12 10:24:02'),
(11, 1, 'MENU', 'Sales Invoice', '#', 5, 0, '2014-06-12 10:24:03'),
(12, 1, 'MENU', 'Product', '#', 4, 0, '2014-06-12 10:24:04'),
(13, 1, 'MENU', 'Supplier', '#', 4, 1, '2014-06-12 10:24:05'),
(14, 1, 'MENU', 'Customer', '#', 4, 2, '2014-06-12 10:24:06'),
(15, 1, 'MENU', 'Branch', '#', 4, 3, '2014-06-12 10:24:06'),
(16, 1, 'MENU', 'Settings', '#', 4, 4, '2014-06-12 10:24:08'),
(17, 1, 'SUBM', 'tools', '#', 16, NULL, '2014-08-28 11:40:57'),
(18, 1, 'MENU', 'Menu Panel', 'index.php?r=menupanel/index', 2, NULL, '2014-09-20 04:41:07'),
(20, 1, 'SUBM', 'Amit', 'index.php?r=menupanel/view?id=20', 18, NULL, '2014-09-20 04:41:12'),
(21, 1, 'MENU', 'Role Header', 'index.php?r=rolehd/index', 2, 2, '2014-09-20 04:41:17'),
(22, 1, 'MENU', 'Role Detail', 'index.php?r=roledt/index', 2, NULL, '2014-09-20 04:41:22'),
(23, 1, 'MENU', 'Busienss Setup', 'index.php?r=business/index', 2, NULL, '2014-09-20 04:41:37'),
(24, 1, 'MENU', 'User Setup', 'index.php?r=user/index', 2, NULL, '2014-09-20 06:32:21'),
(25, 1, 'MENU', 'Reset Password', 'index.php?r=user/reset-password', 2, NULL, '2014-09-20 15:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `z_roledt`
--

CREATE TABLE IF NOT EXISTS `z_roledt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `c_menuid` int(11) DEFAULT NULL,
  `c_parentid` int(11) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_id` (`c_id`,`c_menuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `z_roledt`
--

INSERT INTO `z_roledt` (`id`, `c_id`, `c_menuid`, `c_parentid`, `inserttime`, `updatetime`, `insertuser`, `updateuser`) VALUES
(1, 2, 4, 2, '2014-09-17 07:24:46', NULL, NULL, NULL),
(2, 2, 13, 4, '2014-09-17 07:24:49', NULL, NULL, NULL),
(3, 2, 3, 2, '2014-09-17 07:24:51', NULL, NULL, NULL),
(4, 2, 8, 3, '2014-09-17 07:25:03', NULL, NULL, NULL),
(5, 2, 9, 3, '2014-09-17 07:25:05', NULL, NULL, NULL),
(6, 3, 5, 3, '2014-09-17 07:25:07', NULL, NULL, NULL),
(7, 3, 4, 3, '2014-09-17 07:25:09', NULL, NULL, NULL),
(8, 3, 14, 4, '2014-09-17 07:25:00', NULL, NULL, NULL),
(9, 3, 11, 5, '2014-09-17 07:23:39', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_rolehd`
--

CREATE TABLE IF NOT EXISTS `z_rolehd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_desc` varchar(150) DEFAULT NULL,
  `c_active` int(11) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_name` (`c_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `z_rolehd`
--

INSERT INTO `z_rolehd` (`id`, `c_name`, `c_desc`, `c_active`, `inserttime`, `updatetime`, `insertuser`, `updateuser`) VALUES
(1, 'ROOT', 'Admin', 1, '2014-09-15 05:58:46', NULL, NULL, NULL),
(2, 'Purchase', 'Admin', 0, '2014-09-15 09:09:24', NULL, NULL, NULL),
(3, 'Sales', 'Sales', 1, '2014-09-15 05:59:13', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `z_user`
--

CREATE TABLE IF NOT EXISTS `z_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `auth_key` varchar(54) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `cell_number` varchar(15) DEFAULT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `c_roleid` int(11) DEFAULT '0',
  `c_active` int(11) DEFAULT NULL,
  `c_status` int(11) DEFAULT NULL,
  `c_expdate` date DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `business_id` (`business_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `z_user`
--

INSERT INTO `z_user` (`id`, `username`, `password`, `auth_key`, `name`, `designation`, `cell_number`, `branch_code`, `c_roleid`, `c_active`, `c_status`, `c_expdate`, `business_id`, `inserttime`, `updatetime`, `insertuser`, `updateuser`) VALUES
(1, 'selim', '$2y$13$gWY/4hvzQmbBT3OXAzte/u81KSVu7xNHE/ZCtlC4YPvePhSCBi9pS', 'selim', 'Selim Reza', 'Software Developer', '01831803255', 'Dhaka', 1, 1, 1, '2015-03-31', 1, '2014-09-21 03:40:22', NULL, NULL, NULL),
(5, 'amit', '$2y$13$PngrBR7p.aTKX.kOnwTRg.hs4woIV4iNXV/Iajbo6aBz7XKsSEjcq', NULL, 'Shahriar Nazmul', 'System Administrator', '1234567890', 'Gulshan', 1, 1, 1, '2014-12-31', 1, '2014-09-20 16:16:39', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `z_vw_role`
--
CREATE TABLE IF NOT EXISTS `z_vw_role` (
`id` int(11)
,`c_type` varchar(4)
,`c_menuid` int(11)
,`c_name` varchar(100)
,`c_parentid` int(11)
,`c_redirect` varchar(500)
,`business_id` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `z_vw_role`
--
DROP TABLE IF EXISTS `z_vw_role`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `z_vw_role` AS select `d`.`id` AS `id`,`c`.`c_type` AS `c_type`,`b`.`c_menuid` AS `c_menuid`,`c`.`c_name` AS `c_name`,`b`.`c_parentid` AS `c_parentid`,`c`.`c_redirect` AS `c_redirect`,`d`.`business_id` AS `business_id` from (((`z_rolehd` `a` join `z_roledt` `b` on((`a`.`id` = `b`.`c_id`))) join `z_menupanel` `c` on((`b`.`c_menuid` = `c`.`id`))) join `z_user` `d` on((`a`.`id` = `d`.`c_roleid`))) union all select `a`.`id` AS `id`,`b`.`c_type` AS `c_type`,`b`.`id` AS `id`,`b`.`c_name` AS `c_name`,`b`.`c_parentid` AS `c_parentid`,`b`.`c_redirect` AS `c_redirect`,`a`.`business_id` AS `business_id` from (`z_user` `a` join `z_menupanel` `b` on((`a`.`c_roleid` = `b`.`c_id`)));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `z_roledt`
--
ALTER TABLE `z_roledt`
  ADD CONSTRAINT `z_roledt_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `z_rolehd` (`id`);

--
-- Constraints for table `z_user`
--
ALTER TABLE `z_user`
  ADD CONSTRAINT `z_user_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
