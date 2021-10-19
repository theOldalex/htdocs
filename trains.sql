-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 oct. 2021 à 10:02
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
('DoctrineMigrations\\Version20211018145856', '2021-10-18 16:59:15', 2319);

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

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
(4, '03C', 'Z5602/03', '1983-09-23', 'Ile de France', 4, '/', '2020-11-20', '/', '/'),
(5, '01C', 'Z5601/02', '2016-01-01', 'Ile de France', 4, '/', '2017-05-01', '/', '/');

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `rerng`
--
ALTER TABLE `rerng`
  ADD PRIMARY KEY (`id`);

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

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livree`
--
ALTER TABLE `livree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rerng`
--
ALTER TABLE `rerng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `z5600`
--
ALTER TABLE `z5600`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livree`
--
ALTER TABLE `livree`
  ADD CONSTRAINT `FK_66A532F54FCC2C97` FOREIGN KEY (`carmillon_id`) REFERENCES `z5600` (`id`),
  ADD CONSTRAINT `FK_66A532F595706A6C` FOREIGN KEY (`transilien_id`) REFERENCES `z5600` (`id`),
  ADD CONSTRAINT `FK_66A532F5DB01B276` FOREIGN KEY (`ile_de_france_mobilites_id`) REFERENCES `z5600` (`id`),
  ADD CONSTRAINT `FK_66A532F5FE5FC6F5` FOREIGN KEY (`ile_de_france_id`) REFERENCES `z5600` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
