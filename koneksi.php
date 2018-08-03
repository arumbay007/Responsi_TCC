<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "akses";
	
	$kon = mysqli_connect($host, $user, $pass);
		if(!$kon) die("Gagal Koneksi");
	
	$hasil = mysqli_select_db($kon, $dbname);
		if(!$hasil) {
			$hasil = mysqli_query($kon, "create database $dbname");
			if(!$hasil) die("Gagal Buat Database");
		
		else 
			$hasil = mysqli_select_db($kon, $dbname);
			if(!$hasil) die("Gagal Koneksi Ke Database");
		}

		$sqlTablePengguna = "create table if not exists pengguna (
							idpengguna int auto_increment not null primary key,
							username varchar(50) not null,
							password varchar (50) not null,
							nama varchar (50) not null,
							akses varchar (40) not null )";
		mysqli_query($kon, $sqlTablePengguna) or die("Gagal Buat Table Pengguna");	

		$sql    = "select * from pengguna";
		$hasil  = mysqli_query($kon, $sql);
		$jumlah = mysqli_num_rows($hasil);
		if($jumlah == 0){
			$sql = "insert into pengguna (username, password, nama, akses) 
					values ('Admin',md5('Admin'),'Administrator','Pemilik'),
						   ('Root',md5('Root'),'User','Pengguna')";
			mysqli_query($kon, $sql);
		}
							
		
?>