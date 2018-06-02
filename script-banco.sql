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

CREATE TABLE `multinivel`.`patentes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `minimo` INT(11) NOT NULL,
  PRIMARY KEY (`id`));


INSERT INTO `multinivel`.`patentes` (`nome`, `minimo`) VALUES ('Empreendedor', '0');
INSERT INTO `multinivel`.`patentes` (`nome`, `minimo`) VALUES ('Elite', '1');
INSERT INTO `multinivel`.`patentes` (`nome`, `minimo`) VALUES ('Rubi', '3');
INSERT INTO `multinivel`.`patentes` (`nome`, `minimo`) VALUES ('Esmeralda', '5');
INSERT INTO `multinivel`.`patentes` (`nome`, `minimo`) VALUES ('Diamante', '10');

COMMIT;




