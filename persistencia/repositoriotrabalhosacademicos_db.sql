-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Dez-2013 às 01:09
-- Versão do servidor: 5.6.12
-- versão do PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `repositoriotrabalhosacademicos_db`
--
CREATE DATABASE IF NOT EXISTS `repositoriotrabalhosacademicos_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `repositoriotrabalhosacademicos_db`;

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
(1, 'MATEMATICA', ''),
(2, 'PROBABILIDADE E ESTATISTICA', ''),
(3, 'CIENCIA DA COMPUTACAO', ''),
(4, 'ASTRONOMIA', ''),
(5, 'FISICA', ''),
(6, 'QUIMICA', ''),
(7, 'GEOCIENCIAS', ''),
(8, 'GENETICA', ''),
(9, 'MORFOLOGIA', ''),
(10, 'FISIOLOGIA', ''),
(11, 'BIOQUIMICA', ''),
(12, 'BIOFISICA', ''),
(13, 'FARMACOLOGIA', ''),
(14, 'IMUNOLOGIA', ''),
(15, 'MICROBIOLOGIA', ''),
(16, 'PARASITOLOGIA', ''),
(17, 'ECOLOGIA', ''),
(18, 'OCEANOGRAFIA', ''),
(19, 'BOTANICA', ''),
(20, 'ZOOLOGIA', ''),
(21, 'ENGENHARIA CIVIL', ''),
(22, 'ENGENHARIA SANITARIA', ''),
(23, 'ENGENHARIA DE TRANSPORTES', ''),
(24, 'ENGENHARIA DE MINAS', ''),
(25, 'ENGENHARIA DE MATERIAIS E METALURGICA', ''),
(26, 'ENGENHARIA QUIMICA', ''),
(27, 'ENGENHARIA NUCLEAR', ''),
(28, 'ENGENHARIA MECANICA', ''),
(29, 'ENGENHARIA DE PRODUCAO', ''),
(30, 'ENGENHARIA NAVAL E OCEANICA ', ''),
(31, 'ENGENHARIA AEROESPACIAL', ''),
(32, 'ENGENHARIA ELETRICA', ''),
(33, 'ENGENHARIA BIOMEDICA', ''),
(34, 'MEDICINA', ''),
(35, 'NUTRICAO', ''),
(36, 'ODONTOLOGIA', ''),
(37, 'FARMACIA', ''),
(38, 'ENFERMAGEM', ''),
(39, 'SAUDE COLETIVA', ''),
(40, 'EDUCACAO FISICA', ''),
(41, 'FONOAUDIOLOGIA', ''),
(42, 'FISIOTERAPIA E TERAPIA OCUPACIONAL', ''),
(43, 'AGRONOMIA', ''),
(44, 'RECURSOS FLORESTAIS E ENGENHARIA FLORESTAL', ''),
(45, 'ENGENHARIA AGRICOLA', ''),
(46, 'ZOOTECNIA', ''),
(47, 'RECURSOS PESQUEIROS E ENGENHARIA DE PESCA', ''),
(48, 'MEDICINA VETERINARIA', ''),
(49, 'CIENCIA E TECNOLOGIA DE ALIMENTOS', ''),
(50, 'DIREITO', ''),
(51, 'ADMINISTRACAO', ''),
(52, 'TURISMO', ''),
(53, 'ECONOMIA', ''),
(54, 'ARQUITETURA E URBANISMO', ''),
(55, 'DESENHO INDUSTRIAL', ''),
(56, 'PLANEJAMENTO URBANO E REGIONAL', ''),
(57, 'DEMOGRAFIA', ''),
(58, 'CIENCIA DA INFORMACAO', ''),
(59, 'MUSEOLOGIA', ''),
(60, 'SERVICO SOCIAL', ''),
(61, 'FILOSOFIA', ''),
(62, 'TEOLOGIA', ''),
(63, 'SOCIOLOGIA', ''),
(64, 'ANTROPOLOGIA', ''),
(65, 'ARQUEOLOGIA', ''),
(66, 'HISTORIA', ''),
(67, 'GEOGRAFIA', ''),
(68, 'PSICOLOGIA', ''),
(69, 'EDUCACAO', ''),
(70, 'CIENCIA POLITICA', ''),
(71, 'LINGUISTICA', ''),
(72, 'LETRAS', ''),
(73, 'ARTES', ''),
(74, 'INTERDISCIPLINAR', ''),
(75, 'ENSINO', ''),
(76, 'MATERIAIS', ''),
(77, 'BIOTECNOLOGIA', ''),
(78, 'CIENCIAS AMBIENTAIS', '');

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
  `data` date DEFAULT NULL,
  `local_pdf` text COLLATE utf8_unicode_ci,
  `palavras_chave` text COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orientador` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Extraindo dados da tabela `trabalho_academico`
