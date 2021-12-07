-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 03:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_gopher`
--
CREATE DATABASE IF NOT EXISTS `web_gopher` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `web_gopher`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `npm` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`npm`, `nama`) VALUES
('140810200053', 'Calvin C Montolalu'),
('140810211111', 'Admin Web Gopher');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `npm` char(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`npm`, `password`) VALUES
('140810200001', '140810200001'),
('140810200002', '140810200002'),
('140810200003', '140810200003'),
('140810200004', '140810200004'),
('140810200005', '140810200005'),
('140810200006', '140810200006'),
('140810200007', '140810200007'),
('140810200008', '140810200008'),
('140810200009', '140810200009'),
('140810200010', '140810200010'),
('140810200011', '140810200011'),
('140810200033', '140810200033'),
('140810200034', '140810200034'),
('140810200035', '140810200035'),
('140810200036', '140810200036'),
('140810200053', '140810200053'),
('140810200059', '140810200059');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `npm` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `npm` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelas` char(1) NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`npm`, `nama`, `tgl_lahir`, `kelas`, `kontak`, `alamat`, `foto`) VALUES
('140810200001', 'Ariq Hakim Ruswadi', '0000-00-00', '', '', '', ''),
('140810200002', 'Rommel Malik Kusnadi', '0000-00-00', '', '', '', ''),
('140810200003', 'Affan Rifqy Kurniadi', '0000-00-00', '', '', '', ''),
('140810200004', 'Aulia Rahmanita', '0000-00-00', '', '', '', ''),
('140810200005', 'Alfadli Maulana Siddik', '0000-00-00', '', '', '', ''),
('140810200006', 'Hali Putri Aisyah', '0000-00-00', '', '', '', ''),
('140810200007', 'Rangga Putra', '0000-00-00', '', '', '', ''),
('140810200008', 'Anggie Forestry', '0000-00-00', '', '', '', ''),
('140810200009', 'Wafi Fahruzzaman', '0000-00-00', '', '', '', ''),
('140810200010', 'Rizky Mahardika Hariyanto', '0000-00-00', '', '', '', ''),
('140810200011', 'Faiq Muhammad', '0000-00-00', '', '', '', ''),
('140810200012', 'Della Fauziyyah Husna', '0000-00-00', '', '', '', ''),
('140810200013', 'Rihlan Lumenda Suherman', '0000-00-00', '', '', '', ''),
('140810200014', 'Nawang Ilmi Adzani', '0000-00-00', '', '', '', ''),
('140810200015', 'Nanda Raihan Sukma', '0000-00-00', '', '', '', ''),
('140810200016', 'Muhammad Daffa Alifiandi', '0000-00-00', '', '', '', ''),
('140810200017', 'Mohammad Keenan Febriansyah', '0000-00-00', '', '', '', ''),
('140810200018', 'Zhillan Thafhan Ahda', '0000-00-00', '', '', '', ''),
('140810200019', 'Muhammad Zidan Khairan', '0000-00-00', '', '', '', ''),
('140810200020', 'Andaru Danurdara Wibisana', '0000-00-00', '', '', '', ''),
('140810200021', 'Rifqi Akmal Fauzi', '0000-00-00', '', '', '', ''),
('140810200022', 'Osmond Haylim', '0000-00-00', '', '', '', ''),
('140810200023', 'Rheza Pandya Andhikaputra', '0000-00-00', '', '', '', ''),
('140810200024', 'Jonathan Victor Goklas', '0000-00-00', '', '', '', ''),
('140810200025', 'Raihan Fadhlal Aziz', '0000-00-00', '', '', '', ''),
('140810200026', 'Mu\'az Abdul Rohim', '0000-00-00', '', '', '', ''),
('140810200027', 'Harta Rama', '0000-00-00', '', '', '', ''),
('140810200028', 'Ananda Shaquille Farell', '0000-00-00', '', '', '', ''),
('140810200029', 'Adnan Rafiansyah Majid', '0000-00-00', '', '', '', ''),
('140810200030', 'Fauzan Azmi Dwicahyo', '0000-00-00', '', '', '', ''),
('140810200031', 'Ahmad Yahya Salim', '0000-00-00', '', '', '', ''),
('140810200032', 'Irfan Kamal', '0000-00-00', '', '', '', ''),
('140810200033', 'Rafa Azka Ulinnuha', '2002-08-29', 'A', '', '', ''),
('140810200034', 'Anna Safira Dila', '2002-11-04', 'B', '-', '', ''),
('140810200035', 'Naufal Fahrezi', '2002-05-06', 'A', '', '', ''),
('140810200036', 'Laura Azra Apriliyanti', '2003-03-09', 'B', '', '', ''),
('140810200037', 'Azka Ghafara Putra Agung', '0000-00-00', '', '', '', ''),
('140810200038', 'Pujo Prayogo', '0000-00-00', '', '', '', ''),
('140810200039', 'Rifqy Kurnia Sudarman', '0000-00-00', '', '', '', ''),
('140810200040', 'Indah Sutriyati', '0000-00-00', '', '', '', ''),
('140810200041', 'Alvaro Dwi Oktaviano', '0000-00-00', '', '', '', ''),
('140810200042', 'Andre Nathaniel Adipraja', '0000-00-00', '', '', '', ''),
('140810200043', 'Johanes Bagus Prasetyo', '0000-00-00', '', '', '', ''),
('140810200044', 'Ade Dwi Fatwa Sembiring', '0000-00-00', '', '', '', ''),
('140810200045', 'Amalia Nur Fitri', '0000-00-00', '', '', '', ''),
('140810200046', 'Muhammad Nabil Fikri Sudjarpadi Putra', '0000-00-00', '', '', '', ''),
('140810200047', 'Kharisma Fitri Nurunnisa Siahaan', '0000-00-00', '', '', '', ''),
('140810200048', 'Muhammad Attila An Naufal', '0000-00-00', '', '', '', ''),
('140810200049', 'Rafiansyah Rasyid Wikawang', '0000-00-00', '', '', '', ''),
('140810200050', 'Fikri Arkani Salim', '0000-00-00', '', '', '', ''),
('140810200051', 'Wildan Hanif Musyaffa', '0000-00-00', '', '', '', ''),
('140810200052', 'Fasya Nurina Izzati', '0000-00-00', '', '', '', ''),
('140810200053', 'Calvin C Montolalu', '2002-12-31', 'A', '-', 'Bekasi', ''),
('140810200055', 'Wafa Tsabita', '0000-00-00', '', '', '', ''),
('140810200056', 'Rafi Alauddin', '0000-00-00', '', '', '', ''),
('140810200057', 'Bismo Panji Kusumo', '0000-00-00', '', '', '', ''),
('140810200058', 'Amariel Danendra Dagna', '0000-00-00', '', '', '', ''),
('140810200059', 'Deani Puteri Virdiana', '2002-04-03', 'A', '', '', ''),
('140810200060', 'Alya Raisa Hidayat', '0000-00-00', '', '', '', ''),
('140810200061', 'Andyka Baswara Putra', '0000-00-00', '', '', '', ''),
('140810200062', 'Zahran Hanif Fathanmubin', '0000-00-00', '', '', '', ''),
('140810200063', 'Muhamad Davio Athallah', '0000-00-00', '', '', '', ''),
('140810200064', 'Muhammad Ariiq Rakha Shafa', '0000-00-00', '', '', '', ''),
('140810200065', 'Hanifan Ayusti Khairunnisa', '0000-00-00', '', '', '', ''),
('140810200066', 'Muthia Azzahra', '0000-00-00', '', '', '', ''),
('140810200067', 'Abraham Javier Sebastian Situmorang', '0000-00-00', '', '', '', ''),
('140810200068', 'Satriyatama Tristan Suharjono', '0000-00-00', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `npm` (`npm`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_npm_list` (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`);

--
-- Constraints for table `todolist`
--
ALTER TABLE `todolist`
  ADD CONSTRAINT `fk_npm_list` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
