-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 jan. 2022 à 14:25
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `trains`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `date_publication`, `image`, `commentaire`, `auteur_id`) VALUES
(3, 'Test', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, \r\nconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, \r\nconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '2022-01-07', 'https://i.picsum.photos/id/1026/4621/3070.jpg?hmac=OJ880cIneqAKIwHbYgkRZxQcuMgFZ4IZKJasZ5c5Wcw', 'Cet article a été écrit avec Manu Manfred !', 1),
(4, 'Test', 'Je suis un nouvel auteur souhaitez moi la bienvenue !', '2022-01-07', 'https://i.picsum.photos/id/1026/4621/3070.jpg?hmac=OJ880cIneqAKIwHbYgkRZxQcuMgFZ4IZKJasZ5c5Wcw', 'Cet article a été écrit avec Manu Manfred !', 1),
(6, 'Test', 'Je suis nouveau les gars !', '2022-01-07', 'https://zupimages.net/up/22/01/q746.jpg', 'Re', 1);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `prenom`, `nom`) VALUES
(1, 'Alexandre', 'Diakité');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210927084449', '2021-09-27 10:45:11', 826),
('DoctrineMigrations\\Version20211001080139', '2021-10-01 10:02:04', 1188),
('DoctrineMigrations\\Version20211014100139', '2021-10-14 12:01:53', 4054),
('DoctrineMigrations\\Version20211014135114', '2021-10-14 15:51:23', 1077),
('DoctrineMigrations\\Version20211014135508', '2021-10-14 15:55:16', 128),
('DoctrineMigrations\\Version20211014140724', '2021-10-14 16:07:31', 1066),
('DoctrineMigrations\\Version20211015091730', '2021-10-15 11:17:38', 2379),
('DoctrineMigrations\\Version20211015140419', '2021-10-15 16:04:29', 562),
('DoctrineMigrations\\Version20211018145856', '2021-10-18 16:59:15', 2319),
('DoctrineMigrations\\Version20211019141202', '2021-10-19 16:12:17', 278),
('DoctrineMigrations\\Version20211026131102', '2021-10-26 15:11:48', 1314),
('DoctrineMigrations\\Version20211027091022', '2021-10-27 11:10:35', 673),
('DoctrineMigrations\\Version20211028133456', '2021-10-28 15:35:09', 3879),
('DoctrineMigrations\\Version20211029072558', '2021-10-29 09:26:27', 812),
('DoctrineMigrations\\Version20211029080146', '2021-10-29 10:01:55', 736),
('DoctrineMigrations\\Version20211029081005', '2021-10-29 10:10:13', 244),
('DoctrineMigrations\\Version20211029081207', '2021-10-29 10:12:14', 257),
('DoctrineMigrations\\Version20211213103403', '2021-12-13 10:34:35', 798),
('DoctrineMigrations\\Version20211213105636', '2021-12-13 10:56:57', 289),
('DoctrineMigrations\\Version20211213150209', '2021-12-13 15:02:19', 549),
('DoctrineMigrations\\Version20220104124954', '2022-01-04 12:50:44', 1621),
('DoctrineMigrations\\Version20220104125318', '2022-01-04 12:53:25', 117),
('DoctrineMigrations\\Version20220104125551', '2022-01-04 12:55:57', 126),
('DoctrineMigrations\\Version20220104125938', '2022-01-04 12:59:45', 179),
('DoctrineMigrations\\Version20220107121724', '2022-01-07 12:17:40', 3114),
('DoctrineMigrations\\Version20220107122255', '2022-01-07 12:23:00', 1548),
('DoctrineMigrations\\Version20220107150646', '2022-01-07 15:06:55', 327),
('DoctrineMigrations\\Version20220107150842', '2022-01-07 15:08:48', 225),
('DoctrineMigrations\\Version20220110132352', '2022-01-10 13:24:18', 2988);

-- --------------------------------------------------------

--
-- Structure de la table `livree`
--

