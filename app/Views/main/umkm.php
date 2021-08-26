<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten')?>

    <!-- judul konten -->
    <div class="container-fluid judulkonten">
        <div class="container-xl">
            <h1>umkm</h1>
        </div>
    </div>
    <!-- batas judul konten -->

    <div class="container-xl mt-5 konten">
        <!-- link untuk halaman berita -->
        <?= $pager->links('umkm', 'pagination_custom') ?>
        <!-- batas link untuk halaman berita -->
        <div class="row">
            <div class="col-md-12">
                <!-- looping dari database untuk menampilkan berita -->
                <?php foreach ($umkm as $u) : ?>
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="<?= base_url('img/survei.jpg'); ?>" alt="..." class="img-fluid">
                            </div>
                            <div class=" col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title my-1"><?= $u['nama_umkm'] ?></h5>
                                    <p class="card-text my-0"><small class="text-muted">Pemilik : <?= $u['nama_pemilik'] ?></small></p>
                                    <p class="card-text my-0"><small class="text-muted">Kontak : <?= $u['kontak'] ?></small></p>
                                    <p class="card-text my-0"><small class="text-muted">Lokasi : <?= $u['lokasi'] ?></small></p>
                                    <p class="card-text my-2"><?= $u['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- batas looping berita dari database ("contoh bisa menggunakan db dummy dengan field isi dan judul") -->
            </div>
        </div>

    </div>

    <?=$this->endSection();?>