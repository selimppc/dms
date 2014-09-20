/*
SQLyog Ultimate v8.55 
MySQL - 5.5.27 : Database - dms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `dms`;

/*Table structure for table `z_audit_trail` */

DROP TABLE IF EXISTS `z_audit_trail`;

CREATE TABLE `z_audit_trail` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `z_audit_trail` */

/*Table structure for table `z_business` */

DROP TABLE IF EXISTS `z_business`;

CREATE TABLE `z_business` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `z_business` */

insert  into `z_business`(`id`,`company_name`,`contact_person`,`address`,`city`,`zip_code`,`country`,`phone`,`cell_number`,`fax_number`,`url`,`logo`,`inserttime`,`insertuser`,`updatetime`,`updateuser`) values (1,'Livemdeicx','Selim','Dhaka','Dhaka','1206','Bangladesh','1234567890','1234567890','1234567890','livemedicx.com',NULL,'2014-09-18 16:51:01',NULL,NULL,NULL),(2,'iTabps','Amit ','Uttara','Dhaka','1212',NULL,'123456789','123456789','123456789','http://www.eeeee.com','','2014-09-18 17:50:45',NULL,NULL,NULL);

/*Table structure for table `z_logintime` */

DROP TABLE IF EXISTS `z_logintime`;

CREATE TABLE `z_logintime` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `c_logid` int(11) NOT NULL,
  `c_date` date DEFAULT NULL,
  `c_intime` time DEFAULT NULL,
  `c_ipaddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `z_logintime` */

/*Table structure for table `z_menupanel` */

DROP TABLE IF EXISTS `z_menupanel`;

CREATE TABLE `z_menupanel` (
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `z_menupanel` */

insert  into `z_menupanel`(`id`,`c_id`,`c_type`,`c_name`,`c_redirect`,`c_parentid`,`c_sortord`,`inserttime`) values (1,0,'root','root','#',0,0,'2014-06-12 16:26:53'),(2,1,'MODU','Administrator','#',1,0,'2014-06-12 16:23:57'),(3,1,'MODU','Purchase','#',1,2,'2014-06-12 16:23:58'),(4,1,'MODU','Master Setup','#',1,1,'2014-06-12 16:23:58'),(5,1,'MODU','Sales','#',1,3,'2014-06-12 16:23:59'),(6,1,'MENU','User','#',2,0,'2014-06-12 16:23:59'),(7,1,'MENU','Role','#',2,1,'2014-06-12 16:24:00'),(8,1,'MENU','Requisition','#',3,0,'2014-06-12 16:24:01'),(9,1,'MENU','Order','#',3,1,'2014-06-12 16:24:01'),(10,1,'MENU','Reports','#',3,2,'2014-06-12 16:24:02'),(11,1,'MENU','Sales Invoice','#',5,0,'2014-06-12 16:24:03'),(12,1,'MENU','Product','#',4,0,'2014-06-12 16:24:04'),(13,1,'MENU','Supplier','#',4,1,'2014-06-12 16:24:05'),(14,1,'MENU','Customer','#',4,2,'2014-06-12 16:24:06'),(15,1,'MENU','Branch','#',4,3,'2014-06-12 16:24:06'),(16,1,'MENU','Settings','#',4,4,'2014-06-12 16:24:08'),(17,1,'SUBM','tools','#',16,NULL,'2014-08-28 17:40:57'),(18,1,'MENU','Menu Panel','index.php?r=menupanel/index',2,NULL,'2014-09-20 10:41:07'),(20,1,'SUBM','Amit','index.php?r=menupanel/view?id=20',18,NULL,'2014-09-20 10:41:12'),(21,1,'MENU','Role Header','index.php?r=rolehd/index',2,2,'2014-09-20 10:41:17'),(22,1,'MENU','Role Detail','index.php?r=roledt/index',2,NULL,'2014-09-20 10:41:22'),(23,1,'MENU','Busienss Setup','index.php?r=business/index',2,NULL,'2014-09-20 10:41:37'),(24,1,'MENU','User Setup','index.php?r=user/index',2,NULL,'2014-09-20 12:32:21');

/*Table structure for table `z_roledt` */

DROP TABLE IF EXISTS `z_roledt`;

CREATE TABLE `z_roledt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `c_menuid` int(11) DEFAULT NULL,
  `c_parentid` int(11) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c_id` (`c_id`,`c_menuid`),
  CONSTRAINT `z_roledt_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `z_rolehd` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `z_roledt` */

