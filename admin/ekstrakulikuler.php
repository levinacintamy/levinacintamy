<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ekstrakulikuler</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="buat tombol.css">
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
    <a href="tambahekstrakulikuler.php" class="btn-tambah">Tambah Ekstrakulikuler</a> <table border="1" class="table">
      <tr>
        <th>nomor</th>
        <th>nama ekstrakulikuler</th>
        <th>jadwal ekstrakulikuler</th>
        <th>pembimbing</th>
        <th>action</th>
        <th>action</th>
      </tr>
      <?php
        $nomor = 1;
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM ekstrakulikuler") or die(mysqli_error());

        while($data = mysqli_fetch_array($query_mysql)){
      ?>
        <tr>
          <td><?php echo $nomor++; ?></td>
          <td><?php echo $data['nama_ekstrakulikuler']; ?></td>
          <td><?php echo $data['jadwal_ekstrakulikuler']; ?></td>
          <td><?php echo $data['pembimbing']; ?></td>
          <td><a href="deleteekstrakulikuler.php?id=<?php echo $data['id_ekstrakulikuler']; ?>" class="btn-hapus">Hapus</a></td>
          <td><a href="editekstrakulikuler.php?id=<?php echo $data['id_ekstrakulikuler']; ?>" class="btn-update">Update</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>

</body>
</html>
