<?php
session_start();
include "koneksi.php";
$id = $_SESSION['id_user'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
$data_semua = mysqli_fetch_assoc($data);
$data2 = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_user_user='$id'");
$data_semua2 = mysqli_fetch_assoc($data2);
if ($data_semua['level']==1) {
	if ($data_semua2['id_user_user']==$data_semua['id_user']) {
		header("location:/musica/index_artis.php?page=home");
	}else{
		echo "<script>alert('Anda Belum Memasukkan Detail Artis');window.location=('../index.php?page=deskripsi');</script>";	
	}	
}else{
	header("location:/musica/index.php");
}

?>