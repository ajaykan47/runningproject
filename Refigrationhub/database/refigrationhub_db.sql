-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 02:03 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refigrationhub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_category`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_category` (
  `cat_name` varchar(765) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `mast_cat_id` int(11) NOT NULL,
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
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_category`
--

INSERT INTO `mast_tbl_category` (`cat_name`, `file_name`, `full_path`, `mast_cat_id`, `seo_title`, `meta_tag`, `meta_descr`, `meta_keyword_descr`, `created_at`, `updated_at`, `status`, `cat_url`, `created_by`, `delStatus`, `cat_id`) VALUES
('Refrigeration Parts', 'compresor.png', 'C:/xampp/htdocs/Refigrationhub/uploads/category/compresor.png', 1, '', '', '', '', '2018-06-09 13:06:56', '2018-06-09 13:12:28', 'Active', 'refrigeration-parts', '2', 'no', 1),
('Industrial Parts', 'scrollcompressor.png', 'C:/xampp/htdocs/Refigrationhub/uploads/category/scrollcompressor.png', 2, '', '', '', '', '2018-06-09 13:07:48', NULL, 'Active', 'industrial-parts', '2', 'no', 2),
('Refrigerator', 'freezers.jpg', 'C:/xampp/htdocs/Refigrationhub/uploads/category/freezers.jpg', 3, '', '', '', '', '2018-06-09 13:09:48', NULL, 'Active', 'refrigerator', '2', 'no', 3),
('Air Conditioners                   ', 'windowac1.jpg', 'C:/xampp/htdocs/Refigrationhub/uploads/category/windowac1.jpg', 4, '', '', '', '', '2018-06-09 13:11:26', NULL, 'Active', 'air-conditioners', '2', 'no', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_cities`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_cities` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `delStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_cities`
--

INSERT INTO `mast_tbl_cities` (`city_id`, `country_id`, `state_id`, `city_name`, `status`, `created_at`, `updated_at`, `delStatus`) VALUES
(1, 1, 3, 'Gorakhpur', 'Active', '2018-05-30 14:09:30', '2018-05-30 14:34:14', 'no'),
(2, 1, 6, 'Central Delhi', 'Active', '2018-05-30 14:12:05', '', 'no'),
(3, 1, 6, 'East Delhi', 'Active', '2018-05-30 14:12:31', '', 'no'),
(4, 1, 0, 'New Delhi', 'Active', '2018-05-30 14:12:42', '', 'no'),
(5, 1, 6, 'North Delhi', 'Active', '2018-05-30 14:12:52', '', 'no'),
(6, 1, 6, 'North East Delhi', 'Active', '2018-05-30 14:13:06', '', 'no'),
(7, 1, 6, 'North West Delhi', 'Active', '2018-05-30 14:13:17', '', 'no'),
(8, 1, 6, 'South Delhi', 'Active', '2018-05-30 14:13:33', '', 'no'),
(9, 1, 6, 'South West Delhi', 'Active', '2018-05-30 14:13:42', '', 'no'),
(10, 1, 6, 'West Delhi', 'Active', '2018-05-30 14:13:52', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_countries`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `delStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_countries`
--

INSERT INTO `mast_tbl_countries` (`country_id`, `country_name`, `status`, `created_at`, `updated_at`, `delStatus`) VALUES
(1, 'India', 'Active', '2018-05-30 08:16:07', '', 'no'),
(2, 'Nepal', 'Active', '2018-05-30 08:16:13', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_frequency`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_frequency` (
  `mast_frequency_id` int(11) NOT NULL,
  `frequency_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_frequency`
--

INSERT INTO `mast_tbl_frequency` (`mast_frequency_id`, `frequency_name`, `created_at`, `updated_at`, `status`, `delStatus`) VALUES
(1, '1 Month 2', '2018-06-04 09:17:17', '2018-06-04 09:21:50', 'Active', 'yes'),
(2, 'Immediate', '2018-06-04 09:29:04', NULL, 'Active', 'no'),
(3, 'After 1 month', '2018-06-04 09:29:14', '2018-06-04 09:29:43', 'Active', 'no'),
(4, 'After 1 Week', '2018-06-04 09:29:25', NULL, 'Active', 'no'),
(5, 'Sd sr aww653', '2018-06-04 09:29:51', '2018-06-04 09:29:56', 'Active', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_modepayment`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_modepayment` (
  `mast_modepayment_id` int(11) NOT NULL,
  `modepayment_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_modepayment`
--

INSERT INTO `mast_tbl_modepayment` (`mast_modepayment_id`, `modepayment_name`, `status`, `created_at`, `updated_at`, `delStatus`) VALUES
(1, 'Cash', 'Active', '2018-06-04 07:23:43', '2018-06-04 08:44:16', 'no'),
(2, 'Cash On Delivery (COD)', 'Active', '2018-06-04 07:54:51', '2018-06-05 09:11:25', 'no'),
(3, 'Cash Advance (CA)', 'Active', '2018-06-04 08:44:29', '2018-06-04 08:45:53', 'no'),
(4, 'Cash in Advance(CIA)', 'Active', '2018-06-04 08:46:13', NULL, 'no'),
(5, 'Cheque', 'Active', '2018-06-04 08:46:22', NULL, 'no'),
(6, 'Cash Against Delivery(CAD)', 'Active', '2018-06-04 08:47:30', NULL, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_ownershiptype`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_ownershiptype` (
  `mast_ownershiptype_id` int(11) NOT NULL,
  `ownershiptype_name` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_ownershiptype`
--

INSERT INTO `mast_tbl_ownershiptype` (`mast_ownershiptype_id`, `ownershiptype_name`, `created_at`, `updated_at`, `status`, `delStatus`) VALUES
(1, 'Private Ltd', '2018-06-02 11:22:02', '2018-06-04 09:27:11', 'Active', 'no'),
(2, 'Public Ltd', '2018-06-02 11:22:07', '2018-06-04 10:51:28', 'Active', 'no'),
(3, 'LLC Ltd', '2018-06-02 11:22:12', '2018-06-04 06:37:52', 'Inactive', 'no'),
(4, 'Partnership', '2018-06-02 11:33:29', '2018-06-02 13:37:32', 'Active', 'no'),
(5, 'Proprietorship', '2018-06-02 11:33:33', '2018-06-02 13:37:48', 'Active', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_states`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_states` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `delStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mast_tbl_states`
--

INSERT INTO `mast_tbl_states` (`state_id`, `country_id`, `state_name`, `status`, `created_at`, `updated_at`, `delStatus`) VALUES
(2, 1, 'Uttar Pradesh', 'Active', '2018-05-30 08:37:22', '2018-05-30 11:07:27', 'no'),
(3, 1, 'Mumbai', 'Active', '2018-05-30 08:37:43', '2018-05-30 09:57:22', 'no'),
(4, 1, 'Goa', 'Active', '2018-05-30 10:52:17', '', 'no'),
(5, 1, 'Haryana (HR)', 'Active', '2018-05-30 10:52:32', '', 'no'),
(6, 1, 'Delhi', 'Active', '2018-05-30 10:56:07', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mast_tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `mast_tbl_subcategory` (
  `mast_subcat_id` int(11) NOT NULL,
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
  `delIp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_additionaldetail`
--

CREATE TABLE IF NOT EXISTS `tbl_additionaldetail` (
  `additionaldetail_id` int(11) NOT NULL,
  `companylogo` varchar(255) DEFAULT NULL,
  `companydescription` varchar(255) DEFAULT NULL,
  `modeofpayment` varchar(255) DEFAULT NULL,
  `workingdays` varchar(255) DEFAULT NULL,
  `businessstate` varchar(255) DEFAULT NULL,
  `businesscitie` varchar(255) DEFAULT NULL,
  `companyphoto` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogindetail`
--

CREATE TABLE IF NOT EXISTS `tbl_adminlogindetail` (
  `aid_detail` int(11) NOT NULL,
  `admin_dob` varchar(255) NOT NULL,
  `admin_education` varchar(255) NOT NULL,
  `admin_location` varchar(255) NOT NULL,
  `admin_skill` varchar(255) NOT NULL,
  `admin_note` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminlogindetail`
--

INSERT INTO `tbl_adminlogindetail` (`aid_detail`, `admin_dob`, `admin_education`, `admin_location`, `admin_skill`, `admin_note`, `created_at`, `updated_at`, `login_id`) VALUES
(1, '2018-05-24', 'MCA  in Computer Science from the University of Tennessee at Knoxville', 'Mayur Vihar Ph-2', 'Web Application Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque', '2018-05-24 08:35:11', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businessdetail`
--

CREATE TABLE IF NOT EXISTS `tbl_businessdetail` (
  `businessdetail_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
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
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_name` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `meta_descr` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `meta_keyword_descr` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cat_url` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  `delDate` varchar(255) DEFAULT NULL,
  `delIp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_name`, `file_name`, `full_path`, `seo_title`, `meta_tag`, `meta_descr`, `cat_id`, `meta_keyword_descr`, `created_at`, `updated_at`, `status`, `cat_url`, `created_by`, `delStatus`, `delDate`, `delIp`) VALUES
('Refrigeration Parts', 'compresor.png', 'C:/xampp/htdocs/Refigrationhub/uploads/category/compresor.png', '', '', '', 1, '', '2018-06-09 13:06:55', '2018-06-09 13:12:27', 'Active', 'refrigeration-parts', '2', 'no', NULL, NULL),
('Industrial Parts', 'scrollcompressor.png', 'C:/xampp/htdocs/Refigrationhub/uploads/category/scrollcompressor.png', '', '', '', 2, '', '2018-06-09 13:07:48', '', 'Active', 'industrial-parts', '2', 'no', NULL, NULL),
('Refrigerator', 'freezers.jpg', 'C:/xampp/htdocs/Refigrationhub/uploads/category/freezers.jpg', '', '', '', 3, '', '2018-06-09 13:09:48', '', 'Active', 'refrigerator', '2', 'no', NULL, NULL),
('Air Conditioners                   ', 'windowac1.jpg', 'C:/xampp/htdocs/Refigrationhub/uploads/category/windowac1.jpg', '', '', '', 4, '', '2018-06-09 13:11:26', '', 'Active', 'air-conditioners', '2', 'no', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificationaward`
--

CREATE TABLE IF NOT EXISTS `tbl_certificationaward` (
  `certificationaward_id` int(11) NOT NULL,
  `standardcertification` varchar(255) DEFAULT NULL,
  `membershipaffilliation` varchar(255) DEFAULT NULL,
  `uploadcertification` varchar(255) DEFAULT NULL,
  `awardrecognition` varchar(255) DEFAULT NULL,
  `uploadawardimage` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `delStatus` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `privilege` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `name`, `mobile`, `username`, `password`, `user_type`, `created`, `status`, `delStatus`, `updated_at`, `privilege`) VALUES
(1, 'Admin', '8882029116', 'ajay@flawlessindia.in', '$2y$10$WZvq0W/eevqKwgARd01Cl.Z8W56vM.sj3uU8PeEkEHQzbYTgIYsmi', '2', '2018-06-01', '1', 'no', '2018-06-02 09:59:44', '1 , 2 , 3 , 4'),
(2, 'Adminstration', '8882029116', 'adminstration@flawlessindia.in', '$2y$10$4Wk.qEX6oWdc4xCRPCPCs.yB3RuEyEhJroOicGRf3.4AfAOr7gEju', '1', '2018-05-28', '1', 'no', '2018-06-01 08:49:11', '1,2'),
(3, 'Ajay Kuamr', '8882029116', 'ajaykan47@gmail.com', '$2y$10$V33gNWSH9lexZ7CwKzH9QufUA1UHlXr9PiOucuIgnqxt0CSO5XWjC', '2', '2018-06-01', '1', 'yes', NULL, '1,3'),
(4, 'Shyam', '9456902819', 'shyam@flawlessindia.in', '$2y$10$up9kaTRNIMfrZ/YnXfiI.uryE.kHvKygUxVGeh4fHfRkKN7QH5s3O', '2', '2018-06-01', '1', 'no', NULL, '1 , 2 , 3 , 4'),
(5, 'Shakir', '8956895689', 'shakir@flawlessindia.in', '$2y$10$oVtrbMGlFv1gDoFeDF9CD.Q4Gh/B3hbp8aodQq4tmsChNmYfiPgxG', '2', '2018-06-01', '1', 'no', NULL, '3 , 4'),
(6, 'Shakir', '8882027116', 'shakir@flawlessindia.in', '$2y$10$KBcvL8Ho2oua9i7w6hc6/eVMt9jdmggJNggDPMUhngu90g129jwku', '2', '2018-06-01', '1', 'yes', NULL, '2 , 3'),
(7, 'Ajay Kuamr', '8882029116', 'ajaykan47@gmail.com', '$2y$10$CsMaIAJ1wBENN5ZCAlM13.NINSl5OBABMbAXfMfiJmR5dw/GzlYPe', '2', '2018-06-01', '1', 'yes', NULL, '1,2'),
(8, 'Adminstration', '8882029116', 'ajaykan47@gmail.com', '$2y$10$NdU0sG1WlpP9BmT6EQ/1a.Ie4iOBeNXJ96NRSsEs4B2udDm6Hx/zO', '2', '2018-06-01', '1', 'yes', NULL, '2,3'),
(9, 'Ajay Kuamr', '8882029116', 'ajaykan47@gmail.com', '$2y$10$dp9gWL2i21tLrRslusNHi.tAGithp3k3uZbXbHnrry/Rw/E6DSZ/K', '2', '2018-06-01', '1', 'yes', NULL, '1,2'),
(10, 'Mortin', '8882029116', 'subadmin@flawlessindia.in', '$2y$10$NB.cJJRpOZKfnXCwr4OMPeUIJNL5S57zGAm5NQQ.G3bQTcfY1eB6a', '3', '2018-06-04', '1', 'no', NULL, '8,9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loginhistory`
--

CREATE TABLE IF NOT EXISTS `tbl_loginhistory` (
  `logh_id` int(11) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout_time` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loginhistory`
--

INSERT INTO `tbl_loginhistory` (`logh_id`, `user_agent`, `user_type`, `ip_address`, `login_time`, `logout_time`, `username`, `password`) VALUES
(1, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-23 09:30:45', '2018-05-30 14:39:56', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(2, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-23 12:30:58', '2018-05-30 14:39:50', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(3, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:22:08', '2018-06-01 10:07:17', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(4, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:22:28', '2018-06-02 09:59:22', 'admin@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(5, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:23:07', '', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(6, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:24:01', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(7, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:24:30', '', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(8, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:25:27', '', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(9, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:26:16', '', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(10, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 07:26:35', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(11, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 12:28:58', '', 'admin@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(12, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 12:29:10', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(13, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 12:29:19', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(14, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 12:29:34', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(15, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 12:30:42', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(16, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-24 12:31:08', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(17, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-25 06:15:40', '', 'ajay@flawlessindia.in', '724283bfae9c9f446acea523716dc0ef'),
(18, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-25 06:15:54', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(19, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-25 07:24:12', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(20, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 07:14:26', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(21, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:06:19', '', 'ajay@flawlessindia.in', '$2y$10$jtWD.rG0eATEkYb/GUPzMevCqfn5GaOkgm3VheT3SAXjoO4RnAUKq'),
(22, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:06:48', '', 'ajaykan47@gmail.com', '$2y$10$sPfEHzT1uczhM3PfueAEC.W50n/31bfCdunlDP8.HGAFZ9ZoaS1Iy'),
(23, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:07:20', '', 'ajaykan47@gmail.com', '$2y$10$FSsr9G1eDkYiF/iyLZRMo.7HjwXCcQwOjC1gz2rMmjqEZUxX04Pra'),
(24, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:09:00', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(25, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:21:35', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(26, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:23:21', '', 'ajaykan47@gmail.com', 'e6e061838856bf47e1de730719fb2609'),
(27, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:26:05', '', 'admin@flawlessindia.in', 'f19b8dc2029cf707939e886e4b164681'),
(28, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:26:36', '', 'admin@flawlessindia.in', 'f19b8dc2029cf707939e886e4b164681'),
(29, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:26:38', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(30, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:28:27', '', 'ajay@flawlessindia.in', '$2y$10$DiOBIP9PiiDd4Z7KAdCCSeSnj06b88GwZxtUu3fvwaxSX6Y8IsNcm'),
(31, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:28:31', '', '', '$2y$10$W0XMyDZw.5AeFiM.VTBjCOKZZPSxVRGs2nvhx1uaLC2n4205Hh7OK'),
(32, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:28:32', '', '', '$2y$10$bRLD/xGACzNlt3O1cE7ss.NhJ/2i8ZVJE3cCs5ZOlRuZuuyubbAl.'),
(33, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:31:54', '', 'ajay@flawlessindia.in', 'f19b8dc2029cf707939e886e4b164681'),
(34, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:32:39', '', 'ajay@flawlessindia.in', 'f19b8dc2029cf707939e886e4b164681'),
(35, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:40:29', '', 'ajay@flawlessindia.in', '9d77e4643c0ed844edeb361f183b50fa'),
(36, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:41:59', '', 'ajay@flawlessindia.in', '9d77e4643c0ed844edeb361f183b50fa'),
(37, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-26 11:42:47', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(38, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:47:09', '', 'ajay@flawlessindia.in', '$2y$10$mhMziO.1UB40guCnfQMkrOj4tDVxVAqDUv5JMK7So16J7xD8FUHNK'),
(39, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:47:22', '', 'admin@flawlessindia.in', '$2y$10$.e2Wh37I4eL5WfVL7N0auueTkVrpBNc2zPVKy7mAnTc5K/xvjfmg.'),
(40, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:49:26', '', 'ajay@flawlessindia.in', '$2y$10$esI/Y0NPRRDCJTYsgTP4sOka2B5xLjlyC3nuZHo/O/tLEUxnTdrri'),
(41, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:50:42', '', 'ajay@flawlessindia.in', '$2y$10$K3rhhrFbpZSzHUK0zTFhg.GcQjWgZHLJwdy8vcKw7hdBObZNt8EIa'),
(42, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:51:19', '', 'ajay@flawlessindia.in', '$2y$10$eqvGirJUtvJgZkFHF3rRBeIoGhbyrwsTtXtHabv4j5zOZBNj0kEHy'),
(43, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:51:28', '', 'ajay@flawlessindia.in', '$2y$10$yVOQZ3al4Vn0N/Uoa9.myO6AWiS/KFeP8/cDESF/5PIo7VkUnMlQC'),
(44, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:51:38', '', 'ajay@flawlessindia.in', '$2y$10$6Rx9HBVQYIg79c.BSxk0b.GduvUh3RVrSjNilD.4RoP/bJrlN2kea'),
(45, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:51:47', '', 'ajay@flawlessindia.in', '$2y$10$N2yTgWg2UkaJB3/f/vMedeDYlco4Axh7V5/LhBzvesxBiH.jVphSq'),
(46, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:51:55', '', 'ajay@flawlessindia.in', '$2y$10$R.d/BGbjBWb2OXayN12RtugUAxgnmaCL0DwldQysiB/QOJKWhPXr2'),
(47, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:52:11', '', 'adminstration@flawlessindia.in', '$2y$10$MXjQSRTC6qjHEIYS/4nez.vl7jBZIErEDTAZqaNfAVzxi9Z3Pemo6'),
(48, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:52:20', '', 'adminstration@flawlessindia.in', '$2y$10$T2Tjru5Szls8IbqNYlCLderKVkzCWHAUEj9avS5/3xBYo.hNOsASy'),
(49, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:52:29', '', 'adminstration@flawlessindia.in', '$2y$10$V4Cnph9AHEiAXiF019EFdunzko6AgjOCNztmTay7JYidtruLlkvWm'),
(50, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:52:37', '', 'adminstration@flawlessindia.in', '$2y$10$3PdF./9u4VKNL8aFLkzgYu00pfOhfIVmuKL1L0nhQdcwebwKZtwA6'),
(51, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:52:48', '', 'adminstration@flawlessindia.in', '$2y$10$hnH3qM4T0DhiXfepyRyE9OwY0iBtjSHcE7YhqTC59xePxR5qJ9MXG'),
(52, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:56:58', '', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(53, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:57:17', '', 'ajay@flawlessindia.in', 'e6e061838856bf47e1de730719fb2609'),
(54, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:59:50', '', 'ajay@flawlessindia.in', '$2y$10$zdo59YXEG9W1NxiYtht3uOohNIXiwi45y.JcDT4PfR474lWO3ABam'),
(55, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 07:59:55', '', 'ajay@flawlessindia.in', '$2y$10$TjeKgSM68qm/K64K/w4zMu5nzFIjG2nKe1ekZO61ivuWpXpP1SlxW'),
(56, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:00:26', '', 'ajay@flawlessindia.in', '$2y$10$lknmkl5ZPGu2LjYi/B.Co.ivlr0hECQl2U6suh9l9G.o7KuSw4uS6'),
(57, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:00:48', '', 'ajay@flawlessindia.in', '$2y$10$NcpGZUQ.VdtdYWmMjy3fQOJgnjSM8O272WDVmQtEPYefELWEgy0qe'),
(58, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:02:20', '', 'ajay@flawlessindia.in', '$2y$10$cESvG2fRnU7B92eSJeyeeO8sREPn.4k4cmTqMxWB9FQEnp73gudqm'),
(59, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:02:27', '', 'ajay@flawlessindia.in', '$2y$10$XzYcUhJQgMjWNrD5WtvzVe5zdNSr7PNAQBTYnKaW.uy8hLlSuxDHG'),
(60, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:03:41', '', 'ajay@flawlessindia.in', '$2y$10$R7hgiQqSBGMp1F8bQYBHuugiLnJbss8uUNZecJekuY7zEY5PNbJH.'),
(61, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:05:54', '', 'ajay@flawlessindia.in', '$2y$10$tFzjfe1gqw/QexyW89tI4.P4bi0Glm8GTYrS6uQhfMA98AD4c8iG2'),
(62, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:06:23', '', 'ajay@flawlessindia.in', '$2y$10$cmnux2MOfUdhYnZWHrTN1u6Tr0IG78xSez8YsfD1riPcKeY7zRNIG'),
(63, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:07:16', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(64, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:56:39', '', 'ajay@flawlessindia.in', '$2y$10$woGhBdveg9KGYrmksGYvTuIgMGoZqTGtg.A9g55e9llZPj8Xpn73G'),
(65, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:56:46', '', 'ajay@flawlessindia.in', '$2y$10$zuOz5SL0zsPsgAofAqxKM.GNY4UpFovDaa1wmrhVX2X4xP/KLALpG'),
(66, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:58:32', '', 'ajay@flawlessindia.in', 'ajay@flawlessindia.in'),
(67, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:59:13', '', 'ajay@flawlessindia.in', 'ajay@flawlessindia.in'),
(68, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 08:59:52', '', 'ajay@flawlessindia.in', '$2y$10$RXzUrXoqP/WzP6UjCJW/wuiGldDMV1B8vOInMM8F6671Eb/Bt1bIa'),
(69, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:04:36', '', 'ajay@flawlessindia.in', '$2y$10$aN0t1waxpSGBQOb.d.I85.cJVUS/ZDfMywYQH76YG.UeR0x/JEfQm'),
(70, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:04:38', '', '', '$2y$10$9cmlXe9IIepr0HXP7qZx2O/WoKC.NTebmfvfZ.zseb19j74.QRvx2'),
(71, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:05:08', '', 'ajay@flawlessindia.in', '$2y$10$CSHPVdAXfWhuOgbgw9J4rO3rKjIw65ogpe1jJiKV/8Y5.CoMSnvPW'),
(72, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:05:57', '', 'ajay@flawlessindia.in', 'ajay@flawlessindia.in'),
(73, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:06:40', '', 'ajay@flawlessindia.in', 'ajay@flawlessindia.in'),
(74, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:07:12', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(75, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:10:43', '', 'ajay@flawlessindia.in', '$2y$10$90l2d.sBSTb/L2EtbjS6te5TbBMP4SniZDaEEXBpCrVXx8hasmIUu'),
(76, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:13:02', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(77, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:13:21', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(78, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2', '::1', '2018-05-28 09:32:45', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(79, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '3', '::1', '2018-05-28 09:33:18', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(80, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:37:20', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(81, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:37:37', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(82, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:37:54', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(83, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:41:36', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(84, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 09:41:43', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(85, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '2', '::1', '2018-05-28 09:46:39', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(86, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:48:25', '', 'ajat5@gmail.com', '2801bd94f178957c3305fa9f678dd21a'),
(87, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:48:36', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(88, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:49:04', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(89, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:49:19', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(90, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:49:25', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(91, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:49:39', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(92, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:50:11', '', 'adminstration@flawlessindia.in', '$2y$10$7ZG0B3ZYuBSBPdFd6.AbOenjlBZ4NuJXkZV82ZiVaQDCzHO7DAAs6'),
(93, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-28 10:50:55', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(94, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-29 06:21:41', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(95, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-29 06:21:48', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(96, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-29 06:22:25', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(97, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-29 06:42:39', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(98, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-29 06:57:36', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(99, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-30 06:40:25', '', 'ajay@flawlessindia.in', '7e8703b75446d08feaa38aec99f3b299'),
(100, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-05-30 07:14:01', '', 'adminstration@flawlessindia.in', '6bd8105938c3870cfd5bc2848c6649e6'),
(101, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '1', '::1', '2018-06-02 09:59:28', '', 'adminstration@flawlessindia.in', '$2y$10$4Wk.qEX6oWdc4xCRPCPCs.yB3RuEyEhJroOicGRf3.4AfAOr7gEju');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productwebuy`
--

CREATE TABLE IF NOT EXISTS `tbl_productwebuy` (
  `productwebuy_id` int(11) NOT NULL,
  `requirement` text,
  `frequency_id` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `quantityunit` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE IF NOT EXISTS `tbl_seller` (
  `seller_id` int(11) NOT NULL,
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
  `seller_activation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sellerdetail`
--

CREATE TABLE IF NOT EXISTS `tbl_sellerdetail` (
  `sellerdetail_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `subcat_id` int(11) NOT NULL,
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
  `delIp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregistration`
--

CREATE TABLE IF NOT EXISTS `tbl_userregistration` (
  `reguser_id` int(11) NOT NULL,
  `reguser_mail` varchar(255) DEFAULT NULL,
  `resuser_password` varchar(255) DEFAULT NULL,
  `reguser_mobile` varchar(255) DEFAULT NULL,
  `reguser_name` varchar(255) DEFAULT NULL,
  `reguser_pin_code` varchar(255) DEFAULT NULL,
  `reguser_city_name` varchar(255) DEFAULT NULL,
  `reguser_company` varchar(255) DEFAULT NULL,
  `auto_genratename` varchar(255) DEFAULT NULL,
  `auto_genratepass` varchar(255) DEFAULT NULL,
  `reguser_agent` varchar(255) DEFAULT NULL,
  `reguser_ip` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `delStatus` varchar(255) DEFAULT NULL,
  `reguser_type` varchar(255) NOT NULL COMMENT '1=gust,2=seller,3=buyer',
  `reguser_opt` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userregistration`
--

INSERT INTO `tbl_userregistration` (`reguser_id`, `reguser_mail`, `resuser_password`, `reguser_mobile`, `reguser_name`, `reguser_pin_code`, `reguser_city_name`, `reguser_company`, `auto_genratename`, `auto_genratepass`, `reguser_agent`, `reguser_ip`, `status`, `created_at`, `updated_at`, `delStatus`, `reguser_type`, `reguser_opt`) VALUES
(1, 'ajay@flawlessindia.in', '$2y$10$n.Cm/XxhcT5Dyn8/ZI6E9..MCdkUDRfbfUdBn9mC.7hyM2SRSVxg.', '8882029116', 'Ajay', '110091', 'New Delhi', 'Flawless India Infotech Pvt Ltd.', 'autouser-20180609013650', 'autouser-20180609013650', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', '::1', 'Active', '2018-06-09 13:36:50', NULL, 'no', '1', '456295');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregloginhistory`
--

CREATE TABLE IF NOT EXISTS `tbl_userregloginhistory` (
  `reglogh_id` int(11) NOT NULL,
  `reguser_agent` varchar(255) NOT NULL,
  `reguser_type` varchar(255) NOT NULL,
  `regip_address` varchar(255) NOT NULL,
  `reglogin_time` varchar(255) NOT NULL,
  `reglogout_time` varchar(255) NOT NULL,
  `reguser_name` varchar(255) NOT NULL,
  `reguser_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mast_tbl_category`
--
ALTER TABLE `mast_tbl_category`
  ADD PRIMARY KEY (`mast_cat_id`);

--
-- Indexes for table `mast_tbl_cities`
--
ALTER TABLE `mast_tbl_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `mast_tbl_countries`
--
ALTER TABLE `mast_tbl_countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `mast_tbl_frequency`
--
ALTER TABLE `mast_tbl_frequency`
  ADD PRIMARY KEY (`mast_frequency_id`);

--
-- Indexes for table `mast_tbl_modepayment`
--
ALTER TABLE `mast_tbl_modepayment`
  ADD PRIMARY KEY (`mast_modepayment_id`);

--
-- Indexes for table `mast_tbl_ownershiptype`
--
ALTER TABLE `mast_tbl_ownershiptype`
  ADD PRIMARY KEY (`mast_ownershiptype_id`);

--
-- Indexes for table `mast_tbl_states`
--
ALTER TABLE `mast_tbl_states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `mast_tbl_subcategory`
--
ALTER TABLE `mast_tbl_subcategory`
  ADD PRIMARY KEY (`mast_subcat_id`);

--
-- Indexes for table `tbl_additionaldetail`
--
ALTER TABLE `tbl_additionaldetail`
  ADD PRIMARY KEY (`additionaldetail_id`);

--
-- Indexes for table `tbl_adminlogindetail`
--
ALTER TABLE `tbl_adminlogindetail`
  ADD PRIMARY KEY (`aid_detail`);

--
-- Indexes for table `tbl_businessdetail`
--
ALTER TABLE `tbl_businessdetail`
  ADD PRIMARY KEY (`businessdetail_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_certificationaward`
--
ALTER TABLE `tbl_certificationaward`
  ADD PRIMARY KEY (`certificationaward_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loginhistory`
--
ALTER TABLE `tbl_loginhistory`
  ADD PRIMARY KEY (`logh_id`);

--
-- Indexes for table `tbl_productwebuy`
--
ALTER TABLE `tbl_productwebuy`
  ADD PRIMARY KEY (`productwebuy_id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tbl_sellerdetail`
--
ALTER TABLE `tbl_sellerdetail`
  ADD PRIMARY KEY (`sellerdetail_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_userregistration`
--
ALTER TABLE `tbl_userregistration`
  ADD PRIMARY KEY (`reguser_id`);

--
-- Indexes for table `tbl_userregloginhistory`
--
ALTER TABLE `tbl_userregloginhistory`
  ADD PRIMARY KEY (`reglogh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mast_tbl_category`
--
ALTER TABLE `mast_tbl_category`
  MODIFY `mast_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mast_tbl_cities`
--
ALTER TABLE `mast_tbl_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mast_tbl_countries`
--
ALTER TABLE `mast_tbl_countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mast_tbl_frequency`
--
ALTER TABLE `mast_tbl_frequency`
  MODIFY `mast_frequency_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mast_tbl_modepayment`
--
ALTER TABLE `mast_tbl_modepayment`
  MODIFY `mast_modepayment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mast_tbl_ownershiptype`
--
ALTER TABLE `mast_tbl_ownershiptype`
  MODIFY `mast_ownershiptype_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mast_tbl_states`
--
ALTER TABLE `mast_tbl_states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mast_tbl_subcategory`
--
ALTER TABLE `mast_tbl_subcategory`
  MODIFY `mast_subcat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_additionaldetail`
--
ALTER TABLE `tbl_additionaldetail`
  MODIFY `additionaldetail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_adminlogindetail`
--
ALTER TABLE `tbl_adminlogindetail`
  MODIFY `aid_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_businessdetail`
--
ALTER TABLE `tbl_businessdetail`
  MODIFY `businessdetail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_certificationaward`
--
ALTER TABLE `tbl_certificationaward`
  MODIFY `certificationaward_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_loginhistory`
--
ALTER TABLE `tbl_loginhistory`
  MODIFY `logh_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `tbl_productwebuy`
--
ALTER TABLE `tbl_productwebuy`
  MODIFY `productwebuy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sellerdetail`
--
ALTER TABLE `tbl_sellerdetail`
  MODIFY `sellerdetail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_userregistration`
--
ALTER TABLE `tbl_userregistration`
  MODIFY `reguser_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_userregloginhistory`
--
ALTER TABLE `tbl_userregloginhistory`
  MODIFY `reglogh_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
