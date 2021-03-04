-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2017 às 00:32
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_syschlr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomeAdmin` varchar(45) NOT NULL,
  `cpfAdmin` varchar(45) NOT NULL,
  `emailAdmin` varchar(45) DEFAULT NULL,
  `enderecoAdmin` varchar(45) NOT NULL,
  `telefoneAdmin` varchar(45) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` int(6) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(65) NOT NULL,
  `emailCliente` varchar(45) DEFAULT NULL,
  `celularCliente` varchar(45) DEFAULT NULL,
  `cpfCliente` varchar(45) NOT NULL,
  `cepCliente` varchar(45) NOT NULL,
  `enderecoCliente` varchar(45) DEFAULT NULL,
  `complementCliente` varchar(45) DEFAULT NULL,
  `numeroCliente` int(11) DEFAULT NULL,
  `bairroCliente` varchar(45) DEFAULT NULL,
  `cidadeCliente` varchar(45) DEFAULT NULL,
  `estadoCliente` varchar(45) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(6) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `perfil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Profissional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `idProfissional` int(11) NOT NULL,
  `nomeProfissional` varchar(65) NOT NULL,
  `emailProfissional` varchar(45) DEFAULT NULL,
  `celularProfissional` varchar(25) DEFAULT NULL,
  `cpfProfissional` varchar(15) NOT NULL,
  `cepProfissional` varchar(45) NOT NULL,
  `enderecoProfissional` varchar(45) DEFAULT NULL,
  `complementProfissional` varchar(45) DEFAULT NULL,
  `numeroProfissional` int(11) DEFAULT NULL,
  `bairroProfissional` varchar(45) DEFAULT NULL,
  `cidadeProfissional` varchar(45) DEFAULT NULL,
  `estadoProfissional` varchar(45) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(6) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaocasa`
--

CREATE TABLE `solicitacaocasa` (
  `codSolicitacao` int(11) NOT NULL,
  `tipoServiço` varchar(45) NOT NULL,
  `tipoResidencia` varchar(45) NOT NULL,
  `quantBanheiros` int(11) NOT NULL,
  `quantQuartos` int(11) NOT NULL,
  `opcionaisServ` varchar(45) NOT NULL,
  `periodoServ` varchar(10) NOT NULL,
  `diaServ` int(11) NOT NULL,
  `mesServ` varchar(15) NOT NULL,
  `anoServ` int(11) NOT NULL,
  `horaServ` varchar(6) NOT NULL,
  `precoCasa` varchar(7) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaoemp`
--

CREATE TABLE `solicitacaoemp` (
  `codSolicitacaoEmp` int(11) NOT NULL,
  `locServ` varchar(20) NOT NULL,
  `quantBanheirosEmp` int(11) NOT NULL,
  `areaServ` varchar(10) NOT NULL,
  `periodoServEmp` varchar(10) NOT NULL,
  `diaServEmp` int(11) NOT NULL,
  `mesServEmp` varchar(15) NOT NULL,
  `anoServEmp` int(11) NOT NULL,
  `horaServEmp` varchar(6) NOT NULL,
  `precoEmp` varchar(7) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(1, 'Admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Profissional', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Cliente', '202cb962ac59075b964b07152d234b70', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD KEY `fk_Administrador_Perfil1_idx` (`Perfil_idPerfil`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `fk_Cliente_Perfil1_idx` (`Perfil_idPerfil`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`idProfissional`),
  ADD KEY `fk_Profissional_Perfil1_idx` (`Perfil_idPerfil`);

--
-- Indexes for table `solicitacaocasa`
--
ALTER TABLE `solicitacaocasa`
  ADD PRIMARY KEY (`codSolicitacao`),
  ADD KEY `fk_SolicitacaoCasa_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indexes for table `solicitacaoemp`
--
ALTER TABLE `solicitacaoemp`
  ADD PRIMARY KEY (`codSolicitacaoEmp`),
  ADD KEY `fk_SolicitacaoEmp_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_tb_usuario_tb_perfil_idx` (`Perfil_idPerfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `idProfissional` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solicitacaocasa`
--
ALTER TABLE `solicitacaocasa`
  MODIFY `codSolicitacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solicitacaoemp`
--
ALTER TABLE `solicitacaoemp`
  MODIFY `codSolicitacaoEmp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_Administrador_Perfil1` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Perfil1` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `fk_Profissional_Perfil1` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `solicitacaocasa`
--
ALTER TABLE `solicitacaocasa`
  ADD CONSTRAINT `fk_SolicitacaoCasa_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `solicitacaoemp`
--
ALTER TABLE `solicitacaoemp`
  ADD CONSTRAINT `fk_SolicitacaoEmp_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tb_usuario_tb_perfil` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
