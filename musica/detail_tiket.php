<?php 
$id_tiket = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket = mysqli_fetch_assoc($data);
$id_artis = $data_tiket['id_artis_artis'];
$data2 = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_user_user = '$id_artis'");
$data_artis = mysqli_fetch_assoc($data2);
 ?>
<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Detail Tiket</h2>
                </div>
            </div>
        </div>
        <div  class="row">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="proses/images/banner/<?php echo $data_tiket['foto_tiket'];?>" alt="">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100">
                    <h4><?php echo $data_tiket['nama_tiket']; ?></h4>
                    <h5 style="color: white;">Deskripsi</h5>
                    <font size="3"><?php echo $data_tiket['deskripsi_tiket'];?></font> <p></p>
                    <h6 style="color: white;"> <i class="fas fa-music"></i> &nbsp;<?= $data_artis['nama_artis']; ?>
                    <br>
                   <a href="https://www.google.com/maps/search/<?php echo $data_tiket['lokasi']; ?>" target="_blank" style="color: white;"> <i class="fas fa-street-view"></i> &nbsp;<?php echo $data_tiket['lokasi']; ?></a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=+62<?= $data_tiket['nomor_telp'];?>&text=Permisi%20Saya%20Akan Membayar Tiket Konsernya" target="_blank" style="color: white;">
                        <i class="fab fa-whatsapp"></i> &nbsp;<?php echo ' '.$data_tiket['nomor_telp']; ?>
                    </a>
                    </h6>
                    <?php 
                    if($id_artis!=$id){ ?>
                    <div class="buy-tickets">
                        <a href="index_artis.php?page=buy_ticket&id=<?php echo $data_tiket['id_tiket']; ?>" class="btn musica-btn col-12">Rp. <?php echo $data_tiket['harga_tiket']; ?></a>
                    </div>
                    <?php }else{?>
                        <a href="" class="btn musica-btn disabled col-12">Rp. <?php echo $data_tiket['harga_tiket']; ?></a><br><br>
                        <a href="index_artis.php?page=edit_tiket&id=<?php echo $id_tiket; ?>" class="btn btn-danger col-12">Edit Tiket</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>