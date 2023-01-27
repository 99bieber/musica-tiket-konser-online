<?php 
$id_tiket = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket = mysqli_fetch_assoc($data);
 ?>    
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Edit Tiket</h2>
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
                            <form action="proses/edit_tiket_proses.php?id=<?= $id_tiket;?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                	<p style="color: white;">Nama Konser</p>
                                    <input type="text" class="form-control" id="subject" name="nama_konser" placeholder="Username" value="<?php echo $data_tiket['nama_tiket'];?>" style="color: black;" >
                                    <br>
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Harga</p>
                                   <input type="text" class="form-control" id="subject" name="Harga" placeholder="Harga" value="<?php echo $data_tiket['harga_tiket'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Deskripsi</p>
                                   <textarea id="oke" name="deskripsi"><?php echo $data_tiket['deskripsi_tiket'];?></textarea>  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Qty Tiket</p>
                                   <input type="text" class="form-control" id="subject" name="qty" placeholder="Qty" value="<?php echo $data_tiket['qty_tiket'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Lokasi</p>
                                   <input type="text" class="form-control" id="subject" name="Lokasi" placeholder="Lokasi" value="<?php echo $data_tiket['lokasi'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Tanggal Konser</p>
                                   <input type="date" class="form-control" id="subject" name="tanggal_konser" placeholder="Tanggal Konser" value="<?php echo $data_tiket['tanggal_tiket'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">CP</p>
                                   <input type="text" class="form-control" id="subject" name="nomor_telp" placeholder="Nomor Telp Artis" value="<?php echo $data_tiket['nomor_telp'];?>" style="color: black;">  
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Jam</p>
                                   <input type="time" class="form-control" id="subject" name="jam" placeholder="Nomor Telp Artis" value="<?php echo $data_tiket['jam'];?>" style="color: black;">  
                                </div>
                                 <div class="form-group">
                                 	<p style="color: white;">Foto</p>
                                    <input type="file"  name="foto1" placeholder="Foto" style="color: white;">
                                    <input type="hidden" name="foto_lama" value="<?php echo $data_user['foto']; ?>">
                                    <br>
                                </div>
                                <button class="btn musica-btn mt-20" name="submit" type="submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <script type="text/javascript" src="ckeditor/ckeditor.js"></script>    
                <script type="text/javascript">
                    window.onload=function(){
                        CKEDITOR.replace('oke');
                    }
                </script>       