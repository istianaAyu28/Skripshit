<div class="row">
	<div class="panel panel-default">
	    <div class="panel-heading">
	        <a onclick="self.history.back();" class="btn btn-danger btn-sm">Kembali</a> &nbsp; 
	        Buat Jenis Soal : <a href="?page=quiz&action=buatsoal&hal=soalpilgan&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Pilihan Ganda</a> 
	        <a href="?page=quiz&action=buatsoal&hal=soalessay&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Essay</a>   
			<!-- <a href="?page=quiz&action=buatsoal&hal=importsoal&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Import Soal</a>   	 -->
	    </div>
		<?php
	    if(@$_GET['hal'] == "soalpilgan" || @$_GET['hal'] == "soalessay"  ) { ?>
		    <div class="panel-heading">
		        Anda juga dapat memilih soal dibawah untuk kelas lain yang sesuai dengan topik kuis ini.
		        <form method="post" enctype="multipart/form-data">Pilih kelas lain <i><small>(centang)</small></i> : 
		        <?php
		        $a = array();
		        $sql_tq_ini = mysqli_query($db, "SELECT * FROM tb_topik_quiz WHERE id_tq = '$id'") or die ($db->error);
		        $data_tq_ini = mysqli_fetch_array($sql_tq_ini);
		        $kelas_ini = $data_tq_ini['id_kelas'];
		       	$judul = $data_tq_ini['judul'];
		       	$id_mapel = $data_tq_ini['id_mapel'];
		       	$sql_kelas_lain = mysqli_query($db, "SELECT * FROM tb_topik_quiz WHERE judul = '$judul' AND id_mapel = '$id_mapel' AND id_kelas != '$kelas_ini'") or die ($db->error);
		        while($data_kelas_lain = mysqli_fetch_array($sql_kelas_lain)){
		        	$id_kls_lain = $data_kelas_lain['id_kelas'];
		        	$sql_nm_kls = mysqli_query($db, "SELECT * FROM tb_kelas WHERE id_kelas = '$id_kls_lain'") or die ($db->error);
		        	$data_nm_kls = mysqli_fetch_array($sql_nm_kls);
		        	?>
	                <label class="checkbox-inline">
	                    <input type="checkbox" name="kls[]" value="<?php echo $data_nm_kls['nama_kelas']; ?>"><?php echo $data_nm_kls['nama_kelas']; ?>
	                </label>
					<?php
					array_push($a, $data_kelas_lain['id_tq']);
				}
				$cek = mysqli_num_rows($sql_kelas_lain);
				// print_r($a);
		        ?>
		    </div>
		<?php } ?>
	    <!-- <div class="panel-body" style="padding-bottom:0;">
			<div class="alert alert-warning">
		        Perhatian, pembuatan soal wajib ada pilihan gandanya, jangan essay saja. Kalo soal pilihan ganda saja tanpa essay atau ada keduanya tidak masalah. 
	        </div> -->
	    </div>
	</div>
</div>

