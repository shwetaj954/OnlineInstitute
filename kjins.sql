-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 08:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kjins`
--

-- --------------------------------------------------------

--
-- Table structure for table `applycourse`
--

CREATE TABLE `applycourse` (
  `corid` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `cordate` varchar(300) NOT NULL,
  `corduration` varchar(300) NOT NULL,
  `corcharges` varchar(300) NOT NULL,
  `trainer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applycourse`
--

INSERT INTO `applycourse` (`corid`, `user_id`, `cordate`, `corduration`, `corcharges`, `trainer`) VALUES
('1', '1', '', '1 YEAR', 'ITS FREE', ''),
('16', '1', 'ALL TIME OPEN', 'DEPENDS YOU', 'FREE', ''),
('2', '14', '21/05/2021', '1 YEAR', 'FREE', ''),
('3', '13', '2021-2022', '1 YEAR', 'FREE', ''),
('4', '9', '2021-2022', '1 Year/Its Depending You', 'Its Free', 'Radha');

-- --------------------------------------------------------

--
-- Table structure for table `classlink`
--

CREATE TABLE `classlink` (
  `clsid` int(11) NOT NULL,
  `clsname` varchar(200) NOT NULL,
  `clslink` varchar(500) NOT NULL,
  `place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classlink`
--

INSERT INTO `classlink` (`clsid`, `clsname`, `clslink`, `place`) VALUES
(1, 'clasanm2', 'https://youtu.be/HVuAk6pV83A', 'Youtube'),
(2, 'UKG', 'https://youtu.be/71h8MZshGSs', 'YOUTUBE');

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `corid` int(11) NOT NULL,
  `corcategorie` varchar(500) NOT NULL,
  `corname` varchar(500) NOT NULL,
  `cordetail` varchar(10000) NOT NULL,
  `corimg` varchar(500) NOT NULL,
  `cordate` varchar(500) NOT NULL,
  `corcharge` varchar(500) NOT NULL,
  `corduration` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`corid`, `corcategorie`, `corname`, `cordetail`, `corimg`, `cordate`, `corcharge`, `corduration`) VALUES
(1, 'PRIMARY STAGE', 'LKG', 'Counting objects, inside and outside, longer and shorter, letter names, rhyming words and more.', 'cor7.png', '', 'ITS FREE', '1 YEAR'),
(2, 'PRIMARY STAGE', 'UKG', 'Comparing numbers, names of shapes, consonant and vowel sounds, sight words and more.', 'cor1.jpg', '21/05/2021', 'FREE', '1 YEAR'),
(3, 'MIDDLE STAGE', 'CLASS I', 'Adding and subtracting, greater than and less than, categories, nouns, verb tense, time order and more.', 'cor3.jpg', '2021-2022', 'FREE', '1 YEAR'),
(4, 'MIDDILE STAGE', 'CLASS II', 'Identifying shapes, completing patterns, contractions, irregular plurals, pronouns and more.', 'cor7.png', '2021-2022', 'Its Free', '1 Year/Its Depending You'),
(5, 'MIDDILE STAGE', 'CLASS III', 'Comparing numbers, measurement, possessive nouns, conjunctions, using a dictionary and more.', 'cor4.jpg', '2021-2022', 'Its Free', '1 Year/Its Depending You'),
(6, 'MIDDLE STAGE', 'CLASS IV', 'Understanding fractions, multiplication, time, synonyms, antonyms, homophones and more.', 'cor5.jpg', '2021-2022', 'Its Free', '1 Year'),
(7, 'MIDDLE STAGE', 'ClASS V', 'Your Subjects Science, Maths, Arts, Physical Education, Technologies, Computer, Hindi, Sanskrit', '4gf.gif', '2021-2022', 'FREE', '1 Year'),
(8, 'MIDDLE STAGE', 'CLASS VI', 'SCIENCE, MATHS, ARTS, HINDI, ENGLISH, TECHNLOGY, SANSKRIT, URDU, SOCIAL SCIENCE', '3.jpg', 'NOW', 'FREE', '2021-2022'),
(9, 'MIDDLE STAGE', 'CLASS VII', 'Your Subjects Science, Maths, Arts, Physical Education, Technologies, Computer, Hindi, Sanskrit', 'cor9.jpg', '2021-2022', 'FREE', '1 YEAR'),
(10, 'Middle Stage', 'CLASS VIII', 'Your Subjects Science, Maths, Arts, Physical Education, Technologies, Computer, Hindi, Sanskrit', 'cor10.jpg', '2021-2022', 'FREE', '1 YEAR'),
(11, 'SECONDARY STAGE ', 'CLASS IX', 'SCIENCE,MATH,HOME SCIENCE,ARTS,COMPUTER,HINDI,ENGLISH,SANSKRIT', 'cor11.jpg', '2021-2022', 'FREE', '1 YEAR'),
(12, 'SECONDARY STAGE', 'CLASS X', 'SCIENCE,MATH,HOME SCIENCE,ARTS,COMPUTER,HINDI,ENGLISH,SANSKRIT', 'cor12.jpg', '2021-2022', 'FREE', '1 YEAR'),
(13, 'SENIOR SECONDARY STAGE', 'CLASS XI', 'SCIENCE,MATH,HOME SCIENCE,ARTS,COMPUTER,HINDI,ENGLISH,SANSKRIT', 'cor13.jpg', '2021-2022', 'FREE', '1 YEAR'),
(14, 'SENIOR SECONDARY STAGE', 'CLASS XII', 'SCIENCE,MATH,HOME SCIENCE,ARTS,COMPUTER,HINDI,ENGLISH,SANSKRIT', 'cor14.jpg', '2021-2022', 'FREE', '1 YEAR'),
(16, 'OTHERS', 'HTML5', 'IN THIS COURSE WE COVER ALL HTML TEGS BIGNNER TO ADVANCED', 'cor15.png', 'ALL TIME OPEN', 'FREE', 'DEPENDS YOU'),
(17, 'OTHERS', 'CSS3', 'IN THIS COURSE WE COVER ALL CSS PROPERTIES BIGINER TO ADVANCED', 'cor16.png', 'ALL TIME OPEN', 'FREE', 'DEPENDS YOU'),
(18, 'OTHERS', 'BOOTSTRAP5', 'IN THIS COURSE COVER ALL BOOTSTRAP5 CLASSES, PROPERTIES AND TEGS', 'cor17.jfif', 'OPEN', 'FREE', 'DEPENDS YOU'),
(19, 'OTHERS', 'PHP8', 'IN THIS COURSE WE PROVIDE YOU PHP8 ALL NEW FEATURES AND LEARN ABOUT ALL THINGS', 'cor18.png', 'ALL TIME OPEN', 'FREE', 'DEPENDS OF YOU');

-- --------------------------------------------------------

--
-- Table structure for table `elibrary`
--

CREATE TABLE `elibrary` (
  `id` int(11) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `disposition` varchar(200) NOT NULL,
  `expires` varchar(500) NOT NULL,
  `cache` varchar(400) NOT NULL,
  `pragma` varchar(400) NOT NULL,
  `fileimg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elibrary`
--

INSERT INTO `elibrary` (`id`, `filename`, `type`, `description`, `disposition`, `expires`, `cache`, `pragma`, `fileimg`) VALUES
(1, 'HTMLBASIC INTRO.pdf', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public', 'assets/img/fileimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `empid` int(11) NOT NULL,
  `empname` varchar(500) NOT NULL,
  `empemail` varchar(500) NOT NULL,
  `empjoiningdate` varchar(200) NOT NULL,
  `emppassword` varchar(200) NOT NULL,
  `empaddress` varchar(1000) NOT NULL,
  `empcellphone` varchar(200) NOT NULL,
  `empdob` varchar(200) NOT NULL,
  `empfield` varchar(500) NOT NULL,
  `empsubject` varchar(500) NOT NULL,
  `empalot` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`empid`, `empname`, `empemail`, `empjoiningdate`, `emppassword`, `empaddress`, `empcellphone`, `empdob`, `empfield`, `empsubject`, `empalot`) VALUES
(1, 'k', 'k@gmail.com', '2021-06-02', 'krsihna', 'kanpur', '1234', '', 'cse', 'html', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `userphone` varchar(200) NOT NULL,
  `useraddress` varchar(1000) NOT NULL,
  `userdob` varchar(200) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `role` int(100) NOT NULL,
  `userimg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `useremail`, `userphone`, `useraddress`, `userdob`, `userpassword`, `role`, `userimg`) VALUES
