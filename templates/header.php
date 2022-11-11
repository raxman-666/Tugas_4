<?php
	include "assets/css.php";
	include "assets/js.php";
?>

<style type="text/css">
	.background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
    }
</style>

<div class="background-radial-gradient" style="height: 70px; margin-bottom: 30px;">
	<nav class="nav nav-pills flex-column flex-sm-row" style="padding-top: 20px; padding-left: 10px;">
		<a class="flex-sm-fill text-sm-center text-light background-radial-gradient" href="?">Home</a>
    <a class="flex-sm-fill text-sm-center text-light background-radial-gradient" href="?page=data_mahasiswa">Data Mahasiswa</a>
    <a class="flex-sm-fill text-sm-center text-light background-radial-gradient" href="?page=data_jurusan">Jurusan</a>
    <a class="flex-sm-fill text-sm-center text-light background-radial-gradient" href="?page=data_dosen">Data Dosen</a>
    <a class="flex-sm-fill text-sm-center text-light background-radial-gradient" href="?page=data_matakuliah">Mata Kuliah</a>
    <a class="flex-sm-fill text-sm-center text-light background-radial-gradient" href="?page=data_jadwal">Jadwal Kuliah</a>
	  <a class="flex-sm-fill text-sm-center text-light background-radial-gradient dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?= $_SESSION['username'] ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="controller/proses_logout.php">Logout</a>
        </div>
	</nav>
</div>