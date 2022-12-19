-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 03:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d2023_unas_tingkatkekumuhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id_detail` int(8) NOT NULL,
  `id_penilaian` varchar(15) NOT NULL,
  `id_kelurahan` varchar(15) NOT NULL,
  `nilai1` varchar(15) NOT NULL,
  `nilai2` varchar(15) NOT NULL,
  `nilai3` varchar(15) NOT NULL,
  `nilai4` varchar(15) NOT NULL,
  `nilai5` varchar(15) NOT NULL,
  `nilai6` varchar(15) NOT NULL,
  `nilai7` varchar(15) NOT NULL,
  `nilai8` varchar(15) NOT NULL,
  `nilai9` varchar(15) NOT NULL,
  `nilai10` varchar(15) NOT NULL,
  `nilai11` varchar(15) NOT NULL,
  `nilai12` varchar(15) NOT NULL,
  `nilai13` varchar(15) NOT NULL,
  `nilai14` varchar(15) NOT NULL,
  `nilai15` varchar(15) NOT NULL,
  `nilai16` varchar(15) NOT NULL,
  `nilai17` varchar(15) NOT NULL,
  `nilai18` varchar(15) NOT NULL,
  `nilai19` varchar(15) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail`
--

INSERT INTO `tb_detail` (`id_detail`, `id_penilaian`, `id_kelurahan`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `nilai15`, `nilai16`, `nilai17`, `nilai18`, `nilai19`, `catatan`) VALUES
(2, 'PNL2205003', 'KLR01', '2', '9', '8', '6', '6', '1', '3', '10', '6', '7', '5', '3', '1', '10', '10', '8', '3', '8', '6', 'ok'),
(3, 'PNL2205003', 'KLR02', '1', '10', '5', '10', '1', '1', '9', '6', '6', '2', '9', '3', '3', '1', '10', '9', '7', '7', '2', 'OK cocok'),
(4, 'PNL2205003', 'KLR03', '1', '5', '5', '5', '4', '5', '1', '5', '7', '8', '7', '9', '1', '7', '2', '1', '3', '5', '1', ''),
(5, 'PNL2205003', 'KLR04', '4', '9', '2', '9', '4', '1', '1', '10', '4', '6', '5', '10', '3', '6', '6', '6', '10', '1', '8', ''),
(6, 'PNL2205003', 'KLR05', '8', '6', '3', '8', '8', '6', '7', '10', '4', '9', '8', '10', '3', '5', '7', '6', '2', '8', '1', ''),
(7, 'PNL2205003', 'KLR06', '2', '8', '7', '9', '3', '3', '4', '5', '6', '9', '5', '2', '3', '4', '3', '5', '1', '10', '3', ''),
(8, 'PNL2205004', 'KLR01', '4', '10', '10', '9', '4', '4', '4', '3', '10', '7', '8', '4', '10', '9', '2', '5', '5', '1', '10', ''),
(9, 'PNL2205004', 'KLR02', '3', '8', '3', '8', '4', '4', '3', '1', '1', '7', '1', '2', '3', '1', '10', '4', '2', '6', '5', ''),
(10, 'PNL2205004', 'KLR03', '6', '1', '2', '9', '5', '3', '7', '1', '6', '1', '5', '5', '1', '8', '1', '4', '5', '8', '5', ''),
(11, 'PNL2205004', 'KLR04', '6', '8', '8', '4', '9', '1', '6', '3', '2', '9', '5', '8', '7', '2', '5', '5', '9', '7', '9', ''),
(12, 'PNL2205004', 'KLR05', '6', '9', '5', '9', '6', '8', '4', '4', '3', '3', '6', '8', '2', '8', '9', '4', '6', '5', '10', ''),
(13, 'PNL2205004', 'KLR06', '3', '3', '10', '5', '2', '9', '1', '2', '10', '6', '7', '8', '6', '6', '10', '3', '6', '4', '5', ''),
(14, 'PNL2205005', 'KLR01', '1', '1', '3', '9', '1', '1', '4', '3', '2', '2', '1', '1', '4', '1', '1', '2,33', '1', '1', '4', ''),
(15, 'PNL2205005', 'KLR02', '1', '3', '1', '1', '4', '1', '4', '3', '3', '3', '2', '1', '5', '5', '1,33', '1', '1', '1', '4', ''),
(16, 'PNL2205005', 'KLR03', '1', '4', '5', '1', '4', '1', '4', '3', '3', '3', '2', '1', '1', '4', '3,33', '2,33', '1', '5', '5', ''),
(17, 'PNL2205005', 'KLR04', '15', '4', '1', '1', '4', '1', '4', '1', '1', '1', '2', '1', '5', '5', '1,33', '1', '1', '5', '5', ''),
(18, 'PNL2205005', 'KLR05', '15', '5', '5', '9', '1', '1', '4', '1', '1', '1', '1', '2', '4', '1', '1,33', '1', '1', '5', '5', ''),
(19, 'PNL2205005', 'KLR06', '13', '1', '1', '4', '1', '1', '9', '3', '2', '1', '2', '1', '5', '5', '1,33', '1', '1', '4', '1', ''),
(20, 'PNL2205005', 'KLR07', '14', '1', '5', '1', '4', '1', '4', '3', '1', '2', '2', '1', '5', '5', '1', '1,33', '1', '1', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(8) NOT NULL,
  `id_penilaian` varchar(15) NOT NULL,
  `id_kelurahan` varchar(15) NOT NULL,
  `bobot_1` float NOT NULL,
  `rangking_1` int(2) NOT NULL,
  `rekapitulasi_1` text NOT NULL,
  `keterangan_1` text NOT NULL,
  `bobot_2` float NOT NULL,
  `rangking_2` int(2) NOT NULL,
  `rekapitulasi_2` text NOT NULL,
  `keterangan_2` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_penilaian`, `id_kelurahan`, `bobot_1`, `rangking_1`, `rekapitulasi_1`, `keterangan_1`, `bobot_2`, `rangking_2`, `rekapitulasi_2`, `keterangan_2`, `catatan`) VALUES
(56, 'PNL2205004', 'KLR05', 0.76, 1, '((6/6) x 8.33/100) \r\n	+ ((9/10) x 8.33/100) \r\n	+ ((5/10) x 8.33/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((6/9) x 7.5/100) \r\n	+ ((8/9) x 5/100) \r\n	+ ((4/7) x 5/100) \r\n	+ ((4/4) x 3/100) \r\n	+ ((3/10) x 3/100) \r\n	+ ((3/9) x 3/100)\r\n	+ ((6/8) x 3/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((2/10) x 5/100) \r\n	+ ((8/9) x 5/100) \r\n	+ ((9/10) x 3.33/100) \r\n	+ ((4/5) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((5/8) x 5/100) \r\n	+ ((10/10) x 5/100) ;=0.76', '', 0.76, 1, '((6/6) x 8.33/100) \r\n	+ ((9/10) x 8.33/100) \r\n	+ ((5/10) x 8.33/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((6/9) x 7.5/100) \r\n	+ ((8/9) x 5/100) \r\n	+ ((4/7) x 5/100) \r\n	+ ((4/4) x 3/100) \r\n	+ ((3/10) x 3/100) \r\n	+ ((3/9) x 3/100)\r\n	+ ((6/8) x 3/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((2/10) x 5/100) \r\n	+ ((8/9) x 5/100) \r\n	+ ((9/10) x 3.33/100) \r\n	+ ((4/5) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((5/8) x 5/100) \r\n	+ ((10/10) x 5/100) ;=0.76', '', ''),
(57, 'PNL2205004', 'KLR01', 0.74, 2, '((4/6) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((4/9) x 7.5/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((4/7) x 5/100) \r\n	+ ((3/4) x 3/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((7/9) x 3/100)\r\n	+ ((8/8) x 3/100) \r\n	+ ((4/8) x 7.5/100) \r\n	+ ((10/10) x 5/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((2/10) x 3.33/100) \r\n	+ ((5/5) x 3.33/100) \r\n	+ ((5/9) x 3.33/100) \r\n	+ ((1/8) x 5/100) \r\n	+ ((10/10) x 5/100) ;=0.74', '', 0.74, 2, '((4/6) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((4/9) x 7.5/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((4/7) x 5/100) \r\n	+ ((3/4) x 3/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((7/9) x 3/100)\r\n	+ ((8/8) x 3/100) \r\n	+ ((4/8) x 7.5/100) \r\n	+ ((10/10) x 5/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((2/10) x 3.33/100) \r\n	+ ((5/5) x 3.33/100) \r\n	+ ((5/9) x 3.33/100) \r\n	+ ((1/8) x 5/100) \r\n	+ ((10/10) x 5/100) ;=0.74', '', ''),
(58, 'PNL2205004', 'KLR04', 0.74, 3, '((6/6) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((4/9) x 7.5/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((6/7) x 5/100) \r\n	+ ((3/4) x 3/100) \r\n	+ ((2/10) x 3/100) \r\n	+ ((9/9) x 3/100)\r\n	+ ((5/8) x 3/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((7/10) x 5/100) \r\n	+ ((2/9) x 5/100) \r\n	+ ((5/10) x 3.33/100) \r\n	+ ((5/5) x 3.33/100) \r\n	+ ((9/9) x 3.33/100) \r\n	+ ((7/8) x 5/100) \r\n	+ ((9/10) x 5/100) ;=0.74', '', 0.74, 3, '((6/6) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((4/9) x 7.5/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((6/7) x 5/100) \r\n	+ ((3/4) x 3/100) \r\n	+ ((2/10) x 3/100) \r\n	+ ((9/9) x 3/100)\r\n	+ ((5/8) x 3/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((7/10) x 5/100) \r\n	+ ((2/9) x 5/100) \r\n	+ ((5/10) x 3.33/100) \r\n	+ ((5/5) x 3.33/100) \r\n	+ ((9/9) x 3.33/100) \r\n	+ ((7/8) x 5/100) \r\n	+ ((9/10) x 5/100) ;=0.74', '', ''),
(59, 'PNL2205004', 'KLR06', 0.62, 4, '((3/6) x 8.33/100) \r\n	+ ((3/10) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((5/9) x 7.5/100) \r\n	+ ((2/9) x 7.5/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((1/7) x 5/100) \r\n	+ ((2/4) x 3/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((6/9) x 3/100)\r\n	+ ((7/8) x 3/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((6/10) x 5/100) \r\n	+ ((6/9) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((3/5) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((4/8) x 5/100) \r\n	+ ((5/10) x 5/100) ;=0.62', '', 0.62, 4, '((3/6) x 8.33/100) \r\n	+ ((3/10) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((5/9) x 7.5/100) \r\n	+ ((2/9) x 7.5/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((1/7) x 5/100) \r\n	+ ((2/4) x 3/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((6/9) x 3/100)\r\n	+ ((7/8) x 3/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((6/10) x 5/100) \r\n	+ ((6/9) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((3/5) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((4/8) x 5/100) \r\n	+ ((5/10) x 5/100) ;=0.62', '', ''),
(60, 'PNL2205004', 'KLR03', 0.56, 5, '((6/6) x 8.33/100) \r\n	+ ((1/10) x 8.33/100) \r\n	+ ((2/10) x 8.33/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((5/9) x 7.5/100) \r\n	+ ((3/9) x 5/100) \r\n	+ ((7/7) x 5/100) \r\n	+ ((1/4) x 3/100) \r\n	+ ((6/10) x 3/100) \r\n	+ ((1/9) x 3/100)\r\n	+ ((5/8) x 3/100) \r\n	+ ((5/8) x 7.5/100) \r\n	+ ((1/10) x 5/100) \r\n	+ ((8/9) x 5/100) \r\n	+ ((1/10) x 3.33/100) \r\n	+ ((4/5) x 3.33/100) \r\n	+ ((5/9) x 3.33/100) \r\n	+ ((8/8) x 5/100) \r\n	+ ((5/10) x 5/100) ;=0.56', '', 0.56, 5, '((6/6) x 8.33/100) \r\n	+ ((1/10) x 8.33/100) \r\n	+ ((2/10) x 8.33/100) \r\n	+ ((9/9) x 7.5/100) \r\n	+ ((5/9) x 7.5/100) \r\n	+ ((3/9) x 5/100) \r\n	+ ((7/7) x 5/100) \r\n	+ ((1/4) x 3/100) \r\n	+ ((6/10) x 3/100) \r\n	+ ((1/9) x 3/100)\r\n	+ ((5/8) x 3/100) \r\n	+ ((5/8) x 7.5/100) \r\n	+ ((1/10) x 5/100) \r\n	+ ((8/9) x 5/100) \r\n	+ ((1/10) x 3.33/100) \r\n	+ ((4/5) x 3.33/100) \r\n	+ ((5/9) x 3.33/100) \r\n	+ ((8/8) x 5/100) \r\n	+ ((5/10) x 5/100) ;=0.56', '', ''),
(61, 'PNL2205004', 'KLR02', 0.48, 6, '((3/6) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((3/10) x 8.33/100) \r\n	+ ((8/9) x 7.5/100) \r\n	+ ((4/9) x 7.5/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/7) x 5/100) \r\n	+ ((1/4) x 3/100) \r\n	+ ((1/10) x 3/100) \r\n	+ ((7/9) x 3/100)\r\n	+ ((1/8) x 3/100) \r\n	+ ((2/8) x 7.5/100) \r\n	+ ((3/10) x 5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((4/5) x 3.33/100) \r\n	+ ((2/9) x 3.33/100) \r\n	+ ((6/8) x 5/100) \r\n	+ ((5/10) x 5/100) ;=0.48', '', 0.48, 6, '((3/6) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((3/10) x 8.33/100) \r\n	+ ((8/9) x 7.5/100) \r\n	+ ((4/9) x 7.5/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/7) x 5/100) \r\n	+ ((1/4) x 3/100) \r\n	+ ((1/10) x 3/100) \r\n	+ ((7/9) x 3/100)\r\n	+ ((1/8) x 3/100) \r\n	+ ((2/8) x 7.5/100) \r\n	+ ((3/10) x 5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((4/5) x 3.33/100) \r\n	+ ((2/9) x 3.33/100) \r\n	+ ((6/8) x 5/100) \r\n	+ ((5/10) x 5/100) ;=0.48', '', ''),
(62, 'PNL2205003', 'KLR05', 0.74, 1, '((8/8) x 8.33/100) \r\n	+ ((6/10) x 8.33/100) \r\n	+ ((3/8) x 8.33/100) \r\n	+ ((8/10) x 7.5/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((6/6) x 5/100) \r\n	+ ((7/9) x 5/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((4/7) x 3/100) \r\n	+ ((9/9) x 3/100)\r\n	+ ((8/9) x 3/100) \r\n	+ ((10/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((5/10) x 5/100) \r\n	+ ((7/10) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((2/10) x 3.33/100) \r\n	+ ((8/10) x 5/100) \r\n	+ ((1/8) x 5/100) ;=0.74', '', 0.74, 1, '((8/8) x 8.33/100) \r\n	+ ((6/10) x 8.33/100) \r\n	+ ((3/8) x 8.33/100) \r\n	+ ((8/10) x 7.5/100) \r\n	+ ((8/8) x 7.5/100) \r\n	+ ((6/6) x 5/100) \r\n	+ ((7/9) x 5/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((4/7) x 3/100) \r\n	+ ((9/9) x 3/100)\r\n	+ ((8/9) x 3/100) \r\n	+ ((10/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((5/10) x 5/100) \r\n	+ ((7/10) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((2/10) x 3.33/100) \r\n	+ ((8/10) x 5/100) \r\n	+ ((1/8) x 5/100) ;=0.74', '', ''),
(63, 'PNL2205003', 'KLR01', 0.64, 2, '((2/8) x 8.33/100) \r\n	+ ((9/10) x 8.33/100) \r\n	+ ((8/8) x 8.33/100) \r\n	+ ((6/10) x 7.5/100) \r\n	+ ((6/8) x 7.5/100) \r\n	+ ((1/6) x 5/100) \r\n	+ ((3/9) x 5/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((6/7) x 3/100) \r\n	+ ((7/9) x 3/100)\r\n	+ ((5/9) x 3/100) \r\n	+ ((3/10) x 7.5/100) \r\n	+ ((1/3) x 5/100) \r\n	+ ((10/10) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((8/9) x 3.33/100) \r\n	+ ((3/10) x 3.33/100) \r\n	+ ((8/10) x 5/100) \r\n	+ ((6/8) x 5/100) ;=0.64', '', 0.64, 2, '((2/8) x 8.33/100) \r\n	+ ((9/10) x 8.33/100) \r\n	+ ((8/8) x 8.33/100) \r\n	+ ((6/10) x 7.5/100) \r\n	+ ((6/8) x 7.5/100) \r\n	+ ((1/6) x 5/100) \r\n	+ ((3/9) x 5/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((6/7) x 3/100) \r\n	+ ((7/9) x 3/100)\r\n	+ ((5/9) x 3/100) \r\n	+ ((3/10) x 7.5/100) \r\n	+ ((1/3) x 5/100) \r\n	+ ((10/10) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((8/9) x 3.33/100) \r\n	+ ((3/10) x 3.33/100) \r\n	+ ((8/10) x 5/100) \r\n	+ ((6/8) x 5/100) ;=0.64', '', 'ok'),
(64, 'PNL2205003', 'KLR04', 0.63, 3, '((4/8) x 8.33/100) \r\n	+ ((9/10) x 8.33/100) \r\n	+ ((2/8) x 8.33/100) \r\n	+ ((9/10) x 7.5/100) \r\n	+ ((4/8) x 7.5/100) \r\n	+ ((1/6) x 5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((4/7) x 3/100) \r\n	+ ((6/9) x 3/100)\r\n	+ ((5/9) x 3/100) \r\n	+ ((10/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((6/10) x 5/100) \r\n	+ ((6/10) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((1/10) x 5/100) \r\n	+ ((8/8) x 5/100) ;=0.63', '', 0.63, 3, '((4/8) x 8.33/100) \r\n	+ ((9/10) x 8.33/100) \r\n	+ ((2/8) x 8.33/100) \r\n	+ ((9/10) x 7.5/100) \r\n	+ ((4/8) x 7.5/100) \r\n	+ ((1/6) x 5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((10/10) x 3/100) \r\n	+ ((4/7) x 3/100) \r\n	+ ((6/9) x 3/100)\r\n	+ ((5/9) x 3/100) \r\n	+ ((10/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((6/10) x 5/100) \r\n	+ ((6/10) x 3.33/100) \r\n	+ ((6/9) x 3.33/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((1/10) x 5/100) \r\n	+ ((8/8) x 5/100) ;=0.63', '', ''),
(65, 'PNL2205003', 'KLR02', 0.58, 4, '((1/8) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((5/8) x 8.33/100) \r\n	+ ((10/10) x 7.5/100) \r\n	+ ((1/8) x 7.5/100) \r\n	+ ((1/6) x 5/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((6/10) x 3/100) \r\n	+ ((6/7) x 3/100) \r\n	+ ((2/9) x 3/100)\r\n	+ ((9/9) x 3/100) \r\n	+ ((3/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((1/10) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((9/9) x 3.33/100) \r\n	+ ((7/10) x 3.33/100) \r\n	+ ((7/10) x 5/100) \r\n	+ ((2/8) x 5/100) ;=0.58', '', 0.58, 4, '((1/8) x 8.33/100) \r\n	+ ((10/10) x 8.33/100) \r\n	+ ((5/8) x 8.33/100) \r\n	+ ((10/10) x 7.5/100) \r\n	+ ((1/8) x 7.5/100) \r\n	+ ((1/6) x 5/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((6/10) x 3/100) \r\n	+ ((6/7) x 3/100) \r\n	+ ((2/9) x 3/100)\r\n	+ ((9/9) x 3/100) \r\n	+ ((3/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((1/10) x 5/100) \r\n	+ ((10/10) x 3.33/100) \r\n	+ ((9/9) x 3.33/100) \r\n	+ ((7/10) x 3.33/100) \r\n	+ ((7/10) x 5/100) \r\n	+ ((2/8) x 5/100) ;=0.58', '', 'OK cocok'),
(66, 'PNL2205003', 'KLR06', 0.58, 5, '((2/8) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((7/8) x 8.33/100) \r\n	+ ((9/10) x 7.5/100) \r\n	+ ((3/8) x 7.5/100) \r\n	+ ((3/6) x 5/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((5/10) x 3/100) \r\n	+ ((6/7) x 3/100) \r\n	+ ((9/9) x 3/100)\r\n	+ ((5/9) x 3/100) \r\n	+ ((2/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((4/10) x 5/100) \r\n	+ ((3/10) x 3.33/100) \r\n	+ ((5/9) x 3.33/100) \r\n	+ ((1/10) x 3.33/100) \r\n	+ ((10/10) x 5/100) \r\n	+ ((3/8) x 5/100) ;=0.58', '', 0.58, 5, '((2/8) x 8.33/100) \r\n	+ ((8/10) x 8.33/100) \r\n	+ ((7/8) x 8.33/100) \r\n	+ ((9/10) x 7.5/100) \r\n	+ ((3/8) x 7.5/100) \r\n	+ ((3/6) x 5/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((5/10) x 3/100) \r\n	+ ((6/7) x 3/100) \r\n	+ ((9/9) x 3/100)\r\n	+ ((5/9) x 3/100) \r\n	+ ((2/10) x 7.5/100) \r\n	+ ((3/3) x 5/100) \r\n	+ ((4/10) x 5/100) \r\n	+ ((3/10) x 3.33/100) \r\n	+ ((5/9) x 3.33/100) \r\n	+ ((1/10) x 3.33/100) \r\n	+ ((10/10) x 5/100) \r\n	+ ((3/8) x 5/100) ;=0.58', '', ''),
(67, 'PNL2205003', 'KLR03', 0.49, 6, '((1/8) x 8.33/100) \r\n	+ ((5/10) x 8.33/100) \r\n	+ ((5/8) x 8.33/100) \r\n	+ ((5/10) x 7.5/100) \r\n	+ ((4/8) x 7.5/100) \r\n	+ ((5/6) x 5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((5/10) x 3/100) \r\n	+ ((7/7) x 3/100) \r\n	+ ((8/9) x 3/100)\r\n	+ ((7/9) x 3/100) \r\n	+ ((9/10) x 7.5/100) \r\n	+ ((1/3) x 5/100) \r\n	+ ((7/10) x 5/100) \r\n	+ ((2/10) x 3.33/100) \r\n	+ ((1/9) x 3.33/100) \r\n	+ ((3/10) x 3.33/100) \r\n	+ ((5/10) x 5/100) \r\n	+ ((1/8) x 5/100) ;=0.49', '', 0.49, 6, '((1/8) x 8.33/100) \r\n	+ ((5/10) x 8.33/100) \r\n	+ ((5/8) x 8.33/100) \r\n	+ ((5/10) x 7.5/100) \r\n	+ ((4/8) x 7.5/100) \r\n	+ ((5/6) x 5/100) \r\n	+ ((1/9) x 5/100) \r\n	+ ((5/10) x 3/100) \r\n	+ ((7/7) x 3/100) \r\n	+ ((8/9) x 3/100)\r\n	+ ((7/9) x 3/100) \r\n	+ ((9/10) x 7.5/100) \r\n	+ ((1/3) x 5/100) \r\n	+ ((7/10) x 5/100) \r\n	+ ((2/10) x 3.33/100) \r\n	+ ((1/9) x 3.33/100) \r\n	+ ((3/10) x 3.33/100) \r\n	+ ((5/10) x 5/100) \r\n	+ ((1/8) x 5/100) ;=0.49', '', ''),
(75, 'PNL2205005', 'KLR05', 0.77, 1, '((15/15) x 15/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((9/9) x 10/100) \r\n	+ ((1/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100)\r\n	+ ((1/2) x 3/100) \r\n	+ ((2/2) x 3/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) ;=0.77', '', 0.77, 1, '((15/15) x 15/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((9/9) x 10/100) \r\n	+ ((1/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100)\r\n	+ ((1/2) x 3/100) \r\n	+ ((2/2) x 3/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) ;=0.77', '', ''),
(76, 'PNL2205005', 'KLR04', 0.72, 2, '((15/15) x 15/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) ;=0.72', '', 0.72, 2, '((15/15) x 15/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((1/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) ;=0.72', '', ''),
(77, 'PNL2205005', 'KLR07', 0.7, 3, '((14/15) x 15/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((2/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1/3,33) x 3.33/100) \r\n	+ ((1,33/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) ;=0.7', '', 0.7, 3, '((14/15) x 15/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((1/3) x 3/100) \r\n	+ ((2/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1/3,33) x 3.33/100) \r\n	+ ((1,33/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) ;=0.7', '', ''),
(78, 'PNL2205005', 'KLR03', 0.67, 4, '((1/15) x 15/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((3,33/3,33) x 3.33/100) \r\n	+ ((2,33/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) ;=0.67', '', 0.67, 4, '((1/15) x 15/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((3,33/3,33) x 3.33/100) \r\n	+ ((2,33/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) ;=0.67', '', ''),
(79, 'PNL2205005', 'KLR06', 0.67, 5, '((13/15) x 15/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/9) x 10/100) \r\n	+ ((1/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((2/3) x 3/100) \r\n	+ ((1/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) ;=0.67', '', 0.67, 5, '((13/15) x 15/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/9) x 10/100) \r\n	+ ((1/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((9/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((2/3) x 3/100) \r\n	+ ((1/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) ;=0.67', '', ''),
(80, 'PNL2205005', 'KLR02', 0.58, 6, '((1/15) x 15/100) \r\n	+ ((3/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) ;=0.58', '', 0.58, 6, '((1/15) x 15/100) \r\n	+ ((3/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/9) x 10/100) \r\n	+ ((4/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((3/3) x 3/100)\r\n	+ ((2/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((5/5) x 5/100) \r\n	+ ((1,33/3,33) x 3.33/100) \r\n	+ ((1/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) ;=0.58', '', ''),
(81, 'PNL2205005', 'KLR01', 0.56, 7, '((1/15) x 15/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((3/5) x 5/100) \r\n	+ ((9/9) x 10/100) \r\n	+ ((1/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((2/3) x 3/100) \r\n	+ ((2/3) x 3/100)\r\n	+ ((1/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/3,33) x 3.33/100) \r\n	+ ((2,33/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) ;=0.56', '', 0.56, 7, '((1/15) x 15/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((3/5) x 5/100) \r\n	+ ((9/9) x 10/100) \r\n	+ ((1/4) x 5/100) \r\n	+ ((1/1) x 10/100) \r\n	+ ((4/9) x 5/100) \r\n	+ ((3/3) x 3/100) \r\n	+ ((2/3) x 3/100) \r\n	+ ((2/3) x 3/100)\r\n	+ ((1/2) x 3/100) \r\n	+ ((1/2) x 3/100) \r\n	+ ((4/5) x 5/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((1/3,33) x 3.33/100) \r\n	+ ((2,33/2,33) x 3.33/100) \r\n	+ ((1/1) x 3.33/100) \r\n	+ ((1/5) x 5/100) \r\n	+ ((4/5) x 5/100) ;=0.56', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id_kelurahan` varchar(15) NOT NULL,
  `nama_kelurahan` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id_kelurahan`, `nama_kelurahan`, `deskripsi`) VALUES
('KLR01', 'Ciganjur', 'Ciganjur adalah kelurahan yang terletak di kecamatan Jagakarsa, Jakarta Selatan, Jakarta, Indonesia.[2] Ciganjur memiliki kode pos 12630. Kelurahan ini memiliki penduduk sebesar 515.325 jiwa (data sensus 2009) dan luas 156... km². Kantor Kelurahan Ciganjur terletak di Jl. Anda No IB dengan nomor telepon (021) 7866054. Kelurahan ini berbatasan dengan Cilandak di sebelah utara, Kebagusan/Ragunan di sebelah timur, Cinere di sebelah barat dan Depok di sebelah selatan.'),
('KLR02', 'Cipedak', 'Kelurahan Cipedak adalah sebuah kelurahan di kecamatan Jagakarsa, Jakarta Selatan.[1] Kelurahan ini memiliki kode pos 12630. Kelurahan ini merupakan hasil pemekaran dari Kelurahan Ciganjur. Kelurahan ini berdiri tahun 1992.'),
('KLR03', 'Jagakarsa', 'Kelurahan ini terletak di kecamatan Jagakarsa, Jakarta Selatan. Kelurahan ini berbatasan dengan Kecamatan Kebagusan di sebelah utara, kecamatan Cilandak di sebelah barat, Ciganjur di sebelah timur dan kota Depok, provinsi Jawa Barat di sebelah selatan.'),
('KLR04', 'Lenteng Agung', 'Lenteng Agung atau lebih dikenal dengan singkatan L.A. adalah kelurahan yang terletak di kecamatan Jagakarsa, Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia.\r\n\r\nKelurahan ini punya asal mula nama dari kata Klenteng yang diperkirakan terletak di dekat Kampus Institut Ilmu Sosial dan Ilmu Politik (IISIP) dan saat ini sudah tidak ada lagi sisa bangunannya. Kelurahan ini memiliki kode pos 12610 (wilayah timur) dan 12630 (wilayah barat).\r\n\r\nKantor kelurahan ini terletak di Jalan Agung Raya 1, yang bersebelahan dengan Fly Over Tapal Kuda Lenteng Agung yang baru selesai pengerjaannya Tahun 2021.'),
('KLR05', 'Srengseng Sawah', 'Srengseng Sawah adalah sebuah kelurahan di Kecamatan Jagakarsa, Jakarta Selatan. Dengan luas keseluruhan sekitar 675 hektare, Srengseng Sawah merupakan kelurahan yang terluas di Kecamatan Jagakarsa; yakni meliputi sekitar 27% area kecamatan tersebut.'),
('KLR06', 'Tanjung Barat', 'Tanjung Barat adalah sebuah kelurahan yang terletak di Jakarta. Kelurahan ini memiliki kode wilayah 31.74.09.1005 dan kode pos 12530.[1] Kelurahan ini terletak di kecamatan Jagakarsa, Jakarta Selatan.'),
('KLR07', 'Pasar Minggu', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(15) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `level`, `email`, `telepon`, `username`, `password`, `status`, `keterangan`) VALUES
('PGN01', 'Andine Adams', 'Administrator', 'andie@gmail.com', '0857687565', 'a', 'a', 'Aktif', '-'),
('PGN02', 'Indah Purwanty', 'Staff Kecamatan', 'indah@gmail.com', '0857687565', 's', 's', 'Aktif', '-'),
('PGN03', 'Kim Tae He , SKOM', 'Administrator', 'rachmapuspitaannisa@rocketmail.com', '085279959498', 'k', 'k', 'Tidak Aktif', 'Cuti Shooting KPOP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` varchar(15) NOT NULL,
  `nama_penilaian` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `id_pengguna` varchar(15) NOT NULL,
  `bobot1` float NOT NULL,
  `bobot2` float NOT NULL,
  `bobot3` float NOT NULL,
  `bobot4` float NOT NULL,
  `bobot5` float NOT NULL,
  `bobot6` float NOT NULL,
  `bobot7` float NOT NULL,
  `bobot8` float NOT NULL,
  `bobot9` float NOT NULL,
  `bobot10` float NOT NULL,
  `bobot11` float NOT NULL,
  `bobot12` float NOT NULL,
  `bobot13` float NOT NULL,
  `bobot14` float NOT NULL,
  `bobot15` float NOT NULL,
  `bobot16` float NOT NULL,
  `bobot17` float NOT NULL,
  `bobot18` float NOT NULL,
  `bobot19` float NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Proses',
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `nama_penilaian`, `periode`, `id_pengguna`, `bobot1`, `bobot2`, `bobot3`, `bobot4`, `bobot5`, `bobot6`, `bobot7`, `bobot8`, `bobot9`, `bobot10`, `bobot11`, `bobot12`, `bobot13`, `bobot14`, `bobot15`, `bobot16`, `bobot17`, `bobot18`, `bobot19`, `status`, `tanggal`, `jam`, `keterangan`) VALUES
('PNL2205001', 'Urgent Kebutuhan Warga', 'Penilaian Mei 2022', 'PGN01', 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'Proses', '2022-05-14', '18:56:38', 'Request BPS RI 2022'),
('PNL2205002', 'Pencarian Calon Warga Terbaik ', 'Penilaian Mei 2022', 'PGN01', 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'Proses', '2022-05-14', '18:59:54', 'Request Pak Gubernur DKI'),
('PNL2205003', 'Pemilihan target Wisata u Anak2 SDN XYZ Karyawisata Semseter', 'Penilaian Mei 2022', 'PGN01', 8.33, 8.33, 8.33, 7.5, 7.5, 5, 5, 3, 3, 3, 3, 7.5, 5, 5, 3.33, 3.33, 3.33, 5, 5, 'Proses', '2022-05-14', '21:39:08', ''),
('PNL2205004', 'Pencarian kelurahan terbaik....dari yang kumuh...edisi Jan 2022', 'Penilaian Januari 2022', 'PGN01', 8.33, 8.33, 8.33, 7.5, 7.5, 5, 5, 3, 3, 3, 3, 7.5, 5, 5, 3.33, 3.33, 3.33, 5, 5, 'Proses', '2022-05-24', '17:14:25', 'req Pak gubernur'),
('PNL2205005', 'request dospem', 'Penilaian Mei 2022', 'PGN01', 15, 5, 5, 10, 5, 10, 5, 3, 3, 3, 3, 3, 5, 5, 3.33, 3.33, 3.33, 5, 5, 'Proses', '2022-05-24', '17:34:44', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id_detail` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
