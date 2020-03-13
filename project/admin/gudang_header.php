<!DOCTYPE html>
<html>
<head>
	<?php
		include '../connect.php';
	?>

	<title>PAMAN TOYS (OWNER)</title>
	<style>
		.header{
			width: 100%;
			height: 100%;
			margin: 0.25%;
			background-color: blue;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.header a{
			font-size: 40px;
			font-style: bold;
			color: white;
		}

		.left{
			float: left;
			margin: 0.25%;
			width: 24%;
			height: 100%;
			border: 1px solid black;
		}

		.content{
			width: 74%;
			margin: 0.25%;
			float: right;
			padding: 0.25%;
			border: 1px solid black;
		}
	</style>
</head>

<body>

	<div class="header">
		<a>PAMAN TOYS</a>
	</div>

	<div class="left">
		<ul>
			<li><a href="gudang_stok.php">Stok</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
		</ul>

	</div>

