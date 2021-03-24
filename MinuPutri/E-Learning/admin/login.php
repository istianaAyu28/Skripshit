<?php
@session_start();
if(@$_SESSION['admin'] || @$_SESSION['pengajar']) {
	echo "<script>window.location='./';</script>";
} else {
?>
<!DOCTYPE html>
<html lang="en">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Aplikasi Ujian Online</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">


    
   
    
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
                           
                            <!-- <li class="main-button"><a href="/Progres9/MinuPutri/E-learning/register.php">Daftar</a></li> -->
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
                    <a href="#features">Login Admin / Pengajar</a>
                </div>
            </div>
        </div>
    </div>

<head>
<!-- <style>
  #card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
  </style>
</head> -->

  <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Login Admin / Guru </h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                                            </div>
                </div>
                </div>
  <body>
  <!-- <div id="card">
  <div id="card-content">
  <div id="card-title">
   
  
  
  <form method="post" class="form">  -->

  <!-- <label for="username" style="padding-top:13px">&nbsp;Username</label>
  <input
  id="username"
  class="form-content"
  type="text" 
   name="user"
   autocomplete="on" 
   required /> 
   <div class="form-border"></div>

   <label for="password" style="padding-top:13px">&nbsp;Password</label>
  <input
  id="password"
  class="form-content"
  type="password" 
   name="pass"
   autocomplete="on" 
   required />
   <div class="form-border"></div>
   
   <br>
   <br> 
   <br>
   <br> 
   <br>
   <br> 
   &nbsp;
  <button class="btn btn-info btn-block login" type="submit">Login</button>
  <br>
<button class="btn btn-info btn-block continue" style="display:none;">Continue</button> -->
<h4>Masukkan username dan password Anda dengan benar :</h4>
<form method="post">
<label>Username :</label>
<input type="text" name="user" class="form-control" required />
<label>Password :  </label>
<input type="password" name="pass" class="form-control" required />
<!-- <hr /> <input type="submit" name="login" value="Login" class="btn btn-success" /> -->

<button class="btn btn-info btn-block login" type="submit">Login</button>
<button class="btn btn-info btn-block continue" style="display:none;">Continue</button>

<script src="style/assets/js/jquery-1.11.1.js"></script>
    <script src="style/assets/js/bootstrap.js"></script>
                
                
<!-- <div class="container">
	<div class="login-card">
        <div id="output"></div>
        <h4> Selamat Datang di Aplikasi E-Learning MADRASAH IBTIDAIYAH NU PUTRI, Silahkan Login.. </h4>
        <div class="card">
                    <div class="col-md-6">
            <input name="user" type="text" placeholder="username">
            <input name="pass" type="password" placeholder="password">
            <button class="btn btn-info btn-block login" type="submit">Login</button>
			<a class="btn btn-info btn-block >" href="/progres9/MinuPutri/">Website</a>
            <button class="btn btn-info btn-block continue" style="display:none;">Continue</button>
        </div>
    </div>
</div> -->
  </div></div>
  </div>
  </form>
  </body>

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


</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
}
?>

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