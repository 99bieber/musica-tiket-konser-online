<?php
include 'koneksi.php';

$id_tiket = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket = mysqli_fetch_assoc($data);
$data2 = mysqli_query($koneksi, "SELECT* FROM pembelian WHERE id_tiket = '$id_tiket' ");
$data_pembelian = mysqli_fetch_assoc($data2);
$id_chart = $data_pembelian['id_chart'];

$foto = $data_tiket['foto_tiket'];
if (file_exists('images/banner/'.$foto)) {
      unlink("images/banner/".$foto);
  }
mysqli_query($koneksi, "DELETE FROM tiket WHERE id_tiket = '$id_tiket'");
mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_tiket = '$id_tiket'");
mysqli_query($koneksi, "DELETE FROM bayar_tiket WHERE id_chart = '$id_chart'");


echo "<script>alert('Data berhasil di hapus');window.location=('../tabel_pembelian_proses.php');</script>";
?>