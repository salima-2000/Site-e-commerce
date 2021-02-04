-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 fév. 2021 à 15:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expediteur` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `subject` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(400) COLLATE utf8mb4_bin DEFAULT NULL,
  `message` text COLLATE utf8mb4_bin NOT NULL,
  `date` text COLLATE utf8mb4_bin NOT NULL,
  `etat` varchar(200) COLLATE utf8mb4_bin NOT NULL DEFAULT 'non_lu',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `expediteur`, `subject`, `email`, `message`, `date`, `etat`) VALUES
(1, 'salima zariouh', 'suggestion', 'ZARIOUH2000SALIMA@GMAIL.COM', 'hi test', 'February 2, 2021, 2:36 pm', 'lu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
