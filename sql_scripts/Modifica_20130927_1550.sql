SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `SCH2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `SCH2` ;

-- -----------------------------------------------------
-- Table `SCH2`.`Pais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Pais` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Pais` (
  `idPais` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombrePais` VARCHAR(120) NOT NULL,
  `intcodePais` VARCHAR(10) NULL COMMENT 'código del país (ver que ocupar el de aviación u otro.',
  `activoPais` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idPais`),
  UNIQUE INDEX `idPais_UNIQUE` (`idPais` ASC))
ENGINE = InnoDB
COMMENT = 'tabla de paises';


-- -----------------------------------------------------
-- Table `SCH2`.`Region`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Region` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Region` (
  `idRegion` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreRegion` VARCHAR(120) NOT NULL,
  `codeRegion` VARCHAR(10) NULL COMMENT 'codigo de las regiones según gobierno',
  `activoRegion` TINYINT(1) NOT NULL DEFAULT true,
  `Pais_idPais` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idRegion`),
  UNIQUE INDEX `idRegion_UNIQUE` (`idRegion` ASC),
  INDEX `fk_Region_Pais1_idx` (`Pais_idPais` ASC),
  CONSTRAINT `fk_Region_Pais1`
    FOREIGN KEY (`Pais_idPais`)
    REFERENCES `SCH2`.`Pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'listado de regiones';


-- -----------------------------------------------------
-- Table `SCH2`.`Comuna`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Comuna` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Comuna` (
  `idComuna` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreComuna` VARCHAR(120) NOT NULL,
  `codeComuna` VARCHAR(10) NULL COMMENT 'código de las comunas según gobierno',
  `activoComuna` TINYINT(1) NOT NULL DEFAULT true,
  `Region_idRegion` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idComuna`),
  UNIQUE INDEX `idComuna_UNIQUE` (`idComuna` ASC),
  INDEX `fk_Comuna_Region1_idx` (`Region_idRegion` ASC),
  CONSTRAINT `fk_Comuna_Region1`
    FOREIGN KEY (`Region_idRegion`)
    REFERENCES `SCH2`.`Region` (`idRegion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Listado de Comunas';


-- -----------------------------------------------------
-- Table `SCH2`.`PermisoConcepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`PermisoConcepto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`PermisoConcepto` (
  `readPermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `writePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `deletePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `Concepto_idConcepto` INT UNSIGNED NOT NULL,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Concepto_idConcepto`, `Perfil_idPerfil`),
  INDEX `fk_PermisoConcepto_Perfil1_idx` (`Perfil_idPerfil` ASC),
  CONSTRAINT `fk_PermisoConcepto_Concepto1`
    FOREIGN KEY (`Concepto_idConcepto`)
    REFERENCES `SCH2`.`Concepto` (`idConcepto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoConcepto_Perfil1`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `SCH2`.`Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'listado de permisos por cada concepto existente en la tabla  /* comment truncated */ /*de concepto*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
