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

