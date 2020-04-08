<!DOCTYPE html>
<html>
<head>

	<title>PAMAN TOYS (OWNER)</title>
	<link href="owner.css" type="text/css" rel="stylesheet"/>

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
			<li><a href="owner_pelanggan.php">Pelanggan</a></li>
			<li><a href="owner_stok.php">Stok</a></li>
			<li><a href="owner_barangmasuk.php">Barang Masuk</a></li>
			<li><a href="owner_barangkeluar.php">Barang Keluar</a></li>
			<li><a href="owner_supplier.php">Supplier</a></li>
		</ul>

	</div>

