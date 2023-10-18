-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 04:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
