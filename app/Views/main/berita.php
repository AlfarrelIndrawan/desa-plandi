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
                            <img src="<?= base_url('img/umkm.jpeg') ?>" class="card-img-top" alt="..." style=" object-fit: cover; border-top-right-radius: 20px; border-top-left-radius: 20px;">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $b['judul']; ?></h4>
                                <h6 class="card-subtitle my-2 text-muted"><?php echo $b['tanggal']; ?></h6>
                                <p class="card-text"><?php echo $b['berita']; ?></p>
                                <a class="badge badge-success" style="background-color: #90d26d;" href="<?= route_to('detail_berita', $b['id_berita']) ?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- batas looping berita dari database ("contoh bisa menggunakan db dummy dengan field isi dan judul") -->
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <!-- kategori berita -->
        <div class="col-xl-1 border-left">
            <div class="container">
                <h5 class="category">Kategori</h5>
                <ul class="mb-5" style="list-style: none; padding: 0;">
                    <a class="category" href=" #">
                        <li>Ekonomi</li>
                    </a>
                    <a class="category" href="#">
                        <li>Pendidikan</li>
                    </a>
                    <a class="category" href="#">
                        <li>Sosial</li>
                    </a>
                    <a class="category" href="#">
                        <li>Kesehatan</li>
                    </a>
                    <a class="category" href="#">
                        <li>Lainnya</li>
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