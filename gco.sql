-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 21 Juin 2013 à 23:02
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gco`
--

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
  PRIMARY KEY (`idclient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `date` date DEFAULT NULL,
  `materiel` varchar(255) DEFAULT NULL,
  `desc_travail` text,
  `travail_effectuer` longtext,
  `idtechnicien` int(11) DEFAULT NULL,
  `lieu` int(11) DEFAULT NULL,
  `heure_debut` varchar(255) DEFAULT NULL,
  `heure_fin` varchar(255) DEFAULT NULL,
  `offert` int(11) DEFAULT NULL,
  `reglement` int(11) DEFAULT NULL,
  `date_close` date DEFAULT NULL,
  PRIMARY KEY (`idintervention`),
  KEY `fk_intervention_client_idx` (`idclient`),
  KEY `fk_intervention_etat_intervention1_idx` (`etat`),
  KEY `fk_intervention_technicien1_idx` (`idtechnicien`),
  KEY `fk_intervention_lieu_intervention1_idx` (`lieu`),
  KEY `fk_intervention_reglement1_idx` (`reglement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
