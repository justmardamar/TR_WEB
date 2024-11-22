<?php
include 'connectdb.php';
if(isset($_COOKIE['nama'])){
    $panggilnama = $_COOKIE['nama'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer p{
            position:fixed;
        }
        section{
            padding:10px;
        }
        img{
            width : 10%;
            height : 10%;
        }
    </style>
</head>
<body>
    <section class="container">
        <img src="damar2.png" alt="Damar Anjay"><br>
        <?php echo "Halo ".$panggilnama.", Selamat Datang";?>
    </section>
    <footer>
        <p>@Website dalam pengembangan silahkan follow @_damarwijaya supaya cepat jadi</p>
    </footer>
</body>
</html>
