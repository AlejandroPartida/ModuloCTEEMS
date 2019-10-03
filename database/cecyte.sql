-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 04:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cecyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `curp` varchar(18) COLLATE utf8_spanish2_ci NOT NULL,
  `tel_celular` bigint(11) NOT NULL,
  `correo_electronico` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` enum('Coordinador','Director','Subdirector') COLLATE utf8_spanish2_ci NOT NULL,
  `fk_plantel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`curp`, `tel_celular`, `correo_electronico`, `puesto`, `fk_plantel`) VALUES
('	PXNE660720HMCXTN0', 8666767676, 'jjjjjjshfdgf', 'Coordinador', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plantel`
--

CREATE TABLE `plantel` (
  `id_plantel` int(11) NOT NULL,
  `tipo_plantel` enum('CECyTE','EMSaD') COLLATE utf8_spanish2_ci NOT NULL,
  `numero_plantel` int(3) NOT NULL,
  `nombre_plantel` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_plantel` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `plantel`
--

INSERT INTO `plantel` (`id_plantel`, `tipo_plantel`, `numero_plantel`, `nombre_plantel`, `telefono_plantel`) VALUES
(1, 'CECyTE', 19, 'Llano grande', 6188761709);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`curp`),
  ADD KEY `fk_plantel` (`fk_plantel`);

--
-- Indexes for table `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`id_plantel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plantel`
--
ALTER TABLE `plantel`
  MODIFY `id_plantel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`fk_plantel`) REFERENCES `plantel` (`id_plantel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
