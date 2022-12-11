-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2022 às 16:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testblog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id_cat`, `name_category`) VALUES
(1, 'Peças'),
(2, 'Linguagens');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `descriptions` longtext DEFAULT NULL,
  `datas` date DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `idcategory` int(11) DEFAULT NULL,
  `text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `descriptions`, `datas`, `img`, `idcategory`, `text`) VALUES
(1, 'Placa Mãe', 'Gigabyte B550M AORUS ELITE B550M AORUS ELITE', '2022-12-02', 'uploads/img01.jpg', 1, '   Por conseguinte, a valorização de fatores subjetivos ainda não demonstrou convincentemente que vai participar na mudança dos métodos utilizados na avaliação de resultados. Do mesmo modo, a contínua expansão de nossa atividade estimula a padronização do sistema de formação de quadros que corresponde às necessidades. O cuidado em identificar pontos críticos no julgamento imparcial das eventualidades prepara-nos para enfrentar situações atípicas decorrentes dos índices pretendidos. Evidentemente, a crescente influência da mídia obstaculiza a apreciação da importância do remanejamento dos quadros funcionais.\r\n\r\n          No entanto, não podemos esquecer que o novo modelo estrutural aqui preconizado agrega valor ao estabelecimento das regras de conduta normativas. A nível organizacional, a necessidade de renovação processual facilita a criação dos procedimentos normalmente adotados. É importante questionar o quanto a adoção de políticas descentralizadoras aponta para a melhoria das condições financeiras e administrativas exigidas.\r\n\r\n          Desta maneira, o início da atividade geral de formação de atitudes promove a alavancagem das condições inegavelmente apropriadas. O que temos que ter sempre em mente é que o desenvolvimento contínuo de distintas formas de atuação possibilita uma melhor visão global dos conhecimentos estratégicos para atingir a excelência. Acima de tudo, é fundamental ressaltar que o comprometimento entre as equipes nos obriga à análise de todos os recursos funcionais envolvidos. Podemos já vislumbrar o modo pelo qual o aumento do diálogo entre os diferentes setores produtivos acarreta um processo de reformulação e modernização das formas de ação.\r\n\r\n          Ainda assim, existem dúvidas a respeito de como a competitividade nas transações comerciais causa impacto indireto na reavaliação das posturas dos órgãos dirigentes com relação às suas atribuições. Todavia, o entendimento das metas propostas deve passar por modificações independentemente do orçamento setorial. O empenho em analisar o surgimento do comércio virtual apresenta tendências no sentido de aprovar a manutenção dos relacionamentos verticais entre as hierarquias.\r\n\r\n         '),
(2, 'Placa De Vídeo Galax', 'Geforce Gtx 1660 Super 6gb GDDR6 192-bit', '2023-03-17', 'uploads/card1.jpg', 1, 'Ainda assim, existem d&uacute;vidas a respeito de como a execu&ccedil;&atilde;o dos pontos do programa faz parte de um processo de gerenciamento dos n&iacute;veis de motiva&ccedil;&atilde;o departamental. Podemos j&aacute; vislumbrar o modo pelo qual a complexidade dos estudos efetuados cumpre um papel essencial na formula&ccedil;&atilde;o das posturas dos &oacute;rg&atilde;os dirigentes com rela&ccedil;&atilde;o &agrave;s suas atribui&ccedil;&otilde;es. Assim mesmo, a crescente influ&ecirc;ncia da m&iacute;dia estende o alcance e a import&acirc;ncia da gest&atilde;o inovadora da qual fazemos parte. A n&iacute;vel organizacional, a hegemonia do ambiente pol&iacute;tico auxilia a prepara&ccedil;&atilde;o e a composi&ccedil;&atilde;o das regras de conduta normativas. O que temos que ter sempre em mente &eacute; que a competitividade nas transa&ccedil;&otilde;es comerciais estimula a padroniza&ccedil;&atilde;o das novas proposi&ccedil;&otilde;es.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A pr&aacute;tica cotidiana prova que o in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes assume importantes posi&ccedil;&otilde;es no estabelecimento das dire&ccedil;&otilde;es preferenciais no sentido do progresso. Nunca &eacute; demais lembrar o peso e o significado destes problemas, uma vez que a consulta aos diversos militantes desafia a capacidade de equaliza&ccedil;&atilde;o dos paradigmas corporativos. O incentivo ao avan&ccedil;o tecnol&oacute;gico, assim como o surgimento do com&eacute;rcio virtual obstaculiza a aprecia&ccedil;&atilde;o da import&acirc;ncia das condi&ccedil;&otilde;es inegavelmente apropriadas.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O empenho em analisar o novo modelo estrutural aqui preconizado causa impacto indireto na reavalia&ccedil;&atilde;o dos &iacute;ndices pretendidos. Desta maneira, a percep&ccedil;&atilde;o das dificuldades ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a dos modos de opera&ccedil;&atilde;o convencionais. N&atilde;o obstante, a consolida&ccedil;&atilde;o das estruturas pode nos levar a considerar a reestrutura&ccedil;&atilde;o do sistema de forma&ccedil;&atilde;o de quadros que corresponde &agrave;s necessidades. O cuidado em identificar pontos cr&iacute;ticos na mobilidade dos capitais internacionais representa uma abertura para a melhoria das diversas correntes de pensamento. No entanto, n&atilde;o podemos esquecer que o fen&ocirc;meno da Internet acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o do processo de comunica&ccedil;&atilde;o como um todo.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A certifica&ccedil;&atilde;o de metodologias que nos auxiliam a lidar com a estrutura atual da organiza&ccedil;&atilde;o n&atilde;o pode mais se dissociar dos m&eacute;todos utilizados na avalia&ccedil;&atilde;o de resultados. Todavia, a expans&atilde;o dos mercados mundiais facilita a cria&ccedil;&atilde;o de todos os recursos funcionais envolvidos. Gostaria de enfatizar que o desafiador cen&aacute;rio globalizado garante a contribui&ccedil;&atilde;o de um grupo importante na determina&ccedil;&atilde;o do fluxo de informa&ccedil;&otilde;es.</p>'),
(3, 'Package Linguagem JAVA', 'JAVA 19, Suport java, package MAVEN', '2022-12-17', 'uploads/capa2.jpg', 2, ' Pensando mais a longo prazo, a expansão dos mercados mundiais oferece uma interessante oportunidade para verificação das condições inegavelmente apropriadas. Neste sentido, a contínua expansão de nossa atividade exige a precisão e a definição do sistema de participação geral. No mundo atual, o consenso sobre a necessidade de qualificação ainda não demonstrou convincentemente que vai participar na mudança dos conhecimentos estratégicos para atingir a excelência. Ainda assim, existem dúvidas a respeito de como o aumento do diálogo entre os diferentes setores produtivos auxilia a preparação e a composição dos paradigmas corporativos.\r\n\r\n          Por outro lado, a consolidação das estruturas cumpre um papel essencial na formulação do investimento em reciclagem técnica. Não obstante, o surgimento do comércio virtual estimula a padronização do remanejamento dos quadros funcionais. É claro que a constante divulgação das informações afeta positivamente a correta previsão do fluxo de informações. A nível organizacional, a determinação clara de objetivos facilita a criação dos níveis de motivação departamental.\r\n\r\n          O cuidado em identificar pontos críticos no entendimento das metas propostas causa impacto indireto na reavaliação do retorno esperado a longo prazo. Por conseguinte, a necessidade de renovação processual agrega valor ao estabelecimento do orçamento setorial. Caros amigos, a complexidade dos estudos efetuados talvez venha a ressaltar a relatividade dos índices pretendidos. A certificação de metodologias que nos auxiliam a lidar com o desafiador cenário globalizado garante a contribuição de um grupo importante na determinação do levantamento das variáveis envolvidas.\r\n\r\n          O empenho em analisar a mobilidade dos capitais internacionais desafia a capacidade de equalização do fluxo de informações. A prática cotidiana prova que a complexidade dos estudos efetuados agrega valor ao estabelecimento do sistema de formação de quadros que corresponde às necessidades. Neste sentido, o julgamento imparcial das eventualidades não pode mais se dissociar das condições inegavelmente apropriadas. Caros amigos, o desafiador cenário globalizado causa impacto indireto na reavaliação do impacto na agilidade decisória. Não obstante, o início da atividade geral de formação de atitudes aponta para a melhoria do retorno esperado a longo prazo.\r\n\r\n          O cuidado em identificar pontos críticos na hegemonia do ambiente político talvez venha a ressaltar a relatividade dos modos de operação convencionais. As experiências acumuladas demonstram que o surgimento do comércio virtual promove a alavancagem dos índices pretendidos. Evidentemente, o consenso sobre a necessidade de qualificação afeta positivamente a correta previsão das novas proposições. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a consolidação das estruturas obstaculiza a apreciação da importância dos relacionamentos verticais entre as hierarquias.\r\n'),
(4, 'Package Linguagem PHP', 'PHP 1.8.9, Suport php, Docker PHP', '2022-12-03', 'uploads/card3.jpg', 2, '    Acima de tudo, é fundamental ressaltar que a expansão dos mercados mundiais garante a contribuição de um grupo importante na determinação do levantamento das variáveis envolvidas. Do mesmo modo, a estrutura atual da organização acarreta um processo de reformulação e modernização das condições financeiras e administrativas exigidas. Assim mesmo, a competitividade nas transações comerciais cumpre um papel essencial na formulação dos métodos utilizados na avaliação de resultados.\r\n\r\n          O que temos que ter sempre em mente é que a adoção de políticas descentralizadoras exige a precisão e a definição das posturas dos órgãos dirigentes com relação às suas atribuições. No entanto, não podemos esquecer que o entendimento das metas propostas representa uma abertura para a melhoria das regras de conduta normativas. Ainda assim, existem dúvidas a respeito de como a valorização de fatores subjetivos deve passar por modificações independentemente dos procedimentos normalmente adotados.\r\n\r\n          Desta maneira, a necessidade de renovação processual oferece uma interessante oportunidade para verificação da gestão inovadora da qual fazemos parte. Percebemos, cada vez mais, que a constante divulgação das informações auxilia a preparação e a composição de alternativas às soluções ortodoxas. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a revolução dos costumes é uma das consequências do processo de comunicação como um todo. A certificação de metodologias que nos auxiliam a lidar com o desenvolvimento contínuo de distintas formas de atuação apresenta tendências no sentido de aprovar a manutenção de todos os recursos funcionais envolvidos. Por outro lado, a contínua expansão de nossa atividade ainda não demonstrou convincentemente que vai participar na mudança do sistema de participação geral.\r\n\r\n          No mundo atual, o aumento do diálogo entre os diferentes setores produtivos nos obriga à análise dos conhecimentos estratégicos para atingir a excelência. Por conseguinte, a crescente influência da mídia possibilita uma melhor visão global dos paradigmas corporativos. Gostaria de enfatizar que a percepção das dificuldades prepara-nos para enfrentar situações atípicas decorrentes do investimento em reciclagem técnica. O incentivo ao avanço tecnológico, assim como o fenômeno da Internet estimula a padronização das diretrizes de desenvolvimento para o futuro. É claro que o novo modelo estrutural aqui preconizado faz parte de um processo de gerenciamento das diversas correntes de pensamento.\r\n\r\n          Podemos já vislumbrar o modo pelo qual a determinação clara de objetivos facilita a criação dos níveis de motivação departamental. É importante questionar o quanto a execução dos pontos do programa pode nos levar a considerar a reestruturação do remanejamento dos quadros funcionais. Todavia, a consulta aos diversos militantes maximiza as possibilidades por conta do orçamento setorial. A nível organizacional, o comprometimento entre as equipes assume importantes posições no estabelecimento das formas de ação.\r\n\r\n          Pensando mais a longo prazo, o acompanhamento das preferências de consumo estende o alcance e a importância das direções preferenciais no sentido do progresso. Todavia, o desenvolvimento contínuo de distintas formas de atuação é uma das consequências de todos os recursos funcionais envolvidos. Caros amigos, a constante divulgação das informações agrega valor ao estabelecimento do sistema de formação de quadros que corresponde às necessidades. A prática cotidiana prova que a complexidade dos estudos efetuados não pode mais se dissociar dos relacionamentos verticais entre as hierarquias.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `logins` varchar(20) NOT NULL,
  `passwords` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `logins`, `passwords`) VALUES
(19, 'Thiago', 'ttt', '310dcbbf4cce62f762a2aaa148d556bd'),
(20, 'Joao Guilherme', 'jjj', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(21, 'Vinicius Carvalho', 'vvv', '698d51a19d8a121ce581499d7b701668');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `k_posts_category` (`idcategory`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `k_posts_category` FOREIGN KEY (`idcategory`) REFERENCES `category` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
