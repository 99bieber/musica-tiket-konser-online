<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Tambah Deskripsi</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
     <!-- ##### About Us Area Start ##### -->
    <div class=" section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
        <div class="container">
            <div class="row">
            	<div class="col-12 col-lg-12">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="proses/deskirpsi_tambah.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="nama_artis" placeholder="Nama Lengkap Artis">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="cp" placeholder="Contact Person">
                                </div>
                                <div class="form-group">
                                   <textarea id="oke" name="deskripsi"></textarea>	
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