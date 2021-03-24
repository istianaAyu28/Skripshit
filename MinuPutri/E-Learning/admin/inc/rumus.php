<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Manajemen Penilaian</h1>
    </div>
</div>
<?php
if (@$_GET['action'] == '') { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Presentase Penilaian
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="datasiswa">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pilihan Ganda</th>
                                    <th>Essay</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql_siswa = mysqli_query($db, "SELECT * FROM tb_rumus WHERE id_rumus = 1 ") or die($db->error);
                                $no = 1;
                                if (mysqli_num_rows($sql_siswa) > 0) {
                                    while ($data_siswa = mysqli_fetch_array($sql_siswa)) { ?>
                                        <tr>
                                            <td align="center"><?= $no; ?></td>
                                            <td><?php echo $data_siswa['pilgan']; ?></td>
                                            <td><?php echo $data_siswa['esay']; ?></td>
                                            <td align="center">
                                                <a href="?page=rumus&action=edit" class="badge">Edit</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="8" align="center">Data tidak ditemukan</td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                        <script>
                            $(document).ready(function() {
                                $('#datasiswa').dataTable();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } elseif (@$_GET['action'] == 'edit') { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Presentase Penilaian &nbsp; <a href="?page=rumus" class="btn btn-warning btn-sm">Kembali</a></div>
                <div class="panel-body">
                    <form method="post">
                        <?php
                        $sql_mapel_id = mysqli_query($db, "SELECT * FROM tb_rumus WHERE id_rumus = 1") or die($db->error);
                        $data_mapel_id = mysqli_fetch_array($sql_mapel_id);
                        ?>
                        <div class="form-group">
                            <label>Pilihan Ganda *</label>
                            <input type="number" name="kode_mapel" value="<?php echo $data_mapel_id['pilgan']; ?>" class="form-control" step="0.01" placeholder="Ex: 0.40" min="0.01" max="0.99" required />
                        </div>
                        <div class="form-group">
                            <label>Essay *</label>
                            <input type="decimal" name="mapel" value="<?php echo $data_mapel_id['esay']; ?>" class="form-control" step="0.01" placeholder="Ex: 0.60 " min="0.01" max="0.99" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success" />
                            <input type="reset" value="Reset" class="btn btn-danger" />
                        </div>
                    </form>
                    <?php
                    if (@$_POST['simpan']) {
                        $kode_mapel = @mysqli_real_escape_string($db, $_POST['kode_mapel']);
                        $mapel = @mysqli_real_escape_string($db, $_POST['mapel']);
                        $ttl = $kode_mapel + $mapel;
                        if ($ttl > 1 || $ttl < 1) {
                            echo "<script>alert('masukkan rumus dengan total pilgan + esay = 1.00'); window.location='?page=rumus&action=edit';</script>";
                        } else {
                            mysqli_query($db, "UPDATE tb_rumus SET pilgan = '$kode_mapel', esay = '$mapel' WHERE id = '$id'") or die($db->error);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>