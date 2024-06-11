<?php

include '../koneksi.php';

// cek apakah tombol simpan sudah diklik atau belum?
if(!isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];

// buat query update
include_once '../koneksi.php';
$result = mysqli_query($mysqli, "UPDATE user
SET nama='$nama', username='$username', password='$password', level='$level', level='$level'
WHERE id=$id");
header("Location: index.php");
}
?>
