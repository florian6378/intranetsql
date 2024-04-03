-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 mars 2024 à 09:29
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE projetgmaeutilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifiant VARCHAR(50) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet gmae`
--

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE IF NOT EXISTS `voyage` (
  `id_voyage` int NOT NULL AUTO_INCREMENT,
  `id_categorie` text NOT NULL,
  `id_formule` int NOT NULL,
  `id_title` text NOT NULL,
  `id_image-url` int NOT NULL,
  `id_description` text NOT NULL,
  `id_date-debut` datetime NOT NULL,
  `id_date-fin` datetime NOT NULL,
  `id_price` int NOT NULL,
  PRIMARY KEY (`id_voyage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

