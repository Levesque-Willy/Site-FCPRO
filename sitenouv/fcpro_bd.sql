-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 mai 2022 à 09:03
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
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `AdresseMail` varchar(50) DEFAULT NULL,
  `MotDePasse` varchar(255) DEFAULT NULL,
  `Telephone` varchar(50) DEFAULT NULL,
  `Pseudonyme` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`IDAdmin`, `Nom`, `Prenom`, `AdresseMail`, `MotDePasse`, `Telephone`, `Pseudonyme`) VALUES
(2, 'Hebert', 'Alexia', 'Hebert.Alexia@gmail.com', 'fe5c7851fd4139d176190e117d901e96ffe856008a8a51cc421384704f3e4c1f', '654212587', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

DROP TABLE IF EXISTS `evaluations`;
CREATE TABLE IF NOT EXISTS `evaluations` (
  `IDEva` int(11) NOT NULL AUTO_INCREMENT,
  `CodeForma` char(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Eval` varchar(30) NOT NULL,
  `Commentaire` char(30) NOT NULL,
  PRIMARY KEY (`IDEva`),
  KEY `Code_Forma` (`CodeForma`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evaluations`
--

INSERT INTO `evaluations` (`IDEva`, `CodeForma`, `Nom`, `Eval`, `Commentaire`) VALUES
(1, '1', 'c bdgb', '3', 'bdfbd'),
(2, '16', 'Nom', '3', 'ffevfrv'),
(3, '16', 'Nom', '3', '\"fdrfref'),
(4, '102', 'DUPONT', '3', 'zfzgfguizgfzgf');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `IdFormateur` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdFormateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`IdFormateur`, `Nom`, `Prenom`, `Tel`) VALUES
(1, 'DUPONT', 'Philippe', 606060606);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `CodeForma` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` varchar(30) DEFAULT NULL,
  `Duree` varchar(50) DEFAULT NULL,
  `NbPlace` int(11) DEFAULT NULL,
  `HeureDebut` time DEFAULT NULL,
  `NomFormation` varchar(50) DEFAULT NULL,
  `Lien` varchar(50) DEFAULT NULL,
  `Presentation` text,
  `Nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CodeForma`),
  KEY `Nom` (`Nom`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`CodeForma`, `DateDebut`, `Duree`, `NbPlace`, `HeureDebut`, `NomFormation`, `Lien`, `Presentation`, `Nom`) VALUES
(16, '2022-04-05', '200', 200, '00:02:00', 'BTP2', '', 'hahahaha', 'Philippe'),
(102, '05/16/2022', '12', 13, '00:10:00', 'BTP2', '', 'qddqqdqd', 'Philippe'),
(104, '05/17/2022', '12', 13, '00:10:00', 'DUPONT', '', 'qddqqdqd', 'Philippe DUPONT');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDutilisayeur`, `Nom`, `Prenom`, `AdresseMail`, `MotDePasse`, `Telephone`, `Pseudonyme`) VALUES
(2, 'nogueire', 'clement', 'nogueire.clement@gmail.com', '6a8a24866b40d40fa27cc70747d37633b8af81c61347ef16890e6af97816b199', '614586324', 'utilisateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
