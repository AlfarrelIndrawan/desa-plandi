<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('css/cssberanda.css') ?>">
<!-- carousel berita -->
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $count = 0;
        foreach ($berita as $b) {
            if ($count == 0) { ?>
                <div class="carousel-item active">
                    <a href="<?= route_to('detail_berita', $b['id_berita']) ?>">
                        <img src="<?= base_url('img/berita/' . $b['foto']) ?>" class="d-block w-100" alt="...">
                    </a>
                    <div class="carousel-caption my-5 d-none d-md-block">
                        <h5><?= $b['judul'] ?></h5>
                        <h6 class="card-subtitle my-4 text-muted"><?php echo $b['tanggal']; ?></h6>
                        <p><?= $b['berita'] ?></p>
                    </div>
                </div>
            <?php } else { ?>
                <div class="carousel-item">
                    <a href="<?= route_to('detail_berita', $b['id_berita']) ?>">
                        <img src="<?= base_url('img/berita/' . $b['foto']) ?>" class="d-block w-100" alt="...">
                    </a>
                    <div class="carousel-caption my-5 d-none d-md-block">
                        <h5><?= $b['judul'] ?></h5>
                        <h6 class="card-subtitle my-4 text-muted"><?php echo $b['tanggal']; ?></h6>
                        <p><?= $b['berita'] ?></p>
                    </div>
                </div>
            <?php }
            $count = $count + 1;
            ?>
        <?php
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- batas carousel berita -->

<!-- Container UMKM -->
<div class="container-md konten umkm">
    <h3 class=" pb-3 mb-5 border-bottom">
        UMKM
    </h3>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="<?= base_url('img/umkm.jpeg') ?>" alt="...">
        </div>
        <div class="col-md-6 text-justify">
            <p class="card-text">
                <b>UMKM</b> adalah istilah umum dalam khazanah ekonomi yang merujuk kepada usaha ekonomi produktif yang dimiliki perorangan maupun badan usaha sesuai
                dengan kriteria yang ditetapkan oleh Undang-undang No. 20 tahun 2008. UMKM artinya bisnis yang dijalankan individu, rumah tangga, atau badan usaha ukuran
                kecil. Penggolongan UMKM didasarkan batasan omzet pendapatan per tahun, jumlah kekayaan aset, serta jumlah pegawai. Desa Plandi memiliki beberapa UMKM yang
                cukup terkenal diantaranya adalah kerajinan anyaman dan usaha pengupasan kulit singkong, selain itu ada banyak lagi UMKM yang ada di Desa Plandi yang dapat
                menunjang perekonomian warga Desa Plandi
            </p>
        </div>
    </div>
    <p class="lead mb-0" style="font-weight: bold; text-align: right;"><a href="<?= base_url('beranda/umkm') ?>">Lainnya -></a></p>
</div>
<!-- batas container UMKM -->

<!-- container potensi -->
<div class="container-md konten umkm">
    <h3 class=" pb-3 mb-5 border-bottom">
        POTENSI
    </h3>
    <div class="row">
        <div class="col-md-6">
            <img src="<?= base_url('img/Pohon_Jati.jpg') ?>" alt="..." class="img-fluid align-middle">
        </div>
        <div class="col-md-6 text-justify">
            <p class="card-text">
                <b>Potensi Desa</b> adalah kemampuan, kekuatan atau sumber daya (fisik dan non fisik) yang
                dimiliki oleh suatu daerah namun belum sepenuhnya terlihat atau dipergunakan
                secara maksimal yang terbingkai dalam suatu kesatuan masyarakat hukum
                berdasarkan pada adat istiadat dan tradisi atau kebiasaan masyarakat setempat serta
                mempunyai hak untuk mengatur rumah tangga sendiri, selanjutnya secara
                administratif berada di lingkup pemerintahan Kabupaten/Kota, yang diakui dan
                dihormati dalam sistem pemerintahan Negara Kesatuan Republik Indonesia.
            </p>
        </div>
    </div>
    <p class="lead mb-0" style="font-weight: bold; text-align: right;"><a href="<?= base_url('beranda/potensi') ?>">Lainnya -></a></p>
</div>
<!-- batas container potensi -->

<!-- containe lokasi -->
<div class="container-md konten peta">
    <h3 class=" pb-3 mb-5 border-bottom">
        LOKASI
    </h3>
    <div class="row mb-2">
        <!-- container peta dan alamat -->
        <div class="col md-7">
            <h5>Kantor Pemerintahan</h5>
            <p>Jl. Juanda No.15, Plandi, Wonosari, Malang, Jawa Timur 65164</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31598.835121852306!2d112.50398536551133!3d-8.116304676051506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7899339d5327a9%3A0x23c338311c74a715!2sPlandi%2C%20Wonosari%2C%20Malang%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1628850759212!5m2!1sen!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- batas container peta dan alamat -->
        <div class="col-md-1 d-none d-md-block"></div>
        <!-- container kontak -->
        <div class="col md-4 mx-auto my-auto">
            <h5 class="mb-2 pb-2 border-bottom">
                Kontak
            </h5>
            <ul class="contact-info mb-5">
                <a class="telepon" href="tel:08xx xxxx xxxx">
                    <li><i class="fas fa-comment"></i> &nbsp;08xx xxxx xxxx</li>
                </a>
                <a class=" mail mailto" href="mailto:desa-plandi@malangkab.go.id">
                    <li><i class="fas fa-at"></i> &nbsp;desa-plandi@malangkab.go.id</li>
                </a>
            </ul>
        </div>
        <!-- batas container kontak -->
    </div>
</div>
<!-- batas container lokasi -->
<?= $this->endSection() ?>