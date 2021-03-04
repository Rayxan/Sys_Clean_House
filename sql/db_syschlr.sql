-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2017 às 19:53
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `telefoneAdmin` varchar(45) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nomeAdmin`, `cpfAdmin`, `emailAdmin`, `telefoneAdmin`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(2, 'Roberto Cosme', '00901232', 'robertocosme@gmail.com', '61 900003872', 'Roberto', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Vinicius Silva', '00901232', 'viniciussilva@gmail.com', '61 900003872', 'Vinicius', '202cb962ac59075b964b07152d234b70', 1),
(4, 'Admin', '878628', 'admin@gmail.com', '61 90000-3872', 'Admin', '202cb962ac59075b964b07152d234b70', 1),
(9, 'Gabriel Alves', '00901232', 'gabrielalves@gmail.com', '61 900003872', 'Gabriel', '202cb962ac59075b964b07152d234b70', 1);

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
  `senha` varchar(45) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `emailCliente`, `celularCliente`, `cpfCliente`, `cepCliente`, `enderecoCliente`, `complementCliente`, `numeroCliente`, `bairroCliente`, `cidadeCliente`, `estadoCliente`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(1, 'Edimar', 'nogueiraguerra@gmail.com', '61-32189130', '6465656', '72710020', 'Quadra 2 ', 'casa', 58, 'Setor Norte (Brazlândia)', 'Brasília', 'DF', 'edimar', '202cb962ac59075b964b07152d234b70', 2),
(7, 'Cliente', 'cliente@gmail.com', '(61) 90000-0000', '000.000.000-00', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, 'Ceilândia Norte (Ceilândia)', 'Brasília', 'DF', 'Cliente', '202cb962ac59075b964b07152d234b70', 2),
(9, 'Raylan Sales', 'raylansales@gmail.com', '(61) 90000-0000', '000.000.000-00', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, 'Ceilândia Norte (Ceilândia)', 'Brasília', 'DF', 'Raylan', '202cb962ac59075b964b07152d234b70', 2),
(10, 'Mariana Gomes', 'marianagomes@gmail.com', '(61) 90000-0000', '000.000.000-00', '72220201', 'QNN 20 Conjunto A', 'Casa', 28, 'Ceilândia Sul (Ceilândia)', 'Brasília', 'DF', 'Mariana', '202cb962ac59075b964b07152d234b70', 2),
(11, 'Mirian Rocha', 'mirianrocha@gmail.com', '(61) 90000-0000', '000.000.000-00', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, 'Ceilândia Norte (Ceilândia)', 'Brasília', 'DF', 'Mirian', '202cb962ac59075b964b07152d234b70', 2);

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
  `senha` varchar(45) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`idProfissional`, `nomeProfissional`, `emailProfissional`, `celularProfissional`, `cpfProfissional`, `cepProfissional`, `enderecoProfissional`, `complementProfissional`, `numeroProfissional`, `bairroProfissional`, `cidadeProfissional`, `estadoProfissional`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(3, 'Ruan Lucas', 'ruanlucas@gmail.com', '(61) 90000-0000', '0000000', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Pedro', '202cb962ac59075b964b07152d234b70', 3),
(4, 'Carlos Henrique', 'ruanlucas@gmail.com', '(61) 90000-0000', '8237823', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Carlos', '202cb962ac59075b964b07152d234b70', 3),
(5, 'Sandra Soares', 'sandrasoares@gmail.com', '(61) 90000-0000', '8237823', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Sandra', '202cb962ac59075b964b07152d234b70', 3),
(7, 'Profissional', 'micaelalves@gmail.com', '61 99000-0000', '8763278468', '72240807', 'QNP 9 Conjunto G', 'Casa', 29, '', 'Brasília', 'DF', 'Profissional', '202cb962ac59075b964b07152d234b70', 3),
(10, 'Diogenes Maia', 'diogenesmaia@gmail.com', '(61) 90000-0000', '000.000.000-00', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Diogenes', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaocasa`
--

