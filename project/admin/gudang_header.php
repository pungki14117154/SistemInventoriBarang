<!DOCTYPE html>
<html>
<head>

	<title>PAMAN TOYS (ADMIN GUDANG)</title>
	<link href="gudang.css" type="text/css" rel="stylesheet"/>

	<!-- Fungsi untuk disable back -->
	<script type="text/javascript">
        history.pushState(null, null, location.href);
    	window.onpopstate = function () {
        	history.go(1);
    	};
    </script>
	
</head>

<body>

	<div class="header">
		<a>PAMAN TOYS</a>
		<button onclick="window.location.href='../index.php'">Logout</button>
	</div>

	<div class="left">
		<ul>
			<li><a href="gudang_stok.php">Stok</a></li>
			<li><a href="gudang_barangkeluar.php">Barang Keluar</a></li>
			<li><a href="gudang_barangmasuk.php">Barang Masuk</a></li>
			<li><a href="gudang_supplier.php">Suppliers</a></li>
		</ul>

	</div>

