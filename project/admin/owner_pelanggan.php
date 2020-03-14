<?php
	include 'owner_header.php';
?>

	<div class="content">
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Pelanggan</th>
			<th>Nama</th>
			<th>Tipe</th>
		</tr>
	<?php 
		include '../connect.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pelanggan");

		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_pelanggan']; ?></td>
				<td width="70%"><?php echo $d['nama_pelanggan']; ?></td>
				<td><?php echo $d['tipe']; ?></td>
			</tr>
	<?php 
		}
	?>

	</table>
	</div>



<?php
	include 'footer.php';
?>