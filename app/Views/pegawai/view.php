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

                    <table class="table table-striped table-bordered" style="font-style: Calibri;font-size:11px">
                        <tr>
                            <th scope="col">NIP</th>
                            <td><?= $result['nip'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Nama Pegawai</th>
                            <td><?= $result['nama_pegawai'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Alamat</th>
                            <td><?= $result['alamat'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Created Date</th>
                            <td><?= $result['created_at'];?></td>
                        </tr>
                    </table>
                    <a href="<?= base_url('pegawai') ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
