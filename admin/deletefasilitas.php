<?php
include '../koneksi.php';

$id = $_GET['id']; // Ambil id user dari parameter URL

// Hapus data user dari database
$hapus = mysqli_query($mysqli, "DELETE FROM fasilitas WHERE id_fasilitas= '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman user.php setelah berhasil menghapus
    header("Location: fasilitas.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>