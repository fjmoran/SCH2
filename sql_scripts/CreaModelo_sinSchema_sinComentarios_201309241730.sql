SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Perfil` ;

CREATE TABLE IF NOT EXISTS `Perfil` (
  `idPerfil` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombrePerfil` VARCHAR(45) NOT NULL,
  `descripcionPerfil` TEXT NULL,
  `activoPerfil` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idPerfil`),
  UNIQUE INDEX `idPerfil_UNIQUE` (`idPerfil` ASC),
  UNIQUE INDEX `nombrePerfil_UNIQUE` (`nombrePerfil` ASC),
  INDEX `nombrePerfil_idx` (`nombrePerfil` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Usuario` ;

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreUsuario` VARCHAR(200) NOT NULL,
  `userUsuario` VARCHAR(45) NOT NULL,
  `claveUsuario` VARCHAR(40) NOT NULL COMMENT 'se considera que la clave será almacenada en SHA1',
  `correoUsuario` VARCHAR(255) NOT NULL,
  `telefonoUsuario` VARCHAR(45) NULL,
  `celularUsuario` VARCHAR(45) NULL COMMENT 'Tabla de usuario del sistema',
  `lastloginUsuario` DATE NULL,
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
    REFERENCES `Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'usuarios del sistema.'
PACK_KEYS = Default
ROW_FORMAT = Default;


-- -----------------------------------------------------
-- Table `Comuna`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Comuna` ;

CREATE TABLE IF NOT EXISTS `Comuna` (
  `idComuna` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreComuna` VARCHAR(120) NOT NULL,
  `codeComuna` VARCHAR(10) NULL COMMENT 'código de las comunas según gobierno',
  `activoComuna` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idComuna`),
  UNIQUE INDEX `idComuna_UNIQUE` (`idComuna` ASC))
ENGINE = InnoDB
COMMENT = 'Listado de Comunas';


-- -----------------------------------------------------
-- Table `Pais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Pais` ;

CREATE TABLE IF NOT EXISTS `Pais` (
  `idPais` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombrePais` VARCHAR(120) NOT NULL,
  `intcodePais` VARCHAR(10) NULL COMMENT 'código del país (ver que ocupar el de aviación u otro.',
  `activoPais` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idPais`),
  UNIQUE INDEX `idPais_UNIQUE` (`idPais` ASC))
ENGINE = InnoDB
COMMENT = 'tabla de paises';


-- -----------------------------------------------------
-- Table `Region`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Region` ;

CREATE TABLE IF NOT EXISTS `Region` (
  `idRegion` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreRegion` VARCHAR(120) NOT NULL,
  `codeRegion` VARCHAR(10) NULL COMMENT 'codigo de las regiones según gobierno',
  `activoRegion` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idRegion`),
  UNIQUE INDEX `idRegion_UNIQUE` (`idRegion` ASC))
ENGINE = InnoDB
COMMENT = 'listado de regiones';


-- -----------------------------------------------------
-- Table `Direccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Direccion` ;

