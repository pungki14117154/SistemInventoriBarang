<?php
	include '../connect.php';

	$nama=$_POST['nmsupplier'];
	$almt=$_POST['alamat'];
	$no=$_POST['no'];

	mysqli_query($koneksi, "insert into supplier values ('', '$nama', '$almt', '$no')");
	echo "<script>alert('Berhasil Menambahkan Supplier');window.location='gudang_stok.php'</script>";
?>