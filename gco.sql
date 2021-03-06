-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 21 Septembre 2013 à 16:32
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gco`
--
CREATE DATABASE IF NOT EXISTS `gco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gco`;

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `idagence` int(11) NOT NULL AUTO_INCREMENT,
  `raison_social` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `siret` varchar(255) NOT NULL,
  `ape` varchar(255) NOT NULL,
  `num_tva` varchar(255) NOT NULL,
  PRIMARY KEY (`idagence`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`idagence`, `raison_social`, `adresse1`, `adresse2`, `cp`, `ville`, `telephone`, `siret`, `ape`, `num_tva`) VALUES
(1, 'LSI INFORMATIQUE', '35 Avenue de Bretagne', '', '85100', 'LES SABLES D OLONNE', '02 51 23 24 24', '753 865 229 00011', '4741Z', 'FR56 753 865 229');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse1` varchar(255) DEFAULT NULL,
  `adresse2` varchar(255) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `portable` varchar(255) DEFAULT NULL,
  `telephone2` varchar(255) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `telephone`, `mail`, `portable`, `telephone2`) VALUES
(1, 'MOCKELYN', 'Maxime', '3 Rue du Grand Coin', NULL, '85100', 'LES SABLES D OLONNE', '02 51 95 25 95', 'maxservea@orange.fr', '06 33 13 43 30\r\n', '');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `idcontrat` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `type_contrat` int(11) DEFAULT NULL,
  `frequence` int(11) DEFAULT NULL,
  `nb_deplacement` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `materiel` longtext,
  `signé` int(11) DEFAULT NULL,
  `pvht` varchar(255) DEFAULT NULL,
  `pvttc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcontrat`),
  KEY `fk_contrat_client1_idx` (`idclient`),
  KEY `fk_contrat_type_contrat1_idx` (`type_contrat`),
  KEY `fk_contrat_frequence1_idx` (`frequence`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etat_intervention`
--

CREATE TABLE IF NOT EXISTS `etat_intervention` (
  `idetat_intervention` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idetat_intervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `frequence`
--

CREATE TABLE IF NOT EXISTS `frequence` (
  `idfrequence` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idfrequence`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `idintervention` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `materiel` varchar(255) DEFAULT NULL,
  `desc_travail` text,
  `travail_effectuer` longtext,
  `date_close` date DEFAULT NULL,
  `marque_telephone` varchar(255) NOT NULL,
  `serie_telephone` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `batterie` int(1) NOT NULL,
  `carte_sim` int(1) NOT NULL,
  `chargeur` int(1) NOT NULL,
  `tel_demarre` int(1) NOT NULL,
  `code_sim` varchar(255) NOT NULL,
  `code_util` varchar(255) NOT NULL,
  PRIMARY KEY (`idintervention`),
  KEY `fk_intervention_client_idx` (`idclient`),
  KEY `fk_intervention_etat_intervention1_idx` (`etat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`idintervention`, `idclient`, `etat`, `date`, `materiel`, `desc_travail`, `travail_effectuer`, `date_close`, `marque_telephone`, `serie_telephone`, `imei`, `batterie`, `carte_sim`, `chargeur`, `tel_demarre`, `code_sim`, `code_util`) VALUES
(1, 1, 1, '2013-09-20', 'TELEPHONE', 'DEBLOCAGE TELEPHONE', NULL, NULL, 'SAMSUNG', 'GT-N7105 GALAXY NOTE 2', '354792054834449\r\n', 1, 1, 0, 1, '0000', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `lieu_intervention`
--

CREATE TABLE IF NOT EXISTS `lieu_intervention` (
  `idlieu_intervention` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idlieu_intervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE IF NOT EXISTS `reglement` (
  `idreglement` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idreglement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `idtechnicien` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtechnicien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_contrat`
--

CREATE TABLE IF NOT EXISTS `type_contrat` (
  `idtype_contrat` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtype_contrat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `login`, `password`) VALUES
(2, 'Administrateur', '201c238c414b3f9d7bec9bb76567f65a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
