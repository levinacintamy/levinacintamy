<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menerima data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $address = $_POST['address'];

    // Validasi sederhana (Anda bisa menambahkan lebih banyak validasi)
    if (!empty($name) && !empty($email) && !empty($number) && !empty($message) && !empty($address)) {
        // Menampilkan data yang dikirim (sebagai contoh)
        echo "Nama: " . kirim_pesan($name) . "<br>";
        echo "Email: " . kirim_pesan($email) . "<br>";
        echo "Nomor Telepon: " . kirim_pesan($number) . "<br>";
        echo "Pesan dan Kesan: " . kirim_pesan($message) . "<br>";
        echo "Alamat: " . kirim_pesan($address) . "<br>";
    } else {
        echo "Semua field harus diisi!";
    }
} else {
    echo "Metode pengiriman salah!";
}
?>

