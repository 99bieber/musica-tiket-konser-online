<?php 
include 'koneksi.php';
$id_chart = $_GET['id'];
$data_chart = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_chart = '$id_chart'");
$data_chart2 = mysqli_fetch_array($data_chart);
$kode_tiket = $data_chart2['kode_tiket'];
$proses = 2;
$data1 = mysqli_query($koneksi, "INSERT INTO bayar_tiket VALUE ('', '$id_chart', '$kode_tiket', '', '$proses')");
$data2 = mysqli_query($koneksi, "UPDATE pembelian SET proses = '$proses' WHERE id_chart = $id_chart");
echo "<script>alert('Kirim Bukti Pembayaran Terlebih Dahulu');window.location=('../index_artis.php?page=kirim_bukti&id=$id_chart');</script>";
 ?>