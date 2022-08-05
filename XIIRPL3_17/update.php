<?php
	
	include 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$nipd = $_POST['nipd'];
	$kelas = $_POST['kelas'];
	$proli = $_POST['proli'];

	mysqli_query($koneksi, "update tb_siswa set nama='$nama', nipd='$nipd', kelas='$kelas', proli='$proli' where id='$id'");

	header("location:tampil.php");
 ?>