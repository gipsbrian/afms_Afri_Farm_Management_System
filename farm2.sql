-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 09:06 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `Animal_ID` varchar(100) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Date_Of_Weaning` date DEFAULT NULL,
  `Breed_Of_Animal` varchar(100) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `Location_ID` int(11) NOT NULL,
  PRIMARY KEY (`Animal_ID`),
  KEY `Location_ID` (`Location_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Gender`, `Location_ID`) VALUES
('2', '2016-12-02', '2016-12-09', 'greensamey', 'male', 2),
('4', '2016-12-02', '2016-12-09', 'greensamey', 'male', 2),
('5', '2016-12-02', '2016-12-09', 'greensamey', 'male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `animal_death_tracker`
--

CREATE TABLE IF NOT EXISTS `animal_death_tracker` (
  `Date_Of_Death` date NOT NULL,
  `Weight_At_Death` int(11) NOT NULL,
  `Cause_Of_Death` varchar(100) NOT NULL,
  `Animal_ID` varchar(100) NOT NULL,
  KEY `Animal_ID` (`Animal_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `animal_discontinue`
--

CREATE TABLE IF NOT EXISTS `animal_discontinue` (
  `Animal_ID` varchar(40) NOT NULL,
  `Date_Discontinued` varchar(40) NOT NULL,
  `Time_Discontinued` varchar(40) NOT NULL,
  `Reason_Discontinued` varchar(40) NOT NULL,
  `Verified_by` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_discontinue`
--

INSERT INTO `animal_discontinue` (`Animal_ID`, `Date_Discontinued`, `Time_Discontinued`, `Reason_Discontinued`, `Verified_by`) VALUES
('c002', '12/16/2016', '12:30 AM', 'SICK', '1');

-- --------------------------------------------------------

--
-- Table structure for table `animal_feed_consumption`
--

CREATE TABLE IF NOT EXISTS `animal_feed_consumption` (
  `Date_Of_Consumption` date NOT NULL,
  `Feed_Composition` varchar(100) NOT NULL,
  `Meal_Weight` float NOT NULL,
  `Location_ID` int(11) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  KEY `Location_ID` (`Location_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_feed_consumption`
--

INSERT INTO `animal_feed_consumption` (`Date_Of_Consumption`, `Feed_Composition`, `Meal_Weight`, `Location_ID`, `Attendant_ID`) VALUES
('0000-00-00', 'kitoko', 34, 4, 1),
('2016-11-02', 'kitoko', 33, 12, 2),
('2016-11-07', 'kitoko', 22, 7, 1),
('2016-11-08', 'kkk', 10, 18, 3),
('2016-11-15', 'Gud', 12, 10, 1),
('2016-11-08', 'blu', 35, 34, 3),
('0000-00-00', 'kitoko', 34, 4, 1),
('2016-11-02', 'kitoko', 33, 12, 2),
('2016-11-07', 'kitoko', 22, 7, 1),
('2016-11-08', 'kkk', 10, 18, 3),
('2016-11-15', 'Gud', 12, 10, 1),
('2016-11-08', 'blu', 35, 34, 3);

-- --------------------------------------------------------

--
-- Table structure for table `animal_location`
--

CREATE TABLE IF NOT EXISTS `animal_location` (
  `Location_ID` int(11) NOT NULL,
  `Location_Name` varchar(100) NOT NULL,
  `Pen_Number` int(11) NOT NULL COMMENT 'Hold the pigs pen local...',
  `Location_Description` varchar(100) NOT NULL,
  PRIMARY KEY (`Location_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_location`
--

INSERT INTO `animal_location` (`Location_ID`, `Location_Name`, `Pen_Number`, `Location_Description`) VALUES
(1, 'A', 1, ''),
(2, 'A', 2, ''),
(3, 'A', 3, ''),
(4, 'A', 4, ''),
(5, 'A', 5, ''),
(6, 'B', 1, ''),
(7, 'B', 2, ''),
(8, 'B', 3, ''),
(9, 'B', 4, ''),
(10, 'B', 5, ''),
(11, 'B', 6, ''),
(12, 'B', 7, ''),
(13, 'B', 8, ''),
(14, 'B', 9, ''),
(15, 'B', 10, ''),
(16, 'B', 11, ''),
(17, 'B', 12, ''),
(18, 'B', 13, ''),
(19, 'B', 14, ''),
(20, 'B', 15, ''),
(21, 'B', 16, ''),
(22, 'B', 17, ''),
(23, 'B', 18, ''),
(24, 'B', 19, ''),
(25, 'B', 20, ''),
(26, 'B', 21, ''),
(27, 'B', 22, ''),
(28, 'B', 23, ''),
(29, 'B', 24, ''),
(30, 'C', 1, ''),
(31, 'C', 2, ''),
(32, 'C', 3, ''),
(33, 'C', 4, ''),
(34, 'C', 5, ''),
(35, 'C', 6, ''),
(36, 'C', 7, ''),
(37, 'C', 8, ''),
(38, 'C', 9, ''),
(39, 'C', 10, ''),
(40, 'C', 11, ''),
(41, 'C', 12, ''),
(42, 'C', 13, ''),
(43, 'C', 14, ''),
(44, 'C', 15, ''),
(45, 'C', 16, ''),
(46, 'C', 17, ''),
(47, 'C', 18, ''),
(48, 'C', 19, ''),
(49, 'C', 20, ''),
(50, 'C', 21, ''),
(51, 'C', 22, ''),
(52, 'C', 23, ''),
(53, 'C', 24, ''),
(54, 'C', 25, ''),
(55, 'C', 26, ''),
(56, 'C', 27, '');

-- --------------------------------------------------------

--
-- Table structure for table `animal_medication_tracker`
--

CREATE TABLE IF NOT EXISTS `animal_medication_tracker` (
  `Date_Of_Medication` varchar(40) NOT NULL,
  `Dosage` varchar(100) NOT NULL,
  `Purpose` int(11) NOT NULL,
  `Type_Of_Medication` varchar(100) NOT NULL,
  `Administered_By` varchar(100) NOT NULL,
  `Animal_ID` varchar(100) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  KEY `Animal_ID` (`Animal_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `animal_transfer_schedule`
--

CREATE TABLE IF NOT EXISTS `animal_transfer_schedule` (
  `Date_Of_Transfer` date NOT NULL,
  `New_Location_ID` int(11) NOT NULL,
  `Purpose_Of_Transfer` int(11) NOT NULL,
  `Animal_ID` varchar(100) NOT NULL,
  `Location_ID` int(11) NOT NULL,
  KEY `Animal_ID` (`Animal_ID`),
  KEY `Location_ID` (`Location_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `animal_weight_tracker`
--

CREATE TABLE IF NOT EXISTS `animal_weight_tracker` (
  `Date_Of_Weighin` varchar(40) NOT NULL,
  `Current_Weight` int(11) NOT NULL,
  `Animal_ID` varchar(100) NOT NULL,
  `Location_ID` int(11) NOT NULL,
  KEY `Animal_ID` (`Animal_ID`),
  KEY `Animal_Weight_Tracker_ibfk_2` (`Location_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendant`
--

CREATE TABLE IF NOT EXISTS `attendant` (
  `Attendant_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_Names` varchar(100) NOT NULL,
  `Date_Joined` varchar(255) NOT NULL,
  `Residence` varchar(100) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Next_Of_Kin_Names` varchar(100) NOT NULL,
  `Next_Of_Kin_Contact` int(11) NOT NULL,
  `Primary_Role` varchar(100) NOT NULL,
  `Secondary_Role` varchar(100) DEFAULT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `Additional_Training` varchar(100) DEFAULT NULL,
  `Current_Salary` int(11) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `image_location` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Attendant_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `attendant`
--

INSERT INTO `attendant` (`Attendant_ID`, `Full_Names`, `Date_Joined`, `Residence`, `Contact`, `Next_Of_Kin_Names`, `Next_Of_Kin_Contact`, `Primary_Role`, `Secondary_Role`, `Qualifications`, `Additional_Training`, `Current_Salary`, `Gender`, `image_location`) VALUES
(1, 'Jacob Oloya', '2016-11-02', 'Kawempe', 79025487, 'Maria Oloya', 785421556, 'Veterinary Doctor', 'N/A', 'BSc Veterinary Medicine', 'Post Graduate in Animal Studies', 1800000, 'male', ''),
(2, 'Larry Okutho', '2016-11-17', 'Ntinda ', 78245645, 'Gift Kasago', 78245866, 'Chief Breeder', 'Insemination Expert', 'Bsc Music Dance & Drama', 'Kwepena Exepert ', 125000, 'male', ''),
(3, 'Mariah Nagadya', '2016-01-12', 'Kawempe', 78289556, 'Wamala Nagadya', 78289545, 'Farmer', 'Chicken Handler', 'Masters Farming', 'BSc Economics', 190000, 'female', ''),
(6, 'fred', '11/08/2016', 'kabowa', 782025649, 'kizito', 798331662, 'fred', 'daq', 'bd', 'sfd', 212, 'female', ''),
(7, 'Jane', '11/03/2016', 'Kisaasi', 782025649, 'Susan', 782023666, 'Dancer', 'Dancing', 'asdasd', 'asdasd', 12350000, 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendant_activity_log`
--

CREATE TABLE IF NOT EXISTS `attendant_activity_log` (
  `Attendant_Name` varchar(40) NOT NULL,
  `Date_Of_Activity` varchar(60) NOT NULL,
  `Time_of_Activity` varchar(20) NOT NULL,
  `Description_Of_Activity` varchar(100) NOT NULL,
  `Verified_By` varchar(40) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  PRIMARY KEY (`Date_Of_Activity`,`Time_of_Activity`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendant_discontinue`
--

CREATE TABLE IF NOT EXISTS `attendant_discontinue` (
  `Attendant_ID` int(11) NOT NULL,
  `Attendant_Name` varchar(40) NOT NULL,
  `Date_Discontinued` varchar(20) NOT NULL,
  `Time_Discontinued` varchar(10) NOT NULL,
  `Reason_Discontinued` varchar(100) NOT NULL,
  `Verified_discontinued` varchar(20) NOT NULL,
  PRIMARY KEY (`Attendant_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendant_discontinue`
--

INSERT INTO `attendant_discontinue` (`Attendant_ID`, `Attendant_Name`, `Date_Discontinued`, `Time_Discontinued`, `Reason_Discontinued`, `Verified_discontinued`) VALUES
(1, 'Jacob Oloya', '12/01/2016', '10:30 PM', 'sick', 'sick');

-- --------------------------------------------------------

--
-- Table structure for table `chicken_feed_consumption`
--

CREATE TABLE IF NOT EXISTS `chicken_feed_consumption` (
  `Date_Of_Consumption` varchar(11) NOT NULL,
  `Feed_Composition` varchar(100) NOT NULL,
  `Total_Weight` int(11) NOT NULL,
  `Water_Provided` int(11) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  KEY `Attendant_ID` (`Attendant_ID`),
  KEY `Cage_ID` (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_feed_consumption`
--

INSERT INTO `chicken_feed_consumption` (`Date_Of_Consumption`, `Feed_Composition`, `Total_Weight`, `Water_Provided`, `Attendant_ID`, `Cage_ID`) VALUES
('29/11/16', 'Mukene', 5, 5, 1, 1),
('11/29/2016', 'Mukene', 4, 4, 1, 1),
('29/11/16', 'Mukene', 5, 5, 1, 1),
('11/29/2016', 'Mukene', 4, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chicken_medication_tracker`
--

CREATE TABLE IF NOT EXISTS `chicken_medication_tracker` (
  `Date_Of_Medication` varchar(11) NOT NULL,
  `Num_Of_Hens` int(11) DEFAULT NULL,
  `Num_Of_Cocks` int(11) DEFAULT NULL,
  `Type_Of_Medication` varchar(100) NOT NULL,
  `Dosage` int(11) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `Administered_By` varchar(100) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  KEY `Attendant_ID` (`Attendant_ID`),
  KEY `Cage_ID` (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_medication_tracker`
--

INSERT INTO `chicken_medication_tracker` (`Date_Of_Medication`, `Num_Of_Hens`, `Num_Of_Cocks`, `Type_Of_Medication`, `Dosage`, `Purpose`, `Administered_By`, `Attendant_ID`, `Cage_ID`) VALUES
('30/11/16', 11, 11, 'Asprin', 2, 'Fever', 'Derrick', 1, 1),
('30/11/16', 1, 1, 'Panadol', 1, 'Hay Fever', 'Brian', 1, 1),
('11/30/2016', 2, 2, 'Penicillin', 2, 'Diarrhoea', 'Samuel', 1, 1),
('30/11/16', 11, 11, 'Asprin', 2, 'Fever', 'Derrick', 1, 1),
('30/11/16', 1, 1, 'Panadol', 1, 'Hay Fever', 'Brian', 1, 1),
('11/30/2016', 2, 2, 'Penicillin', 2, 'Diarrhoea', 'Samuel', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chicken_population_tracker`
--

CREATE TABLE IF NOT EXISTS `chicken_population_tracker` (
  `Date_Of_Census` date NOT NULL,
  `Num_Of_Transfers_In` int(11) DEFAULT NULL,
  `Num_Of_Transfers_Out` int(11) DEFAULT NULL,
  `Num_Of_Deaths` int(11) DEFAULT NULL,
  `Num_Of_Chicken` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  KEY `Cage_ID` (`Cage_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chicken_sales`
--

CREATE TABLE IF NOT EXISTS `chicken_sales` (
  `Date_Of_Sale` varchar(11) NOT NULL,
  `Num_Of_Hens` int(11) DEFAULT NULL,
  `Num_Of_Cocks` int(11) DEFAULT NULL,
  `Customer_Name` varchar(100) NOT NULL,
  `Total_Amount` int(11) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  KEY `Attendant_ID` (`Attendant_ID`),
  KEY `Cage_ID` (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_sales`
--

INSERT INTO `chicken_sales` (`Date_Of_Sale`, `Num_Of_Hens`, `Num_Of_Cocks`, `Customer_Name`, `Total_Amount`, `Attendant_ID`, `Cage_ID`) VALUES
('2016-11-29', 22, 22, 'Bukenya and Sons', 15000, 1, 1),
('2016-11-30', 22, 22, 'Derrick', 15000, 1, 1),
('11/30/2016', 11, 11, 'Derrick', 10000, 1, 1),
('2016-11-29', 22, 22, 'Bukenya and Sons', 15000, 1, 1),
('2016-11-30', 22, 22, 'Derrick', 15000, 1, 1),
('11/30/2016', 11, 11, 'Derrick', 10000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chicken_storage`
--

CREATE TABLE IF NOT EXISTS `chicken_storage` (
  `Cage_ID` int(11) NOT NULL,
  `Cage_Number` varchar(100) NOT NULL,
  `Cage_Description` varchar(100) NOT NULL,
  PRIMARY KEY (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_storage`
--

INSERT INTO `chicken_storage` (`Cage_ID`, `Cage_Number`, `Cage_Description`) VALUES
(1, 'C1', 'Hens');

-- --------------------------------------------------------

--
-- Table structure for table `chicken_transfer_tracker`
--

CREATE TABLE IF NOT EXISTS `chicken_transfer_tracker` (
  `Date_Of_Transfer` varchar(11) NOT NULL,
  `Num_Of_Hens_Transfered` int(11) NOT NULL,
  `Num_Of_Cocks_Transfered` int(11) NOT NULL,
  `Receiving_Cage_ID` int(11) NOT NULL,
  `Receiving_Attendant_ID` int(11) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  KEY `Attendant_ID` (`Attendant_ID`),
  KEY `Cage_ID` (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken_transfer_tracker`
--

INSERT INTO `chicken_transfer_tracker` (`Date_Of_Transfer`, `Num_Of_Hens_Transfered`, `Num_Of_Cocks_Transfered`, `Receiving_Cage_ID`, `Receiving_Attendant_ID`, `Attendant_ID`, `Cage_ID`) VALUES
('30/11/16', 11, 11, 1, 1, 1, 1),
('11/30/2016', 44, 44, 1, 1, 1, 1),
('30/11/16', 6, 6, 1, 1, 1, 1),
('11/30/2016', 88, 88, 1, 1, 2, 1),
('30/11/16', 11, 11, 1, 1, 1, 1),
('11/30/2016', 44, 44, 1, 1, 1, 1),
('30/11/16', 6, 6, 1, 1, 1, 1),
('11/30/2016', 88, 88, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `egg_collection_tracker`
--

CREATE TABLE IF NOT EXISTS `egg_collection_tracker` (
  `Date_Of_Collection` varchar(11) NOT NULL,
  `Num_Of_Laying_Hens` int(11) NOT NULL,
  `Num_Of_Cocks` int(11) NOT NULL,
  `Num_Of_Eggs_Collected` int(11) NOT NULL,
  `Num_Of_Damaged_Eggs` int(11) DEFAULT NULL,
  `Verified_By` varchar(100) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  KEY `Attendant_ID` (`Attendant_ID`),
  KEY `Cage_ID` (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `egg_collection_tracker`
--

INSERT INTO `egg_collection_tracker` (`Date_Of_Collection`, `Num_Of_Laying_Hens`, `Num_Of_Cocks`, `Num_Of_Eggs_Collected`, `Num_Of_Damaged_Eggs`, `Verified_By`, `Attendant_ID`, `Cage_ID`) VALUES
('29/11/16', 55, 55, 55, 5, 'Derrick', 1, 1),
('29/11/16', 44, 44, 44, 4, 'Derrick', 1, 1),
('11/29/2016', 22, 22, 22, 2, 'Richard', 1, 1),
('29/11/16', 55, 55, 55, 5, 'Derrick', 1, 1),
('29/11/16', 44, 44, 44, 4, 'Derrick', 1, 1),
('11/29/2016', 22, 22, 22, 2, 'Richard', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `egg_dispatch`
--

CREATE TABLE IF NOT EXISTS `egg_dispatch` (
  `Date_Of_Dispatch` date NOT NULL,
  `Num_Of_Trays` int(11) NOT NULL,
  `Verified_By` varchar(100) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  `Cage_ID` int(11) NOT NULL,
  KEY `Attendant_ID` (`Attendant_ID`),
  KEY `Cage_ID` (`Cage_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `Expenditure_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Expenditure_Type` varchar(100) NOT NULL,
  `Expenditure_Description` varchar(100) NOT NULL,
  PRIMARY KEY (`Expenditure_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expenditure_voucher`
--

CREATE TABLE IF NOT EXISTS `expenditure_voucher` (
  `Voucher_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Of_Sale` int(11) NOT NULL,
  `Total_Amount_Paid` int(11) NOT NULL,
  `Expenditure_ID` int(11) NOT NULL,
  `Supplier_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Voucher_ID`),
  KEY `Expenditure_ID` (`Expenditure_ID`),
  KEY `Supplier_ID` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feeds_purchase_order`
--

CREATE TABLE IF NOT EXISTS `feeds_purchase_order` (
  `Feed_Purchase_Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Of_Purchase_Order` date NOT NULL,
  `Item_Purchased` varchar(100) NOT NULL,
  `Quantity` float NOT NULL,
  `Supplier_ID` int(11) NOT NULL,
  PRIMARY KEY (`Feed_Purchase_Order_ID`),
  KEY `Supplier_ID` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feeds_receipt_attendant`
--

CREATE TABLE IF NOT EXISTS `feeds_receipt_attendant` (
  `Feed_Receipt_Att_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Received` varchar(100) NOT NULL,
  `Date_Of_Receipt` date NOT NULL,
  `Quantity` float NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  PRIMARY KEY (`Feed_Receipt_Att_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feeds_receipt_supplier`
--

CREATE TABLE IF NOT EXISTS `feeds_receipt_supplier` (
  `Feed_Receipt_Sup_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Of_Receipt` date NOT NULL,
  `Item_Received` varchar(100) NOT NULL,
  `Quantity` float NOT NULL,
  `Supplier_ID` int(11) NOT NULL,
  PRIMARY KEY (`Feed_Receipt_Sup_ID`),
  KEY `Supplier_ID` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feeds_requisiton`
--

CREATE TABLE IF NOT EXISTS `feeds_requisiton` (
  `Feed_Requisition_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Of_Requisition` date NOT NULL,
  `Item_Requisitioned` varchar(100) NOT NULL,
  `Quantity` float NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  PRIMARY KEY (`Feed_Requisition_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feeds_return`
--

CREATE TABLE IF NOT EXISTS `feeds_return` (
  `Feeds_Return_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Of_Return` date NOT NULL,
  `Item_Returned` varchar(100) NOT NULL,
  `Quantity` float NOT NULL,
  `Reason_Of_Return` int(11) NOT NULL,
  `Attendant_ID` int(11) NOT NULL,
  PRIMARY KEY (`Feeds_Return_ID`),
  KEY `Attendant_ID` (`Attendant_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feed_consumption`
--

CREATE TABLE IF NOT EXISTS `feed_consumption` (
  `Feed_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Feed_Name` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Feed_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feed_receipt_acquisition`
--

CREATE TABLE IF NOT EXISTS `feed_receipt_acquisition` (
  `feed_receipt_acquisition_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(20) DEFAULT NULL,
  `Attendant` varchar(255) DEFAULT NULL,
  `Item` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Quantity_After_Grinding` int(11) DEFAULT NULL,
  `Total_Quantity_After_Mixing` int(11) DEFAULT NULL,
  PRIMARY KEY (`feed_receipt_acquisition_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feed_receipt_acquisition`
--

INSERT INTO `feed_receipt_acquisition` (`feed_receipt_acquisition_ID`, `Date`, `Attendant`, `Item`, `Quantity`, `Quantity_After_Grinding`, `Total_Quantity_After_Mixing`) VALUES
(1, '2016-11-17', 'Akena', 'Rock Salt', 1, 1, 1),
(2, '2016-11-17', 'Senior', 'Barley', 3, 4, 5),
(3, '23/12/2015', 'bob', 'maize', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pig_sales`
--

CREATE TABLE IF NOT EXISTS `pig_sales` (
  `Pig_Sales_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(100) NOT NULL,
  `Date_Of_Sale` date NOT NULL,
  `Price_Of_Animal` float NOT NULL,
  `Quantity` float NOT NULL,
  `Animal_ID` varchar(100) NOT NULL,
  PRIMARY KEY (`Pig_Sales_ID`),
  KEY `Animal_ID` (`Animal_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier_Name` varchar(100) NOT NULL,
  `Item_Supplied` int(11) NOT NULL,
  `Supplier_Contact` int(11) NOT NULL,
  `Supplier_Address` int(11) NOT NULL,
  PRIMARY KEY (`Supplier_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Supplier_Name`, `Item_Supplied`, `Supplier_Contact`, `Supplier_Address`) VALUES
(1, 'wiz', 56, 2, 23);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `Animal_ibfk_1` FOREIGN KEY (`Location_ID`) REFERENCES `animal_location` (`Location_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `animal_death_tracker`
--
ALTER TABLE `animal_death_tracker`
  ADD CONSTRAINT `Animal_Death_Tracker_ibfk_1` FOREIGN KEY (`Animal_ID`) REFERENCES `animal` (`Animal_ID`) ON DELETE NO ACTION;

--
-- Constraints for table `animal_feed_consumption`
--
ALTER TABLE `animal_feed_consumption`
  ADD CONSTRAINT `Animal_Feed_Consumption_ibfk_2` FOREIGN KEY (`Location_ID`) REFERENCES `animal_location` (`Location_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Animal_Feed_Consumption_ibfk_3` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `animal_medication_tracker`
--
ALTER TABLE `animal_medication_tracker`
  ADD CONSTRAINT `Animal_Medication_Tracker_ibfk_1` FOREIGN KEY (`Animal_ID`) REFERENCES `animal` (`Animal_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Animal_Medication_Tracker_ibfk_2` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `animal_transfer_schedule`
--
ALTER TABLE `animal_transfer_schedule`
  ADD CONSTRAINT `Animal_Transfer_Schedule_ibfk_1` FOREIGN KEY (`Animal_ID`) REFERENCES `animal` (`Animal_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Animal_Transfer_Schedule_ibfk_2` FOREIGN KEY (`Location_ID`) REFERENCES `animal_location` (`Location_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `animal_weight_tracker`
--
ALTER TABLE `animal_weight_tracker`
  ADD CONSTRAINT `Animal_Weight_Tracker_ibfk_1` FOREIGN KEY (`Animal_ID`) REFERENCES `animal` (`Animal_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Animal_Weight_Tracker_ibfk_2` FOREIGN KEY (`Location_ID`) REFERENCES `animal_location` (`Location_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendant_activity_log`
--
ALTER TABLE `attendant_activity_log`
  ADD CONSTRAINT `attendant_activity_log_ibfk_1` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chicken_feed_consumption`
--
ALTER TABLE `chicken_feed_consumption`
  ADD CONSTRAINT `Chicken_Feed_Consumption_ibfk_1` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`),
  ADD CONSTRAINT `Chicken_Feed_Consumption_ibfk_2` FOREIGN KEY (`Cage_ID`) REFERENCES `chicken_storage` (`Cage_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chicken_medication_tracker`
--
ALTER TABLE `chicken_medication_tracker`
  ADD CONSTRAINT `Chicken_Medication_Tracker_ibfk_1` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Chicken_Medication_Tracker_ibfk_2` FOREIGN KEY (`Cage_ID`) REFERENCES `chicken_storage` (`Cage_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chicken_population_tracker`
--
ALTER TABLE `chicken_population_tracker`
  ADD CONSTRAINT `Chicken_Population_Tracker_ibfk_1` FOREIGN KEY (`Cage_ID`) REFERENCES `chicken_storage` (`Cage_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Chicken_Population_Tracker_ibfk_2` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chicken_sales`
--
ALTER TABLE `chicken_sales`
  ADD CONSTRAINT `Chicken_Sales_ibfk_1` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Chicken_Sales_ibfk_2` FOREIGN KEY (`Cage_ID`) REFERENCES `chicken_storage` (`Cage_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chicken_transfer_tracker`
--
ALTER TABLE `chicken_transfer_tracker`
  ADD CONSTRAINT `Chicken_Transfer_Tracker_ibfk_1` FOREIGN KEY (`Attendant_ID`) REFERENCES `attendant` (`Attendant_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Chicken_Transfer_Tracker_ibfk_2` FOREIGN KEY (`Cage_ID`) REFERENCES `chicken_storage` (`Cage_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
