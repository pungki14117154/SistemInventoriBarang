<?php
	include 'kasir_header.php';
?>

	<div class="content">
	<h2>Data Stok Barang</h2>
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
		$data = mysqli_query($koneksi,"select id_barang, Nama, jumlah_barang, supplier.nama_supplier, supplier.id_supplier from stok join supplier on stok.id_supplier=supplier.id_supplier");

		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_barang']; ?></td>
				<td width="50%"><?php echo $d['Nama']; ?></td>
				<td width="40%"><?php echo $d['jumlah_barang']; ?></td>
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