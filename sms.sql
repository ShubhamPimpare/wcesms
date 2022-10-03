-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Oct 02, 2022 at 01:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `changepas`
--

CREATE TABLE `changepas` (
  `opass` varchar(150) NOT NULL,
  `npass` varchar(150) NOT NULL,
  `cpass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csa`
--

CREATE TABLE `csa` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csa`
--

INSERT INTO `csa` (`id`, `name`, `gender`, `address`, `contact`, `delete_status`, `email`, `ay`, `dname`, `adate`) VALUES
(0, 'csa1', 'Male', 'wce', '8668549630', 0, 'csa1@gmail.com', '2021-2022', 'IT', '2022-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `facilitator`
--

CREATE TABLE `facilitator` (
  `id` int(11) NOT NULL,
  `faccode` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilitator`
--

INSERT INTO `facilitator` (`id`, `faccode`, `name`, `gender`, `address`, `contact`, `delete_status`, `email`, `ay`, `dname`, `adate`) VALUES
(7, '', 'SA', 'Male', 'WCE', '8668549630', 0, 's1@gmail.com', '2021-2022', 'DEGREE CSE', '2022-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `gc`
--

CREATE TABLE `gc` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gc`
--

INSERT INTO `gc` (`id`, `name`, `gender`, `address`, `contact`, `delete_status`, `email`, `ay`, `dname`, `adate`) VALUES
(5, 'Shubham Pimpare', 'Male', 'Santa Ana, Uruca', '8668549630', 0, 'spimparemi@gmail.com', '2021-2022', 'DEGREE ELECTRICAL', '2022-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `gi`
--

CREATE TABLE `gi` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gi`
--

INSERT INTO `gi` (`id`, `name`, `gender`, `address`, `contact`, `delete_status`, `email`, `ay`, `dname`, `adate`) VALUES
(1, 'g1', 'Male', 'wce', '8668549630', 1, 'g1@gmail.com', '2021-2022', 'ELECTRONICS', '0000-00-00'),
(2, 'gc1', 'Male', 'wce', '8668549630', 1, 'gc1@gmail.com', '2021-2022', 'ELECTRICAL', '0000-00-00'),
(3, 'gi', 'Male', 'wce', '8668549630', 0, 'gi@gmail.com', '2021-2022', 'DEGREE CSE', '2022-07-13'),
(4, 'Shubham Pimpare', 'Male', 'WCE', '8668549630', 0, 'spimparemi@gmail.com', '2021-2022', 'DEGREE CSE', '2022-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `id` int(11) NOT NULL,
  `req` text NOT NULL,
  `rby` varchar(20) NOT NULL,
  `rcontact` varchar(20) NOT NULL,
  `rne` varchar(20) NOT NULL,
  `rd` date NOT NULL,
  `ray` varchar(255) NOT NULL,
  `delete_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`id`, `req`, `rby`, `rcontact`, `rne`, `rd`, `ray`, `delete_status`) VALUES
(1, 'e1', 'Shubham Pimpare', '8668549630', '3', '2022-09-29', '2021-2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(15) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physicaldirector`
--

CREATE TABLE `physicaldirector` (
  `id` int(11) NOT NULL,
  `fdcode` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `delete_status` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physicaldirector`
--

INSERT INTO `physicaldirector` (`id`, `fdcode`, `name`, `gender`, `address`, `contact`, `delete_status`, `email`, `ay`, `stime`, `etime`, `adate`) VALUES
(1, 'PHYS-001', 'Radha', 'Female', '23, vasant vihar, ojar ', '9090909090', 1, 'aw@bb.v', '2021-2022', '00:00:00', '00:00:00', '0000-00-00'),
(2, 'PHYS-002', 'raghini', 'Female', '14, ojar ', '4562312523', 1, '', '', '13:00:00', '17:00:00', '0000-00-00'),
(3, '', 'p1', 'Male', 'wce', '8668549630', 1, 'p1@gmail.com', '2021-2022', '17:00:00', '00:00:00', '2022-09-01'),
(4, '', 'Shubham Pimpare', 'Male', 'WCE', '8668549630', 0, 'spimparemi@gmail.com', '2021-2022', '17:00:00', '00:00:00', '2022-10-02'),
(5, '', 'Shubham Pimpare', 'Male', 'Santa Ana, Uruca', '86685496301', 1, 'spimparemi@gmail.com', '2021-2022', '09:34:00', '18:34:00', '2022-10-02'),
(6, '', 'Shubham Pimpare', '', 'Santa Ana, Uruca', '86685496301', 1, 'spimparemi@gmail.com', '2021-2022', '09:38:00', '17:40:00', '2022-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `playercode` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `page` int(20) NOT NULL,
  `pcourse` text NOT NULL,
  `padd` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `school` varchar(50) NOT NULL,
  `sportname` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `pa` text NOT NULL,
  `pyear` varchar(30) NOT NULL,
  `image` varchar(50) CHARACTER SET macce COLLATE macce_general_nopad_ci NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `playercode`, `fname`, `page`, `pcourse`, `padd`, `gender`, `school`, `sportname`, `contact`, `delete_status`, `pa`, `pyear`, `image`, `mname`, `lname`, `email`) VALUES
(7, '', 'p4', 18, 'CSE', 'wce', 'Male', 'Excel Public School', 'Cricket', '8668549630', 1, 'a2', 'FY', '', '', '', ''),
(11, '', 'Shubham', 23, '', 'WCE', 'Male', 'TEAM 1', 'Cricket', '8668549630', 1, 'NONE', 'BTECH', '', 'Suresh', 'Pimpare', ''),
(12, '', 'Shubham', 0, 'CSE', 'wce', 'Male', 'TEAM 1', 'Cricket', '8668549630', 1, 'NONE', 'FY', '', '', 'Pimpare', ''),
(13, '', 'f1', 23, 'IT', 'WCE', 'Male', 'TEAM 1', 'Cricket', '8668549630', 0, 'NONE', 'TY', '', 'm1', 'l1', 'sp@gmail.com'),
(23, '', 'f3', 22, 'CSE', 'wce', 'Male', 'TEAM 1', 'Cricket', '8668549630', 0, 'NONE', 'TY', '', 'm3', 'l3', ''),
(24, '', '', 0, '---Select Your Branch---', '', '---Select Gender---', '----Select Team Name----', '----Select Sport Nam', '', 1, '', '---Select Year---', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `req` text NOT NULL,
  `rnpost` text NOT NULL,
  `remail` text NOT NULL,
  `rcontact` varchar(20) NOT NULL,
  `rld` date NOT NULL,
  `ray` varchar(255) NOT NULL,
  `raf` varchar(20) NOT NULL,
  `rpost` varchar(20) NOT NULL,
  `delete_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `req`, `rnpost`, `remail`, `rcontact`, `rld`, `ray`, `raf`, `rpost`, `delete_status`) VALUES
(2, 'r1', '7', 'r1@gmail.com', '8668549630', '2022-09-30', '2021-2022', 'Both Boys And Girls', 'p1', 0),
(3, 'e1', '', '', '8668549630', '0000-00-00', '2021-2022', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `tname` text NOT NULL,
  `result_school` varchar(100) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `delete_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `tname`, `result_school`, `rank`, `delete_status`) VALUES
(5, 'tournament', 'TEAM 1', 'Winner', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `scode` varchar(25) NOT NULL,
  `sname` text NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `school_state` varchar(30) NOT NULL,
  `sgrade` text NOT NULL,
  `r_status` int(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `sportname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `scode`, `sname`, `saddress`, `school_state`, `sgrade`, `r_status`, `delete_status`, `email`, `ay`, `sportname`) VALUES
(6, '', 'TEAM 1', 'WCE', 'Maharashtra', 'COLLEGE LEVEL', 0, 0, 't1@gmail.com', '2021-2022', 'Running'),
(7, '', 'TEAM 2', 'WCE', 'Maharashtra', 'COLLEGE LEVEL', 0, 1, 't2@gmail.com', '2021-2022', ''),
(8, '', 'TEAM 1', 'Santa Ana, Uruca', 'Andaman and Nicobar ', 'COLLEGE LEVEL', 0, 1, 'spimparemi@gmail.com', '2021-2022', ''),
(12, '', 'TEAM 2', 'WCE', 'Maharashtra', 'COLLEGE LEVEL', 0, 0, 't2@gmail.com', '2021-2022', 'Running'),
(13, '', 'DCUP', 'Santa Ana, Uruca', 'Andaman and Nicobar ', 'COLLEGE LEVEL', 0, 1, 'spimparemi@gmail.com', '2021-2022', 'Cricket'),
(14, '', 'DCUP', 'Santa Ana, Uruca', 'Andhra Pradesh', 'COLLEGE LEVEL', 0, 0, 'spimparemi@gmail.com', '2021-2022', 'Cricket');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `uname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `cpass` varchar(150) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `uname`, `email`, `mob`, `pass`, `cpass`, `photo`) VALUES
(6, 'Admin', 'admin@gmail.com', '8668549630', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', '');

-- --------------------------------------------------------

--
-- Table structure for table `sportdetails`
--

CREATE TABLE `sportdetails` (
  `id` int(11) NOT NULL,
  `sportcode` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sporttype` varchar(20) NOT NULL,
  `gametype` varchar(20) NOT NULL,
  `numofplayers` int(11) NOT NULL,
  `annualbudget` varchar(20) NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `ay` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `csaname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportdetails`
--

INSERT INTO `sportdetails` (`id`, `sportcode`, `name`, `sporttype`, `gametype`, `numofplayers`, `annualbudget`, `delete_status`, `ay`, `sname`, `csaname`) VALUES
(1, 'SPORT011', 'Cricket', 'TEAM', '', 11, '200000', 0, '2021-2022', 'SA', 'csa1'),
(2, 'SPORT012', 'Running', 'SINGLE', 'PER METER', 1, '50000', 1, '', '', ''),
(3, 'SPORT013', 'Badminton', 'DOUBLE', 'PER QUARTER', 2, '', 1, '', '', ''),
(4, 'SPORT014', 'Soccer', 'SINGLE', 'PER METER', 12, '50000', 1, '', '', ''),
(5, '', 'Running', 'SINGLE', '', 1, '100000', 0, '2021-2022', 'S1', 'csa1'),
(6, '', '', '----Select Sport Typ', '', 0, '', 1, '', '----Select Staff Advisor Name----', '----Select Co-Staff Advisor Name----'),
(7, '', 'sport', 'SINGLE', '', 1, '400000', 1, '2021-2022', 'SA', '----Select Co-Staff Advisor Name----');

-- --------------------------------------------------------

--
-- Table structure for table `sport_name`
--

CREATE TABLE `sport_name` (
  `name` varchar(100) NOT NULL,
  `delete_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_name`
--

INSERT INTO `sport_name` (`name`, `delete_status`) VALUES
('Soccer', 0),
('Basketball', 0),
('Tennis', 0),
('Baseball', 0),
('Golf', 0),
('Running', 0),
('Volleyball', 0),
('Badminton', 0),
('Swimming', 0),
('Boxing', 0),
('Table tennis', 0),
('Skiing', 0),
('Ice skating', 0),
('Running', 0),
('Roller skating', 0),
('Cricket', 0),
('Rugby', 0),
('Pool', 0),
('Darts', 0),
('Football', 0),
('Bowling', 0),
('Ice hockey', 0),
('Surfing', 0),
('Karate', 0),
('Horse racing', 0),
('Snowboarding', 0),
('Skateboarding', 0),
('Cycling', 0),
('Archery', 0),
('Fishing', 0),
('Gymnastics', 0),
('Figure skating', 0),
('Rock climbing', 0),
('Sumo wrestling', 0),
('Taekwondo', 0),
('Fencing', 0),
('Water skiing', 0),
('Jet skiing', 0),
('Weight lifting', 0),
('Scuba diving', 0),
('Judo', 0),
('Wind surfing', 0),
('Kickboxing', 0),
('Sky diving', 0),
('Hang gliding', 0),
('Bungee jumping', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `school_state` varchar(30) NOT NULL,
  `delete_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`school_state`, `delete_status`) VALUES
('Andaman and Nicobar ', 0),
('Andhra Pradesh', 0),
('Arunachal Pradesh', 0),
('Assam', 0),
('Bihar', 0),
('Chandigarh', 0),
('Chhattisgarh', 0),
('Dadra and Nagar Have', 0),
('Daman and Diu', 0),
('Delhi-NCR', 0),
('Goa', 0),
('Gujarat', 0),
('Haryana', 0),
('Himachal Pradesh', 0),
('Jammu and Kashmir', 0),
('Jharkhand', 0),
('Karnataka', 0),
('Kenmore', 0),
('Kerala', 0),
('Lakshadweep', 0),
('Madhya Pradesh', 0),
('Maharashtra', 0),
('Manipur', 0),
('Meghalaya', 0),
('Mizoram', 0),
('Nagaland', 0),
('Narora', 0),
('Natwar', 0),
('Odisha', 0),
('Paschim Medinipur', 0),
('Pondicherry', 0),
('Punjab', 0),
('Rajasthan', 0),
('Sikkim', 0),
('Tamil Nadu', 0),
('Telangana', 0),
('Tripura', 0),
('TEST', 0),
('UP-1', 0),
('xxxxxx', 0),
('West Bengal', 0),
('UP-2', 0),
('Arunachal Pradesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblfiles`
--

CREATE TABLE `tblfiles` (
  `id` int(11) NOT NULL,
  `FileName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfiles`
--

INSERT INTO `tblfiles` (`id`, `FileName`, `Location`) VALUES
(1, 'PARENTS UNDERTAKING', '../assets/upload/01102022125040Undertakinq bv Parent Dc 21.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(11) NOT NULL,
  `tname` text NOT NULL,
  `ttype` varchar(30) NOT NULL,
  `sport` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `pname` varchar(50) NOT NULL,
  `venue` text NOT NULL,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `status` text NOT NULL,
  `delete_status` tinyint(2) NOT NULL,
  `ay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id`, `tname`, `ttype`, `sport`, `name`, `pname`, `venue`, `date`, `stime`, `etime`, `status`, `delete_status`, `ay`) VALUES
(1, 'ICC Cricket World Cup', 'Single League', 'Cricket', 'Mr Yashodhan Joshi ', 'Radha', 'CGMSC COURT', '2021-10-13', '09:45:00', '20:55:00', 'Championship', 1, '2021-2022'),
(2, 'hj', 'hjg', 'Running', '----Select Facilitator Name----', '', '', '0000-00-00', '00:00:00', '00:00:00', '', 1, ''),
(3, 'jvhk', 'ghc', 'Running', 'Mr Yashodhan Joshi ', '', 'ghcc', '2022-05-11', '17:50:00', '15:52:00', 'gfxkxf', 1, ''),
(4, 'dsfgt', 'gfh', 'Cricket', 'Mr Saurabh Patil', 'raghini', 'bhj', '2022-09-21', '21:58:00', '22:59:00', 'cvbgnhg', 1, ''),
(5, 'tournament', 'ONE DAY', 'Cricket', 'S1', 'p1', 'WCE GROUND', '2022-09-30', '00:00:00', '00:00:00', 'completed', 0, '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(1, '20220928110452_Gymkhana Staff Advisers NEW by AJU.pdf', 'Gymkhana Staff Advisers NEW by AJU.pdf'),
(2, '20220928110459_ARS ORDER Notification_Extra Curricular Activity Committee 24 AUGUST 2021.pdf', 'ARS ORDER Notification_Extra Curricular Activity Committee 24 AUGUST 2021.pdf'),
(3, '20220928110505_Undertakinq bv Parent Dc 21.docx', 'Undertakinq bv Parent Dc 21.docx'),
(4, '20220928110511_Identity Card for College.docx', 'Identity Card for College.docx'),
(5, '20220928110517_Gymkhana_Zonal_Mactches_visit_permission_letter_from_director_staffAdviser_2021_22.docx', 'Gymkhana_Zonal_Mactches_visit_permission_letter_from_director_staffAdviser_2021_22.docx'),
(6, '20220928110526_Covering letter.docx', 'Covering letter.docx'),
(7, '20220928110532_blank Eligibility -Sports_Zonal_2021_22.doc', 'blank Eligibility -Sports_Zonal_2021_22.doc');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(11) NOT NULL,
  `viewercode` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `delete_status` tinyint(4) NOT NULL,
  `cpass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewer`
--

INSERT INTO `viewer` (`id`, `viewercode`, `name`, `gender`, `email`, `password`, `mobile`, `image`, `delete_status`, `cpass`) VALUES
(3, '', 'Shubham Pimpare', 'Male', 'shubham@gmail.com', 'fed486ee26b97f2be4b25f4e4ce2b2b34d9f3e65537b56329f8fa2ccb443e624', '8668549630', 'pimpareshubham-20220923-0001.jpg', 1, ''),
(4, '', 'Shubham', 'Male', 'shubham@gmail.com', 'fed486ee26b97f2be4b25f4e4ce2b2b34d9f3e65537b56329f8fa2ccb443e624', '8668549630', 'pimpareshubham-20220923-0001.jpg', 0, ''),
(5, '', 'viewer', 'Male', 'v2@gmail.com', 'bbcff4db4d8057800d59a68224efd87e545fa1512dfc3ef68298283fbb3b6358', '8668549630', 'wcoe logo.jpg', 0, ''),
(6, '', 'viewer sp', 'Male', 'viewer3@gmail.com', 'fbd0947007c917c4eb90dd723fe817b4768c05028d87427f63cfee12e359ec6f', '8668549630', '20220930_082227.png', 0, ''),
(7, '', 'viwer 4', 'Male', 'v4@gmail.com', '582e81accbcbf7144f2e28eafdfda4162cbf744c25e93d2667da5a4ad58fe1b0', '8668549630', 'sportlogo.png', 0, ''),
(8, '', '', '', 'vn@gmail.com', '241992a37c6a7a7044edca190836547108001676d2f586efa0f1923da5372454', '', '', 0, '241992a37c6a7a7044edca190836547108001676d2f586efa0f1923da5372454'),
(9, '', 'ShubhamSP', '', 'test1@gmail.com', 'fed486ee26b97f2be4b25f4e4ce2b2b34d9f3e65537b56329f8fa2ccb443e624', '8668549630', 'pimpareshubham-20220923-0001.jpg', 0, 'fed486ee26b97f2be4b25f4e4ce2b2b34d9f3e65537b56329f8fa2ccb443e624'),
(10, '', 'Jennifer Krebs', '', 'admin@gmail.com', '10bf4a9b2cc63e1e20d382174d584bb4eb5f7c8ce24d8c625c608a775eed7961', '8668549630', '', 0, '10bf4a9b2cc63e1e20d382174d584bb4eb5f7c8ce24d8c625c608a775eed7961'),
(11, '', 'try', '', 'try@gmail.com', '1ceb46f8a660276ee50ed5f6b6c788fe8e6d7f54db25ebb4c06a9435b9a00a84', '8668549630', 'IMG20220917183917.jpg', 0, '1ceb46f8a660276ee50ed5f6b6c788fe8e6d7f54db25ebb4c06a9435b9a00a84'),
(12, '', 'Avinash ', '', 'khude176@gmail.com', 'fc8a49d4c7d1a8e184c2dbedceaf19ac81daf6def2d53723bb972b2db98bdc80', '9146189766', '', 0, 'fc8a49d4c7d1a8e184c2dbedceaf19ac81daf6def2d53723bb972b2db98bdc80'),
(13, '', 'vaibhav', '', 'vaibhavganage26@gmail.com', '2e52b2bc3eaa70fb7eb93e392b485d97b88a411674072850e6c68379a2e30cf2', '', '', 0, '2e52b2bc3eaa70fb7eb93e392b485d97b88a411674072850e6c68379a2e30cf2');

-- --------------------------------------------------------

--
-- Table structure for table `web_management`
--

CREATE TABLE `web_management` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `footer` varchar(100) NOT NULL,
  `site_key` varchar(100) NOT NULL,
  `secret_key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_management`
--

INSERT INTO `web_management` (`id`, `title`, `favicon`, `footer`, `site_key`, `secret_key`) VALUES
(1, 'First Project Theme', '', 'Sport Management System', '6LdJC4AeAAAAAE638ShRfVSMBDSDjbQmkxD-lh_p', '6LdJC4AeAAAAAMLn9tfGX8_BoZGIwLHgBNiiYgxb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilitator`
--
ALTER TABLE `facilitator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gc`
--
ALTER TABLE `gc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gi`
--
ALTER TABLE `gi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physicaldirector`
--
ALTER TABLE `physicaldirector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportdetails`
--
ALTER TABLE `sportdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_management`
--
ALTER TABLE `web_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilitator`
--
ALTER TABLE `facilitator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gc`
--
ALTER TABLE `gc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gi`
--
ALTER TABLE `gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ir`
--
ALTER TABLE `ir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `physicaldirector`
--
ALTER TABLE `physicaldirector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sportdetails`
--
ALTER TABLE `sportdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfiles`
--
ALTER TABLE `tblfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `web_management`
--
ALTER TABLE `web_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
