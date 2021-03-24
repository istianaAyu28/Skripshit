<?php
error_reporting(0);
if(@$_GET['hal'] == 'essay') { ?>
    <div class="row">
    	<div class="panel panel-default">
    	    <div class="panel-heading">
    	        Koreksi Jawaban Essay &nbsp; <a onclick="self.history.back();" class="btn btn-warning btn-sm">Kembali</a>
    	    </div>
            <form action="" method="post">
    	    <div class="panel-body">
                <div class="table-responsive">
                    <table width="100%">
                        <?php
                        $urut = 1;
                        $sql_jawaban = mysqli_query($db, "SELECT * FROM tb_jawaban JOIN tb_soal_essay ON tb_jawaban.id_soal =  tb_soal_essay.id_essay WHERE tb_jawaban.id_tq = '$id_tq' AND tb_jawaban.id_siswa = '$_GET[id_siswa]'") or die ($db->error);
                        $jumlah_soal = mysqli_num_rows($sql_jawaban);
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)) { ?>
                            <tr>
                                <td width="10%" valign="top">( <?php echo $no++; ?> )</td>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td><b>Pertanyaan :</b></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $data_jawaban['pertanyaan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Jawaban :</b></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $data_jawaban['jawaban']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nilai <small>(Silahkan isi nilai dengan range nilai 0-100)</small> :</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="text" name="nilai_essay[<?php echo $urut++; ?>]" value="">
                                        
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <input type="submit" name="simpan_koreksi" value="Simpan" class="btn btn-primary btn-sm" />
                <input type="reset" value="Reset" class="btn btn-danger btn-sm" />
            </div>
            </form>
            <?php
             $id_tq = $_GET['id_tq'];
             $rms = mysqli_query($db, "SELECT * FROM tb_topik_quiz where id_tq = '$id_tq'") or die ($db->error);
 
            $nilai = 0;
            if(@$_POST['simpan_koreksi']) {
                foreach(@$_POST['nilai_essay'] as $key => $value) {
                    $nilai = $nilai + $value;
                }
                $nilai_total = $nilai / $jumlah_soal;
                
            while($r = mysqli_fetch_array($rms)){
                var_dump($r['rms_essay']);
                    $nt = $nilai_total * $r['rms_essay'];
            }
                mysqli_query($db, "INSERT INTO tb_nilai_essay VALUES('', '$id_tq', '$_GET[id_siswa]', '$nt')") or die ($db->error);
                echo "<script>window.location='?page=quiz&action=pesertakoreksi&id_tq=".$id_tq."';</script>";
            }
            ?>
    	</div>
    </div>
<?php
} else if(@$_GET['hal'] == 'editessay') { ?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Koreksi Jawaban Essay &nbsp; <a onclick="self.history.back();" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            <form action="" method="post">
            <div class="panel-body">
                <div class="table-responsive">
                    <table width="100%">
                        <?php
                        $urut = 1;
                        $sql_jawaban = mysqli_query($db, "SELECT * FROM tb_jawaban JOIN tb_soal_essay ON tb_jawaban.id_soal =  tb_soal_essay.id_essay WHERE tb_jawaban.id_tq = '$id_tq' AND tb_jawaban.id_siswa = '$_GET[id_siswa]'") or die ($db->error);
                        $jumlah_soal = mysqli_num_rows($sql_jawaban);
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)) { ?>
                            <tr>
                                <td width="10%" valign="top">( <?php echo $no++; ?> )</td>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td><b>Pertanyaan :</b></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $data_jawaban['pertanyaan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Jawaban :</b></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $data_jawaban['jawaban']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nilai <small>(Silahkan Edit Nilai)</small> :</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <input type="text" name="nilai_essay[<?php echo $urut++; ?>]" value="">
                                        
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <input type="submit" name="simpan_koreksi" value="Simpan" class="btn btn-primary btn-sm" />
                <input type="reset" value="Reset" class="btn btn-danger btn-sm" />
            </div>
            </form>
            <?php
            $id_tq = $_GET['id_tq'];
            $rms = mysqli_query($db, "SELECT * FROM tb_topik_quiz where id_tq = '$id_tq'") or die ($db->error);

            $nilai = 0;
            if(@$_POST['simpan_koreksi']) {
                foreach(@$_POST['nilai_essay'] as $key => $value) {
                    $nilai = $nilai + $value;
                }
                $nilai_total = $nilai / $jumlah_soal;
            while($r = mysqli_fetch_array($rms)){
                var_dump($r['rms_essay']);
                    $nt = $nilai_total * $r['rms_essay'];
            }
                mysqli_query($db, "UPDATE tb_nilai_essay SET nilai = '$nt' WHERE id = '$_GET[id_nilai]'") or die ($db->error);
                echo "<script>window.location='?page=quiz&action=pesertakoreksi&id_tq=".$id_tq."';</script>";
            }
            ?>
        </div>
    </div>
<?php
} ?>