SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `PermisoMenu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PermisoMenu` ;

CREATE TABLE IF NOT EXISTS `PermisoMenu` (
  `Menu_idMenu` INT UNSIGNED NOT NULL,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  `idPermisoMenu` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPermisoMenu`, `Menu_idMenu`, `Perfil_idPerfil`),
  INDEX `fk_PermisoMenu_Perfil1_idx` (`Perfil_idPerfil` ASC),
  CONSTRAINT `fk_PermisoMenu_Menu1`
    FOREIGN KEY (`Menu_idMenu`)
    REFERENCES `Menu` (`idMenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoMenu_Perfil1`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'permisos de menu';


-- -----------------------------------------------------
-- Table `PermisoPagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PermisoPagina` ;

CREATE TABLE IF NOT EXISTS `PermisoPagina` (
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  `Pagina_idPagina` INT UNSIGNED NOT NULL,
  `idPermisoPagina` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPermisoPagina`, `Perfil_idPerfil`, `Pagina_idPagina`),
  INDEX `fk_PermisoPagina_Pagina1_idx` (`Pagina_idPagina` ASC),
  CONSTRAINT `fk_PermisoPagina_Perfil1`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoPagina_Pagina1`
    FOREIGN KEY (`Pagina_idPagina`)
    REFERENCES `Pagina` (`idPagina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'permisos de las pagina.';


-- -----------------------------------------------------
-- Table `PermisoConcepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PermisoConcepto` ;

CREATE TABLE IF NOT EXISTS `PermisoConcepto` (
  `readPermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `writePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `deletePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `Concepto_idConcepto` INT UNSIGNED NOT NULL,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  `idPermisoConcepto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPermisoConcepto`, `Concepto_idConcepto`, `Perfil_idPerfil`),
  INDEX `fk_PermisoConcepto_Perfil1_idx` (`Perfil_idPerfil` ASC),
  CONSTRAINT `fk_PermisoConcepto_Concepto1`
    FOREIGN KEY (`Concepto_idConcepto`)
    REFERENCES `Concepto` (`idConcepto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoConcepto_Perfil1`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'listado de permisos por cada concepto existente en la tabla  /* comment truncated */ /*de concepto*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
