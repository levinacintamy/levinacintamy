<?php
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $img = $_POST['img'];
   
    // Hapus tanda koma sebelum WHERE
    $result = mysqli_query($mysqli, "UPDATE loopguru SET id='$id', nama='$nama', jabatan='$jabatan', img='$img' WHERE id=$id");

    header("Location: guru.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <header>
        <h3>Edit guru</h3>
    </header>

    <?php
   
    if( !isset($_GET['id']) ){
        header('Location: guru.php');
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM loopguru WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $id = $user_data['id'];
        $nama = $user_data['nama'];
        $jabatan = $user_data['jabatan'];
        $img = $user_data['img'];
    }
    ?>

    <form method="POST" action="editguru.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" value="<?php echo $jabatan;?>"></td>
            </tr>
            <tr>
                <td>img</td>
                <td><input type="text" name="img" value="<?php echo $img;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
