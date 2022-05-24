-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 mai 2022 à 14:37
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
-- Base de données : `fcpro_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `IDAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` char(30) NOT NULL,
  `Prenom` char(30) NOT NULL,
  `AdresseMail` varchar(30) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Pseudonyme` varchar(50) NOT NULL,
  PRIMARY KEY (`IDAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`IDAdmin`, `Nom`, `Prenom`, `AdresseMail`, `MotDePasse`, `Telephone`, `Pseudonyme`) VALUES
(5, 'Hebert', 'Alexia', 'Hebert.Alexia@gmail.com', 'fe5c7851fd4139d176190e117d901e96ffe856008a8a51cc421384704f3e4c1f', '618465212', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

DROP TABLE IF EXISTS `evaluations`;
CREATE TABLE IF NOT EXISTS `evaluations` (
  `IDEva` int(11) NOT NULL AUTO_INCREMENT,
  `Code_Forma` char(30) NOT NULL,
  `Nbr_Pers` int(30) NOT NULL,
  `Eval` varchar(30) NOT NULL,
  `Commentaire` char(30) NOT NULL,
  PRIMARY KEY (`IDEva`),
  KEY `Code_Forma` (`Code_Forma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Code_Forma` char(30) NOT NULL,
  `DateDebut` date NOT NULL,
  `Duree` int(30) NOT NULL,
  `NbPlace` int(30) NOT NULL,
  `HeureDebut` time NOT NULL,
  `NomFormation` text NOT NULL,
  `Lien` varchar(250) NOT NULL DEFAULT '',
  `Presentation` text NOT NULL,
  `Formateur` text,
  PRIMARY KEY (`Code_Forma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`Code_Forma`, `DateDebut`, `Duree`, `NbPlace`, `HeureDebut`, `NomFormation`, `Lien`, `Presentation`, `Formateur`) VALUES
('1', '0000-00-00', 2, 150, '00:00:10', 'Comment utiliser exel', '', '', NULL),
('25', '0000-00-00', 123, 23, '00:23:25', '232', 'kuriboh.png', '111', NULL),
('4', '2022-04-05', 200, 200, '00:02:00', '200', '', 'mm', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDutilisayeur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` char(30) NOT NULL,
  `Prenom` char(30) NOT NULL,
  `AdresseMail` varchar(30) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Pseudonyme` varchar(50) NOT NULL,
  PRIMARY KEY (`IDutilisayeur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_ibfk_1` FOREIGN KEY (`Code_Forma`) REFERENCES `formation` (`Code_Forma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
