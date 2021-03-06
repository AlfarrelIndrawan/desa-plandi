<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>
<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1>Berita</h1>
    </div>
</div>
<!-- batas judul konten -->

<!-- menampilkan berita-->
<div class="container-xl mt-5 konten">
    <!-- link untuk halaman berita -->
    <?= $pager->links('berita', 'pagination_custom') ?>
    <!-- batas link untuk halaman berita -->
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <!-- looping dari database untuk menampilkan berita -->
                <?php foreach ($berita as $b) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow" style=" border-radius: 20px;">
                            <img src="<?= base_url('img/berita/' . $b['foto']) ?>" class="card-img-top" alt="..." style=" object-fit: cover; border-top-right-radius: 20px; border-top-left-radius: 20px; height: 160px">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $b['judul']; ?></h4>
                                <h6 class="card-subtitle my-2 text-muted"><?php echo $b['tanggal']; ?></h6>
                                <p class="card-text"><?php echo $b['berita']; ?></p>
                                <a class="badge badge-success" style="background-color: #90d26d;" target="_blank" href="<?= route_to('detail_berita', $b['id_berita']) ?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- batas looping berita dari database -->
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <!-- kategori berita -->
        <div class="col-xl-1 border-left">
            <div class="container">
                <h5 class="category">Kategori</h5>
                <ul class="mb-5" style="list-style: none; padding: 0;">
                    <a class="category" href="<?= route_to('berita') ?>">
                        <li>Semua</li>
                    </a>
                    <a class="category" href="<?= route_to('berita_kategori', 'desa') ?>">
                        <li>Desa</li>
                    </a>
                    <a class="category" href="<?= route_to('berita_kategori', 'umkm') ?>">
                        <li>UMKM</li>
                    </a>
                </ul>
            </div>
        </div>
        <!-- batas kategori berita -->
    </div>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/cssberita.css') ?>">
</div>
<!-- batas contoh konten -->
<?= $this->endSection() ?>