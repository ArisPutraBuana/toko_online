-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2020 pada 09.21
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_framework_toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(70) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(16, 'Handphone', 'Xiaomi Redmi MI A', 'Elektronik', 3400000, 12, 'elektronik1.jpg'),
(17, 'Laptop', 'Lenovo IP IDEAPAD 330-151KBR ', 'Elektronik', 6200000, 9, 'elektronik3.jpg'),
(18, 'Kamera', 'Cognos C24 Mirroles', 'Elektronik', 650000, 11, 'elektronik2.jpg'),
(19, 'Televisi', 'TV COCAA LED 32 INC', 'Elektronik', 4700000, 15, 'elektronik4.jpg'),
(20, 'Jam Tangan', 'Swiss Army', 'Pakaian Pria', 400000, 21, 'pria4.jpg'),
(21, 'Kaca Mata', 'Sporty terbaru', 'Pakaian Pria', 320000, 45, 'pria3.jpg'),
(22, 'Baju kaos', 'Baju korea', 'Pakaian Pria', 210000, 75, 'pria2.jpg'),
(23, 'Celana Jean', 'Original', 'Pakaian Pria', 300000, 49, 'pria5.jpg'),
(24, 'Kemeja', 'Original', 'Pakaian Pria', 2000000, 83, 'pria6.jpg'),
(25, 'Kaos Lengan Panjang', 'Original & murah', 'Pakaian Pria', 650000, 123, 'pria7.jpg'),
(26, 'Celana Outdoor', 'Hiking TNF Panjang', 'Pakaian Pria', 150000, 43, 'pria8.jpg'),
(27, 'Sepatu Pria', 'Sneakers All Star', 'Pakaian Pria', 90000, 112, 'pria14.jpg'),
(28, 'Tas Wanita', 'Zahra Tas', 'Pakaian Wanita', 350000, 43, 'wanita7.jpg'),
(29, 'Sepatu', 'Highless', 'Pakaian Wanita', 500000, 73, 'wanita8.png'),
(30, 'Sepatu Wanita', 'Highless Original', 'Pakaian Wanita', 430000, 12, 'wanita5.jpg'),
(31, 'Kaon Anak', 'Original & murah', 'Pakaian Anak-anak', 60000, 70, 'anak6.jpg'),
(32, 'Tas Anak', 'Original & murah', 'Pakaian Anak-anak', 75000, 42, 'anak8.jpg'),
(33, 'Sweeter Anak', 'Original & murah', 'Pakaian Anak-anak', 650000, 24, 'anak7.jpg'),
(34, 'Koper Anak', 'Original & murah', 'Pakaian Anak-anak', 300000, 25, 'anak1.jpg'),
(35, 'Hijab', 'Elegan, Original & murah', 'Pakaian Wanita', 170000, 34, 'wanita4.jpg'),
(36, 'Raket Badminton', 'Original & murah', 'Peralatan Olaraga', 500000, 40, 'peralatan_olaraga2.jpg'),
(37, 'Sepeda Olaraga', 'Original & murah', 'Peralatan Olaraga', 350000, 32000, 'peralatan_olaraga8.jpg'),
(38, 'Tas Olaraga', 'Original & murah', 'Peralatan Olaraga', 320000, 40, 'peralatan_olaraga5.jpg'),
(39, 'Karpet Matras Olaraga', 'Original & murah', 'Peralatan Olaraga', 400000, 23, 'peralatan_olaraga6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(7, 'Aris Putra Buana', 'Jatiuwung', '2020-02-20 14:36:07', '2020-02-21 14:36:07'),
(8, 'Meyka Setyawati', 'Surabaya', '2020-02-20 14:39:44', '2020-02-21 14:39:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(60) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(8, 7, 12, 'Laptop', 1, 4600000, ''),
(9, 7, 10, 'Kamera', 1, 760000, ''),
(10, 8, 10, 'Kamera', 1, 760000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
     UPDATE tb_barang SET stok = stok-NEW.jumlah
       WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(160) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(4, 'Aris', 'user', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
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
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
