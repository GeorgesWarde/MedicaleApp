-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 12:19 PM
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
  `allergie` varchar(100) DEFAULT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `lab_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `ehrfiles` enum('filled','not') NOT NULL DEFAULT 'not',
  `preexam` enum('filled','not') NOT NULL DEFAULT 'not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `visit_at`, `dep_id`, `allergie`, `symptoms`, `lab_id`, `doc_id`, `phone`, `created_at`, `ehrfiles`, `preexam`) VALUES
(1, 32, '0000-00-00 00:00:00', 7, 'dust mites.', 'Sneezing,Runny nose', 1, 34, '21312', '2022-07-04 14:56:40', 'filled', 'filled'),
(5, 43, '2022-07-08 13:10:00', 8, NULL, NULL, 2, 42, '12334', '2022-07-08 13:10:44', 'not', 'not'),
(6, 46, '2022-07-11 12:10:00', 9, 'headache', NULL, 1, 45, '76197840', '2022-07-11 12:10:42', 'filled', 'filled');

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
  `blood_type` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `med_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ehr_patients`
--

INSERT INTO `ehr_patients` (`id`, `blood_type`, `date`, `user_id`, `doctor_id`, `payment`, `med_id`, `created_at`) VALUES
(2, 'A+', '0000-00-00', 32, 34, '50000', 1, '2022-07-08 17:09:08'),
(3, 'A+', '2022-07-11', 46, 45, '150000', 2, '2022-07-11 12:12:04');

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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pre_exams`
--

