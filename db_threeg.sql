-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 10:29 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_threeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pitch_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `title`, `user_id`, `pitch_id`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(1, 'Team 1 vs Team 2', 10, 1, '2019-03-31', '2019-03-31', '00:00:00', '00:00:00'),
(2, 'test', 10, 1, '2019-09-03', '2019-09-04', '00:00:00', '00:00:00'),
(3, 'test2', 10, 1, '2019-09-04', '2019-09-05', '00:00:00', '00:00:00'),
(4, 'test3', 10, 1, '2019-09-04', '2019-09-05', '00:00:00', '00:00:00'),
(5, 'test4', 10, 1, '2019-09-03', '2019-09-04', '10:00:00', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `name` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`name`, `email_address`, `message`) VALUES
('said ourty', 'test@test.com', 'Testtttt');

-- --------------------------------------------------------

--
-- Table structure for table `pitch`
--

CREATE TABLE `pitch` (
  `pitch_id` int(11) NOT NULL,
  `pitch_name` varchar(40) NOT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pitch`
--

INSERT INTO `pitch` (`pitch_id`, `pitch_name`, `location`) VALUES
(1, '5-aside 1 ', 'Chestnut Avenue, PE1 4PE'),
(2, '5-aside 2 ', 'Chestnut Avenue, PE1 4PE'),
(3, '5-aside 3 ', 'Chestnut Avenue, PE1 4PE'),
(4, '7-aside 1 ', 'Chestnut Avenue, PE1 4PE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(9) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `address_line_1` varchar(30) NOT NULL,
  `address_line_2` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email_address`, `password`, `first_name`, `last_name`, `address_line_1`, `address_line_2`, `city`, `county`, `mobile`) VALUES
(10, 'said.ourty@gmail.com', 'pass', 'Said', 'Ourty', 'address 1', 'address 2', 'Peterborough', 'Cambs', '01733'),
(11, 'Steventaylor123@gmail.com', 'password123', 'Steven', 'Taylor', '26 Myrtle Avenue', 'Dogsthorpe', 'Peterborough', 'Cambs', '07862973394'),
(12, 'aaron.batt@hotmail.com', 'password', 'Aaron', 'Batt', '177 Filbert Street', 'Ravensthorpe', 'Peterborough', 'Cambs', '01733 79645'),
(13, 'said.ourty@gmail.com', 'pass', 'said', 'ourty', 'address 1', 'address 2', 'Peterborough', 'Cambs', '01733 79645'),
(14, 'asna.satari@gmail.com', 'password', 'Asna', 'Satari', 'Peterborough road', 'address 2', 'peterborough', 'cambs', '07680905894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `pitch`
--
ALTER TABLE `pitch`
  ADD PRIMARY KEY (`pitch_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pitch`
--
ALTER TABLE `pitch`
  MODIFY `pitch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
