<form action="proses_login.php" method="post">
	<table border="1" align="center">
		<tr>
			<td colspan="2" align="center"> 
				<h3> Halaman Login </h3> 
			</td>
		</tr>
		<tr>
			<td> Username </td>
			<td><input type="text" name="username" placeholder="Username"> </td>
		</tr>
		<tr>
			<td> Password </td>
			<td> <input type="password" name="password" placeholder="Password"> </td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="login" value="Login">
				<input type="reset" name="batal" value="Batal">
			</td>
		</tr>
	</table>
</form>