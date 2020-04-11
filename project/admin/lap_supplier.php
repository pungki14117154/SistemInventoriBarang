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
$pdf->Cell(17,0.7,"Daftar Supplier",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada tanggal : ".date("d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Supplier', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Alamat', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nomor Telepon', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "select nama_supplier, alamat, no_telepon from supplier");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $data['nama_supplier'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $data['alamat'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $data['no_telepon'],1, 1, 'C');

	$no++;
}

$pdf->Output("Daftar_Supplier.pdf","I");

?>

