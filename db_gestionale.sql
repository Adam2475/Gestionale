-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 05, 2024 alle 20:30
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gestionale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `gestionale`
--

CREATE TABLE `gestionale` (
  `agente` varchar(20) NOT NULL,
  `nome-cliente` varchar(20) NOT NULL,
  `cognome-cliente` varchar(30) NOT NULL,
  `stato` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `gestionale`
--

INSERT INTO `gestionale` (`agente`, `nome-cliente`, `cognome-cliente`, `stato`, `id`) VALUES
('kevin', 'adam', 'passaretti', 'elaborazio', 3),
('kevin', 'anna', 'grygutis', 'elaborazio', 4),
('', '', '', 'attivo', 5),
('kevin', 'mala', 'psad', 'attivo', 6),
('kevin', 'giulia', 'cermitani', 'ko', 7),
('agente', 'nome cliente', 'cognome cliente', 'attivo', 8),
('agente', 'nome cliente', 'cognome cliente', 'attivo', 9);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `gestionale`
--
ALTER TABLE `gestionale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `gestionale`
--
ALTER TABLE `gestionale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
