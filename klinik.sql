-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2022 pada 04.19
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

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
-- Struktur dari tabel `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `id_boking` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `status_berobat` varchar(11) DEFAULT NULL,
  `gejala` varchar(125) DEFAULT NULL,
  `no_resep` varchar(50) DEFAULT NULL,
  `dosis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_boking`, `id_user`, `tgl_berobat`, `status_berobat`, `gejala`, `no_resep`, `dosis`) VALUES
(1, 3, 4, '2022-06-02', '4', 'muriang', '202206028912', NULL),
(2, 2, 4, '2022-06-02', '4', 'lambung', '202206025139', NULL),
(3, 1, 4, '2022-06-02', '4', 'lambung', '202206026902', NULL),
(4, 5, 4, '2022-06-04', '4', 'alergi', '20220604386', NULL),
(5, 4, 4, '2022-06-05', '4', 'berdahak', '20220608940', NULL),
(6, 6, 4, '2022-06-05', '4', 'restramonetrik', '202206088086', '2x1'),
(7, 7, 4, '2022-06-08', '4', 'lambung', '202206085611', '3x1'),
(8, 8, 4, '2022-06-08', '2', 'lambung', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_berobat`
--

CREATE TABLE `booking_berobat` (
  `id_boking` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `no_antrian` varchar(50) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `keluhan` varchar(125) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `berobat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking_berobat`
--

INSERT INTO `booking_berobat` (`id_boking`, `id_pasien`, `no_antrian`, `tgl_berobat`, `keluhan`, `status`, `berobat`) VALUES
(1, 3, '1', '2022-06-02', 'sakit panas', '1', '1'),
(2, 4, '2', '2022-06-02', 'mencret', '1', '1'),
(3, 1, '3', '2022-06-02', 'gatal', '1', '1'),
(4, 2, '4', '2022-06-02', 'batuk', '1', '1'),
(5, 5, '1', '2022-06-04', 'sakit hati', '1', '1'),
(6, 6, '1', '2022-06-05', 'retak', '1', '1'),
(7, 2, '1', '2022-06-08', 'mencret', '1', '1'),
(8, 3, '2', '2022-06-08', 'batuk', '1', '1');

--
-- Trigger `booking_berobat`
--
DELIMITER $$
CREATE TRIGGER `boking_berobat` AFTER INSERT ON `booking_berobat` FOR EACH ROW BEGIN
UPDATE pasien SET datang_berobat = datang_berobat+NEW.berobat
WHERE id_pasien = NEW.id_pasien;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id_obat_keluar` int(11) NOT NULL,
  `id_obat_masuk` int(11) DEFAULT NULL,
  `no_resep` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `dosis` varchar(25) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat_keluar`, `id_obat_masuk`, `no_resep`, `qty`, `dosis`, `tgl_keluar`) VALUES
(1, 3, '202206029077', '1', NULL, '2022-06-02'),
(2, 2, '202206028912', '1', NULL, '2022-05-02'),
(3, 2, '202206025139', '1', NULL, '2022-06-02'),
(4, 6, '202206026902', '1', NULL, '2022-05-02'),
(5, 3, '202206026902', '1', NULL, '2022-06-02'),
(6, 4, '20220604386', '1', NULL, '2022-06-04'),
(7, 4, '202206051620', '1', NULL, '2022-06-05'),
(8, 5, '202206051620', '3', NULL, '2022-06-05'),
(9, 9, '20220605137', '1', NULL, '2022-06-05'),
(10, 3, '20220605137', '1', NULL, '2022-06-05'),
(11, 6, '20220605137', '2', NULL, '2022-06-05'),
(12, 7, '202206083170', '1', NULL, '2022-06-08'),
(13, 3, '202206083944', '1', '', '2022-06-08'),
(14, 3, '202206089956', '1', '', '2022-06-08'),
(15, 2, '202206085004', '1', NULL, '2022-06-08'),
(16, 5, '202206083485', '1', NULL, '2022-06-08'),
(17, 9, '202206083835', '1', '', '2022-06-08'),
(18, 4, '202206085611', '1', '3x1', '2022-06-08'),
(19, 2, '202206087214', '1', '2x1', '2022-06-08'),
(20, 4, '202206087214', '1', '2x1', '2022-06-08'),
(21, 2, '202206088086', '1', '2x1', '2022-06-08'),
(22, 5, '202206088086', '1', '2x1', '2022-06-08'),
(23, 5, '202206082665', NULL, NULL, '2022-06-08'),
(24, 7, '202206082665', NULL, NULL, '2022-06-08'),
(25, 3, '202206088157', '1', '3x1', '2022-06-08'),
(26, 9, '202206088157', '1', '3x2', '2022-06-08'),
(27, 2, '202206084633', '1', '3x1', '2022-06-08'),
(28, 3, '202206084633', '1', '2x1', '2022-06-08'),
(29, 4, '202206084633', '1', '3x2', '2022-06-08'),
(30, 3, '202206081777', '1', '1x1', '2022-06-08'),
(31, 6, '202206081777', '1', '1x1', '2022-06-08'),
(32, 9, '202206081777', '1', '1x1', '2022-06-08'),
(33, 2, '20220608940', '1', '1x1', '2022-06-08'),
(34, 3, '20220608940', '1', '2x1', '2022-06-08'),
(35, 4, '20220608940', '1', '3x1', '2022-06-08');

