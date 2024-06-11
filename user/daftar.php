<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website SMK</title>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="style.css"> 

</head>
<body>

<header>  

    <a href="#" class="logo">SCHOOL Education</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="guru.php" class="active">guru</a>
        <a href="ekstrakulikuler.php">ekstrakulikuler</a>
        <a href="jurusan.php">jurusan</a>
        <a href="fasilitas.php">fasilitas</a>
        <a href="logout.php">Log out</a>
    </nav>

</header>

<body>
    <h1>Form Pendaftaran Peserta Didik Baru</h1>

    <form action="proses.php" method="post">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="telepon">Nomor Telepon:</label><br>
        <input type="tel" id="telepon" name="telepon" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
