CREATE SCHEMA `multinivel` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `multinivel`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_pai` INT(11) NULL,
  `patente` INT(11) NOT NULL DEFAULT 1,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`));



INSERT INTO `multinivel`.`usuarios` (`patente`, `nome`, `email`, `senha`) VALUES ('1', 'Sistema', 'sistema@sistema.com', '');



USE multinivel;
UPDATE usuarios SET senha=MD5('sistema') where id='1';

COMMIT;



