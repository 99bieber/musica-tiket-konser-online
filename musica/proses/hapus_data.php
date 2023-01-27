<?php
include 'koneksi.php';
$tanggal_sekarang = date("Y-m-d");
$data2 = mysqli_query($koneksi, "SELECT * FROM tiket");
while ($data1 = mysqli_fetch_array($data2)) {
	$data=mysqli_query($koneksi, "DELETE FROM tiket where tanggal_tiket = '$tanggal_sekarang'");
}
?>
<meta http-equiv="refresh" content="86400‬">