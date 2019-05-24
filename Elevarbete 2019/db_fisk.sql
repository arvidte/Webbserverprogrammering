-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 24 maj 2019 kl 08:35
-- Serverversion: 5.7.24
-- PHP-version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `db_fisk`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `tb_medlemmar`
--

DROP TABLE IF EXISTS `tb_medlemmar`;
CREATE TABLE IF NOT EXISTS `tb_medlemmar` (
  `nyckel` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `fnamn` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `enamn` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `tfn` int(10) NOT NULL,
  PRIMARY KEY (`nyckel`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `tb_medlemmar`
--

INSERT INTO `tb_medlemmar` (`nyckel`, `username`, `password`, `fnamn`, `enamn`, `tfn`) VALUES
(1, 'Bollen', '1234', 'Sven', 'Larsson', 7234552),
(2, 'Tomten12', 'Jultomten', 'Anders', 'Jansson', 783921),
(3, 'Rodd', 'password1', 'Erik', 'Karlsson', 73457478),
(4, 'Tee', 'wdfwifnwi', 'fwnoifw', 'wnfwif', 46577),
(5, 'fejfeofje', 'epjfepjfe', 'Svante', 'wdpwjowfow', 395893095);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
