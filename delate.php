<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Fungsi untuk menghapus pengguna dari database
function deleteUser($conn, $userId) {
    $query = "DELETE FROM users WHERE id = '$userId'";
    mysqli_query($conn, $query);
    echo "Data pengguna berhasil dihapus!";
}
?>