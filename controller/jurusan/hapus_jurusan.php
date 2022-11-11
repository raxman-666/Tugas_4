<?php
	include "../../assets/css.php";
	include "../../assets/js.php";
	$id = $_POST['id_jurusan'];

	include "../connection.php";
	$delete = mysqli_query($connect,"DELETE FROM t_jurusan Where id_jurusan = $id") or die (mysqli_error($connect));
	if ($delete) {
		echo "<script>location.href='../../index.php?page=data_jurusan';alert('Data berhasil dihapus !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_jurusan';alert('Data gagal dihapus !')</script>";
	}
?>