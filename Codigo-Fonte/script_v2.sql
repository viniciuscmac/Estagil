-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2016 at 05:38 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Estagil`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alunos`
--

CREATE TABLE `Alunos` (
  `idAlunos` int(11) NOT NULL,
  `nomeAluno` varchar(90) DEFAULT NULL,
  `foneAluno` varchar(45) DEFAULT NULL,
  `cursoAluno` varchar(45) DEFAULT NULL,
  `semestreAluno` int(11) DEFAULT NULL,
  `enderecoAluno` varchar(45) DEFAULT NULL,
  `dataNascimentoAluno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Alunos`
--

INSERT INTO `Alunos` (`idAlunos`, `nomeAluno`, `foneAluno`, `cursoAluno`, `semestreAluno`, `enderecoAluno`, `dataNascimentoAluno`) VALUES
(1, 'Moises', '9801 0909', 'Eng. de Software', 6, 'Rua debaixo do viaduto', 21-11-1995);

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
(6, 'Google ', '9999-9999', 'ti', 'San Francisco, CA', 'google inc  teste'),
(7, 'IBM', '8888-8888', 'TI', 'Rua IBM, Goiania - Go', 'IBM e uma empresa de tecnologia e computacao teste'),
(8, 'UFSC', '48-35556777', 'Universidade', 'Trindade, Floripa, SC', 'ufsc@ufsc.com');

-- --------------------------------------------------------

--
-- Table structure for table `Inscricoes`
--

CREATE TABLE `Inscricoes` (
  `Alunos_idAlunos` int(11) NOT NULL,
  `Vagas_idVaga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Vagas`
--

CREATE TABLE `Vagas` (
  `Empresas_idEmpresas` int(11) NOT NULL,
  `idVaga` int(11) NOT NULL,
  `areaVaga` varchar(45) DEFAULT NULL,
  `dataInicio` datetime DEFAULT NULL,
  `descricaoVaga` varchar(300) DEFAULT NULL,
  `salarioVaga` float DEFAULT NULL,
  `auxilioTransporte` tinyint(1) DEFAULT NULL,
  `auxilioExtra` tinyint(1) DEFAULT NULL,
  `requisitosVaga` varchar(300) DEFAULT NULL,
  `tituloVaga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vagas`
--

INSERT INTO `Vagas` (`Empresas_idEmpresas`, `idVaga`, `areaVaga`, `dataInicio`, `descricaoVaga`, `salarioVaga`, `auxilioTransporte`, `auxilioExtra`, `requisitosVaga`, `tituloVaga`) VALUES
(6, 1, 'Desenvolvimento', '2016-12-06 00:00:00', 'A google oferece a vaga de desenvolvedor android para estagiarios', 1200, 1, 0, 'Conhecimento intermediario em java. Ingles intermediario', 'Desenvolvedor Android'),
(6, 3, 'Desenvolvimento', '2016-12-21 00:00:00', 'A google oferece vaga de desenvolvimento web', 950, 1, 0, 'Conhecimento em HTML, CSS, e javascript', 'Desenvolvedor Web'),
(6, 5, 'TI', '2017-01-12 00:00:00', 'Suporte de sistemas', 800, 0, 0, 'NÃ­vel de ingles intermediario', 'Suporte'),
(7, 6, 'Desenvolvimento', '2017-01-11 00:00:00', 'A ibm oferece vaga de estÃ¡gio para desenvolvimento java', 1000, 1, 0, 'Conhecimento bÃ¡sico java e ingles intermediario', 'Desenvolvedor Java');

-- --------------------------------------------------------

--
-- Table structure for table `acessoAlunos`
--

CREATE TABLE `acessoAlunos` (
  `Alunos_idAlunos` int(11) DEFAULT NULL,
  `emailAluno` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acessoAlunos`
--

INSERT INTO `acessoAlunos` (`Alunos_idAlunos`, `emailAluno`, `password`) VALUES
(1, 'moises@email.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `acessoEmpresa`
--

CREATE TABLE `acessoEmpresa` (
  `Empresas_idEmpresas` int(11) DEFAULT NULL,
  `emailEmpresa` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acessoEmpresa`
--

INSERT INTO `acessoEmpresa` (`Empresas_idEmpresas`, `emailEmpresa`, `password`) VALUES
(6, 'estagio@google.com', 'google'),
(7, 'estagio@ibm.com', 'ibm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Alunos`
--
ALTER TABLE `Alunos`
  ADD PRIMARY KEY (`idAlunos`);

--
-- Indexes for table `Empresas`
--
ALTER TABLE `Empresas`
  ADD PRIMARY KEY (`idEmpresas`);

--
-- Indexes for table `Inscricoes`
--
ALTER TABLE `Inscricoes`
  ADD KEY `fk_Inscricoes_Alunos1_idx` (`Alunos_idAlunos`),
  ADD KEY `fk_Inscricoes_Vagas1_idx` (`Vagas_idVaga`);

--
-- Indexes for table `Vagas`
--
ALTER TABLE `Vagas`
  ADD PRIMARY KEY (`idVaga`),
  ADD KEY `fk_Vagas_Empresas1_idx` (`Empresas_idEmpresas`);

--
-- Indexes for table `acessoAlunos`
--
ALTER TABLE `acessoAlunos`
  ADD PRIMARY KEY (`emailAluno`),
  ADD KEY `fk_table1_Alunos_idx` (`Alunos_idAlunos`);

--
-- Indexes for table `acessoEmpresa`
--
ALTER TABLE `acessoEmpresa`
  ADD KEY `fk_table1_Empresas1_idx` (`Empresas_idEmpresas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Alunos`
--
ALTER TABLE `Alunos`
  MODIFY `idAlunos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Empresas`
--
ALTER TABLE `Empresas`
  MODIFY `idEmpresas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Vagas`
--
ALTER TABLE `Vagas`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Inscricoes`
--
ALTER TABLE `Inscricoes`
  ADD CONSTRAINT `fk_Inscricoes_Alunos1` FOREIGN KEY (`Alunos_idAlunos`) REFERENCES `Alunos` (`idAlunos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inscricoes_Vagas1` FOREIGN KEY (`Vagas_idVaga`) REFERENCES `Vagas` (`idVaga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Vagas`
--
ALTER TABLE `Vagas`
  ADD CONSTRAINT `fk_Vagas_Empresas1` FOREIGN KEY (`Empresas_idEmpresas`) REFERENCES `Empresas` (`idEmpresas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `acessoAlunos`
--
ALTER TABLE `acessoAlunos`
  ADD CONSTRAINT `fk_table1_Alunos` FOREIGN KEY (`Alunos_idAlunos`) REFERENCES `Alunos` (`idAlunos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `acessoEmpresa`
--
ALTER TABLE `acessoEmpresa`
  ADD CONSTRAINT `fk_table1_Empresas1` FOREIGN KEY (`Empresas_idEmpresas`) REFERENCES `Empresas` (`idEmpresas`) ON DELETE NO ACTION ON UPDATE NO ACTION;
