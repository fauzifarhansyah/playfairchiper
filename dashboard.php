<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan informasi akun pengguna
echo "Selamat datang, " . $_SESSION['username'] . "! Ini adalah halaman dashboard Anda.";
?>

<!-- Tambahkan tautan ke fitur lainnya -->
<ul>
    <li><a href="profile.php">Profil</a></li>
    <li><a href="transaction.php">Transaksi</a></li>
    <li><a href="history.php">Riwayat Transaksi</a></li>
    <li><a href="report.php">Laporan</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>