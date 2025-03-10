<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website SMK</title>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="style2.css"> 

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
        <a href="daftar.php">Daftar</a>
        <a href="logout.php">Log out</a>
    </nav>

</header>

<section class="guru" id="guru">

    <h1 class="heading"> tentang <span>guru</span> </h1>

    <div class="box-container">

        <?php
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pendidikan";

        
        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        $sql = "SELECT id, nama, jabatan, img FROM loopguru";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) {
                echo '<div class="box">';
                echo '<div class="content">';
                echo '<img src="' . $row["img"] . '" alt="' . $row["nama"] . '">';
                echo '<h3>' . $row["nama"] . '</h3>';
                echo '<p>' . $row["jabatan"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>

    </div>

</section> 

</body>
</html>
