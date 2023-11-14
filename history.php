<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan riwayat transaksi pengguna
echo "Riwayat Transaksi";
// Tampilkan data riwayat transaksi dari database
?>

<!-- Tambahkan tabel untuk menampilkan riwayat transaksi -->
<table>
    <tr>
        <th>Tanggal</th>
        <th>Jenis Transaksi</th>
        <th>Jumlah</th>
    </tr>
    <tr>
        <td>2022-01-01</td>
        <td>Setoran</td>
        <td>1000000</td>
    </tr>
    <!-- Tambahkan baris lainnya sesuai dengan data riwayat transaksi -->
</table>