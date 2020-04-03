<?php
	include 'owner_header.php';
?>

	<div class="content">
	<h2>Data Barang Masuk</h2>

	<form action="owner_cari.php" method="get">
		<div>
			<input type="text" value="" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Cari barang masuk ..." name="cari_bm">	
		</div>
	</form>

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
		if (isset($_GET['cari_bm'])){
			$cari_bm = $_GET['cari_bm'];
			$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_masuk, id_supplier from barang_masuk where nama_barang like '%$cari_bm%' ");
		}else{
			$data = mysqli_query($koneksi,"select id_barang, nama_barang, jumlah, tgl_masuk, id_supplier from barang_masuk");
		}
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
	    <div class="container-btn-unduh">
			<button onclick="document.getElementById('').style.display='block'">Unduh Laporan</button>
		</div>
	</div>

<?php
	include 'footer.php';
?>