<?php
session_start();
include 'koneksi.php';
//ambil id
$id = $_GET['id'];
$id_user = $_SESSION['id_user'];
$kode_tiket = uniqid();
$qty = $_POST['qty'];
//ambil data
$proses = 1;
$coba = mysqli_query($koneksi, "INSERT INTO pembelian VALUE ('','$id','$id_user', '$kode_tiket', '$qty', '$proses')");
header("location: ../index_artis.php?page=chart");

?>