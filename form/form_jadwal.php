<?php 
  include "controller/connection.php";
 ?>

<!-- Tambah Jadwal -->
<div class="modal fade" id="tambahJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/jadwal/tambah_jadwal.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Hari</label>
            <select name="hari" class="form-control">
              <option value="">Silahkan Pilih...</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jumat">Jumat</option>
              <option value="Sabtu">Sabtu</option>
              <option value="Minggu">Minggu</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jam</label>
            <input type="time" class="form-control" name="jam">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Matkul</label>
            <select name="matkul" class="form-control">
              <option value="">Silahkan Pilih...</option>
              <?php 
              $query = mysqli_query($connect,"SELECT * FROM t_matakuliah");
              while ($row = mysqli_fetch_array($query)){ ?>
                <option value="<?= $row['id_matkul'] ?>"><?= $row['nama_matkul'] ?></option>
              <?php } ?>
            </select>
          </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Dosen</label>
            <select name="dosen" class="form-control">
              <option value="">Silahkan Pilih...</option>
              <?php 
              $query = mysqli_query($connect,"SELECT * FROM t_dosen");
              while ($row = mysqli_fetch_array($query)){ ?>
                <option value="<?= $row['id_dosen'] ?>"><?= $row['nama_dosen'] ?></option>
              <?php } ?>
            </select>
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

<!-- Update Jadwal -->
<div class="modal fade" id="ubahJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Edit Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/jadwal/edit_jadwal.php" method="POST">
          <input type="hidden" name="id_jadwal" id="id-jadwal">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Hari</label>
            <select name="hari" class="form-control" id="hari">
              <option value="">Silahkan Pilih...</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jumat">Jumat</option>
              <option value="Sabtu">Sabtu</option>
              <option value="Minggu">Minggu</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jam</label>
            <input type="time" class="form-control" name="jam" id="jam">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Matkul</label>
            <select name="matkul" class="form-control" id="matkul">
              <option value="">Silahkan Pilih...</option>
              <?php 
              $query = mysqli_query($connect,"SELECT * FROM t_matakuliah");
              while ($row = mysqli_fetch_array($query)){ ?>
                <option value="<?= $row['id_matkul'] ?>"><?= $row['nama_matkul'] ?></option>
              <?php } ?>
            </select>
          </div>
         <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Dosen</label>
            <select name="dosen" class="form-control" id="dosen">
              <option value="">Silahkan Pilih...</option>
              <?php 
              $query = mysqli_query($connect,"SELECT * FROM t_dosen");
              while ($row = mysqli_fetch_array($query)){ ?>
                <option value="<?= $row['id_dosen'] ?>"><?= $row['nama_dosen'] ?></option>
              <?php } ?>
            </select>
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

<!-- Hapus Jadwal -->
<div class="modal fade" id="hapusJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Perhatian !</h5>
      </div>
      <div class="modal-body">
        <form action="controller/jadwal/hapus_jadwal.php" method="POST">
          <input type="hidden" name="id_jadwal" id="id-hapus">
          Apakah anda ingin menghapus data jadwal <b id="data-matkul"></b> hari <b id="data-hari"></b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-success">Ya</button>
      </div>
      </form>
    </div>
  </div>
</div>