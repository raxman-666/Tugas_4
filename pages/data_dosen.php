<?php
	include "form/form_dosen.php";

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
			<button style="margin-bottom: 10px; float: right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahDosen"><i class="fa fa-plus"></i></button>
		<?php } ?>
		<h3 style="text-align:center;">Data Dosen</h3>
		<table class="table" id="dt-datatable" style="clear: both;">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama Dosen</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Telepon</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	include "controller/connection.php";
		    	$query = mysqli_query($connect,"SELECT * FROM t_dosen");
		    	$no = 0;
		    	while ($row = mysqli_fetch_array($query)){
		    		$no++;?>
		    		<tr>
				      <th><?=$no?></th>
				      <td><?=$row['nama_dosen']?></td>
				      <td><?=$row['alamat']?></td>
				      <td><?=$row['telepon']?></td>
				      <td class="text-light">
				      		<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailDosen"><i class="fa fa-eye"></i></a>
				      	<?php if ($_SESSION['level'] == "admin") { ?>
				      		<a type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahDosen"
					      	data-iddosen="<?= $row['id_dosen'] ?>"
			                data-namadosen="<?= $row['nama_dosen'] ?>"
			                data-alamat="<?= $row['alamat'] ?>"
			                data-telepon="<?= $row['telepon'] ?>"
					      	><i class="fa fa-edit"></i></a>
					      	<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusDosen"
					      	data-iddosen="<?= $row['id_dosen'] ?>"
			                data-namadosen="<?= $row['nama_dosen'] ?>"
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
<div class="modal fade" id="detailDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail Dosen</h5>
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
    $('#ubahDosen').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var iddosen = button.data('iddosen');
        var namadosen = button.data('namadosen');
        var alamat = button.data('alamat');
		var telepon = button.data('telepon');
        var modal = $(this);
			modal.find('.modal-body #id-dosen').val(iddosen);
			modal.find('.modal-body #nama-dosen').val(namadosen);
            modal.find('.modal-body #alamat').val(alamat);
            modal.find('.modal-body #telepon').val(telepon);
    });

    $('#hapusDosen').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var iddosen = button.data('iddosen');
        var namadosen = button.data('namadosen');
        var modal = $(this);
        modal.find('.modal-body #id-hapus').val(iddosen);
        modal.find('.modal-body #data-hapus').text(namadosen);
    });
});
</script>

</html>