<?php
	include 'owner_header.php';
?>

	<div class="content"> 
	<h2>Data Pelanggan</h2>

	<form action="owner_cari.php" method="get">
		<div class="cari">
			<h3>Cari: </h3>
			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari pelanggan ..." name="cari_p">	
		</div>
	</form>

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
		if (isset($_GET['cari_p'])){
			$cari_p = $_GET['cari_p'];
			$data = mysqli_query($koneksi,"select * from pelanggan where nama_pelanggan like '%$cari_p%'");
		}else{
			$data = mysqli_query($koneksi,"select * from pelanggan");
		}
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
		<div class="container-btn-unduh">
			<button onclick="document.getElementById('').style.display='block'">Unduh Laporan</button>
		</div>
</div>



<?php
	include 'footer.php';
?>