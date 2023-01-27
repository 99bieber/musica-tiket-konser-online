 <style type="text/css">
     p {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  text-align: center;
  width: 200px;
}
 </style>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
 <!-- MAIN CONTENT-->
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Data Konser</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Konser</th>
                                                <th>Harga Satuan</th>
                                                <th class="text-center">Tanggal Konser</th>
                                                <th class="text-center">Banner</th>
                                                <th class="text-center" width="1">Deskripsi</th>
                                                <th class="text-center">Nomer Telp</th>
                                                <th class="text-center">Tiket Total</th>
                                                <th class="text-center">Lokasi</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include 'proses/koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi,"SELECT * FROM tiket");
                                        while ($d = mysqli_fetch_array($data)) {
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo "$no"; ?></td>
                                                <td><?php echo $d['nama_tiket']; ?></td>
                                                <td><?php echo $d['harga_tiket']; ?></td>
                                                <td class="text-center"><?php echo $d['tanggal_tiket']; ?></td>
                                                <td class="text-center"><img src="proses/images/banner/<?php echo $d['foto_tiket']; ?>"> </td>
                                                <td class="text-left" ><p style="overflow-wrap: normal;" maxlength="10"><?php echo nl2br($d['deskripsi_tiket']); ?></p></td>
                                                <td class="text-center"><?php echo $d['nomor_telp']; ?></td>
                                                 <td class="text-center"><?php echo $d['qty_tiket']; ?></td>
                                                 <td class="text-center"><?php echo $d['lokasi']; ?></td>
                                                <td class="text-center"><a href="proses/hapus_tiket_admin.php?id=<?php echo $d['id_tiket']; ?>">HAPUS</a></td>
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
            </div>