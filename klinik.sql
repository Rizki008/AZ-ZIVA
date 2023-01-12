-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `id_user` int(11) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `status_berobat` varchar(11) DEFAULT NULL,
  `gejala` varchar(125) DEFAULT NULL,
  `no_resep` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_boking`, `id_user`, `tgl_berobat`, `status_berobat`, `gejala`, `no_resep`) VALUES
(1, 54, 4, '2022-04-01', '6', 'Alergi', '202208134908'),
(2, 51, 4, '2022-04-01', '6', 'Diare', '202208149559'),
(4, 52, 4, '2022-04-01', '6', 'Diare', '202208144116'),
(5, 50, 4, '2022-04-01', '6', 'Tonsilitis', '202208144662'),
(9, 49, 4, '2022-04-01', '6', 'Alergi', '20220814875'),
(10, 48, 4, '2022-04-01', '6', 'Tifus', '202208141647'),
(11, 47, 4, '2022-04-01', '6', 'Influenza', '202208141371'),
(12, 46, 4, '2022-04-01', '6', 'Fever', '202208143981'),
(13, 44, 4, '2022-04-01', '6', 'Fever', '202208148953'),
(14, 43, 4, '2022-04-01', '6', 'Maag', '202208141584'),
(15, 42, 4, '2022-04-01', '6', 'Tifus', '202208146081'),
(18, 39, 4, '2022-04-01', '6', 'Alergi', '202208143146'),
(19, 38, 4, '2022-04-01', '6', 'Influenza', '202208141170'),
(20, 37, 4, '2022-04-01', '6', 'Dypepsia', '202208143469'),
(21, 36, 4, '2022-04-01', '6', 'Cough', '202208149355'),
(22, 35, 4, '2022-04-01', '6', 'Asma', '202208148657'),
(23, 34, 4, '2022-04-01', '6', 'Tifus', '202208148953'),
(24, 33, 4, '2022-04-01', '6', 'Fever', '202208145203'),
(25, 32, 4, '2022-04-01', '6', 'Radang sendi', '202208144442'),
(26, 31, 4, '2022-04-01', '6', 'Influenza', '202208144320'),
(28, 62, 4, '2022-04-02', '6', 'Influenza', '202208143815'),
(29, 61, 4, '2022-04-02', '6', 'Fever', '202208134385'),
(35, 60, 4, '2022-04-02', '6', 'Luka Bakar', '202208145830'),
(36, 59, 4, '2022-04-02', '6', 'Fever', '20220814326'),
(37, 58, 4, '2022-04-02', '6', 'Maag', '202208133008'),
(38, 57, 4, '2022-04-02', '6', 'Fever', '202208144996'),
(39, 56, 4, '2022-04-02', '6', 'Rematik', '202208149708'),
(40, 55, 4, '2022-04-02', '6', 'Maag', '202208135388'),
(41, 85, 4, '2022-04-04', '6', 'Fever', '202208131165'),
(42, 84, 4, '2022-04-04', '6', 'Tifus', '202208132482'),
(43, 83, 4, '2022-04-04', '6', 'DBD', '202208138308'),
(44, 63, 4, '2022-04-04', '6', 'Tifus', '202208135184'),
(45, 81, 4, '2022-04-04', '6', 'Cough', '202208136017'),
(46, 80, 4, '2022-04-04', '6', 'Radang sendi', '202208131327'),
(50, 79, 4, '2022-04-04', '6', 'Radang sendi', '20220813204'),
(52, 78, 4, '2022-04-04', '6', 'Tifus', '202208135640'),
(54, 77, 4, '2022-04-04', '6', 'Dypepsia', '202208133754'),
(55, 76, 4, '2022-04-04', '6', 'Influenza', '202208133809'),
(56, 75, 4, '2022-04-04', '6', 'Influenza', '202208134267'),
(61, 74, 4, '2022-04-04', '6', 'Maag', '202208133232'),
(62, 74, 4, '2022-04-04', '6', 'Maag', '202208137504'),
(63, 73, 4, '2022-04-04', '6', 'Hamil', '202208142608'),
(64, 72, 4, '2022-04-04', '6', 'Tifus', '20220813713'),
(66, 71, 4, '2022-04-04', '6', 'Fever', '202208132438'),
(67, 71, 4, '2022-04-04', '6', 'Fever', '202208142232'),
(69, 70, 4, '2022-04-04', '6', 'Tifus', '202208134237'),
(71, 70, 4, '2022-04-04', '6', 'Tifus', '202208135735'),
(72, 70, 4, '2022-04-04', '6', 'Fever', '20220814455'),
(74, 68, 4, '2022-04-04', '6', 'Cough', '202208147204'),
(75, 67, 4, '2022-04-04', '6', 'Luka Bakar', '202208148403'),
(76, 66, 4, '2022-04-04', '6', 'Fever', '202208143614'),
(77, 65, 4, '2022-04-04', '6', 'Fever', '202208144073'),
(78, 64, 4, '2022-04-04', '6', 'Diare', '202208142521'),
(79, 104, 4, '2022-05-28', '6', 'DBD', '202208131729'),
(80, 105, 4, '2022-09-15', '6', 'ispa', '202209159157'),
(81, 106, 4, '2022-05-23', '6', 'Influenza', '202209155337'),
(82, 102, 4, '2022-05-23', '6', 'Hamil', '202210059585'),
(83, 101, 4, '2022-05-23', '6', 'Tifus', '202210051045'),
(84, 100, 4, '2022-05-23', '6', 'Maag', '202210056706'),
(85, 99, 4, '2022-05-23', '6', 'Tifus', '202210054812'),
(86, 98, 4, '2022-10-05', '6', 'Asam Urat', '202210058163'),
(87, 97, 4, '2022-05-11', '6', 'DBD', '202210059185'),
(88, 96, 4, '2022-05-11', '6', 'Influenza', '202210053531'),
(89, 95, 4, '2022-05-11', '6', 'Influenza', '20221005891'),
(90, 94, 4, '2022-05-11', '6', 'DBD', '202210056800'),
(91, 93, 4, '2022-05-09', '6', 'Alergi', '202210055121'),
(92, 92, 4, '2022-05-09', '6', 'Asam Urat', '202210051943'),
(93, 91, 4, '2022-05-09', '6', 'Influenza', '202210052582'),
(94, 90, 4, '2022-05-09', '6', 'Maag', '202210057507'),
(95, 89, 4, '2022-05-09', '6', 'Dypepsia', '202210059837'),
(96, 88, 4, '2022-04-22', '6', 'Influenza', '202210058264'),
(97, 87, 4, '2022-05-09', '6', 'Influenza', '202210053213'),
(98, 86, 4, '2022-05-09', '6', 'Influenza', '202210056940'),
(99, 107, 4, '2022-10-06', '6', 'Tifus', '202210069689'),
(100, 108, 4, '2022-10-06', '6', 'Influenza', '202210067424');

-- --------------------------------------------------------

--
-- Table structure for table `booking_berobat`
--

CREATE TABLE `booking_berobat` (
  `id_boking` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `no_antrian` varchar(50) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `keluhan` varchar(125) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `berobat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_berobat`
--

INSERT INTO `booking_berobat` (`id_boking`, `id_pasien`, `no_antrian`, `waktu`, `tgl_berobat`, `keluhan`, `status`, `berobat`) VALUES
(31, 10, '2', '1', '2022-04-01', 'Batuk Flu', '1', '1'),
(32, 11, '3', '1', '2022-04-01', 'Sakit Pinggang', '1', '1'),
(33, 12, '4', '1', '2022-04-01', 'Demam', '1', '1'),
(34, 13, '5', '1', '2022-04-01', 'Batuk Pilek Panas', '1', '1'),
(35, 14, '6', '1', '2022-04-01', 'Sesak Nafas', '1', '1'),
(36, 14, '7', '1', '2022-04-01', 'Sakit gigi', '1', '1'),
(37, 15, '8', '1', '2022-04-01', 'Sakit Kepala', '1', '1'),
(38, 16, '9', '1', '2022-04-01', 'Batuk Berdahak', '1', '1'),
(39, 17, '10', '1', '2022-04-01', 'Gatal gatal', '1', '1'),
(40, 18, '11', '1', '2022-04-01', 'Meriang', '1', '1'),
(41, 19, '12', '1', '2022-04-01', 'Demam', '1', '1'),
(42, 20, '13', '1', '2022-04-01', 'Batuk dan Demam', '1', '1'),
(43, 21, '14', '1', '2022-04-01', 'Sakit Perut', '1', '1'),
(44, 22, '15', '1', '2022-04-01', 'Pilek dan Demam', '1', '1'),
(46, 23, '2', '2', '2022-04-01', 'Sakit Kepala', '1', '1'),
(47, 24, '3', '2', '2022-04-01', 'Pilek Batuk', '1', '1'),
(48, 25, '4', '2', '2022-04-01', 'batuk flu panas', '1', '1'),
(49, 18, '5', '2', '2022-04-01', 'Gatal kaki', '1', '1'),
(50, 27, '6', '2', '2022-04-01', 'Sakit Tenggorokan', '1', '1'),
(51, 28, '7', '2', '2022-04-01', 'Diare', '1', '1'),
(52, 29, '8', '2', '2022-04-01', 'Sakit BAB', '1', '1'),
(53, 30, '9', '2', '2022-04-01', 'Demam', '1', '1'),
(54, 31, '10', '2', '2022-04-01', 'Gatal gatal', '1', '1'),
(55, 32, '0', '1', '2022-04-02', 'Sakit Perut', '1', '1'),
(56, 33, '2', '1', '2022-04-02', 'sakit kaki', '1', '1'),
(57, 34, '3', '1', '2022-04-02', 'Pusing demam', '1', '1'),
(58, 35, '4', '1', '2022-04-02', 'Sakit perut', '1', '1'),
(59, 36, '5', '1', '2022-04-02', 'Demam Panas', '1', '1'),
(60, 37, '0', '2', '2022-04-02', 'Luka Bakar', '1', '1'),
(61, 38, '6', '1', '2022-04-02', 'Demam', '1', '1'),
(62, 39, '2', '2', '2022-04-02', 'Pilek Batuk', '1', '1'),
(63, 40, '0', '1', '2022-04-04', 'Demam Batuk', '1', '1'),
(64, 41, '2', '1', '2022-04-04', 'Sakit Perut BAB', '1', '1'),
(65, 42, '3', '1', '2022-04-04', 'Pusing demam', '1', '1'),
(66, 44, '4', '1', '2022-04-04', 'Demam', '1', '1'),
(67, 45, '5', '1', '2022-04-04', 'Luka Bakar', '1', '1'),
(68, 46, '6', '1', '2022-04-04', 'Batuk Flu Pilek', '1', '1'),
(69, 47, '7', '1', '2022-04-04', 'Sakit Kaki', '1', '1'),
(70, 48, '8', '1', '2022-04-04', 'Panas Dingin', '1', '1'),
(71, 49, '9', '1', '2022-04-04', 'Panas', '1', '1'),
(72, 50, '10', '1', '2022-04-04', 'Sakit Kepala', '1', '1'),
(73, 51, '11', '1', '2022-04-04', 'Sakit Pinggang Ibu Hamil', '1', '1'),
(74, 52, '12', '1', '2022-04-04', 'Sakit Perut', '1', '1'),
(75, 53, '13', '1', '2022-04-04', 'Demam Batuk', '1', '1'),
(76, 54, '14', '1', '2022-04-04', 'Batuk Flu Pilek', '1', '1'),
(77, 55, '15', '1', '2022-04-04', 'mual muntah demam', '1', '1'),
(78, 56, '16', '1', '2022-04-04', 'Demam', '1', '1'),
(79, 57, '0', '2', '2022-04-04', 'Sakit Kaki Tangan', '1', '1'),
(80, 58, '2', '2', '2022-04-04', 'Sakit Kaki Pinggang', '1', '1'),
(81, 59, '3', '2', '2022-04-04', 'Batuk Berdahak', '1', '1'),
(82, 60, '4', '2', '2022-04-04', 'Tangan Tidak Bisa Bergerak', '1', '1'),
(83, 61, '5', '2', '2022-04-04', 'Kontrol', '1', '1'),
(84, 62, '6', '2', '2022-04-04', 'Batuk Pilek Panas', '1', '1'),
(85, 63, '7', '2', '2022-04-04', 'Panas Pilek', '1', '1'),
(86, 64, '0', '1', '2022-05-09', 'Pilek dan Demam', '1', '1'),
(87, 64, '2', '1', '2022-05-09', 'Pilek dan Demam', '1', '1'),
(88, 65, '3', '1', '2022-04-22', 'Sakit tenggorokan', '1', '1'),
(89, 67, '4', '1', '2022-05-09', 'Sakit Kepala', '1', '1'),
(90, 68, '5', '1', '2022-05-09', 'Sakit Perut', '1', '1'),
(91, 69, '6', '1', '2022-05-09', 'Batuk dan Demam', '1', '1'),
(92, 70, '7', '1', '2022-05-09', 'Sakit Kaki', '1', '1'),
(93, 71, '8', '1', '2022-05-09', 'Gatal gatal', '1', '1'),
(94, 72, '9', '1', '2022-05-11', 'Sakit Kepala', '1', '1'),
(95, 73, '10', '1', '2022-05-11', 'Batuk Flu Pilek', '1', '1'),
(96, 74, '11', '1', '2022-05-11', 'Pilek dan batuk berdahak', '1', '1'),
(97, 75, '12', '1', '2022-05-11', 'Batuk dan Demam', '1', '1'),
(98, 48, '13', '1', '2022-04-04', 'Sakit Kaki', '1', '1'),
(99, 76, '14', '1', '2022-05-23', 'Demam', '1', '1'),
(100, 77, '15', '1', '2022-05-23', 'Sakit Perut', '1', '1'),
(101, 78, '16', '1', '2022-05-23', 'Badan lemas', '1', '1'),
(102, 79, '17', '1', '2022-05-23', 'Ibu Hamil', '1', '1'),
(103, 80, '18', '1', '2022-05-23', 'Sakit tenggorokan', '1', '1'),
(104, 81, '19', '1', '2022-05-28', 'Demam batuk pilek panas', '1', '1'),
(105, 84, '0', '1', '2022-09-15', 'batuk', '1', '1'),
(106, 85, '2', '1', '2022-05-23', 'flu', '1', '1'),
(107, 84, '0', '1', '2022-10-06', 'Batuk dan Demam', '1', '1'),
(108, 85, '2', '1', '2022-10-06', 'batuk', '1', '1');

--
-- Triggers `booking_berobat`
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
-- Table structure for table `obat_keluar`
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
-- Dumping data for table `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_obat_keluar`, `id_obat_masuk`, `no_resep`, `qty`, `dosis`, `tgl_keluar`) VALUES
(1, 10, '202208121345', '8', '3x1', '2022-04-01'),
(2, 13, '202208121345', '8', '3x1', '2022-04-01'),
(3, 25, '202208121345', '8', '3x1', '2022-04-01'),
(4, 29, '202208134078', '7', '3x1', '2022-04-01'),
(5, 19, '202208134078', '6', '2x1', '2022-04-01'),
(6, 10, '202208131729', '8', '3x1', '2022-04-01'),
(7, 18, '202208131729', '1', '3x1', '2022-04-01'),
(8, 17, '202208134267', '1', '3x1', '2022-08-13'),
(9, 37, '202208134267', '6', '3x1', '2022-04-01'),
(10, 28, '202208134267', '4', '2x1', '2022-04-01'),
(11, 12, '202208133809', '6', '3x1', '2022-04-01'),
(12, 30, '202208133809', '4', '2x1', '2022-04-01'),
(13, 36, '202208133809', '6', '3x1', '2022-04-01'),
(14, 16, '202208133754', '10', '3x1', '2022-04-02'),
(15, 13, '202208133754', '6', '3x1', '2022-04-02'),
(16, 10, '202208135640', '12', '3x1', '2022-04-02'),
(17, 12, '202208135640', '12', '3x1', '2022-04-02'),
(18, 30, '20220813204', '6', '2x1', '2022-04-02'),
(19, 30, '202208131327', '1', '3x1', '2022-04-02'),
(20, 39, '202208131327', '8', '3x1', '2022-04-02'),
(21, 25, '202208136017', '8', '3x1', '2022-04-02'),
(22, 37, '202208136017', '8', '3x1', '2022-04-02'),
(23, 17, '202208134385', '1', '3x1', '2022-04-02'),
(24, 18, '202208134385', '1', '3x1', '2022-04-02'),
(25, 12, '202208133008', '8', '3x1', '2022-04-02'),
(26, 19, '202208135184', '9', '3x1', '2022-04-02'),
(27, 47, '202208135184', '9', '3x1', '2022-04-02'),
(28, 36, '202208135184', '6', '2x1', '2022-08-13'),
(29, 16, '202208138308', '7', '3x1', '2022-04-02'),
(30, 25, '202208138308', '5', '2x1', '2022-04-02'),
(31, 13, '202208132482', '8', '3x1', '2022-04-02'),
(32, 31, '202208132482', '6', '3x1', '2022-04-04'),
(33, 10, '202208131165', '10', '3x1', '2022-04-04'),
(34, 12, '202208131165', '8', '3x1', '2022-04-04'),
(35, 26, '202208135388', '9', '3x1', '2022-04-04'),
(36, 30, '202208135388', '8', '3x1', '2022-04-04'),
(37, 32, '202208133232', '9', '3x1', '2022-04-04'),
(38, 31, '202208133232', '9', '3x1', '2022-04-04'),
(39, 11, '202208137504', '4', '3x1', '2022-04-04'),
(40, 10, '20220813713', '8', '3x1', '2022-04-04'),
(41, 12, '20220813713', '10', '3x1', '2022-04-04'),
(42, 15, '202208134908', '12', '3x1', '2022-04-04'),
(43, 19, '202208134908', '7', '3x1', '2022-04-04'),
(44, 48, '202208134908', '1', '3x1', '2022-04-04'),
(45, 10, '202208135735', '12', '3x1', '2022-04-04'),
(46, 19, '202208135735', '8', '3x1', '2022-04-04'),
(47, 10, '202208134237', '10', '3x1', '2022-04-04'),
(48, 12, '202208134237', '9', '3x1', '2022-04-04'),
(49, 57, '202208134237', '6', '2x1', '2022-04-04'),
(50, 13, '202208132438', '6', '2x1', '2022-04-04'),
(51, 11, '202208142608', '9', '3x1', '2022-08-14'),
(52, 20, '202208142608', '8', '3x1', '2022-04-04'),
(53, 46, '20220814455', '7', '2x1', '2022-04-04'),
(54, 17, '20220814455', '1', '3x1', '2022-04-04'),
(55, 26, '202208142232', '9', '3x1', '2022-04-04'),
(56, 38, '202208142232', '6', '2x1', '2022-04-04'),
(57, 25, '202208142521', '8', '3x1', '2022-04-04'),
(58, 34, '202208142521', '9', '3x1', '2022-04-04'),
(59, 10, '202208144073', '8', '3x1', '2022-04-04'),
(60, 57, '202208144073', '6', '3x1', '2022-05-23'),
(61, 12, '202208143614', '8', '3x1', '2022-05-23'),
(62, 41, '202208148403', '3', '1x1', '2022-05-23'),
(63, 14, '202208141584', '8', '3x1', '2022-05-23'),
(64, 46, '202208141584', '6', '3x1', '2022-05-23'),
(65, 10, '202208146081', '9', '3x1', '2022-05-23'),
(66, 57, '202208146081', '3', '1x1', '2022-05-23'),
(67, 46, '202208146081', '10', '3x1', '2022-05-23'),
(68, 13, '202208148953', '8', '3x1', '2022-05-23'),
(69, 19, '202208148953', '3', '3x1', '2022-05-23'),
(70, 12, '202208148953', '6', '3x1', '2022-05-23'),
(71, 15, '202208143146', '12', '3x1', '2022-05-23'),
(72, 52, '202208143146', '6', '3x1', '2022-05-23'),
(73, 12, '20220814326', '6', '3x1', '2022-05-23'),
(74, 16, '202208145830', '9', '3x1', '2022-05-23'),
(75, 10, '202208144996', '8', '3x1', '2022-05-23'),
(76, 13, '202208144996', '3', '3x1', '2022-05-23'),
(77, 17, '202208141647', '10', '3x1', '2022-05-11'),
(78, 21, '202208141647', '8', '3x1', '2022-05-11'),
(79, 58, '202208149708', '9', '3x1', '2022-05-11'),
(80, 23, '202208149708', '9', '3x1', '2022-05-11'),
(81, 28, '202208141371', '9', '3x1', '2022-05-11'),
(82, 57, '202208141371', '9', '3x1', '2022-05-11'),
(83, 19, '202208143981', '10', '3', '2022-05-11'),
(84, 22, '202208143981', '8', '3x1', '2022-05-11'),
(85, 32, '202208141170', '8', '3x1', '2022-05-11'),
(86, 22, '202208141170', '4', '3x1', '2022-05-11'),
(87, 14, '202208141170', '7', '2x1', '2022-05-11'),
(88, 13, '202208144116', '8', '3x1', '2022-05-11'),
(89, 21, '202208144116', '9', '3x1', '2022-05-11'),
(90, 13, '202208144662', '9', '3x1', '2022-05-11'),
(91, 20, '202208144662', '8', '3x1', '2022-05-09'),
(92, 15, '20220814875', '9', '3x1', '2022-05-09'),
(93, 58, '20220814875', '8', '2x1', '2022-05-09'),
(94, 16, '202208143469', '8', '3x1', '2022-05-09'),
(95, 16, '202208149355', '8', '2x1', '2022-05-09'),
(96, 58, '202208149355', '8', '3x1', '2022-05-09'),
(97, 22, '202208148657', '12', '1x1', '2022-05-09'),
(98, 59, '202208148657', '9', '3x1', '2022-05-09'),
(99, 10, '202208148953', '10', '3x1', '2022-05-09'),
(100, 16, '202208148953', '9', '3x1', '2022-05-09'),
(101, 14, '202208148953', '8', '3x1', '2022-05-09'),
(102, 18, '202208145203', '1', '3x1', '2022-05-09'),
(103, 31, '202208145203', '9', '2x1', '2022-05-09'),
(104, 16, '202208144442', '12', '3x1', '2022-05-09'),
(105, 21, '202208144442', '12', '3x1', '2022-05-23'),
(106, 18, '202208147204', '1', '3x1', '2022-05-23'),
(107, 20, '202208147204', '9', '3x1', '2022-05-23'),
(108, 57, '202208143815', '10', '3x1', '2022-05-23'),
(109, 58, '202208143815', '10', '3x1', '2022-05-23'),
(110, 59, '202208143815', '12', '3x1', '2022-05-23'),
(111, 19, '202208144320', '9', '3x1', '2022-05-23'),
(112, 25, '202208144320', '10', '3x1', '2022-05-23'),
(113, 55, '202208149559', '10', '3x1', '2022-05-23'),
(114, 52, '202208149559', '12', '3x1', '2022-05-23'),
(115, 10, '202209159157', '3', '3x1', '2022-05-23'),
(116, 13, '202209159157', '3', '3x1', '2022-05-23'),
(117, 10, '202209155337', '3', '3x1', '2022-05-23'),
(118, 32, '202209155337', '5', '3x1', '2022-09-15'),
(119, 12, '202210055121', '3', '3x1', '2022-10-05'),
(120, 15, '202210055121', '6', '2x1', '2022-10-05'),
(121, 31, '202210051943', '6', '3x1', '2022-10-05'),
(122, 27, '202210051943', '8', '3x1', '2022-10-05'),
(123, 11, '202210052582', '8', '3x1', '2022-10-05'),
(124, 28, '202210052582', '6', '3x1', '2022-10-05'),
(125, 36, '202210057507', '8', '3x1', '2022-10-05'),
(126, 55, '202210057507', '6', '3x1', '2022-10-05'),
(127, 14, '202210059837', '4', '3x1', '2022-10-05'),
(128, 22, '202210059837', '8', '3x1', '2022-10-05'),
(129, 10, '202210054812', '6', '3x1', '2022-10-05'),
(130, 15, '202210054812', '8', '3x1', '2022-10-05'),
(131, 11, '202210051045', '8', '3x1', '2022-10-05'),
(132, 10, '202210051045', '9', '3x1', '2022-10-05'),
(133, 16, '202210056706', '8', '3x1', '2022-10-05'),
(134, 20, '202210056706', '8', '3x1', '2022-10-05'),
(135, 14, '202210056940', '9', '3x1', '2022-10-05'),
(136, 13, '202210058163', '9', '3x1', '2022-10-05'),
(137, 19, '202210059185', '6', '3x1', '2022-10-05'),
(138, 29, '202210053531', '6', '3x1', '2022-10-05'),
(139, 11, '202210053531', '3', '3x1', '2022-10-05'),
(140, 30, '20221005891', '6', '3x1', '2022-10-05'),
(141, 41, '20221005891', '7', '3x1', '2022-10-05'),
(142, 20, '202210056800', '6', '3x1', '2022-10-05'),
(143, 27, '202210058264', '6', '3x1', '2022-10-05'),
(144, 25, '202210058264', '8', '3x1', '2022-10-05'),
(145, 16, '202210053213', '8', '3x1', '2022-10-05'),
(146, 10, '202210053213', '5', '3x1', '2022-10-05'),
(147, 10, '202210059585', '7', '3x1', '2022-10-05'),
(148, 13, '202210059585', '8', '3x1', '2022-10-05'),
(149, 10, '202210069689', '8', '3x1', '2022-10-06'),
(150, 14, '202210069689', '9', '3x1', '2022-10-06'),
(151, 12, '202210067424', '8', '3x1', '2022-10-06'),
(152, 17, '202210067424', '9', '3x1', '2022-10-06');

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
(10, 'Paracetamol', 'Pereda Nyeri', '356', '2022-08-09'),
(11, 'Ambroxol', 'Pereda Batuk', '468', '2022-08-09'),
(12, 'Amoxcillin', 'Sakit Kepala', '466', '2022-08-09'),
(13, 'Samcodin', 'Batuk Flu', '474', '2022-08-09'),
(14, 'Farsifen', 'Sakit Tenggorokan', '505', '2022-08-09'),
(15, 'Cetirizin', 'Alergi', '203', '2022-08-09'),
(16, 'Aripiprazole', 'Demam', '471', '2022-08-09'),
(17, 'Paracetamol Sirup', 'Demam Anak', '528', '2022-08-09'),
(18, 'Sanmol Sirup', 'Demam', '596', '2022-08-09'),
(19, 'Actifed', 'Pilek dan Alergi', '492', '2022-08-09'),
(20, 'Anadex', 'Obat Batuk Flu dan sakit kepala', '61', '2022-08-09'),
(21, 'Bronchitin', 'Obat Batuk Dan Demam', '521', '2022-08-09'),
(22, 'Bronkris', 'Obat Batuk dan radang pernafasan', '468', '2022-08-09'),
(23, 'Canesten', 'Obat Jamur, panu, kutu air', '91', '2022-08-09'),
(24, 'Calortusin', 'Obat Flu dan Demam', '300', '2022-08-09'),
(25, 'Decadryl', 'Obat Sesak Nafas', '153', '2022-08-09'),
(26, 'Decolgen', 'Pereda Flu', '282', '2022-08-09'),
(27, 'Dentasol', 'Obat Gigi', '386', '2022-08-09'),
(28, 'Inza', 'Flu Anak', '181', '2022-08-09'),
(29, 'Kontrabal', 'Batuk berdahak', '137', '2022-08-09'),
(30, 'Neozep', 'Obat Flu & Sakit Kepala', '125', '2022-08-09'),
(31, 'Pyrantel', 'Obat Cacing', '20', '2022-08-09'),
(32, 'The Obron', 'Obat Asma', '78', '2022-08-09'),
(33, 'Mistaklor', 'Anti Alergi', '100', '2022-08-09'),
(34, 'Farsifen', 'Nyeri ringan sakit gigi', '91', '2022-08-09'),
(35, 'Oksiterasiklin', 'Salep kulit infeksi bakteri', '60', '2022-08-09'),
(36, 'AS Mefenamat', 'Nyeri gigi', '80', '2022-08-09'),
(37, 'Ranitidin', 'Nyeri maag', '236', '2022-08-09'),
(38, 'Cardiaka', 'Untuk Jantung', '44', '2022-08-09'),
(39, 'Halitosis', 'Menyegarkan Nafas', '92', '2022-08-09'),
(40, 'Dismenorrhoe', 'Mengobati nyeri haid', '80', '2022-08-09'),
(41, 'Depuratif', 'Pembersih Darah', '290', '2022-08-09'),
(42, 'Konstipasi', 'Susah BAB', '100', '2022-08-09'),
(43, 'Amara', 'Menambah Nafsu Makan', '300', '2022-08-09'),
(44, 'Laktagoga', 'Pelancar ASI', '100', '2022-08-09'),
(45, 'Antidiabetika', 'Mengurangi Kencing Manis', '80', '2022-08-09'),
(46, 'Laxativa', 'Memperlancar BAB', '177', '2022-08-09'),
(47, 'Skorbut', 'Sariawan', '91', '2022-08-09'),
(48, 'Rivanol', 'Kompres Luka', '99', '2022-08-09'),
(49, 'Betadine', 'Mencegah Infeksi', '20', '2022-08-09'),
(50, 'Kapas', 'Perawatan', '50', '2022-08-09'),
(51, 'Perban Roll', 'Perawatan', '80', '2022-08-09'),
(52, 'Miconazole', 'Obat Kardiasi Kulit', '32', '2022-08-09'),
(53, 'Pinkind\'s', 'Batuk Berdahak & Demam', '250', '2022-08-09'),
(54, 'Insinc Suspensi', 'Penurun Panas & Nyeri', '100', '2022-08-09'),
(55, 'Paratusine', 'Penurun Panas Dan Nyeri', '84', '2022-08-09'),
(56, 'Rotho', 'Iritasi Mata', '40', '2022-08-09'),
(57, 'Flucadex', 'Anti Flu', '66', '2022-08-09'),
(58, 'Orphan', 'Anti Alergi Gatal', '65', '2022-08-09'),
(59, 'Sanadryl', 'Obat Batuk Kering', '80', '2022-09-15'),
(60, 'Bufakaril', 'Alergi Dingin', '100', '2022-10-06');

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
  `nama_pasien` varchar(125) DEFAULT NULL,
  `no_berobat` varchar(50) DEFAULT NULL,
  `datang_berobat` varchar(50) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `username`, `password`, `jenis_kl`, `usia`, `alamat`, `bpjs`, `nama_pasien`, `no_berobat`, `datang_berobat`, `tgl_daftar`) VALUES
(9, 'radea', 'radea123', 'laki-laki', '10', 'Kasturi', 'BPJS', 'M Radea', '20220809UT0YR', '2', '2022-04-01'),
(10, 'irma', 'irma123', 'perempuan', '18', 'Kasturi', 'BPJS', 'Irma Yolanda', '20220809IMX4R', '2', '2022-04-01'),
(11, 'Emi', 'emi123', 'perempuan', '68', 'Kedungarum', 'BPJS', 'Suhemi', '20220809CBNAS', '2', '2022-04-01'),
(12, 'anggi', 'anggi123', 'laki-laki', '27', 'Kedungarum', 'BPJS', 'Anggi Munirul', '20220809G3E0Q', '2', '2022-04-01'),
(13, 'agus', 'agus123', 'laki-laki', '37', 'Padarek', 'BPJS', 'Agus Sutisna', '20220809LOKO3', '2', '2022-04-01'),
(14, 'tati', 'tati123', 'perempuan', '53', 'Pagundan', 'BPJS', 'Tati Sumiati', '20220809HCXQT', '3', '2022-04-01'),
(15, 'karwi', 'karwi123', 'perempuan', '66', 'Padarek', 'BPJS', 'Karwinah', '20220809MIA9J', '2', '2022-04-01'),
(16, 'saeman', 'saeman123', 'laki-laki', '62', 'Cengal', 'BPJS', 'Saeman', '20220809AYCT0', '2', '2022-04-01'),
(17, 'gita', 'gita123', 'perempuan', '22', 'Kertaungaran', 'BPJS', 'Gita', '20220809LU0GR', '2', '2022-04-01'),
(18, 'soleh', 'soleh123', 'laki-laki', '48', 'Kertaungaran', 'BPJS', 'Solehudin', '20220809VRAXW', '3', '2022-04-01'),
(20, 'amora', 'amora123', 'perempuan', '8', 'Pakembangan', 'BPJS', 'Amora Kirana', '20220809DFN4I', '2', '2022-04-01'),
(21, 'jariah', 'jariah123', 'perempuan', '62', 'Padarek', 'BPJS', 'Jariah', '20220809D0JGL', '2', '2022-04-01'),
(22, 'azam', 'azam123', 'laki-laki', '9', 'Kasturi', 'BPJS', 'Azam', '20220809TXCDF', '2', '2022-04-01'),
(23, 'memed', 'memed123', 'laki-laki', '57', 'Taraju', 'NonBPJS', 'Memed', '20220809WELAQ', '3', '2022-04-01'),
(24, 'nur123', 'nur123', 'perempuan', '27', 'Taraju', 'NonBPJS', 'Nurlaelasari', '202208094ADKM', '2', '2022-04-01'),
(25, 'rafi', 'rafi123', 'laki-laki', '13', 'Rajadanu', 'NonBPJS', 'Rafi', '20220809UWJBK', '2', '2022-04-01'),
(26, 'soleh', 'soleh123', 'laki-laki', '56', 'Ancaran', 'NonBPJS', 'M Soleh', '20220809Q7IFE', '1', '2022-04-01'),
(27, 'mahat', 'mahat123', 'laki-laki', '42', 'Cipari', 'NonBPJS', 'Mahat', '20220809BLUDZ', '2', '2022-04-01'),
(28, 'roy', 'roy123', 'laki-laki', '32', 'Ciporang', 'NonBPJS', 'Roy', '20220809DXYGU', '2', '2022-04-01'),
(29, 'yayu', 'yayu123', 'perempuan', '24', 'Ancaran', 'NonBPJS', 'Yayu', '20220809R8TVO', '2', '2022-04-01'),
(31, 'vanes', 'vanes123', 'perempuan', '12', 'Kasturi', 'BPJS', 'Vanesha', '202208095EKNY', '2', '2022-04-01'),
(32, 'nining', 'nining123', 'perempuan', '32', 'Cipari', 'BPJS', 'Nining', '20220809UPCXX', '2', '2022-04-02'),
(33, 'minah', 'minah123', 'perempuan', '68', 'Kedungarum', 'BPJS', 'Minah', '20220809CRUBN', '2', '2022-04-02'),
(34, 'uka', 'uka123', 'laki-laki', '49', 'Kertayasa', 'BPJS', 'Uka', '20220809NGLVR', '2', '2022-04-02'),
(35, 'yanti', 'yanti123', 'perempuan', '32', 'Kertayasa', 'BPJS', 'Emyanti', '20220809OMR7T', '2', '2022-04-02'),
(36, 'ono', 'ono123', 'laki-laki', '46', 'Taraju', 'BPJS', 'Ono', '20220809XV0IP', '2', '2022-04-02'),
(37, 'samhuri', 'sam123', 'laki-laki', '49', 'Cipari', 'BPJS', 'Samhuri', '20220809IELO8', '2', '2022-04-02'),
(38, 'ayra', 'ayra123', 'perempuan', '10bulan', 'Ciporang', 'BPJS', 'Ayra', '20220809BWKXK', '2', '2022-04-02'),
(39, 'rahma', 'rahma123', 'perempuan', '15', 'Alam Asri', 'BPJS', 'Rachmalia', '20220809BNGKR', '2', '2022-04-02'),
(40, 'ajat', 'ajat123', 'laki-laki', '32', 'Ciporang', 'BPJS', 'Ajat Sudrajat', '20220810ZPYMU', '2', '2022-04-04'),
(41, 'een', 'een123', 'perempuan', '45', 'Maleber', 'BPJS', 'Een', '20220810BQU29', '2', '2022-04-04'),
(42, 'rani', 'rani123', 'perempuan', '24', 'Kertawangunan', 'BPJS', 'Rani', '20220810POSKT', '2', '2022-04-04'),
(43, 'aan', 'aan123', 'perempuan', '46', 'Kertawangunan', 'BPJS', 'Aan Nurhasanah', '20220810ZDL5A', '1', '2022-04-04'),
(44, 'pazrin', 'pazrin123', 'laki-laki', '29', 'Padarek', 'BPJS', 'Pazrin Bani', '20220810GVE7H', '2', '2022-04-04'),
(45, 'ansol', 'ansol123', 'laki-laki', '28', 'Cikubangsari', 'BPJS', 'Ansol', '20220810E5ZRA', '2', '2022-04-04'),
(46, 'suladri', 'suladri123', 'laki-laki', '38', 'Ancaran', 'BPJS', 'Suladri', '20220810OHUTP', '2', '2022-04-04'),
(47, 'sholeh', 'sholeh123', 'laki-laki', '49', 'Padarek', 'BPJS', 'Sholeh', '20220810BKDMT', '2', '2022-04-04'),
(48, 'sutarna', 'sutarna123', 'laki-laki', '61', 'Kertawangunan', 'BPJS', 'Sutarna', '20220810PMHUR', '3', '2022-04-04'),
(49, 'dia', 'dia123', 'perempuan', '2', 'Babakanreuma', 'BPJS', 'Diajeng', '20220810QD4ES', '2', '2022-04-04'),
(50, 'nopa', 'nopa123', 'perempuan', '27', 'Alam Asri', 'BPJS', 'Nopa', '20220810CZSE7', '', '2022-04-04'),
(51, 'satni', 'satni123', 'perempuan', '36', 'Ancaran', 'BPJS', 'Satni', '20220810Q2NNH', '2', '2022-04-04'),
(52, 'dayu', 'dayu123', 'perempuan', '34', 'Ancaran', 'BPJS', 'Dayu', '20220810HKBSZ', '2', '2022-04-04'),
(53, 'rafa', 'rafa123', 'laki-laki', '10', 'Ancaran', 'BPJS', 'Rafa', '20220810WL6KZ', '2', '2022-04-04'),
(54, 'rangga', 'rangga123', 'laki-laki', '21', 'Alam Asri', 'NonBPJS', 'Rangga', '20220810LYHGY', '2', '2022-04-04'),
(55, 'maul', 'maul123', 'laki-laki', '26', 'Padarek', 'NonBPJS', 'Ahmad Maulana', '20220810RRBKX', '2', '2022-04-04'),
(56, 'zaka', 'zaka123', 'laki-laki', '3', 'Dukuhlor', 'NonBPJS', 'Zakaria', '202208106ODLN', '2', '2022-04-04'),
(57, 'sri', 'sri123', 'perempuan', '30', 'Cijoho', 'BPJS', 'Sri Santi', '20220810FZ7AH', '2', '2022-04-04'),
(58, 'elon', 'elon123', 'laki-laki', '55', 'Sindang Sari', 'BPJS', 'Elon', '20220810ZNVD2', '2', '2022-04-04'),
(59, 'wati', 'wati123', 'perempuan', '67', 'Kasturi', 'BPJS', 'Wati', '20220810ZV7FF', '2', '2022-04-04'),
(61, 'joh', 'joh123', 'laki-laki', '65', 'padarek', 'BPJS', 'Johata', '20220810XHZAJ', '2', '2022-04-04'),
(62, 'naura', 'naura123', 'perempuan', '11', 'Ciporang', 'BPJS', 'Naura', '20220810YC4MW', '2', '2022-04-04'),
(63, 'radit', 'radit123', 'laki-laki', '8', 'Ancaran', 'BPJS', 'Raditya', '20220810B1PUF', '2', '2022-04-04'),
(64, 'mamah', 'mamah123', 'perempuan', '49', 'Ancaran', 'BPJS', 'Mamah Hasimah', '202208138OLLH', '3', '2022-05-09'),
(65, 'khae', 'khae123', 'perempuan', '17', 'Cijoho', 'BPJS', 'Khaerani Fadiras', '20220813UTYZ', '3', '2022-04-22'),
(67, 'rika', 'rika123', 'perempuan', '38', 'Cijoho', 'BPJS', 'Rika', '20220813IWSML', '2', '2022-05-09'),
(68, 'siti', 'siti123', 'perempuan', '36', 'Ancaran', 'BPJS', 'Siti Awinah', '20220813GXZ3X', '2', '2022-08-09'),
(69, 'hanif', 'hanif123', 'laki-laki', '8', 'Ancaran', 'BPJS', 'M Hanif', '20220813OJGFM', '2', '2022-05-09'),
(70, 'yati', 'yati123', 'perempuan', '23', 'Sindang Sari', 'BPJS', 'Yati Widiati', '20220813J4B9S', '2', '2022-08-09'),
(71, 'hamdun', 'ham123', 'laki-laki', '53', 'Ancaran', 'BPJS', 'Hamdun', '20220813MOZ5T', '2', '2022-08-09'),
(72, 'lina', 'lina123', 'perempuan', '29', 'Kedungarum', 'BPJS', 'Lina', '20220813BMG4R', '2', '2022-05-11'),
(73, 'fatimah', 'fat123', 'perempuan', '26', 'Perum KCV', 'BPJS', 'Fatimah', '20220813CLOAX', '2', '2022-05-11'),
(74, 'kamal', 'kamal123', 'laki-laki', '37', 'Perum KCV', 'BPJS', 'Kamaludin', '20220813IRLIZ', '2', '2022-05-11'),
(75, 'abi', 'abi123', 'laki-laki', '15', 'Babakanreuma', 'BPJS', 'M Abizar', '20220813VAST3', '2', '2022-05-11'),
(76, 'alvio', 'alvi123', 'laki-laki', '6', 'Grand Amalia Kedungarum', 'BPJS', 'Alvio', '20220813JCISN', '2', '2022-05-23'),
(77, 'ade', 'ade123', 'laki-laki', '31', 'Ancaran', 'BPJS', 'Ade Hasanudin', '20220813OKIF6', '2', '2022-05-23'),
(78, 'sazwan', 'saz123', 'laki-laki', '51', 'Karangtawang', 'BPJS', 'Sazwan', '20220813ABN7M', '2', '2022-05-23'),
(79, 'nia', 'nia123', 'perempuan', '32', 'Kertawangunan', 'BPJS', 'Nia rahania', '20220813TU2CX', '2', '2022-05-23'),
(80, 'emah', 'emah123', 'perempuan', '43', 'Ciporang', 'NonBPJS', 'Emah', '20220813MASPT', '2', '2022-05-23'),
(81, 'hawa', 'hawa123', 'perempuan', '19', 'Cirebon', 'NonBPJS', 'Hawa', '20220813KOBLG', '2', '2022-05-28'),
(82, 'darul', 'darul123', 'laki-laki', '22', 'Cisukadana', 'NonBPJS', 'Darul Gilang', '20220813VYBRF', '1', '2022-05-28'),
(83, 'nia', 'nia123', 'perempuan', '34', 'Cipari', 'NonBPJS', 'Nia Baeti', '20220813LDG9F', '1', '2022-05-28'),
(84, 'herawati', 'hera123', 'perempuan', '40', 'Puri Asri', 'NonBPJS', 'Herawati', '20221006OXE4G', '2', '2022-10-06'),
(85, 'linda', 'linda123', 'perempuan', '22', 'Kedungarum', 'NonBPJS', 'Linda Mahmudah', '20221006TTDPG', '2', '2022-10-06');

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
(1, 'admin', 'admin', 1),
(2, 'pemilik', 'pemilik', 2),
(3, 'apoteker', 'apoteker', 3),
(4, 'dokter', 'dokter', 4);

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
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `booking_berobat`
--
ALTER TABLE `booking_berobat`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id_obat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
