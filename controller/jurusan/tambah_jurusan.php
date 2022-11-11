<?php
	if($_POST){
		$kode = $_POST['kode'];
		$nama = $_POST['namajurusan'];

		if (empty($kode)) {
			echo "<script>location.href='../../index.php?page=data_jurusan';alert('Kode Jurusan tidak boleh kosong !')</script>";
		}elseif (empty($nama)) {
			echo "<script>location.href='../../index.php?page=data_jurusan';alert('Nama Jurusan tidak boleh kosong !')</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($connect,"iNSERT INTO t_jurusan (kode_jurusan, nama_jurusan)
				value ('".$kode."','".$nama."')") or die (mysqli_error($connect));
			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_jurusan';alert('Data berhasil ditambahkan !')</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_jurusan';alert('Data gagal ditambahkan !')</script>";
			}
		}
	}
?>