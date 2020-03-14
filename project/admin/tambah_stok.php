<?php
	include '../connect.php';

	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];
	$supplier=$_POST['supplier'];

	$query = mysqli_query($koneksi, "select * from supplier where nama_supplier='$supplier'");
	$r = mysqli_num_rows($query);
	$d1 = mysqli_fetch_assoc($query);
	$d2 = $d1['id_supplier'];

	if ($r==0){
		echo "<script>alert('Supplier Tidak Terdaftar. /Silahkan Tambah Supplier ');window.location='zeroSupplier.php'</script>";

	}else if ($r>=1){

		$query2 = mysqli_query($koneksi, "select * from stok where Nama='$nama' and id_supplier='$d2'");
		$r2 = mysqli_num_rows($query2);

		// bakal dipake jika $r2 >=1 
		$d3 = mysqli_fetch_assoc($query2);
		$d4 = $d3['id_barang'];

		$jml = $d3['jumlah_barang'];
		$intjumlah = intval($jumlah);
		$sum = $intjumlah + $jml;
		// sampe sini

			if ($r2==0){
				mysqli_query($koneksi, "insert into stok values ('', '$nama', '$intjumlah', '$d2')" );

			}else if ($r2>=1){
				mysqli_query($koneksi,"update stok set jumlah_barang='$sum' where id_barang='$d4' ");

			}

		$tgl = date('Y/m/d');

		mysqli_query($koneksi, "insert into barang_masuk values ('', '$nama', '$intjumlah', '$tgl', '$d4', '$d2') ");
		echo "<script>alert('Berhasil Menambahkan Barang');window.location='gudang_stok.php'</script>";

	}else{
		echo "<script>alert('Gagal Menambahkan Barang');window.location='gudang_stok.php'</script>";

	}

?>