-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 11:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `dobavljaci`
--

CREATE TABLE `dobavljaci` (
  `idDobavljac` int(11) NOT NULL,
  `imeDobavljaca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresaDobavljaca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dobavljaci`
--

INSERT INTO `dobavljaci` (`idDobavljac`, `imeDobavljaca`, `adresaDobavljaca`, `ocena`) VALUES
(1, 'Phoenix', 'Prve pruge 7', 10),
(2, 'Farmalogist', 'Zadrugarska 23', 9),
(3, 'Vega', 'Zagorska 33', 8),
(4, 'ADOC', 'Mihajla Pupina 7', 8),
(5, 'Velex pharm', 'Carice Milice 56', 8),
(6, 'Hiper', 'Antifasisticke borbe 33', 6),
(7, 'Veleks pro', 'Bulevar oslobodjenja 2', 5),
(8, 'Pharma swiss', 'Prvomajska 6', 10),
(9, 'Primax', 'Vodovodska 158', 7),
(10, 'Anlek', 'Ljubinke Bobic 28', 10),
(11, 'Sopharma', 'Cara Dusana 6', 8);

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `idKomentara` int(11) NOT NULL,
  `Ime` varchar(256) NOT NULL,
  `Prezime` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Komentar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`idKomentara`, `Ime`, `Prezime`, `Email`, `Komentar`) VALUES
(5, 'Sanja', 'Despotovic', 'sanjamunze_despot@yahoo.com', 'Sajt je odlican. Zasluzuje max poena!!! :)\r\n				'),
(15, 'Jovana', 'Todorovic', 'jovana.jocka.todorovic@gmail.com', '\r\n	Odlicno!!			');

-- --------------------------------------------------------

--
-- Table structure for table `lekovi`
--

CREATE TABLE `lekovi` (
  `lekID` int(11) NOT NULL,
  `nazivLeka` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `godinaProizvodnje` int(11) NOT NULL,
  `proizvodjac` int(11) NOT NULL,
  `dobavljac` int(11) NOT NULL,
  `ocena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lekovi`
--

INSERT INTO `lekovi` (`lekID`, `nazivLeka`, `godinaProizvodnje`, `proizvodjac`, `dobavljac`, `ocena`) VALUES
(1, 'Aspirin', 2019, 1, 1, 10),
(2, 'Aspirin plus C', 2019, 2, 2, 8),
(3, 'Cafetin', 2020, 3, 2, 8),
(4, 'Fervex', 2019, 4, 3, 8),
(5, 'Tylol hot', 2020, 5, 4, 7),
(6, 'Cafetin menstrual', 2018, 6, 6, 9),
(7, 'Hemomicin', 2019, 7, 5, 9),
(8, 'Eritromicin', 2020, 7, 4, 7),
(9, 'Ventolin', 2020, 8, 7, 6),
(10, 'Singulair', 2019, 9, 8, 6),
(11, 'Prospan', 2020, 9, 9, 9),
(12, 'Xyzal', 2019, 10, 8, 10),
(13, 'Nafazolin', 2019, 10, 3, 9),
(14, 'Katopyl', 2018, 1, 2, 6),
(15, 'Bromazepam', 2020, 2, 6, 7),
(16, 'novi', 2012, 3, 4, 7),
(17, 'novi2', 2012, 3, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjaci`
--

CREATE TABLE `proizvodjaci` (
  `idProizvodjaca` int(11) NOT NULL,
  `nazivProizvodjaca` varchar(30) NOT NULL,
  `adresa` varchar(30) NOT NULL,
  `brojIzdatihLekova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodjaci`
--

INSERT INTO `proizvodjaci` (`idProizvodjaca`, `nazivProizvodjaca`, `adresa`, `brojIzdatihLekova`) VALUES
(1, 'Pharmanova', 'Generala Anrija 6', 26),
(2, 'Galenika', 'Batajnicki drum bb', 15),
(3, 'Hemofarm', 'Beogradski put bb', 20),
(4, 'Zorka pharma', 'Hajduk Veljkova bb', 10),
(5, 'Jugoremedija', 'Trscanska 21', 18),
(6, 'Panfarma', 'Stahinjica Bana 48', 31),
(7, 'Srblolek', 'Jovana Ducica 78', 25),
(8, 'UFAR Pharmacy', 'Nova 44', 17),
(9, 'Bayer', 'Kneginje Milice 76', 9),
(10, 'Sanofi', 'Cara Dusana 66', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dobavljaci`
--
ALTER TABLE `dobavljaci`
  ADD PRIMARY KEY (`idDobavljac`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`idKomentara`);

--
-- Indexes for table `lekovi`
--
ALTER TABLE `lekovi`
  ADD PRIMARY KEY (`lekID`),
  ADD KEY `proizvodjac` (`proizvodjac`),
  ADD KEY `dobavljac` (`dobavljac`);

--
-- Indexes for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  ADD PRIMARY KEY (`idProizvodjaca`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dobavljaci`
--
ALTER TABLE `dobavljaci`
  MODIFY `idDobavljac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `idKomentara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lekovi`
--
ALTER TABLE `lekovi`
  MODIFY `lekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  MODIFY `idProizvodjaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lekovi`
--
ALTER TABLE `lekovi`
  ADD CONSTRAINT `FK_Dobavljac` FOREIGN KEY (`dobavljac`) REFERENCES `dobavljaci` (`idDobavljac`),
  ADD CONSTRAINT `FK_Proizvodjac` FOREIGN KEY (`proizvodjac`) REFERENCES `proizvodjaci` (`idProizvodjaca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
