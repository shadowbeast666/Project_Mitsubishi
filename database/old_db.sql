-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2017, 20:08
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `uzytkownicy`
--
CREATE DATABASE IF NOT EXISTS `uzytkownicy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uzytkownicy`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rejestracja`
--

CREATE TABLE `rejestracja` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(100) NOT NULL,
  `Nazwisko` varchar(100) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Haslo` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Data_ur` date NOT NULL,
  `Adres` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `rejestracja`
--

INSERT INTO `rejestracja` (`Id`, `Imie`, `Nazwisko`, `Login`, `Haslo`, `Email`, `Data_ur`, `Adres`) VALUES
(26, 'Dfafdsfds', 'Fdsdsfsdfsd', 'marcin123', 'cafdee69decc07c0f1164c2de578d365', 'qw@qw.qw', '2011-12-01', '::1'),
(27, 'Test', 'Testn', 'qwe123', 'cafdee69decc07c0f1164c2de578d365', 'test@test.pl', '2011-12-08', '::1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `rejestracja`
--
ALTER TABLE `rejestracja`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `rejestracja`
--
ALTER TABLE `rejestracja`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

GRANT ALL PRIVILEGES ON *.* TO 'admin_projektu'@'localhost' IDENTIFIED BY PASSWORD '*546079A82573F11FB20070D6157E0B5290D1C2DE' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `uzytkownicy`.* TO 'admin_projektu'@'localhost' WITH GRANT OPTION;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
