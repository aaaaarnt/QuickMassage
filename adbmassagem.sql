-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2018 at 06:05 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `blOcupado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
CREATE TABLE IF NOT EXISTS `inscricao` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idHorario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dtReferencia` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
