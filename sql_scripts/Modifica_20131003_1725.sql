SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Moneda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Moneda` ;

CREATE TABLE IF NOT EXISTS `Moneda` (
  `idMoneda` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreMoneda` VARCHAR(45) NOT NULL,
  `descripcionMoneda` TEXT NULL,
  `activoMoneda` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idMoneda`),
  UNIQUE INDEX `idMoneda_UNIQUE` (`idMoneda` ASC),
  UNIQUE INDEX `nombreMoneda_UNIQUE` (`nombreMoneda` ASC))
ENGINE = InnoDB
COMMENT = 'Guarda las distintas monedas con que se trabajaran.';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
