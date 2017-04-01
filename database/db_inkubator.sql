-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 01:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inkubator`
--

-- --------------------------------------------------------

--
-- Table structure for table `angket_survey`
--

CREATE TABLE `angket_survey` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `SOAL_SURVEY` varchar(20) DEFAULT NULL,
  `JAWABAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angket_survey`
--

INSERT INTO `angket_survey` (`NO_SURVEY`, `SOAL_SURVEY`, `JAWABAN`) VALUES
('SUR-2017-1-001', 's1', '1'),
('SUR-2017-1-001', 's2', '2'),
('SUR-2017-1-001', 's3', 'tidak apa apa'),
('SUR-2017-1-001', 's4', '2'),
('SUR-2017-1-001', 's5', '2'),
('SUR-2017-1-001', 'as5', 'tidak apa apa'),
('SUR-2017-1-001', 's6', '1'),
('SUR-2017-1-001', 's7', '1'),
('SUR-2017-1-001', 's8', '800000'),
('SUR-2017-1-001', 's9', '1'),
('SUR-2017-1-001', 's10', '1'),
('SUR-2017-1-001', 's11', '2');

-- --------------------------------------------------------

--
-- Table structure for table `bekerja`
--

CREATE TABLE `bekerja` (
  `NO_PS` varchar(20) DEFAULT NULL,
  `JENIS_PEKERJAAN` varchar(20) DEFAULT NULL,
  `STATUS_PEGAWAI` varchar(20) DEFAULT NULL,
  `PENGHASILAN` varchar(20) DEFAULT NULL,
  `LAMA_BEKERJA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kls`
--

CREATE TABLE `detail_kls` (
  `NO_KLS` varchar(20) DEFAULT NULL,
  `ID_PEGAWAI` varchar(20) NOT NULL,
  `NIK` bigint(16) DEFAULT NULL,
  `STATUS_SUDAH_SURVEY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kls`
--

INSERT INTO `detail_kls` (`NO_KLS`, `ID_PEGAWAI`, `NIK`, `STATUS_SUDAH_SURVEY`) VALUES
('KLS-2017-1-001', 'PEG-SUR-002', 156423, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pendaftaran_seminar`
--

