<?php
	include 'owner_header.php';
?>

	<div class="left">
		<ul>
			<li><a class="noactive" href="owner_pelanggan.php">Pelanggan</a></li>
			<li><a class="noactive" href="owner_stok.php">Stok</a></li>
			<li><a class="noactive" href="owner_barangmasuk.php">Barang Masuk</a></li>
			<li><a class="active" href="owner_barangkeluar.php">Barang Keluar</a></li>
			<li><a class="noactive" href="owner_supplier.php">Supplier</a></li>
		</ul>
	</div>

	<div class="content">
	<h2>Data Barang Keluar</h2>

	<form action="owner_cari.php" method="get">
		<div class="cari">
			<input type="text" class="hint" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari barang keluar ..." name="cari_bk" required>	
			<input type="submit" class="tombol_submit"  value="cari">
		</div>
	</form>

	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Barang</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tanggal Keluar</th>
			<th>ID Pelanggan</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		if (isset($_GET['cari_bk'])){
			$cari_bk = $_GET['cari_bk'];
			$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_keluar, id_pelanggan from barang_keluar where nama_barang like '%$cari_bk%' ");
		}else{
			$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_keluar, id_pelanggan from barang_keluar");
		}
		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td><?php echo $d['tgl_keluar']; ?></td>
				<td><?php echo $d['id_pelanggan']; ?></td>
			</tr>
	<?php 
		}
	?>

    </table>
	    <div class="container-btn-unduh">
			<button onclick="window.location.href='lap_bkeluar.php';alert('Laporan disimpan di Download/laporan_barang_keluar.pdf') ">Unduh Laporan</button>
		</div>
	</div>
<?php
	include 'footer.php';
?>