(1, 'user1', 'user1@gmail.com', '12345', 'user1', '2021-05-24', 'user1', 2, ''),
(4, 'user2', 'user2@gmail.com', '12345', 'user2', '2021-05-24', 'user2', 2, 'cor1.jpg'),
(5, 'user3', 'user3@gmail.com', '12345', 'user3', '2021-05-24', 'user3', 2, 'cor7.png'),
(7, 'user4', 'user4@gmail.com', '12345', 'user4', '2021-05-28', 'user4', 2, '3.jpg'),
(8, 'user5', 'user5@gmail.com', '12345', 'user5', '2021-05-28', 'user5', 2, 'cor4.jpg'),
(9, 'shweta jha', 'shwetaj954@gmail.com', '12345', 'kanpur', '1999-12-16', 'shwetaj', 1, 'profile.jpg'),
(12, 'a', 'a@gmail.com', '12345', 'india', '2021-06-05', 'abc', 2, 'Screenshot (1).png'),
(13, 'example', 'example@gmail.com', '12345', 'india', '2021-06-24', 'example', 2, 'Screenshot (1).png'),
(14, 'example1', 'example1@gmail.com', '12345', 'india', '1997-03-06', 'example1', 2, 'Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE `usercontact` (
  `id` int(11) NOT NULL,
  `useremail` varchar(500) NOT NULL,
  `userquery` varchar(5000) NOT NULL,
  `role` varchar(200) NOT NULL,
  `username` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`id`, `useremail`, `userquery`, `role`, `username`) VALUES
