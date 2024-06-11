<?php
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    // Hapus tanda koma sebelum WHERE dan perbaiki klausa WHERE
    $result = mysqli_query($mysqli, "UPDATE fasilitas SET nama='$nama', jumlah='$jumlah', keterangan='$keterangan' WHERE id_fasilitas='$id'");

    header("Location: fasilitas.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fasilitas</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <header>
        <h3>Edit Fasilitas</h3>
    </header>

    <?php
    if(!isset($_GET['id'])) {
        header('Location: fasilitas.php');
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM fasilitas WHERE id_fasilitas='$id'");

    while($user_data = mysqli_fetch_array($result)) {
        $id = $user_data['id_fasilitas'];
        $nama = $user_data['nama'];
        $jumlah = $user_data['jumlah'];
        $keterangan = $user_data['keterangan'];
    }
    ?>

    <form method="POST" action="editfasilitas.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $jumlah; ?>"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value="<?php echo $keterangan; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
