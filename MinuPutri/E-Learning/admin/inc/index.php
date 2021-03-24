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
       $fileUploadMsg= '<label class="text-danger">Sorry, there was an error uploading your file!</label><br>';
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


