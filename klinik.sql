-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 04:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `id_boking` int(11) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `no_resep` int(11) DEFAULT NULL,
  `gejala` varchar(125) DEFAULT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `datang` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_boking`, `tgl_berobat`, `status`, `no_resep`, `gejala`, `nama_dokter`, `datang`) VALUES
(1, 1, '2022-04-06', '4', 2147483647, 'muriang', 'husna', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking_berobat`
--

CREATE TABLE `booking_berobat` (
  `id_boking` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `no_antrian` varchar(50) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_berobat`
--

INSERT INTO `booking_berobat` (`id_boking`, `id_pasien`, `no_antrian`, `tgl_berobat`, `status`) VALUES
(1, 1, '1', '2022-04-07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id_obat_keluar` int(11) NOT NULL,
  `id_obat_masuk` int(11) DEFAULT NULL,
  `no_resep` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat_keluar`, `id_obat_masuk`, `no_resep`, `qty`) VALUES
(1, 2, 2147483647, '5');

--
-- Triggers `obat_keluar`
--
DELIMITER $$
CREATE TRIGGER `pesanan_obat` AFTER INSERT ON `obat_keluar` FOR EACH ROW BEGIN
UPDATE obat_masuk SET stock = stock-NEW.qty
WHERE id_obat_masuk = NEW.id_obat_masuk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id_obat_masuk` int(11) NOT NULL,
  `nama_obat` varchar(125) DEFAULT NULL,
  `jenis_obat` varchar(125) DEFAULT NULL,
  `stock` varchar(25) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat_masuk`
--

INSERT INTO `obat_masuk` (`id_obat_masuk`, `nama_obat`, `jenis_obat`, `stock`, `tgl_masuk`) VALUES
(2, 'parasetamol', 'tablet', '14', NULL),
(3, 'Abacavir', 'tablet', '95', NULL),
(4, 'Allylestrenol', 'tablet', '200', NULL),
(5, 'Ambroxol', 'cair', '50', NULL),
(6, 'Cataflam   ', 'kapsul', '76', NULL),
(7, 'curcuma', 'cair', '100', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `jenis_kl` varchar(20) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `bpjs` varchar(125) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `username`, `password`, `jenis_kl`, `usia`, `alamat`, `bpjs`, `foto`) VALUES
(1, 'linda', '12345', 'Perempuan', '21', 'cikaso', 'BPJS', NULL),
(2, 'adinda', '12345', 'Perempuan', '21', 'sindang barang', 'NonBPJS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indexes for table `booking_berobat`
--
ALTER TABLE `booking_berobat`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indexes for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id_obat_keluar`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id_obat_masuk`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_berobat`
--
ALTER TABLE `booking_berobat`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id_obat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
