<?php 
include 'koneksi.php';

$id_tiket = $_GET['id'];
$nama_konser = $_POST['nama_konser'];
$harga = $_POST['Harga'];
$deskripsi = $_POST['deskripsi'];
$qty = $_POST['qty'];
$lokasi = $_POST['Lokasi'];
$tanggal = $_POST['tanggal_konser'];
$cp = $_POST['nomor_telp'];
$jam = $_POST['jam'];

$data = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket = mysqli_fetch_assoc($data);

//foto tek
$foto = $_FILES['foto1']['name'];
$tmp = $_FILES['foto1']['tmp_name'];
$foto_lama = $_POST['foto_lama'];
$ex = explode('.',$foto);


if (!empty($foto)) {
	$nama_baru = uniqid().'.'.strtolower($ex[1]);
	move_uploaded_file($tmp,'images/profile/'.$nama_baru);
    var_dump($nama_baru);
    if (file_exists('images/banner/'.$foto_lama)) {
      unlink("images/banner/".$foto_lama);
  }
} else{
	$nama_baru = $data_tiket['foto_tiket'];
 }

$masuk = mysqli_query($koneksi, "UPDATE tiket SET nama_tiket = '$nama_konser', harga_tiket = '$harga', tanggal_tiket = '$tanggal', foto_tiket = '$nama_baru', deskripsi_tiket = '$deskripsi', nomor_telp = '$cp', qty_tiket = '$qty', lokasi = '$lokasi', jam = '$jam' WHERE id_tiket = '$id_tiket'");

echo "<script>alert('Data berhasil di Update');window.location=('../index_artis.php?page=detail_tiket&id=$id_tiket`');</script>";
 ?>