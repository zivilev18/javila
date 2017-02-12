-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 06:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knygos`
--

-- --------------------------------------------------------

--
-- Table structure for table `knygu_sarasas`
--

CREATE TABLE `knygu_sarasas` (
  `nr` int(50) NOT NULL,
  `pavadinimas` varchar(100) NOT NULL,
  `metai` float NOT NULL,
  `autorius` varchar(200) NOT NULL,
  `zanras` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knygu_sarasas`
--

INSERT INTO `knygu_sarasas` (`nr`, `pavadinimas`, `metai`, `autorius`, `zanras`) VALUES
(1, 'Haris Poteris ir Išminties akmuo', 1997, 'J. K. Rowling', 'apysaka'),
(2, 'Haris Poteris ir Paslapčių kambarys', 1998, 'J. K. Rowling', 'apysaka'),
(3, 'Haris Poteris ir Azkabano kalinys', 1999, 'J. K. Rowling', 'apysaka'),
(4, 'Haris Poteris ir Ugnies taurė', 2000, 'J. K. Rowling', 'apysaka'),
(5, 'Haris Poteris ir Fenikso brolija', 2003, 'J. K. Rowling', 'apysaka'),
(6, 'Haris Poteris ir Netikras Princas', 2005, 'J. K. Rowling', 'apysaka'),
(7, 'Haris Poteris ir Mirties relikvijos', 2007, 'J. K. Rowling', 'apysaka'),
(8, 'Dievas visada keliauja incognito', 2012, 'Laurent Gounelle', 'romanas'),
(9, 'Diena, kai išmokau gyventi', 2016, 'Laurent Gounelle', 'romanas'),
(10, 'Rožės vardas', 2001, 'Umberto Eco', 'romanas'),
(11, 'Alchemikas', 2000, 'Paulo Coelho', 'romanas'),
(12, 'Altorių šešėly', 1971, 'Vincas Mykolaitis-Putinas', 'romanas'),
(13, 'Balta drobulė', 2013, 'Antanas Škėma', 'romanas'),
(14, 'Baltaragio malūnas', 1983, 'Kazys Boruta', 'apysaka'),
(15, 'Metai', 2004, 'Kristijonas Donelaitis', 'poema'),
(16, 'Žmogus, kuris norėjo būti laimingas', 2015, 'Laurent Gounelle', 'romanas'),
(17, 'Svetimautoja', 2014, 'Paulo Coelho', 'romanas'),
(18, 'Šimtas metų vienatvės', 1991, 'Gabrielis Garsija Markesas', 'romanas'),
(19, 'Vakarų fronte nieko naujo', 1989, 'Erichas Marija Remarkas', 'romanas'),
(20, 'Geišos išpažintis', 1999, 'Arthur Golden', 'romanas'),
(21, 'Puikybė ir prietarai', 2014, 'Jane Austen', 'romanas'),
(22, 'Stepių vilkas', 2014, 'Hermann Hesse', 'romanas'),
(23, 'Tūla', 2013, 'Jurgis Kunčinas', 'romanas'),
(24, 'Mergina su drakono tatuiruote', 2010, 'Stieg Larsson', 'romanas'),
(25, 'Mergina, kuri žaidė su ugnimi', 2010, 'Stieg Larsson', 'romanas'),
(26, 'Mergina, kuri užkliudė širšių lizdą', 2011, 'Stieg Larsson', 'romanas'),
(27, 'Mergina traukiny', 2015, 'Paula Hawkins', 'detektyvinis romanas'),
(28, 'Nr.0', 2015, 'Umberto Eko', 'romanas'),
(29, 'Doriano Grėjaus portretas', 2015, 'Oscar Wilde', 'romanas'),
(30, 'Maras', 2013, 'Albert Camus', 'romanas'),
(31, 'Hamletas', 2011, 'William Shakespeare ', 'tragedija'),
(32, 'Fiesta', 1993, 'Ernestas Hemingvėjus', 'romanas'),
(33, 'Šešėliai rojuje', 1993, 'E. M. Remarkas', 'romanas'),
(34, 'Nusikaltimas ir bausmė', 2008, 'Fiodoras Dostojevskis', 'romanas'),
(35, 'Gyvenimas po klevu', 2009, 'Romualdas Granauskas', 'apysaka'),
(36, '1984-ieji', 2015, 'George Orwell ', 'romanas'),
(37, 'Gyvulių ūkis', 2015, 'George Orwell ', 'apysaka'),
(38, 'Stepių vilkas', 2014, 'Hermann Hesse', 'romanas'),
(39, 'Mes varnų saloje', 1987, 'Astrida Lindgren', 'apysaka'),
(40, 'Robino Hudo nuotykiai', 1987, 'Howard Pyle', 'apysaka'),
(41, 'Vėtrų kalnas', 2009, 'Emily Bronte', 'romanas'),
(42, 'Siuntėjas', 2003, 'Lois Lowry', 'apysaka'),
(43, 'Lolita', 1990, 'Vladimir Nabokov', 'romanas'),
(44, 'Tėvas Gorijo', 2011, 'Honore de Balzac', 'romanas'),
(45, 'Aliaskos beieškant', 2015, 'John Green', 'romanas'),
(46, 'Tomo Sojerio nuotykiai', 1988, 'Markas Tvenas', 'romanas'),
(47, 'Rugiuose prie bedugnės', 2009, 'Jerome David Salinger', 'romanas'),
(48, 'Piligrimystė', 2008, 'John Broderick', 'romanas'),
(49, 'Pusseserė Beta', 1994, 'Honore de Balzac', 'romanas'),
(50, 'Knyga apie San Mikelę', 2015, 'Axel Munthe', 'romanas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knygu_sarasas`
--
ALTER TABLE `knygu_sarasas`
  ADD PRIMARY KEY (`nr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knygu_sarasas`
--
ALTER TABLE `knygu_sarasas`
  MODIFY `nr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
