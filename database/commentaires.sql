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
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_article`, `auteur`, `commentaire`, `date_commentaire`, `id_membre`) VALUES
(1, 8, 'Emmanuel MACRON', 'Super Jahia ! tu as raison de fatiguer ton Papa avec toutes ces randos, ca lui fait du bien à sa couenne...', '2020-04-01 20:37:40', 0),
(5, 7, 'Romain', 'Super la video, bravo le montage !!!', '2020-04-03 20:26:30', 1),
(6, 6, 'Romain', 'Bien maitrisé le passage à Ngala Rocks !', '2020-04-03 20:39:45', 1),
(7, 1, 'mama', 'j adore, trop beau', '2020-04-04 22:37:57', 5),
(8, 5, 'lulu', 'Joyeux Noel les Australiens !', '2020-04-07 12:35:53', 2),
(9, 1, 'Forrest Gump', 'La vie c\'est comme un boite de chocolat, on ne sait jamais sur quoi on va tomber', '2020-04-17 09:12:27', 4),
(10, 5, 'Le père Noel', 'Ohh ohh ohhhhh !!  Joyeux Noel les enfants', '2020-04-17 09:19:03', 0),
(11, 2, 'Jamon serrano', 'No me gusta el Proscutto', '2020-04-17 09:25:14', 5),
(12, 5, 'Rudolf', 'Australia?? It\'s a long way to tipperary!!', '2020-04-22 15:00:29', 0),
(13, 7, 'Miss Paparazzi', 'the video is great but the photo is crooked ', '2020-04-22 15:07:20', 0),
(14, 8, 'Beer Belly', '20 km that\' s just a tickle in the tummy...... I am tougher than that!!', '2020-04-22 15:13:43', 0),
(15, 2, 'big cactus', 'C\'est encore long ce chemin de gravier ?', '2020-04-25 15:00:47', 0),
(16, 4, 'Taz', 'Praaapouuuaaaaproouuuutraaapocaaataaa....', '2020-04-25 15:05:36', 0),
(17, 9, 'Papa ', 'Bon Anniversaire mon Bébé yo :-)', '2020-04-26 14:28:57', 0),
(18, 7, 'TATA ELO', 'cette petite tête de canaille...', '2020-04-26 15:43:45', 10),
(19, 8, 'TATA ELO', 'c\'est qui Emmanuel Macron? !!!!!    ;-)', '2020-04-26 15:45:22', 10),
(20, 1, 'TATA ELO', 'Magnifique ! ', '2020-04-26 15:48:42', 10),
(21, 5, 'TATA ELO', 'Non mais là, désolée;  mais la star c\'est quand même le sapin de Noël... ', '2020-04-26 15:52:31', 10),
(22, 9, 'TATA ELO', 'Joyeux Premier anniversaire ma chérie... \r\net bravo à Papa pour ce jolie cadeau d\'anniversaire...', '2020-04-26 16:00:34', 10),
(23, 8, 'Tios Andrés y Blanca', 'Cuánta alegría y belleza ha aportado la pequeña a vuestras vidas.  Qué  hermosos recuerdos. No se puede ser más guapa.\r\nTodo nuestro amor a los tres.', '2020-04-26 16:18:45', 0),
(24, 6, 'Sabine', 'Jahia a appris à marcher dans l\'eau?', '2020-04-26 17:02:23', 0),
(25, 9, 'Sabine', 'Joyeux Anniversaire Jahia!\r\nJe me réjouis de faire ta connaissance en personne.\r\nMerci pour ces beaux moments', '2020-04-26 17:43:10', 0),
(26, 3, 'Jo', 'C’est un joli souvenir de vous trois', '2020-04-26 18:15:32', 14),
(27, 9, 'Grandpa', 'Superb birthday present for the whole family!!! Happy Birthday Jahia. And congratulations to Papa and Mama!', '2020-04-26 19:34:49', 13),
(28, 1, 'C’', 'C’est une bien jolie famille !\r\nÇa fait envie.On souhaiterait que ce soit toujours comme ça \r\nSoyez heureux pour longtemps \r\nAuguri', '2020-04-26 20:04:15', 0),
(29, 9, 'Mami', 'My Dear Jahia,  \r\nWhat a beautiful  &quot; My First Birthday &quot; you have little  star . I love and enjoy every second of this video and all the rest about the wonderful trips you have enjoy with mom and dad since your arrival on this planet Earth. So special and amazing memories for you; unforgettable!\r\nYour little run along the grass and your First Year Celebration Cake so nicely  prepare and  decorated with so much love by mom and dad. Everything gorgeous! \r\nAll this videos are immensely  magnificent and have  so much beauty  on them...\r\nI had such good time looking at them all that I will do it again and again just to enjoy and be happy.\r\nThank you for making me part of your time in Australia.\r\nLove you ???? much.\r\n                            Mami\r\n', '2020-04-26 21:53:01', 15),
(30, 1, 'Mami', 'I love every second of this video. Beautiful!', '2020-04-26 21:58:15', 15),
(31, 5, 'sarah', 'Moi je craque complètement!!  Une pure merveille cette petite! ', '2020-04-26 22:09:06', 16),
(32, 6, 'sarah', 'La famille sourires!!!', '2020-04-26 22:25:27', 16),
(33, 7, 'sarah', 'Merci Romain pour la plongée!! Ca faisait bien longtemps! Super boulot de montage, on s\'y croirait!!! Presque!', '2020-04-26 22:39:24', 16),
(34, 9, 'sarah', 'Bel anniversaire à toi, petite Jahia! Profitez bien, toi et tes parents de ces derniers moments au bout du monde, car ici les copains t\'attendent avec impatience... \r\nTrès heureux anniversaire à toi, et merci à tes parents d\'avoir partagé cette journée si spéciale avec nous! \r\nBon anniversaire aux parents aussi, 1 an de parent cela se célèbre! Plein de bises à vous trois, et à vite! ', '2020-04-26 23:04:16', 16),
(35, 6, 'Mama', 'this is one of my favorite photos of mi amorcito', '2020-04-27 03:02:10', 0),
(36, 9, 'Mama', 'Feliz Cumpleaños mi amorcito.  Parece mentira que haya pasado ya un año desde que llegaste a este mundo. Un año día por día de felicidad y alegría. Seguiré hechando una lagrimita cada vez que vea estos videos. Mama te quiere', '2020-04-27 03:18:10', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

