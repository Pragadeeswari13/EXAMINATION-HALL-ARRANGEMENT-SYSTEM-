-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2024 at 07:13 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_automation_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `type` varchar(19) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`type`, `username`, `password`) VALUES
('admin', 'admin', 'admin'),
('coordinator', 'coordinator', 'coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `class_room`
--

CREATE TABLE `class_room` (
  `id` int(11) NOT NULL,
  `rooms` varchar(30) NOT NULL,
  `seats` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_room`
--

INSERT INTO `class_room` (`id`, `rooms`, `seats`, `status`) VALUES
(1, 'LH-20', 40, 0),
(2, 'LH-21', 40, 0),
(3, 'LH-23', 40, 0),
(4, 'LH-24', 40, 0),
(5, 'LH-25', 40, 1),
(6, 'TPCELL', 35, 0),
(7, 'EDC CELL', 34, 0),
(8, 'LH-22', 40, 1),
(9, 'LH-23', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `dept_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept`, `dept_code`) VALUES
('101', 'Computer Science', 'CS'),
('102', 'Elec. Communication', 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `exam_date`
--

CREATE TABLE `exam_date` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `date_schedule` varchar(20) NOT NULL,
  `from_date` varchar(20) NOT NULL,
  `to_date` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_date`
--

INSERT INTO `exam_date` (`id`, `sid`, `dept`, `details`, `date_schedule`, `from_date`, `to_date`, `status`) VALUES
(4, 1, '101', 'odel', '08-06-2024', '05-06-2024', '17-06-2024', 1),
(5, 1, '101', 'odel', '09-06-2024', '05-06-2024', '17-06-2024', 1),
(8, 1, '101', 'odel', '12-06-2024', '05-06-2024', '17-06-2024', 1),
(9, 1, '101', 'odel', '13-06-2024', '05-06-2024', '17-06-2024', 1),
(10, 1, '101', 'odel', '14-06-2024', '05-06-2024', '17-06-2024', 1),
(11, 1, '101', 'odel', '15-06-2024', '05-06-2024', '17-06-2024', 1),
(12, 1, '101', 'odel', '16-06-2024', '05-06-2024', '17-06-2024', 1),
(13, 1, '101', 'odel', '17-06-2024', '05-06-2024', '17-06-2024', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `dno` varchar(15) NOT NULL,
  `mid` float NOT NULL,
  `end` float NOT NULL,
  `cia1` float NOT NULL,
  `cia2` float NOT NULL,
  `cia3` float NOT NULL,
  `cia4` float NOT NULL,
  `atten` float NOT NULL,
  `tot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `staffid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `gender`, `qualification`, `staffid`, `password`, `status`) VALUES
(1, 'A.DEVANBU', 'male', '', 'S1', '1234', 0),
(2, 'D.CAUVERY', 'female', '', '', '', 0),
(3, 'M.J.JEYASHEELA RAKKINI', 'female', '', '', '', 0),
(4, 'MS.JASMINE ALICE MANONMANI', 'female', '', '', '', 0),
(5, 'C.SAKUNTHALA', 'female', '', '', '', 0),
(6, 'Y.SUGANYA', 'female', '', '', '', 0),
(7, 'S.NIVETHA', 'female', '', '', '', 0),
(8, 'R.ELAKYA', 'female', '', '', '', 0),
(9, 'G.SHARMILA', 'female', '', '', '', 0),
(10, 'S.MOHAMED YUSUFF', 'male', '', '', '', 0),
(11, 'K.VIJAYA LAKSHMI', 'female', '', '', '', 0),
(12, 'M.FLORA MARY', 'female', '', '', '', 0),
(13, 'B.JAYANTHI', 'female', '', '', '', 0),
(14, 'S.SIGAPPI', 'female', '', '', '', 0),
(15, 'N.NAGAPANDIAN', 'male', '', '', '', 0),
(16, 'K.SUBALAKSHMI', 'female', '', '', '', 0),
(17, 'J.KANIMOZHI', 'female', '', '', '', 0),
(18, 'C.JAYAPRABHA', 'female', '', '', '', 0),
(19, 'T.DHIVYA', 'female', '', '', '', 0),
(20, 'K.CINTHAMANI', 'female', '', '', '', 0),
(21, 'R.BHUVANESHWARI', 'female', '', '', '', 0),
(22, 'T.SHANMUGAPRIYA', 'female', '', '', '', 0),
(23, 'S.PRAKASH', 'male', '', '', '', 0),
(24, 'jegani', 'Male', 'bb', '', '', 0),
(25, 'jegani', 'Male', 'bb', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `enrollno` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `class_det` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `deptid` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `row_id` int(11) NOT NULL,
  `rdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `enrollno`, `regno`, `class_det`, `name`, `gender`, `email`, `deptid`, `level`, `degree`, `sem`, `month`, `year`, `class_id`, `paid`, `row_id`, `rdate`) VALUES
(1, '1101', '', 'AA', 'Raj', 'Male', 'jebinp08@gmail.com', '101', 'UG', 'BE', 3, 0, 2, 1, 0, 1, '18-05-2023'),
(2, '1102', '', 'AA', 'Kumar', 'Male', 'jebinp08@gmail.com', '101', 'UG', 'BE', 3, 0, 2, 1, 0, 1, '18-05-2023'),
(3, '1103', '', 'AA', 'Sathish', 'Male', '', '101', 'UG', 'BE', 3, 0, 2, 1, 0, 1, '18-05-2023'),
(4, '1104', '', 'AA', 'Dharun', 'Male', '', '101', 'UG', 'BE', 3, 0, 2, 1, 0, 1, '18-05-2023'),
(5, '1105', '', 'AA', 'Siva', 'Male', '', '101', 'UG', 'BE', 3, 0, 2, 1, 0, 4, '18-05-2023'),
(6, '4101', '', 'EA', 'Suresh', 'Male', 'suresh@gmail.com', '102', 'UG', 'BE', 3, 0, 2, 1, 0, 2, '18-05-2023'),
(7, '4102', '', 'EA', 'Nisha', 'Female', 'nisha@gmail.com', '102', 'UG', 'BE', 3, 0, 2, 1, 0, 2, '18-05-2023'),
(8, '4545', '', 'LH-23', 'ff', 'Male', 'ff@gmail.com', '101', 'UG', 'BE', 1, 0, 1, 1, 0, 2, '20-04-2024'),
(9, '1212', '', '', 'gg', 'Male', 'gg@gmail.com', '', '', '', 0, 0, 0, 1, 0, 4, ''),
(10, '121212', '', '', 'ghjh', 'Male', 'ghjh@gmail.com', '', '', '', 0, 0, 0, 1, 0, 4, ''),
(11, '898789', '', 'LH-23', 'kkkkll', 'Male', 'kkkkll@gmail.com', '101', 'UG', 'BE', 1, 0, 1, 1, 0, 2, '20-04-2024');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `deptid` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `major` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `subid` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `deptid`, `level`, `degree`, `major`, `sem`, `subid`, `subject`) VALUES
(0, '101', 'FINAL YEAR', 'B.E', '', 4, 'CS2403', 'DIGITAL SIGNAL PROCESSING'),
(0, '101', 'FINAL YEAR', 'B.E', '', 4, 'CS2401', 'COMPUTER GRAPHICS'),
(0, '101', 'FINAL YEAR', 'B.E', '', 4, 'CS2402', 'MOBILE AND PERVASIVE COMPUTING'),
(0, '101', 'FINAL YEAR', 'B.E', '', 4, 'CS2032', 'DATA WAREHOUSING AND MINING'),
(0, '101', 'FINAL YEAR', 'B.E', '', 4, 'GE2022', 'TOTAL QUALITY MANANGEMENT'),
(0, '101', 'FINAL YEAR', 'B.E', '', 4, 'MG2452', 'ENGINEERIN ECONOMICS AND FINNCIAL ACCOUNTING'),
(0, '101', 'THIRD YEAR', 'B.E', '', 3, 'CS2305', 'INTERNET PROGRAMMING'),
(0, '101', 'THIRD YEAR', 'B.E', '', 3, 'CS2353', 'OBJECT ORIENTED ANALYSIS AND DESIGN'),
(0, '101', 'THIRD YEAR', 'B.E', '', 3, 'CS2303', 'THEORY OF COMPUTAION'),
(0, '101', 'THIRD YEAR', 'B.E', '', 3, 'CS2401', 'COMPUTER GRAPHICS'),
(0, '101', 'THIRD YEAR', 'B.E', '', 3, 'MA2265', 'DISCRETE MATHEMATICS'),
(0, '102', 'SECOND YEAR', 'B.E', '', 3, 'MA2211', 'TRANSFORM AND PARTIAL DIFFERENTIAL EQUATIONS'),
(0, '102', 'SECOND YEAR', 'B.E', '', 3, 'CS2255', 'DATABASE MANAGEMENT SYSTEM101'),
(0, '102', 'SECOND YEAR', 'B.E', '', 3, 'CS2201', 'PROGRAMMING AND DATA STRUCTURS'),
(0, '102', 'SECOND YEAR', 'B.E', '', 3, 'CS2253', 'COMPUTER ARCHITECTURE'),
(0, '102', 'SECOND YEAR', 'B.E', '', 3, 'CS2204', 'ANALOG AND DIGITAL COMMUNICATION');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_date`
--

CREATE TABLE `tmp_date` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `deptid` int(11) NOT NULL,
  `date_schedule` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_date`
--

INSERT INTO `tmp_date` (`id`, `sid`, `deptid`, `date_schedule`) VALUES
(4, 1, 101, '08-06-2024'),
(5, 1, 101, '09-06-2024'),
(8, 1, 101, '12-06-2024'),
(9, 1, 101, '13-06-2024'),
(10, 1, 101, '14-06-2024'),
(11, 1, 101, '15-06-2024'),
(12, 1, 101, '16-06-2024'),
(13, 1, 101, '17-06-2024');
