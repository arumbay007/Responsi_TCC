<?php
	session_start();
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	
	$dataOk = "YA";
	
	if(strlen(trim($username))== 0){
		echo "Username Tidak Boleh Kosong ! <br />";
		$dataOk = "TIDAK";
	}
	
	if(strlen(trim($password))== 0){
		echo "Password Tidak Boleh Kosong ! <br />";
		$dataOk = "TIDAK";
	}
	
	if($dataOk == "TIDAK"){
		echo "Masih Ada Kesalahan, Silahkan Di Perbaiki ! <br />";
		echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
	exit;
	}
	
	include "koneksi.php";
	
	$sql = "select * from pengguna where
			username='".$username."' and password='".$password."' limit 1";
	$hasil = mysqli_query($kon, $sql) or die("Gagal Akss");
	$jumlah = mysqli_num_rows($hasil);
	if($jumlah > 0){
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["username"] = $row["username"];
		$_SESSION["password"] = $row["password"];
		$_SESSION["nama"]     = $row["nama"];
		$_SESSION["akses"]    = $row["akses"];
		header("location: awal.php");
	} else {
		echo "Username Atau Password Salah ! <br />";
		echo "<input type='button' value='Kembali' onClick='self.history.back()'> ";
	}
		
?>