--
-- Trigger `obat_keluar`
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
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id_obat_masuk` int(11) NOT NULL,
  `nama_obat` varchar(125) DEFAULT NULL,
  `jenis_obat` varchar(125) DEFAULT NULL,
  `stock` varchar(25) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat_masuk`
--

INSERT INTO `obat_masuk` (`id_obat_masuk`, `nama_obat`, `jenis_obat`, `stock`, `tgl_masuk`) VALUES
(2, 'parasetamol', 'tablet', '30', '2022-06-01'),
(3, 'Abacavir', 'tablet', '42', '2022-06-01'),
(4, 'Allylestrenol', 'tablet', '70', '2022-06-01'),
(5, 'Ambroxol', 'cair', '12', '2022-06-01'),
(6, 'Cataflam   ', 'kapsul', '62', '2022-06-01'),
(7, 'curcuma', 'cair', '41', '2022-06-01'),
(9, 'Kayu Putih', 'cair', '56', '2022-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `jenis_kl` varchar(20) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `bpjs` varchar(125) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `nama_pasien` varchar(125) DEFAULT NULL,
  `no_berobat` varchar(50) DEFAULT NULL,
  `datang_berobat` varchar(50) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `username`, `password`, `jenis_kl`, `usia`, `alamat`, `bpjs`, `foto`, `nama_pasien`, `no_berobat`, `datang_berobat`, `tgl_daftar`) VALUES
(1, 'linda', '12345', '2', '25', 'cikaso', 'BPJS', NULL, 'linda', '20220529Y1HB5', '5', '2022-06-01'),
(2, 'diana', '12345', '2', '21', 'kuningan', 'BPJS', NULL, 'diana', '20220529NI9V1', '4', '2022-06-01'),
(3, 'adi', '12345', '1', '25', 'Ciawilor', 'NonBPJS', NULL, 'adi', '20220529ZDCWV', '6', '2022-06-02'),
(4, 'jamal', '12345', '1', '21', 'jalaksana', 'BPJS', NULL, 'jamal', '202205290WYPM', '4', '2022-06-01'),
(5, 'tuti', '12345', '2', '21', 'bandung', 'BPJS', NULL, 'astuti', '20220604TVAUX', '2', '2022-06-01'),
(6, 'sadar', '12345', '1', '25', 'ciawilor', 'NonBPJS', NULL, 'sadar', '202206055VBUL', '2', '2022-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1),
(2, 'pemilik', 'pemilik', 2),
(3, 'apoteker', 'apoteker', 3),
(4, 'dokter', 'dokter', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indeks untuk tabel `booking_berobat`
--
ALTER TABLE `booking_berobat`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id_obat_keluar`);

--
-- Indeks untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id_obat_masuk`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `booking_berobat`
--
ALTER TABLE `booking_berobat`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id_obat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
