<?php
// isi nama host, username mysql, dan password mysql anda 
$databaseHost = "localhost";
$databaseName = "pendidikan";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$host = mysqli_connect ("localhost","root","");

if($mysqli){
    echo "<br/>";
}else{
    echo "koneksi gagal.<br/>";
}

?>