insert  into `z_roledt`(`id`,`c_id`,`c_menuid`,`c_parentid`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (1,2,4,2,'2014-09-17 13:24:46',NULL,NULL,NULL),(2,2,13,4,'2014-09-17 13:24:49',NULL,NULL,NULL),(3,2,3,2,'2014-09-17 13:24:51',NULL,NULL,NULL),(4,2,8,3,'2014-09-17 13:25:03',NULL,NULL,NULL),(5,2,9,3,'2014-09-17 13:25:05',NULL,NULL,NULL),(6,3,5,3,'2014-09-17 13:25:07',NULL,NULL,NULL),(7,3,4,3,'2014-09-17 13:25:09',NULL,NULL,NULL),(8,3,14,4,'2014-09-17 13:25:00',NULL,NULL,NULL),(9,3,11,5,'2014-09-17 13:23:39',NULL,NULL,NULL);

/*Table structure for table `z_rolehd` */

DROP TABLE IF EXISTS `z_rolehd`;

CREATE TABLE `z_rolehd` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `z_rolehd` */

insert  into `z_rolehd`(`id`,`c_name`,`c_desc`,`c_active`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (1,'root','Admin',1,'2014-09-15 11:58:46',NULL,NULL,NULL),(2,'Purchase','Admin',0,'2014-09-15 15:09:24',NULL,NULL,NULL),(3,'Sales','Sales',1,'2014-09-15 11:59:13',NULL,NULL,NULL);

/*Table structure for table `z_user` */

DROP TABLE IF EXISTS `z_user`;

CREATE TABLE `z_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
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
  KEY `business_id` (`business_id`),
  CONSTRAINT `z_user_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `z_user` */

insert  into `z_user`(`id`,`username`,`password`,`auth_key`,`name`,`designation`,`cell_number`,`branch_code`,`c_roleid`,`c_active`,`c_status`,`c_expdate`,`business_id`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (1,'selim','202cb962ac59075b964b07152d234b70','selim','Selim Reza','Software Developer','01831803255','Dhaka',1,1,1,'2015-03-31',1,'2014-09-20 11:07:32',NULL,NULL,NULL),(5,'amit','$2y$13$vy59MYJ4we498LC3r9G/5eFnS',NULL,'Shahriar Nazmul','System Administrator','1234567890','Gulshan',1,1,1,'2014-12-31',1,'2014-09-20 13:53:25',NULL,NULL,NULL);

/*Table structure for table `z_vw_role` */

DROP TABLE IF EXISTS `z_vw_role`;

/*!50001 DROP VIEW IF EXISTS `z_vw_role` */;
/*!50001 DROP TABLE IF EXISTS `z_vw_role` */;

/*!50001 CREATE TABLE  `z_vw_role`(
 `id` int(11) ,
 `c_type` varchar(4) ,
 `c_menuid` int(11) ,
 `c_name` varchar(100) ,
 `c_parentid` int(11) ,
 `c_redirect` varchar(500) ,
 `business_id` int(11) 
)*/;

/*View structure for view z_vw_role */

/*!50001 DROP TABLE IF EXISTS `z_vw_role` */;
/*!50001 DROP VIEW IF EXISTS `z_vw_role` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `z_vw_role` AS select `d`.`id` AS `id`,`c`.`c_type` AS `c_type`,`b`.`c_menuid` AS `c_menuid`,`c`.`c_name` AS `c_name`,`b`.`c_parentid` AS `c_parentid`,`c`.`c_redirect` AS `c_redirect`,`d`.`business_id` AS `business_id` from (((`z_rolehd` `a` join `z_roledt` `b` on((`a`.`id` = `b`.`c_id`))) join `z_menupanel` `c` on((`b`.`c_menuid` = `c`.`id`))) join `z_user` `d` on((`a`.`id` = `d`.`c_roleid`))) union all select `a`.`id` AS `id`,`b`.`c_type` AS `c_type`,`b`.`id` AS `id`,`b`.`c_name` AS `c_name`,`b`.`c_parentid` AS `c_parentid`,`b`.`c_redirect` AS `c_redirect`,`a`.`business_id` AS `business_id` from (`z_user` `a` join `z_menupanel` `b` on((`a`.`c_roleid` = `b`.`c_id`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
