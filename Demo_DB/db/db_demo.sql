-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2020 at 05:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `idProduct` int(11) NOT NULL,
  `ProductName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductPrice` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `Type_idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Type`
--

CREATE TABLE `Type` (
  `idType` int(11) NOT NULL,
  `TypeName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Type`
--

INSERT INTO `Type` (`idType`, `TypeName`) VALUES
(1, 'Mobile'),
(2, 'Tablet'),
(3, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserTypeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `UserName`, `Password`, `FullName`, `UserTypeID`) VALUES
(1, 'admin', 'admin', 'Mr Bưởi', 1),
(2, 'user01', '123', 'User 01', 2),
(3, 'user02', '123', 'User 02', 2),
(4, 'guess01', '123', 'Guess 01', 3),
(5, 'teo', 'teo', 'Mr Tèo', 3),
(6, 'ty', 'ty', 'Mr Tý', 2),
(7, 'ty', 'ty', 'Tý Tý', 2);

-- --------------------------------------------------------

--
-- Table structure for table `UserType`
--

CREATE TABLE `UserType` (
  `UserTypeID` int(11) NOT NULL,
  `UserTypeName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `UserType`
--

INSERT INTO `UserType` (`UserTypeID`, `UserTypeName`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Guess');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `fk_Product_Type` (`Type_idType`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`idType`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `User_UserType_UserTypeID_fk` (`UserTypeID`);

--
-- Indexes for table `UserType`
--
ALTER TABLE `UserType`
  ADD PRIMARY KEY (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `UserType`
--
ALTER TABLE `UserType`
  MODIFY `UserTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `fk_Product_Type` FOREIGN KEY (`Type_idType`) REFERENCES `Type` (`idType`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_UserType_UserTypeID_fk` FOREIGN KEY (`UserTypeID`) REFERENCES `UserType` (`UserTypeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
