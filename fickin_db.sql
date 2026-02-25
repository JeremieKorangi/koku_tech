-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Feb 25, 2026 alle 19:34
-- Versione del server: 8.3.0
-- Versione PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fickin_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` datetime NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `type_media` enum('image','video') DEFAULT 'image',
  `chemin_media` varchar(500) NOT NULL,
  `image_apercu` varchar(500) DEFAULT NULL,
  `statut` enum('brouillon','publie') DEFAULT 'brouillon',
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `contenu`, `date_publication`, `categorie`, `type_media`, `chemin_media`, `image_apercu`, `statut`, `date_creation`) VALUES
(1, 'SIMK25 : le rendez-vous de l\'excellence congolaise !', 'Sous l\'impulsion du Chef de l\'État, Félix Antoine Tshisekedi, la 9ᵉ édition du Salon International Multisectoriel de Kinshasa s\'impose comme un rendez-vous stratégique de l\'économie congolaise...', '2025-10-25 10:00:00', 'Culture & Organisation', 'video', 'assets/img/blog/salon25_pub.mp4', 'assets/img/blog/stand-1.jpg', 'publie', '2026-02-25 19:11:12'),
(2, 'NEWS: Salon International Multisectoriel FICKIN25 – le DG Hon. Didier KABAMPELE fait le point.', 'Du 1er au 5 novembre 2025 se tiendra la 9ᵉ édition du SIMK 2025, placée sous le thème : \"Commerce général entre la RDC et l\'Égypte : défis ou opportunités ?\"', '2025-10-20 14:30:00', 'Culture & Organisation', 'video', 'assets/img/blog/salon25_video.mp4', 'assets/img/blog/stand-1.jpg', 'publie', '2026-02-25 19:11:12'),
(3, 'La modernisation de la FICKIN c\'est maintenant!', 'La FICKIN dispose désormais de stands modernes, conçus pour offrir un espace optimal d\'exposition, de rencontre et de valorisation des produits et services.', '2025-09-02 09:15:00', 'Innovation & Infrastructure', 'image', 'assets/img/blog/stand-1.jpg', NULL, 'publie', '2026-02-25 19:11:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
