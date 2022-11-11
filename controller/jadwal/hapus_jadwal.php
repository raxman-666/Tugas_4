<?php
	$id = $_POST['id_jadwal'];

	include "../connection.php";
	$delete = mysqli_query($connect,"DELETE FROM t_jadwalkuliah Where id_jadwal = $id") or die (mysqli_error($connect));
	if ($delete) {
		echo "<script>location.href='../../index.php?page=data_jadwal';alert('Data berhasil dihapus !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_jadwal';alert('Data gagal dihapus !')</script>";
	}
?>