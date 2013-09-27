SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Parametro`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Parametros` ;
DROP TABLE IF EXISTS `Parametro` ;

CREATE TABLE IF NOT EXISTS `Parametro` (
  `idParametros` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreParametros` VARCHAR(45) NOT NULL,
  `valorParametros` VARCHAR(45) NOT NULL,
  `activoParametros` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idParametros`))
ENGINE = InnoDB
COMMENT = 'tabla de parámetros estándar del sistema';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
