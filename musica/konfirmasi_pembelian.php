<?php
include 'proses/koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"SELECT * FROM bayar_tiket");
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">User Data</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Tiket</th>
                                    <th class="text-center">Bukti Pembayaran</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($d = mysqli_fetch_array($data)) {
                                
                                ?>
                                <tr>
                                    <td><?php echo "$no"; ?></td>
                                    <td><?php echo $d['kode_tiket']; ?></td>
                                    <td class="text-center">
                                        <img src="proses/images/bukti_tranfer/<?php echo $d['bukti_transfer'];?>" style="width: 250px; height: auto;">
                                    </td>
                                </td>
                                <?php if ($d['proses']==1) {?>
                                 <td class="text-center"><a href="#" class="btn btn-success disabled">Menunggu Pembayaran</a></td>
                                <?php }elseif ($d['proses']==2) {?>
                                    <td class="text-center"><a href="#" class="btn btn-success disabled">Menunggu Bukti Transfer</a></td>
                                <?php }elseif ($d['proses']==3) {?>
                                    <td class="text-center"><a href="proses/terima_bayar.php?id=<?php echo $d['id_bayar']; ?>" class="btn btn-success">Terima</a>
                                    <a href="proses/hapus.php?id=<?php echo $d['id_user']; ?>" class="btn btn-danger">Tolak</a></td>
                                <?php } elseif($d['proses']==4){?>
                                     <td class="text-center"><a href="#" class="btn btn-success disabled">Menunggu Mengirim Tiket</a></td>
                                <?php }else{ ?>
                                     <td class="text-center"><a href="#" class="btn btn-success disabled">Sudah Dikirim</a></td>
                                <?php } ?>
                            </tr>
                            <?php $no++;}
                            ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>