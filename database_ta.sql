-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 10:31 AM
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
-- Table structure for table `mrk`
--

CREATE TABLE `mrk` (
  `id_mrk` int(11) NOT NULL,
  `komponen` varchar(250) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `volume` int(5) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `bag` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk`
--

INSERT INTO `mrk` (`id_mrk`, `komponen`, `kegiatan`, `volume`, `satuan`, `tahun`, `bag`, `status`) VALUES
(1, 'KOMPILASI DATA TRANSPORTASI EDIT', 'Pengumpulan form ajr ii 2', 1, 'Responden', 2021, 1, 1),
(2, 'SURVEI IMK TAHUNAN', 'Listing VIMK Tahunan', 22, 'Dokumen', 2021, 3, 1),
(4, 'SURVEI ANGKUTAN PENUMPANG DAN BARANG DI TERMINAL DAN JEMBATAN TIMBANG', 'Pengumpulan Data SPAB', 1, 'O-H', 2021, 1, 1),
(5, 'PENGELOLAAN DATA MIKRO', 'menerima data mikro', 10, 'dokumen', 2021, 5, 1),
(6, 'SURVEI INDUSTRI BESAR DAN SEDANG BULANAN', 'pencacahan Survei IBS Bulanan', 6, 'responden', 2021, 3, 1),
(7, 'SURVEI KHUSUS KONSUMSI RUMAH TANGGA (SKKRT)', 'pencacahan', 120, 'Rumah Tangga (Panel)', 2021, 2, 1),
(8, 'CONTOH TAMBAH DATA KOMPONEN', 'ini data kegiatan Nerwilis', 11, 'dokumen', 2020, 2, 1),
(9, 'CONTOH TAMBAH DATA KOMPONEN', 'ini data kegiatan Nerwilis 2', 111, 'responden', 2021, 2, 1),
(10, 'CONTOH TAMBAH DATA KOMPONEN DISTRIBUSI', 'ini data kegiatan Distribusi', 3, 'Rumah Tangga (Panel)', 2021, 1, 1),
(11, 'CONTOH TAMBAH DATA KOMPONEN IPDS', 'ini data kegiatan Bagian IPDS', 11, 'dokumen', 2021, 5, 0),
(12, 'CONTOH TAMBAH DATA KOMPONEN DISTRIBUSI', 'ini data kegiatan Distribusi terbaru', 11, 'dokumen', 2021, 1, 1),
(13, 'CONTOH TAMBAH DATA KOMPONEN SOSIAL 1', 'ini data kegiatan Sosial', 12, 'Rumah Tangga (Panel)', 2021, 4, 1),
(14, 'CONTOH TAMBAH DATA KOMPONEN DISTRIBUSI', 'ini data kegiatan Distribusi terbaru banget', 13, 'O-H', 2021, 1, 1),
(15, 'KOMPONEN SOSIAL CONTOH', 'bhakti sosial kabupaten', 12, 'Rumah Tangga (Panel)', 2021, 4, 0),
(16, 'CONTOH TAMBAH DATA KOMPONEN SOSIAL', 'menerima data mikro sosial', 1233, 'dokumen', 2021, 4, 0),
(17, 'SURVEI ANGKUTAN PENUMPANG DAN BARANG DI TERMINAL DAN JEMBATAN TIMBANG', 'pencacahan', 89, 'O-H', 2021, 4, 0),
(18, 'CONTOH DATA MRK NERWILIS', 'contoh', 2, 'O-H', 2021, 2, 1),
(19, 'PENGUMPULAN DATA', 'survey', 4, 'O-H', 2021, 1, 1),
(20, 'PENGUMPULAN DATA', 'survey', 8, 'O-H', 2021, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mrk` int(11) NOT NULL,
  `bulan` int(2) NOT NULL,
  `realisasi` int(11) NOT NULL DEFAULT '0',
  `persen` int(11) NOT NULL DEFAULT '0',
  `laporan` int(11) NOT NULL DEFAULT '0',
  `file` varchar(255) DEFAULT NULL,
  `tgl_ubah` date NOT NULL,
  `notif` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `id_user`, `id_mrk`, `bulan`, `realisasi`, `persen`, `laporan`, `file`, `tgl_ubah`, `notif`) VALUES
