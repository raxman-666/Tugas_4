<?php
	include "../connection.php";

	$id = $_POST['id_jadwal'];
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];
	$matkul = $_POST['matkul'];
	$dosen = $_POST['dosen'];

	$update = mysqli_query($connect,"UPDATE t_jadwalkuliah set hari='$hari', jam='$jam', id_matkul='$matkul', id_dosen='$dosen' where id_jadwal='$id'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_jadwal';alert('Data berhasil diedit !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_jadwal';alert('Data gagal diedit !')</script>";
	}
?>