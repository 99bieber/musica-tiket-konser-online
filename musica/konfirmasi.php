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
                                                <th>Username</th>
                                                <th>Alamat</th>
                                                <th class="text-center">Umur</th>
                                                <th class="text-center">Tempat Lahir</th>
                                                <th class="text-center">Tanggal Lahir</th>
                                                <th class="text-center">Nomer Telp</th>
                                                <th class="text-center">Sebagai</th>
                                                <th class="text-center">Action 1</th>
                                                <th class="text-center">Action 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include 'proses/koneksi.php';
                                        $no = 1;
                                        $active = 'de-activ';
                                        $data = mysqli_query($koneksi,"SELECT * FROM user where level = 1 && active = '$active'");
                                        while ($d = mysqli_fetch_array($data)) {
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo "$no"; ?></td>
                                                <td><?php echo $d['username']; ?></td>
                                                <td><?php echo $d['Alamat']; ?></td>
                                                <td class="text-center"><?php echo $d['Umur']; ?></td>
                                                <td class="text-center"><?php echo $d['Tempat_Lahir']; ?></td>
                                                <td class="text-center"><?php echo $d['Tanggal_lahir']; ?></td>
                                                <td class="text-center"><?php echo $d['no_telp']; ?></td>
                                                <td class="text-center">
                                                    <?php 
                                                    if ($d['level']==1) {
                                                        echo "Artis";
                                                    } else{
                                                        echo "Pembeli";
                                                    } 
                                                    ?>
                                                    </td>
                                                <td class="text-center"><a href="proses/terima.php?id=<?php echo $d['id_user']; ?>">Terima</a></td>
                                                <td class="text-center"><a href="proses/hapus.php?id=<?php echo $d['id_user']; ?>">Tolak</a></td>
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