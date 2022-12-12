-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 07:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `telepon`) VALUES
(35, 'jasmin', 'd3dde2723247d8d5fc3f76dceb3d4324', 'jasmin', '087757'),
(36, 'umi', 'e84f942d7f93ddc14d24b930d87e3da7', 'umi', 'ujhnb');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(50) NOT NULL,
  `nama_kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama_kelas`) VALUES
(5, 'Kelas 7'),
(6, 'Kelas 8'),
(7, 'Kelas 9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(50) NOT NULL,
  `id_tabungan` int(50) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_tabungan`, `nama`, `kelas`, `alamat`, `telepon`, `password`, `username`, `saldo`) VALUES
(1, 1, 'Siswa 1', 'Kelas 7', 'Bogor', '08129203922', '013f0f67779f3b1686c604db150d12ea', 'siswa1', 111000),
(2, 2, 'Siswa 2', 'Kelas 7', 'jl mawa', '87656789876678', '331633a246a4e1ceefc9539a71fcd124', 'siswa2', 95000),
(3, 3, 'Siswa 3', 'Kelas 7', 'Kab. Sleman', '0895273829991', 'df8e1ec27c47f2b8223d984f87aa571e', 'siswa3', 90000),
(4, 4, 'Siswa 4', 'Kelas 7', 'Kab Majalengka', '08129203922', 'be92aac38633896eb7b6781816b17c37', 'siswa4', 85000),
(5, 5, 'Siswa 5', 'Kelas 7', 'JL.SIMP.RANUGRATI DALAM I/5', '+6281235603323', '829e85a9946f9d4621e7e8f544fefd54', 'siswa5', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tabungan`
--

CREATE TABLE `tb_tabungan` (
  `na` int(11) NOT NULL,
  `id_tabungan` int(50) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `tanggal` text NOT NULL,
  `setoran` int(11) NOT NULL,
  `penarikan` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tabungan`
--

INSERT INTO `tb_tabungan` (`na`, `id_tabungan`, `id_siswa`, `nama`, `kelas`, `tanggal`, `setoran`, `penarikan`, `saldo`) VALUES
(1, 2, 2, 'Siswa 2', 'Kelas 11', '2020-10-14', 0, 7000, 95000),
(2, 3, 3, 'Siswa 3', 'Kelas 10', '2020-10-14', 0, 1000, 90000),
(3, 4, 4, 'Siswa 4', 'Kelas 12', '2020-10-14', 6000, 0, 85000),
(4, 5, 5, 'Siswa 5', 'Kelas 11', '2020-10-14', 0, 500, 80000),
(5, 1, 1, 'Siswa 1', 'Kelas 12', '2022-12-12', 5000, 0, 106500),
(7, 1, 1, 'Siswa 1', 'Kelas 12', '2022-12-12', 1000, 0, 107500),
(8, 1, 1, 'Siswa 1', 'Kelas 12', '2022-12-12', 500, 0, 108000),
(9, 1, 1, 'Siswa 1', 'Kelas 12', '2022-12-12', 2000, 0, 110000),
(10, 1, 1, 'Siswa 1', 'Kelas 12', '2022-12-12', 1000, 0, 111000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_tabungan` (`id_tabungan`);

--
-- Indexes for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD PRIMARY KEY (`na`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_tabungan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  MODIFY `na` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD CONSTRAINT `tb_tabungan_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
