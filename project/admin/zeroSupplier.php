<!DOCTYPE html>
<html>
<head>
  <link href="gudang.css" type="text/css" rel="stylesheet"/>
<!-- 	<style>
    * {
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    }
		.popup-tambah {
  			display: block; /* no Hidden */
  			position: fixed; /* Stay in place */
  			z-index: 1; /* Sit on top */
  			left: 0;
  			top: 0;
  			width: 100%; /* Full width */
  			height: 100%; /* Full height */
  			background-color: rgb(0,0,0); /* Fallback color */
  			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  			padding-top: 60px;
        background-image: url('bg.png');
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
        font-size: 30px;
  			margin: 8px 0 8px 0px;
  			border: 1px solid black;
  			box-sizing: border-box;
		}

	</style> -->
</head>

<body>

		<div id="tambah" class="popup-tambah" style="display: block;">
		<form class="container-form" action="tambah_supplier.php" method="post">

			<div class="close-container">
				<span onclick="window.location='gudang_stok.php'" class="close" title="Home">&times;</span>
        <h1 style="font-size: 40px">Tambah Supplier</h1>
			</div>

			<div class="content-container" style="padding: 16px; font-size: 30px;">
				<label><b>Nama supplier</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Isikan Nama" name="nmsupplier" required>

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
