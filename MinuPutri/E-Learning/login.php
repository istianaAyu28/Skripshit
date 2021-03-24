<?php
@session_start();
$db = mysqli_connect("localhost", "root", "", "db_elearning");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Aplikasi Ujian Online</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                    
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><img src="style/assets/img/logobaru.png" /> Ujian<em> Online</em></a>
                        <!-- ***** Logo End ***** -->
                    
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Dashboard</a></li>
                            <li class="button"><a href="/progres9/MinuPutri/">Website</a></li>
                           
                            <li class="main-button"><a href="/Progres9/MinuPutri/E-learning/register.php">Daftar</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/sd-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Aplikasi Ujian Online</h6>
                <h2>Madrasah Ibtidaiyah NU "Putri" Malang</h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Login Siswa</a>
                </div>
            </div>
        </div>
    </div>

  


    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Login  <em>Ujian Online</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Jika siswa belum mempunyai akun silahkan mendaftar terlebih dahulu.</p>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        if(@$_POST['login']) {
                            $user = @mysqli_real_escape_string($db, $_POST['user']);
                            $pass = @mysqli_real_escape_string($db, $_POST['pass']);
                            $sql = mysqli_query($db, "SELECT * FROM tb_siswa WHERE username = '$user' AND password = md5('$pass')") or die ($db->error);
                            $data = mysqli_fetch_array($sql);
                            if(mysqli_num_rows($sql) > 0) {
                                if($data['status'] == 'aktif') {
                                    @$_SESSION['siswa'] = $data['id_siswa'];
                                    echo "<script>window.location='./';</script>";
                                } else {
                                    echo '<div class="alert alert-warning">Login gagal, akun Anda sedang tidak aktif</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger">Login gagal, username / password salah, coba lagi!</div>';
                            }
                        } ?>
                        <h4>Masukkan username dan password Anda dengan benar :</h4>
                        <form method="post">
                            <label>Username :</label>
                            <input type="text" name="user" class="form-control" required />
                            <label>Password :  </label>
                            <input type="password" name="pass" class="form-control" required />
                            <hr />
                            <input type="submit" name="login" value="Login" class="btn btn-success" />
                            <input type="reset" class="btn btn-success" />
                        </form>
                    
                    </div>
                        </div>  
                    </div>
                </div>
            </div>
    </div>

   
    <script src="style/assets/js/jquery-1.11.1.js"></script>
    <script src="style/assets/js/bootstrap.js"></script>
                
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Madrasah Ibtidaiyah Nu Putri Malang</h2>
                         <div class="main-button scroll-to-section">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>By Ayu dan Nia
                    
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>