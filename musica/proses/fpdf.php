<?php 
include 'koneksi.php';
include '../fpdf17/fpdf.php';
include '../phpqrcode/qrlib.php';

$id = $_GET['id'];

QRcode::png($id,'test.png');

$pdf = new FPDF('p','mm');

$pdf->AddPage();

$pdf->image("http://localhost/musica/proses/qr_generator.php?id=$id",10,10,200,200,"png");

$pdf->Output('Tiket.pdf','D');
 ?>