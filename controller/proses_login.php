<?php
	session_start();

	include 'connection.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($connect, "SELECT * FROM t_user WHERE username ='$username' AND password = '$password'");
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($login);

		if ($data['level'] == "admin" ) {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";

			header("location:../index.php");

		}else if ($data['level'] == "petugas") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas";

			header("location:../index.php");

		}else{
			$_SESSION['gagal'] = "Username dan Password tidak sesuai !";
			header("location:../login.php");
		}
	}else{
		$_SESSION['gagal'] = "Username dan Password tidak sesuai !";
		header("location:../login.php");
	}
?>