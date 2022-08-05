<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi Data Siswa</title>
	<style>
	body{
		background-image: url(bg.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		background-attachment: fixed;
	}
	</style>
</head>
<body>
	<h2>CRUD DATA SISWA - SMKN 4 KENDAL</h2><br/>

	<?php
	session_start();
	if ($_SESSION['status']!="login") {
		header("location:index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4><br/>

	<a href="logout.php">LOGOUT</a><br/>
	<br/>
	<a href="tambah.php">+TAMBAH SISWA</a><br/>
	<br/>


	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIPD</th>
			<th>Kelas</th>
			<th>Program Keahlian</th>
			<th>OPSI</th>
		</tr>

		<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "select * from tb_siswa");
			while ($d = mysqli_fetch_array($data)) {
		?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['nipd']; ?></td>
			<td><?php echo $d['kelas']; ?></td>
			<td><?php echo $d['proli']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>