INSERT INTO `pre_exams` (`id`, `created_at`, `temperature`, `pulse_rate`, `blood_pressure`, `user_id`) VALUES
(3, '2022-07-08 15:35:32', 112, 1, 1, 32),
(4, '2022-07-11 12:11:24', 39, 98, 12, 46);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sodium` text DEFAULT NULL,
  `potasium` text DEFAULT NULL,
  `Chloriode` text DEFAULT NULL,
  `Bicarbonate` text DEFAULT NULL,
  `Urea` text DEFAULT NULL,
  `Creatinine` text DEFAULT NULL,
  `eGFR` text DEFAULT NULL,
  `Calcium` text DEFAULT NULL,
  `Phosphate` text DEFAULT NULL,
  `Magnesium` text DEFAULT NULL,
  `Albumin` text DEFAULT NULL,
  `Haemoglobin` text DEFAULT NULL,
  `white` text DEFAULT NULL,
  `Platelets` text DEFAULT NULL,
  `Thyroid` text DEFAULT NULL,
  `triiodothyronine` text DEFAULT NULL,
  `Follicide` text DEFAULT NULL,
  `Testosterone` text DEFAULT NULL,
  `Blood` text DEFAULT NULL,
  `Area` text DEFAULT NULL,
  `BMC` text DEFAULT NULL,
  `BMD` text DEFAULT NULL,
  `Tscore` text DEFAULT NULL,
  `Zscore` text DEFAULT NULL,
  `ct_1` text DEFAULT NULL,
  `ct_2` text DEFAULT NULL,
  `ct_3` text DEFAULT NULL,
  `ct_4` text DEFAULT NULL,
  `lunge_front` text DEFAULT NULL,
  `lunge_back` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `lab_id`, `user_id`, `sodium`, `potasium`, `Chloriode`, `Bicarbonate`, `Urea`, `Creatinine`, `eGFR`, `Calcium`, `Phosphate`, `Magnesium`, `Albumin`, `Haemoglobin`, `white`, `Platelets`, `Thyroid`, `triiodothyronine`, `Follicide`, `Testosterone`, `Blood`, `Area`, `BMC`, `BMD`, `Tscore`, `Zscore`, `ct_1`, `ct_2`, `ct_3`, `ct_4`, `lunge_front`, `lunge_back`, `created_at`) VALUES
(3, 1, 32, '12', '33', '12', '121', '12', '111', '11', '22', '212', '23', '11', '33', '12', '324', '11', '22', '3321', '1223', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 17:00:41'),
(4, 4, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', '12', '12', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 16:19:11'),
(5, 2, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '421424217picturea.jpg', '1095803872pictureb.jpg', '1769334415picturec.jpg', '1349768902pictured.jpg', NULL, NULL, '2022-07-10 17:55:55'),
(6, 3, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1146678641lungepicture2.jpg', '2072260251lungescana.jpg', '2022-07-10 18:09:13'),
(7, 1, 46, '3.4', '22', '1.2', '5.5', '15', '6', '20', '13', '27', '25', '32', '26', '35', '366', '42', '1.2', '550', '50.2', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-11 12:17:34');

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
  `studies` varchar(100) DEFAULT NULL,
  `available` varchar(30) DEFAULT NULL,
  `specialist` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `year_of_birth`, `gender`, `username`, `password`, `role_id`, `email`, `created_at`, `creator`, `creator_ip`, `dep_id`, `studies`, `available`, `specialist`) VALUES
(1, 'Sonia', 'saab', '2342-12-12', 'female', 'soniasaab', 'd31cb1e2b7902e8e9b4d1793e94c38a0', 3, 'sonia.saab@med.com', '2022-07-08 11:44:31', 'anthony', '102.168.0.102', NULL, NULL, NULL, NULL),
(32, 'nour', 'saliba', '2000-09-16', 'Female', 'nour12', 'ccbc1770bb10486495d127a7d65c252b', 4, 'nour@gmail.com', '2022-06-29 20:20:32', NULL, NULL, NULL, '', '', ''),
(33, 'anthony', 'saliba', '0000-00-00', 'male', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin@med.com', '2022-06-29 20:36:16', NULL, NULL, NULL, '', '', ''),
(34, 'nour', 'saliba', '2000-09-16', 'female', 'nourS', 'ccbc1770bb10486495d127a7d65c252b', 2, 'nour.saliba@med.com', '2022-06-29 21:04:40', 'anthony', '102.168.0.102', 7, 'Lebanese Univerity - Hadath', 'not available', 'heart disease'),
(37, 'peter', 'saliba', '2001-08-21', 'male', 'peter12', '51dc30ddc473d43a6011e9ebba6ca770', 2, 'peter.saliba@med.com', '2022-07-03 23:05:15', 'anthony', '102.168.0.106', 7, 'Lebanese Univerity - Hadath', 'available', ''),
(42, 'nabih', 'saliba', '1966-06-16', 'male', 'nabihsaliba', '835aea20a2fdf4ebe6bddfa1a55621b4', 2, 'nabih@med.com', '2022-07-05 07:34:24', 'anthony', '10.20.80.83', 8, 'Lebanese university', 'available', 'general medical'),
(43, 'Georges', 'warde', '1111-11-11', 'Male', 'georges_wardeh', 'a5d502e66f116d4bd040613df88e074b', 4, 'georges_warde@med.com', '2022-07-08 13:09:30', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'georges', 'wardeh', '2012-12-12', 'Male', 'georges', 'a5d502e66f116d4bd040613df88e074b', 1, 'grg@med.com', '2022-07-11 12:04:35', 'anthony', '102.168.0.104', NULL, NULL, NULL, NULL),
(45, 'nadine', 'saliba', '2002-05-17', 'female', 'nad', '938a800650dda9e8aba505177c4cc6bd', 2, 'nad@med.com', '2022-07-11 12:08:11', 'georges', '102.168.0.104', 9, 'Lebanese Univerity - Hadath', 'available', 'radiologue'),
(46, 'anthony', 'saliba', '2000-01-01', 'Male', 'anthony', '63b07e828bf016e976ff95d6ee07a105', 4, 'ant@med.com', '2022-07-11 12:09:28', NULL, NULL, NULL, NULL, NULL, NULL);

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
  ADD KEY `fkmed` (`med_id`);

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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lab_id` (`lab_id`),
  ADD KEY `fk_users_id` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ehr_patients`
--
ALTER TABLE `ehr_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  ADD CONSTRAINT `fkmed` FOREIGN KEY (`med_id`) REFERENCES `medications` (`id`);

--
-- Constraints for table `pre_exams`
--
ALTER TABLE `pre_exams`
  ADD CONSTRAINT `fk_user_pre` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `fk_lab_id` FOREIGN KEY (`lab_id`) REFERENCES `labs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
