<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan halaman transaksi
echo "Halaman Transaksi";
?>

<!-- Tambahkan formulir untuk melakukan transaksi -->
<form action="process_transaction.php" method="POST">
    <label for="amount">Jumlah:</label>
    <input type="text" id="amount" name="amount" required><br><br>
    <label for="type">Jenis Transaksi:</label>
    <select id="type" name="type">
        <option value="deposit">Setoran</option>
        <option value="withdraw">Penarikan</option>
        <option value="transfer">Transfer</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>