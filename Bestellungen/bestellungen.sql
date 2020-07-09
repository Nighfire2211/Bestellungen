-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Jun 2020 um 13:26
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `detailhaendler`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellungen`
--

CREATE TABLE `bestellungen` (
  `id` int(11) NOT NULL,
  `Kundenname` varchar(55) DEFAULT NULL,
  `Ort` varchar(35) DEFAULT NULL,
  `Bestellnummer` int(10) DEFAULT NULL,
  `Bestelldatum` date DEFAULT NULL,
  `Menge` int(10) DEFAULT NULL,
  `Einheit` varchar(20) DEFAULT NULL,
  `Artikelname` varchar(35) DEFAULT NULL,
  `Einheitspreis` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `bestellungen`
--

INSERT INTO `bestellungen` (`id`, `Kundenname`, `Ort`, `Bestellnummer`, `Bestelldatum`, `Menge`, `Einheit`, `Artikelname`, `Einheitspreis`) VALUES
(1, 'Migros', 'Bülach', 1001, '2020-01-06', 50, 'Liter', 'Milchdrink', '0.80'),
(2, 'Migros', 'Bülach', 1001, '2020-01-06', 20, 'Liter', 'Milch Laktosefrei', '0.95'),
(3, 'Migros', 'Bülach', 1001, '2020-01-06', 10, 'kg', 'Butter', '2.20'),
(4, 'Coop', 'Bsserdorf', 1002, '2020-01-05', 30, 'Liter', 'Vollmilch', '0.80'),
(5, 'Lidl', 'Kloten', 1003, '2020-01-08', 20, 'Stück', 'Joghurt Nature', '0.60'),
(6, 'Lidl', 'Kloten', 1003, '2020-01-08', 20, 'Stück', 'Joghurt Erdbeere', '0.60'),
(7, 'Migros', 'Bülach', 1004, '2020-01-07', 20, 'Liter', 'Milch ', '0.80');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
