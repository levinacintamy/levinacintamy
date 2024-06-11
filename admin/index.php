<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="buat tombol.css">
<title>CRUD User Table</title>
</head>
<body>
  <nav>
    <div class="navbar">
      <ul>
        <li><h2>CRUD Table</h2></li>
        <li><a href="index.php">User</a></li>
        <li><a href="guru.php">Guru</a></li>
        <li><a href="ekstrakulikuler.php">Ekstrakulikuler</a></li>
        <li><a href="jurusan.php">Jurusan</a></li>
        
        <li><a href="siswa.php">Daftar</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2>   </h2>
    <a href="tambahuser.php" class="btn-tambah">Tambah User</a> <table border="1" class="table">
      <tr>
        <th>nomor</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
        <th>email</th>
        <th>action</th>
        <th>action</th>
      </tr>
      <?php
        $nomor = 1;
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error());

        while($data = mysqli_fetch_array($query_mysql)){
      ?>
        <tr>
          <td><?php echo $nomor++; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['username']; ?></td>
          <td><?php echo $data['password']; ?></td>
          <td><?php echo $data['level']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Hapus</a></td>
          <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn-update">Update</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>

</body>
</html>
