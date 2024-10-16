-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2024 pada 14.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-dbdi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_irigasi`
--

CREATE TABLE `db_irigasi` (
  `id_irigasi` int(11) NOT NULL,
  `nama_irigasi` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `kec` varchar(255) DEFAULT NULL,
  `baku` varchar(255) DEFAULT NULL,
  `fungsional` varchar(255) NOT NULL,
  `potensial` varchar(255) NOT NULL,
  `primer` varchar(255) NOT NULL,
  `sekunder` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `status_irigasi` text DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_irigasi`
--

INSERT INTO `db_irigasi` (`id_irigasi`, `nama_irigasi`, `desa`, `kec`, `baku`, `fungsional`, `potensial`, `primer`, `sekunder`, `total`, `lat`, `lng`, `status_irigasi`, `foto`) VALUES
(3, 'DI Dawuhan Bg', 'Bandungan', 'Bandungan', '12', '', '', '', '', '', '-7.22760200000', '110.37939800000', 'DI Sesuai Permen PUPR No. 14/2015', 'Garuda.png'),
(6, 'DI Ngancar J', 'Brongkol', 'Jambu', '45', '45', '', '', '1,35', '1,35', '-7.29350900000', '110.36814700000', 'DI Sesuai Permen PUPR No. 14/2015', 'BG_Kaca_Pecah.jpg'),
(10, 'DI Munding', 'Jatirunggo', 'Pringapus', '-', '7', '-', '-', '1,5', '1,5', '-7.198660107299006', '110.48848298716513', 'Ya', 'SKZ.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Bidang SDA', 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_irigasi`
--
ALTER TABLE `db_irigasi`
  ADD PRIMARY KEY (`id_irigasi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_irigasi`
--
ALTER TABLE `db_irigasi`
  MODIFY `id_irigasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
