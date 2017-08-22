
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `coict` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Program` varchar(40) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Date_of_Birth` varchar(20) NOT NULL,
  `Place_of_Birth` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Marrital_Status` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Contact_Address` varchar(60) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `coict` (`ID`, `Firstname`, `Lastname`, `Year`, `Program`,
   `Department`, `State`, `Nationality`, `Date_of_Birth`, `Place_of_Birth`,
   `Gender`, `Email`, `Marrital_Status`, `Religion`, `Contact_Address`) VALUES();
