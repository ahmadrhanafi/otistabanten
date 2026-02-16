/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.8.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u865368672_otista_banten
-- ------------------------------------------------------
-- Server version	11.8.3-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `AdminLogin`
--

DROP TABLE IF EXISTS `AdminLogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `AdminLogin` (
  `AdminLoginID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(50) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`AdminLoginID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AdminLogin`
--

/*!40000 ALTER TABLE `AdminLogin` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `AdminLogin` VALUES
(1,'Fajri','admin','d4869c55a3857846272868f1de8d3851773814c45c90be9ad75d37db0dd65346c49d621d131fd55d3298b8024ae83057048e0aafa8278b21a19d14abb24de4fe73JTn+fJ2ZPvW4wRB285WKCwkiNsVG9fkGd2norftW4=','2024-06-05 08:28:02');
/*!40000 ALTER TABLE `AdminLogin` ENABLE KEYS */;
commit;

--
-- Table structure for table `Balasan`
--

DROP TABLE IF EXISTS `Balasan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `Balasan` (
  `BalID` int(11) NOT NULL AUTO_INCREMENT,
  `BalasanName` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`BalID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Balasan`
--

/*!40000 ALTER TABLE `Balasan` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `Balasan` VALUES
(1,'test','2025-02-23 10:59:36'),
(2,'test34','2025-02-23 11:02:00'),
(3,'Masasih','2025-02-23 11:02:58'),
(4,'Boong banget','2025-02-23 11:06:41'),
(5,'y','2025-02-23 12:11:48'),
(6,'Y','2025-02-23 12:13:11');
/*!40000 ALTER TABLE `Balasan` ENABLE KEYS */;
commit;

--
-- Table structure for table `Dosen`
--

DROP TABLE IF EXISTS `Dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `Dosen` (
  `DosenID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `Tipe` int(10) NOT NULL COMMENT '1 = Dosen, 2 = Staff',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`DosenID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Dosen`
--

/*!40000 ALTER TABLE `Dosen` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `Dosen` VALUES
(10,'Dosen PAI','fajri','user.jpg',1,'2024-08-11 19:32:44'),
(11,'Staf Kampus','Bayu','user1.jpg',2,'2024-08-11 19:33:28');
/*!40000 ALTER TABLE `Dosen` ENABLE KEYS */;
commit;

--
-- Table structure for table `News`
--

DROP TABLE IF EXISTS `News`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `News` (
  `NewsID` int(11) NOT NULL AUTO_INCREMENT,
  `NewsTitle` text NOT NULL,
  `NewsBody` text NOT NULL,
  `NewsDate` date NOT NULL,
  `NewsImg` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`NewsID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `News`
--

/*!40000 ALTER TABLE `News` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `News` VALUES
(7,' STIT Otista Banten menyelenggarakan Pengabdian pada Masyarakat','Kota Tangerang Selatan... Sekolah Tinggi Ilmu Tarbiyah (STIT) Otto Iskandar Dinata Banteng mengadakan pembukaan Kegiatan akademik Tridharma Perguruan Tinggi berupa Pengabdian pada Masyarakat di kelurahan Serpong Kota Tangerang Selatan. Pembukaan diselenggarakan pada hari Sabtu, 10 Agustus 2024 di Aula Kelurahan Serpong. Pembukaan pengabdian masyarakat oleh mahasiswa/i KKS dihadiri oleh Lurah Serpong, Ketua Yayasan Bina Putra Wijaya Bangsa, Kepala TK Al-Salam, Ketua RW dan RT dan kepala Posyandu Serpong.\r\nPengabdian pada Masyarakat ini dilakukan oleh 2 (dua) kelompok. Kelompok pertama dilakukan di Desa Gunung Sindur Kabupaten Bogor dan kelompok kedua dilakukan di Serpong Kota Tangerang Selatan. \r\nLurah Serpong, Sukari Maesoferi, S. Sos mengatakan bahwa masyarakat Serpong sangat terbuka akan kehadiran mahasiswa/i dari Sekolah Tinggi Ilmu Tarbiyah (STIT) Otto Iskandar Dinata Banten untuk melakukan Pengadian pada Masyarakat sebagai implementasi keilmuan, semoga menambah manfaat dan berkah untuk masyarakat Serpong dan STIT Otto Iskandar Dinata Banten, ujarnya dalam sambutan pembukaan KKS. \r\n&quot;Pengabdian pada Masyarakat berupa Kuliah Kerja Sosial ini merupakan bagian praktik yang harus dilakukan oleh civitas akademika STIT Otto Iskandar Dinata Banten, baik dosen dan mahasiswa untuk mengimplementasikan teori-teori yang sudah dipelajari selama di kelas, praktiknya langsung dimasyarakat dengan pengabdian pada masyarakat ini &quot; Ujar Irfan Hasanuddin, S. Th. I, MA, SAS., CRMo selaku Wakil Ketua 1 Bidang Akademik dan Kelembagaan di kantor Lurah serpong. \r\nPelepasan dilakukan oleh Drs. Adin Wijaya, M. Si selaku ketua Yayasan Bina Putra Wijaya Bangsa disaksikan dan didampingi oleh May Muflihah Ar Rozy, S. Pd. M. Pd selaku dosen pembimbing Praktek Pengalaman Lapangan (PPL) Program Studi Pendidikan Islam Anak Usia Dini (PIAUD)','2024-08-12','WhatsApp_Image_2024-08-14_at_8_29_34_AM.jpeg','2024-08-12 09:33:49'),
(9,'Pengabdian pada Masyarakat mahasiswa Melakukan Kuliah Kerja Sosial di Gunung Sindur','Gunung Sindur Kabupaten Bogor... \r\nSekolah Tinggi Ilmu Tarbiyah (STIT) Otto Iskandar Dinata Banten menyelenggarakan Pengabdian pada Masyarakat di Desa Gunung Sindur Kabupaten Bogor. Pengabdian Masyarakat berupa Kuliah Kerja Sosial (KKS) ini dilaksanakan oleh mahasiswa/i yang merupakan kelompok KKS 1 sejak tanggal 10 Agustus 2024.\r\n\r\nPembukaan KKS dilaksanakan pada hari Senin, 29 Juli 2024 ini dihadiri oleh kepala Desa Gunung Sindur, Bapak Deden. Pembukaan juga dihadiri oleh dosen pembimbing KKS STIT Otto Iskandar Dinata Banten, ibu Yuniar, S. Pd. MM. \r\nMahasiswa/i peserta KKS sangat antusias dalam kegiatan dan program yang direncanakan. Kegiatan yang akan dilaksanakan berupa kegiatan keagamaan, pendidikan dan sosial.\r\n\r\nKegiatan keagamaan dalam pengabdian ini berupa peran aktif dalam Majlis Taklim dan madrasah serta pengajian yang dilakukan di masyarakat Gunung Sindur. Kegiatan Sosial berupa keaktifan dalam sinergi bersama karang taruna, ibu-ibu PPK dan kerja sosial di desa Gunung Sindur. \r\n\r\nDiharapkan pengabdian masyarakat yang dilakukan oleh mahasiswa/i STIT Otto Iskandar Dinata Banten memberikan dampak positif bagi kegiatan keagamaan, sosial dan pendidikan di desa Gunung Sindur.','2024-08-14','WhatsApp_Image_2024-08-13_at_7_24_03_PM.jpeg','2024-08-13 18:51:51');
/*!40000 ALTER TABLE `News` ENABLE KEYS */;
commit;

--
-- Table structure for table `PhotoGalery`
--

DROP TABLE IF EXISTS `PhotoGalery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `PhotoGalery` (
  `GaleryID` int(11) NOT NULL AUTO_INCREMENT,
  `GaleryName` varchar(255) NOT NULL,
  `GaleryImg` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`GaleryID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PhotoGalery`
--

/*!40000 ALTER TABLE `PhotoGalery` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `PhotoGalery` VALUES
(3,'gedung otista','20220205142142_IMG_2559.JPG','2024-06-10 09:59:11'),
(5,'mahasiswa STIT Otista','DSC09276.JPG','2024-07-23 04:07:16'),
(6,'Galery','DSC09265.JPG','2024-07-23 04:07:52'),
(7,'brosur','WhatsApp_Image_2024-06-19_at_07_09_51_(1).jpeg','2024-07-23 04:08:41'),
(8,'kelas','WhatsApp_Image_2024-06-19_at_07_17_48.jpeg','2024-07-23 04:09:18'),
(9,'brosur','Biru_dan_Kuning_Modern_Penerimaan_Peserta_Didik_Baru_Facebook_Post.png','2024-07-23 04:09:58'),
(10,'galery','DSC09289.JPG','2024-07-23 04:10:31'),
(11,'kelas','WhatsApp_Image_2024-06-19_at_07_17_47.jpeg','2024-07-23 04:11:03'),
(12,'mahasiswa','DSC09278.JPG','2024-07-23 04:11:57'),
(13,'gedung','WhatsApp_Image_2024-06-19_at_07_17_59_(2).jpeg','2024-07-23 04:13:32');
/*!40000 ALTER TABLE `PhotoGalery` ENABLE KEYS */;
commit;

--
-- Table structure for table `VideoGalery`
--

DROP TABLE IF EXISTS `VideoGalery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `VideoGalery` (
  `VideoID` int(11) NOT NULL AUTO_INCREMENT,
  `VideoSrc` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`VideoID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VideoGalery`
--

/*!40000 ALTER TABLE `VideoGalery` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `VideoGalery` VALUES
(1,'https://www.youtube.com/embed/pk4wO5tXpu0','2024-06-06 08:07:32'),
(4,'https://www.youtube.com/embed/pk4wO5tXpu0','2024-07-20 07:09:48');
/*!40000 ALTER TABLE `VideoGalery` ENABLE KEYS */;
commit;

--
-- Table structure for table `Visitor`
--

DROP TABLE IF EXISTS `Visitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `Visitor` (
  `VisitorIP` varchar(255) NOT NULL,
  `VisitorHit` int(11) NOT NULL,
  `VisitorTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Visitor`
--

/*!40000 ALTER TABLE `Visitor` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `Visitor` ENABLE KEYS */;
commit;

--
-- Dumping routines for database 'u865368672_otista_banten'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-01-30 18:47:44
