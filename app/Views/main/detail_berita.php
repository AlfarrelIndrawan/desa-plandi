<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>
<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1><?= $berita['judul']?></h1>
    </div>
</div>
<!-- batas judul konten -->

<!-- menampilkan berita-->
<div class="container-xl mt-5 konten">
    <div class="row">
        <div class="col-md-10">
            <h2><?= $berita['judul'] ?></h2>
            <h6 class="text-muted"><?= $berita['tanggal']?></h6>
            <h6 class="text-muted">Penulis, <?= $berita['penulis']?></h6>
            <h6 class="text-muted">Kategori: <?= $berita['kategori']?></h6>
            <?php $teks = explode("\n",$berita['berita']);
            foreach($teks as $t) { ?>
                <p style="margin-bottom:3px; text-align: justify;"><?php echo $t ?></p>
                <br>
            <?php } ?>
            <h2>Berita Lainnya</h2>
            <div class="container">
                <div class="row">
                    <?php foreach($beritas as $b) { ?>
                        <div class="col-sm">
                            <div class="card mb-4 shadow" style=" border-radius: 20px;">
                                <img src="<?= base_url('img/umkm.jpeg') ?>" class="card-img-top" alt="..." style=" object-fit: cover; border-top-right-radius: 20px; border-top-left-radius: 20px;">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $b['judul']; ?></h4>
                                    <h6 class="card-subtitle my-2 text-muted"><?php echo $b['tanggal']; ?></h6>
                                    <p class="card-text"><?php echo $b['berita']; ?></p>
                                    <a class="badge badge-success" style="background-color: #90d26d;" target="_blank" href="<?= route_to('detail_berita', $b['id_berita']) ?>">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
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

<!-- batas menampilkan berita -->
<!-- batas contoh konten -->
<?= $this->endSection() ?>