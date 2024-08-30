-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 04:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `status_withdrawals`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id_report` int(11) NOT NULL,
  `id_warnings` int(11) NOT NULL,
  `id_gpas` int(11) NOT NULL,
  `id_guidance` int(11) NOT NULL,
  `id_achievments` int(11) NOT NULL,
  `id_scholarship` int(11) NOT NULL,
  `id_student_withdrawals` int(11) NOT NULL,
  `id_tuition_arrears` int(11) NOT NULL,
  `report_date` date NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL,
  `has_acc_academic_advisor` tinyint(1) NOT NULL,
  `has_acc_head_of_program` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id_report`, `id_warnings`, `id_gpas`, `id_guidance`, `id_achievments`, `id_scholarship`, `id_student_withdrawals`, `id_tuition_arrears`, `report_date`, `status`, `has_acc_academic_advisor`, `has_acc_head_of_program`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, '2024-08-28', 'Approved', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_withdrawals`
--

CREATE TABLE `student_withdrawals` (
  `id_withdrawals` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `withdrawal_type` enum('Withdrawal','Drop Out') NOT NULL,
  `decree_number` varchar(100) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_withdrawals`
--

INSERT INTO `student_withdrawals` (`id_withdrawals`, `id_student`, `withdrawal_type`, `decree_number`, `reason`) VALUES
(1, 1, 'Drop Out', '45', 'he');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_report`),
  ADD UNIQUE KEY `id_warnings` (`id_warnings`),
  ADD UNIQUE KEY `id_gpas` (`id_gpas`),
  ADD UNIQUE KEY `id_guidance` (`id_guidance`),
  ADD UNIQUE KEY `id_achievments` (`id_achievments`),
  ADD UNIQUE KEY `id_scholarship` (`id_scholarship`),
  ADD UNIQUE KEY `id_student_withdrawals` (`id_student_withdrawals`),
  ADD UNIQUE KEY `id_tuition_arrears` (`id_tuition_arrears`),
  ADD UNIQUE KEY `report_date` (`report_date`),
  ADD UNIQUE KEY `has_acc_academic_advisor` (`has_acc_academic_advisor`),
  ADD UNIQUE KEY `status` (`status`),
  ADD UNIQUE KEY `has_acc_head_of_program` (`has_acc_head_of_program`);

--
-- Indexes for table `student_withdrawals`
--
ALTER TABLE `student_withdrawals`
  ADD PRIMARY KEY (`id_withdrawals`),
  ADD UNIQUE KEY `withdrawal_type` (`withdrawal_type`),
  ADD UNIQUE KEY `decree_number` (`decree_number`),
  ADD UNIQUE KEY `reason` (`reason`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
