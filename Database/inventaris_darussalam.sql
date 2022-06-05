-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 05:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_darussalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `lifetime` int(11) NOT NULL,
  `kd_kondisi` varchar(10) NOT NULL,
  `kd_ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `nama_barang`, `kuantitas`, `lifetime`, `kd_kondisi`, `kd_ruangan`) VALUES
('B001', 'Mushaf Al-Quran', 100, 50, 'K001', 'R001'),
('B002', 'Sarung', 3000, 60, 'K004', 'R001'),
('B003', 'Karpet', 100, 32, 'K001', 'R002');

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE `jamaah` (
  `username_jamaah` varchar(100) NOT NULL,
  `nama_jamaah` varchar(50) NOT NULL,
  `password_jamaah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`username_jamaah`, `nama_jamaah`, `password_jamaah`) VALUES
('', 'admin', '8d372f81dba8dac556218bcba22d533f'),
('123', 'ridha', '202cb962ac59075b964b07152d234b70'),
('testerman', 'tester', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `kd_kondisi` varchar(10) NOT NULL,
  `nama_kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`kd_kondisi`, `nama_kondisi`) VALUES
('K001', 'Lama'),
('K002', 'Rusak'),
('K003', 'Baru'),
('K004', 'Harus dibersihkan');

-- --------------------------------------------------------

--
-- Table structure for table `log_barang`
--

CREATE TABLE `log_barang` (
  `id_log_barang` int(11) NOT NULL,
  `username_pengurus` varchar(50) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `tanggal_input` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_barang`
--

INSERT INTO `log_barang` (`id_log_barang`, `username_pengurus`, `kd_barang`, `tanggal_input`, `status`) VALUES
(10, 'admin', 'B001', '2022-05-23', 'Entri'),
(11, 'admin', 'B002', '2022-05-23', 'Entri'),
(13, 'admin', 'B003', '2022-05-23', 'Entri');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `username_jamaah` varchar(50) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `tanggal_peminjaman` datetime NOT NULL,
  `tanggal_pengembalian` datetime NOT NULL,
  `status_peminjaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `username_jamaah`, `kd_barang`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(6, '123', 'B002', '2022-05-29 11:15:51', '0000-00-00 00:00:00', 'Belum Dikembalikan'),
(7, '123', 'B001', '2022-05-29 11:15:57', '0000-00-00 00:00:00', 'Belum Dikembalikan'),
(8, '123', 'B002', '2022-05-29 11:30:00', '2022-05-29 11:54:59', 'Sudah Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `username_pengurus` varchar(100) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `password_pengurus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`username_pengurus`, `nama_pengurus`, `password_pengurus`) VALUES
('', 'tester', '90d867b07328805245089c1a41f13c3a'),
('admin', 'Admin', '8d372f81dba8dac556218bcba22d533f'),
('mbeeganteng', 'Mbee', 'e6d842ddbc4bff603cdfdb8aa42e783d'),
('nyoman', 'Nyoman', 'caf1a3dfb505ffed0d024130f58c5cfa'),
('techi', 'Satria Ramadhani', '98316a7e2eea5943cb99a9cf8f9e5cc3'),
('tester', 'Tester', '90d867b07328805245089c1a41f13c3a'),
('v', 'V', '202cb962ac59075b964b07152d234b70'),
('vjamaah', 'V tapi jamaah', 'f8b3f462cd9a82f412b007cc5df8b33a');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kd_ruangan` varchar(10) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kd_ruangan`, `nama_ruangan`) VALUES
('R001', 'DKM'),
('R002', 'Gudang 1'),
('R003', 'Gudang 2'),
('R004', 'Gudang 3');

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `kd_sumber` varchar(10) NOT NULL,
  `nama_sumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`kd_sumber`, `nama_sumber`) VALUES
('111', 'Hibah'),
('132', 'Pinjam'),
('321', 'Beli');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_barang`
--

CREATE TABLE `sumber_barang` (
  `id_sumber_barang` int(11) NOT NULL,
  `kd_sumber` varchar(10) NOT NULL,
  `kd_barang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sumber_barang`
--

INSERT INTO `sumber_barang` (`id_sumber_barang`, `kd_sumber`, `kd_barang`) VALUES
(10, '111', 'B001'),
(11, '111', 'B002'),
(13, '111', 'B003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`),
  ADD UNIQUE KEY `kd_barang_UNIQUE` (`kd_barang`),
  ADD KEY `fk_barang_kondisi1_idx` (`kd_kondisi`),
  ADD KEY `fk_barang_ruangan1_idx` (`kd_ruangan`);

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`username_jamaah`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`kd_kondisi`),
  ADD UNIQUE KEY `kd_kondisi_UNIQUE` (`kd_kondisi`);

--
-- Indexes for table `log_barang`
--
ALTER TABLE `log_barang`
  ADD PRIMARY KEY (`id_log_barang`),
  ADD KEY `fk_pengurus_has_barang_barang1_idx` (`kd_barang`),
  ADD KEY `fk_pengurus_has_barang_pengurus_idx` (`username_pengurus`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `fk_jamaah_has_barang_barang1_idx` (`kd_barang`),
  ADD KEY `fk_jamaah_has_barang_jamaah1_idx` (`username_jamaah`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`username_pengurus`),
  ADD UNIQUE KEY `username_UNIQUE` (`username_pengurus`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kd_ruangan`),
  ADD UNIQUE KEY `kd_ruangan_UNIQUE` (`kd_ruangan`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`kd_sumber`),
  ADD UNIQUE KEY `kd_sumber_UNIQUE` (`kd_sumber`);

--
-- Indexes for table `sumber_barang`
--
ALTER TABLE `sumber_barang`
  ADD PRIMARY KEY (`id_sumber_barang`),
  ADD KEY `fk_sumber_has_barang_barang1_idx` (`kd_barang`),
  ADD KEY `fk_sumber_has_barang_sumber1_idx` (`kd_sumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_barang`
--
ALTER TABLE `log_barang`
  MODIFY `id_log_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sumber_barang`
--
ALTER TABLE `sumber_barang`
  MODIFY `id_sumber_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_kondisi1` FOREIGN KEY (`kd_kondisi`) REFERENCES `kondisi` (`kd_kondisi`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_barang_ruangan1` FOREIGN KEY (`kd_ruangan`) REFERENCES `ruangan` (`kd_ruangan`) ON DELETE CASCADE;

--
-- Constraints for table `log_barang`
--
ALTER TABLE `log_barang`
  ADD CONSTRAINT `fk_pengurus_has_barang_barang1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pengurus_has_barang_pengurus` FOREIGN KEY (`username_pengurus`) REFERENCES `pengurus` (`username_pengurus`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_jamaah_has_barang_barang1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_jamaah_has_barang_jamaah1` FOREIGN KEY (`username_jamaah`) REFERENCES `jamaah` (`username_jamaah`) ON DELETE CASCADE;

--
-- Constraints for table `sumber_barang`
--
ALTER TABLE `sumber_barang`
  ADD CONSTRAINT `fk_sumber_has_barang_barang1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_sumber_has_barang_sumber1` FOREIGN KEY (`kd_sumber`) REFERENCES `sumber` (`kd_sumber`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
