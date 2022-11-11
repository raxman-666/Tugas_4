<?php
	if($_POST){
		$nama_dosen = $_POST['namadosen'];
		$alamat = $_POST['almat'];
		$telepon = $_POST['telepon'];

		if (empty($nama_dosen)) {
			echo "<script>location.href='../../index.php?page=data_dosen';alert('Nama Dosen tidak boleh kosong !')</script>";
		}elseif (empty($alamat)) {
			echo "<script>location.href='../../index.php?page=data_dosen';alert('Alamat Dosen tidak boleh kosong !')</script>";
		}elseif (empty($telepon)) {
			echo "<script>location.href='../../index.php?page=data_dosen';alert('Nomor Telepon Dosen tidak boleh kosong !')</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($connect,"iNSERT INTO t_dosen (nama_dosen, alamat, telepon)
				value ('".$nama_dosen."','".$alamat."','".$telepon."')") or die (mysqli_error($connect));
			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_dosen';alert('Data Dosen berhasil ditambahkan !')</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_dosen';alert('Data Dosen gagal ditambahkan !')</script>";
			}
		}
	}
?>