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
                        <a href="index.html" class="logo">Ujian<em> Online</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/Progres9/MinuPutri/E-learning/login.php" class="active">Login</a></li>
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



<br>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a <?php if(@$_GET['page'] == '') { echo 'class="menu-top-active"'; } ?> href="?hal=daftar">Register</a></li>
                            </ul> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container">
            <?php
            if(@$_GET['page'] == '') { ?>
                <div class="row">
                    <div class="col-md-12">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <br>
                    <br>
                    <br>
                    <br>
                        <h4><i>Masukkan data Anda dengan benar !</i></h4>
                        <form method="post" enctype="multipart/form-data">
                            NIS* :<input type="text" name="nis" class="form-control" required />
                            Nama Lengkap* : <input type="text" name="nama_lengkap" class="form-control" required />
                            Tempat Lahir* : <input type="text" name="tempat_lahir" class="form-control" required />
                            Tanggal Lahir* : <input type="date" name="tgl_lahir" class="form-control" required />
                            Jenis Kelamin* :
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            Agama* :
                            <select name="agama" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            Nama Ayah* : <input type="text" name="nama_ayah" class="form-control" required />
                            Nama Ibu* : <input type="text" name="nama_ibu" class="form-control" required />
                            Nomor Telepon : <input type="text" name="no_telp" class="form-control" />
                            Email : <input type="email" name="email" class="form-control" />
                            Alamat* : <textarea name="alamat" class="form-control" rows="3" required></textarea>
                            Kelas* :
                            <select name="kelas" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                $sql_kelas = mysqli_query($db, "SELECT * from tb_kelas") or die ($db->error);
                                while($data_kelas = mysqli_fetch_array($sql_kelas)) {
                                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
                                } ?>
                            </select>
                            Tahun Masuk* :
                            <select name="thn_masuk" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php
                                for ($i = 2020; $i >= 2000; $i--) { 
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                } ?>
                            </select>
                            Foto : <input type="file" name="gambar" class="form-control" />
                            Username* : <input type="text" name="user" class="form-control" required />
                            Password* : <input type="password" name="pass" class="form-control" required />
                            <br />
                            <i><b>Catatan</b> : Tanda * wajib disi</i>
                            <hr />
                            <input type="submit" name="daftar" value="Daftar" class="btn btn-info" />
                            <input type="reset" class="btn btn-danger" />
                        </form>
                        <?php
                        if(@$_POST['daftar']) {
                            $nis = @mysqli_real_escape_string($db, $_POST['nis']);
                            $nama_lengkap = @mysqli_real_escape_string($db, $_POST['nama_lengkap']);
                            $tempat_lahir = @mysqli_real_escape_string($db, $_POST['tempat_lahir']);
                            $tgl_lahir = @mysqli_real_escape_string($db, $_POST['tgl_lahir']);
                            $jenis_kelamin = @mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
                            $agama = @mysqli_real_escape_string($db, $_POST['agama']);
                            $nama_ayah = @mysqli_real_escape_string($db, $_POST['nama_ayah']);
                            $nama_ibu = @mysqli_real_escape_string($db, $_POST['nama_ibu']);
                            $no_telp = @mysqli_real_escape_string($db, $_POST['no_telp']);
                            $email = @mysqli_real_escape_string($db, $_POST['email']);
                            $alamat = @mysqli_real_escape_string($db, $_POST['alamat']);
                            $kelas = @mysqli_real_escape_string($db, $_POST['kelas']);
                            $thn_masuk = @mysqli_real_escape_string($db, $_POST['thn_masuk']);
                            $user = @mysqli_real_escape_string($db, $_POST['user']);
                            $pass = @mysqli_real_escape_string($db, $_POST['pass']);

                            $sumber = @$_FILES['gambar']['tmp_name'];
                            $target = 'img/foto_siswa/';
                            $nama_gambar = @$_FILES['gambar']['name'];

                            $sql_cek_user = mysqli_query($db, "SELECT * FROM tb_siswa WHERE username = '$user'") or die ($db->error);
                            if(mysqli_num_rows($sql_cek_user) > 0) {
                                echo "<script>alert('Username yang Anda pilih sudah ada, silahkan ganti yang lain');</script>";
                            } else {
                                if($nama_gambar != '') {
                                    if(move_uploaded_file($sumber, $target.$nama_gambar)) {
                                        mysqli_query($db, "INSERT INTO tb_siswa VALUES('', '$nis', '$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$nama_ayah', '$nama_ibu', '$no_telp', '$email', '$alamat', '$kelas', '$thn_masuk', '$nama_gambar', '$user', md5('$pass'), '$pass', 'tidak aktif')") or die ($db->error);          
                                        echo '<script>alert("Pendaftaran berhasil, silahkan login"); window.location="./"</script>';
                                    } else {
                                        echo '<script>alert("Gagal mendaftar, foto gagal diupload, coba lagi!");</script>';
                                    }
                                } else {
                                    mysqli_query($db, "INSERT INTO tb_siswa VALUES('', '$nis', '$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$nama_ayah', '$nama_ibu', '$no_telp', '$email', '$alamat', '$kelas', '$thn_masuk', 'anonim.png', '$user', md5('$pass'), '$pass', 'tidak aktif')") or die ($db->error);          
                                    echo '<script>alert("Pendaftaran berhasil, tunggu akun aktif dan silahkan login"); window.location="./"</script>';
                                }
                            }
                        }
                        ?>
                    </div>
                    
                    <div class="col-md-6">
                    <br>
                    <br>
                    <br>
                    <br>
                        <div class="alert alert-warning">
                            Untuk menggunakan layanan e-learning ini kalian harus memiliki akun terlebih dahulu.
                         </div>   
                        <div class="alert alert-warning">
                         Anda sudah punya akun ? Silahkan <a href="./" class="btn btn-xs btn-danger">Login</a>
                          </div>
                    </div>
                </div>
            <?php
            } else if(@$_GET['page'] == 'berita') {
                include "inc/berita.php";
            } ?>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy;  2020 Copyright by Ayu & Nia <a style="color:white;" target="_blank" rel="noopener noreferrer">Ayu Nia</a>
                </div>

            </div>
        </div>
    </footer>
    <script src="style/assets/js/jquery-1.11.1.js"></script>
    <script src="style/assets/js/bootstrap.js"></script>


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
