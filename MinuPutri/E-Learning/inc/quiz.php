<?php
$id = @$_GET['id'];
$no = 1;

if(@$_GET['action'] != 'kerjakansoal') { ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Tugas / Quiz</h4>
    </div>
</div>
<?php
}

if(@$_GET['action'] == '') { ?>

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

	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">Data Tugas / Quiz Setiap Mata Pelajaran</div>
	            <div class="panel-body">
	                <div class="table-responsive">
	                    <table class="table table-striped table-bordered table-hover">
	                        <thead>
	                            <tr>
	                                <th>#</th>
	                                <th>Mata Pelajaran</th>
	                                <th>Aksi</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        <?php
	                        $sql_mapel = mysqli_query($db, "SELECT * FROM tb_mapel") or die ($db->error);
	                        while($data_mapel = mysqli_fetch_array($sql_mapel)) { ?>
	                            <tr>
	                                <td width="40px" align="center"><?php echo $no++; ?></td>
	                                <td><?php echo $data_mapel['mapel']; ?></td>
	                                <td width="200px" align="center">
	                                	<a href="?page=quiz&action=daftartopik&id_mapel=<?php echo $data_mapel['id']; ?>" class="btn btn-primary btn-xs">Lihat Quiz</a>
	                                </td>
	                            </tr>
	                        	<?php
	                        } ?>
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

<?php
} else if(@$_GET['action'] == 'daftartopik') { ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">Data Tugas / Quiz Setiap Mata Pelajaran</div>
	            <div class="panel-body">
					<div class="table-responsive">
					<?php
					$id_mapel = @$_GET['id_mapel'];
					$sql_tq = mysqli_query($db, "SELECT * FROM tb_topik_quiz WHERE id_mapel = '$id_mapel' AND id_kelas = '$data_terlogin[id_kelas]' AND status = 'aktif'") or die ($db->error);
					if(mysqli_num_rows($sql_tq) > 0) {
						while($data_tq = mysqli_fetch_array($sql_tq)) { ?>
						<table width="100%">
							<tr>
								<td valign="top">No. ( <?php echo $no++; ?> )</td>
								<td>
									<table class="table">
									    <thead>
									        <tr>
									            <td width="20%"><b>Judul</b></td>
									            <td>:</td>
									            <td width="65%"><?php echo $data_tq['judul']; ?></td>
									        </tr>
									    </thead>
									    <tbody>
									        <tr>
									            <td>Tanggal Pembuatan</td>
									            <td>:</td>
									            <td><?php echo tgl_indo($data_tq['tgl_buat']); ?></td>
									        </tr>
									        <tr>
									            <td>Pembuat</td>
									            <td>:</td>
									            <td>
									            	<?php
									            	if($data_tq['pembuat'] != 'admin') {
									            		$sql_peng = mysqli_query($db, "SELECT * FROM tb_pengajar WHERE id_pengajar = '$data_tq[pembuat]'") or die ($db->error);
									            		$data_peng = mysqli_fetch_array($sql_peng);
									            		echo $data_peng['nama_lengkap'];
									            	} else {
									            		echo $data_tq['pembuat'];
									            	} ?>
									            </td>
									        </tr>
									        <tr>
									            <td>Waktu Pengerjaan</td>
									            <td>:</td>
									            <td><?php echo $data_tq['waktu_soal'] / 60 ." menit"; ?></td>
									        </tr>
									        <tr>
									            <td>Info</td>
									            <td>:</td>
									            <td><?php echo $data_tq['info']; ?></td>
									        </tr>
									        <tr>
									        	<td></td>
									        	<td></td>
									        	<td>
									        		<a href="?page=quiz&action=infokerjakan&id_tq=<?php echo $data_tq['id_tq']; ?>" class="btn btn-primary btn-xs">Kerjakan Soal</a>
									        	</td>
									        </tr>
									    </tbody>
									</table>
								</td>
							</tr>
						</table>
						<?php
						}
					} else { ?>
						<div class="alert alert-danger">Data quiz yang berada di kelas ini dengan mapel tersebut tidak ada</div>
						<?php
					} ?>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
	<?php
} else if(@$_GET['action'] == 'infokerjakan') { ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">Informasi Tugas / Quiz</div>
	            <div class="panel-body">
	            <?php
	            $sql_nilai = mysqli_query($db, "SELECT * FROM tb_nilai_pilgan WHERE id_tq = '$_GET[id_tq]' AND id_siswa = '$_SESSION[siswa]'") or die ($db->error);
	            $sql_jwb = mysqli_query($db, "SELECT * FROM tb_jawaban WHERE id_tq = '$_GET[id_tq]' AND id_siswa = '$_SESSION[siswa]'") or die ($db->error);
	            if(mysqli_num_rows($sql_nilai) > 0 || mysqli_num_rows($sql_jwb) > 0) {
	            	echo "Anda sudah mengerjakan ujian / test ini, silahkan lihat nilai Anda di halaman nilai.";
	            } else { ?>
					1. Baca dengan seksama dan teliti sebelum mengerjakan Tugas / Quiz.<br />
					2. Pastikan koneksi anda terjamin dan bagus.<br />
					3. Pilih browser yang versi terbaru.<br />
					4. Jika mati lampu hubungi pengajar mata pelajaran terkait untuk melakukan ujian ulang.
					<?php
				} ?>
	            </div>
	            <div class="panel-footer">
					<?php
					if(mysqli_num_rows($sql_nilai) > 0 || mysqli_num_rows($sql_jwb) > 0) { ?>
						<a href="?page=quiz" class="btn btn-primary">Kembali</a>
						<?php
					} else {
						$sql_cek_soal_pilgan = mysqli_query($db, "SELECT * FROM tb_soal_pilgan WHERE id_tq = '$_GET[id_tq]'") or die ($db->error);
						$sql_cek_soal_essay = mysqli_query($db, "SELECT * FROM tb_soal_essay WHERE id_tq = '$_GET[id_tq]'") or die ($db->error);
						if(mysqli_num_rows($sql_cek_soal_pilgan) > 0 || mysqli_num_rows($sql_cek_soal_essay) > 0) { ?>
							<a href="soal.php?id_tq=<?php echo @$_GET['id_tq']; ?>" class="btn btn-primary">Mulai Mengerjakan</a>
						<?php
						} else { ?>
							<a onclick="alert('Data soal tidak ditemukan, mungkin karena belum dibuat. Silahkan hubungi guru yang bersangkutan');" class="btn btn-primary">Mulai Mengerjakan</a>
						<?php
						} ?>
						<a href="?page=quiz" class="btn btn-primary">Kembali</a>
					<?php
					} ?>
				</div>
	        </div>
	    </div>
	</div>
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