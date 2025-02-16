-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2025 at 02:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skkpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jurusan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
('J1', 'RPL'),
('J2', 'TKJ'),
('J3', 'AN'),
('J4', 'DKV');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kategori` enum('Wajib','Opsional') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sub_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `sub_kategori`) VALUES
('KTG1', 'Wajib', 'Kurikulum Merdeka Project P5'),
('KTG2', 'Wajib', 'Ekstra Kurikuler'),
('KTG3', 'Opsional', 'TEFA (Teaching Factory)'),
('KTG4', 'Opsional', 'Organisasi Sekolah'),
('KTG5', 'Opsional', 'Komunitas Kreatif Siswa'),
('KTG6', 'Opsional', 'Penalaran /Karya Ilmiah/Akademik'),
('KTG7', 'Opsional', 'Perlombaan /Kejuaraan/ Kompetisi'),
('KTG8', 'Opsional', 'Kegiatan Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` char(15) NOT NULL,
  `jenis_kegiatan` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `angka_kredit` int NOT NULL,
  `id_kategori` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `jenis_kegiatan`, `angka_kredit`, `id_kategori`) VALUES
('KG1', 'Project Gaya Hidup Berkelajutan', 1, 'KTG1'),
('KG10', 'Kewirausahaan', 5, 'KTG3'),
('KG11', 'Ketua Osis', 15, 'KTG4'),
('KG12', 'Wakil Ketua Osis', 12, 'KTG4'),
('KG13', 'Sekretaris Osis', 12, 'KTG4'),
('KG14', 'Bendahara Osis', 12, 'KTG4'),
('KG15', 'Anggota Osis', 10, 'KTG4'),
('KG16', 'Ketua Rosis/Sehati/Nasrani', 8, 'KTG4'),
('KG17', 'Wakil Ketua Rosis/Sehati/Nasrani', 5, 'KTG4'),
('KG18', 'Sekretaris Rosis/Sehati/Nasrani', 5, 'KTG4'),
('KG19', 'Bendahara Rosis/Sehati/Nasrani', 5, 'KTG4'),
('KG2', 'Project Kearifan Lokal', 1, 'KTG1'),
('KG20', 'Anggota Rosis/Sehati/Nasrani', 3, 'KTG4'),
('KG21', 'Ketua Podcast', 12, 'KTG5'),
('KG22', 'Wakil Ketua Podcast', 10, 'KTG5'),
('KG23', 'Sekretaris Podcast', 10, 'KTG5'),
('KG24', 'Bendahara Podcast', 10, 'KTG5'),
('KG25', 'Anggota Podcast', 8, 'KTG5'),
('KG26', 'Ketua Broadcast', 12, 'KTG5'),
('KG27', 'Wakil Ketua Broadcast', 10, 'KTG5'),
('KG28', 'Sekretaris Broadcast', 10, 'KTG5'),
('KG29', 'Bendahara Broadcast', 10, 'KTG5'),
('KG3', 'Project Kebekerjaan', 1, 'KTG1'),
('KG30', 'Anggota Broadcast', 8, 'KTG5'),
('KG31', 'Penulisan karya ilmiah/riset/buletin/jurnal', 5, 'KTG6'),
('KG32', 'Peserta (seminar, simposium, lokakarya, diskusi panel)', 2, 'KTG6'),
('KG33', 'Pelatihan (penulisan karya ilmiah, kewirausahaan)', 2, 'KTG6'),
('KG34', 'Pengembangan Bahasa asing (English) dengan kegiatan International', 2, 'KTG6'),
('KG35', 'Juara 1 Internasional', 7, 'KTG7'),
('KG36', 'Juara 2 Internasional', 5, 'KTG7'),
('KG37', 'Juara 3 Internasional', 3, 'KTG7'),
('KG38', 'Harapan 1/2/3 Internasional', 2, 'KTG7'),
('KG39', 'Peserta Internasional', 1, 'KTG7'),
('KG4', 'Project Kewirausahaan', 1, 'KTG1'),
('KG40', 'Juara 1 nasional', 5, 'KTG7'),
('KG41', 'Juara 2 nasional', 4, 'KTG7'),
('KG42', 'Juara 3 nasional', 3, 'KTG7'),
('KG43', 'Harapan 1/2/3 nasional', 2, 'KTG7'),
('KG44', 'Peserta nasional', 1, 'KTG7'),
('KG45', 'Juara 1 Regional / Provinsi / Kabupaten / Kota', 4, 'KTG7'),
('KG46', 'Juara 2 Regional / Provinsi / Kabupaten / Kota', 3, 'KTG7'),
('KG47', 'Juara 3 Regional / Provinsi / Kabupaten / Kota', 2, 'KTG7'),
('KG48', 'Harapan 1/2/3 Regional / Provinsi / Kabupaten / Kota', 1, 'KTG7'),
('KG49', 'Peserta Regional / Provinsi / Kabupaten / Kota', 1, 'KTG7'),
('KG5', 'Project Bhineka Tunggal Ika', 1, 'KTG1'),
('KG50', 'Juara 1 internal', 3, 'KTG7'),
('KG51', 'Juara 2 internal', 2, 'KTG7'),
('KG52', 'Juara 3 internal', 1, 'KTG7'),
('KG53', 'Bakti Sosial', 2, 'KTG8'),
('KG54', 'Kepanitiaan Kegiatan Sekolah selain OSIS, Organisasi siswa, dan Komunitas', 2, 'KTG8'),
('KG55', 'Undangan sebagai Nara Sumber Podcast', 2, 'KTG8'),
('KG6', 'Project Rekayasa dan Teknologi', 1, 'KTG1'),
('KG7', 'Ekstra Kurikuler Wajib', 2, 'KTG2'),
('KG8', 'Ekstra Kurikuler Pilihan', 2, 'KTG2'),
('KG9', 'Bekerja dengan stake holder', 5, 'KTG3');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nama_lengkap` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nis` int NOT NULL,
  `password` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int NOT NULL,
  `tanggal_upload` date NOT NULL,
  `catatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sertifikat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_status_berubah` date NOT NULL,
  `nis` int NOT NULL,
  `id_kegiatan` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `tanggal_upload`, `catatan`, `sertifikat`, `status`, `tanggal_status_berubah`, `nis`, `id_kegiatan`) VALUES
