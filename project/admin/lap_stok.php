<?php
include '../connect.php';
require('../pdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PAMAN TOYS',0,'L');   
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. sana sini',0,'L');
$pdf->Line(1,3.1,20,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,20,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->ln(1);
$pdf->Cell(17,0.7,"Laporan Stok",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada tanggal : ".date("d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'ID Barang', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Supplier', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'ID Supplier', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "select * from stok join supplier on stok.id_supplier=supplier.id_supplier");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(2, 0.8, $data['id_barang'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $data['Nama'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $data['jumlah_barang'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $data['nama_supplier'], 1, 0,'C');
	$pdf->Cell(2, 0.8, $data['id_supplier'],1, 1, 'C');

	$no++;
}

$pdf->Output("laporan_stok.pdf","I");

echo "<script>alert('Laporan disimpan di Download/laporan_stok.pdf');window.location='gudang_stok.php'</script>";

?>

