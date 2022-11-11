<?php
	include "form/form_jadwal.php";

	ob_start();
	if ($_SESSION['level'] == "") {
		$_SESSION['gagal_login'] = "Dimohon untuk login dulu !";
		header("location:../login.php");
	}
?>
<!DOCTYPE html>
<html>
<body>
	<div style="width: 1300px; margin: auto; margin-top: 10px">
		<button style="margin-bottom: 10px; float: right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahJadwal"><i class="fa fa-plus"></i></button>
		<h3 style="text-align:center;">Jadwal Kuliah</h3>
		<table class="table" id="dt-datatable" style="clear: both;">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Hari</th>
		      <th scope="col">Jam</th>
		      <th scope="col">Nama Matkul</th>
		      <th scope="col">Nama Dosen</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	include "controller/connection.php";
		    	$query = mysqli_query($connect,"SELECT * FROM t_jadwalkuliah INNER JOIN t_matakuliah ON t_jadwalkuliah.id_matkul = t_matakuliah.id_matkul INNER JOIN t_dosen ON t_jadwalkuliah.id_dosen = t_dosen.id_dosen");
		    	$no = 0;
		    	while ($row = mysqli_fetch_array($query)){
		    		$no++;?>
		    		<tr>
				      <th><?=$no?></th>
				      <td><?=$row['hari']?></td>
				      <td><?=$row['jam']?></td>
				      <td><?=$row['nama_matkul']?></td>
				      <td><?=$row['nama_dosen']?></td>
				      <td class="text-light">
			      		<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailJadwal"><i class="fa fa-eye"></i></a>
			      		<a type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahJadwal"
				      	data-idjadwal="<?= $row['id_jadwal'] ?>"
		                data-hari="<?= $row['hari'] ?>"
		                data-jam="<?= $row['jam'] ?>"
		                data-idmatkul="<?= $row['id_matkul'] ?>"
		                data-iddosen="<?= $row['id_dosen'] ?>"
				      	><i class="fa fa-edit"></i></a>
				      	<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusJadwal"
				      	data-idjadwal="<?= $row['id_jadwal'] ?>"
		                data-namamatkul="<?= $row['nama_matkul'] ?>"
		                data-namahari="<?= $row['hari'] ?>"
				      	><i class="fa fa-trash"></i></a>
				      </td>
				    </tr>
		    	<?php } ?>
		  </tbody>
		</table>
	</div>
</body>

<!-- modal detail -->
<div class="modal fade" id="detailJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail Jadwal Kuliah</h5>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
		  <li class="list-group-item">Belom ada sob !</li>
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->

<script>
$(function(){
	$('#dt-datatable').DataTable();
    $('#ubahJadwal').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idjadwal = button.data('idjadwal');
        var hari = button.data('hari');
        var jam = button.data('jam');
        var matkul = button.data('idmatkul');
        var dosen = button.data('iddosen');
        var modal = $(this);
			modal.find('.modal-body #id-jadwal').val(idjadwal);
			modal.find('.modal-body #hari').val(hari);
			modal.find('.modal-body #jam').val(jam);
			modal.find('.modal-body #matkul').val(matkul);
            modal.find('.modal-body #dosen').val(dosen);
    });

    $('#hapusJadwal').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idjadwal = button.data('idjadwal');
        var namamatkul = button.data('namamatkul');
        var namahari = button.data('namahari');
        var modal = $(this);
        modal.find('.modal-body #id-hapus').val(idjadwal);
        modal.find('.modal-body #data-matkul').text(namamatkul);
        modal.find('.modal-body #data-hari').text(namahari);
    });
});
</script>

</html>