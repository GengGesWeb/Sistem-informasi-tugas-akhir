-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 08:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_dosen` (
  `id_dosen` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hak_akses` enum('koordinator','reviewer','default','') NOT NULL,
  `kuota_bimbingan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `id_user`, `nama`, `hak_akses`, `kuota_bimbingan`) VALUES
('121', 'koordinator', 'koordinator', 'koordinator', 6),
('197008311998031001', '197008311998031001', 'Moh. Munih Dian W, S.Kom.,M.T.', 'reviewer', 6),
('197009292003121001', '197009292003121001', 'Yogiswara, S.T., M.T.', 'reviewer', 5),
('197011282003121001', '197011282003121001', 'Hariyono Rakhmad, S.Pd., M.Kom.', 'default', 5),
('197104082001121003', '197104082001121003', 'Wahyu Kurnia Dewanto, S.Kom., M.T.', '', 5),
('197110092003121001', '197110092003121001', 'Denny Trias Utomo, S.Si., M.T.', '', 0),
('197111151998021001', '197111151998021001', 'Adi Heru Utomo, S.Kom., M.Kom.', '', 5),
('197308312008011003', '197308312008011003', 'Agus Purwadi, S.T., M.T.', '', 5),
('197405192003121002', '197405192003121002', 'Nugroho Setyo Wibowo, S.T.,M.T.', '', 5),
('197709292005011003', '197709292005011003', 'Didit Rahmat Hartadi S.Kom., M.T.', '', 5),
('197808162005011002', '197808162005011002', 'Beni Widiawan, S.ST., M.T.', '', 5),
('197808172003121005', '197808172003121005', 'Agus Hariyanto, S.T., M.Kom.', '', 5),
('197808192005022001', '197808192005022001', 'Ika Widiastuti, S.ST., M.T.', '', 5),
('197809082005011001', '197809082005011001', 'Denny Wijanarko, S.T.,M.T.', '', 5),
('197810112005012002', '197810112005012002', 'Elly Antika, S.T., M.Kom', '', 5),
('197907032003121001', '197907032003121001', 'Surateno, S.Kom.,M.Kom.', '', 5),
('197909212005011001', '197909212005011001', 'I Putu Dody Lesmana, S.T.,M.T.', '', 5),
('198005172008121002', '198005172008121002', 'Dwi Putro Sarwo S, S.Kom., M.Kom.', '', 5),
('198012122005011001', '198012122005011001', 'Prawidya Destarianto, S.Kom.,M.T.', '', 5),
('198101152005011001', '198101152005011001', 'Nurul Zainal Fanani, S.ST, M.T.', '', 5),
('198106152006041002', '198106152006041002', 'Syamsul Arifin, S.Kom., M.Cs.', '', 5),
('198301092018031001', '198301092018031001', 'Hermawan Arief Putranto, S.T., M.T.', '', 5),
('198302032006041003', '198302032006041003', 'Hendra Yufit Riskiawan, S.Kom., M.Cs.', '', 5),
('198406252015041004', '198406252015041004', 'Bekti Maryuni S., S.Pd.,M.Kom.', '', 5),
('198510312018031001', '198510312018031001', 'Victor Phoa ST.,MCs.', '', 5),
('198603192014031001', '198603192014031001', 'Fendik Eko Purnomo, S.Pd.,M.T.', '', 5),
('198606092008122004', '198606092008122004', 'Nanik Anita M. ,S.ST.,M.T.', '', 5),
('198608022015042002', '198608022015042002', 'Ratih Ayuninghemi, S.ST., M.Kom.', '', 5),
('198807022016101001', '198807022016101001', 'Husin, S.Kom., M.MT.', '', 5),
('198903292015031001', '198903292015031001', 'Taufiq Rizaldi', 'koordinator', 5),
('198907102015091001', '198907102015091001', 'Ery Setiawan Julev Atmaji, S.Kom.,M.Cs.', 'default', 5),
('199002272018032001', '199002272018032001', 'Trismayanti Dwi P, S.Kom., M,Cs.', '', 5),
('199103152017031001', '199103152017031001', 'Syamsiar Kautsar, S.ST., M.T.', '', 5),
('199104292017101001', '199104292017101001', 'Faisal Lutfi Afriansyah, S.Kom., M.T.', '', 5),
('199112112018031001', '199112112018031001', 'Khafidurohman A., S.Pd., M.Eng.', '', 5),
('199203022018032001', '199203022018032001', 'Zilvanhisna Emka Fitri, S.T., M.T.', '', 5),
('199205282018032001', '199205282018032001', 'Bety Etikasari, S.Pd., M.Pd.', '', 5),
('199205282018033001', '199205282018033001', 'Aji Seto Arfianto, S.ST., M.T.', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_final`
--

