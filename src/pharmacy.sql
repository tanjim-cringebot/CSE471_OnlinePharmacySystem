-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 06:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Medicine_name` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Medicine_name`, `Price`, `Quantity`) VALUES
('Napa Extra', 50, 10),
('Ambrox', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `message_id` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `subject` text NOT NULL,
  `receiver_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `message`, `subject`, `receiver_id`) VALUES
('A1', 'Sir amar sorer karap pls halp koran', 'Boke onak beta', '01'),
('A2', 'Sir pet er haddi vainga gese :\')', 'fracture', '02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `c_id`, `Age`, `Phone`) VALUES
('Rohim', '1', 30, '017398764231'),
('Korim', '2', 35, '01845639341'),
('Mamun', '3', 60, '01910101093');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Name` varchar(100) NOT NULL,
  `d_id` varchar(100) NOT NULL,
  `Expertise` text NOT NULL,
  `Phone number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Name`, `d_id`, `Expertise`, `Phone number`) VALUES
('Dr. Rakibul Hasan', '01', 'Hepatology and Gastroenterology', '01722773389'),
('Dr. Abul Hasan', '02', 'Cardiology', '01987654329'),
('Dr. Sarwer Alam', '03', 'Dermatology', '01533887722');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`) VALUES
('admin', 'admin'),
('mayerdoa@outlook.com', '123456'),
('rakib@gmail.com', '123456'),
('rohim@yahoo.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Medicine Name` varchar(100) NOT NULL,
  `Type` text NOT NULL,
  `Company` text NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Expiry Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Medicine Name`, `Type`, `Company`, `Price`, `Expiry Date`) VALUES
('Ambrox', 'Syrup', 'Square Pharmaceuticals', '50', '2025-01-01'),
('Napa Extra', 'Tablet', 'Beximco Pharmaceuticals', '20', '2024-12-20'),
('Optaloc 0.5%', 'Drop', 'Popular Pharmaceuticals', '100', '2024-12-31'),
('Rosuva', 'Tablet', 'Square Pharmaceuticals', '300', '2024-12-21'),
('Tenocab 50', 'Tablet', 'ACI LTD.', '50', '2024-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `Name` varchar(100) NOT NULL,
  `r_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`Name`, `r_id`) VALUES
('Mayer Doa Pharmacy', '001'),
('Allah er dan Pharmacy', '002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`,`pass`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Medicine Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
