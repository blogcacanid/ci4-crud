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
                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>

                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>
                    <?= form_open('pegawai/update/'. $result['pegawai_id']); ?>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" value="<?= $result['nip'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" value="<?= $result['nama_pegawai'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required><?= $result['alamat'];?></textarea>
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
