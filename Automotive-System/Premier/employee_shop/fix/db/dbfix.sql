-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
('4415ff22a93a262d17561220079e20f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', '1623792048', 'a:3:{s:9:\"user_data\";s:0:\"\";s:8:\"LoggedIn\";b:1;s:5:\"email\";s:20:\"codebrewers@code.com\";}'),
('47fada66bea47ce9acb6fd4f337c28db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', '1623787582', ''),
('c617d7c544832b1079684af3e9ff5508', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', '1623788862', '');

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
(8, 'Thabo', 'Moshe', '75998834', 'Box 323 Modipane', 'Gaborone', 'thabo@gmail.com', '2254', '24455', '2021-05-28', 'Owns a golf GTI.\nService 3 months.');

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
(1, 'Premier Automotive', 'english', 0, 'Disclaimer: Prices may vary according to a number of factors, i.e. TAX changes.', '', '', '', '', 'codebrewers@code.com', 'code', 'BWP', 'Your complete adGaborone, Botswana Mokol', 'kingsley@it.bw', '(267)77683784', '##00000000000', 'EU', '2', 'Koketso Morapedi', 'Car Service\r\nWelding\r\nTrucks\r\nnull', 'prod', '', '', '', 267, 2, 'Hello %customer%, your order/repair for %model% was opened by %businessname%. Check the state of repair on %fixbookurl%.\nStatus code: (%statuscode%)', 'Hello %customer%, your order/repair fo %model% has been completed, come to %businessname% for take it. Thanks for choosing us.', '#b5c43d', '#f27705', '#a8a8a8', '#1ad66b', '#e20000', '#2a2d34', 'logo_nav.png?13', 'YToxOntpOjA7czo0OiJudWxsIjt9', 1, '2174');

-- --------------------------------------------------------

--
-- Table structure for table `oggetti`
--

CREATE TABLE `oggetti` (
  `ID` int(255) NOT NULL,
  `Nominativo` varchar(255) NOT NULL,
  `ID_Nominativo` int(11) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `sms` int(1) NOT NULL DEFAULT '0',
  `Tipo` int(1) NOT NULL,
  `Guasto` text NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Modello` varchar(255) NOT NULL,
  `Pezzo` varchar(255) DEFAULT NULL,
  `Anticipo` int(11) NOT NULL,
  `Prezzo` int(255) NOT NULL,
  `dataApertura` datetime NOT NULL,
  `dataChiusura` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '3',
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
(9, 'Thero Lerasa', 6, '74365485', 0, 2, 'Engine servicing', 'Car Service', 'Toyota Hilux', '', 500, 1200, '2021-06-04 15:15:16', NULL, 0, 'Prefers a drop servicing.\nModel 2019\n', 'hilux2019', '{\"6e756c6c\":\"\"}');

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `impostazioni`
--
ALTER TABLE `impostazioni`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oggetti`
--
ALTER TABLE `oggetti`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
