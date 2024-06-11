<?php


include '../koneksi.php';

if (isset($_POST['nama']) && isset($_POST['jabatan'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $query_insert = mysqli_query($mysqli, "INSERT INTO loopguru (nama, jabatan) VALUES ('$nama', '$jabatan')");

    if ($query_insert) {
        header('Location: guru.php'); // Redirect to the main page
    } else {
        echo "Gagal menambahkan data!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" href="tambah.css">
    <link rel="stylesheet" href="index.css"> 
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2>Tambah Data Guru</h2>
            <form action="tambahguru.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="jabatan">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" required>
                <button type="submit">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>
