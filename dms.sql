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

/*Table structure for table `ad_codesparam` */

DROP TABLE IF EXISTS `ad_codesparam`;

CREATE TABLE `ad_codesparam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` varchar(50) NOT NULL,
  `CODE` varchar(50) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `credit_account` varchar(50) DEFAULT NULL,
  `debit_account` varchar(50) DEFAULT NULL,
  `discount_acount` varchar(50) DEFAULT NULL,
  `tax_account` varchar(50) DEFAULT NULL,
  `return_account` varchar(50) DEFAULT NULL,
  `tax_rate` decimal(20,2) DEFAULT NULL,
  `properties` varchar(50) DEFAULT NULL,
  `percentage` decimal(20,2) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT NULL,
  `insert_user` varchar(50) DEFAULT NULL,
  `update_user` varchar(50) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `TYPE` (`TYPE`,`CODE`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `ad_codesparam_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ad_codesparam` */

insert  into `ad_codesparam`(`id`,`TYPE`,`CODE`,`description`,`branch_code`,`credit_account`,`debit_account`,`discount_acount`,`tax_account`,`return_account`,`tax_rate`,`properties`,`percentage`,`active`,`ip_address`,`insert_time`,`update_time`,`insert_user`,`update_user`,`business_id`) values (1,'Hello','CODE','code changes','DH','10001','10001','10001','10001','10001','1.00','1','1.00',1,'192.168.1.67','2014-10-18 21:39:52',NULL,NULL,NULL,1),(2,'Product Class','PRODUCT','product','DH','10001','10001','10001','10001','10001','12.00','12','12.00',1,'192.168.1.67','2014-10-18 21:34:32',NULL,NULL,NULL,1);

/*Table structure for table `ad_trnparam` */

DROP TABLE IF EXISTS `ad_trnparam`;

CREATE TABLE `ad_trnparam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` varchar(50) NOT NULL,
  `CODE` varchar(4) NOT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `ACTION` int(11) DEFAULT NULL,
  `last_number` int(11) DEFAULT NULL,
  `increment` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT NULL,
  `insert_user` varchar(50) DEFAULT NULL,
  `update_user` varchar(50) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `TYPE` (`TYPE`,`CODE`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `ad_trnparam_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ad_trnparam` */

insert  into `ad_trnparam`(`id`,`TYPE`,`CODE`,`branch_code`,`description`,`ACTION`,`last_number`,`increment`,`active`,`ip_address`,`insert_time`,`update_time`,`insert_user`,`update_user`,`business_id`) values (2,'Hello','CODE','DH','Transaction code',1,0,1,1,'192.168.1.101','2014-10-19 12:37:32',NULL,NULL,NULL,2);

/*Table structure for table `cm_branchmst` */

DROP TABLE IF EXISTS `cm_branchmst`;

CREATE TABLE `cm_branchmst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(50) NOT NULL,
  `branch_name` varchar(150) NOT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `exchange_rate` decimal(20,2) DEFAULT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `cell_number` varchar(15) DEFAULT NULL,
  `fax_number` varchar(15) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `branch_code` (`branch_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cm_branchmst` */

insert  into `cm_branchmst`(`id`,`branch_code`,`branch_name`,`currency`,`exchange_rate`,`contact_person`,`designation`,`address`,`phone_number`,`cell_number`,`fax_number`,`active`,`ip_address`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (1,'DH','Dhaka','BDT','1.00','Selim Reza','Software Engineer','House: 39, Road: 04, \r\nS/A Khaleq R/A, Darus Salam \r\nKallanpur','123456789','123456789','123456789',1,'192.168.1.67','2014-10-18 10:14:02',NULL,NULL,NULL);

/*Table structure for table `cm_currency` */

DROP TABLE IF EXISTS `cm_currency`;

CREATE TABLE `cm_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency` varchar(10) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `exchange_rate` decimal(20,5) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `inserttime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `currency` (`currency`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `cm_currency_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cm_currency` */

insert  into `cm_currency`(`id`,`currency`,`description`,`exchange_rate`,`active`,`ip_address`,`inserttime`,`updatetime`,`insertuser`,`updateuser`,`business_id`) values (1,'BDT','Bangladeshi Taka','77.13000',1,'192.168.1.67',NULL,NULL,NULL,NULL,1);

/*Table structure for table `cm_cusmst` */

DROP TABLE IF EXISTS `cm_cusmst`;

CREATE TABLE `cm_cusmst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_code` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `group_code` varchar(50) DEFAULT NULL,
  `type_code` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `territory` varchar(50) DEFAULT NULL,
  `cell_number` varchar(15) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `fax_number` varchar(15) DEFAULT NULL,
  `email_address` varchar(150) DEFAULT NULL,
  `branch_code` varchar(50) NOT NULL,
  `market_code` varchar(50) DEFAULT NULL,
  `sales_person` varchar(50) DEFAULT NULL,
  `credit_limit` decimal(20,2) DEFAULT NULL,
  `hub_code` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_code` (`customer_code`),
  KEY `branch_code` (`branch_code`),
  KEY `customer_name` (`customer_name`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `cm_cusmst_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cm_cusmst` */

insert  into `cm_cusmst`(`id`,`customer_code`,`customer_name`,`group_code`,`type_code`,`address`,`territory`,`cell_number`,`phone_number`,`fax_number`,`email_address`,`branch_code`,`market_code`,`sales_person`,`credit_limit`,`hub_code`,`status`,`parent_id`,`ip_address`,`inserttime`,`updatetime`,`insertuser`,`updateuser`,`business_id`) values (1,123,'Selim','12','12','Dhaka','Dhaka','1234567890','1234567890','1234567890','me@selimreza.com','1','12','Selim','5000.00','12','1',12,'192.168.1.67','2014-10-18 12:41:51',NULL,NULL,NULL,2);

/*Table structure for table `cm_productmst` */

DROP TABLE IF EXISTS `cm_productmst`;

CREATE TABLE `cm_productmst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(10) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `class_code` varchar(50) DEFAULT NULL,
  `group_code` varchar(50) DEFAULT NULL,
  `category_code` varchar(50) DEFAULT NULL,
  `sell_rate` decimal(20,2) DEFAULT NULL,
  `cost_price` decimal(20,2) DEFAULT NULL,
  `sell_unit` varchar(10) DEFAULT NULL,
  `sell_unit_conversion` decimal(20,2) DEFAULT NULL,
  `purchase_unit` varchar(10) DEFAULT NULL,
  `purchase_unit_conversion` decimal(20,2) DEFAULT NULL,
  `stock_unit` varchar(10) DEFAULT NULL,
  `stock_unit_conversion` decimal(20,2) DEFAULT NULL,
  `pack_size` varchar(20) DEFAULT NULL,
  `stock_type` varchar(50) DEFAULT NULL,
  `supplier_code` varchar(50) DEFAULT NULL,
  `maximum_level` int(11) DEFAULT NULL,
  `minmum_level` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `tax_rate` decimal(20,2) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(10) DEFAULT NULL,
  `updateuser` varchar(10) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `cm_productmst_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cm_productmst` */

insert  into `cm_productmst`(`id`,`product_code`,`product_name`,`description`,`class_code`,`group_code`,`category_code`,`sell_rate`,`cost_price`,`sell_unit`,`sell_unit_conversion`,`purchase_unit`,`purchase_unit_conversion`,`stock_unit`,`stock_unit_conversion`,`pack_size`,`stock_type`,`supplier_code`,`maximum_level`,`minmum_level`,`reorder_level`,`tax_rate`,`STATUS`,`inserttime`,`updatetime`,`insertuser`,`updateuser`,`ip_address`,`business_id`) values (1,'123','Product Name','Description','12','13','14','123.00','122.00','12','1.00','1','1.00','1','1.00','1','Stock N Sell','',1,1,1,'1.00','1','2014-10-18 13:18:37',NULL,NULL,NULL,'192.168.1.67',1);

/*Table structure for table `cm_supmst` */

DROP TABLE IF EXISTS `cm_supmst`;

CREATE TABLE `cm_supmst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_code` int(11) NOT NULL,
  `group_code` int(11) NOT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `post_code` varchar(10) DEFAULT NULL,
  `contact_person` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `cell_number` varchar(15) DEFAULT NULL,
  `fax_number` varchar(15) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `url_address` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(50) DEFAULT NULL,
  `updateuser` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `supplier_code` (`supplier_code`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `cm_supmst_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `cm_supmst` */

insert  into `cm_supmst`(`id`,`supplier_code`,`group_code`,`branch_code`,`supplier_name`,`address`,`district`,`post`,`post_code`,`contact_person`,`phone_number`,`cell_number`,`fax_number`,`email_address`,`url_address`,`status`,`inserttime`,`updatetime`,`insertuser`,`updateuser`,`ip_address`,`business_id`) values (1,123,12,'DH','Selim','12','Dhaka',NULL,'12344','Selim','12345678','123456789','12345678','','me@selimreza.com','1','2014-10-18 13:31:29',NULL,NULL,NULL,'192.168.1.67',1);

/*Table structure for table `gl_chrtofacc` */

DROP TABLE IF EXISTS `gl_chrtofacc`;

CREATE TABLE `gl_chrtofacc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_code` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `account_type` varchar(10) DEFAULT NULL,
  `account_usage` varchar(10) DEFAULT NULL,
  `first_group` int(11) DEFAULT NULL,
  `second_group` int(11) DEFAULT NULL,
  `third_group` int(11) DEFAULT NULL,
  `analytical_code` varchar(10) DEFAULT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `inserttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL,
  `insertuser` varchar(10) DEFAULT NULL,
  `updateuser` varchar(10) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_code` (`account_code`),
  KEY `description` (`description`,`account_type`),
  KEY `business_id` (`business_id`),
  CONSTRAINT `gl_chrtofacc_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `gl_chrtofacc` */

insert  into `gl_chrtofacc`(`id`,`account_code`,`description`,`account_type`,`account_usage`,`first_group`,`second_group`,`third_group`,`analytical_code`,`branch_code`,`STATUS`,`inserttime`,`updatetime`,`insertuser`,`updateuser`,`ip_address`,`business_id`) values (1,'10001','Bank Account','Asset','Ledger',1,2,3,'Cash','1','1','2014-10-18 10:45:53',NULL,NULL,NULL,'192.168.1.67',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `z_menupanel` */

insert  into `z_menupanel`(`id`,`c_id`,`c_type`,`c_name`,`c_redirect`,`c_parentid`,`c_sortord`,`inserttime`) values (1,0,'ROOT','ROOT','#',0,0,'2014-09-24 16:03:37'),(2,1,'MODU','Administrator','#',1,0,'2014-06-12 16:23:57'),(3,1,'MODU','Purchase','#',1,2,'2014-06-12 16:23:58'),(4,1,'MODU','Master Setup','#',1,1,'2014-06-12 16:23:58'),(5,1,'MODU','Sales','#',1,3,'2014-06-12 16:23:59'),(8,1,'MENU','Requisition','#',3,0,'2014-06-12 16:24:01'),(9,1,'MENU','Order','#',3,1,'2014-06-12 16:24:01'),(10,1,'MENU','Reports','#',3,2,'2014-06-12 16:24:02'),(11,1,'MENU','Sales Invoice','#',5,0,'2014-06-12 16:24:03'),(17,1,'SUBM','tools','#',16,NULL,'2014-08-28 17:40:57'),(18,1,'MENU','Menu Panel','index.php?r=menupanel/index',2,NULL,'2014-09-20 10:41:07'),(21,1,'MENU','Role Setup','index.php?r=rolehd/index',2,2,'2014-09-24 16:05:45'),(23,1,'MENU','Busienss Setup','index.php?r=business/index',2,NULL,'2014-09-20 10:41:37'),(24,1,'MENU','User Setup','index.php?r=user/index',2,NULL,'2014-09-20 12:32:21'),(25,1,'MENU','Reset Password','index.php?r=user/reset-password',2,NULL,'2014-09-20 21:12:58'),(26,1,'MENU','Codes Param Setup','index.php?r=codesparam/index',2,5,'2014-09-30 21:13:18'),(27,1,'MENU','Transaction Param','index.php?r=trnparam/index',2,5,'2014-10-12 22:43:22'),(28,1,'MENU','Chart of Accounts','index.php?r=chartofaccounts/index',4,NULL,'2014-10-16 17:40:03'),(29,1,'MENU','Branch Master','index.php?r=branchmaster/index',4,NULL,'2014-10-16 17:40:47'),(30,1,'MENU','Currency','index.php?r=currency/index',4,NULL,'2014-10-16 17:41:21'),(31,1,'MENU','Customer Master','index.php?r=customermaster/index',4,NULL,'2014-10-16 17:41:54'),(32,1,'MENU','Product Master','index.php?r=productmaster/index',4,NULL,'2014-10-16 17:42:25'),(33,1,'MENU','Supplier Master','index.php?r=suppliermaster/index',4,NULL,'2014-10-16 17:42:58');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `z_roledt` */

insert  into `z_roledt`(`id`,`c_id`,`c_menuid`,`c_parentid`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (6,3,5,3,'2014-09-17 13:25:07',NULL,NULL,NULL),(7,3,4,3,'2014-09-17 13:25:09',NULL,NULL,NULL),(8,3,14,4,'2014-09-17 13:25:00',NULL,NULL,NULL),(9,3,11,5,'2014-09-17 13:23:39',NULL,NULL,NULL),(11,4,18,2,'2014-09-30 21:02:11',NULL,NULL,NULL),(13,2,2,3,'2014-10-02 12:26:28',NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `z_rolehd` */

insert  into `z_rolehd`(`id`,`c_name`,`c_desc`,`c_active`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (2,'Purchase','Admin',1,'2014-09-30 15:27:51',NULL,NULL,NULL),(3,'Sales','Sales',1,'2014-09-15 11:59:13',NULL,NULL,NULL),(4,'Test','Sales',1,'2014-09-28 14:27:06',NULL,NULL,NULL);

/*Table structure for table `z_user` */

DROP TABLE IF EXISTS `z_user`;

CREATE TABLE `z_user` (
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
  KEY `business_id` (`business_id`),
  CONSTRAINT `z_user_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `z_business` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `z_user` */

insert  into `z_user`(`id`,`username`,`password`,`auth_key`,`name`,`designation`,`cell_number`,`branch_code`,`c_roleid`,`c_active`,`c_status`,`c_expdate`,`business_id`,`inserttime`,`updatetime`,`insertuser`,`updateuser`) values (5,'amit','$2y$13$PngrBR7p.aTKX.kOnwTRg.hs4woIV4iNXV/Iajbo6aBz7XKsSEjcq',NULL,'Shahriar Nazmul','System Administrator','1234567890','Gulshan',1,0,0,'2014-12-31',1,'2014-09-25 15:43:25',NULL,NULL,NULL),(7,'Ontika','$2y$13$eE47sFjl905SCLoCIjaEQuHaer.gyYRcuFvPw194rqVyIlRptNX8O',NULL,'Boss','BOSS','123456789','1234',1,1,1,'2014-09-30',2,'2014-09-22 15:30:37',NULL,NULL,NULL),(8,'reza','$2y$13$cU7CXjzytSr/RdjtPY7VPuhFm4oYDbPnlLa2tLreZKf36H03aPDOW',NULL,'Reza','Reza','1234567890','Dhaka',2,1,1,'2014-12-31',1,'2014-09-25 15:12:55',NULL,NULL,NULL),(9,'selim1','$2y$13$DsVcRe1U3Z951MyHoY.a1O.q04KgX3qSUIpdpIC4AYYtSe7KLyzau',NULL,'Selim Reza','System Administrator','1234567890','Gulshan',1,1,1,'2021-09-30',2,'2014-09-24 13:59:12',NULL,NULL,NULL),(10,'sohail','$2y$13$Vk4g8thFUoPooFdfpbntLOpLxbTnY6AC1QVG41Iv3bcpmEg1AyYDK',NULL,'sohail','sohail','1256','Dhaka',1,1,1,'2023-09-27',1,'2014-09-25 12:10:59',NULL,NULL,NULL),(11,'selim','$2y$13$d.VsssgOG/tYbzs5Gt0XDeuXAR24/PvIA4XOwB2KajpQeWfGYl/De',NULL,'Selim Reza','System Administrator','1256','sd',1,1,1,'2014-09-30',2,'2014-09-29 13:18:39',NULL,NULL,NULL);

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
