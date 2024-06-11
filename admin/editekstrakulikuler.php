<?php
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jadwal = $_POST['jadwal'];
    $pembimbing = $_POST['pembimbing'];
   
    // Hapus tanda koma sebelum WHERE dan perbaiki klausa WHERE
    $result = mysqli_query($mysqli, "UPDATE ekstrakulikuler SET nama_ekstrakulikuler='$nama', jadwal_ekstrakulikuler='$jadwal', pembimbing='$pembimbing' WHERE id_ekstrakulikuler='$id'");

    header("Location: ekstrakulikuler.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ekstrakulikuler</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <header>
        <h3>Edit Ekstrakulikuler</h3>
    </header>

    <?php
    if(!isset($_GET['id'])) {
        header('Location: ekstrakulikuler.php');
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM ekstrakulikuler WHERE id_ekstrakulikuler='$id'");

    while($user_data = mysqli_fetch_array($result)) {
        $id = $user_data['id_ekstrakulikuler'];
        $nama = $user_data['nama_ekstrakulikuler'];
        $jadwal = $user_data['jadwal_ekstrakulikuler'];
        $pembimbing = $user_data['pembimbing'];
    }
    ?>

    <form method="POST" action="editekstrakulikuler.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Jadwal</td>
                <td><input type="text" name="jadwal" value="<?php echo $jadwal; ?>"></td>
            </tr>
            <tr>
                <td>Pembimbing</td>
                <td><input type="text" name="pembimbing" value="<?php echo $pembimbing; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