(1, '2024-12-22', '', '7024-1ka3jslda.pdf', 'valid', '2025-01-11', 6292, 'KG1'),
(2, '2024-12-22', '', '7024-1ka3jslda.pdf', 'valid', '2025-01-11', 6293, 'KG2'),
(3, '2024-12-22', '', '7024-1ka3jslda.pdf', 'valid', '2025-01-11', 6294, 'KG3'),
(4, '2024-12-23', '', '7025-1ka3jslda.pdf', 'valid', '2025-01-12', 6295, 'KG2'),
(5, '2024-12-24', '', '7026-1ka3jslda.pdf', 'valid', '2025-01-13', 6296, 'KG2'),
(6, '2024-12-24', '', '7026-1ka3jslda.pdf', 'valid', '2025-01-13', 6297, 'KG3'),
(7, '2024-12-25', '', '7027-1ka3jslda.pdf', 'valid', '2025-01-14', 6298, 'KG1'),
(8, '2024-12-25', '', '7027-1ka3jslda.pdf', 'valid', '2025-01-14', 6299, 'KG3'),
(9, '2024-12-25', '', '7027-1ka3jslda.pdf', 'valid', '2025-01-14', 6300, 'KG2'),
(10, '2024-12-26', '', '7028-1ka3jslda.pdf', 'valid', '2025-01-15', 6301, 'KG2'),
(11, '2024-12-27', '', '7029-1ka3jslda.pdf', 'menunggu validasi', '2025-01-16', 6302, 'KG1'),
(12, '2024-12-27', '', '7029-1ka3jslda.pdf', 'menunggu validasi', '2025-01-16', 6303, 'KG2'),
(13, '2024-12-27', '', '7029-1ka3jslda.pdf', 'valid', '2025-01-16', 6304, 'KG4'),
(14, '2024-12-28', '', '7030-1ka3jslda.pdf', 'valid', '2025-01-17', 6306, 'KG5'),
(15, '2024-12-29', 'perbaiki dokumen', '7031-1ka3jslda.pdf', 'tidak valid', '2025-01-18', 6307, 'KG6'),
(16, '2024-12-30', '', '7032-1ka3jslda.pdf', 'valid', '2025-01-19', 6308, 'KG7'),
(17, '2024-12-31', '', '7033-1ka3jslda.pdf', 'valid', '2025-01-20', 6309, 'KG8');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int NOT NULL,
  `no_absen` int NOT NULL,
  `nama_siswa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_jurusan` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kelas` int NOT NULL,
  `angkatan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `no_absen`, `nama_siswa`, `no_telp`, `email`, `id_jurusan`, `kelas`, `angkatan`) VALUES
