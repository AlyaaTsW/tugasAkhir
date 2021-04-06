-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 12:49 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nip`, `jabatan`, `email`, `password`, `pendidikan`, `level`) VALUES
(1, 'Drs. Sunaryo, M.Si', '196310041991021001', 'Kepala', 'naryo@bps.go.id', '12345', 'S2', 'supervisor'),
(2, 'Rony Mugiartono', '196510051988031002', 'Kasubbag Umum', 'rmugi@bps.go.id', '12345', 'D3', 'admin'),
(3, 'Henry Soeryaning Handoko, SST', '197509301999011001', 'Koordinator Fungsional', 'henrys@bps.go.id', '12345', 'D-IV', 'supervisor'),
(4, 'Ir. Agustina Martha, M.M.', '196808231994012001', 'Koordinator Fungsional', 'agustina.martha@bps.go.id', '12345', 'S2', 'supervisor'),
(5, 'Ir. Dwi Handayani Prasetyawati, M.AP', '196810281994012001', 'Koordinator Fungsional', 'dwi.handayani@bps.go.id', '12345', 'S2', 'supervisor'),
(6, 'Ir. Ernawaty, M.M.', '196701091992032001', 'Koordinator Fungsional', 'ernawaty@bps.go.id', '12345', 'S2', 'supervisor'),
(7, 'Heru Prasetyo, SE', '196312041990031001', 'Koordinator Fungsional', 'heruprasetyo@bps.go.id', '12345', 'S1', 'supervisor'),
(8, 'Rachmad Widi Wijayanto', '197704042006041016', 'Fungsional Umum', 'rachmadwidi@bps.go.id', '12345', 'SMA', 'operator'),
(9, 'Eka Prahara Resbiyanti, A.Md', '198510202011012017', 'Bendahara', 'eka.prahara@bps.go.id', '12345', 'D-III', 'admin'),
(10, 'Satria Candra Wibawa, A.Md', '198810282011011004', 'Statistisi Pelaksana Lanjutan', 'satria.wibawa@bps.go.id', '12345', 'D-III', 'operator'),
(11, 'Windi Wijayanti, S.Si, M.E', '198712182011012022', 'Statistisi Pertama', 'windi.wijayanti@bps.go.id', '12345', 'S2', 'operator'),
(12, 'Rhyke Chrisdiana Novita, S.E.', '198404122005022001', 'Statistisi Pertama', 'rhyke.novita@bps.go.id', '12345', 'S1', 'operator'),
(13, 'Ratri Adhipradani Ratih, S.Si', '198510022009022012', 'Statistisi Muda', 'ratri@bps.go.id', '12345', 'S1', 'operator'),
(14, 'Ir. Rahmi Veronika', '196604101994012001', 'Statistisi Pelaksana Lanjutan', 'rahmi.veronika@bps.go.id', '12345', 'S1', 'operator'),
(15, 'Rizky Maulidya, SST', '199109302014102001', 'Statistisi Pertama', 'rizky.maulidya@bps.go.id', '12345', 'D4', 'operator'),
(16, 'Saras Wati Utami, S.Si, M.E', '198803302010122002', 'Statistisi Pertama', 'saras.wati@bps.go.id', '12345', 'S1', 'operator'),
(17, 'Christiayu Natalia, SST', '199109162014102002', 'Statistisi Pertama', 'christiayu@bps.go.id', '12345', 'D4', 'operator'),
(18, 'Soekesi Irawati, S.Psi.,M.M', '197009251994012001', 'Statistisi Muda', 'soekesi.irawati@bps.go.id', '12345', 'S2', 'operator'),
(19, 'Ir. Lies Alfiah', '196604241992032002', 'Statistisi Muda', 'lies.alfiah@bps.go.id', '12345', 'S1', 'operator'),
(20, 'Tasmilah, SST', '198309102006022001', 'Statistisi Muda', 'tasmilah@bps.go.id', '12345', 'D4', 'operator'),
(21, 'Saruni Gincahyo, SE', '196802281989031003', 'Statistisi Penyelia', 'saruni.gincahyo@bps.go.id', '12345', 'S1', 'operator'),
(22, 'Yusuf Fatoni, SE', '197012251997031004', 'Fungsional Umum', 'yusuf.fatoni@bps.go.id', '12345', 'S1', 'operator'),
(23, 'Rendra Anandhika, A.Md.', '198802292011011005', 'Statistisi Pelaksana', 'rendra@bps.go.id', '12345', 'D3', 'operator'),
(24, 'administrator', '21334234324', 'Staff', 'administrator@bps.go.id', '12345', 'D3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
