<?php
include 'koneksi.php';
$id_bayar = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM bayar_tiket WHERE id_bayar = '$id_bayar'");
$data_bayar = mysqli_fetch_assoc($data);
$id_chart = $data_bayar['id_chart'];
$data1 = mysqli_query($koneksi,"SELECT * FROM pembelian WHERE id_chart = '$id_chart'");
$data_pembelian = mysqli_fetch_assoc($data1);
$id_tiket = $data_pembelian['id_tiket'];
$total_kursi = $data_pembelian['qty'];
$data2 = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket = mysqli_fetch_assoc($data2);
$kursi = $data_tiket['qty_tiket'];

$sisa = $kursi - $total_kursi;
$proses = 4;
$kirim1 = mysqli_query($koneksi, "UPDATE bayar_tiket SET proses = '$proses' WHERE id_bayar = '$id_bayar'");
$kirim2 = mysqli_query($koneksi, "UPDATE pembelian SET proses = '$proses' WHERE id_chart = '$id_chart'");
$kirim3 = mysqli_query($koneksi, "UPDATE tiket SET qty_tiket = '$sisa' WHERE id_tiket = '$id_tiket'");
header("location:../konfirmasi_pembelian_proses.php");	
?>