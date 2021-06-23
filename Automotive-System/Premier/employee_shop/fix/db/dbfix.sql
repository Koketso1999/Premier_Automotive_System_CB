-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 04:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `last_activity` varchar(255) NOT NULL,
  `user_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('379cf95bcc91f8e387e27a9df7c36bab', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '1624410223', '');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `id` int(4) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `indirizzo` varchar(30) NOT NULL,
  `citta` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `vat` varchar(30) NOT NULL,
  `cf` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `commenti` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`id`, `nome`, `cognome`, `telefono`, `indirizzo`, `citta`, `email`, `vat`, `cf`, `data`, `commenti`) VALUES
(3, 'Stillwell', 'Jacob', '75984430', 'P O Box 565, Mmadinare', 'Palapye', 'stillwell@gmail.com', '252``', 'Hello', '2021-05-27', ''),
(4, 'Thabang', 'Saakane', '75986648', 'Box 223, Serowe', 'Serowe', 'thabangsaakane@gmail.com', '', 'tbang', '2021-05-28', 'Always come back to service his Golf 7 GTI every 3 months.'),
(5, 'Arnold', 'Setumo', '78453565', 'Box 213, Broadhurst', 'Gaborone', 'arnolds@gmail.com', '45454', 'NA', '2021-05-28', 'Truck Driver\nScania S Series\nServices every 5 months'),
(6, 'Thero', 'Lerasa', '74365485', 'Box 213, Tonota', 'Francistown', 'therol@gmail.com', '45454', 'NA', '2021-05-28', 'Scania P-series trucks\nOwner of Theruru Logistics'),
(7, 'Molele', 'Moremi', '74543687', 'Box 321, Maun', 'Tlokweng', 'molele909@gmail.com', '45454', 'NA', '2021-05-28', 'Prefers to be serviced by Mr Mokgweetsi.'),
(8, 'Thabo', 'Moshe', '75998834', 'Box 323 Modipane', 'Gaborone', 'thabo@gmail.com', '2254', '24455', '2021-05-28', 'Owns a golf GTI.\nService 3 months.'),
(9, 'Boineelo', 'Leadika', '72283242', 'Box 3223', 'Serowe ', 'bbak@gmail.com', '0.12', '12253364', '2021-06-22', 'Prefeers to come for Car service, the car model is Hyundai.'),
(10, 'Maanleo', 'Imisa', '75364497', 'P O Box 231', 'Masunga ', 'maaneloimisa@gmail.com', '0.12', '2536442', '2021-06-22', 'Has a construction company.\nOwns 4 JCB trucks.\nHas 4 Tow Trucks.\n'),
(11, 'Tshoganetso', 'Leledisa', '78982365', 'P O Box 111', 'Palapye', 'tshoganetso@gmail.com', '0.12', '69658500', '2021-06-22', 'Has a 4 hectare land in Sefhare.\nOwns 2 tractors that has wheel problems.'),
(12, 'Bisho ', 'Feeling', '78985563', 'Box 232 ', 'Mogoditshane', 'bfeeling@gmail.com', '0.12', '755686324', '2021-06-22', 'Works at a Beams manufacturing company as the company director.'),
(13, 'Aamon', 'Mepisime', '76113166', 'P O Box 12342', 'Mogoditshane', 'aamon@gmail.com', '0.12', '665565220', '2021-06-23', ''),
(14, 'Abigail', 'Remain', '78665235', 'P O Box 456', 'Tlokweng ', 'abiremain@gmail.com', '0.12', '463330112', '2021-06-23', ''),
(15, 'Zeas', 'Zeas', '75656236', 'P O Box ', 'Tloweng', 'zeazz@gmail.com', '0.12', '336461326', '2021-06-23', ''),
(16, 'Xerawa', 'Mosinyi', '75633696', 'Box 212', 'Maun ', 'xmosinyi@gmail.com', '0.12', '79622233333', '2021-06-23', ''),
(17, 'Xerawa', 'Mosinyi', '75633696', 'Box 212', 'Maun ', 'xmosinyi@gmail.com', '0.12', '79622233333', '2021-06-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `impostazioni`
--

CREATE TABLE `impostazioni` (
  `id` int(4) NOT NULL,
  `titolo` text NOT NULL,
  `lingua` text NOT NULL,
  `showcredit` int(11) NOT NULL,
  `disclaimer` varchar(370) NOT NULL,
  `skebby_user` text NOT NULL,
  `skebby_pass` text NOT NULL,
  `skebby_name` text NOT NULL,
  `skebby_method` text NOT NULL,
  `admin_user` varchar(40) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `valuta` text NOT NULL,
  `indirizzo` varchar(40) NOT NULL,
  `invoice_mail` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `vat` varchar(100) NOT NULL,
  `invoice_type` text NOT NULL,
  `tax` decimal(30,0) NOT NULL,
  `invoice_name` text NOT NULL,
  `categorie` varchar(500) NOT NULL,
  `twilio_mode` varchar(20) NOT NULL,
  `twilio_account_sid` varchar(90) NOT NULL,
  `twilio_auth_token` varchar(90) NOT NULL,
  `twilio_number` varchar(20) NOT NULL,
  `prefix_number` int(5) NOT NULL,
  `usesms` int(2) NOT NULL,
  `r_apertura` varchar(200) NOT NULL,
  `r_chiusura` varchar(200) NOT NULL,
  `colore1` text NOT NULL,
  `colore2` text NOT NULL,
  `colore3` text NOT NULL,
  `colore4` text NOT NULL,
  `colore5` text NOT NULL,
  `colore_prim` varchar(24) NOT NULL,
  `logo` varchar(24) NOT NULL,
  `campi_personalizzati` varchar(500) NOT NULL,
  `stampadue` int(2) NOT NULL,
  `otp` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `impostazioni`
--

INSERT INTO `impostazioni` (`id`, `titolo`, `lingua`, `showcredit`, `disclaimer`, `skebby_user`, `skebby_pass`, `skebby_name`, `skebby_method`, `admin_user`, `admin_password`, `valuta`, `indirizzo`, `invoice_mail`, `telefono`, `vat`, `invoice_type`, `tax`, `invoice_name`, `categorie`, `twilio_mode`, `twilio_account_sid`, `twilio_auth_token`, `twilio_number`, `prefix_number`, `usesms`, `r_apertura`, `r_chiusura`, `colore1`, `colore2`, `colore3`, `colore4`, `colore5`, `colore_prim`, `logo`, `campi_personalizzati`, `stampadue`, `otp`) VALUES
(1, 'Premier Automotive And General Engineering', 'english', 0, 'Disclaimer: Prices may vary according to a number of factors, i.e. TAX changes.', '', '', '', '', 'codebrewers@code.com', 'code', 'BWP', 'Your complete Gaborone, Botswana Mokolo', 'kingsley@it.bw', '(267)77683784', '36542', 'EU', '12', 'Koketso Morapedi', 'Car Service\r\nWelding\r\nTrucks\r\nnull\r\nHeavy Machiney\r\nFitting\r\nConstruction\r\nOil Change\r\nTire Rotation\r\nAlignment\r\nSuspension Service\r\nBattery Replacement', 'prod', '', '', '', 267, 2, 'Hello %customer%, your order/repair for %model% was opened by %businessname%. Check the state of repair on %fixbookurl%.\nStatus code: (%statuscode%)', 'Hello %customer%, your order/repair fo %model% has been completed, come to %businessname% for take it. Thanks for choosing us.', '#b5c43d', '#f27705', '#a8a8a8', '#1ad66b', '#e20000', '#2a2d34', 'logo_nav.png?11', 'YToxOntpOjA7czo0OiJudWxsIjt9', 1, '5944');

-- --------------------------------------------------------

--
-- Table structure for table `oggetti`
--

CREATE TABLE `oggetti` (
  `ID` int(255) NOT NULL,
  `Nominativo` varchar(255) NOT NULL,
  `ID_Nominativo` int(11) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `sms` int(1) NOT NULL DEFAULT 0,
  `Tipo` int(1) NOT NULL,
  `Guasto` text NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Modello` varchar(255) NOT NULL,
  `Pezzo` varchar(255) DEFAULT NULL,
  `Anticipo` int(11) NOT NULL,
  `Prezzo` int(255) NOT NULL,
  `dataApertura` datetime NOT NULL,
  `dataChiusura` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 3,
  `Commenti` varchar(500) NOT NULL,
  `codice` varchar(20) NOT NULL,
  `custom_field` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oggetti`
--

INSERT INTO `oggetti` (`ID`, `Nominativo`, `ID_Nominativo`, `Telefono`, `sms`, `Tipo`, `Guasto`, `Categoria`, `Modello`, `Pezzo`, `Anticipo`, `Prezzo`, `dataApertura`, `dataChiusura`, `status`, `Commenti`, `codice`, `custom_field`) VALUES
(6, 'Arnold Setumo', 5, '78453565', 0, 1, 'Scania Truck', 'Trucks', 'S Series', 'Shocks repair', 1200, 7000, '2021-05-28 13:29:30', '2021-05-28 13:29:49', 0, 'Order is reserved for First week of June.', 'Arnold2021', '{\"6e756c6c\":\"\"}'),
(7, 'Thabang Saakane', 4, '75986648', 0, 2, '', 'Welding', 'Mini Tuckshop', '', 900, 6500, '2021-05-28 13:43:30', NULL, 0, 'Designed a new 1099cm X 600cm.\nIncluded fittings and painted the whole block.', 'Thabang2021', '{\"6e756c6c\":\"\"}'),
(8, 'Thabo Moshe', 8, '75998834', 0, 1, 'Engine Service', 'Car Service', 'Golf 7', 'No', 200, 6000, '2021-05-28 15:17:21', NULL, 0, 'Needs immediate service.', 'Thabo2021', '{\"6e756c6c\":\"\"}'),
(10, 'Arnold Setumo', 5, '78453565', 0, 2, 'Service', 'Car Service', 'Mazda 3', '', 800, 1800, '2021-06-22 17:19:47', NULL, 0, 'Comes 3 every months', '', '{\"6e756c6c\":\"\"}'),
(11, 'Molele Moremi', 7, '74543687', 0, 1, 'Truck Spring', 'Trucks', 'JCB', '900', 100, 800, '2021-06-22 17:22:10', '2021-06-22 17:33:19', 0, '', '', '{\"6e756c6c\":\"\"}'),
(13, 'Xerawa Mosinyi', 16, '75633696', 0, 1, 'Spring Loose', 'Trucks', 'Scania', 'Spring', 400, 800, '2021-06-23 02:57:05', NULL, 2, '', 'X2021', '{\"6e756c6c\":\"\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impostazioni`
--
ALTER TABLE `impostazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oggetti`
--
ALTER TABLE `oggetti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `impostazioni`
--
ALTER TABLE `impostazioni`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oggetti`
--
ALTER TABLE `oggetti`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
