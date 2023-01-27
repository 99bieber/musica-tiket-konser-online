<?php 
include 'koneksi.php';

$id_user = $_GET['id'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_telp = $_POST['nomor_telp'];
$password = md5($_POST['password']);

//ambil data
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
$data_user = mysqli_fetch_assoc($data);
$username = $data_user['username'];

//foto tek
$foto = $_FILES['foto1']['name'];
$tmp = $_FILES['foto1']['tmp_name'];
$foto_lama = $_POST['foto_lama'];
$ex = explode('.',$foto);


if (!empty($foto)) {
	$nama_baru = uniqid().'.'.strtolower($ex[1]);
	move_uploaded_file($tmp,'images/profile/'.$nama_baru);
    var_dump($nama_baru);
    if (file_exists('images/profile/'.$foto_lama)) {
      unlink("images/profile/".$foto_lama);
  }
} else{
	$nama_baru = $data_user['foto'];
 }

if ($password=="d41d8cd98f00b204e9800998ecf8427e") {
	$masuk = mysqli_query($koneksi, "UPDATE user SET username = '$username', Alamat = '$alamat', Umur = '$umur', Tempat_Lahir = '$tempat_lahir', Tanggal_lahir = '$tanggal_lahir', no_telp = '$no_telp', foto = '$nama_baru' WHERE id_user = '$id_user' ");
}else{
	$masuk = mysqli_query($koneksi, "UPDATE user SET username = '$username', password = '$password', Alamat = '$alamat', Umur = '$umur', Tempat_Lahir = '$tempat_lahir', Tanggal_lahir = '$tanggal_lahir', no_telp = '$no_telp', foto = '$nama_baru' WHERE id_user = '$id_user' ");
}
echo "<script>alert('Data berhasil di Update');window.location=('../index_artis.php?page=edit_profile_user&id=$id_user');</script>";

 ?>