CREATE TABLE IF NOT EXISTS `Direccion` (
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
    REFERENCES `Comuna` (`idComuna`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Pais1`
    FOREIGN KEY (`Pais_idPais`)
    REFERENCES `Pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Region1`
    FOREIGN KEY (`Region_idRegion`)
    REFERENCES `Region` (`idRegion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


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
  `Direccion_idDireccion` INT UNSIGNED NOT NULL,
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


-- -----------------------------------------------------
-- Table `TipoMateria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TipoMateria` ;

CREATE TABLE IF NOT EXISTS `TipoMateria` (
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
-- Table `Materia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Materia` ;

CREATE TABLE IF NOT EXISTS `Materia` (
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
    REFERENCES `Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_TipoMateria1`
    FOREIGN KEY (`TipoMateria_idTipoMateria`)
    REFERENCES `TipoMateria` (`idTipoMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Trabajo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Trabajo` ;

CREATE TABLE IF NOT EXISTS `Trabajo` (
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
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trabajo_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'todos los trabajos ingresados';


-- -----------------------------------------------------
-- Table `Archivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Archivo` ;

CREATE TABLE IF NOT EXISTS `Archivo` (
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
    REFERENCES `Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Contacto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Contacto` ;

CREATE TABLE IF NOT EXISTS `Contacto` (
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
    REFERENCES `Direccion` (`idDireccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'son los contactos que tiene la empresa.';


-- -----------------------------------------------------
-- Table `TipoContacto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TipoContacto` ;

CREATE TABLE IF NOT EXISTS `TipoContacto` (
  `idTipoContacto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoContacto` VARCHAR(45) NOT NULL,
  `descripcionTipoContacto` TEXT NULL,
  PRIMARY KEY (`idTipoContacto`),
  UNIQUE INDEX `idTipoContacto_UNIQUE` (`idTipoContacto` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ContactoCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ContactoCliente` ;

CREATE TABLE IF NOT EXISTS `ContactoCliente` (
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Contacto_idContacto` INT UNSIGNED NOT NULL,
  `TipoContacto_idTipoContacto` INT UNSIGNED NULL,
  PRIMARY KEY (`Cliente_idCliente`, `Contacto_idContacto`),
  INDEX `fk_ContactoCliente_Contacto1_idx` (`Contacto_idContacto` ASC),
  INDEX `fk_ContactoCliente_TipoContacto1_idx` (`TipoContacto_idTipoContacto` ASC),
  CONSTRAINT `fk_ContactoCliente_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ContactoCliente_Contacto1`
    FOREIGN KEY (`Contacto_idContacto`)
    REFERENCES `Contacto` (`idContacto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ContactoCliente_TipoContacto1`
    FOREIGN KEY (`TipoContacto_idTipoContacto`)
    REFERENCES `TipoContacto` (`idTipoContacto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'se guarda las relaciones de los contactos con los clientes.';


-- -----------------------------------------------------
-- Table `Moneda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Moneda` ;

CREATE TABLE IF NOT EXISTS `Moneda` (
  `idMoneda` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreMoneda` VARCHAR(45) NOT NULL,
  `descripcionMoneda` TEXT NULL,
  PRIMARY KEY (`idMoneda`),
  UNIQUE INDEX `idMoneda_UNIQUE` (`idMoneda` ASC),
  UNIQUE INDEX `nombreMoneda_UNIQUE` (`nombreMoneda` ASC))
ENGINE = InnoDB
COMMENT = 'Guarda las distintas monedas con que se trabajaran.';


-- -----------------------------------------------------
-- Table `TipoGasto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TipoGasto` ;

CREATE TABLE IF NOT EXISTS `TipoGasto` (
  `idTipoGasto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoGasto` VARCHAR(45) NOT NULL,
  `descripcionTipoGasto` TEXT NULL,
  PRIMARY KEY (`idTipoGasto`),
  UNIQUE INDEX `idTipoGasto_UNIQUE` (`idTipoGasto` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Gasto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Gasto` ;

CREATE TABLE IF NOT EXISTS `Gasto` (
  `idGasto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaGasto` DATE NOT NULL,
  `montoGasto` FLOAT NOT NULL,
  `pagadoGasto` TINYINT(1) NOT NULL DEFAULT false COMMENT 'indica si el gasto fue pagado por el cliente o no \nsi fue pagado esta en true, en caso contrario es false.',
  `descripcionGasto` TEXT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `Materia_idMateria` INT UNSIGNED NOT NULL,
  `Materia_Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Moneda_idMoneda` INT UNSIGNED NOT NULL,
  `TipoGasto_idTipoGasto` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idGasto`),
  UNIQUE INDEX `idGasto_UNIQUE` (`idGasto` ASC),
  INDEX `fk_Gasto_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Gasto_Materia1_idx` (`Materia_idMateria` ASC, `Materia_Cliente_idCliente` ASC),
  INDEX `fk_Gasto_Moneda1_idx` (`Moneda_idMoneda` ASC),
  INDEX `fk_Gasto_TipoGasto1_idx` (`TipoGasto_idTipoGasto` ASC),
  CONSTRAINT `fk_Gasto_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_TipoGasto1`
    FOREIGN KEY (`TipoGasto_idTipoGasto`)
    REFERENCES `TipoGasto` (`idTipoGasto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Boleta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Boleta` ;

CREATE TABLE IF NOT EXISTS `Boleta` (
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
    REFERENCES `Gasto` (`idGasto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TarifaUsuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TarifaUsuario` ;

CREATE TABLE IF NOT EXISTS `TarifaUsuario` (
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
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaUsuario_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Tarifa general asignada a una usuario';


-- -----------------------------------------------------
-- Table `TarifaMateria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TarifaMateria` ;

CREATE TABLE IF NOT EXISTS `TarifaMateria` (
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
    REFERENCES `Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaMateria_Materia1`
    FOREIGN KEY (`Materia_idMateria` , `Materia_Cliente_idCliente`)
    REFERENCES `Materia` (`idMateria` , `Cliente_idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'guarda las tarifas asignadas por materia a cada usuario.';


-- -----------------------------------------------------
-- Table `EstadoFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EstadoFactura` ;

CREATE TABLE IF NOT EXISTS `EstadoFactura` (
  `idEstadoFactura` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreEstadoFactura` VARCHAR(45) NOT NULL,
  `descripcionEstadoFactura` TEXT NULL,
  PRIMARY KEY (`idEstadoFactura`),
  UNIQUE INDEX `idEstadoFactura_UNIQUE` (`idEstadoFactura` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Factura` ;

CREATE TABLE IF NOT EXISTS `Factura` (
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
    REFERENCES `EstadoFactura` (`idEstadoFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Moneda1`
    FOREIGN KEY (`Moneda_idMoneda`)
    REFERENCES `Moneda` (`idMoneda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'facturas realizadas';


-- -----------------------------------------------------
-- Table `TrabajoFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TrabajoFactura` ;

CREATE TABLE IF NOT EXISTS `TrabajoFactura` (
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
    REFERENCES `Factura` (`idFactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TrabajoFactura_Trabajo1`
    FOREIGN KEY (`Trabajo_idTrabajo`)
    REFERENCES `Trabajo` (`idTrabajo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Trabajos que están en la factura.';


-- -----------------------------------------------------
-- Table `TipoAbono`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `TipoAbono` ;

CREATE TABLE IF NOT EXISTS `TipoAbono` (
  `idTipoAbono` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreTipoAbono` VARCHAR(45) NOT NULL,
  `descripcionTipoAbono` TEXT NULL,
  PRIMARY KEY (`idTipoAbono`),
  UNIQUE INDEX `idTipoAbono_UNIQUE` (`idTipoAbono` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Abono`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Abono` ;

CREATE TABLE IF NOT EXISTS `Abono` (
  `idAbono` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaAbono` DATE NOT NULL,
  `montoAbono` FLOAT NOT NULL,
  `descripcionAbono` TEXT NULL,
  `Cliente_idCliente` INT UNSIGNED NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  `TipoAbono_idTipoAbono` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idAbono`, `Cliente_idCliente`),
  UNIQUE INDEX `idAbono_UNIQUE` (`idAbono` ASC),
  INDEX `fk_Abono_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Abono_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Abono_TipoAbono1_idx` (`TipoAbono_idTipoAbono` ASC),
  CONSTRAINT `fk_Abono_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Abono_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Abono_TipoAbono1`
    FOREIGN KEY (`TipoAbono_idTipoAbono`)
    REFERENCES `TipoAbono` (`idTipoAbono`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Menu` ;

CREATE TABLE IF NOT EXISTS `Menu` (
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
-- Table `PermisoMenu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PermisoMenu` ;

CREATE TABLE IF NOT EXISTS `PermisoMenu` (
  `Menu_idMenu` INT UNSIGNED NOT NULL,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Menu_idMenu`, `Perfil_idPerfil`),
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
-- Table `Pagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Pagina` ;

CREATE TABLE IF NOT EXISTS `Pagina` (
  `idPagina` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `urlPagina` VARCHAR(255) NOT NULL COMMENT 'url de la pagina directorio+pagina',
  `paginaPagina` VARCHAR(255) NOT NULL COMMENT 'solo la pagina, sin directorios',
  `descripcionPagina` TEXT NULL COMMENT 'descripcion de la pagina',
  `activoPagina` TINYINT(1) NOT NULL DEFAULT true COMMENT 'indica si la pagina esta activa para ser desplegada.',
  PRIMARY KEY (`idPagina`),
  UNIQUE INDEX `idPagina_UNIQUE` (`idPagina` ASC),
  UNIQUE INDEX `urlPagina_UNIQUE` (`urlPagina` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PermisoPagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PermisoPagina` ;

CREATE TABLE IF NOT EXISTS `PermisoPagina` (
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  `Pagina_idPagina` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Perfil_idPerfil`, `Pagina_idPagina`),
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
-- Table `Concepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Concepto` ;

CREATE TABLE IF NOT EXISTS `Concepto` (
  `idConcepto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreConcepto` VARCHAR(255) NOT NULL,
  `descripcionConcepto` TEXT NULL,
  PRIMARY KEY (`idConcepto`),
  UNIQUE INDEX `idConcepto_UNIQUE` (`idConcepto` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PermisoConcepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PermisoConcepto` ;

CREATE TABLE IF NOT EXISTS `PermisoConcepto` (
  `readPermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `writePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `deleltePermisoConcepto` TINYINT(1) NOT NULL DEFAULT false,
  `Concepto_idConcepto` INT UNSIGNED NOT NULL,
  `Perfil_idPerfil` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`Concepto_idConcepto`, `Perfil_idPerfil`),
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
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Label`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Label` ;

CREATE TABLE IF NOT EXISTS `Label` (
  `idLabel` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreLabel` VARCHAR(255) NOT NULL,
  `despliegueLabel` VARCHAR(255) NOT NULL,
  `classLabel` VARCHAR(255) NULL,
  PRIMARY KEY (`idLabel`),
  UNIQUE INDEX `idLabel_UNIQUE` (`idLabel` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Feriado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Feriado` ;

CREATE TABLE IF NOT EXISTS `Feriado` (
  `idFeriados` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fechaFeriado` DATE NOT NULL,
  `tipoFeriado` SET('COMPLETO','MEDIODIA') NOT NULL,
  `descripcionFeriado` TEXT NULL,
  `activoFeriado` TINYINT(1) NOT NULL DEFAULT true,
  `Pais_idPais` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idFeriados`),
  UNIQUE INDEX `idFeriados_UNIQUE` (`idFeriados` ASC),
  INDEX `fk_Feriados_Pais1_idx` (`Pais_idPais` ASC),
  CONSTRAINT `fk_Feriados_Pais1`
    FOREIGN KEY (`Pais_idPais`)
    REFERENCES `Pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'tabla de feriados legales';


-- -----------------------------------------------------
-- Table `Parametros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Parametros` ;

CREATE TABLE IF NOT EXISTS `Parametros` (
  `idParametros` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreParametros` VARCHAR(45) NOT NULL,
  `valorParametros` VARCHAR(45) NOT NULL,
  `activoParametros` TINYINT(1) NOT NULL DEFAULT true,
  PRIMARY KEY (`idParametros`))
ENGINE = InnoDB
COMMENT = 'tabla de parámetros estándar del sistema';


-- -----------------------------------------------------
-- Table `ParametroUsuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ParametroUsuario` ;

CREATE TABLE IF NOT EXISTS `ParametroUsuario` (
  `idParametroUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombreParametroUsuario` VARCHAR(45) NOT NULL,
  `valorParametroUsuario` VARCHAR(45) NOT NULL,
  `Usuario_idUsuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idParametroUsuario`, `Usuario_idUsuario`),
  UNIQUE INDEX `idParametroUsuario_UNIQUE` (`idParametroUsuario` ASC),
  INDEX `fk_ParametroUsuario_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_ParametroUsuario_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'listado de parámetros por usuario.';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `Perfil`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `Perfil` (`idPerfil`, `nombrePerfil`, `descripcionPerfil`, `activoPerfil`) VALUES (1, 'Administrador', 'Perfil de Administrador con permisos sobre todo', true);

COMMIT;


-- -----------------------------------------------------
-- Data for table `Usuario`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `Usuario` (`idUsuario`, `nombreUsuario`, `userUsuario`, `claveUsuario`, `correoUsuario`, `telefonoUsuario`, `celularUsuario`, `lastloginUsuario`, `activoUsuario`, `Perfil_idPerfil`) VALUES (1, 'Administrador', 'root', '0553a463d0fe226e64d8dba14c4e8033dc81ce23', 'root@localhost.localdomain', NULL, NULL, NULL, true, 1);

COMMIT;


DELIMITER $$

DROP TRIGGER IF EXISTS `Usuario_BINS` $$


CREATE TRIGGER `Usuario_BINS` BEFORE INSERT ON `Usuario` FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
SET NEW.claveUsuario = SHA1(NEW.claveUsuario);$$


DELIMITER ;
