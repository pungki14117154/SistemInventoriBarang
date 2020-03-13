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
			<th>ID Supplier</th>
			<th>OPSI</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select id_barang, Nama, jumlah_barang, id_supplier from stok");

		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['jumlah_barang']; ?></td>
				<td><?php echo $d['id_supplier']; ?></td>
				<td width="50%">
					<a href="#?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="#?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
	<?php 
		}
	?>

	</table>
	</div>



<?php
	include 'footer.php';
?>