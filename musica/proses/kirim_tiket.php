<?php 
include 'koneksi.php';
$id = $_GET['id'];
$proses = 5;
mysqli_query($koneksi, "UPDATE pembelian SET proses= '$proses' WHERE id_chart = '$id'");
mysqli_query($koneksi, "UPDATE bayar_tiket SET proses = '$proses' WHERE id_chart = '$id'");
echo "<script>alert('Tiket Berhasil Dikirim');window.location=('../index_artis.php?page=transaksi');</script>";
 ?>