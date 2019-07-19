-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 04:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adv_id` int(100) NOT NULL,
  `camp_title` varchar(100) NOT NULL,
  `org_by` varchar(100) NOT NULL,
  `pic` varchar(700) NOT NULL,
  `detail` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`adv_id`, `camp_title`, `org_by`, `pic`, `detail`) VALUES
(4, 'Ramgarhia Engg Collage', 'Ramgarhia education consial', '2.jpg', 'Blood donation camp Organised by REC.  One who donate get certificate by REC\r\nThat can help you also to gets blood in jeopard time');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bg_id` int(100) NOT NULL,
  `bg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(13, 'o+'),
(14, 'o-'),
(15, 'AB+'),
(16, 'AB-'),
(17, 'A+'),
(19, 'B+'),
(20, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `camp_id` int(100) NOT NULL,
  `camp_title` varchar(500) NOT NULL,
  `organised_by` varchar(500) NOT NULL,
  `state` int(100) NOT NULL,
  `city` int(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `pic` varchar(900) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`camp_id`, `camp_title`, `organised_by`, `state`, `city`, `fromdate`, `todate`, `pic`, `detail`) VALUES
(7, ' Kenyatta University', 'Lovely Professional University Welfare', 1, 7, '2017-08-17', '2017-08-19', 'kenyatta.jpg', 'A Blood Donation Camp at Kenyatta University organized by Lovely Professional University welfare , Jalandhar.'),
(8, 'Guru Nanak College', 'Lions Club', 1, 1, '2018-05-08', '2018-05-12', 'guru.jpg', 'A Blood Donation Camp at G.N.C College, Phagwara organized by Lions Club, Phagwara.'),
(9, 'Maseno University', 'Human Welfare Society', 1, 1, '2019-07-04', '2019-07-08', 'maseno.jpg', 'A Blood Donation Camp at Maseno University, Jalandhar organized by Human Welfare Society, Onyango.\r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `pin_code`, `district`, `state`) VALUES
(1, 'Nairobi', '144401', 'Nairobi', 1),
(4, 'Mombasa', '121001', 'Mombasa', 2),
(7, 'Nakuru', '144001', 'Nakuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `row_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`row_id`, `name`, `email`, `mobile`, `subj`, `time`) VALUES
(1, 'nannu', 'bawa12@ymail.com', '98889619909', 'save life', '2019-07-11 13:55:13'),
(2, 'manu', 'manukaler@yahoo.com', '9888889765', 'save life', '2019-08-10 13:55:13'),
(3, 'neeru', 'neeru45@gmail.com', '9463958058', 'give blooooooood', '2019-07-02 13:55:13'),
(4, 'paras', 'bhatia34@gmail.com', '9216291294', 'save life', '2017-04-04 13:55:13'),
(10, 'herry', 'herry@ymaol.com', '8790675438', 'give me a blood', '2019-07-11 13:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

CREATE TABLE `donarregistration` (
  `donar_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name2` varchar(15) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(65) NOT NULL,
  `pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`donar_id`, `name`, `name2`, `gender`, `age`, `mobile`, `b_id`, `email`, `pwd`, `pic`) VALUES
(1, 'Ian', 'Mabuka', 'Male', '19', '9876505652', 17, 'admin@gmail.com', '123', '1.jpg'),
(2, 'Example', 'Donor', 'female', '25', '23343433423', 13, 'donor@gmail.com', '123', '2.jpg'),
(3, 'Damaris', 'Apasi', 'female', '20', '9463958058', 15, 'damaris@gmail.com', '123', '4.jpg'),
(4, 'Waru', 'David', 'male', '21', '9888961990', 17, 'waru@gmail.com', '123', '3.jpg'),
(6, 'Vera', 'Manu', 'female', '20', '9779730479', 13, 'vera@gmail.com', '123', '6.jpg'),
(7, 'Jack', 'Mwasi', 'male', '22', '01823280290', 17, 'jack@gmail.com', '123', '5.jpg'),
(8, 'Abhishek', 'Ibrahim', 'male', '24', '0123456780', 19, 'abhi@gmail.com', '123', '7.jpg'),
(9, 'Kaur', 'Babjee', 'female', '26', '9295769630', 15, 'kaur08@yahoo.com', '123', '8.jpg'),
(10, 'kuldip', 'Banga', 'male', '26', '9878967543', 15, 'kbanga@yahoo.com', '123', '9.jpg'),
(11, 'Jaspinder', 'singh', 'male', '24', '9445678765', 16, 'jaspinder12@gmail.com', '123', '10.jpg'),
(12, 'Fred', 'Wanjala', 'male', '20', '8591824296', 13, 'fred@gmail.com', '123', '11.jpg'),
(13, 'Sonu', 'Kiptanui', 'male', '25', '9594918765', 16, 'sonukhana34@gmail.com', '123', '13.jpg'),
(14, 'Vinny', 'Omondi', 'male', '24', '01824230721', 18, 'vinny786@gmail.com', '123', '14.jpg'),
(15, 'Risha', 'Bhatia', 'male', '19', '8781846758', 19, 'rbhatia@ymail.com', '123', '15.jpg'),
(16, 'Rahul', 'Bangar', 'male', '25', '9216291294', 20, 'raulban@gmail.com', '123', '17.jpg'),
(17, 'Prabhjot', 'Parot', 'male', '24', '9818134576', 20, 'prabh786@gmail.com', '123', '19.jpg'),
(18, 'Safina', 'Safina', 'female', '25', '9889786545', 14, 'safina@gmail.com', '123', '16.jpg'),
(19, 'Pretty', 'Karina', 'female', '28', '8427429079', 14, 'preet22@yahoo.com', '123', '18.jpg'),
(23, 'Someone', 'Mwisho', 'male', '24', '5465678738', 16, 'mwisho@gmail.com', '123', '20.jpg'),
(24, 'Laura', 'Nyaera', 'female', '20', '07353573478', 18, 'laura@gmail.com', '123', '21.jpg'),
(25, 'Doner', 'Admin', 'male', '25', '456789086', 15, 'control@gmail.com', '123', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(100) NOT NULL,
  `camp_id` int(100) NOT NULL,
  `ddate` date NOT NULL,
  `units` int(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES
(29, 7, '2015-05-11', 30, 'A Blood Donation Camp at Lovely Professional University organized by Lovely Professional University , Jalandhar.', 'safina@gmail.com'),
(30, 8, '2014-11-04', 25, 'A Blood Donation Camp at G.N.C College, Phagwara organized by Lions Club, Phagwara.', 'laura@gmail.com'),
(31, 9, '2014-12-18', 22, 'A Blood Donation Camp at Apee-Jay College, Jalandhar organized by Human Welfare Society, Jalandhar.\r\n ', 'vera@gmail.com'),
(32, 7, '2010-06-19', 27, 'A Blood Donation Camp at Lovely Professional Unive...', 'jack@gmail.com'),
(33, 8, '2010-08-20', 17, 'save life', 'abhi@gmail.com'),
(34, 9, '2009-06-05', 10, 'give blood', 'mabuka@gmail.com'),
(35, 9, '2012-09-13', 22, 'save life', 'mabuka@gmail.com'),
(36, 9, '0000-00-00', 4, 'Came with my friends', 'fred@gmail.com'),
(37, 7, '2019-01-01', 8, 'For health', 'waru@gmail.com'),
(42, 7, '2019-07-07', 24, 'routine donation', 'admin@gmail.com'),
(43, 8, '2019-07-09', 3, 'Just another day', 'admin@gmail.com'),
(44, 8, '2019-04-08', 10, 'Routine donation for health.', 'donor@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `camp_id` int(100) NOT NULL,
  `pic_id` int(100) NOT NULL,
  `title` varchar(400) NOT NULL,
  `pic` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`camp_id`, `pic_id`, `title`, `pic`) VALUES
(9, 15, 'pic 1', '91.jpg'),
(9, 16, 'pic 2', '92.jpg'),
(9, 17, 'pic 3', '93.jpg'),
(9, 18, 'pic 5', '94.jpg'),
(9, 19, 'pic 6', '95.jpg'),
(8, 20, 'pic 8', '81.jpg'),
(9, 21, 'pic 9', '96.jpg'),
(7, 22, 'pic 2', '71.jpg'),
(7, 23, 'pic 3', '72.jpg'),
(7, 24, 'pic 6', '73.jpg'),
(7, 25, 'pic 7', '74.jpg'),
(7, 26, 'pic 8', '75.jpg'),
(7, 27, 'pic 9', '76.jpg'),
(8, 34, 'pic 1', '82.jpg'),
(8, 35, 'pic 2', '83.jpg'),
(8, 36, 'pic 4', '84.jpg'),
(8, 37, 'pic 5', '85.jpg'),
(8, 38, 'pic 7', '86.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `detail`) VALUES
(1, 'blood donate', 'give blood give bloodgive blood'),
(2, 'blood bank', 'blooooddddd\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `requestes`
--

CREATE TABLE `requestes` (
  `req_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name2` varchar(15) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` int(100) NOT NULL,
  `reqdate` date NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestes`
--

INSERT INTO `requestes` (`req_id`, `name`, `name2`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`) VALUES
(7, 'Rahma', 'Moha', 'male', '22', '8427420298', 'balwant11@gmail.com', 19, '2015-01-15', 'save life'),
(8, 'japleen', 'Omindi', 'female', '22', '9216291294', 'jsimran08@gmail.com', 13, '2014-01-12', 'save life'),
(9, 'Naresh', 'Patni', 'female', '21', '8427420291', 'nareshheer719@gmail.com', 17, '2015-01-18', 'save life'),
(10, 'Taran', 'Juma', 'male', '55', '7589325050', 'taran@ymail.com', 14, '2012-01-29', ' help'),
(14, 'Ian', 'Mabuka', 'female', '56', '234567890', 'sddfa@dsdsdad.dfsdf', 14, '2019-07-27', 'not urgent but needed');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(100) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Nairobi'),
(2, 'Mombasa'),
(3, 'Nakuru'),
(4, 'Kisumu'),
(5, 'Homabay');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(65) NOT NULL,
  `typeofuser` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `typeofuser`, `pic`) VALUES
('Admin', '123', 'Admin', 'admin.png'),
('Damaris', '123', 'Admin', 'damaris.jpg'),
('Jack', '123', 'General', 'jack.jpg'),
('Mabuka', '123', 'Admin', 'mabuka.jpg'),
('Waru', '123', 'Admin', 'waru.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `donarregistration`
--
ALTER TABLE `donarregistration`
  ADD PRIMARY KEY (`donar_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `requestes`
--
ALTER TABLE `requestes`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `adv_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `bg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `camp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donarregistration`
--
ALTER TABLE `donarregistration`
  MODIFY `donar_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `pic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requestes`
--
ALTER TABLE `requestes`
  MODIFY `req_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
