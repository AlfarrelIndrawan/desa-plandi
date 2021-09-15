<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>

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
        <!-- looping dari database untuk menampilkan berita -->
        <?php foreach ($umkm as $u) : ?>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="card mb-4 shadow" style=" border-radius: 20px;">
                        <img src="<?= base_url('img/umkm/' . $u['foto']) ?>" class="card-img-top border-bottom border-dark" alt="..." style=" object-fit: contain; border-top-right-radius: 20px; border-top-left-radius: 20px; height: 286px;">
                        <div class="card-body" style="background-color: #90d26d;">
                            <h4 class="card-title"><?php echo $u['nama_umkm']; ?></h4>
                            <h6 class="card-subtitle my-2   ">Pemilik : <?= $u['nama_pemilik'] ?></h6>
                            <h6 class="card-subtitle my-2">Kontak : <?= $u['kontak'] ?></h6>
                            <h6 class="card-subtitle my-2">Lokasi : <?= $u['lokasi'] ?></h6>
                            <p class="card-text"><?php echo $u['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- batas looping berita dari database -->
    </div>
</div>

<?= $this->endSection(); ?>