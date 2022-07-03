-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 12:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visit_at` datetime NOT NULL,
  `dep_id` int(11) NOT NULL,
  `allergie` varchar(100) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `phone`, `created_at`) VALUES
(7, 'Cardiology', '03299566', '2022-07-02'),
(8, 'Family medicine', '03299147', '2022-07-02'),
(9, 'Radiology', '03299188', '2022-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `ehr_patients`
--

DROP TABLE IF EXISTS `ehr_patients`;
CREATE TABLE `ehr_patients` (
  `id` int(11) NOT NULL COMMENT '1',
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_type` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `med_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

DROP TABLE IF EXISTS `labs`;
CREATE TABLE `labs` (
  `id` int(100) NOT NULL COMMENT '1',
  `name` varchar(45) DEFAULT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `name`, `description`) VALUES
(1, 'Blood test', 'A blood test is a laboratory analysis performed on a blood sample that is usually extracted from a vein in the arm using a hypodermic needle, or via fingerprick.'),
(2, 'CT scan', 'A CT scan, also known as computed tomography scan is a medical imaging technique used in radiology to obtain detailed internal images of the body noninvasively for diagnostic purposes.'),
(3, 'Lunge scan', 'A lung scan is an imaging test to look at your lungs and help diagnose certain lung problems.'),
(4, 'Dexa scan', 'A procedure that measures the amount of calcium and other minerals in a bone by passing x-rays with two different energy levels through the bone.');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

DROP TABLE IF EXISTS `medications`;
CREATE TABLE `medications` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` mediumtext NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `stockId` int(150) DEFAULT NULL,
  `price` varchar(30) NOT NULL,
  `arrived_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `name`, `description`, `qty`, `stockId`, `price`, `arrived_at`) VALUES
(1, 'panadol', 'panadol joint for muscle pain', 81, 1966381960, '50000LL', '2022-06-29 20:39:03'),
(2, 'painol 500mg', 'generation of the panadol ', 100, 684707656, '20000LL', '2022-06-29 20:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `published_by` varchar(30) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `created_at`, `published_by`, `image`) VALUES
(1, '123456789123456789123456789456', 'content1', '2022-06-22 23:07:32', 'anthony', ''),
(2, 'title2', 'content2', '2022-06-22 23:23:31', 'anthony', ''),
(3, 'title3', 'content3', '2022-06-22 23:24:22', 'anthony', 'bloodtests.jpg'),
(4, 'title4', 'content4', '2022-06-21 23:25:40', 'anthony', '992403487depimage2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pre_exams`
--

DROP TABLE IF EXISTS `pre_exams`;
CREATE TABLE `pre_exams` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `temperature` int(11) NOT NULL,
  `pulse_rate` int(11) NOT NULL,
  `blood_pressure` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `allergie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Doctor'),
(3, 'nurse'),
(4, 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `year_of_birth` date NOT NULL,
  `gender` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `creator` varchar(30) DEFAULT NULL,
  `creator_ip` varchar(50) DEFAULT NULL,
  `dep_id` int(11) DEFAULT NULL,
  `studies` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `year_of_birth`, `gender`, `username`, `password`, `role_id`, `email`, `created_at`, `creator`, `creator_ip`, `dep_id`, `studies`) VALUES
(32, 'nour', 'saliba', '2000-09-16', 'Female', 'nour12', 'ccbc1770bb10486495d127a7d65c252b', 4, 'nour@gmail.com', '2022-06-29 20:20:32', NULL, NULL, NULL, ''),
(33, 'anthony', 'saliba', '0000-00-00', 'male', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin@med.com', '2022-06-29 20:36:16', NULL, NULL, NULL, ''),
(34, 'nour', 'saliba', '2000-09-16', 'female', 'nourS', 'ccbc1770bb10486495d127a7d65c252b', 2, 'nour.saliba@med.com', '2022-06-29 21:04:40', 'anthony', '102.168.0.102', 7, 'Lebanese Univerity - Hadath'),
(37, 'peter', 'saliba', '2001-08-21', 'male', 'peter12', '51dc30ddc473d43a6011e9ebba6ca770', 2, 'peter.saliba@med.com', '2022-07-03 23:05:15', 'anthony', '102.168.0.106', 7, 'Lebanese Univerity - Hadath');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`dep_id`),
  ADD KEY `fk3` (`user_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_FK` (`user_id`),
  ADD KEY `FKDOC` (`doctor_id`),
  ADD KEY `fkmed` (`med_id`),
  ADD KEY `fklab` (`lab_id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_exams`
--
ALTER TABLE `pre_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `Fkdep` (`dep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pre_exams`
--
ALTER TABLE `pre_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FKDOC` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fklab` FOREIGN KEY (`lab_id`) REFERENCES `labs` (`id`),
  ADD CONSTRAINT `fkmed` FOREIGN KEY (`med_id`) REFERENCES `medications` (`id`);

--
-- Constraints for table `pre_exams`
--
ALTER TABLE `pre_exams`
  ADD CONSTRAINT `fk_user_pre` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `Fkdep` FOREIGN KEY (`dep_id`) REFERENCES `department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
