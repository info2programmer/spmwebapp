-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2017 at 07:56 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spmgroup_empmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id_auto` int(11) NOT NULL,
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
  `mother_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id_auto`, `fname`, `lname`, `emp_id`, `image`, `father_name`, `mob_no`, `phn_no`, `bld_grp`, `rltv_phn`, `frnd_phn`, `adhar_no`, `voter_id`, `pan_card`, `epf_no`, `uan_no`, `dob`, `refrnce`, `bank`, `branch`, `acc_name`, `acc_no`, `ifc_cose`, `micr_code`, `join_date`, `base_sal`, `emp_epf`, `emp_esi`, `house_rent`, `tot_sal`, `increment_date`, `inc_rate`, `nxt_inc`, `area`, `category`, `contractor_name`, `plant_name`, `regno`, `email`, `age`, `religion`, `maritial_status`, `spouse_details`, `no_of_children`, `edu_qualification`, `language`, `convicted`, `convicted_details`, `dl`, `pasport`, `other_details`, `identification_mark`, `other_disease`, `medical_certificate`, `emargency_contact_person`, `emargency_contact_relation`, `emargency_contact_no`, `emargency_contact_address`, `par_vill`, `par_ps`, `par_pin`, `par_dis`, `pre_vill`, `pre_ps`, `pre_dis`, `pre_pin`, `mother_name`) VALUES
(1, 'John ', 'Cena', 'EMP001', 'imgres15033132491505284664.jpg', 'Jack Cena', '9800261025', '850924520', 'B+', '9547856321', '7563214569', '456123456123456457', 'WB45245524', 'PANYJ5852', '294369124264032', '98243298462938462934', '09/10/2007', 'n/a', 'SBI', 'US', 'John cena', '45632146632145632448', 'SBIN00012336', '665', '2015-07-13', '15000', '120', '1200', '500', '20000', '2017-09-22', '500', '2017-09-30', 'US', 'SKILLED', 'Lorem Ipsum', 'Ipsum', 'SPM/EMP/2', 'cena.john@gmail.com', '10', 'Hindu', 'unmarried', 'n/a', 'n/a', 'BA', 'Bengali', 'No', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'No', 'Mark Doe', 'Brother', '7896541236', '123 Demo Street, London , US', '123 Demo Street', 'CA', '654785', 'US', '123 Demo Street', 'CA', 'US', '654785', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `td_admin`
--

CREATE TABLE IF NOT EXISTS `td_admin` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pass_original` varchar(255) NOT NULL,
  `login_allow` int(11) NOT NULL,
  `sub_admin` int(11) NOT NULL,
  `attempt_count` int(11) NOT NULL,
  `remote_ip` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_admin`
--

INSERT INTO `td_admin` (`id`, `user`, `pass`, `name`, `photo`, `pass_original`, `login_allow`, `sub_admin`, `attempt_count`, `remote_ip`) VALUES
(1, 'admin', '4e5ee4cc4f29dffd24a7c9749db7020066c41361e7b04d03d46ebcea42b7e93a', 'Bell', 'Bells_png1467191859.png', 'Spm@123#', 0, 0, 121, '116.193.128.129'),
(3, 'Punam', '334e23ca9a89c8c898937ddf3a5ab3c45de4a7df20f99da893833a3bcb9585a1', '', '', 'Punam@123', 1, 1, 0, ''),
(4, 'Ashish', '0645cc51a712f9d90d176fefda7973396678ee742fd45ea9612b1f37375d1568', '', '', 'Ashish@123', 1, 1, 2, '27.131.213.209'),
(5, 'Sujata', '629c2cd5e4e27d13749e09a85573d0246e9bffb20161378cb1bf25e2ddba2455', '', '', 'Sujata@123', 1, 1, 0, ''),
(7, 'Shankar', '438e4b56aa2aee059163164788cab0d53f325aeaed62db61e3c5bc2709f316b8', '', '', 'Shankar@123', 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `td_pass_key`
--

CREATE TABLE IF NOT EXISTS `td_pass_key` (
  `id` int(10) NOT NULL,
  `pass_key` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_pass_key`
--

INSERT INTO `td_pass_key` (`id`, `pass_key`) VALUES
(1, '23#Spm@123#Spm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id_auto`);

--
-- Indexes for table `td_admin`
--
ALTER TABLE `td_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_pass_key`
--
ALTER TABLE `td_pass_key`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id_auto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_admin`
--
ALTER TABLE `td_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `td_pass_key`
--
ALTER TABLE `td_pass_key`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
