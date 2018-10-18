-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: media
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biographie` text COLLATE utf8_unicode_ci,
  `birthday` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (1,'Rowling','J.K','Joanne Rowling, connue sous les pseudonymes de J. K. Rowling et Robert Galbraith, est une romancière et scénariste britannique née le 31 juillet 1965 dans l’agglomération de Yate, dans le Gloucestershire, en Angleterre. Elle doit sa notoriété mondiale à la série Harry Potter, dont les romans traduits en près de quatre-vingts langues ont été vendus à plus de 500 millions d\'exemplaires dans le monde.','1898-01-01 00:00:00'),(2,'Brown','Daniel Gerhard','Daniel Gerhard Brown, dit Dan Brown, né le 22 juin 1964 à Exeter dans le New Hampshire, est un romancier américain, auteur de plusieurs best-sellers appartenant au genre du roman policier mâtiné d\'ésotérisme, qui a vendu près de deux cents millions d\'exemplaires.\n\nIl a suscité une grande polémique avec la publication de ses romans ayant pour héros Robert Langdon : Anges et Démons, Da Vinci Code, Le Symbole perdu , Inferno et Origine. ',NULL),(3,'Levi','Primo','Primo Levi, né le 31 juillet 1919 à Turin et mort le 11 avril 1987 à Turin, est un docteur en chimie italien rendu célèbre par son livre Si c\'est un homme, dans lequel il relate son emprisonnement au cours de l\'année 1944 dans le camp de concentration et d\'extermination d\'Auschwitz-Monowitz.\n\nJuif italien de naissance, chimiste de profession et de vocation, il entre tardivement dans une carrière d\'écrivain orientée par l\'analyse scientifique de cette expérience de survivant de la Shoah, dans le but de montrer, retranscrire, transmettre, expliciter. Il est l\'auteur d\'histoires courtes, de poèmes et de romans. ',NULL),(4,'Otelli','Jean-Pierre','Jean-Pierre Otelli (né en 1948 à Paris) est un pilote professionnel (14 500 heures de vol à son actif)1, ex-leader de la patrouille de la Marche Verte des Forces Royales Air du Maroc (FRA), ayant écrit plusieurs livres sur le thème de l\'aéronautique. ',NULL);
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `format` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbPage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CBE5A331A196F9FD` (`authorId`),
  CONSTRAINT `FK_CBE5A331A196F9FD` FOREIGN KEY (`authorId`) REFERENCES `author` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'The Philosopher\'s Stone','Fantastique','roman','306',1),(2,'Harry Potter and the\nChamber of Secrets','Fantastique','roman','364',1),(3,'Harry Potter and the\nPrisoner of Azkaban','Fantastique','roman','360',1),(4,'Harry Potter and the\nGoblet of Fire','Fantastique','roman','656',1),(5,'Harry Potter and the Order of the Phoenix','Fantastique','roman','975',1),(6,'Harry Potter and the\nHalf-Blood Prince','Fantastique','roman','720',1),(7,'Harry Potter and the\nDeathly Hallows','Fantastique','roman','809',1),(8,'Si c\'est un homme','Autobiographie','folio','255',2),(9,'La Trêve','Autobiographie','folio','345',2),(10,'Pilotes dans la tourmente : secret défense','Réalité','altipresse','176',3),(11,'Erreurs de pilotage : Ces accidents qu\'on aurait pu éviter...','Réalité','altipresse','198',3),(12,'Les Chevaliers du Ciel : De la fiction... à la réalité','Réalité','altipress','235',3),(13,'Angels & Demons','Roman Policier','roman','571',4),(14,'The Da Vinci Code','Thriller','roman','571',4),(15,'The Lost Symbol','Roman Policier','roman','600',4),(16,'Inferno','Roman Policier','roman','591',4),(17,'L\'Appel du Coucou','Roman policier','roman','576',1);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evenement`
--

LOCK TABLES `evenement` WRITE;
/*!40000 ALTER TABLE `evenement` DISABLE KEYS */;
INSERT INTO `evenement` VALUES (1,'mariage de Figaro','2016-10-17 13:54:47','Venez vivre le mariage de Figaro','mariage'),(2,'Star Wars 19','2041-06-18 14:01:53','Sortie du dernier STAR WARS','cinéma'),(3,'DrupalCon UE LONDON','2019-02-17 14:03:03','DrupalCon europe','réunion');
/*!40000 ALTER TABLE `evenement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evenement_invite`
--

DROP TABLE IF EXISTS `evenement_invite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evenement_invite` (
  `evenement_id` int(11) NOT NULL,
  `invite_id` int(11) NOT NULL,
  PRIMARY KEY (`evenement_id`,`invite_id`),
  KEY `IDX_7417C055FD02F13` (`evenement_id`),
  KEY `IDX_7417C055EA417747` (`invite_id`),
  CONSTRAINT `FK_7417C055EA417747` FOREIGN KEY (`invite_id`) REFERENCES `invite` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7417C055FD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evenement_invite`
--

LOCK TABLES `evenement_invite` WRITE;
/*!40000 ALTER TABLE `evenement_invite` DISABLE KEYS */;
/*!40000 ALTER TABLE `evenement_invite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invite`
--

DROP TABLE IF EXISTS `invite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C7E210D7F675F31B` (`author_id`),
  CONSTRAINT `FK_C7E210D7F675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invite`
--

LOCK TABLES `invite` WRITE;
/*!40000 ALTER TABLE `invite` DISABLE KEYS */;
INSERT INTO `invite` VALUES (3,'premier',1),(4,'deuxième',2),(5,'troisième',3);
/*!40000 ALTER TABLE `invite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-18 16:58:44
