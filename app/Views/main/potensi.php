<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten')?>

    <!-- judul konten -->
    <div class="container-fluid judulkonten">
        <div class="container-xl">
            <h1>potensi</h1>
        </div>
    </div>
    <!-- batas judul konten -->

    <!-- contoh konten -->
    <div class="container-md konten">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="<?= base_url('img/survei.jpg'); ?>" alt="..." class="img-fluid">
                </div>
                <div class=" col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">Potensi 1</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="<?= base_url('img/survei.jpg'); ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- batas contoh konten -->
    <?= $this->endSection()?>