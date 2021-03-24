<?php


if(isset($POST['import'])){
    $file = $_FILES['file']['name'];
    $ekstensi = explode(".", $file);
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
    
 
    
 }
?>