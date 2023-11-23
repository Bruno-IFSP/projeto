-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 23-Nov-2023 às 13:58
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `simulado`
--
CREATE DATABASE IF NOT EXISTS `simulado` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simulado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativa`
--

CREATE TABLE `alternativa` (
  `idalternativa` int(11) NOT NULL,
  `textoalternativa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alternativa`
--

INSERT INTO `alternativa` (`idalternativa`, `textoalternativa`) VALUES
(10, 'gameplayrj'),
(11, 'davajonas'),
(13, 'residentevil4remakemlk'),
(14, 'francescar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nomealuno` varchar(55) DEFAULT NULL,
  `senhaaluno` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nomearea` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`idarea`, `nomearea`) VALUES
(1, 'matematica'),
(2, 'portugues'),
(3, 'historia'),
(4, 'geografia'),
(5, 'Ingles'),
(6, 'fisica'),
(7, 'quimica'),
(8, 'ciencias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL,
  `textopergunta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idpergunta`, `textopergunta`) VALUES
(10, 'thamires nao faz nada?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntaalternativa`
--

CREATE TABLE `perguntaalternativa` (
  `idalternativa` int(11) NOT NULL,
  `idpergunta` int(11) NOT NULL,
  `correta` enum('S','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perguntaalternativa`
--

INSERT INTO `perguntaalternativa` (`idalternativa`, `idpergunta`, `correta`) VALUES
(10, 10, NULL),
(11, 10, NULL),
(13, 10, NULL),
(14, 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntaprova`
--

CREATE TABLE `perguntaprova` (
  `idprova` int(11) NOT NULL,
  `idpergunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `nomeprofessor` varchar(55) DEFAULT NULL,
  `senhaprofessor` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

CREATE TABLE `prova` (
  `idprova` int(11) NOT NULL,
  `nomeprova` varchar(255) DEFAULT NULL,
  `idpergunta` int(11) DEFAULT NULL,
  `idarea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tentativapergunta`
--

CREATE TABLE `tentativapergunta` (
  `idtentativaprova` int(11) NOT NULL,
  `idalternativa` int(11) DEFAULT NULL,
  `idpergunta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tentativaprova`
--

CREATE TABLE `tentativaprova` (
  `idtentativaprova` int(11) NOT NULL,
  `idprova` int(11) DEFAULT NULL,
  `idaluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`idalternativa`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Índices para tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`idpergunta`);

--
-- Índices para tabela `perguntaalternativa`
--
ALTER TABLE `perguntaalternativa`
  ADD PRIMARY KEY (`idpergunta`,`idalternativa`),
  ADD KEY `fk_idalternativa` (`idalternativa`);

--
-- Índices para tabela `perguntaprova`
--
ALTER TABLE `perguntaprova`
  ADD PRIMARY KEY (`idprova`,`idpergunta`),
  ADD KEY `fk_pergunta1` (`idpergunta`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idprofessor`);

--
-- Índices para tabela `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`idprova`),
  ADD KEY `fk_idpergunta2` (`idpergunta`),
  ADD KEY `fk_idarea` (`idarea`);

--
-- Índices para tabela `tentativapergunta`
--
ALTER TABLE `tentativapergunta`
  ADD PRIMARY KEY (`idtentativaprova`);

--
-- Índices para tabela `tentativaprova`
--
ALTER TABLE `tentativaprova`
  ADD PRIMARY KEY (`idtentativaprova`),
  ADD KEY `fk_idprova` (`idprova`),
  ADD KEY `fk_idaluno` (`idaluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `idalternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idpergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `idprofessor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `perguntaalternativa`
--
ALTER TABLE `perguntaalternativa`
  ADD CONSTRAINT `fk_idalternativa` FOREIGN KEY (`idalternativa`) REFERENCES `alternativa` (`idalternativa`),
  ADD CONSTRAINT `fk_idpergunta` FOREIGN KEY (`idpergunta`) REFERENCES `pergunta` (`idpergunta`);

--
-- Limitadores para a tabela `perguntaprova`
--
ALTER TABLE `perguntaprova`
  ADD CONSTRAINT `fk_idprova1` FOREIGN KEY (`idprova`) REFERENCES `prova` (`idprova`),
  ADD CONSTRAINT `fk_pergunta1` FOREIGN KEY (`idpergunta`) REFERENCES `pergunta` (`idpergunta`);

--
-- Limitadores para a tabela `prova`
--
ALTER TABLE `prova`
  ADD CONSTRAINT `fk_idarea` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`),
  ADD CONSTRAINT `fk_idpergunta2` FOREIGN KEY (`idpergunta`) REFERENCES `perguntaalternativa` (`idpergunta`);

--
-- Limitadores para a tabela `tentativapergunta`
--
ALTER TABLE `tentativapergunta`
  ADD CONSTRAINT `fk_idtentativaprova` FOREIGN KEY (`idtentativaprova`) REFERENCES `tentativaprova` (`idtentativaprova`);

--
-- Limitadores para a tabela `tentativaprova`
--
ALTER TABLE `tentativaprova`
  ADD CONSTRAINT `fk_idaluno` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`),
  ADD CONSTRAINT `fk_idprova` FOREIGN KEY (`idprova`) REFERENCES `prova` (`idprova`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
