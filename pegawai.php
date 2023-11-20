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
    <?php include 'header.php'; ?>


    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-user-graduate mr-2"></i> Daftar Pegawai</h3>
        <hr>
        <a href="tambah_pegawai.php
            " class="btn btn-primary mb-2">
            <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA PEGAWAI</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA PEGAWAI</th>
                    <th scope="col">BAGIAN</th>
                    <th colspan="3" scope="3">AKSI</th>
                </tr>
            </thead>
            <?php
          include 'koneksi.php';

              $query = mysqli_query($koneksi, "SELECT * FROM pegawai");
              $no = 1;
              while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nik']?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['bagian']?></td>
                <td>
                    <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                    <a href="ubah_pegawai.php?nik=<?php echo $data['nik'];?>">Edit</a>
                    <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                    <a href="hapus_pegawai.php?nik=<?php echo $data['nik'];?>">Delete</a>
                </td>
            </tr>
            <?php
          }
        ?>
        </table>



        </tbody>
        </table>
    </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>