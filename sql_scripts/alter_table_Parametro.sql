ALTER TABLE `SCH2`.`Parametro` 
CHANGE COLUMN `idParametros` `idParametro` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
CHANGE COLUMN `nombreParametros` `nombreParametro` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
CHANGE COLUMN `valorParametros` `valorParametro` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
CHANGE COLUMN `activoParametros` `activoParametro` TINYINT(1) NOT NULL DEFAULT '1' ;