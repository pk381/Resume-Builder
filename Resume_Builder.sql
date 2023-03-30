-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 04:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume-builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `resume_id` varchar(20) NOT NULL,
  `certificate_name` varchar(255) NOT NULL,
  `certificate_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `degree_qual`
--

CREATE TABLE `degree_qual` (
  `resume_id` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `cgpa_percentage` varchar(4) NOT NULL,
  `passing_year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `resume_id` varchar(20) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `duration` int(20) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `resume_id` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resume_details`
--

CREATE TABLE `resume_details` (
  `resume_id` varchar(20) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `interests` varchar(255) NOT NULL,
  `objective` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenth_details`
--

CREATE TABLE `tenth_details` (
  `resume_id` varchar(20) NOT NULL,
  `cgpa_percentage` varchar(4) NOT NULL,
  `board` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `passing_year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `twelfth_details`
--

CREATE TABLE `twelfth_details` (
  `resume_id` varchar(20) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `percentage` varchar(4) NOT NULL,
  `board` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `passing_year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `degree_qual`
--
ALTER TABLE `degree_qual`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `resume_details`
--
ALTER TABLE `resume_details`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `tenth_details`
--
ALTER TABLE `tenth_details`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `twelfth_details`
--
ALTER TABLE `twelfth_details`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
