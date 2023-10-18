-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 11:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cassdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `harvest`
--

CREATE TABLE `harvest` (
  `fullname` text NOT NULL,
  `id` int(100) NOT NULL,
  `gender` text NOT NULL,
  `town` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `date` timestamp(4) NULL DEFAULT NULL,
  `barangay` text NOT NULL,
  `var` text NOT NULL,
  `area` text NOT NULL,
  `aveyield` int(100) NOT NULL,
  `prodn` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harvest`
--

INSERT INTO `harvest` (`fullname`, `id`, `gender`, `town`, `zip`, `date`, `barangay`, `var`, `area`, `aveyield`, `prodn`) VALUES
('Player', 123123, 'Male', 'Enrique Villanueva', 6225123, '0000-00-00 00:00:00.0000', 'Candanay', 'Golden Yellow', '12142124', 123124142, 124124124);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `fullname` text NOT NULL,
  `id` int(100) NOT NULL,
  `gender` text NOT NULL,
  `town` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `date` timestamp(4) NULL DEFAULT NULL,
  `barangay` text NOT NULL,
  `var` text NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`fullname`, `id`, `gender`, `town`, `zip`, `date`, `barangay`, `var`, `area`) VALUES
('Deion', 14, 'Male', 'Siquijor', 6227, '2001-12-12 15:21:00.0000', 'Pangi', 'Golden Yellow', '100000000'),
('kylie', 123, 'Male', 'Larena', 6228, '0000-00-00 00:00:00.0000', 'cangmohao', 'Rayong', '69');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
