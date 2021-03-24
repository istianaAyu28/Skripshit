<?php
include "../../+koneksi.php";
include "../inc/PHPExcel.php";
// include "../inc/PHPExcel/Worksheet.php";

$id_tq = $_GET['id_tq'];

$objPHPExcel    =   new PHPExcel();
$result         =   $db->query("SELECT * FROM tb_nilai_pilgan JOIN tb_siswa ON tb_nilai_pilgan.id_siswa = tb_siswa.id_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_tq = '$id_tq'") or die($db->error);

$objPHPExcel->setActiveSheetIndex(0);

$objPHPExcel->getActiveSheet()->mergeCells('A1:A3');
$objPHPExcel->getActiveSheet()->mergeCells('B1:E1');
$objPHPExcel->getActiveSheet()->mergeCells('B2:E2');
$objPHPExcel->getActiveSheet()->mergeCells('B3:E3');
$objPHPExcel->getActiveSheet()->getColumnDimension("A")->setWidth("20");
$objPHPExcel->getActiveSheet()->getColumnDimension("B")->setWidth("25");
$objPHPExcel->getActiveSheet()->getColumnDimension("C")->setWidth('30');
$objPHPExcel->getActiveSheet()->getColumnDimension("D")->setWidth('30');
$objPHPExcel->getActiveSheet()->getColumnDimension("E")->setWidth('30');
$objPHPExcel->getActiveSheet()->getRowDimension("1")->setRowHeight('20');
$objPHPExcel->getActiveSheet()->getRowDimension("2")->setRowHeight('20');
$objPHPExcel->getActiveSheet()->getRowDimension("3")->setRowHeight('20');

$objPHPExcel->getActiveSheet()->setCellValue('B1', 'MADRASAH IBTIDAIYAH NU PUTRI MALANG');
$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Alamat : Jl. Yulius Usman No.14 B, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117');
$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Telp : (0341) 359490 - Email : sdminu@yahoo.com');

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Customer Signature');        //set name to image
$objDrawing->setDescription('Customer Signature'); //set description to image
$objDrawing->setPath('../../style/assets/img/logosd.png');
$objDrawing->setOffsetX(40);                       //setOffsetX works properly
$objDrawing->setOffsetY(8);                       //setOffsetY works properly
$objDrawing->setCoordinates('A1');        //set image to cell
$objDrawing->setWidth(82);                 //set width, height
$objDrawing->setHeight(62);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());  //save

$objPHPExcel->getActiveSheet()->SetCellValue('A5', 'No');
$objPHPExcel->getActiveSheet()->SetCellValue('B5', 'Nama Lengkap');
$objPHPExcel->getActiveSheet()->SetCellValue('C5', 'Nama Kelas');
$objPHPExcel->getActiveSheet()->SetCellValue('D5', 'Nilai Essay');
$objPHPExcel->getActiveSheet()->SetCellValue('E5', 'Nilai Pilgan');

$rowCount   =   6;
$no = 1;
while ($row  =   $result->fetch_array()) {

    $sql_pilgan = mysqli_query($db, "SELECT * FROM tb_nilai_pilgan WHERE id_siswa = '$row[id_siswa]' AND id_tq = '$id_tq'") or die($db->error);
    $data_pilgan = mysqli_fetch_array($sql_pilgan);
    $sql_jwb = mysqli_query($db, "SELECT * FROM tb_jawaban WHERE id_siswa = '$row[id_siswa]' AND id_tq = '$id_tq'") or die($db->error);
    $sql_essay = mysqli_query($db, "SELECT * FROM tb_nilai_essay WHERE id_siswa = '$row[id_siswa]' AND id_tq = '$id_tq'") or die($db->error);
    $data_essay = mysqli_fetch_array($sql_essay);

    if (mysqli_num_rows($sql_jwb) > 0) {
        if (mysqli_num_rows($sql_essay) > 0) {
            $a =  $data_essay['nilai'];
        } else {
            $a = "(belum dikoreksi)";
        }
    } else {
        $a = "Ujian ini tidak ada soal essay";
    }
    $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $no);
    $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, mb_strtoupper($row['nama_lengkap'], 'UTF-8'));
    $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, mb_strtoupper($row['nama_kelas'], 'UTF-8'));
    $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $a);
    $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $data_pilgan['presentase']);
    $rowCount++;
    $no++;
}

$styleArray = [
    'borders' => [
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    ],
    'alignment' => [
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ],
    'font' => [
        'bold' => true,
    ]
];
$jdl = [
    'borders' => [

        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THICK), // Set border bottom dengan garis tipis

    ],
    'alignment' => [
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ],
    'font' => [
        'bold' => true,
    ]
];
$styleArray1 = [
    'borders' => [
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    ],
    'alignment' => [
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ]
];

$rowCount = $rowCount - 1;
$objPHPExcel->getActiveSheet()->getStyle("A1:E3")->applyFromArray($styleArray);
for ($i = 'A'; $i < 'F'; $i++) {
    $objPHPExcel->getActiveSheet()->getStyle($i . "5")->applyFromArray($styleArray);
    $objPHPExcel->getActiveSheet()->getStyle($i . $rowCount)->applyFromArray($styleArray1);
}

for ($i = 6; $i < $rowCount; $i++) {
    $objPHPExcel->getActiveSheet()->getStyle('A'. $i)->applyFromArray($styleArray1);
    $objPHPExcel->getActiveSheet()->getStyle('B'. $i)->applyFromArray($styleArray1);
    $objPHPExcel->getActiveSheet()->getStyle('C'. $i)->applyFromArray($styleArray1);
    $objPHPExcel->getActiveSheet()->getStyle('D'. $i)->applyFromArray($styleArray1);
    $objPHPExcel->getActiveSheet()->getStyle('E'. $i)->applyFromArray($styleArray1);
}
// $objPHPExcel->getActiveSheet()->getStyle("A2:C" . $rowCount)->applyFromArray($styleArray1);
$objWriter  =   new PHPExcel_Writer_Excel2007($objPHPExcel);

header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="ujian.xlsx"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
