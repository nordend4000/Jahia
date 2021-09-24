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
-- Structure de la table `mois`
--

CREATE TABLE `mois` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `legende` varchar(255) NOT NULL,
  `photo_mois` varchar(255) NOT NULL,
  `legende_ext` varchar(255) NOT NULL,
  `photo_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mois`
--

INSERT INTO `mois` (`id`, `titre`, `commentaire`, `legende`, `photo_mois`, `legende_ext`, `photo_ext`) VALUES
(1, 'My 1st month : May', 'I was born with 2 weeks of delay <br> Anyway now, I am here and my parents are very happy <br>but they don\'t sleep much anymore (especially Mama).<br>\r\nEverything is forgotten with my first smiles.<br>\r\nMy abuela came to visit me, it was fun.', 'One of the first pictures of me when I arrived at home.', 'mois_1.jpg', 'There’s no age for class !', 'mai.jpg'),
(2, 'My 2nd month : June', 'I\'m sleeping, feeding and filling nappies... My parents are taking care of me. I have a happy baby life.<br> My parents cannot leave their camera in peace anymore.', 'I\'m hiding under my hoodie.', 'mois_2.jpg', 'My parents need to get me a bed better than this one.', 'juin.jpg'),
(3, 'My 3rd month : July', 'My first holidays with my parents, they didn’t spare me <br> with their 3 weeks of camping car in northern Australia. <br> No Worries (see blog\'s article : <a href=\"jahia_blog_article_en.php?id_article=2\"> Here</a>)<br> I started grabbing toys with my hand.\r\n', 'Are you serious about your crocodile infested holidays?', 'mois_3.jpg', 'When I am waking up from a nap with Papa\'s \"kangaroo\" scarf...', 'juillet.jpg'),
(4, 'My 4th month : August', 'Back to the calm at home, I\'m trying to take naps <br> but when I can’t, I play with my parents or we go for a stroll.<br> My Mama is back at work, which is not fun.<br> I tried the bottles with Papa but I prefer my Mama’s teta.', 'At home we fill in the growth chart in my health book.', 'mois_4.jpg', 'Fall asleep with my bunny...?? <br>  2 ezy  !!! <br>it’s my best mate !!!', 'aout.jpg'),
(5, 'My 5th month : September', 'Already 5 months, I am growing quickly and I\'m more and more awake <br> I have my Mame who came from France to visit me for a month: lucky me ! <br>\r\nI am trying to turn around on my tummy but when I get there my parents won’t let me sleep on my stomach', 'Hello world !', 'mois_5.jpg', 'What mischief am I up to next ?', 'septembre.jpg'),
(6, 'My 6th month : October', 'I learned to sit down, it\'s better to play. \r\n<br>\r\nSpring is coming and it’s getting hot and humid so I enjoy the pool almost every day. ', 'Except that Papa dresses me like in winter...\r\nI’m too hot!!...', 'mois_6.jpg', 'Of course, a dress is better.', 'octobre.jpg'),
(7, 'My 7th month : November', 'My first tooth came out, it hurts... <br> We traveled in Tasmania for 15 days, it was cool <br> I met my Grand Pa aka Baboune who visited me in the motorhome! <br> (see blog\'s article: <a href=\"jahia_blog_article_en.php?id_article=4\"> Here</a>)<br>When I came back, I started to eat mashed veggies and fruits, hummmm Mango is my favorite!\r\n', 'Some fittings before packing my bags.', 'mois_7.jpg', 'Why are you staring at me ?', 'novembre.jpg'),
(8, 'My 8th month : December', 'It’s Christmas... here no skiing or snowman <br> but surfing and sand blocks <br> (see blog\'s article: <a href=\"jahia_blog_article_en.php?id_article=5\"> Here</a>). <br> Now I  turn easily on my tummy <br> but then I am stuck, I call my parents for help.<br>\r\nI got kicked out of my parents\' room now I sleep with my buddies in my room.', 'I like to play with the sand at the beach but it \"cracks\" under my two teeth.', 'mois_8.jpg', 'I don’t understand why my Papa wants to go skiing <br> The beach is much better...', 'decembre.jpg'),
(9, 'My 9th month : January', 'It’s Summer and it\'s hot now, we went for a week camping at the beach <br> (see blog\'s article: <a href=\"jahia_blog_article_en.php?id_article=6\"> Here</a>). <br> It was so much fun ! <br>\r\nI’m starting to crawl, no one can stop me anymore...', 'I already started my driving lessons !', 'mois_9.jpg', 'Yes... I’m a naughty girl!', 'janvier.jpg'),
(10, 'My 10th month : February', 'I am crawling now and discovering all the corner of the house. <br> It’s great, I can be very cheeky.<br>\r\nWe went to Lord Howe Island for a week and it was fun because Papa was carrying me in a backpack during all the walks <br> (see blog\'s article : <a href=\"jahia_blog_article_en.php?id_article=7\"> Here</a>).', 'I am crawling all over the place.', 'mois_10.jpg', 'Exactly like Mama, I rest a little bit when I’ve been running too fast.', 'fevrier.jpg'),
(11, 'My 11th month : March', 'We left  home for another motorhome tour but this time in another country: <br>New Zealand (see blog\'s article : <a href=\"jahia_blog_article_en.php?id_article=8\"> Here</a>).<br>\r\nI bathed in hot springs and slept in bed with Papa and Mama. <br> So cool!<br>\r\nI love unfolding all the laundry from the cupboard and seeing Papa tidying it up ten times per day.', 'Beach with hot water source, you just have to dig to have a heated pool.', 'mois_11.jpg', 'Maori\'s kayak !', 'mars.jpg'),
(12, 'My 12th month : April', 'April don\'t go out there\'s coronavirus !! <br> We stayed at home and we didn’t have many strolls but I trained every day to walk and get into new mischief.\r\n<br>Big up... My first steps were on the 13th !!! \r\n<br> My parents were so proud of me.', 'I’ve trained so much, I’m walking now :-)', 'mois_12.jpg', 'Hiihiii... It\'s nearly my first birthday !!!\r\n<br>\r\n<br> <h6><a href=\"jahia_blog_article_en.php?id_article=9\"> My First Birthday </a></h6>', 'avril.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mois`
--
ALTER TABLE `mois`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mois`
--
ALTER TABLE `mois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

