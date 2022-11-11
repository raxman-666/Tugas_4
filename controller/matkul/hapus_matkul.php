<?php
	$id = $_POST['id_matkul'];

	include "../connection.php";
	$delete = mysqli_query($connect,"DELETE FROM t_matakuliah Where id_matkul = $id") or die (mysqli_error($connect));
	if ($delete) {
		echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Data berhasil dihapus !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_mtakuliah';alert('Data gagal dihapus !')</script>";
	}
?>