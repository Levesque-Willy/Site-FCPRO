-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 mai 2022 à 08:05
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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
  `CodeForma` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Eval` varchar(30) NOT NULL,
  `Commentaire` char(30) NOT NULL,
  PRIMARY KEY (`IDEva`),
  KEY `CodeForma` (`CodeForma`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evaluations`
--

INSERT INTO `evaluations` (`IDEva`, `CodeForma`, `Nom`, `Eval`, `Commentaire`) VALUES
(1, 1, 'aefeaoifhe', '4', 'qflkqnfkl'),
(2, 4, 'gzlbgzlkjb', '3', 'sdovnzoivn'),
(3, 25, 'zofzn', '3', 'zofnzfo'),
(4, 1, 'efzefoi', '5', 'zenfzoign'),
(5, 1, 'cc', '1', 'non'),
(6, 1, 'cc', '5', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `IdFormateur` int(11) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Telephone` varchar(30) NOT NULL,
  PRIMARY KEY (`IdFormateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`IdFormateur`, `Prenom`, `Nom`, `Mail`, `Telephone`) VALUES
(1, 'Gerard', 'Herbert', 'Gerard.Herbert@gmail.com', '06.07.08.09.10');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `CodeForma` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `Duree` int(30) NOT NULL,
  `NbPlace` int(30) NOT NULL,
  `HeureDebut` time NOT NULL,
  `NomFormation` text NOT NULL,
  `Lien` varchar(250) NOT NULL DEFAULT '',
  `Presentation` text NOT NULL,
  `IdFormateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`CodeForma`),
  KEY `IdFormateur` (`IdFormateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`CodeForma`, `DateDebut`, `Duree`, `NbPlace`, `HeureDebut`, `NomFormation`, `Lien`, `Presentation`, `IdFormateur`) VALUES
(1, '0000-00-00', 2, 150, '00:00:10', 'Comment utiliser exel', '', '', 1),
(4, '2022-04-05', 200, 200, '00:02:00', '200', '', 'mm', 1),
(25, '0000-00-00', 123, 23, '00:23:25', '232', 'kuriboh.png', '111', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDutilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` char(30) NOT NULL,
  `Prenom` char(30) NOT NULL,
  `AdresseMail` varchar(30) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Pseudonyme` varchar(50) NOT NULL,
  PRIMARY KEY (`IDutilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_ibfk_1` FOREIGN KEY (`CodeForma`) REFERENCES `formation` (`CodeForma`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`IdFormateur`) REFERENCES `formateur` (`IdFormateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
