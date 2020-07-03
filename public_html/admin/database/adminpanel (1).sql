-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 09:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `gnome_profile`
--

CREATE TABLE `gnome_profile` (
  `uid` int(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `avaiablity` varchar(80) NOT NULL,
  `profession` varchar(40) NOT NULL,
  `edu` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gnome_profile`
--

INSERT INTO `gnome_profile` (`uid`, `username`, `name`, `email`, `phn`, `avaiablity`, `profession`, `edu`, `image`) VALUES
(1, 'ramzan123', 'ramzan', 'ramzan123@gmail.com', '9876543210', 'one', 'Web developer', 'Bsc.IT', '');

-- --------------------------------------------------------

--
-- Table structure for table `gnome_regis`
--

CREATE TABLE `gnome_regis` (
  `gnomeid` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gnome_regis`
--

INSERT INTO `gnome_regis` (`gnomeid`, `fname`, `lname`, `email`, `pass`, `cpass`) VALUES
(1, 'ramzan', 'ansari', 'ramzan123@gmail.com', '12345', '12345'),
(2, 'rohit', 'puri', 'rohitrapper@gmail.com', 'qwert', 'qwert'),
(3, 'aniket', 'singh', 'aniket', 'poiuytr', 'poiuytr'),
(4, 'shreerag', 'omkar', 'shreerag1998@gmail.com', 'zxcvb', 'zxcvb'),
(5, 'shreedar', 'chavan', 'shreedar@gmail.com', 'mnbvc', 'mnbvc');

-- --------------------------------------------------------

--
-- Table structure for table `user_regis`
--

CREATE TABLE `user_regis` (
  `uid` int(100) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `cpass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regis`
--

INSERT INTO `user_regis` (`uid`, `fname`, `lname`, `email`, `pass`, `cpass`) VALUES
(1, 'aniket', 'singh', 'aniket123@gmail.com', '12345', '12345'),
(2, 'shreerag', 'omkar', 'shreerag@gmail.com', '98765', '98765'),
(3, 'shreedar', 'chavan', 'shreedar1998@gmail.com', 'qwertyui', 'qwertyui'),
(4, 'manisha maam', 'thorat', 'manisha78@gmail.com', 'zxcvb123', 'zxcvb123'),
(5, 'rohit', 'puro', 'rohitrapper@gmail.com', 'social', 'social'),
(6, 'ramzan', 'ansari', 'ramzan123@gmail.com', 'plmonojjn', 'plmonojjn'),
(7, 'bharat', 'bhagat', 'bharat@gmail.com', '12345', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gnome_profile`
--
ALTER TABLE `gnome_profile`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `gnome_regis`
--
ALTER TABLE `gnome_regis`
  ADD PRIMARY KEY (`gnomeid`);

--
-- Indexes for table `user_regis`
--
ALTER TABLE `user_regis`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gnome_profile`
--
ALTER TABLE `gnome_profile`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gnome_regis`
--
ALTER TABLE `gnome_regis`
  MODIFY `gnomeid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_regis`
--
ALTER TABLE `user_regis`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
