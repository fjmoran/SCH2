SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Pagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Pagina` ;

CREATE TABLE IF NOT EXISTS `Pagina` (
  `idPagina` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `urlPagina` VARCHAR(255) NOT NULL COMMENT 'url de la pagina directorio+pagina',
  `nombrePagina` VARCHAR(255) NOT NULL COMMENT 'solo la pagina, sin directorios',
  `descripcionPagina` TEXT NULL COMMENT 'descripcion de la pagina',
  `activoPagina` TINYINT(1) NOT NULL DEFAULT true COMMENT 'indica si la pagina esta activa para ser desplegada.',
  PRIMARY KEY (`idPagina`),
  UNIQUE INDEX `idPagina_UNIQUE` (`idPagina` ASC),
  UNIQUE INDEX `urlPagina_UNIQUE` (`urlPagina` ASC))
ENGINE = InnoDB
COMMENT = 'pagina con listado de la paginas que existen en el sistema.\n /* comment truncated */ /*Este listado será ocupado para la validación de permisos de despliegue de dichas páginas.*/';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
