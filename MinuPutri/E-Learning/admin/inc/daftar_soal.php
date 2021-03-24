<?php
$sql_pilgan = mysqli_query($db, "SELECT * FROM tb_soal_pilgan WHERE id_tq = '$id'") or die ($db->error);
$sql_essay = mysqli_query($db, "SELECT * FROM tb_soal_essay WHERE id_tq = '$id'") or die ($db->error);
?>
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="?page=quiz" class="btn btn-danger btn-sm">Kembali</a> &nbsp; 
			Lihat Daftar Jenis Soal : <a href="?page=quiz&action=daftarsoal&hal=pilgan&id=<?php echo $id; ?>" 
			class="btn btn-primary btn-sm">Pilihan Ganda (<?php echo mysqli_num_rows($sql_pilgan); ?> soal)</a> 
			<a href="?page=quiz&action=daftarsoal&hal=essay&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Essay (<?php echo mysqli_num_rows($sql_essay); ?> soal)</a>
			<a href="?page=quiz&action=buatsoal&hal=importsoal&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Import Soal</a>
		</div>
		<?php
		if(@$_GET['hal'] == "pilgan" ) { ?>
			<div class="panel-body">
				<fieldset>
					<legend>Info Tugas / Quiz</legend>
					<?php
					$sql_tq = mysqli_query($db, "SELECT * FROM tb_topik_quiz JOIN tb_kelas ON tb_topik_quiz.id_kelas = tb_kelas.id_kelas JOIN tb_mapel ON tb_topik_quiz.id_mapel = tb_mapel.id WHERE id_tq = '$id'") or die ($db->error);
					$data_tq = mysqli_fetch_array($sql_tq);
					?>
					<table align="center">
						<tr>
							<td>Judul</td>
							<td align="center" width="50px">:</td>
							<td><?php echo $data_tq['judul']; ?></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td align="center" width="50px">:</td>
							<td><?php echo $data_tq['nama_kelas']; ?></td>
						</tr>
						<tr>
							<td>Mata Pelajaran</td>
							<td align="center" width="50px">:</td>
							<td><?php echo $data_tq['mapel']; ?></td>
						</tr>
						<tr>
							<td>Waktu Pengerjaan</td>
							<td align="center" width="50px">:</td>
							<td><?php echo $data_tq['waktu_soal'] / 60 ." menit"; ?></td>
						</tr>
					</table>
				</fieldset>
			</div>
		<?php
		} ?>
	</div>
</div>
<?php
$idsoal = @$_GET['idsoal'];
$k = 1;
$ke = @$_GET['ke'];

