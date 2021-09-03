<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/cssheader.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/cssjudul.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/cssprofil.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('img/logomalang.png') ?>" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3b9659dcfe.js" crossorigin="anonymous"></script>


    <title>Profil | Desa Plandi</title>
</head>

<body>
    <!-- header -->
    <div class="container-xl header">
        <div class="row">

            <!-- Nama dan Logo Kabupaten Malang -->
            <div class="col desa">
                <img class="logomalang" src="<?= base_url('img/logomalang.png'); ?>" width="74px" height="90px"></img>
                <p class="pdesa">
                    Desa Plandi - Wonosari
                </p>
            </div>
            <!-- batas nama dan logo desa -->

            <!-- Email Desa -->
            <div class="col email">
                <img class="logoemail" src="<?= base_url('img/logosurat.png'); ?>" alt="email" width="47px" height="49px">
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
                    <a class="nav-link" href="<?= base_url('/') ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('beranda/profil'); ?>">Pemerintahan</a>
                        <a class="dropdown-item" href="<?= base_url('beranda/sejarah'); ?>">Sejarah</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/potensi'); ?>">Potensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda/umkm'); ?>">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('beranda/monografi'); ?>">
                        Monografi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('beranda/berita'); ?>">
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('beranda/layanan'); ?>">
                        Layanan
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
            <h1>sejarah</h1>
        </div>
    </div>
    <!-- batas judul konten -->

    <!-- visi dan misi desa -->
    <div class="container shadow-sm">
        <div class="container-md pb-4 pt-4 konten">
            <h3 class="pb-3 mb-4 pt-4 border-bottom">
                Sejarah
            </h3>
            <p style="text-align: justify; line-height: 2rem;">
                <b>&emsp;&emsp;&emsp;Sejarah Desa Plandi</b> tidak terlepas dari sejarah Masyarakat yang tidak bisa melupakan tentang awal
                adanya Desa Plandi. Menurut nara sumber pada tahun 1857 beberapa kelompok orang membuka hutan
                belantara yang ada di lereng Gunung Kawi., Kelompok orang tersebut di ketuai oleh sepasang suami
                istri. Sang suami bernama Mbah
                Suprono yang membuka hutan belantara yang sekarang menjadi desa Kluwut Kec.Wonosari. Sedangkan Sang
                Istri yang terkenal dengan sebutan Mbah Gedembo membuka hutan belantara yang sekarang dinamakan desa Plandi Kec.Wonosari.
                <br>&emsp;&emsp;&emsp;Menurut sejarah Mbah Gedembo adalah seorang putri yang cantik rupawan yang tekun ibadah (Santri). Pada
                saat babat alas tersebut Mbah Gedembo menemukan sebuah Goa. Dan dipintu Goa tersebut tertutupi oleh laba-laba
                (orang jawa Kemlandingan).Pada saat itulah Mbah Gedembo menamakan desa Plandi yang dikenal hingga sekarang.
                <br>&emsp;&emsp;&emsp;Seiring dengan sejarah nama desa Plandi tersebut, di desa Plandi hingga sekarang telah dipimpin
                oleh 17 Kepala Desa.Namun yang masih bisa dikenang dan tertulis sebanyak 8 Kepala Desa. Dari 8 Kepala
                Desa itu yang pertama P.Uklik (di jaman belanda). Kedua P.Makrub (Jaman belanda ),
                Ketiga H.Kasinem (Jaman belanda), ke empat P.Rasino / P.Jasmono (Jaman
                Belanda) , keLima P.Imam Puro ( Th.1950), ke enam P.Purnomo (Th.1965),
                Ke tujuh P.Surateman. kedelapan P.Karim, ke sembilan P.Abiyazid Bustomi
                Ke sepuluh P.Ngadiman (th.2007 hingga sekarang).
                . Dan tahun 2008 Dusun Selobekiti dibagi menjadi dua dusun yaitu Selobekiti dan Tambak Rejo yang mana Desa
                Plandi saat ini memiliki 4 Dusun yaitu Dusun Plandi Krajan, Dusun Selobekiti, Dusun Tambak Rejo, dan Dusun Pandan Ploso.
            </p>
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