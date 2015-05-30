-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2014 at 05:57 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `Admin ID` (`AdminID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Username`, `Password`) VALUES
(1, 'safrota', 'mysister');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `BillingAddress` varchar(50) NOT NULL DEFAULT 'el mahata st',
  `BillingCity` varchar(50) NOT NULL DEFAULT 'Cario',
  `BillingState` varchar(50) NOT NULL DEFAULT 'Egypt',
  `BillingZip` int(11) NOT NULL DEFAULT '2',
  `ShippingAddress` varchar(50) NOT NULL DEFAULT 'el bahr st',
  `ShippingCity` varchar(50) NOT NULL DEFAULT 'Alex',
  `ShippingState` varchar(50) NOT NULL DEFAULT 'Egypt',
  `ShippingZip` int(11) NOT NULL DEFAULT '3',
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `Customer ID` (`CustomerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `BillingAddress`, `BillingCity`, `BillingState`, `BillingZip`, `ShippingAddress`, `ShippingCity`, `ShippingState`, `ShippingZip`, `Phone`, `Email`, `Password`) VALUES
(1, 'Hosam', 'Azzam', 'El-mamon ST', 'Giza', 'Masr', 202, 'el bahr st', 'Alex', 'Egypt', 203, '01115736750', 'hosam@yahoo.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `orderprocessing`
--

CREATE TABLE IF NOT EXISTS `orderprocessing` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Processed` tinyint(1) NOT NULL,
  `Shipped` tinyint(1) NOT NULL,
  `DateShipped` varchar(50) NOT NULL,
  `TrackingNumber` int(11) NOT NULL,
  `Shippingcompany` varchar(50) NOT NULL,
  PRIMARY KEY (`TransactionID`),
  UNIQUE KEY `Transaction ID` (`TransactionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orderprocessing`
--

INSERT INTO `orderprocessing` (`TransactionID`, `CustomerID`, `ProductID`, `Number`, `Quantity`, `Time`, `Processed`, `Shipped`, `DateShipped`, `TrackingNumber`, `Shippingcompany`) VALUES
(1, 2, 1, 0, 3, '4', 0, 0, '', 0, ''),
(2, 3, 1, 0, 2, '4', 1, 1, '', 12345, 'TNT'),
(3, 3, 3, 0, 2, '1', 0, 6, '', 0, ''),
(4, 3, 1, 0, 2, '4', 0, 6, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(50) NOT NULL,
  `ItemDescription` varchar(500) NOT NULL,
  `QuantityInStock` int(20) NOT NULL,
  `Price` int(20) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `Picture` mediumblob NOT NULL,
  `Cpu` varchar(50) DEFAULT NULL,
  `Gpu` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Manfactor` varchar(50) DEFAULT NULL,
  `Screen` int(11) DEFAULT NULL,
  `Pixels` int(11) DEFAULT NULL,
  `Zoom` int(11) DEFAULT NULL,
  `Battary` int(11) DEFAULT NULL,
  `Ram` int(11) DEFAULT NULL,
  `Hdd` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductID`),
  UNIQUE KEY `Product ID` (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ItemName`, `ItemDescription`, `QuantityInStock`, `Price`, `Category`, `Visible`, `Picture`, `Cpu`, `Gpu`, `Title`, `Author`, `Publisher`, `Type`, `Manfactor`, `Screen`, `Pixels`, `Zoom`, `Battary`, `Ram`, `Hdd`) VALUES
(1, 'IS book', 'ktab 7lw awwwe mafesh a7la mano bsraha alwan eh gmal el sokr kda a5lshe allah y7lak yal fe baly wante oz3a kda w bndara :D', 5, 150, 'Book', 0, '', NULL, NULL, 'information system', 'hanan mosa', 'amazon', 'Educational', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Z2', 'new mob', 5, 3650, 'Mobile', 0, '', 'quad', NULL, NULL, NULL, NULL, NULL, 'sony', 5, NULL, NULL, NULL, 2, NULL),
(3, 'HCam', 'new cam', 2, 1000, 'Camera', 1, '', NULL, NULL, NULL, NULL, NULL, 'Canon', NULL, NULL, 2500, 15, 3, NULL, NULL),
(4, 'G570', 'kan feh w ra7 :D', 1, 3600, 'Labtop', 0, '', 'CPU Inter I5 @2.40 GHz', NULL, NULL, NULL, NULL, NULL, 'lenovo', NULL, NULL, NULL, NULL, 4, 750);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
