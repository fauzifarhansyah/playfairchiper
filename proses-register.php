<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "data_nasabah.sql");

// Ambil data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Query untuk menyimpan data ke dalam database
$query = "INSERT INTO tabel_pengguna (username, email, password) VALUES ('$username', '$email', '$password')";
mysqli_query($koneksi, $query);

// Tutup koneksi
mysqli_close($koneksi);
?>