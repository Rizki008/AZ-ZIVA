-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2022 pada 09.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

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
  `tgl_berobat` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `no_resep` int(11) DEFAULT NULL,
  `gejala` varchar(125) DEFAULT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `datang` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_boking`, `tgl_berobat`, `status`, `no_resep`, `gejala`, `nama_dokter`, `datang`) VALUES
(1, 3, '2022-04-16', '4', 2147483647, 'muriang', 'jamal', NULL),
(2, 2, '2022-04-16', '4', 2147483647, 'muriang', 'jamal', NULL),
(3, 1, '2022-04-16', '4', 2147483647, 'muriang', 'jamal', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_berobat`
--

CREATE TABLE `booking_berobat` (
  `id_boking` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `no_antrian` varchar(50) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `berobat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking_berobat`
--

INSERT INTO `booking_berobat` (`id_boking`, `id_pasien`, `no_antrian`, `tgl_berobat`, `status`, `berobat`) VALUES
(1, 1, '1', '2022-04-16', '1', '1'),
(2, 1, '2', '2022-04-16', '1', '1'),
(3, 3, '3', '2022-04-16', '1', '1');

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
  `no_resep` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat_keluar`, `id_obat_masuk`, `no_resep`, `qty`) VALUES
(1, 2, 2147483647, '2'),
(2, 3, 2147483647, '2'),
(3, 5, 2147483647, '4'),
(4, 2, 2147483647, '2'),
(5, 3, 2147483647, '4');

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
(2, 'parasetamol', 'tablet', '5', NULL),
(3, 'Abacavir', 'tablet', '89', NULL),
(4, 'Allylestrenol', 'tablet', '200', NULL),
(5, 'Ambroxol', 'cair', '44', NULL),
(6, 'Cataflam   ', 'kapsul', '76', NULL),
(7, 'curcuma', 'cair', '100', NULL);

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
  `datang_berobat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `username`, `password`, `jenis_kl`, `usia`, `alamat`, `bpjs`, `foto`, `nama_pasien`, `no_berobat`, `datang_berobat`) VALUES
(1, 'linda', '12345', '1', '21', 'cikaso', 'BPJS', NULL, 'linda', '2022041612WC4', '3'),
(2, 'adinda', '12345', '1', '21', 'sindang barang', 'NonBPJS', NULL, 'dinda', '2022041612WR2', '1'),
(3, 'admin', '12345', '1', '25', 'cipicung rt.01 rw.02', '1', NULL, 'jamaludin', '2022041612WD3', '2');

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
(1, 'admin', 'admin', 1);

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
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `booking_berobat`
--
ALTER TABLE `booking_berobat`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id_obat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
