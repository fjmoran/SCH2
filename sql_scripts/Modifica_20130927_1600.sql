SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Archivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Archivo` ;

CREATE TABLE IF NOT EXISTS `Archivo` (
  `idArchivo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreArchivo` VARCHAR(255) NOT NULL,
  `typeArchivo` VARCHAR(50) NOT NULL,
  `sizeArchivo` INT(11) NOT NULL,
  `contenidoArchivo` MEDIUMBLOB NOT NULL,
  `lockArchivo` TINYINT(1) NOT NULL DEFAULT true,
  `lastupdateArchivo` DATETIME NOT NULL DEFAULT now(),
  `descripcionArchivo` TEXT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idArchivo`),
  UNIQUE INDEX `idArchivo_UNIQUE` (`idArchivo` ASC),
  UNIQUE INDEX `nombreArchivo_UNIQUE` (`nombreArchivo` ASC),
  INDEX `fk_Archivo_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  INDEX `fk_Archivo_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Archivo_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Archivo_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Se guardan los archivos correspondiente a un cliente / mater /* comment truncated */ /*ia especifico.*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
