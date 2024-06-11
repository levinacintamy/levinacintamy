<body>
    <header>
        <h3>Edit Registrasi</h3>
        <link rel="stylesheet" href="edit.css">
    </header>

    <?php
include("../koneksi.php");


if( !isset($_GET[ 'id']) ){
    header('Location: registrasi.php');
}
$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM loopjurusan WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    
    $id_jurusan = $user_data['id'];
    $nama_jurusan = $user_data['nama'];
    
    $masa_study = $user_data['masa_study'];
}
?>

<form method="POST" action="edit.php">
        <table>
           <tr>
                  <td>ID_Jurusan</td>
                  <td><input type="text" name="id_jurusan" value="<?php echo $id_jurusan;?>"></td>
           </tr>
           <tr>
                  <td>Nama_Jurusan</td>
                  <td><input type="text" name="nama_jurusan" value="<?php echo $nama_jurusan;?>"></td>
           </tr>
           
           <tr>
                  <td>Masa_Study</td>
                  <td><input type="text" name="masa_study" value="<?php echo $masa_study;?>"></td>
           </tr>
                <select name="level" id="level" required>
                <optional disable selected> <?php echo $level ?></option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
                </td>
           </tr>
       <tr> 
            <td><input type="submit" name="simpan" value="simpan"></td>
      </tr>
   </table>
</form>
</body>