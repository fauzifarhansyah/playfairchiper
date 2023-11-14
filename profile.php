<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Menampilkan informasi profil pengguna
echo "Profil Pengguna: " . $_SESSION['username'];
?>

<!-- Tambahkan formulir untuk mengubah informasi profil -->
<form action="update_profile.php" method="POST">
    <label for="address">Alamat:</label>
    <input type="text" id="address" name="address" value=""><br><br>
    <label for="phone">Nomor Telepon:</label>
    <input type="text" id="phone" name="phone" value=""><br><br>
    <input type="submit" value="Simpan">
</form>