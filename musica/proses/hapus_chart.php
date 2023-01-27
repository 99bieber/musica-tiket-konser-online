<?php 
include "koneksi.php";
$id_chart = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_chart = '$id_chart'");
 echo "<script>alert('Berhasil Membatalkan Pemesanan');window.location=('../index_artis.php?page=chart');</script>";
 ?>