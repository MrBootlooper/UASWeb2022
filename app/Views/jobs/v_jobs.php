<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>

            <div class="card-tools">
                <a target="_blank" href="<?= base_url('Jobs/Print') ?>" class="btn btn-flat btn-primary btn-xm">
                    <i class="fas fa-print"></i> Print
                </a>
                <a href="<?= base_url('Jobs/Tambah') ?>" class="btn btn-flat btn-primary btn-xm">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            //notifikasi pesan ketika data berhasil ditambah, diupdate dan dihapus
            if (session()->getFlashdata('insert')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('insert');
                echo '</div>';
            }
            if (session()->getFlashdata('update')) {
                echo '<div class="alert alert-primary">';
                echo session()->getFlashdata('update');
                echo '</div>';
            }
            if (session()->getFlashdata('delete')) {
                echo '<div class="alert alert-danger">';
                echo session()->getFlashdata('delete');
                echo '</div>';
            }
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Perusahaan</th>
                        <th>Salary</th>
                        <th>Tipe Waktu</th>
                        <th>Pengalaman</th>
                        <th>Deskripsi</th>
                        <th>Tags</th>
                        <th>Kontak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($jobs as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['Judul'] ?></td>
                            <td><?= $value['perusahaan'] ?></td>
                            <td><?= $value['salary'] ?></td>
                            <td><?= $value['TipeWaktu'] ?></td>
                            <td><?= $value['Pengalaman'] ?></td>
                            <td><?= $value['Deskripsi'] ?></td>
                            <td><?= $value['Tags'] ?></td>
                            <td><?= $value['kontak'] ?></td>
                            <td>
                                <a href="<?= base_url('Jobs/Edit/' . $value['id']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="<?= base_url('Jobs/Delete/' . $value['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>