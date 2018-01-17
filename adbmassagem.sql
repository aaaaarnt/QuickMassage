-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2018 at 11:54 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adbmassagem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadeiramassagem`
--

DROP TABLE IF EXISTS `cadeiramassagem`;
CREATE TABLE IF NOT EXISTS `cadeiramassagem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDDia` int(11) NOT NULL,
  `Cadeira` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cadeiramassagem`
--

INSERT INTO `cadeiramassagem` (`ID`, `IDDia`, `Cadeira`) VALUES
(1, 1, 'Carlos'),
(2, 1, 'Rosane');

-- --------------------------------------------------------

--
-- Table structure for table `diamassagem`
--

DROP TABLE IF EXISTS `diamassagem`;
CREATE TABLE IF NOT EXISTS `diamassagem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Dia` date NOT NULL,
  `BoolAtivo` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `diamassagem`
--

INSERT INTO `diamassagem` (`ID`, `Dia`, `BoolAtivo`) VALUES
(1, '2018-01-11', 1),
(2, '2018-01-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `horariomassagem`
--

DROP TABLE IF EXISTS `horariomassagem`;
CREATE TABLE IF NOT EXISTS `horariomassagem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDCadeira` int(11) NOT NULL,
  `horario` varchar(5) COLLATE utf8_bin NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `horariomassagem`
--

INSERT INTO `horariomassagem` (`ID`, `IDCadeira`, `horario`, `idUsuario`) VALUES
(1, 1, '10:30', 0),
(2, 1, '11:30', 0),
(3, 2, '09:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `listausuariosadb`
--

DROP TABLE IF EXISTS `listausuariosadb`;
CREATE TABLE IF NOT EXISTS `listausuariosadb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) COLLATE utf8_bin NOT NULL,
  `email` varchar(300) COLLATE utf8_bin NOT NULL,
  `senha` int(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `listausuariosadb`
--

INSERT INTO `listausuariosadb` (`ID`, `nome`, `email`, `senha`) VALUES
(1, 'Diego Grandi', 'diego.grandi@dllgroup.com', 12345),
(2, 'Victor Arnt', 'victor.arnt@dllgroup.com', 12345);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
