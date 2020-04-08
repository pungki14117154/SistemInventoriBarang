<!DOCTYPE html>
<html>
<head>

	<title>PAMAN TOYS (ADMIN PENJUALAN)</title>
	<link href="kasir.css" type="text/css" rel="stylesheet"/>

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
			<li><a href="kasir_pelanggan.php">Pelanggan</a></li>
			<li><a href="kasir_stok.php">Stok</a></li>
		</ul>

	</div>