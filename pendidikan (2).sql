-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 07:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id_ekstrakulikuler` int(10) NOT NULL,
  `nama_ekstrakulikuler` varchar(10) NOT NULL,
  `jadwal_ekstrakulikuler` varchar(30) NOT NULL,
  `pembimbing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id_ekstrakulikuler`, `nama_ekstrakulikuler`, `jadwal_ekstrakulikuler`, `pembimbing`) VALUES
(111, 'basket', 'senin', 'pak arga'),
(222, 'ambalan', 'rabu', 'kak acho '),
(333, 'paskibraka', 'selasa dan kamis', 'pak manda'),
(444, 'futsal', 'sabtu', 'pak arga'),
(555, 'silat', 'senin', 'bu chintia'),
(666, 'tari', 'rabu', 'kak arya'),
(668, 'Renang', 'Akhir taun', 'saya sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(15) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama`, `jumlah`, `keterangan`) VALUES
(1, 'kelas', '23', 'setiap angkatan memiliki masing-masing 8 kelas'),
(2, 'lapangan', '2', 'lapangan basket, lapangan futsal, lapangan voly '),
(3, 'SMC', '1', 'ruangan ini digunakan sebagai podcast dan bermain alat musik'),
(4, 'fiber optik', '1', 'ruangan ini menyimpan server dan perangkat jaringan, Telekomunikasi, Broadcasting'),
(5, 'kantin', '1', 'Tempat membeli makanan bagi siswa-siswi SMK Telkom Sidoarjo'),
(6, 'aula', '3', 'Ruangin ini digunakan untuk ibadah islam dan tempat sosialisasi'),
(7, 'Kelas', '10', 'Ruang kelas yang nyaman untuk belajar'),
(8, 'Lapangan', '1', 'Lapangan olahraga untuk berbagai kegiatan'),
(9, 'SMC', '1', 'Sarana Media Center untuk presentasi dan diskusi'),
(10, 'Fiber Optik', '1', 'Koneksi internet cepat menggunakan fiber optic'),
(11, 'Kantin', '1', 'Tempat untuk membeli makanan dan minuman'),
(12, 'Aula', '1', 'Tempat untuk pertemuan dan acara sekolah'),
(13, 'kelas', '23', 'setiap angkatan memiliki masing-masing 8 kelas'),
(14, 'lapangan', '2', 'lapangan basket, lapangan futsal, lapangan voly'),
(15, 'SMC', '1', 'ruangan ini digunakan sebagai podcast dan bermain alat musik'),
(16, 'fiber optik', '1', 'ruangan ini menyimpan server dan perangkat jaringan, Telekomunikasi, Broadcasting'),
(17, 'kantin', '1', 'Tempat membeli makanan bagi siswa-siswi SMK Telkom Sidoarjo'),
(18, 'aula', '3', 'Ruangin ini digunakan untuk ibadah islam dan tempat sosialisasi');

-- --------------------------------------------------------

--
-- Table structure for table `loopguru`
--

CREATE TABLE `loopguru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loopguru`
--

INSERT INTO `loopguru` (`id`, `nama`, `jabatan`, `img`) VALUES
(1, 'Abror S.hum M.pd', 'Kepala SMK Telkom malang', 'pak abror.jpg'),
(2, 'Maulana Al-ghofiqi', 'Wakil Kepala Sekolah Bidang Kesiswaan', 'pak maul.png'),
(3, 'Ahmad Rifai', 'Wakil Kepala Sekolah Bidang Laborarium, IT dan Sarpra', 'Pak Pai.png'),
(4, 'Siti Sifaun Nadhiroh', 'Wakil Kepala Sekolah Bidang Kurikulum', 'bu faun.jpg'),
(5, 'Sigit Eka Prayoga', 'Kepala Administrasi', 'pak sigit.png'),
(6, 'Muhammad Adi Riswanto', 'Guru Produktif TJAT', 'pak adi.png'),
(7, 'Novra Edi Pratama', 'Guru Produktif TJAT', 'pak novra.png'),
(8, 'Indra Hadi Pranata', 'Guru Produktif Informatika', 'pak indra.png'),
(9, 'David Wahyu Pratomo', 'Guru Produktif Siskomjar', 'pak david.png'),
(10, 'Mirza Arie Andini', 'Guru Produktif Dasprog', 'bu mirza.png'),
(11, 'Eliza Tyas Damayanti', 'Guru Produktif UI/UX', 'bu eliza.png'),
(12, 'Rizka Sasmita Rahayu', 'Guru Produktif Database', 'bu rizka.png');

