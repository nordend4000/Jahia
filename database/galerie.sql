-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 26 mai 2020 à 05:47
-- Version du serveur :  10.3.22-MariaDB-0+deb10u1
-- Version de PHP :  7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `beyon1308768`
--

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `id_galerie` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `mot` varchar(255) NOT NULL,
  `dico` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`id_galerie`, `vote`, `mot`, `dico`, `photo_name`, `word`) VALUES
(1, 0, 'Manger', 'dico1.jpg', 'one.jpg', 'Eat'),
(2, 4, 'Dormir', 'dico2.jpg', 'two.jpg', 'Sleep'),
(3, 3, 'Jouer', 'dico3.jpg', 'three.jpg', 'Play'),
(4, 2, 'Piscine', 'dico4.jpg', 'four.jpg', 'Pool'),
(5, 3, 'Fatigue', 'dico5.jpg', 'five.jpg', 'Tired'),
(6, 3, 'Grognon', 'dico6.jpg', 'six.jpg', 'Grouchy'),
(7, 0, 'Conduire', 'dico7.jpg', 'seven.jpg', 'Drive'),
(8, 0, 'Potty', 'dico8.jpg', 'eight.jpg', 'Potty'),
(9, 2, 'Champagne', 'dico9.jpg', 'nine.jpg', 'Champagne'),
(10, 5, 'Bain', 'dico10.jpg', 'ten.jpg', 'Bath'),
(11, 4, 'Zoggs', 'dico11.jpg', 'eleven.jpg', 'Zoggs'),
(12, 1, 'Passeport', 'dico12.jpg', 'twelve.jpg', 'Passport'),
(13, 0, 'Duo', 'dico13.jpg', 'thirteen.jpg', 'Duo'),
(14, 3, 'Trio', 'dico14.jpg', 'fourteen.jpg', 'Trio'),
(15, 2, 'Quartette', 'dico15.jpg', 'fiveteen.jpg', 'Quartet'),
(16, 2, 'Sextette', 'dico16.jpg', 'sixteen.jpg', 'Sextet');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id_galerie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id_galerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

