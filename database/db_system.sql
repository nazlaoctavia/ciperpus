-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 06:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `id_kategoribuku` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `id_koleksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `buku_id` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(5) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `buku_id`, `sampul`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `kategori`, `deskripsi`) VALUES
(9, 'A001', '11709344704Array.jpg', 'Bumi', '2014', 'Tere liye', 'Darwi', 'Novel / Komik', 'Bumi adalah sebuah novel karya Tere Liye. Novel ini merupakan buku pertama dari serial Bumi atau Dunia Paralel.'),
(10, 'A002', '11709344745Array.jpg', 'Selena', '2020', 'Tere liye', 'Darwi', 'Novel / Komik', 'Selena adalah sebuah novel karya Tere Liye, novel ini adalah buku kedelapan dari seri Bumi/serial Dunia Paralel.'),
(11, 'A003', '11709344770Array.jpg', 'Matahari', '2016', 'Tere liye', 'Darwi', 'Novel / Komik', 'Matahari adalah sebuah novel karya Tere Liye, novel ini adalah buku ketiga dari seri Bumi atau serial Dunia Paralel.'),
(12, 'A004', '11709145965Array.jpg', 'Komet', 'Tere liye', 'Darwis', '2018', '0', 'Komet adalah buku keenam dalam serial novel Bumi karya Tere Liye.'),
(13, 'A005', '11709146040Array.jpg', 'Komet Minor', 'Tere liye', 'Darwis', '2019', '0', 'Komet Minor adalah sebuah novel karya Tere Liye, novel ini adalah buku ketujuh dari seri Bumi\'/serial Dunia Paralel. '),
(14, 'A006', '11709146162Array.jpg', 'Bintang', 'Tere liye', 'Darwis', '2017', '0', 'Bintang adalah sebuah novel karya Tere Liye, novel ini adalah buku keempat dari seri Bumi/serial Dunia Paralel.'),
(15, 'A007', '11709146213Array.jpg', 'Ceros dan Batozar', 'Tere liye', 'Darwis', '2018', '0', 'Ceros dan Batozar adalah buku ke 4 1/2 dalam serial novel Bumi karya Tere Liye.'),
(16, 'A008', '11709146319Array.jpg', 'Nebula', 'Tere liye', 'Darwis', '2019', '0', 'Buku ke-7 Petualangan Raib, Ali dan Seli.Buku ini lanjutan dari SELENA. '),
(17, 'A009', '11709146394Array.jpg', 'Lumpu', 'Tere liye', 'Darwis', '2020', '0', 'Buku ke-11 dari serial petualangan Ali, Raib & SeliApakah Ali, Raib dan Seli bisa mengalahkan LUMPU?'),
(18, 'A012', '11709354432Array.jpeg', 'galaksi', '2029', 'Tere ', 'Aku', 'Novel / Komik', 'tere');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategoribuku`
--

CREATE TABLE `tb_kategoribuku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategoribuku`
--

INSERT INTO `tb_kategoribuku` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Novel / Komik'),
(6, 'Romance'),
(7, 'Misteri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `buku` varchar(255) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `username`, `buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status`) VALUES
(58, 'Nazla Octa', 'Matahari', '2024-03-20', '2024-03-22', 'Dikembalikan'),
(59, 'Udin', 'Bumi', '2024-03-01', '2024-03-03', 'Dikembalikan'),
(60, 'urora', 'Matahari', '2024-03-03', '2024-03-05', 'Dikembalikan'),
(61, 'urora', 'Matahari', '2024-03-09', '2024-03-04', 'Dikembalikan'),
(62, 'udin', 'Bumi', '2024-03-02', '2024-03-04', 'Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `tb_ulasan`
--
DELIMITER $$
CREATE TRIGGER `editulsan` BEFORE UPDATE ON `tb_ulasan` FOR EACH ROW UPDATE ulasan SET ulasan = ulasan - old.ulasan + new.ulasan
WHERE id_user = old.id_user
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ulasan` AFTER INSERT ON `tb_ulasan` FOR EACH ROW UPDATE ulasan SET ulasan = ulasan + new
WHERE id_user = new.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user','petugas') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `onofff` enum('aktif','tidak aktif') NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `email`, `level`, `foto`, `nama`, `alamat`, `jk`, `onofff`, `status`) VALUES
(61, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 'admin', '', 'Nazla Octa', 'Bogor', 'Perempuan', 'aktif', ''),
(62, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas@gmail.com', 'petugas', '', 'Andi Iwal', 'Sukabumi', 'Laki-laki', 'aktif', ''),
(77, 'urora', '202cb962ac59075b964b07152d234b70', 'aurora@gmail.com', 'user', '', 'Aulia lailana', 'Sukabumi', 'Perempuan', 'aktif', '0'),
(78, 'udin', '202cb962ac59075b964b07152d234b70', 'manager@example.com', 'petugas', '', 'Udin', 'Sukabumi', 'Laki-laki', 'aktif', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`id_kategoribuku`),
  ADD KEY `relasibukukat` (`id_buku`),
  ADD KEY `relasikat` (`id_kategori`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`id_koleksi`),
  ADD KEY `userkoleksi` (`id_user`),
  ADD KEY `bukukoleksi` (`id_buku`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kategoribuku`
--
ALTER TABLE `tb_kategoribuku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `ulasan` (`id_user`),
  ADD KEY `ulasanbuku` (`id_buku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `id_kategoribuku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_kategoribuku`
--
ALTER TABLE `tb_kategoribuku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `relasibukukat` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasikat` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategoribuku` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `bukukoleksi` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userkoleksi` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD CONSTRAINT `ulasan` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasanbuku` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
