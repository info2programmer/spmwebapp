-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2017 at 10:44 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rsmraiga_db_raiganj_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `library_additional_detail`
--

CREATE TABLE IF NOT EXISTS `library_additional_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `is_mandatory` varchar(255) NOT NULL,
  `input_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library_book`
--

CREATE TABLE IF NOT EXISTS `library_book` (
  `id` int(9) NOT NULL,
  `book_no` varchar(255) NOT NULL,
  `copies` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library_books`
--

CREATE TABLE IF NOT EXISTS `library_books` (
  `id` int(9) NOT NULL,
  `sl_no` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `book_no` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `author1` varchar(255) NOT NULL,
  `author2` varchar(255) NOT NULL,
  `author3` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `date_of_publish` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `suppliers` varchar(255) NOT NULL,
  `call_no` varchar(255) NOT NULL,
  `isbn_no` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `additional` longtext NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `date` datetime NOT NULL,
  `fine_amount` varchar(255) NOT NULL,
  `is_reserved` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_books`
--

INSERT INTO `library_books` (`id`, `sl_no`, `acc_no`, `book_no`, `subject`, `title`, `edition`, `author1`, `author2`, `author3`, `publisher`, `date_of_publish`, `price`, `suppliers`, `call_no`, `isbn_no`, `tag`, `type`, `additional`, `status`, `date`, `fine_amount`, `is_reserved`) VALUES
(1, 'SL123', 'SL123', 'SL123', '', 'SL123', '', 'SL123', '', '', '', '', 0, '', '', '', 'SL123', 'Book', '', 'Available', '0000-00-00 00:00:00', '', 0),
(2, 'SL1234', 'SL1234', 'SL1234', '', 'SL12345', 'SL1234', 'SL1234', '', '', '', '', 0, '', '', '', 'SL1234', 'Book', '', 'Available', '0000-00-00 00:00:00', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `library_fine`
--

CREATE TABLE IF NOT EXISTS `library_fine` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment_date` date NOT NULL,
  `book_no` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_fine`
--

INSERT INTO `library_fine` (`id`, `name`, `member_id`, `amount`, `payment_date`, `book_no`, `status`) VALUES
(1, 'Debanjan', 'AH/1/2015-3', '46', '2015-05-19', 'hist-6', 1),
(2, 'Komal Sinha', 'AG/1/2015-1', '35', '2015-05-19', 'hist-6', 1),
(3, 'Mou Roy', 'AH/9/2015-4', '69', '2015-05-24', 'hist-6', 1),
(4, 'DURGA KUMARI', 'AG/121/2015-147', '16', '2015-08-10', 'hist-6', 1),
(5, 'DURGA KUMARI', 'AG/121/2015-147', '', '2015-08-11', 'hist-6', 1),
(6, 'NIHAR GOSWAMI', 'AH/2015/001232088', '', '2015-09-30', 'hist-1', 1),
(7, 'FARIDA PARVIN', 'AG/2016/PASS001465-1', '', '2016-09-05', 'SL123', 1),
(8, 'MOUMITA GHOSH', 'AH/2016/0022248-48', '', '2016-09-06', 'SL123', 1),
(9, 'LAKSHMI DAS', 'AH/2016/00222488-488', '4', '2016-09-06', 'SL123', 1),
(10, 'LAKSHMI DAS', 'AH/2016/00222488-488', '', '2016-09-06', 'SL123', 1),
(11, 'ARUP ROY', 'AH/2016/00123214-1284', '1', '2016-09-09', 'SL1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `library_issue_book`
--

CREATE TABLE IF NOT EXISTS `library_issue_book` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `book_no` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library_setting`
--

CREATE TABLE IF NOT EXISTS `library_setting` (
  `id` int(11) NOT NULL,
  `to_student` varchar(100) NOT NULL,
  `to_teacher` varchar(100) NOT NULL,
  `fine_student` int(11) NOT NULL,
  `fine_teacher` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_setting`
--

INSERT INTO `library_setting` (`id`, `to_student`, `to_teacher`, `fine_student`, `fine_teacher`) VALUES
(1, '2', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library_additional_detail`
--
ALTER TABLE `library_additional_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_book`
--
ALTER TABLE `library_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_books`
--
ALTER TABLE `library_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_fine`
--
ALTER TABLE `library_fine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_issue_book`
--
ALTER TABLE `library_issue_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_setting`
--
ALTER TABLE `library_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library_additional_detail`
--
ALTER TABLE `library_additional_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `library_book`
--
ALTER TABLE `library_book`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `library_books`
--
ALTER TABLE `library_books`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `library_fine`
--
ALTER TABLE `library_fine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `library_issue_book`
--
ALTER TABLE `library_issue_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `library_setting`
--
ALTER TABLE `library_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
