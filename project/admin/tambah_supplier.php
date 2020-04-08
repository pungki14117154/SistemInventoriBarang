<?php
	include '../connect.php';

	$nama=$_POST['nmsupplier'];
	$almt=$_POST['alamat'];
	$no=$_POST['no'];

	$query = mysqli_query($koneksi, "select * from supplier where nama_supplier='$nama'");
	$r = mysqli_num_rows($query);

	if ($r<1) {
		mysqli_query($koneksi, "insert into supplier values ('', '$nama', '$almt', '$no')");
		echo "<script>alert('Berhasil Menambahkan Supplier');window.location='gudang_supplier.php'</script>";

	}else {
		echo "<script>alert('Nama Supplier Sudah Ada');window.location='gudang_supplier.php'</script>";
	}
?>