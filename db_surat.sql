-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 08:52 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
  `id_disposisi` int(7) NOT NULL AUTO_INCREMENT,
  `id_surat` int(7) NOT NULL,
  `id_user` int(5) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggapan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_disposisi`),
  KEY `id_surat` (`id_surat`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8100008 ;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `id_surat`, `id_user`, `no_surat`, `kepada`, `status`, `tanggapan`) VALUES
(8100001, 5100001, 10002, '051/KS/SMK-NS1/II/2018', 'Kepala Administrasi', 'Diterima', 'Kirimkan CV'),
(8100005, 5100002, 10002, '005/SDS/ADNI', 'test', 'test', 'test'),
(8100007, 5100004, 10002, '002/HGD/TRG/II/2018', 'Bag Administrasi', 'Diterima', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id_surat` int(7) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5100005 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_surat`, `id_user`, `jenis`, `tanggal_kirim`, `tanggal_terima`, `no_surat`, `pengirim`, `perihal`) VALUES
(5100001, 10001, 'Pengumuman', '2018-02-01', '2018-02-02', '051/KS/SMK-NS1/II/2018', 'SMK Nusantara 1 Ciputat', 'Permohonan Prakerin'),
(5100002, 10001, 'Pengumuman', '2018-02-02', '2018-02-04', '005/SDS/ADNI', 'ADNI', 'Meeting Proyek'),
(5100003, 10001, 'Nota', '2018-02-03', '2018-02-05', '345/SDS/ADNI/II/2018', 'ADNI', 'Meeting Bulanan'),
(5100004, 10001, 'Surat Rahasia', '2018-02-02', '2018-02-03', '002/HGD/TRG/II/2018', 'TRGroup', 'Meeting');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `id_surat` int(7) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6100005 ;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`id_surat`, `id_user`, `jenis`, `tanggal`, `no_surat`, `pengirim`, `tujuan`, `perihal`, `isi`) VALUES
(6100001, 10001, 'Surat Magang', '2018-02-06', '001/KS/FBTR/II/2018', 'Bag Admin', 'SMK Nusantara ', 'perihal', 'Yang Terhormat Bapak/Ibu Guru SMK Nusantara 1 Ciputat. Kami Menerima Siswa anda yang akan melaksanakan kegiatan magang dengan persyaratan mengirim CV tiap siswa ke email magang@fobtera.id . '),
(6100002, 10001, 'Surat Segera', '2018-02-01', '002/FR/FBTR/II/2018', 'Admin', 'PT TRGroup', 'perihal', 'Segera temui perwakilan kantor'),
(6100003, 10001, 'Surat Edaran', '2018-02-03', '003/YUD/FBTR/II/2018', 'ADmin', 'Karyawan', 'Liburan Akhir Tahun', 'Mengenai Liburan Akhir tahun kita akan ke raja ampat!!'),
(6100004, 10000, 'Surat Segera', '2018-02-17', '005/SDS/FBTR/II/2018', 'Bag Admin', 'PT TRG', 'Meeting Dadakan', 'Ini contoh surat keluar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses` enum('0','1','2') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10005 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `akses`) VALUES
(10000, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0'),
(10001, 'Teuku Raja', 'raja', '0d736238eb933ac670219ebda5282599', '1'),
(10002, 'Samuel Richard ', 'pimpinan', '21232f297a57a5a743894a0e4a801fc3', '2'),
(10003, 'Arya Pambudi', 'petugas', '21232f297a57a5a743894a0e4a801fc3', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `inbox` (`id_surat`),
  ADD CONSTRAINT `disposisi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `inbox`
--
ALTER TABLE `inbox`
  ADD CONSTRAINT `inbox_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `outbox`
--
ALTER TABLE `outbox`
  ADD CONSTRAINT `outbox_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
