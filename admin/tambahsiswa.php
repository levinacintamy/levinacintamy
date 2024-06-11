<?php

include '../koneksi.php'; // Include database connection

// Check if the form has been submitted
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['alamat']) && isset($_POST['telepon']) && isset($_POST['tanggal_lahir'])) {
  // Get data from the form
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $tanggal_lahir = $_POST['tanggal_lahir'];

  // Insert data into the "siswa" table
  $query_insert = mysqli_query($mysqli, "INSERT INTO siswa (nama, email, alamat, telepon, tanggal_lahir) VALUES ('$nama', '$email', '$alamat', '$telepon', '$tanggal_lahir')");

  // Check if the insert was successful
  if ($query_insert) {
    // Redirect to the Siswa table page (siswa.php)
    header('Location: siswa.php');
  } else {
    echo "Gagal menambahkan data siswa!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="tambah.css">
<link rel="stylesheet" href="index.css"> 
<title>Tambah Siswa</title>
</head>
<body>
  <div class="container">
    <div class="form-wrapper">
      <h2>Tambah Siswa Baru</h2>
      <form action="tambahsiswa.php" method="post">
        <label for="nama">Nama Siswa:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="5" required></textarea>
        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" required>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        <button type="submit">Tambah</button>
      </form>
    </div>
  </div>
</body>
</html>
