<?php

include '../koneksi.php'; // Include database connection

// Check if the form has been submitted
if (isset($_POST['nama_ekstrakulikuler']) && isset($_POST['jadwal_ekstrakulikuler']) && isset($_POST['pembimbing'])) {
  // Get data from the form
  $nama_ekstrakulikuler = $_POST['nama_ekstrakulikuler'];
  $jadwal_ekstrakulikuler = $_POST['jadwal_ekstrakulikuler'];
  $pembimbing = $_POST['pembimbing'];

  // Insert data into the "ekstrakulikuler" table
  $query_insert = mysqli_query($mysqli, "INSERT INTO ekstrakulikuler (nama_ekstrakulikuler, jadwal_ekstrakulikuler, pembimbing) VALUES ('$nama_ekstrakulikuler', '$jadwal_ekstrakulikuler', '$pembimbing')");

  // Check if the insert was successful
  if ($query_insert) {
    // Redirect to the ekstrakulikuler table page (ekstrakulikuler.php)
    header('Location: ekstrakulikuler.php');
  } else {
    echo "Gagal menambahkan data ekstrakulikuler!";
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
<title>Tambah Ekstrakulikuler</title>
</head>
<body>
  <div class="container">
    <div class="form-wrapper">
      <h2>Tambah Ekstrakulikuler Baru</h2>
      <form action="tambahekstrakulikuler.php" method="post">
        <label for="nama_ekstrakulikuler">Nama Ekstrakulikuler:</label>
        <input type="text" id="nama_ekstrakulikuler" name="nama_ekstrakulikuler" required>
        <label for="jadwal_ekstrakulikuler">Jadwal Ekstrakulikuler:</label>
        <input type="text" id="jadwal_ekstrakulikuler" name="jadwal_ekstrakulikuler" required>
        <label for="pembimbing">Pembimbing:</label>
        <input type="text" id="pembimbing" name="pembimbing" required>
        <button type="submit">Tambah</button>
      </form>
    </div>
  </div>
</body>
</html>
