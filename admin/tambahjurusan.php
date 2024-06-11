<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Jurusan</title>
<link rel="stylesheet" href="tambah.css">
<link rel="stylesheet" href="index.css"> 
</head>
<body>

<div class="container">
    <h2>Tambah Jurusan</h2>

    <?php
      include '../koneksi.php';

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $namaJurusan = $_POST['nama_jurusan'];
        $masaStudi = $_POST['masa_studi'];
        
        // Handling the image upload
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
          $uploadOk = 1;
        } else {
          echo "<p style='color: red;'>File is not an image.</p>";
          $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
          echo "<p style='color: red;'>Sorry, your file is too large.</p>";
          $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "<p style='color: red;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
          $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "<p style='color: red;'>Sorry, your file was not uploaded.</p>";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile)) {
            $query = "INSERT INTO loopjurusan (nama, img, masa_study) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($mysqli, $query);
            mysqli_stmt_bind_param($stmt, "sss", $namaJurusan, $targetFile, $masaStudi);

            if (mysqli_stmt_execute($stmt)) {
              echo "<p style='color: green;'>Jurusan berhasil ditambahkan!</p>";
              header('Location: jurusan.php');
            } else {
              echo "<p style='color: red;'>Error: " . mysqli_error($mysqli) . "</p>";
            }

            mysqli_stmt_close($stmt);
          } else {
            echo "<p style='color: red;'>Sorry, there was an error uploading your file.</p>";
          }
        }
      }
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="nama_jurusan">Nama Jurusan:</label>
        <input type="text" name="nama_jurusan" id="nama_jurusan" required>
        
        <label for="gambar">Gambar Jurusan</label>
        <input type="file" name="gambar" id="gambar" required>
        
        <label for="masa_studi">Masa Studi (Tahun):</label>
        <input type="number" name="masa_studi" id="masa_studi" min="1" required>
        
        <button type="submit">Tambah Jurusan</button>
    </form>
</div>


</body>
</html>
