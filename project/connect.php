<?php
$koneksi = mysqli_connect("localhost","root","","pamantoys");
	if ($koneksi){
		// echo "Terkoneksi dengan data base.";
	}else{
		echo "<script>alert('koneksi ke database gagal');</script>";
	}
?>