--

INSERT INTO `trabalho_academico` (`id`, `titulo`, `tipo`, `resumo`, `abstract`, `numero_paginas`, `data`, `local_pdf`, `palavras_chave`, `area`, `autor`, `instituicao`, `orientador`, `ativo`) VALUES
(33, 'USO DOS MOTORES DE BUSCA NA INTERNET: como se configuram as pesquisas de conteÃºdo na Web para a produÃ§Ã£o de trabalhos educacionais', 'Monografia', 'Este trabalho de pesquisa busca entender e demonstrar como se configura a pesquisa de\r\nconteÃºdo na Internet, a partir dos  search enginese, como se dÃ¡ o uso dos filtros de busca\r\nnesse Ã¢mbito.  A pesquisa Ã© uma prÃ¡tica comum e consolidada no contexto educacional,\r\nobjetivando  a  busca  de  insumos  adequados  para  a  produÃ§Ã£o  de  trabalhos,  apoiados\r\nbibliograficamente e, capazes de fomentar as discussÃµes intelectuais. Nesse sentido, entendese o termo pesquisa como uma derivaÃ§Ã£o do latim  perquiro, que devido a transformaÃ§Ãµes\r\nfonÃ©ticas ao longo da histÃ³ria teve o R transformado por S, dando origem ao termo pesquisa.\r\nÃ‰ vÃ¡lido ressaltar a diferenciaÃ§Ã£o das pesquisas, classificando-as em Pesquisa Escolar ou\r\nPesquisa de ConteÃºdo e Pesquisa CientÃ­fica. A Pesquisa de ConteÃºdo, deve ser desenvolvida\r\natravÃ©s de vÃ¡rias fontes bibliogrÃ¡ficas, visuais, orais entre outras, com o objetivo de subsidiar\r\na aprendizagem de determinados conceitos. Posicionado nesse contexto, este Trabalho de\r\nConclusÃ£o de Curso, visou investigar como se configura a pesquisa de conteÃºdo por parte dos\r\nalunos da turma de Tecnologia da InformaÃ§Ã£o do curso de Letras da Faculdade Cenecista de\r\nOsÃ³rio-RS, para a composiÃ§Ã£o de trabalhos textuais com o uso dos sites de buscas. Essa turma\r\nfoi acompanhada em duas aulas, tendo o histÃ³rico de navegaÃ§Ã£o do browser de Internet\r\nanalisado e questionÃ¡rios aplicados, com vistas ao levantamento de dados para futura anÃ¡lises.\r\nEste estudo demostrou o Google como escolha preferida para a realizaÃ§Ã£o de pesquisas de\r\nconteÃºdo, e os impactos que os filtros de busca produzem nos processo de pesquisa na Web." " " "             ', 'This research work tries to understand and demonstrate how is configured the research of\r\ncontents in Internet, from search engines and, how the use of filters work. The research is a\r\npractice comum and consolidated in an educational context, aiming a search for appropriate\r\ninputs for production of works, bibliographically supported and capable to promote\r\nintelectual discussions. Accordingly, it means the term PESQUISA like a derivation from latin\r\nword PERQUIRO, that due phonetics transformations along the years, had the R transformed\r\ninto a S, origining the term PESQUISA (research). It`s important the differentiation of\r\nresearches, classifying them into scholar research, content research and cientific research.\r\nThe content research, must be developed among several bibliographic sources, visual, oral\r\nand others, with the main objective of subsidize the learning of some concepts. Positioned on\r\nthis concept, this work on course conclusion aims to investigate how the content research is\r\nconfigured from some students of Information tecnology from Letters course of Faculdade\r\ncenecista de OsÃ³rio- RS, for textual composition using search sites. This class was\r\naccompanied in two days, having the browser navigation history from Internet analyzed and\r\nan applied survey, looking for data levy to be used in future analysis. This research\r\ndemonstrated Google as preferred choose for content researches and the impacts that\r\nresearch filters produce on the process of web research.          ', 99, '2013-10-01', 'http://informatica.besaba.com/conteudo/USO%20DOS%20MOTORES%20DE%20BUSCA%20NA%20INTERNET%20-%20TCC%20Alan%20Alves%20Correa.pdf', 'Internet. Filtros de Busca. Pesquisa de conteÃºdo. Motores de Busca. Google.', 'EDUCACAO', 'Alan Alves Correa', 'FACULDADE CENECISTA DE OSÃ“RIO (FACOS)', 'Mariusa Warpechowski', 1),
(45, 'K2 - UMA ARQUITETURA PARA A  ADAPTAÃ‡ÃƒO DE AGENTES DE SOFTWARE  AO CONTEXTO ', 'Tese', 'A tecnologia de agentes Ã© cada vez mais citada como uma abordagem atrativa para o \r\ndesenvolvimento de aplicaÃ§Ãµes em ambientes pervasivos [Gun08b]. No entanto, a maioria \r\ndas plataformas disponÃ­veis apÃ³ia apenas a criaÃ§Ã£o de agentes capazes de lidar com um \r\nconjunto limitado de situaÃ§Ãµes (os agentes precisam ser reprogramados quando se \r\ndeparam com situaÃ§Ãµes nÃ£o previstas). A dificuldade de produzir software para ambientes \r\ncomplexos como o pervasivo vem justamente do fato de o projetista nÃ£o poder prever \r\ntodas as circunstÃ¢ncias em que a aplicaÃ§Ã£o poderÃ¡ ser usada, e tomar todas as decisÃµes \r\nem tempo de projeto. Assim, Ã© necessÃ¡rio desenvolver agentes que consigam aprender e \r\nse adaptar de forma a satisfazer as condiÃ§Ãµes de um novo ambiente, ou de um novo \r\ncontexto. Considerando essa necessidade, o objetivo desta pesquisa Ã© propor uma \r\narquitetura para a criaÃ§Ã£o de agentes adaptativos ao contexto - a arquitetura K2. De fato, \r\na idÃ©ia Ã© disponibilizar uma arquitetura que permita a modificaÃ§Ã£o de partes de elementos \r\nestruturais de um agente de software, adaptando o seu comportamento e estrutura de \r\nacordo com as mudanÃ§as percebidas no contexto em que o agente estÃ¡ inserido. Uma \r\ndas caracterÃ­sticas da arquitetura proposta Ã© a separaÃ§Ã£o do comportamento adaptativo \r\ndo comportamento padrÃ£o do agente. Para tanto, sÃ£o criados elementos chamados de \r\nadaptadores, cuja implantaÃ§Ã£o Ã© feita com programaÃ§Ã£o orientada a aspectos. Para \r\ndemonstrar a aplicabilidade da arquitetura desenvolvida, trÃªs exemplos de uso sÃ£o \r\napresentados. \r\n   ', 'Agent technology is increasingly seen as an attractive approach to develop applications for \r\npervasive environments [Gun08b]. However, many existing agent platforms support only \r\nthe development of agents able to deal with a limited set of situations (the agents need to \r\nbe reprogrammed when faced with unexpected situations). Software development for \r\ncomplex environments such as pervasive environments is difficult since the developers \r\ncannot predict every possible execution context the application will have at design time. \r\nSo, it is necessary to develop software agents capable of learning and adapting to meet \r\nthe conditions of a new environment, or a new context. Considering this issue, this thesis \r\nproposes an architecture to create context adaptative agents â€“ the K2 architecture. The \r\nidea is to provide an architecture that supports the modification of structural elements of a \r\nsoftware agent, adapting its behavior and structure according to perceived changes in the \r\ncontext. One of the characteristics of the proposed architecture is the separation between \r\nadaptative and non-adaptative (default) agent behaviors, which will be accomplished by \r\nusing elements named adaptors, whose deployment is supported by aspect-oriented \r\nprogramming. Three examples illustrate the architecture feasibility and applicability. \r\n   ', 197, '2011-03-28', 'http://informatica.besaba.com/trabalhosacademicos/432344.pdf', 'agentes de software, consciÃªncia de contexto, adaptaÃ§Ã£o ao contexto', 'CIÃŠNCIA DA COMPUTAÃ‡ÃƒO', 'ANA PAULA LEMKE', 'PontifÃ­cia Universidade CatÃ³lica do Rio Grande do Sul (PUCRS)', 'Marcelo Blois Ribeiro', 1),
(47, 'Os BenefÃ­cios na AdesÃ£o a um Fundo de PensÃ£o â€“ O Caso ELOS', 'Monografia', 'O Sistema de PrevidÃªncia Social Brasileiro tem passado por um amplo processo \r\nde discussÃ£o com relaÃ§Ã£o a sua sustentabilidade. O aumento da expectativa de vida da \r\npopulaÃ§Ã£o, associado Ã  reduÃ§Ã£o da taxa de fecundidade tem levado a um aumento \r\nacentuado da populaÃ§Ã£o idosa. No Brasil, conforme dados do IBGE â€“ Instituto Brasileiro \r\nde Geografia e EstatÃ­stica, o percentual de idosos, em relaÃ§Ã£o a populaÃ§Ã£o total, terÃ¡ uma \r\nrepresentatividade de 16% em 2030. \r\nOs efeitos de todos os fenÃ´menos demogrÃ¡ficos: populaÃ§Ãµes mais velhas, declÃ­nio \r\nde fecundidade e maior longevidade, provavelmente tornarÃ£o inviÃ¡veis o Sistema de \r\nPrevidÃªncia Social em regime de RepartiÃ§Ã£o Simples, como foi originalmente concebido. \r\nOs gastos pÃºblicos terÃ£o e estÃ£o tendo um aumento tanto com relaÃ§Ã£o aos pagamentos de \r\npensÃµes, como tambÃ©m em desembolsos na Ã¡rea da saÃºde, entre outros. \r\nA maior longevidade humana impacta de maneira menos dramÃ¡tica nos fundos de \r\npensÃ£o em regime de capitalizaÃ§Ã£o, principalmente para os planos de contribuiÃ§Ã£o \r\ndefinida. \r\nNesse sentido, e com a finalidade de complementar os benefÃ­cios previdenciÃ¡rios \r\nconcedidos pela PrevidÃªncia Oficial Ã© que entra em cena a PrevidÃªncia Complementar, \r\ncom o intuito de proporcionar uma melhor qualidade de vida na aposentadoria. \r\nRefletindo sobre essas questÃµes e a fim de proporcionar maiores opÃ§Ãµes com \r\nrelaÃ§Ã£o a concessÃ£o de BenefÃ­cios PrevidenciÃ¡rios aos seus participantes, a FundaÃ§Ã£o \r\nELETROSUL de PrevidÃªncia e AssistÃªncia Social atualmente conta com um Plano de \r\nBenefÃ­cio Definido - BD, estando em fase de implantaÃ§Ã£o do Plano Misto de BenefÃ­cios \r\nPrevidenciÃ¡rios com caracterÃ­sticas de Plano de ContribuiÃ§Ã£o Definida â€“ CD. \r\nPortanto, o objetivo deste trabalho Ã© despertar uma maior consciÃªncia \r\nprevidenciÃ¡ria atravÃ©s de demonstraÃ§Ã£o das vantagens que um fundo de pensÃ£o pode \r\nproporcionar aos seus empregados. Demonstrar que apesar dos custos para a adesÃ£o a um \r\nfundo de pensÃ£o, os benefÃ­cios proporcionados por ele trazem vantagens muito superiores. \r\n ', 'NÃ£o apresentado ', 118, '2005-05-05', 'http://informatica.besaba.com/trabalhosacademicos/Economia295605.pdf', 'PrevidÃªncia Social, PrevidÃªncia Complementar, Fundos de PensÃ£o ', 'ECONOMIA', 'Leomara Paganelli', 'UNIVERSIDADE FEDERAL DE SANTA CATARINA (UFSC)', 'Prof. Ãlvaro DezidÃ©rio da Luz', 1),
(48, 'ENCONTRO COM A LOUCURA: TRANSICIONALIDADE E ENSINO DE PSICOPATOLOGIA', 'Monografia', 'O\r\nensino de psicopatologia Ã© considerado como modalidade de\r\ntrabalho psicodinÃ¢mico de transformaÃ§Ã£o de representaÃ§Ãµes\r\nsociais sobre o louco, bem como de mudanÃ§a do vÃ­nculo que Ã©\r\nestabelecido com a atividade representacional. Tendo em vista a\r\nrealizaÃ§Ã£o de uma abordagem pedagÃ³gica\r\ntransicional, o uso de\r\nprocedimentos projetivos Ã© fundamentado teÃ³rica e metodologicamente.\r\nApresenta-se uma anÃ¡lise demonstrativa de vinte e um Desenhos-\r\nEstÃ³rias com Tema, centrada na apreensÃ£o do inconsciente relativo\r\nrepresentacional.\r\n ', 'The teaching of psychopathology is a kind of psychodynamic\r\nwork of transformation of social representations about the mad and the\r\nrelationship between the subject and the representational activity. The\r\ntheorical and methodological bases of Drawing and Telling-Stories\r\nProjective Procedure are discussed to realize a trasitional pedagogical\r\nframework. A demonstrative analysis of 21 drawings is presented in\r\norder to demonstrate the deduction of the relative unconscious.\r\n ', 343, '1999-01-10', 'http://informatica.besaba.com/trabalhosacademicos/Tania.pdf', 'LOUCURA, MEDIDAS DE PERSONALIDADE, PSICANÃLISE, PSICOPATOLOGIA, TÃ‰CNICAS PROJETIVAS', 'PSICOLOGIA', 'TANIA MARIA JOSÃ‰ AIELLO VAISBERG', 'UNIVERSIDADE DE SÃƒO PAULO (USP)', 'FÃ¡bio Herrmann', 1),
(49, 'EVENTOS ADVERSOS PÃ“S-VACINAÃ‡ÃƒO EM CRIANÃ‡AS  NO ESTADO DE SANTA CATARINA', 'Monografia', 'IntroduÃ§Ã£o: vacinas contribuem significativamente para a reduÃ§Ã£o da incidÃªncia de doenÃ§as \r\ninfecciosas, porÃ©m nÃ£o estÃ£o livres de eventos adversos. \r\nObjetivos: analisar a prevalÃªncia dos eventos adversos pÃ³s-vacinaÃ§Ã£o em crianÃ§as no Estado \r\nde Santa Catarina. \r\nMÃ©todos: trata-se de estudo descritivo transversal que analisa os eventos adversos, utilizando \r\ndados do SI-EAPVÂ®, referentes Ã s vacinas tetravalente, trÃ­plice bacteriana, trÃ­plice viral, \r\nBCG, hepatite B, febre amarela, vacina oral de rotavÃ­rus humano e vacina oral contra pÃ³lio, \r\nno perÃ­odo de 2003 a 2006, em crianÃ§as entre zero e 14 anos. \r\nResultados: foram notificados 3994 eventos adversos em crianÃ§as. A tetravalente foi \r\nresponsÃ¡vel por 2861 (71%) dos casos. Os tipos variaram entre as vacinas e o evento mais \r\nnotificado foi o episÃ³dio hipotÃ´nico-hiporresponsivo, com 923 (23,1%). O grupo etÃ¡rio de \r\nmenores de um ano de idade foi responsÃ¡vel por 2838 (71%) das notificaÃ§Ãµes. Para todas as \r\nidades, 1805 (41,5%) casos foram atendidos na emergÃªncia, a conduta frente ao esquema \r\nvacinal foi mantida em 2184 (50,2%) e houve contra-indicaÃ§Ã£o com troca de esquema em \r\n2068 (47,5%); cura sem seqÃ¼elas foi observada em 4179 (96%) e houve confirmaÃ§Ã£o do caso \r\nem 3924 (90,2%). A taxa de notificaÃ§Ã£o para todas as vacinas em crianÃ§as foi de 0,72 para \r\n1000 doses aplicadas; a tetravalente representou 2,8. \r\nConclusÃ£o: apesar das limitaÃ§Ãµes dos sistemas de vigilÃ¢ncia epidemiolÃ³gica passiva, este \r\nestudo concluiu que as vacinas sÃ£o seguras e os eventos adversos sÃ£o na maioria benignos. \r\nSugere-se considerar estudos de vigilÃ¢ncia ativa para maior esclarecimento de alguns eventos, \r\ncomo o episÃ³dio hipotÃ´nico-hiporresponsivo. ', 'IntroduÃ§Ã£o: vacinas contribuem significativamente para a reduÃ§Ã£o da incidÃªncia de doenÃ§as \r\ninfecciosas, porÃ©m nÃ£o estÃ£o livres de eventos adversos. \r\nObjetivos: analisar a prevalÃªncia dos eventos adversos pÃ³s-vacinaÃ§Ã£o em crianÃ§as no Estado \r\nde Santa Catarina. \r\nMÃ©todos: trata-se de estudo descritivo transversal que analisa os eventos adversos, utilizando \r\ndados do SI-EAPVÂ®, referentes Ã s vacinas tetravalente, trÃ­plice bacteriana, trÃ­plice viral, \r\nBCG, hepatite B, febre amarela, vacina oral de rotavÃ­rus humano e vacina oral contra pÃ³lio, \r\nno perÃ­odo de 2003 a 2006, em crianÃ§as entre zero e 14 anos. \r\nResultados: foram notificados 3994 eventos adversos em crianÃ§as. A tetravalente foi \r\nresponsÃ¡vel por 2861 (71%) dos casos. Os tipos variaram entre as vacinas e o evento mais \r\nnotificado foi o episÃ³dio hipotÃ´nico-hiporresponsivo, com 923 (23,1%). O grupo etÃ¡rio de \r\nmenores de um ano de idade foi responsÃ¡vel por 2838 (71%) das notificaÃ§Ãµes. Para todas as \r\nidades, 1805 (41,5%) casos foram atendidos na emergÃªncia, a conduta frente ao esquema \r\nvacinal foi mantida em 2184 (50,2%) e houve contra-indicaÃ§Ã£o com troca de esquema em \r\n2068 (47,5%); cura sem seqÃ¼elas foi observada em 4179 (96%) e houve confirmaÃ§Ã£o do caso \r\nem 3924 (90,2%). A taxa de notificaÃ§Ã£o para todas as vacinas em crianÃ§as foi de 0,72 para \r\n1000 doses aplicadas; a tetravalente representou 2,8. \r\nConclusÃ£o: apesar das limitaÃ§Ãµes dos sistemas de vigilÃ¢ncia epidemiolÃ³gica passiva, este \r\nestudo concluiu que as vacinas sÃ£o seguras e os eventos adversos sÃ£o na maioria benignos. \r\nSugere-se considerar estudos de vigilÃ¢ncia ativa para maior esclarecimento de alguns eventos, \r\ncomo o episÃ³dio hipotÃ´nico-hiporresponsivo. ', 67, '2008-01-01', 'http://informatica.besaba.com/trabalhosacademicos/PE0583.pdf', 'Vacina, Evento adverso, CrianÃ§a, VigilÃ¢ncia epidemiolÃ³gica passiva', 'SAUDE COLETIVA', 'CAROLINA FARIA SANTOS VICARI', 'Universidade Federal  de Santa Catarina', 'Aroldo Prohmann de Carvalho ', 1),
(52, 'onze', 'Monografia', 're ', 're ', 123, '2011-11-11', 'http://informatica.besaba.com/trabalhosacademicos/O_ALUNO_DE_EAD_EM_FORUNS_DO_AVA_MOODLE.pdf', 're', 'EDUCACAO', 're', 'FACULDADE CENECISTA DE OSÃ“RIO (FACOS)', 're', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `data`, `hora`) VALUES
(1, 'Demo', 'demo', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'usuario@demo.com.br', 1, 1, '2009-07-24', '00:00:00'),
(2, 'Administrador Teste', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 2, 1, '2009-07-24', '00:00:00'),
(7, 'Melina', 'melina', 'f76566fd07062601b11ef296c87026d432ea32e1', 'melina@mail.com', 2, 1, '2013-09-12', '17:55:26'),
(17, 'alan', 'alan', '91e38e63b890fbb214c8914809fde03c73e7f24d', 'alan.correa.sul@gmail.com', 2, 1, '2013-10-07', '22:06:37'),
(29, 'Cristian Eduardo', 'cristiane', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cristian@mail.com', 2, 1, '2013-12-30', '23:34:12'),
(30, 'Marcos Souza', 'marcoss', '056eafe7cf52220de2df36845b8ed170c67e23e3', 'marcos@mail', 1, 1, '2013-12-30', '23:47:11'),
(27, 'Antonio Junior', 'antonioj', '056eafe7cf52220de2df36845b8ed170c67e23e3', 'antonioj', 2, 1, '2013-12-30', '21:57:20'),
(28, 'Jose Joaquim', 'josej', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3', 'jose@mail.com', 2, 1, '2013-12-30', '22:59:54'),
(21, 'Raquel de Souza', 'raquel', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'raquel@hotmail.com', 2, 0, '2013-12-17', '23:13:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
