-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2022 at 01:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `najd`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactNo` int(15) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `msg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `email` varchar(100) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`email`) VALUES
(''),
(''),
(''),
('218410209@psu.edu.sa'),
('df@mail.com'),
('real@gmail.com'),
('amjad@gmail.com'),
('real@gmail.com'),
('218410209@psu.edu.sa'),
('noufl@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(11, 'Deem', 'Alfozan', 'Deemf', '218410209@psu.edu.sa', '$2y$10$CAb2CFhSXh2MUjqElKWilOZUhMHB/yQC42T6dl/96Azl7eXv8jaJS'),
(12, 'amjad', 'h', 'amjadh', 'amjad@gmail.com', '$2y$10$u8KIMyjXWuGaNNxch9dFsO5Vfg1G2espJ8tmpfg.0kqL2xCGR.rHO'),
(13, 'Reem', 'Alfaleh', 'reemf', '218410223@psu.edu.sa', '$2y$10$JeAudYIEjph8dFyarPuLF.RrX/QJI2ZNtWGERcu68VdWZnGfKglFC'),
(14, 'Sara', 'M', 'saram', 'saram@gmail.com', '$2y$10$ndOlNFSsVYiCJrOUJ4Zu0ucUIeM.zzDx23purT0MdqRi0OD7AqpbO'),
(15, 'Nora', 'S', 'noras', 'noras@outlook.com', '$2y$10$/CrSECTtMOawYGtjFHwP3OWBPGM7tX.n5FyZFIJ8cBIhmZy3zk0K2'),
(16, 'deem', 'alfozan', 'Deemfozan', '2184102@psu.edu.sa', '$2y$10$uWkBrjsTfnTQDa93Or7ImerQzaxqt9G18HGgCgxytQ4WkUSLfDXo6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
