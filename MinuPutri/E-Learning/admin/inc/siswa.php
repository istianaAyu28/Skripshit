<?php
$no = 1;
$id = @$_GET['id'];

if (@$_SESSION['admin']) { ?>
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Manajemen Data Siswa</h1>
        </div>
    </div>
    <?php
}

if (@$_GET['action'] == '') {

    if (@$_SESSION['admin']) { ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    Admin tidak dapat mengedit data siswa. Admin hanya dapat mengaktifkan dan menonaktifkan serta menghapus akun siswa. Untuk mengedit data siswa yang berhak ialah siswa itu sendiri.
                </div>
            </div>
        </div>
    <?php
    } ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Kelas</h4>
                </div>
                <div class="panel-body">

                    <select name="iDkelas" id="kls">
                        <option value="">Choose class</option>
                        <?php
                        $f = @$_GET['IDkelas'];
                        $kls = mysqli_query($db, "SELECT * FROM tb_kelas") or die($db->error);
                        while ($k = mysqli_fetch_array($kls)) {
                        ?>
                            <option <?php if ($f == $k['id_kelas']) echo 'selected'; ?> value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                        <?php } ?>
                    </select>
                    <script>
                        $(document).ready(function() {
                            $('#kls').on('change', function() {
                                var a = $(this).val();
                                window.location = '?page=siswa&IDkelas=' + a;
                            });

                        });
                    </script>
                    <!-- <a href="./laporan/cetak.php?data=siswa&IDsiswa=<?php $ID['id_siswa']; ?>" target="_blank" rel="noopener noreferrer"></a> -->

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    if (@$_GET['IDkelas'] == '') {
                        echo 'Data Siswa yang Aktif &nbsp; <a href="./laporan/cetak.php?data=siswa" target="_blank" class="btn btn-default btn-xs">Cetak Data Siswa</a>';
                    } else if (@$_GET['IDkelas'] != '') {
                        echo "Data Siswa Per Kelas " . @$_GET['kelas'] . " yang Aktif &nbsp; <a href='?page=kelas' class='btn btn-warning btn-sm'>Kembali</a>";
                    } ?>

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="datasiswa">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <?php if (@$_SESSION['admin']) { ?>
                                        <th>Status</th>
                                    <?php } ?>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (@$_GET['IDkelas'] == '') {
                                    $sql_siswa = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE tb_siswa.status = 'lulus'") or die($db->error);
                                } else if (@$_GET['IDkelas'] != '') {
                                    $sql_siswa = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE tb_siswa.status = 'aktif' AND tb_siswa.id_kelas = '$_GET[IDkelas]'") or die($db->error);
                                }

                                if (mysqli_num_rows($sql_siswa) > 0) {
                                    while ($data_siswa = mysqli_fetch_array($sql_siswa)) { ?>
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td><?php echo $data_siswa['nis']; ?></td>
                                            <td><?php echo $data_siswa['nama_lengkap']; ?></td>
                                            <td><?php echo $data_siswa['jenis_kelamin']; ?></td>
                                            <td><?php echo $data_siswa['alamat']; ?></td>
                                            <td align="center"><?php echo $data_siswa['nama_kelas']; ?></td>
                                            <?php if (@$_SESSION['admin']) { ?>
                                                <td><?php echo ucfirst($data_siswa['status']); ?></td>
                                            <?php } ?>
                                            <td align="center">
                                                <?php if (@$_SESSION['admin']) { ?>
                                                    <a href="?page=siswa&action=nonaktifkan&id=<?php echo $data_siswa['id_siswa']; ?>" class="badge" style="background-color:#f60;">Non aktifkan</a>
                                                    <a onclick="return confirm('Yakin akan menghapus data ?');" href="?page=siswa&action=hapus&id=<?php echo $data_siswa['id_siswa']; ?>" class="badge" style="background-color:#f00;">Hapus</a>
                                                <?php } ?>
                                                <a href="?page=siswa&action=detail&IDsiswa=<?php echo $data_siswa['id_siswa']; ?>" class="badge">Detail</a>
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

<?php
} else if (@$_GET['action'] == 'nonaktifkan') {
    mysqli_query($db, "UPDATE tb_siswa SET status = 'tidak aktif' WHERE id_siswa = '$id'") or die($db->error);
    echo "<script>window.location='?page=siswa';</script>";
} else if (@$_GET['action'] == 'hapus') {
    mysqli_query($db, "DELETE FROM tb_siswa WHERE id_siswa = '$id'") or die($db->error);
    echo "<script>window.location='?page=siswa';</script>";
} else if (@$_GET['action'] == 'detail') {
    $sql_siswa_per_id = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_siswa = '$_GET[IDsiswa]'") or die($db->error);
    $data = mysqli_fetch_array($sql_siswa_per_id);
?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Data Siswa</div>
                <div class="panel-body">
                    <a href="?page=siswa&action=upper&id=<?= $data['id_siswa']; ?>" class="badge" style="background-color:#f60;">Kenaikan Kelas </a>
                    <div class="table-responsive">
                        <table width="100%">
                            <tr>
                                <td align="right" width="46%"><b>NIS</b></td>
                                <td align="center">:</td>
                                <td width="46%"><?php echo $data['nis']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Nama Lengkap</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Tempat Tanggal Lahir</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['tempat_lahir'] . ", " . tgl_indo($data['tgl_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Jenis Kelamin</b></td>
                                <td align="center">:</td>
                                <td><?php if ($data['jenis_kelamin'] == 'L') {
                                        echo "Laki-laki";
                                    } else {
                                        echo "Perempuan";
                                    } ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Agama</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['agama']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Nama Ayah</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['nama_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Nama Ibu</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['nama_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Nomor Telepon</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['no_telp']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Email</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['email']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Alamat</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Kelas</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['nama_kelas']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Tahun Masuk</b></td>
                                <td align="center">:</td>
                                <td><?php echo $data['thn_masuk']; ?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>History Class</b></td>
                                <td align="center">:</td>
                                <td>
                                    <?php
                                    $id = $_GET['IDsiswa'];
                                    $hc = mysqli_query($db, "SELECT * FROM tb_history as a JOIN tb_siswa as b on b.id_siswa = a.id_siswa JOIN tb_kelas as c on c.id_kelas = a.id_kelas") or die($db->error);

                                    while ($hcl = mysqli_fetch_array($hc)) {
                                        if ($hcl['id_siswa'] == $id) {?>
                                    .         | <?php echo $hcl['nama_kelas']; ?> |
                                        <?php }
                                    }

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top"><b>Foto</b></td>
                                <td align="center" valign="top">:</td>
                                <td>
                                    <div style="padding:10px 0;"><img width="250px" src="./../img/foto_siswa/<?php echo $data['foto']; ?>" /></div>
                                </td>
                            </tr>
                            <?php if (@$_SESSION['admin']) { ?>
                                <tr>
                                    <td align="right"><b>Username</b></td>
                                    <td align="center">:</td>
                                    <td><?php echo $data['username']; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Password</b></td>
                                    <td align="center">:</td>
                                    <td><?php echo $data['pass']; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Status</b></td>
                                    <td align="center">:</td>
                                    <td><?php echo ucfirst($data['status']); ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
<?php
} else if (@$_GET['action'] == 'upper') {
    $sql_siswa_per_id = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_siswa = '$_GET[id]'") or die($db->error);
    $data = mysqli_fetch_array($sql_siswa_per_id);
    $a = substr($data['nama_kelas'], 0, 1);
    $cls = (int)$a;
?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php if ($cls == 6) { ?>
                        <h4>Status</h4>
                    <?php } else { ?>
                        <h4>Kelas</h4>
                    <?php } ?>
                </div>
                <div class="panel-body">

                    <?php $f = @$_GET['id'];
                    $kls = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_siswa = '$f' ") or die($db->error);

                    if ($cls == 6) { ?>

                        <select name="idk" id="kelas">
                            <option value="">Choose Status</option>
                            <?php
                            while ($k = mysqli_fetch_array($kls)) {
                            ?>
                                <option <?php if ("aktif" == $k['status']) echo 'selected'; ?> value="aktif">Aktif</option>
                                <option <?php if ("lulus" == $k['status']) echo 'selected'; ?> value="lulus">Lulus</option>
                                <option <?php if ("tidak aktif" == $k['status']) echo 'selected'; ?> value="tidak aktif">Tidak Aktif</option>
                            <?php } ?>
                        </select>
                        <a onclick="submit()" class="btn btn-primary"> haloo </a>
                        <script>
                            function submit() {
                                var a = $('#kelas').val();
                                window.location = '?page=siswa&id=<?php echo $f; ?>&action=update&ket=' + a;
                            }
                        </script>

                    <?php } elseif ($cls < 6) { ?>
                        <select name="idk" id="kelas">
                            <?php
                            $f = @$_GET['id'];
                            $kls = mysqli_query($db, "SELECT * FROM tb_kelas") or die($db->error);
                            while ($k = mysqli_fetch_array($kls)) {
                            ?>
                                <option <?php if ($f == $k['id_kelas']) echo 'selected'; ?> value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                            <?php } ?>
                        </select>
                        <a onclick="submitK()" class="btn btn-primary"> haloo </a>
                        <script>
                            function submitK() {
                                var a = $('#kelas').val();
                                window.location = '?page=siswa&id=<?php echo $f; ?>&action=update_kelas&ket=' + a;
                            }
                        </script>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php } elseif (@$_GET['action'] == 'update') {
    $sql_siswa_per_id = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_siswa = '$_GET[id]'") or die($db->error);
    $data = mysqli_fetch_array($sql_siswa_per_id);
    $a = substr($data['nama_kelas'], 0, 1); //dapetin huruf pertama
    $cls = (int)$a; //convert jadi int
    if (@$_GET['ket'] == 'lulus') {
        $kls = $data['id_kelas'];
        $a =  mysqli_query($db, "INSERT INTO tb_history (id_siswa, id_kelas) VALUES ('$id', '$kls' )") or die($db->error);
        mysqli_query($db, "UPDATE tb_siswa SET status = 'lulus' WHERE id_siswa = '$id'") or die($db->error);
    } else {
        $ket = @$_GET['ket'];
        mysqli_query($db, "UPDATE tb_siswa SET status = '$ket' WHERE id_siswa = '$id'") or die($db->error);
    }
    echo "<script>window.location='?page=siswa';</script>";
} elseif (@$_GET['action'] == 'update_kelas') {
    $sql_siswa_per_id = mysqli_query($db, "SELECT * FROM tb_siswa JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE id_siswa = '$_GET[id]'") or die($db->error);
    $data = mysqli_fetch_array($sql_siswa_per_id);
    $a = substr($data['nama_kelas'], 0, 1); //dapetin huruf pertama
    $cls = (int)$a; //convert jadi int
    $kls = $data['id_kelas'];
    $ket = @$_GET['ket'];
    mysqli_query($db, "INSERT INTO tb_history (id_siswa, id_kelas) VALUES ('$id', '$kls' )") or die($db->error);
    mysqli_query($db, "UPDATE tb_siswa SET id_kelas = '$ket' WHERE id_siswa = '$id'") or die($db->error);
    echo "<script>window.location='?page=siswa';</script>";
} ?>