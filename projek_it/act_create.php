<?php
include 'koneksi.php';

$nam_kat = $_GET['nam_kat'];

$query = "INSERT INTO tbl_kategori(nama_kategori) VALUES('$nam_kat')";
$hasil = mysqli_query($koneksi, $query);
echo "simpan data berhasil";


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
?>