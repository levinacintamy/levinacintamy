<?php
// Tentukan nama direktori
$directory = 'uploads';

// Cek apakah direktori sudah ada
if (!is_dir($directory)) {
    // Buat direktori jika belum ada
    if (!mkdir($directory, 0777, true)) {
        die('Gagal membuat direktori.');
    }
    echo 'Direktori berhasil dibuat.';
} else {
    echo 'Direktori sudah ada.';
}
?>
