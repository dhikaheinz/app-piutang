-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_piutang.tb_customer
CREATE TABLE IF NOT EXISTS `tb_customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(200) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `hutang` varchar(200) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_piutang.tb_customer: ~0 rows (approximately)
DELETE FROM `tb_customer`;
/*!40000 ALTER TABLE `tb_customer` DISABLE KEYS */;
INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `tgl_masuk`, `hutang`, `created_by`, `created_date`) VALUES
	(1, 'dhika', '2022-06-15', '1252462', '2', '2022-06-15 11:16:09');
/*!40000 ALTER TABLE `tb_customer` ENABLE KEYS */;

-- Dumping structure for table db_piutang.tr_hutang
CREATE TABLE IF NOT EXISTS `tr_hutang` (
  `id_hutang` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `dibayarkan` varchar(200) DEFAULT NULL,
  `sisa_hutang` varchar(200) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_hutang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_piutang.tr_hutang: ~0 rows (approximately)
DELETE FROM `tr_hutang`;
/*!40000 ALTER TABLE `tr_hutang` DISABLE KEYS */;
INSERT INTO `tr_hutang` (`id_hutang`, `id_customer`, `tgl_pembayaran`, `dibayarkan`, `sisa_hutang`, `created_by`, `created_date`) VALUES
	(1, 1, '2022-06-15', '2351313', '12412512', '3', '2022-06-15 11:16:35');
/*!40000 ALTER TABLE `tr_hutang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
