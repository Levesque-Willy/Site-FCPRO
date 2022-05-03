-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql-fcpro.alwaysdata.net
-- Generation Time: May 02, 2022 at 04:04 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.19

DROP DATABASE IF EXISTS fcpro_bd ;


CREATE DATABASE fcpro_bd ;

USE fcpro_bd;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcpro_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE administrateur (
  IDAdmin int(11) NOT NULL,
  Nom char(30) NOT NULL,
  Prenom char(30) NOT NULL,
  AdresseMail varchar(30) NOT NULL,
  MotDePasse varchar(50) NOT NULL,
  Telephone varchar(50) NOT NULL,
  Pseudonyme varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `administrateur`
--

INSERT INTO administrateur (IDAdmin, Nom, Prenom, AdresseMail, MotDePasse, Telephone, Pseudonyme) VALUES
(1, 'Hebert', 'Alexia', 'Hebert.Alexia@gmail.com', 'FcpR0Ndlp1', '060000000', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE evaluations (
  IDEva int(11) NOT NULL,
  Code_Forma char(30) NOT NULL,
  Nbr_Pers int(30) NOT NULL,
  Eval varchar(30) NOT NULL,
  Commentaire char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table formation
--

CREATE TABLE formation (
  Code_Forma char(30) NOT NULL,
  DateDebut date NOT NULL,
  Duree int(30) NOT NULL,
  NbPlace int(30) NOT NULL,
  HeureDebut time NOT NULL,
  NomFormation varchar(300) NOT NULL,
  Lien varchar(250) NOT NULL DEFAULT '',
  Presentation varchar(300) NOT NULL,
  FOREIGN KEY (NomFormation) REFERENCES Notes (NomFormation)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `formation`
--

INSERT INTO formation (Code_Forma, DateDebut, Duree, NbPlace, HeureDebut, NomFormation, Lien, Presentation) VALUES
('1', '0000-00-00', 2, 150, '00:00:10', 'Comment utiliser exel', '', '');

--
-- Indexes for dumped tables
--
CREATE TABLE Notes 
(	IdNotes	int		NOT NULL 	PRIMARY KEY	AUTO_INCREMENT,
	Nom		varchar(30)	NOT NULL ,
	Notes		int 	NOT NULL ,
	Avis	varchar(30)	NOT NULL,
  NomFormation varchar(30) NOT NULL

) ENGINE = InnoDB CHARACTER SET latin1 COLLATE latin1_bin;

INSERT INTO Notes
(	Nom,
	Notes,
	Avis,
  NomFormation
)
VALUES
	( 'Charpentier',	5,	'cc','Comment utiliser exel');
--
-- Indexes for table `administrateur`
--
ALTER TABLE administrateur
  ADD PRIMARY KEY (IDAdmin);

--
-- Indexes for table `evaluations`
--
ALTER TABLE evaluations
  ADD PRIMARY KEY (IDEva),
  ADD KEY Code_Forma (Code_Forma);

--
-- Indexes for table `formation`
--
ALTER TABLE formation
  ADD PRIMARY KEY (`Code_Forma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE administrateur
  MODIFY IDAdmin int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE evaluations
  MODIFY IDEva int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluations`
--
ALTER TABLE evaluations
  ADD CONSTRAINT evaluations_ibfk_1 FOREIGN KEY (Code_Forma) REFERENCES formation (Code_Forma);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
