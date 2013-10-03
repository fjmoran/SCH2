SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Cliente` ;

CREATE TABLE IF NOT EXISTS `Cliente` (
  `idCliente` INT UNSIGNED NOT NULL,
  `nombreCliente` VARCHAR(255) NOT NULL COMMENT 'en caso de persona se compone de nombres+Apellido1+Apellido2',
  `nombresCliente` VARCHAR(255) NULL COMMENT 'Para personas son los nombres, para la empresa es la razón social.',
  `Apellido1Cliente` VARCHAR(120) NULL,
  `Apellido2Cliente` VARCHAR(120) NULL,
  `rutCliente` VARCHAR(15) NOT NULL,
  `telefonoCliente` VARCHAR(45) NULL,
  `faxCliente` VARCHAR(45) NULL,
  `emailCliente` VARCHAR(255) NULL,
  `webCliente` VARCHAR(255) NULL,
  `giroCiente` VARCHAR(100) NULL,
  `activoCliente` TINYINT(1) NOT NULL DEFAULT true,
  `tipoCliente` SET('EMPRESA','PERSONA') NOT NULL DEFAULT 'EMPRESA',
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `Direccion_idDireccion` INT UNSIGNED NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE INDEX `idCliente_UNIQUE` (`idCliente` ASC),
  UNIQUE INDEX `nombreCliente_UNIQUE` (`nombreCliente` ASC),
  UNIQUE INDEX `rutCliente_UNIQUE` (`rutCliente` ASC),
  INDEX `fk_Cliente_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Cliente_Direccion1_idx` (`Direccion_idDireccion` ASC),
  CONSTRAINT `fk_Cliente_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Direccion1`
    FOREIGN KEY (`Direccion_idDireccion`)
    REFERENCES `Direccion` (`idDireccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Se guardan los datos del cliente.\n';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
