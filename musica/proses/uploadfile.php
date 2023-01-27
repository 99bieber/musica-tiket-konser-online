<?php
session_start();
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_SESSION['id_user'];
$data = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_user_user = '$id'");
$data_artis = mysqli_fetch_assoc($data);
$id_artis = $data_artis['id_artis'];
$nama = $_POST['nama_tiket'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$telp = $_POST['cp'];
$deskripsi = $_POST['deskripsi'];
$jumlah_tiket = $_POST['jml_tiket'];
$alamat = $_POST['lokasi'];
$jam = $_POST['jam'];
$jam1 = date('h:i A', strtotime($jam));
var_dump($id,$nama,$harga,$tanggal,$telp, $deskripsi, $jumlah_tiket, $alamat, $jam1);
$foto = $_FILES['foto_baner']['name'];
 $tmp = $_FILES['foto_baner']['tmp_name'];
  $ex = explode('.',$foto);
      $nama_baru = uniqid().'.'.strtolower($ex[1]);   
      move_uploaded_file($tmp, 'images/banner/'.$nama_baru);

  // Proses simpan ke Database
  $query = mysqli_query($koneksi,"INSERT INTO tiket VALUES(' ', '$id','$nama', '$harga', '$tanggal', '$nama_baru', '$deskripsi', '$telp', '$jumlah_tiket', '$alamat', '$jam1')") ;
  echo "<script>alert('Data berhasil di Tambah');window.location=('../index_artis.php?page=artis_detail&id=$id_artis');</script>";
?>