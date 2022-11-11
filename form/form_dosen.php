<?php 
  
 ?>

<!-- Tambah Dosen -->
<div class="modal fade" id="tambahDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/dosen/tambah_dosen.php" method="POST">
          <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" class="form-control" name="namadosen">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="almat"></textarea>
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="number" class="form-control" name="telepon">
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

<!-- Update Dosen -->
<div class="modal fade" id="ubahDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Edit Data</h5>
      </div>
      <div class="modal-body">
        <form action="controller/dosen/edit_dosen.php" method="POST">
          <input type="hidden" name="id_dosen" id="id-dosen">
          <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" class="form-control" name="namadosen" id="nama-dosen">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"></textarea>
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="number" class="form-control" name="telepon" id="telepon">
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

<!-- Hapus Dosen -->
<div class="modal fade" id="hapusDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Perhatian !</h5>
      </div>
      <div class="modal-body">
        <form action="controller/dosen/hapus_dosen.php" method="POST">
          <input type="hidden" name="id_dosen" id="id-hapus">
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