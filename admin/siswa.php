<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dartar</title>
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
    <a href="tambahsiswa.php" class="btn-tambah">Tambah Siswa</a> <table border="1" class="table">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Tanggal Lahir</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
      <?php
        $nomor = 1;
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM siswa") or die(mysqli_error());

        while($data = mysqli_fetch_array($query_mysql)){
      ?>
        <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
          <td><?php echo $data['telepon']; ?></td>
          <td><?php echo $data['tanggal_lahir']; ?></td>
          <td><a href="deletesiswa.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Hapus</a></td>
          <td><a href="editsiswa.php?id=<?php echo $data['id']; ?>" class="btn-update">Update</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>

</body>
</html>
