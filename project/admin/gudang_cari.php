<?php

if (isset($_GET['cari_bk'])){
	$cari_bk=$_GET['cari_bk'];
header("location:gudang_barangkeluar.php?cari_bk=$cari_bk");
}

if (isset($_GET['cari_bm'])){
	$cari_bm=$_GET['cari_bm'];
header("location:gudang_barangmasuk.php?cari_bm=$cari_bm");
}

if (isset($_GET['cari_s'])){
	$cari_s=$_GET['cari_s'];
header("location:gudang_stok.php?cari_s=$cari_s");
}

if (isset($_GET['cari_sup'])){
	$cari_sup=$_GET['cari_sup'];
header("location:gudang_supplier.php?cari_sup=$cari_sup");
}

?>