-- --------------------------------------------------------

--
-- Table structure for table `loopjurusan`
--

CREATE TABLE `loopjurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `img` blob NOT NULL,
  `masa_study` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loopjurusan`
--

INSERT INTO `loopjurusan` (`id`, `nama`, `img`, `masa_study`) VALUES
(1, 'SISTEM INFORMASI JARINGAN APLIKASI', 0x73696a612e706e67, '4 TAHUN'),
(2, 'TEKNIK JARINGAN AKSES TELEKOMUNIKASI', 0x746a61742e706e67, '3 TAHUN'),
(4, 'tilek', '', '123'),
(5, 'anjay', 0x68747470733a2f2f656e637279707465642d74626e302e677374617469632e636f6d2f696d616765733f713d74626e3a414e643947635159726b4e3161774d67545f5670776b51786772376654344c776c61736a3647656363744646614930707243306b78334e6d3038744b38574b55797362626c58446d63325126757371703d434155, '34'),
(6, 'Informatika', 0x576869746520616e642047726579204d6f6465726e20466c617420427573696e657373204d6f64656c2043616e76617320427261696e73746f726d202832292e706e67, '122'),
(7, 'DKF', 0x75706c6f6164732f494d472d32303234303332312d5741303035362e6a7067, '9999999');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telepon` int(20) NOT NULL,
  `tanggal_lahir` int(50) NOT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `guru_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `user_id`, `nama`, `email`, `alamat`, `telepon`, `tanggal_lahir`, `jurusan_id`, `guru_id`) VALUES
(1, NULL, 'abiyu', 'abiyu@gmail.com', 'pondok jati', 0, 100, NULL, NULL),
(2, NULL, 'cinta', 'cinta@gmial.com', '81221247', 0, 5, NULL, NULL),
(3, NULL, 'miw', 'miw@gmail.com', '81221263', 0, 0, NULL, NULL),
(4, NULL, 'cece', 'cece@gmail.com', '81245632', 0, 5, NULL, NULL),
(5, NULL, 'islam', 'islam@gmail.com', '81463871', 0, 0, NULL, NULL),
(6, NULL, 'hamzah rafi', 'hamzah@gmail.com', '8412341', 0, 10000, NULL, NULL),
(7, NULL, 'larissa', 'larissa@gmail.com', '898989', 0, 5000, NULL, NULL),
(8, NULL, 'hamzah raffi', 'jaja@gmail.com', '0', 0, 2024, NULL, NULL),
(9, NULL, 'hamzah raffi', 'jaja@gmail.com', '0', 123456789, 2024, NULL, NULL),
(11, NULL, 'tilek', 'tilek@gmail.com', 'sepanjang jalan', 97163378, 2024, NULL, NULL),
(12, NULL, 'jaham', 'aku@gmail.com', 'nala', 1234, 2024, NULL, NULL),
(13, NULL, 'aku', 'aku@gmail.com', 'nalal', 0, 2024, NULL, NULL),
(14, NULL, 'la', 'anda@gmail.com', 'bungrusaih', 0, 2024, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(5) NOT NULL,
  `level` varchar(5) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `email`) VALUES
(101, 'levina', 'levina', 'user', 'admin', 'levinacintamy@gmail.'),
(202, 'hazem', 'hazem', 'user', 'user', 'hazem@gmail.com'),
(303, 'levlev', 'levlev', 'admin', 'admin', 'lelev@gmail.com'),
(404, 'levana', 'levana', 'admin', 'admin', 'levana@gmail.com'),
(505, 'marcelina', 'marcellina', 'user', 'user', 'ceces@gmail.com'),
(606, 'cintania', 'cintania', 'admin', 'admin', 'cintania@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id_ekstrakulikuler`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `loopguru`
--
ALTER TABLE `loopguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loopjurusan`
--
ALTER TABLE `loopjurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_siswa_user` (`user_id`),
  ADD KEY `fk_siswa_jurusan` (`jurusan_id`),
  ADD KEY `fk_siswa_guru` (`guru_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id_ekstrakulikuler` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=669;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `loopguru`
--
ALTER TABLE `loopguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loopjurusan`
--
ALTER TABLE `loopjurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=610;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_guru` FOREIGN KEY (`guru_id`) REFERENCES `loopguru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa_jurusan` FOREIGN KEY (`jurusan_id`) REFERENCES `loopjurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
