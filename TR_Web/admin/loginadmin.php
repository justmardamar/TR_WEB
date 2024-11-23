<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="Password">Password</label>
        <input type="password" name="password">
        <button type="submit">kirim</button>
    </form>
</body>
</html>
<?php

include 'connectdb.php';

session_start();

if(isset($_POST['username']) && isset( $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "SELECT username,password FROM user WHERE username='$username' AND password='$password'");
    $hasil_cari = mysqli_num_rows($query);

    if ($hasil_cari > 0) {
        $_SESSION['nama'] = $username;
        header('Location: main.html');
        exit();
    } else {
        echo "Username atau password salah.";
    }
}
?>