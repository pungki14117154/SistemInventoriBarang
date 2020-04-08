<?php
	include 'gudang_header.php';
?>

	<div class="content">
	<h2>Data Stok Barang</h2>


	<div>
		<form action="gudang_cari.php" method="get">
			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari barang ..." name="cari_s">	
		</form>

		<a href="lap_stok.php">Download Laporan Stok</a>

	</div>


	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Barang</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Nama Supplier</th>
			<th>Id Supplier</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		if (isset($_GET['cari_s'])){
			$cari_s = $_GET['cari_s'];
			$data = mysqli_query($koneksi,"select id_barang, Nama, jumlah_barang, supplier.nama_supplier, supplier.id_supplier from stok join supplier on stok.id_supplier=supplier.id_supplier where Nama like '$cari_s' ");
		}else{
			$data = mysqli_query($koneksi,"select id_barang, Nama, jumlah_barang, supplier.nama_supplier, supplier.id_supplier from stok join supplier on stok.id_supplier=supplier.id_supplier");
		}
		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['Nama']; ?></td>
				<td width="40%"><?php echo $d['jumlah_barang']; ?></td>
				<td><?php echo $d['nama_supplier']; ?></td>
				<td><?php echo $d['id_supplier']; ?></td>
			</tr>
	<?php 
		}
	?>

	</table>

		<div class="container-btn-tambah">
			<button onclick="document.getElementById('tambah').style.display='block'">Tambah stok / barang masuk</button>
		</div>

	</div>


<!-- popup tambah barang -->

	<div id="tambah" class="popup-tambah">
		<form class="container-form" action="tambah_stok.php" method="post">

			<div class="close-container">
				<span onclick="document.getElementById('tambah').style.display='none'" class="close" title="Close">
				<input type = "image" src="close.png" alt="Close" class="btnx"/>
			</span>
				<h1 style="font-size: 40px">Tambah Barang</h1>
			</div>

			<div class="content-container" style="padding: 16px; font-size: 30px">
				<label><b>Nama Barang</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Isikan nama barang" name="nama" required>

      			<label><b>Jumlah</b></label>
      			<input type="integer" placeholder="Isikan jumlah barang" name="jumlah" required>

      			<label><b>Nama Supplier</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Nama Supplier" name="supplier" required>
        
      			<button type="submit">Tambah</button>				
			</div>
			
		</form>		
	</div>

<?php
	include 'footer.php';
?>