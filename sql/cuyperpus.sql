-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 04:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuyperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `gambar`, `penulis`, `penerbit`, `tahun_terbit`, `title`, `url`) VALUES
(1, 'Digital System', 'assets/Screenshot 2024-09-15 1934501.png', 'Ronald J. Tocci', 'Upper Saddle River, New Jersey', 2007, '', 'books/dsi.html'),
(2, 'ICT', 'assets/Screenshot 2024-09-21 16433211.png', 'Abdul Wahab Syahranie', 'Abdul Wahab Syahranie', 2023, '', 'books/ict.html'),
(3, 'RPS Islam', 'assets/Screenshot 2024-09-21 1650433.png', 'Hamdani, M.Pd', 'Hamdani, M.Pd', 2023, '', 'books/rps.html'),
(4, '40 Hadits Nabi', 'assets/Screenshot 2024-09-21 171119.png', 'Hamdani, M.Pd', 'Hamdani, M.Pd', 2023, '', 'books/40 hadits nabi.html'),
(5, 'Jaringan Komputer', 'assets/Screenshot 2024-09-15 193729.png', 'Universitas AMIKOM Yogyakarta', 'Universitas AMIKOM Yogyakarta', 2018, '', 'books/jarkom.html'),
(6, 'Sistem Basis Data', 'assets/Screenshot 2024-09-15 193555.png', 'Putri Ariatna Alia, S.ST, M.T.', 'PT Penamudamedia', 2023, '', 'books/bsd.html'),
(7, 'Bahasa Pemrograman C++', 'assets/Screenshot 2024-09-21 170642.png', 'Suprapto', 'Departemen Pendidikan Nasional', 2008, '', 'books/cpp.html'),
(8, 'Teknologi Jaringan Komputer', 'assets/Screenshot 2024-09-21 170919.png', 'Yang Angita Rindri', 'POLMAN BABEL', 2022, '', 'books/tkj.html'),
(9, 'Pemrograman Web', 'assets/Screenshot 2024-09-21 175828.png', 'Tonni Limbong Sriadhi', 'Yayasan Kita Menulis', 2021, '', 'books/buku web.html'),
(10, 'Perkembangan Jaringan Komputer', 'assets/Screenshot 2024-09-21 180030.png', 'Tarmin Abdul Ghani, S.T, M.T', 'ZAHIR Publishing', 2020, '', 'books/pjk.html'),
(11, 'Dasar Pemrograman Python', 'assets/Screenshot 2024-09-21 180135.png', 'Noval Agung', 'Noval Agung', 2020, '', 'books/python.html'),
(12, 'Pemrograman Beriorientasi Objek', 'assets/pngwing.com_.png', 'JENI', 'JENI', 2020, '', 'books/pbo.html'),
(13, 'Jagoan Arduino', 'assets/Screenshot 2024-09-21 182120.png', 'Zamisyak Oby', 'IndoBot', 2018, '', 'books/arduino.html'),
(14, 'Sistem Administrasi Jaringan Linux', 'assets/Screenshot 2024-09-21 183554.png', 'Jumadi M. Parenreng', 'Jumadi M. Parenreng', 2019, '', 'books/linux.html'),
(15, 'Matlab', 'assets/b77d7798-efcd-4482-b6f1-067f6fb39cc4.png', 'Universitas Muhammadiyah Purwokerto', 'Universitas Muhammadiyah Purwokerto', 2019, '', 'books/matlab.html'),
(16, 'Pemrograman Dasar PHP', 'assets/Screenshot 2024-09-21 182331.png', 'Eko Siswanto, S.Kom., M.kom', 'Agung Prima Teknik', 2021, '', 'books/mphp.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
