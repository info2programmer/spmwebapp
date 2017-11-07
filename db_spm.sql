-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2017 at 01:52 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spm`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_supervisor`
--

DROP TABLE IF EXISTS `auth_supervisor`;
CREATE TABLE IF NOT EXISTS `auth_supervisor` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `supervisor_id` int(11) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `working_days` int(11) DEFAULT NULL,
  `factory_location` varchar(255) NOT NULL,
  `factory_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `org_password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_supervisor`
--

INSERT INTO `auth_supervisor` (`record_id`, `supervisor_id`, `from_date`, `to_date`, `working_days`, `factory_location`, `factory_name`, `mobile_number`, `password`, `org_password`, `last_login`, `status`, `create_date`) VALUES
(4, 3, '2017-09-18', '2017-09-30', 13, 'kolkata', 'KBS', '9654789652', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 0, '2017-09-18 10:46:18'),
(5, 3, '2017-10-01', '2017-10-15', 15, 'kaliyaganj', 'MMS', '9654789652', 'eb61eead90e3b899c6bcbe27ac581660', 'HELLO', '2017-09-18 17:56:25', 1, '2017-09-18 11:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id_auto` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `emp_id` varchar(255) DEFAULT NULL,
  `image` text,
  `father_name` varchar(255) DEFAULT NULL,
  `mob_no` varchar(255) DEFAULT NULL,
  `phn_no` varchar(255) DEFAULT NULL,
  `bld_grp` varchar(255) DEFAULT NULL,
  `rltv_phn` varchar(255) DEFAULT NULL,
  `frnd_phn` varchar(255) DEFAULT NULL,
  `adhar_no` varchar(255) DEFAULT NULL,
  `voter_id` varchar(255) DEFAULT NULL,
  `pan_card` varchar(255) DEFAULT NULL,
  `epf_no` varchar(255) DEFAULT NULL,
  `uan_no` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `refrnce` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `acc_name` varchar(255) DEFAULT NULL,
  `acc_no` varchar(255) DEFAULT NULL,
  `ifc_cose` varchar(255) DEFAULT NULL,
  `micr_code` varchar(255) DEFAULT NULL,
  `join_date` varchar(255) DEFAULT NULL,
  `base_sal` varchar(255) DEFAULT NULL,
  `emp_epf` varchar(255) DEFAULT NULL,
  `emp_esi` varchar(255) DEFAULT NULL,
  `house_rent` varchar(255) DEFAULT NULL,
  `tot_sal` varchar(255) DEFAULT NULL,
  `increment_date` varchar(255) DEFAULT NULL,
  `inc_rate` varchar(255) DEFAULT NULL,
  `nxt_inc` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `contractor_name` varchar(255) DEFAULT NULL,
  `plant_name` varchar(255) DEFAULT NULL,
  `regno` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `maritial_status` varchar(255) DEFAULT NULL,
  `spouse_details` varchar(255) DEFAULT NULL,
  `no_of_children` varchar(255) DEFAULT NULL,
  `edu_qualification` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `convicted` varchar(255) DEFAULT NULL,
  `convicted_details` text,
  `dl` varchar(255) DEFAULT NULL,
  `pasport` varchar(255) DEFAULT NULL,
  `other_details` text,
  `identification_mark` varchar(255) DEFAULT NULL,
  `other_disease` varchar(255) DEFAULT NULL,
  `medical_certificate` varchar(255) DEFAULT NULL,
  `emargency_contact_person` varchar(255) DEFAULT NULL,
  `emargency_contact_relation` varchar(255) DEFAULT NULL,
  `emargency_contact_no` varchar(255) DEFAULT NULL,
  `emargency_contact_address` varchar(255) DEFAULT NULL,
  `par_vill` varchar(255) DEFAULT NULL,
  `par_ps` varchar(255) DEFAULT NULL,
  `par_pin` varchar(255) DEFAULT NULL,
  `par_dis` varchar(255) DEFAULT NULL,
  `pre_vill` varchar(255) DEFAULT NULL,
  `pre_ps` varchar(255) DEFAULT NULL,
  `pre_dis` varchar(255) DEFAULT NULL,
  `pre_pin` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `assign_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`emp_id_auto`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id_auto`, `fname`, `lname`, `emp_id`, `image`, `father_name`, `mob_no`, `phn_no`, `bld_grp`, `rltv_phn`, `frnd_phn`, `adhar_no`, `voter_id`, `pan_card`, `epf_no`, `uan_no`, `dob`, `refrnce`, `bank`, `branch`, `acc_name`, `acc_no`, `ifc_cose`, `micr_code`, `join_date`, `base_sal`, `emp_epf`, `emp_esi`, `house_rent`, `tot_sal`, `increment_date`, `inc_rate`, `nxt_inc`, `area`, `category`, `contractor_name`, `plant_name`, `regno`, `email`, `age`, `religion`, `maritial_status`, `spouse_details`, `no_of_children`, `edu_qualification`, `language`, `convicted`, `convicted_details`, `dl`, `pasport`, `other_details`, `identification_mark`, `other_disease`, `medical_certificate`, `emargency_contact_person`, `emargency_contact_relation`, `emargency_contact_no`, `emargency_contact_address`, `par_vill`, `par_ps`, `par_pin`, `par_dis`, `pre_vill`, `pre_ps`, `pre_dis`, `pre_pin`, `mother_name`, `assign_status`) VALUES
