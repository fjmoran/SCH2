SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Feriado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Feriado` ;

CREATE TABLE IF NOT EXISTS `Feriado` (
  `idFeriado` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaFeriado` DATE NOT NULL,
  `tipoFeriado` SET('COMPLETO','MEDIODIA') NOT NULL,
  `descripcionFeriado` TEXT NULL,
  `activoFeriado` TINYINT(1) NOT NULL DEFAULT true,
  `Pais_idPais` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idFeriado`),
  UNIQUE INDEX `idFeriados_UNIQUE` (`idFeriado` ASC),
  INDEX `fk_Feriados_Pais1_idx` (`Pais_idPais` ASC),
  CONSTRAINT `fk_Feriados_Pais1`
    FOREIGN KEY (`Pais_idPais`)
    REFERENCES `Pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'tabla de feriados legales';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
