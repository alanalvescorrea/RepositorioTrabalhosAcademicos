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
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `observacao` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=79 ;

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
(69, 'Educação', ''),
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
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `nome`, `email`, `observacao`) VALUES
(32, 'Alan Alves Correa', 'alan.correa.sul@gmail.com', 'Fone: 05199880070'),
(33, 'Manoel Pereira', 'manoel@mail.com', 'Visto no Brasil atÃ© 2016                                                '),
(34, 'AUGUSTO WEIAND', 'guto.weiand@gmail.com', 'Aluno funcionÃ¡rio da FACOS\r\n                                                ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE IF NOT EXISTS `instituicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`, `email`, `observacao`) VALUES
(4, 'FACULDADE CENECISTA DE OSÃ“RIO', 'facos@facos.edu.br', 'CNEC/OsÃ³rio\r\nFACOS - Faculdade Cenecista de OsÃ³rio\r\nInstituto de EducaÃ§Ã£o Cenecista MarquÃªs de Herval\r\n\r\nRua 24 de Maio, 141, Centro - OsÃ³rio/RS\r\nFone: (51) 2161.0200                                                '),
(5, 'Instituto Federal de EducaÃ§Ã£o, CiÃªncia e Tecnologia do Rio Grande do Sul', 'ifrs@mail.com', 'PÃ³lo em Santo Antonio Patrulha                                                ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientador`
--

CREATE TABLE IF NOT EXISTS `orientador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `orientador`
--

INSERT INTO `orientador` (`id`, `nome`, `email`, `observacao`) VALUES
(5, 'Mariusa Warpechowski', 'mariusaw@gmail.com', 'Professora da disciplina de Tecnologia da informaÃ§Ã£o e produÃ§Ã£o e metodologia de material educativo                                         '),
(6, 'Andrio Pinto dos Santos', 'alndrio@gmail.com', 'Coordenador curso de ComputaÃ§Ã£o                                                '),
(7, 'nome orientador', 'mail@mail.com', ' InformaÃ§Ãµes adicionais sobre o aluno.\r\n                                                ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho_academico`
--

CREATE TABLE IF NOT EXISTS `trabalho_academico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resumo` text COLLATE utf8_unicode_ci,
  `abstract` text COLLATE utf8_unicode_ci,
  `numero_paginas` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `local_pdf` text COLLATE utf8_unicode_ci,
  `palavras_chave` text COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `aluno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `trabalho_academico`
--

INSERT INTO `trabalho_academico` (`id`, `titulo`, `tipo`, `resumo`, `abstract`, `numero_paginas`, `data`, `local_pdf`, `palavras_chave`, `area`, `aluno`, `instituicao`, `orientador`, `ativo`) VALUES
(33, 'USO DOS MOTORES DE BUSCA NA INTERNET: como se configuram as pesquisas de conteÃºdo na Web para a produÃ§Ã£o de trabalhos educacionais', 'Monografia', 'Este trabalho de pesquisa busca entender e demonstrar como se configura a pesquisa de\r\nconteÃºdo na Internet, a partir dos  search enginese, como se dÃ¡ o uso dos filtros de busca\r\nnesse Ã¢mbito.  A pesquisa Ã© uma prÃ¡tica comum e consolidada no contexto educacional,\r\nobjetivando  a  busca  de  insumos  adequados  para  a  produÃ§Ã£o  de  trabalhos,  apoiados\r\nbibliograficamente e, capazes de fomentar as discussÃµes intelectuais. Nesse sentido, entendese o termo pesquisa como uma derivaÃ§Ã£o do latim  perquiro, que devido a transformaÃ§Ãµes\r\nfonÃ©ticas ao longo da histÃ³ria teve o R transformado por S, dando origem ao termo pesquisa.\r\nÃ‰ vÃ¡lido ressaltar a diferenciaÃ§Ã£o das pesquisas, classificando-as em Pesquisa Escolar ou\r\nPesquisa de ConteÃºdo e Pesquisa CientÃ­fica. A Pesquisa de ConteÃºdo, deve ser desenvolvida\r\natravÃ©s de vÃ¡rias fontes bibliogrÃ¡ficas, visuais, orais entre outras, com o objetivo de subsidiar\r\na aprendizagem de determinados conceitos. Posicionado nesse contexto, este Trabalho de\r\nConclusÃ£o de Curso, visou investigar como se configura a pesquisa de conteÃºdo por parte dos\r\nalunos da turma de Tecnologia da InformaÃ§Ã£o do curso de Letras da Faculdade Cenecista de\r\nOsÃ³rio-RS, para a composiÃ§Ã£o de trabalhos textuais com o uso dos sites de buscas. Essa turma\r\nfoi acompanhada em duas aulas, tendo o histÃ³rico de navegaÃ§Ã£o do browser de Internet\r\nanalisado e questionÃ¡rios aplicados, com vistas ao levantamento de dados para futura anÃ¡lises.\r\nEste estudo demostrou o Google como escolha preferida para a realizaÃ§Ã£o de pesquisas de\r\nconteÃºdo, e os impactos que os filtros de busca produzem nos processo de pesquisa na Web." " " "   ', 'This research work tries to understand and demonstrate how is configured the research of\r\ncontents in Internet, from search engines and, how the use of filters work. The research is a\r\npractice comum and consolidated in an educational context, aiming a search for appropriate\r\ninputs for production of works, bibliographically supported and capable to promote\r\nintelectual discussions. Accordingly, it means the term PESQUISA like a derivation from latin\r\nword PERQUIRO, that due phonetics transformations along the years, had the R transformed\r\ninto a S, origining the term PESQUISA (research). It`s important the differentiation of\r\nresearches, classifying them into scholar research, content research and cientific research.\r\nThe content research, must be developed among several bibliographic sources, visual, oral\r\nand others, with the main objective of subsidize the learning of some concepts. Positioned on\r\nthis concept, this work on course conclusion aims to investigate how the content research is\r\nconfigured from some students of Information tecnology from Letters course of Faculdade\r\ncenecista de OsÃ³rio- RS, for textual composition using search sites. This class was\r\naccompanied in two days, having the browser navigation history from Internet analyzed and\r\nan applied survey, looking for data levy to be used in future analysis. This research\r\ndemonstrated Google as preferred choose for content researches and the impacts that\r\nresearch filters produce on the process of web research.', 82, '2013-10-01 17:00:00', 'http://informatica.besaba.com/conteudo/USO%20DOS%20MOTORES%20DE%20BUSCA%20NA%20INTERNET%20-%20TCC%20Alan%20Alves%20Correa.pdf', 'Internet. Filtros de Busca. Pesquisa de conteÃºdo. Motores de Busca. Google.', 'EducaÃ§Ã£o', 'Alan Alves Correa', 'FACULDADE CENECISTA DE OSÃ“RIO', 'Mariusa Warpechowski', 1),
(34, 'O ALUNO DE EAD EM FÃ“RUNS DO AVA MOODLE: um estudo sobre suas competÃªncias', 'Monografia', 'Este trabalho apresenta uma pesquisa acerca da construÃ§Ã£o de um sistema de  MineraÃ§Ã£o de\r\nDados embasado em pesquisas sobre competÃªncias de alunos para educaÃ§Ã£o a distÃ¢ncia,\r\nnorteadas pelas pesquisas da autora PatrÃ­cia Alejandra Behar, assim como nas pesquisas sobre\r\nsistemas de MineraÃ§Ã£o de Dados. Desta forma foi elaborado um modelo de mapeamento de\r\ncompetÃªncias dos discentes em fÃ³runs de discussÃµes atravÃ©s da implementaÃ§Ã£o da ferramenta\r\ndesenvolvida. Para tal, seguiram-se diversas etapas, dentre elas: estudos bibliogrÃ¡ficos sobre\r\ncompetÃªncias  discentes  em  EAD  e  tÃ©cnicas  de  MineraÃ§Ã£o  de  Dados;  implementaÃ§Ã£o  do\r\nmodelo de mapeamento de competÃªncias discentes atravÃ©s da ferramenta de  MineraÃ§Ã£o de\r\nDados para fÃ³runs do AVA Moodle, desenvolvida; a simulaÃ§Ã£o do uso da ferramenta em\r\nambiente de teste; anÃ¡lise e validaÃ§Ã£o dos resultados obtidos atravÃ©s da ferramenta; propor a\r\nutilizaÃ§Ã£o da ferramenta para mapear as competÃªncias dos alunos na EAD como suporte na\r\nelaboraÃ§Ã£o de conteÃºdos para esta modalidade. AtravÃ©s destas etapas, foram gerados dados e\r\ngrÃ¡ficos que demonstram os resultados obtidos, assim foram efetuadas anÃ¡lises dos mesmos, a\r\nfim de se obterem maiores conhecimentos e deduÃ§Ãµes acerca dos conceitos. Este trabalho\r\nbuscou desenvolver tambÃ©m um sistema ao qual se fosse possÃ­vel futuramente auxiliar os\r\nprofessores,  tutores  e  administradores  de  sistemas  EAD,  no  desenvolvimento  e\r\naprimoramento de conteÃºdos, utilizando para tal, tecnologias livres a fim de ser possÃ­vel a\r\ndisponibilizaÃ§Ã£o do software fruto desta pesquisa de forma livre. ', 'This paper presents a research about the construction of a data mining system based on\r\nclinical research skills of students to distance education, guided by the research of the writer\r\nPatricia  Alejandra  Behar,  as  well  as  in  research  on  data  mining  systems. Therefore  we\r\ndesigned a model mapping skills of learners in discussion forums through the implementation\r\nof the developed tool. For this purpose, several steps were followed, including: bibliographic\r\nstudies  on  studentsskills  in  distance  learning  and  data  mining  techniques;  model\r\nimplementation mapping studentsskills through data mining tool for the LMSMoodle forums\r\ndeveloped, the simulation tool usage in a test environment, analysis and validation of the\r\nresults obtained through the tool; propose the use of the tool to map the skills of students in\r\ndistance education as a support in the development of content for this mode. Through these\r\nsteps, we generated data and graphs showing the results obtained, the same analyzes were\r\ncarried out in order to obtain more knowledge about the concepts and deductions. This study\r\nalso  sought  to  develop  a  system to  possibly  help the  teachers  in the  future, tutors  and\r\nadministrators EAD systems, in the development and improvement of content, using for that,\r\nfree technologies in order to be able to offer the software, result of this research, for free. ', 58, '2013-10-16 16:16:41', 'http://informatica.besaba.com/trabalhosacademicos/O_ALUNO_DE_EAD_EM_FORUNS_DO_AVA_MOODLE.pdf', 'MineraÃ§Ã£o  de  Dados.  Ambiente  Virtual  de  Aprendizado.  Moodle. CompetÃªncias. EducaÃ§Ã£o a DistÃ¢ncia', 'EducaÃ§Ã£o', 'AUGUSTO WEIAND', 'FACULDADE CENECISTA DE OSÃ“RIO', 'Andrio Pinto dos Santos', 1),
(35, 'ABC', 'Monografia', 'ABC', 'ABC', 20, '0000-00-00 00:00:00', 'http://informatica.besaba.com/trabalhosacademicos/Penguins.jpg', 'ABC', 'ANTROPOLOGIA', 'Manoel Pereira', 'Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul', 'Mariusa Warpechowski', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT '1' COMMENT 'Normal (1) e Administrador (2)',
  `ativo` int(1) NOT NULL DEFAULT '1',
  `data` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `niveis` (`nivel`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `data`, `hora`) VALUES
(1, 'Demo', 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'usuario@demo.com.br', 1, 1, '2009-07-24', '00:00:00'),
(2, 'Administrador Teste', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@demo.com.br', 2, 1, '2009-07-24', '00:00:00'),
(7, 'Melina', 'melina', 'f76566fd07062601b11ef296c87026d432ea32e1', 'melina@mail.com', 2, 1, '2013-09-12', '17:55:26'),
(17, 'alan', 'alan', '91e38e63b890fbb214c8914809fde03c73e7f24d', 'alan.correa.sul@gmail.com', 2, 1, '2013-10-07', '22:06:37'),
(9, 'Renato', 'renato', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ren@mail.com', 2, 1, '2013-09-17', '18:14:41'),
(11, 'Cassio', 'cassio', 'f1abd670358e036c31296e66b3b66c382ac00812', 'cassio@mail.com', 2, 1, '2013-09-17', '18:26:05'),
(12, 'Cabral', 'cabral', '056eafe7cf52220de2df36845b8ed170c67e23e3', 'cabral@mail.com', 2, 1, '2013-09-17', '18:29:59'),
(13, 'JoÃ£o de Almeida', 'joao', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'joao@yahoo.com', 2, 1, '2013-09-17', '18:31:58'),
(14, 'Ivo', 'Ivo', 'cf37f587706e192c1741adbf805403a5d73ea074', 'ivo', 1, 1, '2013-09-18', '19:44:13'),
(15, 'adao', 'adao', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'adao@mail', 1, 1, '2013-10-07', '22:02:08'),
(16, 'silvio', 'silvio', '3608a6d1a05aba23ea390e5f3b48203dbb7241f7', 'silvio@mail', 1, 1, '2013-10-07', '22:04:43'),
(18, 'ana', 'ana', '72019bbac0b3dac88beac9ddfef0ca808919104f', 'ana@mail', 2, 1, '2013-10-07', '22:11:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
