<?php
	include "../connection.php";

	$id = $_POST['id_dosen'];
	$nama_dosen = $_POST['namadosen'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];

	$update = mysqli_query($connect,"UPDATE t_dosen set nama_dosen='$nama_dosen', alamat='$alamat', telepon='$telepon' where id_dosen='$id'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_dosen';alert('Data berhasil diedit !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_dosen';alert('Data gagal diedit !')</script>";
	}
?>