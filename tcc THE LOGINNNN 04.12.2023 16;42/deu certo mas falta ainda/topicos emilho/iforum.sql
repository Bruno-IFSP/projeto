-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 16-Ago-2023 às 16:30
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
-- Banco de dados: `iforum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `usu_id` int(11) NOT NULL,
  `usu_name` varchar(255) NOT NULL,
  `usu_email` varchar(255) NOT NULL,
  `usu_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`usu_id`, `usu_name`, `usu_email`, `usu_password`) VALUES
(0, 'Maria', 'maria@ifsp.edu.br', '123456789'),
(1, 'Liam', 'liam@gmail.com', 'password1'),
(2, 'Emma', 'emma@gmail.com', 'password2'),
(3, 'Noah', 'noah@gmail.com', 'password3'),
(4, 'Olivia', 'olivia@gmail.com', 'password4'),
(5, 'William', 'william@gmail.com', 'password5'),
(6, 'Juliah', 'juliah@gamil.com.br', 'password6'),
(7, 'James', 'james@gmail.com', 'password7'),
(8, 'Isabella', 'isabella@gmail.com', 'password8'),
(9, 'Oliver', 'oliver@gmail.com', 'password9'),
(10, 'Sophia', 'sophia@gmail.com', 'password10'),
(11, 'Benjamin', 'benjamin@gmail.com', 'password11'),
(12, 'Mia', 'mia@gmail.com', 'password12'),
(14, 'Charlotte', 'charlotte@gmail.com', 'password14'),
(15, 'Lucas', 'lucas@gmail.com', 'password15'),
(16, 'Amelia', 'amelia@gmail.com', 'password16'),
(18, 'Harper', 'harper@gmail.com', 'password18'),
(19, 'Logan', 'logan@gmail.com', 'password19'),
(20, 'Evelyn', 'evelyn@gmail.com', 'password20');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
