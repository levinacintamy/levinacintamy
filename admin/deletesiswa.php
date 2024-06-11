<?php
include '../koneksi.php';

$id = $_GET['id'];


$hapus = mysqli_query($mysqli, "DELETE FROM siswa WHERE id= '$id'") or die(mysqli_error($mysqli));

if($hapus) {
  
    header("Location: siswa.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>