CREATE TABLE `detail_pendaftaran_seminar` (
  `NO_PS` varchar(20) DEFAULT NULL,
  `JAMINAN` varchar(20) DEFAULT NULL,
  `HARAPAN` varchar(20) DEFAULT NULL,
  `REKOMENDASI` varchar(20) DEFAULT NULL,
  `NO_TELEPON_REKOMENDASI` varchar(20) DEFAULT NULL,
  `STATUS_MARTIAL` varchar(20) DEFAULT NULL,
  `PELATIHAN_PRAKTIS` varchar(20) DEFAULT NULL,
  `AGAMA` varchar(10) NOT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `JUMLAH_TANGGUNGAN` int(11) DEFAULT NULL,
  `KEAHLIAN` varchar(20) DEFAULT NULL,
  `STATUS_PEKERJAAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pendaftaran_seminar`
--

INSERT INTO `detail_pendaftaran_seminar` (`NO_PS`, `JAMINAN`, `HARAPAN`, `REKOMENDASI`, `NO_TELEPON_REKOMENDASI`, `STATUS_MARTIAL`, `PELATIHAN_PRAKTIS`, `AGAMA`, `PENDIDIKAN`, `JUMLAH_TANGGUNGAN`, `KEAHLIAN`, `STATUS_PEKERJAAN`) VALUES
('SEM-2017-1-001', 'tidak ada', 'ingin punya skill', 'tidak ada,', '0', 'Lajang', '1', 'Islam', 'SMP', 0, 'memancing', 'tidak bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `detail_wawancara`
--

CREATE TABLE `detail_wawancara` (
  `NO_WAWANCARA` varchar(20) DEFAULT NULL,
  `KODE_SOAL` int(11) DEFAULT NULL,
  `JAWABAN` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_wawancara`
--

INSERT INTO `detail_wawancara` (`NO_WAWANCARA`, `KODE_SOAL`, `JAWABAN`) VALUES
('WAW-2017-1-002', 1, 'teman'),
('WAW-2017-1-002', 2, 'ingin mengikuti pelatihan dan menambah pengalaman'),
('WAW-2017-1-002', 3, 'sangat mendukung'),
('WAW-2017-1-002', 4, 'aaa'),
('WAW-2017-1-002', 5, 'aaa'),
('WAW-2017-1-002', 6, 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `BARANG` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`NO_SURVEY`, `BARANG`) VALUES
('SUR-2017-1-001', 'radio'),
('SUR-2017-1-001', 'TV'),
('SUR-2017-1-001', 'CD');

-- --------------------------------------------------------

--
-- Table structure for table `indeks_dhuafa`
--

CREATE TABLE `indeks_dhuafa` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `KODE_PARAMETER` int(10) DEFAULT NULL,
  `INDEKS_PARAMETER` int(1) DEFAULT NULL,
  `KETERANGAN_INDEKS` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indeks_dhuafa`
--

INSERT INTO `indeks_dhuafa` (`NO_SURVEY`, `KODE_PARAMETER`, `INDEKS_PARAMETER`, `KETERANGAN_INDEKS`) VALUES
('SUR-2017-1-001', 1, 2, 'rumah besart'),
('SUR-2017-1-001', 2, 2, 'tidak ada '),
('SUR-2017-1-001', 3, 2, 'tidak ada '),
('SUR-2017-1-001', 4, 2, 'tidak ada '),
('SUR-2017-1-001', 5, 3, 'tidak ada '),
('SUR-2017-1-001', 6, 2, 'tidak ada '),
('SUR-2017-1-001', 7, 2, 'tidak ada '),
('SUR-2017-1-001', 8, 1, 'tidak ada '),
('SUR-2017-1-001', 9, 1, 'tidak ada ');

-- --------------------------------------------------------

--
-- Table structure for table `indeks_harta`
--

CREATE TABLE `indeks_harta` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `KEBUN` int(11) DEFAULT NULL,
  `SIMPANAN` longtext,
  `LAIN_LAIN` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indeks_harta`
--

INSERT INTO `indeks_harta` (`NO_SURVEY`, `KEBUN`, `SIMPANAN`, `LAIN_LAIN`) VALUES
('SUR-2017-1-001', 1, '', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `indeks_rumah`
--

CREATE TABLE `indeks_rumah` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `UKURAN_RUMAH` int(11) DEFAULT NULL,
  `DINDING` int(11) DEFAULT NULL,
  `LANTAI` int(11) DEFAULT NULL,
  `ATAP` int(11) DEFAULT NULL,
  `KEPEMILIKAN` int(11) DEFAULT NULL,
  `DAPUR` int(11) DEFAULT NULL,
  `MEBEL` int(11) DEFAULT NULL,
  `FOTO_RUMAH` longtext,
  `FOTO_DINDING` longtext,
  `FOTO_ATAP` longtext,
  `FOTO_LANTAI` longtext,
  `FOTO_DAPUR` longtext,
  `FOTO_MEBEL` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indeks_rumah`
--

INSERT INTO `indeks_rumah` (`NO_SURVEY`, `UKURAN_RUMAH`, `DINDING`, `LANTAI`, `ATAP`, `KEPEMILIKAN`, `DAPUR`, `MEBEL`, `FOTO_RUMAH`, `FOTO_DINDING`, `FOTO_ATAP`, `FOTO_LANTAI`, `FOTO_DAPUR`, `FOTO_MEBEL`) VALUES
('SUR-2017-1-001', 1, 1, 2, 2, 1, 1, 2, 'SUR-2017-1-001_dinding semi.jpg', 'SUR-2017-1-001_foto_rumah.jpg', 'SUR-2017-1-001_foto_atap.jpg', 'SUR-2017-1-001_foto_atap.jpg', 'SUR-2017-1-001_foto_atap.jpg', 'SUR-2017-1-001_foto_atap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `KENDARAAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`NO_SURVEY`, `KENDARAAN`) VALUES
('SUR-2017-1-001', 'sepeda'),
('SUR-2017-1-001', 'motor');

-- --------------------------------------------------------

--
-- Table structure for table `kls`
--

CREATE TABLE `kls` (
  `NO_KLS` varchar(20) NOT NULL,
  `ID_PEGAWAI` varchar(20) DEFAULT NULL,
  `ID_REGULASI` varchar(20) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kls`
--

INSERT INTO `kls` (`NO_KLS`, `ID_PEGAWAI`, `ID_REGULASI`, `TANGGAL`) VALUES
('KLS-2017-1-001', 'PEG-SUR-002', 'RGS-2017-1', '2017-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `NO_REGIS` varchar(20) DEFAULT NULL,
  `ID_PEGAWAI` varchar(20) DEFAULT NULL,
  `TANGGAL_KONFIRMASI` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`NO_REGIS`, `ID_PEGAWAI`, `TANGGAL_KONFIRMASI`) VALUES
('REG-2017-1-007', 'manajer', '2017-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `parameter_dhuafa`
--

CREATE TABLE `parameter_dhuafa` (
  `KODE_PARAMETER` int(10) NOT NULL,
  `PARAMETER` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter_dhuafa`
--

INSERT INTO `parameter_dhuafa` (`KODE_PARAMETER`, `PARAMETER`) VALUES
(1, 'INDEKS RUMAH'),
(2, 'KEPEMILIKAN HARTA'),
(3, 'PROFIL KELUARGA'),
(4, 'MOTIVASI'),
(5, 'MINAT'),
(6, 'KOMITMEN'),
(7, 'EKONOMI'),
(8, 'AKTIVITAS'),
(9, 'INDEKS KEDHUAFAAN');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` varchar(20) NOT NULL,
  `NAMA` varchar(40) DEFAULT NULL,
  `ALAMAT` longtext,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `NO_TELEPON` int(11) DEFAULT NULL,
  `JABATAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `NAMA`, `ALAMAT`, `JENIS_KELAMIN`, `NO_TELEPON`, `JABATAN`) VALUES
('manajer', 'BAMBANG SUGIANTO', 'jl.JAUH', 'L', 1234235, 'manajer'),
('PEG-HUM-002', 'DINI AMALIA', 'JL. SINDANG RERET 2 NO 80', 'P', 898668023, 'humas'),
('PEG-MAN-001', 'GANJAR MUTTAQIN', 'JL. SADANG LUHUR 2 NO 49', 'L', 98765213, 'manajer'),
('PEG-SUR-002', 'SOLEHUDIN', 'JL. SINDANG LAYA NO 90', 'L', 9889778, 'surveyor');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_seminar`
--

CREATE TABLE `pendaftaran_seminar` (
  `NO_PS` varchar(20) NOT NULL,
  `NIK` bigint(16) DEFAULT NULL,
  `ID_REGULASI` varchar(20) DEFAULT NULL,
  `TANGGAL_PENDAFTARAN_SEMINAR` date DEFAULT NULL,
  `STATUS_SURVEY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_seminar`
--

INSERT INTO `pendaftaran_seminar` (`NO_PS`, `NIK`, `ID_REGULASI`, `TANGGAL_PENDAFTARAN_SEMINAR`, `STATUS_SURVEY`) VALUES
('SEM-2017-1-001', 156423, 'RGS-2017-1', '2017-01-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_bekerja`
--

CREATE TABLE `pengalaman_bekerja` (
  `NO_PS` varchar(20) DEFAULT NULL,
  `JENIS_USAHA` varchar(20) DEFAULT NULL,
  `POSISI` varchar(20) DEFAULT NULL,
  `TAHUN` year(4) DEFAULT NULL,
  `PERUSAHAAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman_bekerja`
--

INSERT INTO `pengalaman_bekerja` (`NO_PS`, `JENIS_USAHA`, `POSISI`, `TAHUN`, `PERUSAHAAN`) VALUES
('SEM-2017-1-001', 'ritel', 'sales', 2010, 'pt akur');

-- --------------------------------------------------------

--
-- Table structure for table `penggangguran`
--

CREATE TABLE `penggangguran` (
  `NO_PS` varchar(20) DEFAULT NULL,
  `SUMBER_PENGHASILAN` varchar(20) DEFAULT NULL,
  `LAMA_TIDAK_BEKERJA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggangguran`
--

INSERT INTO `penggangguran` (`NO_PS`, `SUMBER_PENGHASILAN`, `LAMA_TIDAK_BEKERJA`) VALUES
('SEM-2017-1-001', 'dari istri', '2 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `NIK` bigint(16) NOT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `ALAMAT` text,
  `NO_TELEPON` varchar(12) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `EMAIL` text,
  `PHOTO` text,
  `PHOTO_KTP` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`NIK`, `NAMA`, `ALAMAT`, `NO_TELEPON`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `EMAIL`, `PHOTO`, `PHOTO_KTP`) VALUES
(1111, 'BEJO', 'JL; JAUH', '09876523123', 'L', '1994-04-23', 'aprilbeben@gmail.com', 'REG-2017-1-002_ktp_bejo.jpg', 'REG-2017-1-002_ktp_bejo.jpg'),
(14564, 'JUJUN JUHANA', 'JL. PANDEGLANG', '078961723', 'L', '1990-04-03', 'aprilbeben@gmail.com', 'REG-2017-1-005_ktp_bejo.jpg', 'REG-2017-1-005_ktp_bejo.jpg'),
(14567, 'UMUH MIUHTAR', 'JL JUHANA 9', '098773', 'L', '2017-02-03', 'aprilbeben@gmail.com', 'REG-2017-1-003_pas foto bejo.jpg', 'REG-2017-1-003_ktp_bejo.jpg'),
(156423, 'BUDI DARMAWAN', 'JL. SINDANG SIRNA', '089766523', 'L', '1994-01-01', 'aprilbeben@gmail.com', 'REG-2017-1-006_pas foto bejo.jpg', 'REG-2017-1-006_ktp_bejo.jpg'),
(19876263, 'KOSASIH', 'JL CIJAGRA 2 NO 6', '09876342', 'L', '1990-10-23', 'aprilbeben@gmail.com', 'REG-2017-1-004_pas foto bejo.jpg', 'REG-2017-1-004_ktp_bejo.jpg'),
(2147483647, 'BEJO', 'jl. sindang jauh', '09876622333', 'L', '2017-01-17', 'aprilbeben@gmail.com', 'REG-2017-1-001_pas foto bejo.jpg', 'REG-2017-1-001_ktp_bejo.jpg'),
(4378932145672134, 'MUHAMAD APRILIANTO', 'JL. KIPUTIH DALAM NO 49', '0987662321', 'L', '1994-01-01', 'aprilbeben@gmail.com', 'REG-2017-1-007_pas foto bejo.jpg', 'REG-2017-1-007_ktp_bejo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_keluarga`
--

CREATE TABLE `profil_keluarga` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `NAMA_KELUARGA` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR_KELUARGA` date DEFAULT NULL,
  `HUBUNGAN` varchar(20) DEFAULT NULL,
  `STATUS_MARTIAL_KELUARGA` varchar(20) DEFAULT NULL,
  `PEKERJAAN_UTAMA` varchar(20) DEFAULT NULL,
  `PEKERJAAN_SAMPINGAN` varchar(20) DEFAULT NULL,
  `PENDIDIKAN` varchar(20) DEFAULT NULL,
  `KETERANGAN` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_keluarga`
--

INSERT INTO `profil_keluarga` (`NO_SURVEY`, `NAMA_KELUARGA`, `TANGGAL_LAHIR_KELUARGA`, `HUBUNGAN`, `STATUS_MARTIAL_KELUARGA`, `PEKERJAAN_UTAMA`, `PEKERJAAN_SAMPINGAN`, `PENDIDIKAN`, `KETERANGAN`) VALUES
('SUR-2017-1-001', 'asep', '2017-01-04', 'ayah', 'Lajang', 'ibu rt', 'ibu rt', 'SD', '0');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `NO_REGIS` varchar(20) NOT NULL,
  `NIK` bigint(16) DEFAULT NULL,
  `ID_REGULASI` varchar(20) DEFAULT NULL,
  `TANGGAL_REGISTRASI` date DEFAULT NULL,
  `KONFIRMASI` int(11) DEFAULT NULL,
  `STATUS_WAWANCARA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`NO_REGIS`, `NIK`, `ID_REGULASI`, `TANGGAL_REGISTRASI`, `KONFIRMASI`, `STATUS_WAWANCARA`) VALUES
('REG-2017-1-001', 2147483647, 'RGS-2017-1', '2017-01-17', 1, 0),
('REG-2017-1-002', 1111, 'RGS-2017-1', '2017-01-17', 1, 0),
('REG-2017-1-003', 14567, 'RGS-2017-1', '2017-01-17', 1, 0),
('REG-2017-1-004', 19876263, 'RGS-2017-1', '2017-01-17', 1, 0),
('REG-2017-1-005', 14564, 'RGS-2017-1', '2017-01-17', 1, 0),
('REG-2017-1-006', 156423, 'RGS-2017-1', '2017-01-17', 1, 1),
('REG-2017-1-007', 4378932145672134, 'RGS-2017-1', '2017-01-18', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `regulasi`
--

CREATE TABLE `regulasi` (
  `ID_REGULASI` varchar(20) NOT NULL,
  `TAHUN` year(4) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `KUOTA` int(11) DEFAULT NULL,
  `PENDAFTARAN_AWAL` date DEFAULT NULL,
  `PENDAFTARAN_AKHIR` date DEFAULT NULL,
  `WAWANCARA_AWAL` date DEFAULT NULL,
  `WAWANCARA_AKHIR` date DEFAULT NULL,
  `SURVEY_AWAL` date DEFAULT NULL,
  `SURVEY_AKHIR` date DEFAULT NULL,
  `STATUS_PENDAFTARAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regulasi`
--

INSERT INTO `regulasi` (`ID_REGULASI`, `TAHUN`, `SEMESTER`, `KUOTA`, `PENDAFTARAN_AWAL`, `PENDAFTARAN_AKHIR`, `WAWANCARA_AWAL`, `WAWANCARA_AKHIR`, `SURVEY_AWAL`, `SURVEY_AKHIR`, `STATUS_PENDAFTARAN`) VALUES
('RGS-2017-1', 2017, 1, 30, '2017-01-16', '2017-01-21', '2017-01-23', '2017-01-25', '2017-01-26', '2017-01-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `soal_wawancara`
--

CREATE TABLE `soal_wawancara` (
  `KODE_SOAL` int(11) NOT NULL,
  `SOAL` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_wawancara`
--

INSERT INTO `soal_wawancara` (`KODE_SOAL`, `SOAL`) VALUES
(1, 'Dari mana Anda memperoleh informasi pelatihan ini ?'),
(2, ' Apa motivasi Anda mengikuti pelatihan ini ? '),
(3, ' Bagaimana dukungan dari Keluarga, Anda mengikuti pelatihan ini ?'),
(4, ' Apakah Anda siap mengikuti proses seleksi ?'),
(5, ' Apakah Anda siap mengikuti Pelatihan secara full (.................), dari awal hingga akhir ? '),
(6, ' Apa jaminan dari Bapak/Ibu/Saudara/Saudari untuk hadir secara penuh dalam pelatihan ini ?');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `NO_SURVEY` varchar(20) NOT NULL,
  `ID_PEGAWAI` varchar(20) DEFAULT NULL,
  `ID_REGULASI` varchar(20) DEFAULT NULL,
  `NIK` bigint(16) DEFAULT NULL,
  `STATUS_LULUS_SURVEY` int(11) DEFAULT NULL,
  `TANGGAL_SURVEY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`NO_SURVEY`, `ID_PEGAWAI`, `ID_REGULASI`, `NIK`, `STATUS_LULUS_SURVEY`, `TANGGAL_SURVEY`) VALUES
('SUR-2017-1-001', 'PEG-SUR-002', 'RGS-2017-1', 156423, 1, '2017-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `ternak`
--

CREATE TABLE `ternak` (
  `NO_SURVEY` varchar(20) DEFAULT NULL,
  `TERNAK` varchar(20) DEFAULT NULL,
  `JUMLAH_TERNAK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ternak`
--

INSERT INTO `ternak` (`NO_SURVEY`, `TERNAK`, `JUMLAH_TERNAK`) VALUES
('SUR-2017-1-001', 'tidak ada', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `ID_PEGAWAI` varchar(20) DEFAULT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` text,
  `LEVEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `ID_PEGAWAI`, `USERNAME`, `PASSWORD`, `LEVEL`) VALUES
(1, 'manajer', 'MANAJER', '70d420e870c1f31d40b29139c1cf0b0f', 1),
(2, 'PEG-MAN-001', 'PEG-MAN-001', '69b731ea8f289cf16a192ce78a37b4f0', 1),
(3, 'PEG-HUM-002', 'PEG-HUM-002', '94da7343e47802652a24444298012b8c', 2),
(4, 'PEG-SUR-002', 'PEG-SUR-002', '108b973b479d0fccbe63143f8904c180', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `NO_WAWANCARA` varchar(20) NOT NULL,
  `ID_PEGAWAI` varchar(20) DEFAULT NULL,
  `NIK` bigint(16) DEFAULT NULL,
  `ID_REGULASI` varchar(20) DEFAULT NULL,
  `TANGGAL_WAWANCARA` date DEFAULT NULL,
  `STATUS_LULUS_WAWANCARA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`NO_WAWANCARA`, `ID_PEGAWAI`, `NIK`, `ID_REGULASI`, `TANGGAL_WAWANCARA`, `STATUS_LULUS_WAWANCARA`) VALUES
('WAW-2017-1-001', 'PEG-HUM-002', 2147483647, 'RGS-2017-1', '2017-01-16', 1),
('WAW-2017-1-002', 'PEG-HUM-002', 156423, 'RGS-2017-1', '2017-01-17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angket_survey`
--
ALTER TABLE `angket_survey`
  ADD KEY `FK_REFERENCE_24` (`NO_SURVEY`);

--
-- Indexes for table `bekerja`
--
ALTER TABLE `bekerja`
  ADD KEY `FK_REFERENCE_16` (`NO_PS`);

--
-- Indexes for table `detail_kls`
--
ALTER TABLE `detail_kls`
  ADD KEY `FK_REFERENCE_19` (`NO_KLS`),
  ADD KEY `FK_REFERENCE_20` (`NIK`);

--
-- Indexes for table `detail_pendaftaran_seminar`
--
ALTER TABLE `detail_pendaftaran_seminar`
  ADD KEY `FK_REFERENCE_13` (`NO_PS`);

--
-- Indexes for table `detail_wawancara`
--
ALTER TABLE `detail_wawancara`
  ADD KEY `FK_REFERENCE_9` (`NO_WAWANCARA`),
  ADD KEY `FK_REFFERENCE_8` (`KODE_SOAL`);

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD KEY `FK_REFERENCE_28` (`NO_SURVEY`);

--
-- Indexes for table `indeks_dhuafa`
--
ALTER TABLE `indeks_dhuafa`
  ADD KEY `FK_REFERENCE_32` (`NO_SURVEY`),
  ADD KEY `FK_REFFERENCE_31` (`KODE_PARAMETER`);

--
-- Indexes for table `indeks_harta`
--
ALTER TABLE `indeks_harta`
  ADD KEY `FK_REFERENCE_27` (`NO_SURVEY`);

--
-- Indexes for table `indeks_rumah`
--
ALTER TABLE `indeks_rumah`
  ADD KEY `FK_REFERENCE_26` (`NO_SURVEY`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD KEY `FK_REFERENCE_30` (`NO_SURVEY`);

--
-- Indexes for table `kls`
--
ALTER TABLE `kls`
  ADD PRIMARY KEY (`NO_KLS`),
  ADD KEY `FK_REFERENCE_17` (`ID_PEGAWAI`),
  ADD KEY `FK_REFERENCE_18` (`ID_REGULASI`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD KEY `FK_REFERENCE_3` (`NO_REGIS`),
  ADD KEY `FK_REFERENCE_4` (`ID_PEGAWAI`);

--
-- Indexes for table `parameter_dhuafa`
--
ALTER TABLE `parameter_dhuafa`
  ADD PRIMARY KEY (`KODE_PARAMETER`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`);

--
-- Indexes for table `pendaftaran_seminar`
--
ALTER TABLE `pendaftaran_seminar`
  ADD PRIMARY KEY (`NO_PS`),
  ADD KEY `FK_REFERENCE_11` (`NIK`),
  ADD KEY `fK_regulasi_ps` (`ID_REGULASI`);

--
-- Indexes for table `pengalaman_bekerja`
--
ALTER TABLE `pengalaman_bekerja`
  ADD KEY `FK_REFERENCE_14` (`NO_PS`);

--
-- Indexes for table `penggangguran`
--
ALTER TABLE `penggangguran`
  ADD KEY `FK_REFERENCE_15` (`NO_PS`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `profil_keluarga`
--
ALTER TABLE `profil_keluarga`
  ADD KEY `FK_REFERENCE_25` (`NO_SURVEY`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`NO_REGIS`),
  ADD KEY `FK_REFERENCE_1` (`NIK`),
  ADD KEY `fK_regulasi` (`ID_REGULASI`);

--
-- Indexes for table `regulasi`
--
ALTER TABLE `regulasi`
  ADD PRIMARY KEY (`ID_REGULASI`);

--
-- Indexes for table `soal_wawancara`
--
ALTER TABLE `soal_wawancara`
  ADD PRIMARY KEY (`KODE_SOAL`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`NO_SURVEY`),
  ADD KEY `FK_REFERENCE_21` (`ID_PEGAWAI`),
  ADD KEY `FK_REFERENCE_22` (`ID_REGULASI`),
  ADD KEY `FK_REFERENCE_23` (`NIK`);

--
-- Indexes for table `ternak`
--
ALTER TABLE `ternak`
  ADD KEY `FK_REFERENCE_29` (`NO_SURVEY`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_REFERENCE_5` (`ID_PEGAWAI`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`NO_WAWANCARA`),
  ADD KEY `FK_REFERENCE_6` (`ID_PEGAWAI`),
  ADD KEY `FK_REFERENCE_7` (`NIK`),
  ADD KEY `FK_REFERENCE_8` (`ID_REGULASI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parameter_dhuafa`
--
ALTER TABLE `parameter_dhuafa`
  MODIFY `KODE_PARAMETER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `soal_wawancara`
--
ALTER TABLE `soal_wawancara`
  MODIFY `KODE_SOAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `angket_survey`
--
ALTER TABLE `angket_survey`
  ADD CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `bekerja`
--
ALTER TABLE `bekerja`
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`NO_PS`) REFERENCES `pendaftaran_seminar` (`NO_PS`);

--
-- Constraints for table `detail_kls`
--
ALTER TABLE `detail_kls`
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`NO_KLS`) REFERENCES `kls` (`NO_KLS`);

--
-- Constraints for table `detail_pendaftaran_seminar`
--
ALTER TABLE `detail_pendaftaran_seminar`
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`NO_PS`) REFERENCES `pendaftaran_seminar` (`NO_PS`);

--
-- Constraints for table `detail_wawancara`
--
ALTER TABLE `detail_wawancara`
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`NO_WAWANCARA`) REFERENCES `wawancara` (`NO_WAWANCARA`),
  ADD CONSTRAINT `FK_REFFERENCE_8` FOREIGN KEY (`KODE_SOAL`) REFERENCES `soal_wawancara` (`KODE_SOAL`);

--
-- Constraints for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `indeks_dhuafa`
--
ALTER TABLE `indeks_dhuafa`
  ADD CONSTRAINT `FK_REFERENCE_32` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`),
  ADD CONSTRAINT `FK_REFFERENCE_31` FOREIGN KEY (`KODE_PARAMETER`) REFERENCES `parameter_dhuafa` (`KODE_PARAMETER`);

--
-- Constraints for table `indeks_harta`
--
ALTER TABLE `indeks_harta`
  ADD CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `indeks_rumah`
--
ALTER TABLE `indeks_rumah`
  ADD CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `kls`
--
ALTER TABLE `kls`
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`),
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`ID_REGULASI`) REFERENCES `regulasi` (`ID_REGULASI`);

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`NO_REGIS`) REFERENCES `registrasi` (`NO_REGIS`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Constraints for table `pendaftaran_seminar`
--
ALTER TABLE `pendaftaran_seminar`
  ADD CONSTRAINT `fK_regulasi_ps` FOREIGN KEY (`ID_REGULASI`) REFERENCES `regulasi` (`ID_REGULASI`);

--
-- Constraints for table `pengalaman_bekerja`
--
ALTER TABLE `pengalaman_bekerja`
  ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`NO_PS`) REFERENCES `pendaftaran_seminar` (`NO_PS`);

--
-- Constraints for table `penggangguran`
--
ALTER TABLE `penggangguran`
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`NO_PS`) REFERENCES `pendaftaran_seminar` (`NO_PS`);

--
-- Constraints for table `profil_keluarga`
--
ALTER TABLE `profil_keluarga`
  ADD CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `fK_regulasi` FOREIGN KEY (`ID_REGULASI`) REFERENCES `regulasi` (`ID_REGULASI`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`ID_REGULASI`) REFERENCES `regulasi` (`ID_REGULASI`);

--
-- Constraints for table `ternak`
--
ALTER TABLE `ternak`
  ADD CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`NO_SURVEY`) REFERENCES `survey` (`NO_SURVEY`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Constraints for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`ID_REGULASI`) REFERENCES `regulasi` (`ID_REGULASI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
