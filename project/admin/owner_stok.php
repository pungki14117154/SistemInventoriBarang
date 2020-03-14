<?php
	include 'owner_header.php';
?>

	<div class="content">
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
		$data = mysqli_query($koneksi,"select id_barang, Nama, jumlah_barang, stok.id_supplier, supplier.nama_supplier from stok join supplier on stok.id_supplier=supplier.id_supplier");

		while($d = mysqli_fetch_assoc($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['jumlah_barang']; ?></td>
				<td><?php echo $d['nama_supplier']; ?></td>
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