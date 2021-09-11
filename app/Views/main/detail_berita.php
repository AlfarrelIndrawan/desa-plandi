<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>
<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1>berita</h1>
    </div>
</div>
<!-- batas judul konten -->

<!-- menampilkan berita-->
<div class="container-xl mt-3 konten">
    <div class="row">
        <div class="col-md-10">
            <div class="card-body d-flex flex-column align-items-start shadow-sm">
                <h2 class="mb-0">
                    <p class="text-dark" href="#"><?= $berita['judul'] ?></p>
                </h2>
                </h3>
                <div class="mb-3 text-muted"><?= $berita['tanggal'] ?></div>
                <div class="card-text mb-3" style="width: 100%;">
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="<?= base_url('img/berita/' . $berita['foto']) ?>" alt="" class="img-fluid w-100"></p>
                    <?php $teks = explode("\n", $berita['berita']);
                    foreach ($teks as $t) { ?>
                        <p style="margin-bottom:3px; text-align: justify;"><?php echo $t ?></p>
                        <br>
                    <?php } ?>
                </div>
            </div>

            <h2 class="mt-4">Berita Lainnya</h2>
            <div class="container">
                <div class="row">
                    <?php foreach ($beritas as $b) { ?>
                        <?php
                        if ($berita['id_berita'] == $b['id_berita']) {
                        } else {
                        ?>
                            <div class="col-sm-4">
                                <div class="card mb-4 shadow" style=" border-radius: 20px;">
                                    <img src="<?= base_url('img/berita/' . $b['foto']) ?>" class="card-img-top" alt="..." style=" object-fit: cover; border-top-right-radius: 20px; border-top-left-radius: 20px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $b['judul']; ?></h4>
                                        <h6 class="card-subtitle my-2 text-muted"><?php echo $b['tanggal']; ?></h6>
                                        <p class="card-text"><?php echo $b['berita']; ?></p>
                                        <a class="badge badge-success" style="background-color: #90d26d;" target="_blank" href="<?= route_to('detail_berita', $b['id_berita']) ?>">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
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