<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Barang apa yang ingin kamu lelang?</h1>
    <form method="POST">
        <table>
            <tr>
                <td><label for="gambar">Gambar barang</label></td>
                <td><input type="file" name="gambar" accept="image/*"></td>
            </tr>
            <tr>
                <td><label for="nama barang" >Nama Barang</label></td>
                <td><input type="text" name="namabarang"></td>
            </tr>
            <tr>
                <td><label for="startprice">Start Price</label></td>
                <td><input type="number" step="0.01" name="startprice"required></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi</label></td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
        </table>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
<?php
include 'connectdb.php';

if(isset($_POST['namabarang']) && isset($_POST['startprice']) && isset($_POST['gambar']) && isset($_POST['deskripsi'])){
    $namabarang = $_POST['namabarang'];
    $startprice = $_POST['startprice'];
    $namagambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
    $pathgambar = "image/".$namagambar;

    if($pathgambar == "image/jpeg" || $pathgambar == "image/png"){
        $query = mysqli_query($connect,"INSERT INTO barang SET namabarang='$namabarang', deskripsi='$deskripsi', namagambar='$datagambar'");
        if($query){
            header("location : Dashboard.php");
        }else{
            echo "Input gagal";
        }
    }
}

?>