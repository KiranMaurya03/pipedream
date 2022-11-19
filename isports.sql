-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2022 at 06:18 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isports`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_college`
--

DROP TABLE IF EXISTS `about_college`;
CREATE TABLE IF NOT EXISTS `about_college` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `about_college` varchar(5000) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_college`
--

INSERT INTO `about_college` (`sno`, `about_college`, `date_time`) VALUES
(3, '                                        Lovely Professional University is a private university located in Chaheru, Phagwara, Punjab, India. The university was established in 2005 by Lovely International Trust, under The Lovely Professional University Act, 2005 and started operation in 2006.Lovely Professional University (LPU) is a private university ranked 47th by NIRF in the Indian Universities ranking. LPU has released the LPUNEST 2023 application form for admission to all UG, PG, and PhD including BTech and MBA programs. The last date to apply for LPUNEST 2023 is January 20, 2023. Aspiring candidates can apply online on the official website - admission.lpu.in. The slot booking for online examination will begin on December 26, 2022. LPUNEST 2023 will be conducted between January 25 and February 7, 2023. Also, applications are open for LPU PhD admission till November 24. LPUNEST for PhD will be held on November 25 and November 27, and results for the same will be announced on December 3, 2022.', '2022-06-21 05:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `about_sports`
--

DROP TABLE IF EXISTS `about_sports`;
CREATE TABLE IF NOT EXISTS `about_sports` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `about_sports` varchar(5000) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_sports`
--

INSERT INTO `about_sports` (`sno`, `about_sports`, `date_time`) VALUES
(8, '                Lovely Professional University believes that talent is not captive to anything. Unfortunately many of the talented students have to compromise on their careers because of financial hardships. It is a matter of immense pleasure that LPU is giving scholarship on the basis of their performance in Sports, Cultural, R and D, Co-curricular, Social Service, Bravery Awards which aims at realizing the dreams of all those who seriously chase their dreams. Our initiative is more of a reward rather than support.\r\n\r\nScholarship on the basis of Performance in Sports, Cultural, R and D, Co-curricular, Social Service, Bravery Awards.\r\nLovely Professional University boasts the largest campus in the area, with fields, stadiums, auditoriums, and everything else you could possibly need. Now, since you have not stated whatever sport you participate in, I will just give you a quick rundown of the facilities.\r\n\r\nAt the university, there are multiple sports clubs for various sports. Football, volleyball, shooting, judo, taekwondo, kabaddi, netball, and boxing are just a handful of the sports that I am aware of. The best way to find out is to go to the universitys website, but I am confident that whatever sport you enjoy, you will find a club for it at LPU.\r\n\r\nAs for the facilities, LPU is very well known for its infrastructure and faculty, meaning that you will have all the equipment you need, plus the coaches and faculty at the university will also be able to guide you perfectly, throughout your training and practices. It also does not hurt that apart from the sports, you will also have great curriculum and academics as well.\r\n\r\nLovely Professional University is sportspersons HUB. LPU has sporting clubs in more than 24 different sports.\r\n', '2022-06-21 05:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `adm_id` varchar(50) NOT NULL,
  `adm_name` varchar(200) DEFAULT NULL,
  `adm_phone` varchar(15) DEFAULT NULL,
  `adm_email` varchar(100) DEFAULT NULL,
  `adm_dob` date DEFAULT NULL,
  `adm_gender` char(1) DEFAULT NULL,
  `adm_password` varchar(150) DEFAULT NULL,
  `adm_added_on` datetime DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `adm_id`, `adm_name`, `adm_phone`, `adm_email`, `adm_dob`, `adm_gender`, `adm_password`, `adm_added_on`) VALUES
