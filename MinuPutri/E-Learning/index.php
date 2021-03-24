
<?php
@session_start();
include "+koneksi.php";

if(!@$_SESSION['siswa']) {
    if(@$_GET['hal'] == 'daftar') {
        include "register.php";
    } else {
        include "login.php";
    }
} else { ?>
<!DOCTYPE html>
<html>
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
        <body background = "contact-bg.jpg">
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
                
                        <a href="index.html" class="logo"><img src="style/assets/img/logobaru.png" /> <em> Ujian Online</em></a>
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        
                        <ul class="nav">
                        <li><a <?php if(@$_GET['page'] == '') { echo 'class="active"'; } ?> href="./" class="active">Beranda</a></li>
                            <li ><a <?php if(@$_GET['page'] == 'quiz') { echo ' class="active"'; } ?> href="?page=quiz" class="active">Tugas / Quiz</a></li>
                            <li><a <?php if(@$_GET['page'] == 'nilai') { echo 'class="active"'; } ?> href="?page=nilai" class="active">Nilai</a></li>
                            <li><a <?php if(@$_GET['page'] == 'materi') { echo 'class="active"'; } ?> href="?page=materi" class="active">Materi</a></li>
                           
                            <li class="dropdown">
                         
                            <a class="active" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >Profil Siswa
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="menu-top-down">
                                <a href="?hal=detailprofil">Detail Profil</a>
                                </br>
                                <a href="?hal=editprofil">Edit Profil</a>
                                </div>
                            </div>
                        </li>
                            <li class="main-button"><a href="inc/logout.php?sesi=siswa">Logout</a>
                            <?php
                            $sql_terlogin = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_siswa = '$_SESSION[siswa]' AND tb_kelas.id_kelas = tb_siswa.id_kelas") or die ($db->error);
                            $data_terlogin = mysqli_fetch_array($sql_terlogin);
                            echo ucfirst($data_terlogin['username']);
                            ?> 
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

<body>

<script src="style/assets/js/jquery-1.11.1.js"></script>
<script src="style/assets/js/bootstrap.js"></script>
<?php
$sql_terlogin = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_siswa = '$_SESSION[siswa]' AND tb_kelas.id_kelas = tb_siswa.id_kelas") or die ($db->error);
$data_terlogin = mysqli_fetch_array($sql_terlogin);
?>
    <!-- <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                    <img src="style/assets/img/logobaru.png" />
                </a>
            </div>
            <div class="right-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                   <h2>E-Learning MI NU "PUTRI" MALANG</h2>     
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                        
                            <li><a <?php if(@$_GET['page'] == '') { echo 'class="active"'; } ?> href="./">Beranda</a></li>
                            <li><a <?php if(@$_GET['page'] == 'quiz') { echo 'class="menu-top-active"'; } ?> href="?page=quiz" class="active">Tugas / Quiz</a></li>
                            <li><a <?php if(@$_GET['page'] == 'nilai') { echo 'class="menu-top-active"'; } ?> href="?page=nilai">Nilai</a></li>
                            <li><a <?php if(@$_GET['page'] == 'materi') { echo 'class="menu-top-active"'; } ?> href="?page=materi">Materi</a></li>
                            <li><a <?php if(@$_GET['page'] == 'berita') { echo 'class="menu-top-active"'; } ?> href="?page=berita">Berita</a></li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Profil Siswa
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="menu-top-down">
                                <a href="?hal=detailprofil">Detail Profil</a>
                                </br>
                                <a href="?hal=editprofil">Edit Profil</a>
                                </div>
                            </div>
                        </li>
                            <li><a href="inc/logout.php?sesi=siswa">Logout</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container" id="wadah">
        <?php
        if(@$_GET['page'] == '') {
            include "inc/beranda.php";
        } else if(@$_GET['page'] == 'quiz') {
            include "inc/quiz.php";
        } else if(@$_GET['page'] == 'nilai') {
            include "inc/nilai.php";
        } else if(@$_GET['page'] == 'materi') {
            include "inc/materi.php";
        } else if(@$_GET['page'] == 'berita') {
            include "inc/berita.php";
        } ?>
        </div>
    </div>
    <script src="style/assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
var user = $("input[name=user]");
var pass = $("input[name=pass]");
function proses_login() {
	if(user.val() == "") {
        $("#output").removeClass('alert alert-success');
        $("#output").addClass("alert alert-danger animated fadeInUp").html("Username tidak boleh kosong");
        user.focus();
    } else if(pass.val() == "") {
        $("#output").removeClass('alert alert-success');
        $("#output").addClass("alert alert-danger animated fadeInUp").html("Password tidak boleh kosong");
        pass.focus();
    } else {
    	$.ajax({
    		url : 'inc/proses_login.php',
    		type : 'post',
    		data : 'user='+user.val()+'&pass='+pass.val(),
    		success : function(msg) {
        		if(msg == 'sukses') {
		            $("#output").addClass("alert alert-success animated fadeInUp").html("Selamat datang " + "<span><b><i>" + user.val() + "</i></u></span>");
		            $("#output").removeClass('alert-danger');
		            $("input").hide();
		            $('button[type="submit"]').hide();
		            $(".continue").fadeIn(1000);
		            $(".avatar").css({
		                "background-image": "url('style/assets/img/avatar.png')"
		            });
		        } else if(msg == 'akun tidak aktif') {
		        	$("#output").removeClass('alert alert-warning');
		            $("#output").addClass("alert alert-danger animated fadeInUp").html("Login gagal, akun Anda tidak aktif");
		        } else if(msg == 'gagal') {
		        	$("#output").removeClass('alert alert-success');
		            $("#output").addClass("alert alert-danger animated fadeInUp").html("Login gagal, coba lagi");
		        }
    		}
    	});
    }
}
$('button[type="submit"]').click(function(e) {
    e.preventDefault();
    proses_login();
});
$(pass).keyup(function(e){
	if(e.keyCode == 13) {
		proses_login();
	}
});

$(function(){
	$(".continue").click(function() {
        window.location='./';
    });
});
</script>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; by Ayu & Nia <a style="color:white;" target="_blank" rel="noopener noreferrer">Ayu Nia</a>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>
<?php
}
?>
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