<?php
if(@$_GET['hal'] == "soalpilgan") { ?>
	<div class="row">
		<div class="panel panel-default">
		    <div class="panel-heading">Buat Soal Pilihan Ganda</div>
			
		    <div class="panel-body">
		    	<?php $sql_jumlah_pilgan = mysqli_query($db, "SELECT * FROM tb_soal_pilgan WHERE id_tq = '$id'") or die ($db->error); ?>
					<div class="col-md-2">
						<label>Pertanyaan No. [ <?php echo mysqli_num_rows($sql_jumlah_pilgan) + 1; ?> ]</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pertanyaan" class="form-control" rows="2" required></textarea>
						</div>
					</div>

					<div class="col-md-2">
						<label>Gambar <sup>(Optional)</sup></label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="file" name="gambar" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-2">
						<label>Pilihan A</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilA" class="form-control" rows="1" required></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan B</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilB" class="form-control" rows="1" required></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan C</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilC" class="form-control" rows="1" required></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan D</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilD" class="form-control" rows="1" required></textarea>
						</div>
					</div>
					<div class="col-md-2">
						<label>Pilihan E</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pilE" class="form-control" rows="1" required></textarea>
						</div>
	                </div>
	                <div class="col-md-2">
						<label>Kunci Jawaban</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="kunci" value="A">A
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="kunci" value="B">B
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="kunci" value="C">C
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="kunci" value="D">D
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="kunci" value="E">E
                            </label>
						</div>
						<div class="form-group">
	                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success" />
	                        <input type="reset" value="Reset" class="btn btn-danger" />
							<a href="?page=quiz&action=buatsoal&hal=importsoal&id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Import Soal</a>
	                    </div>
	                </div>
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

	            	$b = array();
	            	for($o = 0; $o < $cek; $o++) {
		            	$kls = @mysqli_real_escape_string($db, $_POST['kls'][$o]);
		            	array_push($b, $kls);

		            	if (in_array($kls, $b)) {
		            		// echo $kls;

		            		if($kls != "") {
			            		$sql_tq_kls = mysqli_query($db, "SELECT * FROM tb_topik_quiz JOIN tb_kelas WHERE id_tq = '$a[$o]' AND nama_kelas = '$kls'") or die ($db->error);
			            		$data_tq_kls = mysqli_fetch_array($sql_tq_kls);
			            		$id_tq_kls = $data_tq_kls['id_tq'];
			            		// echo $id_tq_kls."+".$data_tq_kls['id_kelas'];

			            		move_uploaded_file($sumber, $target.$nama_gambar);
			                    mysqli_query($db, "INSERT INTO tb_soal_pilgan VALUES('', '$id_tq_kls', '$pertanyaan', '$nama_gambar', '$pilA', '$pilB', '$pilC', '$pilD', '$pilE', '$kunci', now())") or die ($db->error);          
			                    echo '<script>window.location="?page=quiz&action=daftarsoal&hal=pilgan&id='.$id.'"</script>';
			            	}
						}
		        	}
		        	// print_r($b);

                    move_uploaded_file($sumber, $target.$nama_gambar);
                    mysqli_query($db, "INSERT INTO tb_soal_pilgan VALUES('', '$id', '$pertanyaan', '$nama_gambar', '$pilA', '$pilB', '$pilC', '$pilD', '$pilE', '$kunci', now())") or die ($db->error);          
                    echo '<script>window.location="?page=quiz&action=daftarsoal&hal=pilgan&id='.$id.'"</script>';
	            } ?>
		    </div>
		</div>
	</div>
<?php
} else if(@$_GET['hal'] == "soalessay") { ?>
	<div class="row">
		<div class="panel panel-default">
		    <div class="panel-heading">Buat Soal Essay</div>
		    <div class="panel-body">
		    	<?php
		    	$sql_jumlah_essay = mysqli_query($db, "SELECT * FROM tb_soal_essay WHERE id_tq = '$id'") or die ($db->error); ?>
					<div class="col-md-2">
						<label>Pertanyaan No. [ <?php echo mysqli_num_rows($sql_jumlah_essay) + 1; ?> ]</label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<textarea name="pertanyaan" class="form-control" rows="3" required></textarea>
						</div>
					</div>

					<div class="col-md-2">
						<label>Gambar <sup>(Optional)</sup></label>
					</div>
					<div class="col-md-10">
						<div class="form-group">
							<input type="file" name="gambar" class="form-control" />
						</div>
						<div class="form-group">
	                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success" />
	                        <input type="reset" value="Reset" class="btn btn-danger" />
	                    </div>
					</div>
	            <?php
	            if(@$_POST['simpan']) {
	            	$pertanyaan = @mysqli_real_escape_string($db, $_POST['pertanyaan']);

	            	$sumber = @$_FILES['gambar']['tmp_name'];
                    $target = 'img/gambar_soal_essay/';
                    $nama_gambar = @$_FILES['gambar']['name'];

                    $c = array();
	            	for($p = 0; $p < $cek; $p++) {
		            	$kls2 = @mysqli_real_escape_string($db, $_POST['kls'][$p]);
		            	array_push($c, $kls2);
		            	if (in_array($kls2, $c)) {
		            		if($kls2 != "") {
			            		$sql_tq_kls2 = mysqli_query($db, "SELECT * FROM tb_topik_quiz JOIN tb_kelas WHERE id_tq = '$a[$p]' AND nama_kelas = '$kls2'") or die ($db->error);
			            		$data_tq_kls2 = mysqli_fetch_array($sql_tq_kls2);
			            		$id_tq_kls2 = $data_tq_kls2['id_tq'];

			            		move_uploaded_file($sumber, $target.$nama_gambar);
			                    mysqli_query($db, "INSERT INTO tb_soal_essay VALUES('', '$id_tq_kls2', '$pertanyaan', '$nama_gambar', now())") or die ($db->error);
			            	}
						}
		        	}

                    move_uploaded_file($sumber, $target.$nama_gambar);
                    mysqli_query($db, "INSERT INTO tb_soal_essay VALUES('', '$id', '$pertanyaan', '$nama_gambar', now())") or die ($db->error);          
                    echo '<script>window.location="?page=quiz&action=daftarsoal&hal=essay&id='.$id.'"</script>';
				}
				
} else if(@$_GET['hal'] == "importsoal") { ?>

<div class="row">
<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "db_elearning"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
?>
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
			<!-- <a href="inc/index.php" class="btn btn-success pull-right">
				<span class="glyphicon glyphicon-upload"></span> Import Data
			</a>
			
			<h3>Data Hasil Import</h3>
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
						
						$no++; // Tambah 1 setiap kali looping
					}
					?>

