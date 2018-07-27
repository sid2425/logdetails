-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 06:52 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logdetails`
--

CREATE TABLE `logdetails` (
  `name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `workreport` varchar(2500) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `verifiedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logdetails`
--

INSERT INTO `logdetails` (`name`, `date`, `workreport`, `timein`, `timeout`, `remarks`, `verifiedby`) VALUES
('Thirthala Siddartha', '2018-07-27', 'Today Whole Day Current Gone', '12:30:00', '05:40:00', 'sdffg', 'Likith Raja Singh'),
('Thirthala Siddartha', '2018-07-25', 'Got Know about Google API ', '22:19:00', '22:19:00', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
