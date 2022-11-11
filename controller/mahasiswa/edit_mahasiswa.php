<?php
	session_start();
	include "../connection.php";

	$id = $_POST['id_mahasiswa'];
	$nama_mahasiswa = $_POST['namamahasiswa'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$update = mysqli_query($connect,"UPDATE t_mahasiswa set nama_mahasiswa='$nama_mahasiswa', nim='$nim', id_jurusan='$jurusan', alamat='$alamat', username='$username', password='$password' where id_mahasiswa='$id'") or die (mysqli_error($connect));
	if ($update) {
		echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Data berhasil diedit !')</script>";
	}else{
		echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Data berhasil diedit !')</script>";
	}
?>