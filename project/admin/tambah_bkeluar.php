<?php
	include '../connect.php';

	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];
	$pelanggan=$_POST['pelanggan'];
	$supplier=$_POST['supplier'];

	$query = mysqli_query($koneksi, "select * from pelanggan where nama_pelanggan='$pelanggan'");
	$r = mysqli_num_rows($query);
	$dset1 = mysqli_fetch_assoc($query);
	$d1 = $dset1['id_pelanggan'];

	if ($r==0){

		echo "<script>alert('Pelanggan Belum Terdaftar. ');window.location='gudang_barangkeluar.php'</script>";

	}else{

		$query2 = mysqli_query($koneksi, "select * from stok join supplier on stok.id_supplier=supplier.id_supplier where Nama='$nama' and supplier.nama_supplier='$supplier'");
		$r2 = mysqli_num_rows($query2);

		if($r2==0){

			echo "<script>alert('Barang Tidak Ada didalam Daftar ');window.location='gudang_stok.php'</script>";

		}else{

			// Ambil data
			$dset2 = mysqli_fetch_assoc($query2);
			$d2 = $dset2['id_barang'];

			$jml = $dset2['jumlah_barang']; //jumlah barang di database
			$intjumlah = intval($jumlah); //jumlah barang yang diinput
			// sampe sini

			if($intjumlah>$jml){
				echo "<script>alert('Jumlah Barang di Stok Tidak Cukup');window.location='gudang_stok.php'</script>";

			}else{

				$tgl = date('Y/m/d');

				mysqli_query($koneksi, "insert into barang_keluar values('', '$nama', '$intjumlah', '$tgl', '$d2', '$d1') ");

				$sum = $jml-$intjumlah;
				mysqli_query($koneksi,"update stok set jumlah_barang='$sum' where id_barang='$d2' ");

				echo "<script>alert('Berhasil Mengeluarkan Barang');window.location='gudang_barangkeluar.php'</script>";

			}

		}

	}

?>