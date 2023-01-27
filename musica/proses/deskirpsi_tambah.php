<?php
session_start();
include 'koneksi.php';
$id = $_SESSION['id_user'];
$deskripsi = $_POST['deskripsi'];
$contact = $_POST['cp'];
$nama_artis = $_POST['nama_artis'];
$btn_oke = $_POST['deskripsi'];
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$id'");
$data_lengkap = mysqli_fetch_assoc($data);
$foto = $data_lengkap['foto'];

if (isset($btn_oke)) {
	if (empty($deskripsi)) {
 	echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('../index_artis.php?page=deskripsi') </script>";
 } else{
 	mysqli_query($koneksi,"INSERT INTO artis VALUES ('','$id','$nama_artis','$deskripsi','$foto', '$contact')");
    echo "<script>alert('Data berhasil di Tambah');window.location=('../index_artis.php');</script>";
 }

}
?>