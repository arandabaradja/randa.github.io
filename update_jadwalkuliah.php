<?php
// include database connection file
include 'koneksi.php';
$kode_matakuliah = $_POST['kode_matakuliah'];
$nama_matakuliah=$_POST['nama_matakuliah'];
$hari=$_POST['hari'];
$jam_mulai=$_POST['jam_mulai'];
$jam_selesai=$_POST['jam_selesai'];
$ruang_kelas=$_POST['ruang_kelas'];

$result = mysqli_query($koneksi, "UPDATE jadwal_kuliah SET
nama_matakuliah='$nama_matakuliah',hari='$hari',jam_mulai='$jam_mulai',jam_selesai='$jam_selesai',ruang_kelas='$ruang_kelas' WHERE kode_matakuliah='$kode_matakuliah'");
// Redirect to homepage to display updated user in list
header("Location: jadwalmatakuliah.php");
?>