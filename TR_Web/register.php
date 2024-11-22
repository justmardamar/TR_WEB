<?php include 'connectdb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form{
            display : flex;
            flex-direction : coulumn;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="Password">Password</label>
        <input type="password" name="password">
        <label for="username">email</label>
        <input type="email" name="email">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat">
        <button type="submit">kirim</button>
    </form>
</body>
</html>
<?php

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['alamat'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $query = mysqli_query($connect, "INSERT INTO user SET username='$username', password='$password',alamat='$alamat', Email='$email'");

    if($query){
        header("location: login.php");
    }
    else{
        echo "Input data gagal";
    }
}
else{
    echo "Belum ada isinya";
}
?>