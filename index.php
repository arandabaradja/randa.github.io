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
    <h3><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</h3><hr>
    <a href="tambah_mhs.php" class="btn btn-primary mb-2">
    <!-- <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahmhs"> -->
      <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA MAHASISWA</a>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NIM</th>
          <th scope="col">NAMA MAHASISWA</th>
          <th scope="col">ALAMAT</th>
          <th scope="col">JURUSAN</th>
          <th colspan="3" scope="3">AKSI</th>
        </tr>
      </thead>
      <?php
          include 'koneksi.php';

              $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
              $no = 1;
              while ($data = mysqli_fetch_assoc($query)) {
        ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data['nim']?></td>
        <td><?php echo $data['nama']?></td>
        <td><?php echo $data['alamat']?></td>
        <td><?php echo $data['jurusan']?></td>
        <td>
          <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
          <a href="ubah_mhs.php?nim=<?php echo $data['nim'];?>">Edit</a>
          <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
          <a href="hapus_mhs.php?nim=<?php echo $data['nim'];?>">Delete</a>
          <!-- <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
          <a href="ubah_mhs" ata-toogle="modal" data-target="#editmhs">Edit</a>
          <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
          <a href="hapus_mhs" data-toogle="modal" data-target="#deletemhs">Delete</a> -->
        </td>
      </tr>
        <!-- Update Modal -->
        <div class="example-modal">
          <div id="#editmhs<?php echo $data['nim'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Edit Data Mahasiswa</h3>
                </div>
                <div class="modal-body">
                  <form action="update_mhs.php" method="post" role="form">
                    <?php
                        $nim = $data['nim'];
                        $query1 = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
                        while ($data1 = mysqli_fetch_assoc($query1)) {
                        ?>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-3 control-label text-right">NIM </label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="nim" value="<?php echo
                      $data1['nim']; ?>"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-3 control-label text-right">Nama Mahasiswa</label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="nama" value="<?php echo $data1['nama']; ?>"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-3 control-label text-right">Alamat </label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="alamat" value="<?php echo $data1['alamat']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-sm-3 control-label text-right">Jurusan </label>
                        <div class="col-sm-8"><input type="text" name="jurusan" class="form-control" value="<?php echo $data1['jurusan']; ?>">
                          </input>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button id="noedit" type="button" class="btn btn-danger pull-left" datadismiss="modal">Batal</button>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update">
                    </div>
                    <?php
        }
        ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Delete Modal -->
        <div class="example-modal">
          <div id="deletemhs<?php echo $data['nim'];?>" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Konfirmasi Hapus Data</h3>
                </div>
                <div class="modal-body">
                  <h5 align="center">Apakah anda yakin ingin menghapus NIM <?php echo
                    $data['nim'];?><strong><span class="grt"></span></strong> ?
                  </h5>
                </div>
                <div class="modal-footer">
                  <button id="nodelete" type="button" class="btn btn-danger pull-left" datadismiss="modal">Cancel</button>
                  <a href="hapus_mhs.php?nim=<?php echo $data['nim']; ?>" class="btn btn-primary">Delete</a>
                </div>
              </div>
            </div>
          </div>
        </div>


      <?php
          }
        ?>
    </table>



    </tbody>
    </table>
  </div>

  </div>

  <!-- Simpan Modal  -->
  <div class=" example-modal">
    <div id="tambahmhs" class="modal fade" role="dialog" style="display:none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Tambah Data Baru</h3>
          </div>
          <div class="modal-body">
            <form action="simpan_mhs.php" method="post" role="form">
              <div class="form-group">
                <div class="row">
                  <label class="col-sm-3 control-label text-right">NIM</label>
                  <div class="col-sm-8"><input type="text" class="form-control" name="nim" placeholder="NIM" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-sm-3 control-label text-right">Nama Mahasiswa</label>
                  <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa" value=""></div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-sm-3 control-label text-right">Alamat</label>
                  <div class="col-sm-8"><input type="text" class="form-control" name="alamat" placeholder="Alamat"
                      id="alamat" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-sm-3 control-label text-right">Jurusan </label>
                  <div class="col-sm-8"><input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
                    </input>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button id="nosave" type="button" class="btn btn-danger pull-left" datadismiss="modal">Batal</button>
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
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