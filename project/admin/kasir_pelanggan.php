<?php
	include 'kasir_header.php';
?>

	<div class="content">
	<h2>Data Pelanggan</h2>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Tipe</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select nama_pelanggan, tipe from pelanggan");

		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td width="50%"><?php echo $d['nama_pelanggan']; ?></td>
				<td><?php echo $d['tipe']; ?></td>
			</tr>
	<?php 
		}
	?>

	</table>

		<div class="container-btn-tambah">
			<button onclick="document.getElementById('tambah').style.display='block'">Tambah Pelanggan</button>
		</div>

	</div>


<!-- popup tambah pelanggan -->

	<div id="tambah" class="popup-tambah">
		<form class="container-form" action="tambah_pelanggan.php" method="post">

			<div class="close-container">
				<span onclick="document.getElementById('tambah').style.display='none'" class="close" title="Close">&times;</span>
				<h1 style="font-size: 40px">Tambah Pelanggan</h1>
			</div>

			<div class="content-container" style="padding: 16px; font-size: 30px">
				<label><b>Nama Pelanggan</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Nama Pelanggan" name="nama" required>

      			<label><b>Tipe</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Tipe Pelanggan" name="tipe" required>
        
      			<button type="submit">Tambah Pelanggan</button>				
			</div>
			
		</form>		
	</div>



<?php
	include 'footer.php';
?>