(6292, 1, 'Albert Made Marvell Adnyana keren', '089644952917', 'writeforaby@gmail.com', 'J1', 1, 2024),
(6293, 2, 'Alif Rizki Raditya', '081239801107', 'alifrizky286@gmail.com', 'J1', 1, 2024),
(6294, 3, 'Ariza Falah Subyantoro', '082145584677', 'arizasubyantoro@gmail.com', 'J1', 1, 2024),
(6295, 4, 'Aurelio Fransiskus Sinarta', '089516724229', 'aureliofs01@gmail.com', 'J1', 1, 2024),
(6296, 5, 'Bezaleel Elderoy Sulastiyo', '08977303987', 'bezaleelelderoys@gmail.com', 'J1', 1, 2024),
(6297, 6, 'Chien Shevanya Lie', '082144049709', 'chienshevanyalie@gmail.com', 'J1', 1, 2024),
(6298, 7, 'Faiz Zaidan Hadi', '085738170030', 'faizzaidanhadi007@gmail.com', 'J1', 1, 2024),
(6299, 8, 'Helmi Malik Nur Robi', '08990420398', 'codename.mee@gmail.com', 'J2', 1, 2024),
(6300, 9, 'Henri Saputra', '082146357077', 'hs5565566@gmail.com', 'J2', 1, 2024),
(6301, 10, 'I Gede Made Paramartha Nugraha', '081239330607', 'paramartha1307@gmail.com', 'J2', 2, 2023),
(6302, 11, 'I Gede Sheva Putrayana', '08980588086', 'seavweb@gmail.com', 'J2', 2, 2023),
(6303, 12, 'I Gusti Agung Putu Aswinanta Wikrama', '085739285687', 'nntxwww@gmail.com', 'J2', 2, 2023),
(6304, 13, 'I Gusti Ngurah Pranajaya Udiartha', '081934996141', 'gejeee14@gmail.com', 'J2', 2, 2023),
(6306, 14, 'I Made Seva Santepi Putra Winata', '081338369652', 'sevawinata@gmail.com', 'J2', 2, 2023),
(6307, 15, 'I Putu Adita Pratama', '085903627353', 'aditapratama654@gmail.com', 'J2', 2, 2023),
(6308, 16, 'I Putu Gede Deva Suka Dian Pratama', '087757862060', 'putudeva49@gmail.com', 'J3', 2, 2023),
(6309, 17, 'Ida Bagus Dwiya Kusala Mahari Prabhaswara', '082145280323', 'maharikusala@gmail.com', 'J3', 2, 2023),
(6310, 18, 'Komang Krisna Puspanta', '087754766536', 'ikomangkrisna40@gmail.com', 'J3', 2, 2023),
(6311, 19, 'Krisna Septiadji Suhaya', '081337858322', 'krisnaseptiaji@gmail.com', 'J3', 3, 2022),
(6312, 20, 'Lulu Ilyana Lintang Az-zahra', '081363716909', 'luluilyanaaz.9107@gmail.com', 'J3', 3, 2022),
(6313, 21, 'M.Hidayatullah', '081237278762', 'hidayat04191@gmail.com', 'J3', 3, 2022),
(6314, 22, 'Muhammad Jaffan Hanindito', '085772209371', 'haninditoj@gmail.com', 'J4', 3, 2022),
(6315, 23, 'Ni Kadek Sherly Cempaka Dewi', '081529942897', 'sherlycempaka@icloud.com', 'J4', 3, 2022),
(6317, 24, 'Sadewa Bharaka Mahaputra', '082247814145', 'i.arakamahaputra@gmail.com', 'J4', 3, 2022),
(6318, 25, 'Satria Bela Pratama', '085157099482', 'codewithsatria@gmail.com', 'J4', 3, 2022),
(6319, 26, 'Vania Bella Amadea', '089524649718', 'amadeabella007@gmail.com', 'J4', 3, 2022),
(6626, 27, 'Ida Ayu Lalita Putri Gama', '087755725057', 'lalitaputri2429@gmail.com', 'J4', 3, 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `Id_Kategori` (`id_kategori`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `Username` (`username`,`nis`),
  ADD KEY `NIS` (`nis`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`),
  ADD KEY `NIS` (`nis`),
  ADD KEY `Id_Kegiatan` (`id_kegiatan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `Id_Jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81722;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `pengguna_ibfk_2` FOREIGN KEY (`username`) REFERENCES `pegawai` (`username`);

--
-- Constraints for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `sertifikat_ibfk_2` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
