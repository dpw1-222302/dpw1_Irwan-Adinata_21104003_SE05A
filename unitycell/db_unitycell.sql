-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 20.05
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_unitycell`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(15) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Admin Irwan', 'admin', '4798b5c809ce52614987869d28b34b14', '+6285156895256', 'unitycell@gmail.com', 'Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(1, 'Handphone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(5, 1, 'Redmi Note 8', 2500000, '<p>OS&nbsp;&nbsp; &nbsp;Android 9.0 (Pie), upgradable to Android 11, MIUI 12.5<br />\r\nChipset&nbsp;&nbsp; &nbsp;Qualcomm SDM665 Snapdragon 665 (11 nm)<br />\r\nCPU&nbsp;&nbsp; &nbsp;Octa-core (4x2.0 GHz Kryo 260 Gold &amp; 4x1.8 GHz Kryo 260 Silver)<br />\r\nGPU&nbsp;&nbsp; &nbsp;Adreno 610<br />\r\nMEMORY&nbsp;&nbsp; &nbsp;Card slot&nbsp;&nbsp; &nbsp;microSDXC (dedicated slot)<br />\r\nInternal&nbsp;&nbsp; &nbsp;32GB 3GB RAM, 64GB 4GB RAM, 64GB 6GB RAM, 128GB 4GB RAM, 128GB 6GB RAM eMMC 5.1<br />\r\nColor Black</p>\r\n', 'produk1690135145.png', 1, '2023-07-23 17:59:05'),
(6, 1, 'Redmi 10', 2399000, '<p>OS&nbsp;&nbsp; &nbsp;Android 11, MIUI 12.5<br />\r\nChipset&nbsp;&nbsp; &nbsp;Mediatek Helio G88 (12nm)<br />\r\nCPU&nbsp;&nbsp; &nbsp;Octa-core (2x2.0 GHz Cortex-A75 &amp; 6x1.8 GHz Cortex-A55)<br />\r\nGPU&nbsp;&nbsp; &nbsp;Mali-G52 MC2<br />\r\nMEMORY&nbsp;&nbsp; &nbsp;Card slot&nbsp;&nbsp; &nbsp;microSDXC (dedicated slot)<br />\r\nInternal&nbsp;&nbsp; &nbsp;64GB 4GB RAM</p>\r\n', 'produk1690135188.png', 1, '2023-07-23 17:59:48'),
(7, 1, 'Redmi 12', 2699000, '<p>OS&nbsp;&nbsp; &nbsp;Android 12, MIUI 13<br />\r\nChipset&nbsp;&nbsp; &nbsp;Qualcomm SM4375 Snapdragon 4 Gen 1 (6 nm)<br />\r\nCPU&nbsp;&nbsp; &nbsp;Octa-core (2x2.0 GHz Cortex-A78 &amp; 6x1.8 GHz Cortex-A55)<br />\r\nGPU&nbsp;&nbsp; &nbsp;Adreno 619<br />\r\nSlot kartu&nbsp;&nbsp; &nbsp;TIDAK<br />\r\nIntern&nbsp;&nbsp; &nbsp;RAM 128GB 4GB</p>\r\n', 'produk1690135242.png', 1, '2023-07-23 18:00:42'),
(8, 1, 'Xiaomi 12T 5G', 3499000, '<p>OS&nbsp;&nbsp; &nbsp;Android 12, MIUI 13<br />\r\nChipset&nbsp;&nbsp; &nbsp;Mediatek Dimensity 8100-Ultra<br />\r\nCPU&nbsp;&nbsp; &nbsp;Octa-core (4x2.85 GHz Cortex-A78 &amp; 4x2.0 GHz Cortex-A55)<br />\r\nGPU&nbsp;&nbsp; &nbsp;Mali-G610 MC6<br />\r\nMEMORY&nbsp;&nbsp; &nbsp;Card slot&nbsp;&nbsp; &nbsp;No<br />\r\nInternal 128GB 8GB RAM</p>\r\n', 'produk1690135297.png', 1, '2023-07-23 18:01:37'),
(9, 2, 'Acer Swift 3', 9450000, '<p>Processor: Intel Core i7-8565U quad-core 1,8GHz TurboBoost 4,6GHz<br />\r\nMemory&nbsp;&nbsp; &nbsp;: RAM 8GB LPDDR3 2133MHz<br />\r\nOperating System: Microsoft Windows 10 Home x64<br />\r\nDisplay&nbsp;&nbsp; &nbsp;: Layar IPS LCD dengan LED backlight 14 inci Full HD 1920 x 1080<br />\r\nGraphic&nbsp;&nbsp; &nbsp;: Intel UHD Graphics 620 dan Nvidia GeForce MX250 VRAM 2GB GDDR5<br />\r\nStorage&nbsp;&nbsp; &nbsp;: SSD 256GB atau 512GB PCIe NVMe</p>\r\n', 'produk1690135344.png', 1, '2023-07-23 18:02:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
