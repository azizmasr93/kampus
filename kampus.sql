-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 04:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(4) NOT NULL,
  `nm_dosen` varchar(40) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nm_dosen`, `nip`) VALUES
(1, 'Dr. R. Rizal Isnanto S.T, M.M, M.T  ', '197007272000121001'),
(2, 'Eko Didik Widianto, S.T, M.T', '197705262010121001'),
(3, 'Ike Pertiwi Windasari S.T.,M.T.', '198412062010122008'),
(5, 'Rinta Kridalukmana ST,MT', '12345678434134134');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(4) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `id_hari` int(5) NOT NULL,
  `waktu` time NOT NULL,
  `id_ruang` int(4) NOT NULL,
  `kd_makul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_hari`, `waktu`, `id_ruang`, `kd_makul`) VALUES
(14, 5, '04:15:00', 1, 'TKC227'),
(15, 3, '03:00:00', 1, 'TKC205'),
(16, 2, '08:30:00', 1, 'TKC205');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `authKey` varchar(50) DEFAULT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'admin', 'admin', 'admin-12345', 'admin2937412912zzzz', 'Admin'),
(2, 'aziz', 'aziz', 'aziz-12345', 'aziz2937412912zzzz', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(4) NOT NULL,
  `nm_mhs` varchar(40) NOT NULL,
  `nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nm_mhs`, `nim`) VALUES
(3, 'Bagas Dhani Priambodo', '21120112130031'),
(4, 'Daniel Kurniawan', '21120112140068'),
(5, 'Claudi Priambodo', '21120112120002'),
(6, 'M Ikhsan', '21120112140021'),
(7, 'Rayfart Setyobudi', '21120112140089'),
(8, 'Febie Viryatama', '21120112140052'),
(9, 'Welby Nazhari', '21120112140067');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswamatakuliah`
--

CREATE TABLE `mahasiswamatakuliah` (
  `id_mhsmakul` int(11) NOT NULL,
  `kd_makul` varchar(20) NOT NULL,
  `id_mhs` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswamatakuliah`
--

INSERT INTO `mahasiswamatakuliah` (`id_mhsmakul`, `kd_makul`, `id_mhs`) VALUES
(1, 'TKC249', 1),
(2, 'TKC249', 3),
(3, 'TKC205', 4),
(5, 'TKC205', 5),
(6, 'TKC249', 7),
(7, 'TKC249', 8),
(9, 'TKC227', 1);

-- --------------------------------------------------------

--
-- Table structure for table `makul`
--

CREATE TABLE `makul` (
  `kd_makul` varchar(10) NOT NULL,
  `nm_makul` varchar(30) NOT NULL,
  `id_dosen` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makul`
--

INSERT INTO `makul` (`kd_makul`, `nm_makul`, `id_dosen`) VALUES
('TKC205', 'Sistem Digital', 2),
('TKC227', 'Rekayasa Perangkat Lunak', 2),
('TKC249', 'Pengolahan Sinyal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(4) NOT NULL,
  `kd_makul` varchar(10) NOT NULL,
  `id_mhs` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `kd_makul`, `id_mhs`, `tgl`, `waktu`) VALUES
(19, 'TKC227', '3', '2017-03-01', '15:00:04'),
(21, 'TKC205', '3', '0000-00-00', '07:00:00'),
(22, 'TKC249', '5', '0000-00-00', '07:00:00'),
(23, 'TKC249', '5', '2018-04-11', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(4) NOT NULL,
  `nama_ruang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
(1, '304'),
(2, '305'),
(3, '201'),
(4, '202'),
(5, '301');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `nama`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_hari` (`id_hari`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `kd_makul` (`kd_makul`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `mahasiswamatakuliah`
--
ALTER TABLE `mahasiswamatakuliah`
  ADD PRIMARY KEY (`id_mhsmakul`),
  ADD KEY `kd_makul` (`kd_makul`);

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`kd_makul`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD UNIQUE KEY `id_presensi` (`id_presensi`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mahasiswamatakuliah`
--
ALTER TABLE `mahasiswamatakuliah`
  MODIFY `id_mhsmakul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kd_makul`) REFERENCES `makul` (`kd_makul`);

--
-- Constraints for table `mahasiswamatakuliah`
--
ALTER TABLE `mahasiswamatakuliah`
  ADD CONSTRAINT `mahasiswamatakuliah_ibfk_1` FOREIGN KEY (`kd_makul`) REFERENCES `makul` (`kd_makul`);

--
-- Constraints for table `makul`
--
ALTER TABLE `makul`
  ADD CONSTRAINT `makul_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_presensi`) REFERENCES `presensi` (`id_presensi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