CREATE TABLE IF NOT EXISTS `tb_final` (
`id_final` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` enum('individu','kelompok','','') NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_final`
--

INSERT INTO `tb_final` (`id_final`, `NIM`, `judul`, `id_dosen`, `deskripsi`, `kategori`, `saran`) VALUES
(1, 'E31160170', 'asdasdsadasd', '197011282003121001', 'asdasdsadsadsa', 'individu', 'asdsadsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE IF NOT EXISTS `tb_hasil` (
`id_hasil` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `status` varchar(100) NOT NULL,
  `saran` text NOT NULL,
  `id_judul_usulan` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `NIM`, `status`, `saran`, `id_judul_usulan`) VALUES
(6, 'E31160170', 'Ditolak', 'kurang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_judul_dosen` (
`id_judul_dosen` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `judul_dosen` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kuota` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_judul_dosen`
--

INSERT INTO `tb_judul_dosen` (`id_judul_dosen`, `id_dosen`, `judul_dosen`, `prodi`, `kuota`) VALUES
(1, '197008311998031001', 'sddsd', 'Teknologi Informatika', 2),
(2, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(3, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(4, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(5, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(6, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(7, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(8, '197008311998031001', 'sdfsdfdsfds', 'Manajemen Informatika', 4),
(9, '199205282018033001', 'asdadwrwre', 'Teknik Informatika', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul_usulan`
--

CREATE TABLE IF NOT EXISTS `tb_judul_usulan` (
`id_judul_usulan` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_dosen_pengusul` varchar(100) NOT NULL,
  `ringkasan` text NOT NULL,
  `id_dosen_pembimbing` varchar(25) NOT NULL,
  `kategori` enum('individu','kelompok','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_judul_usulan`
--

INSERT INTO `tb_judul_usulan` (`id_judul_usulan`, `NIM`, `judul`, `id_dosen_pengusul`, `ringkasan`, `id_dosen_pembimbing`, `kategori`) VALUES
(1, 'E31160170', 'knkljnolnnuob', '197907032003121001', 'kjbhkbkhbkhkhb', '197308312008011003', 'kelompok'),
(2, 'E31160170', 'sadasdas', '197008311998031001', 'adsadsadasdsa', '197011282003121001', 'kelompok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `NIM` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `golongan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`NIM`, `id_user`, `Nama`, `prodi`, `golongan`) VALUES
('E31160170', 'dimas', 'Dimas Fatah Hilla', 'MIF', 'A'),
('E31160328', 'E31160328', 'Avega Wira Pradana', 'MIF', 'A'),
('E31160570', 'E31160570', 'Sofyan As Tsauri', 'MIF', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs_ditolak`
--

CREATE TABLE IF NOT EXISTS `tb_mhs_ditolak` (
`id_mhs_ditolak` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembimbing_fix`
--

CREATE TABLE IF NOT EXISTS `tb_pembimbing_fix` (
`id_pembimbing_fix` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `NIM` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE IF NOT EXISTS `tb_proposal` (
`id_proposal` int(10) NOT NULL,
  `NIM` varchar(25) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proposal`
--

INSERT INTO `tb_proposal` (`id_proposal`, `NIM`, `id_dosen`, `judul`, `file`) VALUES
(2, 'E31160170', '197709292005011003', 'asdadasdasdasdasdasdsadee', 'DAFTAR_PUSTAKA-fix1.pdf'),
(3, 'E31160170', '198005172008121002', 'adsadsad', 'BAB_I-REV2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE IF NOT EXISTS `tb_review` (
`id_review` int(10) NOT NULL,
  `id_judul_usulan` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id_review`, `id_judul_usulan`, `id_dosen`, `status`, `saran`) VALUES
(4, 1, '198903292015031001', 'Diterima', 'oke'),
(5, 1, '198903292015031001', 'Diterima', 'oke'),
(6, 2, '197810112005012002', 'tolak', 'kembangkan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggal`
--

CREATE TABLE IF NOT EXISTS `tb_tanggal` (
`id` int(11) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tanggal`
--

INSERT INTO `tb_tanggal` (`id`, `tgl_awal`, `tgl_akhir`, `keterangan`) VALUES
(9, '2018-06-27', '2018-06-30', 'usulan'),
(10, '2018-06-27', '2018-06-30', 'final'),
(11, '2018-06-27', '2018-06-30', 'Proposal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('mahasiswa','dosen','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `password`, `status`) VALUES
('197008311998031001', '135d3caacf61a87357cc764ee948b9be', 'dosen'),
('197009292003121001', 'de9e9e26032ab5b91d8d07abb2023fbd', 'dosen'),
('197011282003121001', '17d5840ed83fad4f2d07775accbd664f', 'dosen'),
('197104082001121003', 'f61174eab5ee2c090a92c59d6e912877', 'dosen'),
('197110092003121001', '6dff7f8518f7e142102eda4f047fffff', 'dosen'),
('197111151998021001', '1f3d561f226326a284fb2216b1f10f2e', 'dosen'),
('197308312008011003', 'dba2f3726934a87e3de2c1d655f7585e', 'dosen'),
('197405192003121002', '2284d513707660147800797914681e3e', 'dosen'),
('197709292005011003', '25aa0facca2da36b8f904b3304a8be4c', 'dosen'),
('197808162005011002', 'adf91596cb1a913561870fd2a1919750', 'dosen'),
('197808172003121005', '357722a948a842b8fb6dd2e0f8f480a4', 'dosen'),
('197808192005022001', '7c4c22ea98cd816a3629bea2b86f26cf', 'dosen'),
('197809082005011001', 'f431054c80bb0ef62687144146393953', 'dosen'),
('197810112005012002', '4b2090751569b0e894d375fc0ee6c12c', 'dosen'),
('197907032003121001', '5c8052b7ab7d72e6e66e050b0dd269e6', 'dosen'),
('197909212005011001', 'bc457f7d5b8397d7a07fdc067f9db3a8', 'dosen'),
('198005172008121002', '1c0b2c75cca08872072fd160d6ccd22a', 'dosen'),
('198012122005011001', '2ca339481895182b256b4269ee311487', 'dosen'),
('198101152005011001', 'e46705e45b4685968ce3a10584846c95', 'dosen'),
('198106152006041002', 'c7c09fd94002c93c00bdfe36e1ab789c', 'dosen'),
('198301092018031001', '5e4024c2f4736021abbb8e193192c2fc', 'dosen'),
('198302032006041003', '9a041b949d9e722a7a5e414df0a1565d', 'dosen'),
('198406252015041004', 'd1c482fda5e39a04eae2f6f5366a1059', 'dosen'),
('198510312018031001', '906ef8f134cfc8b5c1d6d92db81f0a10', 'dosen'),
('198603192014031001', '93aee43dc585a73c178961f1262fb4a3', 'dosen'),
('198606092008122004', '4e0c105c6f4489ec9cca7b088b3414c9', 'dosen'),
('198608022015042002', '9f8570872c9054870a1c018c62e2da31', 'dosen'),
('198807022016101001', '11e6d266f20fd302fd5004dd982fa082', 'dosen'),
('198903292015031001', 'c702d97b638c91d4e3250fc0216e68c0', 'dosen'),
('198907102015091001', 'dbe2d0cf8e60089ffbfd131c48877f65', 'dosen'),
('199002272018032001', '8e7a0d47ca37c89a11c062edc0d42c46', 'dosen'),
('199103152017031001', '660a023447a83be45399b41373f701ed', 'dosen'),
('199104292017101001', '8b18eb80c0ba0a12b3a98c7b6572b8a5', 'dosen'),
('199112112018031001', '185ccb6d6aea25715fb73a6a91b6b4cc', 'dosen'),
('199203022018032001', '90349c2a7bc1d0cd5943e2b07adc975b', 'dosen'),
('199205282018032001', '64d303fa40a70808ccc6b4c49815d4bf', 'dosen'),
('199205282018033001', 'b9143915efe169ebe835dbf81366b545', 'dosen'),
('dimas', '50e32edc10706f237cfb4825eb08a64c', 'mahasiswa'),
('dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
('E31160328', 'e6a21db1d51a891d72f6a71534a87244', 'mahasiswa'),
('E31160570', 'a43ea2f3c29ef3423c48d633d1a1909d', 'mahasiswa'),
('Fauzan', 'eacaf53cb2b533a68baa765faedf7e59', 'dosen'),
('koordinator', 'koordinator', 'dosen'),
('mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usulan_pembimbing`
--

CREATE TABLE IF NOT EXISTS `tb_usulan_pembimbing` (
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
 ADD PRIMARY KEY (`id_dosen`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_final`
--
ALTER TABLE `tb_final`
 ADD PRIMARY KEY (`id_final`), ADD KEY `NIM` (`NIM`) USING BTREE, ADD KEY `id_dosen_pembimbing` (`id_dosen`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
 ADD PRIMARY KEY (`id_hasil`), ADD KEY `NIM` (`NIM`), ADD KEY `id_judul_usulan` (`id_judul_usulan`);

--
-- Indexes for table `tb_judul_dosen`
--
ALTER TABLE `tb_judul_dosen`
 ADD PRIMARY KEY (`id_judul_dosen`), ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_judul_usulan`
--
ALTER TABLE `tb_judul_usulan`
 ADD PRIMARY KEY (`id_judul_usulan`), ADD KEY `NIM` (`NIM`), ADD KEY `id_dosen_pembimbing` (`id_dosen_pembimbing`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
 ADD PRIMARY KEY (`NIM`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_mhs_ditolak`
--
ALTER TABLE `tb_mhs_ditolak`
 ADD PRIMARY KEY (`id_mhs_ditolak`), ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_pembimbing_fix`
--
ALTER TABLE `tb_pembimbing_fix`
 ADD PRIMARY KEY (`id_pembimbing_fix`), ADD KEY `id_dosen` (`id_dosen`), ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
 ADD PRIMARY KEY (`id_proposal`), ADD KEY `NIM` (`NIM`), ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
 ADD PRIMARY KEY (`id_review`), ADD KEY `id_dosen_pembimbing` (`id_dosen`), ADD KEY `id_judul_usulan` (`id_judul_usulan`);

--
-- Indexes for table `tb_tanggal`
--
ALTER TABLE `tb_tanggal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_usulan_pembimbing`
--
ALTER TABLE `tb_usulan_pembimbing`
 ADD PRIMARY KEY (`id_usulan_pemb`), ADD KEY `NIM` (`NIM`), ADD KEY `id_dosen` (`id_dosen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_final`
--
ALTER TABLE `tb_final`
MODIFY `id_final` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_judul_dosen`
--
ALTER TABLE `tb_judul_dosen`
MODIFY `id_judul_dosen` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_judul_usulan`
--
ALTER TABLE `tb_judul_usulan`
MODIFY `id_judul_usulan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_mhs_ditolak`
--
ALTER TABLE `tb_mhs_ditolak`
MODIFY `id_mhs_ditolak` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pembimbing_fix`
--
ALTER TABLE `tb_pembimbing_fix`
MODIFY `id_pembimbing_fix` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
MODIFY `id_proposal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_tanggal`
--
ALTER TABLE `tb_tanggal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_hasil_ibfk_2` FOREIGN KEY (`id_judul_usulan`) REFERENCES `tb_judul_usulan` (`id_judul_usulan`);

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
ADD CONSTRAINT `tb_pembimbing_fix_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_pembimbing_fix_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
ADD CONSTRAINT `tb_proposal_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_proposal_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
