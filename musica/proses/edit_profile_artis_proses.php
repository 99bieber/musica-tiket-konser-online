<?php

// Load file koneksi.php
include "koneksi.php";

// Ambil Id
$id_artis = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$nama_artis = $_POST['nama_artis'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nomor_telp = $_POST['nomor_telp'];
$cp = $_POST['cp'];
$password = md5($_POST['password']);
$data1 = mysqli_query($koneksi,"SELECT * FROM artis WHERE id_artis='$id_artis'");
$data2 = mysqli_fetch_assoc($data1);
$data3 = $data2['id_user_user'];

//foto tek
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$foto_lama = $_POST['foto_lama'];
$ex = explode('.',$foto);
$nama_baru = uniqid().'.'.strtolower($ex[1]);
var_dump($nama_artis);



// Cek apakah user ingin mengubah fotonya atau tidak
  if (!empty($foto)) {
    move_uploaded_file($tmp,'images/profile/'.$nama_baru);
    var_dump($nama_baru);
    if (file_exists('images/profile/'.$foto_lama)) {
      unlink("images/profile/".$foto_lama);
    }
      

  } else{
    $nama_baru = $data2['foto_artis'];
  }

    // Jika Password Kosong :
    if ($password=="d41d8cd98f00b204e9800998ecf8427e") {
      var_dump($password);
      mysqli_query($koneksi,"UPDATE artis SET nama_artis='$nama_artis', deskripsi_artis = '$deskripsi', foto_artis = '$nama_baru', cp = '$cp'  WHERE id_artis = '$id_artis'");
      mysqli_query($koneksi, "UPDATE user SET Alamat = '$alamat', Tempat_Lahir = '$tempat_lahir', Tanggal_lahir = '$tanggal_lahir', no_telp = '$nomor_telp', foto = '$nama_baru' WHERE id_user = '$data3'");
    } else {
      var_dump($nama_artis);
      mysqli_query($koneksi,"UPDATE artis SET nama_artis='$nama_artis', deskripsi_artis = '$deskripsi', foto_artis = '$nama_baru', cp = '$cp'  WHERE id_artis = '$id_artis'");
      mysqli_query($koneksi, "UPDATE user SET password = '$password', Alamat = '$alamat', Tempat_Lahir = '$tempat_lahir', Tanggal_lahir = '$tanggal_lahir', no_telp = '$nomor_telp', foto = '$nama_baru' WHERE id_user = '$data3'");
      }
      echo "<script>alert('Data Berhasil Di Update'); window.location=('../index_artis.php?page=edit_profile&id=$id_artis') </script>";
?>