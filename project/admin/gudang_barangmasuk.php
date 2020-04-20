<?php
	include 'gudang_header.php';
?>

	<div class="left">
		<ul>
			<li><a class="noactive" href="gudang_stok.php">Stok</a></li>
			<li><a class="noactive" href="gudang_barangkeluar.php">Barang Keluar</a></li>
			<li><a class="active" href="gudang_barangmasuk.php">Barang Masuk</a></li>
			<li><a class="noactive" href="gudang_supplier.php">Suppliers</a></li>
		</ul>
	</div>

	<div class="content">
	<h2>Data Barang Masuk</h2>

	<form action="gudang_cari.php" method="get">
	<div class="cari">
			<input type="text" class="hint" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari barang masuk ..." name="cari_bm" required>	
			<input type="submit" class="tombol_submit"  value="cari">	
		</div>
	</form>

	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Barang</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tanggal Masuk</th>
			<th>ID Supplier</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		if (isset($_GET['cari_bm'])){
			$cari_bm = $_GET['cari_bm'];
			$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_masuk, id_supplier from barang_masuk where nama_barang like '%$cari_bm%' ");
		}else{
			$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_masuk, id_supplier from barang_masuk");
		}

		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td><?php echo $d['tgl_masuk']; ?></td>
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
      			<input type="number" min="0" placeholder="Isikan jumlah barang" name="jumlah" required>

      			<label><b>Nama Supplier</b></label>
      			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Nama Supplier" name="supplier" required>
        
      			<button type="submit">Tambah</button>				
			</div>
			
		</form>		
	</div>

<?php
	include 'footer.php';
?>