-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 05:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `ID` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_name` varchar(250) NOT NULL,
  `department_short_name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`ID`, `faculty_id`, `department_name`, `department_short_name`, `status`, `created_at`, `created_by`) VALUES
(1, 1, 'Computer Science & Engineering', 'CSE', 0, '2024-11-01 07:19:02', 1),
(9, 1, 'Electrical Engineering', 'EE', 1, '2024-11-27 16:33:46', 1),
(17, 1, 'Mechanical Engineering', 'ME', 1, '2024-11-27 17:17:29', 1),
(19, 1, 'Electronics and Communication Engineering', 'ECE', 1, '2024-11-27 17:18:12', 1),
(20, 1, 'Test', 'test', 1, '2024-11-28 08:31:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE `faculty_master` (
  `ID` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `faculty_name` varchar(250) NOT NULL,
  `faculty_short_name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`ID`, `org_id`, `faculty_name`, `faculty_short_name`, `status`, `created_at`, `created_by`) VALUES
(1, 1, 'Faculty of Engineering and Technology', 'FE&T', 1, '2024-11-01 07:13:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_master`
--

CREATE TABLE `fee_category_master` (
  `ID` int(11) NOT NULL,
  `fee_category_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_category_master`
--

INSERT INTO `fee_category_master` (`ID`, `fee_category_name`, `status`) VALUES
(1, 'General', 0),
(2, 'SC in Punjab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fee_head_master`
--

CREATE TABLE `fee_head_master` (
  `ID` int(11) NOT NULL,
  `fee_head_name` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_head_master`
--

INSERT INTO `fee_head_master` (`ID`, `fee_head_name`, `status`) VALUES
(1, 'Tution Fee', 0),
(2, 'One Time Charges', 0),
(3, 'Examination Fee', 0),
(4, 'Degree Fee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fee_ledger`
--

CREATE TABLE `fee_ledger` (
  `ID` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `on_account_of` varchar(250) NOT NULL,
  `receipt_no` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `fee_head` int(11) NOT NULL,
  `receipt_status` int(11) NOT NULL,
  `online_trasaction_id` bigint(20) NOT NULL,
  `receipt_date` datetime NOT NULL,
  `online_fee_date` datetime NOT NULL,
  `fee_type` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `session_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fee_master`
--

CREATE TABLE `fee_master` (
  `ID` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `session` int(10) NOT NULL,
  `batch` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `fee_category` int(11) NOT NULL,
  `fee_head` int(11) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `LateralEntry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_master`
--

INSERT INTO `fee_master` (`ID`, `faculty_id`, `department_id`, `program_id`, `session`, `batch`, `amount`, `fee_category`, `fee_head`, `nationality`, `LateralEntry`) VALUES
(6, 1, 1, 1, 1, 2024, 1000, 1, 2, 'Indian', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisation_master`
--

CREATE TABLE `organisation_master` (
  `ID` int(11) NOT NULL,
  `organisation_name` varchar(250) NOT NULL,
  `organisation_short_name` varchar(250) NOT NULL,
  `organisation_logo` varchar(250) DEFAULT NULL,
  `organisation_status` int(11) NOT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisation_master`
--

INSERT INTO `organisation_master` (`ID`, `organisation_name`, `organisation_short_name`, `organisation_logo`, `organisation_status`, `remarks`, `created_by`, `created_at`) VALUES
(1, 'Guru Kashi University', 'GKU', 'join-logo.png', 1, '', 1, '2024-11-28 21:47:14'),
(4, 'hfg', 'fhf', NULL, 1, NULL, 1, '2024-11-09 17:15:55'),
(5, 'fghf', 'fghfh', NULL, 1, NULL, 1, '2024-11-09 17:16:00'),
(6, 'hfh', 'fgh', NULL, 1, NULL, 1, '2024-11-09 17:16:06'),
(7, 'fhf', 'gfhfg', NULL, 1, NULL, 1, '2024-11-09 17:16:10'),
(8, 'fghfh', 'gfhgfh', NULL, 1, NULL, 1, '2024-11-09 17:16:15'),
(9, 'fh', 'fgh', NULL, 1, NULL, 1, '2024-11-09 17:16:22'),
(10, 'fhg', 'fgh', NULL, 1, NULL, 1, '2024-11-09 17:16:26'),
(11, 'fh', 'fh', NULL, 1, NULL, 1, '2024-11-09 17:16:31'),
(12, 'fgh', 'fg', NULL, 1, NULL, 1, '2024-11-09 17:16:45'),
(13, 'asdsdf', 'sdfs', NULL, 1, NULL, 1, '2024-11-23 09:31:25'),
(14, 'sdf', 'sdf', NULL, 1, NULL, 1, '2024-11-24 03:48:17'),
(15, 'sdads', 'asd', NULL, 1, NULL, 1, '2024-11-24 04:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_master`
--

CREATE TABLE `program_master` (
  `ID` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `program_name` varchar(250) NOT NULL,
  `program_short_name` varchar(250) NOT NULL,
  `program_eligibility` varchar(250) NOT NULL,
  `program_duration_year` int(50) NOT NULL,
  `program_level` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `program_image` varchar(250) NOT NULL,
  `program_duration_months` int(11) NOT NULL,
  `total_no_of_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_master`
--

INSERT INTO `program_master` (`ID`, `faculty_id`, `department_id`, `program_name`, `program_short_name`, `program_eligibility`, `program_duration_year`, `program_level`, `status`, `program_image`, `program_duration_months`, `total_no_of_semester`) VALUES
(1, 1, 1, 'Diploma in Computer Science and Engineering', 'Diploma CSE', '10th', 3, 'Diploma', 0, '', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `semester_master`
--

CREATE TABLE `semester_master` (
  `ID` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `semester_name` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `sup_script` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester_master`
--

INSERT INTO `semester_master` (`ID`, `semester`, `semester_name`, `status`, `sup_script`) VALUES
(1, 1, 'First', 1, 'st'),
(2, 2, 'Second', 1, 'nd'),
(3, 3, 'Third', 1, 'rd'),
(4, 4, 'Fourth', 1, 'th'),
(5, 5, 'Fifth', 1, 'th'),
(6, 6, 'Sixth', 1, 'th');

-- --------------------------------------------------------

--
-- Table structure for table `series_master`
--

CREATE TABLE `series_master` (
  `ID` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `deaprtment_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `start_roll_no` bigint(20) NOT NULL,
  `end_roll_no` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `lateral_entry` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `current_semester` int(11) NOT NULL COMMENT 'Batch proceeding in which Semester',
  `current_batch_status` int(11) NOT NULL COMMENT 'Batch is Pass out or in progress',
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series_master`
--

INSERT INTO `series_master` (`ID`, `faculty_id`, `deaprtment_id`, `program_id`, `start_roll_no`, `end_roll_no`, `status`, `session`, `lateral_entry`, `last_date`, `current_semester`, `current_batch_status`, `batch`) VALUES
(1, 1, 1, 1, 101, 200, 0, 1, 0, '2024-11-21', 1, 1, 2024);

-- --------------------------------------------------------

--
-- Table structure for table `session_master`
--

CREATE TABLE `session_master` (
  `ID` int(11) NOT NULL,
  `session` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `financial_year` varchar(11) NOT NULL,
  `receipt_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session_master`
--

INSERT INTO `session_master` (`ID`, `session`, `status`, `financial_year`, `receipt_active`) VALUES
(1, 'A2024', 0, '2024-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` bigint(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `session` int(100) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `fee_category` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `class_roll_no` bigint(20) NOT NULL,
  `uni_roll_no` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `admission_date` datetime NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `abcid` varchar(100) NOT NULL,
  `lateral_entry` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `signature` varchar(250) NOT NULL,
  `eligibility_status` int(11) NOT NULL,
  `eligibility_reason` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `country` varchar(150) NOT NULL,
  `nationality` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `permanent_address` varchar(250) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `year_of_admission` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role` int(11) NOT NULL DEFAULT 0,
  `user_type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_role`, `user_type`) VALUES
(1, 'Amrik Singh', 'abc@gku.ac.in', NULL, '$2y$12$A.5tgrN6xlzTevWjU07VAeFi7O1MMm6Isd031yN0jLtUysCfebrdm', NULL, '2024-11-07 04:26:46', '2024-11-07 04:26:46', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `faculty_id` (`faculty_id`,`department_name`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `faculty_name` (`faculty_name`),
  ADD KEY `org_id` (`org_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fee_category_master`
--
ALTER TABLE `fee_category_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fee_head_master`
--
ALTER TABLE `fee_head_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fee_ledger`
--
ALTER TABLE `fee_ledger`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `fee_head` (`fee_head`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `fee_master`
--
ALTER TABLE `fee_master`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `faculty_id` (`faculty_id`,`department_id`,`program_id`,`session`,`batch`,`fee_category`,`fee_head`,`nationality`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `fee_head` (`fee_head`),
  ADD KEY `fee_category` (`fee_category`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `batch` (`batch`),
  ADD KEY `session` (`session`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation_master`
--
ALTER TABLE `organisation_master`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `program_master`
--
ALTER TABLE `program_master`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `semester_master`
--
ALTER TABLE `semester_master`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `semester_name` (`semester_name`),
  ADD KEY `semester` (`semester`);

--
-- Indexes for table `series_master`
--
ALTER TABLE `series_master`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `deaprtment_id` (`deaprtment_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `session` (`session`),
  ADD KEY `batch` (`batch`),
  ADD KEY `series_master_ibfk_5` (`current_semester`);

--
-- Indexes for table `session_master`
--
ALTER TABLE `session_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `fee_category` (`fee_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faculty_master`
--
ALTER TABLE `faculty_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_category_master`
--
ALTER TABLE `fee_category_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fee_head_master`
--
ALTER TABLE `fee_head_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fee_master`
--
ALTER TABLE `fee_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organisation_master`
--
ALTER TABLE `organisation_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_master`
--
ALTER TABLE `program_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester_master`
--
ALTER TABLE `semester_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `series_master`
--
ALTER TABLE `series_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `session_master`
--
ALTER TABLE `session_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department_master`
--
ALTER TABLE `department_master`
  ADD CONSTRAINT `department_master_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_master` (`ID`);

--
-- Constraints for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD CONSTRAINT `faculty_master_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `organisation_master` (`ID`);

--
-- Constraints for table `fee_ledger`
--
ALTER TABLE `fee_ledger`
  ADD CONSTRAINT `fee_ledger_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`ID`),
  ADD CONSTRAINT `fee_ledger_ibfk_2` FOREIGN KEY (`fee_head`) REFERENCES `fee_head_master` (`ID`),
  ADD CONSTRAINT `fee_ledger_ibfk_3` FOREIGN KEY (`session_id`) REFERENCES `session_master` (`ID`),
  ADD CONSTRAINT `fee_ledger_ibfk_4` FOREIGN KEY (`semester_id`) REFERENCES `semester_master` (`semester`);

--
-- Constraints for table `fee_master`
--
ALTER TABLE `fee_master`
  ADD CONSTRAINT `fee_master_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department_master` (`ID`),
  ADD CONSTRAINT `fee_master_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_master` (`ID`),
  ADD CONSTRAINT `fee_master_ibfk_3` FOREIGN KEY (`fee_head`) REFERENCES `fee_head_master` (`ID`),
  ADD CONSTRAINT `fee_master_ibfk_4` FOREIGN KEY (`fee_category`) REFERENCES `fee_category_master` (`ID`),
  ADD CONSTRAINT `fee_master_ibfk_5` FOREIGN KEY (`program_id`) REFERENCES `program_master` (`ID`),
  ADD CONSTRAINT `fee_master_ibfk_6` FOREIGN KEY (`batch`) REFERENCES `series_master` (`batch`),
  ADD CONSTRAINT `fee_master_ibfk_7` FOREIGN KEY (`session`) REFERENCES `session_master` (`ID`);

--
-- Constraints for table `organisation_master`
--
ALTER TABLE `organisation_master`
  ADD CONSTRAINT `organisation_master_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `program_master`
--
ALTER TABLE `program_master`
  ADD CONSTRAINT `program_master_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department_master` (`ID`),
  ADD CONSTRAINT `program_master_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_master` (`ID`);

--
-- Constraints for table `series_master`
--
ALTER TABLE `series_master`
  ADD CONSTRAINT `series_master_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_master` (`ID`),
  ADD CONSTRAINT `series_master_ibfk_2` FOREIGN KEY (`deaprtment_id`) REFERENCES `department_master` (`ID`),
  ADD CONSTRAINT `series_master_ibfk_3` FOREIGN KEY (`program_id`) REFERENCES `program_master` (`ID`),
  ADD CONSTRAINT `series_master_ibfk_4` FOREIGN KEY (`session`) REFERENCES `session_master` (`ID`),
  ADD CONSTRAINT `series_master_ibfk_5` FOREIGN KEY (`current_semester`) REFERENCES `semester_master` (`semester`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department_master` (`ID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_master` (`ID`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`program_id`) REFERENCES `program_master` (`ID`),
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`fee_category`) REFERENCES `fee_category_master` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
