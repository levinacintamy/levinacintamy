<?php
include("../koneksi.php");


if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    $result = mysqli_query($mysqli, "UPDATE user SET nama='$nama', username='$username', password='$password', email='$email', level='$level' WHERE id=$id");

   
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <header>
        <h3>Edit User</h3>
    </header>

    <?php
    // kalau tidak ada id di query string 
    if( !isset($_GET['id']) ){
        header('Location: index.php');
    }

    $id = $_GET['id'];

    // Fetech user data based on id 
    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
        $nama = $user_data['nama'];
        $username = $user_data['username'];
        $password = $user_data['password'];
        $level = $user_data['level'];
        $email = $user_data['email'];
    }
    ?>

    <form method="POST" action="edit.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $password;?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" id="level" required>
                        <option disabled selected><?php echo $level ?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>