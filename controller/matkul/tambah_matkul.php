<?php
	if($_POST){
		$nama_matkul = $_POST['namamatkul'];
		$kodematkul = $_POST['kodematkul'];

		if (empty($kodematkul)) {
			echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Kode Matkul tidak boleh kosong !')</script>";
		}elseif (empty($nama_matkul)) {
			echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Nama Matkul tidak boleh kosong !')</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($connect,"iNSERT INTO t_matakuliah (nama_matkul, kode_matkul)
				value ('".$nama_matkul."','".$kodematkul."')") or die (mysqli_error($connect));
			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Data berhasil ditambahkan !')</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_matakuliah';alert('Data gagal ditambahkan !')</script>";
			}
		}
	}
?>