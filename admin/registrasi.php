<?php
$databaseHost = "localhost";
$databaseName = "pendidikan";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $angsuran = $_POST['angsuran'];
    $debit = $_POST['debit'];

    // Insert data into database
    $sql = "INSERT INTO student (name, email, phone, class, angsuran, debit) VALUES ('$name', '$email', '$phone', '$class', '$angsuran', '$debit')";

    if ($mysqli->query($sql) === TRUE) {
        echo "REGISTRATION SUCCESSFUL!";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, select {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Online School Registration</h2>
        <form method="post" action="">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="class">Class</label>
            <select id="class" name="class" required>
                <option value="Class SIJA">Class SIJA</option>
                <option value="Class TJAT">Class TJAT</option>
                <option value="Class PAKET">Class PAKET</option>
            </select>

            <label for="angsuran">Angsuran</label>
            <select id="angsuran" name="angsuran" required>
                <option value="5.000.000">5.000.000</option>
                <option value="10.000.000">10.000.000</option>
                <option value="LUNAS">LUNAS</option>
            </select>

            <label for="debit">Debit</label>
            <select id="debit" name="debit" required>
                <option value="BCA">BCA</option>
                <option value="BRI">BRI</option>
                <option value="CIMB Niaga">CIMB Niaga</option>
            </select>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
