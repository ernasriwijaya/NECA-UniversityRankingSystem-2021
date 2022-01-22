-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 12:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rankings`
--

CREATE TABLE `tbl_rankings` (
  `ranking_id` int(11) NOT NULL,
  `nationalrank` int(11) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `alumnirank` int(11) NOT NULL,
  `qualityrank` int(11) NOT NULL,
  `researchrank` int(11) NOT NULL,
  `worldrank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rankings`
--

INSERT INTO `tbl_rankings` (`ranking_id`, `nationalrank`, `institution`, `country`, `alumnirank`, `qualityrank`, `researchrank`, `worldrank`) VALUES
(4, 1, 'University of Malaya', 'Malaysia', 437, 0, 404, 409);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(22, 'Erna Eddi', 'ernaeddi', 'ernaeddi07@gmail.com', 'f5bf4b370c5ede8c372a67c0f9774ecc090e1ca6', '0136507971', 1, 0, '2021-07-13 18:44:08', '2021-07-13 18:44:08'),
(23, 'aisyarasyid', 'aisyarasyid', 'aisyarasyid@gmail.com', '6c8e04280a94e280aa390080a2bc57364ebb0ee4', '0135895242', 1, 0, '2021-07-13 19:28:02', '2021-07-13 19:28:02'),
(26, 'Eliya Saffiya', 'eliyasaffiya', 'eliyasaffiya@gmail.com', 'a924d94c32802659c74cdd5ec1a0cadfe146c7b2', '0136482547', 3, 0, '2021-07-14 09:03:16', '2021-07-14 09:03:16'),
(27, 'Erna Eddi', 'ernaeddi123', 'ernaatwork@gmail.com', 'f5bf4b370c5ede8c372a67c0f9774ecc090e1ca6', '013587215', 3, 0, '2021-07-14 10:11:22', '2021-07-14 10:11:22'),
(28, 'robert', 'robert123', 'robert@gmail.com', '8bae5a9f7b06ac8101216d8aae488b3514113732', '0123654852', 3, 0, '2021-07-14 10:14:29', '2021-07-14 10:14:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_rankings`
--
ALTER TABLE `tbl_rankings`
  ADD PRIMARY KEY (`ranking_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_rankings`
--
ALTER TABLE `tbl_rankings`
  MODIFY `ranking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
