SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `SCH2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `SCH2` ;

-- -----------------------------------------------------
-- Table `SCH2`.`TipoGasto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TipoGasto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TipoGasto` (
  `idTipoGasto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoGasto` VARCHAR(45) NOT NULL,
  `descripcionTipoGasto` TEXT NULL,
  PRIMARY KEY (`idTipoGasto`),
  UNIQUE INDEX `idTipoGasto_UNIQUE` (`idTipoGasto` ASC))
ENGINE = InnoDB
COMMENT = 'Lista de tipos de gastos que se pueden realizar.\nEn caso que /* comment truncated */ /* no se ocupe hay que generar el tipo de defecto.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Gasto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Gasto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Gasto` (
  `idGasto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaGasto` DATE NOT NULL,
  `montoGasto` FLOAT NOT NULL,
  `pagadoGasto` TINYINT(1) NOT NULL DEFAULT false COMMENT 'indica si el gasto fue pagado por el cliente o no \nsi fue pagado esta en true, en caso contrario es false.',
  `descripcionGasto` TEXT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Moneda_idMoneda` INT UNSIGNED NOT NULL,
  `TipoGasto_idTipoGasto` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idGasto`),
  UNIQUE INDEX `idGasto_UNIQUE` (`idGasto` ASC),
  INDEX `fk_Gasto_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Gasto_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  INDEX `fk_Gasto_Moneda1_idx` (`Moneda_idMoneda` ASC),
  INDEX `fk_Gasto_TipoGasto1_idx` (`TipoGasto_idTipoGasto` ASC),
  CONSTRAINT `fk_Gasto_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `SCH2`.`Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `SCH2`.`Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_TipoGasto1`
    FOREIGN KEY (`TipoGasto_idTipoGasto`)
    REFERENCES `SCH2`.`TipoGasto` (`idTipoGasto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'se ingresas los gastos realizados para un cliente/materia de /* comment truncated */ /*terminado, por un usuario determinado.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`TipoAbono`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TipoAbono` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TipoAbono` (
  `idTipoAbono` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoAbono` VARCHAR(45) NOT NULL,
  `descripcionTipoAbono` TEXT NULL,
  PRIMARY KEY (`idTipoAbono`),
  UNIQUE INDEX `idTipoAbono_UNIQUE` (`idTipoAbono` ASC))
ENGINE = InnoDB
COMMENT = 'Tipos de abonos que se puede realizar.\nEn caso de no ser ocu /* comment truncated */ /*pado debe agregarse tipo por defecto.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Abono`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Abono` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Abono` (
  `idAbono` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaAbono` DATE NOT NULL,
  `montoAbono` FLOAT NOT NULL,
  `descripcionAbono` TEXT NULL,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `TipoAbono_idTipoAbono` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idAbono`, `Cliente_idCliente`),
  UNIQUE INDEX `idAbono_UNIQUE` (`idAbono` ASC),
  INDEX `fk_Abono_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Abono_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Abono_TipoAbono1_idx` (`TipoAbono_idTipoAbono` ASC),
  CONSTRAINT `fk_Abono_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `SCH2`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Abono_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Abono_TipoAbono1`
    FOREIGN KEY (`TipoAbono_idTipoAbono`)
    REFERENCES `SCH2`.`TipoAbono` (`idTipoAbono`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Reemplaza tabla AgendaEconomica\npara guardar los abonos o pl /* comment truncated */ /*atas entregadas por los clientes para distintos tramites.*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
