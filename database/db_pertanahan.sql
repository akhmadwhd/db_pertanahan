-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 11.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pertanahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dip4t`
--

CREATE TABLE `tb_dip4t` (
  `id_tanah` int(11) NOT NULL,
  `nama_pmk` varchar(255) NOT NULL,
  `alamat_pmk` varchar(255) DEFAULT NULL,
  `no_ktp_pmk` bigint(16) DEFAULT NULL,
  `umur_pmk` int(11) DEFAULT NULL,
  `status_perkawinan_pmk` enum('belum menikah','menikah','pernah menikah') NOT NULL,
  `domisili_saat_ini_pmk` enum('desa ini','desa lain berbatasan langsung','desa lain tidak berbatasan langsung','di luar kecamatan','Lainnya') NOT NULL,
  `tahun_kepemilikan_pmk` int(11) DEFAULT NULL,
  `nama_ps` varchar(255) DEFAULT NULL,
  `alamat_ps` varchar(255) DEFAULT NULL,
  `no_ktp_ps` bigint(16) DEFAULT NULL,
  `umur_ps` int(11) DEFAULT NULL,
  `status_perkawinan_ps` enum('belum menikah','menikah','pernah menikah') NOT NULL,
  `domisili_saat_ini_ps` enum('desa ini','desa lain berbatasan langsung','desa lain tidak berbatasan langsung','di luar kecamatan','Lainnya') NOT NULL,
  `tahun_kepemilikan_ps` int(11) DEFAULT NULL,
  `nama_ob` varchar(255) DEFAULT NULL,
  `nama_jalan_ob` varchar(255) DEFAULT NULL,
  `rtrw_ob` varchar(255) DEFAULT NULL,
  `desa_ob` varchar(255) DEFAULT NULL,
  `kecamatan_ob` varchar(255) DEFAULT NULL,
  `kabupaten_ob` varchar(255) DEFAULT NULL,
  `luas_ob` int(11) DEFAULT NULL,
  `penguasan_ob` enum('lorem') DEFAULT NULL,
  `perolehan_ob` enum('lorem') DEFAULT NULL,
  `no_sertifikat_ob` bigint(16) DEFAULT NULL,
  `penggunaan_ob` enum('lorem') DEFAULT NULL,
  `pemanfaatan_ob` enum('lorem') DEFAULT NULL,
  `indikasi_ob` enum('lorem') DEFAULT NULL,
  `sengketa_ob` enum('lorem') DEFAULT NULL,
  `potensi_ob` enum('lorem') DEFAULT NULL,
  `koordinat_ob` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gantirugi`
--

CREATE TABLE `tb_gantirugi` (
  `id` int(11) NOT NULL,
  `instansi` text DEFAULT NULL,
  `nama_pemilik` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `luas_lahan` int(11) DEFAULT NULL,
  `luas_bangunan` int(11) DEFAULT NULL,
  `bukti` int(11) DEFAULT NULL,
  `tanaman` int(11) DEFAULT NULL,
  `ganti_rugi` int(11) DEFAULT NULL,
  `belum_terbayar` int(11) DEFAULT NULL,
  `dasar` int(11) DEFAULT NULL,
  `keterangan` int(11) DEFAULT NULL,
  `iso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`) VALUES
(2, 'admin', '$2y$10$1vjThzoEMw6b0lB0ELl2bevjy6GBmwO3Aqx1updWH8Ll8/LylFi5e', 'super_admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dip4t`
--
ALTER TABLE `tb_dip4t`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indeks untuk tabel `tb_gantirugi`
--
ALTER TABLE `tb_gantirugi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dip4t`
--
ALTER TABLE `tb_dip4t`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_gantirugi`
--
ALTER TABLE `tb_gantirugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
