<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Welcome <span>Welcome</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">
                    <?php
                    if ($d['level']==1) {
                    echo $data_artis['nama_artis'];
                    }else{
                    echo $_SESSION['username'];
                    }
                    ?>
                </p>
            </div>
            <!-- Big Text -->
            <h2 class="big-text">Kenser</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Cari Konser</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-4">
                    <div class="about-thumbnail mb-100">
                        <img src="proses/images/profile/<?php echo $d['foto'];?>" alt="">
                        <?php echo $d['foto'];?>
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4>Hallo, <?php
                        if ($d['level']==1) {
                        echo $data_artis['nama_artis'];
                        }else{
                        echo $_SESSION['username'];
                        }
                        ?></h4>
                        <p>Kamu dapat mencari tiket konser seusai keinginan kamu loh. Jadi tunggu apa lagi langsung saja pencet tombol "Cari Konser" dibawah ini.</p>
                        <a href="index_artis.php?page=artis&nama_artis=" class="btn musica-btn mt-20">Cari Konser</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->
    
    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">
                        <!-- Single Music Player -->
                        <?php
                        include "proses/koneksi.php";
                        $data_arr = mysqli_query($koneksi,"SELECT * FROM artis");
                        while ($data_ar=mysqli_fetch_assoc($data_arr)) {
                        ?>
                        <div class="single-music-player">
                            <img src="proses/images/profile/<?php echo $data_ar['foto_artis'];?>" alt="">
                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <?php
                                    if ($d['level']==1) {?>
                                    <a href="index_artis.php?page=artis_detail&id=<?= $data_ar['id_artis']; ?>"><h5><?php echo $data_ar['nama_artis'];?></h5></a>
                                    <?php }else{ ?>
                                    <a href="index.php?page=artis_detail&id=<?= $data_ar['id_artis']; ?>"><h5><?php echo $data_ar['nama_artis'];?></h5></a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### --
    <!-- ##### Music Artists Area Start ##### -->
    <div class="musica-music-artists-area d-flex flex-wrap clearfix">
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Music</h2>
                <h4>Search for the best music</h4>
            </div>
        </div>
        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Artists</h2>
                <h4>Search for the best artists</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->