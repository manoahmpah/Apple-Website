-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 23 Octobre 2022 à 07:08
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `apple`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
`Id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) DEFAULT NULL,
  `type_produit` varchar(50) DEFAULT NULL,
  `details` text,
  `prix` decimal(15,2) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `nom_produit`, `type_produit`, `details`, `prix`) VALUES
(1, 'airpods 2', 'airpods', 'Jusqu’à 5 h d’écoute sur une seule charge', '129.00'),
(2, 'airpods 3', 'airpods', '6 heures d’écoute en une seule charge.\r\nJusqu’à 30 heures d’écoute au total avec le boîtier ', '209.00'),
(3, ' AirPods Max', 'airpods', 'Jusqu’à 20 heures d’écoute en une seule charge avec le mode Réduction active du bruit ou Transparence activé\r\nJusqu’à 20 heures de lecture vidéo sur une seule charge avec l’Audio spatial activé4\r\nJusqu’à 20 heures de conversation en une seule charge\r\nEnviron 1,5 heure d’écoute en 5 minutes de charge', '629.00'),
(6, 'iPhone 13', 'Iphone', '6,1″ ou 5,4″\r\n\r\nÉcran Super Retina XDRnote de bas de page\r\n\r\nPuce A15 Bionic\r\navec GPU 4 cœurs\r\nFace ID\r\nConnectivité cellulaire 5G ultra-rapidenote de bas de page\r\n', '909.00'),
(7, ' iPad Air', 'iPad', 'Puce Apple M1\r\nCPU 8 cœurs\r\nGPU 8 cœurs\r\nNeural Engine Apple\r\n8 Go de RAM\r\n\r\niPadOS 15\r\niPadOS intègre de puissantes fonctionnalités ainsi que des apps conçues pour exploiter les capacités uniques de l’iPad.', '1039.00'),
(4, 'iPhone 14', 'Iphone', 'Écran Super Retina XDR\r\nOLED tout écran de 6,1 pouces (diagonale)\r\nRésolution de 2 532 x 1 170 pixels à 460 ppp\r\n\r\nCapacité\r\n128 Go\r\n256 Go\r\n512 Go\r\n\r\nPuce A15 Bionic\r\nCPU 6 cœurs avec 2 cœurs de performance et 4 cœurs à haute efficacité énergétique\r\nGPU 5 cœurs\r\nNeural Engine 16 cœurs\r\n', '1019.00'),
(8, ' iPad', 'iPad', '64 Go\r\n256 Go\r\niPad\r\nCâble Lightning vers USB‑C\r\nAdaptateur secteur USB‑C 20 W\r\nSortie vidéo numérique\r\n\r\nSorties VGA, HDMI et DVI prises en charge à l’aide d’adaptateurs (vendus séparément)\r\n\r\nRecopie vidéo\r\n\r\nAirPlay pour la recopie vidéo, les photos et la sortie vidéo vers Apple TV (2ᵉ génération ou ultérieure) ou téléviseur connecté compatible avec AirPlay 2\r\nRecopie vidéo et sortie vidéo : jusqu’à 1080p via l’Adaptateur Lightning AV numérique et l’Adaptateur Lightning vers VGA (adaptateurs vendus séparément)', '389.00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
 ADD PRIMARY KEY (`Id_produit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
MODIFY `Id_produit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
