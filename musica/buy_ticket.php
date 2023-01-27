<?php 
include 'proses/koneksi.php';
$id_tiket = $_GET['id'];
$data_tiket = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket_lengkap = mysqli_fetch_assoc($data_tiket);
$id_artis6 = $data_tiket_lengkap['id_artis_artis'];
$data_artis3 = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_user_user = '$id_artis6'");
$data = mysqli_fetch_assoc($data_artis3);
$id_artis4 = $data['id_artis'];
 ?>
<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Beli Tiket</h2>
                </div>
            </div>
        </div>
        <div  class="row">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="proses/images/banner/<?php echo $data_tiket_lengkap['foto_tiket']; ?>" alt="">
                    <?php
                    if($id_artis6 == $id){ ?>
                        <a href="index_artis.php?page=edit_profile&id=<?php echo $_GET['id']; ?>" class="btn musica-btn container">Edit Tiket</a>
                    
                    <?php }  ?>
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100">
                    <h4>    
                        Total TIket = <?php echo $data_tiket_lengkap['qty_tiket']; ?> <br>
                        Harga /Tiket = <?php echo $data_tiket_lengkap['harga_tiket']; ?>
                    </h4>
                    <form action="proses/beli_proses.php?id=<?php echo $data_tiket_lengkap['id_tiket'];?>" method="post">
                        <input type="number" name="qty" min="1" max="<?php echo $data_tiket_lengkap['qty_tiket'];?>" placeholder="MAX = <?php echo $data_tiket_lengkap['qty_tiket'];?>" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-success">Beli Tiket</button>
                        <a href="index_artis.php?page=artis_detail&id=<?php echo $id_artis4;?>" class="btn btn-danger">Batal</a>    
                    </form> 
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
