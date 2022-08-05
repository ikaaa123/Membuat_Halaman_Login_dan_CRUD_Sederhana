<?php
	include 'koneksi.php';

	$nipd = $_POST['nipd'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$proli = $_POST['proli'];

	mysqli_query($koneksi, "insert into tb_siswa values('', '$nipd','$nama', '$kelas', '$proli')");

	header("location:tampil.php");
?>