(1, 'John ', 'Cena', 'EMP001', 'imgres15033132491505307672.png', 'Jack Cena', '9800261025', '850924520', 'B+', '9547856321', '7563214569', '456123456123456457', 'WB45245524', 'PANYJ5852', '294369124264032', '98243298462938462934', '09/10/2007', 'n/a', 'SBI', 'US', '', '45632146632145632448', 'SBIN00012336', '665', '2015-07-13', '15000', '120', '1200', '500', '20000', '2017-09-22', '500', '2017-09-30', 'US', 'SKILLED', 'Lorem', 'Ipsum', 'SPM/EMP/1', 'cena.john@gmail.com', '10', 'Hindu', 'unmarried', 'n/a', 'n/a', 'BA', 'Bengali', 'No', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '', 'Mark Doe', 'Brother', '7896541236', '123 Demo Street, London , US', '123 Demo Street', 'CA', '654785', 'US', '123 Demo Street', 'CA', 'US', '654785', '', 1),
(2, 'Harry', 'Potter', 'EMP002', 'images15047657181505460815.jpg', 'NIMAI KANJILAL', '9800261025', '850924520', 'B+', '9547856321', '7563214569', '456123456123456457', 'WB45245524', 'PANYJ5852', '294369124264032', '98243298462938462934', '09/11/2007', 'N/A', 'SBI', 'US', 'Harry Potter', '1234566776544', 'SBIN00012336', '665', '2013-05-09', '15000', '120', '1200', '500', '20000', '2017-12-15', '500', '2017-12-15', 'US', 'SKILLED', 'Lorem Ipsum', 'Ipsum', 'SPM/EMP/2', 'potter.harry@gmail.com', '10', 'Hindu', 'married', 'n/a', 'n/a', 'BA', 'English', 'No', '', 'n/a', 'n/a', 'n/a', 'n/a', 'N/A', 'Yes', 'Mark Doe', 'Brother', '7896541236', '123 Demo Street', '123 Demo Street', 'CA', '654785', 'US', '123 Demo Street', 'CA', 'US', '654785', 'Marry Cena', 1),
(3, 'Makhan', 'Biswas', 'EMP003', 'imgres150331324915053076721505711662.png', 'NIMAI KANJILAL', '9547763998', '9800261032', 'B+', '9547856321', '7563214569', '456123456123456457', 'WB45245524', 'PANYJ5852', '294369124264032', '98243298462938462934', '09/10/1995', 'N/A', 'SBI', 'US', 'John cena', '987456321456', 'SBIN00012336', '9874', '2017-09-20', '12500', '200', '1200', '500', '20000', '2017-09-19', '500', '2017-09-30', 'US', 'SUPERVISOR', 'Debobrata Saha', 'Hubliya', 'SPM/EMP/3', 'makhan@gmail.com', '22', 'Hindu', 'unmarried', '', '', 'BA', 'Bengali', 'No', '', 'n/a', 'n/a', 'n/a', 'n/a', '', 'Yes', 'adsad', 'Brother', '7896541236', '', '123 Demo Street', 'CA', '654785', 'US', '123 Demo Street', 'CA', 'US', '654785', 'Marry Cena', 1),
(4, 'John ', 'Cena', 'EMP004', 'imgres15033132491505307672.png', 'Jack Cena', '9800261025', '850924520', 'B+', '9547856321', '7563214569', '456123456123456457', 'WB45245524', 'PANYJ5852', '294369124264032', '98243298462938462934', '09/10/2007', 'n/a', 'SBI', 'US', '', '45632146632145632448', 'SBIN00012336', '665', '2015-07-13', '15000', '120', '1200', '500', '20000', '2017-09-22', '500', '2017-09-30', 'US', 'SKILLED', 'Lorem', 'Ipsum', 'SPM/EMP/1', 'cena.john@gmail.com', '10', 'Hindu', 'unmarried', 'n/a', 'n/a', 'BA', 'Bengali', 'No', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '', 'Mark Doe', 'Brother', '7896541236', '123 Demo Street, London , US', '123 Demo Street', 'CA', '654785', 'US', '123 Demo Street', 'CA', 'US', '654785', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `half_day` int(11) NOT NULL,
  `full_day` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `current_time` time NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`record_id`, `employee_id`, `half_day`, `full_day`, `current_date`, `current_time`) VALUES
