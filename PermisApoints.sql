-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 24 fév. 2023 à 22:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `PermisApoints`
--

-- --------------------------------------------------------

--
-- Structure de la table `AgentCirculation`
--

CREATE TABLE `AgentCirculation` (
  `matricule` varchar(50) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `motdepasse` varchar(20) DEFAULT NULL,
  `posteDePolice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `AgentCirculation`
--

INSERT INTO `AgentCirculation` (`matricule`, `nom`, `prenom`, `motdepasse`, `posteDePolice`) VALUES
('1234a', 'Mbaye', 'Idrissa', 'passera', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `AgentGouvernemental`
--

CREATE TABLE `AgentGouvernemental` (
  `matricule` varchar(50) NOT NULL,
  `poste` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `motdepasse` varchar(20) DEFAULT NULL,
  `posteDePolice` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `AgentGouvernemental`
--

INSERT INTO `AgentGouvernemental` (`matricule`, `poste`, `nom`, `prenom`, `motdepasse`, `posteDePolice`) VALUES
('abcd1', 'chef de poste', 'Gueye', 'Idrissa', 'passer', 'Thiaroye');

-- --------------------------------------------------------

--
-- Structure de la table `Automobilistes`
--

CREATE TABLE `Automobilistes` (
  `numeroPermis` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `numeroTelephone` int(11) DEFAULT NULL,
  `nbPoints` int(11) DEFAULT 6,
  `motdepasse` varchar(20) DEFAULT NULL,
  `derniereModification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Automobilistes`
--

INSERT INTO `Automobilistes` (`numeroPermis`, `nom`, `prenom`, `adresse`, `numeroTelephone`, `nbPoints`, `motdepasse`, `derniereModification`) VALUES
(12341, 'Gueye', 'Fama', 'Rouen', NULL, 12, 'passer', '2023-02-06 11:41:37');

-- --------------------------------------------------------

--
-- Structure de la table `Infractions`
--

CREATE TABLE `Infractions` (
  `id` int(11) NOT NULL,
  `classe` int(11) NOT NULL,
  `minoree` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `amende` int(11) NOT NULL,
  `majoree` int(11) NOT NULL,
  `maxima` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `titre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `savoirdujour`
--

CREATE TABLE `savoirdujour` (
  `id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `savoirdujour`
--

INSERT INTO `savoirdujour` (`id`, `description`) VALUES
(1, 'Le permis de conduire est doté d’un capital maximal de 12 points, acquis de manière progressive au cours de la période probatoire. Le nombre de points est réduit automatiquement à la suite d’une ou plusieurs infractions pour lesquelles le retrait est prévu par le code de la route. '),
(2, 'Le permis de conduire est constitué au plus d’un capital de 12 points. En cas d’infraction au code de la route, ou en cas de responsabilité dans un accident corporel, un retrait de point(s) est effectué. La plateforme permet de connaître le nombre de points restant sur le permis de conduire.'),
(3, 'Certaines infractions au code de la route entraînent un retrait de point(s). Après un laps de temps, si aucune nouvelle infraction n\'a été commise, le conducteur récupère automatiquement ses points. En revanche, si le solde de points est nul, le conducteur peut devoir repasser son permis de conduire.'),
(4, 'Des stages de sensibilisation permettent de récupérer tout ou une partie des points perdus. La participation à un stage est la plupart du temps volontaire, mais elle peut aussi être proposée par un juge en remplacement d’une sanction. Elle est obligatoire quand le titulaire d’un permis probatoire a commis une infraction sanctionnée par un retrait d’au moins trois points.'),
(5, 'Les points sont retirés de votre permis lorsque la réalité d’une infraction a été établie. Si plusieurs infractions sont constatées simultanément, 8 points peuvent être retirés au maximum (dans la limite du nombre maximal de points dont est doté votre permis).');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `AgentCirculation`
--
ALTER TABLE `AgentCirculation`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `AgentGouvernemental`
--
ALTER TABLE `AgentGouvernemental`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `Automobilistes`
--
ALTER TABLE `Automobilistes`
  ADD PRIMARY KEY (`numeroPermis`) USING BTREE;

--
-- Index pour la table `Infractions`
--
ALTER TABLE `Infractions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `savoirdujour`
--
ALTER TABLE `savoirdujour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `savoirdujour`
--
ALTER TABLE `savoirdujour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
