-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 11:44 PM
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
-- Table structure for table `allergies`
--

DROP TABLE IF EXISTS `allergies`;
CREATE TABLE `allergies` (
  `id` int(100) NOT NULL COMMENT '1',
  `name` varchar(45) DEFAULT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(4, 'Cardiology'),
(5, 'Family medicine'),
(6, 'Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `ehr_medication`
--

DROP TABLE IF EXISTS `ehr_medication`;
CREATE TABLE `ehr_medication` (
  `ehr_id` int(11) NOT NULL,
  `medication_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `dosage` decimal(10,0) NOT NULL,
  `times_per_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ehr_patients_allergies`
--

DROP TABLE IF EXISTS `ehr_patients_allergies`;
CREATE TABLE `ehr_patients_allergies` (
  `ehr_patient_id` int(11) NOT NULL,
  `allergy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `pain_types`
--

DROP TABLE IF EXISTS `pain_types`;
CREATE TABLE `pain_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_exams`
--

DROP TABLE IF EXISTS `pre_exams`;
CREATE TABLE `pre_exams` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `temperature` int(11) NOT NULL,
  `pulse_rate` int(11) NOT NULL,
  `blood_pressure` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ehr_patient_id` int(11) NOT NULL,
  `pain_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `problem_types`
--

DROP TABLE IF EXISTS `problem_types`;
CREATE TABLE `problem_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` mediumtext NOT NULL
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
(3, 'Patient'),
(4, 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
CREATE TABLE `tokens` (
  `username` varchar(45) NOT NULL,
  `token` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `dep_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `year_of_birth`, `gender`, `username`, `password`, `role_id`, `email`, `created_at`, `creator`, `creator_ip`, `dep_id`) VALUES
(32, 'nour', 'saliba', '2000-09-16', 'Female', 'nour12', 'ccbc1770bb10486495d127a7d65c252b', 4, 'nour@gmail.com', '2022-06-29 20:20:32', NULL, NULL, NULL),
(33, 'anthony', 'saliba', '0000-00-00', 'male', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin@med.com', '2022-06-29 20:36:16', NULL, NULL, NULL),
(34, 'nour', 'saliba', '2000-09-16', 'female', 'nourS', 'ccbc1770bb10486495d127a7d65c252b', 2, 'nour.saliba@med.com', '2022-06-29 21:04:40', 'anthony', '102.168.0.102', NULL),
(35, 'anthony', 'saliba', '2000-01-01', 'Male', 'anthony12', '202cb962ac59075b964b07152d234b70', 4, 'anthony@med.com', '2022-06-29 23:14:51', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ehr_medication`
--
ALTER TABLE `ehr_medication`
  ADD PRIMARY KEY (`ehr_id`,`medication_id`);

--
-- Indexes for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_FK` (`user_id`),
  ADD KEY `FKDOC` (`doctor_id`);

--
-- Indexes for table `ehr_patients_allergies`
--
ALTER TABLE `ehr_patients_allergies`
  ADD PRIMARY KEY (`ehr_patient_id`,`allergy_id`),
  ADD KEY `ALLERGIES_ID` (`allergy_id`);

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
-- Indexes for table `pain_types`
--
ALTER TABLE `pain_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_exams`
--
ALTER TABLE `pre_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EHR_ID` (`ehr_patient_id`),
  ADD KEY `pain_id` (`pain_type_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `problem_types`
--
ALTER TABLE `problem_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`username`);

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
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '1';

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ehr_medication`
--
ALTER TABLE `ehr_medication`
  MODIFY `ehr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `pain_types`
--
ALTER TABLE `pain_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_exams`
--
ALTER TABLE `pre_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem_types`
--
ALTER TABLE `problem_types`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FKDOC` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

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
