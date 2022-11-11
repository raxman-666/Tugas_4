<?php 
  include "controller/connection.php";
 ?>

<!-- Tambah Jurusan -->
<div class="modal fade" id="tambahJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/jurusan/tambah_jurusan.php" method="POST">
          <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="text" class="form-control" name="kode">
          </div>
          <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" class="form-control" name="namajurusan">
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

<!-- Update Jurusan -->
<div class="modal fade" id="ubahJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Edit Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/jurusan/edit_jurusan.php" method="POST">
          <input type="hidden" name="id_jurusan" id="id-jurusan">
          <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="text" class="form-control" name="kode" id="kode-jurusan">
          </div>
          <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" class="form-control" name="namajurusan" id="nama-jurusan">
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
<div class="modal fade" id="hapusJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Perhatian !</h5>
      </div>
      <div class="modal-body">
        <form action="controller/jurusan/hapus_jurusan.php" method="POST">
          <input type="hidden" name="id_jurusan" id="id-hapus">
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