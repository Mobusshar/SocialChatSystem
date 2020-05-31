-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 02:30 AM
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
-- Database: `solid`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_announcement`
--

CREATE TABLE `general_announcement` (
  `id` int(11) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_body` mediumtext NOT NULL,
  `sender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_announcement`
--

INSERT INTO `general_announcement` (`id`, `message_title`, `message_body`, `sender`, `date`) VALUES
(2, 'Christmas  Break', 'There would be a general christmas break on 20th December, this year', 'priscilla', '2017-05-08 22:19:45'),
(3, 'Sem Break !!!', 'Aj amader chuti :-D', 'abbu', '2018-09-02 20:46:12'),
(4, 'Web tech Project', 'Today is web tech project. ', 'imran', '2018-09-03 12:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `imran_abbu`
--

CREATE TABLE `imran_abbu` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imran_abbu_uploads`
--

CREATE TABLE `imran_abbu_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imran_mobu`
--

CREATE TABLE `imran_mobu` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imran_mobu`
--

INSERT INTO `imran_mobu` (`ID`, `Messages`, `Time`, `Usernames`) VALUES
(1, 'Hi.....', '2018-09-03 08:01:19', 'imran'),
(2, 'Hello', '2018-09-03 08:04:23', 'mobu');

-- --------------------------------------------------------

--
-- Table structure for table `imran_mobu_uploads`
--

CREATE TABLE `imran_mobu_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobu_mobu`
--

CREATE TABLE `mobu_mobu` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobu_mobu_uploads`
--

CREATE TABLE `mobu_mobu_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `public_messages`
--

CREATE TABLE `public_messages` (
  `Msg_ID` int(11) NOT NULL,
  `Sender` tinytext NOT NULL,
  `Message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_messages`
--

INSERT INTO `public_messages` (`Msg_ID`, `Sender`, `Message`, `date`) VALUES
(5, 'imran', 'HIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII all', '2018-09-02 19:53:35'),
(6, 'mobu', 'kmn aso??', '2018-09-03 04:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general_uploads`
--

CREATE TABLE `tbl_general_uploads` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tonoy_imran`
--

CREATE TABLE `tonoy_imran` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tonoy_imran`
--

INSERT INTO `tonoy_imran` (`ID`, `Messages`, `Time`, `Usernames`) VALUES
(1, 'hi', '2018-09-02 19:27:38', 'tonoy');

-- --------------------------------------------------------

--
-- Table structure for table `tonoy_imran_uploads`
--

CREATE TABLE `tonoy_imran_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`ID`, `first_name`, `last_name`, `status`, `Time`) VALUES
(2, 'imran', 'mazumder', 'offline', '2018-09-02 19:23:11'),
(3, 'tonoy', 'tonu', 'offline', '2018-09-02 19:26:01'),
(4, 'usha', 'saha', 'offline', '2018-09-02 19:46:50'),
(5, 'abbu', 'mou', 'offline', '2018-09-02 19:50:55'),
(6, 'mobu', 'abc', 'offline', '2018-09-03 04:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `Users_ID` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `Profile_Picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`Users_ID`, `user_fname`, `user_lname`, `Password`, `department`, `position`, `Profile_Picture`, `date`) VALUES
(6, 'usha', 'saha', '123456', '', '', '', '2018-09-02 19:46:21'),
(7, 'abbu', 'mou', '123456', '', '', '', '2018-09-02 19:50:17'),
(8, 'imran', 'Mazumder', '123456', '', '', '10929917_1115380701821446_4995793546671888340_n.jpg', '2018-09-03 04:14:41'),
(9, 'mobu', 'abc', '123456', '', '', '1460124_760146197344900_652470643_n.jpg', '2018-09-03 04:53:45'),
(10, 'bmarley', 'marley', '123123', '', '', '', '2018-09-03 08:55:51'),
(11, 'mobu', 'marley', '123123', '', '', '', '2018-09-03 09:08:03'),
(12, 'mobu', 'marley', '123123', '', '', '', '2018-09-03 09:08:25'),
(13, 'asdas', 'saha', '123123', '', '', '', '2018-09-03 09:11:26'),
(14, 'maliha', 'Mehnaz', '123456', '', '', '', '2018-09-03 12:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `usha_abbu`
--

CREATE TABLE `usha_abbu` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usha_abbu`
--

INSERT INTO `usha_abbu` (`ID`, `Messages`, `Time`, `Usernames`) VALUES
(1, 'hiiii abbu', '2018-09-02 19:52:09', 'usha'),
(2, 'hi ammu', '2018-09-02 19:52:26', 'abbu');

-- --------------------------------------------------------

--
-- Table structure for table `usha_abbu_uploads`
--

CREATE TABLE `usha_abbu_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usha_imran`
--

CREATE TABLE `usha_imran` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usha_imran`
--

INSERT INTO `usha_imran` (`ID`, `Messages`, `Time`, `Usernames`) VALUES
(1, 'hi', '2018-09-02 19:47:32', 'usha'),
(2, 'abbu', '2018-09-02 19:52:53', 'usha');

-- --------------------------------------------------------

--
-- Table structure for table `usha_imran_uploads`
--

CREATE TABLE `usha_imran_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usha_usha`
--

CREATE TABLE `usha_usha` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usha_usha_uploads`
--

CREATE TABLE `usha_usha_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_announcement`
--
ALTER TABLE `general_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imran_abbu`
--
ALTER TABLE `imran_abbu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imran_abbu_uploads`
--
ALTER TABLE `imran_abbu_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imran_mobu`
--
ALTER TABLE `imran_mobu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imran_mobu_uploads`
--
ALTER TABLE `imran_mobu_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mobu_mobu`
--
ALTER TABLE `mobu_mobu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mobu_mobu_uploads`
--
ALTER TABLE `mobu_mobu_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `public_messages`
--
ALTER TABLE `public_messages`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `tbl_general_uploads`
--
ALTER TABLE `tbl_general_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tonoy_imran`
--
ALTER TABLE `tonoy_imran`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tonoy_imran_uploads`
--
ALTER TABLE `tonoy_imran_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`Users_ID`);

--
-- Indexes for table `usha_abbu`
--
ALTER TABLE `usha_abbu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usha_abbu_uploads`
--
ALTER TABLE `usha_abbu_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usha_imran`
--
ALTER TABLE `usha_imran`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usha_imran_uploads`
--
ALTER TABLE `usha_imran_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usha_usha`
--
ALTER TABLE `usha_usha`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usha_usha_uploads`
--
ALTER TABLE `usha_usha_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_announcement`
--
ALTER TABLE `general_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imran_abbu`
--
ALTER TABLE `imran_abbu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imran_abbu_uploads`
--
ALTER TABLE `imran_abbu_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imran_mobu`
--
ALTER TABLE `imran_mobu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imran_mobu_uploads`
--
ALTER TABLE `imran_mobu_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobu_mobu`
--
ALTER TABLE `mobu_mobu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobu_mobu_uploads`
--
ALTER TABLE `mobu_mobu_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_messages`
--
ALTER TABLE `public_messages`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_general_uploads`
--
ALTER TABLE `tbl_general_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tonoy_imran`
--
ALTER TABLE `tonoy_imran`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tonoy_imran_uploads`
--
ALTER TABLE `tonoy_imran_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `Users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usha_abbu`
--
ALTER TABLE `usha_abbu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usha_abbu_uploads`
--
ALTER TABLE `usha_abbu_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usha_imran`
--
ALTER TABLE `usha_imran`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usha_imran_uploads`
--
ALTER TABLE `usha_imran_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usha_usha`
--
ALTER TABLE `usha_usha`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usha_usha_uploads`
--
ALTER TABLE `usha_usha_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
