SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `sch2` ;
CREATE SCHEMA IF NOT EXISTS `sch2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `sch2` ;

-- -----------------------------------------------------
-- Table `sch2`.`Perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Perfil` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Perfil` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NOT NULL,
  `DESCRIPCION` VARCHAR(255) NULL DEFAULT NULL,
  `perfiles_ID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NOMBRE` (`NOMBRE` ASC),
  INDEX `fk_perfiles_perfiles1_idx` (`perfiles_ID` ASC),
  CONSTRAINT `fk_Perfil_Perfil1`
    FOREIGN KEY (`perfiles_ID`)
    REFERENCES `sch2`.`Perfil` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Usuario` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(200) NOT NULL,
  `USER` VARCHAR(45) NOT NULL,
  `CLAVE` VARCHAR(10) NOT NULL,
  `TELEFONO` VARCHAR(45) NULL DEFAULT NULL,
  `CELULAR` VARCHAR(45) NOT NULL,
  `PRECIOXHORA` FLOAT NULL DEFAULT NULL,
  `ID_PERFIL` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `USER` (`USER` ASC),
  INDEX `FK_USUARIOS_1` (`ID_PERFIL` ASC),
  CONSTRAINT `fk_Usuario_Perfil`
    FOREIGN KEY (`ID_PERFIL`)
    REFERENCES `sch2`.`Perfil` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Cliente` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Cliente` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(200) NOT NULL,
  `DIRECCION` VARCHAR(200) NULL DEFAULT NULL,
  `TELEFONO` VARCHAR(15) NULL DEFAULT NULL,
  `FAX` VARCHAR(15) NULL DEFAULT NULL,
  `E_MAIL` VARCHAR(200) NULL DEFAULT NULL,
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL COMMENT 'es el id del usuario que esta a cargo del cliente.',
  `RUT` VARCHAR(15) NULL DEFAULT NULL,
  `GIRO` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NOMBRE` (`NOMBRE` ASC),
  INDEX `IDX_NOMBRE` (`NOMBRE` ASC),
  INDEX `ID_USUARIO` (`ID_USUARIO` ASC),
  CONSTRAINT `fk_Cliente_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`AgendaEconomica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`AgendaEconomica` ;

