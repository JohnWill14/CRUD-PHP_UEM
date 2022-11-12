-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: web
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `cd_cliente` int NOT NULL AUTO_INCREMENT,
  `nm_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nr_numero` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_cliente` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nr_documento` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cd_uf` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nr_telefone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nr_inscricao` int DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`),
  UNIQUE KEY `constraint_name` (`nr_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (12,'John William Vicente','nao vo contar ><','434343','2','34','juruaia','MG','2022-11-09 00:32:07','(35)99135-1121',0),(17,'Burr','537 Farragut Park','2','1','2','Rushankou','AC','2022-11-12 16:08:01','(44)98989-8989',0),(18,'Esdras','107 Northwestern Parkway','3','1','3','Itupiranga','GO','2022-11-12 16:08:02','(87)8787-3443',0),(20,'Alaster','33 Hudson Place','5','1','5','San Cristobal','PR','2022-11-12 16:08:02','(54)54128-2565',0),(21,'Shermy','638 Carberry Center','6','1','6','La Plaine-Saint-Denis','AM','2022-11-12 16:08:02','(23)32325-4545',0),(22,'Jody','4 Burrows Pass','7','2','7','Svislach','PR','2022-11-12 16:08:02',NULL,NULL),(23,'Kellby','04859 Spaight Trail','8','2','8','Ifanes','AM','2022-11-12 16:08:02','(34)43433-4344',0),(24,'Christan','29502 Homewood Drive','9','2','9','Wabana','MG','2022-11-12 16:08:03','(54)56454-5878',0),(25,'Loree','17 Nelson Lane','10','2','10','Boje','MG','2022-11-12 16:08:04','(77)44221-2112',0),(32,'Kym','85493 Cottonwood Avenue','4','1','11','Vegach','MG','2022-11-12 17:22:15','(45)21213-5878',0),(33,'Alaster','33 Hudson Place','5','1','12','San Cristobal','PR','2022-11-12 17:22:15',NULL,NULL),(34,'Shermy','638 Carberry Center','6','1','13','La Plaine-Saint-Denis','AM','2022-11-12 17:22:15','(45)54545-4545',0),(35,'Jody','4 Burrows Pass','7','2','14','Svislach','PR','2022-11-12 17:22:15',NULL,NULL),(36,'Kellby','04859 Spaight Trail','8','2','15','Ifanes','AM','2022-11-12 17:22:16','(45)54121-2122',0),(37,'Christan','29502 Homewood Drive','9','2','16','Wabana','MG','2022-11-12 17:22:16',NULL,NULL),(38,'Loree','17 Nelson Lane','10','2','17','Boje','MG','2022-11-12 17:22:17','(58)58558-8585',0),(39,'gddffd','ffg','dgdggffgfg','1','hghfhfhhgf','ffg','AC','2022-11-12 17:29:39','(63)36454-5869',0),(41,'322323','233223','232323','1','232323','232323','AC','2022-11-12 18:02:15','',5986565);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (20221105143340,'TableUsuario','2022-11-07 20:12:40','2022-11-07 20:12:41',0),(20221106223012,'TableCliente','2022-11-07 20:12:42','2022-11-07 20:12:42',0);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_access` date NOT NULL,
  `bo_deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('john','d033e22ae348aeb5660fc2140aec35850c4da997','john','john@gmail.com','2000-11-14',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-12 18:06:42