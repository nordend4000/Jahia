-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 26 mai 2020 à 05:48
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
-- Structure de la table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `legende` varchar(255) NOT NULL,
  `photo_mois` varchar(255) NOT NULL,
  `legende_ext` varchar(255) NOT NULL,
  `photo_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `month`
--

INSERT INTO `month` (`id`, `titre`, `commentaire`, `legende`, `photo_mois`, `legende_ext`, `photo_ext`) VALUES
(1, 'Mon 1er mois : Mai', 'Je suis arrivée au monde avec 2 semaines de retard <br> maintenant que je suis là mes parents sont très heureux mais ils ne dorment plus beaucoup (surtout ma Mama).\r\n<br> Tout est oublié avec mes premiers sourires.\r\n<br> Mon abuela est venue me rendre visite, c\'était chouette.', 'Une des premières photos de moi à mon arrivée à la maison.', 'mois_1.jpg', 'Y\'a pas d\'age pour avoir la classe !', 'mai.jpg'),
(2, 'Mon 2eme mois : Juin', 'Je dors, je mange, je remplie des couches... et mes parents s\'occupent de moi. <br> Elle est pas belle la vie de bébé.<br> Mes parents n\'arrivent pas à lâcher leur appareil photo.', 'Je me cache sous ma capuche.', 'mois_2.jpg', 'Il faudrait que mes parents me trouvent un lit digne de ce nom ...', 'juin.jpg'),
(3, 'Mon 3eme mois : Juillet', 'Mes premières vacances avec mes parents, ils ne m\'ont pas ménagé <br> avec leur 3 semaines de camping car dans le nord de l\'Australie. <br> (voir article du blog : <a href=\"jahia_blog_article.php?id_article=2\"> Ici</a>)<br>J\'ai commencé à attraper les jouets avec ma main.\r\n', 'Vous êtes sérieux avec vos vacances avec les crocrodiles ??', 'mois_3.jpg', 'Au réveil d\'une sieste avec mon Papa dans l\'écharpe \"kangourou\"...', 'juillet.jpg'),
(4, 'Mon 4eme mois : Aout', 'Retour au calme à la maison j\'essaye de faire des siestes <br> et quand je n\'y arrive pas on joue avec mes parents ou on va faire un tour de poussette.<br> Ma Mama est retournée au boulot.<br>J\'ai essayé les biberons mais je préfères la téta de ma Mama.', 'A la maison on rempli les courbes de croissance dans le carnet de santé.', 'mois_4.jpg', 'Avec mon lapin c\'est plus facile de s\'endormir, <br>c\'est ma peluche préférée !!!', 'aout.jpg'),
(5, 'Mon 5eme mois : Septembre', 'Deja 5 mois, je grandis rapidement et je m\'éveil de plus en plus <br> J\'ai ma Mame qui est venue de France me rendre visite pour un mois : la chance !\r\n<br> J\'essaye de me retourner mais quand j\'y arrive mes parents ne me laissent pas dormir sur le ventre.', 'Salut c\'est moi Jahia !', 'mois_5.jpg', 'Quelle bêtise je vais pouvoir inventer ??', 'septembre.jpg'),
(6, 'Mon 6eme mois : Octobre', 'J\'ai appris à m\'asseoir, c\'est super pour jouer. <br>\r\nLe printemps arrive et il commence à faire chaud je profite de la piscine presque tous les jours. <br>', 'Sauf que mon Papa il m\'habille comment en hiver...<br>\r\nJ\'ai trop chaud !!!...', 'mois_6.jpg', 'Ahh en petite robe c\'est deja mieux.', 'octobre.jpg'),
(7, 'Mon 7eme mois : Novembre', 'J\'ai ma première dent qui a vu le jour, ça fait mal... <br> On a voyagé en Tasmanie pendant 15 jours, c\'était cool <br> j\'ai même mon Grand Pa qui m\'a rendu visite dans le camping car ! <br> (voir article du blog : <a href=\"jahia_blog_article.php?id_article=4\"> Ici</a>)<br>\r\nEn revenant, j\'ai commencé les purées et la compote, hummmm la mangue c\'est ma préférée !! ', 'je fais des essayages avant de faire ma valise.', 'mois_7.jpg', 'Quoi tu veux ma photo ?', 'novembre.jpg'),
(8, 'Mon 8eme mois : Decembre', 'C\'est le mois de Noel, ici pas de ski ou de bonhomme de neige <br> mais du surf et des pâtés de sable <br> (voir article du blog : <a href=\"jahia_blog_article.php?id_article=5\"> Ici</a>). <br> Maintenant je me retourne facilement sur le ventre <br> mais après je suis bloquée et j\'appel mes parents pour venir m\'aider.\r\n<br> Je me suis fait virer de la chambre de mes parents maintenant je dors avec mes peluches dans ma chambre.', 'J\'aime bien jouer avec le sable à la plage mais ca \"crac\" sous mes deux dents.', 'mois_8.jpg', 'Je comprends pas pourquoi mon Papa il veux que aller au ski <br> c\'est bien mieux la plage...', 'decembre.jpg'),
(9, 'Mon 9eme mois : Janvier', 'Il fait chaud c\'est l\'été, on est parti une semaine faire du camping à la plage <br> (voir article du blog : <a href=\"jahia_blog_article.php?id_article=6\"> Ici</a>). <br> On s\'est bien amusé ! <br>\r\nJe commence à marcher à 4 pattes.', 'J\'ai même commencé la conduite accompagnée.', 'mois_9.jpg', 'Oui... je suis une grosse coquine !', 'janvier.jpg'),
(10, 'Mon 10eme mois : Février', 'Je marche à 4 pattes de partout maintenant et je découvre la maison dans les recoins. <br> Y\'a tellement de bêtises à faire, c\'est genial.<br>\r\nOn est parti une semaine à Lord Howe Island et c\'était chouette <br> parce que Papa me porte dans un sac à dos pendant toutes les balades<br> (voir article du blog : <a href=\"jahia_blog_article.php?id_article=7\"> Ici</a>).', 'Je marche à 4 pattes dans tous les sens', 'mois_10.jpg', 'Je me repose un peu quand j\'ai trop gambadé.', 'fevrier.jpg'),
(11, 'Mon 11ème mois : Mars', 'On est reparti pour un tour de camping car mais cette fois dans un autre pays : <br>la Nouvelle Zélande (voir article du blog : <a href=\"jahia_blog_article.php?id_article=8\"> Ici</a>).<br>\r\nJe me suis baigné dans des sources d\'eau chaude et j\'ai dormi dans le lit avec Papa et Mama. <br> Trop cool !<br> J\'adore renverser les piles de linges dans l\'armoire et regarder Papa qui les rangent 10 fois par jour.', 'Plage avec source d\'eau chaud, y\'a juste à creuser pour avoir une piscine chauffée.', 'mois_11.jpg', 'Pirogue Maori !', 'mars.jpg'),
(12, 'Mon 12eme mois : Avril', 'Avril ne te découvre pas d\'un fil, ya le coronavirus !! <br> On est resté à la maison et on a pas fait beaucoup de balades mais je me suis entrainé tous les jours pour marcher <br> et pour trouver de nouvelles bêtises à faire.<br> OOOuuuuuuhhhhh.... C\'est le 13 avril que j\'ai marché pour la première fois toute seule !!! Mes parents étaient tellement fiers de moi.', 'Mon entrainement quotidien à la marche avec ma chariote a payé ... <br> Je marche !!', 'mois_12.jpg', 'Hiiihii c\'est bientôt mon annif !!!\r\n<br>\r\n<br> <h6><a href=\"jahia_blog_article.php?id_article=9\"> Mon Premier Anniversaire </a></h6>', 'avril.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

