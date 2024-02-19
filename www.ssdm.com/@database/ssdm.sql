-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 08:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` text NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `address`) VALUES
(1, 'kamal', '0123456789', 'Arabic teacher,ssdm'),
(2, 'jamal', '0123456789', 'Bangla teacher,ssdm'),
(5, 'Md. jamal', '123456789', 'math teacher,ssdm'),
(6, 'shofiqul islam', '123456789', 'principle,ssdm'),
(7, 'Rofuqul islam', '0123456789', 'Quran lecturer,ssdm'),
(8, 'Md. Belal hossain', '0123456789', 'Fiqoh lecturer, ssdm'),
(9, 'Abdus subahan', '0123456789', 'Hadith lecturer, ssdm'),
(10, 'Yousuf hossain', '0123456789', 'Islamic History lecturer, ssdm'),
(11, 'Bulbul hossian', '0123456789', 'Bangla lecturer, ssdm'),
(12, 'Sabina Begum', '0123456789', 'Ict lecturer, ssdm'),
(13, 'Munsur hussain', '0123456789', 'English lecturer, ssdm'),
(14, 'Sogir Islam', '0123456789', 'Math lecturer, ssdm'),
(15, 'shohidul islam', '0123456789', 'Agriculture lecturer, ssdm'),
(16, 'Yousuf hossain', '0123456789', 'Social science lecturer, ssdm');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathersName` varchar(50) NOT NULL,
  `Roll` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNumber` text NOT NULL,
  `class` int(2) NOT NULL,
  `gender` text NOT NULL,
  `DateOfBirth` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fathersName`, `Roll`, `address`, `phoneNumber`, `class`, `gender`, `DateOfBirth`) VALUES
(1, 'Md. jamal', 'kamal', '321', 'india', '123456789', 5, 'male', ''),
(4, 'jamal', 'kamal', '123', 'india', '0', 10, 'male', '2015-07-12'),
(5, 'shofiqul islam', 'jamal', '101000', 'india', '123456789', 3, 'male', '2016-07-12'),
(6, 'à¦œà¦¾à¦¹à¦¿à¦¦ à¦¹à¦¾à¦¸à¦¾à¦¨', '', '0000000000', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶', '0000000000', 10, 'male', ''),
(7, 'à¦œà§Ÿà¦¨à¦¾à¦¬ à¦–à¦¾à¦¤à§à¦¨', '', '00000000000', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶', '00000000000', 10, 'female', ''),
(8, 'habiba', '', '00000', 'bangladesh', '000000000', 8, 'female', ''),
(9, 'habib', '', '0000000', 'bangladesh', '00000000', 8, 'male', ''),
(10, 'kamal', 'jamal', '101000', 'india', '0', 7, 'male', '2005-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
