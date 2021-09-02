<?= $this->extend('main/headerfooter') ?>
<?= $this->section('konten') ?>

<!-- judul konten -->
<div class="container-fluid judulkonten">
    <div class="container-xl">
        <h1><?=$judul?></h1>
    </div>
</div>
<!-- batas judul konten -->

<!-- konten -->
<div class="col-md-4 center">
    <label for="surat ">Pilih layanan surat</label>
    <select class="custom-select custom-select-;g mb-3" id="selectSurat" onchange="myFunction()">
      <option selected value="0">Layanan Surat</option>
      <option value="1">Surat Ijin Keramaian</option>
      <option value="2">Surat Keterangan Kehilangan</option>
      <option value="3">Surat Keterangan Tidak Mampu</option>
    </select>
</div>

<form class="col-md-4" action="" id="form_surat"></form>

<p id="boundary">Just some boundary to make a form</p>
<!-- batas konten -->

<!-- script -->
<script>
    function myFunction() {

        var sel = document.getElementById("selectSurat");
        var val = sel.value;
        var target = document.getElementById("form_surat");

        switch (val) {

            case "0":
                target.innerHTML = '';
                break;

            case "1":
                target.innerHTML = 
                '<div class="form-group">' +
                    '<label for="nik_form">Nomor Induk Kependudukan</label>' +
                    '<input type="text" class="form-control" id="nik_form"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="date_form">Tanggal pelaksanaan acara</label>' +
                    '<input type="date" class="form-control" id="date_form"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="time_form">Waktu pelaksanaan acara</label>' +
                    '<input type="time" class="form-control" id="time_form"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="hajat_form">Kepentingan hajat</label>' +
                    '<input type="text" class="form-control" id="hajat_form"></input>' +
                '</div>' +
                '<div class="form-group">' +
                    '<label for="hiburan_form">Hiburan yang diadakan</label>' +
                    '<input type="text" class="form-control" id="hiburan_form"></input>' +
                '</div>' + 
                '<button type="submit" class="btn btn-primary mb-2">Kirim</button>';
                break;
        
            default:
                break;
        }
    }
</script>
<!-- batas script -->

<?= $this->endSection() ?>