<?php

if (isset($_GET['cari_p'])){
	$cari_p=$_GET['cari_p'];
	header("location:kasir_pelanggan.php?cari_p=$cari_p");
}

if (isset($_GET['cari_s'])){
	$cari_s=$_GET['cari_s'];
	header("location:kasir_stok.php?cari_s=$cari_s");
}

?>