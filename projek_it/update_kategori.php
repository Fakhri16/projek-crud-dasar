<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tbl_kategori WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="act_update.php" method="GET">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <label>nama kategori</label>
        <input type="text" name="nam_kat" value="<?= $data['nama_kategori']; ?>">
        <br><br>
        <button type="submit">simpan</button>
</body>
</html>