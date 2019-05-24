-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Maj 2019, 14:36
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
CREATE DATABASE IF NOT EXISTS `projektkurs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
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
(1, 1, 'I ... icecreams!', 'likes', 'is like', 'likying', 'none of the above', '3'),
(2, 1, 'The meals ... very expensive.', 'isn''t', 'aren''t', 'not are', 'none of the above', '1'),
(3, 1, '... I invited to Jim''s party?', 'Amn''t', 'Don''t', 'Aren''t', 'none of the above', '2'),
(4, 1, 'The shoe shop ... the shoes I saw last week.', 'doesn''t have got', 'hasn''t got', 'doesn''t got', 'none of the above', '1'),
(5, 1, 'I''m exhausted. I''m going to ... a sleep for half an hour.', 'have', 'be', 'have got', 'none of the above', '0'),
(6, 1, 'Don''t bother to invite Gerry - he ... musicals!', 'doesn''t like', 'doesn''t likes', 'isn''t like', 'none of the above', '0'),
(7, 1, 'I really like Leona Lewis - she ... so well.', 'sing', 'is sing', 'sings', 'none of the above', '2'),
(8, 1, 'Most children ... enough green vegetables.', 'eatn''t', 'dont''eat', 'not eat', 'none of the above', '1'),
(9, 1, 'I ... on a colour printer, but mine is broken at the moment.', 'am usually print', 'print usually', 'usually print', 'none of the above', '2'),
(10, 1, '... on the report for Grant Brothers at the moment?', 'Are you work', 'You work', 'Are you working', 'none of the above', '2'),
(11, 1, 'Is Alana coming this evening? No, she ... at home with the kids.', 'staying', 'stays', 'is staying', 'none of the above', '2'),
(12, 1, 'Let''s put the heating on. The nights ... colder now.', 'are getting', 'get', 'is getting', 'none of the above', '0'),
(13, 1, 'Can u tell the childern to be quiet? They ... !', 'argue always', 'are always arguing', 'always argue', 'none of the above', '1'),
(14, 1, 'In this picture, the woman ... a car that''s broken down.', 'is reparing', 'is repair', 'repairs', 'none of the above', '0'),
(15, 1, 'A student techer ... our class while Ms Bennett has her baby.', 'takes', 'does take', 'is taking', 'none of the above', '2'),
(16, 1, 'What ... when you''re in bed at night?', 'you usually read', 'do you usually read', 'are you usually reading', 'none of the above', '1'),
(17, 1, 'The film ... with a car crash, and then ......', 'is open', 'opens', 'is opening', 'none of the above', '1'),
(18, 1, 'Older people ... more help from the government this year.', 'get', 'are get', 'are getting', 'none of the above', '2'),
(19, 1, 'Is this the soup for the dinner party tonight? Mmm, it ... delicious!', 'tastes', 'is tasting', 'is tasty', 'none of the above', '0'),
(20, 1, '... the date of Dan''s wedding anniversary? I''ve forgotten it.', 'Do you remember', 'Are you remembering', 'You remember', 'none of the above', '0'),
(21, 1, 'We don''t need to rush - this bus ... late!', 'is always', 'always is', 'always', 'none of the above', '0');

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
  `zdany` int(1) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `wynik` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `testy_uzytkownikow`
--

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
(1, 'hasloJestTakeSamo', '$2y$10$aWCahf5htKXA4intm6S5W.G91dqomr6QnKg/yTkA/WoEPJLaTPAjq', 'kobieta@interia.pl', '12345678901', 'Warszawa', 'Podmiejska', '80', '80', '80-800', 'Warszawa', 'Konstancja', 'Mrozek'),
(2, 'JanK00', '$2y$10$3XAnfTWXTE2u2BRS2IdgeeddjyOxdF9ubWoK.C86O..qCOI63NVNC', 'jankowalski@gmail.com', '00000011111', 'Radom', 'ul. Radomska', '21', '', '00-000', 'Radom', 'Jan', 'Kowalski');

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
  MODIFY `id_pytania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT dla tabeli `testy`
--
ALTER TABLE `testy`
  MODIFY `id_testu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
