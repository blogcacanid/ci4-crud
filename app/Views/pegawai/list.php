<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-list"></i>&nbsp;Pegawai
                    <div class="float-right">
                        <a href="<?php echo base_url('pegawai/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i>&nbsp;Add Record</a>
                        <a style="margin: 2px;" href="<?php echo base_url('pegawai'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i>&nbsp;Refresh</a>
                    </div>
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
                    <table class="table table-striped table-bordered" style="font-style: Calibri;font-size:11px">
                        <thead>
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($result) && is_array($result)) { ?>
                                <?php foreach ($result as $row) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url('pegawai/show/'.$row['pegawai_id']); ?>" title="View"><span style="font-size: 1em; color: Mediumslateblue;"><i class="fa fa-eye"></i></span></a>&nbsp;
                                            <a href="<?php echo base_url('pegawai/edit/'.$row['pegawai_id']); ?>" title="Edit"><span style="font-size: 1em; color: Dodgerblue;"><i class="fa fa-edit"></i></span></a>&nbsp;
                                            <a href="<?php echo base_url('pegawai/destroy/'.$row['pegawai_id']); ?>" title="Delete"><span style="font-size: 1em; color: Tomato;"><i class="fa fa-trash"></span></i></a>
                                        </td>
                                        <td><?php echo $row['nip']; ?></td>
                                        <td><?php echo $row['nama_pegawai']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td><?php echo $row['created_at'] ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="5" class="text-center">No record found !</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?= $pager->links(); ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    })
</script>
<?= $this->endSection() ?>