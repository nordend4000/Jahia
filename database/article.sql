-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 26 mai 2020 à 05:46
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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre_article` varchar(255) NOT NULL,
  `contenu_article` text NOT NULL,
  `legende_media` varchar(255) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `legende_photo` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre_article`, `contenu_article`, `legende_media`, `media_name`, `legende_photo`, `photo_name`, `date_publication`, `video`) VALUES
(1, 'Faire part de Naissance ...', 'Voici le faire part de naissance que mes parents ont réalisés pour célébrer mon arrivée,<br> quoi de mieux qu\'une video ! ', '9 mois d\'attente', 'https://www.youtube.com/embed/rAXX7JCc3CQ', 'Tous mes potes les peluches', 'article_1_2.jpg', '2019-04-26', ''),
(2, 'De Darwin a Alice Springs ...', 'Mes premières vacances mes parents m\'ont emmené dans un périple en camping car sur 4000 km <br> entre les côtes tropicales du Nord de l\'Australie <br> jusqu\'au désert Rouge du centre en passant par des parcs nationaux incroyables infestés de crocodiles.<br> Ils sont fous moi j\'ai que 3 mois!!!', 'Mais en faite, ça c\'est super bien passé <br>parce que mes parents s\'occupaient bien de moi <br> et j\'étais toujours contente sauf a 19h quand j\'étais toujours dans le siege auto ...', 'article_2.jpg', 'J\'avais mes cousins qui voulaient jouer avec moi <br> mais j\'étais trop petite pour eux !', 'article_2_2.jpg', '2019-08-28', ''),
(3, 'South Stradbroke Island ...', 'On est parti 3 jours dans un apart sur une ile pour fêter la venue de ma Mame.<br>  On a pris le bateau et on a fait des balades dans la mangrove.<br>  c\'était chouette !', 'Couran Cove : c\'était le nom de la résidence', 'article_3.jpg', 'Après une belle balade, on est arrivé <br> sur la côte Pacifique avec vue sur Gold Coast', 'article_3_2.jpg', '2019-09-20', ''),
(4, 'A l\'assaut de la Tasmanie ...', 'Nous voila reparti pour un tour de 2000km,<br> pour découvrir des paysages grandioses et la richesse de la flore de cette ile unique au monde.<br> Entre plages désertes, massif montagneux et domaines viticoles <br>la Tasmanie a de quoi offrir au plus grand nombre.', 'La Tasmanie c\'est chouette mais il fait froid même au printemps,<br> à la plage il faut même un pantalon !! ', 'article_4.jpg', 'Une fleure parmi les fleures ...', 'article_4_2.jpg', '2019-11-10', ''),
(5, 'Mon premier Noel ...', 'Mon beau sapin roi des forets...<br>  En Australie le Père Noel n\'arrive pas en traineau dans la neige <br> mais il arrive en surfant une vague à la plage.<br> C\'est tout de suite plus fun...', 'Noel à Brisbane : Mes cadeaux et mon sapin', 'article_5.jpg', 'J\'ai reçu pleins de cadeaux, <br> j\'ai pas vraiment compris mais il fallait que j\'ouvre des paquets <br> et après mes parents étaient tout content !!!', 'article_5_2.jpg', '2019-12-25', ''),
(6, 'Camping a Fraser Island ...', 'On a fait 5 jours de camping à la plage.<br>  On a traversé toute l\'ile en 4x4,<br>  on s\'est baigné avec les tortues .<br> J\'ai dormi dans la tente avec mes parents et <br>  ça c\'était le mieux.', 'Les meilleurs moments à Fraser island en video', 'https://www.youtube.com/embed/B8p5I-gnMUs', 'Coucher de soleil à Waddy Point en compagnie des dingoes.', 'article_6_2.jpg', '2020-01-20', ''),
(7, 'Lord Howe Island ...', 'On est parti une semaine sur une super ile,<br>  mais on a pas une de chance a cause d\'un cyclone qui est venue aussi ! <br> On en a comme même bien profité.', 'Les meilleurs moments à Lord Howe Island en video.', 'https://www.youtube.com/embed/v6iYDc1A36Q', 'La star de la plage c\'est moi !!', 'article_7_2.jpg', '2020-02-07', ''),
(8, 'Nouvelle Zelande, l\'ile du Nord ...', 'C\'est la première fois que je vais dans un autre pays  ! <br> On a fait encore du camping car et je me suis baigné dans des sources d\'eau chaude, <br> c\'était génial.<br> \r\nParfois ca sentait l\'oeuf pourri mais apparement c\'est normal c\'est la géothermie...', 'Video de notre périple avec des images magnifiques du Tongariro Alpine Crossing : <br> C\'est une super rando de 20km à travers des volcans actifs.<br> Franchement ca vaut le cout et c\'est pas du tout fatiguant ...  sur le dos de mon Papa.', 'https://www.youtube.com/embed/Nw6IDY2yCkU', 'Jahia en Nouvelle Zélande sur le dos d\'un drôle d\'animal.', 'article_8_2.jpg', '2020-03-15', ''),
(9, 'Mon Premier Anniversaire ...', 'Voila deja un an que je suis venue au monde.\r\n<br> Que de belles choses accomplies durant ces 12 mois ! <br> Nous allons bientôt déménager, quitter l\'Australie et nous rapprocher de notre famille ici ou ailleurs. <br> Merci d\'avoir regardé mon site, j\'espère que cela aura rattrapé un peu les moments que nous avons manqué ensemble. \r\n<br> Je vous embrasse tous, Jahia', 'Ah oui j\'ai bien grandi cette année... +25 centimètres et +5 kilogrammes...  ', 'https://www.youtube.com/embed/9QDanYLiHHE', 'Mon premier gateau d\'anniversaire.', 'article_9_2.jpg', '2020-04-26', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