CREATE TABLE IF NOT EXISTS `sch2`.`AgendaEconomica` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `TIPO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `MONTO` DECIMAL(10,2) NOT NULL DEFAULT '0.00',
  `DESCRIPCION` TEXT NULL DEFAULT NULL,
  `FECHA` DATE NOT NULL DEFAULT '0000-00-00',
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  INDEX `Index_2` (`ID_CLIENTE` ASC),
  INDEX `Index_3` (`FECHA` ASC),
  INDEX `Index_4` (`ID_USUARIO` ASC),
  CONSTRAINT `fk_AgendaEconomica_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AgendaEconomica_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`TipoMateria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`TipoMateria` ;

CREATE TABLE IF NOT EXISTS `sch2`.`TipoMateria` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nombre` (`nombre` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`MateriaCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`MateriaCliente` ;

CREATE TABLE IF NOT EXISTS `sch2`.`MateriaCliente` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `id_cliente` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `id_abogado` INT(10) UNSIGNED NOT NULL,
  `id_tipo_materia` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `id_estado_materia` BIGINT(20) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  INDEX `FK_MATERIASXCLIENTES_1` (`id_cliente` ASC),
  INDEX `id_tipo_materia` (`id_tipo_materia` ASC),
  INDEX `id_estado_materia` (`id_estado_materia` ASC),
  CONSTRAINT `fk_MateriasCliente_Cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_MateriaClientes_TiposMateria`
    FOREIGN KEY (`id_tipo_materia`)
    REFERENCES `sch2`.`TipoMateria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Archivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Archivo` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Archivo` (
  `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(255) NOT NULL,
  `TYPE` VARCHAR(50) NOT NULL,
  `SIZE` INT(11) NOT NULL,
  `CONTENIDO` MEDIUMBLOB NOT NULL,
  `ID_MATERIACLIENTE` INT(10) UNSIGNED NOT NULL,
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL,
  `DESCRIPCION` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  INDEX `ID_MATERIACLIENTE` (`ID_MATERIACLIENTE` ASC, `ID_CLIENTE` ASC),
  INDEX `ID_idx` (`ID_CLIENTE` ASC),
  INDEX `ID_idx1` (`ID_MATERIACLIENTE` ASC),
  CONSTRAINT `fk_Archivo_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT,
  CONSTRAINT `fx_Archivo_MateriaCliente`
    FOREIGN KEY (`ID_MATERIACLIENTE`)
    REFERENCES `sch2`.`MateriaCliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Contacto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Contacto` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Contacto` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(200) NOT NULL,
  `TELEFONO` VARCHAR(20) NULL DEFAULT NULL,
  `CELULAR` VARCHAR(20) NULL DEFAULT NULL,
  `EMAIL` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  INDEX `AI_ID` (`ID` ASC),
  INDEX `PK_INDEX` (`ID` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`TipoContacto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`TipoContacto` ;

CREATE TABLE IF NOT EXISTS `sch2`.`TipoContacto` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(20) NOT NULL,
  `DESCRIPCION` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NOMBRE` (`NOMBRE` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`ContactoCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`ContactoCliente` ;

CREATE TABLE IF NOT EXISTS `sch2`.`ContactoCliente` (
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_CONTACTO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_TIPO_CONTACTO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_CLIENTE`, `ID_CONTACTO`),
  INDEX `IDX_CLIENTE` (`ID_CLIENTE` ASC),
  INDEX `IDX_CONTACTO` (`ID_CONTACTO` ASC),
  INDEX `IDX_TIPO_CONTACTO` (`ID_TIPO_CONTACTO` ASC),
  CONSTRAINT `fk_ContactoCliente_TipoContacto`
    FOREIGN KEY (`ID_TIPO_CONTACTO`)
    REFERENCES `sch2`.`TipoContacto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_ContactoCliente_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_ContactoCliente_Contacto`
    FOREIGN KEY (`ID_CONTACTO`)
    REFERENCES `sch2`.`Contacto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`EstadoFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`EstadoFactura` ;

CREATE TABLE IF NOT EXISTS `sch2`.`EstadoFactura` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NOT NULL,
  `DESCRIPCION` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NOMBRE` (`NOMBRE` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`EstadoMateria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`EstadoMateria` ;

CREATE TABLE IF NOT EXISTS `sch2`.`EstadoMateria` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL COMMENT 'nombre del estado de la materia',
  `descripcion` VARCHAR(255) NULL DEFAULT NULL COMMENT 'descripcion del estado de la materia',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nombre` (`nombre` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1
COMMENT = 'tabla donde se guardan los posibles estados de las materias';


-- -----------------------------------------------------
-- Table `sch2`.`EstadoTrabajo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`EstadoTrabajo` ;

CREATE TABLE IF NOT EXISTS `sch2`.`EstadoTrabajo` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NOT NULL,
  `DESCRIPCION` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NOMBRE` (`NOMBRE` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Moneda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Moneda` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Moneda` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NOT NULL,
  `DESCRIPCION` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `NOMBRE` (`NOMBRE` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Factura` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Factura` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FECHA` DATE NOT NULL DEFAULT '0000-00-00',
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `MONTO` DOUBLE NULL DEFAULT NULL,
  `FECHA_INICIO` DATE NOT NULL DEFAULT '0000-00-00',
  `FECHA_FIN` DATE NOT NULL DEFAULT '0000-00-00',
  `ID_ESTADO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_MONEDA` INT(10) UNSIGNED NULL DEFAULT NULL,
  `CAMBIO` DOUBLE NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  INDEX `Index_2` (`ID_CLIENTE` ASC),
  INDEX `Index_3` (`ID_MONEDA` ASC),
  INDEX `ID_idx` (`ID_ESTADO` ASC),
  CONSTRAINT `fk_Factura_EstadoFactura`
    FOREIGN KEY (`ID_ESTADO`)
    REFERENCES `sch2`.`EstadoFactura` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Moneda`
    FOREIGN KEY (`ID_MONEDA`)
    REFERENCES `sch2`.`Moneda` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Factura_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`ImagenBoleta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`ImagenBoleta` ;

CREATE TABLE IF NOT EXISTS `sch2`.`ImagenBoleta` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(45) NOT NULL,
  `TAMANO` INT(10) UNSIGNED NOT NULL,
  `CONTENIDO` LONGBLOB NOT NULL,
  `TIPO` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Gastos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Gastos` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Gastos` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FECHA` DATE NOT NULL DEFAULT '0000-00-00',
  `DESCRIPCION` TEXT NULL DEFAULT NULL,
  `ID_MATERIACLIENTE` INT(10) UNSIGNED NULL DEFAULT NULL,
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `MONTO` FLOAT NOT NULL DEFAULT '0',
  `ID_IMAGEN` INT(10) UNSIGNED NULL DEFAULT NULL,
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL,
  `ID_TIPO` SMALLINT(5) UNSIGNED NOT NULL DEFAULT '1' COMMENT '1 para gasto, 2 para ingreso',
  `BOLETA` VARCHAR(100) NULL DEFAULT NULL,
  `PAGADO` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'Indica si el gasto o el abono fueron pagados',
  PRIMARY KEY (`ID`),
  INDEX `IDX_ID_MATERIACLIENTE` (`ID_MATERIACLIENTE` ASC),
  INDEX `IDX_ID_USUARIO` (`ID_USUARIO` ASC),
  INDEX `IDX_IMAGEN` (`ID_IMAGEN` ASC),
  INDEX `IDX_ID_CLIENTE` (`ID_CLIENTE` ASC),
  INDEX `PAGADO` (`PAGADO` ASC),
  CONSTRAINT `fk_Gasto_ImagenBoleta`
    FOREIGN KEY (`ID_IMAGEN`)
    REFERENCES `sch2`.`ImagenBoleta` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_MateriaCliente`
    FOREIGN KEY (`ID_MATERIACLIENTE`)
    REFERENCES `sch2`.`MateriaCliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gasto_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Menu` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Menu` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(20) NOT NULL,
  `ID_PADRE` INT(10) UNSIGNED NULL DEFAULT NULL,
  `NIVEL` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `URL` VARCHAR(45) NULL DEFAULT NULL,
  `TARGET` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  INDEX `ID_PADRE` (`ID_PADRE` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Permiso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Permiso` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Permiso` (
  `ID_PERFIL` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_MENU` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_PERFIL`, `ID_MENU`),
  INDEX `IDX_PERFIL` (`ID_PERFIL` ASC),
  INDEX `IDX_MENU` (`ID_MENU` ASC),
  CONSTRAINT `fk_Permiso_Perfil`
    FOREIGN KEY (`ID_PERFIL`)
    REFERENCES `sch2`.`Perfil` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_Permiso_Menu`
    FOREIGN KEY (`ID_MENU`)
    REFERENCES `sch2`.`Menu` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`TarifaAbogado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`TarifaAbogado` ;

CREATE TABLE IF NOT EXISTS `sch2`.`TarifaAbogado` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `PRECIO` FLOAT NOT NULL DEFAULT '0',
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_MONEDA` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID` (`ID` ASC),
  INDEX `ID_USUARIO` (`ID_USUARIO` ASC),
  INDEX `ID_MONEDA` (`ID_MONEDA` ASC),
  CONSTRAINT `fk_TarifaAbogado_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_TarifaAbogado_Moneda`
    FOREIGN KEY (`ID_MONEDA`)
    REFERENCES `sch2`.`Moneda` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE RESTRICT)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`TarifaCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`TarifaCliente` ;

CREATE TABLE IF NOT EXISTS `sch2`.`TarifaCliente` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `PRECIO` FLOAT NOT NULL DEFAULT '0',
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_MONEDA` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID` (`ID` ASC),
  INDEX `ID_CLIENTE` (`ID_CLIENTE` ASC),
  INDEX `ID_MONEDA` (`ID_MONEDA` ASC),
  CONSTRAINT `fk_TarifaCliente_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaCliente_Moneda`
    FOREIGN KEY (`ID_MONEDA`)
    REFERENCES `sch2`.`Moneda` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`TarifaMateriaCliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`TarifaMateriaCliente` ;

CREATE TABLE IF NOT EXISTS `sch2`.`TarifaMateriaCliente` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `PRECIO` FLOAT NOT NULL DEFAULT '0',
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_MATERIAXCLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_MONEDA` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID` (`ID` ASC),
  INDEX `ID_MATERIAXCLIENTE` (`ID_MATERIAXCLIENTE` ASC),
  INDEX `ID_USUARIO` (`ID_USUARIO` ASC),
  INDEX `ID_MONEDA` (`ID_MONEDA` ASC),
  CONSTRAINT `fk_TarifaMateriaCliente_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaMateriaCliente_MateriaCliente`
    FOREIGN KEY (`ID_MATERIAXCLIENTE`)
    REFERENCES `sch2`.`MateriaCliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TarifaMateriaCliente_Moneda`
    FOREIGN KEY (`ID_MONEDA`)
    REFERENCES `sch2`.`Moneda` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Trabajo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Trabajo` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Trabajo` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FECHA` DATE NOT NULL,
  `TIEMPO` TIME NOT NULL DEFAULT '00:00:00',
  `DESCRIPCION` TEXT NULL DEFAULT NULL,
  `ID_CLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'id del cliente al que se le agrega el trabajo',
  `ID_MATERIA_CLIENTE` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'id del Proyecto o Materia al que se le agrega el trabajo',
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'id del usuario que agrego el trabajo',
  `ID_ESTADO_TRABAJO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  INDEX `IDX_ID_USUARIO` (`ID_USUARIO` ASC),
  INDEX `IDX_ID_MATERIACLIENTE` (`ID_MATERIA_CLIENTE` ASC),
  INDEX `IDX_ID_ESTADO_TRABAJO` (`ID_ESTADO_TRABAJO` ASC),
  INDEX `ID_idx` (`ID_CLIENTE` ASC),
  CONSTRAINT `fk_Trabajo_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trabajo_Cliente`
    FOREIGN KEY (`ID_CLIENTE`)
    REFERENCES `sch2`.`Cliente` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trabajo_MateriaCliente`
    FOREIGN KEY (`ID_MATERIA_CLIENTE`)
    REFERENCES `sch2`.`MateriaCliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trabajo_EstadoTrabajo`
    FOREIGN KEY (`ID_ESTADO_TRABAJO`)
    REFERENCES `sch2`.`EstadoTrabajo` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`TrabajoFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`TrabajoFactura` ;

CREATE TABLE IF NOT EXISTS `sch2`.`TrabajoFactura` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ID_TRABAJO` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `ID_FACTURA` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `TIEMPO` TIME NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`ID`),
  INDEX `Index_2` (`ID_FACTURA` ASC),
  INDEX `Index_3` (`ID_TRABAJO` ASC),
  CONSTRAINT `fk_TrabajoFactura_Trabajo`
    FOREIGN KEY (`ID_TRABAJO`)
    REFERENCES `sch2`.`Trabajo` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TrabajoFactura_Factura`
    FOREIGN KEY (`ID_FACTURA`)
    REFERENCES `sch2`.`Factura` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sch2`.`Pagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Pagina` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Pagina` (
  `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `URL` VARCHAR(250) NOT NULL,
  `DESCRIPCION` VARCHAR(250) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sch2`.`PermisoPagina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`PermisoPagina` ;

CREATE TABLE IF NOT EXISTS `sch2`.`PermisoPagina` (
  `ID_PAGINA` INT(10) UNSIGNED NOT NULL,
  `ID_PERFIL` INT(10) UNSIGNED NOT NULL,
  INDEX `ID_idx` (`ID_PAGINA` ASC),
  INDEX `ID_idx1` (`ID_PERFIL` ASC),
  CONSTRAINT `fk_PermisoPagina_Pagina`
    FOREIGN KEY (`ID_PAGINA`)
    REFERENCES `sch2`.`Pagina` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoPagina_Perfil`
    FOREIGN KEY (`ID_PERFIL`)
    REFERENCES `sch2`.`Perfil` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sch2`.`Concepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`Concepto` ;

CREATE TABLE IF NOT EXISTS `sch2`.`Concepto` (
  `ID` INT(10) UNSIGNED NOT NULL,
  `NOMBRE` VARCHAR(45) NOT NULL,
  `DESCRIPCION` VARCHAR(250) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sch2`.`PermisoConcepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sch2`.`PermisoConcepto` ;

CREATE TABLE IF NOT EXISTS `sch2`.`PermisoConcepto` (
  `ID_USUARIO` INT(10) UNSIGNED NOT NULL,
  `ID_CONCEPTO` INT(10) UNSIGNED NOT NULL,
  `READ` TINYINT(1) NOT NULL DEFAULT FALSE,
  `WRITE` TINYINT(1) NOT NULL DEFAULT FALSE,
  `DELETE` TINYINT(1) NOT NULL DEFAULT FALSE,
  INDEX `idx_usuario` (`ID_USUARIO` ASC),
  INDEX `idx_concepto` (`ID_CONCEPTO` ASC),
  INDEX `idx_read` (`READ` ASC),
  INDEX `idx_write` (`WRITE` ASC),
  INDEX `idx_delete` (`DELETE` ASC),
  CONSTRAINT `fk_PermisoConcepto_Usuario`
    FOREIGN KEY (`ID_USUARIO`)
    REFERENCES `sch2`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PermisoConcepto_Concepto`
    FOREIGN KEY (`ID_CONCEPTO`)
    REFERENCES `sch2`.`Concepto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
