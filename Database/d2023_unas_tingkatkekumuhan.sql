-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2022 pada 09.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tingkatkekumuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id_detail` int(8) NOT NULL,
  `id_penilaian` varchar(15) NOT NULL,
  `id_kelurahan` varchar(15) NOT NULL,
  `nilai1` varchar(15) NOT NULL,
  `nilai2` varchar(15) NOT NULL,
  `nilai3` varchar(15) NOT NULL,
  `nilai4` varchar(15) NOT NULL,
  `nilai5` varchar(15) NOT NULL,
  `nilai6` varchar(15) NOT NULL,
  `nilai7` varchar(15) NOT NULL,
  `nilai8` varchar(15) NOT NULL,
  `nilai9` varchar(15) NOT NULL,
  `nilai10` varchar(15) NOT NULL,
  `nilai11` varchar(15) NOT NULL,
  `nilai12` varchar(15) NOT NULL,
  `nilai13` varchar(15) NOT NULL,
  `nilai14` varchar(15) NOT NULL,
  `nilai15` varchar(15) NOT NULL,
  `nilai16` varchar(15) NOT NULL,
  `nilai17` varchar(15) NOT NULL,
  `nilai18` varchar(15) NOT NULL,
  `nilai19` varchar(15) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail`
--

INSERT INTO `tb_detail` (`id_detail`, `id_penilaian`, `id_kelurahan`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `nilai15`, `nilai16`, `nilai17`, `nilai18`, `nilai19`, `catatan`) VALUES
(1, 'PNL2205001', 'KLR01', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '80', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(8) NOT NULL,
  `id_penilaian` varchar(15) NOT NULL,
  `id_kelurahan` varchar(15) NOT NULL,
  `bobot_1` varchar(15) NOT NULL,
  `hasil_1` varchar(15) NOT NULL,
  `rangking_1` varchar(15) NOT NULL,
  `rekapitulasi_1` varchar(15) NOT NULL,
  `keterangan_1` varchar(15) NOT NULL,
  `bobot_2` varchar(15) NOT NULL,
  `hasil_2` varchar(15) NOT NULL,
  `rangking_2` varchar(15) NOT NULL,
  `rekapitulasi_2` varchar(15) NOT NULL,
  `keterangan_2` varchar(15) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_penilaian`, `id_kelurahan`, `bobot_1`, `hasil_1`, `rangking_1`, `rekapitulasi_1`, `keterangan_1`, `bobot_2`, `hasil_2`, `rangking_2`, `rekapitulasi_2`, `keterangan_2`, `catatan`) VALUES
(1, 'PNL2205001', 'KLR01', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id_kelurahan` varchar(15) NOT NULL,
  `nama_kelurahan` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id_kelurahan`, `nama_kelurahan`, `deskripsi`) VALUES
('KLR01', 'Ciganjur', 'Ciganjur adalah kelurahan yang terletak di kecamatan Jagakarsa, Jakarta Selatan, Jakarta, Indonesia.[2] Ciganjur memiliki kode pos 12630. Kelurahan ini memiliki penduduk sebesar 515.325 jiwa (data sensus 2009) dan luas 156... km². Kantor Kelurahan Ciganjur terletak di Jl. Anda No IB dengan nomor telepon (021) 7866054. Kelurahan ini berbatasan dengan Cilandak di sebelah utara, Kebagusan/Ragunan di sebelah timur, Cinere di sebelah barat dan Depok di sebelah selatan.'),
('KLR02', 'Cipedak', 'Kelurahan Cipedak adalah sebuah kelurahan di kecamatan Jagakarsa, Jakarta Selatan.[1] Kelurahan ini memiliki kode pos 12630. Kelurahan ini merupakan hasil pemekaran dari Kelurahan Ciganjur. Kelurahan ini berdiri tahun 1992.'),
('KLR03', 'Jagakarsa', 'Kelurahan ini terletak di kecamatan Jagakarsa, Jakarta Selatan. Kelurahan ini berbatasan dengan Kecamatan Kebagusan di sebelah utara, kecamatan Cilandak di sebelah barat, Ciganjur di sebelah timur dan kota Depok, provinsi Jawa Barat di sebelah selatan.'),
('KLR04', 'Lenteng Agung', 'Lenteng Agung atau lebih dikenal dengan singkatan L.A. adalah kelurahan yang terletak di kecamatan Jagakarsa, Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia.\r\n\r\nKelurahan ini punya asal mula nama dari kata Klenteng yang diperkirakan terletak di dekat Kampus Institut Ilmu Sosial dan Ilmu Politik (IISIP) dan saat ini sudah tidak ada lagi sisa bangunannya. Kelurahan ini memiliki kode pos 12610 (wilayah timur) dan 12630 (wilayah barat).\r\n\r\nKantor kelurahan ini terletak di Jalan Agung Raya 1, yang bersebelahan dengan Fly Over Tapal Kuda Lenteng Agung yang baru selesai pengerjaannya Tahun 2021.'),
('KLR05', 'Srengseng Sawah', 'Srengseng Sawah adalah sebuah kelurahan di Kecamatan Jagakarsa, Jakarta Selatan. Dengan luas keseluruhan sekitar 675 hektare, Srengseng Sawah merupakan kelurahan yang terluas di Kecamatan Jagakarsa; yakni meliputi sekitar 27% area kecamatan tersebut.'),
('KLR06', 'Tanjung Barat', 'Tanjung Barat adalah sebuah kelurahan yang terletak di Jakarta. Kelurahan ini memiliki kode wilayah 31.74.09.1005 dan kode pos 12530.[1] Kelurahan ini terletak di kecamatan Jagakarsa, Jakarta Selatan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(15) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `level`, `email`, `telepon`, `username`, `password`, `status`, `keterangan`) VALUES
('PGN2204001', 'Andine', 'Administrator', 'andie@gmail.com', '0857687565', 'a', 'a', 'Aktif', '-'),
('PGN2204002', 'Indah', 'Staff Kecamatan', 'indah@gmail.com', '0857687565', 's', 's', 'Aktif', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` varchar(15) NOT NULL,
  `nama_penilaian` varchar(30) NOT NULL,
  `periode` varchar(35) NOT NULL,
  `id_pengguna` varchar(15) NOT NULL,
  `bobot1` varchar(15) NOT NULL,
  `bobot2` varchar(15) NOT NULL,
  `bobot3` varchar(15) NOT NULL,
  `bobot4` varchar(15) NOT NULL,
  `bobot5` varchar(15) NOT NULL,
  `bobot6` varchar(15) NOT NULL,
  `bobot7` varchar(15) NOT NULL,
  `bobot8` varchar(15) NOT NULL,
  `bobot9` varchar(15) NOT NULL,
  `bobot10` varchar(15) NOT NULL,
  `bobot11` varchar(15) NOT NULL,
  `bobot12` varchar(15) NOT NULL,
  `bobot13` varchar(15) NOT NULL,
  `bobot14` varchar(15) NOT NULL,
  `bobot15` varchar(15) NOT NULL,
  `bobot16` varchar(15) NOT NULL,
  `bobot17` varchar(15) NOT NULL,
  `bobot18` varchar(15) NOT NULL,
  `bobot19` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `nama_penilaian`, `periode`, `id_pengguna`, `bobot1`, `bobot2`, `bobot3`, `bobot4`, `bobot5`, `bobot6`, `bobot7`, `bobot8`, `bobot9`, `bobot10`, `bobot11`, `bobot12`, `bobot13`, `bobot14`, `bobot15`, `bobot16`, `bobot17`, `bobot18`, `bobot19`, `status`, `keterangan`) VALUES
('PNL2205001', 'Penilain 1', 'Mei 2022', 'PGN2204001', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', 'Proses', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id_detail` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
