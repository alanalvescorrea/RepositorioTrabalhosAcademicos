-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `acervo_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervos`
--

CREATE TABLE IF NOT EXISTS `acervos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `resumo` text NOT NULL,
  `abstract` text NOT NULL,
  `num_pag` int(11) NOT NULL,
  `data_apres` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pal_cha` varchar(250) NOT NULL,
  `tipo_link` int(11) NOT NULL,
  `end_link` text NOT NULL,
  `idioma` varchar(200) NOT NULL,
  `observacao` text NOT NULL,
  `instituicoes_id` int(11) NOT NULL,
  `acervos_alunos_id` int(11) NOT NULL,
  `acervos_orientadores_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `instituicoes_id` (`instituicoes_id`),
  KEY `acervos_alunos_id` (`acervos_alunos_id`),
  KEY `acervos_orientadores_id` (`acervos_orientadores_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervos_alunos`
--

CREATE TABLE IF NOT EXISTS `acervos_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `observacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervos_orientadores`
--

CREATE TABLE IF NOT EXISTS `acervos_orientadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `observacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `observacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id`, `nome`, `observacao`) VALUES
(1, 'MATEMÁTICA', NULL),
(2, 'PROBABILIDADE E ESTATÍSTICA', NULL),
(3, 'CIÊNCIA DA COMPUTAÇÃO', NULL),
(4, 'ASTRONOMIA', NULL),
(5, 'FÍSICA', NULL),
(6, 'QUÍMICA', NULL),
(7, 'GEOCIÊNCIAS', NULL),
(8, 'GENÉTICA', NULL),
(9, 'MORFOLOGIA', NULL),
(10, 'FISIOLOGIA', NULL),
(11, 'BIOQUÍMICA', NULL),
(12, 'BIOFÍSICA', NULL),
(13, 'FARMACOLOGIA', NULL),
(14, 'IMUNOLOGIA', NULL),
(15, 'MICROBIOLOGIA', NULL),
(16, 'PARASITOLOGIA', NULL),
(17, 'ECOLOGIA', NULL),
(18, 'OCEANOGRAFIA', NULL),
(19, 'BOTÂNICA', NULL),
(20, 'ZOOLOGIA', NULL),
(21, 'ENGENHARIA CIVIL', NULL),
(22, 'ENGENHARIA SANITÁRIA', NULL),
(23, 'ENGENHARIA DE TRANSPORTES', NULL),
(24, 'ENGENHARIA DE MINAS', NULL),
(25, 'ENGENHARIA DE MATERIAIS E METALÚRGICA', NULL),
(26, 'ENGENHARIA QUÍMICA', NULL),
(27, 'ENGENHARIA NUCLEAR', NULL),
(28, 'ENGENHARIA MECÂNICA', NULL),
(29, 'ENGENHARIA DE PRODUÇÃO', NULL),
(30, 'ENGENHARIA NAVAL E OCEÂNICA ', NULL),
(31, 'ENGENHARIA AEROESPACIAL', NULL),
(32, 'ENGENHARIA ELÉTRICA', NULL),
(33, 'ENGENHARIA BIOMÉDICA', NULL),
(34, 'MEDICINA', NULL),
(35, 'NUTRIÇÃO', NULL),
(36, 'ODONTOLOGIA', NULL),
(37, 'FARMÁCIA', NULL),
(38, 'ENFERMAGEM', NULL),
(39, 'SAÚDE COLETIVA', NULL),
(40, 'EDUCAÇÃO FÍSICA', NULL),
(41, 'FONOAUDIOLOGIA', NULL),
(42, 'FISIOTERAPIA E TERAPIA OCUPACIONAL', NULL),
(43, 'AGRONOMIA', NULL),
(44, 'RECURSOS FLORESTAIS E ENGENHARIA FLORESTAL', NULL),
(45, 'ENGENHARIA AGRÍCOLA', NULL),
(46, 'ZOOTECNIA', NULL),
(47, 'RECURSOS PESQUEIROS E ENGENHARIA DE PESCA', NULL),
(48, 'MEDICINA VETERINÁRIA', NULL),
(49, 'CIÊNCIA E TECNOLOGIA DE ALIMENTOS', NULL),
(50, 'DIREITO', NULL),
(51, 'ADMINISTRAÇÃO', NULL),
(52, 'TURISMO', NULL),
(53, 'ECONOMIA', NULL),
(54, 'ARQUITETURA E URBANISMO', NULL),
(55, 'DESENHO INDUSTRIAL', NULL),
(56, 'PLANEJAMENTO URBANO E REGIONAL', NULL),
(57, 'DEMOGRAFIA', NULL),
(58, 'CIÊNCIA DA INFORMAÇÃO', NULL),
(59, 'MUSEOLOGIA', NULL),
(60, 'SERVIÇO SOCIAL', NULL),
(61, 'FILOSOFIA', NULL),
(62, 'TEOLOGIA', NULL),
(63, 'SOCIOLOGIA', NULL),
(64, 'ANTROPOLOGIA', NULL),
(65, 'ARQUEOLOGIA', NULL),
(66, 'HISTÓRIA', NULL),
(67, 'GEOGRAFIA', NULL),
(68, 'PSICOLOGIA', NULL),
(69, 'EDUCAÇÃO', NULL),
(70, 'CIÊNCIA POLÍTICA', NULL),
(71, 'LINGUÍSTICA', NULL),
(72, 'LETRAS', NULL),
(73, 'ARTES', NULL),
(74, 'INTERDISCIPLINAR', NULL),
(75, 'ENSINO', NULL),
(76, 'MATERIAIS', NULL),
(77, 'BIOTECNOLOGIA', NULL),
(78, 'CIÊNCIAS AMBIENTAIS', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicoes`
--

CREATE TABLE IF NOT EXISTS `instituicoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `pais` varchar(255) NOT NULL DEFAULT 'Brasil',
  `observacao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavras_chave`
--

CREATE TABLE IF NOT EXISTS `palavras_chave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acervos_id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `acervos_id` (`acervos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` text NOT NULL,
  `tipo_acesso` int(11) NOT NULL,
  `observacao` text,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `tel`, `email`, `login`, `senha`, `tipo_acesso`, `observacao`, `data`, `hora`) VALUES
(15, 'Alan Alves Correa', '05136639024', 'alan.correa.sul@gmail.com', 'alanalvescorrea', '10', 1, '', '2013-07-23', '16:59:14'),
(16, 'Janio', '99998888', 'nome@site.com.br', 'janio', '11', 2, 'janio', '2013-07-23', '19:15:59'),
(18, 'Jonas Ribeiro', '05136013128', 'jonas@site.com.br', 'jonas', '', 1, 'Teste novo usuÃ¡rio', '2013-07-24', '19:44:54'),
(19, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:21:28'),
(20, 'Jonas Ribeiro', '05136013128', 'jonas@site.com.br', 'jonas', 'jonas', 1, 'EspaÃ§o para informaÃ§Ãµes adicionais e comentÃ¡rios', '2013-07-25', '19:31:01'),
(21, 'Amaral andrade', '05111223344', 'amaral@site.com', 'amaral', '15', 1, 'EspaÃ§o para informaÃ§Ãµes adicionais e comentÃ¡rios', '2013-07-25', '19:33:56'),
(22, 'Raquel', '05190564789', 'raquel@email.com', 'raquel', 'raquel', 1, 'EspaÃ§o para informaÃ§Ãµes adicionais e comentÃ¡rios', '2013-07-25', '19:39:57'),
(23, 'Raquel', '05190564789', 'raquel@email.com', 'raquel', 'raquel', 1, 'EspaÃ§o para informaÃ§Ãµes adicionais e comentÃ¡rios', '2013-07-25', '19:41:58'),
(24, 'Raquel', '05190564789', 'raquel@email.com', 'raquel', 'raquel', 1, 'EspaÃ§o para informaÃ§Ãµes adicionais e comentÃ¡rios', '2013-07-25', '19:42:50'),
(25, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:43:29'),
(26, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:44:43'),
(27, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:45:14'),
(28, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:45:28'),
(29, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:45:46'),
(30, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:46:13'),
(31, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:46:20'),
(32, 'Alan Alves Correa', '05199880070', 'alan.sms@hotmail.com', 'alanalvescorrea', '20', 1, 'mora em osÃ³rio', '2013-07-25', '19:46:51');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `acervos`
--
ALTER TABLE `acervos`
  ADD CONSTRAINT `acervos_ibfk_1` FOREIGN KEY (`instituicoes_id`) REFERENCES `instituicoes` (`id`),
  ADD CONSTRAINT `acervos_ibfk_2` FOREIGN KEY (`acervos_alunos_id`) REFERENCES `acervos_alunos` (`id`),
  ADD CONSTRAINT `acervos_ibfk_3` FOREIGN KEY (`acervos_orientadores_id`) REFERENCES `acervos_orientadores` (`id`);

--
-- Restrições para a tabela `palavras_chave`
--
ALTER TABLE `palavras_chave`
  ADD CONSTRAINT `palavras_chave_ibfk_1` FOREIGN KEY (`acervos_id`) REFERENCES `acervos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