if(@$_GET['hal'] == "pilgan") { ?>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Soal Pilihan Ganda &nbsp; <a href="?page=quiz&action=buatsoal&hal=soalpilgan&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Tambah Soal Pilihan Ganda</a></div>
			<div class="panel-body">
				<div class="table-responsive">
				<?php
				if(mysqli_num_rows($sql_pilgan) > 0) {
					while($data_pilgan = mysqli_fetch_array($sql_pilgan)) { ?>
					<table width="100%">
						<tr>
							<td valign="top">Soal no. ( <?php echo $no++; ?> )</td>
							<td>
								<table class="table">
									<thead>
										<tr>
											<td width="20%"><b>Pertanyaan</b></td>
											<td>:</td>
											<td width="65%"><?php echo $data_pilgan['pertanyaan']; ?></td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Gambar</td>
											<td>:</td>
											<td>
												<?php
												if($data_pilgan['gambar'] != '') {
													echo '<img src="img/gambar_soal_pilgan/'.$data_pilgan['gambar'].'" width="200px" />';
												} else {
													echo "<i>Tidak ada gambar</i>";
												} ?>
											</td>
										</tr>
										<tr>
											<td>Pilihan A</td>
											<td>:</td>
											<td><?php echo $data_pilgan['pil_a']; ?></td>
										</tr>
										<tr>
											<td>Pilihan B</td>
											<td>:</td>
											<td><?php echo $data_pilgan['pil_b']; ?></td>
										</tr>
										<tr>
											<td>Pilihan C</td>
											<td>:</td>
											<td><?php echo $data_pilgan['pil_c']; ?></td>
										</tr>
										<tr>
											<td>Pilihan D</td>
											<td>:</td>
											<td><?php echo $data_pilgan['pil_d']; ?></td>
										</tr>
										<tr>
											<td>Pilihan E</td>
											<td>:</td>
											<td><?php echo $data_pilgan['pil_e']; ?></td>
										</tr>
										<tr>
											<td>Kunci</td>
											<td>:</td>
											<td><?php echo $data_pilgan['kunci']; ?></td>
										</tr>
										<tr>
											<td>Opsi</td>
											<td>:</td>
											<td>
												<a href="?page=quiz&action=daftarsoal&hal=editsoalpilgan&id=<?php echo $id; ?>&idsoal=<?php echo $data_pilgan['id_pilgan']; ?>&ke=<?php echo $k++; ?>" class="btn second" style="background-color:#ADD8E6;">Edit</a>
												<a onclick="return confirm('Yakin akan menghapus data?');" href="?page=quiz&action=daftarsoal&hal=hapussoalpilgan&id=<?php echo $id; ?>&idsoal=<?php echo $data_pilgan['id_pilgan']; ?>" class="btn second" style="background-color:#FA8072;">Hapus</a>
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
					<div class="alert alert-danger">Data soal pilihan ganda tidak ditemukan</div>
					<?php
				} ?>
				</div>
			</div>
		</div>
	</div>
<?php
} else if(@$_GET['hal'] == "essay") { ?>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Soal Essay &nbsp; <a href="?page=quiz&action=buatsoal&hal=soalessay&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Tambah Soal Essay</a></div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Pertanyaan</th>
								<th>Gambar</th>
								<th>Tanggal Pembuatan</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if(mysqli_num_rows($sql_essay) > 0) {
							while($data_essay = mysqli_fetch_array($sql_essay)) { ?>
							<tr>
								<td align="center" width="40px"><?php echo $no++; ?></td>
								<td><?php echo $data_essay['pertanyaan']; ?></td>
								<td align="center" width="150px">
									<?php
									if($data_essay['gambar'] != '') {
										echo '<img src="img/gambar_soal_essay/'.$data_essay['gambar'].'" width="100px" />';
									} else {
										echo "<i>Tidak ada gambar</i>";
									} ?>
								</td>
								<td align="center" width="160px"><?php echo tgl_indo($data_essay['tgl_buat']); ?></td>
								<td align="center" width="120px">
									<a href="?page=quiz&action=daftarsoal&hal=editsoalessay&id=<?php echo $id; ?>&idsoal=<?php echo $data_essay['id_essay']; ?>&ke=<?php echo $k++; ?>" class="btn second" style="background-color:#ADD8E6;">Edit</a>
									<a onclick="return confirm('Yakin akan menghapus data?');" href="?page=quiz&action=daftarsoal&hal=hapussoalessay&id=<?php echo $id; ?>&idsoal=<?php echo $data_essay['id_essay']; ?>" class="btn second" style="background-color:#FA8072;">Hapus</a>
								</td>
							</tr>
							<?php
							}
						} else {
							echo '<td colspan="5" align="center">Data soal essay tidak ditemukan</td>';
						} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php
} else if(@$_GET['hal'] == "editsoalpilgan") { ?>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Soal Pilihan Ganda</div>
			<div class="panel-body">
			<?php
			$sql_pilgan_id = mysqli_query($db, "SELECT * FROM tb_soal_pilgan WHERE id_pilgan = '$idsoal'") or die ($db->error);
			$data_pilgan_id = mysqli_fetch_array($sql_pilgan_id);
			?>
				<form method="post" enctype="multipart/form-data">
					<div class="col-md-2">
						<label>Pertanyaan No. [ <?php echo $ke; ?> ]</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pertanyaan" class="form-control" rows="2" required><?php echo $data_pilgan_id['pertanyaan']; ?></textarea>
						</div>
					</div>

					<div class="col-md-2">
						<label>Gambar <sup>(Optional)</sup></label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="file" name="gambar" class="form-control" />
							<?php
							if($data_pilgan_id['gambar'] != '') {
								if(@$_GET['gbr'] != 'del') { ?>
									<div style="margin-top:5px;">
										<img width="150px" src="../admin/img/gambar_soal_pilgan/<?php echo $data_pilgan_id['gambar']; ?>" />
										<br /> <small><a href="?page=quiz&action=daftarsoal&hal=editsoalpilgan&id=<?php echo $id; ?>&idsoal=<?php echo $data_pilgan_id['id_pilgan']; ?>&ke=<?php echo $ke; ?>&gbr=del">Hapus Gambar</a></small>
									</div>
								<?php }
							} ?>
						</div>
					</div>
					
					<div class="col-md-2">
						<label>Pilihan A</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilA" class="form-control" rows="1" required><?php echo $data_pilgan_id['pil_a']; ?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan B</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilB" class="form-control" rows="1" required><?php echo $data_pilgan_id['pil_b']; ?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan C</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilC" class="form-control" rows="1" required><?php echo $data_pilgan_id['pil_c']; ?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan D</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilD" class="form-control" rows="1" required><?php echo $data_pilgan_id['pil_d']; ?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan E</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilE" class="form-control" rows="1" required><?php echo $data_pilgan_id['pil_e']; ?></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Kunci Jawaban</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<label class="radio-inline">
								<input type="radio" name="kunci" value="A" <?php if($data_pilgan_id['kunci'] == 'A') { echo "checked"; } ?>>A
							</label>
							<label class="radio-inline">
								<input type="radio" name="kunci" value="B" <?php if($data_pilgan_id['kunci'] == 'B') { echo "checked"; } ?>>B
							</label>
							<label class="radio-inline">
								<input type="radio" name="kunci" value="C" <?php if($data_pilgan_id['kunci'] == 'C') { echo "checked"; } ?>>C
							</label>
							<label class="radio-inline">
								<input type="radio" name="kunci" value="D" <?php if($data_pilgan_id['kunci'] == 'D') { echo "checked"; } ?>>D
							</label>
							<label class="radio-inline">
								<input type="radio" name="kunci" value="E" <?php if($data_pilgan_id['kunci'] == 'E') { echo "checked"; } ?>>E
							</label>
						</div>
						<div class="form-group">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-success" />
							<input type="reset" value="Reset" class="btn btn-danger" />
						</div>
					</div>
				</form>
				<?php
				if(@$_POST['simpan']) {
					$pertanyaan = @mysqli_real_escape_string($db, $_POST['pertanyaan']);
					$pilA = @mysqli_real_escape_string($db, $_POST['pilA']);
					$pilB = @mysqli_real_escape_string($db, $_POST['pilB']);
					$pilC = @mysqli_real_escape_string($db, $_POST['pilC']);
					$pilD = @mysqli_real_escape_string($db, $_POST['pilD']);
					$pilE = @mysqli_real_escape_string($db, $_POST['pilE']);
					$kunci = @mysqli_real_escape_string($db, $_POST['kunci']);

					$sumber = @$_FILES['gambar']['tmp_name'];
					$target = 'img/gambar_soal_pilgan/';
					$nama_gambar = @$_FILES['gambar']['name'];

					if(@$_GET['gbr'] == 'del') {
						if($nama_gambar == '') {
							mysqli_query($db, "UPDATE tb_soal_pilgan SET pertanyaan = '$pertanyaan', gambar = '', pil_a = '$pilA', pil_b = '$pilB', pil_c = '$pilC', pil_d = '$pilD', pil_e = '$pilE', kunci = '$kunci' WHERE id_pilgan = '$idsoal'") or die ($db->error);
							// echo "gambar benar2 dihapus";
						} else {
							move_uploaded_file($sumber, $target.$nama_gambar);
							mysqli_query($db, "UPDATE tb_soal_pilgan SET pertanyaan = '$pertanyaan', gambar = '$nama_gambar', pil_a = '$pilA', pil_b = '$pilB', pil_c = '$pilC', pil_d = '$pilD', pil_e = '$pilE', kunci = '$kunci' WHERE id_pilgan = '$idsoal'") or die ($db->error);
							// echo "gambar dihapus dan diupload baru";
						}
					} else {
						if($nama_gambar == '') {
							mysqli_query($db, "UPDATE tb_soal_pilgan SET pertanyaan = '$pertanyaan', pil_a = '$pilA', pil_b = '$pilB', pil_c = '$pilC', pil_d = '$pilD', pil_e = '$pilE', kunci = '$kunci' WHERE id_pilgan = '$idsoal'") or die ($db->error);          
							// echo "gambar tidak dihapus dan tidak diperbarui (tetap)";
						} else {
							move_uploaded_file($sumber, $target.$nama_gambar);
							mysqli_query($db, "UPDATE tb_soal_pilgan SET pertanyaan = '$pertanyaan', gambar = '$nama_gambar', pil_a = '$pilA', pil_b = '$pilB', pil_c = '$pilC', pil_d = '$pilD', pil_e = '$pilE', kunci = '$kunci' WHERE id_pilgan = '$idsoal'") or die ($db->error);
							// echo "gambar diperbarui dari sebelumnya";
						}
					}
					echo "<script>window.location='?page=quiz&action=daftarsoal&hal=pilgan&id=".$id."';</script>";
				} ?>

			</div>
		</div>
	</div>
	<?php
} else if(@$_GET['hal'] == "hapussoalpilgan") {
	mysqli_query($db, "DELETE FROM tb_soal_pilgan WHERE id_pilgan = '$idsoal'") or die ($db->error);
	echo "<script>window.location='?page=quiz&action=daftarsoal&hal=pilgan&id=".$id."';</script>";
} else if(@$_GET['hal'] == "editsoalessay") { ?>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Soal Essay</div>
			<div class="panel-body">
			<?php
			$sql_essay_id = mysqli_query($db, "SELECT * FROM tb_soal_essay WHERE id_essay = '$idsoal'") or die ($db->error);
			$data_essay_id = mysqli_fetch_array($sql_essay_id);
			?>
				<form method="post" enctype="multipart/form-data">
					<div class="col-md-2">
						<label>Pertanyaan No. [ <?php echo $ke; ?> ]</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pertanyaan" class="form-control" rows="3" required><?php echo $data_essay_id['pertanyaan']; ?></textarea>
						</div>
					</div>

					<div class="col-md-2">
						<label>Gambar <sup>(Optional)</sup></label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="file" name="gambar" class="form-control" />
							<?php
							if($data_essay_id['gambar'] != '') {
								if(@$_GET['gbr'] != 'del') { ?>
									<div style="margin-top:5px;">
										<img width="150px" src="../admin/img/gambar_soal_essay/<?php echo $data_essay_id['gambar']; ?>" />
										<br /> <small><a href="?page=quiz&action=daftarsoal&hal=editsoalessay&id=<?php echo $id; ?>&idsoal=<?php echo $data_essay_id['id_essay']; ?>&ke=<?php echo $ke; ?>&gbr=del">Hapus Gambar</a></small>
									</div>
								<?php }
							} ?>
						</div>
						<div class="form-group">
	                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success" />
	                        <input type="reset" value="Reset" class="btn btn-danger" />
	                    </div>
					</div>
	            </form>
	            <?php
	            if(@$_POST['simpan']) {
	            	$pertanyaan = @mysqli_real_escape_string($db, $_POST['pertanyaan']);

	            	$sumber = @$_FILES['gambar']['tmp_name'];
                    $target = 'img/gambar_soal_essay/';
                    $nama_gambar = @$_FILES['gambar']['name'];

                    if(@$_GET['gbr'] == 'del') {
						if($nama_gambar == '') {
							mysqli_query($db, "UPDATE tb_soal_essay SET pertanyaan = '$pertanyaan', gambar = '' WHERE id_essay = '$idsoal'") or die ($db->error);
							// echo "gambar benar2 dihapus";
						} else {
							move_uploaded_file($sumber, $target.$nama_gambar);
							mysqli_query($db, "UPDATE tb_soal_essay SET pertanyaan = '$pertanyaan', gambar = '$nama_gambar' WHERE id_essay = '$idsoal'") or die ($db->error);
							// echo "gambar dihapus dan diupload baru";
						}
					} else {
						if($nama_gambar == '') {
							mysqli_query($db, "UPDATE tb_soal_essay SET pertanyaan = '$pertanyaan' WHERE id_essay = '$idsoal'") or die ($db->error); 
							// echo "gambar tidak dihapus dan tidak diperbarui (tetap)";
						} else {
							move_uploaded_file($sumber, $target.$nama_gambar);
							mysqli_query($db, "UPDATE tb_soal_essay SET pertanyaan = '$pertanyaan', gambar = '$nama_gambar' WHERE id_essay = '$idsoal'") or die ($db->error);
							// echo "gambar diperbarui dari sebelumnya";
						}
					}        
                    echo '<script>window.location="?page=quiz&action=daftarsoal&hal=essay&id='.$id.'"</script>';
	            } ?>

			</div>
		</div>
	</div>
	<?php
} else if(@$_GET['hal'] == "hapussoalessay") {
	mysqli_query($db, "DELETE FROM tb_soal_essay WHERE id_essay = '$idsoal'") or die ($db->error);
	echo "<script>window.location='?page=quiz&action=daftarsoal&hal=essay&id=".$id."';</script>";
} ?>
<?
} else if(@$_GET['hal'] == "importsoal") { ?>
<div class="box">
		<!--
-- Source Code from My Notes Code (www.mynotescode.com)
-- 
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/code_notes
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Data Excel dengan PHP</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Style untuk Loading -->
		<style>
        #loading{
			background: whitesmoke;
			position: absolute;
			top: 140px;
			left: 82px;
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		</style>
	</head>
	<body>
		
		
		<!-- Content -->
		<div style="padding: 0 15px;">
			<!-- 
			-- Buat sebuah tombol untuk mengarahkan ke form import data
			-- Tambahkan class btn agar terlihat seperti tombol
			-- Tambahkan class btn-success untuk tombol warna hijau
			-- class pull-right agar posisi link berada di sebelah kanan
			-->
			<!-- <h3>Data Hasil Import</h3>
			<h5>File </h5>
			
			<hr> -->
			
			<!-- Buat sebuah div dan beri class table-responsive agar tabel jadi responsive -->
			<!-- <div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Id Pilgan</th>
						<th>Id Topik Quiz</th>
						<th>Pertanyaan</th>
						<th>Gambar</th>
						<th>Pilihan A</th>
						<th>Pilihan B</th>
						<th>Pilihan c</th>
						<th>Pilihan D</th>
						<th>Pilihan E</th>
						<th>Kunci Jawaban</th>
						<th>Tgl Buat</th>

					</tr> -->
					<?php
					// Load file koneksi.php
					include "koneksi_import.php";
					
					// Buat query untuk menampilkan semua data siswa
					$sql = mysqli_query($connect, "SELECT * FROM tb_soal_pilgan");
					
					$no = 1; // Untuk penomoran tabel, di awal set dengan 1
					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
						// echo "<tr>";
						// echo "<td>".$no."</td>";
						// echo "<td>".$data['id_pilgan']."</td>";
						// echo "<td>".$data['id_tq']."</td>";
						// echo "<td>".$data['pertanyaan']."</td>";
						// echo "<td>".$data['gambar']."</td>";
						// echo "<td>".$data['pil_a']."</td>";
						// echo "<td>".$data['pil_b']."</td>";
						// echo "<td>".$data['pil_c']."</td>";
						// echo "<td>".$data['pil_d']."</td>";
						// echo "<td>".$data['pil_e']."</td>";
						// echo "<td>".$data['kunci']."</td>";
						// echo "<td>".$data['tgl_buat']."</td>";
						
						// echo "</tr>";
						
						// $no++; // Tambah 1 setiap kali looping
					}
					?>
				</table>
			</div>
		</div>
	</body>
</html>

 <?php
if(@($POST['import'])){
    $file = $_FILES['file']['name'];
    $ekstensi = explode("", $file);
    $file_name = "file-".round(microtime(true)).".".end($ekstensi);
    $sumber = $_FILES['file']['tmp_name'];
    $target_dir ="../_file/";
    $target_file = $target_dir.$file_name;
    $upload = move_uploaded_file($sumber, $file_name);
    if($upload){
        echo "upload sukses";
    } else {
        echo "upload gagal";
	}
	echo $file_name;
    }



	            ?>
		    </div>
		</div>
	</div>
	<?php
?>
</form>