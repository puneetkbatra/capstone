-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 08:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ansid` int(11) NOT NULL,
  `ans` varchar(25) NOT NULL,
  `q_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ansid`, `ans`, `q_id`) VALUES
(1, '160', 1),
(2, '158', 1),
(3, '155', 1),
(4, '150', 1),
(5, '-9', 2),
(6, '-1', 2),
(7, '-8', 2),
(8, '-7', 2),
(9, '16', 3),
(10, '17', 3),
(11, '14', 3),
(12, '15', 3),
(13, '72', 4),
(14, '62', 4),
(15, '52', 4),
(16, '82', 4),
(17, '3', 5),
(18, '4', 5),
(19, '2', 5),
(20, '5', 5),
(21, 'protein', 6),
(22, 'amino acid', 6),
(23, 'carbohydrate', 6),
(24, 'calcium', 6),
(25, '3', 7),
(26, '2', 7),
(27, '5', 7),
(28, '8', 7),
(29, '70%', 8),
(30, '66%', 8),
(31, '66.7%', 8),
(32, '66.5%', 8),
(33, 'heaxane', 9),
(34, 'ethane', 9),
(35, 'butane', 9),
(36, 'methane', 9),
(37, 'hypermetropia', 10),
(38, 'myopia', 10),
(39, 'farsightedness', 10),
(40, 'none', 10),
(41, 'kept', 11),
(42, 'detained', 11),
(43, 'stopped', 11),
(44, 'delayed', 11),
(45, 'workout', 12),
(46, 'consider', 12),
(47, 'discuss', 12),
(48, 'settle', 12),
(49, 'workout', 13),
(50, 'consider', 13),
(51, 'discuss', 13),
(52, 'settle', 13),
(53, 'abused', 14),
(54, 'sommoned', 14),
(55, 'scolded', 14),
(56, 'praised', 14),
(57, 'sieze', 15),
(58, 'enforce', 15),
(59, 'negotiate', 15),
(60, 'vindicate', 15),
(61, 'has done', 16),
(62, 'did', 16),
(63, 'does', 16),
(64, 'had done', 16),
(65, 'initials', 17),
(66, 'signatures', 17),
(67, 'pictures', 17),
(68, 'middle names', 17),
(69, 'to whom I sell', 18),
(70, 'to who I sell', 18),
(71, 'who was sold to', 18),
(72, 'to whom I sold', 18),
(73, 'to tolerate', 19),
(74, 'to tolerating', 19),
(75, 'at tolerating', 19),
(76, 'with tolerating', 19),
(77, 'were shocked at all', 20),
(78, 'had all shocked at', 20),
(79, 'had all shocked by', 20),
(80, 'no correction required', 20),
(81, 'Trypsin      ', 21),
(82, 'Pepsin  ', 21),
(83, 'Bile juice', 21),
(84, 'Both I and II', 21),
(85, 'black', 22),
(86, 'white', 22),
(87, 'yellow', 22),
(88, 'pink', 22),
(89, 'heavier than air', 23),
(90, 'colourless', 23),
(91, 'acidic in nature', 23),
(92, 'soluble in water', 23),
(93, 'Pb2SO4', 24),
(94, 'Pb(SO4)2', 24),
(95, 'PbSO4', 24),
(96, 'Pb2(SO4)3', 24),
(97, 'X = Fe, Y = Fe2O3', 25),
(98, 'X = Ag, Y = Ag2S', 25),
(99, 'X = Cu, Y = CuO', 25),
(100, 'X = Al, Y = Al2O3', 25);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `sub_tag` char(2) NOT NULL,
  `test_tag` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `ans`, `sub_tag`, `test_tag`) VALUES
(1, 'Find the 20th term from the last term of the AP 3, 8, 13,...., 253.', '2', 'M', 1),
(2, 'Find the value of a, for which point P(a/2, 2) is the mid-point of the line segment joining the points (-5,4) and R(-1,0).', '5', 'M', 1),
(3, 'If nth term of an A.P. is (2n+1), what is the sum of its first three terms?', '12', 'M', 1),
(4, ' The HCF and LCM of two numbers are 9 and 360 respectively. If one number is 45, find the other number.', '13', 'M', 1),
(5, 'Water is flowing at the rate of 15 km per hour through a pipe of diameter 14cm into a rectangular tank which is 50 m long and 44 m wide. Find the time in which the level of water in the tank will rise by 21 cm.', '19', 'M', 1),
(6, 'Name a common nutrient that is absorbed in the small intestine and reabsorbed by the kidney tubules.', '22', 'S', 1),
(7, 'The electronic configuration of an element ‘X’ is 2, 8, 6. To which group and period of the modern periodic table does ‘X’ belong?', '27', 'S', 1),
(8, 'A ray of light enters into benzene from air. If the refractive index of benzene is 1.50, by what percent does the speed ? of light reduce on entering the benzene?', '31', 'S', 1),
(9, 'what type of gas is present in deodrant?', '35', 'S', 1),
(10, 'when someone cannot see the far objects from his naked eye what type of disease caused that?', '38', 'S', 1),
(11, 'Choose the one which best expresses the meaning of the phrase in bracets.\r\nLast evening I was (held up) at the meeting.', '42', 'E', 1),
(12, 'I have a problem to (square up) with the manager.', '48', 'E', 1),
(13, 'Sachin is not (cut out) for this kind of work.', '51', 'E', 1),
(14, 'The boss should not have (called) Arun names in front of others.', '53', 'E', 1),
(15, 'After tolerating a lot of exploitation at the hands of the authorities they finally decided to stand up for their rights.', '60', 'E', 1),
(16, '	\r\nThe small child does whatever his father was done.', '63', 'E', 2),
(17, '	\r\nThere are not many men who are so famous that they are frequently referred to by their ', '65', 'E', 2),
(18, '	\r\nThe man to who I sold my house was a cheat.', '72', 'E', 2),
(19, '	\r\nHe is too important for tolerating any delay.', '73', 'E', 2),
(20, '	\r\nThey were all shocked at his failure in the competition.', '80', 'E', 2),
(21, 'Which of these juices is secreted by pancreas?', '84', 'S', 2),
(22, 'When a magnesium ribbon is burnt in air, the ash formed is', '86', 'S', 2),
(23, 'Both CO2 and H2 gases are', '90', 'S', 2),
(24, 'The chemical formula of lead sulphate is', '95', 'S', 2),
(25, 'An element X on exposure to moist air turns reddish-brown and a new compound Y is formed. ', '97', 'S', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quizregistration`
--