CREATE TABLE `livree` (
  `id` int(11) NOT NULL,
  `ile_de_france_id` int(11) NOT NULL,
  `transilien_id` int(11) NOT NULL,
  `carmillon_id` int(11) NOT NULL,
  `ile_de_france_mobilites_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

CREATE TABLE `realisation` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` date NOT NULL,
  `description_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `realisation`
--

INSERT INTO `realisation` (`id`, `auteur`, `nom_image`, `date_publication`, `description_image`, `photo`) VALUES
(4, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(5, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(6, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(7, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(8, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(9, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(10, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(11, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(12, 'Admin', 'Lamborghini préparée !', '2016-01-01', 'Lambo', 'https://s1.qwant.com/thumbr/474x266/8/b/b015bf232846d55c434b714271de4f1e0c72a504c53f26ea1d64ededd3f728/th.jpg?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.synFybs0QdBwSNC-dOim0QHaEK%26pid%3DApi&q=0&b=1&p=0&a=0'),
(14, 'Admin', 'Métro', '2021-10-28', 'Il a dépassé la station !', 'https://s1.qwant.com/thumbr/0x0/1/1/cf8aeb723025d7918691befe18cd84f04c6bfbf3593f22901749f073a95dda/ratp_netoyage.jpg?u=https%3A%2F%2Fstatic.cnews.fr%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fimage_640_360%2Fpublic%2Fratp_netoyage.jpg%3Fitok%3Drc42a6BI&q=0&b=1&'),
(15, 'Admin', 'Métro à quai', '2021-12-08', 'Incroyable cette rame !', 'https://s1.qwant.com/thumbr/0x0/1/1/cf8aeb723025d7918691befe18cd84f04c6bfbf3593f22901749f073a95dda/ratp_netoyage.jpg?u=https%3A%2F%2Fstatic.cnews.fr%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fimage_640_360%2Fpublic%2Fratp_netoyage.jpg%3Fitok%3Drc42a6BI&q=0&b=1&');

-- --------------------------------------------------------

--
-- Structure de la table `rerng`
--

CREATE TABLE `rerng` (
  `id` int(11) NOT NULL,
  `rames` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motrices` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mise_en_service` date DEFAULT NULL,
  `livree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_de_caisses` int(11) NOT NULL,
  `stf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiation` date DEFAULT NULL,
  `equipements_interieurs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lignes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rerng`
--

INSERT INTO `rerng` (`id`, `rames`, `motrices`, `mise_en_service`, `livree`, `nombre_de_caisses`, `stf`, `radiation`, `equipements_interieurs`, `lignes`) VALUES
(2, 'test', 'test', '2021-10-14', 'Ile-de-France Mobilités', 4, '/', '2021-10-21', 'SIVE - vidéosurveillance', 'En essai');

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(10, 22, 'be9aulCx41iByrHNAqfV', 'yTNUej1YvtR8iEPQYRR800a+R2YhihwucJHEh0F0gGU=', '2022-01-10 12:11:56', '2022-01-10 13:11:56');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `is_verified`, `prenom`, `nom`) VALUES
(15, 'test4@test.fr', '[\"ROLE_ADMIN\"]', '$2y$13$LIoF3N5FPeHPPHCaiJeg4Oh9eBOUaRPNyTF1n6hN5lc7G0j4aD89G', 1, '', ''),
(17, 'salucalex@gmail.com', '[]', '$2y$13$qM9olRzIzoEkcRChyfHtq.Ia/rVF/84wN9LU9tm4R3hfYvZE0QtRK', 0, '', ''),
(18, 'v.tekno@gmail.com', '[]', '$2y$13$1lQZaZdlQInXUdQ8zd409uCylLziLUo3Ve5QDj6V8a6fyDJDG5TSe', 0, '', ''),
(19, 'jpierre@gmail.com', '[]', '$2y$13$OWyYL8BoaTjlj6FeLdL8XO5XE71rJxcxFTFJckKJ5wZIFd7YO7ez2', 0, '', ''),
(20, 'joe.pierre@gmail.com', '[]', '$2y$13$pOe3hxtEHEauMHb6Yp4m3eZ7DnbUBUKLp/x9WSzLc.I6kAVRufHpq', 0, '', ''),
(21, 'testalex@gmail.com', '[]', '$2y$13$sgVY3SQlmyKCK7bogeDI6..NcOU0IhMEsuC097Bnk8O9aFsZSrgh.', 0, 'Alexandre', 'Diakité'),
(22, 'a.diakite@woohoo.com', '[\"ROLE_ADMIN\"]', '$2y$13$JO5Yt/mT0j8.c1OEQ./P4.jE1EWi189TROe1hiHK8eB73C2G7hSIS', 1, 'Alexandre', 'Diakité');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `z5600`
--

CREATE TABLE `z5600` (
  `id` int(11) NOT NULL,
  `rames` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motrices` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mise_en_service` date NOT NULL,
  `livree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_de_caisses` int(11) NOT NULL,
  `stf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiation` date NOT NULL,
  `equipements_interieurs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lignes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `z5600`
--

INSERT INTO `z5600` (`id`, `rames`, `motrices`, `mise_en_service`, `livree`, `nombre_de_caisses`, `stf`, `radiation`, `equipements_interieurs`, `lignes`) VALUES
(8, '33C', 'Z5670/71', '1983-11-24', 'Carmillon', 2, 'SLC', '2021-11-29', 'SIVE - vidéosurveillance', 'RER C'),
(9, '04C', 'Z5605/06', '1982-01-01', 'Ile-de-France', 4, 'SLC', '0000-12-30', '/', '/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E6660BB6FE6` (`auteur_id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5F9E962A7294869C` (`article_id`),
  ADD KEY `IDX_5F9E962A727ACA70` (`parent_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `livree`
--
ALTER TABLE `livree`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_66A532F5FE5FC6F5` (`ile_de_france_id`),
  ADD UNIQUE KEY `UNIQ_66A532F595706A6C` (`transilien_id`),
  ADD UNIQUE KEY `UNIQ_66A532F54FCC2C97` (`carmillon_id`),
  ADD UNIQUE KEY `UNIQ_66A532F5DB01B276` (`ile_de_france_mobilites_id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rerng`
--
ALTER TABLE `rerng`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`);

--
-- Index pour la table `z5600`
--
ALTER TABLE `z5600`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `z5600` ADD FULLTEXT KEY `IDX_6BCC989D572333C39DAAD8E3` (`rames`,`motrices`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livree`
--
ALTER TABLE `livree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `rerng`
--
ALTER TABLE `rerng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `z5600`
--
ALTER TABLE `z5600`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6660BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `FK_5F9E962A7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `livree`
--
ALTER TABLE `livree`
  ADD CONSTRAINT `FK_66A532F54FCC2C97` FOREIGN KEY (`carmillon_id`) REFERENCES `z5600` (`id`),
  ADD CONSTRAINT `FK_66A532F595706A6C` FOREIGN KEY (`transilien_id`) REFERENCES `z5600` (`id`),
  ADD CONSTRAINT `FK_66A532F5DB01B276` FOREIGN KEY (`ile_de_france_mobilites_id`) REFERENCES `z5600` (`id`),
  ADD CONSTRAINT `FK_66A532F5FE5FC6F5` FOREIGN KEY (`ile_de_france_id`) REFERENCES `z5600` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
