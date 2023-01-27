<?php
  include "koneksi.php";
  $username = $_POST['username'];
  $alamat = $_POST['alamat'];
  $umur = $_POST['umur'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $password = $_POST['password'];
  $telp = $_POST['telp'];
  $level= $_POST['angkat'];
  $submit =$_POST['submit']; 
  $nama_foto = uniqid();
  $foto = $_FILES['foto']['name'];
  
  if(isset($submit)){
  if(empty($username) or empty($password)){
      echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('../sign%20up.php') </script>";
  }else if ($level == 1) {
    if (!empty($foto)) {
      $tmp = $_FILES['foto']['tmp_name'];
      $ex = explode('.',$foto);
      $nama_baru = uniqid().'.'.strtolower($ex[1]);
      var_dump($nama_baru);
      move_uploaded_file($tmp, 'images/profile/'.$nama_baru);

    } else{
      $nama_baru = "default.jpg";
    }
    $level1 = "de-activ";
    $password = md5($_POST['password']);
    $ins =  mysqli_query($koneksi,"INSERT INTO user (username,password, Alamat, Umur, Tempat_Lahir, Tanggal_lahir, no_telp, foto, level, active)
        values ('$username', '$password','$alamat', '$umur', '$tempat_lahir', '$tanggal_lahir', '$telp', '$nama_baru' ,'$level', '$level1')");
    echo "<script>alert('Data berhasil di Tambah');window.location=('../sign%20in.php');</script>";
  }else{
    if (!empty($foto)) {
      $tmp = $_FILES['foto']['tmp_name'];
      $ex = explode('.',$foto);
      $nama_baru = uniqid().'.'.strtolower($ex[1]);   
      move_uploaded_file($tmp, 'images/profile/'.$nama_baru);

    } else{
      $nama_baru = "default.jpg";
    }
      $level1 = "active";
      $password = md5($_POST['password']);
      $ins =  mysqli_query($koneksi,"INSERT INTO user (username,password, Alamat, Umur, Tempat_Lahir, Tanggal_lahir, no_telp, foto, level, active)
        values ('$username', '$password','$alamat', '$umur', '$tempat_lahir', '$tanggal_lahir', '$telp', '$nama_baru' ,'$level', '$level1')");
      echo "<script>alert('Data berhasil di Tambah');window.location=('../sign%20in.php');</script>";
  }
}

?>