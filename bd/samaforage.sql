-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Juillet 2018 à 06:48
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `samaforage`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE IF NOT EXISTS `abonnement` (
  `id` int(11) NOT NULL,
  `date_abonnement` date NOT NULL,
  `numero_abonnement` varchar(50) NOT NULL,
  `description_abonnement` longtext,
  `id_client` int(11) NOT NULL,
  `id_compteur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `date_abonnement`, `numero_abonnement`, `description_abonnement`, `id_client`, `id_compteur`) VALUES
(36, '2018-07-16', 'Abn2018-07-16036', 'Abonnement de Mr fall', 16, 31),
(37, '2018-07-16', 'Abn2018-07-16037', 'Abonnement de Mr seck', 17, 32),
(38, '2018-07-16', 'Abn2018-07-16038', 'Abonnement de Mr diop', 18, 33),
(39, '2018-07-31', 'Abn2018-07-31039', ' Abonnement de Mr diop-', 18, 34);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL,
  `nom_famille` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `id_village` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom_famille`, `adresse`, `tel`, `id_village`) VALUES
(16, ' fall ', ' diamaguene sicapff', ' 773452692 ', 9),
(17, 'seck', 'tata', '778574296', 11),
(18, '   diop   ', '   touba   k', '   778754982   ', 9);

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE IF NOT EXISTS `compteur` (
  `id` int(11) NOT NULL,
  `numero_compteur` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compteur`
--

INSERT INTO `compteur` (`id`, `numero_compteur`, `etat`) VALUES
(31, 'Cmpt2018-07-16101', 0),
(32, 'Cmpt2018-07-16202', 0),
(33, 'Cmpt2018-07-16303', 0),
(34, 'Cmpt2018-07-31404', 0);

-- --------------------------------------------------------

--
-- Structure de la table `consomation`
--

CREATE TABLE IF NOT EXISTS `consomation` (
  `id` bigint(255) NOT NULL,
  `index_chiffre` varchar(100) NOT NULL,
  `index_lettre` varchar(100) NOT NULL,
  `prix_litre_eau` double NOT NULL,
  `date_consomation` date NOT NULL,
  `id_compteur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `consomation`
--

INSERT INTO `consomation` (`id`, `index_chiffre`, `index_lettre`, `prix_litre_eau`, `date_consomation`, `id_compteur`) VALUES
(60, '0', 'zÃ©ro', 50, '2018-07-16', 31),
(61, '0', 'zÃ©ro', 50, '2018-07-16', 32),
(62, '0', 'zÃ©ro', 50, '2018-07-16', 33),
(63, '1000', ' mille  ', 0.5, '2018-07-16', 31),
(64, '2000', ' deux  mille  ', 0.5, '2018-07-16', 32),
(65, '0', 'zero', 50, '2018-07-31', 34),
(66, '400', 'quatre  cents  ', 0.5, '2018-07-31', 34);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL,
  `num_facture` varchar(50) NOT NULL,
  `date_facturation` date NOT NULL,
  `date_payement` date NOT NULL,
  `prix_ht` double NOT NULL,
  `tva` double NOT NULL,
  `prix_ttc` double NOT NULL,
  `id_consomation` bigint(255) NOT NULL,
  `etat` int(11) NOT NULL,
  `qte_consome` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`id`, `num_facture`, `date_facturation`, `date_payement`, `prix_ht`, `tva`, `prix_ttc`, `id_consomation`, `etat`, `qte_consome`) VALUES
