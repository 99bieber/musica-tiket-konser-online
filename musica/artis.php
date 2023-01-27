<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
    <div class="bradcumbContent">

        <?php include "search.php"; ?>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->
<!-- ##### Music Player Area Start ##### -->
<div class="musica-music-artists-area d-flex flex-wrap clearfix">
    <?php
    include "proses/koneksi.php";
    $nama_artis = $_GET['nama_artis'];
    if ($nama_artis=='') {
        $data_arr = mysqli_query($koneksi,"SELECT * FROM artis");
    }else{
        $data_arr = mysqli_query($koneksi,"SELECT * FROM artis WHERE nama_artis='$nama_artis'");
    }
    while ($data_ar=mysqli_fetch_assoc($data_arr)) {
    ?>
    <!-- Music Search -->
    <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(proses/images/profile/<?php echo $data_ar['foto_artis']; ?>);">
        <!-- Content -->
        <div class="music-search-content">
            <?php
            if ($d['level']==1) {?>
            <a href="index_artis.php?page=artis_detail&id=<?= $data_ar['id_artis']; ?>"><h2><?php echo $data_ar['nama_artis'];?></h2></a>
            <?php }else{ ?>
            <a href="index_artis.php?page=artis_detail&id=<?= $data_ar['id_artis']; ?>"><h2><?php echo $data_ar['nama_artis'];?></h2></a>
            <?php }?>
        </div>
    </div>
    <?php } ?>
</div>
<!-- ##### Music Player Area End ##### -->