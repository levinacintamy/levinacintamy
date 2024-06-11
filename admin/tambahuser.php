<?php

include '../koneksi.php'; // Include database connection

// Check if the form has been submitted
if (isset($_POST['nama']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['level']) && isset($_POST['email'])) {
  // Get data from the form
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $email = $_POST['email'];

  // Insert data into the "user" table
  $query_insert = mysqli_query($mysqli, "INSERT INTO user (nama, username, password, level, email) VALUES ('$nama', '$username', '$password', '$level', '$email')");

  // Check if the insert was successful
  if ($query_insert) {
    // Redirect to the user table page (user.php)
    header('Location: index.php');
  } else {
    echo "Gagal menambahkan data user!";
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
<title>Tambah User</title>
</head>
<body>
  <div class="container">
    <div class="form-wrapper">
      <h2>Tambah User Baru</h2>
      <form action="tambahuser.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="level">Level:</label>
        <input type="text" id="level" name="level" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Tambah</button>
      </form>
    </div>
  </div>
</body>
</html>
