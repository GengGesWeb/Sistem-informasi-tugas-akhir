-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 05:06 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
  `id_dosen` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
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
  `NIM` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
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
  `NIM` varchar(25) NOT NULL,
  `status_hasil` enum('diterima','ditolak','','') NOT NULL,
  `saran_hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul_dosen`
--

CREATE TABLE `tb_judul_dosen` (
  `id_judul_dosen` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `judul_dosen` varchar(100) NOT NULL,
  `kuota` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul_usulan`
--

CREATE TABLE `tb_judul_usulan` (
  `id_judul_usulan` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_dosen_pembimbing` varchar(25) NOT NULL,
  `kategori` enum('individu','kelompok','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NIM` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
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
  `NIM` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembimbing_fix`
--

CREATE TABLE `tb_pembimbing_fix` (
  `id_pembimbing_fix` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `NIM` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id_proposal` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` int(10) NOT NULL,
  `id_judul_usulan` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `dosen_penerima` varchar(10) NOT NULL,
  `dosen_penolak` varchar(10) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('mahasiswa','dosen','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_usulan_pembimbing`
--

CREATE TABLE `tb_usulan_pembimbing` (
  `id_usulan_pemb` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_final`
--
ALTER TABLE `tb_final`
  ADD PRIMARY KEY (`id_final`),
  ADD KEY `NIM` (`NIM`) USING BTREE,
  ADD KEY `id_dosen_pembimbing` (`id_dosen`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_review` (`id_review`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_judul_dosen`
--
ALTER TABLE `tb_judul_dosen`
  ADD PRIMARY KEY (`id_judul_dosen`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_judul_usulan`
--
ALTER TABLE `tb_judul_usulan`
  ADD PRIMARY KEY (`id_judul_usulan`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `id_dosen_pembimbing` (`id_dosen_pembimbing`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_mhs_ditolak`
--
ALTER TABLE `tb_mhs_ditolak`
  ADD PRIMARY KEY (`id_mhs_ditolak`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_pembimbing_fix`
--
ALTER TABLE `tb_pembimbing_fix`
  ADD PRIMARY KEY (`id_pembimbing_fix`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_dosen_pembimbing` (`id_dosen`),
  ADD KEY `id_judul_usulan` (`id_judul_usulan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_usulan_pembimbing`
--
ALTER TABLE `tb_usulan_pembimbing`
  ADD PRIMARY KEY (`id_usulan_pemb`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `id_dosen` (`id_dosen`);

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
-- AUTO_INCREMENT for table `tb_usulan_pembimbing`
--
ALTER TABLE `tb_usulan_pembimbing`
  MODIFY `id_usulan_pemb` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_final`
--
ALTER TABLE `tb_final`
  ADD CONSTRAINT `tb_final_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`),
  ADD CONSTRAINT `tb_final_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`id_review`) REFERENCES `tb_review` (`id_review`),
  ADD CONSTRAINT `tb_hasil_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_judul_dosen`
--
ALTER TABLE `tb_judul_dosen`
  ADD CONSTRAINT `tb_judul_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`);

--
-- Constraints for table `tb_judul_usulan`
--
ALTER TABLE `tb_judul_usulan`
  ADD CONSTRAINT `tb_judul_usulan_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`),
  ADD CONSTRAINT `tb_judul_usulan_ibfk_2` FOREIGN KEY (`id_dosen_pembimbing`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mhs_ditolak`
--
ALTER TABLE `tb_mhs_ditolak`
  ADD CONSTRAINT `tb_mhs_ditolak_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`);

--
-- Constraints for table `tb_pembimbing_fix`
--
ALTER TABLE `tb_pembimbing_fix`
  ADD CONSTRAINT `tb_pembimbing_fix_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD CONSTRAINT `tb_proposal_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD CONSTRAINT `tb_review_ibfk_1` FOREIGN KEY (`id_judul_usulan`) REFERENCES `tb_judul_usulan` (`id_judul_usulan`),
  ADD CONSTRAINT `tb_review_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_usulan_pembimbing`
--
ALTER TABLE `tb_usulan_pembimbing`
  ADD CONSTRAINT `tb_usulan_pembimbing_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_usulan_pembimbing_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
