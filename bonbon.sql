-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Lun 03 Mars 2014 à 16:09
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bonbons`
--
create database bonbons ;
use bonbons ;

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=23 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
(1, 'bananes', '0.48', 'Images/bananes.jpg'),
(2, 'chamallow', '0.48', 'Images/chamallow.jpg'),
(3, 'coca', '0.48', 'Images/coca.jpg'),
(4, 'colorado', '0.48', 'Images/colorado.jpg'),
(5, 'fruikipik', '0.55', 'Images/fruikipik.jpg'),
(6, 'dragolo', '0.48', 'Images/dragolo.jpg'),
(7, 'world', '0.48', 'Images/world.jpg'),
(8, 'happy', '0.48', 'Images/happy.jpg'),
(9, 'melange', '0.48', 'Images/melange.jpg'),
(10, 'miami', '0.48', 'Images/miami.jpg'),
(11, 'nounours', '0.48', 'Images/nounours.jpg'),
(12, 'oeufs', '0.48', 'Images/oeufs.jpg'),
(13, 'rainbow', '0.48', 'Images/rainbow.jpg'),
(14, 'shtroumpf', '0.48', 'Images/shtroumpf.jpg'),
(15, 'frites', '0.45', 'Images/frites.jpg'),
(16, 'reglisses', '0.53', 'Images/reglisse.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
