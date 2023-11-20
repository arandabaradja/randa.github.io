<?php
include 'koneksi.php';
$kode_matakuliah = $_POST['kode_matakuliah'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$hari= $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$ruang_kelas = $_POST['ruang_kelas'];
$input = mysqli_query($koneksi,"INSERT INTO jadwal_kuliah
VALUES('$kode_matakuliah','$nama_matakuliah','$hari','$jam_mulai','$jam_selesai','$ruang_kelas')") or die(mysql_error());
if($input){
echo "Data Berhasil Disimpan";
header("location:jadwalmatakuliah.php");
}else{
echo "Gagal Disimpan";
}
?>