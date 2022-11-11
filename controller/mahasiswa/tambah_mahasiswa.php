<?php
	session_start();
	if($_POST){
		$nama_mahasiswa = $_POST['nama'];
		$nim = $_POST['nim'];
		$jurusan = $_POST['jurusan'];
		$alamat = $_POST['almat'];
		$username = $_POST['user'];
		$password = $_POST['pass'];

		if (empty($nama_mahasiswa)) {
			echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Nama Mahasiswa tidak boleh kosong !')</script>";
		}elseif (empty($nim)) {
			echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Nomor Induk Mahasiswa tidak boleh kosong !')</script>";
		}elseif (empty($jurusan)) {
			echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Jurusan tidak boleh kosong !')</script>";
		}elseif (empty($alamat)) {
			echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Alamat tidak boleh kosong !')</script>";
		}elseif (empty($username)) {
			echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Username tidak boleh kosong !')</script>";
		}elseif (empty($password)) {
			echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Password tidak boleh kosong !')</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($connect,"iNSERT INTO t_mahasiswa (nama_mahasiswa, nim, id_jurusan, alamat, username, password)
				value ('".$nama_mahasiswa."','".$nim."','".$jurusan."','".$alamat."','".$username."','".$password."')") or die (mysqli_error($connect));

			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Data berhasil ditambahkan !')</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_mahasiswa';alert('Data gagal ditambahkan !')</script>";
			}
		}
	}
?>