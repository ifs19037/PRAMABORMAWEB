-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 03:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_prama`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses_materi`
--

CREATE TABLE `akses_materi` (
  `id_akses_materi` int(11) NOT NULL,
  `nik_akun` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akses_sop`
--

CREATE TABLE `akses_sop` (
  `id_akses_sop` int(11) NOT NULL,
  `nik_akun` int(11) NOT NULL,
  `id_sop` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nik_akun` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nik_karyawan` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nik_akun`, `password`, `nik_karyawan`, `level`, `created_at`, `updated_at`) VALUES
(11111, 'admin', 0, 1, '2022-06-20 01:28:57', '2022-06-20 01:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nama_karyawan` varchar(50) NOT NULL,
  `nik_karyawan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` bigint(20) NOT NULL,
  `alamat_ktp` varchar(150) NOT NULL,
  `foto_karyawan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuis`
--

CREATE TABLE `hasil_kuis` (
  `id_hasil_kuis` int(11) NOT NULL,
  `nik_akun` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `nilai` char(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_kuis_isian`
--

CREATE TABLE `jawaban_kuis_isian` (
  `id_jawaban_kuis_isian` int(11) NOT NULL,
  `nik_akun` int(11) NOT NULL,
  `id_mulai_kuis` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `id_soal_isian` int(11) NOT NULL,
  `jawaban` varchar(2500) NOT NULL,
  `poin` char(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_kuis_pilihan_berganda`
--

CREATE TABLE `jawaban_kuis_pilihan_berganda` (
  `id_jawaban_kuis_pilihan_berganda` int(11) NOT NULL,
  `nik_akun` int(11) NOT NULL,
  `id_mulai_kuis` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `id_soal_pilihan_berganda` int(11) NOT NULL,
  `jawaban` char(1) NOT NULL,
  `poin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id_kuis` int(11) NOT NULL,
  `judul_kuis` varchar(150) NOT NULL,
  `keterangan_singkat` varchar(250) NOT NULL,
  `tipe_kuis` varchar(20) NOT NULL,
  `foto_kuis` varchar(100) NOT NULL,
  `tanggal_kuis` date NOT NULL,
  `durasi_pengerjaan` double NOT NULL,
  `divisi` varchar(500) NOT NULL,
  `link_kusioner` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(150) NOT NULL,
  `keterangan_singkat` varchar(250) NOT NULL,
  `foto_materi` varchar(100) NOT NULL,
  `divisi` varchar(500) NOT NULL,
  `kode_link_video` varchar(100) NOT NULL,
  `isi_materi` varchar(5000) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mulai_kuis`
--

CREATE TABLE `mulai_kuis` (
  `id_mulai_kuis` int(11) NOT NULL,
  `nik_akun` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(150) NOT NULL,
  `keterangan_singkat` varchar(250) NOT NULL,
  `foto_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal_isian`
--

CREATE TABLE `soal_isian` (
  `id_soal_isian` int(11) NOT NULL,
  `soal_isian` varchar(3000) NOT NULL,
  `bobot_nilai` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal_pilihan_berganda`
--

CREATE TABLE `soal_pilihan_berganda` (
  `id_soal_pilihan_berganda` int(11) NOT NULL,
  `soal_pilihan_berganda` varchar(3000) NOT NULL,
  `pilihan_a` varchar(250) NOT NULL,
  `pilihan_b` varchar(250) NOT NULL,
  `pilihan_c` varchar(250) NOT NULL,
  `pilihan_d` varchar(250) NOT NULL,
  `pilihan_e` varchar(250) NOT NULL,
  `jawaban_soal_pilihan_berganda` char(1) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `id_sop` int(11) NOT NULL,
  `judul_sop` varchar(150) NOT NULL,
  `keterangan_singkat` varchar(250) NOT NULL,
  `foto_sop` varchar(100) NOT NULL,
  `file_sop` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses_materi`
--
ALTER TABLE `akses_materi`
  ADD PRIMARY KEY (`id_akses_materi`);

--
-- Indexes for table `akses_sop`
--
ALTER TABLE `akses_sop`
  ADD PRIMARY KEY (`id_akses_sop`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nik_akun`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nik_karyawan`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  ADD PRIMARY KEY (`id_hasil_kuis`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jawaban_kuis_isian`
--
ALTER TABLE `jawaban_kuis_isian`
  ADD PRIMARY KEY (`id_jawaban_kuis_isian`);

--
-- Indexes for table `jawaban_kuis_pilihan_berganda`
--
ALTER TABLE `jawaban_kuis_pilihan_berganda`
  ADD PRIMARY KEY (`id_jawaban_kuis_pilihan_berganda`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id_kuis`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `mulai_kuis`
--
ALTER TABLE `mulai_kuis`
  ADD PRIMARY KEY (`id_mulai_kuis`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `soal_isian`
--
ALTER TABLE `soal_isian`
  ADD PRIMARY KEY (`id_soal_isian`);

--
-- Indexes for table `soal_pilihan_berganda`
--
ALTER TABLE `soal_pilihan_berganda`
  ADD PRIMARY KEY (`id_soal_pilihan_berganda`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses_materi`
--
ALTER TABLE `akses_materi`
  MODIFY `id_akses_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akses_sop`
--
ALTER TABLE `akses_sop`
  MODIFY `id_akses_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  MODIFY `id_hasil_kuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jawaban_kuis_isian`
--
ALTER TABLE `jawaban_kuis_isian`
  MODIFY `id_jawaban_kuis_isian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `jawaban_kuis_pilihan_berganda`
--
ALTER TABLE `jawaban_kuis_pilihan_berganda`
  MODIFY `id_jawaban_kuis_pilihan_berganda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id_kuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mulai_kuis`
--
ALTER TABLE `mulai_kuis`
  MODIFY `id_mulai_kuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_isian`
--
ALTER TABLE `soal_isian`
  MODIFY `id_soal_isian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `soal_pilihan_berganda`
--
ALTER TABLE `soal_pilihan_berganda`
  MODIFY `id_soal_pilihan_berganda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
