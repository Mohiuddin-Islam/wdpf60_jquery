-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 09:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf60`
--

-- --------------------------------------------------------

--
-- Table structure for table `students1`
--

CREATE TABLE `students1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students1`
--

INSERT INTO `students1` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `address`) VALUES
(1, 'Abdullah', 'male', '2014-09-02', 'abdullah@gmail.com', '01752438955', 'Khilgao'),
(2, 'Mohiuddin Islam', 'male', '0000-00-00', 'mohiuddin@gmail.com', '01789652340', 'Malibagh'),
(5, 'Safin', 'male', '2024-09-07', 'rakib@gmail.com', '0178965245', 'gdhfn'),
(6, 'Arif', 'male', '2024-09-07', 'nazrul@gmail.com', '01789652340', 'esghdfm,'),
(7, 'Jamil', 'male', '2024-09-07', 'jamil@gmail.com', '01789652340', 'Motijil'),
(8, 'Joy', 'male', '2024-09-07', 'nazrul@gmail.com', '0178965234', 'eteh'),
(26, 'Jon', 'male', '2024-09-18', 'rakib@gmail.com', '01789652340', 'aefasfw'),
(27, 'Haire', 'male', '2024-09-17', 'nazrul@gmail.com', '01789652340', 'fgfj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students1`
--
ALTER TABLE `students1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students1`
--
ALTER TABLE `students1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
