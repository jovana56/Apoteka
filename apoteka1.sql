-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 11:22 PM
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
-- Database: `apoteka1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dobavljaci`
--

CREATE TABLE `dobavljaci` (
  `dobavljac_id` int(10) NOT NULL,
  `dobavljac_naziv` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dobavljaci`
--

INSERT INTO `dobavljaci` (`dobavljac_id`, `dobavljac_naziv`) VALUES
(1, 'Phoenix'),
(2, 'Farmalogist'),
(3, 'Vega'),
(4, 'ADOC'),
(5, 'Velex pharm'),
(6, 'Hiper'),
(7, 'Veleks pro'),
(8, 'Pharma swiss'),
(9, 'Primax'),
(10, 'Anlek'),
(11, 'Sopharma');

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id_` int(10) NOT NULL,
  `lek_id` int(10) NOT NULL,
  `ip_add` varchar(256) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lek_naziv` varchar(256) NOT NULL,
  `lek_image` text NOT NULL,
  `qty` int(10) NOT NULL,
  `cena` int(10) NOT NULL,
  `ukupan_iznos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id_`, `lek_id`, `ip_add`, `user_id`, `lek_naziv`, `lek_image`, `qty`, `cena`, `ukupan_iznos`) VALUES
(36, 1, '0', 1, 'Aspirin', 'aspirin.PNG', 3, 200, 600),
(41, 5, '0', 1, 'Tylol hot', 'tylolhot.PNG', 1, 65, 65),
(47, 3, '0', 1, 'Aspirin plus C', 'aspirinc.PNG', 1, 200, 200),
(48, 3, '0', 1, 'Aspirin plus C', 'aspirinc.PNG', 1, 200, 200),
(56, 1, '0', 1, 'Aspirin', 'aspirin.PNG', 3, 200, 600),
(57, 5, '0', 1, 'Tylol hot', 'tylolhot.PNG', 1, 65, 65),
(65, 12, '0', 1, 'Xyzal', 'xyzal.PNG', 1, 345, 345),
(66, 13, '0', 1, 'Nafazolin', 'nafazolin.PNG', 2, 120, 240),
(69, 2, '0', 0, 'Aspirin plus C', 'aspirinc.PNG', 1, 200, 200),
(70, 3, '0', 0, 'Caffetin', 'caffetin.PNG', 1, 160, 160),
(75, 7, '0', 0, 'Hemomicin', 'hemomicin.PNG', 1, 320, 320),
(86, 6, '0', 0, 'Cafetin menstrual', 'caffetinmens.PNG', 1, 130, 130),
(88, 3, '0', 5, 'Caffetin', 'caffetin.PNG', 2, 160, 320),
(89, 4, '0', 5, 'Fervex', 'fervex.PNG', 1, 70, 70),
(90, 2, '0', 5, 'Aspirin plus C', 'aspirinc.PNG', 1, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `lekovi`
--

CREATE TABLE `lekovi` (
  `lek_id` int(10) NOT NULL,
  `lek_proizvodjac` int(10) NOT NULL,
  `lek_dobavljac` int(10) NOT NULL,
  `lek_naziv` varchar(256) NOT NULL,
  `lek_cena` int(10) NOT NULL,
  `lek_opis` text NOT NULL,
  `lek_image` text NOT NULL,
  `lek_tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lekovi`
--

INSERT INTO `lekovi` (`lek_id`, `lek_proizvodjac`, `lek_dobavljac`, `lek_naziv`, `lek_cena`, `lek_opis`, `lek_image`, `lek_tag`) VALUES
(1, 2, 2, 'Aspirin', 200, 'aspirin', 'aspirin.PNG', 'aspirin'),
(2, 3, 3, 'Aspirin plus C', 200, 'aspirin c', 'aspirinc.PNG', 'aspirin c'),
(3, 4, 4, 'Caffetin', 160, 'caffetin', 'caffetin.PNG', 'caffetin'),
(4, 5, 5, 'Fervex', 70, 'fervex', 'fervex.PNG', 'fervex'),
(5, 6, 6, 'Tylol hot', 65, 'tylol hot', 'tylolhot.PNG', 'tylol hot'),
(6, 7, 7, 'Cafetin menstrual', 130, 'caffetin mens', 'caffetinmens.PNG', 'caffetin mens'),
(7, 8, 8, 'Hemomicin', 320, 'hemomicin', 'hemomicin.PNG', 'hemomicin'),
(8, 9, 9, 'Eritromicin', 250, 'eritromicin', 'eritromicin.PNG', 'eritromicin'),
(9, 10, 10, 'Ventolin', 670, 'ventolin', 'ventolin.PNG', 'ventolin'),
(10, 1, 11, 'Singulair', 990, 'singulair', 'singulair.PNG', 'singulair'),
(11, 2, 1, 'Prospan', 450, 'prospan', 'prospan.PNG', 'prospan'),
(12, 3, 2, 'Xyzal', 345, 'xyzal', 'xyzal.PNG', 'xyzal'),
(13, 4, 3, 'Nafazolin', 120, 'nafazolin', 'nafazolin.PNG', 'nafazolin'),
(14, 5, 4, 'Katopyl', 560, 'katopyl', 'katopyl.PNG', 'katopyl'),
(15, 6, 5, 'Bromazepam', 340, 'bromazepam', 'bromazepam.PNG', 'bromazepam');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjaci`
--

CREATE TABLE `proizvodjaci` (
  `proizvodjac_id` int(10) NOT NULL,
  `proizvodjac_naziv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodjaci`
--

INSERT INTO `proizvodjaci` (`proizvodjac_id`, `proizvodjac_naziv`) VALUES
(1, 'Pharmanova'),
(2, 'Galenika'),
(3, 'Hemofarm'),
(4, 'Zorka pharma'),
(5, 'Jugoremedija'),
(6, 'Panfarma'),
(7, 'Srblolek'),
(8, 'UFAR Pharmacy'),
(9, 'Bayer'),
(10, 'Sanofi');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`) VALUES
(1, 'Jovana', 'Savic', 'jovana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0644560426', 'Cara Dusana 17'),
(2, 'Aleksandar', 'Mitic', 'email@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1234567890', '123'),
(5, 'Jovana', 'Todorovic', 'jovana.jocka.todorovic@gmail.com', '067a9d48f2884037e1320ac03b18e86f', '0645565555', 'Aleksandra Dubceka 23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dobavljaci`
--
ALTER TABLE `dobavljaci`
  ADD PRIMARY KEY (`dobavljac_id`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `lekovi`
--
ALTER TABLE `lekovi`
  ADD PRIMARY KEY (`lek_id`);

--
-- Indexes for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  ADD PRIMARY KEY (`proizvodjac_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dobavljaci`
--
ALTER TABLE `dobavljaci`
  MODIFY `dobavljac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id_` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `lekovi`
--
ALTER TABLE `lekovi`
  MODIFY `lek_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  MODIFY `proizvodjac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
