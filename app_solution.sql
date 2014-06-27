CREATE DATABASE  IF NOT EXISTS `app_solution` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `app_solution`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: app_solution
-- ------------------------------------------------------
-- Server version	5.6.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `caso`
--

DROP TABLE IF EXISTS `caso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caso` (
  `id_caso` int(10) NOT NULL,
  `nombre_caso` varchar(45) NOT NULL,
  `reporto_caso` varchar(35) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `fecha_reporte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ubicacion` varchar(40) NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY (`id_caso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caso`
--

LOCK TABLES `caso` WRITE;
/*!40000 ALTER TABLE `caso` DISABLE KEYS */;
/*!40000 ALTER TABLE `caso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caso_cate`
--

DROP TABLE IF EXISTS `caso_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caso_cate` (
  `numero` int(10) NOT NULL,
  `id_caso` int(10) NOT NULL,
  `id_subcate` int(10) NOT NULL,
  `fecha_resolucion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caso_cate`
--

LOCK TABLES `caso_cate` WRITE;
/*!40000 ALTER TABLE `caso_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `caso_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_activo_fijo`
--

DROP TABLE IF EXISTS `cat_activo_fijo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_activo_fijo` (
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_cuentacontable` int(10) NOT NULL,
  `id_area` int(6) DEFAULT NULL,
  `id_sucursal` int(10) NOT NULL,
  `id_empleado` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `id_proveedor` int(10) NOT NULL,
  `nombre_activo_fijo` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `descripcion` text COLLATE latin1_general_ci NOT NULL,
  `valor_original` float NOT NULL,
  `tipo_valor` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_inicio_uso` date DEFAULT NULL,
  `importe_depreciable` float NOT NULL,
  `parte1` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `vida_util` int(2) NOT NULL,
  `valor_residual` float NOT NULL,
  `cuota_anual` float NOT NULL,
  `cuota_mensual` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `activado` int(11) NOT NULL,
  PRIMARY KEY (`id_activofijo`),
  KEY `id_cuentacontable_idx` (`id_cuentacontable`),
  KEY `id_area_idx` (`id_area`),
  KEY `id_sucursal_idx` (`id_sucursal`),
  KEY `id_empleado_idx` (`id_empleado`),
  KEY `id_proveedor_idx` (`id_proveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_activo_fijo`
--

LOCK TABLES `cat_activo_fijo` WRITE;
/*!40000 ALTER TABLE `cat_activo_fijo` DISABLE KEYS */;
INSERT INTO `cat_activo_fijo` VALUES ('meaf008',3,NULL,7,'0',4,'Horno_Microonda','horno microondas mabe 0,7´ blanco hmm700wk',150,'real','2014-01-13','2014-01-20 06:00:00',NULL,158,'0',10,20,13.8,'1.15',0),('meaf007',3,NULL,10,'0',4,'Secadora','secadora a gas blanca serie: sme1520pmbb',685,'real','2014-01-20','2014-01-24 06:00:00',NULL,697,'0',10,95,60.2,'5.01667',0),('meaf006',3,NULL,9,'0',4,'Lavadora','lavadora aqua saver 19 kg grafito\r\nlmh19589zkgg1',700,'real','2014-01-02','2014-01-24 06:00:00',NULL,737,'0',10,100,63.7,'5.30833',0),('meaf005',3,NULL,7,'0',4,'Cocina','cocina de gas 20\" bisque / inox\r\nemg5115lis1',445,'real','2014-01-03','2014-01-15 06:00:00',NULL,450,'0',10,50,40,'3.33333',0),('meaf004',3,NULL,5,'0',4,'Refrigerador','refrigerador automático mabe 10 pies blanco\r\nrf10vw1sip',550,'real','2014-01-08','2014-01-10 06:00:00',NULL,584,'0',10,89,49.5,'4.125',0),('meaf',3,NULL,5,'0',4,'Regrigerador','refrigerador automático mabe 10 pies blanco\r\nrf10vw1sip',550,'real','2014-01-16','2014-01-23 06:00:00',NULL,577,'0',10,79,49.8,'4.15',0),('meaf003',3,NULL,9,'0',1,'Camara_Sony','Dsc-h200 Sony Camara Semi Profesional ¡20.1mpx! ¡26x Zoom!',2700,'real','2014-01-07','2014-01-21 06:00:00',NULL,2730,'0',10,280,245,'20.4167',0),('taf005',5,NULL,9,'0',5,'Mazda_2','Mazda 2 2012 Motor 1.5L Automatico, Full extras!',7009,'real','2014-06-02','2014-06-06 06:00:00',NULL,7065,'0',5,900,1233,'102.75',0),('taf004',5,NULL,2,'0',5,'Panel_e5','panel 2 toneladas diesel color blanco',9800,'real','2014-07-04','2014-07-31 06:00:00',NULL,10470,'0',5,1000,1894,'157.833',0),('meaf001',3,NULL,2,'0',3,'Reproductord_CD_DVD','Reproductor de CD/DVD con pantalla táctil de 6.1 pulgadas, entrada auxiliar y USB, MIXTRAX y 3 salidas de previo RCA (2-DIN)',90,'real','2014-07-02','2014-07-17 06:00:00',NULL,92,'0',10,15,7.7,'0.641667',0),('maf003',1,NULL,2,'0',1,'Tractor','tractor d6b',25000,'real','2014-06-17','2014-06-20 06:00:00',NULL,26200,'0',10,2500,2370,'197.5',0),('taf003',5,NULL,3,'0',1,'Nissan_frontier','Nissan frontier D/Cab 4x2 alto turbo diesel con intercooler año 2007',14000,'real','2014-05-13','2014-05-15 06:00:00',NULL,14490,'0',5,1500,2598,'216.5',0),('maf002',1,NULL,6,'0',1,'Tanque_combustible','Tanque para combustible de 3,500 galones con bomba.',4000,'real','2014-04-07','2014-04-16 06:00:00',NULL,4075,'0',10,300,377.5,'31.4583',0),('taf001',5,NULL,8,'0',1,'YamahaVStar650','Yamaha V Star 650 Custom  Año: 2006 Marca: Yamaha',4500,'real','2014-02-04','2014-02-20 06:00:00',NULL,4800,'0',5,700,820,'68.3333',0),('taf002',5,NULL,9,'0',2,'Bmw325xi','Bmw 325xi Año: 2006 Marca: BMW Modelo: 325 ms',19000,'real','2014-02-26','2014-02-28 06:00:00',NULL,19800,'0',5,3000,3360,'280',0),('maf001',1,9,9,'7',2,'Cortadora_de_plasma','Cortadora de plasma, marca Miller, Serie: LGY434AD',2000,'real','2014-01-02','2014-06-25 18:10:24','2014-06-25',2050,'0',10,100,195,'16.25',1),('meaf009',3,NULL,5,'0',3,'Lapto','DELL E 6400 ,X200 LENOVO   - EN BLACK FUSION',2900,'real','2014-01-14','2014-01-17 06:00:00',NULL,2935,'0',10,200,273.5,'22.7917',0),('meaf010',3,NULL,9,'0',4,'Ventilador','Ventilador, de potencia corta.',75,'real','2014-01-22','2014-01-24 06:00:00',NULL,80,'0',10,10,7,'0.583333',0),('teaf001',4,NULL,9,'0',5,'Casa_san_salvador','Casa en San Salvador dirección: Col Flor Blanca (San Salvador) San Salvador, área 1,020.37 mts 1,182.23v2',80000,'real','2014-01-02','2014-01-23 06:00:00',NULL,81200,'0',20,5000,3810,'317.5',0),('teaf002',4,NULL,4,'0',5,'Casa','Casa en La Libertad, san antonio las palmeras, 350 m2, 6 recámaras, 4 baños',119000,'real','2014-02-05','2014-02-27 06:00:00',NULL,119450,'0',20,20000,4972.5,'414.375',0),('te002',4,NULL,7,'0',5,'Bodega','Bodega grande, ubicada en Usulutan',400000,'real','2014-03-04','2014-03-21 06:00:00',NULL,400700,'0',20,50000,17535,'1461.25',0),('maq01',1,9,4,'7',1,'maquinariadeprueba','maquinaria nueva',200,'real','2014-06-25','2014-06-25 20:26:52','2014-06-25',300,'250',10,50,25,'2.08333',1),('MYE123',3,9,3,'7',3,'Computadoratoshiba','Marca Toshiba, Ram 2gb, disco Duro 160gbHz, Color Azul.',560,'real','2014-06-16','2014-06-25 21:28:34','2014-06-25',600,'520',10,80,52,'4.33333333',1);
/*!40000 ALTER TABLE `cat_activo_fijo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_area`
--

DROP TABLE IF EXISTS `cat_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_area` (
  `id_area` int(6) NOT NULL AUTO_INCREMENT,
  `id_sucursal` int(10) NOT NULL,
  `nombre_area` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_area`),
  KEY `id_sucursal_idx` (`id_sucursal`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_area`
--

LOCK TABLES `cat_area` WRITE;
/*!40000 ALTER TABLE `cat_area` DISABLE KEYS */;
INSERT INTO `cat_area` VALUES (9,0,'Produccion'),(5,5,'Recursos Humanos'),(7,7,'Ventas');
/*!40000 ALTER TABLE `cat_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_baja`
--

DROP TABLE IF EXISTS `cat_baja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_baja` (
  `id_baja` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `fecha_baja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `motivo_baja` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_baja`),
  KEY `id_activofijo_idx` (`id_activofijo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_baja`
--

LOCK TABLES `cat_baja` WRITE;
/*!40000 ALTER TABLE `cat_baja` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_baja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_cuentas_contables`
--

DROP TABLE IF EXISTS `cat_cuentas_contables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_cuentas_contables` (
  `id_cuentacontable` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_cuenta` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `vida_util` int(2) NOT NULL,
  PRIMARY KEY (`id_cuentacontable`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_cuentas_contables`
--

LOCK TABLES `cat_cuentas_contables` WRITE;
/*!40000 ALTER TABLE `cat_cuentas_contables` DISABLE KEYS */;
INSERT INTO `cat_cuentas_contables` VALUES (1,'Maquinaria',10),(3,'Mobiliario y Equipo',10),(4,'Terrenos Y Edificios',20),(5,'Transporte',5);
/*!40000 ALTER TABLE `cat_cuentas_contables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_depreciacion_activo`
--

DROP TABLE IF EXISTS `cat_depreciacion_activo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_depreciacion_activo` (
  `id_depreciacion_activo` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_cuentacontable` int(10) NOT NULL,
  `año_mes` date DEFAULT NULL,
  `cuota_mensual` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `parte1` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `depreciacion_acumulada` decimal(6,2) DEFAULT NULL,
  `saldo_restante` varchar(45) COLLATE latin1_general_ci DEFAULT '0',
  PRIMARY KEY (`id_depreciacion_activo`),
  KEY `id_activofijo_idx` (`id_activofijo`),
  KEY `id_cuentacontable_idx` (`id_cuentacontable`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_depreciacion_activo`
--

LOCK TABLES `cat_depreciacion_activo` WRITE;
/*!40000 ALTER TABLE `cat_depreciacion_activo` DISABLE KEYS */;
INSERT INTO `cat_depreciacion_activo` VALUES (22,'MYE123',3,'2014-06-25','4.33333333','520',0.00,'0'),(21,'MYE123',3,'2014-06-25','4.33333333','520',0.00,'0'),(19,'maq01',1,'2014-06-25','2.08333','250',0.00,'0');
/*!40000 ALTER TABLE `cat_depreciacion_activo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_empleado`
--

DROP TABLE IF EXISTS `cat_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empleado` varchar(10) NOT NULL,
  `nombre_empleado` varchar(45) NOT NULL,
  `direccion_empleado` varchar(45) NOT NULL,
  `telefono_empleado` varchar(9) NOT NULL,
  `email_empleado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_empleado`
--

LOCK TABLES `cat_empleado` WRITE;
/*!40000 ALTER TABLE `cat_empleado` DISABLE KEYS */;
INSERT INTO `cat_empleado` VALUES (1,'E32','Jose Roberto','11° Calle Oriente','12345678','Jos@serrano.com'),(2,'E33','Jose','11° Calle','12345678','Jose@serrano.com'),(3,'E01','Ivette','12° Calle Oriente','12345678','Ivette@serrano.com'),(4,'e75','Jorge Alberto Villegas','venezuela','26451823|','jorge@ugb.edu.sv'),(5,'e90lu','Luis Humberto Mejia','colinia masferrer','26624563','luisito@gmail.com');
/*!40000 ALTER TABLE `cat_empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_mov_interno`
--

DROP TABLE IF EXISTS `cat_mov_interno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_mov_interno` (
  `id_mov_interno` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_empleado` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `fecha_mov` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `motivo_mov` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `area_receptor` int(6) NOT NULL,
  `area_emisor` int(6) NOT NULL,
  PRIMARY KEY (`id_mov_interno`),
  KEY `id_activofijo_idx` (`id_activofijo`),
  KEY `id_empleado_idx` (`id_empleado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_mov_interno`
--

LOCK TABLES `cat_mov_interno` WRITE;
/*!40000 ALTER TABLE `cat_mov_interno` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_mov_interno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_proveedor`
--

DROP TABLE IF EXISTS `cat_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_proveedor` (
  `id_proveedor` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_provee` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `direccion_provee` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefono_provee` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `email_provee` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nrc` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `nit` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_proveedor`
--

LOCK TABLES `cat_proveedor` WRITE;
/*!40000 ALTER TABLE `cat_proveedor` DISABLE KEYS */;
INSERT INTO `cat_proveedor` VALUES (1,'Proveedora Cesariño','usulutan colonia soriano','2712-5695','cesar@gmail.com','','21813918332'),(2,'Los Cedros','sexta calle poniente colonia san pedro Usulut','266-1221','loscedros.sa.dcv@hotmail.com','34355','1232-123242-123-4'),(3,'Panasonic','san salvador','2662-2323','panasonic.cor@hotmail.com','45646','1232-233221-342-1'),(4,'Industrias Mabe','san salvador','2662-4544','industriasmabe@gmail.com','2323','1233-121331-122-1'),(5,'Atlas','san salvador','2662-4433','provatlas@hotmail.com','2323','1233-342233-442-2');
/*!40000 ALTER TABLE `cat_proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_sucursal`
--

DROP TABLE IF EXISTS `cat_sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_sucursal` (
  `id_sucursal` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_sucursal` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefono_sucursal` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `direccion_sucursal` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `departamento` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_sucursal`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_sucursal`
--

LOCK TABLES `cat_sucursal` WRITE;
/*!40000 ALTER TABLE `cat_sucursal` DISABLE KEYS */;
INSERT INTO `cat_sucursal` VALUES (1,'Comercial Perez','2662-3064','sexta calle oriente col.santa rosa Usulutan','Usulutan'),(2,'Comercial Rony','2662-5530','octava avenida norte al sur de tienda galo ','San Miguel'),(3,'Tienda Diaz','2662-7845','Quinta avenida norte frente a peluquería el C','Usulutan'),(4,'comercial Ivette','2662-8875','colonia los Naranjos ','San miguel'),(5,'Comercial Hernandez','2662-9984','Colonia Esperanza ','La Paz'),(6,'Tienda Funes','2662-9087','sexta calle poniente frente a farmacia la Fe','La Union'),(7,'comercial Gonzalez','2662-2232','frente a Radio YSJY','Usulutan'),(8,'Tienda Robert','2624-3423','Camino al Centro de Gobierno ','Usulutan'),(9,'Comercial Camila ','2624-0099','contiguo al Centro Comercial Puerta de Orient','Usulutan'),(10,'Comercial Dany','2624-0876','Frente A Joyería Evelyn ','San Miguel');
/*!40000 ALTER TABLE `cat_sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_trasladoaf`
--

DROP TABLE IF EXISTS `cat_trasladoaf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_trasladoaf` (
  `id_traslado_activo` int(10) NOT NULL AUTO_INCREMENT,
  `id_activofijo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `codigo_traslado` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `motivo_traslado` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `fecha_traslado` date NOT NULL,
  `id_sucursal` int(10) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_traslado_activo`),
  KEY `id_activofijo_idx` (`id_activofijo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_trasladoaf`
--

LOCK TABLES `cat_trasladoaf` WRITE;
/*!40000 ALTER TABLE `cat_trasladoaf` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_trasladoaf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL,
  `nombre_cate` varchar(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gu_menu`
--

DROP TABLE IF EXISTS `gu_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gu_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `icono` varchar(350) COLLATE latin1_general_ci DEFAULT NULL,
  `movil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_menu`
--

LOCK TABLES `gu_menu` WRITE;
/*!40000 ALTER TABLE `gu_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `gu_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gu_opcion`
--

DROP TABLE IF EXISTS `gu_opcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gu_opcion` (
  `id_opcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `opcion` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(300) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_opcion`),
  KEY `jd_menu_idx` (`id_menu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_opcion`
--

LOCK TABLES `gu_opcion` WRITE;
/*!40000 ALTER TABLE `gu_opcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `gu_opcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gu_rol`
--

DROP TABLE IF EXISTS `gu_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gu_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_rol`
--

LOCK TABLES `gu_rol` WRITE;
/*!40000 ALTER TABLE `gu_rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `gu_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gu_rol_menu`
--

DROP TABLE IF EXISTS `gu_rol_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gu_rol_menu` (
  `id_rol` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  PRIMARY KEY (`id_rol`,`id_opcion`),
  UNIQUE KEY `id_rol` (`id_rol`),
  KEY `fk_gu_rol_menu_gu_opcion1` (`id_opcion`),
  KEY `fk_gu_rol_menu_gu_rol1` (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_rol_menu`
--

LOCK TABLES `gu_rol_menu` WRITE;
/*!40000 ALTER TABLE `gu_rol_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `gu_rol_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `menu` int(20) NOT NULL,
  `icono` varchar(20) NOT NULL,
  `movil` int(10) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opcion`
--

DROP TABLE IF EXISTS `opcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opcion` (
  `id_opcion` int(10) NOT NULL,
  `opcion` varchar(10) NOT NULL,
  `url` varchar(20) NOT NULL,
  `id_menu` int(10) NOT NULL,
  PRIMARY KEY (`id_opcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opcion`
--

LOCK TABLES `opcion` WRITE;
/*!40000 ALTER TABLE `opcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `opcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL,
  `rol` int(10) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_menu`
--

DROP TABLE IF EXISTS `rol_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol_menu` (
  `id_rol` int(10) NOT NULL,
  `id_opcion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_menu`
--

LOCK TABLES `rol_menu` WRITE;
/*!40000 ALTER TABLE `rol_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seguimiento`
--

DROP TABLE IF EXISTS `seguimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seguimiento` (
  `id_seguimiento` int(10) NOT NULL,
  `id_caso` int(10) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  `fecha_asignacion` date NOT NULL,
  `observaciones` varchar(250) NOT NULL,
  `causa` varchar(250) NOT NULL,
  `conclusion` varchar(250) NOT NULL,
  PRIMARY KEY (`id_seguimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seguimiento`
--

LOCK TABLES `seguimiento` WRITE;
/*!40000 ALTER TABLE `seguimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `seguimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id_settings` int(10) NOT NULL,
  `descripcion` text COLLATE latin1_general_ci,
  `valor` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `simbolo` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `comentario` text COLLATE latin1_general_ci NOT NULL,
  `activo` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_settings`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categoria`
--

DROP TABLE IF EXISTS `sub_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_categoria` (
  `id_subcategoria` int(10) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nombre_subcate` varchar(20) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `ponderacion` int(10) NOT NULL,
  PRIMARY KEY (`id_subcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categoria`
--

LOCK TABLES `sub_categoria` WRITE;
/*!40000 ALTER TABLE `sub_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `rol` varchar(40) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-26 21:10:48