<?php

$connect = mysqli_connect("localhost", "root", "", "db_elearning");
$output = '';
if(isset($_POST["import"]))
{
  $fileName = explode(".", $_FILES["excel"]["name"]);
  $extension = end($fileName);
   $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file

  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Added: </label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $id_pilgan = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $id_tq = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $pertanyaan = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $gambar = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $pil_a = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $pil_b = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $pil_c = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $pil_d = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $pil_e = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $kunci = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $tgl_buat = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());

    if(!empty($id_pilgan) || !empty($id_tq)|| !empty($pertanyaan)|| !empty($gambar)|| !empty($pil_a)|| !empty($pil_b)|| !empty($pil_c)|| !empty($pil_d)|| !empty($pil_e)|| !empty($kunci)|| !empty($tgl_buat)) // if none of the data are empty
    {
      $output .= "<tr>";
      $query = "INSERT INTO tb_soal_pilgan(id_pilgan,id_tq,pertanyaan,gambar,pil_a,pil_b,pil_c,pil_d,pil_e,kunci,tgl_buat) VALUES ('".$id_pilgan."', '".$id_tq."', '".$pertanyaan."', '".$gambar."', '".$pil_a."', '".$pil_b."', '".$pil_c."', '".$pil_d."', '".$pil_e."', '".$kunci."', '".$tgl_buat."')";
      
      mysqli_query($connect, $query);
      $output .= '<td>'.$id_pilgan.'</td>';
      $output .= '<td>'.$id_tq.'</td>';
      $output .= '<td>'.$pertanyaan.'</td>';
      $output .= '<td>'.$gambar.'</td>';
      $output .= '<td>'.$pil_a.'</td>';
      $output .= '<td>'.$pil_b.'</td>';
      $output .= '<td>'.$pil_c.'</td>';
      $output .= '<td>'.$pil_d.'</td>';
      $output .= '<td>'.$pil_e.'</td>';
      $output .= '<td>'.$kunci.'</td>';
      $output .= '<td>'.$tgl_buat.'</td>';
      $output .= '</tr>';
    }
   }
  } 
  $output .= '</table>';
  $target_dir = "uploads/"; //file upload folder
  $target_file = $target_dir .time().basename($_FILES["excel"]["name"]); // target file to be uploaded

  //upload the file
  if (move_uploaded_file($_FILES["excel"]["name"], $target_file)) {
       $fileUploadMsg= "<label class='text-success'>The file has been uploaded Successfully!</label><br>";
    } else {
       $fileUploadMsg= '<label class="text-danger"></label><br>';
    }

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
  <title>E-Learning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color: #808080;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  input[type="file"]{
    border:1px solid gray;
  }
  
  </style>
 </head>
 <body>
  <div class="container box">
   <form method="post" enctype="multipart/form-data">
    <div class="container-fluid">
      <h3 align="center" class="text-success" style="font-weight:600;">Import Soal Pilihan Ganda</h3><br />
      <div class="row" style="margin-bottom:20px">
        <div class="col-md-4 col-xs-4 col-sm-4"></div>  <!-- Blank Div -->
        <div class="col-md-4 ">
          <img src="img/soal.png" height="170px" width="170px">
        </div>
      </div>
      <div class="row">
        <div  class="col-xs-6 col-md-5 col-sm-6 col-lg-5">
            <input type="file" name="excel" />
        </div>
        <div class="col-xs-7 col-md-7 col-sm-6 col-lg-7">
            <input type="submit" name="import" class="btn btn-info" value="Import" style="padding:2px 20px;"/>
        </div>
      </div>
  </div>
   </form>
   <br />
   <br />
   <?php
      echo $output;
      echo @$fileUploadMsg;
      echo "<hr/>
			<p style='float:right' class='btn btn-info'><a href='/progres9/minuputri/e-learning/admin/index.php'>Kembali</a></p>";
      mysqli_close($connect);
   ?>
  </div>
 </body>
</html>




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
} ?>
</form>