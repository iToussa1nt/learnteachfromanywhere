-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 09:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnteachfromanywhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `SENDER` varchar(200) NOT NULL,
  `ROLE` varchar(7) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `MESSAGE` varchar(2000) NOT NULL,
  `COMPOSED AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `SENDER`, `ROLE`, `SUBJECT`, `MESSAGE`, `COMPOSED AT`) VALUES
(1, 'toussiradukunda270@gmail.com', '', 'wfca', 'dscsad', '0000-00-00 00:00:00'),
(2, 'toussiradukunda270@gmail.com', 'Student', 'afAS', 'ZXC\ZCX', '0000-00-00 00:00:00'),
(3, 'dativek@gmail.com', 'Student', 'Greetings', 'HELLO WORLD', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `ID` int(11) NOT NULL,
  `FULL_NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `ROLE` varchar(7) NOT NULL,
  `PASSCODE` varchar(100) NOT NULL,
  `GENDER` varchar(6) DEFAULT NULL,
  `LESSONS` varchar(60) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`ID`, `FULL_NAME`, `EMAIL`, `ROLE`, `PASSCODE`, `GENDER`, `LESSONS`, `AGE`) VALUES
(18, 'iradukunda toussaint', 'toussiradukunda270@gmail.com', 'Admin', '123', NULL, NULL, NULL),
(19, 'KANKWANZI Dative', 'dativek@gmail.com', 'Student', '12345', 'Female', NULL, 2024),
(23, 'Tuyisenge alice', 'tuyisenge@gmail.com', 'Teacher', '12345', 'Female', 'Physics, Biology, Kiswahili, History', 2020),
(26, 'HARINDIMANA Fils', 'fils@gmail.com', 'Teacher', '123', 'Male', 'Physics, Chemitry, Kiswahili, Entrepreneurship', 1996),
(27, 'KMALI JMV', 'marie@gmail.com', 'Teacher', '$2y$10$c15pbE5/EODhQWg7WOnaj.MTGoPuAb6iS5d9ywc8rl2zdZkkhuOty', 'Male', 'French, Entrepreneurship, Computer science', 2009);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `ID` int(11) NOT NULL,
  `LESSON_AUTHOR` varchar(200) NOT NULL,
  `LESSON_TITLE` varchar(1000) NOT NULL,
  `LESSON_CAPTION` mediumtext NOT NULL,
  `LESSON_NOTES` longtext NOT NULL,
  `LESSON_VIDEO` longtext NOT NULL,
  `LESSON_CATEGORY` varchar(30) NOT NULL,
  `LESSON_LEVEL` varchar(20) NOT NULL,
  `UPLOADED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `SERVICE_TIITLE` varchar(1000) NOT NULL,
  `SERVICE_DESCRIPTION` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `SERVICE_TIITLE`, `SERVICE_DESCRIPTION`) VALUES
(1, 'Certification', 'We provide certificates which are valid internationally after doing face to face exam'),
(4, 'EXAMINATIONS', 'Face to face examinations');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
