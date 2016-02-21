-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: cadiprel
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Dumping data for table `categoria`
--
delete from subcategoria;
delete from categoria;
use cadiprel;
LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Cómputo y tablets'),(2,'Electrónicos'),(3,'Videojuegos'),(4,'E-readers'),(5,'Celulares'),(6,'Cámaras y Fotografía'),(7,'Oficina');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `modelo`
--

LOCK TABLES `modelo` WRITE;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `subcategoria`
--

LOCK TABLES `subcategoria` WRITE;
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
INSERT INTO `subcategoria` VALUES (1,'Laptops',1),(2,'Tablets',1),(3,'Accesorios para tablets',1),(4,'Computadoras de escritorio',1),(5,'Monitores',1),(6,'Componentes',1),(7,'Almacenamiento',1),(8,'Dispositivos para redes',1),(9,'Accesorios de cómputo',1),(10,'Proyectores',1),(11,'Televisión y video',2),(12,'Audio y equipos de sonido',2),(13,'Navegación y GPS',2),(14,'Accesorios Electrónicos',2),(15,'Xbox One',3),(16,'Xbox 360',3),(17,'PlayStation 4',3),(18,'PlayStation 3',3),(19,'Wii U',3),(20,'Wii',3),(21,'Nintento 3DS',3),(22,'Kindle',4),(23,'Smartphones',5),(24,'Accesorios para celulares',5),(25,'Smartwatches',5),(26,'Digitales compactas',6),(27,'Digitales réflex',6),(28,'Videocámaras',6),(29,'Analógicas',6),(30,'Lentes y objetivos',6),(31,'Binoculares y Telescopios',6),(32,'Accesorios',6),(33,'Impresoras',7),(34,'Multifuncionales',7),(35,'Scanners',7),(36,'Consumibles para impresoras',7),(37,'Calculadoras',7);
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cadiprel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-18 20:36:08
