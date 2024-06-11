<?php
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $masastudy = $_POST['masa_study'];

    // Mengatur gambar
    $img = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_path = "../gambar/" . $img; // Direktori tempat menyimpan file gambar

    move_uploaded_file($img_tmp, $img_path); // Memindahkan file gambar ke direktori yang ditentukan

    // Perbarui data di database
    $result = mysqli_query($mysqli, "UPDATE loopjurusan SET nama='$nama', img='$img', masa_study='$masastudy' WHERE id='$id'");

    header("Location: jurusan.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <header>
        <h3>Edit Jurusan</h3>
    </header>

    <?php
    if(!isset($_GET['id'])) {
        header('Location: jurusan.php');
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM loopjurusan WHERE id='$id'");

    while($user_data = mysqli_fetch_array($result)) {
        $id = $user_data['id'];
        $nama = $user_data['nama'];
        $img = $user_data['img'];
        $masastudy = $user_data['masa_study'];
    }
    ?>

    <form method="POST" action="editjurusan.php" enctype="multipart/form-data"> <!-- tambahkan enctype="multipart/form-data" -->
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="img"></td> <!-- ubah tipe menjadi file -->
            </tr>
            <tr>
                <td>Masa Study</td>
                <td><input type="text" name="masa_study" value="<?php echo $masastudy; ?>"></td> <!-- perbaiki nama atribut -->
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
