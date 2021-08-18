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
    <script src="https://kit.fontawesome.com/3b9659dcfe.js" crossorigin="anonymous"></script>


    <title>Template | Desa Plandi</title>
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
                    <a class="nav-link" href="<?= base_url('/') ?>">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Potensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        Monografi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
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
            <h1>template web</h1>
        </div>
    </div>
    <!-- batas judul konten -->

    <!-- contoh konten -->
    <div class="container-md konten">
        <h3 class="pb-3 mb-5 border-bottom">
            KONTEN
        </h3>
        <p>
            ISI KONTEN
        </p>
    </div>
    <!-- batas contoh konten -->
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