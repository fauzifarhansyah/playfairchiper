-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2021 at 02:54 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_nasabah.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

#membuat table nasabah
CREATE TABLE nasabah (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    alamat VARCHAR(200) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    saldo DECIMAL(10, 2) NOT NULL
);

--
-- Dumping data for table `nasabah`
--

#Menambahkan data nasabah:
INSERT INTO nasabah (nama, alamat, telepon, email, saldo)
VALUES ('John Doe', 'Jl. Contoh No. 123', '081234567890', 'john.doe@example.com', 1000000.00);

INSERT INTO nasabah (nama, alamat, telepon, email, saldo)
VALUES ('Jane Smith', 'Jl. Contoh No. 456', '089876543210', 'jane.smith@example.com', 500000.00);

--
-- Triggers `dataNasabah`
--

##Mengambil data nasabah:
SELECT * FROM nasabah;

--
-- Mengambil data nasabah
--

#Mengupdate saldo nasabah:
UPDATE nasabah
SET saldo = saldo + 50000.00
WHERE id = 1;

---
--- Mengupdate saldo
---

#Menghapus data nasabah:
DELETE FROM nasabah
WHERE id = 2;

---
--- Menghapus data nasabah
---

#Mencari nasabah berdasarkan nama:
SELECT * FROM nasabah
WHERE nama LIKE '%Doe%';

---
--- Mencari data nasabah
---

#Mengurutkan nasabah berdasarkan saldo:
SELECT * FROM nasabah
ORDER BY saldo DESC;

---
--- Mengurutkan saldo
---

#Menghitung total saldo nasabah:
SELECT SUM(saldo) AS total_saldo FROM nasabah;

---
--- Menghitubg total saldo
---

#Menghitung jumlah nasabah:
SELECT COUNT(*) AS jumlah_nasabah FROM nasabah;

---
--- menghitung jumlah nasabah
---