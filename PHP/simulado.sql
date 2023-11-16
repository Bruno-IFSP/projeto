-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 25-Out-2023 às 16:24
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

DROP TABLE IF EXISTS `alternativa`;
CREATE TABLE `alternativa` (
  `idalternativa` int(11) NOT NULL,
  `textoalternativa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nomealuno` varchar(55) DEFAULT NULL,
  `senhaaluno` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nomearea` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL,
  `textopergunta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntaalternativa`
--

DROP TABLE IF EXISTS `perguntaalternativa`;
CREATE TABLE `perguntaalternativa` (
  `idalternativa` int(11) NOT NULL,
  `idpergunta` int(11) NOT NULL,
  `correta` enum('S','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `nomeprofessor` varchar(55) DEFAULT NULL,
  `senhaprofessor` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

DROP TABLE IF EXISTS `prova`;
CREATE TABLE `prova` (
  `idprova` int(11) NOT NULL,
  `idprofessor` int(11) DEFAULT NULL,
  `idaluno` int(11) DEFAULT NULL,
  `nomeprova` varchar(255) DEFAULT NULL,
  `idalternativa` int(11) DEFAULT NULL,
  `idpergunta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tentativaprova`
--

DROP TABLE IF EXISTS `tentativaprova`;
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
  ADD KEY `fk_idalternativa2` (`idalternativa`);

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
  MODIFY `idalternativa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `idpergunta` int(11) NOT NULL AUTO_INCREMENT;

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
-- Limitadores para a tabela `prova`
--
ALTER TABLE `prova`
  ADD CONSTRAINT `fk_idalternativa2` FOREIGN KEY (`idalternativa`) REFERENCES `perguntaalternativa` (`idalternativa`),
  ADD CONSTRAINT `fk_idpergunta2` FOREIGN KEY (`idpergunta`) REFERENCES `perguntaalternativa` (`idpergunta`);

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






CREATE TABLE tentativapergunta (
    idtentativaprova int PRIMARY KEY,
    idalternativa int,
    idpergunta int,
    constraint fk_idtentativaprova foreign key (idtentativaprova) references tentativaprova (idtentativaprova)
);

CREATE TABLE perguntaprova (
    idprova int,
    idpergunta int,
    PRIMARY KEY (idprova, idpergunta),
     constraint fk_idprova1 foreign key (idprova) references prova(idprova),
      constraint fk_pergunta1 foreign key (idpergunta) references pergunta(idpergunta)
);


ALTER TABLE `prova`
add idarea int, 
add constraint fk_idarea foreign key (idarea) references area(idarea);

alter table prova 
add constraint fk_idprofessor foreign key (idprofessor) references professor(idprofessor);