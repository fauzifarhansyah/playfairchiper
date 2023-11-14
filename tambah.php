<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    $email = $_POST["email"];
    $saldo = $_POST["saldo"];

    $sql = "INSERT INTO nasabah (nama, alamat, telepon, email, saldo)
            VALUES ('$nama', '$alamat', '$telepon', '$email', '$saldo')";

    if ($conn->query($sql) === TRUE) {
        echo "Data nasabah berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" required><br>

    <label for="telepon">Telepon:</label>
    <input type="text" name="telepon" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="saldo">Saldo:</label>
    <input type="number" name="saldo" required><br>

    <input type="submit" value="Tambahkan">
</form>