(7, 'user1@gmail.com', 'ntt', '2', 'user1'),
(8, 'user1@gmail.com', 'ntt', '2', 'user1'),
(9, 'user1@gmail.com', 'ntt', '2', 'user1'),
(10, 'user1@gmail.com', 'ntt', '2', 'user1'),
(13, 'user1@gmail.com', 'kjs', '2', 'user1'),
(14, 'shwetaj954@gmail.com', 'fd', '2', 'user1'),
(15, 'shwetaj954@gmail.com', 'fd', '2', 'user1'),
(16, 'shwetaj954@gmail.com', 'not meets date of join', '2', 'shweta jha'),
(18, 'user2@gmail.com', 'No Query', '2', 'user2'),
(19, 'user1@gmail.com', 'please Help My Class Not Start', '2', 'user1'),
(20, 'user1@gmail.com', 'When Class Start?', '2', 'user1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applycourse`
--
ALTER TABLE `applycourse`
  ADD UNIQUE KEY `corid` (`corid`);

--
-- Indexes for table `classlink`
--
ALTER TABLE `classlink`
  ADD PRIMARY KEY (`clsid`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`corid`);

--
-- Indexes for table `elibrary`
--
ALTER TABLE `elibrary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `empemail` (`empemail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- Indexes for table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classlink`
--
ALTER TABLE `classlink`
  MODIFY `clsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courselist`
--
ALTER TABLE `courselist`
  MODIFY `corid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `elibrary`
--
ALTER TABLE `elibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
