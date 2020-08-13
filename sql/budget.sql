-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2020 at 04:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense_table`
--

DROP TABLE IF EXISTS `expense_table`;
CREATE TABLE IF NOT EXISTS `expense_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` varchar(30) DEFAULT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(200) DEFAULT NULL,
  `ExpenseCost` varchar(200) DEFAULT NULL,
  `NoteDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_table`
--

INSERT INTO `expense_table` (`id`, `UserId`, `ExpenseDate`, `ExpenseItem`, `ExpenseCost`, `NoteDate`) VALUES
(1, '1', '2020-07-07', 'book', '57', '2020-07-21 06:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

DROP TABLE IF EXISTS `users_table`;
CREATE TABLE IF NOT EXISTS `users_table` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` text DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNum` bigint(20) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`ID`, `FullName`, `Email`, `MobileNum`, `Password`, `RegDate`) VALUES
(1, 'Maddy Dey', 'maddy@gmail.com', 1234567890, 'gfhgcmgvg', '2020-07-21 06:52:13'),
(2, 'Madhavendra Dey', 'madhavendradey69@gmail.com', 9040292118, 'ghgvvtyvfd', '2020-07-21 08:30:20'),
(3, 'Mrityunjay Dey', 'madhavendradey69@gmail.com', 9040292118, 'demo', '2020-07-21 12:42:45'),
(4, 'Mrityunjay Dey', 'madhavendradey69@gmail.com', 9040292118, 'demo', '2020-07-21 13:02:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
