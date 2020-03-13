<!DOCTYPE html>
<html>
<head>
	<title>Paman Toys</title>
	<?php include 'connect.php'; ?>
	<style>
	</style>
</head>

<body>
	<form action="login.php" method="post">
		<input type="text" class="form-control" placeholder="ID" name="id">
		<input type="password" class="form-control" placeholder="Password" name="pw">
		<input type="submit" value="Login">
	</form>

</body>