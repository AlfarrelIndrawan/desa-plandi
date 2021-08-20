<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assetcss/cssheader.css">
    <link rel="stylesheet" type="text/css" href="assetcss/cssjudul.css">
    <link rel="stylesheet" type="text/css" href="assetcss/cssprofil.css">
    <script src="https://kit.fontawesome.com/3b9659dcfe.js" crossorigin="anonymous"></script>


    <title>Profil | Desa Plandi</title>
</head>

<body>

    <!-- header -->
    <div class="container-xl header">
        <div class="row">

            <!-- Nama dan Logo Kabupaten Malang -->
            <div class="col desa">
                <img class="logomalang" src="logomalang.png" width="74px" height="90px"></img>
                <p class="pdesa">
                    Desa Plandi - Wonosari
                </p>
            </div>
            <!-- batas nama dan logo desa -->

            <!-- Email Desa -->
            <div class="col email">
                <img class="logoemail" src="logosurat.png" alt="email" width="47px" height="49px">
                <p class="pemail">desa-plandi@malangkab.go.id</p>
            </div>
            <!-- batas Email Desa -->
        </div>
    </div>
    <!-- batas header -->

    <!-- navbar -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/'); ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="<?= base_url('/Profil_Desa'); ?>">Pemerintahan</a>
                        <a class="dropdown-item" href="#">Sejarah</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/Potensi'); ?>">Potensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('/Monografi'); ?>">
                        Monografi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('/Berita'); ?>">
                        Berita
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- batas navbar -->

    <!-- js untuk navbar -->
    <script>
        // js untuk navbar
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <!-- batas js untuk navbar -->

    <!-- judul konten -->
    <div class="container-fluid judulkonten">
        <div class="container-xl">
            <h1>profil desa</h1>
        </div>
    </div>
    <!-- batas judul konten -->

    <!-- visi dan misi desa -->
    <div class="container-md konten">
        <h3 class="pb-3 mb-5 border-bottom">
            Visi
        </h3>
        <p>
            “DENGAN SEMANGAT PERSAUDARAAN, GOTONG ROYONG DAN AKHLAK MULIA GUNA MEWUJUDKAN DESA LANGKAP YANG LUAR BIASA”.
        </p>
    </div>
    <div class="container-md konten">
        <h3 class="pb-3 mb-5 border-bottom">
            Misi
        </h3>
        <ul style="list-style: decimal;">
            <li class="item-misi">Mengutamakan pemberdayaan potensi pertanian untuk menunjang sumber pendapatan dan kesejahteraan masyarakat desa sebagai sentra kegiatan pokok.</li>
            <li class="item-misi">Meningkatkan kualitas Sumber Daya Manusia melalui Program pendidikan dan program kesehatan serta pengamalan ajaran agama kepada masyarakat.</li>
            <li class="item-misi">Menggali , melestarikan dan mengembangkan nilai - nilai budaya desa</li>
            <li class="item-misi"> Meningkatkan ketahanan ekonomi dengan menggalakkan usaha ekonomi kerakyatan melalui program strategi dibidang produksi ekonomi pertanian , kerajinan, pariwisata.</li>
            <li class="item-misi">Meningkatkan partisipasi masyarakat dalam menumbuh kembangkan kesadaran dan kemandirian dalam pembangunan desa yang berkelanjutan.</li>
            <li class="item-misi">Menciptakan suasana yang aman dan tertib dalam kehidupan bermasyarakat.</li>
            <li class="item-misi">Meningkatkan pelayanan kepada masyarakat dan kerjasama anat lembaga pemerintahan di desa serta lembaga adat.</li>
            <li class="item-misi">Memberdayakan masyarakat dengan mengoptimalkan potensi yang ada menuju masyarakat mandiri dan sejahtera.</li>
        </ul>
    </div>
    <!-- batas visi dan misi desa !visi dan misi pada kode ini hanya contoh-->

    <!-- struktur desa -->
    <div class="container-xl konten">
        <h3 class="pb-3 mb-5 border-bottom">
            Struktur Organisasi
        </h3>
        <div class="container" style="text-align: center;">
            <img src="strukturorg.jpeg">
        </div>
    </div>
    <!-- batas struktur desa -->

    <!-- footer -->
    <div class="container-fluid footer">
        <div class="container-xl">
        </div>
    </div>
    <!-- batas footer -->

    <!-- batas visi dan misi desa -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>