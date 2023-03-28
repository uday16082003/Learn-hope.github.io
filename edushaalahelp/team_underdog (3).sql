-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 25, 2023 at 07:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_underdog`
--

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NumberofPeopleincommunity` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `CommunityID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`FullName`, `Email`, `NumberofPeopleincommunity`, `PhoneNumber`, `Address`, `CommunityID`, `Username`, `Password`) VALUES
('Harshal Ingale', 'harshal.ingale17@gmail.com', '5', '7249691520', 'Sumadhu Boys Hostel,Sukhsagr nagar,Pune 411046', 'communityid', 'Harox', '123'),
('Harshal Ingale', 'harshal.ingale17@gmail.com', '6', '7249691520', 'Sumadhu Boys Hostel,Sukhsagr nagar,Pune 411046', 'communityid', 'hi', '133'),
('Harshal Ingale', 'harshal.ingale17@gmail.com', '8', '7249691520', 'Sumadhu Boys Hostel,Sukhsagr nagar,Pune 411046', 'communityid', 'Harox', '123'),
('Harshal Ingale', 'harshal.ingale17@gmail.com', '6', '7249691520', 'Sumadhu Boys Hostel,Sukhsagr nagar,Pune 411046', 'communityid', 'Harox', '456'),
('Mayur', 'harshal.ingale21@vit.edu', '6', '9623896352', 'gully', 'communityid', 'Mayur', '123'),
('mohit', 'mohit.chawla21@edu.vit', '15', '8788048945', 'prabhu road , sukhsagar nagar , katni', 'communityid', 'moh13', 'mohkacommunity');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `Name` varchar(50) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`Name`, `UserID`, `Password`, `Address`, `ContactNumber`, `Email`) VALUES
('Harshal Ingale', 'harry', '123', 'sumadhu', '7249691520', 'harshal.ingale21@vit.edu'),
('Soham', 'soham', '1234', 'Sumadhu', '1456121512', 'Soham.tak21@vit.edu'),
('Mayur', 'Mayur', '123', 'Sukhsagar', '7517207273', 'Mayur21@vit.edu');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `Name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`Name`, `Location`, `Username`, `Password`, `MobileNo`, `Email`) VALUES
('Harshal', 'Sumadhu boys hostel', 'username', 'password', '7249691520', 'harshal.ingale21@vit.edu'),
('Soham', 'Pune', 'username', 'password', '7385864121', 'soham.tak21@vit.edu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
