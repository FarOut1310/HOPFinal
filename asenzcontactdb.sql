-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 05:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asenzcontactdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactformula`
--

CREATE TABLE `contactformula` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phonenr` varchar(25) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactformula`
--

INSERT INTO `contactformula` (`id`, `name`, `email`, `phonenr`, `message`) VALUES
(1, 'Exile Sector I/S', 'seanrc@exisect.com', '+4540264712', 'We are looking for someone who can supply some company merchandise for us. This would be an order of approx. 350-400 items, all of which would be custom printed.\r\nPlease contact us as soon as possible.'),
(2, 'Bent Christensen', 'benchr@highliving.dk', '+4562232371', 'Hej A-senz,\r\nJeg leder efter en ny leverandør der kan komme med flere produkter til en ny linje. Her mener jeg færdig lavede produkter, i et bredt sortiment af tekstiler og farver. Hvis det lyder som noget i kan levere, så kontakt mig gerne hurtigst muligt via. e-mail.\r\nM.v.h.\r\nBent C.'),
(3, 'Bed and Wellness', 'info@bandw.com', '555-2323-9423', 'We\'re looking to expand our network of suppliers. If you might be interested in working with us, then please contact us at your earliest convinience.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactformula`
--
ALTER TABLE `contactformula`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactformula`
--
ALTER TABLE `contactformula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
