
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 15/01/2017 às 00:27:35
-- Versão do Servidor: 10.0.28-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u269062063_estag`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `documento` char(200) NOT NULL,
  `nome_aluno` char(200) NOT NULL,
  `turma` char(10) NOT NULL,
  `nome_empresa` char(200) NOT NULL,
  `subarea` char(200) NOT NULL,
  `telefone` char(200) NOT NULL,
  `mes` char(200) NOT NULL,
  `dia` char(200) NOT NULL,
  `hora` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id`, `documento`, `nome_aluno`, `turma`, `nome_empresa`, `subarea`, `telefone`, `mes`, `dia`, `hora`) VALUES
(7, 'plano de estagio ana paula - Copia.pdf', 'Ana Paula Silva De Sousa', 'B', 'Deposito Rede Construir', 'Informatica Aplicada', '(85) 98910-0908', '07', '26', '15:13'),
(2, 'plano de estagio -DANIEL COSTA DO NASCIMENTO N 13.pdf', 'Daniel Costa do Nascimento', 'B', 'DEPOSITO SANTA EDWIRGES', 'Suporte/Redes', '(85) 99800-1185', '07', '25', '16:11'),
(3, 'Plano de Atividades Mensal - ESTAGIO - JULIANA.pdf', 'Maria Juliana Lucio dos Santos', 'B', 'USINA DE LEITE MARANGUAPE', 'Suporte/Redes', '(85) 98674-9028', '07', '25', '17:55'),
(4, 'plano de estagio -ruanna .pdf', 'ruanna layla lima barbosa', 'B', 'CDL', 'Informatica Aplicada', '(85) 98821-8945', '07', '26', '09:17'),
(5, 'plano de estagio Nayara costa.pdf', 'Nayara Silva da Costa', 'B', 'DEPOSITO SANTA EDWIRGES', 'informatica aplicada', '8585662924', '07', '26', '09:20'),
(6, 'Plano de Atividades Mensal  ESTAGIO weslane.pdf', 'Maria Weslane Lima', 'B', 'Solar Bonifacio Camara', 'Tutoria', '(85) 98845-4475', '07', '26', '09:23'),
(8, 'Plano de Atividades Mensal - ESTAGIO LUCAS.pdf', 'Lucas Cavalcante da Silva', 'B', 'ELAH LINGERIE', 'Suporte/Redes', '(85) 98792-6705', '07', '28', '09:04'),
(9, 'Plano de estagio Jose Matheus (Julho).pdf', 'Jose Matheus de Lima Correia', 'B', 'CVT - CENTEC', 'Tutoria', '(85) 98418-3877', '07', '28', '10:19'),
(10, 'Plano de Atividades Mensal - RUSLAN.pdf', 'Francisco Ruslan dos Santos Silva', 'B', 'HOPE', 'Suporte/Redes', '(85) 98929-2617', '07', '28', '16:54'),
(11, 'PLANO  ANDREZZA CARNEIRO.pdf', 'Andreza Carneiro dos Santos', 'B', 'KR Informatica - Maracanau', 'Tutoria', '(85) 98751-7884', '07', '28', '17:54'),
(12, 'PLANO  ANA PAULA VIANA.pdf', 'Ana Paula Viana de Castro', 'B', 'KR Informatica - Maracanau', 'Tutoria', '(85)  8762-1011', '07', '28', '18:29'),
(13, 'Plano de Atividades Mensal - FERNANDO LIMA.pdf', 'Fernando de Lima Alves', 'B', 'FEMINIZE', 'Suporte/Redes', '(85) 98724-2609', '07', '28', '20:53'),
(14, 'julho.pdf', 'Jocileudo de Sousa Viana', 'B', 'MARANGUAPE SHOPPING MALL', 'Desenvolvimento Web', '(85) 98679-9634', '07', '28', '22:38'),
(15, 'Plano de Atividades Mensal_laura_andrade - ESTAGIO1 (1).pdf', 'laura ferreira de andrade', 'B', 'KR Informatica - Maranguape', 'Tutoria', '(85) 98517-4124', '07', '29', '13:54'),
(16, 'Plano_de_Atividades_Mensal_antonio_alex-_ESTAGIO (1).PDF', 'Antonio Alex', 'B', 'KR Informatica - Maranguape', 'Tutoria', '9999999', '07', '29', '14:15'),
(17, 'Plano de Atividades Mensal - ESTAGIO - Matheus.pdf', 'Matheus Oliveira e Silva', 'B', 'INFOARTE COMUNICAÇÃO VISUAL', 'Design', '(85) 98668-2508', '07', '29', '20:24'),
(18, 'Relatorio Mensal-Antonio Lucas.pdf', 'Antonio Lucas Ferreira do Nascimento', 'B', 'MALLORY LTDA', 'Suporte/Redes', '(85) 98527-6114', '07', '29', '22:30'),
(19, 'Plano de Atividades Mensal - ESTAGIO - Alex Ferreira.pdf', 'Alex Ferreira Gomes', 'B', 'Solar Bonifacio Camara', 'Informatica Aplicada', '(85)  8531-1866', '07', '30', '13:51'),
(20, 'll.pdf', 'Francisco Yago De Sousa Lima', 'B', 'SOFTWAY INFORMATICA LTDA', 'Suporte/Redes', '(85) 859179-733', '07', '31', '14:18'),
(21, 'Plano de Atividades Mensal - ESTAGIO jonatas.pdf', 'Jonatas Silva Nascimento', 'B', 'USINA DE LEITE MARANGUAPE', 'Suporte/Redes', '(85) 98935-4003', '07', '31', '14:37'),
(22, 'Plano de Atividades Mensal - Guilherme Souza N 21.pdf', 'Guilherme Souza da Costa', 'B', 'MALLORY LTDA', 'Suporte/Redes', '(85) 98630-4209', '07', '31', '16:38'),
(23, 'Plano de Atividades Mensal - ESTAGIO (1) BRENNO.pdf', 'Antonio Brenno Paiva da Costa', 'B', 'SOFTWAY INFORMATICA LTDA', 'Suporte/Redes', '(85) 98925-3099', '07', '31', '22:11'),
(24, 'Plano de Atividades Mensal - Felipe.pdf', 'Francisco Felipe Rodrigues Josino', 'B', 'CREDE 1', 'Desenvolvimento Web', '(85) 98671-0539', '07', '01', '15:31'),
(25, 'Plano de Atividades Mensal - ESTAGIO RIVANA.pdf', 'Rivana Iris Brito dos Santos', 'B', 'APAE - MARANGUAPE', 'Tutoria', '(85) 98668-2816', '07', '22', '14:11'),
(26, 'Plano de Atividades Mensal - ESTAGIO RAMYLA.pdf', 'Ramyla Silva Lessa Santos', 'B', 'APAE - MARANGUAPE', 'Tutoria', '(85) 98776-4393', '07', '22', '14:14'),
(27, 'Plano de Atividades Mensal - Alan Chrystian Julho.pdf', 'Alan Chrystian Martins Vilela', 'B', 'Universidade Federal do Ceara', 'Desenvolvimento Web', '(85) 98708-8824', '07', '30', '14:16'),
(28, 'Plano de Atividades Mensal - Alan Chrystian Agosto.pdf', 'Alan Chrystian Martins Vilela', 'B', 'Universidade Federal do Ceara', 'Desenvolvimento Web', '(85) 98708-8824', '08', '30', '14:16'),
(29, 'Plano de Atividades Mensal - Mauricio Abreu Julho.pdf', 'Francisco Mauricio Abreu Filho', 'B', 'Universidade Federal do Ceara', 'Desenvolvimento Web', '(85)985436963', '07', '30', '14:17'),
(30, 'Plano de Atividades Mensal - Mauricio Abreu Agosto.pdf', 'Francisco Mauricio Abreu Filho', 'B', 'Universidade Federal do Ceara', 'Desenvolvimento Web', '(85)985436963', '08', '30', '14:18'),
(31, 'Plano de estagio - Matheus Correia.pdf', 'Jose Matheus de Lima Correia', 'B', 'CVT - CENTEC', 'Tutoria', '(85) 98418-3877', '08', '30', '14:26'),
(32, 'Plano de Atividades Mensal - ESTAGIO-nayara silva 2.pdf', 'Nayara Silva da Costa', 'B', 'DEPOSITO SANTA EDWIRGES', 'informatica aplicada', '8585662924', '08', '30', '14:41'),
(33, 'plano de estagio -ruanna.pdf', 'ruanna layla lima barbosa', 'B', 'CDL', 'Informatica Aplicada', '(85) 98821-8945', '08', '30', '14:52'),
(34, 'Plano de Atividades Mensal - Ruslan.pdf', 'Francisco Ruslan dos Santos Silva', 'B', 'HOPE', 'Suporte/Redes', '(85) 98929-2617', '08', '30', '17:56'),
(35, 'Plano de Atividades Mensal - ESTAGIO - ALEX FERREIRA.pdf', 'Alex Ferreira Gomes', 'B', 'Solar Bonifacio Camara', 'Informatica Aplicada', '(85) 98531-1866', '08', '30', '19:02'),
(36, 'plano de estagio certo ana paula s.pdf', 'Ana Paula Silva De Sousa', 'B', 'Deposito Rede Construir', 'Informatica Aplicada', '(85) 98910-0908', '08', '31', '12:44'),
(37, 'Plano de Atividades Mensal Brenno- ESTAGIO.pdf', 'Antonio Brenno Paiva da Costa', 'B', 'SOFTWAY INFORMATICA LTDA', 'Suporte/Redes', '(85) 98925-3099', '08', '31', '12:55'),
(38, 'laura.PDF', 'laura ferreira de andrade', 'B', 'KR Informatica - Maranguape', 'Tutoria', '(85) 98517-4124', '08', '31', '12:58'),
(39, 'andrezza agosto.pdf', 'Andreza Carneiro dos Santos', 'B', 'KR Informatica - Maracanau', 'Tutoria', '(85) 98751-7884', '08', '31', '15:09'),
(40, 'DANIEL COSTA DO NASCIMENTO N 13.pdf', 'Daniel Costa do Nascimento', 'B', 'DEPÓSITO SANTA EDWIRGES', 'Suporte/Redes', '(85) 99800-1185', '08', '31', '19:20'),
(41, 'Plano de Atividades Mensal - Guilherme N 21 - Agosto.pdf', 'Guilherme Souza da Costa', 'B', 'MALLORY LTDA', 'Suporte/Redes', '(85) 98630-4209', '08', '31', '19:52'),
(42, 'Plano de Atividades Mensal - AGOSTO.pdf', 'Maria Juliana Lucio dos Santos', 'B', 'USINA DE LEITE MARANGUAPE', 'Suporte/Redes', '(85) 98674-9028', '08', '31', '20:20'),
(43, 'Plano de Atividades Mensal-AnaPaulaVianaDeCastro.pdf', 'Ana Paula Viana de Castro', 'B', 'KR Informatica - Maracanau', 'Tutoria', '(85)  8762-1011', '08', '31', '20:22'),
(44, 'PLANO DE ATIVIDADES DO MES DE JULHO, KARINA.pdf', 'Karina de Lima Pinheiro', 'B', 'CVT - CENTEC', 'Tutoria', '(85) 98407-9079', '07', '31', '20:46'),
(45, 'PLANO DE ATIVIDADES MENSAL AGOSTO, KARINA.pdf', 'Karina de Lima Pinheiro', 'B', 'CVT - CENTEC', 'Tutoria', '(85) 98407-9079', '08', '31', '20:46'),
(46, 'Yago-Agosto.pdf', 'Francisco Yago De Sousa Lima', 'B', 'SOFTWAY INFORMATICA LTDA', 'Suporte/Redes', '(85) 859179-733', '08', '31', '20:55'),
(47, 'Plano de Atividades Mensal -Agosto- Felipe Josino.pdf', 'Francisco Felipe Rodrigues Josino', 'B', 'CREDE 1', 'Desenvolvimento Web', '(85) 98671-0539', '08', '31', '21:15'),
(48, 'Plano de Atividades Mensal - ESTAGIO - GABRIELLE - AGOSTO.pdf', 'Gabrielle Araujo Paiva Costa', 'B', 'NETWAY CURSOS', 'Informatica Aplicada', '(85)9979 -27646', '08', '31', '21:29'),
(49, 'Plano de Atividades Mensal - ESTAGIO-Laedia.pdf', 'Laedia do Nascimento Oliveira', 'B', 'Secretaria Regional V', 'Suporte/Redes', '(88) 98840-4575', '08', '31', '22:17'),
(50, 'Plano de Atividades Mensal - Ramyla.pdf', 'Ramyla Silva Lessa Santos', 'B', 'APAE - MARANGUAPE', 'Tutoria', '(85) 987764393', '08', '31', '22:33'),
(51, 'Plano de Atividades Mensal - ESTAGIO - JONATAS.pdf', 'Jonatas Silva Nascimento', 'B', 'USINA DE LEITE MARANGUAPE', 'Suporte/Redes', '(85) 98935-4003', '08', '01', '13:53'),
(58, 'Plano de Atividades Mensal - julho - LUIZ.pdf', 'Luiz Henrique Ferreira Carneiro', 'B', 'FACULDADE KURIOS - FAK', 'Desenvolvimento Web', '(85) 98926-5769', '07', '04', '12:38'),
(60, 'plano mensal agosto_antonio_alex.pdf', 'Antonio Alex', 'B', 'KR Informatica - Maranguape', 'Tutoria', '(85) 98195-2404', '08', '04', '21:01'),
(54, 'Plano de Atividades Mensal - Fernando Lima.pdf', 'Fernando de Lima Alves', 'B', 'FEMINIZE', 'Suporte/Redes', '(85) 98724-2609', '08', '01', '14:44'),
(59, 'Plano de Atividades Mensal - agosto - LUIZ.pdf', 'Luiz Henrique Ferreira Carneiro', 'B', 'FACULDADE KURIOS - FAK', 'Desenvolvimento Web', '(85) 98926-5769', '08', '04', '12:38'),
(56, 'Plano de Atividades Mensal - julho James kildary.pdf', 'James Kildary Oliveira dos Santos', 'B', 'FACULDADE KURIOS - FAK', 'Suporte/Redes', '(85) 9855-23984', '07', '01', '14:58'),
(57, 'Plano de Atividades Mensal - agosto - James kildary.pdf', 'James Kildary Oliveira dos Santos', 'B', 'FACULDADE KURIOS - FAK', 'Suporte/Redes', '(85) 9855-23984', '08', '01', '15:12'),
(61, 'Plano de Atividades Mensal - MATHEUS OLIVEIRA (AGOSTO).pdf', 'Matheus Oliveira e Silva', 'B', 'INFOARTE COMUNICAÇÃO VISUAL', 'Design', '(85) 98668-2508', '09', '11', '18:02'),
(62, 'Plano de Atividades Mensal-AnaPaulaViana -pdf.pdf', 'Ana Paula Viana de Castro', 'B', 'KR Informatica - Maracanau', 'Tutoria', '(85)  8762-1011', '09', '28', '13:06'),
(63, 'Plano de Atividades Mensal-LAURA FERREIRA DE ANDRADE - C?pia333.pdf', 'laura ferreira de andrade', 'B', 'KR Informatica - Maranguape', 'Tutoria', '(85) 98517-4124', '09', '28', '14:10'),
(64, 'Maria Weslane Lima - mes de setembro.pdf', 'Maria Weslane Lima', 'B', 'Solar Bonifacio Camara', 'Tutoria', '(85) 98845-4475', '09', '29', '10:15'),
(65, 'Carlos Eduardo Pontes de Sousa- mes de setembro.pdf', 'Carlos Eduardo Pontes de Sousa', 'B', 'Solar Bonifacio Camara', 'Suporte/Redes', '(85) 98106-9370', '09', '29', '10:29'),
(66, 'Plano de Atividades Mensal Brenno n? 8- EST?GIO (1).pdf', 'Antonio Brenno Paiva da Costa', 'B', 'SOFTWAY INFORMATICA LTDA', 'Suporte/Redes', '(85) 98925-3099', '09', '29', '15:09'),
(67, 'Plano de Atividades Mensal Brenno n? 08 - EST?GIO (1).pdf', 'Antonio Brenno Paiva da Costa', 'B', 'SOFTWAY INFORMATICA LTDA', 'Suporte/Redes', '(85) 98925-3099', '09', '29', '15:14'),
(68, 'Plano de Atividades Mensal - ESTAGIO - Jose Matheus de Lima Correia.pdf', 'Jose Matheus de Lima Correia', 'B', 'CVT - CENTEC', 'Tutoria', '(85) 98418-3877', '10', '02', '21:15'),
(69, 'Plano de Atividades Mensal - EST?GIO.pdf', 'Maria Juliana Lucio dos Santos', 'B', 'USINA DE LEITE MARANGUAPE', 'Suporte/Redes', '(85) 98674-9028', '10', '03', '05:54'),
(70, 'plano de estagio setembro_antonio_alex.pdf', 'Antonio Alex', 'B', 'KR Informatica - Maranguape', 'Tutoria', '(85) 98195-2404', '10', '03', '21:05'),
(71, 'Plano de Atividades Mensal SETEMBRO- Fernando de Lima.pdf', 'Fernando de Lima Alves', 'B', 'FEMINIZE', 'Suporte/Redes', '(85) 98724-2609', '10', '05', '14:45'),
(72, 'Plano de Atividades Mensal - Alex Ferreira.pdf', 'Alex Ferreira Gomes', 'B', 'Solar Bonifacio Camara', 'Informatica Aplicada', '(85) 98531-1866', '10', '31', '20:59'),
(73, 'Plano de Atividades Mensal - Alex Ferreira - Setembro.pdf', 'Alex Ferreira Gomes', 'B', 'Solar Bonifacio Camara', 'Informatica Aplicada', '(85) 98531-1866', '10', '31', '21:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas_informatica`
--

CREATE TABLE IF NOT EXISTS `empresas_informatica` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nome_empresa` char(200) NOT NULL,
  `cnpj` char(200) NOT NULL,
  `telefone` char(200) NOT NULL,
  `representante` varchar(200) NOT NULL,
  `subarea` char(200) NOT NULL,
  `supervisor` varchar(200) NOT NULL,
  `whats` char(200) NOT NULL,
  `vagas` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `empresas_informatica`
--

INSERT INTO `empresas_informatica` (`id`, `nome_empresa`, `cnpj`, `telefone`, `representante`, `subarea`, `supervisor`, `whats`, `vagas`) VALUES
(19, 'NETWAY CURSOS', '07.798.289/0001-85', '(85)3371-5166', 'EVERTON JOSE DE LIMA OLIVEIRA', 'Informatica Aplicada', 'ROSIMARY SOUSA', '(99) 99999 - 9999', 0),
(17, 'DEPOSITO SANTA EDWIRGES', '00.807.091/0001-71', '(85)3341-3900', 'NORMA SUELY BRAGA ARAUJO', 'Suporte/Redes', 'NORMA SUELY', '', 0),
(15, 'CREDE 1', '07.954.514/0196-59', '(85)3101-2786', 'ANA GEOVANDA MOURAO REZENDE', 'Desenvolvimento Web', 'DIEGO M. DOS REIS', '(88) 88888 - 8888', 0),
(16, 'DEPOSITO SANTA EDWIRGES', '00.807.091/0001-71', '(85)3341-3900', 'NORMA SUELY BRAGA ARAUJO', 'Informatica Aplicada', 'NORMA SUELY', '', 0),
(5, 'HOPE', '03.007.414/0001-30', '(85)3089-3000', 'RAFAELA DOS SANTOS CORTEZ', 'Desenvolvimento Web', 'ENEDINA MARIA', '(00) 00000 - 0000', 0),
(6, 'HOPE', '03.007.414/0001-30', '(85)3089-3000', 'RAFAELA DOS SANTOS CORTEZ', 'Suporte/Redes', 'ENEDINA MARIA', '(88) 88888-8888', 0),
(7, 'FEMINIZE', '04.012.700/0001-57', '(85)3341-4803', 'LEONARDO BASTOS MOTA', 'Suporte/Redes', 'MARCIA VIVIANE', '(99) 99999 - 9999', 0),
(8, 'CDL', '35.003.441/0001-21', '(85)3341-1747', 'NORMA SUELY BRAGA ARAUJO', 'Informatica Aplicada', 'CIDIANNA MARIA', '(00) 00000 - 0000', 0),
(9, 'MALLORY LTDA', '600.140.293-08', '(85)4011-3891', 'ALBERTO BETRIAN BLASCO', 'Suporte/Redes', 'EVERTON BRUNO', '(00) 00000 - 0000', 0),
(10, 'ELAH LINGERIE', '15.658.532/0001-98', '(85)3341-5322', 'RAPHAEL NUNES DE ABREU', 'Suporte/Redes', 'RAPHAEL NUNES', '(00) 00000 - 0000', 0),
(11, 'DEPOSITO SANTA EDWIRGES', '00.807.091/0001-71', '(85)3341-3900', 'NORMA SUELY BRAGA ARAUJO ME', 'Suporte/Redes', 'NORMA SUELY', '(00) 00000 - 0000', 0),
(12, 'DEPOSITO SANTA EDWIRGES', '00.807.091/0001-71', '(85)3341-3900', 'NORMA SUELY BRAGA ARAUJO ME', 'Informatica Aplicada', 'NORMA SUELY', '(00) 00000 - 0000', 0),
(13, 'FACULDADE KURIOS - FAK', '05.327.966/0001-51', '(85)3341-0562', 'FRANCISCA ANGELINA DOS SANTOS OLIVEIRA', 'Desenvolvimento Web', 'SHALOM ACACIO', '(00) 00000 - 0000', 0),
(14, 'FACULDADE KURIOS - FAK', '05.327.966/0001-51', '(85)3341-0562', 'FRANCISCA ANGELINA DOS SANTOS OLIVEIRA', 'Suporte/Redes', 'SHALOM ACACIO', '(00) 00000 - 0000', 0),
(18, 'Universidade Federal do Ceara', '07.272.636/0001-31', '(85) 3366-7413', 'Rogerio Teixeira Masih', 'Desenvolvimento Web', 'Monica Monteiro', '(00) 00000 - 0000', 0),
(20, 'KR Informatica - Maranguape', '03.987.936/0002-27', '(85)   3342-1824', 'KRISNAMURK OSTERNE ALVES ROLIM', 'Tutoria', 'MARIA HELIANE', '(00) 00000 - 0000', 0),
(21, 'KR Informatica - Maracanau', '03.987.936/0002-27', '(85)  3342-1824', 'KRISNAMURK OSTERNE ALVES ROLIM', 'Tutoria', 'MARIA HELIANE', '(00) 00000 - 0000', 0),
(22, 'INFOARTE COMUNICACAO VISUAL', '07.995.637/0001-04', '(85) 3371-1865', 'ANA PAULA MENDES DA SILVA', 'Design', 'ANA PAULA', '(00) 00000 - 0000', 0),
(23, 'INSTITUTO CENTRO DE ENSINO TECNOLOGICO', '03.021.597/0001-49', '(85) 3341-3355', 'FRANCISCO FERRER BEZERRA', 'Tutoria', 'JULIANA CAMPOS', '(00) 00000 - 0000', 0),
(24, 'FABIA RAMYRA (MERCADAO)', '06.341.419/0001-93', '(85) 3341-2372', 'FRANCSICO ARGEU BELO HEBTER', 'Design', 'PATRICIA CARDOSO', '(00) 00000 - 0000', 0),
(25, 'MARANGUAPE SHOPPING MALL', '12.715.823/0001-82', '(85)3341-3091', 'JACKSON MARQUES GIRAO', 'Desenvolvimento Web', 'GUSTAVO ESTEVAM', '(99) 99999 - 9999', 0),
(26, 'MARANGUAPE SHOPPING MALL', '12.715.823/0001-82', '(85)3341-3091', 'JACKSON MARQUES GIRAO', 'SUPORTE/REDES', 'GUSTAVO ESTEVAM', '(99) 99999 - 9999', 0),
(27, 'USINA DE LEITE MARANGUAPE', '07.634.785/0001-01', '(85)3374-3000', 'WILSON RODRIGUES FILHO', 'Suporte/Redes', 'MARCOS DE ARAÚJO', '(99) 99999 - 9999', 0),
(28, 'Maranguape Copias', '77.777.777/7777-77', '(85) 98900 - 5752', 'Michel', 'Design', 'Vanessa', '(85) 98900 - 5752', 0),
(29, 'SOFTWAY INFORMATICA LTDA', '03.248.312/0001-07', '(85)3341-4743', 'ROGERIO R. SENA', 'Suporte/Redes', 'ROGERIO SENA', '', 0),
(40, 'Sec. Saude', '00000/0000-00', '0000000000', 'Noemi', 'Informatica Aplicada', 'Noemi', '00000000000', 0),
(31, 'Deposito Rede Construir', '00.000.000/0000-00', '(88) 88888 - 8888', 'Fabio', 'Informatica Aplicada', 'Fabio', '', 0),
(32, 'APAE - MARANGUAPE', '01.623.817/0001-89', '(85)3341-4191', 'MARIA DE FATIMA MESQUITA BRAGA', 'Tutoria', 'CLEITON HOLANDA', '', 0),
(33, 'Solar Bonifacio Camara', '00.000.000/0000-00', '(99) 99999 - 9999', 'SARA NASCIMENTO', 'Suporte/Redes', 'SARA NASCIMENTO', '(99) 99999 - 9999', 0),
(34, 'Solar Bonifacio Camara', '00.000.000/0000-00', '(99) 99999 - 9999', 'SARA NASCIMENTO', 'Tutoria', 'SARA NASCIMENTO', '(99) 99999 - 9999', 0),
(39, 'Solar Bonifacio Camara', '00.000.000/0000-00', '(99) 99999 - 9999', 'SARA NASCIMENTO', 'Informatica Aplicada', 'SARA NASCIMENTO', '', 0),
(37, 'ADM - LOCAR', '00.000.000/0000-00', '(85)3341-3900', 'NORMA SUELY BRAGA ARAÚJO', 'Desenvolvimento Web', 'ENEDINA MARIA DO NASCIMENTO CARNEIRO', '(00) 00000 - 0000', 3),
(38, 'Universidade Federal do Ceara - PRPPG', '07.272.636/0001-31', '(85) 3366-7413', 'Rogerio Teixeira Masih', 'Desenvolvimento Web', 'Francisco Ary de Andrade', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` char(200) DEFAULT NULL,
  `senha` char(200) DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`, `tipo`) VALUES
(1, 'AndersonAdmin', 'YWRtaW4xMjM=', 'adm'),
(2, 'LuizAdmin', 'YWRtaW4xMjM=', 'adm'),
(3, 'OtavioAdmin', 'YWRtaW4xMjM=', 'adm'),
(4, 'EdilsonAdmin', 'YWRtaW4xMjM=', 'adm'),
(5, 'JaksonAdmin', 'YWRtaW4xMjM=', 'adm'),
(6, 'andersonalves', 'MDMwMjIwMDA=', 'usu'),
(7, 'andrezza.santos13@gmail.com', 'MDIxMg==', 'usu'),
(8, 'Jonatas', 'am9uYXRhczE=', 'usu'),
(9, 'Maria Juliana', 'cmVzaXN0ZW5jaWExMjM=', 'usu'),
(10, 'James', 'amFtZXNraWxkYXJ5', 'usu'),
(11, 'Matheus', 'bWF0aGV1cw==', 'usu'),
(12, 'majornew', 'Y29yb2ExMTcyYw==', 'usu'),
(13, 'Mr.Yago', 'ODc1OTA4MDg=', 'usu'),
(14, 'ruslan', 'cnVzbGFuMTIz', 'usu'),
(15, 'Jocileudo', 'cHVuaXNoZXI=', 'usu'),
(16, 'Guilherme', 'YWVpb3UxMjM0', 'usu'),
(17, 'gabiaraujo', 'YWxpY2UyNw==', 'usu'),
(18, 'Vitor_f95', 'dml0b3IxMjM=', 'usu'),
(19, 'lannynha', 'bGFuYS53', 'usu'),
(20, 'Alex', 'ODUyNQ==', 'usu'),
(21, 'hosanaabr', 'ODgzMDU3NjU=', 'usu'),
(22, 'niel', 'OTgwMDExODU=', 'usu'),
(23, 'eduardo', 'ZWR1YXJkb3NvdXNh', 'usu'),
(24, 'Alan Chrystian', 'Z2lvdmFuYTEyMw==', 'usu'),
(25, 'ruanna layla', 'bG91cmE4OTEwMDkwOA==', 'usu'),
(26, 'laediayuki@gmail.com', 'MDYxMDE5OTk=', 'usu'),
(27, 'RJ', 'ZmVsaXBlam9zaW5v', 'usu'),
(28, 'naycosta', 'OTg1NjYyOTI0', 'usu'),
(29, 'ana paula', 'bG91cmE4OTEwMDkwOA==', 'usu'),
(30, 'fernandxlima', 'dGhld2Fsa2luZ2RlYWQxMjM0', 'usu'),
(31, 'Rivana', 'Uml2MjMxNTEz', 'usu'),
(32, 'ramylalessa@gmail.com', 'bXRybTIyMjQxNjIw', 'usu'),
(33, 'lucascavalcante', 'ZXN0YWdpbzEyMw==', 'usu'),
(34, 'anynhaviana', 'ZGV1c2VtZXVzYWx2YWRvcg==', 'usu'),
(35, 'laura', 'cGF1bG9uZXRvMQ==', 'usu'),
(36, 'lucas', 'bHVjYXNsdWx1MTA=', 'usu'),
(37, 'alex4321', 'YWxleDEyMzQ=', 'usu'),
(38, 'Nunes', 'MTIzNA==', 'usu'),
(39, 'Brennoc40', 'cGFpdmExMjM=', 'usu'),
(40, 'Luiz', 'MTIzbHVpeg==', 'usu'),
(45, 'kapinhr', 'UGluaGVpcm9sMTg4', 'usu'),
(42, 'mauricio_abreeu', 'MTIzNDU2Nzg5', 'usu'),
(47, 'evertonpin7', 'MTcxMUVQUEFB', 'usu'),
(44, 'vianaanynha', 'YXB2YzIzNDEx', 'usu'),
(46, 'rendlonlessa@gmail.com', 'MTIzNDU2Nzg=', 'usu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE IF NOT EXISTS `resultado` (
  `id_resultado` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` char(200) NOT NULL,
  `universidade` char(200) NOT NULL,
  `curso` char(200) NOT NULL,
  `perido` char(200) NOT NULL,
  `trabalho` char(200) NOT NULL,
  `empresa` char(200) NOT NULL,
  `funcao_empresa` char(200) NOT NULL,
  `semestre` char(200) NOT NULL,
  PRIMARY KEY (`id_resultado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado_selecao`
--

CREATE TABLE IF NOT EXISTS `resultado_selecao` (
  `id_resultado` int(20) NOT NULL AUTO_INCREMENT,
  `nome_aluno` char(200) NOT NULL,
  `nome_empresa` char(200) NOT NULL,
  `subarea` char(200) NOT NULL,
  `semestre` char(200) NOT NULL,
  `turma` char(200) NOT NULL,
  `supervisor` char(200) NOT NULL,
  `whats` int(11) NOT NULL,
  PRIMARY KEY (`id_resultado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_ambiente`
--

CREATE TABLE IF NOT EXISTS `turma_ambiente` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `sub_area` char(200) DEFAULT NULL,
  `turma` varchar(200) DEFAULT NULL,
  `semestre` char(100) DEFAULT NULL,
  `endereco` char(200) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `bairro` char(200) DEFAULT NULL,
  `cidade` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_edificacoes`
--

CREATE TABLE IF NOT EXISTS `turma_edificacoes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `sub_area` char(200) DEFAULT NULL,
  `turma` varchar(200) DEFAULT NULL,
  `semestre` char(100) DEFAULT NULL,
  `endereco` char(200) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `bairro` char(200) DEFAULT NULL,
  `cidade` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_enfermagem`
--

CREATE TABLE IF NOT EXISTS `turma_enfermagem` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `sub_area` char(200) DEFAULT NULL,
  `turma` varchar(200) DEFAULT NULL,
  `semestre` char(100) DEFAULT NULL,
  `endereco` char(200) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `bairro` char(200) DEFAULT NULL,
  `cidade` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_informatica`
--

CREATE TABLE IF NOT EXISTS `turma_informatica` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `turma` char(200) NOT NULL,
  `sub_area` char(200) DEFAULT NULL,
  `sub_area2` char(200) NOT NULL,
  `semestre` char(100) DEFAULT NULL,
  `endereco` char(200) DEFAULT NULL,
  `numero` char(10) DEFAULT NULL,
  `bairro` char(200) DEFAULT NULL,
  `cidade` char(200) DEFAULT NULL,
  `email` char(200) NOT NULL,
  `login` char(200) NOT NULL,
  `senha` char(200) NOT NULL,
  `telefone` char(200) NOT NULL,
  `estado` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Extraindo dados da tabela `turma_informatica`
--

INSERT INTO `turma_informatica` (`id`, `nome`, `turma`, `sub_area`, `sub_area2`, `semestre`, `endereco`, `numero`, `bairro`, `cidade`, `email`, `login`, `senha`, `telefone`, `estado`) VALUES
(1, 'Anderson Alves Bezerra', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Rua Jose Maria Almeida', '163', 'Novo Maranguape II', 'Maranguape', 'alveesbezerra13@gmail.com', 'andersonalves', 'MDMwMjIwMDA=', '(85) 98835-5751', 'selecionado'),
(2, 'andreza carneiro dos santos ', 'B', 'Tutoria', 'Suporte/Redes', '2016.2', 'Rua valdemar ferreira do vale', '320', 'novo maranguape', 'Maranguape', 'andrezza.santos13@gmail.com', 'andrezza.santos13@gmail.com', 'MDIxMg==', '(98) 75178-84', 'selecionado'),
(3, 'Jonatas Silva Nascimento', 'B', 'Suporte/Redes', 'Desenvolvimento Web', '2016.2', 'Rua Joao Sousa Fialho', '3204', 'Novo Maranguape', 'Maranguape', 'jonatassilvanc@gmail.com', 'Jonatas', 'am9uYXRhczE=', '(85) 98935-4003', 'selecionado'),
(4, 'Maria Juliana Lucio dos Santos', 'B', 'Suporte/Redes', 'Design', '2016.2', 'Valfrido Machado de Abreu', '312 B', 'Parque Sao Joao', 'Maranguape', 'mariajuliana999@gmail.com', 'Maria Juliana', 'cmVzaXN0ZW5jaWExMjM=', '(85) 98674-9028', 'selecionado'),
(5, 'James Kildary Oliveira dos Santos', 'B', 'Suporte/Redes', 'Informatica Aplicada', '2016.2', 'Rua Francisco Antonio de Lima', '05', 'Papoco', 'Maranguape', 'Jameskildary@outlook.com', 'James', 'amFtZXNraWxkYXJ5', '85 985523984', 'selecionado'),
(6, 'Jose Matheus de Lima Correia ', 'B', 'Tutoria', 'Informatica Aplicada', '2016.2', 'Rua Amaro de Morais', '9', 'outra banda', 'Maranguape', 'matheuslimacorreia@gmail.com', 'Matheus', 'bWF0aGV1cw==', '984183877', 'selecionado'),
(7, 'Matheus Oliveira e Silva', 'B', 'Design', 'Suporte/Redes', '2016.2', 'Rua Maria Gonzaga das Neves', '1172c', 'Parque Santa Fe', 'Maranguape', 'matheusoliveiraesilva99@gmail.com', 'majornew', 'Y29yb2ExMTcyYw==', '986682508', 'selecionado'),
(8, 'Francisco Yago de Sousa Lima', 'B', 'Suporte/Redes', 'Informatica Aplicada', '2016.2', 'Macario Pontes', '110', 'Novo Maranguape', 'Maranguape', 'mr.yago22@gmail.com', 'Mr.Yago', 'ODc1OTA4MDg=', '(85) 85179-733', 'selecionado'),
(9, 'Francisco Ruslan dos Santos Silva', 'B', 'Suporte/Redes', 'Informatica Aplicada', '2016.2', 'Rua Jose Augusto Silva', '980', 'Coite', 'Maranguape', 'ruslansantos7@gmail.com', 'ruslan', 'cnVzbGFuMTIz', '989292617', 'selecionado'),
(10, 'Jocileudo de Sousa Viana ', 'B', 'Desenvolvimento Web', 'Design', '2016.2', 'Rua: Maria Medeiros', 'S/N', 'Tabatinga', 'Maranguape', 'jocileudosousav@gmail.com', 'Jocileudo', 'cHVuaXNoZXI=', '85886799643', 'selecionado'),
(11, 'Guilherme Souza da Costa', 'B', 'Suporte/Redes', 'Design', '2016.2', 'Avenida Brasilia', '561', 'Lagoa do Juvenal', 'Maranguape', 'guilhermesouzdacosta@gmail.com', 'Guilherme', 'YWVpb3UxMjM0', '(85) 98630-4209', 'selecionado'),
(12, 'Gabrielle Araujo Paiva Costa', 'B', 'Informatica Aplicada', 'Tutoria', '2016.2', 'Av Stenio Gomes', '1400', 'Parque Iracema', 'Maranguape', 'gabiaraujopc@gmail.com', 'gabiaraujo', 'YWxpY2UyNw==', '(85) 99792-7646', 'selecionado'),
(13, 'Joao Victor santos ferreira', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Rua Belem', '479', 'Area seca', 'Maranguape', 'vitorsantosferreira10@gmail.com', 'Vitor_f95', 'dml0b3IxMjM=', '(85) 98409-9788', 'selecionado'),
(14, 'Maria weslane lima', 'B', 'Tutoria', 'Suporte/Redes', '2016.2', 'travessa Cruzeiro', '263', 'Outra Banda', 'Maranguape', 'm.weslane@gmail.com', 'lannynha', 'bGFuYS53', '(85) 98845-4475', 'selecionado'),
(15, 'Antonio alex', 'B', 'Suporte/Redes', 'Tutoria', '2016.2', 'Robert braqueais', '1012', 'Park Santa fe', 'Mpe', 'alex', 'Alex', 'ODUyNQ==', '(85) 98195-2404', 'selecionado'),
(16, 'Maria Hosana Mariano Abreu', 'B', 'Informatica Aplicada', 'Informatica Aplicada', '2016.2', 'Rua Flor Violeta', '326', 'Pato Selvagem', 'Maranguape', 'hosanaabreu5@gmail.com', 'hosanaabr', 'ODgzMDU3NjU=', '(85) 98523-9031', 'selecionado'),
(17, 'Daniel Costa do Nascimento', 'B', 'Suporte/Redes', 'Desenvolvimento Web', '2016.2', 'Sitio ypioca', 's/n', 'ypioca', 'maranguape', 'danielcosta1555@gmail.com', 'niel', 'OTgwMDExODU=', '(85) 99800-1185', 'selecionado'),
(18, 'Carlos Eduardo Pontes de Sousa', 'B', 'Suporte/Redes', 'Informatica Aplicada', '2016.2', 'Antonio Alves Cavalcante', '550', 'Parque São João', 'Maranguape', 'edupontes48@gmail.com', 'eduardo', 'ZWR1YXJkb3NvdXNh', '(85) 98106-9370', 'selecionado'),
(19, 'Alan Chrystian Martins Vilela', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Rua: Manoel Fernandes de Oliveira', 'S/N', 'Papara', 'Maranguape', 'allanchrystian90@gmail.com', 'Alan Chrystian', 'Z2lvdmFuYTEyMw==', '(85) 98708-8824', 'selecionado'),
(20, 'Ruanna Layla Lima Barbosa', 'B', 'Informatica Aplicada', 'Informatica Aplicada', '2016.2', 'Rua Moacir Madeira Barros', '409', 'Novo Marangupe', 'Maranguape', 'ruannalayla20@gmail.com', 'ruanna layla', 'bG91cmE4OTEwMDkwOA==', '(85) 98719-7195', 'selecionado'),
(21, 'Laedia do Nascimento Oliveira', 'B', 'Suporte/Redes', 'Design', '2016.2', 'Rua Chico Cirino', '178', 'Novo Maranguape', 'Maranguape', 'laediayuki@gmail.com', 'laediayuki@gmail.com', 'MDYxMDE5OTk=', '(85) 98840-4575', 'selecionado'),
(22, 'Francisco Felipe Rodrigues Josino', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Rua Belem', '265', 'Novo Maranguape', 'Maranguape', 'felipejosino10@gmail.com', 'RJ', 'ZmVsaXBlam9zaW5v', '(85) 98671-0539', 'selecionado'),
(23, 'Nayara Silva da Costa', 'B', 'Informatica Aplicada', 'Desenvolvimento Web', '2016.2', 'sitio ypioca', 's/n', 'ypioca', 'maranguape', 'silvanayara602@gmail.com', 'naycosta', 'OTg1NjYyOTI0', '(85) 98566-2924', 'selecionado'),
(27, 'Ramyla Silva Lessa Santos', 'B', 'Informatica Aplicada', 'Tutoria', '2016.2', 'Rua Boa Esperanca', '07', 'mororo', 'Maranguape', 'ramyllamyller@gmail.com', 'ramylalessa@gmail.com', 'bXRybTIyMjQxNjIw', '(85) 98667-7696', 'selecionado'),
(29, 'Ana Paula Viana de Castro', 'B', 'Tutoria', 'Informatica Aplicada', '2016.2', 'Rua Jeremias Bezerra Luz', '636', 'Parque Sao Joao', 'Maranguape', 'anynhaviana11@gmail.com', 'anynhaviana', 'ZGV1c2VtZXVzYWx2YWRvcg==', '(85)  8762-1011', 'selecionado'),
(24, 'Ana Paula Silva De Sousa', 'B', 'Informatica Aplicada', 'Tutoria', '2016.2', 'Beco', '144', 'Outra banda', 'maranguape', 'paulinhasousa10silva@gmail.com', 'ana paula', 'bG91cmE4OTEwMDkwOA==', '(85) 98910-0908', 'selecionado'),
(25, 'Fernando de Lima Alves', 'B', 'Suporte/Redes', 'Informatica Aplicada', '2016.2', 'Rua Vicente Maciel', '122', 'Novo Maranguape', 'Maranguape', 'fernandogeek14@gmail.com', 'fernandxlima', 'dGhld2Fsa2luZ2RlYWQxMjM0', '(85) 98724-2609', 'selecionado'),
(26, 'Rivana Iris Brito dos Santos', 'B', 'Informatica Aplicada', 'Tutoria', '2016.2', 'Rua Antonio Alves Cavalcante', '533', 'Parque Sao Joao', 'Maranguape', 'rivana.iriis23@gmail.com', 'Rivana', 'Uml2MjMxNTEz', '(85) 986682816', 'selecionado'),
(28, 'Lucas Cavalcante da Silva', 'B', 'Suporte/Redes', 'Design', '2016.2', 'Rua Dr Belo Mota', '225 b', 'Novo Maranguape', 'Maranguape', '', 'lucascavalcante', 'ZXN0YWdpbzEyMw==', '(85) 98792-6705', 'selecionado'),
(30, 'laura ferreira de andrade', 'B', 'Informatica Aplicada', 'Tutoria', '2016.2', 'rua gonçalo candido', '204', 'novo maranguape', 'maranguape', 'lauraandrade154@gmail.com', 'laura', 'cGF1bG9uZXRvMQ==', '(85) 98610-5890', 'selecionado'),
(31, 'Antonio Lucas Ferreira do Nascimento', 'B', 'Suporte/Redes', 'Tutoria', '2016.2', 'rua maria efigenia campos teles', '1219', 'Coite', 'Maranguape', 'lucaslucasnascimento10@gmail.com', 'lucas', 'bHVjYXNsdWx1MTA=', '(98) 72761-14', 'selecionado'),
(32, 'Alex Ferreira Gomes', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Rua Terezinha de Abreu', 'S/N', 'Vila Nova', 'Maranguape', 'alexfer7@gmail.com', 'alex4321', 'YWxleDEyMzQ=', '(85)  853-11866', 'selecionado'),
(34, 'Antonio Brenno Paiva da Costa', 'B', 'Suporte/Redes', 'Informatica Aplicada', '2016.2', 'Rua jeruzalem', '20', 'Penedo', 'Marangauep', 'Brennoc40@gmail.com', 'Brennoc40', 'cGFpdmExMjM=', '(85)  9 8925-3099', 'selecionado'),
(35, 'Luiz Henrique Ferreira Carneiro', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Antonio Custodio', '01', 'Tanques', 'Maranguape', 'hhluiz18@gmail.com', 'Luiz', 'MTIzbHVpeg==', '(85) 98926-5769', 'selecionado'),
(37, 'Francisco Mauricio Abreu Filho', 'B', 'Desenvolvimento Web', 'Suporte/Redes', '2016.2', 'Rua Mundica Paula', 'Ap.9', 'Centro', 'Maranguape', 'mauricioabreu75@gmail.com', 'mauricio_abreeu', 'MTIzNDU2Nzg5', '(85) 98543-6963', 'selecionado'),
(40, 'Karina de Lima Pinheiro', 'B', 'Tutoria', 'Suporte/Redes', '2016.2', 'Avenida Bras?lia', '495', 'Lagoa do Juvenal', 'Maranguape', 'karinalimapinheiro@gmail.com', 'kapinhr', 'UGluaGVpcm9sMTg4', '(85) 98407-9079', 'selecionado'),
(41, 'Rendlon Silva Lessa', 'B', 'Informatica Aplicada', 'Suporte/Redes', '2016.2', 'Rua Jose Pinhiro Pessoa', '07', 'Outra Banda', 'Maranguape', 'Rendlonlessaa@gmail.com', 'rendlonlessa@gmail.com', 'MTIzNDU2Nzg=', '(85)  858-84985', 'selecionado'),
(42, 'Everton Pinheiro da Silva', 'B', 'Design', 'Suporte/Redes', '2016.2', 'Joao bessa', '386', 'parque s?o joao', 'Maranguape', 'evertonpinheiro7@gmail.com', 'evertonpin7', 'MTcxMUVQUEFB', '(85) 98931-9199', 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE IF NOT EXISTS `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` char(200) NOT NULL,
  `turma` char(200) NOT NULL,
  `nome_empresa` char(200) NOT NULL,
  `supervisor` char(200) NOT NULL,
  `subarea` char(200) NOT NULL,
  `telefone` char(200) NOT NULL,
  `estado` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `nome_aluno`, `turma`, `nome_empresa`, `supervisor`, `subarea`, `telefone`, `estado`) VALUES
(6, 'ruanna layla lima barbosa', 'B', 'CDL', 'CIDIANNA MARIA', 'Informatica Aplicada', '(85) 98821-8945', 'selecionado'),
(5, 'Fernando de Lima Alves', 'B', 'FEMINIZE', 'MARCIA VIVIANE', 'Suporte/Redes', '(85) 98724-2609', 'selecionado'),
(3, 'Anderson Alves Bezerra', 'B', 'HOPE', 'ENEDINA MARIA', 'Desenvolvimento Web', '(85) 98835-5751', 'selecionado'),
(4, 'Francisco Ruslan dos Santos Silva', 'B', 'HOPE', 'ENEDINA MARIA', 'Suporte/Redes', '(85) 98929-2617', 'selecionado'),
(7, 'Antonio Lucas Ferreira do Nascimento', 'B', 'MALLORY LTDA', 'EVERTON BRUNO', 'Suporte/Redes', '(85) 98527-6114', 'selecionado'),
(8, 'Guilherme Souza da Costa', 'B', 'MALLORY LTDA', 'EVERTON BRUNO', 'Suporte/Redes', '(85) 98630-4209', 'selecionado'),
(9, 'James Kildary Oliveira dos Santos', 'B', 'FACULDADE KURIOS - FAK', 'SHALOM ACACIO', 'Suporte/Redes', '(85) 9855-23984', 'selecionado'),
(10, 'Francisco Felipe Rodrigues Josino', 'B', 'CREDE 1', 'DIEGO M. DOS REIS', 'Desenvolvimento Web', '(85) 98671-0539', 'selecionado'),
(11, 'Luiz Henrique Ferreira Carneiro', 'B', 'FACULDADE KURIOS - FAK', 'SHALOM ACACIO', 'Desenvolvimento Web', '(85) 98926-5769', 'selecionado'),
(12, 'Lucas Cavalcante da Silva', 'B', 'ELAH LINGERIE', 'RAPHAEL NUNES', 'Suporte/Redes', '(85) 98792-6705', 'selecionado'),
(13, 'Daniel Costa do Nascimento', 'B', 'DEPÓSITO SANTA EDWIRGES', 'NORMA SUELY', 'Suporte/Redes', '(85) 99800-1185', 'selecionado'),
(14, 'Alan Chrystian Martins Vilela', 'B', 'Universidade Federal do Ceara', 'Monica Monteiro', 'Desenvolvimento Web', '(85) 98708-8824', 'selecionado'),
(15, 'Francisco Mauricio Abreu Filho', 'B', 'Universidade Federal do Ceara', 'MONICA MONTEIRO', 'Desenvolvimento Web', '(85)985436963', 'selecionado'),
(16, 'Gabrielle Araujo Paiva Costa', 'B', 'NETWAY CURSOS', 'ROSIMARY SOUSA', 'Informatica Aplicada', '(85)9979 -27646', 'selecionado'),
(17, 'Ana Paula Viana de Castro', 'B', 'KR Informatica - Maracanau', 'MARIA HELIANE', 'Tutoria', '(85)  8762-1011', 'selecionado'),
(18, 'Andreza Carneiro dos Santos', 'B', 'KR Informatica - Maracanau', 'MARIA HELIANE', 'Tutoria', '(85) 98751-7884', 'selecionado'),
(19, 'Karina de Lima Pinheiro', 'B', 'CVT - CENTEC', 'JULIANA CAMPOS', 'Tutoria', '(85) 98407-9079', 'selecionado'),
(20, 'Jose Matheus de Lima Correia', 'B', 'CVT - CENTEC', 'JULIANA CAMPOS', 'Tutoria', '(85) 98418-3877', 'selecionado'),
(21, 'Matheus Oliveira e Silva', 'B', 'INFOARTE COMUNICAÇÃO VISUAL', 'ANA PAULA', 'Design', '(85) 98668-2508', 'selecionado'),
(22, 'Antonio Jose Alexandre Menezes', 'B', 'FABIA RAMYRA (MERCADAO)', 'PATRICIA CARDOSO', 'Design', '(85)98840 -6600', 'selecionado'),
(23, 'Nayara Silva da Costa', 'B', 'DEPOSITO SANTA EDWIRGES', 'NORMA SUELY', 'informatica aplicada', '8585662924', 'selecionado'),
(24, 'laura ferreira de andrade', 'B', 'KR Informatica - Maranguape', 'MARIA HELIANE', 'Tutoria', '(85) 98517-4124', 'selecionado'),
(25, 'Jocileudo de Sousa Viana', 'B', 'MARANGUAPE SHOPPING MALL', 'GUSTAVO ESTEVAM', 'Desenvolvimento Web', '(85) 98679-9634', 'selecionado'),
(26, 'Maria Juliana Lucio dos Santos', 'B', 'USINA DE LEITE MARANGUAPE', 'MARCOS DE ARAUJO', 'Suporte/Redes', '(85) 98674-9028', 'selecionado'),
(27, 'Everton Pinheiro da Silva', 'B', 'Maranguape Copias', 'VANESSA', 'Design', '(85) 98931-9199', 'selecionado'),
(28, 'Francisco Yago De Sousa Lima', 'B', 'SOFTWAY INFORMATICA LTDA', 'ROGERIO SENA', 'Suporte/Redes', '(85) 859179-733', 'selecionado'),
(45, 'Maria Hosana Mariano Abreu', 'B', 'Sec. Saude', 'NOEMI', 'Informatica Aplicada', '(85)98523 -9031', 'selecionado'),
(43, 'Samuel Oliveira de Sousa', 'B', 'UFC - PRPPG', 'PROF. ARY', 'Desenvolvimento Web', '(85) 98854-0863', 'selecionado'),
(42, 'Sarah Nayra Andrade Rodrigues de Lima', 'B', 'UFC - PRPPG', 'PROF. ARY', 'Desenvolvimento Web', '(85) 98586-6129', 'selecionado'),
(32, 'Ana Paula Silva De Sousa', 'B', 'Deposito Rede Construir', 'FABIO', 'Informatica Aplicada', '(85) 98910-0908', 'selecionado'),
(33, 'Ramyla Silva Lessa Santos', 'B', 'APAE - MARANGUAPE', 'CLEITON HOLANDA', 'Tutoria', '(85) 987764393', 'selecionado'),
(34, 'Rivana Iris Brito dos Santos', 'B', 'APAE - MARANGUAPE', 'CLEITON HOLANDA', 'Tutoria', '(85) 98668-2816', 'selecionado'),
(35, 'Maria Weslane Lima', 'B', 'Solar Bonifacio Camara', 'SARA NASCIMENTO', 'Tutoria', '(85) 98845-4475', 'selecionado'),
(36, 'Laedia do Nascimento Oliveira', 'B', 'Secretaria Regional V', 'GUSTAVO ESTEVAM', 'Suporte/Redes', '(88) 98840-4575', 'selecionado'),
(37, 'Joao Victor Santos Ferreira', 'B', 'Secretaria Regional V', 'ISLA MARCIA', 'Desenvolvimento Web', '(85) 98778-8901', 'selecionado'),
(38, 'Jonatas Silva Nascimento', 'B', 'USINA DE LEITE MARANGUAPE', 'MARCOS DE ARAÚJO', 'Suporte/Redes', '(85) 98935-4003', 'selecionado'),
(39, 'Antonio Brenno Paiva da Costa', 'B', 'SOFTWAY INFORMATICA LTDA', 'ROGERIO SENA', 'Suporte/Redes', '(85) 98925-3099', 'selecionado'),
(40, 'Carlos Eduardo Pontes de Sousa', 'B', 'Solar Bonifacio Camara', 'SARA NASCIMENTO', 'Suporte/Redes', '(85) 98106-9370', 'selecionado'),
(44, 'Alex Ferreira Gomes', 'B', 'Solar Bonifacio Camara', 'SARA NASCIMENTO', 'Informatica Aplicada', '(85) 98531-1866', 'selecionado'),
(46, 'Rendlon Silva Lessa', 'B', 'Sec. Saude', 'NOEMI', 'Informatica Aplicada', '(85) 98677-2506', 'selecionado'),
(47, 'Antonio Alex', 'B', 'KR Informatica - Maranguape', 'MARIA HELIANE', 'Tutoria', '(85) 98195-2404', 'selecionado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