CREATE TABLE `quizregistration` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizregistration`
--

INSERT INTO `quizregistration` (`id`, `user`, `pass`) VALUES
(1, 'sudip', 'ram'),
(2, 'puneet', 'Puneet@123');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `total_question` int(11) NOT NULL DEFAULT -1,
  `attempt` int(11) NOT NULL DEFAULT -1,
  `score` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`user_id`, `firstname`, `lastname`, `useremail`, `userpass`, `total_question`, `attempt`, `score`) VALUES
(4, 'Puneet', 'Batra', 'puneetkbatra12@gmail.com', 'Puneet@123', 15, 4, 2),
(6, 'Suraj', 'Pakhare', 'ksp9713@gmail.com', '12345', -1, -1, -1),
(7, 'Danish ', 'Sharma', 'danny123@gmail.com', '12345', 15, 3, 1),
(15, 'Robert', 'Drowney', 'abc@gmail.com', '12345', -1, -1, -1),
(30, 'me', 'me', 'meme@gmail.com', 'meme', -1, -1, -1),
(31, 'pk', 'bt', 'mno@gmail.com', '54321', -1, -1, -1);

-- --------------------------------------------------------

--
-- Table structure for table `usersession`
--

CREATE TABLE `usersession` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `u_q_id` int(11) NOT NULL,
  `u_a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersession`
--

INSERT INTO `usersession` (`u_id`, `name`, `u_q_id`, `u_a_id`) VALUES
(1, 'sudip', 5, 0),
(2, 'sudip', 5, 0),
(3, 'sudip', 5, 0),
(4, 'sudip', 5, 0),
(5, 'sudip', 5, 0),
(6, 'sudip', 5, 0),
(7, 'sudip', 5, 0),
(8, 'sudip', 5, 0),
(9, 'sudip', 5, 0),
(10, 'sudip', 5, 0),
(11, 'sudip', 5, 0),
(12, 'sudip', 5, 0),
(13, 'sudip', 5, 0),
(14, 'sudip', 5, 0),
(15, 'sudip', 5, 1),
(16, 'sudip', 5, 4),
(17, 'sudip', 5, 3),
(18, 'sudip', 5, 0),
(19, 'sudip', 5, 2),
(20, 'sudip', 5, 0),
(21, 'sudip', 5, 1),
(22, 'sudip', 5, 1),
(23, 'sudip', 5, 1),
(24, 'sudip', 5, 0),
(25, 'sudip', 5, 0),
(26, 'sudip', 5, 0),
(27, 'sudip', 5, 1),
(28, 'sudip', 5, 0),
(29, 'sudip', 5, 0),
(30, 'sudip', 5, 0),
(31, 'sudip', 5, 0),
(32, 'sudip', 5, 0),
(33, 'sudip', 5, 0),
(34, 'sudip', 5, 0),
(35, 'sudip', 5, 0),
(36, 'sudip', 5, 0),
(37, 'sudip', 5, 0),
(38, 'puneet', 5, 0),
(39, 'puneet', 5, 0),
(40, 'puneet', 5, 0),
(41, 'puneet', 5, 0),
(42, 'puneet', 5, 0),
(43, 'puneet', 5, 0),
(44, 'puneet', 5, 0),
(45, 'puneet', 5, 0),
(46, 'puneet', 5, 0),
(47, 'puneet', 5, 0),
(48, 'puneet', 5, 0),
(49, 'puneet', 5, 0),
(50, 'puneet', 5, 3),
(51, 'puneet', 5, 0),
(52, 'puneet', 5, 2),
(53, 'puneet', 5, 2),
(54, 'puneet', 5, 1),
(55, 'puneet', 5, 2),
(56, 'puneet', 5, 0),
(57, 'puneet', 5, 0),
(58, 'puneet', 5, 2),
(59, '', 5, 0),
(60, 'puneet', 5, 0),
(61, 'puneet', 5, 0),
(62, 'puneet', 5, 0),
(63, 'puneet', 5, 0),
(64, 'puneet', 5, 0),
(65, 'puneet', 5, 0),
(66, 'puneet', 5, 0),
(67, 'puneet', 5, 0),
(68, 'puneet', 5, 0),
(69, 'puneet', 5, 1),
(70, 'puneet', 5, 0),
(71, 'puneet', 5, 1),
(72, 'puneet', 5, 1),
(73, 'puneet', 5, 0),
(74, 'puneet', 5, 0),
(75, 'puneet', 5, 0),
(76, 'puneet', 5, 0),
(77, 'puneet', 5, 4),
(78, 'puneet', 5, 0),
(79, 'puneet', 5, 0),
(80, 'puneet', 5, 0),
(81, 'puneet', 5, 0),
(82, 'puneet', 5, 0),
(83, 'puneet', 5, 0),
(84, 'puneet', 5, 0),
(85, 'puneet', 5, 0),
(86, 'puneet', 5, 0),
(87, 'puneet', 5, 0),
(88, '', 5, 0),
(89, '', 5, 0),
(90, '', 5, 0),
(91, '', 5, 0),
(92, 'puneet', 5, 0),
(93, 'puneet', 5, 1),
(94, 'puneet', 5, 0),
(95, 'puneet', 5, 0),
(96, 'puneet', 5, 0),
(97, 'puneet', 5, 0),
(98, 'puneet', 5, 0),
(99, 'puneet', 5, 1),
(100, '', 5, 0),
(101, '', 5, 0),
(102, '', 5, 0),
(103, '', 5, 0),
(104, '', 5, 0),
(105, 'puneet', 5, 1),
(106, 'puneet', 5, 0),
(107, 'puneet', 5, 0),
(108, 'puneet', 5, 0),
(109, 'puneet', 5, 0),
(110, 'puneet', 5, 2),
(111, 'puneet', 5, 1),
(112, 'puneet', 5, 2),
(113, 'puneet', 5, 0),
(114, 'puneet', 5, 2),
(115, 'puneet', 5, 0),
(116, '', 5, 0),
(117, 'Danish ', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `quizregistration`
--
ALTER TABLE `quizregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usersession`
--
ALTER TABLE `usersession`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ansid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quizregistration`
--
ALTER TABLE `quizregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usersession`
--
ALTER TABLE `usersession`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
