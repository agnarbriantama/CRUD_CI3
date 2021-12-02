-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 05:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_mahasiswa` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_mahasiswa`, `name`, `nim`, `jenis_kelamin`, `alamat`, `gambar`) VALUES
('61951973e78c1', 'Agnar', 'V3920003', 'laki', 'jalan sini', ''),
('619519b030abe', 'Agnar', 'V3920003', 'laki', 'jalan', ''),
('619519dfa99e7', 'Agnar', 'V3920003', 'laki', 'jalan', ''),
('619e02bda8e67', 'Agnar', 'v3920003', 'laki', 'jl ayani', ''),
('619e02f705b39', '2', '3', 'w', 'sw', '');

-- --------------------------------------------------------

--
-- Table structure for table `kuliah`
--

CREATE TABLE `kuliah` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `sks` varchar(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliah`
--

INSERT INTO `kuliah` (`id_mahasiswa`, `nama_mahasiswa`, `prodi`, `sks`, `nim`, `email`, `password`, `tanggal_lahir`, `jenis_kelamin`, `deskripsi`, `gambar`) VALUES
(51, 'Intan Naumi', 'Teknologi Hasil Pertanian', '\"22,24\"', 'V3920028', 'briansurya25@gmail.com', '123', '2021-12-15', 'Perempuan', '<p>membolos</p>\r\n', 'girl3.png'),
(52, 'Agnar', 'Teknik Informatika', '\"22,24\"', 'weqeq', 'briansurya25@gmail.com', 'qeqe', '2021-12-13', 'Perempuan', '<p>eqeqe</p>\r\n', '296-2963042_hitler-freetoedit-adolf-hitler-meme-face-hd-png3.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `product_price` varchar(30) CHARACTER SET latin1 NOT NULL,
  `product_image` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 1, 'Dr. Martens 1461 brown smooth', '50000', 'sepatu.jpeg'),
(2, 2, 'Billionaire Project', '150000', 'kaos.jpeg'),
(3, 3, 'Tas Kanken', '75000', 'tas.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliah`
--
ALTER TABLE `kuliah`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
