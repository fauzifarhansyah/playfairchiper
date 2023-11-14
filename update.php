<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $saldo = $_POST["saldo"];

    $sql = "UPDATE nasabah
            SET saldo = saldo + $saldo
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Saldo nasabah berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="id">ID Nasabah:</label>
    <input type="number" name="id" required><br>

    <label for="saldo">Jumlah Saldo:</label>
    <input type="number" name="saldo" required><br>

    <input type="submit" value="Update Saldo">
</form>