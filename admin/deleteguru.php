<?php
include '../koneksi.php';

$id = $_GET['id'];


$mysqli = mysqli_query($mysqli, "DELETE FROM loopguru WHERE id = '$id'") or die(mysqli_error($mysqli));

if($mysqli) {
   
    header("Location: guru.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>