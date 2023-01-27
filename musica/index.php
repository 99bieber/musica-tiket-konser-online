<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title -->
        <title>Musica - Music Template</title>
        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <style type="text/css">
        .image-cropper {
            width: 250px;
            height: 100px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }
        .profile-pic {
          display: inline;
          margin: 0 auto;
          height: 35px;
          width: 35px;
        }
    </style>
        <body>
            <?php
            session_start();
            include 'proses/koneksi.php';
            if($_SESSION['status']!="login"){
            header("location:sign%20in.php");
            }
            $id = $_SESSION['id_user'];
            $data = mysqli_query($koneksi, "SELECT * FROM user where id_user = '$id'");
            $d = mysqli_fetch_assoc($data);
            if ($id == $d['id_user']) {
            
            }else{
            session_destroy();
            }
            $data2 = mysqli_query($koneksi, "SELECT * FROM artis WHERE id_user_user = '$id'");
            $data_artis = mysqli_fetch_assoc($data2);
            ?>
            <!-- ##### Preloader ##### -->
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="circle-preloader">
                    <img src="img/core-img/compact-disc.png" alt="">
                </div>
            </div>
            <!-- ##### Header Area Start ##### -->
            <header class="header-area" >
                <!-- Navbar Area -->
                <div class="musica-main-menu" >
                    <div class="classy-nav-container breakpoint-off">
                        <div class="container-fluid">
                            <!-- Menu -->
                            <nav class="classy-navbar justify-content-between" id="musicaNav" >
                                <!-- Nav brand -->
                                <a href="#" class="nav-brand"><img src="img/logo.png" alt=""></a>
                                <!-- Navbar Toggler -->
                                <div class="classy-navbar-toggler" >
                                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                                </div>
                                <!-- Menu -->
                                <div class="classy-menu" style="overflow: hidden;">
                                    <!-- close btn -->
                                    <div class="classycloseIcon">
                                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                    </div>
                                    <!-- Nav Start -->
                                    <div class="classynav">
                                        <ul>

                                            
                                        </ul>
                                        <!-- Social Button -->
                                    </div>
                                    <!-- Nav End -->
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="modal fade" id="myModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style=" background: linear-gradient(to right, #cc1573, #5722a9);">
                            <h4 class="modal-title text-light d-block">Profile</h4>
                        </div>
                        <div class="modal-body" style=" background: linear-gradient(to right, #cc1573, #5722a9);">
                            <img class="image-cropper profile-pic d-block" src="proses/images/profile/<?php echo $d['foto'];?>" style="height: 100px; width: 100px;">
                            <br>
                            <?php if ($d['level']==0) {?>
                            <p class="text-center" style="color: white;font-size: 35px;"><b>Hai, </b><?php echo $d['username']; ?></p>
                            <?php }else{ ?>
                            <p class="text-center" style="color: white; font-size: 35px;"><b>Hai, </b><?php echo $data_artis['nama_artis']; ?></p>
                        <?php }  ?>
                            <?php 
                                if ($d['level']==0) {?>
                                <a class="btn musica-btn mt-20 d-block text-center" href="index_artis.php?page=edit_profile_user&id=<?php echo $d['id_user']; ?>" style="border: 1px solid white;">Edit Profile</a><br>
                            <?php } else{?>
                                <a href="index_artis.php?page=edit_profile&id=<?php echo $data_artis['id_artis']; ?>" class="btn musica-btn mt-20 d-block text-center" style="border: 1px solid white;">Edit Profile</a><br>
                            <?php } ?>
                            <a href="proses/logout.php" class="btn musica-btn mt-20 d-block text-center" style="border: 1px solid white;">Logout</a>
                        </div>
                        <div class="modal-footer" style=" background: linear-gradient(to right, #cc1573, #5722a9);">
                            <button type="button" class="btn musica-btn mt-20 " data-dismiss="modal" style="border: 1px solid white;">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <!-- ##### Header Area End ##### -->
            <?php
            if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
            case 'home':
            include "home.php";
            break;
            case 'artis':
            include "artis.php";
            break;
            case 'artis_detail':
            include "artis_detail.php";
            break;
            case 'upload':
            include "upload_artis.php";
            break;
            case 'deskripsi':
            include 'deskripsi.php';
            break;
            case 'edit_profile':
                include 'edit_profile_artis.php';
                break;
              case 'buy_ticket':
                include 'buy_ticket.php';
                break;
                case 'chart':
                    include "chart.php";
                    break;
                    case 'kirim_bukti':
                        include 'pembelian.php';
                        break;
                        case 'detail_tiket':
                            include 'detail_tiket.php';
                            break;
                            case 'transaksi':
                                include 'transaksi.php';
                                break;
                                case 'edit_profile_user':
                                    include 'edit_profile_user.php';
                                    break;
                                    case 'edit_tiket':
                                        include 'edit_tiket.php';
                                        break;
            }
          
            }else{
            include "home.php";
            }
            ?>
            <!-- ##### Footer Area Start ##### -->
            <footer class="footer-area section-padding-100-0">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Footer Widget Area -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="footer-widget-area mb-100">
                                <a href="#"><img src="img/logo2.png" alt=""></a>
                                <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-xl-2">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>About</h4>
                            </div>
                            <nav>
                                <ul class="footer-nav">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">The team</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-xl-2">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Links</h4>
                            </div>
                            <nav>
                                <ul class="footer-nav">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">The team</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-xl-2">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Social</h4>
                            </div>
                            <nav>
                                <ul class="footer-nav">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Snapchat</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Subscribe</h4>
                            </div>
                            <form action="#" method="post" class="subscribe-form">
                                <input type="email" name="subscribe-email" id="subscribeemail">
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ##### Footer Area Start ##### -->
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

    </body>
</html>
<!-- modal-backdrop fade show -->