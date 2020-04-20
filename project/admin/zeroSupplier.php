<!DOCTYPE html>
<html>
<head>
  <link href="gudang.css" type="text/css" rel="stylesheet"/>
</head>

<body>

		<div id="tambah" class="popup-tambah" style="display: block;">
		<form class="container-form" action="tambah_supplier.php" method="post">

			<div class="close-container">
				<span onclick="window.location='gudang_supplier.php'" class="close" title="Home">
				<input type = "image" src="close.png" alt="Close" class="btnx"/>
			</span>
        <h1 style="font-size: 40px">Tambah Supplier</h1>
			</div>

			<div class="content-container" style="padding: 16px; font-size: 30px;">
				<label><b>Nama supplier</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Isikan Nama" name="nmsupplier" required>

      			<label><b>Alamat</b></label>
      			<input type="text" placeholder="Isikan Alamat" name="alamat" required>

      			<label><b>Nomon Telepon</b></label>
      			<input type="text" placeholder="Maksimal 15 digit" name="no" maxlength="15" required>
        
      			<button type="submit">Tambah</button>				
			</div>
			
		</form>		
	</div>

</body>

</html>
