SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `SCH2` ;
CREATE SCHEMA IF NOT EXISTS `SCH2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `SCH2` ;

-- -----------------------------------------------------
-- Table `SCH2`.`Perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Perfil` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Perfil` (
  `idPerfil` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombrePerfil` VARCHAR(45) NOT NULL,
  `descripcion_Perfil` VARCHAR(200) NULL,
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


-- -----------------------------------------------------
-- Table `SCH2`.`Comuna`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Comuna` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Comuna` (
  `idComuna` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreComuna` VARCHAR(120) NOT NULL,
  `codeComuna` VARCHAR(10) NULL COMMENT 'código de las comunas según gobierno',
  `activoComuna` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idComuna`),
  UNIQUE INDEX `idComuna_UNIQUE` (`idComuna` ASC))
ENGINE = InnoDB
COMMENT = 'Listado de Comunas';


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
  PRIMARY KEY (`idRegion`),
  UNIQUE INDEX `idRegion_UNIQUE` (`idRegion` ASC))
ENGINE = InnoDB
COMMENT = 'listado de regiones';


-- -----------------------------------------------------
-- Table `SCH2`.`Direccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Direccion` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Direccion` (
  `idDireccion` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `calleDireccion` VARCHAR(255) NOT NULL,
  `numeroDireccion` VARCHAR(10) NOT NULL,
  `ofDireccion` VARCHAR(10) NULL,
  `codigopostalDireccion` VARCHAR(10) NULL,
  `activoDireccion` TINYINT(1) NOT NULL DEFAULT true,
  `Comuna_idComuna` INT UNSIGNED NULL,
  `Pais_idPais` INT UNSIGNED NOT NULL,
  `Region_idRegion` INT UNSIGNED NULL,
  PRIMARY KEY (`idDireccion`),
  UNIQUE INDEX `idDireccion_UNIQUE` (`idDireccion` ASC),
  INDEX `fk_Direccion_Comuna1_idx` (`Comuna_idComuna` ASC),
  INDEX `fk_Direccion_Pais1_idx` (`Pais_idPais` ASC),
  INDEX `fk_Direccion_Region1_idx` (`Region_idRegion` ASC),
  CONSTRAINT `fk_Direccion_Comuna1`
    FOREIGN KEY (`Comuna_idComuna`)
    REFERENCES `SCH2`.`Comuna` (`idComuna`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Pais1`
    FOREIGN KEY (`Pais_idPais`)
    REFERENCES `SCH2`.`Pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Region1`
    FOREIGN KEY (`Region_idRegion`)
    REFERENCES `SCH2`.`Region` (`idRegion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Cliente` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Cliente` (
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
  `Direccion_idDireccion` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE INDEX `idCliente_UNIQUE` (`idCliente` ASC),
  UNIQUE INDEX `nombreCliente_UNIQUE` (`nombreCliente` ASC),
  UNIQUE INDEX `rutCliente_UNIQUE` (`rutCliente` ASC),
  INDEX `fk_Cliente_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Cliente_Direccion1_idx` (`Direccion_idDireccion` ASC),
  CONSTRAINT `fk_Cliente_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Direccion1`
    FOREIGN KEY (`Direccion_idDireccion`)
    REFERENCES `SCH2`.`Direccion` (`idDireccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Se guardan los datos del cliente.\n';


-- -----------------------------------------------------
-- Table `SCH2`.`TipoMateria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TipoMateria` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TipoMateria` (
  `idTipoMateria` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoMateria` VARCHAR(100) NOT NULL,
  `descripcionTipoMateria` TEXT NULL,
  `activoTipoMateria` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idTipoMateria`),
  UNIQUE INDEX `idTipoMateria_UNIQUE` (`idTipoMateria` ASC),
  UNIQUE INDEX `nombreTipoMateria_UNIQUE` (`nombreTipoMateria` ASC))
ENGINE = InnoDB
COMMENT = 'tipificación de las materias o proyectos de los clientes.';


-- -----------------------------------------------------
-- Table `SCH2`.`Materia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Materia` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Materia` (
  `idMateria` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreMateria` VARCHAR(50) NOT NULL,
  `descripcionMateria` TEXT NULL,
  `activoMateria` TINYINT(1) NOT NULL DEFAULT true,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `TipoMateria_idTipoMateria` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idMateria`, `Cliente_idCliente`),
  UNIQUE INDEX `idMateria_UNIQUE` (`idMateria` ASC),
  UNIQUE INDEX `nombreMateria_UNIQUE` (`nombreMateria` ASC),
  INDEX `fk_Materia_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Materia_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Materia_TipoMateria1_idx` (`TipoMateria_idTipoMateria` ASC),
  CONSTRAINT `fk_Materia_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `SCH2`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_TipoMateria1`
    FOREIGN KEY (`TipoMateria_idTipoMateria`)
    REFERENCES `SCH2`.`TipoMateria` (`idTipoMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'materia perteneciente a un cliente.\ntambién se podría defini /* comment truncated */ /*r como proyectos de un cliente.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Trabajo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Trabajo` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Trabajo` (
  `idTrabajo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaTrabajo` DATE NOT NULL,
  `tiempoTrabajo` TIME NOT NULL,
  `descripcionTrabajo` TEXT NULL,
  `facturadoTrabajo` TINYINT(1) NOT NULL DEFAULT false COMMENT 'Indica si el trabajo ha sido facturado o no.\nAl estar en \'true\' este trabajo NO puede ser modificado.\nEsto reemplaza la tabla EstadoTrabajo',
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idTrabajo`),
  UNIQUE INDEX `idTrabajo_UNIQUE` (`idTrabajo` ASC),
  INDEX `fk_Trabajo_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Trabajo_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  CONSTRAINT `fk_Trabajo_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trabajo_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `SCH2`.`Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`Archivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Archivo` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Archivo` (
  `idArchivo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreArchivo` VARCHAR(255) NOT NULL,
  `typeArchivo` VARCHAR(50) NOT NULL,
  `sizeArchivo` INT(11) NOT NULL,
  `contenidoArchivo` MEDIUMBLOB NOT NULL,
  `descripcionArchivo` TEXT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idArchivo`),
  UNIQUE INDEX `idArchivo_UNIQUE` (`idArchivo` ASC),
  UNIQUE INDEX `nombreArchivo_UNIQUE` (`nombreArchivo` ASC),
  INDEX `fk_Archivo_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  INDEX `fk_Archivo_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Archivo_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Archivo_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `SCH2`.`Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `SCH2`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Se guardan los archivos correspondiente a un cliente / mater /* comment truncated */ /*ia especifico.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Contacto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Contacto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Contacto` (
  `idContacto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreContacto` VARCHAR(200) NOT NULL,
  `telefonoContacto` VARCHAR(20) NULL,
  `celularContacto` VARCHAR(20) NULL,
  `correoContacto` VARCHAR(255) NULL,
  `rutContacto` VARCHAR(15) NULL,
  `webContacto` VARCHAR(255) NULL,
  `linkedInContacto` VARCHAR(400) NULL,
  `twitterContacto` VARCHAR(255) NULL,
  `facebookContacto` VARCHAR(400) NULL,
  `Direccion_idDireccion` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idContacto`),
  UNIQUE INDEX `idContacto_UNIQUE` (`idContacto` ASC),
  UNIQUE INDEX `nombreContacto_UNIQUE` (`nombreContacto` ASC),
  INDEX `fk_Contacto_Direccion1_idx` (`Direccion_idDireccion` ASC),
  CONSTRAINT `fk_Contacto_Direccion1`
    FOREIGN KEY (`Direccion_idDireccion`)
    REFERENCES `SCH2`.`Direccion` (`idDireccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'son los contactos que tiene la empresa.';


-- -----------------------------------------------------
-- Table `SCH2`.`TipoContacto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TipoContacto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TipoContacto` (
  `idTipoContacto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoContacto` VARCHAR(45) NOT NULL,
  `descripcionTipoContacto` TEXT NULL,
  PRIMARY KEY (`idTipoContacto`),
  UNIQUE INDEX `idTipoContacto_UNIQUE` (`idTipoContacto` ASC))
ENGINE = InnoDB
COMMENT = 'relaciones de los contactos con los clientes, por ejemplo co /* comment truncated */ /*ntador, secretaria etc.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`ContactoCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`ContactoCliente` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`ContactoCliente` (
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Contacto_idContacto` INT UNSIGNED NOT NULL,
  `TipoContacto_idTipoContacto` INT UNSIGNED NULL,
  PRIMARY KEY (`Cliente_idCliente`, `Contacto_idContacto`),
  INDEX `fk_ContactoCliente_Contacto1_idx` (`Contacto_idContacto` ASC),
  INDEX `fk_ContactoCliente_TipoContacto1_idx` (`TipoContacto_idTipoContacto` ASC),
  CONSTRAINT `fk_ContactoCliente_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `SCH2`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ContactoCliente_Contacto1`
    FOREIGN KEY (`Contacto_idContacto`)
    REFERENCES `SCH2`.`Contacto` (`idContacto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ContactoCliente_TipoContacto1`
    FOREIGN KEY (`TipoContacto_idTipoContacto`)
    REFERENCES `SCH2`.`TipoContacto` (`idTipoContacto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'se guarda las relaciones de los contactos con los clientes.';


-- -----------------------------------------------------
-- Table `SCH2`.`Moneda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Moneda` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Moneda` (
  `idMoneda` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreMoneda` VARCHAR(45) NOT NULL,
  `descripcionMoneda` TEXT NULL,
  PRIMARY KEY (`idMoneda`),
  UNIQUE INDEX `idMoneda_UNIQUE` (`idMoneda` ASC),
  UNIQUE INDEX `nombreMoneda_UNIQUE` (`nombreMoneda` ASC))
ENGINE = InnoDB
COMMENT = 'Guarda las distintas monedas con que se trabajaran.';


-- -----------------------------------------------------
-- Table `SCH2`.`Gasto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Gasto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Gasto` (
  `idGasto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaGasto` DATE NOT NULL,
  `montoGasto` FLOAT NOT NULL,
  `pagadoGasto` TINYINT(1) NOT NULL DEFAULT false COMMENT 'indica si el gasto fue pagado por el cliente o no \nsi fue pagado esta en true, en caso contrario es false.',
  `descripcionGasto` TEXT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Moneda_idMoneda` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idGasto`),
  UNIQUE INDEX `idGasto_UNIQUE` (`idGasto` ASC),
  INDEX `fk_Gasto_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Gasto_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  INDEX `fk_Gasto_Moneda1_idx` (`Moneda_idMoneda` ASC),
  CONSTRAINT `fk_Gasto_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `SCH2`.`Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `SCH2`.`Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'se ingresas los gastos realizados para un cliente/materia de /* comment truncated */ /*terminado, por un usuario determinado.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Boleta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Boleta` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Boleta` (
  `idImagenBoleta` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreImagenBoleta` VARCHAR(200) NULL,
  `sizeImagenBoleta` INT(11) NULL,
  `contenidoImagenBoleta` MEDIUMBLOB NULL,
  `typeImagenBoleta` VARCHAR(50) NULL,
  `numeroBoleta` VARCHAR(45) NOT NULL,
  `descripcionImagenBoleta` TEXT NULL,
  `montoBoleta` FLOAT NOT NULL,
  `Gasto_idGasto` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idImagenBoleta`),
  UNIQUE INDEX `idImagenBoleta_UNIQUE` (`idImagenBoleta` ASC),
  INDEX `fk_Boleta_Gasto1_idx` (`Gasto_idGasto` ASC),
  CONSTRAINT `fk_Boleta_Gasto1`
    FOREIGN KEY (`Gasto_idGasto`)
    REFERENCES `SCH2`.`Gasto` (`idGasto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'se guarda las boletas con o sin imagen de los documentos ren /* comment truncated */ /*didos para poder ser presentadas al cliente en que caso de ser necesario.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`TarifaUsuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TarifaUsuario` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TarifaUsuario` (
  `idTarifaUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `valorTarifaUsuario` FLOAT NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `Moneda_idMoneda` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idTarifaUsuario`, `Usuario_idUsuario`, `Moneda_idMoneda`),
  UNIQUE INDEX `idTarifaUsuario_UNIQUE` (`idTarifaUsuario` ASC),
  INDEX `fk_TarifaUsuario_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_TarifaUsuario_Moneda1_idx` (`Moneda_idMoneda` ASC),
  CONSTRAINT `fk_TarifaUsuario_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaUsuario_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `SCH2`.`Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Tarifa general asignada a una usuario';


-- -----------------------------------------------------
-- Table `SCH2`.`TarifaMateria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TarifaMateria` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TarifaMateria` (
  `idTarifaMateria` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `valorTarifaMateria` FLOAT NOT NULL,
  `Moneda_idMoneda` INT UNSIGNED NOT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idTarifaMateria`, `Moneda_idMoneda`, `Materia_idMateria`, `Materia_Cliente_idCliente`),
  UNIQUE INDEX `idTarifaMateria_UNIQUE` (`idTarifaMateria` ASC),
  INDEX `fk_TarifaMateria_Moneda1_idx` (`Moneda_idMoneda` ASC),
  INDEX `fk_TarifaMateria_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  CONSTRAINT `fk_TarifaMateria_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `SCH2`.`Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaMateria_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `SCH2`.`Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'guarda las tarifas asignadas por materia a cada usuario.';


-- -----------------------------------------------------
-- Table `SCH2`.`EstadoFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`EstadoFactura` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`EstadoFactura` (
  `idEstadoFactura` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreEstadoFactura` VARCHAR(45) NOT NULL,
  `descripcionEstadoFactura` TEXT NULL,
  PRIMARY KEY (`idEstadoFactura`),
  UNIQUE INDEX `idEstadoFactura_UNIQUE` (`idEstadoFactura` ASC))
ENGINE = InnoDB
COMMENT = 'Describe los distintos estados en que se encuentra una factu /* comment truncated */ /*ra*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Factura` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Factura` (
  `idFactura` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaFactura` DATE NOT NULL,
  `montoFactura` FLOAT NOT NULL,
  `fechainicioFactura` DATE NOT NULL,
  `fechafinFactura` DATE NOT NULL,
  `tasacambioFactura` FLOAT NOT NULL,
  `EstadoFactura_idEstadoFactura` INT UNSIGNED NOT NULL,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Moneda_idMoneda` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idFactura`),
  UNIQUE INDEX `idFactura_UNIQUE` (`idFactura` ASC),
  INDEX `fk_Factura_EstadoFactura1_idx` (`EstadoFactura_idEstadoFactura` ASC),
  INDEX `fk_Factura_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Factura_Moneda1_idx` (`Moneda_idMoneda` ASC),
  CONSTRAINT `fk_Factura_EstadoFactura1`
    FOREIGN KEY (`EstadoFactura_idEstadoFactura`)
    REFERENCES `SCH2`.`EstadoFactura` (`idEstadoFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `SCH2`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `SCH2`.`Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`TrabajoFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`TrabajoFactura` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`TrabajoFactura` (
  `idTrabajoFactura` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tiempoTrabajoFactura` TIME NULL COMMENT 'El tiempo que se le factura al cliente en caso que no sea el mismo que esta en el trabajo facturado',
  `Factura_idFactura` INT UNSIGNED NOT NULL,
  `Trabajo_idTrabajo` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idTrabajoFactura`, `Trabajo_idTrabajo`),
  UNIQUE INDEX `idTrabajoFactura_UNIQUE` (`idTrabajoFactura` ASC),
  INDEX `fk_TrabajoFactura_Factura1_idx` (`Factura_idFactura` ASC),
  INDEX `fk_TrabajoFactura_Trabajo1_idx` (`Trabajo_idTrabajo` ASC),
  CONSTRAINT `fk_TrabajoFactura_Factura1`
    FOREIGN KEY (`Factura_idFactura`)
    REFERENCES `SCH2`.`Factura` (`idFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TrabajoFactura_Trabajo1`
    FOREIGN KEY (`Trabajo_idTrabajo`)
    REFERENCES `SCH2`.`Trabajo` (`idTrabajo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Trabajos que están en la la factura.';


-- -----------------------------------------------------
-- Table `SCH2`.`Abono`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Abono` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Abono` (
  `idAbono` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaAbono` DATE NOT NULL,
  `montoAbono` FLOAT NOT NULL,
  `descripcionAbono` TEXT NULL,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idAbono`, `Cliente_idCliente`),
  UNIQUE INDEX `idAbono_UNIQUE` (`idAbono` ASC),
  INDEX `fk_Abono_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Abono_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Abono_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `SCH2`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Abono_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Reemplaza tabla AgendaEconomica\npara guardar los abonos o pl /* comment truncated */ /*atas entregadas por los clientes para distintos tramites.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`Menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Menu` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Menu` (
  `idMenu` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreMenu` VARCHAR(45) NOT NULL COMMENT 'nombre a desplegar de la opción.',
  `nivelMenu` INT NOT NULL DEFAULT 1 COMMENT 'indique que nivel tiene',
  `urlMenu` VARCHAR(255) NOT NULL COMMENT 'guarda la dirección url relativa de la opción de menú',
  `targetMenu` VARCHAR(45) NOT NULL COMMENT 'indica el target donde será desplegada la opción del menú',
  `activoMenu` TINYINT(1) NOT NULL DEFAULT true COMMENT 'indica si la opción esta activa para ser desplegada.',
  PRIMARY KEY (`idMenu`),
  UNIQUE INDEX `idMenu_UNIQUE` (`idMenu` ASC))
ENGINE = InnoDB
COMMENT = 'Despliegue del Menu con URL.';


-- -----------------------------------------------------
-- Table `SCH2`.`PermisoMenu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`PermisoMenu` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`PermisoMenu` (
  `Menu_idMenu` INT UNSIGNED NOT NULL,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Menu_idMenu`, `Perfil_idPerfil`),
  INDEX `fk_PermisoMenu_Perfil1_idx` (`Perfil_idPerfil` ASC),
  CONSTRAINT `fk_PermisoMenu_Menu1`
    FOREIGN KEY (`Menu_idMenu`)
    REFERENCES `SCH2`.`Menu` (`idMenu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoMenu_Perfil1`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `SCH2`.`Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`Pagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Pagina` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Pagina` (
  `idPagina` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `urlPagina` VARCHAR(255) NOT NULL COMMENT 'url de la pagina directorio+pagina',
  `paginaPagina` VARCHAR(255) NOT NULL COMMENT 'solo la pagina, sin directorios',
  `descripcionPagina` TEXT NULL COMMENT 'descripcion de la pagina',
  `activoPagina` TINYINT(1) NOT NULL DEFAULT true COMMENT 'indica si la pagina esta activa para ser desplegada.',
  PRIMARY KEY (`idPagina`),
  UNIQUE INDEX `idPagina_UNIQUE` (`idPagina` ASC),
  UNIQUE INDEX `urlPagina_UNIQUE` (`urlPagina` ASC))
ENGINE = InnoDB
COMMENT = 'pagina con listado de la paginas que existen en el sistema.\n /* comment truncated */ /*Este listado será ocupado para la validación de permisos de despliegue de dichas páginas.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`PermisoPagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`PermisoPagina` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`PermisoPagina` (
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  `Pagina_idPagina` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Perfil_idPerfil`, `Pagina_idPagina`),
  INDEX `fk_PermisoPagina_Pagina1_idx` (`Pagina_idPagina` ASC),
  CONSTRAINT `fk_PermisoPagina_Perfil1`
    FOREIGN KEY (`Perfil_idPerfil`)
    REFERENCES `SCH2`.`Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoPagina_Pagina1`
    FOREIGN KEY (`Pagina_idPagina`)
    REFERENCES `SCH2`.`Pagina` (`idPagina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`Concepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Concepto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Concepto` (
  `idConcepto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreConcepto` VARCHAR(255) NOT NULL,
  `descripcionConcepto` TEXT NULL,
  PRIMARY KEY (`idConcepto`),
  UNIQUE INDEX `idConcepto_UNIQUE` (`idConcepto` ASC))
ENGINE = InnoDB
COMMENT = 'Se describen los conceptos del sistema, como usuario, client /* comment truncated */ /*e, materia, etc.*/';


-- -----------------------------------------------------
-- Table `SCH2`.`PermisoConcepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`PermisoConcepto` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`PermisoConcepto` (
  `readPermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `writePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `deleltePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
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
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`Label`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Label` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Label` (
  `idLabel` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreLabel` VARCHAR(255) NOT NULL,
  `despliegueLabel` VARCHAR(255) NOT NULL,
  `classLabel` VARCHAR(255) NULL,
  PRIMARY KEY (`idLabel`),
  UNIQUE INDEX `idLabel_UNIQUE` (`idLabel` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SCH2`.`Feriados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Feriados` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Feriados` (
  `idFeriados` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaFeriados` DATE NOT NULL,
  `tipoFeriados` SET('COMPLETO','MEDIODIA') NOT NULL,
  `activoFeriados` TINYINT(1) NOT NULL DEFAULT true,
  `Pais_idPais` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idFeriados`),
  UNIQUE INDEX `idFeriados_UNIQUE` (`idFeriados` ASC),
  INDEX `fk_Feriados_Pais1_idx` (`Pais_idPais` ASC),
  CONSTRAINT `fk_Feriados_Pais1`
    FOREIGN KEY (`Pais_idPais`)
    REFERENCES `SCH2`.`Pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'tabla de feriados legales';


-- -----------------------------------------------------
-- Table `SCH2`.`Parametros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`Parametros` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`Parametros` (
  `idParametros` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreParametros` VARCHAR(45) NOT NULL,
  `valorParametros` VARCHAR(45) NOT NULL,
  `activoParametros` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idParametros`))
ENGINE = InnoDB
COMMENT = 'tabla de parámetros estándar del sistema';


-- -----------------------------------------------------
-- Table `SCH2`.`ParametroUsuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SCH2`.`ParametroUsuario` ;

CREATE TABLE IF NOT EXISTS `SCH2`.`ParametroUsuario` (
  `idParametroUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreParametroUsuario` VARCHAR(45) NOT NULL,
  `valorParametroUsuario` VARCHAR(45) NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idParametroUsuario`, `Usuario_idUsuario`),
  UNIQUE INDEX `idParametroUsuario_UNIQUE` (`idParametroUsuario` ASC),
  INDEX `fk_ParametroUsuario_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_ParametroUsuario_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SCH2`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
