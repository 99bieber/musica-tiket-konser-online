<?php
session_start();
include 'koneksi.php';
$coba1 = $_SESSION['id_user'];
$data = mysqli_query($koneksi,"select * from user where id_user = '$coba1'");
$d = mysqli_fetch_assoc($data);
if ($d['active']=='de-activ') {
	echo "<script>alert('Akun Anda Belum dikonfirmasi, Tunggu Sampai Dikonfirmasi Dulu :)');window.location=('../sign%20in.php');</script>";
	session_destroy();
}else if ($d['active']=='active') {
		header("location:deskripsi_cek.php");
}
?>