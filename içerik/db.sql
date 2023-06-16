use autodas_autodas;

-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: autodas_autodas
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `calisan`
--

DROP TABLE IF EXISTS `calisan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calisan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text,
  `a8` text,
  `a9` text,
  `a10` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calisan`
--

LOCK TABLES `calisan` WRITE;
/*!40000 ALTER TABLE `calisan` DISABLE KEYS */;
INSERT INTO `calisan` VALUES (2,'Mehmet Yılmaz','mehmet@autodas.com','5453894444','Teknisyen','123456','123456','','','',''),(3,'worker','worker@autodas.com','5392186528','usta','123456','123456',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `calisan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `firmalar`
--

DROP TABLE IF EXISTS `firmalar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `firmalar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text,
  `a8` text,
  `a9` text,
  `a10` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firmalar`
--

LOCK TABLES `firmalar` WRITE;
/*!40000 ALTER TABLE `firmalar` DISABLE KEYS */;
INSERT INTO `firmalar` VALUES (2,'Hakan Yılmaz','hakan@autodas.com','5453334418','Trabzon','123456','123456','','','','');
/*!40000 ALTER TABLE `firmalar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `islemler`
--

DROP TABLE IF EXISTS `islemler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `islemler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a1` text,
  `a2` text,
  `a3` text,
  `a4` text,
  `a5` text,
  `a6` text,
  `a7` text,
  `a8` text,
  `a9` text,
  `a9a` text,
  `a10` text,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `islemler`
--

LOCK TABLES `islemler` WRITE;
/*!40000 ALTER TABLE `islemler` DISABLE KEYS */;
INSERT INTO `islemler` VALUES (1,'Motor Yağı Değişimi','Motor yağı değişilid ','5','','','','','','','','','2022-05-12 10:38:07'),(2,'Motor Bakımı','Motorun bakımı yapıldı yıpranma veya başka bir sorun görünmedi.','5','','','','','','','','','2022-05-12 10:44:55'),(3,'Polen Filtresi Değişimi','Değişildi.','5','','','','','','','','','2022-05-12 10:47:01'),(4,'Direksiyon Kutusu','','2','','','','','','','','','2022-05-12 10:52:46'),(5,'Şansızman Kontrolü','','2','','','','','','','','','2022-05-12 10:52:51'),(6,'Direksiyon Kutusu','sdqafghjh','6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-06-10 20:24:02'),(7,'Rot Ayarı','ıyı','6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-06-10 20:26:15'),(8,'Şansızman Kontrolü','kötü','6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-06-10 21:13:44');
/*!40000 ALTER TABLE `islemler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isler`
--

DROP TABLE IF EXISTS `isler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `isler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a1` text,
  `a2` text,
  `a3` text,
  `a4` text,
  `a5` text,
  `a6` text,
  `a7` text,
  `a8` text,
  `a9` text,
  `a9a` text,
  `a10` text,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isler`
--

LOCK TABLES `isler` WRITE;
/*!40000 ALTER TABLE `isler` DISABLE KEYS */;
INSERT INTO `isler` VALUES (6,'Kamil Demirci','Ağır Bakım','5453894418','Trabzon','Mercedes','S60','Yok.','1','worker','4','Bitti','2022-05-12 10:58:26'),(7,'Hakan Yılmaz','Ağır Bakım','5453334418','Trabzon','togg','sedan','kontrol','2',NULL,NULL,'İs Alimi Bekleniyor','2023-06-11 18:55:49');
/*!40000 ALTER TABLE `isler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notlar`
--

DROP TABLE IF EXISTS `notlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text NOT NULL,
  `a8` text NOT NULL,
  `a9` text NOT NULL,
  `a9a` text NOT NULL,
  `a10` text NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notlar`
--

LOCK TABLES `notlar` WRITE;
/*!40000 ALTER TABLE `notlar` DISABLE KEYS */;
INSERT INTO `notlar` VALUES (1,'Kolay gelsin iyi çalışmalar','5','','','','','','','','','','2022-05-12 11:19:19');
/*!40000 ALTER TABLE `notlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uemail` text NOT NULL,
  `passwordd` text NOT NULL,
  `unvan` text NOT NULL,
  `kname` text NOT NULL,
  `yetki` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@autodas.com','123','Yazılım Destek','Muhsin Esad İlhan','A');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-11 19:23:53
