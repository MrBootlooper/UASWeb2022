<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>


            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php  
            session();
            $validation = \Config\Services::validation();
            ?>

            <?php echo form_open('Jobs/InsertData') ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="Judul" value="<?= old('Judul') ?>" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('Judul')) ? $validation->getError('Judul') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input name="perusahaan" value="<?= old('perusahaan') ?>" class="form-control">
                        <p class="text-danger"><?= $validation->hasError('perusahaan') ? $validation->getError('perusahaan') : '' ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Salary</label>
                        <input name="salary" value="<?= old('salary') ?>" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('salary')) ? $validation->getError('salary') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tipe Waktu</label>
                        <select name="TipeWaktu" value="<?= old('TipeWaktu') ?>" class="form-control">
                            <option value="">Pilih Tipe Waktu</option>
                            <option value="Full-Time">Full-Time</option>
                            <option value="Part-Time">Part-Time</option>
                        </select>
                        <p class="text-danger"><?= ($validation->hasError('TipeWaktu')) ? $validation->getError('TipeWaktu') : '' ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pengalaman</label>
                        <input name="Pengalaman" value="<?= old('Pengalaman') ?>" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('Pengalaman')) ? $validation->getError('Pengalaman') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input name="Deskripsi" value="<?= old('Deskripsi') ?>" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('Deskripsi')) ? $validation->getError('Deskripsi') : '' ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tags</label>
                        <input name="Tags" value="<?= old('Tags') ?>" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('Tags')) ? $validation->getError('Tags') : '' ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kontak</label>
                        <input name="kontak" value="<?= old('kontak') ?>" class="form-control">
                        <p class="text-danger"><?= ($validation->hasError('kontak')) ? $validation->getError('kontak') : '' ?></p>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="<?= base_url('Jobs') ?>" class="btn btn-success">Kembali</a>


            <?php echo form_close() ?>

        </div>
    </div>
</div>