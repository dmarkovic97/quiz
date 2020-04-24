-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 07:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminarski`
--

-- --------------------------------------------------------

--
-- Table structure for table `odgovori`
--

CREATE TABLE `odgovori` (
  `id` int(11) NOT NULL,
  `br_pitanja` int(11) NOT NULL,
  `tacno` int(11) NOT NULL DEFAULT 0,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odgovori`
--

INSERT INTO `odgovori` (`id`, `br_pitanja`, `tacno`, `tekst`) VALUES
(3, 1, 0, 'severnom ledenom okeanu'),
(4, 1, 1, 'tihom okeanu'),
(5, 1, 0, 'atlantskom okeanu'),
(6, 1, 0, 'indijskom okeanu'),
(7, 2, 0, 'Tajland'),
(8, 2, 0, 'Vijetnam'),
(9, 2, 1, 'Kambodza'),
(10, 2, 0, 'Peru'),
(81, 3, 0, 'Zirafe'),
(82, 3, 0, 'Nilski konji'),
(83, 3, 0, 'Psi'),
(84, 3, 1, 'Veverice'),
(85, 4, 1, 'Cassius Marcellus Clay, Jr'),
(86, 4, 0, ' Kareem Abdul-Jabbar'),
(87, 4, 0, 'Bobby Johnson'),
(88, 4, 0, 'Carl Weathers'),
(89, 5, 0, 'Japan'),
(90, 5, 1, 'Indonezija'),
(91, 5, 0, 'Italija'),
(92, 5, 0, 'Filipini'),
(93, 6, 0, 'Uskog prostora'),
(94, 6, 0, 'Zmija'),
(95, 6, 0, 'Pauka'),
(96, 6, 1, 'Visine'),
(97, 7, 1, 'Mozambika'),
(98, 7, 0, 'Kube'),
(99, 7, 0, 'Severne Koreje'),
(100, 7, 0, 'Somalije'),
(101, 8, 1, 'The Police'),
(102, 8, 0, 'Oasis'),
(103, 8, 0, 'The Clash'),
(104, 8, 0, 'The Who'),
(105, 9, 1, 'Devet'),
(106, 9, 0, 'Sedam'),
(107, 9, 0, 'Dvanaest'),
(108, 9, 0, 'Trinaest'),
(109, 10, 1, 'Nilski konj'),
(110, 10, 0, 'Slon'),
(111, 10, 0, 'Nosorog'),
(112, 10, 0, 'Hijena');

-- --------------------------------------------------------

--
-- Table structure for table `pitanja`
--

CREATE TABLE `pitanja` (
  `br_pitanja` int(11) NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitanja`
--

INSERT INTO `pitanja` (`br_pitanja`, `tekst`) VALUES
(1, 'Mikronezija se nalazi u:'),
(2, 'U kojoj se državi nalazi Angkor Wat, najveći hramski / religijski kompleks na svetu?'),
(3, 'Pored mačaka predu i'),
(4, 'Kako se zvao Muhamed Ali pre promene imena'),
(5, 'U kojoj se državi nalazi najviše vulkana?'),
(6, 'Akrofobični ljudi se boje'),
(7, 'Na zastavi koje drzave se nalaze zuta zvezda, knjiga i puska AK-47 (Kalasnjikov)?'),
(8, 'Pre solo karijere, Sting je bio glavni tekstopisac, pevac i basista rok grupe'),
(9, 'Koliko krugova Pakla ima u Danteovoj Bozanstvenoj komediji?'),
(10, 'Koja je zivotinja odgovorna za vise ljudskih zrtava u Africi od bilo koje druge velike zivotinje?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `odgovori`
--
ALTER TABLE `odgovori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odgovori`
--
ALTER TABLE `odgovori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
