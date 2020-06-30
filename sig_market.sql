-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 02:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id_market` int(11) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `nm_market` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `atm` varchar(255) NOT NULL,
  `wifi` varchar(50) NOT NULL,
  `fasilitas_lain` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `24_jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id_market`, `latitude`, `longitude`, `nm_market`, `gambar`, `atm`, `wifi`, `fasilitas_lain`, `alamat`, `kelurahan`, `kecamatan`, `kab_kota`, `24_jam`) VALUES
(6, '-7.561314291920728', '110.7396221549759', 'Indomaret', 'Indomart_Screenshot_9.png', '-', 'Tidak Ada', '-\r\n', 'Jl. Brigjen Katamso', 'Bakalan', 'Kartasura', 'Sukoharjo', 'Tidak'),
(7, '-7.554024620351816', '110.73986667027987', 'Alfamart', 'Alfamart_Screenshot_10.png', 'BRI', 'Ada', '-\r\n', 'Jl. Slamet Riyadi No.54', 'Kartasura', 'Kartasura', 'Sukoharjo', 'Ya'),
(8, '-7.553718273716667', '110.73994761091353', 'Indomaret', 'Indomaret_Screenshot_11.png', 'BCA', 'Tidak Ada', '-\r\n', 'Jl. Slamet Riyadi', 'Kartasura', 'Kartasura', 'Sukoharjo', 'Tidak'),
(9, '-7.554615774259581', '110.74077818510114', 'Alfamidi', 'Alfamidi_Screenshot_13.png', '-', 'Tidak Ada', '-\r\n', 'Jl. Slamet Riyadi', 'Kartasura', 'Kartasura', 'Sukoharjo', 'Tidak'),
(10, '-7.567694234251433', '110.78327393380573', 'Indomaret', 'Indomaret_Screenshot_14.png', 'BCA,BRI', 'Tidak Ada', '-\r\n', 'Jl. Slamet Riyadi', 'Pajang', 'Laweyan', 'Surakarta', 'Tidak'),
(11, '-7.564403035338983', '110.7656994698159', 'Alfamart', 'Alfamart_Screenshot_155.png', '-', 'Ada', '-\r\n', 'Jl. Slamet Riyadi', 'Gumpang', 'Kartasura', 'Sukoharjo', 'Tidak'),
(13, '-7.555392557615271', '110.74170195474107', 'Alfamart', 'Alfamart_Screenshot_15.png', '-', 'Ada', '-\r\n', 'Jl. Brigjen Katamso', 'Keputren', 'Kartasura', 'Sukoharjo', 'Tidak'),
(14, '-7.5601944947134285', '110.75233754614567', 'Alfamart', 'Alfamart_Screenshot_16.png', 'BCA', 'Tidak Ada', '-\r\n', 'Jl. Slamet Riyadi No.203', 'Ngadirejo', 'Kartasura', 'Sukoharjo', 'Tidak'),
(15, '-7.563873840227995', '110.8021844323547', 'Indomaret Plus', 'Indomaret Plus_Screenshot_17.png', 'BCA,BNI,MANDIRI', 'Ada', '-\r\n', 'Jl. Brigjend Slamet Riyadi', 'Purwosari', 'Laweyan', 'Surakarta', 'Ya'),
(16, '-7.561016672267421', '110.75400655775672', 'Mulia', 'Mulia_Screenshot_18.png', '-', 'Tidak Ada', '-\r\n', 'Jl. Slamet Riyadi', 'Ngadirejo', 'Kartasura', 'Sukoharjo', 'Tidak'),
(17, '-7.56484580686554', '110.79452800992692', 'Indomart', 'Indomart_Screenshot_19.png', 'MANDIRI', 'Tidak Ada', '- Kamar Mandi\r\n', 'Jl. KH. Agus Salim', 'Sondakan', 'Laweyan', 'Surakarta', 'Ya'),
(18, '-7.571153089744661', '110.80207051088178', 'Alfamart', 'Alfamart_Screenshot_20.png', '-', 'Tidak Ada', '-\r\n', 'Jl. Dr. Radjiman', 'Bumi', 'Laweyan', 'Sukoharjo', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lvl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `email`, `username`, `password`, `lvl`) VALUES
(1, 'Fitra Ashari', 'fitra.drive@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(7, 'Radika f', 'radika_f@gmail.com', 'radika', '25d55ad283aa400af464c76d713c07ad', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id_market`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id_market` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
