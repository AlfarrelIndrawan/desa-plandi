<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('css/cssberanda.css') ?>">
<!-- carousel berita -->
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>ini merupakan caption dari berita carousel yang ada di web desa plandi</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Contoh Caption Untuk Carousel untuk KKN Desa Plandi 2021 Dengan Judul yang sangat panjang</h5>
                <p>Some representative placeholder content for the first slide. Lorem ipsum, dolor sit
                    amet consectetur adipisicing elit. Dicta saepe fuga eum repellat quos tempora quod
                    veritatis ipsum assumenda. Inventore pariatur similique tempore hic sint eius voluptatum
                    facere dicta deserunt. </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Ini Contoh Caption untuk carousel berita yang diletakkan setelah navbar</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
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

<!-- paragraf tentang desa plandi -->
<div class="container-md konten" style="text-align: center;">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, necessitatibus sequi. Laudantium aut fuga nobis corrupti ullam adipisci, qui molestiae quis, quibusdam facere et fugit necessitatibus rerum atque maxime beatae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusamus ducimus nostrum officiis nihil! Accusantium maxime maiores assumenda sit ratione, optio possimus molestiae necessitatibus voluptatibus vel, sed quia, totam minima!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum blanditiis iusto error, numquam odio earum debitis! Repudiandae, at ipsum! Voluptatibus obcaecati ratione totam, provident suscipit hic exercitationem odio est amet.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, necessitatibus sequi. Laudantium aut fuga nobis corrupti ullam adipisci, qui molestiae quis, quibusdam facere et fugit necessitatibus rerum atque maxime beatae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit accusamus ducimus nostrum officiis nihil! Accusantium maxime maiores assumenda sit ratione, optio possimus molestiae necessitatibus voluptatibus vel, sed quia, totam minima!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum blanditiis iusto error, numquam odio earum debitis! Repudiandae, at ipsum! Voluptatibus obcaecati ratione totam, provident suscipit hic exercitationem odio est amet.
    </p>
</div>
<!-- batas paragraf tentang desa plandi -->

<!-- Container UMKM -->
<div class="container-md konten umkm">
    <h3 class=" pb-3 mb-5 border-bottom">
        UMKM
    </h3>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="<?= base_url('img/survei.jpg') ?>" alt="...">
        </div>
        <div class="col-md-6 text-justify">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam maiores non architecto, aut molestias repudiandae ipsa, quaerat minima laudantium voluptates, hic minus cupiditate eaque. Quod qui voluptates repellat ut ipsa?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic iure ducimus et eum dolore odit eveniet, unde aliquid quaerat excepturi esse, alias impedit, voluptatum earum magnam? Nesciunt reprehenderit quasi numquam.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, reprehenderit? Voluptates dolores officiis ratione hic minus vitae delectus velit necessitatibus voluptate, repudiandae excepturi laudantium quia quo ut recusandae quidem! Nesciunt?
            </p>
        </div>
    </div>
    <p class="lead mb-0" style="font-weight: bold; text-align: right;"><a href="<?= base_url('beranda/umkm') ?>">Lainnya -></a></p>
</div>
<!-- batas container UMKM -->

<!-- container potensi -->
<div class="container-md konten umkm">
    <h3 class=" pb-3 mb-5 border-bottom">
        Potensi
    </h3>
    <div class="row">
        <div class="col-md-6">
            <img src="<?= base_url('img/umkm.jpeg') ?>" alt="..." class="img-fluid align-middle">
        </div>
        <div class="col-md-6 text-justify">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam maiores non architecto, aut molestias repudiandae ipsa, quaerat minima laudantium voluptates, hic minus cupiditate eaque. Quod qui voluptates repellat ut ipsa?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic iure ducimus et eum dolore odit eveniet, unde aliquid quaerat excepturi esse, alias impedit, voluptatum earum magnam? Nesciunt reprehenderit quasi numquam.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, reprehenderit? Voluptates dolores officiis ratione hic minus vitae delectus velit necessitatibus voluptate, repudiandae excepturi laudantium quia quo ut recusandae quidem! Nesciunt?
            </p>
        </div>
    </div>
    <p class="lead mb-0" style="font-weight: bold; text-align: right;"><a href="<?= base_url('beranda/potensi') ?>">Lainnya -></a></p>
</div>
<!-- batas container potensi -->

<!-- containe lokasi -->
<div class="container-md konten peta">
    <h3 class=" pb-3 mb-5 border-bottom">
        Lokasi
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