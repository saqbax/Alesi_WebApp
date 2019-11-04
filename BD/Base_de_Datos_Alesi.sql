﻿-- MYSQL SCRIPT GENERATED BY MYSQL WORKBENCH
-- WED OCT 30 00:08:35 2019
-- MODEL: NEW MODEL    VERSION: 1.0
-- MYSQL WORKBENCH FORWARD ENGINEERING

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- SCHEMA ALESI_BD
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ALESI_BD` ;

-- -----------------------------------------------------
-- SCHEMA ALESI_BD
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ALESI_BD` DEFAULT CHARACTER SET UTF8 ;
USE `ALESI_BD` ;

-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TUSUARIOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TUSUARIOS` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TUSUARIOS` (
  `USUARIO` VARCHAR(45) NOT NULL,
  `ID_PERSONA` INT NOT NULL,
  `PASS` VARCHAR(45) NOT NULL,
  `ROL` VARCHAR(45) NOT NULL,
  `STATUS` VARCHAR(45) NOT NULL,
  `F_ALTA` DATE NOT NULL,
  `F_ULTIMA_CONEXION` DATE NULL,
  PRIMARY KEY (`USUARIO`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TPERSONAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TPERSONAS` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TPERSONAS` (
  `ID_PERSONA` INT NOT NULL AUTO_INCREMENT,
  `NOMBRE` VARCHAR(50) NOT NULL,
  `APELLIDOP` VARCHAR(50) NOT NULL,
  `APELLIDOM` VARCHAR(50) NOT NULL,
  `EDAD` INT NULL,
  `SEXO` VARCHAR(1) NULL,
  `TELEFONO` VARCHAR(20) NULL,
  `EMAIL` VARCHAR(45) NULL,
  `ID_EMPRESA` VARCHAR(45) NULL,
  `CARGO` VARCHAR(90) NULL,
  `OTROS` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_PERSONA`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TCASO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TCASO` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TCASO` (
  `ID_CASO` INT NOT NULL AUTO_INCREMENT,
  `ID_EMPRESA` VARCHAR(45) NOT NULL,
  `TIPO_CASO` VARCHAR(45) NOT NULL,
  `F_ALTA` DATE NOT NULL,
  `F_ESTATUS` DATE NOT NULL,
  `F_CIERRE` DATE NOT NULL,
  `STATUS` VARCHAR(45) NOT NULL,
  `ID_USUARIO_ALTA` VARCHAR(45) NOT NULL,
  `ID_USUARIO_ASIGNADO` VARCHAR(45) NOT NULL,
  `ID_USUARIO_ULTIMA_ACT` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID_CASO`))
ENGINE = INNODB;




-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TATRICASO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TATRICASO` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TATRICASO` (
  `ID_EMPRESA` VARCHAR(45) NOT NULL,
  `TIPO_CASO` VARCHAR(45) NOT NULL,
  `NUM_ATRIBUTO` INT NOT NULL,
  `DESCRIPCION` VARCHAR(150) NOT NULL,
  `TIPO_DATO` VARCHAR(45) NOT NULL,
  `CATALOGO` VARCHAR(45) NOT NULL,
  `DEFAULT` VARCHAR(45) NULL,
  `LONGITUD_MIN` VARCHAR(45) NULL,
  `LONGITUD_MAX` VARCHAR(45) NULL,
  `EDITABLE` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_EMPRESA`, `TIPO_CASO`,`NUM_ATRIBUTO`))
ENGINE = INNODB;



-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TABLAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TABLAS` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TABLAS` (
  `ID_TABLA` INT NOT NULL  AUTO_INCREMENT,
  `COD_TABLA` VARCHAR(45) NOT NULL,
  `DESCIPCION` VARCHAR(150) NOT NULL,
  `ID_TABL_DEP` INT NULL,
  PRIMARY KEY (`ID_TABLA`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_NTABLAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_NTABLAS` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_NTABLAS` (
  `ID_TABLA` INT NOT NULL,
  `ID_CODIGO` VARCHAR(45) NOT NULL,
  `DESCIPCION` VARCHAR(150) NOT NULL,
  `CAMPO_A` VARCHAR(45) NULL,
  `CAMPO_B` VARCHAR(45) NULL,
  `CAMPO_C` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_TABLA`, `ID_CODIGO`),
  CONSTRAINT `FK_NTQBLAS`
    FOREIGN KEY (`ID_TABLA`)
    REFERENCES `ALESI_BD`.`ALESI_TABLAS` (`ID_TABLA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;

SET SQL_MODE = '';
DROP USER IF EXISTS ALESI_USERWEB;
SET SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
CREATE USER 'ALESI_USERWEB' IDENTIFIED BY 'EGWZXN$GWPDG';

GRANT ALL ON `ALESI_BD`.* TO 'ALESI_USERWEB';
GRANT SELECT, INSERT, TRIGGER ON TABLE `ALESI_BD`.* TO 'ALESI_USERWEB';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TVALCASO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TVALCASO` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TVALCASO` (
  `ID_CASO` INT NOT NULL,
  `NUM_ATRIBUTO` INT NOT NULL,
  `VALOR` VARCHAR(36000) NULL,
  PRIMARY KEY (`ID_CASO`),
  CONSTRAINT `FK_2`
    FOREIGN KEY (`ID_CASO`)
    REFERENCES `ALESI_BD`.`ALESI_TCASO` (`ID_CASO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;




-- -----------------------------------------------------
-- TABLE `ALESI_BD`.`ALESI_TVALCASO_2`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ALESI_BD`.`ALESI_TVALCASO_2` ;

CREATE TABLE IF NOT EXISTS `ALESI_BD`.`ALESI_TVALCASO_2` (
  `VALOR1` VARCHAR(36000) NULL,
  `VALOR2` VARCHAR(36000) NULL,
  `VALOR3` VARCHAR(36000) NULL,
  `VALOR4` VARCHAR(36000) NULL,
  `VALOR5` VARCHAR(36000) NULL,
  `VALOR6` VARCHAR(36000) NULL,
  `VALOR7` VARCHAR(36000) NULL,
  `VALOR8` VARCHAR(36000) NULL,
  `VALOR9` VARCHAR(36000) NULL,
  `VALOR10` VARCHAR(36000) NULL,
  `VALOR11` VARCHAR(36000) NULL,
  `VALOR12` VARCHAR(36000) NULL,
  `VALOR13` VARCHAR(36000) NULL,
  `VALOR14` VARCHAR(36000) NULL,
  `VALOR15` VARCHAR(36000) NULL,
  `VALOR16` VARCHAR(36000) NULL,
  `VALOR17` VARCHAR(36000) NULL,
  `VALOR18` VARCHAR(36000) NULL,
  `VALOR19` VARCHAR(36000) NULL,
  `VALOR20` VARCHAR(36000) NULL,
  `VALOR21` VARCHAR(36000) NULL,
  `VALOR22` VARCHAR(36000) NULL,
  `VALOR23` VARCHAR(36000) NULL,
  `VALOR24` VARCHAR(36000) NULL,
  `VALOR25` VARCHAR(36000) NULL,
  `VALOR26` VARCHAR(36000) NULL,
  `VALOR27` VARCHAR(36000) NULL,
  `VALOR28` VARCHAR(36000) NULL,
  `VALOR29` VARCHAR(36000) NULL,
  `VALOR30` VARCHAR(36000) NULL,
  `VALOR31` VARCHAR(36000) NULL,
  `VALOR32` VARCHAR(36000) NULL,
  `VALOR33` VARCHAR(36000) NULL,
  `VALOR34` VARCHAR(36000) NULL,
  `VALOR35` VARCHAR(36000) NULL,
  `VALOR36` VARCHAR(36000) NULL,
  `VALOR37` VARCHAR(36000) NULL,
  `VALOR38` VARCHAR(36000) NULL,
  `VALOR39` VARCHAR(36000) NULL,
  `VALOR40` VARCHAR(36000) NULL,
  `VALOR41` VARCHAR(36000) NULL,
  `VALOR42` VARCHAR(36000) NULL,
  `VALOR43` VARCHAR(36000) NULL,
  `VALOR44` VARCHAR(36000) NULL,
  `VALOR45` VARCHAR(36000) NULL,
  `VALOR46` VARCHAR(36000) NULL,
  `VALOR47` VARCHAR(36000) NULL,
  `VALOR48` VARCHAR(36000) NULL,
  `VALOR49` VARCHAR(36000) NULL,
  `VALOR50` VARCHAR(36000) NULL,
  `VALOR51` VARCHAR(36000) NULL,
  `VALOR52` VARCHAR(36000) NULL,
  `VALOR53` VARCHAR(36000) NULL,
  `VALOR54` VARCHAR(36000) NULL,
  `VALOR55` VARCHAR(36000) NULL,
  `VALOR56` VARCHAR(36000) NULL,
  `VALOR57` VARCHAR(36000) NULL,
  `VALOR58` VARCHAR(36000) NULL,
  `VALOR59` VARCHAR(36000) NULL,
  `VALOR60` VARCHAR(36000) NULL,
  `VALOR61` VARCHAR(36000) NULL,
  `VALOR62` VARCHAR(36000) NULL,
  `VALOR63` VARCHAR(36000) NULL,
  `VALOR64` VARCHAR(36000) NULL,
  `VALOR65` VARCHAR(36000) NULL,
  `VALOR66` VARCHAR(36000) NULL,
  `VALOR67` VARCHAR(36000) NULL,
  `VALOR68` VARCHAR(36000) NULL,
  `VALOR69` VARCHAR(36000) NULL,
  `VALOR70` VARCHAR(36000) NULL,
  `VALOR71` VARCHAR(36000) NULL,
  `VALOR72` VARCHAR(36000) NULL,
  `VALOR73` VARCHAR(36000) NULL,
  `VALOR74` VARCHAR(36000) NULL,
  `VALOR75` VARCHAR(36000) NULL,
  `VALOR76` VARCHAR(36000) NULL,
  `VALOR77` VARCHAR(36000) NULL,
  `VALOR78` VARCHAR(36000) NULL,
  `VALOR79` VARCHAR(36000) NULL,
  `VALOR80` VARCHAR(36000) NULL,
  `VALOR81` VARCHAR(36000) NULL,
  `VALOR82` VARCHAR(36000) NULL,
  `VALOR83` VARCHAR(36000) NULL,
  `VALOR84` VARCHAR(36000) NULL,
  `VALOR85` VARCHAR(36000) NULL,
  `VALOR86` VARCHAR(36000) NULL,
  `VALOR87` VARCHAR(36000) NULL,
  `VALOR88` VARCHAR(36000) NULL,
  `VALOR89` VARCHAR(36000) NULL,
  `VALOR90` VARCHAR(36000) NULL,
  `VALOR91` VARCHAR(36000) NULL,
  `VALOR92` VARCHAR(36000) NULL,
  `VALOR93` VARCHAR(36000) NULL,
  `VALOR94` VARCHAR(36000) NULL,
  
  `VALOR95` VARCHAR(36000) NULL,
  `VALOR96` VARCHAR(36000) NULL,
  `VALOR97` VARCHAR(36000) NULL,
  `VALOR98` VARCHAR(36000) NULL,
  `VALOR99` VARCHAR(36000) NULL,
  `VALOR100` VARCHAR(36000) NULL)
ENGINE = INNODB;

--
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (1,'CAT_EMPRESA','CATALOGO DE EMPRESAS',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (2,'CAT_ROL','CATALOGO DE ROLES',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (3,'CAT_TIP_CASO','CATALOGO DE TIPOS DE CASOS',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (4,'CAT_COBERT','CATALOGO DE COBERTURAS',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (5,'CAT_TIP_SINIEST','CATALOGO DE TIPO DE SINIESTROS',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (6,'CAT_AUTO_MARCA','CATALOGO DE MARCAS DE AUTOS',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (7,'CAT_AUTO_TIPO','CATALOGO DE SUBTIPO DE MARCAS DE AUTOS',0);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (8,'CAT_COLOR','CATALOLO DE COLORES',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (9,'CAT_REST_INV','CATALOGO DE RESULTADOS DE INVESTIGACION',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (10,'CAT_TIP_CONTACT','CATALOGO DE TIPO DE CONTACTO',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (11,'CAT_MUNICIPIO','CATALOGO DE MUNICIPIOS',NULL);
INSERT INTO `alesi_tablas` (`ID_TABLA`,`COD_TABLA`,`DESCIPCION`,`ID_TABL_DEP`) VALUES (12,'CAT_CONCLUSION','CATALOGO DE CONCLUSIONES DE LOS CASOS',NULL);

--
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (1,'SOPORTEALESI','EMPRESA QUE BRINDA SOPORTE PARA ALESI',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (1,'SURA','SURA SEGUROS MEXICO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (2,'DEV1','PERFIL DESARROLLADOR TIPO1',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (3,'SINIESTRO_AUTO_S','CASOS PARA SINIESTROS DE AUTOS -SURA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (5,'1','ROBO CON VIOLENCIA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (5,'2','ROBO SIN VIOLENCIA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (5,'3','ROBONO EN DOMICILIO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (5,'4','COLISIÓN Y/O VUELCO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (6,'0001','NISSAN',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (6,'0002','FORD',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (6,'0003','CHEVROLET',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (7,'00010010','VERSA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (7,'00010020','ALTIMA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (7,'00010030','SENTRA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (7,'00020010','FIESTA',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (7,'00020020','FUSION',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (7,'00020030','MUSTANG',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'1','BLANCO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'2','NEGRO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'3','AZUL',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'4','VERDE',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'5','AMARILLO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'6','CAFE',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (8,'7','PLATEADO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (9,'C','CONVENIO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (9,'P','PROCEDENTE',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (9,'R','RECHAZO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (10,'1','PERSONAL',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (10,'2','TELEFONICO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (10,'3','OTRO MEDIO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (11,'1','GUSTAVO MADERO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (11,'2','MIGUEL HIDALGO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (12,'C','CONVENIO',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (12,'P','PROCEDENTE',NULL,NULL,NULL);
INSERT INTO `alesi_ntablas` (`ID_TABLA`,`ID_CODIGO`,`DESCIPCION`,`CAMPO_A`,`CAMPO_B`,`CAMPO_C`) VALUES (12,'R','RECHAZO',NULL,NULL,NULL);






INSERT INTO `ALESI_TPERSONAS` (`ID_PERSONA`, `NOMBRE`, `APELLIDOP`, `APELLIDOM`, `EDAD`, `SEXO`, `TELEFONO`, `EMAIL`, `ID_EMPRESA`, `CARGO`, `OTROS`) VALUES
(1, 'JESUS', 'ACOSTA', 'MAYA', 99, 'M', '9999999999', 'ALGO@ALGO', 'SOPORTEALESI', 'DEVELOPER1', NULL);


INSERT INTO `ALESI_TUSUARIOS` (`USUARIO`, `ID_PERSONA`, `PASS`, `ROL`, `STATUS`, `F_ALTA`, `F_ULTIMA_CONEXION`) VALUES
('JECHUS', 1, 'ABC12345', 'DEV1', 'ACTIVO', '2019-10-30', '2019-10-30');

COMMIT;
------------------------------------------------------------------------------------
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',1,'DIRIGIDO_A','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',2,'CARGO','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',3,'N_DE_SINIESTRO','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',4,'F_DE_SINIESTRO','D','',NULL,NULL,'','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',5,'F_DE_REPORTE','D','',NULL,NULL,'','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',6,'N_DE_POLIZA','A','',NULL,NULL,'','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',7,'INCISO','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',8,'INI_VIG','D','',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',9,'FIN_VIG','D','',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',10,'COBERTURA','A','CAT_COBERT',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',11,'NOM_ASEGURADO','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',12,'NOM_CONDUCTOR','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',13,'TIP_SINIESTRO','N','CAT_TIP_SINIEST',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',14,'MARCA','A','CAT_AUTO_MARCA',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',15,'TIPO','A','CAT_AUTO_TIPO',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',16,'MODELO','A','','D',NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',17,'COLOR','A','CAT_COLOR',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',18,'N_DE_SERIE','A','',NULL,'1','15','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',19,'N_MOTOR','A','',NULL,'1','15','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',20,'PLACAS','A','',NULL,'1','10','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',21,'SINI_TREINTA_DIAS','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',22,'SUMA_ASEGURADA','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',23,'PREEXISTENCIA_AUTO','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',24,'REECONSTRUCCION_HECHOS','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',25,'FALSEDAD_DECALRACION','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',26,'CAMBIO_CONDUCTOR','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',27,'DOC_APOCRIFOS','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',28,'OTROS','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',29,'OTROS_VAL','A','',NULL,'1','50','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',30,'RESULT_INVEST','A','CAT_REST_INV',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',31,'DECLA_INI','A','',NULL,'1','30000','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',32,'DESA_ENTREVISTA','A','',NULL,'1','30000','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',33,'LUGAR_VISITADO','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',34,'UBICACION','A','',NULL,'1','250','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',35,'OBSERVACIONES','A','',NULL,'1','250','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',36,'TIP_DOC_PROP','A','',NULL,'1','250','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',37,'F_DOC','D','',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',38,'RFC_PROP','A','',NULL,'1','45','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',39,'DOC_LEGAL','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',40,'COTEJADO_CON','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',41,'CARGO_DTO','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',42,'TEL_PROP','N','',NULL,'1','10','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',43,'CONTACTO','N','CAT_TIP_CONTACT',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',44,'F_CONTACTO','D','',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',45,'LUGAR_CONTACTO','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',46,'OBSERVACIONES_CONTACT','A','',NULL,'1','30000','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',47,'DOMICILIO_NA','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',48,'DIRECCION_PREX','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',49,'TESTIGOS_PREX','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',50,'NOMBRE_PREX','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',51,'DIR_REF_PREX','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',52,'OBSERVACIONES_PREX','A','',NULL,'1','30000','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',53,'POL_ANTER','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',54,'COBERTURA_ANTER','A','CAT_COBERT',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',55,'F_INI_ANTER','D','',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',56,'F_FIN_ANTER','D','',NULL,'',NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',57,'OBSERVACION_ANTER','A','',NULL,'1','30000','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',58,'DENUNCIA_MP','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',59,'MUNICIPIO','A','CAT_MUNICIPIO',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',60,'CARPETA','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',61,'F_INV','D','',NULL,'',NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',62,'HORA_INV','D','',NULL,NULL,NULL,'S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',63,'CARP_REG','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',64,'MOT_CARP_INV','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',65,'OBSERVACION_INV','A','',NULL,'1','150','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',66,'POLIZA_DOC','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',67,'FACTURA_DOC','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',68,'ACTA_MP_DOC','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',69,'TENENCIAS','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',70,'FOTOGRAFIAS_DOC','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',71,'CUEST_ROBO_OTROS_DOC','A','',NULL,'1','1','S');
INSERT INTO `alesi_tatricaso` (`ID_EMPRESA`,`TIPO_CASO`,`NUM_ATRIBUTO`,`DESCRIPCION`,`TIPO_DATO`,`CATALOGO`,`DEFAULT`,`LONGITUD_MIN`,`LONGITUD_MAX`,`EDITABLE`) VALUES ('SURA','SINIESTRO_AUTO_S',72,'CONCLUCION_CASO','A','CAT_CONCLUSION',NULL,'1','1','S');


commit;



------------------------------------------------

INSERT INTO `alesi_tcaso` (`ID_CASO`,`ID_EMPRESA`,`TIPO_CASO`,`F_ALTA`,`F_ESTATUS`,`F_CIERRE`,`STATUS`,`ID_USUARIO_ALTA`,`ID_USUARIO_ASIGNADO`,`ID_USUARIO_ULTIMA_ACT`) VALUES (1,'SURA','SINIESTRO_AUTO_S','2018-11-03','2018-11-03','2018-11-03','EN_CURSO','JECHUS','JECHUS','JECHUS');


COMMIT;