<?php

if (isset($_GET['cari_p'])){
	$cari_p=$_GET['cari_p'];
	header("location:owner_pelanggan.php?cari_p=$cari_p");
}

if (isset($_GET['cari_s'])){
	$cari_s=$_GET['cari_s'];
	header("location:owner_stok.php?cari_s=$cari_s");
}

if (isset($_GET['cari_bk'])){
	$cari_bk=$_GET['cari_bk'];
header("location:owner_barangkeluar.php?cari_bk=$cari_bk");
}

if (isset($_GET['cari_bm'])){
	$cari_bm=$_GET['cari_bm'];
header("location:owner_barangmasuk.php?cari_bm=$cari_bm");
}

if (isset($_GET['cari_sup'])){
	$cari_sup=$_GET['cari_sup'];
header("location:owner_supplier.php?cari_sup=$cari_sup");
}

?>