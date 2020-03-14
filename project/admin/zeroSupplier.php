<!DOCTYPE html>
<html>
<head>
	<style>
		.popup-tambah {
  			display: block; /* Hidden by default */
  			position: fixed; /* Stay in place */
  			z-index: 1; /* Sit on top */
  			left: 0;
  			top: 0;
  			width: 100%; /* Full width */
  			height: 100%; /* Full height */
  			background-color: rgb(0,0,0); /* Fallback color */
  			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  			padding-top: 60px;
		}

		.container-form {
  			background-color: #fefefe;
  			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  			border: 1px solid #888;
  			width: 80%; /* Could be more or less, depending on screen size */
		}

		.close-container {
 			text-align: center;
 			margin: 12px 0 12px 0;
  			position: relative;
  			padding-bottom: 25px;
			}

		.close {
  			position: absolute;
  			right: 25px;
  			color: black;
  			font-size: 35px;
		}

		.close:hover {
  			color: blue;
  			cursor: pointer;
		}

		input{
  			width: 100%;
  			padding: 12px;
  			margin: 8px 0 8px 0px;
  			border: 1px solid black;
  			box-sizing: border-box;
		}

	</style>
</head>

<body>

		<div id="tambah" class="popup-tambah">
		<form class="container-form" action="tambah_supplier.php" method="post">

			<div class="close-container">
				<span onclick="document.getElementById('tambah').style.display='none'" class="close" title="Home">Home</span>
			</div>

			<div class="" style="padding: 16px">
				<label><b>Nama supplier</b></label>
      			<input type="text" placeholder="Isikan Nama" name="nmsupplier" required>

      			<label><b>Alamat</b></label>
      			<input type="text" placeholder="Isikan Alamat" name="alamat" required>

      			<label><b>Nomon Telepon</b></label>
      			<input type="text" placeholder="Maksimal 15 digit" name="no" maxlength="15">
        
      			<button type="submit">Tambah</button>				
			</div>
			
		</form>		
	</div>

</body>

</html>
