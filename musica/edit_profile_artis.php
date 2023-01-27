<?php
$data_ar1 = $_GET['id'];
$data_ar2 = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_artis = '$data_ar1'");
$data_lengkap = mysqli_fetch_assoc($data_ar2);
$id_artis = $data_lengkap['id_user_user'];
$data_tiket = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_artis_artis = '$id_artis'");
$data_user = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_artis'");
$data_user1 = mysqli_fetch_assoc($data_user);
$tanggal=$data_user1['Tanggal_lahir'];
?>
<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Edit Profile</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
        <div class=" section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
        <div class="container">
            <div class="row">
            	<div class="col-12 col-lg-12">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="proses/edit_profile_artis_proses.php?id=<?= $data_ar1;?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                	<p style="color: white;">Nama Artis</p>
                                    <input type="text" class="form-control" id="subject" name="nama_artis" placeholder="Nama Konser" value="<?php echo $data_lengkap['nama_artis'];?>" style="color: black;">
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Deskripsi</p>
                                   <textarea id="oke" name="deskripsi"><?php echo $data_lengkap['deskripsi_artis'];?></textarea>  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Alamat</p>
                                   <input type="text" class="form-control" id="subject" name="alamat" placeholder="Nama Konser" value="<?php echo $data_user1['Alamat'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Tempat Lahir</p>
                                   <input type="text" class="form-control" id="subject" name="tempat_lahir" placeholder="Nama Konser" value="<?php echo $data_user1['Tempat_Lahir'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Tanggal Lahir</p>
                                   <input type="date" class="form-control" id="subject" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $data_user1['Tanggal_lahir'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Nomor Telp Artis</p>
                                   <input type="text" class="form-control" id="subject" name="nomor_telp" placeholder="Nomor Telp Artis" value="<?php echo $data_user1['no_telp'];?>" style="color: black;">  
                                </div>
                                 <div class="form-group">
                                 	<p style="color: white;">Foto</p>
                                    <input type="file"  name="foto" placeholder="Foto" style="color: white;">
                                    <input type="hidden" name="foto_lama" value="<?php echo $data_lengkap['foto_artis']; ?>">
                                    <?php var_dump($data_lengkap['foto_artis']); ?>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="foto1" value="">Centang Jika Akan Ganti Foto 
                                </div>
                                <div class="form-group">
                                 	<p style="color: white;">Contact Person</p>
                                    <input type="text" class="form-control" name="cp" placeholder="Contact Person" style="color: black;" value="<?php echo $data_lengkap['cp']; ?>">
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Password</p>
                                    <input type="Password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <button class="btn musica-btn mt-20" name="submit" type="submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->
 
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>	
                <script type="text/javascript">
                	window.onload=function(){
                		CKEDITOR.replace('oke');
                	}
                </script>		