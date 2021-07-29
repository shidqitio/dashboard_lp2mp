-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard_lppmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `acp`
--

CREATE TABLE `acp` (
  `kd_acp` int(11) NOT NULL,
  `masa_ganjil` varchar(14) NOT NULL,
  `tanggal_mulaiganjil` date NOT NULL,
  `sampai_denganganjil` date NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `masa_genap` varchar(14) NOT NULL,
  `tanggal_mulaigenap` date NOT NULL,
  `sampai_dengangenap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acp`
--

INSERT INTO `acp` (`kd_acp`, `masa_ganjil`, `tanggal_mulaiganjil`, `sampai_denganganjil`, `kegiatan`, `masa_genap`, `tanggal_mulaigenap`, `sampai_dengangenap`) VALUES
(8, '2019/20.2', '2019-08-12', '2019-08-13', 'fgdfdfhdfh', '2020/21.2', '2019-08-15', '2019-08-22'),
(11, '2018/19.1', '2019-08-01', '2019-08-10', 'Libur telah tiba !', '2018/19.1', '2019-08-10', '2019-08-17'),
(16, '2018/19.1', '2019-08-04', '2019-08-05', '1234', '2018/19.1', '2019-08-18', '2019-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `agenda_new`
--

CREATE TABLE `agenda_new` (
  `kd_diplomasarjana` int(11) NOT NULL,
  `masa_ganjil` varchar(14) NOT NULL,
  `tanggal_mulaiganjil` date NOT NULL,
  `sampai_denganganjil` date NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `masa_genap` varchar(14) NOT NULL,
  `tanggal_mulaigenap` date NOT NULL,
  `sampai_dengangenap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_new`
--

INSERT INTO `agenda_new` (`kd_diplomasarjana`, `masa_ganjil`, `tanggal_mulaiganjil`, `sampai_denganganjil`, `kegiatan`, `masa_genap`, `tanggal_mulaigenap`, `sampai_dengangenap`) VALUES
(26, '2023/24.1', '2019-07-28', '2019-07-29', 'lr', '2023/24.2', '2019-08-31', '2019-08-31'),
(27, '2022/23.1', '2019-07-11', '2019-07-17', 'Registrasi BA', '2022/23.2', '2019-07-20', '2019-07-24'),
(28, '2018/19.1', '2019-08-01', '2019-08-02', 'test1234', '2018/19.2', '2019-08-03', '2019-08-04'),
(29, '2018/19.1', '2019-08-13', '2019-08-10', 'Tes ya', '2019/20.1', '2019-08-23', '2019-08-31'),
(30, '2021/22.1', '2021-03-02', '2021-03-05', 'biyasalaahhh', '2021/22.2', '2021-03-02', '2021-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `biaya_cetak`
--

CREATE TABLE `biaya_cetak` (
  `id_cetak` int(11) NOT NULL,
  `biaya_cetak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya_cetak`
--

INSERT INTO `biaya_cetak` (`id_cetak`, `biaya_cetak`) VALUES
(1, 55);

-- --------------------------------------------------------

--
-- Table structure for table `designlayout`
--

CREATE TABLE `designlayout` (
  `id_design` int(11) NOT NULL,
  `designlayout` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designlayout`
--

INSERT INTO `designlayout` (`id_design`, `designlayout`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `doktor`
--

CREATE TABLE `doktor` (
  `kd_doktor` int(11) NOT NULL,
  `masa_ganjil` varchar(14) NOT NULL,
  `tanggal_mulaiganjil` date NOT NULL,
  `sampai_denganganjil` date NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `masa_genap` varchar(14) NOT NULL,
  `tanggal_mulaigenap` date NOT NULL,
  `sampai_dengangenap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doktor`
--

INSERT INTO `doktor` (`kd_doktor`, `masa_ganjil`, `tanggal_mulaiganjil`, `sampai_denganganjil`, `kegiatan`, `masa_genap`, `tanggal_mulaigenap`, `sampai_dengangenap`) VALUES
(2, '2018/19.1', '2019-08-11', '2019-08-12', 'di coba 123', '2018/19.2', '2019-08-25', '2019-08-26'),
(3, '2019/20.1', '2019-08-04', '2019-08-05', 'dicobalagi223', '2019/20.2', '2019-08-18', '2019-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start_date`, `end_date`) VALUES
(1, 'Tutorial Online Program S1 dan Diploma', '#27b4dd', '2021-06-05', '2021-06-06'),
(2, 'Tutorial Program Pascasarjana', '#27b4dd', '2021-06-18', '2021-06-22'),
(3, 'Matrikulasi penguatan akademik untuk program MSL', '#27b4dd', '2021-05-22', '2021-05-30'),
(4, 'TTM/Tuweb Program S1 dan Diploma', '#27b4dd', '2021-06-03', '2021-06-30'),
(5, 'Praktik/Praktikum', '#27b4dd', '2021-06-03', '2021-06-24'),
(6, 'Tugas Mata Kuliah', '#27b4dd', '2021-06-01', '2021-06-29'),
(7, 'Menyiapkan master BA untuk Tiras', '#0600ff', '2021-06-01', '2021-06-06'),
(8, 'Quality Control BAC dari Vendor', '#0600ff', '2021-05-08', '2021-05-28'),
(9, 'Produksi Tutorial Radio (live dan podcast)', '#0600ff', '2021-04-05', '2021-06-06'),
(20, 'Rapat', '#bfdc2d', '2021-03-25', '2021-03-27'),
(21, 'Test 2', '#bfdc2d', '2021-03-25', '2021-03-30'),
(22, 'test pbb', '#f84d81', '2021-03-25', '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `handling`
--

CREATE TABLE `handling` (
  `id_handling` int(11) NOT NULL,
  `handling` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handling`
--

INSERT INTO `handling` (`id_handling`, `handling`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `harga_bnbb`
--

CREATE TABLE `harga_bnbb` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `edisi` int(11) NOT NULL,
  `nama_bnbb` varchar(255) NOT NULL,
  `tanggal_input` date NOT NULL,
  `surat_keterangan` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `buku` varchar(50) NOT NULL,
  `jumlah_lembar` int(11) NOT NULL,
  `biaya_cetak` int(11) NOT NULL,
  `pengembangan_materi` int(11) NOT NULL,
  `handling` float NOT NULL,
  `desain_layout` float NOT NULL,
  `pengadaan` float NOT NULL,
  `kendali_mutu` float NOT NULL,
  `pemeliharaan` float NOT NULL,
  `bahan_pendukung` float NOT NULL,
  `penyimpanan` float NOT NULL,
  `resiko_mutu` float NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_bnbb`
--

INSERT INTO `harga_bnbb` (`id`, `kode_mk`, `edisi`, `nama_bnbb`, `tanggal_input`, `surat_keterangan`, `penulis`, `buku`, `jumlah_lembar`, `biaya_cetak`, `pengembangan_materi`, `handling`, `desain_layout`, `pengadaan`, `kendali_mutu`, `pemeliharaan`, `bahan_pendukung`, `penyimpanan`, `resiko_mutu`, `harga_total`) VALUES
(1, 'aa', 1, 'aa', '2021-04-13', 'BNBB- 2015 (1).pdf', 'guru_besar', 'akademik', 500, 37500, 67500, 7500, 3750, 938, 5625, 5625, 1875, 3000, 2625, 135938),
(3, 'asa', 1, 'cees', '2021-04-14', 'BNBB- 2015 (1).pdf', 's3', 'akademik', 500, 37500, 55000, 7500, 3750, 938, 5625, 5625, 1875, 3000, 2625, 123438);

-- --------------------------------------------------------

--
-- Table structure for table `harga_buku`
--

CREATE TABLE `harga_buku` (
  `id_harga` int(11) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `edisi` int(11) NOT NULL,
  `judul_matakuliah` varchar(255) NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `surat_keterangan` varchar(255) DEFAULT NULL,
  `harga_lembar` int(255) NOT NULL,
  `biaya_cetak` int(255) NOT NULL,
  `handling` float NOT NULL,
  `design` float NOT NULL,
  `pengadaan` float NOT NULL,
  `kendali_mutu` float NOT NULL,
  `pemeliharaan` float NOT NULL,
  `harga_pokok` double NOT NULL,
  `pendukung` float NOT NULL,
  `resiko_penyimpanan` float NOT NULL,
  `resiko_mutu` float NOT NULL,
  `harga_kotor` double NOT NULL,
  `harga_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_buku`
--

INSERT INTO `harga_buku` (`id_harga`, `kode_mk`, `edisi`, `judul_matakuliah`, `tanggal_input`, `surat_keterangan`, `harga_lembar`, `biaya_cetak`, `handling`, `design`, `pengadaan`, `kendali_mutu`, `pemeliharaan`, `harga_pokok`, `pendukung`, `resiko_penyimpanan`, `resiko_mutu`, `harga_kotor`, `harga_mahasiswa`) VALUES
(1, 'EKMA5101', 1, 'Perilaku Organisasi', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 448, 24640, 4928, 2464, 616, 3696, 3696, 40040, 2002, 3203.2, 2802.8, 48048, 48050),
(2, 'EKMA5101', 2, 'Perilaku Organisasi', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 690, 37950, 7590, 3795, 948.75, 5692.5, 5692.5, 61668.75, 3083.44, 4933.5, 4316.81, 74002.5, 74010),
(3, 'EKMA5102', 1, 'Sistem Informasi Manajemen', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 192, 10560, 2112, 1056, 264, 1584, 1584, 17160, 858, 1372.8, 1201.2, 20592, 20600),
(4, 'EKMA5103', 1, 'Metode Kuantitatif', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 400, 22000, 4400, 2200, 550, 3300, 3300, 35750, 1787.5, 2860, 2502.5, 42900, 42900),
(5, 'EKMA5104', 1, 'Metode Penelitian Bisnis', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 420, 23100, 4620, 2310, 577.5, 3465, 3465, 37537.5, 1876.88, 3003, 2627.62, 45045, 45050),
(6, 'EKMA5104', 2, 'Metode Penelitian Bisnis', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 556, 30580, 6116, 3058, 764.5, 4587, 4587, 49692.5, 2484.62, 3975.4, 3478.48, 59631, 59640),
(7, 'EKMA5205', 1, 'Manajemen Keuangan', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 782, 43010, 8602, 4301, 1075.25, 6451.5, 6451.5, 69891.25, 3494.56, 5591.3, 4892.39, 83869.5, 83870),
(8, 'EKMA5205', 2, 'Manajemen Keuangan', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 532, 29260, 5852, 2926, 731.5, 4389, 4389, 47547.5, 2377.38, 3803.8, 3328.32, 57057, 57060),
(9, 'EKMA5206', 1, 'Manajemen Pemasaran', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 404, 22220, 4444, 2222, 555.5, 3333, 3333, 36107.5, 1805.38, 2888.6, 2527.52, 43329, 43330),
(10, 'EKMA5206', 2, 'Manajemen Pemasaran', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 650, 35750, 7150, 3575, 893.75, 5362.5, 5362.5, 58093.75, 2904.69, 4647.5, 4066.56, 69712.5, 69720),
(11, 'EKMA5207', 1, 'Manajemen Sumber Daya Manusia', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 588, 32340, 6468, 3234, 808.5, 4851, 4851, 52552.5, 2627.62, 4204.2, 3678.68, 63063, 63070),
(12, 'EKMA5207', 2, 'Manajemen Sumber Daya Manusia', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 514, 28270, 5654, 2827, 706.75, 4240.5, 4240.5, 45938.75, 2296.94, 3675.1, 3215.71, 55126.5, 55130),
(13, 'EKMA5208', 1, 'Manajemen Operasi', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 498, 27390, 5478, 2739, 684.75, 4108.5, 4108.5, 44508.75, 2225.44, 3560.7, 3115.61, 53410.5, 53420),
(14, 'EKMA5208', 2, 'Manajemen Operasi', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 452, 24860, 4972, 2486, 621.5, 3729, 3729, 40397.5, 2019.88, 3231.8, 2827.82, 48477, 48480),
(15, 'EKMA5300', 1, 'Seminar dan Workshop Penelitian', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 268, 14740, 2948, 1474, 368.5, 2211, 2211, 23952.5, 1197.62, 1916.2, 1676.68, 28743, 28750),
(16, 'EKMA5309', 1, 'Manajemen Strategik', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 412, 22660, 4532, 2266, 566.5, 3399, 3399, 36822.5, 1841.12, 2945.8, 2577.57, 44187, 44190),
(17, 'EKMA5309', 2, 'Manajemen Strategik', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 418, 22990, 4598, 2299, 574.75, 3448.5, 3448.5, 37358.75, 1867.94, 2988.7, 2615.11, 44830.5, 44840),
(18, 'EKMO5312', 1, 'Manajemen Investasi', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 440, 24200, 4840, 2420, 605, 3630, 3630, 39325, 1966.25, 3146, 2752.75, 47190, 47190),
(19, 'EKMA5312', 2, 'Manajemen Investasi', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 418, 22990, 4598, 2299, 574.75, 3448.5, 3448.5, 37358.75, 1867.94, 2988.7, 2615.11, 44830.5, 44840),
(20, 'EKMO5313', 1, 'Manajemen Keuangan Internasional1)', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 640, 35200, 7040, 3520, 880, 5280, 5280, 57200, 2860, 4576, 4004, 68640, 68640),
(21, 'EKMO5313', 2, 'Manajemen Keuangan Internasional', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 630, 34650, 6930, 3465, 866.25, 5197.5, 5197.5, 56306.25, 2815.31, 4504.5, 3941.44, 67567.5, 67570),
(22, 'EKMO5313', 3, 'Manajemen Keuangan Internasional', '2021-01-09', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 668, 36740, 7348, 3674, 918.5, 5511, 5511, 59702.5, 2985.12, 4776.2, 4179.17, 71643, 71650),
(23, 'EKMO5317', 1, 'Perilaku Konsumen', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 572, 31460, 6292, 3146, 786.5, 4719, 4719, 51122.5, 2556.12, 4089.8, 3578.57, 61347, 61350),
(24, 'EKMO5318', 1, 'Pemasaran Strategik', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 494, 27170, 5434, 2717, 679.25, 4075.5, 4075.5, 44151.25, 2207.56, 3532.1, 3090.59, 52981.5, 52990),
(25, 'EKMO5319', 1, 'Pengembangan Sumber Daya Manusia', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 490, 26950, 5390, 2695, 673.75, 4042.5, 4042.5, 43793.75, 2189.69, 3503.5, 3065.56, 52552.5, 52560),
(26, 'EKMO5320', 1, 'Manajemen Kinerja', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 534, 29370, 5874, 2937, 734.25, 4405.5, 4405.5, 47726.25, 2386.31, 3818.1, 3340.84, 57271.5, 57280),
(27, 'MIPK5101', 1, 'Perencanaan dan Pembiayaan Pendidikan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 574, 31570, 6314, 3157, 789.25, 4735.5, 4735.5, 51301.25, 2565.06, 4104.1, 3591.09, 61561.5, 61570),
(28, 'MIPK5301', 1, 'Evaluasi Program Pendidikan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 448, 24640, 4928, 2464, 616, 3696, 3696, 40040, 2002, 3203.2, 2802.8, 48048, 48050),
(29, 'MIPK5302', 1, 'Analisis Kebijakan Pendidikan Nasional', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 430, 23650, 4730, 2365, 591.25, 3547.5, 3547.5, 38431.25, 1921.56, 3074.5, 2690.19, 46117.5, 46120),
(30, 'MAPU5101', 1, 'Teori Administrasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 374, 20570, 4114, 2057, 514.25, 3085.5, 3085.5, 33426.25, 1671.31, 2674.1, 2339.84, 40111.5, 40120),
(31, 'MAPU5101', 2, 'Teori Administrasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 306, 16830, 3366, 1683, 420.75, 2524.5, 2524.5, 27348.75, 1367.44, 2187.9, 1914.41, 32818.5, 32820),
(32, 'MAPU5102', 1, 'Teori dan Isu Pembangunan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 550, 30250, 6050, 3025, 756.25, 4537.5, 4537.5, 49156.25, 2457.81, 3932.5, 3440.94, 58987.5, 58990),
(33, 'MAPU5102', 2, 'Teori dan Isu Pembangunan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 480, 26400, 5280, 2640, 660, 3960, 3960, 42900, 2145, 3432, 3003, 51480, 51480),
(34, 'MAPU5103', 1, 'Metode  Penelitian Administrasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 494, 27170, 5434, 2717, 679.25, 4075.5, 4075.5, 44151.25, 2207.56, 3532.1, 3090.59, 52981.5, 52990),
(35, 'MAPU5103', 2, 'Metode  Penelitian Administrasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 454, 24970, 4994, 2497, 624.25, 3745.5, 3745.5, 40576.25, 2028.81, 3246.1, 2840.34, 48691.5, 48700),
(36, 'MAPU5103', 3, 'Metode  Penelitian Administrasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 508, 27940, 5588, 2794, 698.5, 4191, 4191, 45402.5, 2270.12, 3632.2, 3178.18, 54483, 54490),
(37, 'MAPU5104', 1, 'Inovasi  dan  Perubahan    Organisasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 614, 33770, 6754, 3377, 844.25, 5065.5, 5065.5, 54876.25, 2743.81, 4390.1, 3841.34, 65851.5, 65860),
(38, 'MAPU5104', 2, 'Inovasi  dan  Perubahan    Organisasi', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 556, 30580, 6116, 3058, 764.5, 4587, 4587, 49692.5, 2484.62, 3975.4, 3478.48, 59631, 59640),
(39, 'MAPU5201', 1, 'Manajemen Sumber Daya Manusia (Suplemen)', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 150, 8250, 1650, 825, 206.25, 1237.5, 1237.5, 13406.25, 670.312, 1072.5, 938.438, 16087.5, 16090),
(40, 'MAPU5202', 1, 'Administrasi Keuangan Publik', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 740, 40700, 8140, 4070, 1017.5, 6105, 6105, 66137.5, 3306.88, 5291, 4629.62, 79365, 79370),
(41, 'MAPU5202', 2, 'Administrasi Keuangan Publik', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 960, 52800, 10560, 5280, 1320, 7920, 7920, 85800, 4290, 6864, 6006, 102960, 102960),
(42, 'MAPU5203', 1, 'Pemerintahan Daerah', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 462, 25410, 5082, 2541, 635.25, 3811.5, 3811.5, 41291.25, 2064.56, 3303.3, 2890.39, 49549.5, 49550),
(43, 'MAPU5203', 2, 'Pemerintahan Daerah', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 530, 29150, 5830, 2915, 728.75, 4372.5, 4372.5, 47368.75, 2368.44, 3789.5, 3315.81, 56842.5, 56850),
(49, 'MAPU5304', 1, 'Pedoman Studi Mandiri #', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 34, 1870, 374, 187, 46.75, 280.5, 280.5, 3038.75, 151.938, 243.1, 212.712, 3646.5, 3650),
(50, 'PTAP5406', 3, 'Panduan Penulisan Proposal dan TAPM', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 56, 3080, 616, 308, 77, 462, 462, 5005, 250.25, 400.4, 350.35, 6006, 6010),
(51, 'PTAP5401', 1, 'Pedoman Bimbingan Tugas Akhir Program Magister', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 30, 1650, 330, 165, 41.25, 247.5, 247.5, 2681.25, 134.062, 214.5, 187.688, 3217.5, 3220),
(52, 'MAPU5300', 2, 'Pedoman Bimbingan Tugas Akhir Program Magister', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 26, 1430, 286, 143, 35.75, 214.5, 214.5, 2323.75, 116.188, 185.9, 162.663, 2788.5, 2790),
(53, 'PTAP5401', 3, 'Pedoman Bimbingan Tugas Akhir Program Magister', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 32, 1760, 352, 176, 44, 264, 264, 2860, 143, 228.8, 200.2, 3432, 3440),
(54, 'MAPU5301', 1, 'Analisis Kebijakan Publik', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 456, 25080, 5016, 2508, 627, 3762, 3762, 40755, 2037.75, 3260.4, 2852.85, 48906, 48910),
(55, 'MAPU5301', 2, 'Analisis Kebijakan Publik', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 492, 27060, 5412, 2706, 676.5, 4059, 4059, 43972.5, 2198.62, 3517.8, 3078.07, 52767, 52770),
(56, 'MAPU5303', 1, 'Kebijakan Pengembangan Wilayah dan Perkotaan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 510, 28050, 5610, 2805, 701.25, 4207.5, 4207.5, 45581.25, 2279.06, 3646.5, 3190.69, 54697.5, 54700),
(57, 'MAPU5303', 2, 'Kebijakan Pengembangan Wilayah dan Perkotaan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 542, 29810, 5962, 2981, 745.25, 4471.5, 4471.5, 48441.25, 2422.06, 3875.3, 3390.89, 58129.5, 58130),
(58, 'MPBI5101', 1, 'Critical Reading  and Writing', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 518, 28490, 5698, 2849, 712.25, 4273.5, 4273.5, 46296.25, 2314.81, 3703.7, 3240.74, 55555.5, 55560),
(59, 'MPBI5103', 1, 'Language Teaching Methods', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 544, 29920, 5984, 2992, 748, 4488, 4488, 48620, 2431, 3889.6, 3403.4, 58344, 58350),
(60, 'MPBI5104', 1, 'Applied Linguistics', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 772, 42460, 8492, 4246, 1061.5, 6369, 6369, 68997.5, 3449.88, 5519.8, 4829.83, 82797, 82800),
(61, 'MIPK5201', 1, 'Metode Penelitian Pendidikan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 598, 32890, 6578, 3289, 822.25, 4933.5, 4933.5, 53446.25, 2672.31, 4275.7, 3741.24, 64135.5, 64140),
(62, 'MPBI5201', 1, 'Assessment in Language Teaching', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 396, 21780, 4356, 2178, 544.5, 3267, 3267, 35392.5, 1769.62, 2831.4, 2477.48, 42471, 42480),
(63, 'MPBI5202', 1, 'Grammar Analysis', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 588, 32340, 6468, 3234, 808.5, 4851, 4851, 52552.5, 2627.62, 4204.2, 3678.68, 63063, 63070),
(64, 'MPBI5204', 1, 'EFL Curriculum and Materials Development', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 286, 15730, 3146, 1573, 393.25, 2359.5, 2359.5, 25561.25, 1278.06, 2044.9, 1789.29, 30673.5, 30680),
(65, 'MPDR5102', 1, 'Integrasi Teori dan Praktik Pembelajaran', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 546, 30030, 6006, 3003, 750.75, 4504.5, 4504.5, 48798.75, 2439.94, 3903.9, 3415.91, 58558.5, 58560),
(66, 'PTAP5400', 2, 'Pedoman Ujian Sidang Program Pascasarjana', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 48, 2640, 528, 264, 66, 396, 396, 4290, 214.5, 343.2, 300.3, 5148, 5150),
(67, 'PTAP5400', 3, 'Pedoman Ujian Sidang Program Pascasarjana', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 42, 2310, 462, 231, 57.75, 346.5, 346.5, 3753.75, 187.688, 300.3, 262.763, 4504.5, 4510),
(68, 'PTAP5400', 4, 'Pedoman Ujian Sidang Program Pascasarjana', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 48, 2640, 528, 264, 66, 396, 396, 4290, 214.5, 343.2, 300.3, 5148, 5150),
(69, 'MPBI5302', 1, 'Sociolinguistics and Language Teaching', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 626, 34430, 6886, 3443, 860.75, 5164.5, 5164.5, 55948.75, 2797.44, 4475.9, 3916.41, 67138.5, 67140),
(70, 'MPBI5303', 1, 'Innovations in ELT', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 348, 19140, 3828, 1914, 478.5, 2871, 2871, 31102.5, 1555.12, 2488.2, 2177.18, 37323, 37330),
(71, 'MPMT5101', 1, 'Sejarah dan Filsafat Matematika', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 544, 29920, 5984, 2992, 748, 4488, 4488, 48620, 2431, 3889.6, 3403.4, 58344, 58350),
(72, 'MPMT5102', 1, 'Perkembangan Pendidikan Matematika', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 396, 21780, 4356, 2178, 544.5, 3267, 3267, 35392.5, 1769.62, 2831.4, 2477.48, 42471, 42480),
(73, 'MPMT5103', 1, 'Fondasi Matematika & Bukti dalam Matematika', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 662, 36410, 7282, 3641, 910.25, 5461.5, 5461.5, 59166.25, 2958.31, 4733.3, 4141.64, 70999.5, 71000),
(74, 'MPMT5104', 1, 'Aljabar', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 370, 20350, 4070, 2035, 508.75, 3052.5, 3052.5, 33068.75, 1653.44, 2645.5, 2314.81, 39682.5, 39690),
(75, 'MPMT5201', 1, 'Geometri', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 372, 20460, 4092, 2046, 511.5, 3069, 3069, 33247.5, 1662.38, 2659.8, 2327.32, 39897, 39900),
(76, 'MPMT5202', 1, 'Teori Bilangan', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 402, 22110, 4422, 2211, 552.75, 3316.5, 3316.5, 35928.75, 1796.44, 2874.3, 2515.01, 43114.5, 43120),
(77, 'MPMT5203', 1, 'Metode Penelitian Pendidikan Matematika', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 594, 32670, 6534, 3267, 816.75, 4900.5, 4900.5, 53088.75, 2654.44, 4247.1, 3716.21, 63706.5, 63710),
(78, 'MPMT5204', 1, 'Analisis Kurikulum Matematika', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 482, 26510, 5302, 2651, 662.75, 3976.5, 3976.5, 43078.75, 2153.94, 3446.3, 3015.51, 51694.5, 51700),
(79, 'MPMT5300', 1, 'Penulisan Proposal dan TAPM', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 56, 3080, 616, 308, 77, 462, 462, 5005, 250.25, 400.4, 350.35, 6006, 6010),
(80, 'MPMT5300', 3, 'Penulisan Proposal dan TAPM', '2021-01-11', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 56, 3080, 616, 308, 77, 462, 462, 5005, 250.25, 400.4, 350.35, 6006, 6010),
(84, 'MPMT5300', 2, 'Pedoman Ujian Sidang Program Pascasarjana', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 48, 2640, 528, 264, 66, 396, 396, 4290, 214.5, 343.2, 300.3, 5148, 5150),
(85, 'MPMT5300', 3, 'Pedoman Ujian Sidang Program Pascasarjana', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 42, 2310, 462, 231, 57.75, 346.5, 346.5, 3753.75, 187.688, 300.3, 262.763, 4504.5, 4510),
(86, 'MPMT5300', 4, 'Pedoman Ujian Sidang Program Pascasarjana', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 48, 2640, 528, 264, 66, 396, 396, 4290, 214.5, 343.2, 300.3, 5148, 5150),
(87, 'MPMT5300', 1, 'Pedoman Bimbingan Tugas Akhir Program Magister', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 30, 1650, 330, 165, 41.25, 247.5, 247.5, 2681.25, 134.062, 214.5, 187.688, 3217.5, 3220),
(88, 'MPMT5300', 2, 'Pedoman Bimbingan Tugas Akhir Program Magister', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 26, 1430, 286, 143, 35.75, 214.5, 214.5, 2323.75, 116.188, 185.9, 162.663, 2788.5, 2790),
(89, 'MPMT5300', 3, 'Pedoman Bimbingan Tugas Akhir Program Magister', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 32, 1760, 352, 176, 44, 264, 264, 2860, 143, 228.8, 200.2, 3432, 3440),
(90, 'MPMT5301', 1, 'Pembelajaran Matematika', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 384, 21120, 4224, 2112, 528, 3168, 3168, 34320, 1716, 2745.6, 2402.4, 41184, 41190),
(91, 'MPMT5302', 1, 'Evaluasi Pembelajaran Matematika', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 346, 19030, 3806, 1903, 475.75, 2854.5, 2854.5, 30923.75, 1546.19, 2473.9, 2164.66, 37108.5, 37110),
(92, 'MPMT5303', 1, 'Analisis Real', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 498, 27390, 5478, 2739, 684.75, 4108.5, 4108.5, 44508.75, 2225.44, 3560.7, 3115.61, 53410.5, 53420),
(93, 'MPDR5101', 1, 'Filsafat Pendidikan Dasar', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 530, 29150, 5830, 2915, 728.75, 4372.5, 4372.5, 47368.75, 2368.44, 3789.5, 3315.81, 56842.5, 56850),
(94, 'MPDR5105', 1, 'Kebijakan dan Pengembangan Kurikulum Pendidikan Dasar', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 496, 27280, 5456, 2728, 682, 4092, 4092, 44330, 2216.5, 3546.4, 3103.1, 53196, 53200),
(95, 'MPDR5202', 1, 'Statistika Pendidikan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 580, 31900, 6380, 3190, 797.5, 4785, 4785, 51837.5, 2591.88, 4147, 3628.62, 62205, 62210),
(96, 'MPDR5203', 1, 'Desain dan Model Pembelajaran Inovatif dan Interaktif', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 492, 27060, 5412, 2706, 676.5, 4059, 4059, 43972.5, 2198.62, 3517.8, 3078.07, 52767, 52770),
(97, 'MPDR5203', 1, 'Desain dan Model Pembelajaran Inovatif dan Interaktif', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 492, 27060, 5412, 2706, 676.5, 4059, 4059, 43972.5, 2198.62, 3517.8, 3078.07, 52767, 52770),
(98, 'MPDR5204', 1, 'Difusi Inovasi Pendidikan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 362, 19910, 3982, 1991, 497.75, 2986.5, 2986.5, 32353.75, 1617.69, 2588.3, 2264.76, 38824.5, 38830),
(99, 'MPDR5301', 1, 'Kepemimpinan dan Manajemen Pendidikan Dasar', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 508, 27940, 5588, 2794, 698.5, 4191, 4191, 45402.5, 2270.12, 3632.2, 3178.18, 54483, 54490),
(100, 'MPDR5302', 1, 'Studi  Komparatif  Pendidikan Dasar di Berbagai  Negara', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 420, 23100, 4620, 2310, 577.5, 3465, 3465, 37537.5, 1876.88, 3003, 2627.62, 45045, 45050),
(101, 'MMPO5101', 1, 'Ekologi', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 512, 28160, 5632, 2816, 704, 4224, 4224, 45760, 2288, 3660.8, 3203.2, 54912, 54920),
(102, 'MMPO5102', 1, 'Manajemen Sumber Daya Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 506, 27830, 5566, 2783, 695.75, 4174.5, 4174.5, 45223.75, 2261.19, 3617.9, 3165.66, 54268.5, 54270),
(103, 'MMPI 5101', 2, 'Ekologi', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 420, 23100, 4620, 2310, 577.5, 3465, 3465, 37537.5, 1876.88, 3003, 2627.62, 45045, 45050),
(104, 'MMPI 5102', 2, 'Manajemen Sumber Daya Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 430, 23650, 4730, 2365, 591.25, 3547.5, 3547.5, 38431.25, 1921.56, 3074.5, 2690.19, 46117.5, 46120),
(105, 'MMPO5103', 1, 'Statistika', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 390, 21450, 4290, 2145, 536.25, 3217.5, 3217.5, 34856.25, 1742.81, 2788.5, 2439.94, 41827.5, 41830),
(106, 'MMPO5103', 2, 'Statistika', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 344, 18920, 3784, 1892, 473, 2838, 2838, 30745, 1537.25, 2459.6, 2152.15, 36894, 36900),
(107, 'MMPO5104', 1, 'Pengelolaan Wilayah Pesisir & Laut', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 318, 17490, 3498, 1749, 437.25, 2623.5, 2623.5, 28421.25, 1421.06, 2273.7, 1989.49, 34105.5, 34110),
(108, 'MMPO5104', 2, 'Pengelolaan Wilayah Pesisir & Laut', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 314, 17270, 3454, 1727, 431.75, 2590.5, 2590.5, 28063.75, 1403.19, 2245.1, 1964.46, 33676.5, 33680),
(109, 'MMPO5201', 1, 'Budidaya Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 394, 21670, 4334, 2167, 541.75, 3250.5, 3250.5, 35213.75, 1760.69, 2817.1, 2464.96, 42256.5, 42260),
(110, 'MMPO5201', 2, 'Budidaya Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 580, 31900, 6380, 3190, 797.5, 4785, 4785, 51837.5, 2591.88, 4147, 3628.62, 62205, 62210),
(111, 'MMPO5203', 1, 'Metode Penangkapan Ikan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 294, 16170, 3234, 1617, 404.25, 2425.5, 2425.5, 26276.25, 1313.81, 2102.1, 1839.34, 31531.5, 31540),
(112, 'MMPO5203', 2, 'Metode Penangkapan Ikan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 298, 16390, 3278, 1639, 409.75, 2458.5, 2458.5, 26633.75, 1331.69, 2130.7, 1864.36, 31960.5, 31970),
(113, 'MMPO5204', 1, 'Ekonomi Pembangunan Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 438, 24090, 4818, 2409, 602.25, 3613.5, 3613.5, 39146.25, 1957.31, 3131.7, 2740.24, 46975.5, 46980),
(114, 'MMPI5399', 1, 'Studi Lapangan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 262, 14410, 2882, 1441, 360.25, 2161.5, 2161.5, 23416.25, 1170.81, 1873.3, 1639.14, 28099.5, 28100),
(115, 'MMPO5301', 1, 'Sosial Ekonomi Masyarakat Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 436, 23980, 4796, 2398, 599.5, 3597, 3597, 38967.5, 1948.38, 3117.4, 2727.73, 46761, 46770),
(116, 'MMPO5302', 1, 'Legalitas Hukum Kelautan dan Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 220, 12100, 2420, 1210, 302.5, 1815, 1815, 19662.5, 983.125, 1573, 1376.38, 23595, 23600),
(117, 'MMPO5302', 2, 'Legalitas Hukum Kelautan dan Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 294, 16170, 3234, 1617, 404.25, 2425.5, 2425.5, 26276.25, 1313.81, 2102.1, 1839.34, 31531.5, 31540),
(118, 'MMPO5303', 1, 'Pengolahan Hasil Perikanan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 454, 24970, 4994, 2497, 624.25, 3745.5, 3745.5, 40576.25, 2028.81, 3246.1, 2840.34, 48691.5, 48700),
(119, 'MSLK5101', 1, 'Ekologi', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 512, 28160, 5632, 2816, 704, 4224, 4224, 45760, 2288, 3660.8, 3203.2, 54912, 54920),
(120, 'MSLK5101', 2, 'Ekologi', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 420, 23100, 4620, 2310, 577.5, 3465, 3465, 37537.5, 1876.88, 3003, 2627.62, 45045, 45050),
(121, 'MSLK5102', 1, 'Kelembagaan Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 436, 23980, 4796, 2398, 599.5, 3597, 3597, 38967.5, 1948.38, 3117.4, 2727.73, 46761, 46770),
(122, 'MSLK5103', 1, 'Pembangunan dan Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 344, 18920, 3784, 1892, 473, 2838, 2838, 30745, 1537.25, 2459.6, 2152.15, 36894, 36900),
(123, 'MSLK5104', 1, 'Ekoefisiensi Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 386, 21230, 4246, 2123, 530.75, 3184.5, 3184.5, 34498.75, 1724.94, 2759.9, 2414.91, 41398.5, 41400),
(124, 'MSLK5105', 1, 'Pemodelan Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 296, 16280, 3256, 1628, 407, 2442, 2442, 26455, 1322.75, 2116.4, 1851.85, 31746, 31750),
(125, 'MSLK5106', 1, 'Tata Ruang dan Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 350, 19250, 3850, 1925, 481.25, 2887.5, 2887.5, 31281.25, 1564.06, 2502.5, 2189.69, 37537.5, 37540),
(126, 'MSLK5107', 1, 'Valuasi Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 484, 26620, 5324, 2662, 665.5, 3993, 3993, 43257.5, 2162.88, 3460.6, 3028.02, 51909, 51910),
(127, 'MSLK5108', 1, 'Metodologi Penelitian di Era Digital', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 314, 17270, 3454, 1727, 431.75, 2590.5, 2590.5, 28063.75, 1403.19, 2245.1, 1964.46, 33676.5, 33680),
(128, 'MMPI5202', 2, 'Metodologi Penelitian', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 334, 18370, 3674, 1837, 459.25, 2755.5, 2755.5, 29851.25, 1492.56, 2388.1, 2089.59, 35821.5, 35830),
(129, 'MSLK5109', 1, 'Analisis Penelitian di Era Digital', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 148, 8140, 1628, 814, 203.5, 1221, 1221, 13227.5, 661.375, 1058.2, 925.925, 15873, 15880),
(130, 'MSLK5110', 1, 'Psikologi Lingkungan', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 342, 18810, 3762, 1881, 470.25, 2821.5, 2821.5, 30566.25, 1528.31, 2445.3, 2139.64, 36679.5, 36680),
(131, 'EKMA5101', 1, 'Perilaku Organisasi', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 448, 24640, 4928, 2464, 616, 3696, 3696, 40040, 2002, 3203.2, 2802.8, 48048, 48050),
(132, 'EKMA5101', 2, 'Perilaku Organisasi', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 690, 37950, 7590, 3795, 948.75, 5692.5, 5692.5, 61668.75, 3083.44, 4933.5, 4316.81, 74002.5, 74010),
(133, 'EKMA6101', 1, 'Filsafat Ilmu', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 218, 11990, 2398, 1199, 299.75, 1798.5, 1798.5, 19483.75, 974.188, 1558.7, 1363.86, 23380.5, 23390),
(134, 'EKMA6102', 1, 'Metodologi Penelitian', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 116, 6380, 1276, 638, 159.5, 957, 957, 10367.5, 518.375, 829.4, 725.725, 12441, 12450),
(135, 'EKMA6103', 1, 'Kewirausahaan Strategis', '2021-01-12', '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', 438, 24090, 4818, 2409, 602.25, 3613.5, 3613.5, 39146.25, 1957.31, 3131.7, 2740.24, 46975.5, 46980);

-- --------------------------------------------------------

--
-- Table structure for table `harga_buku_nonmhs`
--

CREATE TABLE `harga_buku_nonmhs` (
  `id` int(11) NOT NULL,
  `id_bac_mhs` int(11) NOT NULL,
  `pengembangan_materi` float NOT NULL,
  `pengembang` float NOT NULL,
  `produk_ba` float NOT NULL,
  `pergudangan_ba` float NOT NULL,
  `harga_jual` float NOT NULL,
  `royalti` float NOT NULL,
  `harga_kotor` float NOT NULL,
  `harga_nonmhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_buku_nonmhs`
--

INSERT INTO `harga_buku_nonmhs` (`id`, `id_bac_mhs`, `pengembangan_materi`, `pengembang`, `produk_ba`, `pergudangan_ba`, `harga_jual`, `royalti`, `harga_kotor`, `harga_nonmhs`) VALUES
(1, 1, 9610, 1922, 4805, 2883, 67270, 7474, 74744, 74800),
(2, 2, 14802, 2960, 7401, 4441, 103614, 11513, 115127, 115200),
(3, 3, 4120, 824, 2060, 1236, 28840, 3204, 32044, 32100),
(4, 4, 8580, 1716, 4290, 2574, 60060, 6673, 66733, 66800),
(5, 5, 9010, 1802, 4505, 2703, 63070, 7008, 70078, 70100),
(6, 6, 11928, 2386, 5964, 3578, 83496, 9277, 92773, 92800),
(7, 7, 16774, 3355, 8387, 5032, 117418, 13046, 130464, 130500),
(8, 8, 11412, 2282, 5706, 3424, 79884, 8876, 88760, 88800),
(9, 9, 8666, 1733, 4333, 2600, 60662, 6740, 67402, 67500),
(10, 10, 13944, 2789, 6972, 4183, 97608, 10845, 108453, 108500),
(11, 11, 12614, 2523, 6307, 3784, 88298, 9811, 98109, 98200),
(12, 12, 11026, 2205, 5513, 3308, 77182, 8576, 85758, 85800),
(13, 13, 10684, 2137, 5342, 3205, 74788, 8310, 83098, 83100),
(14, 14, 9696, 1939, 4848, 2909, 67872, 7541, 75413, 75500),
(15, 15, 5750, 1150, 2875, 1725, 40250, 4472, 44722, 44800),
(16, 16, 8838, 1768, 4419, 2651, 61866, 6874, 68740, 68800),
(17, 17, 8968, 1794, 4484, 2690, 62776, 6975, 69751, 69800),
(18, 18, 9438, 1888, 4719, 2831, 66066, 7341, 73407, 73500),
(19, 19, 8968, 1794, 4484, 2690, 62776, 6975, 69751, 69800),
(20, 20, 13728, 2746, 6864, 4118, 96096, 10677, 106773, 106800),
(21, 21, 13514, 2703, 6757, 4054, 94598, 10511, 105109, 105200),
(22, 22, 14330, 2866, 7165, 4299, 100310, 11146, 111456, 111500),
(23, 23, 12270, 2454, 6135, 3681, 85890, 9543, 95433, 95500),
(24, 24, 10598, 2120, 5299, 3179, 74186, 8243, 82429, 82500),
(25, 25, 10512, 2102, 5256, 3154, 73584, 8176, 81760, 81800),
(26, 26, 11456, 2291, 5728, 3437, 80192, 8910, 89102, 89200),
(27, 27, 12314, 2463, 6157, 3694, 86198, 9578, 95776, 95800),
(28, 28, 9610, 1922, 4805, 2883, 67270, 7474, 74744, 74800),
(29, 29, 9224, 1845, 4612, 2767, 64568, 7174, 71742, 71800),
(30, 30, 8024, 1605, 4012, 2407, 56168, 6241, 62409, 62500),
(31, 31, 6564, 1313, 3282, 1969, 45948, 5105, 51053, 51100),
(32, 32, 11798, 2360, 5899, 3539, 82586, 9176, 91762, 91800),
(33, 33, 10296, 2059, 5148, 3089, 72072, 8008, 80080, 80100),
(34, 34, 10598, 2120, 5299, 3179, 74186, 8243, 82429, 82500),
(35, 35, 9740, 1948, 4870, 2922, 68180, 7576, 75756, 75800),
(36, 36, 10898, 2180, 5449, 3269, 76286, 8476, 84762, 84800),
(37, 37, 13172, 2634, 6586, 3952, 92204, 10245, 102449, 102500),
(38, 38, 11928, 2386, 5964, 3578, 83496, 9277, 92773, 92800),
(39, 39, 3218, 644, 1609, 965, 22526, 2503, 25029, 25100),
(40, 40, 15874, 3175, 7937, 4762, 111118, 12346, 123464, 123500),
(41, 41, 20592, 4118, 10296, 6178, 144144, 16016, 160160, 160200),
(42, 42, 9910, 1982, 4955, 2973, 69370, 7708, 77078, 77100),
(43, 43, 11370, 2274, 5685, 3411, 79590, 8843, 88433, 88500),
(49, 49, 730, 146, 365, 219, 5110, 568, 5678, 5700),
(50, 50, 1202, 240, 601, 361, 8414, 935, 9349, 9400),
(51, 51, 644, 129, 322, 193, 4508, 501, 5009, 5100),
(52, 52, 558, 112, 279, 167, 3906, 434, 4340, 4400),
(53, 53, 688, 138, 344, 206, 4816, 535, 5351, 5400),
(54, 54, 9782, 1956, 4891, 2935, 68474, 7608, 76082, 76100),
(55, 55, 10554, 2111, 5277, 3166, 73878, 8209, 82087, 82100),
(56, 56, 10940, 2188, 5470, 3282, 76580, 8509, 85089, 85100),
(57, 57, 11626, 2325, 5813, 3488, 81382, 9042, 90424, 90500),
(58, 58, 11112, 2222, 5556, 3334, 77784, 8643, 86427, 86500),
(59, 59, 11670, 2334, 5835, 3501, 81690, 9077, 90767, 90800),
(60, 60, 16560, 3312, 8280, 4968, 115920, 12880, 128800, 128800),
(61, 61, 12828, 2566, 6414, 3848, 89796, 9977, 99773, 99800),
(62, 62, 8496, 1699, 4248, 2549, 59472, 6608, 66080, 66100),
(63, 63, 12614, 2523, 6307, 3784, 88298, 9811, 98109, 98200),
(64, 64, 6136, 1227, 3068, 1841, 42952, 4772, 47724, 47800),
(65, 65, 11712, 2342, 5856, 3514, 81984, 9109, 91093, 91100),
(66, 66, 1030, 206, 515, 309, 7210, 801, 8011, 8100),
(67, 67, 902, 180, 451, 271, 6314, 702, 7016, 7100),
(68, 68, 1030, 206, 515, 309, 7210, 801, 8011, 8100),
(69, 69, 13428, 2686, 6714, 4028, 93996, 10444, 104440, 104500),
(70, 70, 7466, 1493, 3733, 2240, 52262, 5807, 58069, 58100),
(71, 71, 11670, 2334, 5835, 3501, 81690, 9077, 90767, 90800),
(72, 72, 8496, 1699, 4248, 2549, 59472, 6608, 66080, 66100),
(73, 73, 14200, 2840, 7100, 4260, 99400, 11044, 110444, 110500),
(74, 74, 7938, 1588, 3969, 2381, 55566, 6174, 61740, 61800),
(75, 75, 7980, 1596, 3990, 2394, 55860, 6207, 62067, 62100),
(76, 76, 8624, 1725, 4312, 2587, 60368, 6708, 67076, 67100),
(77, 77, 12742, 2548, 6371, 3823, 89194, 9910, 99104, 99200),
(78, 78, 10340, 2068, 5170, 3102, 72380, 8042, 80422, 80500),
(79, 79, 1202, 240, 601, 361, 8414, 935, 9349, 9400),
(80, 80, 1202, 240, 601, 361, 8414, 935, 9349, 9400),
(84, 84, 1030, 206, 515, 309, 7210, 801, 8011, 8100),
(85, 85, 902, 180, 451, 271, 6314, 702, 7016, 7100),
(86, 86, 1030, 206, 515, 309, 7210, 801, 8011, 8100),
(87, 87, 644, 129, 322, 193, 4508, 501, 5009, 5100),
(88, 88, 558, 112, 279, 167, 3906, 434, 4340, 4400),
(89, 89, 688, 138, 344, 206, 4816, 535, 5351, 5400),
(90, 90, 8238, 1648, 4119, 2471, 57666, 6407, 64073, 64100),
(91, 91, 7422, 1484, 3711, 2227, 51954, 5773, 57727, 57800),
(92, 92, 10684, 2137, 5342, 3205, 74788, 8310, 83098, 83100),
(93, 93, 11370, 2274, 5685, 3411, 79590, 8843, 88433, 88500),
(94, 94, 10640, 2128, 5320, 3192, 74480, 8276, 82756, 82800),
(95, 95, 12442, 2488, 6221, 3733, 87094, 9677, 96771, 96800),
(96, 96, 10554, 2111, 5277, 3166, 73878, 8209, 82087, 82100),
(97, 97, 10554, 2111, 5277, 3166, 73878, 8209, 82087, 82100),
(98, 98, 7766, 1553, 3883, 2330, 54362, 6040, 60402, 60500),
(99, 99, 10898, 2180, 5449, 3269, 76286, 8476, 84762, 84800),
(100, 100, 9010, 1802, 4505, 2703, 63070, 7008, 70078, 70100),
(101, 101, 10984, 2197, 5492, 3295, 76888, 8543, 85431, 85500),
(102, 102, 10854, 2171, 5427, 3256, 75978, 8442, 84420, 84500),
(103, 103, 9010, 1802, 4505, 2703, 63070, 7008, 70078, 70100),
(104, 104, 9224, 1845, 4612, 2767, 64568, 7174, 71742, 71800),
(105, 105, 8366, 1673, 4183, 2510, 58562, 6507, 65069, 65100),
(106, 106, 7380, 1476, 3690, 2214, 51660, 5740, 57400, 57400),
(107, 107, 6822, 1364, 3411, 2047, 47754, 5306, 53060, 53100),
(108, 108, 6736, 1347, 3368, 2021, 47152, 5239, 52391, 52400),
(109, 109, 8452, 1690, 4226, 2536, 59164, 6574, 65738, 65800),
(110, 110, 12442, 2488, 6221, 3733, 87094, 9677, 96771, 96800),
(111, 111, 6308, 1262, 3154, 1892, 44156, 4906, 49062, 49100),
(112, 112, 6394, 1279, 3197, 1918, 44758, 4973, 49731, 49800),
(113, 113, 9396, 1879, 4698, 2819, 65772, 7308, 73080, 73100),
(114, 114, 5620, 1124, 2810, 1686, 39340, 4371, 43711, 43800),
(115, 115, 9354, 1871, 4677, 2806, 65478, 7275, 72753, 72800),
(116, 116, 4720, 944, 2360, 1416, 33040, 3671, 36711, 36800),
(117, 117, 6308, 1262, 3154, 1892, 44156, 4906, 49062, 49100),
(118, 118, 9740, 1948, 4870, 2922, 68180, 7576, 75756, 75800),
(119, 119, 10984, 2197, 5492, 3295, 76888, 8543, 85431, 85500),
(120, 120, 9010, 1802, 4505, 2703, 63070, 7008, 70078, 70100),
(121, 121, 9354, 1871, 4677, 2806, 65478, 7275, 72753, 72800),
(122, 122, 7380, 1476, 3690, 2214, 51660, 5740, 57400, 57400),
(123, 123, 8280, 1656, 4140, 2484, 57960, 6440, 64400, 64400),
(124, 124, 6350, 1270, 3175, 1905, 44450, 4939, 49389, 49400),
(125, 125, 7508, 1502, 3754, 2252, 52556, 5840, 58396, 58400),
(126, 126, 10382, 2076, 5191, 3115, 72674, 8075, 80749, 80800),
(127, 127, 6736, 1347, 3368, 2021, 47152, 5239, 52391, 52400),
(128, 128, 7166, 1433, 3583, 2150, 50162, 5574, 55736, 55800),
(129, 129, 3176, 635, 1588, 953, 22232, 2470, 24702, 24800),
(130, 130, 7336, 1467, 3668, 2201, 51352, 5706, 57058, 57100),
(131, 131, 9610, 1922, 4805, 2883, 67270, 7474, 74744, 74800),
(132, 132, 14802, 2960, 7401, 4441, 103614, 11513, 115127, 115200),
(133, 133, 4678, 936, 2339, 1403, 32746, 3638, 36384, 36400),
(134, 134, 2490, 498, 1245, 747, 17430, 1937, 19367, 19400),
(135, 135, 9396, 1879, 4698, 2819, 65772, 7308, 73080, 73100);

-- --------------------------------------------------------

--
-- Table structure for table `harga_mhs_mitra`
--

CREATE TABLE `harga_mhs_mitra` (
  `id` int(11) NOT NULL,
  `id_bac_mhs` int(11) NOT NULL,
  `mitra` float NOT NULL,
  `harga_kotor` float NOT NULL,
  `bac_mhs_mitra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_mhs_mitra`
--

INSERT INTO `harga_mhs_mitra` (`id`, `id_bac_mhs`, `mitra`, `harga_kotor`, `bac_mhs_mitra`) VALUES
(1, 1, 7207.5, 55257.5, 55300),
(2, 2, 11101.5, 85111.5, 85200),
(3, 3, 3090, 23690, 23700),
(4, 4, 6435, 49335, 49400),
(5, 5, 6757.5, 51807.5, 51900),
(6, 6, 8946, 68586, 68600),
(7, 7, 12580.5, 96450.5, 96500),
(8, 8, 8559, 65619, 65700),
(9, 9, 6499.5, 49829.5, 49900),
(10, 10, 10458, 80178, 80200),
(11, 11, 9460.5, 72530.5, 72600),
(12, 12, 8269.5, 63399.5, 63400),
(13, 13, 8013, 61433, 61500),
(14, 14, 7272, 55752, 55800),
(15, 15, 4312.5, 33062.5, 33100),
(16, 16, 6628.5, 50818.5, 50900),
(17, 17, 6726, 51566, 51600),
(18, 18, 7078.5, 54268.5, 54300),
(19, 19, 6726, 51566, 51600),
(20, 20, 10296, 78936, 79000),
(21, 21, 10135.5, 77705.5, 77800),
(22, 22, 10747.5, 82397.5, 82400),
(23, 23, 9202.5, 70552.5, 70600),
(24, 24, 7948.5, 60938.5, 61000),
(25, 25, 7884, 60444, 60500),
(26, 26, 8592, 65872, 65900),
(27, 27, 9235.5, 70805.5, 70900),
(28, 28, 7207.5, 55257.5, 55300),
(29, 29, 6918, 53038, 53100),
(30, 30, 6018, 46138, 46200),
(31, 31, 4923, 37743, 37800),
(32, 32, 8848.5, 67838.5, 67900),
(33, 33, 7722, 59202, 59300),
(34, 34, 7948.5, 60938.5, 61000),
(35, 35, 7305, 56005, 56100),
(36, 36, 8173.5, 62663.5, 62700),
(37, 37, 9879, 75739, 75800),
(38, 38, 8946, 68586, 68600),
(39, 39, 2413.5, 18503.5, 18600),
(40, 40, 11905.5, 91275.5, 91300),
(41, 41, 15444, 118404, 118500),
(42, 42, 7432.5, 56982.5, 57000),
(43, 43, 8527.5, 65377.5, 65400),
(44, 49, 547.5, 4197.5, 4200),
(45, 50, 901.5, 6911.5, 7000),
(46, 51, 483, 3703, 3800),
(47, 52, 418.5, 3208.5, 3300),
(48, 53, 516, 3956, 4000),
(49, 54, 7336.5, 56246.5, 56300),
(50, 55, 7915.5, 60685.5, 60700),
(51, 56, 8205, 62905, 63000),
(52, 57, 8719.5, 66849.5, 66900),
(53, 58, 8334, 63894, 63900),
(54, 59, 8752.5, 67102.5, 67200),
(55, 60, 12420, 95220, 95300),
(56, 61, 9621, 73761, 73800),
(57, 62, 6372, 48852, 48900),
(58, 63, 9460.5, 72530.5, 72600),
(59, 64, 4602, 35282, 35300),
(60, 65, 8784, 67344, 67400),
(61, 66, 772.5, 5922.5, 6000),
(62, 67, 676.5, 5186.5, 5200),
(63, 68, 772.5, 5922.5, 6000),
(64, 69, 10071, 77211, 77300),
(65, 70, 5599.5, 42929.5, 43000),
(66, 71, 8752.5, 67102.5, 67200),
(67, 72, 6372, 48852, 48900),
(68, 73, 10650, 81650, 81700),
(69, 74, 5953.5, 45643.5, 45700),
(70, 75, 5985, 45885, 45900),
(71, 76, 6468, 49588, 49600),
(72, 77, 9556.5, 73266.5, 73300),
(73, 78, 7755, 59455, 59500),
(74, 79, 901.5, 6911.5, 7000),
(75, 80, 901.5, 6911.5, 7000),
(76, 84, 772.5, 5922.5, 6000),
(77, 85, 676.5, 5186.5, 5200),
(78, 86, 772.5, 5922.5, 6000),
(79, 87, 483, 3703, 3800),
(80, 88, 418.5, 3208.5, 3300),
(81, 89, 516, 3956, 4000),
(82, 90, 6178.5, 47368.5, 47400),
(83, 91, 5566.5, 42676.5, 42700),
(84, 92, 8013, 61433, 61500),
(85, 93, 8527.5, 65377.5, 65400),
(86, 94, 7980, 61180, 61200),
(87, 95, 9331.5, 71541.5, 71600),
(88, 96, 7915.5, 60685.5, 60700),
(89, 97, 7915.5, 60685.5, 60700),
(90, 98, 5824.5, 44654.5, 44700),
(91, 99, 8173.5, 62663.5, 62700),
(92, 100, 6757.5, 51807.5, 51900),
(93, 101, 8238, 63158, 63200),
(94, 102, 8140.5, 62410.5, 62500),
(95, 103, 6757.5, 51807.5, 51900),
(96, 104, 6918, 53038, 53100),
(97, 105, 6274.5, 48104.5, 48200),
(98, 106, 5535, 42435, 42500),
(99, 107, 5116.5, 39226.5, 39300),
(100, 108, 5052, 38732, 38800),
(101, 109, 6339, 48599, 48600),
(102, 110, 9331.5, 71541.5, 71600),
(103, 111, 4731, 36271, 36300),
(104, 112, 4795.5, 36765.5, 36800),
(105, 113, 7047, 54027, 54100),
(106, 114, 4215, 32315, 32400),
(107, 115, 7015.5, 53785.5, 53800),
(108, 116, 3540, 27140, 27200),
(109, 117, 4731, 36271, 36300),
(110, 118, 7305, 56005, 56100),
(111, 119, 8238, 63158, 63200),
(112, 120, 6757.5, 51807.5, 51900),
(113, 121, 7015.5, 53785.5, 53800),
(114, 122, 5535, 42435, 42500),
(115, 123, 6210, 47610, 47700),
(116, 124, 4762.5, 36512.5, 36600),
(117, 125, 5631, 43171, 43200),
(118, 126, 7786.5, 59696.5, 59700),
(119, 127, 5052, 38732, 38800),
(120, 128, 5374.5, 41204.5, 41300),
(121, 129, 2382, 18262, 18300),
(122, 130, 5502, 42182, 42200),
(123, 131, 7207.5, 55257.5, 55300),
(124, 132, 11101.5, 85111.5, 85200),
(125, 133, 3508.5, 26898.5, 26900),
(126, 134, 1867.5, 14317.5, 14400),
(127, 135, 7047, 54027, 54100);

-- --------------------------------------------------------

--
-- Table structure for table `harga_nonmhs_mitra`
--

CREATE TABLE `harga_nonmhs_mitra` (
  `id` int(11) NOT NULL,
  `id_bac_nonmhs` int(11) NOT NULL,
  `mitra_nonmhs` float NOT NULL,
  `harga_kotor` float NOT NULL,
  `harga_bac_nonmhs_mitra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_nonmhs_mitra`
--

INSERT INTO `harga_nonmhs_mitra` (`id`, `id_bac_nonmhs`, `mitra_nonmhs`, `harga_kotor`, `harga_bac_nonmhs_mitra`) VALUES
(1, 1, 11220, 86020, 86100),
(2, 2, 17280, 132480, 132500),
(3, 3, 4815, 36915, 37000),
(4, 4, 10020, 76820, 76900),
(5, 5, 10515, 80615, 80700),
(6, 6, 13920, 106720, 106800),
(7, 7, 19575, 150075, 150100),
(8, 8, 13320, 102120, 102200),
(9, 9, 10125, 77625, 77700),
(10, 10, 16275, 124775, 124800),
(11, 11, 14730, 112930, 113000),
(12, 12, 12870, 98670, 98700),
(13, 13, 12465, 95565, 95600),
(14, 14, 11325, 86825, 86900),
(15, 15, 6720, 51520, 51600),
(16, 16, 10320, 79120, 79200),
(17, 17, 10470, 80270, 80300),
(18, 18, 11025, 84525, 84600),
(19, 19, 10470, 80270, 80300),
(20, 20, 16020, 122820, 122900),
(21, 21, 15780, 120980, 121000),
(22, 22, 16725, 128225, 128300),
(23, 23, 14325, 109825, 109900),
(24, 24, 12375, 94875, 94900),
(25, 25, 12270, 94070, 94100),
(26, 26, 13380, 102580, 102600),
(27, 27, 14370, 110170, 110200),
(28, 28, 11220, 86020, 86100),
(29, 29, 10770, 82570, 82600),
(30, 30, 9375, 71875, 71900),
(31, 31, 7665, 58765, 58800),
(32, 32, 13770, 105570, 105600),
(33, 33, 12015, 92115, 92200),
(34, 34, 12375, 94875, 94900),
(35, 35, 11370, 87170, 87200),
(36, 36, 12720, 97520, 97600),
(37, 37, 15375, 117875, 117900),
(38, 38, 13920, 106720, 106800),
(39, 39, 3765, 28865, 28900),
(40, 40, 18525, 142025, 142100),
(41, 41, 24030, 184230, 184300),
(42, 42, 11565, 88665, 88700),
(43, 43, 13275, 101775, 101800),
(44, 49, 855, 6555, 6600),
(45, 50, 1410, 10810, 10900),
(46, 51, 765, 5865, 5900),
(47, 52, 660, 5060, 5100),
(48, 53, 810, 6210, 6300),
(49, 54, 11415, 87515, 87600),
(50, 55, 12315, 94415, 94500),
(51, 56, 12765, 97865, 97900),
(52, 57, 13575, 104075, 104100),
(53, 58, 12975, 99475, 99500),
(54, 59, 13620, 104420, 104500),
(55, 60, 19320, 148120, 148200),
(56, 61, 14970, 114770, 114800),
(57, 62, 9915, 76015, 76100),
(58, 63, 14730, 112930, 113000),
(59, 64, 7170, 54970, 55000),
(60, 65, 13665, 104765, 104800),
(61, 66, 1215, 9315, 9400),
(62, 67, 1065, 8165, 8200),
(63, 68, 1215, 9315, 9400),
(64, 69, 15675, 120175, 120200),
(65, 70, 8715, 66815, 66900),
(66, 71, 13620, 104420, 104500),
(67, 72, 9915, 76015, 76100),
(68, 73, 16575, 127075, 127100),
(69, 74, 9270, 71070, 71100),
(70, 75, 9315, 71415, 71500),
(71, 76, 10065, 77165, 77200),
(72, 77, 14880, 114080, 114100),
(73, 78, 12075, 92575, 92600),
(74, 79, 1410, 10810, 10900),
(75, 80, 1410, 10810, 10900),
(76, 84, 1215, 9315, 9400),
(77, 85, 1065, 8165, 8200),
(78, 86, 1215, 9315, 9400),
(79, 87, 765, 5865, 5900),
(80, 88, 660, 5060, 5100),
(81, 89, 810, 6210, 6300),
(82, 90, 9615, 73715, 73800),
(83, 91, 8670, 66470, 66500),
(84, 92, 12465, 95565, 95600),
(85, 93, 13275, 101775, 101800),
(86, 94, 12420, 95220, 95300),
(87, 95, 14520, 111320, 111400),
(88, 96, 12315, 94415, 94500),
(89, 97, 12315, 94415, 94500),
(90, 98, 9075, 69575, 69600),
(91, 99, 12720, 97520, 97600),
(92, 100, 10515, 80615, 80700),
(93, 101, 12825, 98325, 98400),
(94, 102, 12675, 97175, 97200),
(95, 103, 10515, 80615, 80700),
(96, 104, 10770, 82570, 82600),
(97, 105, 9765, 74865, 74900),
(98, 106, 8610, 66010, 66100),
(99, 107, 7965, 61065, 61100),
(100, 108, 7860, 60260, 60300),
(101, 109, 9870, 75670, 75700),
(102, 110, 14520, 111320, 111400),
(103, 111, 7365, 56465, 56500),
(104, 112, 7470, 57270, 57300),
(105, 113, 10965, 84065, 84100),
(106, 114, 6570, 50370, 50400),
(107, 115, 10920, 83720, 83800),
(108, 116, 5520, 42320, 42400),
(109, 117, 7365, 56465, 56500),
(110, 118, 11370, 87170, 87200),
(111, 119, 12825, 98325, 98400),
(112, 120, 10515, 80615, 80700),
(113, 121, 10920, 83720, 83800),
(114, 122, 8610, 66010, 66100),
(115, 123, 9660, 74060, 74100),
(116, 124, 7410, 56810, 56900),
(117, 125, 8760, 67160, 67200),
(118, 126, 12120, 92920, 93000),
(119, 127, 7860, 60260, 60300),
(120, 128, 8370, 64170, 64200),
(121, 129, 3720, 28520, 28600),
(122, 130, 8565, 65665, 65700),
(123, 131, 11220, 86020, 86100),
(124, 132, 17280, 132480, 132500),
(125, 133, 5460, 41860, 41900),
(126, 134, 2910, 22310, 22400),
(127, 135, 10965, 84065, 84100);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_rapat` int(11) NOT NULL,
  `nama_rapat` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `undangan` varchar(255) NOT NULL,
  `risalah` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_rapat`, `nama_rapat`, `tanggal`, `waktu`, `tempat`, `keterangan`, `undangan`, `risalah`, `status`) VALUES
(18, 'Evaluasi Stock dan Spesifikasi Teknik KIT IPA Tahun 2020', '2020-02-17', '13:30:00', 'Ruang Rapat Lt.2 LPPMP', NULL, '', 'Risalah Rapat Evaluasi Stock dan Spesifikasi Teknik KIT IPA Tahun 2020 (Autosaved).pdf', 'Selesai'),
(19, 'Rapat Internal LPPMP', '2020-01-06', '09:30:00', 'R. Sidang LPPMP lt 2', 'Ucu Rahayu,Jamaludin, Teguh Nursantoso, Basuki, Agus Saeful Mujab, Retno M', '', 'Risalah Rapat Internal LPPMP 03092019 - Copy.pdf', 'Selesai'),
(20, 'Pengadaan dan Pengiriman Bahan Ajar untuk Kebutuhan 2020.1', '2020-01-08', '09:30:00', 'R. Sidang LPPMP lt 2', 'Agus Saeful Mujab, Jamaludin, Paken, Satrio Umbowo ,Teguh Nursantoso ,Adrian Sutawijaya, Sri Kurniati Handayani, Agus Mujab, Brontolaras, Retno M., Renaldi, Asep Helmi, Bagus A.W', '808_Undangan Rapat Pengadaan Langsung Bahan Ajar 2020.1.pdf', 'Risalah Rapat Pengadaan Bahan Ajar untuk Kebutuhan 2020.1 08012020.pdf', 'Selesai'),
(21, 'Rapat Koordinasi LPPMP', '2020-01-13', '09:00:00', 'Wisma 2 Lantai 1', NULL, '', 'Susunan Acara Rakor LPPMP Tgl 13 -14 Januari 2020.pdf', 'Selesai'),
(22, 'Rapat Konsolidasi Sekretariat LPPMP', '2020-01-10', '14:00:00', 'R. Sidang LPPMP lt 2', 'Retno\r\nSiti\r\nSatrio Umbowo\r\nTeguh Nursantoso\r\nPopon Syafriliawati\r\nDasrika\r\nAsri Nurul Rosa\r\nDini Emiria\r\nAria \r\nLestariningsih\r\nAdisti \r\nWardi\r\nFahrudin', '', 'Risalah Rapat Konsolidasi Sekretariat LPPMP.pdf', 'Selesai'),
(23, 'Rapat Konsolidasi Sekretariat LPPMP', '2020-01-10', '14:00:00', 'R. Sidang LPPMP lt 2', 'Retno\r\nSiti\r\nSatrio Umbowo\r\nTeguh Nursantoso\r\nPopon Syafriliawati\r\nDasrika\r\nAsri Nurul Rosa\r\nDini Emiria\r\nAria \r\nLestariningsih\r\nAdisti \r\nWardi\r\nFahrudin', '', 'Risalah Rapat Konsolidasi Sekretariat LPPMP.pdf', 'Selesai'),
(24, 'PENYUSUNAN KATALOG KURIKULUM PRODI FE-FHISIP-FST-FKIP DAN FKIP PROGRAM PGSD DAN PGPAUD', '2020-01-16', '14:00:00', 'Wisma 1 Lt. 2', NULL, '1784_Undangan Rapat Penyusunan Katalog Kurikulum Prodi FE-FHISIP-FST-FKIP dan FKIP Program PGSD dan PGPAUD.pdf', 'Risalah Rapat Penyusunan Katalog 16012020.pdf', 'Selesai'),
(25, 'RAPAT TINJAUAN MANAJEMEN  BIDANG AKADEMIK TAHUN 2019 BOGOR, 13-18 JANUARI 2019', '2020-01-13', '09:00:00', 'Bogor', NULL, '', '(Final Tim Perumus 19 Jan 2019) REKOMENDASI RTM MA TAHUN 2019 DI BOGOR 13-18 Januari 2019.pdf', 'Selesai'),
(26, 'Rapat Koordinasi LPPMP (Persiapan RTM Akademik)', '2020-01-21', '16:00:00', 'R. Sidang LPPMP lt 2', 'Ucu Rahayu,Ida Malati ,Agus Saeful Mujab,Basuki Hardjojo,Brontolaras,Teguh Nursantoso,Retno Murtiningsih,Satrio Umbowo,Fahrudin,Siti', '3352_Undangan Rapat Koordinasi LPPMP (Persiapan Presentasi RTM Akademik).pdf', 'Risalah Rapat Konsolidasi Sekretariat LPPMP persiapan RTM.pdf', 'Selesai'),
(27, 'Sinkronisasi data BA, Monev SITTA SPM, dan BA Digital (22 Januari 2020)', '2020-01-22', '14:00:00', 'R. Sidang LPPMP lt 2', NULL, '', 'Risalah Rapat Sync BA, Monev SITTA SPM, BA Digital 22 Januari 2020.pdf', 'Selesai'),
(28, 'Persiapan Penyatuan Pengelolaan & Layanan Mahasiswa Luar Negeri (Malaysia, Singapura, dan Brunei Darussalam)', '2020-01-24', '09:30:00', 'R. Sidang LPPMP lt 2', NULL, '3593_Undangan Rapat Persiapan Koordinasi Penyatuan Layanan Mahasiswa Luar Negeri.pdf', 'Risalah Rapat Tindak Lanjut Persiapan Penyatuan Administrasi Mahasiswa Luar Negeri (Malaysia, Singapura, dan Brunei Darussalam) (24012020).pdf', 'Selesai'),
(29, 'Desain QC Bahan Ajar Kirim dari Vendor', '2020-01-24', '14:00:00', 'Wisma 1 Lt. 2', NULL, '3685_Undangan Desain QC Bahan Ajar kirim dari Vendor.pdf', 'Risalah Rapat Desain QC Bahan Ajar Kirim dari Vendor (24 Januari 2020).pdf', 'Selesai'),
(30, 'Rapat Verfikasi data pengadaan BAC Paket 1', '2020-01-27', '13:00:00', 'R. Sidang LPPMP lt 2', NULL, '4319_Undangan Rapat Verifikasi Data Pengadaan BAC Paket 1 Tahun 2020.pdf', 'Risalah Rapat verifikasi data pengadaan BAC Paket 1 tahun 2020 27 Jan 2020.pdf', 'Selesai'),
(31, 'Sinkronisasi data BA, Monev SITTA SPM, dan BA Digital', '2020-02-03', '16:00:00', 'R. Sidang LPPMP lt 2', NULL, '', 'Risalah Rapat Sync BA, Monev SITTA SPM, BA Digital 03 Feb 2020.pdf', 'Selesai'),
(32, 'Evaluasi IC dan Pengiriman Bahan Ajar 2019/20.1', '2020-02-07', '16:30:00', 'R.S LPPMP lt. 4', NULL, '', 'Risalah Rapat Evaluasi IC dan Pengiriman Bahan Ajar 201920.1 (7 Februari 2020).pdf', 'Selesai'),
(33, 'PERSIAPAN PENGADAAN KONTRAK PAYUNG', '2020-02-10', '10:00:00', 'R. Sidang LPPMP lt 2', NULL, '6845_Undangan Kebutuhan BA 2020.1 dan Rencana Lelang Payung 2020.pdf', 'Risalah Rapat Persiapan Pengadaan Kontrak Payung 10022020.pdf', 'Selesai'),
(34, 'PEMAKETAN KONTRAK PAYUNG TAHUN 2020', '2020-01-17', '09:30:00', 'Ruang Rapat Lt.2 LPPMP', NULL, '', 'Risalah Rapat Pemaketan Kontrak Payung Tahun 2020.pdf', 'Selesai'),
(35, 'Konsolidasi Sekretariat LPPMP 2020', '2020-02-11', '13:00:00', 'Ruang Rapat Lt.2 LPPMP', NULL, '', 'Risalah Rapat Konsolidasi Sekretariat LPPMP (11 Februari 2020).pdf', 'Selesai'),
(36, 'Evaluasi Toko Buku Online', '2020-02-17', '09:30:00', 'Ruang Rapat Lt.2 LPPMP', NULL, '7290_Undangan Evaluasi TBO.pdf', 'Risalah Rapat Evaluasi TBO.pdf', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE `kalender` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalender`
--

INSERT INTO `kalender` (`id`, `nama_kegiatan`, `unit`, `penanggung_jawab`, `color`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(1, 'Tutorial Online Program S1 dan Diploma', 'FHISIP, FKIP, FE, FST, PBB', 'PBB', '#27b4dd', '2021-06-05', '2021-06-06'),
(2, 'Tutorial Program Pascasarjana', 'PPS, PBB', 'PBB', '#27b4dd', '2021-06-18', '2021-06-22'),
(3, 'Matrikulasi penguatan akademik untuk program MSL', 'PPS, PBB', 'PBB', '#27b4dd', '2021-05-22', '2021-05-30'),
(4, 'TTM/Tuweb Program S1 dan Diploma', 'FHISIP, FKIP, FE, FST, PBB', 'PBB', '#27b4dd', '2021-06-03', '2021-06-30'),
(5, 'Praktik/Praktikum', 'FHISIP, FKIP, FE, FST, UPT-TIK, PBB', 'PBB', '#27b4dd', '2021-06-03', '2021-06-24'),
(6, 'Tugas Mata Kuliah', 'FHISIP, FKIP, FE, FST, PUSJIAN, PBB', 'PBB', '#27b4dd', '2021-06-01', '2021-06-29'),
(7, 'Menyiapkan master BA untuk Tiras', 'FHISIP, FKIP, FE, FST, Sekt. LPPMP, P2M2, UPT-PUSLATA', 'P2M2', '#0600ff', '2021-06-01', '2021-06-06'),
(8, 'Quality Control BAC dari Vendor', 'P2M2, PUSLABA', 'P2M2', '#0600ff', '2021-05-08', '2021-05-28'),
(9, 'Produksi Tutorial Radio (live dan podcast)', 'FHISIP, FKIP, FE, FST, PPHIK, PUSJIAN, P2M2, PBB', 'P2M2', '#0600ff', '2021-04-05', '2021-06-06'),
(20, 'Rapat', 'PPMLN', 'PUSJIAN', '#bfdc2d', '2021-03-25', '2021-03-27'),
(21, 'Test 2', 'UPP', 'PUSJIAN', '#bfdc2d', '2021-03-25', '2021-03-30'),
(22, 'test pbb', 'WR II', 'PBB', '#f84d81', '2021-03-25', '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `kendali_mutu`
--

CREATE TABLE `kendali_mutu` (
  `id_mutu` int(11) NOT NULL,
  `kendali_mutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendali_mutu`
--

INSERT INTO `kendali_mutu` (`id_mutu`, `kendali_mutu`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `login_lppmp`
--

CREATE TABLE `login_lppmp` (
  `id` int(3) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_lppmp`
--

INSERT INTO `login_lppmp` (`id`, `Nama`, `Username`, `Password`) VALUES
(1, 'kautsar', 'kautsar99', 'kautsar123'),
(2, 'dini', 'dini99', 'dini123');

-- --------------------------------------------------------

--
-- Table structure for table `magister`
--

CREATE TABLE `magister` (
  `kd_magister` int(11) NOT NULL,
  `masa_ganjil` varchar(14) NOT NULL,
  `tanggal_mulaiganjil` date NOT NULL,
  `sampai_denganganjil` date NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `masa_genap` varchar(14) NOT NULL,
  `tanggal_mulaigenap` date NOT NULL,
  `sampai_dengangenap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magister`
--

INSERT INTO `magister` (`kd_magister`, `masa_ganjil`, `tanggal_mulaiganjil`, `sampai_denganganjil`, `kegiatan`, `masa_genap`, `tanggal_mulaigenap`, `sampai_dengangenap`) VALUES
(4, '2018/19.1', '2019-08-07', '2019-08-08', 'tes321', '2018/19.2', '2019-08-19', '2019-08-20'),
(5, '2018/19.1', '2019-08-05', '2019-08-07', 'tes12', '2018/19.2', '2019-08-21', '2019-08-22'),
(6, '2018/19.1', '2019-08-30', '2019-09-07', 'tes', '2019/20.1', '2019-08-24', '2019-08-30'),
(7, '2018/19.1', '2019-08-04', '2019-08-05', '234', '2018/19.2', '2019-08-11', '2019-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `master_harga_bnbb`
--

CREATE TABLE `master_harga_bnbb` (
  `id` int(11) NOT NULL,
  `biaya_cetak` int(11) NOT NULL,
  `handling` float NOT NULL,
  `desain_layout` float NOT NULL,
  `pengadaan` float NOT NULL,
  `kendali_mutu` float NOT NULL,
  `pemeliharaan` float NOT NULL,
  `bahan_pendukung` float NOT NULL,
  `penyimpanan` float NOT NULL,
  `resiko_mutu` float NOT NULL,
  `skrektor_bnbb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_harga_bnbb`
--

INSERT INTO `master_harga_bnbb` (`id`, `biaya_cetak`, `handling`, `desain_layout`, `pengadaan`, `kendali_mutu`, `pemeliharaan`, `bahan_pendukung`, `penyimpanan`, `resiko_mutu`, `skrektor_bnbb`) VALUES
(1, 75, 20, 10, 2.5, 15, 15, 5, 8, 7, 'BNBB- 2015 (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `master_masa`
--

CREATE TABLE `master_masa` (
  `kd_masa` int(5) NOT NULL,
  `tahun_masa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_masa`
--

INSERT INTO `master_masa` (`kd_masa`, `tahun_masa`) VALUES
(1, '2018/19.1'),
(2, '2018/19.2'),
(3, '2019/20.1'),
(4, '2019/20.2'),
(5, '2020/21.1'),
(6, '2020/21.2'),
(7, '2021/22.1'),
(8, '2021/22.2');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2021_03_16_021532_create_roles_table', 2),
(6, '2021_03_16_022550_create_user_roles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `mitra` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `mitra`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_nonmhs`
--

CREATE TABLE `mitra_nonmhs` (
  `id` int(11) NOT NULL,
  `mitra_nonmhs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra_nonmhs`
--

INSERT INTO `mitra_nonmhs` (`id`, `mitra_nonmhs`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `id_pemeliharaan` int(11) NOT NULL,
  `pemeliharaan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`id_pemeliharaan`, `pemeliharaan`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pendukung`
--

CREATE TABLE `pendukung` (
  `id_pendukung` int(11) NOT NULL,
  `pendukung` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendukung`
--

INSERT INTO `pendukung` (`id_pendukung`, `pendukung`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `pengadaan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id_pengadaan`, `pengadaan`) VALUES
(1, 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `pengembang`
--

CREATE TABLE `pengembang` (
  `id` int(11) NOT NULL,
  `pengembang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembang`
--

INSERT INTO `pengembang` (`id`, `pengembang`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan_materi`
--

CREATE TABLE `pengembangan_materi` (
  `id` int(11) NOT NULL,
  `pengembangan_materi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembangan_materi`
--

INSERT INTO `pengembangan_materi` (`id`, `pengembangan_materi`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pergudangan_ba`
--

CREATE TABLE `pergudangan_ba` (
  `id` int(11) NOT NULL,
  `gudang_ba` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pergudangan_ba`
--

INSERT INTO `pergudangan_ba` (`id`, `gudang_ba`) VALUES
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `produk_ba`
--

CREATE TABLE `produk_ba` (
  `id` int(11) NOT NULL,
  `produk_ba` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_ba`
--

INSERT INTO `produk_ba` (`id`, `produk_ba`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `resiko_mutu`
--

CREATE TABLE `resiko_mutu` (
  `id_resikomutu` int(11) NOT NULL,
  `resiko_mutu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resiko_mutu`
--

INSERT INTO `resiko_mutu` (`id_resikomutu`, `resiko_mutu`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `resiko_penyimpanan`
--

CREATE TABLE `resiko_penyimpanan` (
  `id_resiko` int(11) NOT NULL,
  `resiko` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resiko_penyimpanan`
--

INSERT INTO `resiko_penyimpanan` (`id_resiko`, `resiko`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'pusjian', NULL, NULL),
(3, 'puslaba', NULL, NULL),
(4, 'pbb', NULL, NULL),
(5, 'p2m2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(15, 1),
(16, 3),
(17, 2),
(18, 4),
(19, 5),
(22, 3),
(23, 3);

-- --------------------------------------------------------

--
-- Table structure for table `royalti`
--

CREATE TABLE `royalti` (
  `id` int(11) NOT NULL,
  `royalti` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `royalti`
--

INSERT INTO `royalti` (`id`, `royalti`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sk_rektor`
--

CREATE TABLE `sk_rektor` (
  `id` int(11) NOT NULL,
  `skrektor_BA` varchar(255) DEFAULT NULL,
  `skrektor_BNBB` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk_rektor`
--

INSERT INTO `sk_rektor` (`id`, `skrektor_BA`, `skrektor_BNBB`) VALUES
(1, '17 TAHUN 2019- HARGA BAHAN AJAR (1).pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'febrimaulana', 'febri@gmail.com', '$2y$10$l912r/AO3yJiVTOfeXo79uNNcSux9/d2U.7kJWehywAGdSyVZ59hi', '0', 'ZgoBddXgn1HF8Vo0olmvYmQkKunlprHLkbg3Z9MG8bof3Mb19bNJUQVAt8D8', '2020-03-04 20:09:46', '2020-03-04 20:09:46'),
(2, 'lppmp', 'lppmp@ecampus.ut.ac.id', '$2y$10$P8lGY6gx4Pw1hkFvScYsJexkz4Gw.kEesmx8IX7.NyHG24NECHddq', '0', 'awgbz6IAcRZzOT97GFT7QhknRXXFDBPF3RVsMhIgwtrFHHI59dU3ylq5PmtM', '2020-03-04 23:57:43', '2020-03-04 23:57:43'),
(13, 'testing', 'tes@gmail.com', '$2y$10$M9VFPOvxbfbigdT5nUorKef2yavNoWzt4Mo8HbTa1hqOd2hc3ey3u', '0', 'Kc0MvSL6dtcf3cwYAzm0bpNlwnKnw4bt65SNtiZ3VIpJmhVHYithnMnj9lTJ', '2020-03-05 20:33:10', '2020-03-05 20:33:10'),
(14, 'Akun Coba', 'coba@gmail.com', '$2y$10$x7kbpxC3mkUI9AUB3AJoIuB8Fbss06ZhCQgFlOTpTx5m1Eh/0XRGu', '0', NULL, '2020-03-05 20:34:55', '2020-03-05 20:34:55'),
(15, 'admin', 'admin@gmail.com', '$2y$10$qP1CIuz/LTFbeC11cRcc4OqUHHlE9bDwcT0vf9VIBI.v8vWG7CogC', '0', 'L5Z9NwJFC4WzHfJOdHlqy4OYLYyw78XvEXGpEsfEeBvSVP6Kn4vuU2M1wQle', '2020-07-12 18:54:11', '2020-07-12 18:54:11'),
(16, 'puslaba', 'puslaba@ecampus.ut.ac.id', '$2y$10$TC.JPEFQNpsBJF09l71P/usmVkjM8TVOXqLo5Q6Gj/I7dvBLqriZi', 'PUSLABA', 'IgmRGxZoq5UF6XU5OMlWOHf1U0p1uuO7bQIt8eSN8ATaqRLJq123Fs5fAvMl', '2020-11-25 00:09:14', '2020-11-25 00:09:14'),
(17, 'pusjian', 'pusjian@ecampus.ut.ac.id', '$2y$10$zEsfMW9.3IqPiO1l3oD4FOHjHoy7x2j1xVSFSLVoKioUUHjqe.zKq', 'PUSJIAN', 'm9wzpoXgTAuf3WZ4uY72urvGQj1ES1xn3pnBEXlc3zYyoH7uEEcWOwYZOWGO', '2021-03-17 23:57:12', '2021-03-17 23:57:12'),
(18, 'pbb', 'pbb@ecampus.ut.ac.id', '$2y$10$Wbf8D.FFifjamjzU8ZRUEObSryWF1G3Nz9QWAHjeRlVGZw9dHaiGa', 'PBB', 'oui5ka4CciCB4MrwFqE67XMykqyVVXN9X4jXP5obogNSfHpdns2tgFKC8QDi', '2021-03-17 23:57:48', '2021-03-17 23:57:48'),
(19, 'p2m2', 'p2m2@ecampus.ut.ac.id', '$2y$10$9r9hMH.yEQY1LWmrVYXq9OrgjUfNPJmr/9JLTBeeBshqKBrEki5ui', 'P2M2', 'SimtkXOlBYuon2Y3gaV7bIM2mQR8Vbh1E0g31J03OO6wJ8WWD36zBo33Uad6', '2021-03-17 23:58:13', '2021-03-17 23:58:13'),
(22, 'alex', 'alex@ecampus.ut.ac.id', '$2y$10$wvIFRQ7Gg/uKWKmWz28k0u0oOEt5LLbMpquIM/jSupJJ.B8zQAcsq', 'PUSLABA', 'XZGrnMUQEst9MWK9VtiSQx2sIvtTTJpnXqYwuhUcdvIHeLwXQ6YRnauFSC1Z', '2021-03-18 20:47:41', '2021-03-18 20:47:41'),
(23, 'Febri', 'febri@ecampus.ut.ac.id', '$2y$10$7lnC0HypXrUjnZ7QgLLxSOh7/5JMdjZS1Sb11JBPnNHErVE8X8mj2', 'PUSLABA', 'mrWsI2idEYPWhKEqE7UyAut1pkxmo1atOJN4Z1zXPc8aQFetivmXgiMndSyz', '2021-03-18 21:51:35', '2021-03-18 21:51:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acp`
--
ALTER TABLE `acp`
  ADD PRIMARY KEY (`kd_acp`);

--
-- Indexes for table `agenda_new`
--
ALTER TABLE `agenda_new`
  ADD PRIMARY KEY (`kd_diplomasarjana`);

--
-- Indexes for table `biaya_cetak`
--
ALTER TABLE `biaya_cetak`
  ADD PRIMARY KEY (`id_cetak`);

--
-- Indexes for table `designlayout`
--
ALTER TABLE `designlayout`
  ADD PRIMARY KEY (`id_design`);

--
-- Indexes for table `doktor`
--
ALTER TABLE `doktor`
  ADD PRIMARY KEY (`kd_doktor`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handling`
--
ALTER TABLE `handling`
  ADD PRIMARY KEY (`id_handling`);

--
-- Indexes for table `harga_bnbb`
--
ALTER TABLE `harga_bnbb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_buku`
--
ALTER TABLE `harga_buku`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `harga_buku_nonmhs`
--
ALTER TABLE `harga_buku_nonmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_mhs_mitra`
--
ALTER TABLE `harga_mhs_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_nonmhs_mitra`
--
ALTER TABLE `harga_nonmhs_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendali_mutu`
--
ALTER TABLE `kendali_mutu`
  ADD PRIMARY KEY (`id_mutu`);

--
-- Indexes for table `login_lppmp`
--
ALTER TABLE `login_lppmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magister`
--
ALTER TABLE `magister`
  ADD PRIMARY KEY (`kd_magister`);

--
-- Indexes for table `master_harga_bnbb`
--
ALTER TABLE `master_harga_bnbb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_masa`
--
ALTER TABLE `master_masa`
  ADD PRIMARY KEY (`kd_masa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra_nonmhs`
--
ALTER TABLE `mitra_nonmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`id_pemeliharaan`);

--
-- Indexes for table `pendukung`
--
ALTER TABLE `pendukung`
  ADD PRIMARY KEY (`id_pendukung`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indexes for table `pengembang`
--
ALTER TABLE `pengembang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembangan_materi`
--
ALTER TABLE `pengembangan_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pergudangan_ba`
--
ALTER TABLE `pergudangan_ba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_ba`
--
ALTER TABLE `produk_ba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resiko_mutu`
--
ALTER TABLE `resiko_mutu`
  ADD PRIMARY KEY (`id_resikomutu`);

--
-- Indexes for table `resiko_penyimpanan`
--
ALTER TABLE `resiko_penyimpanan`
  ADD PRIMARY KEY (`id_resiko`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `royalti`
--
ALTER TABLE `royalti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_rektor`
--
ALTER TABLE `sk_rektor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acp`
--
ALTER TABLE `acp`
  MODIFY `kd_acp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `agenda_new`
--
ALTER TABLE `agenda_new`
  MODIFY `kd_diplomasarjana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `biaya_cetak`
--
ALTER TABLE `biaya_cetak`
  MODIFY `id_cetak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designlayout`
--
ALTER TABLE `designlayout`
  MODIFY `id_design` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doktor`
--
ALTER TABLE `doktor`
  MODIFY `kd_doktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `handling`
--
ALTER TABLE `handling`
  MODIFY `id_handling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `harga_bnbb`
--
ALTER TABLE `harga_bnbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `harga_buku`
--
ALTER TABLE `harga_buku`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `harga_buku_nonmhs`
--
ALTER TABLE `harga_buku_nonmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `harga_mhs_mitra`
--
ALTER TABLE `harga_mhs_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `harga_nonmhs_mitra`
--
ALTER TABLE `harga_nonmhs_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_rapat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kendali_mutu`
--
ALTER TABLE `kendali_mutu`
  MODIFY `id_mutu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_lppmp`
--
ALTER TABLE `login_lppmp`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `magister`
--
ALTER TABLE `magister`
  MODIFY `kd_magister` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_harga_bnbb`
--
ALTER TABLE `master_harga_bnbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_masa`
--
ALTER TABLE `master_masa`
  MODIFY `kd_masa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mitra_nonmhs`
--
ALTER TABLE `mitra_nonmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  MODIFY `id_pemeliharaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendukung`
--
ALTER TABLE `pendukung`
  MODIFY `id_pendukung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengembang`
--
ALTER TABLE `pengembang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengembangan_materi`
--
ALTER TABLE `pengembangan_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pergudangan_ba`
--
ALTER TABLE `pergudangan_ba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk_ba`
--
ALTER TABLE `produk_ba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resiko_mutu`
--
ALTER TABLE `resiko_mutu`
  MODIFY `id_resikomutu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resiko_penyimpanan`
--
ALTER TABLE `resiko_penyimpanan`
  MODIFY `id_resiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `royalti`
--
ALTER TABLE `royalti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sk_rektor`
--
ALTER TABLE `sk_rektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
