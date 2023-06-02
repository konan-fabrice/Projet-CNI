-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 juin 2023 à 15:41
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cni`
--

-- --------------------------------------------------------

--
-- Structure de la table `enrolers`
--

DROP TABLE IF EXISTS `enrolers`;
CREATE TABLE IF NOT EXISTS `enrolers` (
  `idenrolant` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenaissance` date NOT NULL,
  `heurenaissance` time DEFAULT NULL,
  `lieunaissance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nni` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `lienphoto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lienempreinte` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liensignature` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signataire` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateemission` date DEFAULT NULL,
  `dateexpiration` date DEFAULT NULL,
  `dateenrolement` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idpays` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idsexe` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idprofession` int(11) NOT NULL,
  `idmere` int(11) NOT NULL,
  `idpere` int(11) NOT NULL,
  `idstatut` int(11) DEFAULT NULL,
  PRIMARY KEY (`idenrolant`),
  KEY `enrolers_idpays_foreign` (`idpays`),
  KEY `enrolers_idsexe_foreign` (`idsexe`),
  KEY `enrolers_idprofession_foreign` (`idprofession`),
  KEY `enrolers_idmere_foreign` (`idmere`),
  KEY `enrolers_idpere_foreign` (`idpere`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enrolers`
--

INSERT INTO `enrolers` (`idenrolant`, `created_at`, `updated_at`, `nom`, `prenom`, `datenaissance`, `heurenaissance`, `lieunaissance`, `nni`, `taille`, `lienphoto`, `lienempreinte`, `liensignature`, `visa`, `signataire`, `dateemission`, `dateexpiration`, `dateenrolement`, `telephone`, `idpays`, `idsexe`, `idprofession`, `idmere`, `idpere`, `idstatut`) VALUES
(1, '2023-05-31 11:48:38', '2023-05-31 11:48:38', 'ALi', 'Jacques', '2022-12-11', NULL, NULL, NULL, NULL, '20220513_191041(1).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, 0),
(2, '2023-05-31 13:33:06', '2023-05-31 13:33:06', 'ALI', 'Touré', '1222-12-10', NULL, NULL, NULL, NULL, 'moi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, 0),
(3, '2023-05-31 22:04:02', '2023-05-31 22:04:02', 'NAomi', 'Lokpo', '2000-12-12', NULL, NULL, NULL, NULL, 'photo3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, NULL),
(4, '2023-06-01 03:32:21', '2023-06-01 03:32:21', 'Kouassi', 'Blaise', '2000-12-12', '00:23:00', 'Bouaké', 123141551, 174, 'moi.jpg', 'example.png', 'example.png', NULL, NULL, '2023-06-20', '2023-06-14', NULL, NULL, '1', '1', 1, 1, 1, NULL),
(5, '2023-06-01 12:30:16', '2023-06-01 12:30:16', 'Touré', 'Lio', '2022-12-12', NULL, NULL, NULL, NULL, 'moi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, NULL),
(6, '2023-06-01 20:24:38', '2023-06-01 20:24:38', 'Jean', 'Kouassi', '2000-12-10', NULL, NULL, NULL, NULL, 'téléchargement (5).jpeg', 'example.png', 'téléchargement (3).png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, 1),
(7, '2023-06-01 21:12:11', '2023-06-01 21:12:11', 'Jean Jaures', 'N\'Goran', '1999-12-03', '17:23:00', 'Dabou', 1234567890, 176, 'téléchargement (1).jpeg', 'images (4).jpeg', 'images (19).png', 'Jean Charles', NULL, NULL, NULL, '2023-12-12', '0788904836', '1', '1', 1, 1, 6, 1),
(8, '2023-06-02 04:22:22', '2023-06-02 04:22:22', 'Kouamé', 'N\'Da Ephrem', '2010-10-15', NULL, 'Abidjan', 121314, 172, 'images.jpeg', 'images (11).jpeg', 'images (1).png', 'Aka Paul', NULL, NULL, NULL, '2023-06-02', '12113144141', '1', '1', 1, 21, 21, 1),
(9, '2023-06-02 08:35:32', '2023-06-02 08:35:32', 'Konan', 'Kouamé Aimé Fabrice', '2001-01-01', '00:12:00', 'Séguéla', 122131141, 174, 'images (2).jpeg', 'images (6).jpeg', 'images (3).png', 'Enock Kouamé', NULL, NULL, NULL, '2023-02-06', '0747431748', '1', '1', 1, 24, 24, 1),
(10, '2023-06-02 08:42:27', '2023-06-02 08:42:27', 'Konan', 'Kouamé Fabrice', '1988-01-01', '02:01:00', 'Séguéla', 12345, 174, 'moi.jpg', 'example.png', 'example.png', 'Enock Kouamé', NULL, NULL, NULL, '2023-01-01', '123131', '1', '1', 1, 25, 25, 1);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `meres`
--

DROP TABLE IF EXISTS `meres`;
CREATE TABLE IF NOT EXISTS `meres` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idmere` int(11) NOT NULL AUTO_INCREMENT,
  `nommere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenommere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenaissmere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idprofession` int(11) NOT NULL,
  PRIMARY KEY (`idmere`),
  KEY `meres_idprofession_foreign` (`idprofession`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `meres`
--

INSERT INTO `meres` (`created_at`, `updated_at`, `idmere`, `nommere`, `prenommere`, `datenaissmere`, `idprofession`) VALUES
('2023-05-30 07:43:55', '2023-05-30 07:43:55', 1, 'KOnan', 'Queen', '2010-04-14', 1),
('2023-05-30 11:17:12', '2023-05-30 11:17:12', 2, NULL, NULL, NULL, 1),
('2023-05-30 11:26:15', '2023-05-30 11:26:15', 3, NULL, NULL, NULL, 1),
('2023-05-30 11:29:46', '2023-05-30 11:29:46', 4, NULL, NULL, NULL, 1),
('2023-05-31 02:37:03', '2023-05-31 02:37:03', 5, NULL, NULL, NULL, 1),
('2023-05-31 02:59:16', '2023-05-31 02:59:16', 6, 'Kouamé', 'Adjoua', '2022-12-16', 1),
('2023-05-31 03:30:58', '2023-05-31 03:30:58', 7, 'aggahayauaua', 'ahhauauaaia', '2000-03-12', 1),
('2023-05-31 03:34:25', '2023-05-31 03:34:25', 8, NULL, NULL, NULL, 1),
('2023-05-31 03:37:06', '2023-05-31 03:37:06', 9, NULL, NULL, NULL, 1),
('2023-05-31 03:41:40', '2023-05-31 03:41:40', 10, NULL, NULL, NULL, 1),
('2023-05-31 03:44:05', '2023-05-31 03:44:05', 11, NULL, NULL, NULL, 1),
('2023-05-31 03:52:40', '2023-05-31 03:52:40', 12, NULL, NULL, NULL, 1),
('2023-05-31 04:09:31', '2023-05-31 04:09:31', 13, NULL, NULL, NULL, 1),
('2023-05-31 04:19:49', '2023-05-31 04:19:49', 14, NULL, NULL, NULL, 1),
('2023-05-31 04:27:15', '2023-05-31 04:27:15', 15, NULL, NULL, NULL, 1),
('2023-05-31 04:35:51', '2023-05-31 04:35:51', 16, NULL, NULL, NULL, 1),
('2023-05-31 04:41:53', '2023-05-31 04:41:53', 17, NULL, NULL, NULL, 1),
('2023-05-31 11:48:17', '2023-05-31 11:48:17', 18, NULL, NULL, NULL, 1),
('2023-06-01 12:29:58', '2023-06-01 12:29:58', 19, NULL, NULL, NULL, 1),
('2023-06-01 21:10:15', '2023-06-01 21:10:15', 20, NULL, NULL, NULL, 1),
('2023-06-02 04:18:43', '2023-06-02 04:18:43', 21, 'Koffi', 'Adjoua Ruth', '2001-10-12', 1),
('2023-06-02 08:21:20', '2023-06-02 08:21:20', 22, 'Koffi', 'Affoué Jacqueline', '1960-01-01', 1),
('2023-06-02 08:30:10', '2023-06-02 08:30:10', 23, NULL, NULL, NULL, 1),
('2023-06-02 08:33:31', '2023-06-02 08:33:31', 24, 'Koffi', 'Affoué Jacqueline', '1965-01-01', 1),
('2023-06-02 08:41:07', '2023-06-02 08:41:07', 25, 'Koffi', 'Affoué Jacqueline', '1988-01-01', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_05_29_182022_create_meres_table', 1),
(16, '2023_05_29_182733_create_peres_table', 1),
(17, '2023_05_29_183034_create_pays_table', 1),
(18, '2023_05_29_183212_create_enrolers_table', 1),
(19, '2023_05_29_183334_create_professions_table', 1),
(20, '2023_05_29_183516_create_sexes_table', 1),
(21, '2023_05_31_114001_create_statut_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `idpays` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libpays` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idpays`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idpays`, `created_at`, `updated_at`, `libpays`) VALUES
(1, NULL, NULL, 'Côte d\'Ivoire');

-- --------------------------------------------------------

--
-- Structure de la table `peres`
--

DROP TABLE IF EXISTS `peres`;
CREATE TABLE IF NOT EXISTS `peres` (
  `idpere` int(11) NOT NULL AUTO_INCREMENT,
  `nompere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenompere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenaisspere` date DEFAULT NULL,
  `idprofession` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpere`),
  KEY `peres_idprofession_foreign` (`idprofession`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `peres`
--

INSERT INTO `peres` (`idpere`, `nompere`, `prenompere`, `datenaisspere`, `idprofession`, `created_at`, `updated_at`) VALUES
(1, 'Touré', 'Aly', '1999-07-12', 1, '2023-05-30 07:42:40', '2023-05-30 07:42:40'),
(2, NULL, NULL, NULL, 1, '2023-05-30 11:17:10', '2023-05-30 11:17:10'),
(3, NULL, NULL, NULL, 1, '2023-05-30 11:26:13', '2023-05-30 11:26:13'),
(4, NULL, NULL, NULL, 1, '2023-05-30 11:29:43', '2023-05-30 11:29:43'),
(5, NULL, NULL, NULL, 1, '2023-05-31 02:37:01', '2023-05-31 02:37:01'),
(6, 'Kouassi', 'Etienne', '2000-12-10', 1, '2023-05-31 02:58:49', '2023-05-31 02:58:49'),
(7, 'ahhaa', 'auauaaai', NULL, 1, '2023-05-31 03:30:45', '2023-05-31 03:30:45'),
(8, NULL, NULL, NULL, 1, '2023-05-31 03:34:23', '2023-05-31 03:34:23'),
(9, NULL, NULL, NULL, 1, '2023-05-31 03:37:04', '2023-05-31 03:37:04'),
(10, NULL, NULL, NULL, 1, '2023-05-31 03:41:38', '2023-05-31 03:41:38'),
(11, NULL, NULL, NULL, 1, '2023-05-31 03:44:03', '2023-05-31 03:44:03'),
(12, NULL, NULL, NULL, 1, '2023-05-31 03:52:37', '2023-05-31 03:52:37'),
(13, NULL, NULL, NULL, 1, '2023-05-31 04:09:30', '2023-05-31 04:09:30'),
(14, NULL, NULL, NULL, 1, '2023-05-31 04:19:48', '2023-05-31 04:19:48'),
(15, NULL, NULL, NULL, 1, '2023-05-31 04:27:14', '2023-05-31 04:27:14'),
(16, NULL, NULL, NULL, 1, '2023-05-31 04:35:49', '2023-05-31 04:35:49'),
(17, NULL, NULL, NULL, 1, '2023-05-31 04:41:51', '2023-05-31 04:41:51'),
(18, NULL, NULL, NULL, 1, '2023-05-31 11:48:15', '2023-05-31 11:48:15'),
(19, NULL, NULL, NULL, 1, '2023-06-01 12:29:56', '2023-06-01 12:29:56'),
(20, NULL, NULL, NULL, 1, '2023-06-01 21:10:12', '2023-06-01 21:10:12'),
(21, 'Kouamé', 'Jean Luc', '2000-10-12', 1, '2023-06-02 04:18:10', '2023-06-02 04:18:10'),
(22, 'Kouassi', 'N\'Guessan Norbert', '1956-01-01', 1, '2023-06-02 08:21:04', '2023-06-02 08:21:04'),
(23, 'Kouassi', 'N\'Guessan Norbert', '1956-01-01', 1, '2023-06-02 08:30:09', '2023-06-02 08:30:09'),
(24, 'Kouassi', 'N\'Guessan Norbert', '1956-01-01', 1, '2023-06-02 08:33:14', '2023-06-02 08:33:14'),
(25, 'Kouassi', 'N\'Guessan Norbert', '1983-01-01', 1, '2023-06-02 08:40:52', '2023-06-02 08:40:52');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professions`
--

DROP TABLE IF EXISTS `professions`;
CREATE TABLE IF NOT EXISTS `professions` (
  `idprofession` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libprofession` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idprofession`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professions`
--

INSERT INTO `professions` (`idprofession`, `created_at`, `updated_at`, `libprofession`) VALUES
(1, NULL, NULL, 'Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `sexes`
--

DROP TABLE IF EXISTS `sexes`;
CREATE TABLE IF NOT EXISTS `sexes` (
  `idsexe` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `libellesexe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idsexe`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sexes`
--

INSERT INTO `sexes` (`idsexe`, `created_at`, `updated_at`, `libellesexe`) VALUES
(1, NULL, NULL, 'Masculin'),
(2, NULL, NULL, 'Feminin');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `idstatut` int(11) NOT NULL,
  `libstatut` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idstatut`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`idstatut`, `libstatut`, `created_at`, `updated_at`) VALUES
(1, 'demande', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'kouamenock00@gmail.com', NULL, 'admin', NULL, NULL, NULL),
(2, 'Enock', 'kouamenock01@gmail.com', NULL, '$2y$10$/QON.ET90oc3rgeLYpEsIet41RGU9PYLoh.16cqjSzF7MJFoDDICW', NULL, '2023-06-02 08:11:59', '2023-06-02 08:11:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
