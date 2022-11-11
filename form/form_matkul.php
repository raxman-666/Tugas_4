<?php 
  
 ?>

<!-- Tambah Matkul -->
<div class="modal fade" id="tambahMatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/matkul/tambah_matkul.php" method="POST">          
          <div class="form-group">
            <label>Kode Matkul</label>
            <input type="text" class="form-control" name="kodematkul">
          </div>
          <div class="form-group">
            <label>Nama Matkul</label>
            <input type="text" class="form-control" name="namamatkul">
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

<!-- Update Matkul -->
<div class="modal fade" id="ubahMatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Edit Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/matkul/edit_matkul.php" method="POST">
          <input type="hidden" name="id_matkul" id="id-matkul">
          <div class="form-group">
            <label>Kode Matkul</label>
            <input type="text" class="form-control" name="kodematkul" id="kode-matkul">
          </div>
          <div class="form-group">
            <label>Nama Matkul</label>
            <input type="text" class="form-control" name="namamatkul" id="nama-matkul">
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

<!-- Hapus Matkul -->
<div class="modal fade" id="hapusMatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Perhatian !</h5>
      </div>
      <div class="modal-body">
        <form action="controller/matkul/hapus_matkul.php" method="POST">
          <input type="hidden" name="id_matkul" id="id-hapus">
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