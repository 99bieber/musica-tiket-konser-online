<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
$data_user = mysqli_fetch_assoc($data);
$id_user = $data_user['id_user'];
$data3 = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_user_user = '$id_user'");
$data_artis = mysqli_fetch_assoc($data3);
$id_artis = $data_artis['id_artis'];
$data4 = mysqli_query($koneksi,"SELECT * FROM tiket WHERE id_artis_artis = '$id_artis'");
$data_tiket = mysqli_fetch_assoc($data4);
$id_tiket = $data_tiket['id_tiket'];
$data5 = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_tiket = '$id_tiket'");
$data_pembelian2 = mysqli_fetch_assoc($data5);
$id_chart2 = $data_pembelian2['id_chart'];
$data2 = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_user = '$id_user'");
$data_pembelian = mysqli_fetch_assoc($data2);
$id_chart = $data_pembelian['id_chart'];
$foto = $data_user['foto'];
if (file_exists('images/profile/'.$foto)) {
      unlink("images/profile/".$foto);
  }

if ($data_user['level']==0) {
	mysqli_query($koneksi,"delete from user where id_user='$id'");
	mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_user = '$id_user'");
	mysqli_query($koneksi, "DELETE FROM bayar_tiket WHERE id_chart= '$id_chart'");
}elseif ($data_user['level']==1) {
	mysqli_query($koneksi,"delete from user where id_user='$id'");
	mysqli_query($koneksi, "DELETE FROM artis WHERE id_user_user = '$id_user'");
	mysqli_query($koneksi, "DELETE FROM tiket WHERE id_artis_artis= '$id_artis'");
	mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_tiket = '$id_tiket'");
	mysqli_query($koneksi, "DELETE FROM bayar_tiket WHERE id_chart = '$id_chart2'");

}

// menghapus data dari database

// mengalihkan halaman kembali ke index.php
header("location:../tabel_user_proses.php");

?>