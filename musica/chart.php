<?php
$data_tiket = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_user = '$id'");
?>
<style type="text/css">
    .disabled {
    pointer-events: none;
}
</style>
<div class="upcoming-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Chart</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Upcoming Shows Content -->
                <div class="upcoming-shows-content">
                    <?php
                    while ($data_tiket_lengkap3 = mysqli_fetch_assoc($data_tiket)) {
                        $proses = $data_tiket_lengkap3['proses'];
                        $data_tiket2 = $data_tiket_lengkap3['id_tiket'];
                        $data_tiket_lengkap2 = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$data_tiket2'");
                        $data_tiket3 = mysqli_fetch_assoc($data_tiket_lengkap2);
                    ?>
                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2><?php
                            $hari =  $data_tiket3['tanggal_tiket'];
                            echo date('d', strtotime($hari));
                            
                            ?> <span><?php echo date('M', strtotime($hari)); ?></span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="proses/images/banner/<?php echo $data_tiket3['foto_tiket']; ?>" alt="">
                            </div>
                            <div class="shows-name">
                                <h6><a href="index_artis.php?page=detail_tiket&id=<?= $data_tiket2; ?>" style="color: white;"><b><?php echo $data_tiket3['nama_tiket']; ?></b></a></h6>
                                <p><a href="https://www.google.com/maps/search/<?php echo $data_tiket_lengkap['lokasi']; ?>" target="_blank" style="color: white;"><?php echo $data_tiket3['lokasi']; ?></a></p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <h6 style="color: white;">Kursi Dipesan</h6>
                            <p><?php echo $data_tiket_lengkap3['qty']; ?></p>
                        </div>
                        <div class="shows-time">
                            <h6 style="color: white;">Total</h6>
                            <p><?php echo "Rp.".$data_tiket3['harga_tiket']*$data_tiket_lengkap3['qty']; ?></p>
                        </div>
                        <div class="buy-tickets">
                            <?php if($data_tiket_lengkap3['proses']==1){?>
                                <a href="proses/bayar_tiket.php?id=<?php echo $data_tiket_lengkap3['id_chart']; ?>" class="btn btn-success">Bayar Tiket</a><br>
                                <a href="proses/hapus_chart.php?id=<?php echo $data_tiket_lengkap3['id_chart']; ?>" class="btn btn-danger">Batal</a>
                            <?php }else if($data_tiket_lengkap3['proses']==2){?>
                                <a href="index_artis.php?page=kirim_bukti&id=<?php echo $data_tiket_lengkap3['id_chart']; ?>" class="btn btn-success">Kirim Bukti</a><br>
                                <a href="proses/hapus_chart.php?id=<?php echo $data_tiket_lengkap3['id_chart']; ?>" class="btn btn-danger">Batal</a>
                            <?php }else if($data_tiket_lengkap3['proses']==3) {?>
                                <a href="" class="btn btn-success disabled" >Tiket Sedang Diproses</a><br>
                            <?php }else if($data_tiket_lengkap3['proses']==4){?>
                                <a href="" class="btn btn-success disabled" >Pengiriman Tiket</a><br>
                            <?php }else{?>
                                <a href="proses/fpdf.php?id=<?php echo $data_tiket_lengkap3['kode_tiket']; ?>" class="btn btn-success">Unduh Tiket</a>
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