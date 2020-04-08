<!DOCTYPE html>
<html>
<head>
	<title>Paman Toys</title>
	
	<?php include 'connect.php'; ?>
	<link href="login.css" type="text/css" rel="stylesheet"/>

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
	</div>
	
	<div class="kotak_login">
	<form action="login.php" method="post">
		<label>Username :</label>
		<br>
		<input type="text" class="form-control" placeholder="ID" name="id">
		<br>
		<label>Password :</label>
		<br>
		<input type="password" class="form-control" placeholder="Password" name="pw">
		<input type="submit" class="tombol_submit"  value="LOGIN">
	</form>
</body>