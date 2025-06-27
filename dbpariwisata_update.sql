-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2025 at 03:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(1, 'Non in maxime enim a', 'Quo reprehenderit q', 'laki-laki', 'Islam', 'Hic sit mollitia re'),
(2, 'Id iusto quas eum do', 'Nostrud aut vel culp', ' perempuan', 'Kristen', 'Eu qui voluptates ni'),
(3, 'In incidunt volupta', 'Omnis voluptas solut', ' perempuan', 'Islam', 'Enim mollitia et ad '),
(4, 'Est dolores deserunt', 'Esse labore officiis', 'laki-laki', 'Budha', 'Et minus repellendus'),
(6, 'Ea ipsam laborum Do', 'Molestias do rem pra', ' perempuan', 'Kristen', 'Ut omnis amet cum d'),
(7, 'Sit nisi distinctio', 'Esse tempor ducimus', 'laki-laki', 'Budha', 'Illum ea ut in volu'),
(8, 'Alias exercitationem', 'Officia eum ut accus', 'laki-laki', 'Budha', 'Enim minima eos simi'),
(9, 'Pariatur Fugiat po', 'Pariatur Enim eu qu', 'laki-laki', 'Budha', 'Magni qui non volupt');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `binap` decimal(10,2) DEFAULT NULL,
  `bmakan` decimal(10,2) DEFAULT NULL,
  `btransport` decimal(10,2) DEFAULT NULL,
  `bpaket` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tempat destination ';

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `nama`, `deskripsi`, `tanggal`, `foto`, `video`, `binap`, `bmakan`, `btransport`, `bpaket`) VALUES
(1, 'Bukit Alasan', 'Pegunungan yang asri dan sejuk dan asri', '2024-04-26 00:32:14', 'bukit-alasan.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY', 75000.00, 25000.00, 50000.00, 1200000.00),
(2, 'Pantai Mutun', 'Pantai dengan panorama yang indah', '2024-04-26 00:33:13', 'pantai-mutun.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY', 80000.00, 150000.00, 250000.00, 1500000.00),
(3, 'Pantai Sari Ringgung', 'Pantai dengan pulau pasirnya yang menawan', '2024-04-26 00:34:06', 'pantai-sari-ringgung.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY', 65000.00, 150000.00, 300000.00, 2000000.00),
(4, 'Pulau Pahawang', 'Destinatsi panorama di dalam laut', '2024-04-26 00:36:53', 'wisata-pulu-pahawang.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY', 50000.00, 125000.00, 150000.00, 2500000.00),
(5, 'Lembah Hijau', 'Tempat Wisata Keluarga di pinggiran kota', '2024-04-26 00:36:51', 'lembah-hijau-lampung.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY', 55000.00, 250000.00, 1000000.00, 3000000.00),
(6, 'Tanjung Putus Island', 'Panorama Alam Bawah Laut yang menyejukan mata', '2024-04-26 00:36:52', 'Tanjung-putus-island.jpg', 'https://www.youtube.com/embed/tgbNymZ7vqY', 75000.00, 300000.00, 2500000.00, 3500000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nohp` varchar(14) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `durasi` int DEFAULT NULL,
  `peserta` int DEFAULT NULL,
  `hargapaket` decimal(10,2) DEFAULT NULL,
  `penginapan` decimal(10,2) DEFAULT NULL,
  `transportasi` decimal(10,2) DEFAULT NULL,
  `makanan` decimal(10,2) DEFAULT NULL,
  `jumlah` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabel pemesanan wisata';

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `nohp`, `tanggal`, `durasi`, `peserta`, `hargapaket`, `penginapan`, `transportasi`, `makanan`, `jumlah`) VALUES
(17, 'Necessitatibus dolor', '081957303901', '2024-04-26', 2, 2, 250000.00, 100000.00, 150000.00, 100000.00, 2400000.00),
(18, 'Aut sed tempora dolo', '081957303901', '1992-10-13', 2, 1, 500000.00, 200000.00, 150000.00, 100000.00, 1900000.00),
(20, 'HARIYANTO WIBOWO1', '081957303901', '2025-06-19', 3, 2, 1200000.00, 75000.00, 50000.00, 25000.00, 8100000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int NOT NULL,
  `nama` int DEFAULT NULL,
  `alamat` int DEFAULT NULL,
  `nohp` int DEFAULT NULL,
  `Column 5` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `tanggal_daftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `pwd`, `alamat`, `nohp`, `tanggal_daftar`, `status`) VALUES
(1, 'hariyanto wibowo', 'hariwib@darmajaya.ac.id', 'e10adc3949ba59abbe56e057f20f883e', 'Jl. Z.A Pagar Alam No. 93\r\nKalianda', '081957303901', '2025-06-27 07:27:42', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
