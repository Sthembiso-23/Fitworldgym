-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 03:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(30) NOT NULL,
  `package` varchar(200) NOT NULL,
  `amount` float NOT NULL,
  `planID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package`, `amount`, `planID`) VALUES
(17, '6 Months', 550, 1),
(18, '12 Months(Adults)', 499, 5),
(19, '24 Months(Adult)', 399, 6),
(20, '12 Months Family Package', 599, 5),
(21, '12 Months Scholar Package', 199, 5),
(22, '12 Months Student Package', 349, 5);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `planID` int(30) NOT NULL,
  `plan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`planID`, `plan`) VALUES
(1, 6),
(5, 12),
(6, 24);

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
  `id` int(30) NOT NULL,
  `member_id` int(30) NOT NULL,
  `plan_id` int(30) NOT NULL,
  `package_id` int(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1= Active',
  `date_created` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_info`
--

INSERT INTO `registration_info` (`id`, `member_id`, `plan_id`, `package_id`, `start_date`, `end_date`, `status`, `date_created`) VALUES
(15, 27, 5, 21, '2022-11-06', '2023-11-06', 1, '2022-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `achievement` longtext NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `speciality` longtext NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `contact`, `email`, `achievement`, `description`, `image`, `speciality`, `class`) VALUES
(1, 'Lucky Nkosi', '0651258564', 'lucky@gmail.com', 'Personal Training Certificate', 'I am a Personal trainer located in Mpumalanga, Witbank. I am a highly compentent, passionate, enthusiastic fitness trainter and professional athlete with burning desire and to help people achieve their fitness goals.', 'gallery6.png', 'Outdoor Activities, Corporate Wellness', '08:00 To 17:00'),
(6, 'Mike Sibisi', '0765420564', 'trainer1@fitworldgym.com', 'Personal Trainer', 'I am a professional gym trainer', 'gallery6.png', 'Aerobics Classes, Spinning, Boot Camps', '08:00 To 17:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cellphone` varchar(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date_registered` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `proof` varchar(100) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `bankstatement` varchar(100) NOT NULL,
  `idcopy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `email`, `cellphone`, `role`, `date_registered`, `password`, `proof`, `type`, `status`, `bankstatement`, `idcopy`) VALUES
(12, 'Admin', 'FitWorld', 'admin@fitworldgym.com', '0136562010', 'Admin', '2022-08-21', '74b2346fb4518dd46bc17bbb61b4dbbf', NULL, '', '', '', ''),
(25, 'Adult', 'Adult', 'Sihle.Sihle0429@gmail.com', '0739342936', 'Member', '2022-10-20', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'Adult', 'Approved', '', ''),
(26, 'Student', 'Student', 'stud@gmail.com', '0781253654', 'Member', '2022-10-20', '827ccb0eea8a706c4c34a16891f84e7b', 'Doc12.pdf', 'Student', 'Approved', 'Doc3.pdf', 'Doc8.pdf'),
(27, 'Sihle', 'Mazibuko', 'sihle@gmail.com', '0736730582', 'Member', '2022-11-04', '827ccb0eea8a706c4c34a16891f84e7b', 'Doc5.pdf', 'Scholar', 'Rejected', 'Doc5.pdf', 'Doc3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`planID`);

--
-- Indexes for table `registration_info`
--
ALTER TABLE `registration_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `planID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration_info`
--
ALTER TABLE `registration_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
