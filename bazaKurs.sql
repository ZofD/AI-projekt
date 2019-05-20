-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Maj 2019, 18:28
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
  `poprawna_odpowiedz` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`id_pytania`, `id_testu`, `pytanie`, `odp_pierwsza`, `odp_druga`, `odp_trzecia`, `odp_czwarta`, `poprawna_odpowiedz`) VALUES
(1, 1, 'Pytanie', 'Odp1', 'odp2', 'odp3', 'odp4', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testy`
--

CREATE TABLE `testy` (
  `id_testu` int(11) NOT NULL,
  `nazwa_testu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `testy`
--

INSERT INTO `testy` (`id_testu`, `nazwa_testu`) VALUES
(1, 'Present continuous'),
(2, 'Present simple');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testy_uzytkownikow`
--

CREATE TABLE `testy_uzytkownikow` (
  `id_testu` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `zdany` tinyint(1) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_user` int(11) NOT NULL,
  `login` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `haslo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_user`, `login`, `haslo`, `email`, `PESEL`, `miejscowosc`, `ulica`, `nr_budynku`, `nr_lokalu`, `kod_pocztowy`, `poczta`, `imie`, `nazwisko`) VALUES
(1, 'JanK00', '$2y$10$smMb3ZiuZeqx.tITf6HU.OIoK8ICq98n4s.Bbu0diXuqXRThxD2qu', 'jankowalski@gmail.com', '00000011111', 'Radom', 'ul. Radomska', '0', '', '00-000', 'Radom', 'Jan Kowalski', 'Kowalski');

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
  MODIFY `id_pytania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `testy`
--
ALTER TABLE `testy`
  MODIFY `id_testu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
