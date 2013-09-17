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
  `descripcionPerfil` TEXT NULL,
  `activoPerfil` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idPerfil`),
  UNIQUE INDEX `idPerfil_UNIQUE` (`idPerfil` ASC),
  UNIQUE INDEX `nombrePerfil_UNIQUE` (`nombrePerfil` ASC),
  INDEX `nombrePerfil_idx` (`nombrePerfil` ASC))
ENGINE = InnoDB
COMMENT = 'perfil de usuario para poder establecer a que áreas del sist /* comment truncated */ /*ema tiene acceso y que tipo de accesos tiene.*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `SCH2`.`Perfil`
-- -----------------------------------------------------
START TRANSACTION;
USE `SCH2`;
INSERT INTO `SCH2`.`Perfil` (`idPerfil`, `nombrePerfil`, `descripcionPerfil`, `activoPerfil`) VALUES (1, 'Administrador', 'Perfil de Administrador con permisos sobre todo', true);

COMMIT;

