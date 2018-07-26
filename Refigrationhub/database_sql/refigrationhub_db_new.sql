/*
SQLyog Professional v12.09 (64 bit)
MySQL - 5.6.26 : Database - refigrationhub_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`refigrationhub_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `refigrationhub_db`;

/*Table structure for table `mast_tbl_category` */

DROP TABLE IF EXISTS `mast_tbl_category`;

CREATE TABLE `mast_tbl_category` (
  `cat_name` varchar(765) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `mast_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `seo_title` varchar(765) DEFAULT NULL,
  `meta_tag` varchar(765) DEFAULT NULL,
  `meta_descr` varchar(765) DEFAULT NULL,
  `meta_keyword_descr` varchar(765) DEFAULT NULL,
  `created_at` varchar(765) DEFAULT NULL,
  `updated_at` varchar(765) DEFAULT NULL,
  `status` varchar(765) DEFAULT NULL,
  `cat_url` varchar(765) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mast_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_category` */

insert  into `mast_tbl_category`(`cat_name`,`file_name`,`full_path`,`mast_cat_id`,`seo_title`,`meta_tag`,`meta_descr`,`meta_keyword_descr`,`created_at`,`updated_at`,`status`,`cat_url`,`created_by`,`delStatus`,`cat_id`) values ('Refrigeration Parts','compresor.png','C:/xampp/htdocs/Refigrationhub/uploads/category/compresor.png',1,'','','','','2018-06-09 13:06:56','2018-06-09 13:12:28','Active','refrigeration-parts','2','no',1),('Industrial Parts','scrollcompressor.png','C:/xampp/htdocs/Refigrationhub/uploads/category/scrollcompressor.png',2,'','','','','2018-06-09 13:07:48','2018-07-02 09:01:01','Active','industrial-parts','2','no',2),('Refrigerator','freezers.jpg','C:/xampp/htdocs/Refigrationhub/uploads/category/freezers.jpg',3,'laralipsum laralipsum','laralipsum laralipsum','laralipsum laralipsum','laralipsum laralipsum','2018-06-09 13:09:48','2018-07-02 08:53:37','Active','refrigerator','1','no',3),('Air Conditioners                   ','windowac1.jpg','C:/xampp/htdocs/Refigrationhub/uploads/category/windowac1.jpg',4,'','','','','2018-06-09 13:11:26',NULL,'Active','air-conditioners','2','no',4),('Refrigeration Parts2132','','C:/xampp/htdocs/Refigrationhub/uploads/category/',6,'','','','','2018-06-13 08:54:18',NULL,'Active','refrigeration-parts2132','2','no',6),('Common Testqeq2w3','','C:/xampp/htdocs/Refigrationhub/uploads/category/',7,'','','','','2018-06-13 08:54:22',NULL,'Active','common-testqeq2w3','2','no',7),('Common Testw1`21`','','C:/xampp/htdocs/Refigrationhub/uploads/category/',8,'','','','','2018-06-13 08:54:26',NULL,'Active','common-testw1-21','2','no',8);

/*Table structure for table `mast_tbl_cities` */

DROP TABLE IF EXISTS `mast_tbl_cities`;

CREATE TABLE `mast_tbl_cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `delStatus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_cities` */

insert  into `mast_tbl_cities`(`city_id`,`country_id`,`state_id`,`city_name`,`status`,`created_at`,`updated_at`,`delStatus`) values (1,1,3,'Gorakhpur','Active','2018-05-30 14:09:30','2018-05-30 14:34:14','yes'),(2,1,6,'Central Delhi','Active','2018-05-30 14:12:05','','yes'),(3,1,6,'East Delhi','Active','2018-05-30 14:12:31','','yes'),(4,1,0,'New Delhi','Active','2018-05-30 14:12:42','','no'),(5,1,6,'North Delhi','Active','2018-05-30 14:12:52','','no'),(6,1,6,'North East Delhi','Active','2018-05-30 14:13:06','','no'),(7,1,6,'North West Delhi','Active','2018-05-30 14:13:17','','no'),(8,1,6,'South Delhi','Active','2018-05-30 14:13:33','','no'),(9,1,6,'South West Delhi','Active','2018-05-30 14:13:42','','no'),(10,1,6,'West Delhi','Active','2018-05-30 14:13:52','','yes'),(11,1,6,'Mayur Vihar North East','Active','2018-06-13 07:00:38','','yes'),(12,1,6,'South Extension','Active','2018-06-13 07:01:18','','yes'),(13,1,2,'Agra','Active','2018-07-07 11:53:19','','no'),(14,1,2,'Aligarh','Active','2018-07-07 11:53:38','','no');

/*Table structure for table `mast_tbl_countries` */

DROP TABLE IF EXISTS `mast_tbl_countries`;

CREATE TABLE `mast_tbl_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_countries` */

insert  into `mast_tbl_countries`(`country_id`,`country_name`,`status`,`created_at`,`updated_at`,`delStatus`) values (1,'India','Active','2018-05-30 08:16:07','','no'),(2,'Nepal','Active','2018-05-30 08:16:13','','no');

/*Table structure for table `mast_tbl_frequency` */

DROP TABLE IF EXISTS `mast_tbl_frequency`;

CREATE TABLE `mast_tbl_frequency` (
  `mast_frequency_id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mast_frequency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_frequency` */

insert  into `mast_tbl_frequency`(`mast_frequency_id`,`frequency_name`,`created_at`,`updated_at`,`status`,`delStatus`) values (2,'Immediate','2018-06-04 09:29:04',NULL,'Active','no'),(3,'After 1 month','2018-06-04 09:29:14','2018-06-04 09:29:43','Active','no'),(4,'After 1 Week','2018-06-04 09:29:25',NULL,'Active','no');

/*Table structure for table `mast_tbl_keyword` */

DROP TABLE IF EXISTS `mast_tbl_keyword`;

CREATE TABLE `mast_tbl_keyword` (
  `mst_key_id` int(11) NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mst_key_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_keyword` */

insert  into `mast_tbl_keyword`(`mst_key_id`,`key_name`,`created_at`,`updated_at`,`status`,`delStatus`) values (1,'COPPER PIPE TT','2018-07-21 08:24:19','2018-07-21 08:33:12','Active','yes'),(2,'REFRIGERATION GASES','2018-07-21 08:24:36',NULL,'Active','no'),(3,'COPPER PIPE','2018-07-21 08:24:49',NULL,'Active','no'),(4,'INSULATIONS PIPE & SHEETS','2018-07-21 08:24:58',NULL,'Active','no'),(5,'MOTORS','2018-07-21 08:25:06',NULL,'Active','no'),(6,'FANS','2018-07-21 08:25:15',NULL,'Active','no'),(7,'COMPRESSORS Test','2018-07-21 08:25:29',NULL,'Active','yes'),(8,'COMPRESSORS sfdfed','2018-07-21 08:25:54',NULL,'Active','yes'),(9,'COMPRESSORS','2018-07-21 08:28:26','2018-07-21 08:29:56','Active','no');

/*Table structure for table `mast_tbl_modepayment` */

DROP TABLE IF EXISTS `mast_tbl_modepayment`;

CREATE TABLE `mast_tbl_modepayment` (
  `mast_modepayment_id` int(11) NOT NULL AUTO_INCREMENT,
  `modepayment_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mast_modepayment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_modepayment` */

insert  into `mast_tbl_modepayment`(`mast_modepayment_id`,`modepayment_name`,`status`,`created_at`,`updated_at`,`delStatus`) values (1,'Cash','Active','2018-06-04 07:23:43','2018-06-04 08:44:16','no'),(2,'Cash On Delivery (COD)','Active','2018-06-04 07:54:51','2018-06-05 09:11:25','no'),(3,'Cash Advance (CA)','Active','2018-06-04 08:44:29','2018-06-04 08:45:53','no'),(4,'Cash in Advance(CIA)','Active','2018-06-04 08:46:13',NULL,'no'),(5,'Cheque','Active','2018-06-04 08:46:22',NULL,'no'),(6,'Cash Against Delivery(CAD)','Active','2018-06-04 08:47:30',NULL,'yes');

/*Table structure for table `mast_tbl_ownershiptype` */

DROP TABLE IF EXISTS `mast_tbl_ownershiptype`;

CREATE TABLE `mast_tbl_ownershiptype` (
  `mast_ownershiptype_id` int(11) NOT NULL AUTO_INCREMENT,
  `ownershiptype_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mast_ownershiptype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_ownershiptype` */

insert  into `mast_tbl_ownershiptype`(`mast_ownershiptype_id`,`ownershiptype_name`,`created_at`,`updated_at`,`status`,`delStatus`) values (1,'Private Ltd','2018-06-02 11:22:02','2018-07-02 09:13:54','Active','no'),(2,'Public Ltd','2018-06-02 11:22:07','2018-06-04 10:51:28','Active','no'),(3,'LLP Ltd','2018-06-02 11:22:12','2018-06-30 11:43:37','Active','no'),(4,'Partnership','2018-06-02 11:33:29','2018-06-02 13:37:32','Active','no'),(5,'Proprietorship','2018-06-02 11:33:33','2018-06-02 13:37:48','Active','no'),(6,'Other','2018-06-30 11:43:17',NULL,'Active','yes');

/*Table structure for table `mast_tbl_primarybussinesstype` */

DROP TABLE IF EXISTS `mast_tbl_primarybussinesstype`;

CREATE TABLE `mast_tbl_primarybussinesstype` (
  `mst_pbt_id` int(11) NOT NULL AUTO_INCREMENT,
  `pbt_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mst_pbt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_primarybussinesstype` */

insert  into `mast_tbl_primarybussinesstype`(`mst_pbt_id`,`pbt_name`,`created_at`,`updated_at`,`status`,`delStatus`) values (1,'Supplier 1','2018-07-02 07:33:29','2018-07-02 12:05:26','Active','yes'),(2,'Supplier !','2018-07-02 07:39:57','2018-07-02 12:12:13','Active','yes'),(3,'Supplier','2018-07-02 07:40:59','2018-07-02 08:06:42','Active','no'),(4,'Manufacture','2018-07-02 08:08:46','2018-07-02 12:12:00','Active','no'),(5,'Exporter','2018-07-02 12:13:33',NULL,'Active','no'),(6,'Importer','2018-07-02 12:13:44',NULL,'Active','no'),(7,'Distributor','2018-07-02 12:13:53',NULL,'Active','no'),(8,'Wholesaler','2018-07-02 12:14:05',NULL,'Active','no'),(9,'Retailer','2018-07-02 12:14:13',NULL,'Active','no'),(10,'Dealer','2018-07-02 12:14:20',NULL,'Active','no'),(11,'Service Provider','2018-07-02 12:14:26',NULL,'Active','no');

/*Table structure for table `mast_tbl_quantityunit` */

DROP TABLE IF EXISTS `mast_tbl_quantityunit`;

CREATE TABLE `mast_tbl_quantityunit` (
  `mst_qty_id` int(11) NOT NULL AUTO_INCREMENT,
  `qty_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `delStatus` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`mst_qty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_quantityunit` */

insert  into `mast_tbl_quantityunit`(`mst_qty_id`,`qty_name`,`created_at`,`updated_at`,`status`,`delStatus`) values (1,'Kilogram','2018-07-20 13:26:51','2018-07-20 13:39:29','Active','no'),(2,'Pieces','2018-07-20 13:26:58','2018-07-20 13:39:26','Active','no'),(3,'Units','2018-07-20 13:27:02',NULL,'Active','no'),(4,'Other','2018-07-20 13:52:36',NULL,'Active','no');

/*Table structure for table `mast_tbl_states` */

DROP TABLE IF EXISTS `mast_tbl_states`;

CREATE TABLE `mast_tbl_states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_states` */

insert  into `mast_tbl_states`(`state_id`,`country_id`,`state_name`,`status`,`created_at`,`updated_at`,`delStatus`) values (2,1,'Uttar Pradesh','Active','2018-05-30 08:37:22','2018-05-30 11:07:27','no'),(3,1,'Mumbai','Active','2018-05-30 08:37:43','2018-05-30 09:57:22','no'),(4,1,'Goa','Active','2018-05-30 10:52:17','','no'),(5,1,'Haryana (HR)','Active','2018-05-30 10:52:32','','no'),(6,1,'Delhi','Active','2018-05-30 10:56:07','','no');

/*Table structure for table `mast_tbl_subcategory` */

DROP TABLE IF EXISTS `mast_tbl_subcategory`;

CREATE TABLE `mast_tbl_subcategory` (
  `mast_subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_filename` varchar(255) DEFAULT NULL,
  `subcat_fullpath` varchar(255) DEFAULT NULL,
  `subcat_url` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `delDate` varchar(255) DEFAULT NULL,
  `delStatus` varchar(10) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `delIp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mast_subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `mast_tbl_subcategory` */

insert  into `mast_tbl_subcategory`(`mast_subcat_id`,`subcat_name`,`cat_id`,`subcat_filename`,`subcat_fullpath`,`subcat_url`,`created_at`,`updated_at`,`created_by`,`status`,`delDate`,`delStatus`,`subcat_id`,`delIp`) values (1,'Test Subcategory',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','test-subcategory','2018-06-22 14:12:56',NULL,'2','Active',NULL,'no',3,NULL),(2,'Sub-Category Test 3',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','sub-category-test-3','2018-06-22 14:13:17',NULL,'2','Active',NULL,'no',4,NULL),(3,'REFRIGERATION GASES',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','refrigeration-gases','2018-07-06 06:58:48',NULL,'2','Active',NULL,'no',5,NULL),(4,'COPPER PIPE',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','copper-pipe','2018-07-06 06:58:59',NULL,'2','Active',NULL,'no',6,NULL),(5,'INSULATIONS PIPE & SHEETS',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','insulations-pipe-and-sheets','2018-07-06 06:59:10',NULL,'2','Active',NULL,'no',7,NULL),(6,'MOTORS',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','motors','2018-07-06 06:59:24',NULL,'2','Active',NULL,'no',8,NULL),(7,'FANS',1,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','fans','2018-07-06 06:59:35',NULL,'2','Active',NULL,'no',9,NULL),(8,'SCROLL COMPRESSORS',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','scroll-compressors','2018-07-06 07:34:31',NULL,'2','Active',NULL,'no',10,NULL),(9,'EXPANSION VALVES',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','expansion-valves','2018-07-06 07:34:42',NULL,'2','Active',NULL,'no',11,NULL),(10,'FILTER DRIERS',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','filter-driers','2018-07-06 07:34:54',NULL,'2','Active',NULL,'no',12,NULL),(11,'TEMPERATURE CONTROLLERS',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','temperature-controllers','2018-07-06 07:35:09',NULL,'2','Active',NULL,'no',13,NULL),(12,'BALL VALVES',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','ball-valves','2018-07-06 07:35:20',NULL,'2','Active',NULL,'no',14,NULL),(13,'SOLENOIDE VALVE',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','solenoide-valve','2018-07-06 07:35:31',NULL,'2','Active',NULL,'no',15,NULL),(14,'VIBRATION ELIMINATORS',2,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','vibration-eliminators','2018-07-06 07:35:42',NULL,'2','Active',NULL,'no',16,NULL),(15,'SPLIT AIRCONDITIONERS',4,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','split-airconditioners','2018-07-06 07:36:15',NULL,'2','Active',NULL,'no',17,NULL),(16,'WINDOW AIR CONDITIONERS',4,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','window-air-conditioners','2018-07-06 07:36:26',NULL,'2','Active',NULL,'no',18,NULL),(17,'INVERTER AIR CONDITIONERS',4,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','inverter-air-conditioners','2018-07-06 07:36:39',NULL,'2','Active',NULL,'no',19,NULL),(18,'FLOOR STANDING AIR CONDITIONERS',4,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','floor-standing-air-conditioners','2018-07-06 07:36:50',NULL,'2','Active',NULL,'no',20,NULL),(19,'DUCTEABLE AIR CONDITIONERS',11,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','ducteable-air-conditioners','2018-07-06 07:37:15',NULL,'2','Active',NULL,'no',21,NULL),(20,'VRV COOLING SYSTEMS',11,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','vrv-cooling-systems','2018-07-06 07:37:24',NULL,'2','Active',NULL,'no',22,NULL),(21,'HVAC COOLING SYSTEMS',11,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','hvac-cooling-systems','2018-07-06 07:37:34',NULL,'2','Active',NULL,'no',23,NULL),(22,'CENTRAL AIR CONDITIONING PLANTS',11,'','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','central-air-conditioning-plants','2018-07-06 07:37:46',NULL,'2','Active',NULL,'no',24,NULL);

/*Table structure for table `tbl_additionaldetail` */

DROP TABLE IF EXISTS `tbl_additionaldetail`;

CREATE TABLE `tbl_additionaldetail` (
  `additionaldetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `companylogo` varchar(255) DEFAULT NULL,
  `companydescription` longtext,
  `modeofpayment` varchar(255) DEFAULT NULL,
  `workingdays` varchar(255) DEFAULT NULL,
  `businessstate` varchar(255) DEFAULT NULL,
  `businesscitie` varchar(255) DEFAULT NULL,
  `companyphoto` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `reguser_id` varchar(255) DEFAULT NULL,
  `reguser_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`additionaldetail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_additionaldetail` */

insert  into `tbl_additionaldetail`(`additionaldetail_id`,`companylogo`,`companydescription`,`modeofpayment`,`workingdays`,`businessstate`,`businesscitie`,`companyphoto`,`created_at`,`updated_at`,`status`,`reguser_id`,`reguser_type`) values (1,'female19.png','With the hair extension offered by us now you can stylize your hair and make it looks the way you always wanted. Through the Human Hair or Extension offered by us, you can go for a drastic makeover that will make you look stylish, trendy, classy and different. We are dealing with many types of Hair that includes Indian Human Hair, Remy Human Hair, Natural Human Hair, Human Hair Curly, Weft Hair, Remy Kinguis Hair, Raw Human Hair, Black Wave Hair, etc., and various extensions & accessories. These strands of hair are widely used in parlors and homes to add volume, temporary length and highlight to the hair. Our collection is the perfect way to give you a new and incredible hair style in a short time and without hassle. 72618_HOME1.jpg 72618_HOME2.jpg Our Team of Experts We are proud to be associated with many experienced and talented people. They assist us in catering to the styling needs of the customers with high quality.',NULL,'15','New Delhi','Mayur Vihar','logo3.png','2018-07-21 06:56:13',NULL,'Active','1','1');

/*Table structure for table `tbl_adminlogindetail` */

DROP TABLE IF EXISTS `tbl_adminlogindetail`;

CREATE TABLE `tbl_adminlogindetail` (
  `aid_detail` int(11) NOT NULL AUTO_INCREMENT,
  `admin_dob` varchar(255) NOT NULL,
  `admin_education` varchar(255) NOT NULL,
  `admin_location` varchar(255) NOT NULL,
  `admin_skill` varchar(255) NOT NULL,
  `admin_note` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`aid_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_adminlogindetail` */

insert  into `tbl_adminlogindetail`(`aid_detail`,`admin_dob`,`admin_education`,`admin_location`,`admin_skill`,`admin_note`,`created_at`,`updated_at`,`login_id`) values (1,'2018-05-24','MCA  in Computer Science from the University of Tennessee at Knoxville','Mayur Vihar Ph-2','Web Application Developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque','2018-05-24 08:35:11','',1);

/*Table structure for table `tbl_banner` */

DROP TABLE IF EXISTS `tbl_banner`;

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT 'optional',
  `filename` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT 'active,inactive',
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL COMMENT 'Created By',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_banner` */

insert  into `tbl_banner`(`banner_id`,`title`,`filename`,`filepath`,`status`,`created_at`,`updated_at`,`delStatus`,`created_by`) values (1,'Banner 1','phones-Copy1.png','C:/xampp/htdocs/Refigrationhub/uploads/banner/phones-Copy1.png','active','2018-07-26 09:43:57','2018-07-26 11:47:59','no','1'),(2,'VIN-IP-A17-96IBAR6','img2.jpg','C:/xampp/htdocs/Refigrationhub/uploads/banner/img2.jpg','active','2018-07-26 11:38:50','2018-07-26 11:55:29','no','2'),(3,'Banner 2','about.jpeg','C:/xampp/htdocs/Refigrationhub/uploads/banner/about.jpeg','inactive','2018-07-26 11:44:30','2018-07-26 11:48:08','no','1');

/*Table structure for table `tbl_businessdetail` */

DROP TABLE IF EXISTS `tbl_businessdetail`;

CREATE TABLE `tbl_businessdetail` (
  `businessdetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `country_id` varchar(255) DEFAULT NULL,
  `state_id` varchar(255) DEFAULT NULL,
  `city_id` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `alt_website` varchar(255) DEFAULT NULL,
  `yearofestablishment` varchar(255) DEFAULT NULL,
  `nofemployees` varchar(255) DEFAULT NULL,
  `annualturnover` varchar(255) DEFAULT NULL,
  `ownershipype` varchar(255) DEFAULT NULL,
  `gstin` varchar(255) DEFAULT NULL,
  `panno` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `reguser_id` int(11) DEFAULT NULL,
  `reguser_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`businessdetail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_businessdetail` */

insert  into `tbl_businessdetail`(`businessdetail_id`,`address`,`country_id`,`state_id`,`city_id`,`locality`,`zip_code`,`phone_number`,`alt_website`,`yearofestablishment`,`nofemployees`,`annualturnover`,`ownershipype`,`gstin`,`panno`,`created_at`,`updated_at`,`status`,`created_by`,`reguser_id`,`reguser_type`) values (1,'101 Chaudhary Market Mayur Vihar','1','2','13','Nepal-Border','110091','8882029116','www.google.com','2058','150','456000','1','1245AAsfddf1211','aydkl2343l','2018-07-19 14:11:19',NULL,'Active',NULL,1,'1'),(2,'101 Chaudhary Market Mayur Vihar','1','2','13','Ashok Nagar','272202','8882029116','www.tcs.com','2017','250','780000','2','gst000231454545','aydk2323l','2018-07-25 09:52:23',NULL,'Active',NULL,3,'1');

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `cat_name` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `meta_descr` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_keyword_descr` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cat_url` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  `delDate` varchar(255) DEFAULT NULL,
  `delIp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`cat_name`,`file_name`,`full_path`,`seo_title`,`meta_tag`,`meta_descr`,`cat_id`,`meta_keyword_descr`,`created_at`,`updated_at`,`status`,`cat_url`,`created_by`,`delStatus`,`delDate`,`delIp`) values ('Refrigeration Parts','compresor.png','C:/xampp/htdocs/Refigrationhub/uploads/category/compresor.png','','','',1,'','2018-06-09 13:06:55','2018-06-09 13:12:27','Active','refrigeration-parts','2','yes','2018-07-26 11:34:21','::1'),('Industrial Parts','scrollcompressor.png','C:/xampp/htdocs/Refigrationhub/uploads/category/scrollcompressor.png','','','',2,'','2018-06-09 13:07:48','2018-07-02 09:01:01','Active','industrial-parts','2','no',NULL,NULL),('Refrigerator','freezers.jpg','C:/xampp/htdocs/Refigrationhub/uploads/category/freezers.jpg','laralipsum laralipsum','laralipsum laralipsum','laralipsum laralipsum',3,'laralipsum laralipsum','2018-06-09 13:09:48','2018-07-02 08:53:36','Active','refrigerator','1','no',NULL,NULL),('Air Conditioners                   ','windowac1.jpg','C:/xampp/htdocs/Refigrationhub/uploads/category/windowac1.jpg','','','',4,'','2018-06-09 13:11:26','','Active','air-conditioners','2','no','2018-07-02 09:04:54','::1'),('Commercial Air  Conditioners         ','','C:/xampp/htdocs/Refigrationhub/uploads/category/','','','',11,'','2018-06-13 08:54:50','2018-07-06 07:38:57','Active','commercial-air-conditioners','2','no','2018-07-02 09:04:51','::1');

/*Table structure for table `tbl_certificationaward` */

DROP TABLE IF EXISTS `tbl_certificationaward`;

CREATE TABLE `tbl_certificationaward` (
  `certificationaward_id` int(11) NOT NULL AUTO_INCREMENT,
  `standardcertification` varchar(255) DEFAULT NULL,
  `membershipaffilliation` varchar(255) DEFAULT NULL,
  `uploadcertification` varchar(255) DEFAULT NULL,
  `awardrecognition` varchar(255) DEFAULT NULL,
  `uploadawardimage` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `reguser_id` varchar(255) DEFAULT NULL,
  `reguser_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`certificationaward_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_certificationaward` */

insert  into `tbl_certificationaward`(`certificationaward_id`,`standardcertification`,`membershipaffilliation`,`uploadcertification`,`awardrecognition`,`uploadawardimage`,`created_at`,`updated_at`,`status`,`reguser_id`,`reguser_type`) values (1,'q32321','Association Board','female15.png','Recognation Ards s','maxresdefault2.jpg','2018-07-21 07:07:21',NULL,'Active','1','1'),(2,'ISO2300123','Membership & Affilliations','img4.jpg','Award & Recognition','img2.jpg','2018-07-25 09:55:20',NULL,'Active','3','1');

/*Table structure for table `tbl_feedback` */

DROP TABLE IF EXISTS `tbl_feedback`;

CREATE TABLE `tbl_feedback` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_subject` varchar(255) DEFAULT NULL,
  `fb_name` varchar(255) DEFAULT NULL,
  `fb_mail` varchar(255) DEFAULT NULL,
  `fb_product` varchar(255) DEFAULT NULL,
  `fb_company` varchar(255) DEFAULT NULL,
  `fb_mob` varchar(255) DEFAULT NULL,
  `fb_message` text,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL COMMENT '1=unread 2=read',
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_feedback` */

/*Table structure for table `tbl_freeconsultation` */

DROP TABLE IF EXISTS `tbl_freeconsultation`;

CREATE TABLE `tbl_freeconsultation` (
  `fresonsult_id` int(11) NOT NULL AUTO_INCREMENT,
  `consultation` varchar(255) NOT NULL,
  `consultation_date` varchar(255) NOT NULL,
  `consultation_time` varchar(255) NOT NULL,
  `reguser_id` int(11) NOT NULL,
  PRIMARY KEY (`fresonsult_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_freeconsultation` */

insert  into `tbl_freeconsultation`(`fresonsult_id`,`consultation`,`consultation_date`,`consultation_time`,`reguser_id`) values (4,'yes','2018-06-21','12:00 pm to 02: 00 pm',13),(5,'yes','2018-06-23','02:00 pm to 04: 00 pm',14),(6,'yes','2018-06-22','02:00 pm to 04: 00 pm',0),(7,'yes','2018-06-13','08:00 am to 12: 00 pm',15),(8,'yes','2018-07-03','08:00 am to 12: 00 pm',16),(9,'yes','2018-07-17','12:00 pm to 02: 00 pm',2),(10,'yes','2018-07-26','04:00 pm to 06: 00 pm',4);

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `delStatus` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `privilege` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`id`,`name`,`mobile`,`username`,`password`,`user_type`,`created`,`status`,`delStatus`,`updated_at`,`privilege`) values (1,'Admin','8882029116','ajay@flawlessindia.in','$2y$10$Qe/fggaLpRI7kWvtZCXe5OEHYEGJSt4I687CUkLH2iui2ghpWIEJe','2','2018-06-01','1','no','2018-06-29 09:21:02','1 , 2 , 3 , 4'),(2,'Adminstration','8882029116','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi','1','2018-05-28','1','no','2018-06-21 07:10:44','1,2'),(3,'Ajay Kuamr','8882029116','ajaykan47@gmail.com','$2y$10$V33gNWSH9lexZ7CwKzH9QufUA1UHlXr9PiOucuIgnqxt0CSO5XWjC','2','2018-06-01','1','yes',NULL,'1,3'),(4,'Shyam','9456902819','shyam@flawlessindia.in','$2y$10$up9kaTRNIMfrZ/YnXfiI.uryE.kHvKygUxVGeh4fHfRkKN7QH5s3O','2','2018-06-01','1','no',NULL,'1 , 2 , 3 , 4'),(5,'Shakir','8956895689','shakir@flawlessindia.in','$2y$10$oVtrbMGlFv1gDoFeDF9CD.Q4Gh/B3hbp8aodQq4tmsChNmYfiPgxG','2','2018-06-01','1','no',NULL,'3 , 4'),(6,'Shakir','8882027116','shakir@flawlessindia.in','$2y$10$KBcvL8Ho2oua9i7w6hc6/eVMt9jdmggJNggDPMUhngu90g129jwku','2','2018-06-01','1','yes',NULL,'2 , 3'),(7,'Ajay Kuamr','8882029116','ajaykan47@gmail.com','$2y$10$CsMaIAJ1wBENN5ZCAlM13.NINSl5OBABMbAXfMfiJmR5dw/GzlYPe','2','2018-06-01','1','yes',NULL,'1,2'),(8,'Adminstration','8882029116','ajaykan47@gmail.com','$2y$10$NdU0sG1WlpP9BmT6EQ/1a.Ie4iOBeNXJ96NRSsEs4B2udDm6Hx/zO','2','2018-06-01','1','yes',NULL,'2,3'),(9,'Ajay Kuamr','8882029116','ajaykan47@gmail.com','$2y$10$dp9gWL2i21tLrRslusNHi.tAGithp3k3uZbXbHnrry/Rw/E6DSZ/K','2','2018-06-01','1','yes',NULL,'1,2'),(10,'Mortin','8882029116','subadmin@flawlessindia.in','$2y$10$NB.cJJRpOZKfnXCwr4OMPeUIJNL5S57zGAm5NQQ.G3bQTcfY1eB6a','3','2018-06-04','1','no',NULL,'8,9');

/*Table structure for table `tbl_loginhistory` */

DROP TABLE IF EXISTS `tbl_loginhistory`;

CREATE TABLE `tbl_loginhistory` (
  `logh_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_agent` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout_time` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`logh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_loginhistory` */

insert  into `tbl_loginhistory`(`logh_id`,`user_agent`,`user_type`,`ip_address`,`login_time`,`logout_time`,`username`,`password`) values (1,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-23 09:30:45','2018-07-26 12:54:31','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(2,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-23 12:30:58','2018-07-20 13:34:37','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(3,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:22:08','2018-06-01 10:07:17','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(4,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:22:28','2018-06-02 09:59:22','admin@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(5,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:23:07','','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(6,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:24:01','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(7,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:24:30','','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(8,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:25:27','','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(9,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:26:16','','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(10,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 07:26:35','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(11,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 12:28:58','','admin@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(12,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 12:29:10','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(13,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 12:29:19','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(14,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 12:29:34','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(15,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 12:30:42','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(16,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-24 12:31:08','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(17,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-25 06:15:40','','ajay@flawlessindia.in','724283bfae9c9f446acea523716dc0ef'),(18,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-25 06:15:54','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(19,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-25 07:24:12','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(20,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 07:14:26','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(21,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:06:19','','ajay@flawlessindia.in','$2y$10$jtWD.rG0eATEkYb/GUPzMevCqfn5GaOkgm3VheT3SAXjoO4RnAUKq'),(22,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:06:48','','ajaykan47@gmail.com','$2y$10$sPfEHzT1uczhM3PfueAEC.W50n/31bfCdunlDP8.HGAFZ9ZoaS1Iy'),(23,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:07:20','','ajaykan47@gmail.com','$2y$10$FSsr9G1eDkYiF/iyLZRMo.7HjwXCcQwOjC1gz2rMmjqEZUxX04Pra'),(24,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:09:00','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(25,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:21:35','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(26,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:23:21','','ajaykan47@gmail.com','e6e061838856bf47e1de730719fb2609'),(27,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:26:05','','admin@flawlessindia.in','f19b8dc2029cf707939e886e4b164681'),(28,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:26:36','','admin@flawlessindia.in','f19b8dc2029cf707939e886e4b164681'),(29,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:26:38','','','d41d8cd98f00b204e9800998ecf8427e'),(30,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:28:27','','ajay@flawlessindia.in','$2y$10$DiOBIP9PiiDd4Z7KAdCCSeSnj06b88GwZxtUu3fvwaxSX6Y8IsNcm'),(31,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:28:31','','','$2y$10$W0XMyDZw.5AeFiM.VTBjCOKZZPSxVRGs2nvhx1uaLC2n4205Hh7OK'),(32,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:28:32','','','$2y$10$bRLD/xGACzNlt3O1cE7ss.NhJ/2i8ZVJE3cCs5ZOlRuZuuyubbAl.'),(33,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:31:54','','ajay@flawlessindia.in','f19b8dc2029cf707939e886e4b164681'),(34,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:32:39','','ajay@flawlessindia.in','f19b8dc2029cf707939e886e4b164681'),(35,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:40:29','','ajay@flawlessindia.in','9d77e4643c0ed844edeb361f183b50fa'),(36,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:41:59','','ajay@flawlessindia.in','9d77e4643c0ed844edeb361f183b50fa'),(37,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-26 11:42:47','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(38,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:47:09','','ajay@flawlessindia.in','$2y$10$mhMziO.1UB40guCnfQMkrOj4tDVxVAqDUv5JMK7So16J7xD8FUHNK'),(39,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:47:22','','admin@flawlessindia.in','$2y$10$.e2Wh37I4eL5WfVL7N0auueTkVrpBNc2zPVKy7mAnTc5K/xvjfmg.'),(40,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:49:26','','ajay@flawlessindia.in','$2y$10$esI/Y0NPRRDCJTYsgTP4sOka2B5xLjlyC3nuZHo/O/tLEUxnTdrri'),(41,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:50:42','','ajay@flawlessindia.in','$2y$10$K3rhhrFbpZSzHUK0zTFhg.GcQjWgZHLJwdy8vcKw7hdBObZNt8EIa'),(42,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:51:19','','ajay@flawlessindia.in','$2y$10$eqvGirJUtvJgZkFHF3rRBeIoGhbyrwsTtXtHabv4j5zOZBNj0kEHy'),(43,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:51:28','','ajay@flawlessindia.in','$2y$10$yVOQZ3al4Vn0N/Uoa9.myO6AWiS/KFeP8/cDESF/5PIo7VkUnMlQC'),(44,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:51:38','','ajay@flawlessindia.in','$2y$10$6Rx9HBVQYIg79c.BSxk0b.GduvUh3RVrSjNilD.4RoP/bJrlN2kea'),(45,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:51:47','','ajay@flawlessindia.in','$2y$10$N2yTgWg2UkaJB3/f/vMedeDYlco4Axh7V5/LhBzvesxBiH.jVphSq'),(46,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:51:55','','ajay@flawlessindia.in','$2y$10$R.d/BGbjBWb2OXayN12RtugUAxgnmaCL0DwldQysiB/QOJKWhPXr2'),(47,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:52:11','','adminstration@flawlessindia.in','$2y$10$MXjQSRTC6qjHEIYS/4nez.vl7jBZIErEDTAZqaNfAVzxi9Z3Pemo6'),(48,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:52:20','','adminstration@flawlessindia.in','$2y$10$T2Tjru5Szls8IbqNYlCLderKVkzCWHAUEj9avS5/3xBYo.hNOsASy'),(49,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:52:29','','adminstration@flawlessindia.in','$2y$10$V4Cnph9AHEiAXiF019EFdunzko6AgjOCNztmTay7JYidtruLlkvWm'),(50,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:52:37','','adminstration@flawlessindia.in','$2y$10$3PdF./9u4VKNL8aFLkzgYu00pfOhfIVmuKL1L0nhQdcwebwKZtwA6'),(51,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:52:48','','adminstration@flawlessindia.in','$2y$10$hnH3qM4T0DhiXfepyRyE9OwY0iBtjSHcE7YhqTC59xePxR5qJ9MXG'),(52,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:56:58','','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(53,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:57:17','','ajay@flawlessindia.in','e6e061838856bf47e1de730719fb2609'),(54,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:59:50','','ajay@flawlessindia.in','$2y$10$zdo59YXEG9W1NxiYtht3uOohNIXiwi45y.JcDT4PfR474lWO3ABam'),(55,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 07:59:55','','ajay@flawlessindia.in','$2y$10$TjeKgSM68qm/K64K/w4zMu5nzFIjG2nKe1ekZO61ivuWpXpP1SlxW'),(56,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:00:26','','ajay@flawlessindia.in','$2y$10$lknmkl5ZPGu2LjYi/B.Co.ivlr0hECQl2U6suh9l9G.o7KuSw4uS6'),(57,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:00:48','','ajay@flawlessindia.in','$2y$10$NcpGZUQ.VdtdYWmMjy3fQOJgnjSM8O272WDVmQtEPYefELWEgy0qe'),(58,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:02:20','','ajay@flawlessindia.in','$2y$10$cESvG2fRnU7B92eSJeyeeO8sREPn.4k4cmTqMxWB9FQEnp73gudqm'),(59,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:02:27','','ajay@flawlessindia.in','$2y$10$XzYcUhJQgMjWNrD5WtvzVe5zdNSr7PNAQBTYnKaW.uy8hLlSuxDHG'),(60,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:03:41','','ajay@flawlessindia.in','$2y$10$R7hgiQqSBGMp1F8bQYBHuugiLnJbss8uUNZecJekuY7zEY5PNbJH.'),(61,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:05:54','','ajay@flawlessindia.in','$2y$10$tFzjfe1gqw/QexyW89tI4.P4bi0Glm8GTYrS6uQhfMA98AD4c8iG2'),(62,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:06:23','','ajay@flawlessindia.in','$2y$10$cmnux2MOfUdhYnZWHrTN1u6Tr0IG78xSez8YsfD1riPcKeY7zRNIG'),(63,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:07:16','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(64,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:56:39','','ajay@flawlessindia.in','$2y$10$woGhBdveg9KGYrmksGYvTuIgMGoZqTGtg.A9g55e9llZPj8Xpn73G'),(65,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:56:46','','ajay@flawlessindia.in','$2y$10$zuOz5SL0zsPsgAofAqxKM.GNY4UpFovDaa1wmrhVX2X4xP/KLALpG'),(66,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:58:32','','ajay@flawlessindia.in','ajay@flawlessindia.in'),(67,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:59:13','','ajay@flawlessindia.in','ajay@flawlessindia.in'),(68,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 08:59:52','','ajay@flawlessindia.in','$2y$10$RXzUrXoqP/WzP6UjCJW/wuiGldDMV1B8vOInMM8F6671Eb/Bt1bIa'),(69,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:04:36','','ajay@flawlessindia.in','$2y$10$aN0t1waxpSGBQOb.d.I85.cJVUS/ZDfMywYQH76YG.UeR0x/JEfQm'),(70,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:04:38','','','$2y$10$9cmlXe9IIepr0HXP7qZx2O/WoKC.NTebmfvfZ.zseb19j74.QRvx2'),(71,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:05:08','','ajay@flawlessindia.in','$2y$10$CSHPVdAXfWhuOgbgw9J4rO3rKjIw65ogpe1jJiKV/8Y5.CoMSnvPW'),(72,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:05:57','','ajay@flawlessindia.in','ajay@flawlessindia.in'),(73,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:06:40','','ajay@flawlessindia.in','ajay@flawlessindia.in'),(74,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:07:12','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(75,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:10:43','','ajay@flawlessindia.in','$2y$10$90l2d.sBSTb/L2EtbjS6te5TbBMP4SniZDaEEXBpCrVXx8hasmIUu'),(76,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:13:02','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(77,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:13:21','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(78,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','2','::1','2018-05-28 09:32:45','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(79,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','3','::1','2018-05-28 09:33:18','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(80,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:37:20','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(81,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:37:37','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(82,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:37:54','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(83,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:41:36','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(84,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 09:41:43','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(85,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','2','::1','2018-05-28 09:46:39','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(86,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:48:25','','ajat5@gmail.com','2801bd94f178957c3305fa9f678dd21a'),(87,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:48:36','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(88,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:49:04','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(89,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:49:19','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(90,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:49:25','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(91,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:49:39','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(92,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:50:11','','adminstration@flawlessindia.in','$2y$10$7ZG0B3ZYuBSBPdFd6.AbOenjlBZ4NuJXkZV82ZiVaQDCzHO7DAAs6'),(93,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-28 10:50:55','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(94,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-29 06:21:41','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(95,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-29 06:21:48','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(96,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-29 06:22:25','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(97,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-29 06:42:39','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(98,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-29 06:57:36','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(99,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-30 06:40:25','','ajay@flawlessindia.in','7e8703b75446d08feaa38aec99f3b299'),(100,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-05-30 07:14:01','','adminstration@flawlessindia.in','6bd8105938c3870cfd5bc2848c6649e6'),(101,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','1','::1','2018-06-02 09:59:28','','adminstration@flawlessindia.in','$2y$10$4Wk.qEX6oWdc4xCRPCPCs.yB3RuEyEhJroOicGRf3.4AfAOr7gEju'),(102,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-06-29 12:32:45','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi'),(103,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-02 07:40:48','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi'),(104,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-02 12:08:26','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi'),(105,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 13:15:39','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi'),(106,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 13:32:14','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi'),(107,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-21 09:45:54','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi'),(108,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-26 11:47:30','','adminstration@flawlessindia.in','$2y$10$uXRzsyrRU0Ijsp.0oHusoOzZCCfYADudmGM3FWpxBs0t5Txcd9wGi');

/*Table structure for table `tbl_logo` */

DROP TABLE IF EXISTS `tbl_logo`;

CREATE TABLE `tbl_logo` (
  `logo_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(255) DEFAULT NULL,
  `cmp_address` varchar(255) DEFAULT NULL,
  `cmp_cin` varchar(255) DEFAULT NULL,
  `cmp_tel` varchar(255) DEFAULT NULL,
  `cmp_fax` varchar(255) DEFAULT NULL,
  `cmp_logo` varchar(255) DEFAULT NULL,
  `cmp_logopath` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  KEY `logo_id` (`logo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logo` */

insert  into `tbl_logo`(`logo_id`,`cmp_name`,`cmp_address`,`cmp_cin`,`cmp_tel`,`cmp_fax`,`cmp_logo`,`cmp_logopath`,`created_at`,`updated_at`,`status`) values (1,'Refrigeration-Hub','                                    C - 1, Address, New Delhi (Delhi) - 110092 (India)                                ','U7000000000000000000000','05544215623','023569899','logo.png','C:/xampp/htdocs/Refigrationhub/uploads/logo/logo.png','2018-07-26 13:57:13','2018-07-26 14:16:28','inactive'),(2,'Refrigeration-Hub','                                                                        C - 1, Address, New Delhi (Delhi) - 110092 (India)                                                                ','U7000000000000000000000','05544215623','023569899','logo1.png','C:/xampp/htdocs/Refigrationhub/uploads/logo/logo1.png','2018-07-26 14:18:03','2018-07-26 14:26:04','inactive');

/*Table structure for table `tbl_postbyrequirement` */

DROP TABLE IF EXISTS `tbl_postbyrequirement`;

CREATE TABLE `tbl_postbyrequirement` (
  `pbr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pbr_productname` varchar(255) NOT NULL,
  `pbr_description` varchar(255) NOT NULL,
  `pbr_email` varchar(255) NOT NULL,
  `pbr_mobile` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `pbr_terms` varchar(250) NOT NULL,
  `pbr_ip` varchar(255) NOT NULL,
  PRIMARY KEY (`pbr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_postbyrequirement` */

insert  into `tbl_postbyrequirement`(`pbr_id`,`pbr_productname`,`pbr_description`,`pbr_email`,`pbr_mobile`,`created_at`,`updated_at`,`pbr_terms`,`pbr_ip`) values (1,'Internet Connection','Please Ignore This is Testing Mail.....','ajay@flawlessindia.in','8882029116','2018-06-13 14:16:57','','on','::1'),(2,'Internet Connection','Please Ignore This is Testing Mail.....','ajay@flawlessindia.in','8882029116','2018-06-13 14:17:40','','on','::1'),(3,'Internet Connection','Please Ignore This is Testing Mail.....','ajay@flawlessindia.in','8882029116','2018-06-13 14:21:47','','on','::1'),(4,'Internet Connection','Please Ignore this is Testing mail...','ajaykan47@gmail.com','8882029116','2018-06-14 06:50:13','','on','::1'),(5,'Internet Connection','Please ignore this is Testing mail..........','ajaykan47@gmail.com','8882029116','2018-06-14 07:36:54','','on','::1'),(6,'Internet Connection','Please ignore this is Testing mail..........','ajaykan47@gmail.com','8882029116','2018-06-14 07:37:24','','on','::1'),(7,'Testing','Please Ignore this is Testing mail.....','ajay@flawlessindia.in','8882029116','2018-06-14 07:41:04','','on','::1'),(8,'Internet Connection','','ajaykan47@gmail.com','8882029116','2018-06-14 07:45:10','','on','::1'),(9,'Internet Connection','Please Ignore This is Testing mail....','info@nmmarble.com','91-813-019-8995','2018-06-14 07:46:55','','on','::1'),(10,'Internet Connection','f sfrf','ajay@flawlessindia.in','8882029116','2018-06-14 08:47:52','','on','::1'),(11,'Internet Connection','12','info@nmmarble.com','8882029116','2018-06-14 09:01:30','','on','::1'),(12,'Internet Connection','Please Ignore Thisi is Testing Mail......','ajay@flawlessindia.in','8882029116','2018-06-14 09:03:43','','on','::1'),(13,'Internet Connection','S WETRE','info@nmmarble.com','9456902819','2018-06-14 09:05:19','','on','::1'),(14,'Internet Connection','SFSTR E','info@nmmarble.com','91-813-019-8995','2018-06-14 09:05:54','','on','::1'),(15,'Internet Connection','SF SD','info@nmmarble.com','91-813-019-8995','2018-06-14 09:06:54','','on','::1'),(16,'Internet Connection','','info@nmmarble.com','91-813-019-8995','2018-06-14 09:26:04','','on','::1'),(17,'Internet Connection','Please Ignore this is not Testing mail Please Reply as soon as Possible.........','admin@flawlessindia.in','8882029116','2018-06-14 09:34:47','','on','::1'),(18,'Mac book Air 14','I Need mac book Pro for business Purpose....','ajay@flawlessindia.in','8882029116','2018-06-18 06:31:22','','on','::1'),(19,'Internet Connection','Please Descripe Ypurt product','ajay@flawlessindia.in','8882029116','2018-06-18 11:23:40','','on','::1'),(20,'Internet Connection','Please Ignore Thisi si Testing Mial....','ajay@flawlessindia.in','8882029116','2018-06-21 07:53:29','','on','::1'),(21,'Soundbar Specker','I need Soundbar Specker for commercial  use','shakir@gmail.com','7845784578','2018-07-26 07:23:19','','on','::1');

/*Table structure for table `tbl_postbyrequirementdetail` */

DROP TABLE IF EXISTS `tbl_postbyrequirementdetail`;

CREATE TABLE `tbl_postbyrequirementdetail` (
  `pbrd_id` int(11) NOT NULL AUTO_INCREMENT,
  `pbrd_quantity` varchar(255) NOT NULL,
  `pbrd_quantityunit` varchar(255) NOT NULL,
  `pbrd_ordervalue` varchar(255) NOT NULL,
  `pbrd_suplierlocation` varchar(255) NOT NULL,
  `pbrd_requirementurgency` varchar(255) NOT NULL,
  `pbrd_requirementfrequency` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `pbr_id` int(11) NOT NULL,
  PRIMARY KEY (`pbrd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_postbyrequirementdetail` */

insert  into `tbl_postbyrequirementdetail`(`pbrd_id`,`pbrd_quantity`,`pbrd_quantityunit`,`pbrd_ordervalue`,`pbrd_suplierlocation`,`pbrd_requirementurgency`,`pbrd_requirementfrequency`,`created_at`,`updated_at`,`pbr_id`) values (1,'1','Pieces','10001|20000','Anywhere in India','After 1 month','','2018-06-14 08:48:00','',1),(2,'1','Pieces','10001|20000','Local','After 1 month','','2018-06-14 08:50:17','',1),(3,'','','','','','','2018-06-14 08:58:27','',1),(4,'1','Tons','10001|20000','Local','After 1 month','','2018-06-14 09:01:52','',9),(5,'1','Tons','50001|100000','Anywhere in India','Immediate','','2018-06-14 09:02:27','',9),(6,'12','Barrel','20001|50000','Anywhere in India','After 1 month','','2018-06-14 09:03:52','',1),(7,'1','20\' Container','100001|500000','Anywhere in India','After 1 month','','2018-06-14 09:05:28','',9),(8,'12','Barrels','100001|500000','Anywhere in India','After 1 Week','','2018-06-14 09:06:02','',9),(9,'12','Units','50001|100000','Local','Immediate','','2018-06-14 09:07:01','',9),(10,'12','20\' Container','','Anywhere in India','After 1 month','Monthly','2018-06-14 09:26:11','',9),(11,'13','Nos','10001|20000','Local','After 1 month','Quarterly','2018-06-14 09:34:57','',17),(12,'1','Pieces','10001|20000','Local','Immediate','One Time','2018-06-18 06:31:45','',1),(13,'1123','Nos','5000|10000','Local','Immediate','One Time','2018-06-18 11:25:27','',1),(14,'12','40\' Container','20001|50000','','Immediate','One Time','2018-06-21 07:53:45','',1),(15,'10','Bag','5000001|10000000','Anywhere in India','Immediate','One Time','2018-07-26 07:23:54','',21);

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(255) NOT NULL,
  `subcat_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

/*Table structure for table `tbl_productservicekeyword` */

DROP TABLE IF EXISTS `tbl_productservicekeyword`;

CREATE TABLE `tbl_productservicekeyword` (
  `pskey_id` int(11) NOT NULL AUTO_INCREMENT,
  `primarybusinesstype` varchar(255) DEFAULT NULL,
  `mainproduct` varchar(255) DEFAULT NULL,
  `manufacturerKeyword` varchar(255) DEFAULT NULL,
  `ExporterKeyword` varchar(255) DEFAULT NULL,
  `ImporterKeyword` varchar(255) DEFAULT NULL,
  `DistributorKeyword` varchar(255) DEFAULT NULL,
  `SupplierKeyword` varchar(255) DEFAULT NULL,
  `TraderKeyword` varchar(255) DEFAULT NULL,
  `WholesalerKeyword` varchar(255) DEFAULT NULL,
  `RetailerKeyword` varchar(255) DEFAULT NULL,
  `DealerKeyword` varchar(255) DEFAULT NULL,
  `ServiceKeyword` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `reguser_id` int(11) DEFAULT NULL,
  `reguser_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pskey_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_productservicekeyword` */

insert  into `tbl_productservicekeyword`(`pskey_id`,`primarybusinesstype`,`mainproduct`,`manufacturerKeyword`,`ExporterKeyword`,`ImporterKeyword`,`DistributorKeyword`,`SupplierKeyword`,`TraderKeyword`,`WholesalerKeyword`,`RetailerKeyword`,`DealerKeyword`,`ServiceKeyword`,`created_at`,`updated_at`,`reguser_id`,`reguser_type`) values (1,'Importer','REFRIGERATION GASES,COPPER PIPE,INSULATIONS PIPE & SHEETS','REFRIGERATION GASES,INSULATIONS PIPE & SHEETS,MOTORS,FANS','REFRIGERATION GASES,COPPER PIPE,INSULATIONS PIPE & SHEETS','null','null','COPPER PIPE,INSULATIONS PIPE & SHEETS','null','null','null','null','null','2018-07-25 11:32:01',NULL,3,'1');

/*Table structure for table `tbl_productwebuy` */

DROP TABLE IF EXISTS `tbl_productwebuy`;

CREATE TABLE `tbl_productwebuy` (
  `productwebuy_id` int(11) NOT NULL AUTO_INCREMENT,
  `requirement` longtext,
  `frequency_id` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `quantityunit` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `reguser_id` varchar(255) DEFAULT NULL,
  `reguser_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productwebuy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_productwebuy` */

insert  into `tbl_productwebuy`(`productwebuy_id`,`requirement`,`frequency_id`,`quantity`,`quantityunit`,`created_at`,`updated_at`,`status`,`reguser_id`,`reguser_type`) values (4,'Requirement RequirementRequirementRequirementRequirementRequirementRequirement','3','12','3','2018-07-25 09:55:53',NULL,NULL,'3','1'),(6,'Soundbar Required','2','12','1','2018-07-26 08:03:28',NULL,NULL,'1','1');

/*Table structure for table `tbl_reguser_loginhistory` */

DROP TABLE IF EXISTS `tbl_reguser_loginhistory`;

CREATE TABLE `tbl_reguser_loginhistory` (
  `reguserlh_id` int(11) NOT NULL AUTO_INCREMENT,
  `reguser_agent` varchar(255) DEFAULT NULL,
  `reguser_type` varchar(255) DEFAULT NULL,
  `reguser_ip_address` varchar(255) DEFAULT NULL,
  `reguser_logintime` varchar(255) DEFAULT NULL,
  `reguser_logouttime` varchar(255) DEFAULT NULL,
  `reguser_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reguserlh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_reguser_loginhistory` */

/*Table structure for table `tbl_seller` */

DROP TABLE IF EXISTS `tbl_seller`;

CREATE TABLE `tbl_seller` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_name` varchar(255) DEFAULT NULL,
  `seller_mobile` varchar(255) DEFAULT NULL,
  `seller_email` varchar(255) DEFAULT NULL,
  `seller_password` varchar(255) DEFAULT NULL,
  `seller_autouserna` varchar(255) DEFAULT NULL,
  `seller_autouserpass` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `delStatus` varchar(10) DEFAULT NULL,
  `seller_ip` varchar(255) DEFAULT NULL,
  `seller_useragent` varchar(255) DEFAULT NULL,
  `seller_activation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_seller` */

/*Table structure for table `tbl_sellerdetail` */

DROP TABLE IF EXISTS `tbl_sellerdetail`;

CREATE TABLE `tbl_sellerdetail` (
  `sellerdetail_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sellerdetail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sellerdetail` */

/*Table structure for table `tbl_subcategory` */

DROP TABLE IF EXISTS `tbl_subcategory`;

CREATE TABLE `tbl_subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_name` varchar(255) DEFAULT NULL,
  `subcat_filename` varchar(255) DEFAULT NULL,
  `subcat_fullpath` varchar(255) DEFAULT NULL,
  `subcat_url` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `delDate` varchar(255) DEFAULT NULL,
  `delStatus` varchar(10) DEFAULT NULL,
  `delIp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subcategory` */

insert  into `tbl_subcategory`(`subcat_id`,`cat_id`,`subcat_name`,`subcat_filename`,`subcat_fullpath`,`subcat_url`,`created_at`,`updated_at`,`created_by`,`status`,`delDate`,`delStatus`,`delIp`) values (1,1,'Subcategory',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,2,'Test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,1,'Test Subcategory','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','test-subcategory','2018-07-02 09:13:09',NULL,'1','Inactive','2018-07-02 09:12:08','no',''),(4,1,'COMPRESSORS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','compressors','2018-07-06 06:58:33',NULL,'2','Active',NULL,'no',NULL),(5,1,'REFRIGERATION GASES','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','refrigeration-gases','2018-07-06 06:58:48',NULL,'2','Active',NULL,'no',NULL),(6,1,'COPPER PIPE','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','copper-pipe','2018-07-06 06:58:59',NULL,'2','Active',NULL,'no',NULL),(7,1,'INSULATIONS PIPE & SHEETS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','insulations-pipe-and-sheets','2018-07-06 06:59:10',NULL,'2','Active',NULL,'no',NULL),(8,1,'MOTORS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','motors','2018-07-06 06:59:24',NULL,'2','Active',NULL,'no',NULL),(9,1,'FANS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','fans','2018-07-06 06:59:35',NULL,'2','Active',NULL,'no',NULL),(10,2,'SCROLL COMPRESSORS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','scroll-compressors','2018-07-06 07:34:31',NULL,'2','Active',NULL,'no',NULL),(11,2,'EXPANSION VALVES','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','expansion-valves','2018-07-06 07:34:42',NULL,'2','Active',NULL,'no',NULL),(12,2,'FILTER DRIERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','filter-driers','2018-07-06 07:34:54',NULL,'2','Active',NULL,'no',NULL),(13,2,'TEMPERATURE CONTROLLERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','temperature-controllers','2018-07-06 07:35:09',NULL,'2','Active',NULL,'no',NULL),(14,2,'BALL VALVES','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','ball-valves','2018-07-06 07:35:20',NULL,'2','Active',NULL,'no',NULL),(15,2,'SOLENOIDE VALVE','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','solenoide-valve','2018-07-06 07:35:31',NULL,'2','Active',NULL,'no',NULL),(16,2,'VIBRATION ELIMINATORS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','vibration-eliminators','2018-07-06 07:35:42',NULL,'2','Active',NULL,'no',NULL),(17,4,'SPLIT AIRCONDITIONERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','split-airconditioners','2018-07-06 07:36:15',NULL,'2','Active',NULL,'no',NULL),(18,4,'WINDOW AIR CONDITIONERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','window-air-conditioners','2018-07-06 07:36:26',NULL,'2','Active',NULL,'no',NULL),(19,4,'INVERTER AIR CONDITIONERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','inverter-air-conditioners','2018-07-06 07:36:39',NULL,'2','Active',NULL,'no',NULL),(20,4,'FLOOR STANDING AIR CONDITIONERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','floor-standing-air-conditioners','2018-07-06 07:36:49',NULL,'2','Active',NULL,'no',NULL),(21,11,'DUCTEABLE AIR CONDITIONERS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','ducteable-air-conditioners','2018-07-06 07:37:15',NULL,'2','Active',NULL,'no',NULL),(22,11,'VRV COOLING SYSTEMS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','vrv-cooling-systems','2018-07-06 07:37:24',NULL,'2','Active',NULL,'no',NULL),(23,11,'HVAC COOLING SYSTEMS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','hvac-cooling-systems','2018-07-06 07:37:33',NULL,'2','Active',NULL,'no',NULL),(24,11,'CENTRAL AIR CONDITIONING PLANTS','','C:/xampp/htdocs/Refigrationhub/uploads/subcategory/','central-air-conditioning-plants','2018-07-06 07:37:45',NULL,'2','Active',NULL,'no',NULL);

/*Table structure for table `tbl_subscribetoselltradealerts` */

DROP TABLE IF EXISTS `tbl_subscribetoselltradealerts`;

CREATE TABLE `tbl_subscribetoselltradealerts` (
  `subriSlart_id` int(11) NOT NULL AUTO_INCREMENT,
  `subriSlart_keyword` varchar(255) DEFAULT NULL,
  `subriSlart_name` varchar(255) DEFAULT NULL,
  `subriSlart_email` varchar(255) DEFAULT NULL,
  `subriSlart_mob` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `cf1` varchar(255) DEFAULT NULL,
  `cf2` varchar(255) DEFAULT NULL,
  `cf3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`subriSlart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subscribetoselltradealerts` */

insert  into `tbl_subscribetoselltradealerts`(`subriSlart_id`,`subriSlart_keyword`,`subriSlart_name`,`subriSlart_email`,`subriSlart_mob`,`created_at`,`updated_at`,`status`,`cf1`,`cf2`,`cf3`) values (1,NULL,NULL,'no','Active','2018-06-21 09:00:35',NULL,NULL,NULL,NULL,NULL),(2,'Laptop,Mobile','Ajay Kumar','ajay@flawlessindia.in','8882029116','2018-06-21 09:37:09',NULL,NULL,NULL,NULL,NULL),(3,'Testing, testing,','Ajay Kumar','ajay@flawlessindia.in','8852029116','2018-06-21 09:58:29',NULL,NULL,NULL,NULL,NULL),(4,'Shoes, clothes, split ac','Mortin','morting@gmail.com','7845124578','2018-06-22 06:24:04',NULL,NULL,NULL,NULL,NULL),(5,'fdfd','Ajay Kumar','ajay@flawlessindia.in','8882029116','2018-06-22 06:42:33',NULL,NULL,NULL,NULL,NULL),(6,'df df','Ajay Kumar','aj212ay@flawlessindia.in','8882029116','2018-06-29 08:17:21',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_userregistration` */

DROP TABLE IF EXISTS `tbl_userregistration`;

CREATE TABLE `tbl_userregistration` (
  `reguser_id` int(11) NOT NULL AUTO_INCREMENT,
  `reguser_mail` varchar(255) DEFAULT NULL,
  `resuser_password` varchar(355) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  `reguser_type` varchar(255) NOT NULL COMMENT '1=seller,2=buyer',
  `reguser_opt` varchar(255) NOT NULL,
  PRIMARY KEY (`reguser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_userregistration` */

insert  into `tbl_userregistration`(`reguser_id`,`reguser_mail`,`resuser_password`,`status`,`created_at`,`updated_at`,`delStatus`,`reguser_type`,`reguser_opt`) values (1,'ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.','Active','2018-07-07 06:57:42',NULL,'no','1','666201'),(2,'amit@flawlessindia.in','$2y$10$pKHtSkL2JjGJ769IFiSute8ojEVZwVIH0UvyE/bA7v6O/nzNMSv/C','Active','2018-07-07 07:09:35',NULL,'no','1','618259'),(3,'ganesh@gmail.com','$2y$10$rzROYqudJhqsMF.FiqF5c.RZocZ7QASAcS3RccjtRkDGeFoZf1Dqi','Active','2018-07-25 09:48:10',NULL,'no','1','237788'),(4,'aakashsharma@gmail.com','$2y$10$fzb./GF99/AjiNIHrjanC.GoqxoYlxFUcV4wjTTGGmDy20bcrT11W','Active','2018-07-26 08:18:57',NULL,'no','1','232759');

/*Table structure for table `tbl_userregistrationdetail` */

DROP TABLE IF EXISTS `tbl_userregistrationdetail`;

CREATE TABLE `tbl_userregistrationdetail` (
  `reguserd_id` int(11) NOT NULL AUTO_INCREMENT,
  `auto_genratename` varchar(255) NOT NULL,
  `auto_genratepass` varchar(255) NOT NULL,
  `reguser_mobile` varchar(255) NOT NULL,
  `reguser_altmobile` varchar(255) DEFAULT NULL,
  `reguser_title` varchar(255) DEFAULT NULL,
  `reguser_name` varchar(255) NOT NULL,
  `reguser_pin_code` varchar(255) NOT NULL,
  `reguser_city_name` varchar(255) NOT NULL,
  `reguser_company` varchar(255) NOT NULL,
  `reguser_altemail` varchar(255) DEFAULT NULL,
  `reguser_designation` varchar(255) DEFAULT NULL,
  `reguser_agent` varchar(255) NOT NULL,
  `reguser_ip` varchar(255) NOT NULL,
  `reguser_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`reguserd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_userregistrationdetail` */

insert  into `tbl_userregistrationdetail`(`reguserd_id`,`auto_genratename`,`auto_genratepass`,`reguser_mobile`,`reguser_altmobile`,`reguser_title`,`reguser_name`,`reguser_pin_code`,`reguser_city_name`,`reguser_company`,`reguser_altemail`,`reguser_designation`,`reguser_agent`,`reguser_ip`,`reguser_id`,`created_at`,`updated_at`) values (1,'autouser-1','autouser-20180707065742','08882029116','9456902819','Mr','Morting','110091','New Delhi','Flawlessindia.in','aja213y@flawlessindia.in','Web Developer','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','::1',1,'2018-07-07 06:57:42',''),(2,'autouser-2','autouser-20180707070935','8882029116',NULL,NULL,'Ajay Kumar','272203','New Delhi','TCS',NULL,NULL,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','::1',2,'2018-07-07 07:09:35',''),(3,'autouser-3','autouser-20180725094810','8956895623','','Mr','Ganesh','272203','New Delhi','TCS','','Graphics Designer','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','::1',3,'2018-07-25 09:48:10',''),(4,'autouser-4','autouser-20180726081857','7845784578',NULL,NULL,'Aakash','110097','Noida','Wipro',NULL,NULL,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','::1',4,'2018-07-26 08:18:57','');

/*Table structure for table `tbl_userregloginhistory` */

DROP TABLE IF EXISTS `tbl_userregloginhistory`;

CREATE TABLE `tbl_userregloginhistory` (
  `reglogh_id` int(11) NOT NULL AUTO_INCREMENT,
  `reguser_agent` varchar(255) NOT NULL,
  `reguser_type` varchar(255) NOT NULL,
  `regip_address` varchar(255) NOT NULL,
  `reglogin_time` varchar(255) NOT NULL,
  `reglogout_time` varchar(255) NOT NULL,
  `reguser_name` varchar(255) NOT NULL,
  `reguser_password` varchar(255) NOT NULL,
  PRIMARY KEY (`reglogh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_userregloginhistory` */

insert  into `tbl_userregloginhistory`(`reglogh_id`,`reguser_agent`,`reguser_type`,`regip_address`,`reglogin_time`,`reglogout_time`,`reguser_name`,`reguser_password`) values (1,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-07 07:23:53','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(2,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-07 07:46:10','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(3,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-09 06:51:04','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(4,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-09 11:14:42','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(5,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-09 11:24:15','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(6,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-09 13:05:16','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(7,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-09 13:23:50','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(8,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-09 13:25:29','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(9,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-18 07:56:40','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(10,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-18 09:03:30','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(11,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-19 07:49:38','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(12,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 06:53:27','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(13,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 06:57:49','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(14,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 13:44:02','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(15,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 14:56:20','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(16,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 14:57:30','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(17,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-20 14:58:45','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(18,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-21 06:37:09','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(19,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-21 09:55:09','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(20,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-21 14:03:30','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(21,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-24 13:25:17','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(22,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-25 07:26:48','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(23,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-25 09:09:52','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(24,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-25 09:12:32','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.'),(25,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-25 09:50:53','','ganesh@gmail.com','$2y$10$rzROYqudJhqsMF.FiqF5c.RZocZ7QASAcS3RccjtRkDGeFoZf1Dqi'),(26,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','1','::1','2018-07-26 07:27:00','','ajay@flawlessindia.in','$2y$10$/t1G83F5yrX2EZpdlNsoSOAFePyuHFt6oceAQT9qc/pwSrQZDdij.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
