<?php 
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$id'");
$data_user = mysqli_fetch_assoc($data);
 ?>

 <style type="text/css">
     input[type="text"]:disabled {
  background: #dddddd;
}
 </style>
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
                            <form action="proses/edit_profile_user_proses.php?id=<?= $id;?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                	<p style="color: white;">Username</p>
                                    <input type="text" class="form-control" id="subject" name="username" placeholder="Username" value="<?php echo $data_user['username'];?>" style="color: black;" disabled>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Alamat</p>
                                   <input type="text" class="form-control" id="subject" name="alamat" placeholder="Nama Konser" value="<?php echo $data_user['Alamat'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Umur</p>
                                   <input type="text" class="form-control" id="subject" name="umur" placeholder="Nama Konser" value="<?php echo $data_user['Umur'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Tempat Lahir</p>
                                   <input type="text" class="form-control" id="subject" name="tempat_lahir" placeholder="Nama Konser" value="<?php echo $data_user['Tempat_Lahir'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Tanggal Lahir</p>
                                   <input type="date" class="form-control" id="subject" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $data_user['Tanggal_lahir'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Nomor Telp</p>
                                   <input type="text" class="form-control" id="subject" name="nomor_telp" placeholder="Nomor Telp Artis" value="<?php echo $data_user['no_telp'];?>" style="color: black;">  
                                </div>
                                 <div class="form-group">
                                 	<p style="color: white;">Foto</p>
                                    <input type="file"  name="foto1" placeholder="Foto" style="color: white;">
                                    <input type="hidden" name="foto_lama" value="<?php echo $data_user['foto']; ?>">
                                    <br>
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