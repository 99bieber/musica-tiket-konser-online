<?php
$data = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_artis_artis = '$id'");
?>
<div class="upcoming-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Daftar Transaksi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Upcoming Shows Content -->
                <div class="upcoming-shows-content">
                    <?php
                    while ($data_tiket = mysqli_fetch_assoc($data)) {
                        $id_tiket = $data_tiket['id_tiket'];
                        $data2 = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_tiket = '$id_tiket'");
                        while ($data_pembelian = mysqli_fetch_assoc($data2)) {
                    ?>
                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2><?php
                            $hari =  $data_tiket['tanggal_tiket'];
                            echo date('d', strtotime($hari));
                            
                            ?> <span><?php echo date('M', strtotime($hari)); ?></span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="proses/images/banner/<?php echo $data_tiket['foto_tiket']; ?>" alt="">
                            </div>
                            <div class="shows-name">
                                <h6><?php echo $data_tiket['nama_tiket']; ?></h6>
                                <p><a href="https://www.google.com/maps/search/<?php echo $data_tiket_lengkap['lokasi']; ?>" target="_blank" style="color: white;"><?php echo $data_tiket['lokasi']; ?></a></p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <h6 style="color: white;">Tiket Dipesan</h6>
                            <p><?php echo $data_pembelian['qty']; ?></p>
                        </div>
                        <div class="shows-time">
                            <h6 style="color: white;">Total</h6>
                            <p><?php echo "Rp.".$data_tiket['harga_tiket']*$data_pembelian['qty']; ?></p>
                        </div>
                        <div class="buy-tickets">
                            <?php if($data_pembelian['proses']==1){?>
                                <a href="proses/bayar_tiket.php?id=<?php echo $data_tiket_lengkap3['id_chart']; ?>" class="btn btn-success disabled">Bayar</a><br>
                            <?php }else if($data_pembelian['proses']==2){?>
                                <a href="index_artis.php?page=kirim_bukti&id=<?php echo $data_tiket_lengkap3['id_chart']; ?>" class="btn btn-success disabled">Mengirim Bukti</a><br>
                            <?php }else if($data_pembelian['proses']==3) {?>
                                <a href="" class="btn btn-success disabled" >Konfirmasi Admin</a><br>
                            <?php }else if($data_pembelian['proses']==4){?>
                                <a href="proses/kirim_tiket.php?id=<?php echo $data_pembelian['id_chart']; ?>" class="btn btn-success">Kirim Tiket</a>
                            <?php }else{ ?>
                                <a href="" class="btn btn-success disabled" >Tiket Sudah Dikirim</a><br>
                            <?php } ?>
                        </div>
                    </div>
                    <?php }
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</div>