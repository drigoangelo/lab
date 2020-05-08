-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: lab2
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Dumping data for table `biblioteca_imagem`
--

LOCK TABLES `biblioteca_imagem` WRITE;
/*!40000 ALTER TABLE `biblioteca_imagem` DISABLE KEYS */;
INSERT INTO `biblioteca_imagem` VALUES (1,'Buraco 3D','3D','2016','Arte e Cia Brasil',NULL,'3D',_binary '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','3d.jpg','image/jpeg',20353);
/*!40000 ALTER TABLE `biblioteca_imagem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-02 18:31:24
