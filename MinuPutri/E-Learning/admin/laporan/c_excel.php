<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Nilai</title>
    <style type="text/css">
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 3px 8px;
        }
    </style>
</head>

<body>

    <?php
    include "../../+koneksi.php";
    // include "../inc/PHPExcel/Autoloader.php";
    $id_tq = $_GET['id_tq'];
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=nilai.xls");
    ?>
    <table border="1">

        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai Essay</th>
            <th>Nilai Pilgan</th>
        </tr>
        <?php
        $sql_siswa_mengikuti_tes = mysqli_query($db, "SELECT * FROM tb_nilai_pilgan JOIN tb_siswa ON tb_nilai_pilgan.id_siswa = tb_siswa.id_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_tq = '$id_tq'") or die($db->error);
        $no = 1;
        if (mysqli_num_rows($sql_siswa_mengikuti_tes) > 0) {
            while ($data_siswa_mengikuti_tes = mysqli_fetch_array($sql_siswa_mengikuti_tes)) {
        ?>
                <tr>
                    <td align="center"><?php echo $no++; ?></td>
                    <td><?php echo $data_siswa_mengikuti_tes['nama_lengkap']; ?></td>
                    <td><?php echo $data_siswa_mengikuti_tes['nama_kelas']; ?></td>
                    <?php
                    $sql_pilgan = mysqli_query($db, "SELECT * FROM tb_nilai_pilgan WHERE id_siswa = '$data_siswa_mengikuti_tes[id_siswa]' AND id_tq = '$id_tq'") or die($db->error);
                    $data_pilgan = mysqli_fetch_array($sql_pilgan);
                    $sql_jwb = mysqli_query($db, "SELECT * FROM tb_jawaban WHERE id_siswa = '$data_siswa_mengikuti_tes[id_siswa]' AND id_tq = '$id_tq'") or die($db->error);
                    $sql_essay = mysqli_query($db, "SELECT * FROM tb_nilai_essay WHERE id_siswa = '$data_siswa_mengikuti_tes[id_siswa]' AND id_tq = '$id_tq'") or die($db->error);
                    $data_essay = mysqli_fetch_array($sql_essay);
                    ?>
                    <td>
                        <?php
                        if (mysqli_num_rows($sql_jwb) > 0) {
                            if (mysqli_num_rows($sql_essay) > 0) {
                                echo $data_essay['nilai'];
                            } else {
                                echo "(belum dikoreksi)";
                            }
                        } else {
                            echo "Ujian ini tidak ada soal essay";
                        } ?>
                    </td>
                    <td>
                        <?php echo $data_pilgan['presentase']; ?>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo '<tr><td colspan="5" align="center">Data tidak ditemukan</td></tr>';
        } ?>

    </table>

</body>

</html>