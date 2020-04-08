<?php
	include 'owner_header.php';
?>

	<div class="content">
	<h2>Data Barang Keluar</h2>

	<form action="owner_cari.php" method="get">
		<div class="cari">
			<h3>Cari: </h3>
			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari barang keluar ..." name="cari_bk">	
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
			<button onclick="document.getElementById('').style.display='block'">Unduh Laporan</button>
		</div>
	</div>
<?php
	include 'footer.php';
?>