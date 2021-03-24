<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_tentang_website WHERE id = 1");
$tentang_website = mysqli_fetch_assoc($query);
$aktif = 'tentang_website'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tentang  -  MINU "PUTRI" MALANG</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="sd"> MINU "PUTRI" MALANG</span><br>
					<span class="visi">"UNGGUL DALAM PRESTASI, BERNUANSA IMAN DAN TAQWA SERTA ILMU PENGETAHUAN DAN TEKNOLOGI YANG BERHALUAN AHLUS SUNNAH WAL JAMA’AH"</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Tentang Sekolah  MINU "PUTRI" MALANG
				</div>
				<div class="artikel">
					<?= $tentang_website['tentang_website'] ?>
				</div>
			</div>
		</div>
		<div class="text-white footer">
			2020 © Copyright by Ayu & Nia <a style="color:white;" target="_blank" rel="noopener noreferrer">Ayu Nia</a> 
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>