CREATE TABLE `solicitacaocasa` (
  `codSolicitacao` int(11) NOT NULL,
  `tipoServico` varchar(45) NOT NULL,
  `tipoResidencia` varchar(45) NOT NULL,
  `quantBanheiros` int(11) NOT NULL,
  `quantQuartos` int(11) NOT NULL,
  `janelas` varchar(45) DEFAULT NULL,
  `geladeira` varchar(45) DEFAULT NULL,
  `armario` varchar(45) DEFAULT NULL,
  `aspirar` varchar(45) DEFAULT NULL,
  `garagem` varchar(45) DEFAULT NULL,
  `churrasqueira` varchar(45) DEFAULT NULL,
  `periodoServ` varchar(10) NOT NULL,
  `diaServ` int(11) NOT NULL,
  `mesServ` varchar(15) NOT NULL,
  `anoServ` int(11) NOT NULL,
  `horaServ` varchar(15) NOT NULL,
  `precoCasa` varchar(7) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitacaocasa`
--

INSERT INTO `solicitacaocasa` (`codSolicitacao`, `tipoServico`, `tipoResidencia`, `quantBanheiros`, `quantQuartos`, `janelas`, `geladeira`, `armario`, `aspirar`, `garagem`, `churrasqueira`, `periodoServ`, `diaServ`, `mesServ`, `anoServ`, `horaServ`, `precoCasa`, `Cliente_idCliente`) VALUES
(1, 'Limpeza Comum', 'Casa', 2, 2, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', 'Aspirar tapetes e estofados', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Semanal', 1, '1', 1, '1', 'R$ 320', NULL),
(2, 'Limpeza Comum', 'Casa', 4, 3, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', 'Aspirar tapetes e estofados', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Diária', 1, '1', 1, '1', 'R$ 380', NULL),
(3, 'Limpeza Comum', 'Casa', 4, 4, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', 'Aspirar tapetes e estofados', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Quinzenal', 1, '1', 1, '1', 'R$ 400', NULL),
(4, 'Limpeza Pesada', 'Casa', 5, 3, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', 'Aspirar tapetes e estofados', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Semanal', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 470', NULL),
(5, 'Limpeza Comum', 'Casa', 2, 2, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', 'Aspirar tapetes e estofados', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Quinzenal', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 320', 1),
(12, 'Limpeza Pesada', 'Casa', 2, 2, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', '', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Quinzenal', 25, 'Outubro', 2017, '8:00 12:00', 'R$ 370', NULL),
(13, 'Limpeza Pesada', 'Casa', 6, 4, 'Interior das janelas', 'Interior da geladeira', 'Interior de armarios de cozinha', '', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Semanal', 8, 'Agosto', 2017, '8:00 12:00', 'R$ 490', NULL),
(16, 'Limpeza Comum', 'Apartamento', 6, 3, '', 'Interior da geladeira', '', '', '', '', 'Diária', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 300', 7),
(17, 'Limpeza Comum', 'Apartamento', 6, 5, '', '', '', '', 'Limpeza da garagem', 'Limpeza da churrasqueira', 'Semanal', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 380', 7),
(19, 'Roupa', 'Apartamento', 3, 4, '', 'Interior da geladeira', '', 'Aspirar tapetes e estofados', '', '', 'Semanal', 25, 'Outubro', 2017, '13:00 17:00', 'R$ 330', NULL),
(24, 'Limpeza Comum', 'Casa', 7, 2, '', 'Interior da geladeira', '', 'Aspirar tapetes e estofados', 'Limpeza da garagem', '', '', 25, 'Outubro', 2017, '8:00 12:00', 'R$ 350', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaoemp`
--

CREATE TABLE `solicitacaoemp` (
  `codSolicitacaoEmp` int(11) NOT NULL,
  `locServ` varchar(20) NOT NULL,
  `quantBanheirosEmp` int(11) NOT NULL,
  `areaServ` varchar(15) NOT NULL,
  `periodoServEmp` varchar(10) NOT NULL,
  `diaServEmp` int(11) NOT NULL,
  `mesServEmp` varchar(15) NOT NULL,
  `anoServEmp` int(11) NOT NULL,
  `horaServEmp` varchar(15) NOT NULL,
  `precoEmp` varchar(7) DEFAULT NULL,
  `Cliente_idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitacaoemp`
--

INSERT INTO `solicitacaoemp` (`codSolicitacaoEmp`, `locServ`, `quantBanheirosEmp`, `areaServ`, `periodoServEmp`, `diaServEmp`, `mesServEmp`, `anoServEmp`, `horaServEmp`, `precoEmp`, `Cliente_idCliente`) VALUES
(1, 'Escritório', 4, '90m² e 120', 'Quinzenal', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 270', 1),
(2, 'Escritório', 6, '90m² e 120', 'Diária', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 310', 1),
(3, 'Restaurante', 7, '180m² e 21', 'Diária', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 390', 1),
(6, 'Loja', 4, '90m² e 120m²', 'Semanal', 20, 'Dezembro', 2017, '8:00 12:00', 'R$ 270', NULL),
(11, 'Loja', 4, '90m² e 120m²', 'Diária', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 270', 7),
(12, 'Escritório', 3, '60m² e 90m²', 'Quinzenal', 1, 'Janeiro', 2017, '8:00 12:00', 'R$ 230', 7),
(13, 'Escritório', 6, '180m² e 210m²', 'Semanal', 25, 'Outubro', 2017, '13:00 17:00', 'R$ 370', NULL),
(15, 'Loja', 5, '60m² e 90m²', 'Diária', 26, 'Outubro', 2017, '8:00 12:00', 'R$ 270', 11);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `idProfissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `solicitacaocasa`
--
ALTER TABLE `solicitacaocasa`
  MODIFY `codSolicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `solicitacaoemp`
--
ALTER TABLE `solicitacaoemp`
  MODIFY `codSolicitacaoEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
