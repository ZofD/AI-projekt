-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Maj 2019, 15:20
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektkurs`
--
CREATE DATABASE IF NOT EXISTS `projektkurs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projektkurs`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id_pytania` int(11) NOT NULL,
  `id_testu` int(11) NOT NULL,
  `pytanie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `odp_pierwsza` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `odp_druga` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `odp_trzecia` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `odp_czwarta` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `poprawna odpowiedz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testy`
--

CREATE TABLE `testy` (
  `id_testu` int(11) NOT NULL,
  `nazwa_testu` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testy_uzytkownikow`
--

CREATE TABLE `testy_uzytkownikow` (
  `id_testu` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `zdany` tinyint(1) NOT NULL,
  `ilosc_podejsc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_user` int(11) NOT NULL,
  `login` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `haslo` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PESEL` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `miejscowosc` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ulica` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nr_budynku` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nr_lokalu` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kod_pocztowy` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `poczta` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imie` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nazwisko` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id_pytania`);

--
-- Indexes for table `testy`
--
ALTER TABLE `testy`
  ADD PRIMARY KEY (`id_testu`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id_pytania` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `testy`
--
ALTER TABLE `testy`
  MODIFY `id_testu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
