-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 05:53 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `type`) VALUES
(10001, 'sajib', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignmentname` varchar(10) NOT NULL,
  `coursename` varchar(10) NOT NULL,
  `updatedate` varchar(20) NOT NULL,
  `submissiondate` varchar(20) NOT NULL,
  `assignmentfile` varchar(30) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignmentname`, `coursename`, `updatedate`, `submissiondate`, `assignmentfile`, `id`) VALUES
('Seconds', 'Atp3', '2019-12-06', '2019-12-07', 'test.docx', 5),
('ssas', 'xxz', '2019-12-01', '2019-12-03', 'day-5-slot-3-sp-1920.pdf', 7);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(10) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `courseTime` varchar(50) NOT NULL,
  `courseDay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `courseName`, `courseTime`, `courseDay`) VALUES
(1111001, 'ATP3', '11:00 - 2:00', 'Sunday'),
(1111002, 'Data Mining', '8:00 - 10:00', 'Monday'),
(1111003, 'AI', '2:00 - 4:00', 'Wednesday'),
(1111004, 'Engineering Shop', '11:00 - 2:00', 'Thusday');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `facultyid` int(10) NOT NULL,
  `facultyname` varchar(50) NOT NULL,
  `facultyemail` varchar(70) NOT NULL,
  `facultyaddress` varchar(70) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`facultyid`, `facultyname`, `facultyemail`, `facultyaddress`, `dept`) VALUES
(20001, 'Mahmudul Hasan', 'mahmudul.saib007@gmail.com', 'joydebpur,Gazipur', 'CSE'),
(20002, 'Fahim Fuad', 'fuad@gmail.com', 'Nikunjo,Dhaka', 'CSE'),
(20003, 'Almas Khan', 'almas@gmail.com', 'Bannai,Dhaka', 'CSE'),
(20004, 'Rafi Ahmed', 'Rafi@gmail.com', 'Bannai,Dhaka', 'CSE'),
(20005, 'Rethwan Ahmed', 'rethwan@gmail.com', 'Mirpur,Dhaka', 'CSE'),
(20006, 'Sakib Ahmed', 'sakib@gmail.com', 'Mirpur,Dhaka', 'CSE'),
(20007, 'Zamus Zahik', 'zahik@gmail.com', 'Asuliya, Dhaka', 'CSE'),
(20008, 'Fahim Ramit', 'ramit@gmail.com', 'Nikuju, Dhaka', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `albumname` varchar(20) NOT NULL,
  `discription` varchar(70) NOT NULL,
  `image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `albumname`, `discription`, `image`) VALUES
(1003, 'car', '111', '/upload/download (1).jpg'),
(1004, 'car', '222', '/upload/download (2).jpg'),
(1005, 'car', '333', '/upload/download (3).jpg'),
(1006, 'car', '555', '/upload/download (5).jpg'),
(1007, 'car', '666', '/upload/download (7).jpg'),
(1008, 'first', 'asaas', '/upload/report.docx'),
(1009, 'ss', 'sdd', '/upload/download (5).jpg'),
(1010, 'Fuad', 'fuad', '/upload/download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) NOT NULL,
  `notename` varchar(50) NOT NULL,
  `uploaddate` varchar(50) NOT NULL,
  `submissiondate` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notename`, `uploaddate`, `submissiondate`, `file`, `coursename`) VALUES
(1, 'Firstss', '2019-12-05', '2019-12-07', 'test.docx', 'Atp3'),
(3, 'zxx', '2019-12-04', '2019-12-04', 'test.docx', 'xzxzx');

-- --------------------------------------------------------

--
-- Table structure for table `studentlists`
--

CREATE TABLE `studentlists` (
  `studentid` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlists`
--

INSERT INTO `studentlists` (`studentid`, `firstname`, `email`, `cgpa`, `lastname`, `coursename`) VALUES
(55001, 'Mahmudul Hasan', 'mahmudul.sajib007@gmail.com', '3.65', 'Sajib', 'ATP3'),
(55002, 'Mahmudul Hasan', 'mahmudul.sajib007@gmail.com', '3.65', 'Sajib', 'AI'),
(55003, 'Almas', 'almas@gmail.com', '3.56', 'Khan', 'ATP3'),
(55004, 'Sohel', 'sohel@gmail.com', '3.5', 'Sagor', 'ATP3'),
(55005, 'F.H', 'ramit@gmail.com', '3.99', 'Ramit', 'ATP3'),
(55006, 'Fuad', 'ramit@gmail.com', '3.99', 'Fahim', 'ATP3'),
(55007, 'Mahmudul Hasan', 'sajib@gmail.com', '3.65', 'Sajib', 'Data Mining'),
(55008, 'Rahul', 'sajib@gmail.com', '3.65', 'Rony', 'Data Mining'),
(55009, 'F.H', 'ramit@gmail.com', '3.44', 'Ramit', 'Data Mining'),
(55010, 'F.H', 'ramit@gmail.com', '3.44', 'Ramit', 'Engineering Shop');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `uploaddate` varchar(50) NOT NULL,
  `submissiondate` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `type`, `dept`) VALUES
(11112, 'sakib', '1234', 'user', 'CS'),
(11115, 'sajib', '1234', 'user', 'CS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`facultyid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlists`
--
ALTER TABLE `studentlists`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111005;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `facultyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20009;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentlists`
--
ALTER TABLE `studentlists`
  MODIFY `studentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55011;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
