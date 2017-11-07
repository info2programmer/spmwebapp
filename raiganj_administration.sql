-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2017 at 05:53 AM
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
-- Table structure for table `raiganj_administration`
--

CREATE TABLE IF NOT EXISTS `raiganj_administration` (
  `id` int(11) NOT NULL,
  `administrative_role` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `category_office` varchar(250) NOT NULL,
  `category_teaching` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `reserch_field` varchar(250) DEFAULT NULL,
  `stream` varchar(250) DEFAULT NULL,
  `subject_id` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `resume` varchar(250) DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `raiganj_administration`
--

INSERT INTO `raiganj_administration` (`id`, `administrative_role`, `name`, `designation`, `category_office`, `category_teaching`, `email`, `phone`, `qualification`, `reserch_field`, `stream`, `subject_id`, `image`, `resume`, `published`, `priority`) VALUES
(1, 'Governing-Body', 'Bidyut Sen', 'President', '', '', '', '', '', '', '', '', '', '', 1, 0),
(2, 'Governing-Body', 'Dr. Prithwiraj Jha', 'Secretary & Teacher-in-Charge', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(3, 'Governing-Body', 'Dr. Tapati Rout', 'Government Nominee', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(4, 'Governing-Body', 'Arnab Roy Choudhury', 'Government Nominee', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(5, 'Governing-Body', 'Priyotosh Mukherjee', 'University Nominee', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(6, 'Governing-Body', 'Subrata Saha', 'University Nominee', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(7, 'Governing-Body', 'Pranati Majumdar', 'Teacher Representative', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(8, 'Governing-Body', 'Dr. Kamala Bhattacharyya', 'Teacher Representative', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(9, 'Governing-Body', 'Dr. Rakhee Das Biswas', 'Teacher Representative', '', '', '', '', '', '0', '', '', '', '', 1, 37),
(10, 'Governing-Body', 'Abhinandan Das', 'Teacher Representative', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(11, 'Governing-Body', 'Samarendra Nath Raha', 'Non-teaching Representative', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(12, 'Governing-Body', 'Kartik Das', 'Non-teaching Representative', '', '', '', '', '', '0', '', '', '', '', 1, 0),
(13, 'Office Staff', 'Debesh Chakraborty', 'Head Clerk', 'Permanent', '', '', '', '', '                                                                                                                                    0                                                                                                                     ', NULL, '', '', '', 1, 1),
(14, 'Office Staff', 'Samarendranath Raha', 'Accountant', 'Permanent', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 2),
(15, 'Office Staff', 'Kanai Sarkar', 'Clerk', 'Permanent', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 6),
(16, 'Office Staff', 'Jayanta Rakshit', 'Office Assistant (G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        0                                                                                        ', NULL, '', '', '', 1, 18),
(17, 'Office Staff', 'Pradip Kumar Roy', 'Typist', '', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 5),
(18, 'Office Staff', 'Bikash Dutta', 'Office Bearer', '', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 7),
(20, 'Office Staff', 'Sanjay Saha', 'Cashier', '', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 3),
(21, 'Office Staff', 'Ganesh Choudhury', ' Clerk', '', '', '', '', '', '                                                                                        0                                                                                        ', NULL, '', '', '', 1, 4),
(23, 'Office Staff', 'Habibur Rahaman', 'Lab Attendant (Zoology)', '', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 11),
(24, 'Office Staff', 'Kartick Ch. Das', 'Lab Attendant (Chemistry)', '', '', '', '', '', '                                            0                                            ', NULL, '', '', '', 1, 9),
(26, 'Teaching Staff', 'Dr. Rakhee Das Biswas', 'Assistant Professor', '', 'Full Time', 'rakhee_dasbiswas@rediffmail.com', '7684654154', 'M.Sc (Univ. of North Bengal), Ph.D (Univ. of North Bengal).', '                                            Interaction of plant and pathogenic fungi-their mode of action and control, Molecular plant pathology and fungal biotechnology                                                                                ', 'SCIENCE', '12', 'rakhee_das_biswas.jpg', 'rakhee_das_biswas.pdf', 1, 0),
(27, 'Teaching Staff', 'Dhritiman Chakraborty', 'Assistant Professor', '', 'Full Time', 'dhrtmn87@gmail.com', '', 'M.A. (Jadavpur Univ.)', '                                                                                        Postcolonial Theory, India Studies, New Social Movement and Women Studies in India                                                                                ', 'ARTS', '4', 'dhritiman.jpg', 'Dhritiman 11.pdf', 1, 6),
(28, 'Teaching Staff', 'Dr. Provash Roy Choudhury', 'Associate Professor', '', 'Full Time', '', '', 'MA', '                                                                                                                                                                                ', 'ARTS', '1', 'DSCN9428.jpg', '', 1, 1),
(29, 'Teaching Staff', 'Ajoy Mandal', 'Assistant Professor', '', 'Full Time', '', '', 'M.A (Rabindra Bharati University) , Ph.D. (Jadavpur University)', ' Samprotik Bangla uponyase nimnobargo - ekti paryalochona (1990-2000)                                                                                                                                                                               ', 'ARTS', '1', 'ajoy.jpg', 'Ajoy Mandal.pdf', 1, 3),
(30, 'Teaching Staff', 'Bandana Sarkar', 'Part-Time Teacher', '', 'Part Time', '', '', 'MA ', '                                                                                                                                                                                ', 'ARTS', '1', 'DSCN9445.jpg', '', 1, 4),
(33, 'Teaching Staff', 'Mithun Paul', 'Guest Lecturer', '', 'Guest', '', '', 'MA ', '                                                                                                                                                                                                                                                          ', 'ARTS', '4', 'DSCN9432.jpg', '', 1, 8),
(34, 'Teaching Staff', 'Shila Saha', 'Assistant Professor', '', 'Full Time', '', '', 'MA ', '                                                                                                                                                                                ', 'ARTS', '4', 'DSCN9417.jpg', '', 1, 5),
(35, 'Teaching Staff', 'Saiim Al Amin', 'Part Time Teacher', '', 'Part Time', '', '', 'MA ', '                                                                                                                                                                                                                                                          ', 'ARTS', '4', '', 'Md. Saiim', 1, 7),
(36, 'Teaching Staff', 'Nilima Moktan', 'Assistant Professor', '', 'Full Time', '', '', 'M.A.', '                                                                                                                                                                                                                                                          ', 'ARTS', '3', 'DSCN9444.jpg', 'nilima.pdf', 1, 16),
(37, 'Teaching Staff', 'Madhumita Roy', 'Assistant Professor', '', 'Full Time', '', '', 'MA', '                                                                                                                                                                                ', 'ARTS', '3', 'DSCN9409.jpg', '', 1, 15),
(38, 'Teaching Staff', 'Dipankar Deb Sharma	', 'Guest Teacher', '', 'Guest', '', '', 'MA in Education', '                                                                                        ', 'ARTS', '3', '', '', 1, 19),
(39, 'Teaching Staff', 'Waheeda Rahaman', 'Guest Teacher', '', 'Guest', '', '', 'MA in Education', '                                                                                        ', 'ARTS', '3', '', '', 1, 17),
(40, 'Teaching Staff', '	Motiur Rahaman', 'Guest Teacher', '', 'Guest', '', '', 'MA ', '                                                                                                                                                                                ', 'ARTS', '3', 'DSCN9403.jpg', '', 1, 18),
(41, 'Teaching Staff', 'Pranati Majumdar', 'Assistant Professor', '', 'Full Time', '', '', 'MA  	', '                                                                                                                                                                                ', 'ARTS', '10', 'DSCN9433.jpg', '', 1, 10),
(42, 'Teaching Staff', 'Ujjwal Bhattacherjee', 'Part-Time Teacher', '', 'Part Time', '', '', '                                     MA ', '                                                                                                                                                                                ', 'ARTS', '10', 'DSCN9437.jpg', '', 1, 12),
(43, 'Teaching Staff', 'Dr Sankar Roy', 'Associate Professor', '', 'Full Time', '', '', 'MA, Ph.D', '                                            Land, Labour And Politics: A Study of Agricultura                                                                                                                        ', 'ARTS', '11', 'DSCN9399.jpg', '', 1, 20),
(44, 'Teaching Staff', 'Chandana Saha', 'Assistant Professor', '', 'Full Time', 'ska4seminar@gmail.com', '', 'M.A. (Univ. of North Bengal)', '                                                                                        Subaltern Literature, National movement of North Bengal, Ancient history of North Bengal                                                                          ', 'ARTS', '5', 'chandana.jpg', 'CHANDANA.pdf', 1, 23),
(48, 'Teaching Staff', 'Dipanwita Das', 'Assistant Professor  	', '', 'Full Time', 'dasdipanwita79@gmail.com', '', 'M.Sc. (Univ. of North Bengal)', '                                                                                                                                                                                ', 'SCIENCE', '16', 'dwipannita das.jpg', 'Dipanwita Das.pdf', 1, 33),
(49, 'Teaching Staff', 'Dr. Sarifuddin', 'Assistant Professor', '', 'Full Time', '', '', 'M.Sc. ', 'Some Problems of Biomechanics of Blood Flow in Arteries                                                                                                                                                             ', 'SCIENCE', '15', 'sarifuddin.jpg', 'Sarifuddin.pdf', 1, 57),
(50, 'Teaching Staff', 'Abhinandan Das', 'Assistant Professor', '', 'Full Time', 'abhiju2009@gmail.in', '', 'M.A. (Jadavpur Univ.)', '                                            Research field : Economic History of India, Social History of Science and Technology, Contemporary History, Human Rights                                                                                 ', 'ARTS', '5', 'abhinandan.jpg', 'Abhinandan.pdf', 1, 24),
(51, 'Teaching Staff', 'Dr. Kamala Rani Bhattacharyya	', 'Assistant Professor', '', 'Full Time', 'kbhattacharyya89@gmail.com', '', 'M.Sc. (Calcutta Univ.), Ph.D. (Jadavpur Univ.)', '                                                                                        Physical chemistry, Photochemistry, Surface chemistry                                                                                                    ', 'SCIENCE', '13', 'kamala_Bhattacharjee.jpg', 'kamala di.pdf', 1, 27),
(52, 'Teaching Staff', 'Dr. Prithwiraj Jha', 'Assistant Professor', '', 'Full Time', 'jhaprithwiraj@rediffmail.com', '', 'M.Sc (Univ. of North Bengal), Ph.D (Univ. of North Bengal)', '                                                                               Aquaculture, Inland fisheries resource management, Aquatic biodiversity                                                                                                 ', 'SCIENCE', '17', 'P.jpg', 'prithwi.pdf', 1, 44),
(58, 'Office Staff', 'Gita Rani Sarkar (Roy)', 'Lady Attendant', '', '', '', '', '', '                                                                                                                                                                                ', NULL, '', '', '', 1, 8),
(59, 'Office Staff', 'Ashim Kumar Dutta', 'Guard', '', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 13),
(60, 'Office Staff', 'Sailesh Mardi', 'Lab Attendant (Botany)', '', '', '', '', '', '                                                                                                                                                                                ', NULL, '', '', '', 1, 10),
(61, 'Office Staff', 'Sankar Pal', 'Library Peon', '', '', '', '', '', '                                                                                                                                                                                ', NULL, '', '', '', 1, 12),
(62, 'Office Staff', 'Dhanesh Chandra Singha', 'Guard', '', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 14),
(63, 'Office Staff', 'Santiya Basfor', 'Sweeper', '', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 15),
(64, 'Office Staff', 'Mangal Bhowmick', 'Part Time Mali', '', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 16),
(65, 'Teaching Staff', 'Arup Sanyal', 'Associate Professor in Economics', '', 'Full Time', '', '', 'M.A.(University of North Bengal)', '                                                                                                                                                                                                                                                          ', 'ARTS', '2', 'DSCN9461.jpg', 'Arup Sanyal.pdf', 1, 61),
(66, 'Teaching Staff', 'Dr. Debashri Mondal', 'Assistant Professor', '', 'Full Time', 'drdebashrimondal@gmail.com', '', 'M.Sc. (University of North Bengal),Ph.D (University of North Bengal)', '  Revival of Mirik Lake, Darjeeling for Designated Use , Toxicity of neem pesticides on Channa Punctatus (Bloch)                                                                                                                                          ', 'SCIENCE', '17', 'DM (94 x 120).jpg', 'debashri.pdf', 1, 43),
(67, 'Teaching Staff', 'Sujit Ghosh', 'Assistant Professor in Chemistry', '', 'Full Time', '', '', '', '                                                                                                                                                                                                                                                          ', 'SCIENCE', '13', 'sujit.png', '', 1, 28),
(68, 'Teaching Staff', 'Mohua Paul Choudhury', 'Part Time Teacher', '', 'Part Time', '', '', 'MA ', '                                                                                                                                                                                ', 'ARTS', '11', 'DSCN9431.jpg', '', 1, 21),
(69, 'Teaching Staff', 'Tushar Kanti Roy', 'Part Time Teacher', '', 'Part Time', '', '', 'MA ', '                                                                                                                                                                                ', 'ARTS', '5', 'DSCN9442.jpg', '', 1, 25),
(70, 'Teaching Staff', 'Pampa Sarkar', 'Part Time Teacher', '', 'Part Time', '', '', 'M.A. ', '                                                                                                                                                                                ', 'ARTS', '2', 'DSCN9435.jpg', '', 1, 63),
(71, 'Teaching Staff', 'Aayasha Parvin', 'Part Time Teacher', '', 'Part Time', '', '', 'M.A. ', '                                                                                                                                                                                ', 'ARTS', '10', 'DSCN9438.jpg', '', 1, 13),
(72, 'Teaching Staff', 'Priyanka Sarkar', 'Part Time Teacher', '', 'Part Time', '', '', '', '                                                                                        ', 'SCIENCE', '13', '', '', 1, 29),
(73, 'Teaching Staff', 'Tarik Anowar', 'Guest Lecturer', '', 'Guest', '', '', 'M.A. ', '                                                                                                                                                                                ', 'BA GENERAL GEOGRAPHY', '20', 'DSCN9405.jpg', '', 1, 49),
(74, 'Teaching Staff', 'Ranjit Roy', 'Guest Lecturer', '', 'Guest', '', '', 'MA ', '                                                                                                                                                                                ', 'ARTS', '5', 'DSCN9404.jpg', '', 1, 26),
(75, 'Teaching Staff', 'Sanjoy Sarkar', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '17', '', '', 1, 48),
(76, 'Teaching Staff', 'Debajit Chakrabarty', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '17', '', '', 1, 46),
(78, 'Teaching Staff', 'Modhurima Joardar', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '17', '', '', 1, 47),
(79, 'Teaching Staff', 'Swarnali Nag', 'Guest Lecturer', '', 'Guest', '', '', 'M.Sc. ', '                                                                                                                                                                                ', 'SCIENCE', '17', '', '', 1, 45),
(80, 'Teaching Staff', 'Debabrata Barman', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '16', '', '', 1, 35),
(81, 'Teaching Staff', 'Ananda Kr Singha', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                                                                                                                ', 'BA GENERAL SANSKRIT', '18', 'DSCN9400.jpg', '', 1, 55),
(82, 'Teaching Staff', 'Md. Haroon Rasid', 'Guest Lecturer', '', 'Guest', '', '', 'M.A. ', '                                                                                                                                                                                ', 'BA GENERAL URDU', '21', 'DSCN9422.jpg', '', 1, 56),
(83, 'Teaching Staff', 'Sarmita Ghosh', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '12', '', '', 1, 42),
(84, 'Teaching Staff', 'Koushik Benarjee', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '12', '', '', 1, 41),
(85, 'Teaching Staff', 'Md Ismile', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '12', '', '', 1, 39),
(86, 'Teaching Staff', 'Papan Chowhan', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '12', '', '', 1, 40),
(87, 'Teaching Staff', 'Tanmay Bhattacharjee', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                                                                                                                ', 'ARTS', '4', '', '', 1, 9),
(88, 'Teaching Staff', 'Ahuti Sarkar', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '13', '', '', 1, 30),
(89, 'Teaching Staff', 'Shyamsundar Pratihar', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                                                                                                                ', 'BA GENERAL PHYSICAL EDUCATION', '19', 'DSCN9455.jpg', '', 1, 51),
(90, 'Teaching Staff', 'Pritam Chakraborty', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                                                                                                                ', 'SCIENCE', '16', 'DSCN9401.jpg', '', 1, 36),
(91, 'Teaching Staff', 'Pintu Biswas', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'BA GENERAL GEOGRAPHY', '20', '', '', 1, 50),
(92, 'Teaching Staff', 'Rima Das', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '15', '', '', 1, 60),
(93, 'Teaching Staff', 'Tarun Gain', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'SCIENCE', '15', '', '', 1, 59),
(94, 'Teaching Staff', 'Nur Mohammad', 'Guest Lecturer', '', 'Guest', '', '', 'M.Sc. ', '                                                                                                                                                                                ', 'SCIENCE', '16', 'DSCN9402.jpg', '', 1, 34),
(95, 'Teaching Staff', 'Biswajeet Sarkar', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                        ', 'ARTS', '11', '', '', 1, 22),
(96, 'Teaching Staff', 'Utpal Biswas', 'Guest Lecturer', '', 'Guest', '', '', 'M.Sc. ', '                                                                                                                                                                                ', 'SCIENCE', '13', 'DSCN9420.jpg', '', 1, 32),
(97, 'Teaching Staff', 'Tanmoy Sarkar', 'Guest Lecturer', '', 'Guest', '', '', '', '                                                                                                                                                                                ', 'ARTS', '22', 'DSCN9415.jpg', '', 1, 53),
(98, 'Teaching Staff', 'Naru Roy', 'Guest Lecturer', '', 'Guest', '', '', 'MA', '                                                                                                                                                                                                                                                          ', 'ARTS', '22', 'DSCN9413.jpg', '', 1, 54),
(99, 'Teaching Staff', 'Arindam Debnath', 'Assistant Professor', '', 'Full Time', '', '', '', '                                                                                                                                                                                ', 'ARTS', '10', 'DSCN9440.jpg', '', 1, 11),
(101, 'Office Staff', 'Mousumi Sarkar', 'Office Assistant (G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 17),
(102, 'Office Staff', 'Mukul Das', 'Office Assistant (G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 19),
(103, 'Office Staff', 'Arunagshu Sarkar', 'Office Assistant (G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 20),
(104, 'Office Staff', 'Debnarayan Gangopadhya', 'Office Assistant (G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 21),
(105, 'Office Staff', 'Ganashyam Kamat', 'Office Bearer ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 23),
(106, 'Office Staff', 'Biswanath Das', 'Office Bearer ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 22),
(107, 'Office Staff', 'Milan Bagchi', 'Office Bearer ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 24),
(108, 'Office Staff', 'Krishanu Kundu', 'Office Bearer ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 25),
(109, 'Office Staff', 'Abdul Mobir', 'Office Bearer ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 26),
(110, 'Office Staff', 'Suman Rabidas', 'Lab. Attendant ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 27),
(111, 'Office Staff', 'Satyen Barman', 'Electrician ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 28),
(112, 'Office Staff', 'Shibprasad Mondal', 'Mali ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 29),
(113, 'Office Staff', 'Arjun Basfor', 'Sweeper (G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 30),
(114, 'Teaching Staff', 'Pradyut Sarkar', 'Physical Instructor ( G.B. Approved)', '', 'Full Time', '', '', '', '                                                                                        ', 'BA GENERAL PHYSICAL EDUCATION', '19', '', '', 1, 52),
(115, 'Teaching Staff', 'Abdul Wahab', 'Assistant Librarian ( G.B. Approved)', '', 'Full Time', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 0),
(116, 'Office Staff', 'Abdul Wahab', 'Assistant Librarian ( G.B. Approved)', 'G. B. Approved', '', '', '', '', '                                                                                        ', NULL, '', '', '', 1, 31),
(117, 'Teaching Staff', 'Dr. Adrish Biswas', 'Assistant Professor', '', 'Full Time', '', '', 'M.A. , Ph.D.', '                                                                                                                                                                                ', 'ARTS', '1', '', '', 1, 2),
(118, 'Teaching Staff', 'Madhumanti Hasina Irani', 'Guest Teacher', '', 'Guest', '', '', 'M.A. ', '                                                                                        ', 'ARTS', '10', '', '', 1, 14),
(119, 'Teaching Staff', 'Susama Chakraborty', 'Guest Teacher', '', 'Guest', '', '', 'M.Sc. ', '                                                                                                                                                                                ', 'SCIENCE', '13', '', '', 1, 31),
(120, 'Teaching Staff', 'Dr. Abhijit Sarkar (On Lian)', 'Assistant Professor', '', 'Full Time', '', '', 'M.Sc. , Ph.D.', '                                                                                        ', 'SCIENCE', '12', '', '', 1, 38),
(121, 'Teaching Staff', 'Srikanta Saha', 'Guest Teacher', '', 'Guest', '', '', 'M.Sc. ', '                                                                                        ', 'SCIENCE', '15', '', '', 1, 58),
(122, 'Teaching Staff', 'Subrata Ghosh', 'Assistant Professor', '', 'Full Time', '', '', 'M.A. ', '                                                                                                                                                                                ', 'ARTS', '2', 'DSCN9463.jpg', '', 1, 62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raiganj_administration`
--
ALTER TABLE `raiganj_administration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raiganj_administration`
--
ALTER TABLE `raiganj_administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
