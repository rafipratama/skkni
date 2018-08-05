-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.19-MariaDB

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
-- Table structure for table `data_peserta`
--

DROP TABLE IF EXISTS `data_peserta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_peserta` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skema_sertifikasi` varchar(20) NOT NULL,
  `tempat_uji_kompetensi` varchar(20) NOT NULL,
  `rekomendasi` varchar(20) NOT NULL,
  `tanggal_terbit_sertifikat` date NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `organisasi` varchar(20) NOT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_peserta`
--

LOCK TABLES `data_peserta` WRITE;
/*!40000 ALTER TABLE `data_peserta` DISABLE KEYS */;
INSERT INTO `data_peserta` (`no`, `nama`, `nik`, `hp`, `email`, `skema_sertifikasi`, `tempat_uji_kompetensi`, `rekomendasi`, `tanggal_terbit_sertifikat`, `tanggal_lahir`, `organisasi`) VALUES (1,'Muhammad Raafi Pratama','1571020808950102','083171917369','rafipratamaxiimultimedia2@gmail.com','Programmer Madya','SwisBell','','1970-01-01','1970-01-01','STMIK NH JAMBI'),(2,'WItbowo Sulisno','1571081704920001','085266639933','bowosulisno17@gmail.com','Programmer Madya','Swiss Bell','Kompeten','1970-01-01','2018-08-02','STMIK NH JAMBI');
/*!40000 ALTER TABLE `data_peserta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-05 12:00:42
