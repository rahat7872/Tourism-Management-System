-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 05:05 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '789', '2019-02-04 14:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `B_ID` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `RegDate` date NOT NULL,
  `P_ID` int(100) NOT NULL,
  `P_Name` varchar(11) NOT NULL,
  `Package_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`B_ID`, `id`, `Email`, `FromDate`, `ToDate`, `RegDate`, `P_ID`, `P_Name`, `Package_Type`) VALUES
(10, 25, 'maisha@gmail.com', '2019-06-09', '2022-02-05', '2023-02-05', 5, 'Package-01', 'couple'),
(11, 25, 'maisha@gmail.com', '2019-02-05', '2019-02-05', '2019-02-05', 5, 'Package-01', 'family'),
(12, 26, 'urmi@gmail.com', '2019-02-05', '2019-02-05', '2019-02-05', 5, 'Package-01', 'family'),
(13, 27, 'shammi@gmail.com', '2019-02-06', '2019-02-06', '2019-02-06', 5, 'Package-01', 'family'),
(14, 28, 'oliar@gmail.com', '2019-02-06', '2019-02-06', '2019-02-06', 7, 'Package-01', 'family');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Package_Name` varchar(100) NOT NULL,
  `Comment` text NOT NULL,
  `P_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `P_ID` int(100) NOT NULL,
  `P_Name` varchar(100) NOT NULL,
  `P_Type` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Feature` varchar(250) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`P_ID`, `P_Name`, `P_Type`, `Place`, `Feature`, `price`) VALUES
(5, 'Package-04', 'student', 'ffghj', '3 days 2 nights', 10000),
(6, 'Package-02', 'couple', 'Coxs Bazar', '2 days 1 nights', 8000),
(7, 'Package-01', 'family', 'Khulna', '7 days 8 nights', 200000),
(8, 'nn', 'couple', 'j', 'kk', 890),
(9, 'pa', '', '', '', 0),
(10, 'bbb', 'nbnn', 'mmm', 'mmmmm', 0),
(11, 'Sylhet', 'Couple', 'jaflong', 'good', 10000),
(12, 's', 's', 's', 's', 0),
(13, 'lllls', 'x', 'z', 'z', 0),
(14, 'jhiujio', 'fvvfc', 'sss', 'ssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `email`, `password`) VALUES
(25, 'maisha', 'maisha@gmail.com', '789'),
(26, 'urmi', 'urmi@gmail.com', '789'),
(27, 'shammi', 'shammi@gmail.com', '789'),
(28, 'oliar', 'oliar@gmail.com', '789');

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
  ADD PRIMARY KEY (`B_ID`,`id`,`P_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`,`P_ID`),
  ADD KEY `feedback_ibfk_1` (`P_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`email`),
  ADD KEY `EmailId_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `P_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `package` (`P_ID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id`) REFERENCES `tblusers` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `package` (`P_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
