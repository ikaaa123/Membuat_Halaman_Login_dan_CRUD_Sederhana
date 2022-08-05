<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>
	body{
		background-image: url(bg2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		background-attachment: fixed;
	}
	</style>
</head>
<body>

	<h2>Login - SMKN 4 Kendal</h2><br/>

	<?php 
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "Login gagal! username dan password salah!";
		}else if ($_GET['pesan'] == "logout") {
			echo "Anda telah berhasil logout";
		}else if ($_GET['pesan'] == "belum_login") {
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<br/>
	<br/>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan Password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>

</body>
</html>