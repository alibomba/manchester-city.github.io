-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Maj 2022, 14:48
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `manchester_city`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze_1`
--

CREATE TABLE `komentarze_1` (
  `id` int(11) NOT NULL,
  `autor` text COLLATE utf8mb4_polish_ci NOT NULL,
  `godzina` datetime NOT NULL,
  `tresc` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `komentarze_1`
--

INSERT INTO `komentarze_1` (`id`, `autor`, `godzina`, `tresc`) VALUES
(8, 'Wojciech', '2022-05-27 08:14:59', 'Pozdrawiam z rodzinka'),
(9, 'Wojciech', '2022-05-27 08:46:31', 'komentarz'),
(10, 'Wojciech', '2022-05-27 08:46:37', 'super news'),
(11, 'Wojciech', '2022-05-27 08:46:47', 'lecimy po lige mistrzow'),
(12, 'Wojciech', '2022-05-27 08:46:51', 'vamos city'),
(13, 'alibomba', '2022-05-27 11:41:20', 'jest w pyte'),
(14, 'alibomba', '2022-05-27 11:44:59', 'wasdwasd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konta`
--

CREATE TABLE `konta` (
  `id` int(11) NOT NULL,
  `nick` text COLLATE utf8mb4_polish_ci NOT NULL,
  `email` text COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `konta`
--

INSERT INTO `konta` (`id`, `nick`, `email`, `haslo`) VALUES
(10, 'Wojciech', 'ali.gamer@op.pl', '$2y$10$/MiM0I2JJ4v9o.tJouKIBu1Ca7PHMLUo9FCxYG5TQfVQolxZH7AGa'),
(11, 'alibomba', 'wojci.bro@gmail.com', '$2y$10$rUy7P04DkQCumYk2K/KeBubCy4Yk1a9GZeQ3Osj3AUtjS.WV80JBW');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawodnicy`
--

CREATE TABLE `zawodnicy` (
  `id` int(11) NOT NULL,
  `numer` varchar(5) COLLATE utf8mb4_polish_ci NOT NULL,
  `zdjecie` text COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8mb4_polish_ci NOT NULL,
  `urodziny` text COLLATE utf8mb4_polish_ci NOT NULL,
  `narodowosc` text COLLATE utf8mb4_polish_ci NOT NULL,
  `flaga` text COLLATE utf8mb4_polish_ci NOT NULL,
  `pozycja` text COLLATE utf8mb4_polish_ci NOT NULL,
  `w_klubie_od` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wartosc_rynkowa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `instagram` text COLLATE utf8mb4_polish_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zawodnicy`
--

INSERT INTO `zawodnicy` (`id`, `numer`, `zdjecie`, `nazwisko`, `urodziny`, `narodowosc`, `flaga`, `pozycja`, `w_klubie_od`, `wartosc_rynkowa`, `instagram`, `twitter`) VALUES
(1, '#13', 'fill', 'ZACK STEFFEN', '2 KWI 1995', 'STANY ZJEDNOCZONE', 'fill', 'BRAMKARZ', '1 LIP 2019', '6,00 mln', 'fill', 'fill'),
(2, '#31', 'fill', 'EDERSON', '17 SIE 1993', 'BRAZYLIA', 'fill', 'BRAMKARZ', '1 LIP 2017', '50,00 mln', 'fill', 'fill'),
(3, '#33', 'fill', 'SCOTT CARSON', '25 WRZ 1985', 'ANGLIA', 'fill', 'BRAMKARZ', '8 SIE 2019', '300 tys.', 'fill', 'fill'),
(4, '#2', 'fill', 'KYLE WALKER', '28 MAJ 1990', 'ANGLIA', 'fill', 'OBROŃCA', '14 LIP 2017', '25,00 mln', 'fill', 'fill'),
(5, '#3', 'fill', 'RUBEN DIAS', '14 MAJ 1997', 'PORTUGALIA', 'fill', 'OBROŃCA', '29 WRZ 2020', '75,00 mln', 'fill', 'fill'),
(6, '#5', 'fill', 'JOHN STONES', '28 MAJ 1994', 'ANGLIA', 'fill', 'OBROŃCA', '9 SIE 2016', '28,00 mln', 'fill', 'fill'),
(7, '#6', 'fill', 'NATHAN AKE', '18 LUT 1995', 'HOLANDIA', 'fill', 'OBROŃCA', '5 SIE 2020', '25,00 mln', 'fill', 'fill'),
(8, '#11', 'fill', 'OLEKSANDR ZINCHENKO', '15 GRU 1996', 'UKRAINA', 'fill', 'OBROŃCA', '4 CZE 2016', '25,00 mln', 'fill', 'fill'),
(9, '#14', 'fill', 'AYMERIC LAPORTE', '27 MAJ 1994', 'HISZPANIA', 'fill', 'OBROŃCA', '30 STY 2018', '45,00 mln', 'fill', 'fill'),
(10, '#27', 'fill', 'JOÃO CANCELO', '27 MAJ 1994', 'PORTUGALIA', 'fill', 'OBROŃCA', '7 SIE 2019', '60,00 mln', 'fill', 'fill'),
(11, '#8', 'fill', 'ILKAY GUNDOGAN', '24 PAŹ 1990', 'NIEMCY', 'fill', 'POMOCNIK', '1 LIP 2016', '35,00 mln', 'fill', 'fill'),
(12, '#16', 'fill', 'RODRIGO', '22 CZE 1996', 'HISZPANIA', 'fill', 'POMOCNIK', '4 LIP 2019', '70,00 mln', 'fill', 'fill'),
(13, '#17', 'fill', 'KEVIN DE BRYUNE', '28 CZE 1991', 'BELGIA', 'fill', 'POMOCNIK', '30 SIE 2015', '90,00 mln', 'fill', 'fill'),
(14, '#20', 'fill', 'BERNARDO SILVA', '10 SIE 1994', 'PORTUGALIA', 'fill', 'POMOCNIK', '1 LIP 2017', '75,00 mln', 'fill', 'fill'),
(15, '#25', 'fill', 'FERNANDINHO', '4 MAJ 1985', 'BRAZYLIA', 'fill', 'POMOCNIK', '1 LIP 2013', '2,00 mln', 'fill', 'fill'),
(16, '#47', 'fill', 'PHIL FODEN', '28 MAJ 2000', 'ANGLIA', 'fill', 'POMOCNIK', '1 LIP 2016', '90,00 mln', 'fill', 'fill'),
(17, '#80', 'fill', 'COLE PALMER', '6 MAJ 2002', 'ANGLIA', 'fill', 'POMOCNIK', '24 KWI 2018', '3,00 mln', 'fill', 'fill'),
(18, '#7', 'fill', 'RAHEEM STERLING', '8 GRU 1994', 'ANGLIA', 'fill', 'NAPASTNIK', '14 LIP 2015', '85,00 mln', 'fill', 'fill'),
(19, '#9', 'fill', 'GABRIEL JESUS', '3 KWI 1997', 'BRAZYLIA', 'fill', 'NAPASTNIK', '3 SIE 2016', '50,00 mln', 'fill', 'fill'),
(20, '#26', 'fill', 'RIYAD MAHREZ', '21 LUT 1991', 'ALGIERIA', 'fill', 'NAPASTNIK', '10 LIP 2018', '40,00 mln', 'fill', 'fill'),
(21, '#10', 'fill', 'JACK GREALISH', '10 WRZ 1995', 'ANGLIA', 'fill', 'NAPASTNIK', '5 SIE 2021', '80,00 mln', 'fill', 'fill');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `komentarze_1`
--
ALTER TABLE `komentarze_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `konta`
--
ALTER TABLE `konta`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zawodnicy`
--
ALTER TABLE `zawodnicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `komentarze_1`
--
ALTER TABLE `komentarze_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `konta`
--
ALTER TABLE `konta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `zawodnicy`
--
ALTER TABLE `zawodnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
