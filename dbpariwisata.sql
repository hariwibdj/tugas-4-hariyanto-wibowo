-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dbpariwisata
CREATE DATABASE IF NOT EXISTS `dbpariwisata` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbpariwisata`;

-- Dumping structure for table dbpariwisata.destination
CREATE TABLE IF NOT EXISTS `destination` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tempat destination ';

-- Dumping data for table dbpariwisata.destination: ~6 rows (approximately)
DELETE FROM `destination`;
INSERT INTO `destination` (`id`, `nama`, `deskripsi`, `tanggal`, `foto`, `video`) VALUES
	(1, 'Bukit Alasan', 'Pegunungan yang asri dan sejuk dan asri', '2024-04-26 00:32:14', 'bukit-alasan.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY'),
	(2, 'Pantai Mutun', 'Pantai dengan panorama yang indah', '2024-04-26 00:33:13', 'pantai-mutun.jpg', NULL),
	(3, 'Pantai Sari Ringgung', 'Pantai dengan pulau pasirnya yang menawan', '2024-04-26 00:34:06', 'pantai-sari-ringgung.jpg', NULL),
	(4, 'Pulau Pahawang', 'Destinatsi panorama di dalam laut', '2024-04-26 00:36:53', 'wisata-pulu-pahawang.jpg', NULL),
	(5, 'Lembah Hijau', 'Tempat Wisata Keluarga di pinggiran kota', '2024-04-26 00:36:51', 'lembah-hijau-lampung.jpg', NULL),
	(6, 'Tanjung Putus Island', 'Panorama Alam Bawah Laut yang menyejukan mata', '2024-04-26 00:36:52', 'Tanjung-putus-island.jpg', NULL);

-- Dumping structure for table dbpariwisata.pemesanan
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nohp` varchar(14) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `durasi` int DEFAULT NULL,
  `peserta` int DEFAULT NULL,
  `hargapaket` double(8,2) DEFAULT NULL,
  `penginapan` double(8,2) DEFAULT NULL,
  `transportasi` double(8,2) DEFAULT NULL,
  `makanan` double(8,2) DEFAULT NULL,
  `jumlah` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabel pemesanan wisata';

-- Dumping data for table dbpariwisata.pemesanan: ~1 rows (approximately)
DELETE FROM `pemesanan`;
INSERT INTO `pemesanan` (`id`, `nama`, `nohp`, `tanggal`, `durasi`, `peserta`, `hargapaket`, `penginapan`, `transportasi`, `makanan`, `jumlah`) VALUES
	(17, 'Necessitatibus dolor', '081957303901', '2024-04-26 00:00:00', 2, 1, 250000.00, 100000.00, 150000.00, 100000.00, 1200000.00),
	(18, 'Aut sed tempora dolo', '081957303901', '1992-10-13 00:00:00', 2, 1, 500000.00, 200000.00, 150000.00, 100000.00, 1900000.00);

-- Dumping structure for table dbpariwisata.pengunjung
CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` int DEFAULT NULL,
  `alamat` int DEFAULT NULL,
  `nohp` int DEFAULT NULL,
  `Column 5` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbpariwisata.pengunjung: ~0 rows (approximately)
DELETE FROM `pengunjung`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
