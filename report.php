<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan laporan pengguna
echo "Laporan Pengguna";
// Tampilkan laporan berdasarkan data dari database
?>