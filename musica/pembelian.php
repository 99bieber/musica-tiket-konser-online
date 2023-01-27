<?php 
$id_bayar = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM bayar_tiket WHERE id_chart = '$id_bayar'");
$data_bayar = mysqli_fetch_assoc($data);
$id_chart = $data_bayar['id_chart'];
$data2 = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_chart = '$id_chart'");
$data_chart = mysqli_fetch_assoc($data2);
$id_tiket = $data_chart['id_tiket'];
$data3 = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket = '$id_tiket'");
$data_tiket = mysqli_fetch_assoc($data3);
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
                    <img src="proses/images/banner/<?php echo $data_tiket['foto_tiket']; ?>" alt="">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100">
                    <h4>    
                        Kursi yang dipesan = <?php echo $data_chart['qty']; ?> <br>
                        Total = <?php echo $data_chart['qty']*$data_tiket['harga_tiket']; ?>
                    </h4>
                    <form action="proses/kirim_bukti.php?id=<?php echo $data_bayar['id_bayar'];?>" method="post" enctype="multipart/form-data">
                        <input type="file" name="foto" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-success">Kirim Bukti</button>
                        <a href="index_artis.php?page=chart" class="btn btn-danger">Batal</a>    
                    </form> 
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>