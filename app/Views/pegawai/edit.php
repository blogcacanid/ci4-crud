<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">
                    <?= form_open('pegawai/update/'. $result['pegawai_id']); ?>
                    <input type="hidden" name="pegawai_id" value="<?= $result['pegawai_id'];?>" class="form-control" required>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" value="<?= $result['nip'];?>" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nip'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" value="<?= $result['nama_pegawai'];?>" class="form-control <?= ($validation->hasError('nama_pegawai')) ? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_pegawai'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?= $result['alamat']; ?>" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('pegawai') ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</a>
                        <button class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Update</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
