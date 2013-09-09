SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `SCH2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `SCH2` ;

-- -----------------------------------------------------
-- Table `SCH2`.`Perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Perfil` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Perfil` (
  `idPerfil` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombrePerfil` VARCHAR(45) NOT NULL,
  `descripcion_Perfil` TEXT NULL,
  `activoPerfil` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idPerfil`),
  UNIQUE INDEX `idPerfil_UNIQUE` (`idPerfil` ASC),
  UNIQUE INDEX `nombrePerfil_UNIQUE` (`nombrePerfil` ASC),
  INDEX `nombrePerfil_idx` (`nombrePerfil` ASC))
ENGINE = InnoDB
COMMENT = 'perfil de usuario para poder establecer a que áreas del sist /* comment truncated */ /*ema tiene acceso y que tipo de accesos tiene.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Usuario` (
  `idUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreUsuario` VARCHAR(200) NOT NULL,
  `userUsuario` VARCHAR(45) NOT NULL,
  `claveUsuario` VARCHAR(40) NOT NULL COMMENT 'se considera que la clave será almacenada en SHA1',
  `correoUsuario` VARCHAR(255) NOT NULL,
  `telefonoUsuario` VARCHAR(45) NULL,
  `celularUsuario` VARCHAR(45) NULL COMMENT 'Tabla de usuario del sistema',
  `lastloginUsuario` DATE NULL,
  `activoUsuario` TINYINT(1) NOT NULL DEFAULT true,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  UNIQUE INDEX `nombreUsuario_UNIQUE` (`nombreUsuario` ASC),
  UNIQUE INDEX `userUsuario_UNIQUE` (`userUsuario` ASC),
  INDEX `nombreUsuario_idx` (`nombreUsuario` ASC),
  INDEX `userUsuario_idx` (`userUsuario` ASC),
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `idUsuario_UNIQUE` (`idUsuario` ASC),
  INDEX `fk_Usuario_Perfil_idx` (`Perfil_idPerfil` ASC),
  UNIQUE INDEX `correoUsuario_UNIQUE` (`correoUsuario` ASC),
  CONSTRAINT `fk_Usuario_Perfil`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `SCH2`.`Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'usuarios del sistema.'
PACK_KEYS = Default
ROW_FORMAT = Default;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
