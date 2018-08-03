<?php
	session_start();
	if(!isset($_SESSION["username"])){
		echo "Sesi Sudah habis ! <br />
			  <a href='login.php'> Login Lagi </a>";
		exit;
	}
	
	echo "<h3> Selamat Datang </h3>";
	echo "Username : " .$_SESSION["username"]. "<br />";
	echo "Nama    : " .$_SESSION["nama"]. "<br />";
?>
<hr />
<div id="menu">
	<h4> LINK </h4>
	<a href="halaman1.php"> Halaman 1 </a> <br />
	<a href="halaman2.php"> Halaman 2 </a> <br />
	<a href="logout.php"> Logout </a> <br />
</div>