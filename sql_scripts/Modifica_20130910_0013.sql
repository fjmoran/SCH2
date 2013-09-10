
-- -----------------------------------------------------
-- Data for table `SCH2`.`Perfil`
-- -----------------------------------------------------
START TRANSACTION;
USE `SCH2`;
INSERT INTO `SCH2`.`Perfil` (`idPerfil`, `nombrePerfil`, `descripcion_Perfil`, `activoPerfil`) VALUES (1, 'Administrador', 'Perfil de Administrador con permisos sobre todo', true);

COMMIT;


-- -----------------------------------------------------
-- Data for table `SCH2`.`Usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `SCH2`;
INSERT INTO `SCH2`.`Usuario` (`idUsuario`, `nombreUsuario`, `userUsuario`, `claveUsuario`, `correoUsuario`, `telefonoUsuario`, `celularUsuario`, `lastloginUsuario`, `activoUsuario`, `Perfil_idPerfil`) VALUES (1, 'Administrador', 'root', '0553a463d0fe226e64d8dba14c4e8033dc81ce23', 'root@localhost.localdomain', NULL, NULL, NULL, true, 1);

COMMIT;

