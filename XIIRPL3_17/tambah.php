<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi Data Siswa</title>
</head>
<body>
	<h2>CRUD DATA SISWA  SMKN 4 KENDAL</h2><br/>
	<a href="tampil.php">KEMBALI</a><br/>
	<br/>
	<h3>TAMBAH DATA SISWA</h3>
	<form method="post" action="tambah_aksi.php">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIPD</td>
			<td><input type="number" name="nipd"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td><input type="text" name="kelas"></td>
		</tr>

		<tr>
			<td>Program Keahlian</td>
			<td><input type="text" name="proli"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>
		</table>
	</form>
</body>
</html>