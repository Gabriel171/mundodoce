CREATE TABLE `cadastrofuncionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(100) COLLATE utf16_bin NOT NULL,
  `cpf` varchar(20) CHARACTER SET utf16 DEFAULT NULL,
  `rg` varchar(20) CHARACTER SET utf16 DEFAULT NULL,
  `cep` varchar(11) COLLATE utf16_bin DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(15) CHARACTER SET utf16 DEFAULT NULL,
  `endereco` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `bairro` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `cidade` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `estado` varchar(100) CHARACTER SET utf16 DEFAULT NULL,
  `dt_atualiza` datetime NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  `senha` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;


CREATE TABLE `user_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USER_ROLE_USER` (`user_id`),
  CONSTRAINT `FK_USER_ROLE_USER` FOREIGN KEY (`user_id`) REFERENCES  `cadastrofuncionario`(`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

CREATE TABLE `cadastroproduto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeproduto` varchar(30) COLLATE utf16_bin NOT NULL,
  `codigoproduto` int(20) NOT NULL,
  `marca` varchar(100) COLLATE utf16_bin NOT NULL,
  `fornecedor` varchar(100) COLLATE utf16_bin NOT NULL,
  `unidade` int(100) NOT NULL,
  `peso` int(20) NOT NULL,
  `estoqueminimo` int(100) NOT NULL,
  `estoquemaximo` int(100) NOT NULL,
  `codigogtin` int(14) NOT NULL,
  `valorvenda` int(100) NOT NULL,
  `valorcusto` int(100) NOT NULL,
  `origemproduto` varchar(100) COLLATE utf16_bin NOT NULL,
  `situacao` varchar(100) COLLATE utf16_bin NOT NULL,
  `estado` varchar(100) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

CREATE TABLE `cadastrocliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf16_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(10) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` int(11) NOT NULL,
  `telefone` int(12) NOT NULL,
  `email` varchar(200) COLLATE utf16_bin NOT NULL,
  `senha` varchar(200) COLLATE utf16_bin NOT NULL,
  `estado` varchar(200) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

CREATE TABLE `cadastrofornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeempresa` varchar(100) COLLATE utf16_bin NOT NULL,
  `enderecoempresa` varchar(100) COLLATE utf16_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf16_bin NOT NULL,
  `cep` int(11) NOT NULL,
  `pais` varchar(30) COLLATE utf16_bin NOT NULL,
  `cgc` varchar(100) COLLATE utf16_bin NOT NULL,
  `pessoacontato` varchar(50) COLLATE utf16_bin NOT NULL,
  `telefonecomercial` varchar(12) COLLATE utf16_bin NOT NULL,
  `email` varchar(20) COLLATE utf16_bin NOT NULL,
  `banco` varchar(20) COLLATE utf16_bin NOT NULL,
  `agencia` varchar(20) COLLATE utf16_bin NOT NULL,
  `estado` varchar(50) COLLATE utf16_bin NOT NULL,
  `dt_atualiza` datetime NOT NULL,
  `conta` varchar(10) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

