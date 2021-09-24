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
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
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
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_article`, `titre_article`, `contenu_article`, `legende_media`, `media_name`, `legende_photo`, `photo_name`, `date_publication`, `video`) VALUES
(1, 'Birth announcement...', 'To celebrate my birth, my parent created a timelapse video <br>showing how much I grew in Mama’s tummy during these 9 months.', '9 months waiting...', 'https://www.youtube.com/embed/rAXX7JCc3CQ', 'All my buddies !!!', 'article_1_2.jpg', '2019-04-26', ''),
(2, 'From Darwin to Alice Springs ...', 'My first holidays, my parents took me on a 4,000 km motorhome trip <br> from the tropical Northern coast of Australia <br> to the red and desertic Center through incredible crocodile-infested national parks <br> Seriously, I\'m only a 3 month old !!!<br>\r\nI met my \'crazy\' family from spanichzerland.', 'But actually, it went smoothly because my parents cared a lot for me <br> and I was always happy except at 7pm when I was still in the car seat', 'article_2.jpg', 'I had my cousins who wanted to play with me <br> but I was too small for them!', 'article_2_2.jpg', '2019-08-28', ''),
(3, 'South Stradbroke Island ...', 'We went for 3 days to an apartment on South Straddie to celebrate the arrival of my Mame.<br>  We took the boat and had nice walks in the mangrove. <br>  That was great!', 'Chilling out at the resort', 'article_3.jpg', 'After a nice walk, we arrived <br> on the Pacific coast with a good view of Gold Coast', 'article_3_2.jpg', '2019-09-20', ''),
(4, 'Trip to Tasmania ...', 'Here we are again for a tour of 2,000km<br> to discover grandiose landscapes and the richness of the flora of this unique place.<br>\r\nBetween deserted beaches for Mama , alpine mountains for Papa and  wine estate or fine dining for Grand Pa,<br> We all had our share in Tasmania.', 'Tasmania is great, but it’s a bit cold even in spring, on the beach you need pants!!', 'article_4.jpg', 'A flower among the flowers ...', 'article_4_2.jpg', '2019-11-10', ''),
(5, 'My First Christmas ...', 'Jingle bells jingle bells jingle all the way....<br>  In Australia Santa Claus does not come by sled on the snow <br> but he arrives by surfing a wave at the beach.<br> That sounds fun...\r\n\r\n', 'Christmas in Brisbane: My gifts and my tree', 'article_5.jpg', 'I received lots of gifts, <br> I didn’t really understand but I had to open  wrappings <br> and then my parents were all happy!!!', 'article_5_2.jpg', '2019-12-25', ''),
(6, 'Camping on Fraser Island ...', 'We went for 5 days of beach camping on one of Australia\'s highlight. <br>  We crossed the all island with our 4wd,  we swam with turtles . <br> I slept in the tent with my parents and that was the best part for me.', 'Best moments on Fraser Island caught on video', 'https://www.youtube.com/embed/B8p5I-gnMUs', 'Sunset at Waddy Point with the dingoes.', 'article_6_2.jpg', '2020-01-20', ''),
(7, 'Lord Howe Island ...', 'We left home for a week on paradise. <br>Snorkeling in the lagoon, hiking on the mountain range, the week\'s plan was perfect<br> but we had bad luck with a cyclone ! Windy Windy... <br>We managed to enjoy the island as much as possible during our stay.', 'The best moments in Lord Howe Island.', 'https://www.youtube.com/embed/v6iYDc1A36Q', 'The star of the beach is me !', 'article_7_2.jpg', '2020-02-07', ''),
(8, 'New Zealand, the Volcanic North Island.', 'It was the first time I went to another country  ! <br> We went on a motorhome trip again <br> it was great, I bathed in hot natural springs <br> \r\nSometimes it smelled like a rotten egg but apparently it’s just geothermal activity ...', 'Video of our road trip including the Tongariro Alpine Crossing : <br>It’s a great 20km hike through active volcanoes. <br>It was worth it and it was not tiring at all ...  I was on my Papa\'s backpack.', 'https://www.youtube.com/embed/Nw6IDY2yCkU', 'Jahia didn\'t stay only on Papa\'s backpack.', 'article_8_2.jpg', '2020-03-15', ''),
(9, 'My First Birthday ...', 'It’s been a year since I was born.\r\n<br> I achieved big steps this year ! We will soon move, leave Australia and get closer to our loved one. <br> Thank you for looking at my Website, hope it made up for the moments we missed together. <br>\r\nCheers, Jahia', 'I grew a lot this year... +25 centimeters and +5 kilograms.', 'https://www.youtube.com/embed/9QDanYLiHHE', 'My first Birthday cake !!', 'article_9_2.jpg', '2020-04-26', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

