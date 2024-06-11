<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jurusan</title>
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
    <a href="tambahjurusan.php" class="btn-tambah">Tambah Jurusan</a>
    <table border="1" class="table">
      <tr>
        <th>No</th>
        <th>Nama Jurusan</th>
        <th>Gambar</th>
        <th>Masa Studi</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
      <?php
        $nomor = 1;
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM loopjurusan") or die(mysqli_error());

        while($data = mysqli_fetch_array($query_mysql)){
      ?>
        <tr>
          <td><?php echo $nomor++; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><img src="<?php echo $data['img']; ?>" alt="<?php echo $data['nama']; ?>" width="100"></td>
          <td><?php echo $data['masa_study']; ?></td>
          <td><a href="deletejurusan.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Hapus</a></td>
          <td><a href="editjurusan.php?id=<?php echo $data['id']; ?>" class="btn-update">Update</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>

</body>
</html>
