<?php
	include "form/form_jurusan.php";

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
			<button style="margin-bottom: 10px; float: right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahJurusan"><i class="fa fa-plus"></i></button>
		<?php } ?>
		<h3 style="text-align:center;">Data Jurusan</h3>
		<table class="table" id="dt-datatable" style="clear: both;">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Kode Jurusan</th>
		      <th scope="col">Nama Jurusan</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	include "controller/connection.php";
		    	$query = mysqli_query($connect,"SELECT * FROM t_jurusan");
		    	$no = 0;
		    	while ($row = mysqli_fetch_array($query)){
		    		$no++;?>
		    		<tr>
				      <th><?=$no?></th>
				      <td><?=$row['kode_jurusan']?></td>
				      <td><?=$row['nama_jurusan']?></td>
				      <td class="text-light">
				      		<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailJurusan"><i class="fa fa-eye"></i></a>
				      	<?php if ($_SESSION['level'] == "admin") { ?>
				      		<a type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahJurusan"
					      	data-idjurusan="<?= $row['id_jurusan'] ?>"
			                data-kodejurusan="<?= $row['kode_jurusan'] ?>"
			                data-namajurusan="<?= $row['nama_jurusan'] ?>"
					      	><i class="fa fa-edit"></i></a>
					      	<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusJurusan"
					      	data-id_jurusan="<?= $row['id_jurusan'] ?>"
			                data-namajurusan="<?= $row['nama_jurusan'] ?>"
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
<div class="modal fade" id="detailJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail Jurusan</h5>
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
    $('#ubahJurusan').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var idjurusan = button.data('idjurusan');
        var kodejurusan = button.data('kodejurusan');
        var namajurusan = button.data('namajurusan');
        var modal = $(this);
			modal.find('.modal-body #id-jurusan').val(idjurusan);
			modal.find('.modal-body #kode-jurusan').val(kodejurusan);
			modal.find('.modal-body #nama-jurusan').val(namajurusan);
    });

    $('#hapusJurusan').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);
        var id_jurusan = button.data('id_jurusan');
        var namajurusan = button.data('namajurusan');
        var modal = $(this);
        modal.find('.modal-body #id-hapus').val(id_jurusan);
        modal.find('.modal-body #data-hapus').text(namajurusan);
    });
});
</script>

</html>