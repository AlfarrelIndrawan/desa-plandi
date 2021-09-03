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
<div class="container-md konten">
    <h6><a href="<?= route_to('berita') ?>">Kembali</a></h6>
    <h2><?= $berita['judul'] ?></h2>
    <h6 class="text-muted"><?= $berita['tanggal']?></h6>
    <h6 class="text-muted">Penulis, <?= $berita['penulis']?></h6>
    <h6 class="text-muted">Kategori, <?= $berita['kategori']?></h6>
    <?php $teks = explode("<br>",$berita['berita']);
    foreach($teks as $t) { ?>
        <p><?php echo $t ?></p>
    <?php } ?>
</div>
<!-- batas contoh konten -->
<?= $this->endSection() ?>