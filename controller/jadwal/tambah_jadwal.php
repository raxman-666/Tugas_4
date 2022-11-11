<?php
	if($_POST){
		$hari = $_POST['hari'];
		$jam = $_POST['jam'];
		$matkul = $_POST['matkul'];
		$dosen = $_POST['dosen'];

		if (empty($hari)) {
			echo "<script>location.href='../../index.php?page=data_jadwal';alert('Hari tidak boleh kosong !')</script>";
		}elseif (empty($jam)) {
			echo "<script>location.href='../../index.php?page=data_jadwal';alert('Jam tidak boleh kosong !')</script>";
		}elseif (empty($matkul)) {
			echo "<script>location.href='../../index.php?page=data_jadwal';alert('Mata Kuliah tidak boleh kosong !')</script>";
		}elseif (empty($dosen)) {
			echo "<script>location.href='../../index.php?page=data_jadwal';alert('Nama Dosen tidak boleh kosong !')</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($connect,"iNSERT INTO t_jadwalkuliah (hari, jam, id_matkul, id_dosen)
				value ('".$hari."','".$jam."','".$matkul."','".$dosen."')") or die (mysqli_error($connect));
			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_jadwal';alert('Data berhasil ditambahkan !')</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_jadwal';alert('Data gagal ditambahkan !')</script>";
			}
		}
	}
?>