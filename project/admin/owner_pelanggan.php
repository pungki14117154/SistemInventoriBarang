<?php
	include 'owner_header.php';
?>

	<div class="content"> 
	<h2>Data Pelanggan</h2>

	<form action="owner_cari.php" method="get">
		<div class="cari">
			<input type="text" class="hint" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari pelanggan ..." name="cari_p">	
			<input type="submit" class="tombol_submit"  value="cari">
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
			<button onclick="window.location.href='lap_pelanggan.php';alert('Laporan disimpan di Download/Daftar_Pelanggan.pdf') ">Unduh Laporan</button>
		</div>
</div>



<?php
	include 'footer.php';
?>