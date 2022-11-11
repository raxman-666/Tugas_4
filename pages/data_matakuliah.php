<?php
	include "form/form_matkul.php";

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
		<?php if ($_SESSION['level'] == "admin") { ?>
			<button style="margin-bottom: 10px; float: right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahMatkul"><i class="fa fa-plus"></i></button>
		<?php } ?>
		<h3 style="text-align:center;">Data Matkul</h3>
		<table class="table" id="dt-datatable" style="clear: both;">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Kode Matkul</th>
		      <th scope="col">Nama Matkul</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	include "controller/connection.php";
		    	$query = mysqli_query($connect,"SELECT * FROM t_matakuliah");
		    	$no = 0;
		    	while ($row = mysqli_fetch_array($query)){
		    		$no++;?>
		    		<tr>
				      <th><?=$no?></th>
				      <td><?=$row['kode_matkul']?></td>
				      <td><?=$row['nama_matkul']?></td>
				      <td class="text-light">
				      		<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailMatkul"><i class="fa fa-eye"></i></a>
				      	<?php if ($_SESSION['level'] == "admin") { ?>
				      		<a type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahMatkul"
					      	data-idmatkul="<?= $row['id_matkul'] ?>"
			                data-kodematkul="<?= $row['kode_matkul'] ?>"
			                data-namamatkul="<?= $row['nama_matkul'] ?>"
					      	><i class="fa fa-edit"></i></a>
					      	<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusMatkul"
					      	data-idmatkul="<?= $row['id_matkul'] ?>"
			                data-namamatkul="<?= $row['nama_matkul'] ?>"
					      	><i class="fa fa-trash"></i></a>
				      	<?php } ?>
				      </td>
				    </tr>
		    	<?php } ?>
		  </tbody>
		</table>
	</div>
</body>

<!-- modal detail -->
<div class="modal fade" id="detailMatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail Mata Kuliah</h5>
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
    $('#ubahMatkul').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idmatkul = button.data('idmatkul');
        var kodematkul = button.data('kodematkul');
		var namamatkul = button.data('namamatkul');
        var modal = $(this);
			modal.find('.modal-body #id-matkul').val(idmatkul);
			modal.find('.modal-body #kode-matkul').val(kodematkul);
            modal.find('.modal-body #nama-matkul').val(namamatkul);
    });

    $('#hapusMatkul').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idmatkul = button.data('idmatkul');
        var namamatkul = button.data('namamatkul');
        var modal = $(this);
        modal.find('.modal-body #id-hapus').val(idmatkul);
        modal.find('.modal-body #data-hapus').text(namamatkul);
    });
});
</script>

</html>