(7, '10:54:37', 'Admin', '1234567890', 'admin@gmail.com', '2022-07-02', 'm', '202cb962ac59075b964b07152d234b70', '2022-07-07 10:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `address`, `phone`, `mobile`, `email`, `datetime`) VALUES
(6, 'LPU, Punjab,\r\nJalandhar - Delhi, Grand Trunk Rd, Phagwara, Punjab 144001', '+9179033624055', '+917739663861', 'info@lpu.com', '2022-06-21 05:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `fac_id` varchar(50) NOT NULL,
  `fac_name` varchar(200) NOT NULL,
  `fac_designation` varchar(50) NOT NULL,
  `fac_phone` varchar(15) NOT NULL,
  `fac_email` varchar(100) NOT NULL,
  `fac_password` varchar(150) NOT NULL,
  `fac_dob` date NOT NULL,
  `fac_gender` char(1) NOT NULL,
  `fac_added_on` datetime NOT NULL,
  `fac_login_status` char(1) DEFAULT 'T',
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sno`, `fac_id`, `fac_name`, `fac_designation`, `fac_phone`, `fac_email`, `fac_password`, `fac_dob`, `fac_gender`, `fac_added_on`, `fac_login_status`) VALUES
(27, '12', 'Faculty', 'Associate Professor', '1234567890', 'faculty@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-14', 'M', '2022-07-08 12:59:12', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`sno`, `date_time`, `img`) VALUES
(83, '2022-11-16 11:27:46', 'images/gallery/download.jfif'),
(82, '2022-11-16 11:27:37', 'images/gallery/images (4).jfif'),
(81, '2022-11-16 11:27:19', 'images/gallery/images.jfif'),
(80, '2022-11-16 11:27:08', 'images/gallery/download (6).jfif'),
(79, '2022-11-16 11:26:11', 'images/gallery/images (7).jfif'),
(75, '2022-11-16 11:25:16', 'images/gallery/images (2).jfif'),
(76, '2022-11-16 11:25:28', 'images/gallery/images (3).jfif'),
(77, '2022-11-16 11:25:39', 'images/gallery/images (4).jfif'),
(74, '2022-11-16 11:25:01', 'images/gallery/images (1).jfif'),
(73, '2022-11-16 11:24:10', 'images/gallery/download.jfif'),
(72, '2022-11-16 11:24:00', 'images/gallery/download (5).jfif'),
(71, '2022-11-16 11:23:49', 'images/gallery/download (4).jfif'),
(70, '2022-11-16 11:23:41', 'images/gallery/download (3).jfif'),
(69, '2022-11-16 11:23:31', 'images/gallery/download (1).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(100) NOT NULL,
  `notice_description` varchar(200) NOT NULL,
  `notice_pdf` varchar(1000) NOT NULL,
  `active_status` char(1) NOT NULL DEFAULT 'T',
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`sno`, `notice_title`, `notice_description`, `notice_pdf`, `active_status`, `date_time`) VALUES
(34, 'Sports-Fest 2023', 'Notice Related to Sports-Fest 2022, which is going to be held on 3rd Feb 2023', 'pdf/holiday.pdf', 'T', '2022-06-27 13:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `sno` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(1000) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sno`, `img`, `date_time`) VALUES
(21, 'images/slider/download.jfif', '2022-11-16 18:07:34'),
(20, 'images/slider/slider1.jfif', '2022-11-16 11:34:39'),
(19, 'images/slider/slider2.jfif', '2022-11-16 11:34:29'),
(18, 'images/slider/slider3.jfif', '2022-11-16 11:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `sno` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(2000) NOT NULL,
  `sports_name` varchar(100) NOT NULL,
  `sports_desc` varchar(2000) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sno`, `img`, `sports_name`, `sports_desc`, `date_time`) VALUES
(64, 'images/sports/chess.webp', 'Chess', 'Chess is a board game played between two players. It is sometimes called Western chess or international chess to distinguish it from related games such as xiangqi and shogi.', '2022-06-21 07:49:54'),
(65, 'images/sports/cricket.jpg', 'Cricket', 'Cricket is a bat-and-ball game played between two teams of eleven players each on a field at the centre of which is a 22-yard (20-metre) pitch with a wicket at each end, each comprising two bails balanced on three stumps.', '2022-06-21 07:50:14'),
(66, 'images/sports/race.webp', 'Race', 'In sport, racing is a competition of speed, in which competitors try to complete a given task in the shortest amount of time. Typically this involves traversing some distance, but it can be any other task involving speed to reach a specific goal.', '2022-06-21 07:50:30'),
(67, 'images/sports/tableTennis.jpg', 'Table-Tennis', 'Table tennis, also known as ping-pong and whiff-whaff, is a sport in which two or four players hit a lightweight ball, also known as the ping-pong ball, back and forth across a table using small solid rackets.', '2022-06-21 07:50:54'),
(62, 'images/sports/badminton.webp', 'Badminton', 'Badminton is a racquet sport played using racquets to hit a shuttlecock across a net. Although it may be played with larger teams, the most common forms of the game are \"singles\" and \"doubles\".', '2022-06-21 07:31:46'),
(63, 'images/sports/carrom.webp', 'Carrom', 'Carrom is a tabletop game of Indian origin. The game is very popular in the Indian subcontinent, and is known by various names in different languages. In South Asia, many clubs and cafÃ©s hold regular tournaments.', '2022-06-21 07:32:06'),
(70, 'images/sports/volleyBall.jpg', 'VolleyBall', 'Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other teams court under organized rules.', '2022-06-27 11:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(5) NOT NULL AUTO_INCREMENT,
  `stu_roll` varchar(50) NOT NULL,
  `stu_name` varchar(200) NOT NULL,
  `stu_course` varchar(50) NOT NULL,
  `stu_semester` varchar(50) NOT NULL,
  `stu_phone` varchar(15) NOT NULL,
  `stu_email` varchar(100) NOT NULL,
  `stu_password` varchar(150) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_gender` char(1) NOT NULL,
  `stu_added_on` datetime NOT NULL,
  `stu_login_status` char(1) DEFAULT 'T',
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_roll`, `stu_name`, `stu_course`, `stu_semester`, `stu_phone`, `stu_email`, `stu_password`, `stu_dob`, `stu_gender`, `stu_added_on`, `stu_login_status`) VALUES
(49, '62', 'Kiran ', 'MBA', '3', '8081695418', 'kiran@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-11', 'F', '2022-11-16 17:59:48', 'T'),
(50, '45', 'Akhilesh', 'BBA', '3', '8081695418', 'akhil@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-12', 'M', '2022-11-16 18:02:20', 'T'),
(47, '32', 'Akhilesh', 'MCA', '1', '7903362405', 'student@gmail.com', '202cb962ac59075b964b07152d234b70', '2002-09-15', 'M', '2022-10-07 08:40:22', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `stud_sports_registration`
--

DROP TABLE IF EXISTS `stud_sports_registration`;
CREATE TABLE IF NOT EXISTS `stud_sports_registration` (
  `ssr_id` int(5) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`ssr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
