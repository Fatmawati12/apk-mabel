-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2018 at 06:03 AM
-- Server version: 10.0.36-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.1.23-4+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(13) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `id_kategori`, `isi`, `images`) VALUES
(1, 'Alamari Kaca', 5, 'Almari ini didesain sebaik mungkin ada 4 pintu kaca, dibagian lemari diberi ukiran sederhana, ada 4 laci, dan ada 4 pintu juga.', 'images_Alamari_Kaca_1542085658.jpg'),
(2, 'Meja Rias', 10, 'Meja Rias Minimalis ini kami desain dengan semenarik mungkin, meja rias ini di bagian mejanya terdapat 3 sisi yang diberi kaca dan di meja juga ada ukiran sedikit. Meja itu juga ada kursi tanpa sandaran diberi busa + ada ukiran juga seperti dimeja.', 'images_Meja_Rias_1542085145.jpg'),
(3, 'Meja Makan', 4, 'Meja Makan  Minimalis Modern ini mempunyai desain mebel minimalis, furniture minimalis, meja makan  minimalis dengan adanya untuk sandaran. Meja Makan tersebut terdiri dari 4 kursi dan 1 meja. Cocok untuk semua ruangan dan bahannya itu sangat bagus.\r\n', 'images_Meja_Makan_1542085864.jpg'),
(4, 'Pintu Minimalis', 8, 'Pintu minimalis ini kami desain sekaligus dengan adanya satu pintu besar yang bagian atas ada kacanya dan disampingnya ada jendela kaca. ', 'images_Pintu_Minimalis_1542085501.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `images` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `harga_barang` int(12) NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `images`, `isi`, `harga_barang`, `jumlah_barang`, `id_kategori`) VALUES
(9, 'Meja Restaurant', 'images_Meja_Restaurant_1542114047.jpg', 'Meja ini satu set dengan 1 meja dan 4 kursi, kursinya didesain dengan adanya jok bantalan yang empuk agar nyaman diduduki, finishing warnanya dibuat menarik.\r\nHarga Rp 850.000', 850000, 22, 7),
(10, 'Pintu Minimalis', 'images_Pintu_Minimalis_1542113509.png', 'Pintu ini dibuat dengan bahan yang berkualitas, pintu minimalis ini kami desain sekaligus dengan adanya satu pintu besar yang bagian atas ada kacanya dan disampingnya ada jendela kaca.\r\nHarganya Rp 600.000', 600000, 12, 8),
(11, 'Meja Belajar', 'images_Meja_Belajar_1542113170.jpg', 'Meja belajar ini didesain unik, desainnya di atas meja kanan dan kiri ada laci bisa untuk menyimpan buku agar rapi dan dibagian bawah kita juga beri laci yang cukup lebih besar dari laci yang diatas. itu menggunakan bahan yang kualitas baik, dan kami modifikasikan dengan aluminum untuk kaki mejanya dan kursinya juga dengan aluminium. Harganya Rp 1.050.000', 1050000, 8, 9),
(18, 'Ranjang Unik', 'images_Ranjang_Unik_1542115012.jpg', 'Ranjang ini kaami desain unik beda dengan yang lain, yaitu ranjang ini tingkat. Untuk naik ke ranjang atas kami buat seperti tangga, tapi tangga tersebut juga dapat berfungsi sebagai laci unrtuk penyimpanan, dan di ranjang bagian bawah juga terdapat ruang untuk menyimpan barang. Bahannya sangat berkualitas dan warna bisa disesuaikan pembeli. Harga Rp 1.500.000', 1500000, 8, 6),
(19, 'Meja Makan', 'images_Meja_Makan_1542115828.jpg', 'Meja makan yang desainnya sederhana ini terdiri dari 4 kursi dan 1 meja memanjang dengan warna finishing yang klasik (dapat disesuaikan pemesan). Bahan untuk membuat mejanya dari kayu jati. Harganya Rp 800.000', 800000, 10, 4),
(20, 'Meja Rias Minimalis', 'images_Meja_Rias_Minimalis_1542116115.jpg', 'Meja rias minimalis ini didesain seunik mungkin dengan 1 kaca berukuran persegi, di bagian kanan dan kiri ada pintu seperti almari dan ditengahnya ada 3 laci, dan di bagian bawah ada 2 laci. Dan bahannya sangat berkualitas yaitu dari kayu jati, finishing warna bisa disesuaikan dengan yang memesan. Harga Rp 755.000', 755000, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `judul_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `judul_kategori`) VALUES
(4, 'Meja Makan'),
(5, 'Almari'),
(6, 'Ranjang Tidur'),
(7, 'Meja Restoran'),
(8, 'Pintu'),
(9, 'Meja Belajar'),
(10, 'Meja Rias');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `images`) VALUES
(1, 'images_image_1542149028.jpg'),
(4, 'images_image_1542149733.jpg'),
(5, 'images_image_1542149757.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(5) NOT NULL DEFAULT '',
  `nama` varchar(60) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
('1', 'ika', 'ika', '7965c82127bd8517d2495e8efb12702c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
