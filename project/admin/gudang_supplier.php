<?php
	include 'gudang_header.php';
?>

	<div class="left">
		<ul>
			<li><a class="noactive" href="gudang_stok.php">Stok</a></li>
			<li><a class="noactive" href="gudang_barangkeluar.php">Barang Keluar</a></li>
			<li><a class="noactive" href="gudang_barangmasuk.php">Barang Masuk</a></li>
			<li><a class="active" href="gudang_supplier.php">Suppliers</a></li>
			<li><a class="noactive" href="gudang_pelanggan.php">Pelanggan</a></li>
		</ul>
	</div>

	<div class="content">
	<h2>Data Supplier</h2>

	<form action="gudang_cari.php" method="get">
	<div class="cari">
			<input type="text" class="hint" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari pelanggan ..." name="cari_sup" required>	
			<input type="submit" class="tombol_submit" value="cari">
		</div>
	</form>

	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor Telepon / HP</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		if (isset($_GET['cari_sup'])){
			$cari_sup = $_GET['cari_sup'];
			$data = mysqli_query($koneksi,"select nama_supplier, alamat, no_telepon from supplier where nama_supplier like '%$cari_sup%' ");
		}else{
			$data = mysqli_query($koneksi,"select nama_supplier, alamat, no_telepon from supplier");
		}
		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td width="50%"><?php echo $d['nama_supplier']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td width="30%"><?php echo $d['no_telepon']; ?></td>
			</tr>
	<?php 
		}
	?>

	</table>

	<div class="container-btn-tambah">
		<button onclick="window.location.href='zeroSupplier.php'">Tambah Supplier</button>
	</div>


	</div>



<?php
	include 'footer.php';
?>