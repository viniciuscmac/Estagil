-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2016 at 09:18 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Estagil`
--

-- --------------------------------------------------------

--
-- Table structure for table `Empresas`
--

CREATE TABLE `Empresas` (
  `idEmpresas` int(11) NOT NULL,
  `nomeEmpresa` varchar(45) DEFAULT NULL,
  `foneEmpresa` varchar(45) DEFAULT NULL,
  `areaEmpresa` varchar(45) DEFAULT NULL,
  `enderecoEmpresa` varchar(100) DEFAULT NULL,
  `descricaoEmpresa` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Empresas`
--

INSERT INTO `Empresas` (`idEmpresas`, `nomeEmpresa`, `foneEmpresa`, `areaEmpresa`, `enderecoEmpresa`, `descricaoEmpresa`) VALUES
(6, 'Google', '9999-9999', 'TI', 'Rua da Google, San Francisco - CA', 'Google Inc.'),
(7, 'IBM', '8888-8888', 'TI', 'Rua da IBM, Goiania - GO', 'International Business Machines (IBM)'),
(8, 'UFSC', '48-35556777', 'Universidade', 'Trindade, Floripa, SC', 'ufsc@ufsc.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Empresas`
--
ALTER TABLE `Empresas`
  ADD PRIMARY KEY (`idEmpresas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Empresas`
--
ALTER TABLE `Empresas`
  MODIFY `idEmpresas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;