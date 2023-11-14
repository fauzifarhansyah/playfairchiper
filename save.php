<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Fungsi untuk menyimpan data pengguna baru ke database
function saveUser($conn, $username, $password) {
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query);
    echo "Data pengguna berhasil disimpan!";
}

// Contoh penggunaan
$username = "";
$password = "";
saveUser($conn, $username, $password);
?>