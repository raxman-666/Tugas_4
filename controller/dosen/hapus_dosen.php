<?php
	$id = $_POST['id_dosen'];

	include "../connection.php";
	$delete = mysqli_query($connect,"DELETE FROM t_dosen Where id_dosen = $id") or die (mysqli_error($connect));
	if ($delete) {
		echo "<script>location.href='../../index.php?page=data_dosen';alert('Data berhasil dihapus !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_dosen';alert('Data gagal dihapus !')</script>";
	}
?>