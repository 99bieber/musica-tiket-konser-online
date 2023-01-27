<?php
	include 'koneksi.php';

	$id_bayar = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM bayar_tiket WHERE id_bayar = '$id_bayar'");
	$data_lenkap = mysqli_fetch_assoc($data);
	$id_chart = $data_lenkap['id_chart'];
  	$nama_foto = uniqid();
  	$foto = $_FILES['foto']['name'];
	if ($foto!='') {
    	$tmp = $_FILES['foto']['tmp_name'];
    	$ex = explode('.',$foto);
    	$nama_baru = uniqid().'.'.strtolower($ex[1]);
    	var_dump($nama_baru);
    	move_uploaded_file($tmp, 'images/bukti_tranfer/'.$nama_baru);
    } else{
    	echo "<script>alert('Harus Memasukkan Bukti Terlebih Dahulu');window.location=('../index_artis.php?page=kirim_bukti&id=$id_chart');</script>";
    }
    $proses = 3;
    $masuk = mysqli_query($koneksi, "UPDATE bayar_tiket SET bukti_transfer='$nama_baru', proses = '$proses' WHERE id_bayar = '$id_bayar'");
    $masuk2 = mysqli_query($koneksi, "UPDATE pembelian SET proses = '$proses' WHERE id_chart = '$id_chart'");
    echo "<script>alert('Data berhasil di Tambah');window.location=('../index_artis.php?page=chart');</script>";
?>