(1, 2, 0, 1, '2017-09-18', '17:03:25'),
(2, 1, 1, 0, '2017-09-18', '17:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_factory`
--

DROP TABLE IF EXISTS `tbl_factory`;
CREATE TABLE IF NOT EXISTS `tbl_factory` (
  `factory_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `factory_name` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`factory_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_factory`
--

INSERT INTO `tbl_factory` (`factory_id`, `location`, `factory_name`, `full_address`, `pin`, `phone_number`, `email_address`, `contact_person`, `mobile_number`, `status`) VALUES
(1, 'kolkata', 'KBS', 'Garia', '700055', '9874563214', 'kbsgroup@gmail.com', 'Syamal Kundu', '9874563216', 1),
(2, 'kaliyaganj', 'MMS', 'Kaliyaganj, U/D', '733129', '9654789652', 'mms@gmail.com', 'BB Basak', '3214569874', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_assign`
--

DROP TABLE IF EXISTS `tbl_work_assign`;
CREATE TABLE IF NOT EXISTS `tbl_work_assign` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `supervisor_id` int(11) NOT NULL,
  `factory_location` varchar(255) NOT NULL,
  `factory_name` varchar(255) NOT NULL,
  `from_dare` date NOT NULL,
  `to_date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `assign_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `release_date` date DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work_assign`
--

INSERT INTO `tbl_work_assign` (`record_id`, `supervisor_id`, `factory_location`, `factory_name`, `from_dare`, `to_date`, `employee_id`, `status`, `assign_date`, `release_date`) VALUES
(1, 3, 'kolkata', 'KBS', '2017-09-17', '2017-09-21', 2, 0, '2017-09-15 15:20:25', '2017-09-15'),
(2, 3, 'kolkata', 'KBS', '2017-09-17', '2017-09-21', 1, 0, '2017-09-15 15:20:25', '2017-09-15'),
(3, 3, 'kaliyaganj', 'MMS', '2017-09-16', '2017-09-20', 2, 0, '2017-09-15 16:39:32', '2017-09-15'),
(4, 3, 'kaliyaganj', 'MMS', '2017-09-16', '2017-09-20', 1, 0, '2017-09-15 16:39:32', '2017-09-15'),
(5, 3, 'kolkata', 'KBS', '2017-09-16', '2017-09-23', 2, 0, '2017-09-15 16:46:22', '2017-09-15'),
(6, 5, 'kaliyaganj', 'MMS', '2017-09-19', '2017-09-28', 2, 0, '2017-09-18 11:14:07', '2017-09-18'),
(7, 5, 'kaliyaganj', 'MMS', '2017-09-19', '2017-09-28', 1, 0, '2017-09-18 11:14:07', '2017-09-18'),
(8, 5, 'kaliyaganj', 'MMS', '2017-09-18', '2017-09-27', 2, 0, '2017-09-18 13:17:44', '2017-09-18'),
(9, 5, 'kaliyaganj', 'MMS', '2017-09-18', '2017-09-27', 1, 0, '2017-09-18 13:17:44', '2017-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `td_admin`
--

DROP TABLE IF EXISTS `td_admin`;
CREATE TABLE IF NOT EXISTS `td_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` char(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pass_original` varchar(255) NOT NULL,
  `login_allow` int(11) NOT NULL,
  `sub_admin` int(11) NOT NULL,
  `attempt_count` int(11) NOT NULL,
  `remote_ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_admin`
--

INSERT INTO `td_admin` (`id`, `user`, `pass`, `name`, `photo`, `pass_original`, `login_allow`, `sub_admin`, `attempt_count`, `remote_ip`) VALUES
(1, 'admin', '825f4e83dfd4eaf664bc0501abb2ccd49c2687d778470bdf8e325f22242d3cba', 'Bell', 'Bells_png1467191859.png', 'password', 1, 1, 4, '::1'),
(3, 'Punam', '334e23ca9a89c8c898937ddf3a5ab3c45de4a7df20f99da893833a3bcb9585a1', '', '', 'Punam@123', 1, 1, 1, '::1'),
(4, 'Ashish', '0645cc51a712f9d90d176fefda7973396678ee742fd45ea9612b1f37375d1568', '', '', 'Ashish@123', 1, 1, 2, '27.131.213.209'),
(5, 'Sujata', '629c2cd5e4e27d13749e09a85573d0246e9bffb20161378cb1bf25e2ddba2455', '', '', 'Sujata@123', 1, 1, 0, ''),
(7, 'Shankar', '438e4b56aa2aee059163164788cab0d53f325aeaed62db61e3c5bc2709f316b8', '', '', 'Shankar@123', 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_pass_key`
--

DROP TABLE IF EXISTS `td_pass_key`;
CREATE TABLE IF NOT EXISTS `td_pass_key` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pass_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_pass_key`
--

INSERT INTO `td_pass_key` (`id`, `pass_key`) VALUES
(1, 'ordpasswordpas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
