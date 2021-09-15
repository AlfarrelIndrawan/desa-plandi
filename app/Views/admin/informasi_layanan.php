<?php
$this->extend('admin/headerfooter');
$this->section('konten');
?>
<div class="container-fluid">
    <div class="card border-left-success shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="m-0 font-weight-bold text-success">INFORMASI SURAT</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <p>Tipe Surat: <?= $layanan['tipe_surat']?></p>
                <p>Tanggal Pengajuan: <?= $layanan['tanggal']?></p>
                <p>Nomor Pengaju: <?= $layanan['kontak_pengaju']?></p>
                <?php
                    $informasi = explode(";", $layanan['informasi']);
                    foreach($informasi as $i) {
                        echo "$i<br><br>";
                    }
                ?>
                    <div class="row" style="text-align: right;">
                        <div class="col-md-6 p-2">
                            <a href="<?= base_url('admin/layanan') ?>" class="btn btn-outline-danger btn-block"> Batal</a>
                        </div>
                        <div class="col-md-6 p-2">
                            <a href="<?= base_url('admin/konfirmasiSurat/' . $layanan['id_surat']) ?>" class="btn btn-outline-success btn-block"> Mempersetujui Surat</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Show image preview -->
<?= $this->endSection(); ?>