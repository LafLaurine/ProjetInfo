-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Décembre 2017 à 10:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `date_archi` datetime NOT NULL,
  `id_flux` int(11) NOT NULL,
  `langue` varchar(32) NOT NULL,
  `id_user` int(11) NOT NULL,
  `importance` int(5) NOT NULL DEFAULT '1',
  `keyword` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `flux`
--

CREATE TABLE `flux` (
  `id_flux` int(20) NOT NULL,
  `titre` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `flux`
--

INSERT INTO `flux` (`id_flux`, `titre`, `url`) VALUES
(1, 'Die Zeit', 'https://newsapi.org/v2/top-headlines?sources=die-zeit&apiKey=478dbc18e45246529659e27b354d7d77'),
(2, 'Google', 'https://news.google.com/news/rss/headlines/section/topic/ENTERTAINMENT.fr_fr/Culture?ned=fr&hl=fr&gl=FR'),
(3, 'Le Monde', 'http://www.lemonde.fr/rss/une.xml'),
(4, 'Libération', 'https://newsapi.org/v2/top-headlines?sources=liberation&apiKey=478dbc18e45246529659e27b354d7d77'),
(5, 'The Guardian', 'https://newsapi.org/v2/top-headlines?sources=the-guardian-uk&apiKey=478dbc18e45246529659e27b354d7d77'),
(6, 'Aften Posten', 'https://newsapi.org/v2/top-headlines?sources=aftenposten&apiKey=478dbc18e45246529659e27b354d7d77'),
(7, 'El Mundo', 'https://newsapi.org/v2/top-headlines?sources=el-mundo&apiKey=478dbc18e45246529659e27b354d7d77'),
(8, 'Buzzfeed', 'https://newsapi.org/v2/top-headlines?sources=buzzfeed&apiKey=478dbc18e45246529659e27b354d7d77'),
(9, 'Polygon', 'https://newsapi.org/v2/top-headlines?sources=polygon&apiKey=478dbc18e45246529659e27b354d7d77'),
(10, 'Wall Street', 'https://newsapi.org/v2/top-headlines?sources=the-wall-street-journal&apiKey=478dbc18e45246529659e27b354d7d77'),
(11, 'NHL', 'https://newsapi.org/v2/top-headlines?sources=nhl-news&apiKey=478dbc18e45246529659e27b354d7d77'),
(12, 'Les Echos', 'https://newsapi.org/v2/top-headlines?sources=les-echos&apiKey=478dbc18e45246529659e27b354d7d77'),
(13, 'Globe and Mail', 'https://newsapi.org/v2/top-headlines?sources=the-globe-and-mail&apiKey=478dbc18e45246529659e27b354d7d77'),
(14, 'YNET', 'https://newsapi.org/v2/top-headlines?sources=ynet&apiKey=478dbc18e45246529659e27b354d7d77'),
(15, 'rtlNews', 'https://newsapi.org/v2/top-headlines?sources=rtl-nieuws&apiKey=478dbc18e45246529659e27b354d7d77'),
(16, 'Bild', 'https://newsapi.org/v2/top-headlines?sources=bild&apiKey=478dbc18e45246529659e27b354d7d77'),
(17, 'CNN', 'https://newsapi.org/v2/top-headlines?sources=cnn-es&apiKey=478dbc18e45246529659e27b354d7d77'),
(18, 'Fox Sport', 'https://newsapi.org/v2/top-headlines?sources=fox-sports&apiKey=478dbc18e45246529659e27b354d7d77'),
(19, 'Google news Russe', 'https://newsapi.org/v2/top-headlines?sources=google-news-ru&apiKey=478dbc18e45246529659e27b354d7d77'),
(20, 'Reddit', 'https://newsapi.org/v2/top-headlines?sources=reddit-r-all&apiKey=478dbc18e45246529659e27b354d7d77');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `pseudo` varchar(32) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `pass`, `email`) VALUES
(1, 'Laurine', 'eaa2bded32cc585d3f37c5319abe8890ad28a697ed66d5823f10536cc9c0fdb9', 'l@l.fr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `flux`
--
ALTER TABLE `flux`
  ADD PRIMARY KEY (`id_flux`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `flux`
--
ALTER TABLE `flux`
  MODIFY `id_flux` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
