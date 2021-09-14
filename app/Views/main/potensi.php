<?= $this->extend('main/headerfooter') ?>

<?= $this->section('konten') ?>

<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1>potensi</h1>
    </div>
</div>
<!-- batas judul konten -->

<!-- contoh konten -->
<div class="container-md konten">
    <!-- <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="<?= base_url('img/Pohon_Jati.jpg'); ?>" alt="..." class="img-fluid">
            </div>
            <div class=" col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Tempat Wisata</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div> -->
    <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="<?= base_url('img/Pohon_Jati.jpg'); ?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Hutan</h5>
                    <p class="card-text">Di hutan Desa Plandi terdapat berbagai jenis pohon, tetapi tidak ada suatu jenis pohon yang mendominasi. Jenis pohon yang banyak di Desa Plandi adalah pohon jati dan pohon sengon. Pohon jati bisa digunakan sebagai perabotan, hiasan, bahan rumah, dan lain-lain. Sedangkan untuk pohon sengon bisa digunakan untuk membuat peti, perahu, ramuan rumah, jembatan, dan lain-lain.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="<?= base_url('img/tanaman.jpg'); ?>" class="" alt="Foto sawah desa plandi" width="100%" height="306">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Sawah dan Kebun</h5>
                    <p class="card-text">Penduduk Desa Plandi menanam banyak hal pada sawah dan kebun mereka. Mulai dari padi, tebu, jagung, tembakau, dan kopi. Hasil panen tersebut ada yang dikirim ke luar Desa Plandi dan ada juga yang dijual di pasar.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 shadow">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="<?= base_url('img/Pohon_Jati.jpg'); ?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Yayasan Pendidikan Pondok Pesantren Subulas Salam</h5>
                    <p class="card-text">Pondok Pesantren Subulas Salam adalah suatu yayasan pendidikan yang berlokasi di Dusun Selobekiti, Desa Plandi Kecamatan Wonosari, Kabupaten Malang, dengan membawahi membawahi 4 lembaga yang terdiri dari Pondok Pesantren, Raudlatul Athfal (RA), Madrasah Ibtidaiyah (MI), Madrasah Tsaniwiyah (MTs), dan Madrasah Aliyah (MA). Yayasan Pendidikan ini didirikan oleh KH. Muhammad Asyiq Sirodj Mabruri pada tahun 1955. Pada awal didirikan, hanya terdapat Madrasah Ibtidaiyah saja. Kemudian seiring dengan berjalannya waktu, terbentuklah lembaga-lembaga yang lainnya dimulai dari Pondok Pesantren yang berdiri sejak tahun 1971, kemudian RA, MA hingga MTs, sehingga menjadi sebuah Yayasan Pendidikan yang mengajarkan keilmuan agama Islam dan ilmu pengetahuan umum, baik melalui pendidikan formal maupun non-formal. Sejak Beliau pendiri Yayasan Pondok Pesantren Subulas Salam wafat di tahun 2000, hingga sekarang yayasan tersebut dikelola dan dikembangkan oleh putra-putri Beliau.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- batas contoh konten -->
<?= $this->endSection() ?>