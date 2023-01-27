<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Upload Konser</h2>
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
                            <form action="proses/uploadfile.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                	<p style="color: white;">Nama Konser</p>
                                    <input type="text" class="form-control" id="subject" name="nama_tiket" placeholder="Nama Konser" style="color: black;">
                                </div>
                                <div class="form-group">
                                	<p style="color: white;">Harga Tiket</p>
                                    <input type="text" class="form-control" id="subject" name="harga" placeholder="Harga Tiket" style="color: black;">
                                </div>
                                <div class="form-group">
                                	<p style="color: white;">Tanggal Konser</p>
                                    <input type="date" class="form-control" id="subject" name="tanggal" placeholder="Tanggal" style="color: black;">
                                </div>
                                 <div class="form-group">
                                 	<p style="color: white;">Masukkan Banner</p>
                                    <input type="file"  name="foto_baner" placeholder="Banner" style="color: white;">
                                </div>
                                <div class="form-group">
                                	<p style="color: white;">Deskripsi</p>
                                   <textarea id="oke" name="deskripsi"></textarea>	
                                </div>
                                <div class="form-group">
                                 	<p style="color: white;">Contact Person</p>
                                    <input type="text" class="form-control" name="cp" placeholder="Contact Person" style="color: black;">
                                </div>
                                <div class="form-group">
                                 	<p style="color: white;">Jumlah Tiket</p>
                                    <input type="text" class="form-control" name="jml_tiket" placeholder="Qty" style="color: black;">
                                </div>
                                <div class="form-group">
                                    <p style="color: white;">Jam</p>
                                    <input class="form-control" type="time" id="appt" max="24:00" name="jam" style="color: black;">
                                </div>
                                <div class="form-group">
                                 	<p style="color: white;">Lokasi</p>
                                    <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" style="color: black;">
                                </div>
                                <button class="btn musica-btn mt-20" type="submit">send</button>
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