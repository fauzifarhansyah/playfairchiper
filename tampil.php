<?php
$sql = "SELECT * FROM nasabah";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Saldo</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nama"]."</td>
                <td>".$row["alamat"]."</td>
                <td>".$row["telepon"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["saldo"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data nasabah.";
}
?>