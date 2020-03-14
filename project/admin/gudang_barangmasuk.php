<?php
	include 'gudang_header.php';
?>

	<div class="content">
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
		$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_masuk, id_supplier from barang_masuk");

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

	</div>

<?php
	include 'footer.php';
?>