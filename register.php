<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .message {
      margin-top: 20px;
      padding: 10px;
      border-radius: 4px;
      display: none;
    }

    .message.success {
      background-color: #4caf50;
      color: #fff;
    }

    .message.error {
      background-color: #f44336;
      color: #fff;
    }
  </style>
</head>
<body>
  <form id="registerForm" action="register.php" method="post">
    <label for="nama">Id:</label>
    <input type="text" id="username" name="id" required>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="ussername">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="level">Level:</label>
    <input type="text" id="level" name="level" required>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <button type="button" name="submit">Register</button>
  </form>

  <?php

include_once("koneksi.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];

    $result = mysqli_query($mysqli, "INSERT INTO user(id, nama, username, password, level, email) VALUES('$id', '$nama', '$username', '$password', '$level', '$email')");

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . $result . "<br>" . mysqli_error($mysqli);
    }
}
?>

