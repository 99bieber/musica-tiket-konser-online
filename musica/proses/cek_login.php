<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$data_ambil=mysqli_fetch_assoc($data);
	if ($data_ambil['level']==1) {
		$_SESSION['id_user'] = $data_ambil['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:cek_login2.php");
	} else if ($data_ambil['level']==0) {
		$_SESSION['id_user'] = $data_ambil['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../index_artis.php?page=home");
	} else{
		$_SESSION['id_user'] = $data_ambil['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../dasboard_proses.php");
	}
}else{
	echo "<script>alert('Data berhasil di Tambah');window.location=('../sign%20in.php');</script>";
}
?>