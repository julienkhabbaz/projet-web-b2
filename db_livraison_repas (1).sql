-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 23 mai 2020 à 19:52
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_livraison_repas`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `ref_commande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `quantite` int(11) NOT NULL,
  `plat_id` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `date_commande` datetime NOT NULL,
  `heure_livraison` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `client_id`, `ref_commande`, `status`, `quantite`, `plat_id`, `total`, `date_commande`, `heure_livraison`) VALUES
(10, 6, 'REF_5', 1, 3, 6, 67, '2020-05-19 13:44:49', '13:44:49'),
(12, 6, 'REF_8', 1, 3, 6, 67, '2020-05-19 13:46:11', '13:46:11'),
(15, 8, 'REF_25', 1, 6, 6, 135, '2020-05-20 12:56:40', '12:56:40'),
(16, 8, 'REF_', 0, 3, 6, 67, '2020-05-20 13:44:45', '13:44:45'),
(20, 8, 'REF_', 0, 2, 7, 29, '2020-05-20 14:05:45', '14:05:45'),
(22, 7, 'REF_', 0, 2, 9, 55, '2020-05-21 11:42:39', '11:42:39'),
(23, 6, 'REF_1063879151', 0, 3, 10, 82, '2020-05-23 03:27:50', '03:27:50'),
(24, 7, 'REF_819307390', 0, 3, 12, 52, '2020-05-23 12:39:10', '12:39:10');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200515152837', '2020-05-15 15:28:53'),
('20200515181457', '2020-05-15 18:15:17'),
('20200515183821', '2020-05-15 18:38:27'),
('20200516174454', '2020-05-16 17:45:17'),
('20200516192306', '2020-05-16 19:23:12'),
('20200516203009', '2020-05-16 20:30:14'),
('20200517064917', '2020-05-17 06:49:33'),
('20200517071314', '2020-05-17 07:13:19'),
('20200518175221', '2020-05-18 17:52:35'),
('20200518185312', '2020-05-18 18:53:28'),
('20200518191242', '2020-05-18 19:12:48'),
('20200519021550', '2020-05-19 02:16:08'),
('20200519032034', '2020-05-19 03:20:40'),
('20200519033604', '2020-05-19 03:36:10'),
('20200519034622', '2020-05-19 03:46:26'),
('20200519131211', '2020-05-19 13:12:31'),
('20200520043633', '2020-05-20 04:36:50'),
('20200520050510', '2020-05-20 05:05:22');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `libele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `restaurant_id`, `libele`, `description`, `prix`, `filename`, `updated_at`) VALUES
(6, 12, 'PLat', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 20, '5ec3e76c53e4a419982201.jpg', '2020-05-19 14:04:28'),
(7, 11, 'PLat dhow', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 12, '5ec3e5c18ed50171224203.jpg', '2020-05-19 13:57:21'),
(9, 15, 'Tajin', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 20, '5ec6691783c7c537358929.jpeg', '2020-05-21 11:42:15'),
(10, 16, 'grilled chicken', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 25, '5ec670fe9f012972883805.jpeg', '2020-05-21 12:15:58'),
(12, 18, 'Pizza', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 15, '5ec918eb57d4b854250615.jpg', '2020-05-23 12:36:59');

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `description`, `adresse`, `filename`, `updated_at`, `user_id`) VALUES
(11, 'Dhow', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 'Rabat', '5ec3e3883eb36162981636.jpeg', '2020-05-19 13:47:52', NULL),
(12, 'Sofitel', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 'Marrakech', '5ec3e4ee0181c218074170.jpg', '2020-05-19 13:53:49', NULL),
(15, 'Dar Naji', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 'Salé', '5ec6639facec2684078976.jpeg', '2020-05-21 11:18:55', 7),
(16, 'Grill House', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 'Marrakech', '5ec666f4943de935086921.jpg', '2020-05-21 11:33:08', 7),
(18, 'Restaurant', 'Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.', 'Salé', '5ec918a3b96aa302711162.jpg', '2020-05-23 12:35:47', 12);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solde` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `adresse_postal`, `solde`, `phone`, `site_web`) VALUES
(6, 'demo_admin@gmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$qSjlnQjeTiugSZRR3+uctQ$VwOq3rF/Ll8eg4rlwZr6SiPkyg65/yPn43Dmpml93cU', 'Resto', 'Resto', 'Rabat', 7, NULL, NULL),
(7, 'demo_restaurant@gmail.com', '[\"ROLE_RESTAURANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$sOBydl3jwozYFFNRfAw4Lw$dWT7cyCR0XFt5Jey4LfD6K1L1eE21qJbv1Am9Hh6ke4', 'restaurant', 'restaurant', 'Salé', 10, '0622598685', NULL),
(8, 'demo_client@gmail.com', '{\"1\":\"ROLE_USER\"}', '$argon2id$v=19$m=65536,t=4,p=1$Ww6yWiGNUT6t1uynOMYPXw$qRyr6ycbEONc1AmBbj7STxhI5DivDL1lhqqlFgbw5d0', 'Hicham', 'Hassani', 'Paris', 0, '0624987278', 'monsite.com'),
(12, 'demo_test@hotmail.com', '[\"ROLE_USER\",\"ROLE_ADMIN\",\"ROLE_RESTAURANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$ZlUJ6Ft5hcUzrflqlmbxxA$sWSz+YTU3a2ko4i+62ck0MoSwTjjxkorZiyRFlN8zJ4', 'Test', 'Test', 'Test', 0, '0624987274', 'demo.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67D19EB6921` (`client_id`),
  ADD KEY `IDX_6EEAA67DD73DB560` (`plat_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2038A207B1E7706E` (`restaurant_id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EB95123FA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D19EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DD73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`);

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `FK_2038A207B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `FK_EB95123FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
