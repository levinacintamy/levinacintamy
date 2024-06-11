<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendidikan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$tanggal_lahir = $_POST['tanggal_lahir'];

// Menyusun query SQL
$sql = "INSERT INTO siswa (nama, email, alamat, telepon, tanggal_lahir)
VALUES ('$nama', '$email', '$alamat', '$telepon', '$tanggal_lahir')";

// Menjalankan query dan mengalihkan halaman
if ($conn->query($sql) === TRUE) {
    header('Location: index.php'); // Mengalihkan ke halaman index.php jika berhasil
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
