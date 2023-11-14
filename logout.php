<?php
session_start();

// Menghapus sesi pengguna
session_unset();
session_destroy();

// Mengarahkan pengguna kembali ke halaman login
header("Location: login.php");
exit();
?>