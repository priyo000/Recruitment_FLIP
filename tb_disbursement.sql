-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14 Jul 2019 pada 21.52
-- Versi Server: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_flip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_disbursement`
--

CREATE TABLE `tb_disbursement` (
  `id` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `timestamp` varchar(20) NOT NULL,
  `bank_code` varchar(11) NOT NULL,
  `account_number` varchar(11) NOT NULL,
  `beneficiary_name` varchar(11) NOT NULL,
  `remark` varchar(11) NOT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `time_served` varchar(20) DEFAULT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disbursement`
--
ALTER TABLE `tb_disbursement`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
