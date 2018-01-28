-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 20 Janvier 2018 à 21:40
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `orh`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `ID_ACT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_ACT` varchar(256) NOT NULL,
  `DESC_ACT` text NOT NULL,
  `PATH_IMG_ACT` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_ACT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_HAB` int(11) NOT NULL,
  `ID_ADMIN_SUPER` int(11) DEFAULT NULL,
  `NOM_ADMIN` varchar(256) NOT NULL,
  `PRENOM_ADMIN` varchar(256) NOT NULL,
  `EMAIL_ADMIN` varchar(40) NOT NULL,
  `PATH_PHOTO_ADMIN` varchar(256) NOT NULL,
  `CONTACT_ADMIN` varchar(20) NOT NULL,
  `DATE_CREA_ADMIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CLE_ADMIN` varchar(256) NOT NULL,
  `ACTIF_ADMIN` int(11) NOT NULL,
  PRIMARY KEY (`ID_ADMIN`),
  KEY `ID_HAB` (`ID_HAB`),
  KEY `ID_ADMIN_SUPER` (`ID_ADMIN_SUPER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `autre_doc`
--

DROP TABLE IF EXISTS `autre_doc`;
CREATE TABLE IF NOT EXISTS `autre_doc` (
  `ID_AUTRE_DOC` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_AUTRE_DOC` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_AUTRE_DOC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_dom`
--

DROP TABLE IF EXISTS `avoir_dom`;
CREATE TABLE IF NOT EXISTS `avoir_dom` (
  `ID_CND` int(11) NOT NULL,
  `ID_DOM` int(11) NOT NULL,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_DOM` (`ID_DOM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `ID_CND` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GENRE` int(11) NOT NULL,
  `ID_NIVEAU` int(11) NOT NULL,
  `ID_CONTRAT` int(11) NOT NULL,
  `ID_NAT` int(11) NOT NULL,
  `NOM_CND` varchar(256) NOT NULL,
  `PRENOM_CND` varchar(256) NOT NULL,
  `DATE_NAISS_CND` date NOT NULL,
  `CONTACT_CND` varchar(20) NOT NULL,
  `EMAIL_CND` varchar(40) NOT NULL,
  `ANNEE_EXP_CND` int(11) NOT NULL,
  `PATH_PHOTO_CND` varchar(256) NOT NULL,
  `CLE_CND` varchar(256) NOT NULL,
  `ACTIF_CND` int(11) NOT NULL,
  PRIMARY KEY (`ID_CND`),
  UNIQUE KEY `ID_NIVEAU` (`ID_NIVEAU`),
  UNIQUE KEY `ID_CONTRAT` (`ID_CONTRAT`),
  KEY `ID_GENRE` (`ID_GENRE`),
  KEY `ID_NAT` (`ID_NAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `changer_hab`
--

DROP TABLE IF EXISTS `changer_hab`;
CREATE TABLE IF NOT EXISTS `changer_hab` (
  `ID_ADMIN_SUPER` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `DATE_CHANGE_HAB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN_SUPER` (`ID_ADMIN_SUPER`),
  KEY `ID_ADMIN` (`ID_ADMIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `changer_statut_ent`
--

DROP TABLE IF EXISTS `changer_statut_ent`;
CREATE TABLE IF NOT EXISTS `changer_statut_ent` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_ENT` int(11) NOT NULL,
  `ID_SATUT_ENT` int(11) NOT NULL,
  `DATE_CHANGE_STATUT_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_ENT` (`ID_ENT`),
  KEY `ID_SATUT_ENT` (`ID_SATUT_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte_admin`
--

DROP TABLE IF EXISTS `compte_admin`;
CREATE TABLE IF NOT EXISTS `compte_admin` (
  `ID_COMPTE_ADMIN` int(11) NOT NULL AUTO_INCREMENT,
  `MDP_COMPTE_ADMIN` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_COMPTE_ADMIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte_cnd`
--

DROP TABLE IF EXISTS `compte_cnd`;
CREATE TABLE IF NOT EXISTS `compte_cnd` (
  `ID_COMPTE_CND` int(11) NOT NULL AUTO_INCREMENT,
  `MDP_COMPTE_CND` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_COMPTE_CND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte_ent`
--

DROP TABLE IF EXISTS `compte_ent`;
CREATE TABLE IF NOT EXISTS `compte_ent` (
  `ID_COMPTE_ENT` int(11) NOT NULL AUTO_INCREMENT,
  `MDP_COMPTE_ENT` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_COMPTE_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `connexion_admin`
--

DROP TABLE IF EXISTS `connexion_admin`;
CREATE TABLE IF NOT EXISTS `connexion_admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_COMPTE_ADMIN` int(11) NOT NULL,
  `DATE_CONN_ADMIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_COMPTE_ADMIN` (`ID_COMPTE_ADMIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `connexion_cnd`
--

DROP TABLE IF EXISTS `connexion_cnd`;
CREATE TABLE IF NOT EXISTS `connexion_cnd` (
  `ID_CND` int(11) NOT NULL,
  `ID_COMPTE` int(11) NOT NULL,
  `DATE_CON_CND` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_COMPTE` (`ID_COMPTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `connexion_ent`
--

DROP TABLE IF EXISTS `connexion_ent`;
CREATE TABLE IF NOT EXISTS `connexion_ent` (
  `ID_ENT` int(11) NOT NULL,
  `ID_COMPTE_ENT` int(11) NOT NULL,
  `DATE_CONN_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ENT` (`ID_ENT`),
  KEY `ID_COMPTE_ENT` (`ID_COMPTE_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `ID_CONTRAT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_CONTRAT` varchar(256) NOT NULL,
  `DESC_CONTRAT` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_CONTRAT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contrat`
--

INSERT INTO `contrat` (`ID_CONTRAT`, `LIB_CONTRAT`, `DESC_CONTRAT`) VALUES
(1, 'CDD', ''),
(2, 'CDI', ''),
(3, 'Intérim', ''),
(4, 'Autre', ''),
(5, 'Stage', '');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `ID_CV` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_CV` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `domaine_comp`
--

DROP TABLE IF EXISTS `domaine_comp`;
CREATE TABLE IF NOT EXISTS `domaine_comp` (
  `ID_DOM` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_DOM` varchar(256) NOT NULL,
  `DESC_DOM` text,
  PRIMARY KEY (`ID_DOM`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `domaine_comp`
--

INSERT INTO `domaine_comp` (`ID_DOM`, `LIB_DOM`, `DESC_DOM`) VALUES
(24, 'Déclarant en douane / Déclarante en douane', NULL),
(25, 'Décorateur scénographe / Décoratrice scénographe', NULL),
(26, 'Démographe', NULL),
(27, 'Designer industriel', NULL),
(28, 'Directeur administratif et financier', NULL),
(29, 'Directeur artistique / Directrice artistique', NULL),
(30, 'Directeur d''hôtel', NULL),
(31, 'Directeur de la photographie', NULL),
(32, 'Directeur des ressources humaines', NULL),
(33, 'Directeur informatique', NULL),
(34, 'Documentaliste', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ecrire_act`
--

DROP TABLE IF EXISTS `ecrire_act`;
CREATE TABLE IF NOT EXISTS `ecrire_act` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_ACT` int(11) NOT NULL,
  `DATE_ECRIRE_ACT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_ACT` (`ID_ACT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecrire_offre_site`
--

DROP TABLE IF EXISTS `ecrire_offre_site`;
CREATE TABLE IF NOT EXISTS `ecrire_offre_site` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_OFFRE_SITE` int(11) NOT NULL,
  `DATE_ECRIRE_OFFRE_SITE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_OFFRE_SITE` (`ID_OFFRE_SITE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecrire_serv_cnd`
--

DROP TABLE IF EXISTS `ecrire_serv_cnd`;
CREATE TABLE IF NOT EXISTS `ecrire_serv_cnd` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_SERV_CND` int(11) NOT NULL,
  `DATE_ECRIRE_SERV_CND` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_SERV_CND` (`ID_SERV_CND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecrire_serv_ent`
--

DROP TABLE IF EXISTS `ecrire_serv_ent`;
CREATE TABLE IF NOT EXISTS `ecrire_serv_ent` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_SERV_ENT` int(11) NOT NULL,
  `DATE_ECRIRE_SERV_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_SERV_ENT` (`ID_SERV_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `ID_ENT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_INTER` int(11) NOT NULL,
  `ID_TYPE_SOC` int(11) NOT NULL,
  `ID_FORM_JUR` int(11) NOT NULL,
  `ID_STATUT_ENT` int(11) NOT NULL,
  `SIGLE_ENT` varchar(30) NOT NULL,
  `EMAIL_ENT` varchar(30) NOT NULL,
  `RAISON_SOCIALE_ENT` text NOT NULL,
  `COMPTE_CONTRIB_ENT` varchar(50) NOT NULL,
  `REG_COM_ENT` varchar(50) NOT NULL,
  `TEL_ENT` varchar(20) NOT NULL,
  `ADRESSE_POST_ENT` varchar(30) NOT NULL,
  `SITE_ENT` varchar(30) DEFAULT NULL,
  `FAX_ENT` varchar(30) DEFAULT NULL,
  `PATH_LOGO_ENT` varchar(256) NOT NULL,
  `CLE_ENT` varchar(256) NOT NULL,
  `ACTIF_ENT` int(11) NOT NULL,
  PRIMARY KEY (`ID_ENT`),
  KEY `ID_INTER` (`ID_INTER`),
  KEY `ID_TYPE_SOC` (`ID_TYPE_SOC`),
  KEY `ID_FORM_JUR` (`ID_FORM_JUR`),
  KEY `ID_FORM_JUR_2` (`ID_FORM_JUR`),
  KEY `ID_STATUT_ENT` (`ID_STATUT_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `envoi_cv`
--

DROP TABLE IF EXISTS `envoi_cv`;
CREATE TABLE IF NOT EXISTS `envoi_cv` (
  `ID_CND` int(11) NOT NULL,
  `ID_CV` int(11) NOT NULL,
  `ID_TYPE_CV` int(11) NOT NULL,
  `DATE_ENVOI_CV` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATE_MODIF_CV` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_CV` (`ID_CV`),
  KEY `ID_TYPE_CV` (`ID_TYPE_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `envoi_doc`
--

DROP TABLE IF EXISTS `envoi_doc`;
CREATE TABLE IF NOT EXISTS `envoi_doc` (
  `ID_CND` int(11) NOT NULL,
  `ID_AUTRE_DOC` int(11) NOT NULL,
  `ID_TYPE_DOC` int(11) NOT NULL,
  `DATE_DEPOT_DOC` timestamp NOT NULL,
  `DATE_MODIF_DOC` timestamp NOT NULL,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_AUTRE_DOC` (`ID_AUTRE_DOC`),
  KEY `ID_TYPE_DOC` (`ID_TYPE_DOC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forme_juridique`
--

DROP TABLE IF EXISTS `forme_juridique`;
CREATE TABLE IF NOT EXISTS `forme_juridique` (
  `ID_FORM_JUR` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_FORM_JUR` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_FORM_JUR`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `forme_juridique`
--

INSERT INTO `forme_juridique` (`ID_FORM_JUR`, `LIB_FORM_JUR`) VALUES
(1, 'SA'),
(2, 'SARL'),
(3, 'Entreprise Individuelle'),
(4, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `ID_GENRE` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_GENRE` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_GENRE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`ID_GENRE`, `LIB_GENRE`) VALUES
(1, 'Homme'),
(2, 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `ID_HAB` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_HAB` varchar(256) NOT NULL,
  `DESC_HAB` int(11) NOT NULL,
  `voir` int(11) NOT NULL,
  `cecrire` int(11) NOT NULL,
  `supp` int(11) NOT NULL,
  `super` int(11) NOT NULL,
  PRIMARY KEY (`ID_HAB`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `interlocuteur`
--

DROP TABLE IF EXISTS `interlocuteur`;
CREATE TABLE IF NOT EXISTS `interlocuteur` (
  `ID_INTER` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_INTER` varchar(256) NOT NULL,
  `PRENOM_INTER` varchar(256) NOT NULL,
  `FONCTION _INTER` varchar(256) NOT NULL,
  `EMAIL_INTER` varchar(40) NOT NULL,
  `PATH_PHOTO_INTER` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_INTER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `ID_LANG` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_LANG` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_LANG`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `langue`
--

INSERT INTO `langue` (`ID_LANG`, `LIB_LANG`) VALUES
(1, 'Anglais'),
(2, 'Allemand'),
(3, 'Espagnol'),
(4, 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `localiser_cnd`
--

DROP TABLE IF EXISTS `localiser_cnd`;
CREATE TABLE IF NOT EXISTS `localiser_cnd` (
  `ID_CND` int(11) NOT NULL,
  `ID_PAYS` int(11) NOT NULL,
  `ID_VILLE` int(11) NOT NULL,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_PAYS` (`ID_PAYS`),
  KEY `ID_VILLE` (`ID_VILLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nationnalite`
--

DROP TABLE IF EXISTS `nationnalite`;
CREATE TABLE IF NOT EXISTS `nationnalite` (
  `ID_NAT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_NAT` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_NAT`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nationnalite`
--

INSERT INTO `nationnalite` (`ID_NAT`, `LIB_NAT`) VALUES
(1, 'Ivoirienne - Côte D''ivoire');

-- --------------------------------------------------------

--
-- Structure de la table `niveau_etude`
--

DROP TABLE IF EXISTS `niveau_etude`;
CREATE TABLE IF NOT EXISTS `niveau_etude` (
  `ID_NIVEAU` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_NIVEAU` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_NIVEAU`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `niveau_etude`
--

INSERT INTO `niveau_etude` (`ID_NIVEAU`, `LIB_NIVEAU`) VALUES
(1, 'BAC+2'),
(2, 'BAC+3'),
(3, 'BAC+4'),
(4, 'BAC+5'),
(5, 'BAC+6'),
(6, 'BAC+7'),
(7, 'BAC+8'),
(8, 'BAC+8 et +'),
(9, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `offre_ent`
--

DROP TABLE IF EXISTS `offre_ent`;
CREATE TABLE IF NOT EXISTS `offre_ent` (
  `ID_OFFRE_ENT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ENT` int(11) NOT NULL,
  `PATH_OFFRE_ENT` int(11) NOT NULL,
  `DATE_OFFRE_ENT` timestamp NOT NULL,
  PRIMARY KEY (`ID_OFFRE_ENT`),
  KEY `ID_ENT` (`ID_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre_site`
--

DROP TABLE IF EXISTS `offre_site`;
CREATE TABLE IF NOT EXISTS `offre_site` (
  `ID_OFFRE_SITE` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_OFFRE_SITE` varchar(256) NOT NULL,
  `DESC_OFFRE_SITE` text NOT NULL,
  PRIMARY KEY (`ID_OFFRE_SITE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `opere`
--

DROP TABLE IF EXISTS `opere`;
CREATE TABLE IF NOT EXISTS `opere` (
  `ID_ENT` int(11) NOT NULL,
  `ID_SECT` int(11) NOT NULL,
  KEY `ID_ENT` (`ID_ENT`),
  KEY `ID_SECT` (`ID_SECT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parler`
--

DROP TABLE IF EXISTS `parler`;
CREATE TABLE IF NOT EXISTS `parler` (
  `ID_CND` int(11) NOT NULL,
  `ID_LANG` int(11) NOT NULL,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_LANG` (`ID_LANG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `ID_PAYS` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_PAYS` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_PAYS`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`ID_PAYS`, `LIB_PAYS`) VALUES
(1, 'Côte D''ivoire');

-- --------------------------------------------------------

--
-- Structure de la table `secteur_act`
--

DROP TABLE IF EXISTS `secteur_act`;
CREATE TABLE IF NOT EXISTS `secteur_act` (
  `ID_SECT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_SECT` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_SECT`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secteur_act`
--

INSERT INTO `secteur_act` (`ID_SECT`, `LIB_SECT`) VALUES
(1, 'Achat / Logistique / Transport \r\n'),
(2, 'Administration - Secrétariat/ Services publics'),
(3, '\r\nAgriculture\r\n'),
(4, 'Association / ONG'),
(5, '\r\nAudit et Conseil\r\n'),
(6, 'Automobile'),
(7, 'Banque / Assurances/Finances'),
(8, 'BTP / Architecture'),
(9, 'Commerces et services de proximité'),
(10, 'Commercial / Vente/ Distribution'),
(11, 'Communication / Marketing / Relations publiques / Publicité'),
(12, 'Direction Générale'),
(13, 'Education / Formation / Animation'),
(14, 'Environnement / Assainissement / Recyclage'),
(15, 'Gestion / Comptabilité / Finance / Fiscalité'),
(16, 'Hôtellerie / Restauration / Tourisme'),
(17, 'Tout Corps de Métiers  en Matière de Construction'),
(18, 'Industrie / Production/ Mines'),
(19, 'Informatique / Télécom'),
(20, 'Juridique'),
(21, 'Multimédia/ Loisirs'),
(22, 'Recherche et Développement'),
(23, 'Ressources Humaines'),
(24, 'Santé / Social'),
(25, 'Sécurité Surveillance et Gardiennage'),
(26, 'Certification');

-- --------------------------------------------------------

--
-- Structure de la table `service_cnd`
--

DROP TABLE IF EXISTS `service_cnd`;
CREATE TABLE IF NOT EXISTS `service_cnd` (
  `ID_SERV_CND` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_SERV_CND` varchar(256) NOT NULL,
  `DESC_SERV_CND` text NOT NULL,
  PRIMARY KEY (`ID_SERV_CND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service_ent`
--

DROP TABLE IF EXISTS `service_ent`;
CREATE TABLE IF NOT EXISTS `service_ent` (
  `ID_SERV_ENT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_SERV_ENT` varchar(256) NOT NULL,
  `DES_SERV_ENT` text NOT NULL,
  PRIMARY KEY (`ID_SERV_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sit_matrimoniale`
--

DROP TABLE IF EXISTS `sit_matrimoniale`;
CREATE TABLE IF NOT EXISTS `sit_matrimoniale` (
  `ID_SIT_MAT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_SIT_MAT` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_SIT_MAT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sit_matrimoniale`
--

INSERT INTO `sit_matrimoniale` (`ID_SIT_MAT`, `LIB_SIT_MAT`) VALUES
(1, 'Célibataire'),
(2, 'Marié(e)'),
(3, 'Divorcé(e)'),
(4, 'Veuf(ve)'),
(5, 'Concubin(e)');

-- --------------------------------------------------------

--
-- Structure de la table `sit_professionnelle`
--

DROP TABLE IF EXISTS `sit_professionnelle`;
CREATE TABLE IF NOT EXISTS `sit_professionnelle` (
  `ID_SIT_PROF` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_SIT_PROF` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_SIT_PROF`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sit_professionnelle`
--

INSERT INTO `sit_professionnelle` (`ID_SIT_PROF`, `LIB_SIT_PROF`) VALUES
(1, 'Stagiaire'),
(2, 'Sans emploi'),
(3, 'En quête d''une première expérience'),
(4, 'Indépendant'),
(5, 'Salarié');

-- --------------------------------------------------------

--
-- Structure de la table `souscrire_cnd`
--

DROP TABLE IF EXISTS `souscrire_cnd`;
CREATE TABLE IF NOT EXISTS `souscrire_cnd` (
  `ID_CND` int(11) NOT NULL,
  `ID_SERV_CND` int(11) NOT NULL,
  `DATE_SOUSCR_CND` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_CND` (`ID_CND`),
  KEY `ID_SERV_CND` (`ID_SERV_CND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `souscrire_ent`
--

DROP TABLE IF EXISTS `souscrire_ent`;
CREATE TABLE IF NOT EXISTS `souscrire_ent` (
  `ID_ENT` int(11) NOT NULL,
  `ID_SERV_ENT` int(11) NOT NULL,
  `DATE_SOUSCRIRE_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ENT` (`ID_ENT`),
  KEY `ID_SERV_ENT` (`ID_SERV_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `statut_ent`
--

DROP TABLE IF EXISTS `statut_ent`;
CREATE TABLE IF NOT EXISTS `statut_ent` (
  `ID_STATUT_ENT` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_STATUT_ENT` varchar(256) NOT NULL,
  `DESC_STATUT_ENT` varchar(256) NOT NULL,
  `OFFRE_STATUT_ENT` int(11) NOT NULL,
  PRIMARY KEY (`ID_STATUT_ENT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `statut_ent`
--

INSERT INTO `statut_ent` (`ID_STATUT_ENT`, `LIB_STATUT_ENT`, `DESC_STATUT_ENT`, `OFFRE_STATUT_ENT`) VALUES
(1, 'En attente de confirmation', 'ORH vérifie les informations de votre entreprise', 0),
(2, 'Confirmé', 'Vos informations ont été vérifiées. Vous pouvez commençer à déposer vos offres.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `supp_act`
--

DROP TABLE IF EXISTS `supp_act`;
CREATE TABLE IF NOT EXISTS `supp_act` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_ACT` int(11) NOT NULL,
  `DATE_SUPP_ACT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_ACT` (`ID_ACT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `supp_offre_site`
--

DROP TABLE IF EXISTS `supp_offre_site`;
CREATE TABLE IF NOT EXISTS `supp_offre_site` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_OFFRE_SITE` int(11) NOT NULL,
  `DATE_SUPP_OFFRE_SITE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `supp_serv_cnd`
--

DROP TABLE IF EXISTS `supp_serv_cnd`;
CREATE TABLE IF NOT EXISTS `supp_serv_cnd` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_SERV_CND` int(11) NOT NULL,
  `DATE_SUPP_SERV_CND` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_SERV_CND` (`ID_SERV_CND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `supp_serv_ent`
--

DROP TABLE IF EXISTS `supp_serv_ent`;
CREATE TABLE IF NOT EXISTS `supp_serv_ent` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_SERV_ENT` int(11) NOT NULL,
  `DATE_SUPP_SERV_CND_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_SERV_ENT` (`ID_SERV_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb`
--

DROP TABLE IF EXISTS `tb`;
CREATE TABLE IF NOT EXISTS `tb` (
  `id` int(11) NOT NULL,
  `lib` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tb`
--

INSERT INTO `tb` (`id`, `lib`) VALUES
(1, 'degni'),
(2, 'beugre');

-- --------------------------------------------------------

--
-- Structure de la table `type_cv`
--

DROP TABLE IF EXISTS `type_cv`;
CREATE TABLE IF NOT EXISTS `type_cv` (
  `ID_TYPE_CV` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_TYPE_CV` int(11) NOT NULL,
  PRIMARY KEY (`ID_TYPE_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_doc`
--

DROP TABLE IF EXISTS `type_doc`;
CREATE TABLE IF NOT EXISTS `type_doc` (
  `ID_TYPE_DOC` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_TYPE_DOC` varchar(256) NOT NULL,
  `EXTENSION` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_TYPE_DOC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_societe`
--

DROP TABLE IF EXISTS `type_societe`;
CREATE TABLE IF NOT EXISTS `type_societe` (
  `ID_TYPE_SOC` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_TYPE_SOC` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_TYPE_SOC`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_societe`
--

INSERT INTO `type_societe` (`ID_TYPE_SOC`, `LIB_TYPE_SOC`) VALUES
(1, 'Multinationale'),
(2, 'Privée internationale'),
(3, 'Privéé nationale'),
(4, 'Publique'),
(5, 'Semi-publique'),
(6, 'PME/PMI');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `ID_VILLE` int(11) NOT NULL AUTO_INCREMENT,
  `LIB_VILLE` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_VILLE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`ID_VILLE`, `LIB_VILLE`) VALUES
(1, 'Abidjan');

-- --------------------------------------------------------

--
-- Structure de la table `voir_cnd`
--

DROP TABLE IF EXISTS `voir_cnd`;
CREATE TABLE IF NOT EXISTS `voir_cnd` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_CND` int(11) NOT NULL,
  `DATE_VOIR_CND` timestamp NOT NULL,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_CND` (`ID_CND`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `voir_cv`
--

DROP TABLE IF EXISTS `voir_cv`;
CREATE TABLE IF NOT EXISTS `voir_cv` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_CV` int(11) NOT NULL,
  `DATE_VOIR_CV` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_CV` (`ID_CV`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `voir_offre_ent`
--

DROP TABLE IF EXISTS `voir_offre_ent`;
CREATE TABLE IF NOT EXISTS `voir_offre_ent` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_OFFRE_ENT` int(11) NOT NULL,
  `DATE_VOIR_OFFRE_ENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `ID_ADMIN` (`ID_ADMIN`),
  KEY `ID_OFFRE_ENT` (`ID_OFFRE_ENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FKADMIN_ID_ADMIN_SUPER` FOREIGN KEY (`ID_ADMIN_SUPER`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKADMIN_ID_HAB` FOREIGN KEY (`ID_HAB`) REFERENCES `habilitation` (`ID_HAB`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `avoir_dom`
--
ALTER TABLE `avoir_dom`
  ADD CONSTRAINT `fk_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ID_DOM` FOREIGN KEY (`ID_DOM`) REFERENCES `domaine_comp` (`ID_DOM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `FK_CANDIDAT_ID_CONTRAT` FOREIGN KEY (`ID_CONTRAT`) REFERENCES `contrat` (`ID_CONTRAT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CANDIDAT_ID_GENRE` FOREIGN KEY (`ID_GENRE`) REFERENCES `genre` (`ID_GENRE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CANDIDAT_ID_NAT` FOREIGN KEY (`ID_NAT`) REFERENCES `nationnalite` (`ID_NAT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CANDIDAT_ID_NIVEAU` FOREIGN KEY (`ID_NIVEAU`) REFERENCES `niveau_etude` (`ID_NIVEAU`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `changer_hab`
--
ALTER TABLE `changer_hab`
  ADD CONSTRAINT `FK_CHANGER_HAB_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CHANGER_HAB_ID_ADMIN_SUPER` FOREIGN KEY (`ID_ADMIN_SUPER`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `changer_statut_ent`
--
ALTER TABLE `changer_statut_ent`
  ADD CONSTRAINT `FK_CHANGESTATUTENT_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CHANGESTATUTENT_ID_ENT` FOREIGN KEY (`ID_ENT`) REFERENCES `entreprise` (`ID_ENT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CHANGESTATUTENT_ID_STATUT_ENT` FOREIGN KEY (`ID_SATUT_ENT`) REFERENCES `statut_ent` (`ID_STATUT_ENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `connexion_admin`
--
ALTER TABLE `connexion_admin`
  ADD CONSTRAINT `FKCONNEXIONADMIN_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKCONNEXIONADMIN_ID_cOMPTE_ADMIN` FOREIGN KEY (`ID_COMPTE_ADMIN`) REFERENCES `compte_admin` (`ID_COMPTE_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `connexion_cnd`
--
ALTER TABLE `connexion_cnd`
  ADD CONSTRAINT `FK_CONNEXIONCND_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CONNEXIONCND_ID_COMPTE` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte_cnd` (`ID_COMPTE_CND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ecrire_act`
--
ALTER TABLE `ecrire_act`
  ADD CONSTRAINT `FK_ECRIREACT_ID_ACT` FOREIGN KEY (`ID_ACT`) REFERENCES `actualite` (`ID_ACT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ECRIREACT_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ecrire_offre_site`
--
ALTER TABLE `ecrire_offre_site`
  ADD CONSTRAINT `FK_ECRIREOFFRESITE_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ECRIREOFFRESITE_ID_OFFRE_SITE` FOREIGN KEY (`ID_OFFRE_SITE`) REFERENCES `offre_site` (`ID_OFFRE_SITE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ecrire_serv_cnd`
--
ALTER TABLE `ecrire_serv_cnd`
  ADD CONSTRAINT `FK_ECRIRESERVCND_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ECRIRESERVCND_ID_SERV_CND` FOREIGN KEY (`ID_SERV_CND`) REFERENCES `service_cnd` (`ID_SERV_CND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ecrire_serv_ent`
--
ALTER TABLE `ecrire_serv_ent`
  ADD CONSTRAINT `FK_ECRIRESERVENT_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ECRIRESERVENT_ID_SERV_ENT` FOREIGN KEY (`ID_SERV_ENT`) REFERENCES `service_ent` (`ID_SERV_ENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `FK_ENTREPRISE_ID_FORM_JUR` FOREIGN KEY (`ID_FORM_JUR`) REFERENCES `forme_juridique` (`ID_FORM_JUR`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENTREPRISE_ID_INTER` FOREIGN KEY (`ID_INTER`) REFERENCES `interlocuteur` (`ID_INTER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENTREPRISE_ID_STATUT_ENT` FOREIGN KEY (`ID_STATUT_ENT`) REFERENCES `statut_ent` (`ID_STATUT_ENT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENTREPRISE_ID_TYPE_SOC` FOREIGN KEY (`ID_TYPE_SOC`) REFERENCES `type_societe` (`ID_TYPE_SOC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `envoi_cv`
--
ALTER TABLE `envoi_cv`
  ADD CONSTRAINT `FK_ENVOICV_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENVOICV_ID_CV` FOREIGN KEY (`ID_CV`) REFERENCES `cv` (`ID_CV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENVOICV_ID_TYPE_CV` FOREIGN KEY (`ID_TYPE_CV`) REFERENCES `type_cv` (`ID_TYPE_CV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `envoi_doc`
--
ALTER TABLE `envoi_doc`
  ADD CONSTRAINT `FK_ENVOIDOC_ID_AUTRE_DOC` FOREIGN KEY (`ID_AUTRE_DOC`) REFERENCES `autre_doc` (`ID_AUTRE_DOC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENVOIDOC_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ENVOIDOC_ID_TYPE_DOC` FOREIGN KEY (`ID_TYPE_DOC`) REFERENCES `type_doc` (`ID_TYPE_DOC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `localiser_cnd`
--
ALTER TABLE `localiser_cnd`
  ADD CONSTRAINT `FK_LOCALISERCND_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LOCALISERCND_ID_PAYS` FOREIGN KEY (`ID_PAYS`) REFERENCES `pays` (`ID_PAYS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_LOCALISERCND_ID_VILLE` FOREIGN KEY (`ID_VILLE`) REFERENCES `ville` (`ID_VILLE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offre_ent`
--
ALTER TABLE `offre_ent`
  ADD CONSTRAINT `FK_OFFRIREMPLOIENT_ID_ENT` FOREIGN KEY (`ID_ENT`) REFERENCES `entreprise` (`ID_ENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `parler`
--
ALTER TABLE `parler`
  ADD CONSTRAINT `fk_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_LANG` FOREIGN KEY (`ID_LANG`) REFERENCES `langue` (`ID_LANG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `souscrire_cnd`
--
ALTER TABLE `souscrire_cnd`
  ADD CONSTRAINT `FK_SOUSCRIRECND_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SOUSCRIRECND_ID_SERV_CND` FOREIGN KEY (`ID_SERV_CND`) REFERENCES `service_cnd` (`ID_SERV_CND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `souscrire_ent`
--
ALTER TABLE `souscrire_ent`
  ADD CONSTRAINT `FK_SOUSCRIREENT_ID_ENT` FOREIGN KEY (`ID_ENT`) REFERENCES `entreprise` (`ID_ENT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SOUSCRIREENT_ID_SERV_ENT` FOREIGN KEY (`ID_SERV_ENT`) REFERENCES `service_ent` (`ID_SERV_ENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `supp_act`
--
ALTER TABLE `supp_act`
  ADD CONSTRAINT `FK_SUPP_ACT_ID_ACT` FOREIGN KEY (`ID_ACT`) REFERENCES `actualite` (`ID_ACT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SUPP_ACT_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `supp_serv_cnd`
--
ALTER TABLE `supp_serv_cnd`
  ADD CONSTRAINT `FKSUPPECRIRESERVCND_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKSUPPECRIRESERVCND_ID_SERV_CND` FOREIGN KEY (`ID_SERV_CND`) REFERENCES `service_cnd` (`ID_SERV_CND`);

--
-- Contraintes pour la table `supp_serv_ent`
--
ALTER TABLE `supp_serv_ent`
  ADD CONSTRAINT `FK_SUPPSERVENT_ID_ADMIN` FOREIGN KEY (`ID_SERV_ENT`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SUPPSERVENT_ID_SERV_ENT` FOREIGN KEY (`ID_SERV_ENT`) REFERENCES `service_ent` (`ID_SERV_ENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voir_cnd`
--
ALTER TABLE `voir_cnd`
  ADD CONSTRAINT `FK_VOIRCND_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VOIRCND_ID_CND` FOREIGN KEY (`ID_CND`) REFERENCES `candidat` (`ID_CND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voir_cv`
--
ALTER TABLE `voir_cv`
  ADD CONSTRAINT `FK_VOIRCV_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VOIRCV_ID_CV` FOREIGN KEY (`ID_CV`) REFERENCES `cv` (`ID_CV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voir_offre_ent`
--
ALTER TABLE `voir_offre_ent`
  ADD CONSTRAINT `FK_VOIROFFREENT_ID_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VOIROFFREENT_ID_OFFRE_ENT` FOREIGN KEY (`ID_OFFRE_ENT`) REFERENCES `offre_ent` (`ID_OFFRE_ENT`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
