-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2020 às 02:30
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `dataAgenda` date NOT NULL,
  `horaAgenda` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idAlunoAgenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idAluno` int(11) NOT NULL,
  `nomeAluno` varchar(255) NOT NULL,
  `idadeAluno` int(11) NOT NULL,
  `tel1Aluno` int(11) NOT NULL,
  `tel2Aluno` int(11) NOT NULL,
  `ruaAluno` varchar(255) NOT NULL,
  `bairroAluno` varchar(100) NOT NULL,
  `cidadeAluno` varchar(100) NOT NULL,
  `sexoAluno` varchar(20) NOT NULL,
  `situacaoAluno` varchar(3) NOT NULL,
  `personalAluno` varchar(100) NOT NULL,
  `dataCad` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `nomeAluno`, `idadeAluno`, `tel1Aluno`, `tel2Aluno`, `ruaAluno`, `bairroAluno`, `cidadeAluno`, `sexoAluno`, `situacaoAluno`, `personalAluno`, `dataCad`) VALUES
(4, 'LINCOLN TOMAZ MARTINS DE ABREU   ', 18, 1231231, 123123, 'RUA BELO HORIZONTE N 78', 'SAGRADA FAMILIA', 'MANHUAÇU', 'MASCULINO', 'OK', 'LUIZ FELIPE', '2020-09-15 22:03:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal`
--

CREATE TABLE `personal` (
  `idPersonal` int(11) NOT NULL,
  `nomePersonal` varchar(100) NOT NULL,
  `idadePersonal` int(11) NOT NULL,
  `tel1Personal` varchar(20) NOT NULL,
  `tel2Personal` varchar(20) NOT NULL,
  `ruaPersonal` varchar(255) NOT NULL,
  `bairroPersonal` varchar(100) NOT NULL,
  `cidadePersonal` varchar(100) NOT NULL,
  `sexoPersonal` varchar(20) NOT NULL,
  `formacaoPersonal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `personal`
--

INSERT INTO `personal` (`idPersonal`, `nomePersonal`, `idadePersonal`, `tel1Personal`, `tel2Personal`, `ruaPersonal`, `bairroPersonal`, `cidadePersonal`, `sexoPersonal`, `formacaoPersonal`) VALUES
(3, 'LUIZ FELIPE TOMAZ MARTINS DE ABREU', 21, '', '', '', '', '', 'SELECIONE', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `loginUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(255) NOT NULL,
  `nivelUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `loginUsuario`, `senhaUsuario`, `emailUsuario`, `nivelUsuario`, `nomeUsuario`) VALUES
(3, 'LUIZ FELIPE', '123', 'academia@gmail.com', 1, 'LUIZ FELIPE TOMAZ MARTINS DE ABREU'),
(4, 'THALYS COSTA', '123', 'academia@gmail.com', 1, 'THALYS MATOS COSTA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices para tabela `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idPersonal`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personal`
--
ALTER TABLE `personal`
  MODIFY `idPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
