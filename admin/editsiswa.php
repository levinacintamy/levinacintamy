<?php
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
   
    // Hapus tanda koma sebelum WHERE
    $result = mysqli_query($mysqli, "UPDATE siswa SET id='$id', nama='$nama', email='$email', alamat='$alamat', telepon='$tetlepon', tanggal_lahir='$tanggal_lahir' WHERE id=$id");

    header("Location: siswa.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <header>
        <h3>Edit Siswa</h3>
    </header>

    <?php
   
    if( !isset($_GET['id']) ){
        header('Location: siswa.php');
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $id = $user_data['id'];
        $nama = $user_data['nama'];
        $email = $user_data['email'];
        $alamat = $user_data['alamat'];
        $telepon = $user_data['telepon'];
        $tanggal_lahir = $user_data['tanggal_lahir'];
    }
    ?>

    <form method="POST" action="editsiswa.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon" value="<?php echo $telepon;?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggal lahir" value="<?php echo $tanggal_lahir;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
