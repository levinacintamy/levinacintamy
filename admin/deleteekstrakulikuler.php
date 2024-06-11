<?php
include '../koneksi.php';

$id = $_GET['id_ekstrakulikuler'];

$hapus = mysqli_query($mysqli, "DELETE FROM ekstrakulikuler WHERE id_ekstrakulikuler= '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>