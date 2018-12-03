-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2018 às 05:10
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parede-database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(3) UNSIGNED NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `senha`) VALUES
(2, 'vania', '1db4de056ea1dd4d0e3c77e1d5fc8c16'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `projetos_id` int(10) UNSIGNED NOT NULL,
  `imagem` longblob NOT NULL,
  `legenda` varchar(255) DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lider` tinyint(1) NOT NULL,
  `turma` varchar(255) NOT NULL,
  `projetos_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `participantes`
--

INSERT INTO `participantes` (`id`, `nome`, `email`, `lider`, `turma`, `projetos_id`) VALUES
(107, 'Guilherme Francisco Gostoso', 'guilherme.fsilva213@gmail.com', 1, 'Informática 2° ano', 107),
(108, 'Wesley de Queiroz Silva', 'wesleyfracarisilva@gmail.com', 0, 'Eletromecânica 4° ano', 107),
(109, 'Guilherme Francisco da Silva', 'guilherme@gmail.com', 1, 'Informática 4° ano', 108),
(110, 'Wesley', 'wesley@gmail.com', 0, 'Eletromecânica 2° ano', 108);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `resumo` longtext NOT NULL,
  `situacao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data_exposicao` date DEFAULT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nome`, `resumo`, `situacao`, `data_exposicao`, `data_cadastro`) VALUES
(107, 'SDI-Sistema de Divulgação de Informação', 'Projeto SDi o the best!&#13;&#10;Orientado pelo sor rafael', 2, '2018-11-21', '2018-11-25'),
(108, 'A Parede', 'A PAREDE: ideias que se aderem é a ocupação de uma parede livre e disponível do Câmpus Sapiranga para a realização de intervenções artísticas transitórias e efêmeras em desenho e pintura mediante inscrição de equipes de alunos interessados com a supervisão e acompanhamento do coordenador. Para isso o projeto terá um calendário próprio e anual com regras de ocupação, montagem/desmontagem, prazos e materiais adequados. A Parede: ideias que se aderem quer estimular a expressão dos participantes como enriquecer a observação e a curiosidade dos passantes em franco diálogo com o entorno paisagístico e arquitetônico do campus e arredores.&#13;&#10;&#13;&#10;Objetivo Geral do Projeto: Promover a ocupação e a ativação de uma parede do campus com intervenções em desenho e pintura ao fomentar o estímulo à criatividade e a prática de trabalhos em equipe, como de encontrar soluções gráficas e pictóricas a serem realizadas num curto espaço de tempo envolvendo produção, exposição e o seu desaparecimento.', 0, '2018-11-13', '2018-11-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`,`projetos_id`),
  ADD KEY `fk_imagens_projetos1_idx` (`projetos_id`);

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`,`projetos_id`),
  ADD KEY `fk_participantes_projetos_idx` (`projetos_id`);

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `fk_imagens_projetos1` FOREIGN KEY (`projetos_id`) REFERENCES `projetos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `fk_participantes_projetos` FOREIGN KEY (`projetos_id`) REFERENCES `projetos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
