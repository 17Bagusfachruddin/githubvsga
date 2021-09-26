<?php 
// menampilkan DB buku
$ambilAnggota = $conn->query("SELECT * FROM tb_anggota") or die(mysqli_error($conn));

?>
 <section class="content-header">
                            <h1>
                                Data Anggota
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li class="active">Buku</li>
                            </ol>
                        </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Buku</h3>    

                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <div class="box-title">
                                        <a href="?p=anggota&aksi=tambah" class="btn btn-primary">Tambah Data</a>
                                    </div>
                                    <div class="dataTables_filter">
                                        <label>Search <input type='text' id='input' onkeyup='searchTable()'></label>
                                    </div><!-- /input-group -->
                                    <table class="table table-bordered table-striped">
                                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($pecahAnggota = $ambilAnggota->fetch_assoc()) {
                    $jk = ($pecahAnggota['jk'] == 'L') ? 'Laki-Laki' : 'Perempuan';
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecahAnggota['nama_anggota']; ?></td>
                        <td><?= $pecahAnggota['tempat_lahir']; ?></td>
                        <td><?= $pecahAnggota['tgl_lahir']; ?></td>
                        <td><?= $jk; ?></td>
                        <td><?= $pecahAnggota['prodi']; ?></td>
                        <td>
                            <a href="?p=anggota&aksi=ubah&id=<?= $pecahAnggota['id_anggota']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?p=anggota&aksi=hapus&id=<?= $pecahAnggota['id_anggota']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick="return confirm('Yakin ?')"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                                            
                                       <!--  <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->