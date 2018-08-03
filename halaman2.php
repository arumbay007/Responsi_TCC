<div style="background-color: orange">
	<h2> Ini Adalah Halaman Dua </h2>
	
	<ul>
		<li>
			<a href="awal.php"> Utama </a> <br />
		</li>
	</ul>
<hr />
	<?php
		session_start();
		echo "<h3> Selamat Datang </h3>";
		echo "Username : " .$_SESSION["username"]. "<br />";
		echo "Nama     : " .$_SESSION["nama"]. "<br />";
		echo "Akses    : " .$_SESSION["akses"]. "<br />";
	?>
	<hr />
	
</div>