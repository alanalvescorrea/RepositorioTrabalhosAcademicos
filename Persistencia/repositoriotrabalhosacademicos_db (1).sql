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
-- Banco de Dados: `repositoriotrabalhosacademicos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id`, `nome`, `observacao`) VALUES
(1, 'MATEMÁTICA', ''),
(2, 'PROBABILIDADE E ESTATÍSTICA', ''),
(3, 'CIÊNCIA DA COMPUTAÇÃO', ''),
(4, 'ASTRONOMIA', ''),
(5, 'FÍSICA', ''),
(6, 'QUÍMICA', ''),
(7, 'GEOCIÊNCIAS', ''),
(8, 'GENÉTICA', ''),
(9, 'MORFOLOGIA', ''),
(10, 'FISIOLOGIA', ''),
(11, 'BIOQUÍMICA', ''),
(12, 'BIOFÍSICA', ''),
(13, 'FARMACOLOGIA', ''),
(14, 'IMUNOLOGIA', ''),
(15, 'MICROBIOLOGIA', ''),
(16, 'PARASITOLOGIA', ''),
(17, 'ECOLOGIA', ''),
(18, 'OCEANOGRAFIA', ''),
(19, 'BOTÂNICA', ''),
(20, 'ZOOLOGIA', ''),
(21, 'ENGENHARIA CIVIL', ''),
(22, 'ENGENHARIA SANITÁRIA', ''),
(23, 'ENGENHARIA DE TRANSPORTES', ''),
(24, 'ENGENHARIA DE MINAS', ''),
(25, 'ENGENHARIA DE MATERIAIS E METALÚRGICA', ''),
(26, 'ENGENHARIA QUÍMICA', ''),
(27, 'ENGENHARIA NUCLEAR', ''),
(28, 'ENGENHARIA MECÂNICA', ''),
(29, 'ENGENHARIA DE PRODUÇÃO', ''),
(30, 'ENGENHARIA NAVAL E OCEÂNICA ', ''),
(31, 'ENGENHARIA AEROESPACIAL', ''),
(32, 'ENGENHARIA ELÉTRICA', ''),
(33, 'ENGENHARIA BIOMÉDICA', ''),
(34, 'MEDICINA', ''),
(35, 'NUTRIÇÃO', ''),
(36, 'ODONTOLOGIA', ''),
(37, 'FARMÁCIA', ''),
(38, 'ENFERMAGEM', ''),
(39, 'SAÚDE COLETIVA', ''),
(40, 'EDUCAÇÃO FÍSICA', ''),
(41, 'FONOAUDIOLOGIA', ''),
(42, 'FISIOTERAPIA E TERAPIA OCUPACIONAL', ''),
(43, 'AGRONOMIA', ''),
(44, 'RECURSOS FLORESTAIS E ENGENHARIA FLORESTAL', ''),
(45, 'ENGENHARIA AGRÍCOLA', ''),
(46, 'ZOOTECNIA', ''),
(47, 'RECURSOS PESQUEIROS E ENGENHARIA DE PESCA', ''),
(48, 'MEDICINA VETERINÁRIA', ''),
(49, 'CIÊNCIA E TECNOLOGIA DE ALIMENTOS', ''),
(50, 'DIREITO', ''),
(51, 'ADMINISTRAÇÃO', ''),
(52, 'TURISMO', ''),
(53, 'ECONOMIA', ''),
(54, 'ARQUITETURA E URBANISMO', ''),
(55, 'DESENHO INDUSTRIAL', ''),
(56, 'PLANEJAMENTO URBANO E REGIONAL', ''),
(57, 'DEMOGRAFIA', ''),
(58, 'CIÊNCIA DA INFORMAÇÃO', ''),
(59, 'MUSEOLOGIA', ''),
(60, 'SERVIÇO SOCIAL', ''),
(61, 'FILOSOFIA', ''),
(62, 'TEOLOGIA', ''),
(63, 'SOCIOLOGIA', ''),
(64, 'ANTROPOLOGIA', ''),
(65, 'ARQUEOLOGIA', ''),
(66, 'HISTÓRIA', ''),
(67, 'GEOGRAFIA', ''),
(68, 'PSICOLOGIA', ''),
(69, 'EDUCAÇÃO', ''),
(70, 'CIÊNCIA POLÍTICA', ''),
(71, 'LINGUÍSTICA', ''),
(72, 'LETRAS', ''),
(73, 'ARTES', ''),
(74, 'INTERDISCIPLINAR', ''),
(75, 'ENSINO', ''),
(76, 'MATERIAIS', ''),
(77, 'BIOTECNOLOGIA', ''),
(78, 'CIÊNCIAS AMBIENTAIS', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `observacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `nome`, `email`, `observacao`) VALUES
(1, 'Thiago', 'contato@thiagobelem.net', 'obs'),
(2, 'Fulano da Silva', 'fulano@email.com', 'obs'),
(3, 'Ciclano', 'ciclano@uol.com.br', 'obs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE IF NOT EXISTS `instituicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `observacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`, `email`, `observacao`) VALUES
(1, 'Faculdade Cenecista de Osório', 'facos@mail.com', 'fone:3663-0852'),
(2, 'Instituto Federal - campo Osório', 'mail@mail.com', 'fone:3663-8800');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientador`
--

CREATE TABLE IF NOT EXISTS `orientador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `observacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `orientador`
--

INSERT INTO `orientador` (`id`, `nome`, `email`, `observacao`) VALUES
(1, 'Andrio Pinto dos Santos', 'mail@mail.com', 'mestre em computação aplicada'),
(2, 'Renata Zanella', 'renata@mail.com', 'reside em Porto Alegre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho_academico`
--

