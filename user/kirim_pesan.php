<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendidikan";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}

$sql = "SELECT id, name, email, number, message, address FROM pesan";
$result = $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Pesan</title>
<link rel="stylesheet" href="style4.css">
</head>
<body>

<h1>Pesan yang Dikirim</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Pesan dan Kesan</th>
        <th>Alamat</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["number"]. "</td><td>" . $row["message"]. "</td><td>" . $row["address"]. "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada pesan ditemukan</td></tr>";
    }
    $connect->close();
    ?>

</table>

</body>
</html>