(1, 2, 4, 2, 3, 0, 1, '2021-PANDUAN-FOTO-IJAZAH.pdf', '2021-05-30', 0),
(2, 5, 1, 6, 0, 0, 1, 'Loundry-OMI3F(2,16,18,19,24,25)_ValidasiModelBisnis.pdf', '2021-06-11', 0),
(3, 19, 7, 3, 0, 0, 1, '1831710104_AlyamillaTsabita_Surat_Pernyataan.pdf', '2021-06-11', 0),
(4, 2, 2, 2, 8, 0, 1, 'UKBM_Ar,_Mr,_RE,_RM,_%Komposisi_dan_Persamaan_Reaksi_2021_converted1.pdf', '2021-06-12', 0),
(5, 21, 5, 9, 0, 0, 1, 'Loundry-OMI3F(2,16,18,19,24,25)_ValidasiModelBisnis.pdf', '2021-06-12', 0),
(6, 2, 10, 2, 1, 0, 1, 'Alyamilla_Tsabita_Widiyanto__Nur_Salma_Nabella_Laporan_Akhir_docx.pdf', '2021-06-13', 0),
(7, 2, 8, 2, 0, 0, 1, 'UKBM_Konsep_mol_dan_perhitungan_kimia_2021-converted_(9).pdf', '2021-05-28', 0),
(8, 7, 13, 6, 0, 0, 1, 'KELOMPOK_4_XA04_02_11_12_17.pdf', '2021-06-12', 1),
(9, 14, 12, 6, 0, 0, 0, NULL, '0000-00-00', 0),
(10, 18, 9, 6, 0, 0, 0, NULL, '0000-00-00', 0),
(11, 18, 6, 6, 0, 0, 1, 'Loundry-OMI3F(2,16,18,19,24,25)_ValidasiModelBisnis.pdf', '2021-06-12', 0),
(12, 14, 14, 6, 0, 0, 0, NULL, '0000-00-00', 0),
(13, 3, 18, 6, 0, 0, 1, 'surat_pengumuman_mahasiswa_(1).pdf', '2021-06-13', 0),
(14, 4, 19, 4, 0, 0, 0, NULL, '0000-00-00', 0),
(15, 8, 20, 3, 0, 0, 0, NULL, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bagian` int(2) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nip`, `jabatan`, `bagian`, `email`, `password`, `pendidikan`, `level`) VALUES
(1, 'Drs. Sunaryo, M.Si', '196310041991021001', 'Kepala', NULL, 'naryo@bps.go.id', '12345', 'S2', 'admin'),
(2, 'Rony Mugiartono', '196510051988031002', 'Kasubbag Umum', NULL, 'rmugi@bps.go.id', '12345', 'D3', 'admin'),
(3, 'Henry Soeryaning Handoko, SST', '197509301999011001', 'Koordinator Fungsional', 2, 'henrys@bps.go.id', '12345', 'D4', 'supervisor'),
(4, 'Ir. Agustina Martha, M.M.', '196808231994012001', 'Koordinator Fungsional', 3, 'agustina.martha@bps.go.id', '12345', 'S2', 'supervisor'),
(5, 'Ir. Dwi Handayani Prasetyawati, M.AP', '196810281994012001', 'Koordinator Fungsional', 1, 'dwi.handayani@bps.go.id', '12345', 'S2', 'supervisor'),
(6, 'Ir. Ernawaty, M.M.', '196701091992032001', 'Koordinator Fungsional', 4, 'ernawaty@bps.go.id', '12345', 'S2', 'supervisor'),
(7, 'Heru Prasetyo, SE', '196312041990031001', 'Koordinator Fungsional', 5, 'heruprasetyo@bps.go.id', '12345', 'S1', 'supervisor'),
(8, 'Rachmad Widi Wijayanto', '197704042006041016', 'Fungsional Umum', NULL, 'rachmadwidi@bps.go.id', '12345', 'SMA', 'operator'),
(9, 'Eka Prahara Resbiyanti, A.Md', '198510202011012017', 'Bendahara', NULL, 'eka.prahara@bps.go.id', '12345', 'D3', 'admin'),
(10, 'Satria Candra Wibawa, A.Md', '198810282011011004', 'Statistisi Pelaksana Lanjutan', NULL, 'satria.wibawa@bps.go.id', '12345', 'D3', 'operator'),
(11, 'Windi Wijayanti, S.Si, M.E', '198712182011012022', 'Statistisi Pertama', NULL, 'windi.wijayanti@bps.go.id', '12345', 'S2', 'operator'),
(12, 'Rhyke Chrisdiana Novita, S.E.', '198404122005022001', 'Statistisi Pertama', NULL, 'rhyke.novita@bps.go.id', '12345', 'S1', 'operator'),
(13, 'Ratri Adhipradani Ratih, S.Si', '198510022009022012', 'Statistisi Muda', NULL, 'ratri@bps.go.id', '12345', 'S1', 'operator'),
(14, 'Ir. Rahmi Veronika', '196604101994012001', 'Statistisi Pelaksana Lanjutan', NULL, 'rahmi.veronika@bps.go.id', '12345', 'S1', 'operator'),
(15, 'Rizky Maulidya, SST', '199109302014102001', 'Statistisi Pertama', NULL, 'rizky.maulidya@bps.go.id', '12345', 'D4', 'operator'),
(16, 'Saras Wati Utami, S.Si, M.E', '198803302010122002', 'Statistisi Pertama', NULL, 'saras.wati@bps.go.id', '12345', 'S1', 'operator'),
(17, 'Christiayu Natalia, SST', '199109162014102002', 'Statistisi Pertama', NULL, 'christiayu@bps.go.id', '12345', 'D4', 'operator'),
(18, 'Soekesi Irawati, S.Psi.,M.M', '197009251994012001', 'Statistisi Muda', NULL, 'soekesi.irawati@bps.go.id', '12345', 'S2', 'operator'),
(19, 'Ir. Lies Alfiah', '196604241992032002', 'Statistisi Muda', NULL, 'lies.alfiah@bps.go.id', '12345', 'S1', 'operator'),
(20, 'Tasmilah, SST', '198309102006022001', 'Statistisi Muda', NULL, 'tasmilah@bps.go.id', '12345', 'D4', 'operator'),
(21, 'Saruni Gincahyo, SE', '196802281989031003', 'Statistisi Penyelia', NULL, 'saruni.gincahyo@bps.go.id', '12345', 'S1', 'operator'),
(22, 'Yusuf Fatoni, SE', '197012251997031004', 'Fungsional Umum', NULL, 'yusuf.fatoni@bps.go.id', '12345', 'S1', 'operator'),
(23, 'Rendra Anandhika, A.Md.', '198802292011011005', 'Statistisi Pelaksana', NULL, 'rendra@bps.go.id', '12345', 'D3', 'operator'),
(24, 'administrator', '21334234324', 'Staff', NULL, 'administrator@bps.go.id', '12345', 'D3', 'admin'),
(25, 'ALYAMILLA TSABITA WIDIYANTO', '1234314134', 'Statistisi Pelaksana', NULL, 'qewqeqwdf@gmail.com', '12345', 'D3', 'operator'),
(26, 'Nur Salma Nabella', '1831710064', 'Statistisi Muda', NULL, 'nursalma@gmail.com', '12345', 'S1', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mrk`
--
ALTER TABLE `mrk`
  ADD PRIMARY KEY (`id_mrk`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mrk` (`id_mrk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mrk`
--
ALTER TABLE `mrk`
  MODIFY `id_mrk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tugas_ibfk_2` FOREIGN KEY (`id_mrk`) REFERENCES `mrk` (`id_mrk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
