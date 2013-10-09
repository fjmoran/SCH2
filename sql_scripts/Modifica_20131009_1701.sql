SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Concepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Concepto` ;

CREATE TABLE IF NOT EXISTS `Concepto` (
  `idConcepto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreConcepto` VARCHAR(255) NOT NULL,
  `descripcionConcepto` TEXT NULL,
  `activoConcepto` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idConcepto`),
  UNIQUE INDEX `idConcepto_UNIQUE` (`idConcepto` ASC))
ENGINE = InnoDB
COMMENT = 'Se describen los conceptos del sistema, como usuario, client /* comment truncated */ /*e, materia, etc.*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
