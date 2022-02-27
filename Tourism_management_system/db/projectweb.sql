-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 08:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Password` int(10) NOT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `UpdationDate`) VALUES
(1, 'admin', 756, '2019-11-10 14:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `B_ID` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `mobile` int(15) NOT NULL,
  `P_ID` int(10) NOT NULL,
  `P_Name` varchar(25) NOT NULL,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `Payment_Type` varchar(25) NOT NULL,
  `Price` int(10) NOT NULL,
  `Paid_Price` int(10) NOT NULL,
  `Remaining_Price` int(10) NOT NULL,
  `member` int(255) NOT NULL,
  `T_ID` int(10) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL,
  `Action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`B_ID`, `id`, `username`, `Email`, `mobile`, `P_ID`, `P_Name`, `FromDate`, `ToDate`, `Payment_Type`, `Price`, `Paid_Price`, `Remaining_Price`, `member`, `T_ID`, `RegDate`, `UpdationDate`, `Status`, `Action`) VALUES
(1, 4, 'eleven', 'el@gmail.com', 1534312583, 1, 'Sylhet', '2019-12-10', '2019-12-11', 'full', 6165, 6165, 0, 5, 8465652, '2019-11-10 19:02:36', '2019-11-10 19:07:52', 2, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Comment` text NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `P_ID` int(10) NOT NULL,
  `P_Name` varchar(25) NOT NULL,
  `P_Type` varchar(25) NOT NULL,
  `Place` varchar(25) NOT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `Feature` text NOT NULL,
  `Price` int(10) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`P_ID`, `P_Name`, `P_Type`, `Place`, `p_image`, `Feature`, `Price`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Sylhet', 'Indiana', 'Hogsmead', 'p/background hd_1573412493.jpg', 'Demo Demo Demo', 1233, '2019-11-10 19:01:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(10) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `RegDate`, `UpdationDate`) VALUES
(1, 'mita', 'g@gmail.com', 7896, '2019-10-01 18:22:14', '2019-10-01 19:30:27'),
(2, 'mitali', 'gt@gmail.com', 789, '2019-10-01 19:33:37', '0000-00-00 00:00:00'),
(3, 'Rahat', 'rahat@gmail.com', 7872, '2019-10-02 04:26:25', '0000-00-00 00:00:00'),
(4, 'eleven', 'el@gmail.com', 756, '2019-11-09 14:50:09', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_ID`),
  ADD KEY `id` (`id`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `B_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `P_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `package` (`P_ID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
