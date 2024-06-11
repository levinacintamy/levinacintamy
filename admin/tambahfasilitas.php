<?php

include '../koneksi.php'; // Include database connection

// Check if the form has been submitted
if (isset($_POST['nama']) && isset($_POST['jumlah']) && isset($_POST['keterangan'])) {
  // Get data from the form
  $nama = $_POST['nama'];
  $jumlah = $_POST['jumlah'];
  $keterangan = $_POST['keterangan'];

  // Insert data into the "fasilitas" table
  $query_insert = mysqli_query($mysqli, "INSERT INTO fasilitas (nama, jumlah, keterangan) VALUES ('$nama', '$jumlah', '$keterangan')");

  // Check if the insert was successful
  if ($query_insert) {
    // Redirect to the Fasilitas table page (fasilitas.php)
    header('Location: fasilitas.php');
  } else {
    echo "Gagal menambahkan data fasilitas!";
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
<title>Tambah Fasilitas</title>
</head>
<body>
  <div class="container">
    <div class="form-wrapper">
      <h2>Tambah Fasilitas Baru</h2>
      <form action="tambahfasilitas.php" method="post">
        <label for="nama">Nama Fasilitas:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" required>
        <label for="keterangan">Keterangan:</label>
        <textarea id="keterangan" name="keterangan" rows="5" required></textarea>
        <button type="submit">Tambah</button>
      </form>
    </div>
  </div>
</body>
</html>
