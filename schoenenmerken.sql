-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 24 mrt 2017 om 11:38
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `schoenenmerken`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aantal`
--

CREATE TABLE IF NOT EXISTS `aantal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aantal` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `aantal`
--

INSERT INTO `aantal` (`id`, `aantal`) VALUES
(1, '200'),
(2, '400'),
(3, '500');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `maten`
--

CREATE TABLE IF NOT EXISTS `maten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maat` varchar(50) NOT NULL,
  `id_aantal` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_maten_aantal_idx` (`id_aantal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Gegevens worden geëxporteerd voor tabel `maten`
--

INSERT INTO `maten` (`id`, `maat`, `id_aantal`) VALUES
(11, '39', 1),
(12, '40', 2),
(13, '41', 3),
(14, '41', 2),
(15, '41', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schoenmerken`
--

CREATE TABLE IF NOT EXISTS `schoenmerken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maten` int(11) DEFAULT NULL,
  `merknaam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_schoenmerken_maten_idx` (`id_maten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `schoenmerken`
--

INSERT INTO `schoenmerken` (`id`, `id_maten`, `merknaam`) VALUES
(1, 11, 'Adidas'),
(2, 12, 'Puma'),
(3, 13, 'Nike'),
(4, 13, 'Sportive'),
(5, 15, 'Sportive');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `maten`
--
ALTER TABLE `maten`
  ADD CONSTRAINT `fk_maten_aantal` FOREIGN KEY (`id_aantal`) REFERENCES `aantal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `schoenmerken`
--
ALTER TABLE `schoenmerken`
  ADD CONSTRAINT `fk_schoenmerken_maten` FOREIGN KEY (`id_maten`) REFERENCES `maten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
