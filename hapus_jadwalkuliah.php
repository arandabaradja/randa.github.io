<?php
// include database connection file
include 'koneksi.php';
$kode_matakuliah = $_GET['kode_matakuliah'];
$result = mysqli_query($koneksi, "DELETE FROM jadwal_kuliah WHERE kode_matakuliah='$kode_matakuliah'");
header("Location:jadwalmatakuliah.php");
?>