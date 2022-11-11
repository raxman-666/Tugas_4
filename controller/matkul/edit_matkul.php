<?php
	include "../connection.php";

	$id = $_POST['id_matkul'];
	$nama_matkul = $_POST['namamatkul'];
	$kodematkul = $_POST['kodematkul'];

	$update = mysqli_query($connect,"UPDATE t_matakuliah set nama_matkul='$nama_matkul', kode_matkul='$kodematkul' where id_matkul='$id'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Data berhasil diedit !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Data gagal diedit !')</script>";
	}
?>