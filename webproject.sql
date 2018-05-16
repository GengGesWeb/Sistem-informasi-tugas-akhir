-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 06:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `NIP` varchar(25) NOT NULL,
  `nama` int(100) NOT NULL,
  `hak_akses` enum('koordinator','reviewer','default','') NOT NULL,
  `kuota_bimbingan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_final`
--

CREATE TABLE `tb_final` (
  `id_final` int(10) NOT NULL,
  `NIM` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_dosen_pembimbing` int(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` enum('individu','kelompok','','') NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(10) NOT NULL,
  `id_review` int(10) NOT NULL,
  `NIM` int(25) NOT NULL,
  `status_hasil` enum('diterima','ditolak','','') NOT NULL,
  `saran_hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul_dosen`
--

CREATE TABLE `tb_judul_dosen` (
  `id_judul_dosen` int(10) NOT NULL,
  `id_dosen` int(25) NOT NULL,
  `judul_dosen` varchar(100) NOT NULL,
  `kuota` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul_usulan`
--

CREATE TABLE `tb_judul_usulan` (
  `id_judul_usulan` int(10) NOT NULL,
  `NIM` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_dosen_pembimbing` int(25) NOT NULL,
  `kategori` enum('individu','kelompok','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NIM` varchar(25) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `golongan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs_ditolak`
--

CREATE TABLE `tb_mhs_ditolak` (
  `id_mhs_ditolak` int(10) NOT NULL,
  `NIM` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembimbing_fix`
--

CREATE TABLE `tb_pembimbing_fix` (
  `id_pembimbing_fix` int(10) NOT NULL,
  `NIP` int(25) NOT NULL,
  `NIM` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id_proposal` int(10) NOT NULL,
  `NIM` int(25) NOT NULL,
  `fie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` int(10) NOT NULL,
  `id_judul_usulan` int(10) NOT NULL,
  `id_dosen_pembimbing` int(25) NOT NULL,
  `dosen_penerima` varchar(10) NOT NULL,
  `dosen_penolak` varchar(10) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `id_login` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('mahasiswa','dosen','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_usulan_pembimbing`
--

CREATE TABLE `tb_usulan_pembimbing` (
  `id_usulan_pemb` int(10) NOT NULL,
  `NIM` int(25) NOT NULL,
  `NIP` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tb_final`
--
ALTER TABLE `tb_final`
  ADD PRIMARY KEY (`id_final`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_judul_dosen`
--
ALTER TABLE `tb_judul_dosen`
  ADD PRIMARY KEY (`id_judul_dosen`);

--
-- Indexes for table `tb_judul_usulan`
--
ALTER TABLE `tb_judul_usulan`
  ADD PRIMARY KEY (`id_judul_usulan`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tb_mhs_ditolak`
--
ALTER TABLE `tb_mhs_ditolak`
  ADD PRIMARY KEY (`id_mhs_ditolak`);

--
-- Indexes for table `tb_pembimbing_fix`
--
ALTER TABLE `tb_pembimbing_fix`
  ADD PRIMARY KEY (`id_pembimbing_fix`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `tb_usulan_pembimbing`
--
ALTER TABLE `tb_usulan_pembimbing`
  ADD PRIMARY KEY (`id_usulan_pemb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_final`
--
ALTER TABLE `tb_final`
  MODIFY `id_final` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_judul_dosen`
--
ALTER TABLE `tb_judul_dosen`
  MODIFY `id_judul_dosen` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_judul_usulan`
--
ALTER TABLE `tb_judul_usulan`
  MODIFY `id_judul_usulan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mhs_ditolak`
--
ALTER TABLE `tb_mhs_ditolak`
  MODIFY `id_mhs_ditolak` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembimbing_fix`
--
ALTER TABLE `tb_pembimbing_fix`
  MODIFY `id_pembimbing_fix` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  MODIFY `id_proposal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_usulan_pembimbing`
--
ALTER TABLE `tb_usulan_pembimbing`
  MODIFY `id_usulan_pemb` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `tb_dosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
