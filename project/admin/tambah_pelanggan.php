<?php
	include '../connect.php';

	$nama=$_POST['nama'];
	$tipe=$_POST['tipe'];

	mysqli_query($koneksi, "insert into pelanggan values ('', '$nama', '$tipe')");
	echo "<script>alert('Berhasil Menambahkan Pelanggan');window.location='kasir_pelanggan.php'</script>";
?>