-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 02:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`) VALUES
(1, 'BA', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `homepost`
--

CREATE TABLE `homepost` (
  `id` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_chat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepost`
--

INSERT INTO `homepost` (`id`, `msg`, `name`, `date`, `image_chat`) VALUES
(1, 'hello world', 'miton', '2018-09-03 05:55:31', ''),
(2, 'hi', 'miton', '2018-09-03 05:55:49', ''),
(3, '', 'miton', '2018-09-03 05:59:40', 'uploads/homepost/5b8ccdccc58547.44687401.png'),
(4, 'maliha', 'maliha', '2018-09-03 06:02:06', ''),
(5, 'hi', 'miton', '2018-09-03 08:12:15', ''),
(6, 'good day', 'miton', '2018-09-03 08:59:55', ''),
(7, '', 'imran', '2018-09-03 09:49:18', 'uploads/homepost/5b8d039eaf7ce1.55064648.png'),
(8, 'Web tech project submission today.', 'imran', '2018-09-03 12:34:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `like` int(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `com_image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `username`, `like`, `comment`, `com_image`) VALUES
(8, 'pogba.jpg', 'pogba the real hero .... ', '', 0, '', ''),
(13, 'lukaku1.jpg', 'lukaku', '', 0, '', ''),
(15, 'mark.png', 'hkvhjv', '', 0, '', ''),
(17, '', 'no', '', 0, '', ''),
(20, '', 'hlwwwww', '', 0, '', ''),
(22, '', 'jooo', '', 0, '', ''),
(23, 'lukaku3.jpg', '50th goal', '', 0, '', ''),
(24, '', 'o', '', 0, '', ''),
(25, '', 'pppp', '', 0, '', ''),
(26, '', 'emon \r\n', '', 0, '', ''),
(27, 'pogba.jpg', 'pogba', '', 0, '', ''),
(28, 'ronaldo.png', 'cr7', '', 0, '', ''),
(29, 'ronaldo.png', 'cr77', '', 0, '', ''),
(30, 'ronaldo.png', 'kkk', '', 0, '', ''),
(31, 'ronaldo.png', 'jjj', '', 0, '', ''),
(32, 'ronaldo.png', 'mobassher', '', 0, '', ''),
(33, 'ronaldo.png', 'mobassher', '', 0, '', ''),
(34, 'ronaldo.png', 'mobassher', '', 0, '', ''),
(35, '', '', '', 0, '', ''),
(36, '', '', '', 0, '', ''),
(37, '', '', '', 0, '', ''),
(38, '', '', '', 0, '', ''),
(39, '', '', '', 0, '', ''),
(40, '', '', '', 0, '', ''),
(41, 'ronaldo.png', 'dfsvgs', '', 0, '', ''),
(42, 'ronaldo.png', 'dfsvgs', '', 0, '', ''),
(43, 'ronaldo.png', 'dfsvgs', '', 0, '', ''),
(44, '', '', '', 0, '', ''),
(45, '', '', '', 0, '', ''),
(46, '', '', '', 0, '', ''),
(47, '', '', '', 0, '', ''),
(48, '', '', '', 0, '', ''),
(49, '', '', '', 0, '', ''),
(50, '', '', '', 0, '', ''),
(51, '', '', '', 0, '', ''),
(52, '', '', '', 0, '', ''),
(53, '', '', '', 0, '', ''),
(54, '', '', '', 0, '', ''),
(55, '', '', '', 0, '', ''),
(56, '', '', '', 0, '', ''),
(57, '', '', '', 0, '', ''),
(58, '', '', '', 0, '', ''),
(59, '', '', '', 0, '', ''),
(60, '', '', '', 0, '', ''),
(61, 'lukakupic.PNG', 'barcalona', '', 0, '', ''),
(62, '', 'hiii', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_chat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `msg`, `name`, `date`, `image_chat`) VALUES
(88, '', 'tonmoy', '2018-08-28 18:22:48', 'uploads/5b8592f80c9aa4.01612555.png'),
(95, '', 'tonmoy', '2018-08-28 19:03:56', 'uploads/5b859c9ced02d3.30800080.png'),
(102, 'kemon ? ', 'tonmoy', '2018-08-28 20:31:39', ''),
(104, 'sheiii na ? ', 'tonmoy', '2018-08-28 20:46:34', ''),
(109, 'vaia', 'unmesh', '2018-09-01 10:02:50', ''),
(122, 'you can\'t use slang language', 'imran', '2018-09-03 10:55:39', ''),
(130, 'you can\'t use slang language', 'imran', '2018-09-03 12:43:00', ''),
(131, 'sakib', 'imran', '2018-09-03 12:47:01', ''),
(132, 'cagol', 'imran', '2018-09-03 12:47:12', ''),
(133, 'emon', 'imran', '2018-09-03 12:47:32', ''),
(134, 'you can\'t use slang language', 'imran', '2018-09-03 12:48:19', ''),
(135, 'sakib\r\n', 'mobu', '2018-09-03 21:28:11', ''),
(136, 'chagol', 'mobu', '2018-09-03 22:10:52', ''),
(137, 'chagol', 'mobu', '2018-09-03 22:11:45', ''),
(138, 'chogol', 'mobu', '2018-09-03 22:19:21', ''),
(139, 'chagol', 'mobu', '2018-09-03 22:20:29', ''),
(140, 'fk', 'mobu', '2018-09-03 22:22:04', ''),
(141, '1', 'mobu', '2018-09-03 22:24:09', ''),
(142, '1', 'mobu', '2018-09-03 22:26:43', ''),
(143, 'chagol', 'mobu', '2018-09-03 22:27:25', ''),
(144, 'chagol', 'mobu', '2018-09-03 22:28:37', ''),
(145, 'chagol', 'mobu', '2018-09-03 22:29:58', ''),
(146, 'chagol', 'mobu', '2018-09-03 22:30:31', ''),
(147, 'hk', 'mobu', '2018-09-03 22:32:10', ''),
(148, 'you can\'t use slang language', 'mobu', '2018-09-03 22:34:01', ''),
(149, 'chagol', 'mobu', '2018-09-03 22:35:47', ''),
(150, 'chagol', 'mobu', '2018-09-03 22:36:33', ''),
(151, 'chagol', 'mobu', '2018-09-03 22:37:11', ''),
(152, 'you can\'t use slang language', '', '2018-09-03 22:40:47', ''),
(153, 'you can\'t use slang language', 'mobu', '2018-09-03 22:41:06', ''),
(154, 'you can\'t use slang language', 'mobu', '2018-09-03 22:41:11', ''),
(155, 'you can\'t use slang language', 'mobu', '2018-09-03 22:41:45', ''),
(156, 'you can\'t use slang language', 'mobu', '2018-09-03 22:42:03', ''),
(157, 'you can\'t use slang language', 'mobu', '2018-09-03 22:42:24', ''),
(158, 'you can\'t use slang language', 'mobu', '2018-09-03 22:43:45', ''),
(159, 'hi', 'mobu', '2018-09-03 22:43:56', ''),
(160, 'hi chagol', 'mobu', '2018-09-03 22:44:11', ''),
(161, 'hi chagol', 'mobu', '2018-09-03 22:47:23', ''),
(162, 'you can\'t use slang language', 'mobu', '2018-09-03 22:49:00', ''),
(163, 'you can\'t use slang language', 'mobu', '2018-09-03 22:49:12', ''),
(164, 'you can\'t use slang language', 'mobu', '2018-09-03 22:49:21', ''),
(165, 'you can\'t use slang language', 'mobu', '2018-09-03 22:49:36', ''),
(166, 'hi', 'mobu', '2018-09-03 22:50:13', ''),
(167, 'hi chagol', 'mobu', '2018-09-03 22:50:25', ''),
(168, 'chagol', 'mobu', '2018-09-03 22:50:41', ''),
(169, 'hi imran', 'mobu', '2018-09-03 22:52:25', ''),
(170, 'you can\'t use slang language', 'mobu', '2018-09-03 22:52:37', ''),
(171, 'chagol imran', 'mobu', '2018-09-03 22:52:55', ''),
(172, 'you can\'t use slang language', 'mobu', '2018-09-03 22:59:08', ''),
(173, 'you can\'t use slang language', 'mobu', '2018-09-03 22:59:39', ''),
(174, 'you can\'t use slang language', 'mobu', '2018-09-03 22:59:58', ''),
(175, 'you can\'t use slang language', 'mobu', '2018-09-03 23:00:41', ''),
(176, 'you can\'t use slang language', 'mobu', '2018-09-03 23:01:20', ''),
(177, 'hi', 'mobu', '2018-09-03 23:01:29', ''),
(178, 'you can\'t use slang language', 'mobu', '2018-09-03 23:01:40', ''),
(179, 'imran is a magi', 'mobu', '2018-09-03 23:15:18', ''),
(180, 'imran is a pagol', 'mobu', '2018-09-03 23:15:37', ''),
(181, 'imran pagol', 'mobu', '2018-09-03 23:16:45', ''),
(182, 'imran pagol', 'mobu', '2018-09-03 23:17:52', ''),
(183, 'imran pagol', 'mobu', '2018-09-03 23:18:27', ''),
(184, 'imran pagol', 'mobu', '2018-09-03 23:19:15', ''),
(185, 'imran pagol', 'mobu', '2018-09-03 23:19:53', ''),
(186, 'imran pagol', 'mobu', '2018-09-03 23:22:48', ''),
(187, 'imran pagol', 'mobu', '2018-09-03 23:27:55', ''),
(188, 'imran pagol', 'mobu', '2018-09-03 23:28:31', ''),
(189, 'imran pagol', 'mobu', '2018-09-03 23:29:48', ''),
(190, 'you can\'t use slang language', 'mobu', '2018-09-03 23:31:06', ''),
(191, 'you can\'t use slang language', 'mobu', '2018-09-03 23:31:24', ''),
(192, 'zahid is a good boy', 'mobu', '2018-09-03 23:31:43', ''),
(193, 'you can\'t use slang language', 'mobu', '2018-09-03 23:39:28', ''),
(194, 'you can\'t use slang language', 'mobu', '2018-09-03 23:39:50', ''),
(195, 'you can\'t use slang language', 'mobu', '2018-09-03 23:39:59', ''),
(196, 'hi hello', 'mobu', '2018-09-03 23:40:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prof_image` varchar(11) NOT NULL,
  `profdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`id`, `name`, `prof_image`, `profdate`) VALUES
(1, 'maliha', 'uploads/pro', '2018-09-03 07:47:44.986843'),
(2, 'maliha', 'uploads/pro', '2018-09-03 07:52:54.099431');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(100) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `username`, `email`, `password`, `fname`, `lname`, `joining_date`, `gender`, `Type`) VALUES
(15, 'imran', '', '123456', 'fahim', 'mazumder', '2018-09-03 09:43:39', 'Male', 'User'),
(16, 'Emon', '', '123456', 'emon', 'emon', '2018-09-03 09:44:33', 'Male', 'Admin'),
(17, 'mobu', '', '123456', 'abc', 'abc', '2018-09-03 12:22:43', 'Male', 'Moderator'),
(18, 'maliha', 'maliha@yahoo.com', '123456', 'Maliha', 'Mehnaz', '2018-09-03 12:57:40', 'Male', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepost`
--
ALTER TABLE `homepost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepost`
--
ALTER TABLE `homepost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `profilepic`
--
ALTER TABLE `profilepic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
