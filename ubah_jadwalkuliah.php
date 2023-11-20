<?php
include 'koneksi.php';
$kode_matakuliah = $_GET['kode_matakuliah'];
$result = mysqli_query($koneksi, "SELECT * FROM jadwal_kuliah WHERE kode_matakuliah='$kode_matakuliah'");
while($user_data = mysqli_fetch_array($result))
{
$nama_matakuliah = $user_data['nama_matakuliah'];
$hari = $user_data['hari'];
$jam_mulai = $user_data['jam_mulai'];
$jam_selesai = $user_data['jam_selesai'];
$ruang_kelas = $user_data['ruang_kelas'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>ADMINISTRATOR</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="icon ml-4">
                <h5>
                    <i class="fas fa-envelope-square mr-3"></i>
                    <i class="fas fa-bell-slash mr-3"></i>
                    <i class="fas fa-sign-out-alt mr-3"></i>
                </h5>
            </div>
        </div>
    </nav>
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href=""><i class="fas fa-tachometer-alt mr2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-user-graduate mr-2"></i>Daftar
                        Mahasiswa</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="
                    dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar
                        Dosen</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-users mr-2"></i>Daftar
                        Pegawai</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=""><i class="far fa-calendar-alt mr-2"></i>Jadwal Kuliah</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-graduate mr-2"></i> Ubah Data Jadwal Kuliah</h3>
            <hr>
            <form action="update_jadwalkuliah.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>KODE MATA KULIAH</label>
                        <input type="text" name="kode_matakuliah" class="form-control" id="nim"
                            value=<?php echo $kode_matakuliah;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label>MATA KULIAH</label>
                        <input type="text" name="nama_matakuliah" class="form-control" id="nama"
                            value=<?php echo $nama_matakuliah;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>HARI</label>
                        <input type="text" name="hari" class="form-control" id="alamat" value=<?php echo $hari;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>JAM MULAI</label>
                        <input type="time" name="jam_mulai" class="form-control" id="jurusan"
                            value=<?php echo$jam_mulai;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>JAM SELESAI</label>
                        <input type="time" name="jam_selesai" class="form-control" id="jurusan"
                            value=<?php echo$jam_selesai;?>>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>RUANG KELAS</label>
                        <input type="text" name="ruang_kelas" class="form-control" id="alamat"
                            value=<?php echo $ruang_kelas;?>>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</body>

</html>