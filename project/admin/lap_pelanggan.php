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
$pdf->Cell(17,0.7,"Daftar Pelanggan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada tanggal : ".date("d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'ID Pelanggan', 1, 0, 'C');
$pdf->Cell(10, 0.8, 'Nama Pelanggan', 1, 0, 'C');
$pdf->Cell(1, 0.8, 'Tipe', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "select * from pelanggan");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $data['id_pelanggan'],1, 0, 'C');
	$pdf->Cell(10, 0.8, $data['nama_pelanggan'], 1, 0,'C');
	$pdf->Cell(1, 0.8, $data['tipe'],1, 1, 'C');

	$no++;
}

$pdf->Output("Daftar_Pelanggan.pdf","I");

?>