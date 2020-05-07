<?php
	include 'gudang_header.php';
?>

	<div class="left">
		<ul>
			<li><a class="noactive" href="gudang_stok.php">Stok</a></li>
			<li><a class="noactive" href="gudang_barangkeluar.php">Barang Keluar</a></li>
			<li><a class="noactive" href="gudang_barangmasuk.php">Barang Masuk</a></li>
			<li><a class="noactive" href="gudang_supplier.php">Suppliers</a></li>
			<li><a class="active" href="gudang_pelanggan.php">Pelanggan</a></li>
		</ul>
	</div>

	<div class="content">
	<h2>Data Pelanggan</h2>

	<form action="gudang_cari.php" method="get">
		<div class="cari">
			<input type="text" class="hint" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari pelanggan ..." name="cari_p" required>	
			<input type="submit" class="tombol_submit"  value="cari">
		</div>
	</form>

	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Tipe</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		if (isset($_GET['cari_p'])){
			$cari_p = $_GET['cari_p'];
			$data = mysqli_query($koneksi,"select nama_pelanggan, tipe from pelanggan where nama_pelanggan like '%$cari_p%' ");
		}else{
			$data = mysqli_query($koneksi,"select nama_pelanggan, tipe from pelanggan");
		}
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

	</div>


<!-- popup tambah pelanggan -->

<?php
	include 'footer.php';
?>