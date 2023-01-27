-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 11:55 AM
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
-- Database: `kenser`
--

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE `artis` (
  `id_artis` int(11) NOT NULL,
  `id_user_user` int(11) NOT NULL,
  `nama_artis` varchar(225) NOT NULL,
  `deskripsi_artis` text NOT NULL,
  `foto_artis` varchar(225) NOT NULL,
  `cp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id_artis`, `id_user_user`, `nama_artis`, `deskripsi_artis`, `foto_artis`, `cp`) VALUES
(17, 40, 'Iwan Fals', '<p>Masa kecil Iwan Fals atau yang biasa kita kenal sebagai Iwan dihabiskan di&nbsp;Bandung, kemudian di&nbsp;Jeddah,&nbsp;Arab Saudi, selama 8 bulan. Bakat musiknya makin terasah di usianya yang ke-13 tahun, saat Iwan banyak menghabiskan waktunya dengan mengamen di Bandung. Bermain&nbsp;gitar&nbsp;dilakukannya sejak masih muda atau belum tua bahkan ia mengamen untuk melatih kemampuannya bergitar dan mencipta lagu. Ketika di SMP, Iwan menjadi gitaris dalam paduan suara sekolah.</p>\r\n', '5de875382df2c.jpg', '081336750660'),
(18, 41, 'Noah', '<p><strong>NOAH</strong>, adalah sebuah grup musik pop rock dan rock alternatif Indonesia yang berasal dari Bandung, Jawa Barat. Grup musik ini dibentuk pada tahun 2000 dan terkenal berkat lagunya &quot;Mimpi Yang Sempurna&quot;</p>\r\n', '5de878a0a46d5.jpg', '081945920003'),
(21, 44, 'Fiersa Bersari', '<p>Bukankah hidup ini sebetulnya mudah? Jika rindu, datangi. Jika tidak senang, ungkapkan. Jika cemburu, tekankan. Jika lapar, makan. Jika mulas, buang air. Jika salah, betulkan. Jika suka, nyatakan. Jika sayang, tunjukkan. Manusianya yang sering kali mempersulit segala sesuatu. Ego mencegah seseorang mengucap &quot;Aku membutuhkanmu&quot;.</p>\r\n', '5de8be6a92cad.jpg', '08133675500');

-- --------------------------------------------------------

--
-- Table structure for table `bayar_tiket`
--

CREATE TABLE `bayar_tiket` (
  `id_bayar` int(11) NOT NULL,
  `id_chart` int(11) NOT NULL,
  `kode_tiket` varchar(256) NOT NULL,
  `bukti_transfer` varchar(256) NOT NULL,
  `proses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar_tiket`
--

INSERT INTO `bayar_tiket` (`id_bayar`, `id_chart`, `kode_tiket`, `bukti_transfer`, `proses`) VALUES
(11, 15, '5de8796c94d1e', '5de87996577d6.jpg', 5),
(12, 16, '5de8ac6fc3677', '5de8adc52473f.jpg', 5),
(13, 17, '5de8bf620074f', '5de8bf77be2b2.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_chart` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_tiket` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `proses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_chart`, `id_tiket`, `id_user`, `kode_tiket`, `qty`, `proses`) VALUES
(15, 8, 39, '5de8796c94d1e', 25, 5),
(16, 11, 39, '5de8ac6fc3677', 30, 5),
(17, 12, 39, '5de8bf620074f', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_artis_artis` int(11) NOT NULL,
  `nama_tiket` varchar(225) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `tanggal_tiket` date NOT NULL,
  `foto_tiket` varchar(225) NOT NULL,
  `deskripsi_tiket` varchar(225) NOT NULL,
  `nomor_telp` varchar(225) NOT NULL,
  `qty_tiket` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_artis_artis`, `nama_tiket`, `harga_tiket`, `tanggal_tiket`, `foto_tiket`, `deskripsi_tiket`, `nomor_telp`, `qty_tiket`, `lokasi`, `jam`) VALUES
(8, 40, 'Konser Eksklusif Karrya Semesta', 50000, '2019-12-06', '5de8768ff0e35.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of ty', '081336750660', 25, 'Stadion Wibawa Mukti, Cikarang, Kab. Bekasi', '23:00:00'),
(9, 40, 'Music special', 35000, '2019-12-06', '5de87e1027fa4.jpg', '<p>Iwan Fals Konser</p>\r\n', '0853728y31t3', 100, 'Universitas Negeri Malang, Graha Cakrawala', '04:40:00'),
(11, 43, 'Malang Festival 2', 45000, '2019-12-30', '5de8ac23b74f8.jpg', '<p>Bukankah hidup ini sebetulnya mudah? Jika rindu, datangi. Jika tidak senang, ungkapkan. Jika cemburu, tekankan. Jika lapar, makan. Jika mulas, buang air. Jika salah, betulkan. Jika suka, nyatakan. Jika sayang, tunjukkan.</', '081945920003', 70, 'Universitas Negeri Malang, Graha Cakrawala', '08:00:00'),
(12, 44, 'Malang Festival', 50000, '2020-05-30', '5de8bef0d4c1f.jpg', '<p>Bukankah hidup ini sebetulnya mudah? Jika rindu, datangi. Jika tidak senang, ungkapkan. Jika cemburu, tekankan. Jika lapar, makan. Jika mulas, buang air. Jika salah, betulkan. Jika suka, nyatakan. Jika sayang, tunjukkan. M', '081333334123', 47, 'Universitas Negeri Malang, Graha Cakrawala', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `Alamat` text NOT NULL,
  `Umur` int(11) NOT NULL,
  `Tempat_Lahir` varchar(225) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `level` int(11) NOT NULL,
  `active` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `Alamat`, `Umur`, `Tempat_Lahir`, `Tanggal_lahir`, `no_telp`, `foto`, `level`, `active`) VALUES
(30, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 17, 'admin', '2019-11-27', '081945920003', '', 2, 'active'),
(39, 'ferdy', 'f9af294304691d958534a8e06db9f19e', 'Pasuruan', 19, 'Pasuruan', '2019-12-01', '081945920001', '5de87374a76d1.png', 0, 'active'),
(40, 'iwanfals', 'e0fe2f6b54ccd324a9cb619869fa002a', 'Jakarta', 58, 'Jakarta', '1961-09-03', '081336750660', '5de875382df2c.jpg', 1, 'active'),
(41, 'noah', '40564e4dd4cd0fc21e980d8eb05d15ee', 'Bekasi', 7, 'Jakarta', '2012-10-30', '081945920003', '5de878a0a46d5.jpg', 1, 'active'),
(44, 'fiersabesari', '202cb962ac59075b964b07152d234b70', 'Malang', 20, 'Malang', '1998-05-30', '081945920003', '5de8be6a92cad.jpg', 1, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id_artis`);

--
-- Indexes for table `bayar_tiket`
--
ALTER TABLE `bayar_tiket`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_chart`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artis`
--
ALTER TABLE `artis`
  MODIFY `id_artis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bayar_tiket`
--
ALTER TABLE `bayar_tiket`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