(35, 'fact00', '2018-07-16', '2018-08-05', 500, 90, 590, 63, 1, 1000),
(36, 'fact0036', '2018-07-16', '2018-08-05', 1000, 180, 1180, 64, 0, 2000),
(37, 'fact0037', '2018-07-31', '2018-08-05', 200, 36, 236, 66, 0, 400);

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE IF NOT EXISTS `reglement` (
  `id` int(11) NOT NULL,
  `numero_facture` varchar(50) NOT NULL,
  `date_payement` date NOT NULL,
  `montant` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reglement`
--

INSERT INTO `reglement` (`id`, `numero_facture`, `date_payement`, `montant`) VALUES
(8, 'fact00', '2018-07-16', 590);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(11) NOT NULL,
  `valeur1` varchar(55) NOT NULL,
  `valeur2` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `test`
--

INSERT INTO `test` (`ID`, `valeur1`, `valeur2`) VALUES
(1, 'valll', 'vall'),
(2, 'fjfj', 'DAKAR Ru 6,xks'),
(3, 'testttt', '478');

-- --------------------------------------------------------

--
-- Structure de la table `type_facture`
--

CREATE TABLE IF NOT EXISTS `type_facture` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `profil` varchar(15) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `tel`, `email`, `profil`, `login`, `pwd`) VALUES
(7, 'Fall', 'Serigne Fallou', '773452692', 'fallfallou37@gmail.com', 'admin', 'fallfallou', 'passer'),
(8, 'Dieng', 'Assane', '763064257', 'diengassan@gmail.com', 'gerant', 'diengassane', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `id` int(11) NOT NULL,
  `nom_village` varchar(50) NOT NULL,
  `nom_chef_village` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `village`
--

INSERT INTO `village` (`id`, `nom_village`, `nom_chef_village`) VALUES
(9, '   tawa', '   fall   '),
(10, 'ndogal', 'diop'),
(11, 'tataguin', 'seck'),
(12, 'keur mbir', 'ndaw'),
(13, 'keur mbaye', 'ndiaye');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_details_facture`
--
CREATE TABLE IF NOT EXISTS `v_details_facture` (
`id` int(11)
,`num_facture` varchar(50)
,`date_facturation` date
,`qte_consome` double
,`date_payement` date
,`prix_ttc` double
,`index_chiffre` varchar(100)
,`prix_litre_eau` double
,`adresse` varchar(50)
,`tel` varchar(50)
,`numero_abonnement` varchar(50)
,`numero_compteur` varchar(50)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_facture`
--
CREATE TABLE IF NOT EXISTS `v_facture` (
`id` int(11)
,`num_facture` varchar(50)
,`date_facturation` date
,`qte_consome` double
,`date_payement` date
,`prix_ttc` double
,`index_chiffre` varchar(100)
,`prix_litre_eau` double
,`adresse` varchar(50)
,`tel` varchar(50)
,`numero_abonnement` varchar(50)
,`numero_compteur` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure de la vue `v_details_facture`
--
DROP TABLE IF EXISTS `v_details_facture`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_details_facture` AS select `f`.`id` AS `id`,`f`.`num_facture` AS `num_facture`,`f`.`date_facturation` AS `date_facturation`,`f`.`qte_consome` AS `qte_consome`,`f`.`date_payement` AS `date_payement`,`f`.`prix_ttc` AS `prix_ttc`,`cons`.`index_chiffre` AS `index_chiffre`,`cons`.`prix_litre_eau` AS `prix_litre_eau`,`cli`.`adresse` AS `adresse`,`cli`.`tel` AS `tel`,`a`.`numero_abonnement` AS `numero_abonnement`,`c`.`numero_compteur` AS `numero_compteur` from ((((`facture` `f` join `consomation` `cons`) join `client` `cli`) join `abonnement` `a`) join `compteur` `c`) where ((`f`.`id_consomation` = `cons`.`id`) and (`cons`.`id_compteur` = `c`.`id`) and (`a`.`id_compteur` = `c`.`id`) and (`a`.`id_client` = `cli`.`id`));

-- --------------------------------------------------------

--
-- Structure de la vue `v_facture`
--
DROP TABLE IF EXISTS `v_facture`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_facture` AS select `f`.`id` AS `id`,`f`.`num_facture` AS `num_facture`,`f`.`date_facturation` AS `date_facturation`,`f`.`qte_consome` AS `qte_consome`,`f`.`date_payement` AS `date_payement`,`f`.`prix_ttc` AS `prix_ttc`,`cons`.`index_chiffre` AS `index_chiffre`,`cons`.`prix_litre_eau` AS `prix_litre_eau`,`cli`.`adresse` AS `adresse`,`cli`.`tel` AS `tel`,`a`.`numero_abonnement` AS `numero_abonnement`,`c`.`numero_compteur` AS `numero_compteur` from ((((`facture` `f` join `consomation` `cons`) join `client` `cli`) join `abonnement` `a`) join `compteur` `c`) where ((`f`.`id_consomation` = `cons`.`id`) and (`cons`.`id_compteur` = `c`.`id`) and (`a`.`id_compteur` = `c`.`id`) and (`a`.`id_client` = `cli`.`id`));

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_compteur` (`id_compteur`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_village` (`id_village`);

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consomation`
--
ALTER TABLE `consomation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_compteur` (`id_compteur`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_consomation` (`id_consomation`),
  ADD KEY `id_type` (`qte_consome`),
  ADD KEY `num_facture` (`num_facture`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numero_facture` (`numero_facture`),
  ADD KEY `numero_facture_2` (`numero_facture`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `type_facture`
--
ALTER TABLE `type_facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Index pour la table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `consomation`
--
ALTER TABLE `consomation`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_facture`
--
ALTER TABLE `type_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `village`
--
ALTER TABLE `village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `abonnement_ibfk_2` FOREIGN KEY (`id_compteur`) REFERENCES `compteur` (`id`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_village`) REFERENCES `village` (`id`);

--
-- Contraintes pour la table `consomation`
--
ALTER TABLE `consomation`
  ADD CONSTRAINT `consomation_ibfk_1` FOREIGN KEY (`id_compteur`) REFERENCES `compteur` (`id`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_3` FOREIGN KEY (`id_consomation`) REFERENCES `consomation` (`id`);

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `reglement_ibfk_1` FOREIGN KEY (`numero_facture`) REFERENCES `facture` (`num_facture`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
