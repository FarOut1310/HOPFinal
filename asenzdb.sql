-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 11:32 PM
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
-- Database: `asenzdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactformula`
--

CREATE TABLE `contactformula` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phonenr` int(25) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactformula`
--

INSERT INTO `contactformula` (`id`, `name`, `email`, `phonenr`, `message`) VALUES
(1, 'Exile Sector I/S', 'sean_cordero@mail.dk', 40264712, 'We are looking for someone who can supply and deliver some company merchandise for us. This would be an order of approx. 300-400 items. If you believe you can fill such an order, then please contact us at the listed number or email. We look forward to hearing from you.'),
(2, 'Bent & Co. Living A/S', 'bentc@living.dk', 20322421, 'Hej A-senz.\r\nVi leder efter en ny leverandør af gode tekstil produkter til både bad og soveværelser. Gerne af højeste kvalitet på markedet. Opgaven vil starte med en enkelt ordre på en større levering til vores lokationer, men kunne måske opgraderes til en regelmæssig aftale hvis i har hvad vi leder efter.\r\nKontakt os gerne hurtigst muligt i det vi håber på at fylde kontrakten året er omme.\r\nM.v.h.\r\nBent Christensen'),
(3, 'Bed, bath and beyond', 'bbbinfo@bbbeyond.com', 55502154, 'We\'ve looked at your product page and are interested in a larger order of printed towels and pillows. Please contact us directly for further details.');

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
