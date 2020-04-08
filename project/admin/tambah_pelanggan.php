<?php
	include '../connect.php';

	$nama=$_POST['nama'];
	$tipe=$_POST['tipe'];

	$query = mysqli_query($koneksi, "select * from pelanggan where nama_pelanggan='$nama'");
	$r = mysqli_num_rows($query);

	if ($r<1) {
		mysqli_query($koneksi, "insert into pelanggan values ('', '$nama', '$tipe')");
		echo "<script>alert('Berhasil Menambahkan Pelanggan');window.location='kasir_pelanggan.php'</script>";

	}else {
		echo "<script>alert('Nama Sudah Ada');window.location='kasir_pelanggan.php'</script>";
	}
?>