<?php
	include 'owner_header.php';
?>

	<div class="content">
	<h2>Data Supplier</h2>
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
		$data = mysqli_query($koneksi,"select nama_supplier, alamat, no_telepon from supplier");

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
	    <div class="container-btn-unduh">
			<button onclick="document.getElementById('').style.display='block'">Unduh Laporan</button>
		</div>
	</div>



<?php
	include 'footer.php';
?>