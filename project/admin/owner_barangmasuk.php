<?php
	include 'owner_header.php';
?>

	<div class="left">
		<ul>
			<li><a class="noactive" href="owner_pelanggan.php">Pelanggan</a></li>
			<li><a class="noactive" href="owner_stok.php">Stok</a></li>
			<li><a class="active" href="owner_barangmasuk.php">Barang Masuk</a></li>
			<li><a class="noactive" href="owner_barangkeluar.php">Barang Keluar</a></li>
			<li><a class="noactive" href="owner_supplier.php">Supplier</a></li>
		</ul>
	</div>

	<div class="content">
	<h2>Data Barang Masuk</h2>

	<form action="owner_cari.php" method="get">
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
	    <div class="container-btn-unduh">
			<button onclick="window.location.href='lap_bmasuk.php';alert('Laporan disimpan di Download/laporan_barang_masuk.pdf')">Unduh Laporan</button>
		</div>
	</div>

<?php
	include 'footer.php';
?>