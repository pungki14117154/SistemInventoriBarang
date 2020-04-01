<?php
	include 'owner_header.php';
?>

	<div class="content">
	<h2>Data Barang Keluar</h2>
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
		$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_keluar, id_pelanggan from barang_keluar");

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