-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 19 juin 2021 à 14:23
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `membres_inchgroup`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `date_naissance` date NOT NULL,
  `numero_telephone` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='infos de connection a inchgroup';

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `sexe`, `date_naissance`, `numero_telephone`, `pays`, `photo`, `email`, `password`) VALUES
(1, 'Kevin', 'TONBONG', 'Homme', '2021-06-08', 876543654, 'senegal', 'photoCV2.jpg', 'kevin@gmail.com', '876543'),
(2, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(3, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(4, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(5, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(6, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(7, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(8, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(9, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(10, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(11, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(12, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(13, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(14, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(15, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(16, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(17, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(18, 'dfghjk', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'wertyuhbvc'),
(19, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'sdfgyuhj'),
(20, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'sdfgyuhj'),
(21, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'sdfgyuhj'),
(22, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(23, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(24, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(25, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(26, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(27, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(28, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(29, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(30, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(31, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(32, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(33, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(34, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(35, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(36, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(37, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(38, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(39, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(40, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(41, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(42, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(43, 'dfghjk;;;', 'dfghjkl', 'Homme', '2021-06-24', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'iuytgfds'),
(44, 'jhjhh', 'jnnjj', 'Homme', '2021-06-02', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'fghujl'),
(45, 'dgf', 'dfghjkl', 'Homme', '2021-06-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'kevin@gmail.co', 'uytfdx'),
(46, 'vgvkhk', 'gftgfi', 'Homme', '2021-06-02', 2147483647, 'Cote d\'ivoire', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'rdfghj'),
(47, 'vgvkhk', 'gftgfi', 'Homme', '2021-06-02', 2147483647, 'Cote d\'ivoire', 'photoCV2.jpg', 'tonbongkevin@gmail.com', ''),
(48, '&lt;p&gt; gdgdg&lt;/P&gt;', 'dfghjkl', 'Homme', '2021-07-01', 65656565, 'senegal', 'photoCV2.jpg', 'tonbongkevin@gmail.com', 'eeeeeeeeeeee'),
(49, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(50, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(51, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(52, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(53, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(54, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(55, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(56, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(57, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(58, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(59, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(60, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(61, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK'),
(62, '&lt;p style=&quot;color:red&quot;&gt;lorem&lt;/P&gt;', '#####', 'Homme', '2021-07-01', 2147483647, 'Cameroun', 'photoCV2.jpg', 'tonbongkevinSSSSSS@gmail.com', 'JJJJJJJJJJJKKKK');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
