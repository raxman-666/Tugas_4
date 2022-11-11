<?php
	include "../connection.php";

	$id = $_POST['id_jurusan'];
	$kode = $_POST['kode'];
	$nama = $_POST['namajurusan'];

	$update = mysqli_query($connect,"UPDATE t_jurusan set kode_jurusan='$kode', nama_jurusan='$nama' where id_jurusan='$id'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_jurusan';alert('Data berhasil diedit !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_jurusan';alert('Data gagal diedit !')</script>";
	}
?>