CREATE TABLE IF NOT EXISTS `trabalho_academico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `resumo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `abstract` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `numero_paginas` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `local_pdf` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `palavras_chave` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `aluno` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `trabalho_academico`
--

INSERT INTO `trabalho_academico` (`id`, `titulo`, `tipo`, `resumo`, `abstract`, `numero_paginas`, `data`, `local_pdf`, `palavras_chave`, `area`, `aluno`, `instituicao`, `orientador`) VALUES
(22, 'a', NULL, 'a', 'a', 1, '0000-00-00 00:00:00', 'http://www.freewebmasterhelp.com/tutorials/phpmysql/4', 'tecnologia digital', 'CIÃŠNCIA DA COMPUTAÃ‡ÃƒO', '', '', ''),
(23, 's', NULL, 's', 's', 56, '0000-00-00 00:00:00', 'http://www.freewebmasterhelp.com/tutorials/phpmysql/4', 'tecnologia digital', 'GEOCIÃŠNCIAS', '', '', ''),
(24, 'o', NULL, 'o', 'o', 12, '0000-00-00 00:00:00', 'http://www.freewebmasterhelp.com/tutorials/phpmysql/4', 'tecnologia digital', 'PROBABILIDADE E ESTATÃSTICA', '', '', ''),
(25, 'novo', NULL, 'wwww', 'wwww', 23, '0000-00-00 00:00:00', 'C:UsersPublicPicturesSample Picturesa.pdf', 'tecnologia digital', 'ARQUEOLOGIA', '', '', ''),
(26, 'agora Ã© pra valer', NULL, 'resumo agora Ã© pra valer', 'abstract agora Ã© para valer', 89, '2013-04-04 11:04:23', 'http://informatica.besaba.com/conteudo/xdk%20intel.txt', 'tecnologia digital', 'AGRONOMIA', 'Ciclano', '', ''),
(27, 'novo', NULL, 'a', 'a', 23, '0000-00-00 00:00:00', 'eeee', 'tecnologia digital', 'ASTRONOMIA', 'Fulano da Silva', 'Instituto Federal - campo Osï¿½rio', 'Renata Zanella');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT '1' COMMENT 'Normal (1) e Administrador (2)',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `niveis` (`nivel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
(1, 'Usu?rio Teste', 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'usuario@demo.com.br', 1, 1, '2009-07-24 08:32:53'),
(2, 'Administrador Teste', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@demo.com.br', 2, 1, '2009-07-24 08:40:40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
