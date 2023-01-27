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
<!-- ##### About Us Area Start ##### -->
<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Artist Bio</h2>
                </div>
            </div>
        </div>
        <div  class="row">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="proses/images/profile/<?php echo $data_lengkap['foto_artis'];?>" alt="">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100">
                    <h4>Hello, <?php echo $data_lengkap['nama_artis'];?></h4>
                    <h5 style="color: white;">Deskripsi</h5>
                    <font size="20"><?php echo $data_lengkap['deskripsi_artis'];?></font> <p></p>
                    <h6 style="color: white;"> <i class="fas fa-birthday-cake"></i> &nbsp;<?= date('d M Y', strtotime($tanggal)); ?>
                    <br>
                    <i class="fas fa-street-view"></i> &nbsp;<?php echo $data_user1['Tempat_Lahir']; ?>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=+62<?= $data_lengkap['cp'] ?>&text=Saya melihat tiket " target="_blank" style="color: white; font-size: 20px;">
                        <i class="fab fa-whatsapp"></i> &nbsp;<?php echo ' '.$data_lengkap['cp']; ?>
                    </a>
                    </h6>
                    <?php
                    if($id_artis==$id){ ?>
                    <div class="buy-tickets">
                        <a href="index_artis.php?page=edit_profile&id=<?php echo $_GET['id']; ?>" class="btn musica-btn">Edit Profile</a>
                    </div>
                    <?php }  ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
?>
<!-- ##### About Us Area End ##### -->
<!-- ##### Upcoming Shows Area Start ##### -->
<div class="upcoming-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Konser Mendatang</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Upcoming Shows Content -->
                <div class="upcoming-shows-content">
                    <?php
                    while ( $data_tiket_lengkap = mysqli_fetch_assoc($data_tiket)) {
                    ?>
                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2><?php
                            $hari =  $data_tiket_lengkap['tanggal_tiket'];
                            echo date('d', strtotime($hari));
                            
                            ?> <span><?php echo date('M', strtotime($hari)); ?></span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="proses/images/banner/<?php echo $data_tiket_lengkap['foto_tiket']; ?>" alt="">
                            </div>
                            <div class="shows-name">
                                <h6><a href="index_artis.php?page=detail_tiket&id=<?php echo $data_tiket_lengkap['id_tiket']; ?>" style="color: white;"><b><?php echo $data_tiket_lengkap['nama_tiket']; ?></b></a></h6>
                                <p><a href="https://www.google.com/maps/search/<?php echo $data_tiket_lengkap['lokasi']; ?>" target="_blank" style="color: white;"><?php echo $data_tiket_lengkap['lokasi']; ?></a></p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <h6 style="color: white;">Sisa Tiket</h6>
                            <p><?php echo $data_tiket_lengkap['qty_tiket']; ?></p>
                        </div>
                        <div class="shows-time">
                            <h6 style="color: white;">Jam</h6>
                            <p><?php echo date("H:i", strtotime($data_tiket_lengkap['jam'])); ?></p>
                        </div>
                        <div class="buy-tickets">
                            <?php if ($id_artis!=$id){ ?>
                                <a href="index_artis.php?page=buy_ticket&id=<?php echo $data_tiket_lengkap['id_tiket']; ?>" class="btn musica-btn">Rp. <?php echo number_format($data_tiket_lengkap['harga_tiket']); ?></a><br>
                            <?php }else{ ?>
                            <a href="index_artis.php?page=edit_tiket&id=<?php echo $data_tiket_lengkap['id_tiket']; ?>" class="btn btn-primary">Edit Tiket</a><br>
                            <a href="proses/hapus_tiket.php?id=<?php echo $data_tiket_lengkap['id_tiket']; ?>&id_artis=<?php echo $data_ar1; ?>" class="btn btn-danger">Hapus Tiket</a>
                        <?php } ?>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- ##### Upcoming Shows Area End ##### -->