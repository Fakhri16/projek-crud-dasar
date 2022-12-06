<?php
include 'koneksi.php';

$id = $_GET['id'];
$nam_kat = $_GET['nam_kat'];

$query = "UPDATE tbl_kategori SET nama_kategori='$nam_kat' WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>
    alert('simpan data berhasil');
    window.location='tabel.php';
    </script>";
} else {
    echo "<script>
    alert('simpan data gagal!');
    window.location='create_kategori.php';
    </script>";
}