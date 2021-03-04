-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_syschlr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAdmin` varchar(45) NOT NULL,
  `cpfAdmin` varchar(45) NOT NULL,
  `emailAdmin` varchar(45) DEFAULT NULL,
  `telefoneAdmin` varchar(45) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idAdministrador`),
  KEY `fk_Administrador_Perfil1_idx` (`Perfil_idPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nomeAdmin`, `cpfAdmin`, `emailAdmin`, `telefoneAdmin`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(2, 'Roberto Cosme', '00901232', 'robertocosme@gmail.com', '61 900003872', 'Roberto', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Vinicius Silva', '00901232', 'viniciussilva@gmail.com', '61 900003872', 'Vinicius', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
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
  `Perfil_idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `fk_Cliente_Perfil1_idx` (`Perfil_idPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `emailCliente`, `celularCliente`, `cpfCliente`, `cepCliente`, `enderecoCliente`, `complementCliente`, `numeroCliente`, `bairroCliente`, `cidadeCliente`, `estadoCliente`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(1, 'Edimar', 'nogueiraguerra@gmail.com', '61-32189130', '6465656', '72710020', 'Quadra 2 ', 'casa', 58, 'Setor Norte (Brazlândia)', 'Brasília', 'DF', 'edimar', '202cb962ac59075b964b07152d234b70', 2),
(2, 'Ruan Lucas', 'ruanlucas@gmail.com', '(61) 90000-0000', '82734342', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, 'Ceilândia Norte (Ceilândia)', 'Brasília', 'DF', 'Ruan', '202cb962ac59075b964b07152d234b70', 2),
(3, 'MarcosS', 'marcos@gmail.com', '90000000', '12323413', '72240807', '', '', 0, '', '', '', '', '74be16979710d4c4e7c6647856088456', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) NOT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `profissional` (
  `idProfissional` int(11) NOT NULL AUTO_INCREMENT,
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
  `Perfil_idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idProfissional`),
  KEY `fk_Profissional_Perfil1_idx` (`Perfil_idPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`idProfissional`, `nomeProfissional`, `emailProfissional`, `celularProfissional`, `cpfProfissional`, `cepProfissional`, `enderecoProfissional`, `complementProfissional`, `numeroProfissional`, `bairroProfissional`, `cidadeProfissional`, `estadoProfissional`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(2, 'Ruan Lucas', 'ruanlucas@gmail.com', '(61) 90000-0000', '0000000', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Ruan', '123', 3),
(3, 'Ruan Lucas', 'ruanlucas@gmail.com', '(61) 90000-0000', '0000000', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Pedro', '202cb962ac59075b964b07152d234b70', 3),
(4, 'Carlos Henrique', 'ruanlucas@gmail.com', '(61) 90000-0000', '8237823', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Carlos', '202cb962ac59075b964b07152d234b70', 3),
(5, 'Sandra Soares', 'sandrasoares@gmail.com', '(61) 90000-0000', '8237823', '72240807', 'QNP 9 Conjunto G', 'Casa', 28, '', 'Brasília', 'DF', 'Sandra', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaocasa`
--

CREATE TABLE IF NOT EXISTS `solicitacaocasa` (
  `codSolicitacao` int(11) NOT NULL AUTO_INCREMENT,
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
  `horaServ` varchar(6) NOT NULL,
  `precoCasa` varchar(7) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`codSolicitacao`),
  KEY `fk_SolicitacaoCasa_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaoemp`
--

CREATE TABLE IF NOT EXISTS `solicitacaoemp` (
  `codSolicitacaoEmp` int(11) NOT NULL AUTO_INCREMENT,
  `locServ` varchar(20) NOT NULL,
  `quantBanheirosEmp` int(11) NOT NULL,
  `areaServ` varchar(10) NOT NULL,
  `periodoServEmp` varchar(10) NOT NULL,
  `diaServEmp` int(11) NOT NULL,
  `mesServEmp` varchar(15) NOT NULL,
  `anoServEmp` int(11) NOT NULL,
  `horaServEmp` varchar(6) NOT NULL,
  `precoEmp` varchar(7) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`codSolicitacaoEmp`),
  KEY `fk_SolicitacaoEmp_Cliente1_idx` (`Cliente_idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Perfil_idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_tb_usuario_tb_perfil_idx` (`Perfil_idPerfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `Perfil_idPerfil`) VALUES
(1, 'Admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Profissional', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Cliente', '202cb962ac59075b964b07152d234b70', 3);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_Administrador_Perfil1` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Perfil1` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `fk_Profissional_Perfil1` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `solicitacaocasa`
--
ALTER TABLE `solicitacaocasa`
  ADD CONSTRAINT `fk_SolicitacaoCasa_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `solicitacaoemp`
--
ALTER TABLE `solicitacaoemp`
  ADD CONSTRAINT `fk_SolicitacaoEmp_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tb_usuario_tb_perfil` FOREIGN KEY (`Perfil_idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
