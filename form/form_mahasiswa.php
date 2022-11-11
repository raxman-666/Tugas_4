<?php 
  include "controller/connection.php";
 ?>

<!-- Tambah Mahasiswa -->
<div class="modal fade" id="tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/mahasiswa/tambah_mahasiswa.php" method="POST">
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama" id="nama_mahasiswa">
          </div>
          <div class="form-group">
            <label>Nomor Induk Mahasiswa</label>
            <input type="number" class="form-control" name="nim" id="nim">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jurusan</label>
            <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
              <?php 
              $query = mysqli_query($connect,"SELECT * FROM t_jurusan");
              while ($row = mysqli_fetch_array($query)){ ?>
                <option value="<?= $row['id_jurusan'] ?>"><?= $row['nama_jurusan'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="almat" id="alamat"></textarea>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user" id="user">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="pass" id="pass">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Update Mahasiswa -->
<div class="modal fade" id="ubahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Edit Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/mahasiswa/edit_mahasiswa.php" method="POST">
          <input type="hidden" name="id_mahasiswa" id="id-mahasiswa">
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control" name="namamahasiswa" id="nama-mahasiswa">
          </div>
          <div class="form-group">
            <label>Nomor Induk Mahasiswa</label>
            <input type="number" class="form-control" name="nim" id="nim">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jurusan</label>
            <select name="jurusan" class="form-control" id="jurusan">
              <?php 
              $qry = mysqli_query($connect,"SELECT * FROM t_jurusan");
              while ($row = mysqli_fetch_array($qry)){ ?>
                <option value="<?= $row['id_jurusan'] ?>"><?= $row['nama_jurusan'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"></textarea>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" id="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Hapus Mahasiswa -->
<div class="modal fade" id="hapusMahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Perhatian !</h5>
      </div>
      <div class="modal-body">
        <form action="controller/mahasiswa/hapus_mahasiswa.php" method="POST">
          <input type="hidden" name="id_mahasiswa" id="id-hapus">
          Apakah anda ingin menghapus data <b id="data-hapus"></b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-success">Ya</button>
      </div>
      </form>
    </div>
  </div>
</div>